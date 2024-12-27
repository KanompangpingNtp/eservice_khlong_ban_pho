<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessDoc;
use App\Models\BusinessDocsFile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\BusinessDocsReply;

class UserBusinessDocController extends Controller
{
    //
    public function BusinessDocFormPage()
    {
        return view('business_registration_documents.form.users_form');
    }

    public function BusinessDocFormCreate(Request $request)
    {
        $request->validate([
            'business_operator_name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'website' => 'nullable|string',
            'group_of_websites' => 'nullable|array|max:22',
            'group_of_websites.*' => 'in:option1,option2,option3,option4,option5,option6,option7,option8,option9,option10,option11,option12,option13,option14,option15,option16,option17,option18,option19,option20,option21,option22',
            'types_of_business' => 'nullable|array',
            'types_of_business.*' => 'in:option1,option2,option3,option4,option5,option6',
            'order_products_used' => 'nullable|array',
            'order_products_used.*' => 'in:option1,option2,option3,option4,option5,option6',
            'payment_method' => 'nullable|array',
            'payment_method.*' => 'in:option1,option2,option3,option4,option5',
            'shipping_method' => 'nullable|array',
            'shipping_method.*' => 'in:option1,option2,option3,option4,option5,option6',
            'capital_amount' => 'nullable|string|max:255',
            'telephone_number' => 'required|string|max:255',
            'fax_number' => 'nullable|string|max:255',
            'e_mail' => 'required|string|max:255',
            'manager_name' => 'required|string|max:255',
            'registered_office' => 'required|string|max:255',

            'order_products_used_detail' => 'nullable|string|max:255',
            'payment_method_detail' => 'nullable|string|max:255',
            'shipping_method_detail' => 'nullable|string|max:255',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd($request);

        $businessDoc = BusinessDoc::create([
            'users_id' => auth()->id(),
            'status' => 1,
            'business_operator_name' => $request->business_operator_name,
            'registration_number' => $request->registration_number,
            'owner_name' => $request->owner_name,
            'company_name' => $request->company_name,
            'address' => $request->address,
            'website' => $request->website,
            'group_of_websites' => json_encode($request->group_of_websites),
            'types_of_business' => json_encode($request->types_of_business),
            'order_products_used' => json_encode($request->order_products_used),
            'payment_method' => json_encode($request->payment_method),
            'shipping_method' => json_encode($request->shipping_method),
            'capital_amount' => $request->capital_amount,
            'telephone_number' => $request->telephone_number,
            'fax_number' => $request->fax_number,
            'e_mail' => $request->e_mail,
            'manager_name' => $request->manager_name,
            'registered_office' => $request->registered_office,
            'order_products_used_detail' => $request->order_products_used_detail,
            'payment_method_detail' => $request->payment_method_detail,
            'shipping_method_detail' => $request->shipping_method_detail,
        ]);

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();

                $path = $file->storeAs('attachments', $filename, 'public');

                BusinessDocsFile::create([
                    'business_docs_id' => $businessDoc->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'ฟอร์มถูกส่งเรียบร้อยแล้ว');
    }

    public function BusinessDocUsersAccountFormPage()
    {
        $user = User::with('userDetails')->find(Auth::id());

        return view('business_registration_documents.user_account.user_form', compact('user'));
    }

    public function TableBusinessDocUsersPages()
    {
        $forms = BusinessDoc::with(['user', 'files', 'replies'])->get();

        return view('business_registration_documents.user_account.form_record.form_record', compact('forms'));
    }

    public function BusinessDocUserExportPDF($id)
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

        $pdf = Pdf::loadView('business_registration_documents.user_account.export_pdf.export_pdf', compact(
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

    public function BusinessDocUserReply(Request $request, $formId)
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

    public function BusinessDocShowFormEdit($id)
    {
        $form = BusinessDoc::with('files')->findOrFail($id);

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

        return view('business_registration_documents.user_account.edit.edit_form', compact(
            'form',
            'typesOfBusiness',
            'selectedWebsites',
            'selectedProducts',
            'selectedPaymentMethods',
            'selectedShippingMethods'
        ));
    }

    public function BusinessDocUserFormUpdate(Request $request, $id)
    {
        $request->validate([
            'business_operator_name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'website' => 'nullable|string',
            'group_of_websites' => 'nullable|array|max:22',
            'group_of_websites.*' => 'in:option1,option2,option3,option4,option5,option6,option7,option8,option9,option10,option11,option12,option13,option14,option15,option16,option17,option18,option19,option20,option21,option22',
            'types_of_business' => 'nullable|array',
            'types_of_business.*' => 'in:option1,option2,option3,option4,option5,option6',
            'order_products_used' => 'nullable|array',
            'order_products_used.*' => 'in:option1,option2,option3,option4,option5,option6',
            'payment_method' => 'nullable|array',
            'payment_method.*' => 'in:option1,option2,option3,option4,option5',
            'shipping_method' => 'nullable|array',
            'shipping_method.*' => 'in:option1,option2,option3,option4,option5,option6',
            'capital_amount' => 'nullable|string|max:255',
            'telephone_number' => 'required|string|max:255',
            'fax_number' => 'nullable|string|max:255',
            'e_mail' => 'required|string|max:255',
            'manager_name' => 'required|string|max:255',
            'registered_office' => 'required|string|max:255',

            'order_products_used_detail' => 'nullable|string|max:255',
            'payment_method_detail' => 'nullable|string|max:255',
            'shipping_method_detail' => 'nullable|string|max:255',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        $businessDoc = BusinessDoc::findOrFail($id);
        $businessDoc->update([
            'business_operator_name' => $request->business_operator_name,
            'registration_number' => $request->registration_number,
            'owner_name' => $request->owner_name,
            'company_name' => $request->company_name,
            'address' => $request->address,
            'website' => $request->website,
            'group_of_websites' => json_encode($request->group_of_websites),
            'types_of_business' => json_encode($request->types_of_business),
            'order_products_used' => json_encode($request->order_products_used),
            'payment_method' => json_encode($request->payment_method),
            'shipping_method' => json_encode($request->shipping_method),
            'capital_amount' => $request->capital_amount,
            'telephone_number' => $request->telephone_number,
            'fax_number' => $request->fax_number,
            'e_mail' => $request->e_mail,
            'manager_name' => $request->manager_name,
            'registered_office' => $request->registered_office,
            'order_products_used_detail' => $request->order_products_used_detail,
            'payment_method_detail' => $request->payment_method_detail,
            'shipping_method_detail' => $request->shipping_method_detail,
        ]);

        if ($request->has('delete_attachments')) {
            foreach ($request->delete_attachments as $attachmentId) {
                $attachment = BusinessDocsFile::find($attachmentId);
                if ($attachment) {
                    Storage::disk('public')->delete($attachment->file_path);
                    $attachment->delete();
                }
            }
        }

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();

                $path = $file->storeAs('attachments', $filename, 'public');

                BusinessDocsFile::create([
                    'business_docs_id' => $businessDoc->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Updated successfully!');
    }
}
