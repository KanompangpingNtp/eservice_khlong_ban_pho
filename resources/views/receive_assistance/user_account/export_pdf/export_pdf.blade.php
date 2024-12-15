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
    <div class="regis_number">ทะเบียนเลขที่ .........................../ 2568</div>
    <div style="text-align: center; font-size: 25px;">แบบคำขอรับการสงเคราะห์</div>
    <div class="box_text" style="text-align: right;"><span>เขียนที่</span>
        <span class="dotted-line" style="width: 25%; text-align: center;"> data
        </span>
        <div>
            <span>วันที่</span><span class="dotted-line" style="width: 5%; text-align: center;"> data
            </span><span>เดือน</span><span class="dotted-line" style="width: 15%; text-align: center;"> data
            </span><span>พ.ศ.</span><span class="dotted-line" style="width: 10%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left;">
            <span>เรียน</span><span class="dotted-line" style="width: 50%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 4rem;">
            <span>ด้วยข้าพเจ้า (นางสาว) ชื่อ</span><span class="dotted-line" style="width: 34%; text-align: center;">
                data
            </span>
            <span>นามสกุล</span><span class="dotted-line" style="width: 34%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text">
            <span>เกิดวันที่</span><span class="dotted-line" style="width: 10%; text-align: center;"> data
            </span>
            <span>เดือน</span><span class="dotted-line" style="width: 15%; text-align: center;"> data
            </span><span>พ.ศ.</span><span class="dotted-line" style="width: 10%; text-align: center;"> data
            </span><span>อายุ</span><span class="dotted-line" style="width: 10%; text-align: center;"> data
            </span><span>ปี</span> <span>สัญชาติ</span><span class="dotted-line"
                style="width: 15%; text-align: center;">
                data
            </span><span>มีชื่ออยู่ในสำเนา</span>
        </div>
        <div class="box_text">
            <span>ทะเบียนบ้านเลขที่</span><span class="dotted-line" style="width: 10%; text-align: center;"> data
            </span>
            <span>หมู่ที่</span><span class="dotted-line" style="width: 10%; text-align: center;"> data
            </span>
            <span>ชุมชน</span><span class="dotted-line" style="width: 23%; text-align: center;"> data
            </span>
            <span>ตรอก/ซอย</span><span class="dotted-line" style="width: 22%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text">
            <span>ถนน</span><span class="dotted-line" style="width: 17%; text-align: center;"> data
            </span>
            <span>ตำบล</span><span class="dotted-line" style="width: 17%; text-align: center;"> data
            </span>
            <span>อำเภอ</span><span class="dotted-line" style="width: 22%; text-align: center;"> data
            </span>
            <span>จังหวัด</span><span class="dotted-line" style="width: 21%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left; margin-left:7px;">
            <span>รหัสไปรษณีย์</span><span class="dotted-line" style="width: 20%; text-align: center;"> data
            </span>
            <span>โทรศัพท์</span><span class="dotted-line" style="width: 20%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left; margin-left:7px;">
            <span>หมายเลขบัตรประจำตัวคนพิการ/ประชาชน ที่ยื่นคำขอ</span><span class="dotted-line"
                style="width: 50%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left; margin-left:7px;">
            <span>ขอแจ้งความประสงค์ขอรับเงินสงเคราะห์เพื่อการยังชีพผู้ป่วยเอดส์ โดยขอให้รายละเอียดเพิ่มเติม
                ดังนี้</span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 7rem;">
            <span>1. ที่พักอาศัย</span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 5rem;">
            <span><input type="checkbox"> เป็นของตนเอง และมีลักษณะ</span>
            <span><input type="checkbox"> ชำรุดทรุดโทรม</span>
            <span><input type="checkbox"> ชำรุดทรุดโทรมบางส่วน</span>
            <span><input type="checkbox"> มั่นคงถาวร</span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 5rem;">
            <span><input type="checkbox"> เป็นของ</span>
            <span class="dotted-line" style="width: 37%; text-align: center;"> data
            </span><span>เกี่ยวข้องเป็น</span><span class="dotted-line" style="width: 37%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 7rem;">
            <span>2. ที่พักอาศัยอยู่ห่างจากบ้านหลังที่ใกล้ที่สุดเป็นระทาง</span> </span><span>เกี่ยวข้องเป็น</span><span
                class="dotted-line" style="width: 23%; text-align: center;"> data
            </span><span>สามารถเดินทางได้</span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 5rem;">
            <span><input type="checkbox"> สะดวก</span>
            <span><input type="checkbox"> ลำบาก</span>
            <span> เนื่องจาก</span>
            <span class="dotted-line" style="width: 67%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 7rem;">
            <span>อยู่ห่างจากชุมชน/หมู่บ้านเป็นระยะทาง</span><span class="dotted-line"
                style="width: 48%; text-align: center;"> data
            </span><span>สามารถเดินทางได้</span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 5rem;">
            <span><input type="checkbox"> สะดวก</span>
            <span><input type="checkbox"> ลำบาก</span>
            <span> เนื่องจาก</span>
            <span class="dotted-line" style="width: 67%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 7rem;">
            <span>อยู่ห่างจากหน่วยบริการของรัฐที่ใกล้ที่สุดเป็นระยะทาง</span><span class="dotted-line"
                style="width: 35%; text-align: center;"> data
            </span><span>สามารถเดินทางได้</span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 5rem;">
            <span><input type="checkbox"> สะดวก</span>
            <span><input type="checkbox"> ลำบาก</span>
            <span> เนื่องจาก</span>
            <span class="dotted-line" style="width: 67%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 7rem;">
            <span>3. การพักอาศัย</span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 5rem;">
            <span><input type="checkbox"> อยู่เพียงลำพัง</span>
            <span> เนื่องจาก</span>
            <span class="dotted-line" style="width: 31%; text-align: center;"> data
            </span>
            <span> มาประมาณ</span>
            <span class="dotted-line" style="width: 31%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 5rem;">
            <span><input type="checkbox"> พักอาศัยกับ</span>
            <span class="dotted-line" style="width: 18%; text-align: center;"> data
            </span>
            <span> รวม</span>
            <span class="dotted-line" style="width: 10%; text-align: center;"> data
            </span>
            <span> คน</span>
            <span> เป็นผู้สามารถประกอบอาชีพได้จำนวน</span>
            <span class="dotted-line" style="width: 10%; text-align: center;"> data
            </span>
            <span>คน</span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 7rem;">
            <span> มีรายได้รวม</span>
            <span class="dotted-line" style="width: 15%; text-align: center;"> data
            </span>
            <span> บาท/เดือน</span>
            <span> ผู้ที่ไม่สามารถประกอบอาชีพได้เนื่องจาก</span>
            <span class="dotted-line" style="width: 24%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 7rem;">
            <span>4. รายได้ – รายจ่าย</span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 5rem;">
            <span> มีรายได้รวม</span>
            <span class="dotted-line" style="width: 18%; text-align: center;"> data
            </span>
            <span> บาท/เดือน</span>
            <span> แหล่งที่มาของรายได้</span>
            <span class="dotted-line" style="width: 41%; text-align: center;"> data
            </span>
        </div>
        <div class="box_text" style="text-align: left; margin-left: 5rem;">
            <span> นำไปใช้จ่ายเป็นค่า</span>
            <span class="dotted-line" style="width: 83%; text-align: center;"> data
            </span>
        </div>
    </div>
    {{-- new page --}}
    <div style="page-break-before: always;"></div>

    <div style="text-align: center">
        - 2 -
    </div>
    <div class="box_text" style="text-align: left; margin-left:7px; margin-top:2rem;">
        <span>บุคคลที่สามารถติดต่อได้</span><span class="dotted-line" style="width: 30%; text-align: center;"> data
        </span><span>สถานที่ติดต่อเลขที่</span><span class="dotted-line" style="width: 35%; text-align: center;"> data
        </span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:7px;">
        <span>ถนน</span><span class="dotted-line" style="width: 18%; text-align: center;"> data
        </span><span>ตรอก/ซอย</span><span class="dotted-line" style="width: 18%; text-align: center;"> data
        </span><span>หมู่ที่</span><span class="dotted-line" style="width: 18%; text-align: center;"> data
        </span><span>ตำบล</span><span class="dotted-line" style="width: 24%; text-align: center;"> data
        </span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:7px;">
        <span>อำเภอ</span><span class="dotted-line" style="width: 24%; text-align: center;"> data
        </span><span>จังหวัด</span><span class="dotted-line" style="width: 24%; text-align: center;"> data
        </span><span>รหัสไปรษณีย์</span><span class="dotted-line" style="width: 30%; text-align: center;"> data
        </span>
    </div>
    <div class="box_text" style="text-align: left; margin-left:7px;">
        <span>โทรศัพท์</span><span class="dotted-line" style="width: 24%; text-align: center;"> data
        </span><span>โทรสาร</span><span class="dotted-line" style="width: 24%; text-align: center;"> data
        </span><span>เกี่ยวข้องเป็น</span><span class="dotted-line" style="width: 28%; text-align: center;"> data
        </span>
    </div>
    <div class="box_text" style="text-align: center; margin-top: 4rem; margin-bottom: 4rem;">
        <span>ข้าพเจ้าขอรับรองว่าถ้อยคำที่ให้ข้างต้นเป็นความจริงทุกประการ</span>
    </div>
    <div class="box_text" style="text-align: right; margin-top:6rem;">
        <span class="dotted-line" style="width: 35%; text-align: center;"> data </span>
        <span>ผู้ให้ถอยคำ</span>
        <div style="margin-right: 60px;">
            <span>(</span>
            <span class="dotted-line" style="width: 35%; text-align: center;"> data </span>
            <span>)</span>
        </div>
    </div>
</body>


</html>
