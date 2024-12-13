<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChildInformation;
use App\Models\CaregiverInformation;
use App\Models\ChildAttachment;

class UserChildApplyController extends Controller
{
    //
    public function ChildApplyPage()
    {
        return view('child_development_center.apply_form.form.users_form');
    }

    public function ChildApplyFormCreate(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'ethnicity' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'birthday' => 'required|date',
            'age' => 'required|integer|min:0',
            'age_months' => 'required|integer|min:0',
            'citizen_id' => 'required|string|max:20',
            'age_since_date' => 'required|date',
            'regis_house_number' => 'required|string|max:255',
            'regis_village' => 'required|string|max:255',
            'regis_road' => 'required|string|max:255',
            'regis_subdistrict' => 'required|string|max:255',
            'regis_district' => 'required|string|max:255',
            'regis_province' => 'required|string|max:255',
            'current_house_number' => 'required|string|max:255',
            'current_village' => 'required|string|max:255',
            'current_road' => 'required|string|max:255',
            'current_subdistrict' => 'required|string|max:255',
            'current_district' => 'required|string|max:255',
            'current_province' => 'required|string|max:255',
            'current_phone_number' => 'required|string|max:20',
            'number_of_siblings' => 'required|integer|min:0',
            'congenital_disease' => 'required|string|max:255',
            'blood_group' => 'required|string|max:10',

            // Validation Rules for Caregiver Information
            'father_name' => 'required|string|max:255',
            'edu_qual_father' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'edu_qual_mother' => 'required|string|max:255',
            'care_option' => 'required|string|max:255',
            'care_option_other' => 'nullable|string|max:255',
            'caretaker_income' => 'required|string|max:255',
            'applicants_name' => 'required|string|max:255',
            'applicants_relevant' => 'required|string|max:255',
            'child_carrier_name' => 'required|string|max:255',
            'child_carrier_relevant' => 'required|string|max:255',
            'child_carrier_phone' => 'required|string|max:20',
            'father_occupation' => 'required|string|max:255',
            'mother_occupation' => 'required|string|max:255',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd($request);

        // Prepare data for insertion
        $ChildInformation = ChildInformation::create([
            'users_id' => auth()->id(),
            'status' => '1', // Default status value
            'admin_name_verifier' => null,
            'full_name' => $request->full_name,
            'ethnicity' => $request->ethnicity,
            'nationality' => $request->nationality,
            'birthday' => $request->birthday,
            'age' => $request->age,
            'age_months' => $request->age_months,
            'citizen_id' => $request->citizen_id,
            'age_since_date' => $request->age_since_date,
            'regis_house_number' => $request->regis_house_number,
            'regis_village' => $request->regis_village,
            'regis_road' => $request->regis_road,
            'regis_subdistrict' => $request->regis_subdistrict,
            'regis_district' => $request->regis_district,
            'regis_province' => $request->regis_province,
            'current_house_number' => $request->current_house_number,
            'current_village' => $request->current_village,
            'current_road' => $request->current_road,
            'current_subdistrict' => $request->current_subdistrict,
            'current_district' => $request->current_district,
            'current_province' => $request->current_province,
            'current_phone_number' => $request->current_phone_number,
            'number_of_siblings' => $request->number_of_siblings,
            'congenital_disease' => $request->congenital_disease,
            'blood_group' => $request->blood_group,
        ]);

        $caregiverInformation = CaregiverInformation::create([
            'child_information_id' => $ChildInformation->id,
            'father_name' => $request->father_name,
            'edu_qual_father' => $request->edu_qual_father,
            'mother_name' => $request->mother_name,
            'edu_qual_mother' => $request->edu_qual_mother,
            'care_option' => $request->care_option,
            'care_option_other' => $request->care_option == 'Other' ? $request->care_option_other : null,
            'caretaker_income' => $request->caretaker_income,
            'applicants_name' => $request->applicants_name,
            'applicants_relevant' => $request->applicants_relevant,
            'child_carrier_name' => $request->child_carrier_name,
            'child_carrier_relevant' => $request->child_carrier_relevant,
            'child_carrier_phone' => $request->child_carrier_phone,
            'father_occupation' => $request->father_occupation,
            'mother_occupation' => $request->mother_occupation
        ]);

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('attachments', $filename, 'public');

                ChildAttachment::create([
                    'child_information_id' => $ChildInformation->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Create!');
    }


}
