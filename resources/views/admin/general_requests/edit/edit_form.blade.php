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

        <div class="mb-3">
            <label for="date" class="form-label">วันที่</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $form->date) }}" required>
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">หัวข้อ</label>
            <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject', $form->subject) }}" maxlength="255">
        </div>

        <div class="mb-3">
            <label for="salutation" class="form-label">คำนำหน้า</label>
            <input type="text" class="form-control" id="salutation" name="salutation" value="{{ old('salutation', $form->salutation) }}" maxlength="50">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $form->name) }}" maxlength="255">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">อายุ</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ old('age', $form->age) }}">
        </div>

        <div class="mb-3">
            <label for="house_number" class="form-label">บ้านเลขที่</label>
            <input type="text" class="form-control" id="house_number" name="house_number" value="{{ old('house_number', $form->house_number) }}" maxlength="50">
        </div>

        <div class="mb-3">
            <label for="village" class="form-label">หมู่บ้าน</label>
            <input type="text" class="form-control" id="village" name="village" value="{{ old('village', $form->village) }}" maxlength="100">
        </div>

        <div class="mb-3">
            <label for="subdistrict" class="form-label">ตำบล</label>
            <input type="text" class="form-control" id="subdistrict" name="subdistrict" value="{{ old('subdistrict', $form->subdistrict) }}" maxlength="100">
        </div>

        <div class="mb-3">
            <label for="district" class="form-label">อำเภอ</label>
            <input type="text" class="form-control" id="district" name="district" value="{{ old('district', $form->district) }}" maxlength="100">
        </div>

        <div class="mb-3">
            <label for="province" class="form-label">จังหวัด</label>
            <input type="text" class="form-control" id="province" name="province" value="{{ old('province', $form->province) }}" maxlength="100">
        </div>

        <div class="mb-3">
            <label for="request_details" class="form-label">รายละเอียดคำขอ</label>
            <textarea class="form-control" id="request_details" name="request_details" rows="3">{{ old('request_details', $form->request_details) }}</textarea>
        </div>

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

        <!-- แสดงรายการไฟล์ที่แนบ -->
        <div id="file-list" class="mt-3">
            <h5>ไฟล์ที่เลือก:</h5>
            <div class="d-flex flex-wrap gap-3"></div>
        </div>

        <!-- ปุ่มบันทึก -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
        </div>
    </form>
</div>

<script>
    const fileInput = document.getElementById('attachments');
    const fileListContainer = document.querySelector('#file-list .d-flex');

    // อัปเดตรายการไฟล์
    fileInput.addEventListener('change', function() {
        fileListContainer.innerHTML = ''; // เคลียร์รายการเก่า
        Array.from(fileInput.files).forEach((file, index) => {
            // สร้าง wrapper สำหรับรูปภาพหรือไอคอน PDF
            const fileWrapper = document.createElement('div');
            fileWrapper.className = 'position-relative d-inline-block text-center';

            // ตรวจสอบประเภทไฟล์
            let previewElement;
            if (file.type.startsWith('image/')) {
                // สร้างภาพตัวอย่างสำหรับไฟล์รูปภาพ
                previewElement = document.createElement('img');
                previewElement.src = URL.createObjectURL(file);
                previewElement.alt = file.name;
            } else if (file.type === 'application/pdf') {
                // แสดงไอคอนแทนไฟล์ PDF
                previewElement = document.createElement('img');
                previewElement.src =
                    'https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg';
                previewElement.alt = 'PDF File';
            } else {
                previewElement = document.createElement('div');
                previewElement.textContent = 'ไฟล์ไม่รองรับ';
            }

            // กำหนดขนาดและสไตล์ของรูปภาพ/ไอคอน
            previewElement.style.width = '100px';
            previewElement.style.height = '100px';
            previewElement.style.objectFit = 'cover';
            previewElement.className = 'border rounded';

            // ปุ่มลบ
            const removeButton = document.createElement('button');
            removeButton.textContent = '×';
            removeButton.className = 'btn btn-danger btn-sm position-absolute';
            removeButton.style.top = '0';
            removeButton.style.right = '0';
            removeButton.setAttribute('data-index', index);

            removeButton.addEventListener('click', () => {
                removeFile(index);
            });

            // ชื่อไฟล์
            const fileName = document.createElement('p');
            fileName.textContent = file.name;
            fileName.className = 'mt-2 text-truncate';
            fileName.style.width = '100px';

            // รวมทุกอย่างเข้ากับ wrapper
            fileWrapper.appendChild(previewElement);
            fileWrapper.appendChild(removeButton);
            fileWrapper.appendChild(fileName);

            fileListContainer.appendChild(fileWrapper);
        });
    });


    // ลบไฟล์ออกจากรายการ
    function removeFile(index) {
        const fileArray = Array.from(fileInput.files);
        fileArray.splice(index, 1); // ลบไฟล์จากอาร์เรย์

        // สร้าง FileList ใหม่
        const dataTransfer = new DataTransfer();
        fileArray.forEach(file => dataTransfer.items.add(file));
        fileInput.files = dataTransfer.files;

        // อัปเดตรายการใน UI
        fileInput.dispatchEvent(new Event('change'));
    }
</script>

@endsection
