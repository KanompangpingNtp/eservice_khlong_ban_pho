<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrForm;
use App\Models\GrAttachment;
use Illuminate\Support\Facades\Storage;

class AdminGeneralRequestsController extends Controller
{
    //
    public function TablePages()
    {
        $forms = GrForm::with(['user', 'grAttachments', 'grReplies'])->get();

        return view('admin.general_requests.table_general_requests', compact('forms'));
    }

    public function ShowFormEdit($id)
    {
        $form = GrForm::with('grAttachments')->findOrFail($id); // ดึงข้อมูลฟอร์มพร้อมไฟล์แนบ

        return view('admin.general_requests.edit.edit_form', compact('form')); // ส่งข้อมูลไปยัง view
    }

    public function FormEdit(Request $request, $id)
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
            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'delete_attachments' => 'nullable|array',
            'delete_attachments.*' => 'integer',
        ]);

        // ดึงข้อมูลฟอร์มที่ต้องการอัปเดต
        $grForm = GrForm::findOrFail($id);

        // อัปเดตข้อมูลในฟอร์ม
        $grForm->update([
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

        // ลบไฟล์แนบที่ผู้ใช้งานเลือก
        if ($request->has('delete_attachments')) {
            foreach ($request->delete_attachments as $attachmentId) {
                $attachment = GrAttachment::find($attachmentId);
                if ($attachment) {
                    // ลบไฟล์ออกจาก storage
                    Storage::disk('public')->delete($attachment->file_path);
                    $attachment->delete();
                }
            }
        }

        // เพิ่มไฟล์แนบใหม่
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                // สร้างชื่อไฟล์ที่ไม่ซ้ำกัน
                $filename = time() . '_' . $file->getClientOriginalName();

                // เก็บไฟล์ใน public/storage/attachments
                $path = $file->storeAs('attachments', $filename, 'public');

                // บันทึกข้อมูลไฟล์แนบ
                GrAttachment::create([
                    'gr_forms_id' => $grForm->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Updated successfully!');
    }
}
