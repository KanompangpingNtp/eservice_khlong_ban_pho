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
    <div class="regis_number">หน้า 1 จาก 3
    </div>
    <div class="regis_number">เทศบาลเมืองต้นแบบ ๔.๐
    </div>
    <div class="title_doc" style="text-align:center;">
        แบบคำขอรับใบอนุญาต
    </div>

    <div class="box_text" style="text-align: right; margin-top:2rem;">
        <span>เขียนที่</span>
        <span class="dotted-line" style="width: 25%; text-align: center; line-height: 1;">data</span>
    </div>
    <div class="box_text" style="text-align: right; margin-right:8rem; margin-top:1rem;">
        <span>วันที่</span>
        <span class="dotted-line" style="width: 5%; text-align: center;">data</span>
        <span>เดือน</span>
        <span class="dotted-line" style="width: 15%; text-align: center;"> data</span>
        <span>พ.ศ.</span>
        <span class="dotted-line" style="width: 10%; text-align: center;"> data</span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:5rem;">
        <span>ข้าพเจ้า</span>
        <span class="dotted-line" style="width: 52%; text-align: center;">data</span>
        <span>อายุ</span>
        <span class="dotted-line" style="width: 10%; text-align: center;">data</span>
        <span>ปี สัญชาติ</span>
        <span class="dotted-line" style="width: 15%; text-align: center;">data</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>อยู่บ้านเลขที่</span>
        <span class="dotted-line" style="width: 11%; text-align: center;">data</span>
        <span>หมู่ที่</span>
        <span class="dotted-line" style="width: 10%; text-align: center;">data</span>
        <span>ตรอก/ซอย</span>
        <span class="dotted-line" style="width: 24%; text-align: center;">data</span>
        <span>ถนน</span>
        <span class="dotted-line" style="width: 24%; text-align: center;">data</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>แขวง/ตำบล</span>
        <span class="dotted-line" style="width: 25%; text-align: center;">data</span>
        <span>เขต/อำเภอ</span>
        <span class="dotted-line" style="width: 24%; text-align: center;">data</span>
        <span>จังหวัด</span>
        <span class="dotted-line" style="width: 24.4%; text-align: center;">data</span>
    </div>
    <div class="box_text" style="text-align: left;">
        <span>หมายเลขโทรศัพท์</span>
        <span class="dotted-line" style="width: 70%; text-align: center;">data</span>
    </div>

    <div class="box_text" style="text-align: left; margin-top:1rem; margin-left:5rem;">
        <span>ขอยื่นคำขอรับใบอนุญาตประกอบกิจการ</span>
    </div>
    <div class="box_text" style="text-align: left; margin-left: 5rem;">
        <span><input type="checkbox"> สถานที่จัดจำหน่ายอาหารหรือสะสมอาหาร ประเภท</span>
        <span class="dotted-line" style="width: 50%; text-align: center;">data
        </span>
        <div>
            <span> โดยมีพื้นที่ประกอบการ</span>
            <span class="dotted-line" style="width: 50%; text-align: center;">data
            </span>
            <span>ตารางเมตร</span>
        </div>
    </div>

    <div class="box_text" style="text-align: left; margin-left: 5rem; margin-top:1rem;">
        <span><input type="checkbox"> กิจการที่เป็นอันตรายต่อสุขภาพ ประเภท</span>
        <span class="dotted-line" style="width: 60%; text-align: center;">data
        </span>
        <div>
            <span> มีคนงาน</span>
            <span class="dotted-line" style="width: 30%; text-align: center;">data
            </span>
            <span>คน</span>
            <span> ใช้เครื่องจักรขนาด</span>
            <span class="dotted-line" style="width: 30%; text-align: center;">data
            </span>
            <span>แรงม้า</span>
        </div>
    </div>

    <div class="box_text" style="text-align: left; margin-left: 5rem; margin-top:1rem;">
        <span><input type="checkbox"> กิจการตลาด ที่มีการจำหน่าย </span>
        <span class="dotted-line" style="width: 39%; text-align: center;">data
        </span><span> (เป็นประจ/เป็นครั้งคราว/ตามวันนัด)
        </span>
    </div>

    <div class="box_text" style="text-align: left; margin-left: 5rem; margin-top:1rem;">
        <span><input type="checkbox"> กิจการจำหน่ายสินค้าในที่/ทางสาธารณสุข จำหน่ายสินค้าประเภท </span>
        <span class="dotted-line" style="width: 100%; text-align: center;">data
        </span><span>ณ บริเวณ</span><span class="dotted-line" style="width: 41%; text-align: center;">data
        </span><span>โดยวิธีการ</span><span class="dotted-line" style="width: 41%; text-align: center;">data
        </span>
    </div>

    <div class="box_text" style="text-align: left; margin-left: 5rem; margin-top:1rem;">
        <span><input type="checkbox"> กิจการรับทำการเก็บ ขนหรือกจัดสิ่งปฏิกูลมูลฝอยโดยทำเป็นธุรกิจ ประเภท</span>
        <div style="text-align: left; margin-left: 2rem; ">
            <span><input type="checkbox"> เก็บขนสิ่งปฏิกูลโดยมีแหล่งกำจัดที่</span><span class="dotted-line"
                style="width: 64%; text-align: center;">data
            </span>
        </div>
        <div style="text-align: left; margin-left: 2rem; ">
            <span><input type="checkbox"> เก็บขนและกำจัดสิ่งปฏิกูล โดยมีระบบกำจัดอยู่ที่ </span><span
                class="dotted-line" style="width: 52%; text-align: center;">data
            </span>
        </div>
        <div style="text-align: left; margin-left: 2rem; ">
            <span><input type="checkbox"> เก็บขนมูลฝอย โดยมีแหล่งกำจัดที่</span><span class="dotted-line"
                style="width: 64%; text-align: center;">data
            </span>
        </div>
        <div style="text-align: left; margin-left: 2rem; ">
            <span><input type="checkbox"> เก็บขนและกำจัดมูลฝอย โดยมีแหล่งกำจัดที่ </span><span class="dotted-line"
                style="width: 56%; text-align: center;">data
            </span>
        </div>
    </div>

    <div class="box_text" style="text-align: left; margin-left: 5rem; margin-top:1rem;">
        <span> ต่อ ( เจ้าพนักงานท้องถิ่น ) </span>
        <span class="dotted-line" style="width: 45%; text-align: center;">data
        </span><span>พร้อมคำขอนี้ ข้าพเจ้าได้แนบหลักฐาน</span>
        <div>
            และเอกสารมาด้วย ดังนี้คือ
        </div>
    </div>

    <div class="footer font-sarabun-bold">
        <p>เทศบลเมืองต้นแบบ ๔.๐ www.eservice-default.go.th date&time</p>
    </div>
    {{-- new page --}}
    <div style="page-break-before: always;"></div>
    <div class="regis_number">หน้า 2 จาก 3
    </div>
    <div class="regis_number">เทศบาลเมืองต้นแบบ ๔.๐
    </div>

    <div class="box_text" style="text-align: left; margin-left: 5rem; margin-top:1rem;">
        <span> 1) สำเนาบัตรประจำตัว</span>
        <span class="dotted-line" style="width: 20%; text-align: center;">data
        </span><span>(ประชาชน/ข้าราชการ/พนักงานรัฐวิสาหกิจ)
        </span>
        <div>
            <span> 2) สำเนาทะเบียนบ้าน
            </span>
        </div>
        <div>
            <span> 3) หลักฐานการอนุญาตตามกฎหมายอื่นที่เกี่ยวข้อง คือ
            </span>
            <div style="margin-left: 20px; ">
                <span>3.1</span>
                <span class="dotted-line" style="width: 80%; text-align: center; line-height: 1;">data</span>
            </div>
            <div style="margin-left: 20px; ">
                <span>3.2</span>
                <span class="dotted-line" style="width: 80%; text-align: center; line-height: 1;">data</span>
            </div>
        </div>
        <div>
            <span> 4) </span>
            <span class="dotted-line" style="width: 82%; text-align: center; line-height: 1;">data</span>
        </div>
        <div>
            <span> 5) </span>
            <span class="dotted-line" style="width: 82%; text-align: center; line-height: 1;">data</span>
        </div>
    </div>

    <div class="box_text font-sarabun-bold"
        style="margin-top:3rem; border: 2px solid black; padding-left: 2rem; padding-right: 2rem;">
        <span style="border-bottom:2px solid black;"> แผนฝังแสดงที่ตั้งสถานประกอบกิจการโดยสังเขป </span>
        <div style="margin: 6rem;">
            <span style="border-bottom:2px solid black;">ใช้แผนฝังแสดงที่ตามไฟล์แนบ</span>
        </div>
    </div>

    <div class="box_text" style="text-align: left; margin-top:1rem; margin-left:7rem;">
        <span>ข้าพเจ้าขอรับรองว่า ข้อความในแบบคำขอใบอนุญาตนี้เป็นความจริงทุกประการ</span>
    </div>

    <div class="box_text" style="text-align: right; margin-top:6rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 35%; text-align: center;"> data</span>
        <span>ผู้ขอรับใบอณุญาต</span>
        <div style="margin-right: 110px;">
            <span>(</span>
            <span class="dotted-line" style="width: 35%; text-align: center;"> data </span>
            <span>)</span>
        </div>
    </div>

    <div class="footer font-sarabun-bold">
        <p>เทศบลเมืองต้นแบบ ๔.๐ www.eservice-default.go.th date&time</p>
    </div>

    {{-- new page --}}
    <div style="page-break-before: always;"></div>
    <div class="regis_number">หน้า 3 จาก 3
    </div>
    <div class="regis_number">เทศบาลเมืองต้นแบบ ๔.๐
    </div>

    <div class="box_text" style=" margin-top:2rem;">
        <span style="border-bottom:2px solid black;">ความเห็นของเจ้าพนักงานสาธารณสุข</span>
    </div>
    <div class="box_text" style="text-align: left; margin-top:1rem;">
        <span>จากการตรวจสอบสวนประกอบการ</span>
    </div>
    <div class="box_text" style="text-align: left; margin-top:1rem;">
        <span style="color:black; margin-left:5rem;"><input type="checkbox">เห็นสมควรอนุญาต
            และควรกำหนดเงื่อนไขดังนี้</span><span class="dotted-line" style="width: 49%; text-align: center;"> data
        </span>
        <span class="dotted-line" style="width: 100%; text-align: center;"> data </span>
        <span class="dotted-line" style="width: 100%; text-align: center;"> data </span>
    </div>
    <div class="box_text" style="text-align: left; margin-top:1rem;">
        <span style="color:black; margin-left:5rem;"><input type="checkbox">เห็นสมควรไม่อนุญาต เพราะ</span><span
            class="dotted-line" style="width: 63%; text-align: center;"> data
        </span>
        <span class="dotted-line" style="width: 100%; text-align: center;"> data </span>
        <span class="dotted-line" style="width: 100%; text-align: center;"> data </span>
    </div>

    <div class="box_text" style="text-align: right; margin-top:4rem;">
        <span>(ลงชื่อ)</span>
        <span class="dotted-line" style="width: 35%; text-align: center;"> data</span>
        <span>เจ้าพนักงานสาธารณสุข</span>
        <div style="margin-right: 8rem;">
            <span>(</span>
            <span class="dotted-line" style="width: 40%; text-align: center;"> data </span>
            <span>)</span>
        </div>
    </div>
    <div class="box_text" style="text-align: right;">
        <span>ตำแหน่ง</span>
        <span class="dotted-line" style="width: 35%; text-align: center; margin-right: 7.5rem;"> data</span>
    </div>
    <div class="box_text" style="text-align: right;">
        <span>วันที่</span>
        <span class="dotted-line" style="width: 10%; text-align: center; "> data</span> /<span class="dotted-line"
            style="width: 12%; text-align: center;"> data</span>/<span class="dotted-line"
            style="width: 12%; text-align: center; margin-right: 7rem;"> data</span>
    </div>

    <div class="box_text font-sarabun-bold"
        style="margin-top:3rem; border: 2px solid black; padding-top: 2rem; padding-bottom: 2rem; padding-left: 1rem; padding-right: 2rem;">
        <span style="border-bottom:2px solid black;"> คำสั่งของเจ้าพนักงานท้องถิ่น </span>
        <div style="margin-left:4rem; text-align:left;">
            <span><input type="checkbox"> อนุญาตให้ประกอบกิจการได้ </span>
        </div>
        <div style="margin-left:4rem; text-align:left;">
            <span><input type="checkbox"> ไม่อนุญาตให้ประกอบกิจการได้ </span>
        </div>
        <div class="box_text" style="text-align: right; margin-top:4rem;">
            <span>(ลงชื่อ)</span>
            <span class="dotted-line" style="width: 35%; text-align: center;"> data</span>
            <span>เจ้าพนักงานท้องถิ่น</span>
            <div style="margin-right: 6rem;">
                <span>(</span>
                <span class="dotted-line" style="width: 40%; text-align: center;"> data </span>
                <span>)</span>
            </div>
        </div>
        <div class="box_text" style="text-align: right;">
            <span>ตำแหน่ง</span>
            <span class="dotted-line" style="width: 25%; text-align: center; "> data</span>
            <span>วันที่</span>
            <span class="dotted-line" style="width: 10%; text-align: center; "> data</span> /<span
                class="dotted-line" style="width: 10%; text-align: center;"> data</span>/<span class="dotted-line"
                style="width: 10%; text-align: center;"> data</span>
        </div>
    </div>

    <div class="footer font-sarabun-bold">
        <p>เทศบลเมืองต้นแบบ ๔.๐ www.eservice-default.go.th date&time</p>
    </div>
</body>


</html>
