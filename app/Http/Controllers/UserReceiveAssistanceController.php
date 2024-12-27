<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssistPerson;
use App\Models\AssistImparting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\AssistReply;
use App\Models\AssistAttachment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class UserReceiveAssistanceController extends Controller
{
    //
    public function ReceiveAssistanceFormPage()
    {
        return view('receive_assistance.form.users_form');
    }

    public function ReceiveAssistanceFormCreate(Request $request)
    {
        $request->validate([
            'written_at' => 'nullable|string|max:255',
            'write_the_date' => 'nullable|string|max:255',
            'learn' => 'nullable|string|max:255',
            'salutation' => 'nullable|string|max:255',
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'birth_day' => 'nullable|date',
            'age' => 'nullable|integer',
            'nationality' => 'nullable|string|max:255',
            'village' => 'nullable|string|max:255',
            'alley' => 'nullable|string|max:255',
            'road' => 'nullable|string|max:255',
            'subdistrict' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:10',
            'phone_number' => 'nullable|string|max:20',
            'citizen_id' => 'nullable|string|max:13',

            // Validation for AssistImpartings table
            'accommodation' => 'nullable|string|max:255',
            'accommodation_belongs_to' => 'nullable|string|max:255',
            'accommodation_relevant_as' => 'nullable|string|max:255',
            'away_from_home' => 'nullable|string|max:255',
            'away_from_home_option' => 'nullable|string|max:255',
            'away_from_home_option_dueto' => 'nullable|string|max:255',
            'away_from_community' => 'nullable|string|max:255',
            'away_from_community_option' => 'nullable|string|max:255',
            'away_from_community_option_dueto' => 'nullable|string|max:255',
            'stay_away_from_agency' => 'nullable|string|max:255',
            'stay_away_from_agency_option' => 'nullable|string|max:255',
            'stay_away_from_agency_option_dueto' => 'nullable|string|max:255',
            'residence' => 'nullable|string|max:255',
            'residence_stay_alone_dueto' => 'nullable|string|max:255',
            'residence_stay_alone_dueto_detail' => 'nullable|string|max:255',
            'residence_living_with' => 'nullable|string|max:255',
            'residence_living_with_detail' => 'nullable|string|max:255',
            'residence_living_with_quantity' => 'nullable|string|max:255',
            'residence_living_with_working' => 'nullable|string|max:255',
            'residence_living_with_total_income' => 'nullable|string|max:255',
            'residence_living_with_non_workers' => 'nullable|string|max:255',
            'total_income' => 'nullable|string|max:255',
            'source_of_income' => 'nullable|string|max:255',
            'used_for_expenses' => 'nullable|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'contact_address_number' => 'nullable|string|max:255',
            'contact_road' => 'nullable|string|max:255',
            'contact_alley' => 'nullable|string|max:255',
            'contact_village' => 'nullable|string|max:255',
            'contact_subdistrict' => 'nullable|string|max:255',
            'contact_district' => 'nullable|string|max:255',
            'contact_province' => 'nullable|string|max:255',
            'contact_postal_code' => 'nullable|string|max:10',
            'contact_telephone' => 'nullable|string|max:20',
            'contact_fax' => 'nullable|string|max:20',
            'contact_relevant_as' => 'nullable|string|max:255',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd($request);

        $AssistPerson = AssistPerson::create([
            'users_id' => auth()->id(),
            'status' => 1,
            'written_at' => $request->written_at,
            'write_the_date' => $request->write_the_date,
            'learn' => $request->learn,
            'salutation' => $request->salutation,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birth_day' => $request->birth_day,
            'age' => $request->age,
            'nationality' => $request->nationality,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'postal_code' => $request->postal_code,
            'phone_number' => $request->phone_number,
            'citizen_id' => $request->citizen_id,
        ]);

        AssistImparting::create([
            'assist_people_id' => $AssistPerson->id,
            'accommodation' => $request->accommodation,
            'accommodation_belongs_to' => $request->accommodation_belongs_to,
            'accommodation_relevant_as' => $request->accommodation_relevant_as,
            'away_from_home' => $request->away_from_home,
            'away_from_home_option' => $request->away_from_home_option,
            'away_from_home_option_dueto' => $request->away_from_home_option_dueto,
            'away_from_community' => $request->away_from_community,
            'away_from_community_option' => $request->away_from_community_option,
            'away_from_community_option_dueto' => $request->away_from_community_option_dueto,
            'stay_away_from_agency' => $request->stay_away_from_agency,
            'stay_away_from_agency_option' => $request->stay_away_from_agency_option,
            'stay_away_from_agency_option_dueto' => $request->stay_away_from_agency_option_dueto,
            'residence' => $request->residence,
            'residence_stay_alone_dueto' => $request->residence_stay_alone_dueto,
            'residence_stay_alone_dueto_detail' => $request->residence_stay_alone_dueto_detail,
            'residence_living_with' => $request->residence_living_with,
            'residence_living_with_detail' => $request->residence_living_with_detail,
            'residence_living_with_quantity' => $request->residence_living_with_quantity,
            'residence_living_with_working' => $request->residence_living_with_working,
            'residence_living_with_total_income' => $request->residence_living_with_total_income,
            'residence_living_with_non_workers' => $request->residence_living_with_non_workers,
            'total_income' => $request->total_income,
            'source_of_income' => $request->source_of_income,
            'used_for_expenses' => $request->used_for_expenses,
            'contact_person' => $request->contact_person,
            'contact_address_number' => $request->contact_address_number,
            'contact_road' => $request->contact_road,
            'contact_alley' => $request->contact_alley,
            'contact_village' => $request->contact_village,
            'contact_subdistrict' => $request->contact_subdistrict,
            'contact_district' => $request->contact_district,
            'contact_province' => $request->contact_province,
            'contact_postal_code' => $request->contact_postal_code,
            'contact_telephone' => $request->contact_telephone,
            'contact_fax' => $request->contact_fax,
            'contact_relevant_as' => $request->contact_relevant_as,
        ]);

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('attachments', $filename, 'public');

                AssistAttachment::create([
                    'assist_people_id' => $AssistPerson->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'ฟอร์มถูกส่งเรียบร้อยแล้ว');
    }

    public function ReceiveAssistanceUserFormPage()
    {
        $user = User::with('userDetails')->find(Auth::id());

        return view('receive_assistance.user_account.user_form', compact('user'));
    }

    public function TableReceiveAssistanceUsersPages()
    {
        $forms = AssistPerson::with(['user', 'assistAttachments', 'assistReplies'])
            ->where('users_id', Auth::id())
            ->get();

        return view('receive_assistance.user_account.form_record.form_record', compact('forms'));
    }

    public function ReceiveAssistanceUserReply(Request $request, $formId)
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

    public function ReceiveAssistanceUserExportPDF($id)
    {
        $form = AssistPerson::with('assistImpartings')->find($id);

        $pdf = Pdf::loadView('receive_assistance.user_account.export_pdf.export_pdf', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('คำขอรับเงินสงเคราะห์' . $form->id . '.pdf');
    }

    public function ReceiveAssistanceUsersShowFormEdit($id)
    {
        $form = AssistPerson::with('assistImpartings','assistAttachments')->findOrFail($id);

        return view('receive_assistance.user_account.edit.edit_form', compact('form'));
    }

    public function updateReceiveAssistance(Request $request, $childId)
    {
        $request->validate([
            'written_at' => 'nullable|string|max:255',
            'write_the_date' => 'nullable|string|max:255',
            'learn' => 'nullable|string|max:255',
            'salutation' => 'nullable|string|max:255',
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'birth_day' => 'nullable|date',
            'age' => 'nullable|integer',
            'nationality' => 'nullable|string|max:255',
            'village' => 'nullable|string|max:255',
            'alley' => 'nullable|string|max:255',
            'road' => 'nullable|string|max:255',
            'subdistrict' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:10',
            'phone_number' => 'nullable|string|max:20',
            'citizen_id' => 'nullable|string|max:13',

            // Validation for AssistImpartings table
            'accommodation' => 'nullable|string|max:255',
            'accommodation_belongs_to' => 'nullable|string|max:255',
            'accommodation_relevant_as' => 'nullable|string|max:255',
            'away_from_home' => 'nullable|string|max:255',
            'away_from_home_option' => 'nullable|string|max:255',
            'away_from_home_option_dueto' => 'nullable|string|max:255',
            'away_from_community' => 'nullable|string|max:255',
            'away_from_community_option' => 'nullable|string|max:255',
            'away_from_community_option_dueto' => 'nullable|string|max:255',
            'stay_away_from_agency' => 'nullable|string|max:255',
            'stay_away_from_agency_option' => 'nullable|string|max:255',
            'stay_away_from_agency_option_dueto' => 'nullable|string|max:255',
            'residence' => 'nullable|string|max:255',
            'residence_stay_alone_dueto' => 'nullable|string|max:255',
            'residence_stay_alone_dueto_detail' => 'nullable|string|max:255',
            'residence_living_with' => 'nullable|string|max:255',
            'residence_living_with_detail' => 'nullable|string|max:255',
            'residence_living_with_quantity' => 'nullable|string|max:255',
            'residence_living_with_working' => 'nullable|string|max:255',
            'residence_living_with_total_income' => 'nullable|string|max:255',
            'residence_living_with_non_workers' => 'nullable|string|max:255',
            'total_income' => 'nullable|string|max:255',
            'source_of_income' => 'nullable|string|max:255',
            'used_for_expenses' => 'nullable|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'contact_address_number' => 'nullable|string|max:255',
            'contact_road' => 'nullable|string|max:255',
            'contact_alley' => 'nullable|string|max:255',
            'contact_village' => 'nullable|string|max:255',
            'contact_subdistrict' => 'nullable|string|max:255',
            'contact_district' => 'nullable|string|max:255',
            'contact_province' => 'nullable|string|max:255',
            'contact_postal_code' => 'nullable|string|max:10',
            'contact_telephone' => 'nullable|string|max:20',
            'contact_fax' => 'nullable|string|max:20',
            'contact_relevant_as' => 'nullable|string|max:255',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        $AssistPerson = AssistPerson::findOrFail($childId);
        $AssistPerson->update([
            'written_at' => $request->written_at,
            'write_the_date' => $request->write_the_date,
            'learn' => $request->learn,
            'salutation' => $request->salutation,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birth_day' => $request->birth_day,
            'age' => $request->age,
            'nationality' => $request->nationality,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'postal_code' => $request->postal_code,
            'phone_number' => $request->phone_number,
            'citizen_id' => $request->citizen_id,
        ]);

        $AssistImparting = AssistImparting::where('assist_people_id', $AssistPerson->id)->firstOrFail();
        $AssistImparting->update([
            'accommodation' => $request->accommodation,
            'accommodation_belongs_to' => $request->accommodation_belongs_to,
            'accommodation_relevant_as' => $request->accommodation_relevant_as,
            'away_from_home' => $request->away_from_home,
            'away_from_home_option' => $request->away_from_home_option,
            'away_from_home_option_dueto' => $request->away_from_home_option_dueto,
            'away_from_community' => $request->away_from_community,
            'away_from_community_option' => $request->away_from_community_option,
            'away_from_community_option_dueto' => $request->away_from_community_option_dueto,
            'stay_away_from_agency' => $request->stay_away_from_agency,
            'stay_away_from_agency_option' => $request->stay_away_from_agency_option,
            'stay_away_from_agency_option_dueto' => $request->stay_away_from_agency_option_dueto,
            'residence' => $request->residence,
            'residence_stay_alone_dueto' => $request->residence_stay_alone_dueto,
            'residence_stay_alone_dueto_detail' => $request->residence_stay_alone_dueto_detail,
            'residence_living_with' => $request->residence_living_with,
            'residence_living_with_detail' => $request->residence_living_with_detail,
            'residence_living_with_quantity' => $request->residence_living_with_quantity,
            'residence_living_with_working' => $request->residence_living_with_working,
            'residence_living_with_total_income' => $request->residence_living_with_total_income,
            'residence_living_with_non_workers' => $request->residence_living_with_non_workers,
            'total_income' => $request->total_income,
            'source_of_income' => $request->source_of_income,
            'used_for_expenses' => $request->used_for_expenses,
            'contact_person' => $request->contact_person,
            'contact_address_number' => $request->contact_address_number,
            'contact_road' => $request->contact_road,
            'contact_alley' => $request->contact_alley,
            'contact_village' => $request->contact_village,
            'contact_subdistrict' => $request->contact_subdistrict,
            'contact_district' => $request->contact_district,
            'contact_province' => $request->contact_province,
            'contact_postal_code' => $request->contact_postal_code,
            'contact_telephone' => $request->contact_telephone,
            'contact_fax' => $request->contact_fax,
            'contact_relevant_as' => $request->contact_relevant_as,
        ]);

        if ($request->has('delete_attachments')) {
            foreach ($request->delete_attachments as $attachmentId) {
                $attachment = AssistAttachment::find($attachmentId);
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

                AssistAttachment::create([
                    'assist_people_id' => $AssistPerson->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Update!');
    }
}
