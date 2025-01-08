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
    $date = Carbon::parse($form->created_at);
    $day = $date->day;
    $month = $date->locale('th')->translatedFormat('F');
    $year = $date->year + 543;
    @endphp

    <img src="{{ public_path('images\logo.png') }}" alt="Logo">

    <div class="regis_number">หน้า 1 จาก 1
    </div>
    <div class="regis_number">องค์การบริหารส่วนตำบลคลองบ้านโพธิ์
    </div>
    <div class="title_doc" style="text-align:center;">
        คำร้องทะเบียนพาณิชย์
    </div>
    <div class="box_text" style="text-align: left; border-bottom: 2px solid black;">
        <table style="width: 90%;">
            <tr>
                <td style="text-align: left;">คำร้องที่<span class="dotted-line" style="width: 15%; text-align: center; line-height: 1; margin-left:10px; border-bottom: 2px dotted black;"></span></td>
                <td style="text-align: right;">สํานักงานทะเบียนพาณิชย์</td>

            </tr>
            <tr>
                <td style="text-align: left;">รับวันที่<span class="dotted-line" style="width: 15%; text-align: center; line-height: 1; margin-left:10px; border-bottom: 2px dotted black;"> </span>/<span class="dotted-line" style="width: 15%; text-align: center; line-height: 1; border-bottom: 2px dotted black;"> </span>/<span class="dotted-line" style="width: 15%; text-align: center; line-height: 1; border-bottom: 2px dotted black;"> </span></td>
                <td style="text-align: right;">องค์การบริหารส่วนตำบลคลองบ้านโพธิ์</td>
            </tr>
            <tr>
                <td style="text-align: left;">เรื่อง คําร้องทะเบียนพาณิชย์ </td>
                <td style="text-align: right;">จังหวัด ฉะเชิงเทรา</td>
            </tr>
        </table>
    </div>
    <div class="box_text" style="text-align: right; margin-top:2rem;">
        <span>เขียนที่</span>
        <span class="dotted-line" style="width: 25%; text-align: center; line-height: 1;">{{$form->written_at}}</span>
    </div>
    <div class="box_text" style="text-align: right; margin-right:8rem; margin-top:1rem;">
        <span>วันที่</span>
        <span class="dotted-line" style="width: 5%; text-align: center;">{{$day}}</span>
        <span>เดือน</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"> {{$month}}</span>
        <span>พ.ศ.</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{$year}}</span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:5rem;">
        <span>ข้าพเจ้า</span>
        <span class="dotted-line" style="width: 36%; text-align: center;">{{$form->salutation}}{{$form->full_name}}</span>
        <span>เชื้อชาติ</span>
        <span class="dotted-line" style="width: 20%; text-align: center;">{{$form->ethnicity}}</span>
        <span>สัญชาติ</span>
        <span class="dotted-line" style="width: 20%; text-align: center;">{{$form->nationality}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ที่อยู่เลขที่</span>
        <span class="dotted-line" style="width: 11%; text-align: center;">{{$form->house_number}}</span>
        <span>หมู่ที่</span>
        <span class="dotted-line" style="width: 10%; text-align: center;">{{$form->village}}</span>
        <span>ตรอก/ซอย</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">{{$form->alley}}</span>
        <span>ถนน</span>
        <span class="dotted-line" style="width: 25.9%; text-align: center;">{{$form->road}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>แขวง/ตำบล</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">{{$form->subdistrict}}</span>
        <span>เขต/อำเภอ</span>
        <span class="dotted-line" style="width: 24%; text-align: center;">{{$form->district}}</span>
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 24.4%; text-align: center;">{{$form->province}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ชื่อที่ใช้เรียกในการประกอบพาณิชย์</span>
        <span class="dotted-line" style="width: 73%; text-align: center;">{{$form->name_used_to_call}}</span>

    </div>
    <div class="box_text" style="text-align: left;">
        <span>ได้จดทะเบียนพาณิชย์คําขอที่</span>
        <span class="dotted-line" style="width: 43%; text-align: center;">{{$form->registered}}</span>
        <span>ทะเบียนที่</span>
        <span class="dotted-line" style="width: 25.5%; text-align: center;">{{$form->registration}}</span>
    </div>
    <div class="box_text" style="text-align: left; margin-top:1rem;">
        <span>ขอยื่นคําร้องต่อพนักงานเจ้าหน้าที่ทะเบียนพาณิชย์ ดังต่อไปนี้</span>
    </div>
    <div style="text-align: left; ">
        <div style="word-wrap: break-word; white-space: normal;  color: blue;">
            <span style="color:black; margin-left:5rem;">ด้วย</span>
            <span style="border-bottom: 2px dotted blue;"> {{$form->detail}}</span>
        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:6rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 35%; text-align: center;"> {{$form->full_name}} </span>
        <span>ผู้ขอรับรอง</span>
        <div style="margin-right: 55px;">
            <span>(</span>
            <span class="dotted-line" style="width: 35%; text-align: center;"> {{$form->salutation}}{{$form->full_name}} </span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style=" margin-top:15rem;">
        <span class="font-sarabun-bold ">หมายเหตุ</span>
        <span>ให้ลงลายมือชื่อผู้ยื่นคําร้องและผู้เขียนข้างท้ายคําร้องด้วย</span>
    </div>
    <div class="footer font-sarabun-bold">
        <p>องค์การบริหารส่วนตำบลคลองบ้านโพธิ์ https://public.es.demo.gmskysmartcity.com/</p>
    </div>

</body>


</html>
