@extends('dashboard.layout.layout-dashboard')
@section('content')

@if ($message = Session::get('success'))
<script>
    Swal.fire({
        icon: 'success'
        , title: '{{ $message }}'
    , })

</script>
@endif

<div class="container">
    <a href="{{route('TablePages')}}">กลับ</a><br>
    <h1 class="text-center">แก้ไขฟอร์ม</h1>

    <form action="{{ route('FormEdit', $form->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- วันที่ -->
        <div class="mb-3">
            <label for="date" class="form-label">วันที่</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $form->date) }}" required>
        </div>

        <!-- หัวข้อ -->
        <div class="mb-3">
            <label for="subject" class="form-label">หัวข้อ</label>
            <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject', $form->subject) }}" maxlength="255">
        </div>

        <!-- คำนำหน้า -->
        <div class="mb-3">
            <label for="salutation" class="form-label">คำนำหน้า</label>
            <input type="text" class="form-control" id="salutation" name="salutation" value="{{ old('salutation', $form->salutation) }}" maxlength="50">
        </div>

        <!-- ชื่อ -->
        <div class="mb-3">
            <label for="name" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $form->name) }}" maxlength="255">
        </div>

        <!-- อายุ -->
        <div class="mb-3">
            <label for="age" class="form-label">อายุ</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ old('age', $form->age) }}">
        </div>

        <!-- บ้านเลขที่ -->
        <div class="mb-3">
            <label for="house_number" class="form-label">บ้านเลขที่</label>
            <input type="text" class="form-control" id="house_number" name="house_number" value="{{ old('house_number', $form->house_number) }}" maxlength="50">
        </div>

        <!-- หมู่บ้าน -->
        <div class="mb-3">
            <label for="village" class="form-label">หมู่บ้าน</label>
            <input type="text" class="form-control" id="village" name="village" value="{{ old('village', $form->village) }}" maxlength="100">
        </div>

        <!-- ตำบล -->
        <div class="mb-3">
            <label for="subdistrict" class="form-label">ตำบล</label>
            <input type="text" class="form-control" id="subdistrict" name="subdistrict" value="{{ old('subdistrict', $form->subdistrict) }}" maxlength="100">
        </div>

        <!-- อำเภอ -->
        <div class="mb-3">
            <label for="district" class="form-label">อำเภอ</label>
            <input type="text" class="form-control" id="district" name="district" value="{{ old('district', $form->district) }}" maxlength="100">
        </div>

        <!-- จังหวัด -->
        <div class="mb-3">
            <label for="province" class="form-label">จังหวัด</label>
            <input type="text" class="form-control" id="province" name="province" value="{{ old('province', $form->province) }}" maxlength="100">
        </div>

        <!-- รายละเอียดคำขอ -->
        <div class="mb-3">
            <label for="request_details" class="form-label">รายละเอียดคำขอ</label>
            <textarea class="form-control" id="request_details" name="request_details" rows="3">{{ old('request_details', $form->request_details) }}</textarea>
        </div>

        <!-- ไฟล์แนบ -->
        <div class="mb-3">
            <label class="form-label">ไฟล์แนบปัจจุบัน</label>
            <ul>
                @foreach ($form->grAttachments as $attachment)
                    <li>
                        <a href="{{ asset('storage/' . $attachment->file_path) }}" target="_blank">{{ basename($attachment->file_path) }}</a>
                        <input type="checkbox" name="delete_attachments[]" value="{{ $attachment->id }}"> ลบไฟล์นี้
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mb-3">
            <label for="attachments" class="form-label">เพิ่มไฟล์แนบใหม่</label>
            <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
            <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 2MB)</small>
        </div>

        <!-- ปุ่มบันทึก -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
        </div>
    </form>
</div>


@endsection
