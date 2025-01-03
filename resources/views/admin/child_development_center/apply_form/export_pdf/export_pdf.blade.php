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
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{$day }} </span>
        <span>เดือน</span>
        <span class="dotted-line" style="width: 20%; text-align: center;"> {{$month }} </span>
        <span>พ.ศ.</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"> {{$year }}  </span>
    </div>
    <div class="title_doc" style="text-align: left; display: inline-block; border-bottom: 2px solid black;">
        ข้อมูลเด็ก
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๑. เด็กชื่อ - สกุล</span>
        <span class="dotted-line" style="width: 38%; text-align: center;"> {{ $form->full_name}} </span>
        <span>เชื้อชาติ</span>
        <span class="dotted-line" style="width: 17%; text-align: center;"> {{ $form->ethnicity}} </span>
        <span>สัญชาติ</span>
        <span class="dotted-line" style="width: 17%; text-align: center;"> {{ $form->nationality}} </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๒. เกิดวันที่</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{$birthday_day}}  </span>
        <span>เดือน</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{$birthday_month}}  </span>
        <span>พ.ศ.</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{$birthday_year}} </span>
        <span>อายุ</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{ $form->age}} </span>
        <span>ปี</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{ $form->age_months}} </span>
        <span>เดือน</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>(นับถึงวันที่ {{ $age_since_date_day}}&nbsp;{{ $age_since_date_month}}&nbsp;{{ $age_since_date_year}} ) เลขประจำตัวประชาชน</span>
        <span class="dotted-line" style="width: 53%; text-align: center;"> {{ $formatted_id}} </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๓. ที่อยู่ตามสำเนาทะเบียนบ้าน บ้านเลขที่</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $form->regis_house_number}} </span>
        <span>หมู่ที่</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $form->regis_village}} </span>
        <span>ถนน</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $form->regis_road}} </span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ตำบล</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->regis_subdistrict}} </span>
        <span>อำเภอ</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->regis_district}} </span>
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->regis_province}}  </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๔. ที่อยู่อาศัยจริงในปัจจุบัน บ้านเลขที่</span>
        <span class="dotted-line" style="width: 22%; text-align: center;"> {{ $form->current_house_number}} </span>
        <span>หมู่ที่</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $form->current_village}} </span>
        <span>ถนน</span>
        <span class="dotted-line" style="width: 19%; text-align: center;"> {{ $form->current_road}}  </span>
    </div>
    <div class="box_text" style="text-align: left; ">
        <span>ตำบล</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->current_subdistrict}} </span>
        <span>อำเภอ</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->current_district}}  </span>
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 27%; text-align: center;"> {{ $form->current_province}}  </span>
    </div>
    <div class="box_text" style="text-align: left; ">
        <span>เบอร์โทรศัพท์</span>
        <span class="dotted-line" style="width: 88%; text-align: center;">  {{ $form->current_phone_number}}  </span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>มีพี่น้องร่วมบิดา - มารดาเดียวกันจำนวน</span>
        <span class="dotted-line" style="width: 26%; text-align: center;"> {{ $form->number_of_siblings}} </span>
        <span>คน เป็นบุตรลำดับที่</span>
        <span class="dotted-line" style="width: 26%; text-align: center;"> data </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๕. โรคประจำตัว</span>
        <span class="dotted-line" style="width: 50%; text-align: center;"> {{ $form->congenital_disease}} </span>
        <span>หมู่โลหิต</span>
        <span class="dotted-line" style="width: 28%; text-align: center;">  {{ $form->blood_group}}  </span>
    </div>
    <div class="title_doc" style="text-align: left; display: inline-block; border-bottom: 2px solid black;">
        ข้อมูลบิดา - มารดา หรือผู้อุปการะ
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span>๑. บิดาชื่อ - สกุล</span>
        <span class="dotted-line" style="width: 35%; text-align: center;"> {{$form->caregiverInformation->first()->father_name}} </span>
        <span>อาชีพ</span>
        <span class="dotted-line" style="width: 17%; text-align: center;"> {{$form->caregiverInformation->first()->father_occupation}} </span>
        <span>วุฒิการศึกษา</span>
        <span class="dotted-line" style="width: 17%; text-align: center;"> {{$form->caregiverInformation->first()->edu_qual_father}} </span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span> มารดาชื่อ - สกุล</span>
        <span class="dotted-line" style="width: 35%; text-align: center;"> {{$form->caregiverInformation->first()->mother_name}} </span>
        <span>อาชีพ</span>
        <span class="dotted-line" style="width: 17%; text-align: center;"> {{$form->caregiverInformation->first()->mother_occupation}} </span>
        <span>วุฒิการศึกษา</span>
        <span class="dotted-line" style="width: 17%; text-align: center;"> {{$form->caregiverInformation->first()->edu_qual_mother}} </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span> ๒. ปัจจุบันเด็กอยู่ในความดูแลอุปการะ/รับผิดชอบของ</span>
        <div style="text-align:left; margin-left:20px;">
            <span> ๒.๑</span>
            <span style="margin-left: 10px;"><input type="checkbox" {{ $form->caregiverInformation->first()->care_option == 'father' ? 'checked' : '' }}> บิดา</span>
            <span style="margin-left: 80px;"><input type="checkbox" {{ $form->caregiverInformation->first()->care_option == 'mother' ? 'checked' : '' }}> มารดา</span>
            <span style="margin-left: 80px;"><input type="checkbox" {{ $form->caregiverInformation->first()->care_option == 'fatherAdmother' ? 'checked' : '' }}> ทั้งบิดา - มารดาร่วมกัน</span>
        </div>
        <div style="text-align:left; margin-left:20px;">
            <span> ๒.๒</span>
            <span style="margin-left: 10px;"><input type="checkbox"> ญาติ (โปรดระบุความเกี่ยวข้อง)</span>
            <span class="dotted-line" style="width: 65%; text-align: center;"> - </span>
        </div>
        <div style="text-align:left; margin-left:20px;">
            <span> ๒.๓</span>
            <span style="margin-left: 10px;"><input type="checkbox" {{ $form->caregiverInformation->first()->care_option == 'Other' ? 'checked' : '' }}> อื่น ๆ (โปรดระบุความเกี่ยวข้อง)</span>
            <span class="dotted-line" style="width: 64%; text-align: center;">  {{$form->caregiverInformation->first()->care_option_other}}  </span>
        </div>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span> ๓. ผู้ดูแลอุปการะเด็กตามข้อ ๑. มีรายได้ในครอบครัวต่อเดือน</span>
        <span class="dotted-line" style="width: 49%; text-align: center;"> {{$form->caregiverInformation->first()->caretaker_income}} </span>
        <span>บาท</span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span> ๔. ผู้นำเด็กมาสมัครชื่อ - สกุล</span>
        <span class="dotted-line" style="width: 39%; text-align: center;"> {{$form->caregiverInformation->first()->applicants_name}} </span>
        <span>เกี่ยวข้องเป็น</span>
        <span class="dotted-line" style="width: 20%; text-align: center;"> {{$form->caregiverInformation->first()->applicants_relevant}} </span>
        <span>ของเด็ก</span>
    </div>
    <div class="box_text" style="text-align: left; margin-top: 5px;">
        <span> ๕. ผู้ที่จะรับส่งเด็กชื่อ - สกุล</span>
        <span class="dotted-line" style="width:78%; text-align: center;">  {{$form->caregiverInformation->first()->child_carrier_name}}  </span>
        <div>
            <span> โดยเกี่ยวข้องเป็น</span>
            <span class="dotted-line" style="width:35%; text-align: center;"> {{$form->caregiverInformation->first()->child_carrier_relevant}} </span>
            <span> เบอร์โทรศัพท์ติดต่อ</span>
            <span class="dotted-line" style="width:35%; text-align: center;"> {{$form->caregiverInformation->first()->child_carrier_phone}} </span>
        </div>
    </div>

    {{-- new page --}}
    <div style="page-break-before: always;"></div>

    <div style="text-align: center">
        - 2 -
    </div>
    <div class="title_doc"
        style="text-align: left; display: inline-block; border-bottom: 2px solid black; margin-top:5rem;">
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
        <span class="dotted-line" style="width: 35%; text-align: center;"> {{$form->caregiverInformation->first()->applicants_name}} </span>
        <span>ผู้รับสมัคร</span>
        <div style="margin-right: 55px;">
            <span>(</span>
            <span class="dotted-line" style="width: 35%; text-align: center;"> {{$form->caregiverInformation->first()->applicants_name}} </span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:5rem;">
        <span>ลงชื่อ</span>
        <span class="dotted-line" style="width: 35%; text-align: center; border-bottom: 2px dotted black; margin-top:20px;">  </span>
        <span>ผู้รับสมัคร</span>
        <div style="margin-right: 75px;">
            <span style="text-align: start;">( นางสาวประทุมรัตน์ ศักดิ์ประดิษฐ์ )</span>
            <div style="margin-right: 90px;">ครู</div>
        </div>
    </div>

</body>

</html>
