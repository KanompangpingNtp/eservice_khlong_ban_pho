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

        $pdf = Pdf::loadView('admin.business_registration_documents.export_pdf.export_pdf', compact('form'))
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
