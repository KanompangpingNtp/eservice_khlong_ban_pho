@extends('dashboard.layout.users.layout_users')
@section('title', 'แก้ไขข้อมูลผู้ขอรับการสงเคราะห์')
@section('user_content')
    <h3 class="text-center"> แก้ไขแบบคำขอรับการสงเคราะห์ </h3>
    <form action="{{ route('updateReceiveAssistance', $form->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h3>ข้อมูลผู้ขอรับการสงเคราะห์</h3>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="written_at" class="form-label">เขียนที่</label>
                <input type="text" class="form-control" id="written_at" name="written_at"
                    value="{{ old('written_at', $form->written_at) }}">
            </div>
            <div class="col-md-6">
                <label for="write_the_date" class="form-label">เขียนวันที่</label>
                <input type="date" class="form-control" id="write_the_date" name="write_the_date"
                    value="{{ old('write_the_date', $form->write_the_date) }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="learn" class="form-label">เรียน</label>
                <input type="text" class="form-control" id="learn" name="learn"
                    value="{{ old('learn', $form->learn) }}">
            </div>
            <div class="col-md-6">
                <label for="salutation" class="form-label">ชื่อนำหน้า</label>
                <input type="text" class="form-control" id="salutation" name="salutation"
                    value="{{ old('salutation', $form->salutation) }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="first_name" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="first_name" name="first_name"
                    value="{{ old('first_name', $form->first_name) }}">
            </div>
            <div class="col-md-6">
                <label for="last_name" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="last_name" name="last_name"
                    value="{{ old('last_name', $form->last_name) }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="birth_day" class="form-label">วันเกิด</label>
                <input type="date" class="form-control" id="birth_day" name="birth_day"
                    value="{{ old('birth_day', $form->birth_day) }}">
            </div>
            <div class="col-md-6">
                <label for="age" class="form-label">อายุ</label>
                <input type="number" class="form-control" id="age" name="age"
                    value="{{ old('age', $form->age) }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nationality" class="form-label">สัญชาติ</label>
                <input type="text" class="form-control" id="nationality" name="nationality"
                    value="{{ old('nationality', $form->nationality) }}">
            </div>
            <div class="col-md-6">
                <label for="village" class="form-label">หมู่</label>
                <input type="text" class="form-control" id="village" name="village"
                    value="{{ old('village', $form->village) }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="alley" class="form-label">ซอย</label>
                <input type="text" class="form-control" id="alley" name="alley"
                    value="{{ old('alley', $form->alley) }}">
            </div>
            <div class="col-md-6">
                <label for="road" class="form-label">ถนน</label>
                <input type="text" class="form-control" id="road" name="road"
                    value="{{ old('road', $form->road) }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="subdistrict" class="form-label">ตำบล</label>
                <input type="text" class="form-control" id="subdistrict" name="subdistrict"
                    value="{{ old('subdistrict', $form->subdistrict) }}">
            </div>
            <div class="col-md-6">
                <label for="district" class="form-label">อำเภอ</label>
                <input type="text" class="form-control" id="district" name="district"
                    value="{{ old('district', $form->district) }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="province" class="form-label">จังหวัด</label>
                <input type="text" class="form-control" id="province" name="province"
                    value="{{ old('province', $form->province) }}">
            </div>
            <div class="col-md-6">
                <label for="postal_code" class="form-label">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" id="postal_code" name="postal_code"
                    value="{{ old('postal_code', $form->postal_code) }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="phone_number" class="form-label">หมายเลขโทรศัพท์</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number"
                    value="{{ old('phone_number', $form->phone_number) }}">
            </div>
            <div class="col-md-6">
                <label for="citizen_id" class="form-label">เลขบัตรประชาชน</label>
                <input type="text" class="form-control" id="citizen_id" name="citizen_id"
                    value="{{ old('citizen_id', $form->citizen_id) }}">
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <h3>1. ที่พักอาศัย</h3>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <!-- Radio Buttons -->
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="accommodation" value="option_1"
                            id="option_1"
                            {{ old('accommodation', $form->assistImpartings->first()->accommodation ?? '') == 'option_1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="option_1">เป็นของตนเอง และมีลักษณะ</label>
                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="accommodation" value="option_2"
                            id="option_2"
                            {{ old('accommodation', $form->assistImpartings->first()->accommodation ?? '') == 'option_2' ? 'checked' : '' }}>
                        <label class="form-check-label" for="option_2">ชำรุดทรุดโทรม</label>
                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="accommodation" value="option_3"
                            id="option_3"
                            {{ old('accommodation', $form->assistImpartings->first()->accommodation ?? '') == 'option_3' ? 'checked' : '' }}>
                        <label class="form-check-label" for="option_3">ชำรุดทรุดโทรมบางส่วน</label>
                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="accommodation" value="option_4"
                            id="option_4"
                            {{ old('accommodation', $form->assistImpartings->first()->accommodation ?? '') == 'option_4' ? 'checked' : '' }}>
                        <label class="form-check-label" for="option_4">มั่นคงถาวร</label>
                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="accommodation" value="option_5"
                            id="option_5"
                            {{ old('accommodation', $form->assistImpartings->first()->accommodation ?? '') == 'option_5' ? 'checked' : '' }}>
                        <label class="form-check-label" for="option_5">เป็นของ</label>
                    </div>
                </div>
            </div>

            <!-- Text Input: เป็นของ -->
            <div class="col-12 col-md-6">
                <div class="form-group mt-3">
                    <label for="accommodation_belongs_to" class="form-label">เป็นของ</label>
                    <input type="text" class="form-control" id="accommodation_belongs_to"
                        name="accommodation_belongs_to" placeholder="กรุณาระบุรายละเอียด"
                        value="{{ old('accommodation_belongs_to', $form->assistImpartings->first()->accommodation_belongs_to ?? '') }}">
                </div>
            </div>

            <!-- Text Input: เกี่ยวข้องเป็น -->
            <div class="col-12 col-md-6">
                <div class="form-group mt-3">
                    <label for="accommodation_relevant_as" class="form-label">เกี่ยวข้องเป็น</label>
                    <input type="text" class="form-control" id="accommodation_relevant_as"
                        name="accommodation_relevant_as" placeholder="กรุณาระบุรายละเอียด"
                        value="{{ old('accommodation_relevant_as', $form->assistImpartings->first()->accommodation_relevant_as ?? '') }}">
                </div>
            </div>
        </div>

        <hr>

        <div class="mb-3">
            <h3>2. ที่พักอาศัยอยู่ห่างจากบ้านหลังที่ใกล้ที่สุดเป็นระทาง</h3>
            <input type="text" class="form-control" id="away_from_home" name="away_from_home"
                placeholder="กรุณาระบุระยะทาง"
                value="{{ old('away_from_home', $form->assistImpartings->first()->away_from_home ?? '') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">สามารถเดินทางได้</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="away_from_home_option" value="option_1"
                    id="away_option_1"
                    {{ old('away_from_home_option', $form->assistImpartings->first()->away_from_home_option ?? '') == 'option_1' ? 'checked' : '' }}>
                <label class="form-check-label" for="away_option_1">สะดวก</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="away_from_home_option" value="option_2"
                    id="away_option_2"
                    {{ old('away_from_home_option', $form->assistImpartings->first()->away_from_home_option ?? '') == 'option_2' ? 'checked' : '' }}>
                <label class="form-check-label" for="away_option_2">ลำบาก</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="away_from_home_option_dueto" class="form-label">เนื่องจาก</label>
            <input type="text" class="form-control" id="away_from_home_option_dueto"
                name="away_from_home_option_dueto" placeholder="กรุณาระบุเหตุผลการลำบาก"
                value="{{ old('away_from_home_option_dueto', $form->assistImpartings->first()->away_from_home_option_dueto ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="away_from_community" class="form-label">อยู่ห่างจากชุมชน/หมู่บ้านเป็นระยะทาง</label>
            <input type="text" class="form-control" id="away_from_community" name="away_from_community"
                placeholder="กรุณาระบุระยะทาง"
                value="{{ old('away_from_community', $form->assistImpartings->first()->away_from_community ?? '') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">สามารถเดินทางได้</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="away_from_community_option" value="option_1"
                    id="community_option_1"
                    {{ old('away_from_community_option', $form->assistImpartings->first()->away_from_community_option ?? '') == 'option_1' ? 'checked' : '' }}>
                <label class="form-check-label" for="community_option_1">สะดวก</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="away_from_community_option" value="option_2"
                    id="community_option_2"
                    {{ old('away_from_community_option', $form->assistImpartings->first()->away_from_community_option ?? '') == 'option_2' ? 'checked' : '' }}>
                <label class="form-check-label" for="community_option_2">ลำบาก</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="away_from_community_option_dueto" class="form-label">เนื่องจาก</label>
            <input type="text" class="form-control" id="away_from_community_option_dueto"
                name="away_from_community_option_dueto" placeholder="กรุณาระบุเหตุผลการลำบาก"
                value="{{ old('away_from_community_option_dueto', $form->assistImpartings->first()->away_from_community_option_dueto ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="stay_away_from_agency"
                class="form-label">อยู่ห่างจากหน่วยบริการของรัฐที่ใกล้ที่สุดเป็นระยะทาง</label>
            <input type="text" class="form-control" id="stay_away_from_agency" name="stay_away_from_agency"
                placeholder="กรุณาระบุระยะทาง"
                value="{{ old('stay_away_from_agency', $form->assistImpartings->first()->stay_away_from_agency ?? '') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">สามารถเดินทางได้</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="stay_away_from_agency_option" value="option_1"
                    id="agency_option_1"
                    {{ old('stay_away_from_agency_option', $form->assistImpartings->first()->stay_away_from_agency_option ?? '') == 'option_1' ? 'checked' : '' }}>
                <label class="form-check-label" for="agency_option_1">สะดวก</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="stay_away_from_agency_option" value="option_2"
                    id="agency_option_2"
                    {{ old('stay_away_from_agency_option', $form->assistImpartings->first()->stay_away_from_agency_option ?? '') == 'option_2' ? 'checked' : '' }}>
                <label class="form-check-label" for="agency_option_2">ลำบาก</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="stay_away_from_agency_option_dueto" class="form-label">เนื่องจาก</label>
            <input type="text" class="form-control" id="stay_away_from_agency_option_dueto"
                name="stay_away_from_agency_option_dueto" placeholder="กรุณาระบุเหตุผลการลำบาก"
                value="{{ old('stay_away_from_agency_option_dueto', $form->assistImpartings->first()->stay_away_from_agency_option_dueto ?? '') }}">
        </div>

        <hr>

        <div>
            <div class="mb-3">
                <h3>3.ที่พักอาศัย</h3>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="residence" name="residence" value="yes"
                        {{ old('residence', $form->assistImpartings->first()->residence ?? '') == 'yes' ? 'checked' : '' }}>
                    <label for="residence" class="form-check-label">อยู่เพียงลำพัง</label>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="residence_stay_alone_dueto">เนื่องจาก</label>
                        <input type="text" class="form-control" id="residence_stay_alone_dueto"
                            name="residence_stay_alone_dueto" placeholder="กรุณาระบุเหตุผล"
                            value="{{ old('residence_stay_alone_dueto', $form->assistImpartings->first()->residence_stay_alone_dueto ?? '') }}">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="residence_stay_alone_dueto_detail">มาประมาณ</label>
                        <input type="text" class="form-control" id="residence_stay_alone_dueto_detail"
                            name="residence_stay_alone_dueto_detail" placeholder="กรุณาระบุ"
                            value="{{ old('residence_stay_alone_dueto_detail', $form->assistImpartings->first()->residence_stay_alone_dueto_detail ?? '') }}">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="residence_living_with"
                        name="residence_living_with" value="yes"
                        {{ old('residence_living_with', $form->assistImpartings->first()->residence_living_with ?? '') == 'yes' ? 'checked' : '' }}>
                    <label for="residence_living_with" class="form-check-label">อาศัยอยู่กับ</label>
                </div>
                <input type="text" class="form-control mt-2" id="residence_living_with_detail"
                    name="residence_living_with_detail" placeholder="กรุณาระบุ"
                    value="{{ old('residence_living_with_detail', $form->assistImpartings->first()->residence_living_with_detail ?? '') }}">
            </div>

            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="residence_living_with_quantity">จำนวนคนที่อาศัยอยู่ด้วย</label>
                        <input type="text" class="form-control" id="residence_living_with_quantity"
                            name="residence_living_with_quantity" placeholder="กรุณาระบุจำนวนคนที่อาศัยอยู่ด้วย"
                            value="{{ old('residence_living_with_quantity', $form->assistImpartings->first()->residence_living_with_quantity ?? '') }}">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="residence_living_with_working">เป็นผู้สามารถประกอบอาชีพได้จำนวน</label>
                        <input type="text" class="form-control" id="residence_living_with_working"
                            name="residence_living_with_working" placeholder="กรุณาระบุจำนวนคนที่ทำงาน"
                            value="{{ old('residence_living_with_working', $form->assistImpartings->first()->residence_living_with_working ?? '') }}">
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="residence_living_with_total_income">มีรายได้รวม</label>
                        <input type="text" class="form-control" id="residence_living_with_total_income"
                            name="residence_living_with_total_income"
                            placeholder="กรุณาระบุรายได้รวมของผู้ที่อาศัยอยู่ด้วย"
                            value="{{ old('residence_living_with_total_income', $form->assistImpartings->first()->residence_living_with_total_income ?? '') }}">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="residence_living_with_non_workers">ผู้ที่ไม่สามารถประกอบอาชีพได้เนื่องจาก</label>
                        <input type="text" class="form-control" id="residence_living_with_non_workers"
                            name="residence_living_with_non_workers" placeholder="กรุณาระบุจำนวนคนที่ไม่ทำงาน"
                            value="{{ old('residence_living_with_non_workers', $form->assistImpartings->first()->residence_living_with_non_workers ?? '') }}">
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row mb-4">
            <div class="col-12">
                <h3>4. รายได้ – รายจ่าย</h3>
            </div>

            <div class="col-md-6 mb-3">
                <label for="total_income">รายได้รวม</label>
                <input type="text" class="form-control" id="total_income" name="total_income"
                    placeholder="กรุณาระบุรายได้รวม"
                    value="{{ old('total_income', $form->assistImpartings->first()->total_income ?? '') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label for="source_of_income">แหล่งรายได้</label>
                <input type="text" class="form-control" id="source_of_income" name="source_of_income"
                    placeholder="กรุณาระบุแหล่งรายได้"
                    value="{{ old('source_of_income', $form->assistImpartings->first()->source_of_income ?? '') }}">
            </div>

            <div class="col-12 mb-3">
                <label for="used_for_expenses">ใช้จ่ายสำหรับ</label>
                <input type="text" class="form-control" id="used_for_expenses" name="used_for_expenses"
                    placeholder="กรุณาระบุการใช้จ่าย"
                    value="{{ old('used_for_expenses', $form->assistImpartings->first()->used_for_expenses ?? '') }}">
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <h3>5. ข้อมูลการติดต่อ</h3>
            </div>

            <div class="col-md-6 mb-3">
                <label for="contact_person">บุคคลที่สามารถติดต่อได้</label>
                <input type="text" class="form-control" id="contact_person" name="contact_person"
                    value="{{ old('contact_person', $form->assistImpartings->first()->contact_person ?? '') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label for="contact_address_number">สถานที่ติดต่อเลขที่</label>
                <input type="text" class="form-control" id="contact_address_number" name="contact_address_number"
                    value="{{ old('contact_address_number', $form->assistImpartings->first()->contact_address_number ?? '') }}">
            </div>

            <div class="col-md-4 mb-3">
                <label for="contact_road">ถนน</label>
                <input type="text" class="form-control" id="contact_road" name="contact_road"
                    placeholder="กรุณาระบุชื่อถนน"
                    value="{{ old('contact_road', $form->assistImpartings->first()->contact_road ?? '') }}">
            </div>

            <div class="col-md-4 mb-3">
                <label for="contact_alley">ซอย</label>
                <input type="text" class="form-control" id="contact_alley" name="contact_alley"
                    placeholder="กรุณาระบุชื่อซอย"
                    value="{{ old('contact_alley', $form->assistImpartings->first()->contact_alley ?? '') }}">
            </div>

            <div class="col-md-4 mb-3">
                <label for="contact_village">หมู่บ้าน</label>
                <input type="text" class="form-control" id="contact_village" name="contact_village"
                    placeholder="กรุณาระบุชื่อหมู่บ้าน"
                    value="{{ old('contact_village', $form->assistImpartings->first()->contact_village ?? '') }}">
            </div>

            <div class="col-md-4 mb-3">
                <label for="contact_subdistrict">ตำบล</label>
                <input type="text" class="form-control" id="contact_subdistrict" name="contact_subdistrict"
                    placeholder="กรุณาระบุตำบล"
                    value="{{ old('contact_subdistrict', $form->assistImpartings->first()->contact_subdistrict ?? '') }}">
            </div>

            <div class="col-md-4 mb-3">
                <label for="contact_district">อำเภอ</label>
                <input type="text" class="form-control" id="contact_district" name="contact_district"
                    placeholder="กรุณาระบุอำเภอ"
                    value="{{ old('contact_district', $form->assistImpartings->first()->contact_district ?? '') }}">
            </div>

            <div class="col-md-4 mb-3">
                <label for="contact_province">จังหวัด</label>
                <input type="text" class="form-control" id="contact_province" name="contact_province"
                    placeholder="กรุณาระบุจังหวัด"
                    value="{{ old('contact_province', $form->assistImpartings->first()->contact_province ?? '') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label for="contact_postal_code">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" id="contact_postal_code" name="contact_postal_code"
                    placeholder="กรุณาระบุรหัสไปรษณีย์"
                    value="{{ old('contact_postal_code', $form->assistImpartings->first()->contact_postal_code ?? '') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label for="contact_telephone">โทรศัพท์</label>
                <input type="text" class="form-control" id="contact_telephone" name="contact_telephone"
                    placeholder="กรุณาระบุหมายเลขโทรศัพท์"
                    value="{{ old('contact_telephone', $form->assistImpartings->first()->contact_telephone ?? '') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label for="contact_fax">โทรสาร</label>
                <input type="text" class="form-control" id="contact_fax" name="contact_fax"
                    placeholder="กรุณาระบุหมายเลขแฟกซ์"
                    value="{{ old('contact_fax', $form->assistImpartings->first()->contact_fax ?? '') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label for="contact_relevant_as">เกี่ยวข้องเป็น</label>
                <input type="text" class="form-control" id="contact_relevant_as" name="contact_relevant_as"
                    placeholder="กรุณาระบุผู้เกี่ยวข้องในฐานะ"
                    value="{{ old('contact_relevant_as', $form->assistImpartings->first()->contact_relevant_as ?? '') }}">
            </div>
        </div>

        <hr>

        <div class="mb-3">
            <h3>ไฟล์แนบปัจจุบัน</h3>
            <div class="list-group">
                @foreach ($form->assistAttachments as $attachment)
                    <div class="list-group-item d-flex flex-wrap justify-content-between align-items-center">
                        <a href="{{ asset('storage/' . $attachment->file_path) }}" target="_blank"
                            class="text-truncate me-3" style="max-width: calc(100% - 100px);">
                            {{ basename($attachment->file_path) }}
                        </a>
                        <div class="form-check">
                            <input type="checkbox" name="delete_attachments[]" value="{{ $attachment->id }}"
                                class="form-check-input" id="delete_attachments_{{ $attachment->id }}">
                            <label class="form-check-label" for="delete_attachments_{{ $attachment->id }}">
                                ลบไฟล์นี้
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <hr>

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
            <button type="submit" class="btn btn-primary w-100 py-1"><i class="fa-solid fa-file-arrow-up me-2"></i></i>
                ส่งฟอร์มข้อมูล</button>
        </div>

    </form>

    <script src="{{ asset('js/multipart_files.js') }}"></script>

@endsection
