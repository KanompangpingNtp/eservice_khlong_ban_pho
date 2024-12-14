<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssistPerson;

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
        ]);

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

        return redirect()->back()->with('success', 'Data has been saved successfully!');
    }
}
