<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrForm;
use App\Models\GrAttachment;

class UserGeneralRequestsController extends Controller
{
    //
    public function UsersFormPage()
    {
        return view('general_requests.form.users_form');
    }

    public function FormCreate(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'subject' => 'nullable|string|max:255',
            'salutation' => 'nullable|string|max:50',
            'name' => 'nullable|string|max:255',
            'age' => 'nullable|integer',
            'house_number' => 'nullable|string|max:50',
            'village' => 'nullable|string|max:100',
            'subdistrict' => 'nullable|string|max:100',
            'district' => 'nullable|string|max:100',
            'province' => 'nullable|string|max:100',
            'request_details' => 'nullable|string',
            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd($request);

        $grForm = GrForm::create([
            'users_id' => auth()->id(),
            'status' => 1,
            'date' => $request->date,
            'subject' => $request->subject,
            'salutation' => $request->salutation,
            'name' => $request->name,
            'age' => $request->age,
            'house_number' => $request->house_number,
            'village' => $request->village,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'request_details' => $request->request_details,
        ]);

               // บันทึกไฟล์แนบ
               if ($request->hasFile('attachments')) {
                foreach ($request->file('attachments') as $file) {
                    // สร้างชื่อไฟล์ที่ไม่ซ้ำกัน
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // เก็บไฟล์ใน public/storage/attachments
                    $path = $file->storeAs('attachments', $filename, 'public'); // ใช้ disk ที่ระบุเป็น 'public'

                    GrAttachment::create([
                        'gr_forms_id' => $grForm->id,
                        'file_path' => $path,
                        'file_type' => $file->getClientMimeType(),
                    ]);
                }
            }

        return redirect()->back()->with('success', 'Create!');
    }
}
