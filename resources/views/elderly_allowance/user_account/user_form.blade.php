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
    <h2 class="text-center">แบบยืนยันสิทธิผู้สูงอายุ</h2><br>
    <form action="{{ route('ElderlyAllowanceFormCreate') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Trade Information -->
        <h3>Trade Information</h3>
        <label for="trade_condition">เกี่ยวข้องเป็น:</label>
        <input type="text" id="trade_condition" name="trade_condition" required>

        <label for="elderly_name">ชื่อผู้มอบอำนาจ:</label>
        <input type="text" id="elderly_name" name="elderly_name" required>

        <label for="trader_citizen_id">เลขบัตรประชาชน:</label>
        <input type="text" id="trader_citizen_id" name="trader_citizen_id" required>

        <label for="trader_address">ที่อยู่:</label>
        <textarea id="trader_address" name="trader_address" required></textarea>

        <label for="trader_phone_number">โทรศัพท์:</label>
        <input type="text" id="trader_phone_number" name="trader_phone_number" required>

        <br>
        <br>
        <!-- Personal Information -->
        <h3>Personal Information</h3>
        <label for="written_at">เขียนที่ :</label>
        <input type="text" id="written_at" name="written_at" required>

        <label for="written_date">วันที่:</label>
        <input type="date" id="written_date" name="written_date" required>
        <label for="salutation">คำนำหน้า:</label>
        <input type="text" id="salutation" name="salutation" required>

        <label for="first_name">ขื่่อ:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">นามสกุล:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="birth_day">วันเกิด:</label>
        <input type="date" id="birth_day" name="birth_day">

        <label for="age">อายุ:</label>
        <input type="number" id="age" name="age">

        <label for="nationality">สัญชาติ:</label>
        <input type="text" id="nationality" name="nationality">

        <label for="house_number">บ้านเลขที่:</label>
        <input type="text" id="house_number" name="house_number">

        <label for="village">หมู่:</label>
        <input type="text" id="village" name="village">

        <label for="alley">ซอย:</label>
        <input type="text" id="alley" name="alley">

        <label for="road">ถนน:</label>
        <input type="text" id="road" name="road">

        <label for="subdistrict">ตำบล:</label>
        <input type="text" id="subdistrict" name="subdistrict">

        <label for="district">อำเภอ:</label>
        <input type="text" id="district" name="district">

        <label for="province">จังหวัด:</label>
        <input type="text" id="province" name="province">

        <label for="postal_code">รหัสไปรษณีย:</label>
        <input type="text" id="postal_code" name="postal_code">

        <label for="phone_number">โทรศัพท์:</label>
        <input type="text" id="phone_number" name="phone_number">

        <label for="citizen_id">เลขบัตรประชาชน:</label>
        <input type="text" id="citizen_id" name="citizen_id">

        <label for="marital_status">Marital Status:</label>
        <select id="marital_status" name="marital_status" required>
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="widowed">Widowed</option>
            <option value="divorced">Divorced</option>
            <option value="separated">Separated</option>
            <option value="other">Other</option>
        </select>

        <label for="monthly_income">รายได้ต่อเดือน:</label>
        <input type="text" id="monthly_income" name="monthly_income">

        <label for="occupation">อาชีพ:</label>
        <input type="text" id="occupation" name="occupation">

        <br>
        <br>

        <h3>persons_options</h3>
        <label class="form-label"> ข้อมูลทั่วไป : สถานภาพการรับสวัสดิการภาครัฐ</label>
        <div>
            <input type="checkbox" name="welfare_type[]" id="welfare_type_aid" value="option1">
            <label for="welfare_type_aid">ไม่ได้รับเบี้ยยังชีพผู้สูงอายุ</label>
        </div>
        <div>
            <input type="checkbox" name="welfare_type[]" id="welfare_type_disability" value="option2">
            <label for="welfare_type_disability">ได้รับเงินสงเคราะห์เพื่อการยังชีพผู้ป่วยเอดส</label>
        </div>
        <div>
            <input type="checkbox" name="welfare_type[]" id="welfare_type_disability" value="option2">
            <label for="welfare_type_disability">ได้รับเงินเบี้ยความพิการ</label>
        </div>
        <div>
            <input type="checkbox" name="welfare_type[]" id="welfare_type_relocation" value="option4">
            <label for="welfare_type_relocation"> ย้ายภูมิลำเนาเข้ามาอยู่ใหม่ เมื่อ</label>
        </div>

        <!-- welfare_other_types input (visible when 'ย้ายภูมิลําเนาเข้ามาอยู่ใหม่' is checked) -->
        <div id="welfare_other_types_div" style="display: none;">
            <label for="welfare_other_types">รายละเอียดอื่นๆ</label>
            <input type="text" id="welfare_other_types" name="welfare_other_types" placeholder="กรอกข้อมูลเพิ่มเติม">
        </div>

        <br>

        <label class="form-label"> มีความประสงค์ขอรับเงินเบี้ยยังชีพผู้สูงอายุ โดยวิธีดังต่อไปนี้ (เลือก 1 วิธี)</label>
        <div>
            <input type="radio" name="request_for_money_type" id="money_type_option1" value="option1" required>
            <label for="money_type_option1">รับเงินสดด้วยตนเอง</label>
        </div>
        <div>
            <input type="radio" name="request_for_money_type" id="money_type_option2" value="option2">
            <label for="money_type_option2">รับเงินสดโดยบุคคลที่ได้รับมอบอํานาจจากผู้มีสิทธิ</label>
        </div>
        <div>
            <input type="radio" name="request_for_money_type" id="money_type_option3" value="option3">
            <label for="money_type_option3">โอนเงินเข้าบัญชีเงินฝากธนาคารในนามผู้มีสิทธิ</label>
        </div>
        <div>
            <input type="radio" name="request_for_money_type" id="money_type_option4" value="option4">
            <label for="money_type_option4">โอนเงินเข้าบัญชีเงินฝากธนาคารในนามบุคลที่ได้รับมอบอํานาจจากผู้มีสิทธิ</label>
        </div>

        <br>

        <label class="form-label">ประเภทเอกสารที่แนบ</label>
        <div>
            <input type="checkbox" name="document_type[]" id="document_type_id_card" value="option1">
            <label for="document_type_id_card">สำเนาบัตรประจำตัวประชาชน</label>
        </div>
        <div>
            <input type="checkbox" name="document_type[]" id="document_type_house_reg" value="option2">
            <label for="document_type_house_reg">สำเนาทะเบียนบ้าน</label>
        </div>
        <div>
            <input type="checkbox" name="document_type[]" id="document_type_bank_book" value="option3">
            <label for="document_type_bank_book">สำเนาสมุดบัญชีเงินฝากธนาคาร</label>
        </div>
        <div>
            <input type="checkbox" name="document_type[]" id="document_type_auth_letter" value="option4">
            <label for="document_type_auth_letter">หนังสือมอบอํานาจพร้อมสำเนาบัตรประจำตัวประชาชนของผู้มอบอำนาจและผู้รับมอบอำนาจ</label>
        </div>
        <div>
            <input type="checkbox" name="bank_option" id="bank_option" value="1" onclick="toggleAccountInputs()">
            <label for="bank_option">บัญชีเงินฝากธนาคาร</label>
        </div>

        <div class="form-group" id="bank_name_group" style="display: none;">
            <label for="bank_name">ชื่อธนาคาร</label>
            <input type="text" id="bank_name" name="bank_name">
        </div>

        <!-- Account Number (Input) - Initially hidden -->
        <div class="form-group" id="account_number_group" style="display: none;">
            <label for="account_number">บัญชีเลขที่</label>
            <input type="text" id="account_number" name="account_number">
        </div>

        <!-- Account Name (Input) - Initially hidden -->
        <div class="form-group" id="account_name_group" style="display: none;">
            <label for="account_name">ชื่อบัญชี</label>
            <input type="text" id="account_name" name="account_name">
        </div>

        <br>

        <div>
            <label for="attachments" class="form-label">แนบไฟล์</label>
            <input type="file" id="attachments" name="attachments[]" multiple>
            <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 2MB)</small>
        </div>

        <!-- แสดงรายการไฟล์ที่แนบ -->
        <div id="file-list" class="mt-3">
            <h5>ไฟล์ที่เลือก:</h5>
            <div class="d-flex flex-wrap gap-3"></div>
        </div>
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
</div>

<script>
    // Toggle display of the welfare_other_types field based on the 'ย้ายภูมิลําเนาเข้ามาอยู่ใหม่' checkbox
    document.getElementById('welfare_type_relocation').addEventListener('change', function() {
        const otherTypesDiv = document.getElementById('welfare_other_types_div');
        otherTypesDiv.style.display = this.checked ? 'block' : 'none';
    });

</script>

<script src="{{asset('js/multipart_files.js')}}"></script>

<script>
    // Function to toggle the visibility of account number and account name fields
    function toggleAccountInputs() {
        var checkBox = document.getElementById("bank_option");
        var accountNumberGroup = document.getElementById("account_number_group");
        var accountNameGroup = document.getElementById("account_name_group");
        var bankNameGroup = document.getElementById("bank_name_group");

        // If checkbox is checked, show the account inputs, otherwise hide them
        if (checkBox.checked) {
            accountNumberGroup.style.display = "block";
            accountNameGroup.style.display = "block";
            bankNameGroup.style.display = "block";
        } else {
            accountNumberGroup.style.display = "none";
            accountNameGroup.style.display = "none";
            bankNameGroup.style.display = "none";
        }
    }
</script>

@endsection
