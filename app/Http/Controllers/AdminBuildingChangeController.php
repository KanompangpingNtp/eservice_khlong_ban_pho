<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuildingChange;
use App\Models\BuildingChangeFile;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\BuildingChangeReply;
use Illuminate\Support\Facades\Auth;

class AdminBuildingChangeController extends Controller
{
    //
    public function TableBuildingChangeAdminPages()
    {
        $forms = BuildingChange::with(['user', 'buildingChangeFiles', 'buildingChangeReplies'])->get();

        return view('admin.building_modification.table_building_modification', compact('forms'));
    }

    public function BuildingChangeAdminExportPDF($id)
    {
        $form = BuildingChange::find($id);

        $pdf = Pdf::loadView('admin.building_modification.export_pdf.export_pdf', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('คำร้องทะเบียนพาณิชย์' . $form->id . '.pdf');
    }

    public function BuildingChangeAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        BuildingChangeReply::create([
            'building_changes_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function BuildingChangeUpdateStatus($id)
    {
        $form = BuildingChange::findOrFail($id);

        $form->status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }
}
