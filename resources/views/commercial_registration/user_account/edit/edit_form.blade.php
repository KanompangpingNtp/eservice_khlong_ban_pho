@extends('dashboard.layout.users.layout_users')
@section('title', 'แก้ไขคำร้องทะเบียนพาณิชย์')
@section('user_content')
    <h3 class="text-center"> แก้ไข คำร้องทะเบียนพาณิชย์ </h3>

    {{-- <form action="{{ route('TradeRegistryUserFormUpdate', $form->id) }}" method="POST" enctype="multipart/form-data"> --}}
        @csrf
        @method('PUT')

        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="receive_day" class="form-label">รับวันที่</label>
                    <input type="date" name="receive_day" id="receive_day" class="form-control"
                        value="{{ old('receive_day', $form->receive_day) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="written_at" class="form-label">เขียนที่</label>
                    <input type="text" name="written_at" id="written_at" class="form-control"
                        value="{{ old('written_at', $form->written_at) }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="write_the_date" class="form-label">เขียนวันที่</label>
                    <input type="text" name="write_the_date" id="write_the_date" class="form-control"
                        value="{{ old('write_the_date', $form->write_the_date) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="salutation" class="form-label">ชื่อนำหน้า</label>
                    <input type="text" name="salutation" id="salutation" class="form-control"
                        value="{{ old('salutation', $form->salutation) }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="full_name" class="form-label">ชื่อ-นามสกุล<span class="text-danger">*</span></label>
                    <input type="text" name="full_name" id="full_name" class="form-control"
                        value="{{ old('full_name', $form->full_name) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ethnicity" class="form-label">เชื้อชาติ</label>
                    <input type="text" name="ethnicity" id="ethnicity" class="form-control"
                        value="{{ old('ethnicity', $form->ethnicity) }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nationality" class="form-label">สัญชาติ</label>
                    <input type="text" name="nationality" id="nationality" class="form-control"
                        value="{{ old('nationality', $form->nationality) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="house_number" class="form-label">ที่อยู่เลขที่</label>
                    <input type="text" name="house_number" id="house_number" class="form-control"
                        value="{{ old('house_number', $form->house_number) }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="village" class="form-label">หมู่</label>
                    <input type="text" name="village" id="village" class="form-control"
                        value="{{ old('village', $form->village) }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="alley" class="form-label">ซอย</label>
                    <input type="text" name="alley" id="alley" class="form-control"
                        value="{{ old('alley', $form->alley) }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="road" class="form-label">ถนน</label>
                    <input type="text" name="road" id="road" class="form-control"
                        value="{{ old('road', $form->road) }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="subdistrict" class="form-label">ตำบล</label>
                    <input type="text" name="subdistrict" id="subdistrict" class="form-control"
                        value="{{ old('subdistrict', $form->subdistrict) }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="district" class="form-label">อำเภอ</label>
                    <input type="text" name="district" id="district" class="form-control"
                        value="{{ old('district', $form->district) }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="province" class="form-label">จังหวัด</label>
                    <input type="text" name="province" id="province" class="form-control"
                        value="{{ old('province', $form->province) }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name_used_to_call" class="form-label">ชื่อที่ใช้เรียกในการประกอบพาณิชย์</label>
                    <input type="text" name="name_used_to_call" id="name_used_to_call" class="form-control"
                        value="{{ old('name_used_to_call', $form->name_used_to_call) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="registered" class="form-label">ได้จดทะเบียนพาณิชย์คําขอที่</label>
                    <input type="text" name="registered" id="registered" class="form-control"
                        value="{{ old('registered', $form->registered) }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label">ขอยื่นคําร้องต่อพนักงานเจ้าหน้าที่ทะเบียนพาณิชย์
                    ดังต่อไปนี้</label>
                <textarea name="detail" id="detail" rows="4" class="form-control">{{ old('detail', $form->detail) }}</textarea>
            </div>
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
            <div class="mb-3">
                <h3>เพิ่มแนบไฟล์</h3>
                <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
                <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 2MB)</small>
            </div>
            <div class="text-center w-full border">
                <button type="submit" class="btn btn-primary w-100 py-1">
                    <i class="fa-solid fa-file-arrow-up me-2"></i> ส่งฟอร์มข้อมูล
                </button>
            </div>
        </div>
    </form>

    <script src="{{ asset('js/multipart_files.js') }}"></script>
@endsection
