@extends('dashboard.layout.users.layout_users')
@section('title', 'ข้อมูลผู้ขอรับการสงเคราะห์')
@section('user_content')
    <h3 class="text-center"> แบบคำขอรับการสงเคราะห์ </h3>

    <form action="{{ route('ReceiveAssistanceFormCreate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>ข้อมูลผู้ขอรับการสงเคราะห์</h3>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="written_at" class="form-label">เขียนที่</label>
                <input type="text" class="form-control" id="written_at" name="written_at">
            </div>
            <div class="col-md-6">
                <label for="write_the_date" class="form-label">เขียนวันที่</label>
                <input type="date" class="form-control" id="write_the_date" name="write_the_date">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="learn" class="form-label">เรียน</label>
                <input type="text" class="form-control" id="learn" name="learn">
            </div>
            <div class="col-md-6">
                <label for="salutation" class="form-label">ชื่อนำหน้า</label>
                <select class="form-select" id="salutation" name="salutation">
                    <option value="" selected disabled>เลือกคำนำหน้า</option>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="first_name" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
            <div class="col-md-6">
                <label for="last_name" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="birth_day" class="form-label">วันเกิด</label>
                <input type="date" class="form-control" id="birth_day" name="birth_day">
            </div>
            <div class="col-md-6">
                <label for="age" class="form-label">อายุ</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nationality" class="form-label">สัญชาติ</label>
                <input type="text" class="form-control" id="nationality" name="nationality">
            </div>
            <div class="col-md-6">
                <label for="village" class="form-label">หมู่</label>
                <input type="text" class="form-control" id="village" name="village">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="alley" class="form-label">ซอย</label>
                <input type="text" class="form-control" id="alley" name="alley">
            </div>
            <div class="col-md-6">
                <label for="road" class="form-label">ถนน</label>
                <input type="text" class="form-control" id="road" name="road">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="subdistrict" class="form-label">ตำบล</label>
                <input type="text" class="form-control" id="subdistrict" name="subdistrict">
            </div>
            <div class="col-md-6">
                <label for="district" class="form-label">อำเภอ</label>
                <input type="text" class="form-control" id="district" name="district">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="province" class="form-label">จังหวัด</label>
                <input type="text" class="form-control" id="province" name="province">
            </div>
            <div class="col-md-6">
                <label for="postal_code" class="form-label">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" id="postal_code" name="postal_code">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="phone_number" class="form-label">หมายเลขโทรศัพท์</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number">
            </div>
            <div class="col-md-6">
                <label for="citizen_id" class="form-label">เลขบัตรประชาชน</label>
                <input type="text" class="form-control" id="citizen_id" name="citizen_id">
            </div>
        </div>

        <hr>

        <div class="row mb-3">
            <div class="col-12">
                <h3>1. ที่พักอาศัย</h3>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="accommodation" value="option_1"
                        id="option_1">
                    <label class="form-check-label" for="option_1">เป็นของตนเอง และมีลักษณะ</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="accommodation" value="option_2"
                        id="option_2">
                    <label class="form-check-label" for="option_2">ชำรุดทรุดโทรม</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="accommodation" value="option_3"
                        id="option_3">
                    <label class="form-check-label" for="option_3">ชำรุดทรุดโทรมบางส่วน</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="accommodation" value="option_4"
                        id="option_4">
                    <label class="form-check-label" for="option_4">มั่นคงถาวร</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="accommodation" value="option_5"
                        id="option_5">
                    <label class="form-check-label" for="option_5">เป็นของ</label>
                </div>
            </div>

            <div class="row mb-3" id="accommodation-details" style="display: none;">
                <div class="col-md-6">
                    <label for="accommodation_belongs_to" class="form-label">เป็นของ</label>
                    <input type="text" class="form-control" id="accommodation_belongs_to"
                        name="accommodation_belongs_to" placeholder="กรุณาระบุรายละเอียด">
                </div>
                <div class="col-md-6">
                    <label for="accommodation_relevant_as" class="form-label">เกี่ยวข้องเป็น</label>
                    <input type="text" class="form-control" id="accommodation_relevant_as"
                        name="accommodation_relevant_as" placeholder="กรุณาระบุรายละเอียด">
                </div>
            </div>

            <hr>

            <!-- Section 1 -->
            <div class="row mb-3">
                <div class="col-12">
                    <h3>2. ที่พักอาศัยอยู่ห่างจากบ้านหลังที่ใกล้ที่สุดเป็นระยะทาง</h3>
                    <input type="text" class="form-control" id="away_from_home" name="away_from_home"
                        placeholder="กรุณาระบุระยะทาง">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label class="form-label">สามารถเดินทางได้</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="away_from_home_option_1"
                            name="away_from_home_option" value="option_1">
                        <label class="form-check-label" for="away_from_home_option_1">สะดวก</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="away_from_home_option_2"
                            name="away_from_home_option" value="option_2">
                        <label class="form-check-label" for="away_from_home_option_2">ลำบาก</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="away_from_home_option_dueto" class="form-label">เนื่องจาก</label>
                    <input type="text" class="form-control" id="away_from_home_option_dueto"
                        name="away_from_home_option_dueto" placeholder="กรุณาระบุเหตุผลการลำบาก">
                </div>
            </div>

            <!-- Section 2 -->
            <div class="row mb-3">
                <div class="col-12">
                    <label class="form-label" for="away_from_community">อยู่ห่างจากชุมชน/หมู่บ้านเป็นระยะทาง</label>
                    <input type="text" class="form-control" id="away_from_community" name="away_from_community"
                        placeholder="กรุณาระบุระยะทาง">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label class="form-label">สามารถเดินทางได้</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="away_from_community_option_1"
                            name="away_from_community_option" value="option_1">
                        <label class="form-check-label" for="away_from_community_option_1">สะดวก</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="away_from_community_option_2"
                            name="away_from_community_option" value="option_2">
                        <label class="form-check-label" for="away_from_community_option_2">ลำบาก</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="away_from_community_option_dueto" class="form-label">เนื่องจาก</label>
                    <input type="text" class="form-control" id="away_from_community_option_dueto"
                        name="away_from_community_option_dueto" placeholder="กรุณาระบุเหตุผลการลำบาก">
                </div>
            </div>

            <!-- Section 3 -->
            <div class="row mb-3">
                <div class="col-12">
                    <label class="form-label"
                        for="stay_away_from_agency">อยู่ห่างจากหน่วยบริการของรัฐที่ใกล้ที่สุดเป็นระยะทาง</label>
                    <input type="text" class="form-control" id="stay_away_from_agency" name="stay_away_from_agency"
                        placeholder="กรุณาระบุระยะทาง">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label class="form-label">สามารถเดินทางได้</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="stay_away_from_agency_option_1"
                            name="stay_away_from_agency_option" value="option_1">
                        <label class="form-check-label" for="stay_away_from_agency_option_1">สะดวก</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="stay_away_from_agency_option_2"
                            name="stay_away_from_agency_option" value="option_2">
                        <label class="form-check-label" for="stay_away_from_agency_option_2">ลำบาก</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="stay_away_from_agency_option_dueto" class="form-label">เนื่องจาก</label>
                    <input type="text" class="form-control" id="stay_away_from_agency_option_dueto"
                        name="stay_away_from_agency_option_dueto" placeholder="กรุณาระบุเหตุผลการลำบาก">
                </div>
            </div>



            <hr>

            <div class="row mb-3">
                <div class="col-12">
                    <h3>3. ที่พักอาศัย</h3>
                </div>
            </div>

            <!-- อยู่เพียงลำพัง -->
            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="residence" name="residence" value="yes">
                        <label class="form-check-label" for="residence">อยู่เพียงลำพัง</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="residence_stay_alone_dueto" class="form-label">เนื่องจาก</label>
                    <input type="text" class="form-control" id="residence_stay_alone_dueto"
                        name="residence_stay_alone_dueto" placeholder="กรุณาระบุเหตุผล">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="residence_stay_alone_dueto_detail" class="form-label">มาประมาณ</label>
                    <input type="text" class="form-control" id="residence_stay_alone_dueto_detail"
                        name="residence_stay_alone_dueto_detail" placeholder="กรุณาระบุ">
                </div>
            </div>

            <!-- อาศัยอยู่กับ -->
            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="residence_living_with"
                            name="residence_living_with" value="yes">
                        <label class="form-check-label" for="residence_living_with">อาศัยอยู่กับ</label>
                    </div>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" id="residence_living_with_detail"
                        name="residence_living_with_detail" placeholder="กรุณาระบุรายละเอียด">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="residence_living_with_quantity" class="form-label">จำนวนคนที่อาศัยอยู่ด้วย</label>
                    <input type="text" class="form-control" id="residence_living_with_quantity"
                        name="residence_living_with_quantity" placeholder="กรุณาระบุจำนวนคนที่อาศัยอยู่ด้วย">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="residence_living_with_working" class="form-label">เป็นผู้สามารถประกอบอาชีพได้จำนวน</label>
                    <input type="text" class="form-control" id="residence_living_with_working"
                        name="residence_living_with_working" placeholder="กรุณาระบุจำนวนคนที่ทำงาน">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="residence_living_with_total_income" class="form-label">มีรายได้รวม</label>
                    <input type="text" class="form-control" id="residence_living_with_total_income"
                        name="residence_living_with_total_income" placeholder="กรุณาระบุรายได้รวมของผู้ที่อาศัยอยู่ด้วย">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="residence_living_with_non_workers"
                        class="form-label">ผู้ที่ไม่สามารถประกอบอาชีพได้เนื่องจาก</label>
                    <input type="text" class="form-control" id="residence_living_with_non_workers"
                        name="residence_living_with_non_workers" placeholder="กรุณาระบุจำนวนคนที่ไม่ทำงาน">
                </div>
            </div>

            <hr>

            <div class="my-2">
                <h3> 4. รายได้ – รายจ่าย</h3>
                <div class="form-group">
                    <label for="total_income">รายได้รวม</label>
                    <input type="text" class="form-control" id="total_income" name="total_income"
                        placeholder="กรุณาระบุรายได้รวม">
                </div>

                <div class="form-group">
                    <label for="source_of_income">แหล่งรายได้</label>
                    <input type="text" class="form-control" id="source_of_income" name="source_of_income"
                        placeholder="กรุณาระบุแหล่งรายได้">
                </div>

                <div class="form-group">
                    <label for="used_for_expenses">ใช้จ่ายสำหรับ</label>
                    <input type="text" class="form-control" id="used_for_expenses" name="used_for_expenses"
                        placeholder="กรุณาระบุการใช้จ่าย">
                </div>
            </div>

            <hr>


            <div class="row my-3">
                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <h3>5. ข้อมูลการติดต่อ</h3>
                    <label for="contact_person">ชื่อผู้ติดต่อ</label>
                    <input type="text" class="form-control" id="contact_person" name="contact_person"
                        placeholder="กรุณาระบุชื่อผู้ติดต่อ">
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <label for="contact_address_number">หมายเลขที่อยู่</label>
                    <input type="text" class="form-control" id="contact_address_number" name="contact_address_number"
                        placeholder="กรุณาระบุหมายเลขที่อยู่">
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <label for="contact_road">ถนน</label>
                    <input type="text" class="form-control" id="contact_road" name="contact_road"
                        placeholder="กรุณาระบุชื่อถนน">
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <label for="contact_alley">ซอย</label>
                    <input type="text" class="form-control" id="contact_alley" name="contact_alley"
                        placeholder="กรุณาระบุชื่อซอย">
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <label for="contact_village">หมู่บ้าน</label>
                    <input type="text" class="form-control" id="contact_village" name="contact_village"
                        placeholder="กรุณาระบุชื่อหมู่บ้าน">
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <label for="contact_subdistrict">ตำบล</label>
                    <input type="text" class="form-control" id="contact_subdistrict" name="contact_subdistrict"
                        placeholder="กรุณาระบุตำบล">
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <label for="contact_district">อำเภอ</label>
                    <input type="text" class="form-control" id="contact_district" name="contact_district"
                        placeholder="กรุณาระบุอำเภอ">
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <label for="contact_province">จังหวัด</label>
                    <input type="text" class="form-control" id="contact_province" name="contact_province"
                        placeholder="กรุณาระบุจังหวัด">
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <label for="contact_postal_code">รหัสไปรษณีย์</label>
                    <input type="text" class="form-control" id="contact_postal_code" name="contact_postal_code"
                        placeholder="กรุณาระบุรหัสไปรษณีย์">
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <label for="contact_telephone">หมายเลขโทรศัพท์</label>
                    <input type="text" class="form-control" id="contact_telephone" name="contact_telephone"
                        placeholder="กรุณาระบุหมายเลขโทรศัพท์">
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <label for="contact_fax">หมายเลขแฟกซ์</label>
                    <input type="text" class="form-control" id="contact_fax" name="contact_fax"
                        placeholder="กรุณาระบุหมายเลขแฟกซ์">
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group">
                    <label for="contact_relevant_as">ผู้เกี่ยวข้องในฐานะ</label>
                    <input type="text" class="form-control" id="contact_relevant_as" name="contact_relevant_as"
                        placeholder="กรุณาระบุผู้เกี่ยวข้องในฐานะ">
                </div>
            </div>

            <hr>

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
    </form>

    <script src="{{ asset('js/multipart_files.js') }}"></script>

    <script>
        // Get reference to the radio buttons and the div to toggle
        const option5Radio = document.getElementById('option_5');
        const accommodationDetails = document.getElementById('accommodation-details');

        // Function to handle the display of the div based on radio selection
        function toggleAccommodationDetails() {
            if (option5Radio.checked) {
                accommodationDetails.style.display = 'block'; // Show the details div
            } else {
                accommodationDetails.style.display = 'none'; // Hide the details div
            }
        }

        // Attach the function to the radio buttons
        const radios = document.querySelectorAll('input[name="accommodation"]');
        radios.forEach(radio => {
            radio.addEventListener('change', toggleAccommodationDetails);
        });

        // Initially check the status of the radio buttons in case of page load
        toggleAccommodationDetails();
    </script>
@endsection
