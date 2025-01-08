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

        .checkbox-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
        }

        .checkbox-item input[type="checkbox"] {
            margin-right: 5px;
            margin-left: 5px;
        }

        .checkbox-item label {
            flex: 1;
        }

    </style>
</head>

<body>
    <div class="regis_number">หน้า 1 จาก 2
    </div>
    <div class="regis_number">องค์การบริหารส่วนตำบลคลองบ้านโพธิ์
    </div>

    <div class="box_text" style="border: 2px solid black; position: relative;">
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
            <span class="dotted-line" style="width: 30%; text-align: center; line-height: 1;">{{$form->business_operator_name}}</span>
            ทะเบียนเลขที่
            <span class="dotted-line" style="width: 20%; text-align: center; line-height: 1;">{{$form->registration_number}}</span>
        </div>
    </div>
    <div class="box_text font-sarabun-bold" style="text-align: left; ">
        <span>***เฉพาะข้อ 1-ข้อ 4 กรุณาระบุข้อความภาษาอังกฤษ***</span>
    </div>
    <table style="width: 100%; border-collapse: collapse; text-align: left;">
        <!-- หัวข้อหลัก -->
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 1px;" colspan="2">
                    รายละเอียดเกี่ยวกับเว็บไซต์
                </th>
            </tr>
        </thead>
        <!-- เนื้อหาในตาราง -->
        <tbody>
            <tr>
                <!-- ข้อมูลในหัวข้อด้านซ้าย -->
                <td style="border: 1px solid black; padding: 1px; width: 40%;">1. ชื่อผู้ประกอบการ
                    (Owner Name)</td>
                <!-- ข้อมูลในหัวข้อด้านขวา -->
                <td style="border: 1px solid black; padding: 1px; width: 60%;">{{$form->owner_name}}</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; width: 40%;">2. ชื่อที่ใช้ในการประกอบพาณิชย์กิจ
                    (Company Name) </td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">{{$form->company_name}}</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; width: 40%;">3. ที่อยู่ตามใบทะเบียนพาณิชย์
                    (Address)</td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">{{$form->address}}</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; width: 40%;">4. ชื่อเว็บไซต์ (Website)</td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">{{$form->website}}</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; vertical-align: top; width: 40%; ">5.
                    โปรดเลือกหมวดหมู่ของเว็บไซต์
                    (Type Of Business)</td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">
                    <ul class="checkbox-list">
                        <li class="checkbox-item">
                            <input type="checkbox" id="item1" {{ in_array('option1', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item1">คอมพิวเตอร์ อุปกรณ์ไอที
                                และซอฟแวร์</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item2" {{ in_array('option2', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item2">จดโดเมน/ออกแบบเว็บไซต์</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item3" {{ in_array('option3', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item3">บันเทิง และนันทนาการ</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item4" {{ in_array('option4', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item4">เกมส์/ของเล่น/ของขวัญ/เบ็ดเตล็ด</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item5" {{ in_array('option5', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item5">เครื่องมือเครื่องใช้อุตสาหกรรม</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item6" {{ in_array('option6', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item6">การแพทย์และสุขภาพ</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item7" {{ in_array('option7', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item7">ท่องเที่ยว/จองตั๋ว/จองโรงแรม/เช่ารถ</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item8" {{ in_array('option8', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item8">ออกแบบตกแต่งอาคารและสถานที่</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item9" {{ in_array('option9', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item9">การศึกษา</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item10" {{ in_array('option10', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item10">การเงิน กฎหมาย บัญชี และให้คปรึกษาอื่นๆ </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item10" {{ in_array('option11', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item10">ยานยนต์และอะไหล่</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item11" {{ in_array('option12', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item11">เครื่องมือสื่อสาร/กล้อง
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item12" {{ in_array('option13', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item12">แฟชั่น/เครื่องแต่งกาย/เครื่องประดับ
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item13" {{ in_array('option14', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item13">อาหารและเครื่องดื่ม
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item14" {{ in_array('option15', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item14">ศิลปะและวัฒนธรรม
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item15" {{ in_array('option16', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item15">บริการให้เช่าอุปกรณ์ เครื่องมือ และเครื่องยนต์
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item16" {{ in_array('option17', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item16">เครื่องอุปโภค/บริโภคประจำวัน
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item17" {{ in_array('option18', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item17">ข่าว/สื่อ/โฆษณา
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item18" {{ in_array('option19', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item18">เฟอร์นิเจอร์และอุปกรณ์ตกแต่ง
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item19" {{ in_array('option20', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item19">อุปกรณ์กีฬา/สันทนาการ
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item20" {{ in_array('option21', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item20">วัสดุก่อสร้าง/เครื่องมือ/อุปกรณ์ก่อสร้าง
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item21" {{ in_array('option22', $selectedWebsites) ? 'checked' : '' }}>
                            <label for="item21">ธุรกิจอื่น
                            </label>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; vertical-align: top; width: 40%;">6.
                    ชนิดแห่งพาณิชย์กิจ
                    (ระบุข้อความเพิ่มเติมจากข้อ 5 ว่า
                    เว็บไซต์ของท่านดำเนินธุรกิจซื้อขาย
                    สินค้าหรือบริการใด)
                </td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">
                    <ul class="checkbox-list">
                        <li class="checkbox-item">
                            <input type="checkbox" id="item1" {{ in_array('option1', $typesOfBusiness) ? 'checked' : '' }}>
                            <label for="item1">ขายปลีกสินค้า</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item2" {{ in_array('option2', $typesOfBusiness) ? 'checked' : '' }}>
                            <label for="item2">ขายส่งสินค้า</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item3" {{ in_array('option3', $typesOfBusiness) ? 'checked' : '' }}>
                            <label for="item3">บริการ</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item4" {{ in_array('option4', $typesOfBusiness) ? 'checked' : '' }}>
                            <label for="item4">บริการอินเทอร์เน็ต (Internet Service Provider : ISP)
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item5" {{ in_array('option5', $typesOfBusiness) ? 'checked' : '' }}>
                            <label for="item5">ให้เช่าพื้นที่ของเครื่องคอมพิวเตอร์แม่ข่าย (Web Hosting)</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item6" {{ in_array('option6', $typesOfBusiness) ? 'checked' : '' }}>
                            <label for="item6">บริการตลาดกลางในการซื้อขายสินค้าหรือบริการ
                                (E-Marketplace)
                            </label>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; vertical-align: top; width: 40%;">7.
                    ระบบสั่งจองสั่งซื้อสินค้าที่ใช้
                </td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">
                    <ul class="checkbox-list">
                        <li class="checkbox-item">
                            <input type="checkbox" id="item1" {{ in_array('option1', old('order_products_used', $selectedProducts)) ? 'checked' : '' }}>
                            <label for="item1">ระบบตะกร้า</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item2" {{ in_array('option2', old('order_products_used', $selectedProducts)) ? 'checked' : '' }}>
                            <label for="item2">ระบบกรอกฟอร์ม</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item3" {{ in_array('option3', old('order_products_used', $selectedProducts)) ? 'checked' : '' }}>
                            <label for="item3">e-Mail</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item4" {{ in_array('option4', old('order_products_used', $selectedProducts)) ? 'checked' : '' }}>
                            <label for="item4">โทรศัพท์
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item5" {{ in_array('option5', old('order_products_used', $selectedProducts)) ? 'checked' : '' }}>
                            <label for="item5">โทรสาร</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item6" {{ in_array('option6', old('order_products_used', $selectedProducts)) ? 'checked' : '' }}>
                            <label for="item6">อื่น ๆ ({{ $form->order_products_used_detail ?: 'โปรดระบุ สินค้าทุกอย่างที่คุณต้องการ' }})
                            </label>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; vertical-align: top; width: 40%;">8. วิธีการชระเงิน
                </td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">
                    <ul class="checkbox-list">
                        <li class="checkbox-item">
                            <input type="checkbox" id="item1" {{ in_array('option1', old('payment_method', $selectedPaymentMethods)) ? 'checked' : '' }}>
                            <label for="item1">ชำระเงินแบบออฟไลน์(โอนเงินผ่านธนาคาร ชำระเงินทางไปรษณีย์
                                ชำระเงินกับพนักงาน เป็นต้น)
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item2" {{ in_array('option2', old('payment_method', $selectedPaymentMethods)) ? 'checked' : '' }}>
                            <label for="item2">ชำระเงินออนไลน์ ผ่านบัตรเครดิต
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item3" {{ in_array('option3', old('payment_method', $selectedPaymentMethods)) ? 'checked' : '' }}>
                            <label for="item3">ชำระเงินออนไลน์ ผ่านระบบ e-Banking</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item4" {{ in_array('option4', old('payment_method', $selectedPaymentMethods)) ? 'checked' : '' }}>
                            <label for="item4">ชำระเงินออนไลน์ ผ่านตัวกลางชำระเงิน เช่น PayPal, PaySbuy เป็นต้น
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item5" {{ in_array('option5', old('payment_method', $selectedPaymentMethods)) ? 'checked' : '' }}>
                            <label for="item5">อื่นๆ ({{ $form->payment_method_detail ?: 'โปรดระบุ จ่ายเงินสดกับเจ้าของร้าน' }})</label>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; vertical-align: top; width: 40%;">9. วิธีการส่งสินค้า
                </td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">
                    <ul class="checkbox-list">
                        <li class="checkbox-item">
                            <input type="checkbox" id="item1" {{ in_array('option1', old('shipping_method', $selectedShippingMethods)) ? 'checked' : '' }}>
                            <label for="item1">บริษัทขนส่ง
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item2" {{ in_array('option2', old('shipping_method', $selectedShippingMethods)) ? 'checked' : '' }}>
                            <label for="item2">พนักงานส่งสินค้า
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item3" {{ in_array('option3', old('shipping_method', $selectedShippingMethods)) ? 'checked' : '' }}>
                            <label for="item3">ไปรษณีย์</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item4" {{ in_array('option4', old('shipping_method', $selectedShippingMethods)) ? 'checked' : '' }}>
                            <label for="item4">e-Mail
                            </label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item5" {{ in_array('option5', old('shipping_method', $selectedShippingMethods)) ? 'checked' : '' }}>
                            <label for="item5">Download</label>
                        </li>
                        <li class="checkbox-item">
                            <input type="checkbox" id="item5" {{ in_array('option6', old('shipping_method', $selectedShippingMethods)) ? 'checked' : '' }}>
                            <label for="item5">อื่นๆ ({{ $form->shipping_method_detail ?: 'โปรดระบุ ที่ร้านมีบริการส่งเอง' }})
                            </label>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; vertical-align: top; width: 40%;">10. จำนวนเงินทุน
                    (ที่ใช่ในการทพาณิชย์อิเล็กทรอนิกส์)
                </td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">
                    {{ $form->capital_amount}}
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; vertical-align: top; width: 40%;">11. หมายเลขโทรศัพท์
                    (Telephone)
                </td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">
                    {{ $form->telephone_number}}
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; vertical-align: top; width: 40%;">12. หมายเลขโทรสาร
                    (Fax)
                </td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">
                    {{ $form->fax_number}}
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; vertical-align: top; width: 40%;">13. e-Mail
                    (ที่ใช้ในการขอรับ Source Code)

                </td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">
                    {{ $form->e_mail}}
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; vertical-align: top; width: 40%;">14. ชื่อผู้จัดการ
                </td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">
                    {{ $form->manager_name}}
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 1px; vertical-align: top; width: 40%;">15.
                    สำนักงานที่จดทะเบียน
                </td>
                <td style="border: 1px solid black; padding: 1px; width: 60%;">
                    {{ $form->registered_office}}
                </td>
            </tr>
        </tbody>
    </table>
    <div class="footer font-sarabun-bold">
        <p>องค์การบริหารส่วนตำบลคลองบ้านโพธิ์ https://public.es.demo.gmskysmartcity.com/</p>
    </div>

</body>


</html>
