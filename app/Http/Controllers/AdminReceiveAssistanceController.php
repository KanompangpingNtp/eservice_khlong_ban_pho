<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssistPerson;
use Illuminate\Support\Facades\Auth;
use App\Models\AssistReply;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminReceiveAssistanceController extends Controller
{
    //
    public function TableReceiveAssistanceAdminPages()
    {
        $forms = AssistPerson::with(['user', 'assistAttachments', 'assistReplies'])
        ->orderBy('created_at', 'desc')
        ->get();

        return view('admin.receive_assistance.table_receive_assistance', compact('forms'));
    }

    public function ReceiveAssistanceAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        AssistReply::create([
            'assist_people_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function ReceiveAssistanceAdminExportPDF($id)
    {
        $form = AssistPerson::with('assistImpartings')->find($id);

        if ($form && $form->assistImpartings->first() && $form->assistImpartings->first()->accommodation) {
            $accommodation = $form->assistImpartings->first()->accommodation;
            if (is_string($accommodation)) {
                $form->assistImpartings->first()->accommodation = json_decode($accommodation, true);
            }
        }

        $pdf = Pdf::loadView('admin.receive_assistance.export_pdf.export_pdf', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('คำขอรับเงินสงเคราะห์' . $form->id . '.pdf');
    }

    public function ReceiveAssistanceUpdateStatus($id)
    {
        $form = AssistPerson::findOrFail($id);

        $form->status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }
}
