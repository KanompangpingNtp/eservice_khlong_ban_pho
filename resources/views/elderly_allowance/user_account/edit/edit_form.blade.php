@extends('dashboard.layout.users.layout_users')
@section('title', 'แก้ไขสิทธิผู้สูงอายุ')
@section('user_content')

    <div class="container">
        <h3 class="text-center">แก้ไขฟอร์มแบบยืนยันสิทธิผู้สูงอายุ</h3><br>

        <form action="{{ route('ElderlyAllowanceFormUserUpdate', $form->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <h3>ข้อมูลผู้รับมอบอำนาจ</h3>
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="trade_condition">เกี่ยวข้องเป็น:</label>
                    <input type="text" id="trade_condition" name="trade_condition" class="form-control"
                        value="{{ old('written_at', $form->traders->first()->trade_condition ?? '') }}" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="elderly_name">ชื่อผู้มอบอำนาจ:</label>
                    <input type="text" id="elderly_name" name="elderly_name" class="form-control"
                        value="{{ old('elderly_name', $form->traders->first()->elderly_name ?? '') }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="trader_citizen_id">เลขบัตรประชาชน:</label>
                    <input type="text" id="trader_citizen_id" name="trader_citizen_id" class="form-control"
                        value="{{ old('trader_citizen_id', $form->traders->first()->citizen_id ?? '') }}" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="trader_phone_number">โทรศัพท์:</label>
                    <input type="text" id="trader_phone_number" name="trader_phone_number" class="form-control"
                        value="{{ old('trader_phone_number', $form->traders->first()->phone_number ?? '') }}" required>
                </div>
            </div>

            <div class="row mb-3">

                <div class="col-12">
                    <label for="trader_address">ที่อยู่:</label>
                    <textarea id="trader_address" name="trader_address" class="form-control" required>{{ old('elderly_name', $form->traders->first()->address ?? '') }}</textarea>
                </div>
            </div>

            <hr>

            <!-- Personal Information -->
            <h3>ข้อมูลผู้สูงอายุ</h3>
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="written_at">เขียนที่:</label>
                    <input type="text" id="written_at" name="written_at" class="form-control"
                        value="{{ old('date', $form->written_at) }}" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="written_date">วันที่:</label>
                    <input type="date" id="written_date" name="written_date" class="form-control"
                        value="{{ old('written_date', $form->written_date) }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="salutation">คำนำหน้า:</label>
                    <input type="text" id="salutation" name="salutation" class="form-control"
                        value="{{ old('salutation', $form->salutation) }}" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="first_name">ขื่่อ:</label>
                    <input type="text" id="first_name" name="first_name" class="form-control"
                        value="{{ old('first_name', $form->first_name) }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="last_name">นามสกุล:</label>
                    <input type="text" id="last_name" name="last_name" class="form-control"
                        value="{{ old('last_name', $form->last_name) }}" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="birth_day">วันเกิด:</label>
                    <input type="date" id="birth_day" name="birth_day" class="form-control"
                        value="{{ old('birth_day', $form->birth_day) }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="age">อายุ:</label>
                    <input type="number" id="age" name="age" class="form-control"
                        value="{{ old('age', $form->age) }}" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="nationality">สัญชาติ:</label>
                    <input type="text" id="nationality" name="nationality" class="form-control"
                        value="{{ old('nationality', $form->nationality) }}"required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="house_number">บ้านเลขที่:</label>
                    <input type="text" id="house_number" name="house_number" class="form-control"
                        value="{{ old('house_number', $form->house_number) }}" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="village">หมู่:</label>
                    <input type="text" id="village" name="village" class="form-control"
                        value="{{ old('village', $form->village) }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="alley">ซอย:</label>
                    <input type="text" id="alley" name="alley" class="form-control"
                        value="{{ old('alley', $form->alley) }}" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="road">ถนน:</label>
                    <input type="text" id="road" name="road" class="form-control"
                        value="{{ old('road', $form->road) }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="subdistrict">ตำบล:</label>
                    <input type="text" id="subdistrict" name="subdistrict" class="form-control"
                        value="{{ old('subdistrict', $form->subdistrict) }}" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="district">อำเภอ:</label>
                    <input type="text" id="district" name="district" class="form-control"
                        value="{{ old('district', $form->district) }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="province">จังหวัด:</label>
                    <input type="text" id="province" name="province" class="form-control"
                        value="{{ old('province', $form->province) }}" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="postal_code">รหัสไปรษณีย:</label>
                    <input type="text" id="postal_code" name="postal_code" class="form-control"
                        value="{{ old('postal_code', $form->postal_code) }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="phone_number">โทรศัพท์:</label>
                    <input type="text" id="phone_number" name="phone_number" class="form-control"
                        value="{{ old('phone_number', $form->phone_number) }}" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="citizen_id">เลขบัตรประชาชน:</label>
                    <input type="text" id="citizen_id" name="citizen_id" class="form-control"
                        value="{{ old('citizen_id', $form->citizen_id) }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="marital_status">สถานภาพการสมรส:</label>
                    <select id="marital_status" name="marital_status" class="form-control" required>
                        <option value="single">โสด</option>
                        <option value="married">แต่งงานแล้ว</option>
                        <option value="widowed">เป็นม่าย</option>
                        <option value="divorced">หย่าร้าง</option>
                        <option value="separated">แยกจากกัน</option>
                        <option value="other">อื่นๆ</option>
                    </select>
                </div>
                <div class="col-12 col-md-6">
                    <label for="monthly_income">รายได้ต่อเดือน:</label>
                    <input type="text" id="monthly_income" name="monthly_income" class="form-control"
                        value="{{ old('monthly_income', $form->monthly_income) }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="occupation">อาชีพ:</label>
                    <input type="text" id="occupation" name="occupation" class="form-control"
                        value="{{ old('occupation', $form->occupation) }}" required>
                </div>
            </div>

            <hr>

            <h3> ข้อมูลทั่วไป : สถานภาพการรับสวัสดิการภาครัฐ</h3>
            <div class="form-check">
                <input type="checkbox" name="welfare_type[]" id="welfare_type_aid" value="option1"
                    class="form-check-input"
                    {{ in_array('option1', old('welfare_type', $form->personsOptions->first()->welfare_type ?? [])) ? 'checked' : '' }}>
                <label for="welfare_type_aid" class="form-check-label">ไม่ได้รับเบี้ยยังชีพผู้สูงอายุ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="welfare_type[]" id="welfare_type_disability" value="option2"
                    class="form-check-input"
                    {{ in_array('option2', old('welfare_type', $form->personsOptions->first()->welfare_type ?? [])) ? 'checked' : '' }}>
                <label for="welfare_type_disability"
                    class="form-check-label">ได้รับเงินสงเคราะห์เพื่อการยังชีพผู้ป่วยเอดส์</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="welfare_type[]" id="welfare_type_disability2" value="option3"
                    class="form-check-input"
                    {{ in_array('option3', old('welfare_type', $form->personsOptions->first()->welfare_type ?? [])) ? 'checked' : '' }}>
                <label for="welfare_type_disability2" class="form-check-label">ได้รับเงินเบี้ยความพิการ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="welfare_type[]" id="welfare_type_relocation" value="option4"
                    class="form-check-input"
                    {{ in_array('option4', old('welfare_type', $form->personsOptions->first()->welfare_type ?? [])) ? 'checked' : '' }}>
                <label for="welfare_type_relocation"> ย้ายภูมิลำเนาเข้ามาอยู่ใหม่ เมื่อ</label>
            </div>

            <!-- welfare_other_types input (visible when 'ย้ายภูมิลําเนาเข้ามาอยู่ใหม่' is checked) -->
            <div id="welfare_other_types_div"
                style="display: {{ in_array('option4', old('welfare_type', $form->personsOptions->first()->welfare_type ?? [])) ? 'block' : 'none' }};">
                <label for="welfare_other_types" class="form-label">รายละเอียดอื่นๆ</label>
                <input type="text" id="welfare_other_types" name="welfare_other_types" class="form-control"
                    value="{{ old('welfare_other_types', $form->personsOptions->first()->welfare_other_types ?? '') }}"
                    placeholder="กรอกข้อมูลเพิ่มเติม">
            </div>

            <hr>

            <!-- Request Method -->
            <div class="mb-4">
                <h3>มีความประสงค์ขอรับเงินเบี้ยยังชีพผู้สูงอายุ โดยวิธีดังต่อไปนี้ (เลือก 1
                    วิธี)</h3>
                <div class="form-check">
                    <input type="radio" name="request_for_money_type" id="money_type_option1" value="option1"
                        class="form-check-input"
                        {{ old('request_for_money_type', $form->personsOptions->first()->request_for_money_type ?? '') == 'option1' ? 'checked' : '' }}
                        required>
                    <label for="money_type_option1" class="form-check-label">รับเงินสดด้วยตนเอง</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="request_for_money_type" id="money_type_option2" value="option2"
                        {{ old('request_for_money_type', $form->personsOptions->first()->request_for_money_type ?? '') == 'option2' ? 'checked' : '' }}
                        class="form-check-input">
                    <label for="money_type_option2"
                        class="form-check-label">รับเงินสดโดยบุคคลที่ได้รับมอบอํานาจจากผู้มีสิทธิ</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="request_for_money_type" id="money_type_option3" value="option3"
                        {{ old('request_for_money_type', $form->personsOptions->first()->request_for_money_type ?? '') == 'option3' ? 'checked' : '' }}
                        class="form-check-input">
                    <label for="money_type_option3"
                        class="form-check-label">โอนเงินเข้าบัญชีเงินฝากธนาคารในนามผู้มีสิทธิ</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="request_for_money_type" id="money_type_option4" value="option4"
                        {{ old('request_for_money_type', $form->personsOptions->first()->request_for_money_type ?? '') == 'option4' ? 'checked' : '' }}
                        class="form-check-input">
                    <label for="money_type_option4"
                        class="form-check-label">โอนเงินเข้าบัญชีเงินฝากธนาคารในนามบุคลที่ได้รับมอบอํานาจจากผู้มีสิทธิ</label>
                </div>
            </div>

            <hr>

            @php
                $documentType = $form->personsOptions->first()->document_type ?? '[]';
                if (!is_string($documentType)) {
                    $documentType = '[]';
                }
                $documentTypeArray = json_decode($documentType, true);
            @endphp

            <h3>ประเภทเอกสารที่แนบ</h3>
            <div class="form-check">
                <input type="checkbox" name="document_type[]" id="document_type_id_card" value="option1"
                    class="form-check-input" {{ in_array('option1', $documentTypeArray) ? 'checked' : '' }}>
                <label for="document_type_id_card" class="form-check-label">สำเนาบัตรประจำตัวประชาชน</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="document_type[]" id="document_type_house_reg" value="option2"
                    class="form-check-input" {{ in_array('option2', $documentTypeArray) ? 'checked' : '' }}>
                <label for="document_type_house_reg" class="form-check-label">สำเนาทะเบียนบ้าน</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="document_type[]" id="document_type_bank_book" value="option3"
                    class="form-check-input" {{ in_array('option3', $documentTypeArray) ? 'checked' : '' }}>
                <label for="document_type_bank_book" class="form-check-label">สำเนาสมุดบัญชีเงินฝากธนาคาร</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="document_type[]" id="document_type_auth_letter" value="option4"
                    class="form-check-input" {{ in_array('option4', $documentTypeArray) ? 'checked' : '' }}>
                <label for="document_type_auth_letter" class="form-check-label">หนังสือมอบอำนาจ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="bank_option" id="bank_option" value="1" class="form-check-input"
                    onclick="toggleAccountInputs()"
                    {{ old('bank_option', $form->bankacoption->first()->bank_option ?? '') == '1' ? 'checked' : '' }}>
                <label for="bank_option" class="form-check-label">บัญชีเงินฝากธนาคาร</label>
            </div>
            <div class="form-group" id="bank_name_group" style="display: none;">
                <label for="bank_name" class="form-label">ชื่อธนาคาร</label>
                <input type="text" id="bank_name" name="bank_name" class="form-control"
                    value="{{ old('bank_name', $form->bankacoption->first()->bank_name ?? '') }}">
            </div>

            <!-- Account Number (Input) - Initially hidden -->
            <div class="form-group" id="account_number_group" style="display: none;">
                <label for="account_number" class="form-label">บัญชีเลขที่</label>
                <input type="text" id="account_number" name="account_number" class="form-control"
                    value="{{ old('account_number', $form->bankacoption->first()->account_number ?? '') }}">
            </div>

            <!-- Account Name (Input) - Initially hidden -->
            <div class="form-group" id="account_name_group" style="display: none;">
                <label for="account_name" class="form-label">ชื่อบัญชี</label>
                <input type="text" id="account_name" name="account_name" class="form-control"
                    value="{{ old('account_name', $form->bankacoption->first()->account_name ?? '') }}">
            </div>

            <hr>

            <div class="mb-3">
                <label class="form-label">ไฟล์แนบปัจจุบัน</label>
                <div class="list-group">
                    @foreach ($form->attachments as $attachment)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ asset('storage/' . $attachment->file_path) }}" target="_blank"
                                class="text-truncate" style="max-width: 80%;">
                                {{ basename($attachment->file_path) }}
                            </a>
                            <div class="form-check">
                                <input type="checkbox" name="delete_attachments[]" value="{{ $attachment->id }}"
                                    class="form-check-input">
                                <label class="form-check-label"
                                    for="delete_attachments_{{ $attachment->id }}">ลบไฟล์นี้</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div>
                <h3>เพิ่มแนบไฟล์</h3>
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
        </form>
    </div>


    <script src="{{ asset('js/multipart_files.js') }}"></script>

    <script>
        // Toggle display of the welfare_other_types field based on the 'ย้ายภูมิลําเนาเข้ามาอยู่ใหม่' checkbox
        document.getElementById('welfare_type_relocation').addEventListener('change', function() {
            const otherTypesDiv = document.getElementById('welfare_other_types_div');
            otherTypesDiv.style.display = this.checked ? 'block' : 'none';
        });
    </script>

    <script>
        // Function to toggle the visibility of account inputs based on the checkbox
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

        // Check inputs on page load to determine visibility
        document.addEventListener("DOMContentLoaded", function() {
            var checkBox = document.getElementById("bank_option");
            var accountNumberInput = document.getElementById("account_number");
            var accountNameInput = document.getElementById("account_name");
            var bankNameInput = document.getElementById("bank_name");

            // If any of the inputs have values or the checkbox is checked, display the groups
            if (
                checkBox.checked ||
                accountNumberInput.value.trim() !== "" ||
                accountNameInput.value.trim() !== "" ||
                bankNameInput.value.trim() !== ""
            ) {
                checkBox.checked = true; // Ensure the checkbox is checked
                toggleAccountInputs();
            }
        });
    </script>


@endsection
