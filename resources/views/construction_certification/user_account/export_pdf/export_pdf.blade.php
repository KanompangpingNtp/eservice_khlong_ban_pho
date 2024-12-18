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
            font-family: 'sarabun', sans-serif;
            font-size: 20px;
            margin: 0;
            padding: 0;
            line-height: 1;
        }

        .font-sarabun {
            font-family: 'sarabun', sans-serif;
            font-size: 20px;
        }

        .font-sarabun-bold {
            font-family: 'sarabun-bold', sans-serif;
            font-size: 20px;
            font-weight: bold;
        }

        .title_doc {
            font-family: 'sarabun-bold', sans-serif;
            /* ใช้ฟอนต์ sarabun-bold */
            font-size: 30px;
            font-weight: bold;
        }

        .regis_number {
            text-align: right;
            margin-right: 8px;
        }

        .box_text {
            text-align: center;
        }

        .box_text span {
            display: inline-flex;
            align-items: center;
            line-height: 1;
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

        .footer {
            position: absolute;
            /* ทำให้ footer ยึดที่ด้านล่าง */
            bottom: -50px;
            /* ตั้งให้ footer อยู่ที่ด้านล่างสุดของหน้ากระดาษ */
            width: 100%;
            /* ให้ footer กว้างเต็มหน้ากระดาษ */
            text-align: start;
            /* จัดข้อความให้ตรงกลาง */
            padding: 5px 0;
            /* เพิ่มพื้นที่ด้านบนและล่างให้กับ footer */
        }

    </style>
</head>

<body>

    @php
    use Carbon\Carbon;
    $date = Carbon::parse($form->write_the_date);
    $day = $date->day;
    $month = $date->locale('th')->translatedFormat('F');
    $year = $date->year + 543;
    @endphp

    <div class="regis_number">หน้า 1 จาก 2
    </div>
    <div class="title_doc" style="text-align:center;">
        <div>
            คำขอรับรองสิ่งปลูกสร้างอาคาร
        </div>
        <span class="font-sarabun">(กรณีนอกเขตควบคุมอาคารตามพระราชบัญญัติควบคุมอาคาร พ.ศ. ๒๕๒๒)</span>
    </div>
    <div class="box_text" style="text-align: right;">
        <span>เขียนที่ ที่ทำการองค์การบริหารส่วนตำบลถ้ำ</span>
    </div>
    <div class="box_text" style="text-align: right;">
        <span>วันที่</span>
        <span class="dotted-line" style="width: 5%; text-align: center;">{{$day}}</span>
        <span>เดือน</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"> {{$month}}</span>
        <span>พ.ศ.</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{$year}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span style="margin-right:20px;">เรื่อง</span>
        <span class="dotted-line" style="width: 20%; text-align: center;">{{$form->subject}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span style="margin-right:20px;">เรียน</span>
        <span>นายกองค์การบริหารส่วนตำบลถ้ำ</span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:5rem;">
        <span>ข้าพเจ้า</span>
        <span class="dotted-line" style="width: 30%; text-align: center;">{{$form->salutation}}{{$form->full_name}}</span>
        <span>ตั้งบ้านเรือนอยู่เลขที่</span>
        <span class="dotted-line" style="width: 18%; text-align: center;">{{$form->house_number}}</span>
        <span>หมู่ที่</span>
        <span class="dotted-line" style="width: 19%; text-align: center;">{{$form->village}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ถนน</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">{{$form->alley}}</span>
        <span>ตรอก/ซอย</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">{{$form->road}}</span>
        <span>แขวง/ตำบล</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">{{$form->subdistrict}}</span>
        <span>เขต/อำเภอ</span>
        <span class="dotted-line" style="width: 30%; text-align: center;">{{$form->district}}</span>
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 30%; text-align: center;">{{$form->province}}</span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:5rem;">
        <span>มีความประสงค์</span>
        <span class="dotted-line" style="width: 86%; text-align: center;">{{$form->have_intention}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>เพื่อ</span>
        <span class="dotted-line" style="width: 96%; text-align: center;">{{$form->have_to}}</span>
        <span>ในโฉนดที่ดิน เลขที่</span>
        <span class="dotted-line" style="width: 24.5%; text-align: center;">{{$form->land_title_number}}</span>
        <span>เล่มที่</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">{{$form->volume}}</span>
        <span>หน้า</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">{{$form->page}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>อยู่ในเขตหมู่ที่</span>
        <span class="dotted-line" style="width: 5%; text-align: center;">{{$form->village_area}}</span>
        <span>แขวง/ตำบล</span>
        <span class="dotted-line" style="width: 18%; text-align: center;">{{$form->subdistrict_area}}</span>
        <span>เขต/อำเภอ</span>
        <span class="dotted-line" style="width: 19%; text-align: center;">{{$form->district_area}}</span>
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 19%; text-align: center;">{{$form->province_area}}</span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:5rem;">
        <span>โดยยื่นเอกสารหลักฐานถูกต้องครบถ้วนตามแนบมาท้ายพร้อมนี้</span>
    </div>
    <div class="box_text" style="text-align: right; margin-top:1rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 35%; text-align: center;"> {{$form->full_name}} </span>
        <span>ผู้ขอรับรอง</span>
        <div style="margin-right: 55px;">
            <span>(</span>
            <span class="dotted-line" style="width: 35%; text-align: center;"> {{$form->salutation}}{{$form->full_name}} </span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ความเห็นเจ้าหน้าที่</span>
        <span class="dotted-line" style="width: 77%; text-align: center; border-bottom: 2px dotted black;"> </span>
    </div>
    <div class="box_text" style="text-align: right; margin-top:1rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 35%; text-align: center; border-bottom: 2px dotted black;"> </span>
        <span>ผู้ตรวจสอบ</span>
        <div style="margin-right: 55px;">
            <span></span>
            <span style="width: 35%; text-align: center; "> นายจิระชัย บุญสิงห์ </span>
            <span></span>
        </div>
        <div style="margin-right: 63px;">
            <span style="width: 35%; text-align: center; ">ผู้อำนวยการกองช่าง</span>
        </div>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ความเห็นเจ้าหน้าที่</span>
        <span class="dotted-line" style="width: 77%; text-align: center; border-bottom: 2px dotted black;""> </span>
    </div>
    <div class=" box_text" style="text-align: right; margin-top:1rem;">
            <span>(ลงชื่อ) ว่าที่ร้อยตรี</span>
            <span class="dotted-line" style="width: 35%; text-align: center; border-bottom: 2px dotted black;""> </span>
        <span>ผู้ตรวจสอบ</span>
        <div style=" margin-right: 63px;">
                <span style="width: 35%; text-align: center;">(กิติ์ไกรสีห์ เขียวหวาน)</span>
    </div>
    <div style="margin-right: 63px;">
        <span style="width: 35%; text-align: center;">ปลัดองค์การบริหารส่วนตำบลถ้ำ</span>
    </div>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ความเห็นเจ้าหน้าที่</span>
        <span class="dotted-line" style="width: 77%; text-align: center; border-bottom: 2px dotted black;"></span>
    </div>
    <div class="box_text" style="text-align: right; margin-top:1rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 35%; text-align: center; border-bottom: 2px dotted black;"> </span>
        <span>ผู้ตรวจสอบ</span>
        <div style="margin-right: 63px;">
            <span style="width: 35%; text-align: center;">(นายสมควร วิศุภกาญจน์)</span>
        </div>
        <div style="margin-right: 10px;">
            <span style="width: 50%; text-align: center;">รองนายกองค์การบริหารส่วนตำบล ปฏิบัติราชการแทน</span>
        </div>
        <div style="margin-right: 63px;">
            <span style="width: 35%; text-align: center;">นายกองค์การบริหารส่วนตำบลถ้ำ</span>
        </div>
    </div>
    <div class="footer font-sarabun-bold">
        <p>องค์กรบริหรส่วนตบลถ www.eservice.tam.go.th date&time</p>
    </div>

    {{-- new page --}}
    <div style="page-break-before: always;"></div>
    <div class="regis_number">หน้า 2 จาก 2
    </div>
    <div class="title_doc" style="text-align:center; margin-top:9rem;">
        <div>
            ขั้นตอนการขอรับรองสิ่งปลูกสร้างอาคาร
        </div>
        <span class="font-sarabun">(กรณีนอกเขตควบคุมอาคารตามพระราชบัญญัติควบคุมอาคาร พ.ศ. ๒๕๒๒)</span>
    </div>
    <div class="title_doc" style="text-align:start; margin-top:4rem; margin-left: 4rem; font-size:25px;">
        ๑.เอกสาร/หลักฐานประกอบการขอรับรองสิ่งปลูกสร้างอาคาร
    </div>
    <div class="font-sarabun" style="text-align:start; margin-left: 4rem;">

        <table style="width: 90%; margin-left: 1rem;">
            <tr>
                <td style="text-align: left;">๑.๑ สำเนาบัตรประจำตัวประชาชนของผู้ขอรับรองฯ /เจ้าของที่ดิน</td>
                <td style="text-align: right;">จำนวน ๑ ชุด</td>

            </tr>
            <tr>
                <td style="text-align: left;">๑.๒ สำเนาทะเบียนบ้านของผู้ขอรับรองฯ /เจ้าของที่ดิน </td>
                <td style="text-align: right;">จำนวน ๑ ชุด</td>
            </tr>
            <tr>
                <td style="text-align: left;">๑.๓ สำเนาเอกสารหลักฐานสิทธิ์ที่ดินของผู้ขอรับรองฯ /เจ้าของที่ดิน </td>
                <td style="text-align: right;">จำนวน ๑ ชุด</td>
            </tr>
            <tr>
                <td style="text-align: left;">๑.๔ หนังสือยินยอมให้ปลูกสร้างในที่ดิน
                    (กรณีเจ้าของที่ดินไม่ตรงกับผู้ขอรับรองฯ)</td>
                <td style="text-align: right;">จำนวน ๑ ชุด</td>
            </tr>
            <tr>
                <td style="text-align: left;">๑.๕ รูปถ่ายบ้าน 4 ด้าน</td>
                <td style="text-align: right;">จำนวน ๑ ชุด</td>
            </tr>
            <tr>
                <td style="text-align: left;">๑.๖ หนังสือรับรองจากผู้ใหญ่บ้าน พร้อมสำเนาบัตรประจำตัวประชาชน</td>
                <td style="text-align: right;">จำนวน ๑ ชุด</td>
            </tr>
        </table>
    </div>
    <div class="footer font-sarabun-bold">
        <p>องค์กรบริหรส่วนตบลถ www.eservice.tam.go.th date&time</p>
    </div>

</body>


</html>
