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

        .container {
            position: relative;
            width: 100%;
            height: 100vh;
            /* กำหนดความสูงของพื้นที่ตามขนาดหน้าจอ */
        }

        .box {
            border: 2px solid black;
            margin-top: 1rem;
            position: absolute;
            right: 0;
            width: auto;
            text-align: center;
            height: 130px;
            width: 230px;
            /* กำหนดความสูงของกล่อง */
        }

        .box-2 {
            margin-top: 1rem;
            position: absolute;
            top: 30;
            left: 45;
            width: auto;
            text-align: center;
            height: 100px;
            font-size: 23px;
            text-decoration: underline;
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
            font-size: 25px;
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

        .box_text input[type="checkbox"] {
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

    $registered = Carbon::parse($form->registered);
    $registered_day = $registered->day;
    $registered_month = $registered->locale('th')->translatedFormat('F');
    $registered_year = $registered->year + 543;
    @endphp

    <div class="regis_number">หน้า 1 จาก 3
    </div>
    <div class="regis_number">องค์การบริหารส่วนตำบลคลองบ้านโพธิ์
    </div>
    <div class="container">
        <div class="box-2 font-sarabun-bold" style="font-size: 23px;">
            คำขออนุญาตก่อสร้างอาคาร ดัดแปลงอาคาร หรือรื้อถอนอาคาร
        </div>
        <div class="box">
            <span>แบบ ข.1</span>
            <div class="box_text">
                <div>
                    <span>เลขรับที่</span>
                    <span class="dotted-line" style="width: 70%; border-bottom: 2px dotted black;"></span>
                </div>
                <div>
                    <span>วันที่</span>
                    <span class="dotted-line" style="width: 80%; border-bottom: 2px dotted black;"></span>
                </div>
                <div>
                    <span>ลงชื่อ</span>
                    <span class="dotted-line" style="width: 50%; border-bottom: 2px dotted black;"></span>
                    <span>ผู้รับคำขอ</span>
                </div>
            </div>

        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:11rem;">
        <span>เขียนที่</span>
        <span class="dotted-line" style="width: 25%; text-align: center; line-height: 1;">{{$form->written_at}}</span>
    </div>
    <div class="box_text" style="text-align: right; ">
        <span>วันที่</span>
        <span class="dotted-line" style="width: 5%; text-align: center;">{{$day }}</span>
        <span>เดือน</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"> {{$month }}</span>
        <span>พ.ศ.</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> {{$year }}</span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:5rem;">
        <span>ข้าพเจ้า</span>
        <span class="dotted-line" style="width: 57%; text-align: center;">{{$form->full_name}}</span>
        <span>เจ้าของอาคารหรือตัวแทนเจ้าของอาคาร</span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:5rem;">
        <span><input type="checkbox" style="margin-right: 40px;" {{$form->is_an_individual = 'yes' ? 'checked' : '' }}>เป็นบุคคลธรรมดา อยู่ที่เลขที่</span>
        <span class="dotted-line" style="width: 16%; text-align: center;">{{$form->house_number}}</span>
        <span>หมู่ที่</span><span class="dotted-line" style="width: 16%; text-align: center;">{{$form->village}}</span>
        <span>ตรอก/ซอย</span><span class="dotted-line" style="width: 16%; text-align: center;">{{$form->alley}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ถนน</span>
        <span class="dotted-line" style="width: 24%; text-align: center;">{{$form->road}}</span>
        <span>แขวง/ตำบล</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">{{$form->subdistrict}}</span>
        <span>เขต/อำเภอ</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">{{$form->district}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 35%; text-align: center;">{{$form->province}}</span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:5rem;">
        <span><input type="checkbox" style="margin-right: 40px;" {{$form->option = 'yes' ? 'checked' : '' }}></span>
        <span class="dotted-line" style="width: 87%; text-align: left;">{{$form->option_detail}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>จดทะเบียนเมื่อ วันที่</span>
        <span class="dotted-line" style="width: 16%; text-align: center;">{{$registered_day}}</span><span>เดือน</span>
        <span class="dotted-line" style="width: 16%; text-align: center;">{{$registered_month}}</span><span>พ.ศ.</span>
        <span class="dotted-line" style="width: 16%; text-align: center;">{{$registered_year}}</span><span>เลขทะเบียน</span>
        <span class="dotted-line" style="width: 15%; text-align: center;">{{$form->registration_number}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>สำนักงานตั้งอยู่เลขที่</span>
        <span class="dotted-line" style="width: 16%; text-align: center;">{{$form->office_located}}</span><span>หมู่ที่</span>
        <span class="dotted-line" style="width: 16%; text-align: center;">{{$form->office_village}}</span><span>ตรอก/ซอย</span>
        <span class="dotted-line" style="width: 16%; text-align: center;">{{$form->office_alley}}</span><span>ถนน</span>
        <span class="dotted-line" style="width: 16%; text-align: center;">{{$form->office_road}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>แขวง/ตำบล</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">{{$form->office_subdistrict}}</span><span>เขต/อำเภอ</span>
        <span class="dotted-line" style="width: 24%; text-align: center;">{{$form->office_district}}</span><span>จังหวัด</span>
        <span class="dotted-line" style="width: 24%; text-align: center;">{{$form->office_province}}</span>
    </div>
    <div class="box_text" style="text-align: left;  margin-left:5rem;">
        <span>โดย</span>
        <span class="dotted-line"
            style="width: 58%; text-align: center;">{{$form->by_name}}</span><span>ผู้มีอำนาจลงชื่อแทนนิติบุคคลของผู้อนุญาต</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>อยู่บ้านเลขที่</span>
        <span class="dotted-line" style="width: 12%; text-align: center;">{{$form->by_house_number}}</span><span>หมู่ที่</span>
        <span class="dotted-line" style="width: 11%; text-align: center;">{{$form->by_village}}</span><span>ตรอก/ซอย</span>
        <span class="dotted-line" style="width: 24%; text-align: center;">{{$form->by_alley}}</span><span>ถนน</span><span
            class="dotted-line" style="width: 24%; text-align: center;">{{$form->by_road}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>แขวง/ตำบล</span>
        <span class="dotted-line" style="width: 24%; text-align: center;">{{$form->by_subdistrict}}</span>
        <span>เขต/อำเภอ</span>
        <span class="dotted-line" style="width: 24%; text-align: center;">{{$form->by_district}}</span>
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 24%; text-align: center;">{{$form->by_province}}</span>
    </div>
    <div class="box_text" style="text-align: left;  margin-left:5rem;">
        <span>ขอยื่นคำขอรับใบอนุญาต</span>
        <span class="dotted-line" style="width: 40%; text-align: center;">{{$form->apply_for_license}}</span><span>พ่อเจ้าพนักงานท้องถิ่น
            ดังต่อไปนี้
        </span>
    </div>
    <div class="box_text" style="text-align: left;  margin-left:5rem;">
        <span>ข้อที่ 1 ทำการก่อสร้างอาคาร/ดัดแปลงอาคาร/รื้อถอนอาคาร </span>
        <span>ที่บ้านเลขที่
        </span><span class="dotted-line" style="width: 19%; text-align: center;">{{$form->apply_house_number}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>หมู่ที</span>
        <span class="dotted-line" style="width: 18%; text-align: center;">{{$form->apply_village}}</span><span>ตรอก/ซอย
        </span><span class="dotted-line" style="width: 18%; text-align: center;">{{$form->apply_alley}}</span><span>ถนน</span>
        <span class="dotted-line" style="width: 18%; text-align: center;">{{$form->apply_road}}</span><span>แขวง/ตำบล</span>
        <span class="dotted-line" style="width: 18%; text-align: center;">{{$form->apply_subdistrict}}</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>เขต/อำเภอ</span>
        <span class="dotted-line" style="width: 16%; text-align: center;">{{$form->apply_district}}</span>
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 20%; text-align: center;">{{$form->apply_province}}</span><span>โดย</span>
        <span class="dotted-line" style="width: 30%; text-align: center;">{{$form->apply_by}}</span><span>เป็นเจ้าของอาคาร</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ในที่ดินโฉนดที่ดิน เลขที่/น.ส.3 เลขที่ / ส.ค.1 เลขที่</span>
        <span class="dotted-line" style="width: 20%; text-align: center;">{{$form->apply_number}}</span>
        <span>เป็นที่ดินของ</span>
        <span class="dotted-line" style="width: 30%; text-align: center;">{{$form->it_the_land_of}}</span>
    </div>
    <div class="footer font-sarabun-bold">
        <p>องค์การบริหารส่วนตำบลคลองบ้านโพธิ์ https://public.es.demo.gmskysmartcity.com/</p>
    </div>
    {{-- new page --}}
    <div style="page-break-before: always;"></div>
    <div class="regis_number">หน้า 2 จาก 3
    </div>
    <div class="regis_number">เทศบาลเมืองต้นแบบ ๔.๐
    </div>
    <div class="box_text" style="text-align: left;  margin-left:5rem;">
        <span>ข้อ 2 เป็นอาคาร </span>
        <div style="margin-left:1rem;">
            <span>(1) ชนิด</span><span class="dotted-line"
                style="width: 40%; text-align: center;">{{$form->building_type_1}}</span><span>จำนวน</span><span class="dotted-line"
                style="width: 10%; text-align: center;">{{$form->building_num_1}}</span><span>เพื่อใช้เป็น</span><span class="dotted-line"
                style="width: 26%; text-align: center;">{{$form->building_to_1}}</span>
        </div>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>โดยมีที่จอดรถ ที่กลับรถ และทางเข้าออกของรถ จำนวน </span><span class="dotted-line"
            style="width: 20%; text-align: center;">{{$form->building_Number_vehicles_1}}</span><span>คัน </span>
    </div>
    <div class="box_text" style="text-align: left;  margin-left:5rem;">
        <div style="margin-left:1rem;">
            <span>(2) ชนิด</span><span class="dotted-line"
                style="width: 40%; text-align: center;">{{$form->building_type_2}}</span><span>จำนวน</span><span class="dotted-line"
                style="width: 10%; text-align: center;">{{$form->building_num_2}}</span><span>เพื่อใช้เป็น</span><span class="dotted-line"
                style="width: 26%; text-align: center;">{{$form->building_to_2}}</span>
        </div>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>โดยมีที่จอดรถ ที่กลับรถ และทางเข้าออกของรถ จำนวน </span><span class="dotted-line"
            style="width: 20%; text-align: center;">{{$form->building_Number_vehicles_2}}</span><span>คัน </span>
    </div>
    <div class="box_text" style="text-align: left;  margin-left:5rem;">
        <div style="margin-left:1rem;">
            <span>(3) ชนิด</span><span class="dotted-line"
                style="width: 40%; text-align: center;">{{$form->building_type_3}}</span><span>จำนวน</span><span class="dotted-line"
                style="width: 10%; text-align: center;">{{$form->building_num_3}}</span><span>เพื่อใช้เป็น</span><span class="dotted-line"
                style="width: 26%; text-align: center;">{{$form->building_to_3}}</span>
        </div>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>โดยมีที่จอดรถ ที่กลับรถ และทางเข้าออกของรถ จำนวน </span><span class="dotted-line"
            style="width: 20%; text-align: center;">{{$form->building_Number_vehicles_3}}</span><span>คัน </span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ตามแผนผังบริเวณ แบบแปลน รายการคำนวณประกอบแบบแปลน และรายการคำนวณที่แนบมาพร้อมนี้
        </span>
    </div>
    <div class="box_text" style="text-align: left;  margin-left:5rem;">
        <div>
            <span>ข้อ 3 มี </span><span class="dotted-line" style="width: 40%; text-align: center;">{{$form->project_supervisor}}</span>
            <span>เป็นผู้ควบคุมงาน</span>
        </div>
        <div style="margin-left: 2.5rem;">
            <span class="dotted-line" style="width: 40%; text-align: center;">{{$form->designer_and_calculator}}</span>
            <span>เป็นผู้ออกแบบและคำนวณ</span>
        </div>
    </div>
    <div class="box_text" style="text-align: left;  margin-left:5rem;">
        <span>ข้อ 4 มี กำหนดแล้วเสร็จ </span><span class="dotted-line"
            style="width: 30%; text-align: center;">{{$form->scheduled_for_completion}}</span>
        <span>วัน นับตั้งแต่วันที่ได้รับใบอนุญาต</span>
    </div>
    <div class="box_text" style="text-align: left;  margin-left:5rem;">
        <span>ข้อ 5 พร้อมคำขอนี้ข้าพเจ้าได้แนบเอกสารหลักฐานต่างๆ มาด้วยแล้วคือ </span>
        <div style="margin-left: 1rem;">
            <span>(1) แผนผังบริเวณ แบบแปลน รายการประกอบแบบแปลน จำนวน </span>
            <span class="dotted-line" style="width: 16%; text-align: center;">{{$form->number_of_blueprints}}</span><span>ชุด ชุดละ</span>
            <span class="dotted-line" style="width: 16%; text-align: center;">{{$form->blueprint_set}}</span>
        </div>
        <div style="margin-left: 1rem;">
            <span>(2) รายการคำนวณหนึ่งชุด จำนวน </span>
            <span class="dotted-line" style="width: 16%; text-align: center;">{{$form->one_set_quantity}}</span><span>แผ่น</span><span>
                (กรณีเป็นอาคารสาธารณะ อาคารพิเศษหรืออาคารที่
                ก่อสร้างด้วยวัตถุถาวรและวัตถุทนไฟเป็นส่วนใหญ่)
            </span>
        </div>
        <div style="margin-left: 1rem;">
            <span>(3) หนังสือแสดงความเป็นตัวแทนของอาคาร (กรณีตัวแทนเจ้าของอาคารเป็นผู้ขออนุญาต)</span>
        </div>
        <div style="margin-left: 1rem;">
            <span>(4) สำเนาหนังสือรับรองการจดทะเบียน
                วัตถุประสงค์และผู้มีอำนาจลงชื่อแทนนิติบุคคลผู้ขออนุญาตออกให้ไม่เกิน
            </span>
            <span>กำหนดเดือน
                (กรณีที่นิติบุคคลเป็นผู้ขออนุญาต)</span>
        </div>
        <div style="margin-left: 1rem;">
            <span>(5) หนังสือแสดงว่าเป็นผู้จัดการหรือผู้แทนซึ่งเป็นผู้ดำเนินกิจการของนิติบุคคล
                (กรณีที่นิติบุคคลเป็นผู้ขอ
                อนุญาต)
            </span>
        </div>
        <div style="margin-left: 1rem;">
            <span>(6) หนังสือแสดงความยินยอมและรับรองของผู้ออกแบบและคำนวณ จำนวน
            </span><span class="dotted-line" style="width: 30%; text-align: center;">{{$form->designer_calculates}}</span><span>ฉบับ</span>
            <span>พร้อมทั้งสำเนาใบอนุญาตเป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุมหรือสถาปัตยกรรมควบคุม จำนวน </span><span
                class="dotted-line" style="width: 11%; text-align: center;">{{$form->control_architecture}}</span><span>ฉบับ</span>
            <span>(กรณีที่เป็นอาคารมีลักษณะ ขนาด
                อยู่ในประเภทเป็นวิชาชีพวิศวกรรมควบคุมหรือสถาปัตยกรรมควบคุมแล้วแต่กรณี)</span>
        </div>
        <div style="margin-left: 1rem;">
            <span>(7) สำเนาหรือภาพถ่ายโฉนดที่ดิน เลขที่/ น.ส.3 เลขที่/ ส.ค. 1 เลขที่
            </span><span class="dotted-line"
                style="width: 15%; text-align: center;">{{$form->number}}</span><span>จำนวน</span><span class="dotted-line"
                style="width: 15%; text-align: center;">{{$form->quantity}}</span><span>ฉบับ</span>
            <span>หรือเป็นหนังสือยินยอมของเจ้าของที่ดิน จำนวน </span><span class="dotted-line"
                style="width: 20%; text-align: center;">{{$form->number_of_land_owners}}</span><span>ฉบับ</span>
        </div>
        <div style="margin-left: 1rem;">
            <span>(8) หนังสือแสดงความยินยอมของผู้ควบคุมงานตามข้อ 3 จำนวน
            </span><span class="dotted-line" style="width: 15%; text-align: center;">{{$form->controller}}</span><span>ฉบับ</span>
        </div>
        <div style="margin-left: 1rem;">
            <span>(9) สำเนาหรือภาพถ่ายใบอนุญาตเป็นผู้ประกอบวิชาชีพวิศวกรรมควบคุมหรือวิชาชีพสถาปัตยกรรมควบคุม
            </span><span>ของผู้ควบคุม จำนวน</span><span class="dotted-line"
                style="width: 15%; text-align: center;">{{$form->controller_2}}</span><span>ฉบับ</span><span>เฉพาะกรณีที่เป็นอาคารมีลักษณะขนาดอยู่ในประเภทเป็นวิชา
            </span><span>ชีพวิศวกรรมควบคุม หรือ
                วิชาชีพสถาปัตยกรรมควบคุม แล้วแต่กรณี)</span>
        </div>
        <div style="margin-left: 1rem;">
            <span>(10) เอกสาร อื่นๆ (ถ้ามี)
            </span><span class="dotted-line" style="width: 72%; text-align: center;">{{$form->other_documents}}</span><span>ฉบับ</span>
        </div>
    </div>
    <div class="box_text" style="text-align: right; margin-top:1rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 35%; text-align: center;">{{$form->full_name}}</span>
        <span>ผู้ขออนุญาต</span>
        <div style="margin-right: 70px;">
            <span>(</span>
            <span class="dotted-line" style="width: 35%; text-align: center;"> {{$form->full_name}} </span>
            <span>)</span>
        </div>
    </div>
    <div class="footer font-sarabun-bold">
        <p>องค์การบริหารส่วนตำบลคลองบ้านโพธิ์ https://public.es.demo.gmskysmartcity.com/</p>
    </div>
    {{-- new page --}}
    <div style="page-break-before: always;"></div>
    <div class="regis_number">หน้า 3 จาก 3
    </div>
    <div class="regis_number">เทศบาลเมืองต้นแบบ ๔.๐
    </div>
    <div class="box_text"
        style="text-align: left; margin-top:1rem; border-bottom:2px solid black; padding-bottom:40px;">
        <span class="font-sarabun-bold" style="text-decoration: underline;">หมายเหตุ </span>
        <span style="margin-left:1.5rem;">(1) ข้อความใดที่ไม่ใช้ให้ขีดฆ่า</span>
        <div style="margin-left:5rem;">(2) ใส่เครื่องหมาย ถูก ในช่อง ว่าง หน้าที่ต้องการ</div>
    </div>
    <div class="box_text" style="text-align: left; margin-top:1rem;">
        <span class="font-sarabun-bold" style="text-decoration: underline;">หมายเหตุของเจ้าหน้าที่ </span>
        <div style="margin-left:5rem;">จะต้องแจ้งให้ผู้ขออนุญาตทราบว่า จะอนุญาตหรือไม่อนุญาตหรือขยายเวลาภายใน
        </div>
    </div>
    <div class="box_text" style="text-align: left; margin-top:1rem;">
        <span>วันที่</span>
        <span class="dotted-line" style="width: 5%; text-align: center; border-bottom: 2px dotted black;"></span>
        <span>เดือน</span>
        <span class="dotted-line" style="width: 15%; text-align: center; border-bottom: 2px dotted black;"> </span>
        <span>พ.ศ.</span>
        <span class="dotted-line" style="width: 10%; text-align: center; border-bottom: 2px dotted black;"> </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top:2rem; margin-left:5rem;">
        <span>ผู้ขอขออนุญาตได้ชำระค่าธรรมเนียมใบอนุญาต</span>
        <span class="dotted-line" style="width: 21%; text-align: center; border-bottom: 2px dotted black;"></span>
        <span>เป็นเงิน</span>
        <span class="dotted-line" style="width: 21%; text-align: center; border-bottom: 2px dotted black;"> </span>
        <span>บาทและ</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>ค่าธรรมเนียมการตรวจแบบแปลน</span>
        <span class="dotted-line" style="width: 18%; text-align: center; border-bottom: 2px dotted black;"></span>
        <span>เป็นเงิน</span>
        <span class="dotted-line" style="width: 18%; text-align: center; border-bottom: 2px dotted black;"> </span>
        <span>บาท</span><span class="dotted-line" style="width: 16%; text-align: center; border-bottom: 2px dotted black;">
            </span><span>สตางค์ตามใบ</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>เสร็จรับเงินเล่มที่</span>
        <span class="dotted-line" style="width: 15%; text-align: center; border-bottom: 2px dotted black;"></span>
        <span>เลขที</span>
        <span class="dotted-line" style="width: 10%; text-align: center; border-bottom: 2px dotted black;" > </span>
        <span>ลงวันที</span><span class="dotted-line" style="width: 16%; text-align: center; border-bottom: 2px dotted black;">
            </span><span>เดือน</span><span class="dotted-line" style="width: 10%; text-align: center; border-bottom: 2px dotted black;">
            </span><span>พ.ศ.</span><span class="dotted-line" style="width: 15%; text-align: center; border-bottom: 2px dotted black;">
            </span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:5rem;">
        <span>ออกใบอนุญาตแล้ว เล่มที่</span>
        <span class="dotted-line" style="width: 10%; text-align: center; border-bottom: 2px dotted black;"></span>
        <span>ฉบับ</span>
        <span class="dotted-line" style="width: 10%; text-align: center; border-bottom: 2px dotted black;"> </span>
        <span>ลงวันที่</span>
        <span class="dotted-line" style="width: 10%; text-align: center; border-bottom: 2px dotted black;"> </span>
        <span>เดือน</span>
        <span class="dotted-line" style="width: 12%; text-align: center; border-bottom: 2px dotted black;"> </span>
        <span>พ.ศ.</span>
        <span class="dotted-line" style="width: 10%; text-align: center; border-bottom: 2px dotted black;"> </span>
    </div>
    <div class="footer font-sarabun-bold">
        <p>องค์การบริหารส่วนตำบลคลองบ้านโพธิ์ https://public.es.demo.gmskysmartcity.com/</p>
    </div>
</body>

</html>
