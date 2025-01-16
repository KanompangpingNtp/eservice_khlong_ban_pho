<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BizHazLicense;
use App\Models\BizHazLicenseFile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\BizHazLicenseReply;


class UserLicenseController extends Controller
{
    //
    public function UserLicenseFormPage()
    {
        return view('license_application_form.form.users_form');
    }

    public function LicenseFormCreate(Request $request)
    {
        $request->validate([
            'written_at' => 'nullable|string',
            'write_the_date' => 'nullable|date',
            'salutation' => 'nullable|string',
            'full_name' => 'required|string|max:255',
            'age' => 'nullable|integer|min:0',
            'nationality' => 'nullable|string',
            'house_number' => 'nullable|string|max:255',
            'village' => 'nullable|string|max:255',
            'alley' => 'nullable|string|max:255',
            'road' => 'nullable|string|max:255',
            'subdistrict' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'food_distribution' => 'nullable|string',
            'food_distribution_type' => 'nullable|string',
            'food_distribution_area' => 'nullable|string',
            'it_dangerous' => 'nullable|string',
            'it_dangerous_type' => 'nullable|string',
            'it_there_are_workers' => 'nullable|integer',
            'it_use_machinery_size' => 'nullable|string',
            'on_sale' => 'nullable|string',
            'on_sale_detail' => 'nullable|string',
            'public_health_products' => 'nullable|string',
            'public_health_products_detail' => 'nullable|string',
            'public_health_products_area' => 'nullable|string',
            'public_health_products_way' => 'nullable|string',
            'collection_service_business' => 'nullable|string',
            'waste_collection' => 'nullable|string',
            'waste_collection_detail' => 'nullable|string',
            'collect_and_dispose_waste' => 'nullable|string',
            'collect_and_dispose_detail' => 'nullable|string',
            'garbage_collection' => 'nullable|string',
            'garbage_collection_detail' => 'nullable|string',
            'collect_and_dispose_of_waste' => 'nullable|string',
            'collect_and_dispose_of_waste_detail' => 'nullable|string',
            'local_officials' => 'nullable|string',
            'copy_of_ID_card' => 'nullable|string',
            'evidence_of_permission' => 'nullable|string',
            'evidence_of_permission_detail_1' => 'nullable|string',
            'evidence_of_permission_detail_2' => 'nullable|string',
            'detail_1' => 'nullable|string',
            'detail_2' => 'nullable|string',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd($request);

        $bizHazLicense = BizHazLicense::create([
            'users_id' => auth()->id(),
            'status' => 1,
            'written_at' => $request->written_at,
            'write_the_date' => $request->write_the_date,
            'salutation' => $request->salutation,
            'full_name' => $request->full_name,
            'age' => $request->age,
            'nationality' => $request->nationality,
            'house_number' => $request->house_number,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'phone_number' => $request->phone_number,
            'food_distribution' => $request->food_distribution,
            'food_distribution_type' => $request->food_distribution_type,
            'food_distribution_area' => $request->food_distribution_area,
            'it_dangerous' => $request->it_dangerous,
            'it_dangerous_type' => $request->it_dangerous_type,
            'it_there_are_workers' => $request->it_there_are_workers,
            'it_use_machinery_size' => $request->it_use_machinery_size,
            'on_sale' => $request->on_sale,
            'on_sale_detail' => $request->on_sale_detail,
            'public_health_products' => $request->public_health_products,
            'public_health_products_detail' => $request->public_health_products_detail,
            'public_health_products_area' => $request->public_health_products_area,
            'public_health_products_way' => $request->public_health_products_way,
            'collection_service_business' => $request->collection_service_business,
            'waste_collection' => $request->waste_collection,
            'waste_collection_detail' => $request->waste_collection_detail,
            'collect_and_dispose_waste' => $request->collect_and_dispose_waste,
            'collect_and_dispose_detail' => $request->collect_and_dispose_detail,
            'garbage_collection' => $request->garbage_collection,
            'garbage_collection_detail' => $request->garbage_collection_detail,
            'collect_and_dispose_of_waste' => $request->collect_and_dispose_of_waste,
            'collect_and_dispose_of_waste_detail' => $request->collect_and_dispose_of_waste_detail,
            'local_officials' => $request->local_officials,
            'copy_of_ID_card' => $request->copy_of_ID_card,
            'evidence_of_permission' => $request->evidence_of_permission,
            'evidence_of_permission_detail_1' => $request->evidence_of_permission_detail_1,
            'evidence_of_permission_detail_2' => $request->evidence_of_permission_detail_2,
            'detail_1' => $request->detail_1,
            'detail_2' => $request->detail_2,
        ]);

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('attachments', $filename, 'public');

                BizHazLicenseFile::create([
                    'biz_haz_licenses_id' => $bizHazLicense->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'ฟอร์มถูกส่งเรียบร้อยแล้ว');
    }

    public function LicenseUserFormPage()
    {
        $user = User::with('userDetails')->find(Auth::id());

        return view('license_application_form.user_account.user_form', compact('user'));
    }

    public function TableLicenseUsersPages()
    {
        $forms = BizHazLicense::with(['user', 'files', 'replies'])
            ->where('users_id', Auth::id())
            ->get();

        return view('license_application_form.user_account.form_record.form_record', compact('forms'));
    }

    public function LicenseShowFormEdit($id)
    {
        $form = BizHazLicense::with('files')->findOrFail($id);

        return view('license_application_form.user_account.edit.edit_form', compact('form'));
    }

    public function LicenseUserExportPDF($id)
    {
        $form = BizHazLicense::find($id);

        $pdf = Pdf::loadView('license_application_form.user_account.export_pdf.export_pdf', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('คำร้องทะเบียนพาณิชย์' . $form->id . '.pdf');
    }

    public function LicenseUserReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        BizHazLicenseReply::create([
            'biz_haz_licenses_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function TradeRegistryUserFormUpdate(Request $request, $id)
    {
        $request->validate([
            'written_at' => 'nullable|string',
            'write_the_date' => 'nullable|date',
            'salutation' => 'nullable|string',
            'full_name' => 'required|string|max:255',
            'age' => 'nullable|integer|min:0',
            'nationality' => 'nullable|string',
            'house_number' => 'nullable|string|max:255',
            'village' => 'nullable|string|max:255',
            'alley' => 'nullable|string|max:255',
            'road' => 'nullable|string|max:255',
            'subdistrict' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'food_distribution' => 'nullable|string',
            'food_distribution_type' => 'nullable|string',
            'food_distribution_area' => 'nullable|string',
            'it_dangerous' => 'nullable|string',
            'it_dangerous_type' => 'nullable|string',
            'it_there_are_workers' => 'nullable|integer',
            'it_use_machinery_size' => 'nullable|string',
            'on_sale' => 'nullable|string',
            'on_sale_detail' => 'nullable|string',
            'public_health_products' => 'nullable|string',
            'public_health_products_detail' => 'nullable|string',
            'public_health_products_area' => 'nullable|string',
            'public_health_products_way' => 'nullable|string',
            'collection_service_business' => 'nullable|string',
            'waste_collection' => 'nullable|string',
            'waste_collection_detail' => 'nullable|string',
            'collect_and_dispose_waste' => 'nullable|string',
            'collect_and_dispose_detail' => 'nullable|string',
            'garbage_collection' => 'nullable|string',
            'garbage_collection_detail' => 'nullable|string',
            'collect_and_dispose_of_waste' => 'nullable|string',
            'collect_and_dispose_of_waste_detail' => 'nullable|string',
            'local_officials' => 'nullable|string',
            'copy_of_ID_card' => 'nullable|string',
            'evidence_of_permission' => 'nullable|string',
            'evidence_of_permission_detail_1' => 'nullable|string',
            'evidence_of_permission_detail_2' => 'nullable|string',
            'detail_1' => 'nullable|string',
            'detail_2' => 'nullable|string',

            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        $bizHazLicense = BizHazLicense::findOrFail($id);
        $bizHazLicense->update([
            'written_at' => $request->written_at,
            'write_the_date' => $request->write_the_date,
            'salutation' => $request->salutation,
            'full_name' => $request->full_name,
            'age' => $request->age,
            'nationality' => $request->nationality,
            'house_number' => $request->house_number,
            'village' => $request->village,
            'alley' => $request->alley,
            'road' => $request->road,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'province' => $request->province,
            'phone_number' => $request->phone_number,
            'food_distribution' => $request->food_distribution,
            'food_distribution_type' => $request->food_distribution_type,
            'food_distribution_area' => $request->food_distribution_area,
            'it_dangerous' => $request->it_dangerous,
            'it_dangerous_type' => $request->it_dangerous_type,
            'it_there_are_workers' => $request->it_there_are_workers,
            'it_use_machinery_size' => $request->it_use_machinery_size,
            'on_sale' => $request->on_sale,
            'on_sale_detail' => $request->on_sale_detail,
            'public_health_products' => $request->public_health_products,
            'public_health_products_detail' => $request->public_health_products_detail,
            'public_health_products_area' => $request->public_health_products_area,
            'public_health_products_way' => $request->public_health_products_way,
            'collection_service_business' => $request->collection_service_business,
            'waste_collection' => $request->waste_collection,
            'waste_collection_detail' => $request->waste_collection_detail,
            'collect_and_dispose_waste' => $request->collect_and_dispose_waste,
            'collect_and_dispose_detail' => $request->collect_and_dispose_detail,
            'garbage_collection' => $request->garbage_collection,
            'garbage_collection_detail' => $request->garbage_collection_detail,
            'collect_and_dispose_of_waste' => $request->collect_and_dispose_of_waste,
            'collect_and_dispose_of_waste_detail' => $request->collect_and_dispose_of_waste_detail,
            'local_officials' => $request->local_officials,
            'copy_of_ID_card' => $request->copy_of_ID_card,
            'evidence_of_permission' => $request->evidence_of_permission,
            'evidence_of_permission_detail_1' => $request->evidence_of_permission_detail_1,
            'evidence_of_permission_detail_2' => $request->evidence_of_permission_detail_2,
            'detail_1' => $request->detail_1,
            'detail_2' => $request->detail_2,
        ]);

        if ($request->has('delete_attachments')) {
            foreach ($request->delete_attachments as $attachmentId) {
                $attachment = BizHazLicenseFile::find($attachmentId);
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

                BizHazLicenseFile::create([
                    'biz_haz_licenses_id' => $bizHazLicense->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Updated successfully!');
    }
}
