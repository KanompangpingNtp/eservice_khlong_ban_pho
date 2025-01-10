@extends('dashboard.layout.users.layout_users')
@section('title', 'พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์')
@section('user_content')
@if(session('success'))
    <div class="alert alert-success">
        {!! nl2br(session('success')) !!}
    </div>
@endif



<!-- Child Information Form -->
<form action="{{ route('ChildApplyFormCreate') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container">
        <h3 class="text-center">ใบสมัคร <br></h3>
        <h3 class="text-center">ศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์</h3>
        <h3>ข้อมูลเด็กเล็ก</h3>
        <!-- Child Information -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="full_name" class="form-label">เด็กชื่อ-สกุล <span class="text-danger">*</span></label>
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
                <label for="age" class="form-label">อายุ (ปี)</label>
                <input type="number" class="form-control" name="age" id="age" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="age_months" class="form-label">อายุ (เดือน)</label>
                <input type="number" class="form-control" name="age_months" id="age_months" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="age_since_date" class="form-label">นับถึงวันที่ 16 พฤษภาคม พ.ศ.2568</label>
                <input type="date" class="form-control" name="age_since_date" id="age_since_date" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
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
                <input type="text" class="form-control" name="current_house_number" id="current_house_number" required>
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
                <input type="text" class="form-control" name="current_subdistrict" id="current_subdistrict" required>
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
                <input type="text" class="form-control" name="current_phone_number" id="current_phone_number" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="number_of_siblings" class="form-label">มีพี่น้องร่วมบิดา - มารดาเดียวกันจำนวน (ถ้าไม่มีใส่ - )</label>
                <input type="text" name="number_of_siblings" class="form-control" id="number_of_siblings" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="congenital_disease" class="form-label">โรคประจำตัว</label>
                <input type="text" class="form-control" name="congenital_disease" id="congenital_disease" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="blood_group" class="form-label">หมู่โลหิต</label>
                <input type="text" class="form-control" name="blood_group" id="blood_group" required>
            </div>
        </div>

        <hr>
        <!-- Parents Information -->
        <h3>ข้อมูลบิดา-มารดา หรือ ผู้อุปการะ</h3>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="father_name" class="form-label">บิดาชื่อ - สกุล</label>
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
                <label for="mother_name" class="form-label">มารดาชื่อ - สกุล</label>
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
                    <input class="form-check-input" type="radio" id="care_option_father" name="care_option" value="father" required>
                    <label class="form-check-label" for="care_option_father">บิดา</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="care_option_mother" name="care_option" value="mother" required>
                    <label class="form-check-label" for="care_option_mother">มารดา</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="care_option_fatherAdmother" name="care_option" value="fatherAdmother" required>
                    <label class="form-check-label" for="care_option_fatherAdmother">ทั้งบิดา - มารดาร่วมกัน</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" id="care_option_relative" name="care_option" value="relative" required>
                    <label class="form-check-label" for="care_option_relative">ญาติ</label>
                </div>

                <div class="col-md-4 mb-3" id="care_option_relativeDiv" style="display: none;">
                    <label for="care_option_relative_text" class="form-label">(โปรดระบุความเกี่ยวข้อง)</label>
                    <input type="text" id="care_option_relative_text" class="form-control" name="care_option_relative_text">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" id="care_option_other" name="care_option" value="Other" required>
                    <label class="form-check-label" for="care_option_other">อื่น ๆ</label>
                </div>

                <div class="col-md-4 mb-3" id="otherCareOptionDiv" style="display: none;">
                    <label for="care_option_other_text" class="form-label">(โปรดระบุรายละเอียด)</label>
                    <input type="text" id="care_option_other_text" class="form-control" name="care_option_other_text">
                </div>
            </div>
        </div>

        <hr>

        <!-- Caretaker Income -->
        <div class="row mb-3">
            <div class="mb-3 col-md-3">
                <label for="caretaker_income" class="form-label">ผู้ดูแลอุปการะเด็ก
                    มีรายได้ในครอบครัวต่อเดือน</label>
                <div style="display: flex; align-items: center;">
                    <input type="text" class="form-control" id="caretaker_income" name="caretaker_income" required>
                    <span class="ms-1">บาท</span>
                </div>
            </div>
        </div>

        <!-- Applicant's Information -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="applicants_name" class="form-label">ผู้นำเด็กมาสมัคร ชื่อ-สกุล</label>
                <input type="text" class="form-control" id="applicants_name" name="applicants_name" required>
            </div>
            <div class="mb-3 col-md-3">
                <label for="applicants_relevant" class="form-label">เกี่ยวข้องเป็น</label>
                <div style="display: flex; align-items: center;">
                    <input type="text" class="form-control" id="applicants_relevant" name="applicants_relevant" style="flex: 1; margin-right: 5px;" required>
                    <span class="ms-1">ของเด็ก</span>
                </div>
            </div>
        </div>

        <!-- Child Carrier Information -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="child_carrier_name" class="form-label">ผู้ที่จะรับส่งเด็กชื่อ - สกุล</label>
                <input type="text" class="form-control" id="child_carrier_name" name="child_carrier_name" required>
            </div>
            <div class="col-md-6">
                <label for="child_carrier_relevant" class="form-label">โดยเกี่ยวข้องเป็น</label>
                <input type="text" class="form-control" id="child_carrier_relevant" name="child_carrier_relevant" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="child_carrier_phone" class="form-label">เบอร์โทรศัพท์ติดต่อ</label>
                <input type="text" class="form-control" id="child_carrier_phone" name="child_carrier_phone" required>
            </div>
        </div>

        <br>

        <div class="col-md-12">
            <span><strong>คำรับรอง</strong><br></span>
            <span class="ms-4">1. ข้าพเจ้าขอรับรองว่า ได้อ่านประกาศรับสมัครศูนย์พัฒนาเด็กเล็กองคฺ์การบริหารส่วนตำบลคลองบ้านโพธิ์เข้าใจแล้ว เด็กที่นำมาสมัครมีคุณสมบัติถูกต้องตรงประกาศ และหลักฐานที่ใช้สมัครใน
                 <br> วันนี้เป็นหลักฐานที่ถูกต้องจริง <br>
            </span>
            <span class="ms-4">2. ข้าพเจ้ามีสิทธิถูกต้องในการที่จะให้เด็กสมัครเข้ารับการศึกษาเลี้ยงดูในศูนย์พัฒนาเด็กเล็กขององค์การบริหารส่วนตำบลคลองบ้านโพธิ์ <br></span>
            <span class="ms-4">3. ข้าพเจ้ายินดีปฏิบัติตามระเบียบ ข้อกำหนดองค์การบริหารส่วนตำบลคลองบ้านโพธิ์ และยินดีปฏิบัติตามคำแนะนำเกี่ยวกับการพัฒนาความพร้อมที่ศูนย์พัฒนาเด็กเล็ก กำหนด</span>
            <br>
            <br>
            <span><strong>หมายเหตุ</strong> เอาข้อมูลเอกสาร/หลักฐานที่ใช้ในการสมัครเรียน ให้นำมาพร้อมนักเรียน ติดต่อมอบตัว ภายใน 5วัน ทำการที่ศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์</span>
        </div>

        <br>
        <hr><br>

        <h3 class="text-center">ใบมอบตัว <br></h3>
        <h3 class="text-center">ศูนย์พัฒนาเด็กเล็กองค์การบริหารสวนตำบลคลองบานโพธิ์ <br></h3>
        <h3 class="text-center">องค์การบริหารส่วนตำบลคลองบ้านโพธิ์ อำเภอบานโพธิ์ จังหวัดฉะเชิงเทรา</h3><br>

        <div class="row mb-3">
            <div class="col-md-2 mb-3">
                <label for="surrender_salutation" class="form-label">คำนำหน้า</label>
                <select class="form-select" id="surrender_salutation" name="surrender_salutation">
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="surrender_full_name" class="form-label">ข้าพเจ้า ชื่อ - สกุล</label>
                <input type="text" name="surrender_full_name" id="surrender_full_name" class="form-control" required>
            </div>

            <div class="col-md-2 mb-3">
                <label for="surrender_age" class="form-label">อายุ (ปี)</label>
                <input type="number" name="surrender_age" id="surrender_age" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="surrender_occupation" class="form-label">อาชีพ</label>
                <input type="text" name="surrender_occupation" id="surrender_occupation" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="surrender_income" class="form-label">ที่อยู่ปัจจุบัน เลขที่</label>
                <input type="text" name="surrender_income" id="surrender_income" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="surrender_village" class="form-label">หมู่</label>
                <input type="text" name="surrender_village" id="surrender_village" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="surrender_alley_road" class="form-label">ซอย</label>
                <input type="text" name="surrender_alley_road" id="surrender_alley_road" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="surrender_subdistrict" class="form-label">ตำบล</label>
                <input type="text" name="surrender_subdistrict" id="surrender_subdistrict" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="surrender_district" class="form-label">อำเภอ</label>
                <input type="text" name="surrender_district" id="surrender_district" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="surrender_province" class="form-label">จังหวัด</label>
                <input type="text" name="surrender_province" id="surrender_province" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="surrender_phone_number" class="form-label">โทรศัพท์</label>
                <input type="text" name="surrender_phone_number" id="surrender_phone_number" class="form-control" required>
            </div>
        </div>

        <h3 class="form-label">ผู้ปกครองของ</h3>

        <div class="row">

            <span>
                <label for="surrender_childs_name" style="display: inline-block; margin-right: 10px;">เด็กชาย/เด็กหญิง</label>
                <div class="col-md-4" style="display: inline-block;">
                    <input type="text" name="surrender_childs_name" id="surrender_childs_name" class="form-control" required>
                </div>
                <span style="display: inline-block; margin-left: 10px;">เข้าเป็นนักเรียนของศูนย์</span>
                <span>พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์และพร้อมที่จะปฏิบัติตามระเบียบการของศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลหนองบ้านโพธิ์ ดังนี้</span><br>
                <span class="ms-5"> 1. จะปฏิบัติตามระเบียบ ข้อบังคับของศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์ อย่างเครงครัด</span><br>
                <span class="ms-5"> 2. จะร่วมมือกับศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์ ในการจัดการเรียนการสอนและขจัดปัญหาต่างๆ ที่อาจเกิดขึ้นแก่เด็กอย่างใกล้ชิด
                </span>
            </span>

            <div class="col-md-4 mb-3" style="margin-top: 10px;">
                <label for="surrender_contact_location" class="form-label">สถานที่ที่สามารถติดต่อกับผู้ปกครองได้สะดวกรวดเร็วที่สุด</label>
                <input type="text" name="surrender_contact_location" id="surrender_contact_location" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3" style="margin-top: 10px;">
                <label for="surrender_contact_phone" class="form-label">โทรศัพท์</label>
                <input type="text" name="surrender_contact_phone" id="surrender_contact_phone" class="form-control" required>
            </div>

            <span style="margin-top: 10px;">
                <label for="surrender_child_recipient" style="display: inline-block; margin-right: 10px;">อนึ่ง ถ้าเด็กชาย/เด็กหญิง</label>
                <div class="col-md-4" style="display: inline-block;">
                    <input type="text" name="surrender_child_recipient" id="surrender_child_recipient" class="form-control" required>
                </div>
                <span style="display: inline-block; margin-left: 10px;">เจ็บป่วย จำเป็นต้องรีบส่งโรงพยาบาลหรือพบแพทย์ทันที ข้าพเจ้าอนุญาติให้ศูนย์พัฒนาเด็กเล็กจัดการไปตามความ</span>
                <span>เห็นชอบก่อน และแจ้งให้ข้าพเจ้าทราบ โดยข้าพเจ้าขอรับผิดชอบค่าใช้จ่ายที่เกิดขึ้น</span>
            </span>

        </div>

        <br>
        <h3 class="form-label">ผู้รับส่งเด็ก</h3>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="child_recipient_relevant" class="form-label">ชื่อ-สกุล (ผู้รับส่งเด็ก)</label>
                <input type="text" name="child_recipient_relevant" id="child_recipient_relevant" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="child_recipient_related" class="form-label">โดยเกี่ยวข้องเป็น</label>
                <input type="text" name="child_recipient_related" id="child_recipient_related" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="child_recipient_phone" class="form-label">เบอร์โทรศัพท์ติดต่อ</label>
                <input type="text" name="child_recipient_phone" id="child_recipient_phone" class="form-control" required>
            </div>
        </div>

        <br>
        <hr><br>

        <h3 class="text-center">ทะเบียนประวัติเด็กปฐมวัย <br></h3>
        <h3 class="text-center">ศูนย์พัฒนาเด็กเล็กองค์การบริหารสวนตำบลคลองบานโพธิ์ <br></h3>
        <h3 class="text-center">องค์การบริหารส่วนตำบลคลองบ้านโพธิ์ อำเภอบานโพธิ์ จังหวัดฉะเชิงเทรา</h3> <br>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="child_name">ชื่อ-นามสกุล เด็ก (เด็กชาย/เด็กหญิง) <span class="text-danger">*</span></label>
                <input type="text" name="child_name" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="child_nickname">ชื่อเล่น <span class="text-danger">*</span></label>
                <input type="text" name="child_nickname" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="registration_citizen_id">เลขประจำตัวประชาชน <span class="text-danger">*</span></label>
                <input type="text" name="registration_citizen_id" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="registration_birthday">วัน เดือน ปี เกิด <span class="text-danger">*</span></label>
                <input type="date" name="registration_birthday" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="birth_province">จังหวัดที่เกิด <span class="text-danger">*</span></label>
                <input type="text" name="birth_province" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="registration_ethnicity">เชื้อชาติ <span class="text-danger">*</span></label>
                <input type="text" name="registration_ethnicity" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="registration_nationality">สัญชาติ <span class="text-danger">*</span></label>
                <input type="text" name="registration_nationality" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="religion">ศาสนา <span class="text-danger">*</span></label>
                <input type="text" name="religion" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="house_number">ที่อยู่ปัจจุบันเลขที่ <span class="text-danger">*</span></label>
                <input type="text" name="house_number" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="village">หมู่ที่ <span class="text-danger">*</span></label>
                <input type="text" name="village" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="alley_road">ซอย/ถนน <span class="text-danger">*</span></label>
                <input type="text" name="alley_road" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="subdistrict">ตำบล <span class="text-danger">*</span></label>
                <input type="text" name="subdistrict" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="district">อำเภอ <span class="text-danger">*</span></label>
                <input type="text" name="district" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="province">จังหวัด <span class="text-danger">*</span></label>
                <input type="text" name="province" class="form-control" required>
            </div>
        </div>

       <div>
            <div class="mb-3">
                <label for="health_option">สุขภาพโดยรวมของเด็ก</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="health_option" id="health_option_1" value="option_1" required>
                        <label class="form-check-label" for="health_option_1">
                            สมบูรณ์
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="health_option" id="health_option_2" value="option_2" required>
                        <label class="form-check-label" for="health_option_2">
                            ไม่สมบูรณ์
                        </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="health_option_detail" class="form-control" placeholder="สุขภาพโดยรวมของเด็ก ไม่สมบูรณ์อย่างไร โปรดระบุ">
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="registration_blood_group">กลุ่มเลือด</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="registration_blood_group" id="registration_blood_group_1" value="option_1" required>
                    <label class="form-check-label" for="registration_blood_group_1">
                        เอ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="registration_blood_group" id="registration_blood_group_2" value="option_2" required>
                    <label class="form-check-label" for="registration_blood_group_2">
                        บี
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="registration_blood_group" id="registration_blood_group_3" value="option_3" required>
                    <label class="form-check-label" for="registration_blood_group_3">
                        เอบี
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="registration_blood_group" id="registration_blood_group_4" value="option_4" required>
                    <label class="form-check-label" for="registration_blood_group_4">
                        โอ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="registration_blood_group" id="registration_blood_group_5" value="option_5" required onclick="toggleOtherInput(this)">
                    <label class="form-check-label" for="registration_blood_group_5">
                        อื่นๆ
                    </label>
                </div>
                <div class="col-md-3" id="blood_group_detail">
                    <input type="text" name="blood_group_detail" class="form-control" placeholder="กลุ่มเลือด อื่นๆโปรดระบุ">
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="registration_congenital_disease">เด็กมีโรคประจำตัว</label>
                <input type="text" name="registration_congenital_disease" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="edited_by">เมื่อมีอาการแก้ไขโดย (ระบุอาการ)</label>
                <input type="text" name="edited_by" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="drug_allergy">เด็กมีประวัติการแพ้ยา (โปรดระบุ)</label>
                <input type="text" name="drug_allergy" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="drug_allergy_detail">แพ้อาหาร คือ (โปรดระบุ)</label>
                <input type="text" name="drug_allergy_detail" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="accident_history">ประวัติการได้รับอุบัติเหตุหรือเจ็บป่วย</label>
                <input type="text" name="accident_history" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="accident_history_when_age">เมื่ออายุ (ปี)</label>
                <input type="number" name="accident_history_when_age" class="form-control" required>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label for="ge_immunity">การได้รับภูมิคุ้มกัน</label>
            {{-- <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ge_immunity" id="ge_immunity_1" value="option_1" required>
                    <label class="form-check-label" for="ge_immunity_1">
                        คอตีบ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ge_immunity" id="ge_immunity_2" value="option_2" required>
                    <label class="form-check-label" for="ge_immunity_2">
                        หัดเยอรมัน
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ge_immunity" id="ge_immunity_3" value="option_3" required>
                    <label class="form-check-label" for="ge_immunity_3">
                        ไอกรน
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ge_immunity" id="ge_immunity_4" value="option_4" required>
                    <label class="form-check-label" for="ge_immunity_4">
                        บาดทะยัก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ge_immunity" id="ge_immunity_5" value="option_5" required>
                    <label class="form-check-label" for="ge_immunity_5">
                        โปลิโอ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ge_immunity" id="ge_immunity_6" value="option_6" required>
                    <label class="form-check-label" for="ge_immunity_6">
                        ตับอักเสบ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ge_immunity" id="ge_immunity_7" value="option_7" required>
                    <label class="form-check-label" for="ge_immunity_7">
                        บีซีจี
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ge_immunity" id="ge_immunity_8" value="option_8" required>
                    <label class="form-check-label" for="ge_immunity_8">
                        อื่นๆ
                    </label>
                </div>
                <input type="text" name="ge_immunity_detail" class="form-control" placeholder="การได้รับภูมิคุ้มกันอื่นๆ คือ">
            </div> --}}
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_1" value="option_1">
                    <label class="form-check-label" for="ge_immunity_1">
                        คอตีบ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_2" value="option_2">
                    <label class="form-check-label" for="ge_immunity_2">
                        หัดเยอรมัน
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_3" value="option_3">
                    <label class="form-check-label" for="ge_immunity_3">
                        ไอกรน
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_4" value="option_4">
                    <label class="form-check-label" for="ge_immunity_4">
                        บาดทะยัก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_5" value="option_5">
                    <label class="form-check-label" for="ge_immunity_5">
                        โปลิโอ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_6" value="option_6">
                    <label class="form-check-label" for="ge_immunity_6">
                        ตับอักเสบ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_7" value="option_7">
                    <label class="form-check-label" for="ge_immunity_7">
                        บีซีจี
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ge_immunity[]" id="ge_immunity_8" value="option_8">
                    <label class="form-check-label" for="ge_immunity_8">
                        อื่นๆ
                    </label>
                </div>
                <input type="text" name="ge_immunity_detail" class="form-control" placeholder="การได้รับภูมิคุ้มกันอื่นๆ คือ">
            </div>

        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="specially_about">เด็กควรได้รับการดูแลเป็นพิเศษเรื่อง</label>
                <input type="text" name="specially_about" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="the_eldest_son">เด็กเป็นบุตรคนที่</label>
                <input type="text" name="the_eldest_son" class="form-control" required>
            </div>

            <div class="mb-3 col-md-3">
                <label for="registration_number_of_siblings" class="form-label">จำนวนพี่น้องร่วมสายโลหิต</label>
                <div style="display: flex; align-items: center;">
                    <input type="text" name="registration_number_of_siblings" class="form-control" required>
                    <span class="ms-2">คน</span>
                </div>
            </div>

            <div class="mb-3 col-md-3">
                <label for="elder_brother" class="form-label">พี่ชาย</label>
                <div style="display: flex; align-items: center;">
                    <input type="text" name="elder_brother" class="form-control" required>
                    <span class="ms-2">คน</span>
                </div>
            </div>

            <div class="mb-3 col-md-3">
                <label for="younger_brother" class="form-label">น้องชาย</label>
                <div style="display: flex; align-items: center;">
                    <input type="text" name="younger_brother" class="form-control" required>
                    <span class="ms-2">คน</span>
                </div>
            </div>

            <div class="mb-3 col-md-3">
                <label for="elder_sister" class="form-label">พี่สาว</label>
                <div style="display: flex; align-items: center;">
                    <input type="text" name="elder_sister" class="form-control" required>
                    <span class="ms-2">คน</span>
                </div>
            </div>

            <div class="mb-3 col-md-3">
                <label for="younger_sister" class="form-label">น้องสาว</label>
                <div style="display: flex; align-items: center;">
                    <input type="text" name="younger_sister" class="form-control" required>
                    <span class="ms-2">คน</span>
                </div>
            </div>

        </div>

         <div class="row">
            <div class="col-md-4 mb-3">
                <label for="fathers_name">บิดาชื่อ - สกุล</label>
                <input type="text" name="fathers_name" class="form-control" required>
            </div>

            <div class="col-md-2 mb-3">
                <label for="fathers_age">อายุ (ปี)</label>
                <input type="number" name="fathers_age" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="fathers_occupation">อาชีพ</label>
                <input type="text" name="fathers_occupation" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="fathers_workplace">สถานที่ทำงาน</label>
                <input type="text" name="fathers_workplace" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="fathers_phone">โทรศัพท์</label>
                <input type="text" name="fathers_phone" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="registration_mother_name">มารดาชื่อ - สกุล</label>
                <input type="text" name="registration_mother_name" class="form-control" required>
            </div>

            <div class="col-md-2 mb-3">
                <label for="mother_age">อายุ (ปี)</label>
                <input type="number" name="mother_age" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="registration_mother_occupation">อาชีพ</label>
                <input type="text" name="registration_mother_occupation" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="mother_workplace">สถานที่ทำงาน</label>
                <input type="text" name="mother_workplace" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="mother_phone">โทรศัพท์</label>
                <input type="text" name="mother_phone" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="marital_status">สถานภาพสมรสของบิดา/มารดา</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="marital_status" id="marital_status_1" value="option_1" required>
                    <label class="form-check-label" for="marital_status_1">อยู่ด้วยกัน</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="marital_status" id="marital_status_2" value="option_2" required>
                    <label class="form-check-label" for="marital_status_2">แยกกันอยู่</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="marital_status" id="marital_status_3" value="option_3" required>
                    <label class="form-check-label" for="marital_status_3">เลิกร้างกัน</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="marital_status" id="marital_status_4" value="option_4" required>
                    <label class="form-check-label" for="marital_status_4">บิดาหรือมารดาแต่งงานใหม่</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="marital_status" id="marital_status_5" value="option_5" required>
                    <label class="form-check-label" for="marital_status_5">อื่นๆ</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="marital_status_details" class="form-control" placeholder="อื่นๆ โปรดระบุ">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="parent_name">ผู้ปกครองชื่อ - สกุล</label>
                <input type="text" name="parent_name" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="parent_age">อายุ (ปี)</label>
                <input type="number" name="parent_age" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="parent_relevant_as">เกี่ยวข้องเป็น</label>
                <input type="text" name="parent_relevant_as" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="parent_occupation">อาชีพ</label>
                <input type="text" name="parent_occupation" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="parent_workplace">สถานที่ทำงาน</label>
                <input type="text" name="parent_workplace" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="parent_phone">โทรศัพท์</label>
                <input type="text" name="parent_phone" class="form-control" required>
            </div>
        </div><br>

        <span><strong>ข้าพเจ้าขอรับรองว่ารายการข้างต้นถูกต้องและเป็นความจริงทุกประการ</strong></span><br>
        <span>เอกสารประกอบการจดทะเบียน</span><br>
        <span class="ms-3">1. สำเนาทะเบียนบ้าน</span><br>
        <span class="ms-3">2. สำเนาบัตรประชาชน</span><br>
        <span class="ms-3">3. แผนผังสถานประกอบกิจการ</span><br>
        <span class="ms-3">4. หนังสือมอบอำนาจ (ถ้ามี)</span><br>
        <span class="ms-3">5. เอกสารอื่นๆ</span><br><br>

        <div>
            <h3 for="attachments" class="form-label">แนบไฟล์</h3>
            <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
            <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 2MB)</small>
            <!-- แสดงรายการไฟล์ที่แนบ -->
            <div id="file-list" class="mt-1">
                <div class="d-flex flex-wrap gap-3"></div>
            </div>
        </div>

        <br>
        <hr><br>

        <div class="text-center w-full border">
            <button type="submit" class="btn btn-primary w-100 py-1"><i class="fa-solid fa-file-arrow-up me-2"></i></i>
                ส่งฟอร์มข้อมูล</button>
        </div>
    </div>

</form>

<script src="{{ asset('js/multipart_files.js') }}"></script>

{{-- <script>
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

</script> --}}
<script>
    // สำหรับการจัดการตัวเลือก "ญาติ"
    const careOptionRadios = document.getElementsByName('care_option');
    const relativeCareOptionDiv = document.getElementById('care_option_relativeDiv');

    careOptionRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'relative') {
                // แสดง div สำหรับ "ญาติ"
                relativeCareOptionDiv.style.display = 'block';
            } else {
                // ซ่อน div หากไม่ได้เลือก "ญาติ"
                relativeCareOptionDiv.style.display = 'none';
                document.getElementById('care_option_relative_text').value = ''; // ล้างค่า input
            }
        });
    });
</script>

<script>
    // สำหรับการจัดการตัวเลือก "อื่น ๆ"
    const otherCareOptionRadios = document.getElementsByName('care_option');
    const otherCareOptionDiv = document.getElementById('otherCareOptionDiv');

    otherCareOptionRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'Other') {
                // แสดง div สำหรับ "อื่น ๆ"
                otherCareOptionDiv.style.display = 'block';
            } else {
                // ซ่อน div หากไม่ได้เลือก "อื่น ๆ"
                otherCareOptionDiv.style.display = 'none';
                document.getElementById('care_option_other_text').value = ''; // ล้างค่า input
            }
        });
    });
</script>
@endsection
