@extends('dashboard.layout.users.layout_users')
@section('user_content')

<h3 class="text-center"> คำร้องทะเบียนพาณิชย์ </h3>

<form action="{{ route('TradeRegistryFormCreate') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="receive_day" class="form-label">รับวันที่</label>
        <input type="date" name="receive_day" id="receive_day" class="form-control">
    </div>

    <div class="mb-3">
        <label for="written_at" class="form-label">เขียนที่</label>
        <input type="text" name="written_at" id="written_at" class="form-control">
    </div>

    <div class="mb-3">
        <label for="write_the_date" class="form-label">เขียนวันที่</label>
        <input type="text" name="write_the_date" id="write_the_date" class="form-control">
    </div>

    <div class="mb-3">
        <label for="salutation" class="form-label">ชื่อนำหน้า</label>
        <input type="text" name="salutation" id="salutation" class="form-control">
    </div>

    <div class="mb-3">
        <label for="full_name" class="form-label">ชื่อ-นามสกุล<span class="text-danger">*</span></label>
        <input type="text" name="full_name" id="full_name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="ethnicity" class="form-label">เชื้อชาติ</label>
        <input type="text" name="ethnicity" id="ethnicity" class="form-control">
    </div>

    <div class="mb-3">
        <label for="nationality" class="form-label">สัญชาติ</label>
        <input type="text" name="nationality" id="nationality" class="form-control">
    </div>

    <div class="mb-3">
        <label for="house_number" class="form-label">ที่อยู่เลขที่</label>
        <input type="text" name="house_number" id="house_number" class="form-control">
    </div>

    <div class="mb-3">
        <label for="village" class="form-label">หมู่</label>
        <input type="text" name="village" id="village" class="form-control">
    </div>

    <div class="mb-3">
        <label for="alley" class="form-label">ซอย</label>
        <input type="text" name="alley" id="alley" class="form-control">
    </div>

    <div class="mb-3">
        <label for="road" class="form-label">ถนน</label>
        <input type="text" name="road" id="road" class="form-control">
    </div>

    <div class="mb-3">
        <label for="subdistrict" class="form-label">ตำบล</label>
        <input type="text" name="subdistrict" id="subdistrict" class="form-control">
    </div>

    <div class="mb-3">
        <label for="district" class="form-label">อำเภอ</label>
        <input type="text" name="district" id="district" class="form-control">
    </div>

    <div class="mb-3">
        <label for="province" class="form-label">จังหวัด</label>
        <input type="text" name="province" id="province" class="form-control">
    </div>

    <div class="mb-3">
        <label for="name_used_to_call" class="form-label">ชื่อที่ใช้เรียกในการประกอบพาณิชย์</label>
        <input type="text" name="name_used_to_call" id="name_used_to_call" class="form-control">
    </div>

    <div class="mb-3">
        <label for="registered" class="form-label">ได้จดทะเบียนพาณิชย์คําขอที่</label>
        <input type="text" name="registered" id="registered" class="form-control">
    </div>

    <div class="mb-3">
        <label for="registration" class="form-label">ทะเบียนที่</label>
        <input type="text" name="registration" id="registration" class="form-control">
    </div>

    <div class="mb-3">
        <label for="detail" class="form-label">ขอยื่นคําร้องต่อพนักงานเจ้าหน้าที่ทะเบียนพาณิชย์ ดังต่อไปนี้</label>
        <textarea name="detail" id="detail" rows="4" class="form-control"></textarea>
    </div>

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
        <button type="submit" class="btn btn-primary w-100 py-1"><i
                class="fa-solid fa-file-arrow-up me-2"></i></i>
            ส่งฟอร์มข้อมูล</button>
    </div>
</form>

<script src="{{ asset('js/multipart_files.js') }}"></script>

@endsection
