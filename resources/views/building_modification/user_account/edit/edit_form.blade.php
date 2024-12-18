@extends('dashboard.layout.users.layout_users')
@section('user_content')

<h3 class="text-center">แก้ไข คำขออนุญาตก่อสร้างอาคารดัดแปลงอาคารหรือรื้อถอนอาคาร </h3>

<form action="{{ route('BuildingChangeUserFormUpdate', $form->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label for="written_at"> เขียนที่</label>
        <input type="text" name="written_at" id="written_at" class="form-control"
        value="{{ old('written_at', $form->written_at) }}">
    </div>

    <br>

    <div>
        <label for="full_name"> ชื่อ</label>
        <input type="text" name="full_name" id="full_name" class="form-control"
        value="{{ old('full_name', $form->full_name) }}">
    </div>

    <div>
        <label for="is_an_individual">เป็นบุคคลธรรมดา</label>
        <input type="checkbox" name="is_an_individual" id="is_an_individual" value="yes"
        {{ old('is_an_individual', $form->is_an_individual ?? '') == 'yes' ? 'checked' : '' }}>
    </div>


    <div>
        <label for="house_number">อยู่ที่เลขท</label>
        <input type="text" name="house_number" id="house_number" class="form-control"
        value="{{ old('house_number', $form->house_number) }}">
    </div>

    <div>
        <label for="village">หมู่ที่</label>
        <input type="text" name="village" id="village" class="form-control"
        value="{{ old('village', $form->village) }}">
    </div>

    <div>
        <label for="alley">ตรอก/ซอย:</label>
        <input type="text" name="alley" id="alley" class="form-control"
        value="{{ old('alley', $form->alley) }}">
    </div>

    <div>
        <label for="road">ถนน:</label>
        <input type="text" name="road" id="road" class="form-control"
        value="{{ old('road', $form->road) }}">
    </div>

    <div>
        <label for="subdistrict">แขวง/ตำาบล:</label>
        <input type="text" name="subdistrict" id="subdistrict" class="form-control"
        value="{{ old('subdistrict', $form->subdistrict) }}">
    </div>

    <div>
        <label for="district">เขต/อำาเภอ:</label>
        <input type="text" name="district" id="district" class="form-control"
        value="{{ old('district', $form->district) }}">
    </div>

    <div>
        <label for="province">จังหวัด:</label>
        <input type="text" name="province" id="province" class="form-control"
        value="{{ old('province', $form->province) }}">
    </div>

    <div>
        <label for="option_detail">-</label>
        <input type="text" name="option_detail" id="option_detail" class="form-control"
        value="{{ old('option_detail', $form->option_detail) }}">
    </div>

    <div>
        <label for="registered">จดทะเบียนเมื่อ:</label>
        <input type="date" name="registered" id="registered" class="form-control"
        value="{{ old('registered', $form->registered) }}">
    </div>

    <div>
        <label for="registration_number">เลขทะเบียนr:</label>
        <input type="text" name="registration_number" id="registration_number" class="form-control"
        value="{{ old('registration_number', $form->registration_number) }}">
    </div>

    <div>
        <label for="office_located">สำานักงานตั้งอยู่เลขที่:</label>
        <input type="text" name="office_located" id="office_located" class="form-control"
        value="{{ old('office_located', $form->office_located) }}">
    </div>

    <div>
        <label for="office_village">หมู่ที่:</label>
        <input type="text" name="office_village" id="office_village" class="form-control"
        value="{{ old('office_village', $form->office_village) }}">
    </div>

    <div>
        <label for="office_alley">ตรอก/ซอย:</label>
        <input type="text" name="office_alley" id="office_alley" class="form-control"
        value="{{ old('office_alley', $form->office_alley) }}">
    </div>

    <div>
        <label for="office_road">ถนน:</label>
        <input type="text" name="office_road" id="office_road" class="form-control"
        value="{{ old('office_road', $form->office_road) }}">
    </div>

    <div>
        <label for="office_subdistrict">แขวง/ตำบล:</label>
        <input type="text" name="office_subdistrict" id="office_subdistrict" class="form-control"
        value="{{ old('office_subdistrict', $form->office_subdistrict) }}">
    </div>

    <div>
        <label for="office_district">เขต/อำเภอ:</label>
        <input type="text" name="office_district" id="office_district" class="form-control"
        value="{{ old('office_district', $form->office_district) }}">
    </div>

    <div>
        <label for="office_province">จังหวัด</label>
        <input type="text" name="office_province" id="office_province" class="form-control"
        value="{{ old('office_province', $form->office_province) }}">
    </div>

    <div>
        <label for="by_name">โดย:</label>
        <input type="text" name="by_name" id="by_name" class="form-control"
        value="{{ old('by_name', $form->by_name) }}">
    </div>

    <div>
        <label for="by_house_number"> อยู่บ้านเลขที่:</label>
        <input type="text" name="by_house_number" id="by_house_number" class="form-control"
        value="{{ old('by_house_number', $form->by_house_number) }}">
    </div>

    <div>
        <label for="by_village">หมู่ที่:</label>
        <input type="text" name="by_village" id="by_village" class="form-control"
        value="{{ old('by_village', $form->by_village) }}">
    </div>

    <div>
        <label for="by_alley">ตรอก/ซอย:</label>
        <input type="text" name="by_alley" id="by_alley" class="form-control"
        value="{{ old('by_alley', $form->by_alley) }}">
    </div>

    <div>
        <label for="by_road">ถนน:</label>
        <input type="text" name="by_road" id="by_road" class="form-control"
        value="{{ old('by_road', $form->by_road) }}">
    </div>

    <div>
        <label for="by_subdistrict">แขวง/ตำบล:</label>
        <input type="text" name="by_subdistrict" id="by_subdistrict" class="form-control"
        value="{{ old('by_subdistrict', $form->by_subdistrict) }}">
    </div>

    <div>
        <label for="by_district">เขต/อำเภอ:</label>
        <input type="text" name="by_district" id="by_district" class="form-control"
        value="{{ old('by_district', $form->by_district) }}">
    </div>

    <div>
        <label for="by_province">จังหวัด</label>
        <input type="text" name="by_province" id="by_province" class="form-control"
        value="{{ old('by_province', $form->by_province) }}">
    </div>

    <div>
        <label for="apply_for_license">ขอยื่นคำาขอรับใบอนุญาต:</label>
        <input type="text" name="apply_for_license" id="apply_for_license" class="form-control"
        value="{{ old('apply_for_license', $form->apply_for_license) }}">
    </div>

    <div>
        <label for="apply_house_number">ข้อที่ 1 ทำาการก่อสร้างอาคาร/ดัดแปลงอาคาร/รื้อถอนอาคาร ที่บ้านเลขที่</label>
        <input type="text" name="apply_house_number" id="apply_house_number" class="form-control"
        value="{{ old('apply_house_number', $form->apply_house_number) }}">
    </div>

    <div>
        <label for="apply_village">หมู่ที่</label>
        <input type="text" name="apply_village" id="apply_village" class="form-control"
        value="{{ old('apply_village', $form->apply_village) }}">
    </div>

    <div>
        <label for="apply_alley">ตรอก/ซอย:</label>
        <input type="text" name="apply_alley" id="apply_alley" class="form-control"
        value="{{ old('apply_alley', $form->apply_alley) }}">
    </div>

    <div>
        <label for="apply_road">ถนน:</label>
        <input type="text" name="apply_road" id="apply_road" class="form-control"
        value="{{ old('apply_road', $form->apply_road) }}">
    </div>

    <div>
        <label for="apply_subdistrict">แขวง/ตำบล:</label>
        <input type="text" name="apply_subdistrict" id="apply_subdistrict" class="form-control"
        value="{{ old('apply_subdistrict', $form->apply_subdistrict) }}">
    </div>

    <div>
        <label for="apply_district">เขต/อำเภอ:</label>
        <input type="text" name="apply_district" id="apply_district" class="form-control"
        value="{{ old('apply_district', $form->apply_district) }}">
    </div>

    <div>
        <label for="apply_province">จังหวัด:</label>
        <input type="text" name="apply_province" id="apply_province" class="form-control"
        value="{{ old('apply_province', $form->apply_province) }}">
    </div>

    <div>
        <label for="apply_by">โดย:</label>
        <input type="text" name="apply_by" id="apply_by" class="form-control"
        value="{{ old('apply_by', $form->apply_by) }}">
    </div>

    <div>
        <label for="apply_number">เลขที่/น.ส.3 เลขที่ / ส.ค.1 เลขที่:</label>
        <input type="text" name="apply_number" id="apply_number" class="form-control"
        value="{{ old('apply_number', $form->apply_number) }}">
    </div>

    <div>
        <label for="it_the_land_of">เป็นที่ดินของ:</label>
        <input type="text" name="it_the_land_of" id="it_the_land_of" class="form-control"
        value="{{ old('it_the_land_of', $form->it_the_land_of) }}">
    </div>

    <div>
        <label>ข้อ 2 เป็นอาคาร</label>
        <label for="building_type_1">(1) ชนิด</label>
        <input type="text" name="building_type_1" id="building_type_1" class="form-control"
        value="{{ old('building_type_1', $form->building_type_1) }}">
    </div>

    <div>
        <label for="building_num_1">จำนวน</label>
        <input type="text" name="building_num_1" id="building_num_1" class="form-control"
        value="{{ old('building_num_1', $form->building_num_1) }}">
    </div>

    <div>
        <label for="building_to_1">เพื่อใช้เป็น</label>
        <input type="text" name="building_to_1" id="building_to_1" class="form-control"
        value="{{ old('building_to_1', $form->building_to_1) }}">
    </div>

    <div>
        <label for="building_Number_vehicles_1">โดยมีที่จอดรถ ที่กลับรถ และทางเข้าออกของรถ จำนวน</label>
        <input type="text" name="building_Number_vehicles_1" id="building_Number_vehicles_1" class="form-control"
        value="{{ old('building_Number_vehicles_1', $form->building_Number_vehicles_1) }}">
    </div>

    <div>
        <label for="building_type_2">(2) ชนิด</label>
        <input type="text" name="building_type_2" id="building_type_2" class="form-control"
        value="{{ old('building_type_2', $form->building_type_2) }}">
    </div>

    <div>
        <label for="building_num_2">จำนวน</label>
        <input type="text" name="building_num_2" id="building_num_2" class="form-control"
        value="{{ old('building_num_2', $form->building_num_2) }}">
    </div>

    <div>
        <label for="building_to_2">เพื่อใช้เป็น</label>
        <input type="text" name="building_to_2" id="building_to_2" class="form-control"
        value="{{ old('building_to_2', $form->building_to_2) }}">
    </div>

    <div>
        <label for="building_Number_vehicles_2">โดยมีที่จอดรถ ที่กลับรถ และทางเข้าออกของรถ จำนวน</label>
        <input type="text" name="building_Number_vehicles_2" id="building_Number_vehicles_2" class="form-control"
        value="{{ old('building_Number_vehicles_2', $form->building_Number_vehicles_2) }}">
    </div>

    <div>
        <label for="building_type_3"> (3) ชนิด</label>
        <input type="text" name="building_type_3" id="building_type_3" class="form-control"
        value="{{ old('building_type_3', $form->building_type_3) }}">
    </div>

    <div>
        <label for="building_num_3">จำานวน</label>
        <input type="text" name="building_num_3" id="building_num_3" class="form-control"
        value="{{ old('building_num_3', $form->building_num_3) }}">
    </div>

    <div>
        <label for="building_to_3">เพื่อใช้เป็น</label>
        <input type="text" name="building_to_3" id="building_to_3" class="form-control"
        value="{{ old('building_to_3', $form->building_to_3) }}">
    </div>

    <div>
        <label for="building_Number_vehicles_3">โดยมีที่จอดรถ ที่กลับรถ และทางเข้าออกของรถ จำานวน</label>
        <input type="text" name="building_Number_vehicles_3" id="building_Number_vehicles_3" class="form-control"
        value="{{ old('building_Number_vehicles_3', $form->building_Number_vehicles_3) }}">
    </div>

    <div>
        <label for="">ข้อ 3 มี</label>
        <label for="project_supervisor">เป็นผู้ควบคุมงาน</label>
        <input type="text" name="project_supervisor" id="project_supervisor" class="form-control"
        value="{{ old('project_supervisor', $form->project_supervisor) }}">

        <label for="designer_and_calculator">เป็นผู้ออกแบบและคำนวณ</label>
        <input type="text" name="designer_and_calculator" id="designer_and_calculator" class="form-control"
        value="{{ old('designer_and_calculator', $form->designer_and_calculator) }}">
    </div>

    <div>
        <label for="">ข้อ 4 มี</label>
        <label for="scheduled_for_completion">กำหนดแล้วเสร็จ</label>
        <input type="text" name="scheduled_for_completion" id="scheduled_for_completion" class="form-control"
        value="{{ old('scheduled_for_completion', $form->scheduled_for_completion) }}">
    </div>

    <div>
        <label for=""> ข้อ 5 พร้อมคำาขอนี้ข้าพเจ้าได้แนบเอกสารหลักฐานต่างๆ มาด้วยแล้วคือ</label><br>
        <label for="number_of_blueprints">(1) แผนผังบริเวณ แบบแปลน รายการประกอบแบบแปลน จำานวน</label>
        <input type="text" name="number_of_blueprints" id="number_of_blueprints" class="form-control"
        value="{{ old('number_of_blueprints', $form->number_of_blueprints) }}">
    </div>

    <div>
        <label for="blueprint_set">ชุดละ</label>
        <input type="text" name="blueprint_set" id="blueprint_set" class="form-control"
        value="{{ old('blueprint_set', $form->blueprint_set) }}">
    </div>

    <div>
        <label for="one_set_quantity"> (2) รายการคำานวณหนึ่งชุด จำานวน</label>
        <input type="text" name="one_set_quantity" id="one_set_quantity" class="form-control"
        value="{{ old('one_set_quantity', $form->one_set_quantity) }}">
    </div>

    <div>
        <label for="designer_calculates"> (6) หนังสือแสดงความยินยอมและรับรองของผู้ออกแบบและคำานวณ จำานวน</label>
        <input type="text" name="designer_calculates" id="designer_calculates" class="form-control"
        value="{{ old('designer_calculates', $form->designer_calculates) }}">
    </div>

    <div>
        <label for="control_architecture">พร้อมทั้งสำาเนาใบอนุญาตเป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุมหรือสถาปัตยกรรมควบคุม จำนวน</label>
        <input type="text" name="control_architecture" id="control_architecture" class="form-control"
        value="{{ old('control_architecture', $form->control_architecture) }}">
    </div>

    <div>
        <label for="number"> (7) สำาเนาหรือภาพถ่ายโฉนดที่ดิน  เลขที่/ น.ส.3 เลขที่/ ส.ค. 1 เลขที่ </label>
        <input type="text" name="number" id="number" class="form-control"
        value="{{ old('number', $form->number) }}">
    </div>

    <div>
        <label for="quantity">จำานวน</label>
        <input type="text" name="quantity" id="quantity" class="form-control"
        value="{{ old('quantity', $form->quantity) }}">
    </div>

    <div>
        <label for="number_of_land_owners">หรือเป็นหนังสือยินยอมของเจ้าของที่ดิน จำานวน</label>
        <input type="text" name="number_of_land_owners" id="number_of_land_owners" class="form-control"
        value="{{ old('number_of_land_owners', $form->number_of_land_owners) }}">
    </div>

    <div>
        <label for="controller"> (8) หนังสือแสดงความยินยอมของผู้ควบคุมงานตามข้อ 3 จำานวน </label>
        <input type="text" name="controller" id="controller" class="form-control"
        value="{{ old('controller', $form->controller) }}">
    </div>

    <div>
        <label for="controller_2"> (9) สำาเนาหรือภาพถ่ายใบอนุญาตเป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุมหรือวิชาชีพสถาปัตยกรรมควบคุม
            ของผู้ควบคุม จำานวน</label>
        <input type="text" name="controller_2" id="controller_2" class="form-control"
        value="{{ old('controller_2', $form->controller_2) }}">
    </div>

    <div>
        <label for="other_documents"> (10) เอกสาร อื่นๆ (ถ้ามี) </label>
        <input type="text" name="other_documents" id="other_documents" class="form-control"
        value="{{ old('other_documents', $form->other_documents) }}">
    </div>

    <br>

    <div class="mb-3">
        <h3>ไฟล์แนบปัจจุบัน</h3>
        <div class="list-group">
            @foreach ($form->buildingChangeFiles as $attachment)
                <div class="list-group-item d-flex flex-wrap justify-content-between align-items-center">
                    <a href="{{ asset('storage/' . $attachment->file_path) }}" target="_blank"
                        class="text-truncate me-3" style="max-width: calc(100% - 100px);">
                        {{ basename($attachment->file_path) }}
                    </a>
                    <div class="form-check">
                        <input type="checkbox" name="delete_attachments[]" value="{{ $attachment->id }}"
                            class="form-check-input" id="delete_attachments_{{ $attachment->id }}">
                        <label class="form-check-label" for="delete_attachments_{{ $attachment->id }}">
                            ลบไฟล์นี้
                        </label>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <hr>

    <div>
        <h3>เพิ่มแนบไฟล์</h3>
        <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
        <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 2MB)</small>
        <!-- แสดงรายการไฟล์ที่แนบ -->
        <div id="file-list" class="mt-1">
            <div class="d-flex flex-wrap gap-3"></div>
        </div>
    </div>

    <div class="text-center w-full border">
        <button type="submit" class="btn btn-primary w-100 py-1"><i
                class="fa-solid fa-file-arrow-up me-2"></i></i>
            ส่งฟอร์มข้อมูล</button>
    </div>
</form>



<script src="{{ asset('js/multipart_files.js') }}"></script>

@endsection
