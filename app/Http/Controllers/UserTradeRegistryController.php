<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TradeRegistry;
use App\Models\TradeRegistryFile;
use App\Models\TradeRegistryReply;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class UserTradeRegistryController extends Controller
{
    //
    public function TradeRegistryFormPage ()
    {
        return view('commercial_registration.form.users_form');
    }

    public function TradeRegistryFormCreate(Request $request)
    {
        $request->validate([
            'receive_day' => 'nullable|date',
            'written_at' => 'nullable|string|max:255',
            'write_the_date' => 'nullable|string|max:255',
            'salutation' => 'nullable|string|max:255',
            'full_name' => 'required|string|max:255',
            'ethnicity' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'house_number' => 'nullable|string|max:255',
            'village' => 'nullable|string|max:255',
            'alley' => 'nullable|string|max:255',
            'road' => 'nullable|string|max:255',
            'subdistrict' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'name_used_to_call' => 'nullable|string|max:255',
            'registered' => 'nullable|string|max:255',
            'registration' => 'nullable|string|max:255',
            'detail' => 'nullable|string',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd($request);

        $TradeRegistry = TradeRegistry::create([
            'users_id' => auth()->id(),
            'status' => 1,
            'receive_day' => $request->receive_day,
            'written_at' => $request->written_at,
            'write_the_date' => $request->write_the_date,
            'salutation' => $request->salutation,
            'full_name' => $request->full_name,
            'ethnicity' => $request->ethnicity,
            'nationality' => $request->nationality,
            'house_number' => $request->house_number,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'name_used_to_call' => $request->name_used_to_call,
            'registered' => $request->registered,
            'registration' => $request->registration,
            'detail' => $request->detail,
        ]);

         // Save file attachments if available
         if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('attachments', $filename, 'public');

                TradeRegistryFile::create([
                    'trade_registries_id' => $TradeRegistry->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'ฟอร์มถูกส่งเรียบร้อยแล้ว');
    }

    public function TradeRegistryUserFormPage()
    {
        $user = User::with('userDetails')->find(Auth::id());

        return view('commercial_registration.user_account.user_form', compact('user'));
    }

    public function TableTradeRegistryUsersPages()
    {
        $forms = TradeRegistry::with(['user', 'files', 'replies'])
            ->where('users_id', Auth::id())
            ->get();

        return view('commercial_registration.user_account.form_record.form_record', compact('forms'));
    }

    public function TradeRegistryShowFormEdit($id)
    {
        $form = TradeRegistry::with('files')->findOrFail($id);

        return view('commercial_registration.user_account.edit.edit_form', compact('form'));
    }

    public function TradeRegistryUserFormUpdate(Request $request, $id)
    {
        $request->validate([
            'receive_day' => 'nullable|date',
            'written_at' => 'nullable|string|max:255',
            'write_the_date' => 'nullable|string|max:255',
            'salutation' => 'nullable|string|max:255',
            'full_name' => 'required|string|max:255',
            'ethnicity' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'house_number' => 'nullable|string|max:255',
            'village' => 'nullable|string|max:255',
            'alley' => 'nullable|string|max:255',
            'road' => 'nullable|string|max:255',
            'subdistrict' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'name_used_to_call' => 'nullable|string|max:255',
            'registered' => 'nullable|string|max:255',
            'registration' => 'nullable|string|max:255',
            'detail' => 'nullable|string',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        $TradeRegistry = TradeRegistry::findOrFail($id);

        $TradeRegistry->update([
            'receive_day' => $request->receive_day,
            'written_at' => $request->written_at,
            'write_the_date' => $request->write_the_date,
            'salutation' => $request->salutation,
            'full_name' => $request->full_name,
            'ethnicity' => $request->ethnicity,
            'nationality' => $request->nationality,
            'house_number' => $request->house_number,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'name_used_to_call' => $request->name_used_to_call,
            'registered' => $request->registered,
            'registration' => $request->registration,
            'detail' => $request->detail,
        ]);

        if ($request->has('delete_attachments')) {
            foreach ($request->delete_attachments as $attachmentId) {
                $attachment = TradeRegistryFile::find($attachmentId);
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

                TradeRegistryFile::create([
                    'trade_registries_id' => $TradeRegistry->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Updated successfully!');
    }

    public function TradeRegistryUserExportPDF($id)
    {
        $form = TradeRegistry::find($id);

        $pdf = Pdf::loadView('commercial_registration.user_account.export_pdf.export_pdf', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('คำร้องทะเบียนพาณิชย์' . $form->id . '.pdf');

    }

    public function TradeRegistryUserReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        TradeRegistryReply::create([
            'trade_registries_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }
}
