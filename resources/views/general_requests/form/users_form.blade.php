@extends('dashboard.layout.users.layout_users')
@section('user_content')

@if ($message = Session::get('success'))
<script>
    Swal.fire({
        icon: 'success'
        , title: '{{ $message }}'
    , })

</script>
@endif

<div class="container">
    <h1 class="text-center">ฟอร์ม</h1>

    <form action="{{ route('FormCreate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- วันที่ -->
        <div class="mb-3">
            <label for="date" class="form-label">วันที่</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <!-- หัวข้อ -->
        <div class="mb-3">
            <label for="subject" class="form-label">เรื่อง</label>
            <input type="text" class="form-control" id="subject" name="subject" maxlength="255">
        </div>

        <!-- คำนำหน้า -->
        <div class="mb-3">
            <label for="salutation" class="form-label">คำนำหน้า</label>
            <input type="text" class="form-control" id="salutation" name="salutation" maxlength="50">
        </div>

        <!-- ชื่อ -->
        <div class="mb-3">
            <label for="name" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="name" name="name" maxlength="255">
        </div>

        <!-- อายุ -->
        <div class="mb-3">
            <label for="age" class="form-label">อายุ</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>

        <!-- บ้านเลขที่ -->
        <div class="mb-3">
            <label for="house_number" class="form-label">บ้านเลขที่</label>
            <input type="text" class="form-control" id="house_number" name="house_number" maxlength="50">
        </div>

        <!-- หมู่บ้าน -->
        <div class="mb-3">
            <label for="village" class="form-label">หมู่บ้าน</label>
            <input type="text" class="form-control" id="village" name="village" maxlength="100">
        </div>

        <!-- ตำบล -->
        <div class="mb-3">
            <label for="subdistrict" class="form-label">ตำบล</label>
            <input type="text" class="form-control" id="subdistrict" name="subdistrict" maxlength="100">
        </div>

        <!-- อำเภอ -->
        <div class="mb-3">
            <label for="district" class="form-label">อำเภอ</label>
            <input type="text" class="form-control" id="district" name="district" maxlength="100">
        </div>

        <!-- จังหวัด -->
        <div class="mb-3">
            <label for="province" class="form-label">จังหวัด</label>
            <input type="text" class="form-control" id="province" name="province" maxlength="100">
        </div>

        <!-- รายละเอียดคำขอ -->
        <div class="mb-3">
            <label for="request_details" class="form-label">รายละเอียดคำขอ</label>
            <textarea class="form-control" id="request_details" name="request_details" rows="3"></textarea>
        </div>

          <!-- แนบไฟล์ -->
          <div class="mb-3">
            <label for="attachments" class="form-label">แนบไฟล์</label>
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
            <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
    </form>
</div>

<script>
    const fileInput = document.getElementById('attachments');
    const fileListContainer = document.querySelector('#file-list .d-flex');

    // อัปเดตรายการไฟล์
    fileInput.addEventListener('change', function () {
        fileListContainer.innerHTML = ''; // เคลียร์รายการเก่า
        Array.from(fileInput.files).forEach((file, index) => {
            const fileWrapper = document.createElement('div');
            fileWrapper.className = 'text-center';

            // ตรวจสอบประเภทไฟล์
            if (file.type.startsWith('image/')) {
                // สร้างภาพตัวอย่างสำหรับไฟล์รูปภาพ
                const imgPreview = document.createElement('img');
                imgPreview.src = URL.createObjectURL(file);
                imgPreview.alt = file.name;
                imgPreview.style.width = '100px';
                imgPreview.style.height = '100px';
                imgPreview.style.objectFit = 'cover';
                imgPreview.className = 'border rounded';

                fileWrapper.appendChild(imgPreview);
            } else if (file.type === 'application/pdf') {
                // แสดงไอคอนแทนไฟล์ PDF
                const pdfIcon = document.createElement('img');
                pdfIcon.src = 'https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg'; // ไอคอน PDF
                pdfIcon.alt = 'PDF File';
                pdfIcon.style.width = '100px';
                pdfIcon.style.height = '100px';
                pdfIcon.className = 'border rounded';

                fileWrapper.appendChild(pdfIcon);
            } else {
                // กรณีไฟล์อื่น ๆ แสดงชื่อไฟล์
                const fileName = document.createElement('p');
                fileName.textContent = file.name;
                fileWrapper.appendChild(fileName);
            }

            // ปุ่มลบ
            const removeButton = document.createElement('button');
            removeButton.textContent = 'ลบ';
            removeButton.className = 'btn btn-danger btn-sm mt-2';
            removeButton.setAttribute('data-index', index);

            removeButton.addEventListener('click', () => {
                removeFile(index);
            });

            fileWrapper.appendChild(removeButton);
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
