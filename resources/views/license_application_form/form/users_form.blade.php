@extends('dashboard.layout.users.layout_users')
@section('title', 'แบบคำขอรับใบอนุญาต')
@section('user_content')
<h3 class="text-center"> แบบคำขอรับใบอนุญาต </h3>

<form action="{{ route('LicenseFormCreate') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Written At -->
    <div class="row">
        <div class="col-md-3 mb-3">
            <label for="written_at">เขียนที่</label>
            <input type="text" name="written_at" id="written_at" class="form-control">
        </div>

        <!-- Write The Date -->
        <div class="col-md-3 mb-3">
            <label for="write_the_date">เขียนวันที่ <span class="text-danger">*</span></label></label>
            <input type="date" name="write_the_date" id="write_the_date" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <!-- Salutation -->
        <div class="col-md-3 mb-3">
            <label for="salutation">ชื่อนำหน้า <span class="text-danger">*</span></label></label>
            <select class="form-select" id="salutation" name="salutation" required>
                <option value="" selected disabled>เลือกคำนำหน้า</option>
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select>
        </div>

        <!-- Full Name -->
        <div class="col-md-3 mb-3">
            <label for="full_name">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
            <input type="text" name="full_name" id="full_name" class="form-control" required>
        </div>

        <!-- Age -->
        <div class="col-md-3 mb-3">
            <label for="age">อายุ (ปี) <span class="text-danger">*</span></label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="nationality">สัญชาติ <span class="text-danger">*</span></label>
            <input type="text" name="nationality" id="nationality" class="form-control" required>
        </div>

        <!-- House Number -->
        <div class="col-md-3 mb-3">
            <label for="house_number">อยู่บ้านเลขที่ <span class="text-danger">*</span></label>
            <input type="text" name="house_number" id="house_number" class="form-control" required>
        </div>

        <!-- Village -->
        <div class="col-md-3 mb-3">
            <label for="village">หมู่ที่ <span class="text-danger">*</span></label>
            <input type="text" name="village" id="village" class="form-control" required>
        </div>

        <!-- Alley -->
        <div class="col-md-3 mb-3">
            <label for="alley">ตรอก/ซอย <span class="text-danger">*</span></label>
            <input type="text" name="alley" id="alley" class="form-control" required>
        </div>

        <!-- Road -->
        <div class="col-md-3 mb-3">
            <label for="road">ถนน <span class="text-danger">*</span></label>
            <input type="text" name="road" id="road" class="form-control" required>
        </div>

        <!-- Subdistrict -->
        <div class="col-md-3 mb-3">
            <label for="subdistrict">แขวง/ตำบล <span class="text-danger">*</span></label>
            <input type="text" name="subdistrict" id="subdistrict" class="form-control" required>
        </div>

        <!-- District -->
        <div class="col-md-3 mb-3">
            <label for="district">เขต/อำเภอ <span class="text-danger">*</span></label>
            <input type="text" name="district" id="district" class="form-control" required>
        </div>

        <!-- Province -->
        <div class="col-md-3 mb-3">
            <label for="province">จังหวัด <span class="text-danger">*</span></label>
            <input type="text" name="province" id="province" class="form-control" required>
        </div>

        <div class="col-md-3 mb-3">
            <div class="form-group">
                <label for="phone_number">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" required>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-3 mb-3" style="margin-top: 35px;">
                <input type="checkbox" name="food_distribution" id="food_distribution" value="yes">
                <label for="food_distribution">สถานที่จัดจำหน่ายอาหารหรือสะสมอาหาร</label>
            </div>
            <div class="col-md-3 mb-3">
                <label for="food_distribution_type">ประเภท</label>
                <input type="text" name="food_distribution_type" id="food_distribution_type" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label for="food_distribution_area">โดยมีพื้นที่ประกอบการ</label>
                <div style="display: flex; align-items: center;">
                    <input type="text" name="food_distribution_area" id="food_distribution_area" class="form-control" style="flex: 1; margin-right: 5px;">
                    <span>ตารางเมตร</span>
                </div>
            </div>

        </div>

        <br>

        <div class="row">
            <div class="col-md-3 mb-3" style="margin-top: 35px;">
                <input type="checkbox" name="it_dangerous" id="it_dangerous" value="yes">
                <label for="it_dangerous">กิจการที่เป็นอันตรายต่อสุขภาพ</label>
            </div>
            <div class="col-md-3 mb-3">
                <label for="it_dangerous_type">ประเภท</label>
                <input type="text" name="it_dangerous_type" id="it_dangerous_type" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label for="it_there_are_workers">มีคนงาน (คน)</label>
                <input type="number" name="it_there_are_workers" id="it_there_are_workers" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label for="it_use_machinery_size">ใช้เครื่องจักรขนาด (แรงม้า)</label>
            <input type="text" name="it_use_machinery_size" id="it_use_machinery_size" class="form-control">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-3 mb-3" style="margin-top: 35px;">
                <input type="checkbox" name="on_sale" id="on_sale" value="yes">
                <label for="on_sale">กิจการตลาด ที่มีการจำหน่าย</label>
            </div>
            <div class="col-md-3 mb-3">
                <label for="it_dangerous_type">ที่มีการจำหน่าย</label>
                <input type="text" name="on_sale_detail" id="on_sale_detail" class="form-control">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-3 mb-3" style="margin-top: 35px;">
                <input type="checkbox" name="public_health_products" id="public_health_products" value="yes">
                <label for="public_health_products"> กิจการจำหน่ายสินค้าในที่/ทางสาธารณสุข</label>
            </div>
            <div class="col-md-3 mb-3">
                <label for="it_dangerous_type">จำหน่ายสินค้าประเภท</label>
                <input type="text" name="public_health_products_detail" id="public_health_products_detail" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label for="public_health_products_area">ณ บริเวณ</label>
                <input type="text" name="public_health_products_area" id="public_health_products_area" class="form-control">
            </div>

            <div class="col-md-3 mb-3">
                <label for="public_health_products_way">โดยวิธีการ</label>
                <input type="text" name="public_health_products_way" id="public_health_products_way" class="form-control">
            </div>
        </div>

        <br>

        <!-- Collection Service Business -->
        <div class="form-group">
            <input type="checkbox" name="collection_service_business" id="collection_service_business" value="yes">
            <label for="collection_service_business">กิจการรับทำการเก็บ ขนหรือกำจัดสิ่งปฏิกูลมูลฝอยโดยทำเป็นธุรกิจ
                ประเภท</label>
        </div>

        <div class="row ms-3">
            <div class="col-md-3 mb-3" style="margin-top: 10px;">
                <input type="checkbox" name="waste_collection" id="waste_collection" value="yes">
                <label for="waste_collection">เก็บขนสิ่งปฏิกูลโดยมีแหล่งกำจัดที่</label>
            </div>
            <div class="col-md-3 mb-3">
                <input type="text" name="waste_collection_detail" id="waste_collection_detail" class="form-control">
            </div>
        </div>

        <div class="row ms-3">
            <div class="col-md-3 mb-3" style="margin-top: 10px;">
                <input type="checkbox" name="collect_and_dispose_waste" id="collect_and_dispose_waste" value="yes">
                <label for="collect_and_dispose_waste"> เก็บขนและกำจัดสิ่งปฏิกูล โดยมีระบบกำจัดอยู่ที่</label>
            </div>
            <div class="col-md-3 mb-3">
                <input type="text" name="collect_and_dispose_detail" id="collect_and_dispose_detail" class="form-control">
            </div>
        </div>

        <div class="row ms-3">
            <div class="col-md-3 mb-3" style="margin-top: 10px;">
                <input type="checkbox" name="garbage_collection" id="garbage_collection" value="yes">
                <label for="garbage_collection">เก็บขนมูลฝอย โดยมีแหล่งกำจัดที่</label>
            </div>
            <div class="col-md-3 mb-3">
                <input type="text" name="garbage_collection_detail" id="garbage_collection_detail" class="form-control">
            </div>
        </div>

        <div class="row ms-3">
            <div class="col-md-3 mb-3" style="margin-top: 10px;">
                <input type="checkbox" name="collect_and_dispose_of_waste" id="collect_and_dispose_of_waste" value="yes">
                <label for="collect_and_dispose_of_waste">เก็บขนและกำจัดมูลฝอย โดยมีแหล่งกำจัดที่</label>
            </div>
            <div class="col-md-3 mb-3">
                <input type="text" name="collect_and_dispose_of_waste_detail" id="collect_and_dispose_of_waste_detail" class="form-control">
            </div>
        </div>

        <div class="col-md-10 mb-3">
            <label for="local_officials">ต่อ ( เจ้าพนักงานท้องถิ่น )</label>
            <div style="display: flex; align-items: center;">
                <input type="text" name="local_officials" id="local_officials" class="form-control" style="flex: 1; margin-right: 5px;">
                <span>พร้อมคำขอนี้ ข้าพเจ้าได้แนบหลักฐานและเอกสารมาด้วย ดังนี้คือ</span>
            </div>
        </div>



        <div>
            <div class="col-md-6 mb-3">
                <label for="copy_of_ID_card">1. สำเนาบัตรประจำตัว (ประชาชน/ข้าราชการ/พนักงานรัฐวิสาหกิจ)</label>
                <input type="file" name="attachments[]" id="copy_of_ID_card" class="form-control" accept=".jpg,.jpeg,.png,.pdf">
                <span class="text-danger error-message d-none">ไฟล์ต้องเป็น JPG, JPEG, PNG หรือ PDF เท่านั้น</span>
            </div>

            <div class="col-md-6 mb-3">
                <label for="copy_of_house_registration">2. สำเนาทะเบียนบ้าน</label>
                <input type="file" name="attachments[]" id="copy_of_house_registration" class="form-control" accept=".jpg,.jpeg,.png,.pdf">
                <span class="text-danger error-message d-none">ไฟล์ต้องเป็น JPG, JPEG, PNG หรือ PDF เท่านั้น</span>
            </div>

            <div class="col-md-6 mb-3">
                <label for="evidence_of_permission">3. หลักฐานการอนุญาตตามกฎหมายอื่นที่เกี่ยวข้อง คือ</label>
            </div>

            <div class="ms-lg-3">
                <div class="col-md-6 mb-3">
                    <label for="evidence_of_permission_detail_1">3.1 เอกสารเพิ่มเติม</label>
                    <input type="file" name="attachments[]" id="evidence_of_permission_detail_1" class="form-control" accept=".jpg,.jpeg,.png,.pdf">
                    <span class="text-danger error-message d-none">ไฟล์ต้องเป็น JPG, JPEG, PNG หรือ PDF เท่านั้น</span>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="evidence_of_permission_detail_2">3.2 เอกสารเพิ่มเติม</label>
                    <input type="file" name="attachments[]" id="evidence_of_permission_detail_2" class="form-control" accept=".jpg,.jpeg,.png,.pdf">
                    <span class="text-danger error-message d-none">ไฟล์ต้องเป็น JPG, JPEG, PNG หรือ PDF เท่านั้น</span>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="detail_1">4. แผนผังแสดงที่ตั้งสถานประกอบกิจการโดยสังเขป</label>
                <input type="file" name="attachments[]" id="detail_1" class="form-control" accept=".jpg,.jpeg,.png,.pdf">
                <span class="text-danger error-message d-none">ไฟล์ต้องเป็น JPG, JPEG, PNG หรือ PDF เท่านั้น</span>
            </div>
            <div class="text-center my-3">
                ข้าพเจ้าขอรับรองว่า ข้อความในแบบคำขอใบอนุญาตนี้เป็นความจริงทุกประการ
            </div>
        </div>



        <br>

        {{-- <div>
            <h3 for="attachments" class="form-label">แนบไฟล์เอกสาร (สามารถแนบไฟล์พร้อมกันได้มากกว่า 1ไฟล์)</h3>
            <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
            <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 10MB)</small>
            <!-- แสดงรายการไฟล์ที่แนบ -->
            <div id="file-list" class="mt-1">
                <div class="d-flex flex-wrap gap-3"></div>
            </div>
        </div> --}}

        <div class="text-center w-full mt-2">
            <button type="submit" class="btn btn-primary w-100 py-1"><i class="fa-solid fa-file-arrow-up me-2"></i></i>
                ส่งฟอร์มข้อมูล</button>
        </div>
</form>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf'];

        document.querySelectorAll('input[type="file"]').forEach(input => {
            const errorMessage = input.nextElementSibling; // ข้อความ error ถัดจาก input
            input.addEventListener('change', function () {
                const file = this.files[0];
                if (file) {
                    const fileExtension = file.name.split('.').pop().toLowerCase();
                    if (!allowedExtensions.includes(fileExtension)) {
                        errorMessage.classList.remove('d-none'); // แสดงข้อความ error
                        this.value = ''; // รีเซ็ตค่าของ input
                    } else {
                        errorMessage.classList.add('d-none'); // ซ่อนข้อความ error
                    }
                }
            });
        });
    });
</script>
<script src="{{ asset('js/multipart_files.js') }}"></script>

@endsection
