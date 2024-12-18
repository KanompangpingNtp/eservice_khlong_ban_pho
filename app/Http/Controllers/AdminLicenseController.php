<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BizHazLicense;
use App\Models\BizHazLicenseFile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\BizHazLicenseReply;

class AdminLicenseController extends Controller
{
    //
    public function TableLicenseAdminPages()
    {
        $forms = BizHazLicense::with(['user', 'files', 'replies'])->get();

        return view('admin.license_application_form.table_license_application_form', compact('forms'));
    }

    public function LicenseAdminExportPDF($id)
    {
        $form = BizHazLicense::find($id);

        $pdf = Pdf::loadView('admin.license_application_form.export_pdf.export_pdf', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('คำร้องทะเบียนพาณิชย์' . $form->id . '.pdf');
    }

    public function LicenseAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        BizHazLicenseReply::create([
            'biz_haz_licenses_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function LicenseUpdateStatus($id)
    {
        $form = BizHazLicense::findOrFail($id);

        $form->status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }
}
