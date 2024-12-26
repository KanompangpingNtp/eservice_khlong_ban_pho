<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EaTraders;
use App\Models\EaPeople;
use App\Models\EaPersonsOptions;
use App\Models\EaAttachments;
use App\Models\EaBankacOption;
use App\Models\User;
use App\Models\EaReplies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class UserElderlyAllowanceController extends Controller
{
    //
    public function ElderlyAllowanceFormPage()
    {
        return view('elderly_allowance.form.users_form');
    }

    public function ElderlyAllowanceFormCreate(Request $request)
    {

        // dd($request);
        // ตรวจสอบข้อมูลที่ได้รับจากฟอร์ม
        $request->validate([
            'written_at' => 'required|string',
            'written_date' => 'required|date',
            'salutation' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'birth_day' => 'nullable|date',
            'age' => 'nullable|integer',
            'nationality' => 'nullable|string',
            'house_number' => 'nullable|string',
            'village' => 'nullable|string',
            'alley' => 'nullable|string',
            'road' => 'nullable|string',
            'subdistrict' => 'nullable|string',
            'district' => 'nullable|string',
            'province' => 'nullable|string',
            'postal_code' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'citizen_id' => 'nullable|string',
            'marital_status' => 'required|in:single,married,widowed,divorced,separated,other',
            'monthly_income' => 'nullable|string',
            'occupation' => 'nullable|string',
            // 'trade_condition' => 'required|string',
            // 'elderly_name' => 'required|string',
            // 'trader_citizen_id' => 'required|string',
            // 'trader_address' => 'required|string',
            // 'trader_phone_number' => 'required|string',

            'welfare_type' => 'nullable|array',
            'welfare_type.*' => 'string|in:option1,option2,option3,option4',
            'welfare_other_types' => 'nullable|string|required_if:welfare_type.*,ย้ายภูมิลําเนาเข้ามาอยู่ใหม่',
            'request_for_money_type' => 'required|string|in:option1,option2,option3,option4',
            'document_type' => 'nullable|array',
            'document_type.*' => 'string|in:option1,option2,option3,option4,option5',

            'bank_option' => 'nullable|boolean',
            'bank_name' => 'nullable|string',
            'account_number' => 'nullable|string',
            'account_name' => 'nullable|string',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd($request);

        // บันทึกข้อมูลลงใน ea_people
        $eaPeople = EaPeople::create([
            'users_id' => auth()->id(),
            'status' => 1,
            'written_at' => $request->written_at,
            'written_date' => $request->written_date,
            'salutation' => $request->salutation,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birth_day' => $request->birth_day,
            'age' => $request->age,
            'nationality' => $request->nationality,
            'house_number' => $request->house_number,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'postal_code' => $request->postal_code,
            'phone_number' => $request->phone_number,
            'citizen_id' => $request->citizen_id,
            'marital_status' => $request->marital_status,
            'monthly_income' => $request->monthly_income,
            'occupation' => $request->occupation,
        ]);

        // $eaTraders = EaTraders::create([
        //     'ea_people_id' => $eaPeople->id,
        //     'trade_condition' => $request->trade_condition,
        //     'elderly_name' => $request->elderly_name,
        //     'citizen_id' => $request->trader_citizen_id,
        //     'address' => $request->trader_address,
        //     'phone_number' => $request->trader_phone_number,
        // ]);

        $eaPersonsOptions = EaPersonsOptions::create([
            'ea_people_id' => $eaPeople->id,
            'welfare_type' => json_encode($request->welfare_type),
            'welfare_other_types' => $request->welfare_other_types,
            'request_for_money_type' => $request->request_for_money_type,
            'document_type' => json_encode($request->document_type),
        ]);

        if ($request->has('bank_option') && $request->bank_option == 1 && $request->filled('bank_name') && $request->filled('account_number') && $request->filled('account_name')) {
            // Create the bank-related record
            $eaBankacOption = EaBankacOption::create([
                'ea_people_id' => $eaPeople->id,
                'bank_option' => 1,
                'bank_name' => $request->bank_name,
                'account_number' => $request->account_number,
                'account_name' => $request->account_name,
            ]);
        }


        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();

                $path = $file->storeAs('attachments', $filename, 'public');

                EaAttachments::create([
                    'ea_people_id' => $eaPeople->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Data has been saved successfully!');
    }

    public function ElderlyAllowanceUsersAccountFormPage()
    {
        $user = User::with('userDetails')->find(Auth::id());

        return view('elderly_allowance.user_account.user_form', compact('user'));
    }

    public function TableElderlyAllowanceUsersPages()
    {
        $forms = EaPeople::with(['user', 'attachments', 'replies'])->get();

        return view('elderly_allowance.user_account.form_record.form_record', compact('forms'));
    }

    public function ElderlyAllowanceFormUserUpdate(Request $request, $id)
    {
        $request->validate([
            'written_at' => 'required|string',
            'written_date' => 'required|date',
            'salutation' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'birth_day' => 'nullable|date',
            'age' => 'nullable|integer',
            'nationality' => 'nullable|string',
            'house_number' => 'nullable|string',
            'village' => 'nullable|string',
            'alley' => 'nullable|string',
            'road' => 'nullable|string',
            'subdistrict' => 'nullable|string',
            'district' => 'nullable|string',
            'province' => 'nullable|string',
            'postal_code' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'citizen_id' => 'nullable|string',
            'marital_status' => 'required|in:single,married,widowed,divorced,separated,other',
            'monthly_income' => 'nullable|string',
            'occupation' => 'nullable|string',
            // 'trade_condition' => 'required|string',
            // 'elderly_name' => 'required|string',
            // 'trader_citizen_id' => 'required|string',
            // 'trader_address' => 'required|string',
            // 'trader_phone_number' => 'required|string',

            'welfare_type' => 'nullable|array',
            'welfare_type.*' => 'string|in:option1,option2,option3,option4',
            'welfare_other_types' => 'nullable|string|required_if:welfare_type.*,ย้ายภูมิลําเนาเข้ามาอยู่ใหม่',
            'request_for_money_type' => 'required|string|in:option1,option2,option3,option4',
            'document_type' => 'nullable|array',
            'document_type.*' => 'string|in:option1,option2,option3,option4,option5',

            'bank_option' => 'nullable|boolean',
            'bank_name' => 'nullable|string',
            'account_number' => 'nullable|string',
            'account_name' => 'nullable|string',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd($request);

        $eaPeople = EaPeople::findOrFail($id);
        $eaPeople->update([
            'written_at' => $request->written_at,
            'written_date' => $request->written_date,
            'salutation' => $request->salutation,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birth_day' => $request->birth_day,
            'age' => $request->age,
            'nationality' => $request->nationality,
            'house_number' => $request->house_number,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'postal_code' => $request->postal_code,
            'phone_number' => $request->phone_number,
            'citizen_id' => $request->citizen_id,
            'marital_status' => $request->marital_status,
            'monthly_income' => $request->monthly_income,
            'occupation' => $request->occupation,
        ]);

        // $eaTraders = EaTraders::where('ea_people_id', $id)->firstOrFail();
        // $eaTraders->update([
        //     'trade_condition' => $request->trade_condition,
        //     'elderly_name' => $request->elderly_name,
        //     'citizen_id' => $request->trader_citizen_id,
        //     'address' => $request->trader_address,
        //     'phone_number' => $request->trader_phone_number,
        // ]);

        $eaPersonsOptions = EaPersonsOptions::where('ea_people_id', $id)->firstOrFail();
        $welfareOtherTypes = in_array('option4', $request->welfare_type ?? []) ? $request->welfare_other_types : null;
        $eaPersonsOptions->update([
            'welfare_type' => json_encode($request->welfare_type),
            'welfare_other_types' => $welfareOtherTypes,
            'request_for_money_type' => $request->request_for_money_type,
            'document_type' => json_encode($request->document_type),
        ]);

        if ($request->has('bank_option') && $request->bank_option == 1) {
            // กรณีที่ checkbox ถูกเลือก
            if ($request->filled('bank_name') && $request->filled('account_number') && $request->filled('account_name')) {
                $eaBankacOptione = EaBankacOption::where('ea_people_id', $id)->first();
                if ($eaBankacOptione) {
                    // ถ้ามีข้อมูลในฐานข้อมูล ให้ทำการอัปเดต
                    $eaBankacOptione->update([
                        'bank_option' => 1,
                        'bank_name' => $request->bank_name,
                        'account_number' => $request->account_number,
                        'account_name' => $request->account_name,
                    ]);
                } else {
                    // ถ้ายังไม่มีข้อมูลในฐานข้อมูล ให้สร้างข้อมูลใหม่
                    EaBankacOption::create([
                        'ea_people_id' => $eaPeople->id,
                        'bank_option' => 1,
                        'bank_name' => $request->bank_name,
                        'account_number' => $request->account_number,
                        'account_name' => $request->account_name,
                    ]);
                }
            }
        } else {
            // กรณีที่ checkbox ไม่ถูกเลือก (ไม่มี bank_option)
            $eaBankacOptione = EaBankacOption::where('ea_people_id', $id)->first();
            if ($eaBankacOptione) {
                // ลบข้อมูลถ้ามีอยู่ในฐานข้อมูล
                $eaBankacOptione->delete();
            }
        }

        if ($request->has('delete_attachments')) {
            foreach ($request->delete_attachments as $attachmentId) {
                $attachment = EaAttachments::find($attachmentId);
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

                EaAttachments::create([
                    'ea_people_id' => $eaPeople->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Updated successfully!');
    }

    public function ElderlyAllowanceUserShowEdit($id)
    {
        $form = EaPeople::with('traders', 'personsOptions', 'attachments', 'bankacoption')->findOrFail($id);

        if ($form->personsOptions->first() && $form->personsOptions->first()->welfare_type) {
            $welfareType = $form->personsOptions->first()->welfare_type;
            if (is_string($welfareType)) {
                $form->personsOptions->first()->welfare_type = json_decode($welfareType, true);
            }
        }

        return view('elderly_allowance.user_account.edit.edit_form', compact('form'));
    }

    public function ElderlyAllowanceUserReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        EaReplies::create([
            'ea_people_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function ElderlyAllowanceUserExportPDF($id)
    {
        $form = EaPeople::with('traders', 'personsOptions', 'bankacoption')->find($id);

        if ($form->personsOptions->first() && $form->personsOptions->first()->welfare_type) {
            $welfareType = $form->personsOptions->first()->welfare_type;
            if (is_string($welfareType)) {
                $form->personsOptions->first()->welfare_type = json_decode($welfareType, true);
            }
        }

        $documentType = $form->personsOptions->first()->document_type ?? [];
        if (is_string($documentType)) {
            $documentType = json_decode($documentType, true);
        }

        $pdf = Pdf::loadView('elderly_allowance.user_account.export_pdf.export_pdf', compact('form', 'documentType'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('แบบคำขอยืนยันสิทธิรับเงินเบี้ยยังชีพผู้สูงอายุ' . $form->id . '.pdf');
    }
}
