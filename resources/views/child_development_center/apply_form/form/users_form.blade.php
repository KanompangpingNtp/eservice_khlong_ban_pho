@extends('dashboard.layout.users.layout_users')
@section('title', 'พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์')
@section('user_content')
    <!-- Child Information Form -->
    <form action="{{ route('ChildApplyFormCreate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <h3 class="text-center">ใบสมัคร <br></h3>
            <h3 class="text-center">ศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์</h3>
            <!-- Row for form title -->
            <h3>ข้อมูลเด็กเล็ก</h3>
            <!-- Child Information -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="full_name" class="form-label">เด็กชื่อ</label>
                    <input type="text" class="form-control" name="full_name" id="full_name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ethnicity" class="form-label">เชื้อชาติ</label>
                    <input type="text" class="form-control" name="ethnicity" id="ethnicity" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nationality" class="form-label">สัญชาติ</label>
                    <input type="text" class="form-control" name="nationality" id="nationality" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="birthday" class="form-label">เกิดวันที่</label>
                    <input type="date" class="form-control" name="birthday" id="birthday" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="age" class="form-label">อายุ</label>
                    <input type="number" class="form-control" name="age" id="age" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="age_months" class="form-label">อายุ เดือน</label>
                    <input type="number" class="form-control" name="age_months" id="age_months" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="age_since_date" class="form-label">นับถึงวันที่</label>
                    <input type="date" class="form-control" name="age_since_date" id="age_since_date" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="citizen_id" class="form-label">เลขประจำตัวประชาชน</label>
                    <input type="text" class="form-control" name="citizen_id" id="citizen_id" required>
                </div>
            </div>

            <hr>
            <!-- Address Information -->
            <h3>ที่อยู่ตามสำเนาทะเบียนบ้าน</h3>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="regis_house_number" class="form-label">บ้านเลขที่</label>
                    <input type="text" class="form-control" name="regis_house_number" id="regis_house_number" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="regis_village" class="form-label">หมู่ที่</label>
                    <input type="text" class="form-control" name="regis_village" id="regis_village" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="regis_road" class="form-label">ถนน</label>
                    <input type="text" class="form-control" name="regis_road" id="regis_road" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="regis_subdistrict" class="form-label">ตำบล</label>
                    <input type="text" class="form-control" name="regis_subdistrict" id="regis_subdistrict" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="regis_district" class="form-label">อำเภอ</label>
                    <input type="text" class="form-control" name="regis_district" id="regis_district" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="regis_province" class="form-label">จังหวัด</label>
                    <input type="text" class="form-control" name="regis_province" id="regis_province" required>
                </div>
            </div>
            <hr>
            <!-- Current Address Information -->
            <h3>ที่อยู่อาศัยจริงในปัจจุบัน</h3>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="current_house_number" class="form-label">บ้านเลขที่</label>
                    <input type="text" class="form-control" name="current_house_number" id="current_house_number"
                        required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="current_village" class="form-label">หมู่ที่</label>
                    <input type="text" class="form-control" name="current_village" id="current_village" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="current_road" class="form-label">ถนน</label>
                    <input type="text" class="form-control" name="current_road" id="current_road" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="current_subdistrict" class="form-label">ตำบล</label>
                    <input type="text" class="form-control" name="current_subdistrict" id="current_subdistrict"
                        required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="current_district" class="form-label">อำเภอ</label>
                    <input type="text" class="form-control" name="current_district" id="current_district" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="current_province" class="form-label">จังหวัด</label>
                    <input type="text" class="form-control" name="current_province" id="current_province" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="current_phone_number" class="form-label">เบอร์โทรศัพท์</label>
                    <input type="text" class="form-control" name="current_phone_number" id="current_phone_number"
                        required>
                </div>
            </div>
            <hr>
            <!-- Parents Information -->
            <h3>ข้อมูลผู้ปกครอง</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="father_name" class="form-label">บิดาชื่อ</label>
                    <input type="text" class="form-control" name="father_name" id="father_name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="father_occupation" class="form-label">อาชีพ</label>
                    <input type="text" class="form-control" name="father_occupation" id="father_occupation" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="edu_qual_father" class="form-label">วุฒิการศึกษา</label>
                    <input type="text" class="form-control" name="edu_qual_father" id="edu_qual_father" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mother_name" class="form-label">มารดาชื่อ</label>
                    <input type="text" class="form-control" name="mother_name" id="mother_name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mother_occupation" class="form-label">อาชีพ </label>
                    <input type="text" id="mother_occupation" class="form-control" name="mother_occupation" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="edu_qual_mother" class="form-label">วุฒิการศึกษา</label>
                    <input type="text" id="edu_qual_mother" class="form-control" name="edu_qual_mother" required>
                </div>
            </div>

            <hr>
            <!-- Care Options -->
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3 class="form-label">ปัจจุบันเด็กอยู่ในความดูแลอุปการะ/รับผิดชอบของ</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="care_option_father" name="care_option"
                            value="father" required>
                        <label class="form-check-label" for="care_option_father">บิดา</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="care_option_mother" name="care_option"
                            value="mother" required>
                        <label class="form-check-label" for="care_option_mother">มารดา</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="care_option_fatherAdmother"
                            name="care_option" value="fatherAdmother" required>
                        <label class="form-check-label" for="care_option_fatherAdmother">ทั้งบิดา - มารดาร่วมกัน</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="care_option_other" name="care_option"
                            value="Other" required>
                        <label class="form-check-label" for="care_option_other">อื่น ๆ</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3" id="otherCareOptionDiv" style="display: none;">
                <label for="care_option_other_text" class="form-label">(โปรดระบุความเกี่ยวข้อง)</label>
                <input type="text" id="care_option_other_text" class="form-control" name="care_option_other"
                    required>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3 class="form-label">ปัจจุบันเด็กอยู่ในความดูแลอุปการะ/รับผิดชอบของ</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="care_option_father" name="care_option"
                            value="father" required>
                        <label class="form-check-label" for="care_option_father">บิดา</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="care_option_mother" name="care_option"
                            value="mother" required>
                        <label class="form-check-label" for="care_option_mother">มารดา</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="care_option_fatherAdmother"
                            name="care_option" value="fatherAdmother" required>
                        <label class="form-check-label" for="care_option_fatherAdmother">ทั้งบิดา - มารดาร่วมกัน</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="care_option_other" name="care_option"
                            value="Other" required>
                        <label class="form-check-label" for="care_option_other">อื่น ๆ</label>
                    </div>
                </div>
            </div>

            <!-- Caretaker Income -->
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="caretaker_income" class="form-label">ผู้ดูแลอุปการะเด็กตามข้อ ๑.
                        มีรายได้ในครอบครัวต่อเดือน</label>
                    <input type="text" class="form-control" id="caretaker_income" name="caretaker_income" required>
                </div>
            </div>

            <!-- Applicant's Information -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="applicants_name" class="form-label">ผู้นำเด็กมาสมัครชื่อ</label>
                    <input type="text" class="form-control" id="applicants_name" name="applicants_name" required>
                </div>
                <div class="col-md-6">
                    <label for="applicants_relevant" class="form-label">เกี่ยวข้องเป็น</label>
                    <input type="text" class="form-control" id="applicants_relevant" name="applicants_relevant"
                        required>
                </div>
            </div>

            <!-- Child Carrier Information -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="child_carrier_name" class="form-label">ผู้ที่จะรับส่งเด็กชื่อ - สกุล</label>
                    <input type="text" class="form-control" id="child_carrier_name" name="child_carrier_name"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="child_carrier_relevant" class="form-label">โดยเกี่ยวข้องเป็น</label>
                    <input type="text" class="form-control" id="child_carrier_relevant" name="child_carrier_relevant"
                        required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="child_carrier_phone" class="form-label">เบอร์โทรศัพท์ติดต่อ</label>
                    <input type="text" class="form-control" id="child_carrier_phone" name="child_carrier_phone"
                        required>
                </div>
            </div>
            <hr>
            <!-- แนบไฟล์ -->
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
        </div>
    </form>

    <script src="{{ asset('js/multipart_files.js') }}"></script>

    <script>
        const careOptionRadios = document.getElementsByName('care_option');
        const otherCareOptionDiv = document.getElementById('otherCareOptionDiv');

        careOptionRadios.forEach(radio => {
            radio.addEventListener('change', function() {
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
