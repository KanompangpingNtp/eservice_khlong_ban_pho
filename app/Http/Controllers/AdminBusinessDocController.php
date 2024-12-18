<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessDoc;
use App\Models\BusinessDocsReply;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class AdminBusinessDocController extends Controller
{
    //
    public function TableBusinessDocAdminPages()
    {
        $forms = BusinessDoc::with(['user', 'files', 'replies'])->get();

        return view('admin.business_registration_documents.table_business_registration_documents', compact('forms'));
    }

    public function BusinessDocAdminExportPDF($id)
    {
        $form = BusinessDoc::find($id);

        // แปลงข้อมูล types_of_business จาก JSON
        $typesOfBusiness = json_decode($form->types_of_business ?? '[]', true);

        // แปลงข้อมูล group_of_websites จาก JSON
        $selectedWebsites = old('group_of_websites', $form->group_of_websites ?? []);
        $selectedWebsites = is_array($selectedWebsites)
            ? $selectedWebsites
            : (is_string($selectedWebsites) ? json_decode($selectedWebsites, true) : []);

        // แปลงข้อมูล order_products_used จาก JSON
        $orderProductsUsed = json_decode($form->order_products_used ?? '[]', true);
        $selectedProducts = old('order_products_used', $orderProductsUsed);
        $selectedProducts = is_array($selectedProducts)
            ? $selectedProducts
            : (is_string($selectedProducts) ? json_decode($selectedProducts, true) : []);

        // แปลงข้อมูล payment_method จาก JSON
        $paymentMethods = json_decode($form->payment_method ?? '[]', true);
        $selectedPaymentMethods = old('payment_method', $paymentMethods);
        $selectedPaymentMethods = is_array($selectedPaymentMethods)
            ? $selectedPaymentMethods
            : (is_string($selectedPaymentMethods) ? json_decode($selectedPaymentMethods, true) : []);

        // แปลงข้อมูล shipping_method จาก JSON
        $shippingMethods = json_decode($form->shipping_method ?? '[]', true);
        $selectedShippingMethods = old('shipping_method', $shippingMethods);
        $selectedShippingMethods = is_array($selectedShippingMethods)
            ? $selectedShippingMethods
            : (is_string($selectedShippingMethods) ? json_decode($selectedShippingMethods, true) : []);

        $pdf = Pdf::loadView('admin.business_registration_documents.export_pdf.export_pdf', compact(
            'form',
            'typesOfBusiness',
            'selectedWebsites',
            'selectedProducts',
            'selectedPaymentMethods',
            'selectedShippingMethods'
        ))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('คำร้องทะเบียนพาณิชย์' . $form->id . '.pdf');
    }

    public function BusinessDocAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        BusinessDocsReply::create([
            'business_docs_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function BusinessDocUpdateStatus($id)
    {
        $form = BusinessDoc::findOrFail($id);

        $form->status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }
}
