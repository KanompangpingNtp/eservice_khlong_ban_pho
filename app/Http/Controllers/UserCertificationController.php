<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuildBuilding;
use App\Models\BuildBuildingFile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\BuildBuildingReply;

class UserCertificationController extends Controller
{
    //
    public function UserCertificationFormPage ()
    {
        return view('construction_certification.form.users_form');
    }

    public function CertificationFormCreate(Request $request)
    {
        $request->validate([
            'write_the_date' => 'nullable|date',
            'subject' => 'nullable|string|max:255',
            'salutation' => 'nullable|string|max:50',
            'full_name' => 'nullable|string|max:255',
            'house_number' => 'nullable|string|max:50',
            'village' => 'nullable|string|max:50',
            'alley' => 'nullable|string|max:50',
            'road' => 'nullable|string|max:50',
            'subdistrict' => 'nullable|string|max:50',
            'district' => 'nullable|string|max:50',
            'province' => 'nullable|string|max:50',
            'have_intention' => 'nullable|string|max:255',
            'have_to' => 'nullable|string|max:255',
            'land_title_number' => 'nullable|string|max:50',
            'volume' => 'nullable|string|max:50',
            'page' => 'nullable|string|max:50',
            'village_area' => 'nullable|string|max:50',
            'subdistrict_area' => 'nullable|string|max:50',
            'district_area' => 'nullable|string|max:50',
            'province_area' => 'nullable|string|max:50',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        $buildBuilding = BuildBuilding::create([
            'users_id' => auth()->id(),
            'status' => 1,
            'write_the_date' => $request->write_the_date,
            'subject' => $request->subject,
            'salutation' => $request->salutation,
            'full_name' => $request->full_name,
            'house_number' => $request->house_number,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'have_intention' => $request->have_intention,
            'have_to' => $request->have_to,
            'land_title_number' => $request->land_title_number,
            'volume' => $request->volume,
            'page' => $request->page,
            'village_area' => $request->village_area,
            'subdistrict_area' => $request->subdistrict_area,
            'district_area' => $request->district_area,
            'province_area' => $request->province_area,
        ]);

           if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('attachments', $filename, 'public');

                BuildBuildingFile::create([
                    'build_building_id' => $buildBuilding->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Create Successfully!');
    }

    public function CertificationUserFormPage()
    {
        $user = User::with('userDetails')->find(Auth::id());

        return view('construction_certification.user_account.user_form', compact('user'));
    }

    public function TableCertificationUsersPages()
    {
        $forms = BuildBuilding::with(['user', 'files', 'replies'])
            ->where('users_id', Auth::id())
            ->get();

        return view('construction_certification.user_account.form_record.form_record', compact('forms'));
    }

    public function CertificationShowFormEdit($id)
    {
        $form = BuildBuilding::with('files')->findOrFail($id);

        return view('construction_certification.user_account.edit.edit_form', compact('form'));
    }

    public function CertificationUserFormUpdate(Request $request, $id)
    {
        $request->validate([
            'write_the_date' => 'nullable|date',
            'subject' => 'nullable|string|max:255',
            'salutation' => 'nullable|string|max:50',
            'full_name' => 'nullable|string|max:255',
            'house_number' => 'nullable|string|max:50',
            'village' => 'nullable|string|max:50',
            'alley' => 'nullable|string|max:50',
            'road' => 'nullable|string|max:50',
            'subdistrict' => 'nullable|string|max:50',
            'district' => 'nullable|string|max:50',
            'province' => 'nullable|string|max:50',
            'have_intention' => 'nullable|string|max:255',
            'have_to' => 'nullable|string|max:255',
            'land_title_number' => 'nullable|string|max:50',
            'volume' => 'nullable|string|max:50',
            'page' => 'nullable|string|max:50',
            'village_area' => 'nullable|string|max:50',
            'subdistrict_area' => 'nullable|string|max:50',
            'district_area' => 'nullable|string|max:50',
            'province_area' => 'nullable|string|max:50',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        $buildBuilding = BuildBuilding::findOrFail($id);

        $buildBuilding->update([
            'write_the_date' => $request->write_the_date,
            'subject' => $request->subject,
            'salutation' => $request->salutation,
            'full_name' => $request->full_name,
            'house_number' => $request->house_number,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'have_intention' => $request->have_intention,
            'have_to' => $request->have_to,
            'land_title_number' => $request->land_title_number,
            'volume' => $request->volume,
            'page' => $request->page,
            'village_area' => $request->village_area,
            'subdistrict_area' => $request->subdistrict_area,
            'district_area' => $request->district_area,
            'province_area' => $request->province_area,
        ]);

        if ($request->has('delete_attachments')) {
            foreach ($request->delete_attachments as $attachmentId) {
                $attachment = BuildBuildingFile::find($attachmentId);
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

                BuildBuildingFile::create([
                    'build_building_id' => $buildBuilding->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Updated successfully!');
    }

    public function CertificationUserExportPDF($id)
    {
        $form = BuildBuilding::find($id);

        $pdf = Pdf::loadView('construction_certification.user_account.export_pdf.export_pdf', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('คำขอรับรองสิ่งปลูกสร้างอาคาร' . $form->id . '.pdf');
    }

    public function CertificationUserReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        BuildBuildingReply::create([
            'build_building_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }
}
