<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessDoc;
use App\Models\BusinessDocsFile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class UserBusinessDocController extends Controller
{
    //

    public function BusinessDocFormPage()
    {
        return view('business_registration_documents.form.users_form');
    }

    public function BusinessDocFormCreate(Request $request)
    {
        $request->validate([
            'business_operator_name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'website' => 'nullable|string',
            'group_of_websites' => 'nullable|array|max:22',
            'group_of_websites.*' => 'in:option1,option2,option3,option4,option5,option6,option7,option8,option9,option10,option11,option12,option13,option14,option15,option16,option17,option18,option19,option20,option21,option22',
            'types_of_business' => 'nullable|array',
            'types_of_business.*' => 'in:option1,option2,option3,option4,option5,option6',
            'order_products_used' => 'nullable|array',
            'order_products_used.*' => 'in:option1,option2,option3,option4,option5,option6',
            'payment_method' => 'nullable|array',
            'payment_method.*' => 'in:option1,option2,option3,option4,option5',
            'shipping_method' => 'nullable|array',
            'shipping_method.*' => 'in:option1,option2,option3,option4,option5,option6',
            'capital_amount' => 'nullable|string|max:255',
            'telephone_number' => 'required|string|max:255',
            'fax_number' => 'nullable|string|max:255',
            'e_mail' => 'required|string|max:255',
            'manager_name' => 'required|string|max:255',
            'registered_office' => 'required|string|max:255',

            'order_products_used_detail' => 'nullable|string|max:255',
            'payment_method_detail' => 'nullable|string|max:255',
            'shipping_method_detail' => 'nullable|string|max:255',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd($request);

        $businessDoc = BusinessDoc::create([
            'users_id' => auth()->id(),
            'status' => 1,
            'business_operator_name' => $request->business_operator_name,
            'registration_number' => $request->registration_number,
            'owner_name' => $request->owner_name,
            'company_name' => $request->company_name,
            'address' => $request->address,
            'website' => $request->website,
            'group_of_websites' => json_encode($request->group_of_websites),
            'types_of_business' => json_encode($request->types_of_business),
            'order_products_used' => json_encode($request->order_products_used),
            'payment_method' => json_encode($request->payment_method),
            'shipping_method' => json_encode($request->shipping_method ),
            'capital_amount' => $request->capital_amount,
            'telephone_number' => $request->telephone_number,
            'fax_number' => $request->fax_number,
            'e_mail' => $request->e_mail,
            'manager_name' => $request->manager_name,
            'registered_office' => $request->registered_office,
            'order_products_used_detail' => $request->order_products_used_detail,
            'payment_method_detail' => $request->payment_method_detail,
            'shipping_method_detail' => $request->shipping_method_detail,
        ]);

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();

                $path = $file->storeAs('attachments', $filename, 'public');

                BusinessDocsFile::create([
                    'business_docs_id' => $businessDoc->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Create Successfully!');
    }

    public function BusinessDocUsersAccountFormPage()
    {
        $user = User::with('userDetails')->find(Auth::id());

        return view('business_registration_documents.user_account.user_form', compact('user'));
    }

    public function TableBusinessDocUsersPages()
    {
        $forms = BusinessDoc::with(['user', 'files', 'replies'])->get();

        return view('business_registration_documents.user_account.form_record.form_record', compact('forms'));
    }

    public function BusinessDocUserExportPDF($id)
    {
        $form = BusinessDoc::find($id);

        $pdf = Pdf::loadView('business_registration_documents.user_account.export_pdf.export_pdf', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('คำร้องทะเบียนพาณิชย์' . $form->id . '.pdf');
    }

}
