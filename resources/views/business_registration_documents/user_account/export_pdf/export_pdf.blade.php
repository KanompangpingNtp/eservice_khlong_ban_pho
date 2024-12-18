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
    <div class="regis_number">หน้า 1 จาก 2
    </div>
    <div class="regis_number">เทศบาลเมืองต้นแบบ ๔.๐
    </div>
    <div class="regis_number font-sarabun-bold">เอกสารแนบ แบบ ทพ.
    </div>
    <div class="box_text" style="border: 2px solid black; position: relative; padding: 0.5rem;">
        <!-- ข้อความขวาบน -->
        <div style="position: absolute; top: -1; right: 1; padding: 5px; font-size: 15px;">
            * 1 คำขอ : 1 เว็บไซต์
        </div>
        <!-- เนื้อหาหลัก -->
        <div class="title_doc" style="text-align: center;">
            เอกสารประกอบการจดทะเบียนพาณิชย์อิเล็กทรอนิกส์
        </div>
        <div style="margin-top: 1rem;">
            ชื่อผู้ประกอบพาณิชย์กิจ
            <span class="dotted-line" style="width: 30%; text-align: center; line-height: 1;">data</span>
            ทะเบียนเลขที่
            <span class="dotted-line" style="width: 20%; text-align: center; line-height: 1;">data</span>
        </div>
    </div>
    <div class="box_text font-sarabun-bold" style="text-align: left; ">
        <span>***เฉพาะข้อ 1-ข้อ 4 กรุณาระบุข้อความภาษาอังกฤษ***</span>
    </div>



</body>


</html>
