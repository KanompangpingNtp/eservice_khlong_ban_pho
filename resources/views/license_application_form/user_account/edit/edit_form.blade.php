@extends('dashboard.layout.users.layout_users')
@section('title', 'แก้ไข คำขอรับใบอนุญาต')
@section('user_content')
    <h3 class="text-center">แก้ไข คำขอรับใบอนุญาต </h3>

    <form action="{{ route('TradeRegistryUserFormUpdate', $form->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Written At -->
        <div class="form-group">
            <label for="written_at">เขียนที่</label>
            <input type="text" name="written_at" id="written_at" class="form-control"
                value="{{ old('written_at', $form->written_at) }}">
        </div>

        <!-- Write The Date -->
        <div class="form-group">
            <label for="write_the_date">เขียนวันที่</label>
            <input type="date" name="write_the_date" id="write_the_date" class="form-control"
                value="{{ old('write_the_date', $form->write_the_date) }}">
        </div>

        <!-- Salutation -->
        <div class="form-group">
            <label for="salutation">คำนำหน้า</label>
            <input type="text" name="salutation" id="salutation" class="form-control"
                value="{{ old('salutation', $form->salutation) }}">
        </div>

        <!-- Full Name -->
        <div class="form-group">
            <label for="full_name">ข้าพเจ้า</label>
            <input type="text" name="full_name" id="full_name" class="form-control" required
                value="{{ old('full_name', $form->full_name) }}">
        </div>

        <!-- Age -->
        <div class="form-group">
            <label for="age">อายุ</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ old('age', $form->age) }}">
        </div>

        <div class="form-group">
            <label for="nationality">สัญชาติ</label>
            <input type="text" name="nationality" id="nationality" class="form-control"
                value="{{ old('age', $form->nationality) }}">
        </div>

        <!-- House Number -->
        <div class="form-group">
            <label for="house_number">อยู่บ้านเลขที่</label>
            <input type="text" name="house_number" id="house_number" class="form-control"
                value="{{ old('house_number', $form->house_number) }}">
        </div>

        <!-- Village -->
        <div class="form-group">
            <label for="village">หมู่ที่</label>
            <input type="text" name="village" id="village" class="form-control"
                value="{{ old('village', $form->village) }}">
        </div>

        <!-- Alley -->
        <div class="form-group">
            <label for="alley">ตรอก/ซอย</label>
            <input type="text" name="alley" id="alley" class="form-control"
                value="{{ old('alley', $form->alley) }}">
        </div>

        <!-- Road -->
        <div class="form-group">
            <label for="road">ถนน</label>
            <input type="text" name="road" id="road" class="form-control"
                value="{{ old('road', $form->road) }}">
        </div>

        <!-- Subdistrict -->
        <div class="form-group">
            <label for="subdistrict">แขวง/ตำบล</label>
            <input type="text" name="subdistrict" id="subdistrict" class="form-control"
                value="{{ old('subdistrict', $form->subdistrict) }}">
        </div>

        <!-- District -->
        <div class="form-group">
            <label for="district">เขต/อำเภอ</label>
            <input type="text" name="district" id="district" class="form-control"
                value="{{ old('district', $form->district) }}">
        </div>

        <!-- Province -->
        <div class="form-group">
            <label for="province">จังหวัด</label>
            <input type="text" name="province" id="province" class="form-control"
                value="{{ old('province', $form->province) }}">
        </div>

        <div class="form-group">
            <label for="phone_number">เบอร์โทรศัพท์</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control"
                value="{{ old('phone_number', $form->phone_number) }}">
        </div>

        <br>

        <!-- Food Distribution -->
        <div class="form-group">
            <label for="food_distribution">ขอยื่นคำขอรับใบอนุญาตประกอบกิจการ</label>
            <input type="checkbox" name="food_distribution" id="food_distribution" value="yes"
                {{ old('food_distribution', $form->food_distribution ?? '') == 'yes' ? 'checked' : '' }}>
            <input type="text" name="food_distribution_type" id="food_distribution_type" class="form-control"
                value="{{ old('food_distribution_type', $form->food_distribution_type) }}">
        </div>

        <!-- Food Distribution Area -->
        <div class="form-group">
            <label for="food_distribution_area">โดยมีพื้นที่ประกอบการ</label>
            <input type="text" name="food_distribution_area" id="food_distribution_area" class="form-control"
                value="{{ old('food_distribution_area', $form->food_distribution_area) }}">
        </div>

        <br>

        <!-- IT Dangerous -->
        <div class="form-group">
            <label for="it_dangerous">กิจการที่เป็นอันตรายต่อสุขภาพ ประเภท</label>
            <input type="checkbox" name="it_dangerous" id="it_dangerous" value="yes"
                {{ old('it_dangerous', $form->it_dangerous ?? '') == 'yes' ? 'checked' : '' }}>
            <input type="text" name="it_dangerous_type" id="it_dangerous_type" class="form-control"
                value="{{ old('it_dangerous_type', $form->it_dangerous_type) }}">
        </div>

        <!-- IT There Are Workers -->
        <div class="form-group">
            <label for="it_there_are_workers">มีคนงาน</label>
            <input type="number" name="it_there_are_workers" id="it_there_are_workers" class="form-control"
                value="{{ old('it_there_are_workers', $form->it_there_are_workers) }}">
        </div>

        <!-- IT Use Machinery Size -->
        <div class="form-group">
            <label for="it_use_machinery_size"> ใช้เครื่องจักรขนาด</label>
            <input type="text" name="it_use_machinery_size" id="it_use_machinery_size" class="form-control"
                value="{{ old('it_use_machinery_size', $form->it_use_machinery_size) }}">
        </div>

        <br>

        <!-- On Sale -->
        <div class="form-group">
            <label for="on_sale">กิจการตลาด ที่มีการจำาหน่าย</label>
            <input type="checkbox" name="on_sale" id="on_sale" value="yes"
                {{ old('on_sale', $form->on_sale ?? '') == 'yes' ? 'checked' : '' }}>
            <input type="text" name="on_sale_detail" id="on_sale_detail" class="form-control"
                value="{{ old('on_sale_detail', $form->on_sale_detail) }}">
        </div>

        <br>

        <!-- Public Health Products -->
        <div class="form-group">
            <label for="public_health_products"> กิจการจำหน่ายสินค้าในที่/ทางสาธารณสุข จำาหน่ายสินค้าประเภท</label>
            <input type="checkbox" name="public_health_products" id="public_health_products" value="yes"
                {{ old('public_health_products', $form->public_health_products ?? '') == 'yes' ? 'checked' : '' }}>

            <input type="text" name="public_health_products_detail" id="public_health_products_detail"
                class="form-control"
                value="{{ old('public_health_products_detail', $form->public_health_products_detail) }}">
        </div>

        <!-- Public Health Products Area -->
        <div class="form-group">
            <label for="public_health_products_area">ณ บริเวณ</label>
            <input type="text" name="public_health_products_area" id="public_health_products_area"
                class="form-control"
                value="{{ old('public_health_products_area', $form->public_health_products_area) }}">
        </div>

        <!-- Public Health Products Way -->
        <div class="form-group">
            <label for="public_health_products_way">โดยวิธีการ</label>
            <input type="text" name="public_health_products_way" id="public_health_products_way" class="form-control"
                value="{{ old('public_health_products_way', $form->public_health_products_way) }}">
        </div>

        <br>

        <!-- Collection Service Business -->
        <div class="form-group">
            <label for="collection_service_business">กิจการรับทำาการเก็บ ขนหรือกำาจัดสิ่งปฏิกูลมูลฝอยโดยทำาเป็นธุรกิจ
                ประเภท</label>
            <input type="checkbox" name="collection_service_business" id="collection_service_business" value="yes"
                {{ old('collection_service_business', $form->collection_service_business ?? '') == 'yes' ? 'checked' : '' }}>
        </div>

        <!-- Waste Collection -->
        <div class="form-group">
            <label for="waste_collection">เก็บขนสิ่งปฏิกูลโดยมีแหล่งกำาจัดที่</label>
            <input type="checkbox" name="waste_collection" id="waste_collection" value="yes">
            <input type="text" name="waste_collection_detail" id="waste_collection_detail" class="form-control"
                value="{{ old('waste_collection_detail', $form->waste_collection_detail) }}">
        </div>

        <!-- Collect and Dispose Waste -->
        <div class="form-group">
            <label for="collect_and_dispose_waste"> เก็บขนและกำจัดสิ่งปฏิกูล โดยมีระบบกำาจัดอยู่ที่</label>
            <input type="checkbox" name="collect_and_dispose_waste" id="collect_and_dispose_waste" value="yes"
                {{ old('collect_and_dispose_waste', $form->collect_and_dispose_waste ?? '') == 'yes' ? 'checked' : '' }}>
            <input type="text" name="collect_and_dispose_detail" id="collect_and_dispose_detail" class="form-control"
                value="{{ old('collect_and_dispose_detail', $form->collect_and_dispose_detail) }}">
        </div>

        <!-- Garbage Collection -->
        <div class="form-group">
            <label for="garbage_collection">เก็บขนมูลฝอย โดยมีแหล่งกำาจัดที่</label>
            <input type="checkbox" name="garbage_collection" id="garbage_collection" value="yes"
                {{ old('garbage_collection', $form->garbage_collection ?? '') == 'yes' ? 'checked' : '' }}>
            <input type="text" name="garbage_collection_detail" id="garbage_collection_detail" class="form-control"
                value="{{ old('garbage_collection_detail', $form->garbage_collection_detail) }}">
        </div>

        <!-- Collect and Dispose of Waste -->
        <div class="form-group">
            <label for="collect_and_dispose_of_waste">เก็บขนและกำาจัดมูลฝอย โดยมีแหล่งกำาจัดที่</label>
            <input type="checkbox" name="collect_and_dispose_of_waste" id="collect_and_dispose_of_waste" value="yes"
                {{ old('collect_and_dispose_of_waste', $form->collect_and_dispose_of_waste ?? '') == 'yes' ? 'checked' : '' }}>
            <input type="text" name="collect_and_dispose_of_waste_detail" id="collect_and_dispose_of_waste_detail"
                class="form-control"
                value="{{ old('collect_and_dispose_of_waste_detail', $form->collect_and_dispose_of_waste_detail) }}">
        </div>

        <!-- Local Officials -->
        <div class="form-group">
            <label for="local_officials">ต่อ ( เจ้าพนักงานท้องถิ่น )</label>
            <input type="text" name="local_officials" id="local_officials" class="form-control"
                value="{{ old('local_officials', $form->local_officials) }}">
        </div>

        <!-- Copy of ID Card -->
        <div class="form-group">
            <label for="copy_of_ID_card">สำเนาบัตรประจำาตัว</label>
            <input type="text" name="copy_of_ID_card" id="copy_of_ID_card" class="form-control"
                value="{{ old('copy_of_ID_card', $form->copy_of_ID_card) }}">
        </div>

        <!-- Evidence of Permission -->
        <div class="form-group">
            <label for="evidence_of_permission">หลักฐานการอนุญาตตามกฎหมายอื่นที่เกี่ยวข้อง คือ</label>
            <input type="text" name="evidence_of_permission" id="evidence_of_permission" class="form-control"
                value="{{ old('evidence_of_permission', $form->evidence_of_permission) }}">
        </div>

        <!-- Evidence of Permission Detail 1 -->
        <div class="form-group">
            <label for="evidence_of_permission_detail_1">3.1</label>
            <input type="text" name="evidence_of_permission_detail_1" id="evidence_of_permission_detail_1"
                class="form-control"
                value="{{ old('evidence_of_permission_detail_1', $form->evidence_of_permission_detail_1) }}">
        </div>

        <!-- Evidence of Permission Detail 2 -->
        <div class="form-group">
            <label for="evidence_of_permission_detail_2">3.2</label>
            <input type="text" name="evidence_of_permission_detail_2" id="evidence_of_permission_detail_2"
                class="form-control"
                value="{{ old('evidence_of_permission_detail_2', $form->evidence_of_permission_detail_2) }}">
        </div>

        <!-- Detail 1 -->
        <div class="form-group">
            <label for="detail_1">4</label>
            <input type="text" name="detail_1" id="detail_1" class="form-control"
                value="{{ old('detail_1', $form->detail_1) }}">
        </div>

        <!-- Detail 2 -->
        <div class="form-group">
            <label for="detail_2">5</label>
            <input type="text" name="detail_2" id="detail_2" class="form-control"
                value="{{ old('detail_2', $form->detail_2) }}">
        </div>

        <br>

        <div class="mb-3">
            <h3>ไฟล์แนบปัจจุบัน</h3>
            <div class="list-group">
                @foreach ($form->files as $attachment)
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
            <button type="submit" class="btn btn-primary w-100 py-1"><i class="fa-solid fa-file-arrow-up me-2"></i></i>
                ส่งฟอร์มข้อมูล</button>
        </div>
    </form>

    <script src="{{ asset('js/multipart_files.js') }}"></script>
@endsection
