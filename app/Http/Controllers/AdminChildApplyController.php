<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChildInformation;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ChildReply;
use Illuminate\Support\Facades\Auth;

class AdminChildApplyController extends Controller
{
    //
    public function TableChildApplyAdminPages()
    {
        $forms = ChildInformation::with(['user', 'attachments', 'replies'])->get();

        return view('admin.child_development_center.apply_form.table_apply_form', compact('forms'));
    }

    public function ChildApplyAdminExportPDF($id)
    {
        $form = ChildInformation::with('caregiverInformation')->find($id);

        $pdf = Pdf::loadView('admin.child_development_center.apply_form.export_pdf.export_pdf', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('แบบคำขอยืนยันสิทธิรับเงินเบี้ยยังชีพผู้สูงอาย' . $form->id . '.pdf');

    }

    public function ChildApplyAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        ChildReply::create([
            'child_information_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function ChildApplyUpdateStatus($id)
    {
        $form = ChildInformation::findOrFail($id);

        $form->status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }
}
