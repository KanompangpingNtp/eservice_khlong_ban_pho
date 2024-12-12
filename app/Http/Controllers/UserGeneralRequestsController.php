<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrForm;
use App\Models\GrAttachment;
use App\Models\GrReply;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

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

               if ($request->hasFile('attachments')) {
                foreach ($request->file('attachments') as $file) {
                    $filename = time() . '_' . $file->getClientOriginalName();

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

    public function UsersAccountFormPage()
    {
        $user = User::with('userDetails')->find(Auth::id());

        return view('general_requests.account.user_form', compact('user'));
    }

    public function userRecordForm()
    {
        $forms = GrForm::with(['user', 'grReplies', 'grAttachments'])
            ->where('users_id', Auth::id())
            ->get();

        return view('general_requests.account.form_record.form_records', compact('forms'));
    }

    public function userReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        GrReply::create([
            'gr_forms_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function exportUserPDF($id)
    {
        $form = GrForm::find($id);

        $pdf = Pdf::loadView('general_requests.account.export_pdf.users_export_pdf', compact('form'))
                ->setPaper('A4', 'portrait');

        return $pdf->stream('แบบคำขอร้องทั่วไป' . $form->id . '.pdf');
    }

    public function userShowFormEdit($id)
    {
        $form = GrForm::with('grAttachments')->findOrFail($id);

        return view('general_requests.account.edit_form.edit_form', compact('form'));
    }

    public function updateUserForm(Request $request, $id)
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

        $grForm = GrForm::findOrFail($id);

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

        if ($request->has('delete_attachments')) {
            foreach ($request->delete_attachments as $attachmentId) {
                $attachment = GrAttachment::find($attachmentId);
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
