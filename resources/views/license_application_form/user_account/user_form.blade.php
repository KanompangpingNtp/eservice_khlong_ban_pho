@extends('dashboard.layout.users.layout_users')
@section('title', 'แบบคำขอรับใบอนุญาต')
@section('user_content')
    <h3 class="text-center"> แบบคำขอรับใบอนุญาต </h3>

    <form action="{{ route('LicenseFormCreate') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Written At -->
        <div class="form-group">
            <label for="written_at">เขียนที่</label>
            <input type="text" name="written_at" id="written_at" class="form-control">
        </div>

        <!-- Write The Date -->
        <div class="form-group">
            <label for="write_the_date">เขียนวันที่</label>
            <input type="date" name="write_the_date" id="write_the_date" class="form-control">
        </div>

        <!-- Salutation -->
        <div class="form-group">
            <label for="salutation">ชื่อนำหน้า</label>
            <select class="form-select" id="salutation" name="salutation">
                <option value="" selected disabled>เลือกคำนำหน้า</option>
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select>
        </div>

        <!-- Full Name -->
        <div class="form-group">
            <label for="full_name">ชื่อ-นามสกุล </label>
            <input type="text" name="full_name" id="full_name" class="form-control" required>
        </div>

        <!-- Age -->
        <div class="form-group">
            <label for="age">อายุ (ปี)</label>
            <input type="number" name="age" id="age" class="form-control">
        </div>

        <div class="form-group">
            <label for="nationality">สัญชาติ</label>
            <input type="text" name="nationality" id="nationality" class="form-control">
        </div>

        <!-- House Number -->
        <div class="form-group">
            <label for="house_number">อยู่บ้านเลขที่</label>
            <input type="text" name="house_number" id="house_number" class="form-control">
        </div>

        <!-- Village -->
        <div class="form-group">
            <label for="village">หมู่ที่</label>
            <input type="text" name="village" id="village" class="form-control">
        </div>

        <!-- Alley -->
        <div class="form-group">
            <label for="alley">ตรอก/ซอย</label>
            <input type="text" name="alley" id="alley" class="form-control">
        </div>

        <!-- Road -->
        <div class="form-group">
            <label for="road">ถนน</label>
            <input type="text" name="road" id="road" class="form-control">
        </div>

        <!-- Subdistrict -->
        <div class="form-group">
            <label for="subdistrict">แขวง/ตำบล</label>
            <input type="text" name="subdistrict" id="subdistrict" class="form-control">
        </div>

        <!-- District -->
        <div class="form-group">
            <label for="district">เขต/อำเภอ</label>
            <input type="text" name="district" id="district" class="form-control">
        </div>

        <!-- Province -->
        <div class="form-group">
            <label for="province">จังหวัด</label>
            <input type="text" name="province" id="province" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone_number">เบอร์โทรศัพท์</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control">
        </div>

        <br>

        <!-- Food Distribution -->
        <div class="form-group">
            <label for="food_distribution">ขอยื่นคำขอรับใบอนุญาตประกอบกิจการ</label>
            <input type="checkbox" name="food_distribution" id="food_distribution" value="yes">
            <input type="text" name="food_distribution_type" id="food_distribution_type" class="form-control">
        </div>

        <!-- Food Distribution Area -->
        <div class="form-group">
            <label for="food_distribution_area">โดยมีพื้นที่ประกอบการ</label>
            <input type="text" name="food_distribution_area" id="food_distribution_area" class="form-control">
        </div>

        <br>

        <!-- IT Dangerous -->
        <div class="form-group">
            <label for="it_dangerous">กิจการที่เป็นอันตรายต่อสุขภาพ ประเภท</label>
            <input type="checkbox" name="it_dangerous" id="it_dangerous" value="yes">
            <input type="text" name="it_dangerous_type" id="it_dangerous_type" class="form-control">
        </div>

        <!-- IT There Are Workers -->
        <div class="form-group">
            <label for="it_there_are_workers">มีคนงาน</label>
            <input type="number" name="it_there_are_workers" id="it_there_are_workers" class="form-control">
        </div>

        <!-- IT Use Machinery Size -->
        <div class="form-group">
            <label for="it_use_machinery_size"> ใช้เครื่องจักรขนาด</label>
            <input type="text" name="it_use_machinery_size" id="it_use_machinery_size" class="form-control">
        </div>

        <br>

        <!-- On Sale -->
        <div class="form-group">
            <label for="on_sale">กิจการตลาด ที่มีการจำาหน่าย</label>
            <input type="checkbox" name="on_sale" id="on_sale" value="yes">
            <input type="text" name="on_sale_detail" id="on_sale_detail" class="form-control">
        </div>

        <br>

        <!-- Public Health Products -->
        <div class="form-group">
            <label for="public_health_products"> กิจการจำหน่ายสินค้าในที่/ทางสาธารณสุข จำาหน่ายสินค้าประเภท</label>
            <input type="checkbox" name="public_health_products" id="public_health_products" value="yes">

            <input type="text" name="public_health_products_detail" id="public_health_products_detail"
                class="form-control">
        </div>

        <!-- Public Health Products Area -->
        <div class="form-group">
            <label for="public_health_products_area">ณ บริเวณ</label>
            <input type="text" name="public_health_products_area" id="public_health_products_area"
                class="form-control">
        </div>

        <!-- Public Health Products Way -->
        <div class="form-group">
            <label for="public_health_products_way">โดยวิธีการ</label>
            <input type="text" name="public_health_products_way" id="public_health_products_way"
                class="form-control">
        </div>

        <br>

        <!-- Collection Service Business -->
        <div class="form-group">
            <label for="collection_service_business">กิจการรับทำาการเก็บ ขนหรือกำาจัดสิ่งปฏิกูลมูลฝอยโดยทำาเป็นธุรกิจ
                ประเภท</label>
            <input type="checkbox" name="collection_service_business" id="collection_service_business" value="yes">
        </div>

        <!-- Waste Collection -->
        <div class="form-group">
            <label for="waste_collection">เก็บขนสิ่งปฏิกูลโดยมีแหล่งกำาจัดที่</label>
            <input type="checkbox" name="waste_collection" id="waste_collection" value="yes">
            <input type="text" name="waste_collection_detail" id="waste_collection_detail" class="form-control">
        </div>

        <!-- Collect and Dispose Waste -->
        <div class="form-group">
            <label for="collect_and_dispose_waste"> เก็บขนและกำจัดสิ่งปฏิกูล โดยมีระบบกำาจัดอยู่ที่</label>
            <input type="checkbox" name="collect_and_dispose_waste" id="collect_and_dispose_waste" value="yes">
            <input type="text" name="collect_and_dispose_detail" id="collect_and_dispose_detail"
                class="form-control">
        </div>

        <!-- Garbage Collection -->
        <div class="form-group">
            <label for="garbage_collection">เก็บขนมูลฝอย โดยมีแหล่งกำาจัดที่</label>
            <input type="checkbox" name="garbage_collection" id="garbage_collection" value="yes">
            <input type="text" name="garbage_collection_detail" id="garbage_collection_detail" class="form-control">
        </div>

        <!-- Collect and Dispose of Waste -->
        <div class="form-group">
            <label for="collect_and_dispose_of_waste">เก็บขนและกำาจัดมูลฝอย โดยมีแหล่งกำาจัดที่</label>
            <input type="checkbox" name="collect_and_dispose_of_waste" id="collect_and_dispose_of_waste" value="yes">
            <input type="text" name="collect_and_dispose_of_waste_detail" id="collect_and_dispose_of_waste_detail"
                class="form-control">
        </div>

        <!-- Local Officials -->
        <div class="form-group">
            <label for="local_officials">ต่อ ( เจ้าพนักงานท้องถิ่น )</label>
            <input type="text" name="local_officials" id="local_officials" class="form-control">
        </div>

        <!-- Copy of ID Card -->
        <div class="form-group">
            <label for="copy_of_ID_card">สำเนาบัตรประจำาตัว</label>
            <input type="text" name="copy_of_ID_card" id="copy_of_ID_card" class="form-control">
        </div>

        <!-- Evidence of Permission -->
        <div class="form-group">
            <label for="evidence_of_permission">หลักฐานการอนุญาตตามกฎหมายอื่นที่เกี่ยวข้อง คือ</label>
            <input type="text" name="evidence_of_permission" id="evidence_of_permission" class="form-control">
        </div>

        <!-- Evidence of Permission Detail 1 -->
        <div class="form-group">
            <label for="evidence_of_permission_detail_1">3.1</label>
            <input type="text" name="evidence_of_permission_detail_1" id="evidence_of_permission_detail_1"
                class="form-control">
        </div>

        <!-- Evidence of Permission Detail 2 -->
        <div class="form-group">
            <label for="evidence_of_permission_detail_2">3.2</label>
            <input type="text" name="evidence_of_permission_detail_2" id="evidence_of_permission_detail_2"
                class="form-control">
        </div>

        <!-- Detail 1 -->
        <div class="form-group">
            <label for="detail_1">4</label>
            <input type="text" name="detail_1" id="detail_1" class="form-control">
        </div>

        <!-- Detail 2 -->
        <div class="form-group">
            <label for="detail_2">5</label>
            <input type="text" name="detail_2" id="detail_2" class="form-control">
        </div>

        <br>

        <div>
            <h3 for="attachments" class="form-label">แนบไฟล์</h3>
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
