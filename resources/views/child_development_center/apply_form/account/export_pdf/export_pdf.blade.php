<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>PDF Report</title>

    <style>
        @font-face {
            font-family: 'sarabun';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'sarabun-bold';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew-Bold.ttf') }}") format('truetype');
        }

        body {
            font-family: 'sarabun', 'sarabun-bold', sans-serif;
            font-size: 20px;
            margin: 0;
            padding: 0;
            line-height: 1;
        }

        .regis_number {
            text-align: right;
            margin-right: 8px;
        }

        .title_doc {
            font-family: 'sarabun-bold', sans-serif;
            /* ใช้ฟอนต์ sarabun-bold */
            font-size: 30px;
            font-weight: bold;
        }

        .box_text {
            border: 1px solid rgb(255, 255, 255);
            text-align: center;
        }

        .box_text span {
            display: inline-flex;
            align-items: center;
            line-height: 1;
        }

        .box_text input[type="checkbox"] {
            width: 17px;
            /* ปรับขนาด checkbox ให้พอดีกับข้อความ */
            height: 17px;
            /* ปรับความสูงให้พอดีกับข้อความ */
            margin-right: 5px;
            margin-left: 5px;
            /* เว้นระยะห่างระหว่าง checkbox และข้อความ */
        }

        .box_text_border {
            margin-top: 5px;
            margin-bottom: 5px;
            border: 2px solid black;
            text-align: center;
        }

        .box_text_border span {
            display: inline-flex;
            align-items: center;
            line-height: 0.3;
        }

        .box_text_border input[type="checkbox"] {
            width: 17px;
            /* ปรับขนาด checkbox ให้พอดีกับข้อความ */
            height: 17px;
            /* ปรับความสูงให้พอดีกับข้อความ */
            margin-right: 5px;
            margin-left: 5px;
            /* เว้นระยะห่างระหว่าง checkbox และข้อความ */
        }

        .dotted-line {
            margin-left: 2px;
            color: blue;
            border-bottom: 2px dotted blue;
            word-wrap: break-word;
            /* ห่อข้อความที่ยาวเกิน */
            overflow-wrap: break-word;
            /* รองรับ browser อื่น */
        }
    </style>
</head>

<body>
    @php
        use Carbon\Carbon;
        $date = Carbon::parse($form->created_at);
        $day = $date->day;
        $month = $date->locale('th')->translatedFormat('F');
        $year = $date->year + 543;

        $birthday = Carbon::parse($form->birthday);
        $birthday_day = $birthday->day;
        $birthday_month = $birthday->locale('th')->translatedFormat('F');
        $birthday_year = $birthday->year + 543;

        $age_since_date = Carbon::parse($form->age_since_date);
        $age_since_date_day = $age_since_date->day;
        $age_since_date_month = $age_since_date->locale('th')->translatedFormat('F');
        $age_since_date_year = $age_since_date->year + 543;

        // $citizen_id = $form->disabilityTraders->first()->citizen_id;
        // $tradersformatted_id =
        // substr($citizen_id, 0, 1) .
        // '-' .
        // substr($citizen_id, 1, 4) .
        // '-' .
        // substr($citizen_id, 5, 5) .
        // '-' .
        // substr($citizen_id, 10, 2) .
        // '-' .
        // substr($citizen_id, 12, 1);

        $citizen_c_id = $form->citizen_id;
        $formatted_id =
            substr($citizen_c_id, 0, 1) .
            '-' .
            substr($citizen_c_id, 1, 4) .
            '-' .
            substr($citizen_c_id, 5, 5) .
            '-' .
            substr($citizen_c_id, 10, 2) .
            '-' .
            substr($citizen_c_id, 12, 1);
    @endphp


    <div class="title_doc" style="text-align:center;">
        <div>
            ใบสมัคร
        </div>
        ศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์
    </div>
    <div class="regis_number" style="margin-top:2rem;">เขียนที่ ศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์
    </div>
    <div class="box_text" style="text-align: right;">
        <span>วันที่</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{ $day }} </span>
        <span>เดือน</span>
        <span class="dotted-line" style="width: 20%; text-align: center;"> {{ $month }} </span>
        <span>พ.ศ.</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"> {{ $year }} </span>
    </div>
    <div
        style="text-align: left; display: inline-block; border-bottom: 2px solid black; font-size:25px; font-weight: bold; font-family: 'sarabun-bold', sans-serif;">
        ข้อมูลเด็ก
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๑. เด็กชื่อ - สกุล</span>
        <span class="dotted-line" style="width: 38%; text-align: center;"> {{ $form->full_name }} </span>
        <span>เชื้อชาติ</span>
        <span class="dotted-line" style="width: 17%; text-align: center;"> {{ $form->ethnicity }} </span>
        <span>สัญชาติ</span>
        <span class="dotted-line" style="width: 17%; text-align: center;"> {{ $form->nationality }} </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๒. เกิดวันที่</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{ $birthday_day }} </span>
        <span>เดือน</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $birthday_month }} </span>
        <span>พ.ศ.</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $birthday_year }} </span>
        <span>อายุ</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{ $form->age }} </span>
        <span>ปี</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{ $form->age_months }} </span>
        <span>เดือน</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>(นับถึงวันที่
            {{ $age_since_date_day }}&nbsp;{{ $age_since_date_month }}&nbsp;{{ $age_since_date_year }} )
            เลขประจำตัวประชาชน</span>
        <span class="dotted-line" style="width: 53%; text-align: center;"> {{ $formatted_id }} </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๓. ที่อยู่ตามสำเนาทะเบียนบ้าน บ้านเลขที่</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $form->regis_house_number }} </span>
        <span>หมู่ที่</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $form->regis_village }} </span>
        <span>ถนน</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $form->regis_road }} </span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ตำบล</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->regis_subdistrict }} </span>
        <span>อำเภอ</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->regis_district }} </span>
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->regis_province }} </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๔. ที่อยู่อาศัยจริงในปัจจุบัน บ้านเลขที่</span>
        <span class="dotted-line" style="width: 22%; text-align: center;"> {{ $form->current_house_number }} </span>
        <span>หมู่ที่</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $form->current_village }} </span>
        <span>ถนน</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $form->current_road }} </span>
    </div>
    <div class="box_text" style="text-align: left; ">
        <span>ตำบล</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->current_subdistrict }} </span>
        <span>อำเภอ</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->current_district }} </span>
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->current_province }} </span>
    </div>
    <div class="box_text" style="text-align: left; ">
        <span>เบอร์โทรศัพท์</span>
        <span class="dotted-line" style="width: 88%; text-align: center;"> {{ $form->current_phone_number }} </span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>มีพี่น้องร่วมบิดา - มารดาเดียวกันจำนวน</span>
        <span class="dotted-line" style="width: 26%; text-align: center;"> {{ $form->number_of_siblings }} </span>
        <span>คน เป็นบุตรลำดับที่</span>
        <span class="dotted-line" style="width: 26%; text-align: center;"> data </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๕. โรคประจำตัว</span>
        <span class="dotted-line" style="width: 50%; text-align: center;"> {{ $form->congenital_disease }} </span>
        <span>หมู่โลหิต</span>
        <span class="dotted-line" style="width: 28%; text-align: center;"> {{ $form->blood_group }} </span>
    </div>
    <div
        style="text-align: left; display: inline-block; border-bottom: 2px solid black; font-size:25px; font-weight: bold; font-family: 'sarabun-bold', sans-serif;">
        ข้อมูลบิดา - มารดา หรือผู้อุปการะ
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๑. บิดาชื่อ - สกุล</span>
        <span class="dotted-line" style="width: 35%; text-align: center;">
            {{ $form->caregiverInformation->first()->father_name }} </span>
        <span>อาชีพ</span>
        <span class="dotted-line" style="width: 17%; text-align: center;">
            {{ $form->caregiverInformation->first()->father_occupation }} </span>
        <span>วุฒิการศึกษา</span>
        <span class="dotted-line" style="width: 17%; text-align: center;">
            {{ $form->caregiverInformation->first()->edu_qual_father }} </span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span> มารดาชื่อ - สกุล</span>
        <span class="dotted-line" style="width: 35%; text-align: center;">
            {{ $form->caregiverInformation->first()->mother_name }} </span>
        <span>อาชีพ</span>
        <span class="dotted-line" style="width: 17%; text-align: center;">
            {{ $form->caregiverInformation->first()->mother_occupation }} </span>
        <span>วุฒิการศึกษา</span>
        <span class="dotted-line" style="width: 17%; text-align: center;">
            {{ $form->caregiverInformation->first()->edu_qual_mother }} </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span> ๒. ปัจจุบันเด็กอยู่ในความดูแลอุปการะ/รับผิดชอบของ</span>
        <div style="text-align:left; margin-left:20px;">
            <span> ๒.๑</span>
            <span style="margin-left: 10px;"><input type="checkbox"
                    {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> บิดา</span>
            <span style="margin-left: 80px;"><input type="checkbox"
                    {{ $form->caregiverInformation->first()->care_option == 'mother' ? 'checked' : '' }}> มารดา</span>
            <span style="margin-left: 80px;"><input type="checkbox"
                    {{ $form->caregiverInformation->first()->care_option == 'fatherAdmother' ? 'checked' : '' }}>
                ทั้งบิดา - มารดาร่วมกัน</span>
        </div>
        <div style="text-align:left; margin-left:20px;">
            <span> ๒.๒</span>
            <span style="margin-left: 10px;"><input type="checkbox"> ญาติ (โปรดระบุความเกี่ยวข้อง)</span>
            <span class="dotted-line" style="width: 65%; text-align: center;"> - </span>
        </div>
        <div style="text-align:left; margin-left:20px;">
            <span> ๒.๓</span>
            <span style="margin-left: 10px;"><input type="checkbox"
                    {{ $form->caregiverInformation->first()->care_option == 'Other' ? 'checked' : '' }}> อื่น ๆ
                (โปรดระบุความเกี่ยวข้อง)</span>
            <span class="dotted-line" style="width: 64%; text-align: center;">
                {{ $form->caregiverInformation->first()->care_option_other }} </span>
        </div>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span> ๓. ผู้ดูแลอุปการะเด็กตามข้อ ๑. มีรายได้ในครอบครัวต่อเดือน</span>
        <span class="dotted-line" style="width: 49%; text-align: center;">
            {{ $form->caregiverInformation->first()->caretaker_income }} </span>
        <span>บาท</span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span> ๔. ผู้นำเด็กมาสมัครชื่อ - สกุล</span>
        <span class="dotted-line" style="width: 39%; text-align: center;">
            {{ $form->caregiverInformation->first()->applicants_name }} </span>
        <span>เกี่ยวข้องเป็น</span>
        <span class="dotted-line" style="width: 20%; text-align: center;">
            {{ $form->caregiverInformation->first()->applicants_relevant }} </span>
        <span>ของเด็ก</span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span> ๕. ผู้ที่จะรับส่งเด็กชื่อ - สกุล</span>
        <span class="dotted-line" style="width:78%; text-align: center;">
            {{ $form->caregiverInformation->first()->child_carrier_name }} </span>
        <div>
            <span> โดยเกี่ยวข้องเป็น</span>
            <span class="dotted-line" style="width:35%; text-align: center;">
                {{ $form->caregiverInformation->first()->child_carrier_relevant }} </span>
            <span> เบอร์โทรศัพท์ติดต่อ</span>
            <span class="dotted-line" style="width:35%; text-align: center;">
                {{ $form->caregiverInformation->first()->child_carrier_phone }} </span>
        </div>
    </div>

    {{-- new page --}}
    <div style="page-break-before: always;"></div>

    <div style="text-align: center">
        - 2 -
    </div>
    <div
        style="text-align: left; display: inline-block; border-bottom: 2px solid black; margin-top:5rem; font-size:25px; font-weight: bold; font-family: 'sarabun-bold', sans-serif;">
        คำรับรอง
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px; ">
        <div style="margin-left: 2rem;"> ๑. ข้าพเจ้าขอรับรองว่า
            ได้อ่านประกาศรับสมัครของศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบล
            คลองบ้านโพธิ์เข้าใจแล้วเด็ก </div>
        <span> ที่นำมาสมัครมีคุณสมบัติถูกต้องตรงตามประกาศ และหลักฐานที่ใช้สมัครใน
            วันนี้เป็นหลักฐานที่ถูกต้องจริง</span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px; ">
        <div style="margin-left: 2rem;"> ๒.
            ข้าพเจ้ามีสิทธิถูกต้องในการที่จะให้เด็กสมัครเข้ารับการศึกษาเลี้ยงดูในศูนย์พัฒนาเด็กเล็กขององค์การบริหารส่วนตำบล
        </div>
        <span>คลองบ้านโพธิ์</span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px; ">
        <div style="margin-left: 2rem;"> ๓. ข้าพเจ้ายินดีปฏิบัติตามระเบียบ
            ข้อกำหนดขององค์การบริหารส่วนตำบลคลองบ้านโพธิ์ และยินดี
            ปฏิบัติคำแนะนำเกี่ยวกับ
        </div>
        <span>การพัฒนาความพร้อมที่ศูนย์พัฒนาเด็กเล็กฯ กำหนด</span>
    </div>
    <div class="box_text" style="text-align: right; margin-top:8rem;">
        <span>ลงชื่อ</span>
        <span class="dotted-line" style="width: 35%; text-align: center;">
            {{ $form->caregiverInformation->first()->applicants_name }} </span>
        <span>ผู้รับสมัคร</span>
        <div style="margin-right: 55px;">
            <span>(</span>
            <span class="dotted-line" style="width: 35%; text-align: center;">
                {{ $form->caregiverInformation->first()->applicants_name }} </span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:5rem;">
        <span>ลงชื่อ</span>
        <span class="dotted-line"
            style="width: 35%; text-align: center; border-bottom: 2px dotted black; margin-top:20px;"> </span>
        <span>ผู้รับสมัคร</span>
        <div style="margin-right: 75px;">
            <span style="text-align: start;">( นางสาวประทุมรัตน์ ศักดิ์ประดิษฐ์ )</span>
            <div style="margin-right: 90px;">ครู</div>
        </div>
    </div>
    <div
        style="text-align: left; display: inline-block; margin-top:2rem; font-size:23px; font-weight: bold; font-family: 'sarabun-bold', sans-serif;">
        หมายเหตุ <span style="margin-left: 2rem;">เอกสาร/หลักฐานที่ใช้ในการสมัครเรียน </span>
    </div>
    <div class="box_text" style="text-align: left; ">
        <div style="margin-left: 6rem;"> ๑. ตัวเด็ก ๒. สำเนาสูติบัตร ๓. สำเนาทะเบียนบ้าน
        </div>
        <div style="margin-left: 6rem;"> ๔. สำเนาบัตรประชาชนบิดา - มารดา
        </div>
        <div style="margin-left: 6rem;"> ๕. ใบสมัครของศูนย์พัฒนาเด็กเล็กที่กรอกข้อมูลสมบูรณ์แล้ว
        </div>
        <div style="margin-left: 6rem;"> ๖. สำเนาสมุดบันทึกสุขภาพ (สีชมพู)
        </div>
    </div>
    {{-- new page --}}
    <div style="page-break-before: always;"></div>
    <div class="title_doc" style="text-align:center;">
        <div>
            ใบสมัคร
        </div>
        <div>
            ศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์
        </div>
        <div>
            องค์การบริหารส่วนตำบลคลองบ้านโพธิ์ อำเภอบ้านโพธิ์ จังหวัดฉะเชิงเทรา
        </div>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 1rem; ">
        <div style="margin-left: 2rem;"> ข้าพเจ้า <span class="dotted-line"
                style="width: 61%; text-align: center; margin-top:20px;"> </span> อายุ
            <span class="dotted-line" style="width: 25%; text-align: center; margin-top:20px;"> </span> ปี
        </div>
        <div> อาชีพ <span class="dotted-line" style="width: 20%; text-align: center; margin-top:20px;"> </span> รายได้
            <span class="dotted-line" style="width: 15%; text-align: center; margin-top:20px;"> </span> บาท/เดือน
            ที่อยู่ปัจจุบัน เลขที่ <span class="dotted-line"
                style="width: 11%; text-align: center; margin-top:20px;"></span> หมู่ที่ <span class="dotted-line"
                style="width: 11%; text-align: center; margin-top:20px;">
        </div>
        <div> ถนน/ตรอก/ซอย <span class="dotted-line" style="width: 30%; text-align: center; margin-top:20px;"> </span>
            ตำบล
            <span class="dotted-line" style="width: 22%; text-align: center; margin-top:20px;"> </span> อำเภอ <span
                class="dotted-line" style="width: 21%; text-align: center; margin-top:20px;"></span>
        </div>
        <div> จังหวัด <span class="dotted-line" style="width: 20%; text-align: center; margin-top:20px;"> </span>
            โทรศัพท์
            <span class="dotted-line" style="width: 20%; text-align: center; margin-top:20px;"> </span>
            เป็นผู้ปกครองของ<span class="dotted-line" style="width: 30%; text-align: center; margin-top:20px;"></span>
        </div>
        <div> เด็กชาย/เด็กหญิง <span class="dotted-line" style="width: 65%; text-align: center; margin-top:20px;">
            </span> เข้าเป็นนักเรียนของศูนย์
            <div>พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์ และพร้อมที่จะปฏิบัติตามระเบียบการของศูนย์</div>
            <div>พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์ ดังนี้</div>
        </div>
        <div style="margin-left: 2rem;"> 1. จะปฏิบัติตามระเบียบ
            ข้อบังคับของศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์ อย่างเคร่งครัด
        </div>
        <div style="margin-left: 2rem;"> 2. จะร่วมมือกับศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์
            ในการจัดการเรียนการสอนและขจัดปัญหาต่างๆ
        </div>
        <div>ที่อาจเกิดขึ้นแก่เด็กอย่างใกล้ชิด</div>
        <div style="margin-left: 2rem;">สถานที่ที่สามารถติดต่อกับผู้ปกครองได้สะดวกรวดเร็วที่สุด</div>
        <div><span class="dotted-line" style="width: 40%; text-align: center; margin-top:20px;"> </span></div>
        <div><span class="dotted-line" style="width: 60%; text-align: center; margin-top:20px;"> </span> โทรศัพท์
        </div>
        <div><span class="dotted-line" style="width: 40%; text-align: center; margin-top:20px;"> </span></div>
        <div style="margin-left: 2rem; margin-top: 1rem;">อนึ่ง ถ้าเด็กชาย/เด็กหญิง <span class="dotted-line"
                style="width: 73%; text-align: center; margin-top:20px;"> </span>เจ็บป่วย </div>
        <div>จำเป็นต้องรีบส่งโรงพยาบาลหรือพบแพทย์ทันที ข้าพเจ้าอนุญาตให้ศูนย์พัฒนาเด็กเล็กจัดการไปตามความเห็นชอบก่อน
            และแจ้งให้ข้าพ
        </div>
        <div>เจ้าทราบโดยข้าพเจ้าขอรับผิดชอบค่าใช้จ่ายที่เกิดขึ้น</div>
    </div>
    <div
        style="text-align: left; display: inline-block; border-bottom: 2px solid black; margin-top:1rem; font-size:25px; font-weight: bold; font-family: 'sarabun-bold', sans-serif;">
        ผู้รับส่งเด็ก
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px; ">
        <div> (นาย/นาง/นางสาว) <span class="dotted-line" style="width: 83%; text-align: center; margin-top:20px;">
            </span> โดยเกี่ยวข้องเป็น <span class="dotted-line"
                style="width: 85%; text-align: center; margin-top:20px;"> </span> เบอร์โทรศัพท์ติดต่อ <span
                class="dotted-line" style="width: 83%; text-align: center; margin-top:20px;"></div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:4rem;">
        <span>ลงชื่อผู้ปกครอง</span>
        <span class="dotted-line" style="width: 35%; text-align: center;">
            {{ $form->caregiverInformation->first()->applicants_name }} </span>
    </div>
    <div class="box_text" style="text-align: right;">
        <span>ลงชื่อผู้รับมอบตัว</span>
        <span class="dotted-line" style="width: 35%; text-align: center;">
            {{ $form->caregiverInformation->first()->applicants_name }} </span>
    </div>
    <div class="box_text" style="text-align: right;">
        <span>วันที่</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{ $day }} </span>
        <span>เดือน</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"> {{ $month }} </span>
        <span>พ.ศ.</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"> {{ $year }} </span>
    </div>
    {{-- new page --}}
    <div style="page-break-before: always;"></div>
    <div class="title_doc" style="text-align:center;">
        <div>
            ทะเบียนประวัติเด็กปฐมวัย
        </div>
        <div>
            ศูนย์พัฒนาเด็กเล็กองค์การบริหารส่วนตำบลคลองบ้านโพธิ์
        </div>
        <div>
            องค์การบริหารส่วนตำบลคลองบ้านโพธิ์ อำเภอบ้านโพธิ์ จังหวัดฉะเชิงเทรา
        </div>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>เด็กชาย/เด็กหญิง</span>
        <span class="dotted-line" style="width: 50%; text-align: center;"> {{ $form->full_name }} </span>
        <span>ชื่อเล่น</span>
        <span class="dotted-line" style="width: 29%; text-align: center;"> {{ $form->ethnicity }} </span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>เลขประจำตัวประชาชน</span>
        <span class="dotted-line" style="width: 81%; text-align: center;"> {{ $form->full_name }} </span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>วัน เดือน ปี เกิด</span>
        <span class="dotted-line" style="width: 30%; text-align: center;"> {{ $day }} {{ $month }}
            {{ $year }}</span>
        <span>จังหวัดที่เกิด</span>
        <span class="dotted-line" style="width: 46%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>เชื้อชาติ</span>
        <span class="dotted-line" style="width: 24%; text-align: center;"></span>
        <span>สัญชาติ</span>
        <span class="dotted-line" style="width: 30%; text-align: center;"></span>
        <span>ศาสนา</span>
        <span class="dotted-line" style="width: 25%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ที่อยู่ปัจจุบันเลขที่</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"></span>
        <span>หมู่ที่</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"></span>
        <span>ซอย</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"></span>
        <span>ถนน</span>
        <span class="dotted-line" style="width: 26%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ตำบล</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"></span>
        <span>อำเภอ</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"></span>
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>สุขภาพโดยรวมของเด็ก</span>
        <span style="margin-left: 20px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> สมบูรณ์</span>
        <span style="margin-left: 20px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'mother' ? 'checked' : '' }}> ไม่สมบูรณ์
            คือ</span>
        <span class="dotted-line" style="width: 49%; text-align: center;"> </span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>กลุ่มเลือด</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> เอ</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> บี</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> เอบี</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> โอ</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>เด็กมีโรคประจำตัว คือ</span>
        <span class="dotted-line" style="width: 32%; text-align: center;"></span>
        <span>เมื่อมีอาการแก้ไขโดย</span>
        <span class="dotted-line" style="width: 33%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>เด็กมีประวัติการแพ้ยา คือ</span>
        <span class="dotted-line" style="width: 35%; text-align: center;"></span>
        <span>แพ้อาหาร คือ</span>
        <span class="dotted-line" style="width: 33%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ประวัติการได้รับอุบัติเหตุหรือเจ็บป่วย</span>
        <span class="dotted-line" style="width: 33%; text-align: center;"></span>
        <span>เมื่ออายุ</span>
        <span class="dotted-line" style="width: 30%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>การได้รับภูมิคุ้มกัน</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> คอตีบ</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> หัดเยอรมัน</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> ไอกรน</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> บาดทะยัก</span>
    </div>
    <div class="box_text" style="text-align: left; margin-left: 2rem;">
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> โปลิโอ</span>
        <span style="margin-left: 48px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> ตับอักเสบ</span>
        <span style="margin-left: 46px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> บีซีจี</span>
        <span style="margin-left: 46px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> อื่นๆ</span>
                <span class="dotted-line" style="width: 29%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left; ">
        <div style="margin-bottom:1.5rem;">เด็กควรได้รับการดูแลเป็นพิเศษเรื่อง</div>
        <span class="dotted-line" style="width: 100%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>เด็กเป็นบุตรคนที่</span>
        <span class="dotted-line" style="width: 11%; text-align: center;"></span>
        <span>จำนวนพี่น้องร่วมสายโลหิต</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"></span>
        <span>คน พี่ชาย</span><span class="dotted-line" style="width: 10%; text-align: center;"></span><span>คน
            น้องชาย</span><span class="dotted-line" style="width: 12%; text-align: center;"></span><span>คน</span>
            <span>พี่สาว</span><span class="dotted-line" style="width: 12%; text-align: center;"></span><span>คน น้องสาว</span><span class="dotted-line" style="width: 12%; text-align: center;"></span><span>คน</span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 10px;">
        <span>บิดาชื่อ - สกุล</span>
        <span class="dotted-line" style="width: 40%; text-align: center;"></span>
        <span>อายุ</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"></span>
        <span>ปี อาชีพ</span>
        <span class="dotted-line" style="width: 21%; text-align: center;"></span>
        <span>สถานที่ทำงาน</span>
        <span class="dotted-line" style="width: 59%; text-align: center;"></span>
        <span>โทรศัพท์</span>
        <span class="dotted-line" style="width: 21%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>มารดาชื่อ - สกุล</span>
        <span class="dotted-line" style="width: 38%; text-align: center;"></span>
        <span>อายุ</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"></span>
        <span>ปี อาชีพ</span>
        <span class="dotted-line" style="width: 20%; text-align: center;"></span>
        <span>สถานที่ทำงาน</span>
        <span class="dotted-line" style="width: 59%; text-align: center;"></span>
        <span>โทรศัพท์</span>
        <span class="dotted-line" style="width: 21%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left;">
        <div>สถานภาพสมรสของบิดา/มารดา</div>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> อยู่ด้วยกัน</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> แยกกันอยู่</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> เลิกร้างกัน</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> บิดาหรือมารดาแต่งงานใหม</span>
        <span style="margin-left: 50px;"><input type="checkbox"
                {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> อื่นๆ</span><span class="dotted-line" style="width: 70%; text-align: center;"></span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ผู้ปกครองชื่อ - สกุล</span>
        <span class="dotted-line" style="width: 52%; text-align: center;"></span>
        <span>อายุ</span>
        <span class="dotted-line" style="width: 25%; text-align: center;"></span>
        <span>ปี </span><span>เกี่ยวข้องเป็น</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"></span>
        <span>ของเด็กอาชีพ</span>
        <span class="dotted-line" style="width: 50%; text-align: center;"></span>
        <span>สถานที่ทำงาน</span>
        <span class="dotted-line" style="width: 59%; text-align: center;"></span>
        <span>โทรศัพท์</span>
        <span class="dotted-line" style="width: 21%; text-align: center;"></span>
    </div>
</body>

</html>
