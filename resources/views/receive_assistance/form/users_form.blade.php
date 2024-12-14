@extends('dashboard.layout.users.layout_users')
@section('user_content')

<h2 class="text-center"> แบบคำขอรับการสงเคราะห์ </h2>

<form action="{{ route('ReceiveAssistanceFormCreate') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="written_at" class="form-label">เขียนที่</label>
        <input type="text" class="form-control" id="written_at" name="written_at">
    </div>

    <div class="mb-3">
        <label for="write_the_date" class="form-label">เขียนวันที่</label>
        <input type="date" class="form-control" id="write_the_date" name="write_the_date">
    </div>

    <div class="mb-3">
        <label for="learn" class="form-label">เรียน</label>
        <input type="text" class="form-control" id="learn" name="learn">
    </div>

    <div class="mb-3">
        <label for="salutation" class="form-label">ชื่อนำหน้า</label>
        <input type="text" class="form-control" id="salutation" name="salutation">
    </div>

    <div class="mb-3">
        <label for="first_name" class="form-label">ชื่อ</label>
        <input type="text" class="form-control" id="first_name" name="first_name">
    </div>

    <div class="mb-3">
        <label for="last_name" class="form-label">นามสกุล</label>
        <input type="text" class="form-control" id="last_name" name="last_name">
    </div>

    <div class="mb-3">
        <label for="birth_day" class="form-label">วันเกิด</label>
        <input type="date" class="form-control" id="birth_day" name="birth_day">
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">อายุ</label>
        <input type="number" class="form-control" id="age" name="age">
    </div>

    <div class="mb-3">
        <label for="nationality" class="form-label">สัญชาติ</label>
        <input type="text" class="form-control" id="nationality" name="nationality">
    </div>

    <div class="mb-3">
        <label for="village" class="form-label">หมู่</label>
        <input type="text" class="form-control" id="village" name="village">
    </div>

    <div class="mb-3">
        <label for="alley" class="form-label">ซอย</label>
        <input type="text" class="form-control" id="alley" name="alley">
    </div>

    <div class="mb-3">
        <label for="road" class="form-label">ถนน</label>
        <input type="text" class="form-control" id="road" name="road">
    </div>

    <div class="mb-3">
        <label for="subdistrict" class="form-label">ตำบล</label>
        <input type="text" class="form-control" id="subdistrict" name="subdistrict">
    </div>

    <div class="mb-3">
        <label for="district" class="form-label">อำเภอ</label>
        <input type="text" class="form-control" id="district" name="district">
    </div>

    <div class="mb-3">
        <label for="province" class="form-label">จังหวัด</label>
        <input type="text" class="form-control" id="province" name="province">
    </div>

    <div class="mb-3">
        <label for="postal_code" class="form-label">รหัสไปรษณีย์</label>
        <input type="text" class="form-control" id="postal_code" name="postal_code">
    </div>

    <div class="mb-3">
        <label for="phone_number" class="form-label">หมายเลขโทรศัพท์</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number">
    </div>

    <div class="mb-3">
        <label for="citizen_id" class="form-label">เลขบัตรประชาชน</label>
        <input type="text" class="form-control" id="citizen_id" name="citizen_id">
    </div>

    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
</form>

@endsection
