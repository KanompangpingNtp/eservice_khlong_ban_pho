@extends('dashboard.layout.users.layout_users')
@section('user_content')

<h1 class="text-center">ใบสมัคร <br>
    <h2 class="text-center">ศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์</h2>
    </h1>

    <br>

<!-- Child Information Form -->
<form action="{{ route('ChildApplyFormCreate') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div>
            <label for="full_name">เด็กชื่อ</label>
            <input type="text" name="full_name" id="full_name" required>
        </div>

        <div>
            <label for="ethnicity">เชื้อชาติ</label>
            <input type="text" name="ethnicity" id="ethnicity" required>
        </div>

        <div>
            <label for="nationality">สัญชาติ</label>
            <input type="text" name="nationality" id="nationality" required>
        </div>

        <div>
            <label for="birthday">เกิดวันที่</label>
            <input type="date" name="birthday" id="birthday" required>
        </div>

        <div>
            <label for="age">อายุ</label>
            <input type="number" name="age" id="age" required>
        </div>

        <div>
            <label for="age_months">อายุ เดือน</label>
            <input type="number" name="age_months" id="age_months" required>
        </div>

        <div>
            <label for="age_since_date">นับถึงวันที่</label>
            <input type="date" name="age_since_date" id="age_since_date" required>
        </div>

        <div>
            <label for="citizen_id">เลขประจำตัวประชาชน</label>
            <input type="text" name="citizen_id" id="citizen_id" required>
        </div>

        <div>
            <label for="regis_house_number">ที่อยู่ตามสำเนาทะเบียนบ้าน  บ้านเลขที่</label>
            <input type="text" name="regis_house_number" id="regis_house_number" required>
        </div>

        <div>
            <label for="regis_village">หมู่ที่</label>
            <input type="text" name="regis_village" id="regis_village" required>
        </div>

        <div>
            <label for="regis_road">ถนน</label>
            <input type="text" name="regis_road" id="regis_road" required>
        </div>

        <div>
            <label for="regis_subdistrict">ตำบล</label>
            <input type="text" name="regis_subdistrict" id="regis_subdistrict" required>
        </div>

        <div>
            <label for="regis_district">อำเภอ</label>
            <input type="text" name="regis_district" id="regis_district" required>
        </div>

        <div>
            <label for="regis_province">จังหวัด</label>
            <input type="text" name="regis_province" id="regis_province" required>
        </div>

        <div>
            <label for="current_house_number">ที่อยู่อาศัยจริงในปัจจุบัน  บ้านเลขที่</label>
            <input type="text" name="current_house_number" id="current_house_number" required>
        </div>

        <div>
            <label for="current_village">หมู่ที่</label>
            <input type="text" name="current_village" id="current_village" required>
        </div>

        <div>
            <label for="current_road">ถนน</label>
            <input type="text" name="current_road" id="current_road" required>
        </div>

        <div>
            <label for="current_subdistrict">ตำบล</label>
            <input type="text" name="current_subdistrict" id="current_subdistrict" required>
        </div>

        <div>
            <label for="current_district">อำเภอ</label>
            <input type="text" name="current_district" id="current_district" required>
        </div>

        <div>
            <label for="current_province">จังหวัด</label>
            <input type="text" name="current_province" id="current_province" required>
        </div>

        <div>
            <label for="current_phone_number">เบอร์โทรศัพท์</label>
            <input type="text" name="current_phone_number" id="current_phone_number" required>
        </div>

        <div>
            <label for="number_of_siblings">มีพี่น้องร่วมบิดา - มารดาเดียวกันจำนวน.</label>
            <input type="number" name="number_of_siblings" id="number_of_siblings" required>
        </div>

        <div>
            <label for="congenital_disease">โรคประจำตัว</label>
            <input type="text" name="congenital_disease" id="congenital_disease" required>
        </div>

        <div>
            <label for="blood_group">หมู่โลหิต</label>
            <input type="text" name="blood_group" id="blood_group" required>
        </div>

        <!-- Father's Information -->
        <div>
            <label for="father_name">บิดาชื่อ </label>
            <input type="text" id="father_name" name="father_name" required>
        </div>

        <div>
            <label for="father_occupation">อาชีพ </label>
            <input type="text" id="father_occupation" name="father_occupation" required>
        </div>

        <div>
            <label for="edu_qual_father">วุฒิการศึกษา</label>
            <input type="text" id="edu_qual_father" name="edu_qual_father" required>
        </div>

        <!-- Mother's Information -->
        <div>
            <label for="mother_name">มารดาชื่อ</label>
            <input type="text" id="mother_name" name="mother_name" required>
        </div>

        <div>
            <label for="mother_occupation">อาชีพ </label>
            <input type="text" id="mother_occupation" name="mother_occupation" required>
        </div>

        <div>
            <label for="edu_qual_mother">วุฒิการศึกษา</label>
            <input type="text" id="edu_qual_mother" name="edu_qual_mother" required>
        </div>

        <!-- Care Options -->
        <div>
            <label>ปัจจุบันเด็กอยู่ในความดูแลอุปการะ/รับผิดชอบของ</label><br>
            <input type="radio" id="care_option_father" name="care_option" value="father" required>
            <label for="care_option_father">บิดา</label><br>

            <input type="radio" id="care_option_mother" name="care_option" value="mother" required>
            <label for="care_option_mother">มารดา</label><br>

            <input type="radio" id="care_option_fatherAdmother" name="care_option" value="fatherAdmother" required>
            <label for="care_option_fatherAdmother">ทั้งบิดา - มารดาร่วมกัน</label><br>

            <input type="radio" id="care_option_other" name="care_option" value="Other" required>
            <label for="care_option_other">อื่น ๆ </label>
        </div>

        <div id="otherCareOptionDiv" style="display: none;">
            <label for="care_option_other_text">(โปรดระบุความเกี่ยวข้อง)</label>
            <input type="text" id="care_option_other_text" name="care_option_other">
        </div>

        <!-- Caretaker Income -->
        <div>
            <label for="caretaker_income">ผู้ดูแลอุปการะเด็กตามข้อ  ๑.  มีรายได้ในครอบครัวต่อเดือน</label>
            <input type="text" id="caretaker_income" name="caretaker_income" required>
        </div>

        <!-- Applicant's Information -->
        <div>
            <label for="applicants_name">ผู้นำเด็กมาสมัครชื่อ </label>
            <input type="text" id="applicants_name" name="applicants_name" required>
        </div>

        <div>
            <label for="applicants_relevant">เกี่ยวข้องเป็น</label>
            <input type="text" id="applicants_relevant" name="applicants_relevant" required>
        </div>

        <!-- Child Carrier Information -->
        <div>
            <label for="child_carrier_name">ผู้ที่จะรับส่งเด็กชื่อ - สกุล</label>
            <input type="text" id="child_carrier_name" name="child_carrier_name" required>
        </div>

        <div>
            <label for="child_carrier_relevant">โดยเกี่ยวข้องเป็น</label>
            <input type="text" id="child_carrier_relevant" name="child_carrier_relevant" required>
        </div>

        <div>
            <label for="child_carrier_phone">เบอร์โทรศัพท์ติดต่อ</label>
            <input type="text" id="child_carrier_phone" name="child_carrier_phone" required>
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

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="{{asset('js/multipart_files.js')}}"></script>

<script>
    const careOptionRadios = document.getElementsByName('care_option');
    const otherCareOptionDiv = document.getElementById('otherCareOptionDiv');

    careOptionRadios.forEach(radio => {
        radio.addEventListener('change', function () {
            if (this.value === 'Other') {
                otherCareOptionDiv.style.display = 'block';
            } else {
                otherCareOptionDiv.style.display = 'none';
                document.getElementById('care_option_other_text').value = '';
            }
        });
    });
</script>

@endsection
