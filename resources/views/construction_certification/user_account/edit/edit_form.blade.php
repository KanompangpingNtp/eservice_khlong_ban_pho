@extends('dashboard.layout.users.layout_users')
@section('title', 'แก้ไขคำขอรับรองสิ่งปลูกสร้างอาคาร')
@section('user_content')

    <h3 class="text-center mb-4">แก้ไขคำขอรับรองสิ่งปลูกสร้างอาคาร</h3>

    <form action="{{ route('CertificationUserFormUpdate', $form->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- ข้อมูลทั่วไป -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="write_the_date" class="form-label">วันที่เขียน</label>
                <input type="date" name="write_the_date" id="write_the_date" class="form-control"
                    value="{{ old('write_the_date', $form->write_the_date) }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="subject" class="form-label">เรื่อง</label>
                <input type="text" name="subject" id="subject" class="form-control" maxlength="255"
                    value="{{ old('subject', $form->subject) }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="salutation" class="form-label">คำนำหน้า</label>
                <input type="text" name="salutation" id="salutation" class="form-control" maxlength="50"
                    value="{{ old('salutation', $form->salutation) }}" required>
            </div>
            <div class="col-md-9 mb-3">
                <label for="full_name" class="form-label">ชื่อเต็ม</label>
                <input type="text" name="full_name" id="full_name" class="form-control" maxlength="255"
                    value="{{ old('full_name', $form->full_name) }}" required>
            </div>
        </div>

        <!-- ที่อยู่ -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="house_number" class="form-label">ตั้งบ้านเรือนอยู่เลขที่</label>
                <input type="text" name="house_number" id="house_number" class="form-control" maxlength="50"
                    value="{{ old('house_number', $form->house_number) }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="village" class="form-label">หมู่</label>
                <input type="text" name="village" id="village" class="form-control" maxlength="50"
                    value="{{ old('village', $form->village) }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="alley" class="form-label">ซอย</label>
                <input type="text" name="alley" id="alley" class="form-control" maxlength="50"
                    value="{{ old('alley', $form->alley) }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="road" class="form-label">ถนน</label>
                <input type="text" name="road" id="road" class="form-control" maxlength="50"
                    value="{{ old('road', $form->road) }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="subdistrict" class="form-label">ตำบล</label>
                <input type="text" name="subdistrict" id="subdistrict" class="form-control" maxlength="50"
                    value="{{ old('subdistrict', $form->subdistrict) }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="district" class="form-label">อำเภอ</label>
                <input type="text" name="district" id="district" class="form-control" maxlength="50"
                    value="{{ old('district', $form->district) }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="province" class="form-label">จังหวัด</label>
                <input type="text" name="province" id="province" class="form-control" maxlength="50"
                    value="{{ old('province', $form->province) }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="have_intention" class="form-label">มีความประสงค์</label>
                <input type="text" name="have_intention" id="have_intention" class="form-control" maxlength="255"
                    value="{{ old('have_intention', $form->have_intention) }}" required>
            </div>
        </div>

        <!-- ข้อมูลเกี่ยวกับที่ดิน -->
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="land_title_number" class="form-label">ในโฉนดที่ดิน เลขที่</label>
                <input type="text" name="land_title_number" id="land_title_number" class="form-control"
                    maxlength="50" value="{{ old('land_title_number', $form->land_title_number) }}">
            </div>
            <div class="col-md-3 mb-3">
                <label for="volume" class="form-label">เล่มที่</label>
                <input type="text" name="volume" id="volume" class="form-control" maxlength="50"
                    value="{{ old('volume', $form->volume) }}">
            </div>
            <div class="col-md-3 mb-3">
                <label for="page" class="form-label">หน้า</label>
                <input type="text" name="page" id="page" class="form-control" maxlength="50"
                    value="{{ old('page', $form->page) }}">
            </div>
            <div class="col-md-3 mb-3">
                <label for="village_area" class="form-label">อยู่ในเขตหมู่ที่</label>
                <input type="text" name="village_area" id="village_area" class="form-control" maxlength="50"
                    value="{{ old('village_area', $form->village_area) }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="subdistrict_area" class="form-label">แขวง/ตำบลพื้นที่</label>
                <input type="text" name="subdistrict_area" id="subdistrict_area" class="form-control" maxlength="50"
                    value="{{ old('subdistrict_area', $form->subdistrict_area) }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="district_area" class="form-label">เขต/อำเภอพื้นที่</label>
                <input type="text" name="district_area" id="district_area" class="form-control" maxlength="50"
                    value="{{ old('district_area', $form->district_area) }}">
            </div>
        </div>

        <!-- ไฟล์แนบ -->
        <div class="mb-3">
            <h4>ไฟล์แนบปัจจุบัน</h4>
            <div class="list-group">
                @foreach ($form->files as $attachment)
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ asset('storage/' . $attachment->file_path) }}" target="_blank"
                            class="text-truncate">
                            {{ basename($attachment->file_path) }}
                        </a>
                        <div class="form-check">
                            <input type="checkbox" name="delete_attachments[]" value="{{ $attachment->id }}"
                                class="form-check-input" id="delete_attachments_{{ $attachment->id }}">
                            <label class="form-check-label"
                                for="delete_attachments_{{ $attachment->id }}">ลบไฟล์นี้</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-3">
            <h4>เพิ่มแนบไฟล์</h4>
            <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
            <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 2MB)</small>
        </div>

        <!-- ปุ่มส่ง -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary w-100 py-2">
                <i class="fa-solid fa-file-arrow-up me-2"></i>บันทึกข้อมูล
            </button>
        </div>
    </form>

@endsection
