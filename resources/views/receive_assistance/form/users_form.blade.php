@extends('dashboard.layout.users.layout_users')
@section('user_content')

<h2 class="text-center"> แบบคำขอรับการสงเคราะห์ </h2>

<form action="{{ route('ReceiveAssistanceFormCreate') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="written_at" class="form-label">เขียนที่</label>
        <input type="text" class="form-control" id="written_at" name="written_at">
    </div>

    <div class="mb-3">
        <label for="write_the_date" class="form-label">เขียนวันที่</label>
        <input type="date" class="form-control" id="write_the_date" name="write_the_date">
    </div>

    <div class="mb-3">
        <label for="learn" class="form-label">เรียน</label>
        <input type="text" class="form-control" id="learn" name="learn">
    </div>

    <div class="mb-3">
        <label for="salutation" class="form-label">ชื่อนำหน้า</label>
        <input type="text" class="form-control" id="salutation" name="salutation">
    </div>

    <div class="mb-3">
        <label for="first_name" class="form-label">ชื่อ</label>
        <input type="text" class="form-control" id="first_name" name="first_name">
    </div>

    <div class="mb-3">
        <label for="last_name" class="form-label">นามสกุล</label>
        <input type="text" class="form-control" id="last_name" name="last_name">
    </div>

    <div class="mb-3">
        <label for="birth_day" class="form-label">วันเกิด</label>
        <input type="date" class="form-control" id="birth_day" name="birth_day">
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">อายุ</label>
        <input type="number" class="form-control" id="age" name="age">
    </div>

    <div class="mb-3">
        <label for="nationality" class="form-label">สัญชาติ</label>
        <input type="text" class="form-control" id="nationality" name="nationality">
    </div>

    <div class="mb-3">
        <label for="village" class="form-label">หมู่</label>
        <input type="text" class="form-control" id="village" name="village">
    </div>

    <div class="mb-3">
        <label for="alley" class="form-label">ซอย</label>
        <input type="text" class="form-control" id="alley" name="alley">
    </div>

    <div class="mb-3">
        <label for="road" class="form-label">ถนน</label>
        <input type="text" class="form-control" id="road" name="road">
    </div>

    <div class="mb-3">
        <label for="subdistrict" class="form-label">ตำบล</label>
        <input type="text" class="form-control" id="subdistrict" name="subdistrict">
    </div>

    <div class="mb-3">
        <label for="district" class="form-label">อำเภอ</label>
        <input type="text" class="form-control" id="district" name="district">
    </div>

    <div class="mb-3">
        <label for="province" class="form-label">จังหวัด</label>
        <input type="text" class="form-control" id="province" name="province">
    </div>

    <div class="mb-3">
        <label for="postal_code" class="form-label">รหัสไปรษณีย์</label>
        <input type="text" class="form-control" id="postal_code" name="postal_code">
    </div>

    <div class="mb-3">
        <label for="phone_number" class="form-label">หมายเลขโทรศัพท์</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number">
    </div>

    <div class="mb-3">
        <label for="citizen_id" class="form-label">เลขบัตรประชาชน</label>
        <input type="text" class="form-control" id="citizen_id" name="citizen_id">
    </div>

    <br>

    <div>
        <label>1.ที่พักอาศัย</label>
        <div class="form-group">
            <div>
                <label>
                    <input type="radio" name="accommodation" value="option_1"> เป็นของตนเอง และมีลักษณะ
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" name="accommodation" value="option_2"> ชำรุดทรุดโทรม
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" name="accommodation" value="option_3"> ชำรุดทรุดโทรมบางส่วน
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" name="accommodation" value="option_4"> มั่นคงถาวร
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" name="accommodation" value="option_5"> เป็นของ
                </label>
            </div>
            <div class="form-group">
                <label for="accommodation_belongs_to">เป็นของ</label>
                <input type="text" class="form-control" id="accommodation_belongs_to" name="accommodation_belongs_to" placeholder="กรุณาระบุรายละเอียด">
            </div>

            <div class="form-group">
                <label for="accommodation_relevant_as">เกี่ยวข้องเป็น</label>
                <input type="text" class="form-control" id="accommodation_relevant_as" name="accommodation_relevant_as" placeholder="กรุณาระบุรายละเอียด">
            </div>
        </div>
    </div>

    <br>

    <div>
        <label>2. ที่พักอาศัยอยู่ห่างจากบ้านหลังที่ใกล้ที่สุดเป็นระทาง</label>
        <div class="form-group">
            <input type="text" class="form-control" id="away_from_home" name="away_from_home" placeholder="กรุณาระบุระยะทาง">
        </div>

        <div class="form-group">
            <label for="away_from_home_option">สามารถเดินทางได้</label>
            <div>
                <label>
                    <input type="radio" name="away_from_home_option" value="option_1"> สะดวก
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" name="away_from_home_option" value="option_2"> ลำบาก
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="away_from_home_option_dueto"> เนื่องจาก</label>
            <input type="text" class="form-control" id="away_from_home_option_dueto" name="away_from_home_option_dueto" placeholder="กรุณาระบุเหตุผลการลำบาก">
        </div>
    </div>

    <br>

    <div class="form-group">
        <label for="away_from_community">อยู่ห่างจากชุมชน/หมู่บ้านเป็นระยะทาง</label>
        <input type="text" class="form-control" id="away_from_community" name="away_from_community" placeholder="กรุณาระบุระยะทาง">
    </div>

    <div class="form-group">
        <label for="away_from_community_option">สามารถเดินทางได้</label>
        <div>
            <label>
                <input type="radio" name="away_from_community_option" value="option_1"> สะดวก
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="away_from_community_option" value="option_2"> ลำบาก
            </label>
        </div>
    </div>

    <div class="form-group">
        <label for="away_from_community_option_dueto"> เนื่องจาก</label>
        <input type="text" class="form-control" id="away_from_community_option_dueto" name="away_from_community_option_dueto" placeholder="กรุณาระบุเหตุผลการลำบาก">
    </div>

    <br>

    <div class="form-group">
        <label for="stay_away_from_agency"> อยู่ห่างจากหน่วยบริการของรัฐที่ใกล้ที่สุดเป็นระยะทาง</label>
        <input type="text" class="form-control" id="stay_away_from_agency" name="stay_away_from_agency" placeholder="กรุณาระบุระยะทาง">
    </div>

    <div class="form-group">
        <label for="stay_away_from_agency_option">สามารถเดินทางได้</label>
        <div>
            <label>
                <input type="radio" name="stay_away_from_agency_option" value="option_1"> สะดวก
            </label>
        </div>
        <div>
            <label>
                <input type="radio" name="stay_away_from_agency_option" value="option_2"> ลำบาก
            </label>
        </div>
    </div>

    <div class="form-group">
        <label for="stay_away_from_agency_option_dueto"> เนื่องจาก</label>
        <input type="text" class="form-control" id="stay_away_from_agency_option_dueto" name="stay_away_from_agency_option_dueto" placeholder="กรุณาระบุเหตุผลการลำบาก">
    </div>

    <br>

    <div>
        <label>3.ที่พักอาศัย</label><br>
        <div class="form-group">
            <input type="checkbox" id="residence" name="residence" value="yes">
            <label for="residence">อยู่เพียงลำพัง</label>
        </div>

        <div class="form-group">
            <label for="residence_stay_alone_dueto">เนื่องจาก</label>
            <input type="text" class="form-control" id="residence_stay_alone_dueto" name="residence_stay_alone_dueto" placeholder="กรุณาระบุเหตุผล">
        </div>

        <div class="form-group">
            <label for="residence_stay_alone_dueto_detail">มาประมาณ</label>
            <input type="text" class="form-control" id="residence_stay_alone_dueto_detail" name="residence_stay_alone_dueto_detail" placeholder="กรุณาระบุ">
        </div>

        <br>

        <div class="form-group">
            <input type="checkbox" id="residence_living_with" name="residence_living_with" value="yes">
            <label for="residence_living_with">อาศัยอยู่กับ</label>
            <input type="text" id="residence_living_with_detail" name="residence_living_with_detail">
        </div>


        <div class="form-group">
            <label for="residence_living_with_quantity">จำนวนคนที่อาศัยอยู่ด้วย</label>
            <input type="text" class="form-control" id="residence_living_with_quantity" name="residence_living_with_quantity" placeholder="กรุณาระบุจำนวนคนที่อาศัยอยู่ด้วย">
        </div>

        <div class="form-group">
            <label for="residence_living_with_working">เป็นผู้สามารถประกอบอาชีพได้จำนวน</label>
            <input type="text" class="form-control" id="residence_living_with_working" name="residence_living_with_working" placeholder="กรุณาระบุจำนวนคนที่ทำงาน">
        </div>

        <div class="form-group">
            <label for="residence_living_with_total_income">มีรายได้รวม</label>
            <input type="text" class="form-control" id="residence_living_with_total_income" name="residence_living_with_total_income" placeholder="กรุณาระบุรายได้รวมของผู้ที่อาศัยอยู่ด้วย">
        </div>

        <div class="form-group">
            <label for="residence_living_with_non_workers">ผู้ที่ไม่สามารถประกอบอาชีพได้เนื่องจาก</label>
            <input type="text" class="form-control" id="residence_living_with_non_workers" name="residence_living_with_non_workers" placeholder="กรุณาระบุจำนวนคนที่ไม่ทำงาน">
        </div>
    </div>

    <br>

    <div>
        <label> 4. รายได้ – รายจ่าย</label>
        <div class="form-group">
            <label for="total_income">รายได้รวม</label>
            <input type="text" class="form-control" id="total_income" name="total_income" placeholder="กรุณาระบุรายได้รวม">
        </div>

        <div class="form-group">
            <label for="source_of_income">แหล่งรายได้</label>
            <input type="text" class="form-control" id="source_of_income" name="source_of_income" placeholder="กรุณาระบุแหล่งรายได้">
        </div>

        <div class="form-group">
            <label for="used_for_expenses">ใช้จ่ายสำหรับ</label>
            <input type="text" class="form-control" id="used_for_expenses" name="used_for_expenses" placeholder="กรุณาระบุการใช้จ่าย">
        </div>
    </div>

    <br>

    <div>
        <div class="form-group">
            <label for="contact_person">ชื่อผู้ติดต่อ</label>
            <input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="กรุณาระบุชื่อผู้ติดต่อ">
        </div>

        <div class="form-group">
            <label for="contact_address_number">หมายเลขที่อยู่</label>
            <input type="text" class="form-control" id="contact_address_number" name="contact_address_number" placeholder="กรุณาระบุหมายเลขที่อยู่">
        </div>

        <div class="form-group">
            <label for="contact_road">ถนน</label>
            <input type="text" class="form-control" id="contact_road" name="contact_road" placeholder="กรุณาระบุชื่อถนน">
        </div>

        <div class="form-group">
            <label for="contact_alley">ซอย</label>
            <input type="text" class="form-control" id="contact_alley" name="contact_alley" placeholder="กรุณาระบุชื่อซอย">
        </div>

        <div class="form-group">
            <label for="contact_village">หมู่บ้าน</label>
            <input type="text" class="form-control" id="contact_village" name="contact_village" placeholder="กรุณาระบุชื่อหมู่บ้าน">
        </div>

        <div class="form-group">
            <label for="contact_subdistrict">ตำบล</label>
            <input type="text" class="form-control" id="contact_subdistrict" name="contact_subdistrict" placeholder="กรุณาระบุตำบล">
        </div>

        <div class="form-group">
            <label for="contact_district">อำเภอ</label>
            <input type="text" class="form-control" id="contact_district" name="contact_district" placeholder="กรุณาระบุอำเภอ">
        </div>

        <div class="form-group">
            <label for="contact_province">จังหวัด</label>
            <input type="text" class="form-control" id="contact_province" name="contact_province" placeholder="กรุณาระบุจังหวัด">
        </div>

        <div class="form-group">
            <label for="contact_postal_code">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" id="contact_postal_code" name="contact_postal_code" placeholder="กรุณาระบุรหัสไปรษณีย์">
        </div>

        <div class="form-group">
            <label for="contact_telephone">หมายเลขโทรศัพท์</label>
            <input type="text" class="form-control" id="contact_telephone" name="contact_telephone" placeholder="กรุณาระบุหมายเลขโทรศัพท์">
        </div>

        <div class="form-group">
            <label for="contact_fax">หมายเลขแฟกซ์</label>
            <input type="text" class="form-control" id="contact_fax" name="contact_fax" placeholder="กรุณาระบุหมายเลขแฟกซ์">
        </div>

        <div class="form-group">
            <label for="contact_relevant_as">ผู้เกี่ยวข้องในฐานะ</label>
            <input type="text" class="form-control" id="contact_relevant_as" name="contact_relevant_as" placeholder="กรุณาระบุผู้เกี่ยวข้องในฐานะ">
        </div>

    </div>

    <br>

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

@endsection
