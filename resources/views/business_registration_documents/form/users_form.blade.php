@extends('dashboard.layout.users.layout_users')
@section('title', 'ตารางแสดงข้อมูลฟอร์มที่ส่งเข้ามา')
@section('คำร้องขอจดทะเบียนพาณิชย์อิเล็กทรอนิกส์')
    <h3 class="text-center"> คำร้องขอจดทะเบียนพาณิชย์อิเล็กทรอนิกส์ </h3>

    <form action="{{ route('BusinessDocFormCreate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="business_operator_name"> ชื่อผู้ประกอบพาณิชย์กิจ</label>
            <input type="text" class="form-control" id="business_operator_name" name="business_operator_name" required>
        </div>

        <div class="form-group">
            <label for="registration_number">ทะเบียนเลขที่</label>
            <input type="text" class="form-control" id="registration_number" name="registration_number" required>
        </div>

        <div class="form-group">
            <label for="owner_name">ชื่อผู้ประกอบการ</label>
            <input type="text" class="form-control" id="owner_name" name="owner_name" required>
        </div>

        <div class="form-group">
            <label for="company_name">ชื่อที่ใช้ในการประกอบพาณิชย์กิจ</label>
            <input type="text" class="form-control" id="company_name" name="company_name" required>
        </div>

        <div class="form-group">
            <label for="address">ที่อยู่ตามใบทะเบียนพาณิชย์</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>

        <div class="form-group">
            <label for="website"> ชื่อเว็บไซต์</label>
            <input type="text" class="form-control" id="website" name="website">
        </div>

        <br>

        <div class="form-group">
            <label for="group_of_websites">โปรดเลือกหมวดหมู่ของเว็บไซต์</label><br>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option1" name="group_of_websites[]" value="option1">
                <label class="form-check-label" for="option1">คอมพิวเตอร์ อุปกรณ์ไอที และซอฟแวร์</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option2" name="group_of_websites[]" value="option2">
                <label class="form-check-label" for="option2">จดโดเมน/ออกแบบเว็บไซต</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option3" name="group_of_websites[]" value="option3">
                <label class="form-check-label" for="option3">บันเทิง และนันทนาการ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option4" name="group_of_websites[]" value="option4">
                <label class="form-check-label" for="option4">เกมส์/ของเล่น/ของขวัญ/เบ็ดเตล็ด</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option5" name="group_of_websites[]" value="option5">
                <label class="form-check-label" for="option5">เครื่องมือเครื่องใช้อุตสาหกรรม</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option6" name="group_of_websites[]" value="option6">
                <label class="form-check-label" for="option6">การแพทย์และสุขภาพ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option7" name="group_of_websites[]" value="option7">
                <label class="form-check-label" for="option7">ท่องเที่ยว/จองตั๋ว/จองโรงแรม/เช่ารถ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option8" name="group_of_websites[]"
                    value="option8">
                <label class="form-check-label" for="option8">ออกแบบตกแต่งอาคารและสถานที่</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option9" name="group_of_websites[]"
                    value="option9">
                <label class="form-check-label" for="option9">การศึกษา</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option10" name="group_of_websites[]"
                    value="option10">
                <label class="form-check-label" for="option10">การเงิน กฎหมาย บัญชี และให้คำาปรึกษาอื่นๆ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option11" name="group_of_websites[]"
                    value="option11">
                <label class="form-check-label" for="option11">ยานยนต์และอะไหล่</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option12" name="group_of_websites[]"
                    value="option12">
                <label class="form-check-label" for="option12">เครื่องมือสื่อสาร/กล้อง</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option13" name="group_of_websites[]"
                    value="option13">
                <label class="form-check-label" for="option13">แฟชั่น/เครื่องแต่งกาย/เครื่องประดับ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option14" name="group_of_websites[]"
                    value="option14">
                <label class="form-check-label" for="option14">อาหารและเครื่องดื่ม</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option15" name="group_of_websites[]"
                    value="option15">
                <label class="form-check-label" for="option15">ศิลปะและวัฒนธรรม</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option16" name="group_of_websites[]"
                    value="option16">
                <label class="form-check-label" for="option16">บริการให้เช่าอุปกรณ์ เครื่องมือ และเครื่องยนต</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option17" name="group_of_websites[]"
                    value="option17">
                <label class="form-check-label" for="option17">เครื่องอุปโภค/บริโภคประจำาวัน</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option18" name="group_of_websites[]"
                    value="option18">
                <label class="form-check-label" for="option18">ข่าว/สื่อ/โฆษณา</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option19" name="group_of_websites[]"
                    value="option19">
                <label class="form-check-label" for="option19">เฟอร์นิเจอร์และอุปกรณ์ตกแต่ง</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option20" name="group_of_websites[]"
                    value="option20">
                <label class="form-check-label" for="option20">อุปกรณ์กีฬา/สันทนาการ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option21" name="group_of_websites[]"
                    value="option21">
                <label class="form-check-label" for="option21">วัสดุก่อสร้าง/เครื่องมือ/อุปกรณ์ก่อสร้าง</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option22" name="group_of_websites[]"
                    value="option22">
                <label class="form-check-label" for="option22">ธุรกิจอื่น</label>
            </div>
        </div>

        <br>

        <div class="form-group">
            <label for="types_of_business">ชนิดแห่งพาณิชย์กิจ
                (ระบุข้อความเพิ่มเติมจากข้อ 5 ว่า
                เว็บไซต์ของท่านดำาเนินธุรกิจซื้อขาย
                สินค้าหรือบริการใด)</label>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option1" name="types_of_business[]"
                    value="option1">
                <label class="form-check-label" for="option1">ขายปลีกสินค้า สินค้าทุกอย่างที่คุณต้องการ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option2" name="types_of_business[]"
                    value="option2">
                <label class="form-check-label" for="option2">บริการ สินค้าทุกอย่างที่คุณต้องการ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option3" name="types_of_business[]"
                    value="option3">
                <label class="form-check-label" for="option3">บริการ สินค้าทุกอย่างที่คุณต้องการ</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option4" name="types_of_business[]"
                    value="option4">
                <label class="form-check-label" for="option4">บริการอินเทอร์เน็ต (Internet Service Provider :
                    ISP)</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option5" name="types_of_business[]"
                    value="option5">
                <label class="form-check-label" for="option5">ให้เช่าพื้นที่ของเครื่องคอมพิวเตอร์แม่ข่าย (Web
                    Hosting)</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option6" name="types_of_business[]"
                    value="option6">
                <label class="form-check-label" for="option6">บริการตลาดกลางในการซื้อขายสินค้าหรือบริการ
                    (E-Marketplace)</label>
            </div>
        </div>

        <br>

        <div class="form-group">
            <label>ระบบสั่งจองสั่งซื้อสินค้าที่ใช้</label>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option1" name="order_products_used[]"
                    value="option1">
                <label class="form-check-label" for="option1">ระบบตะกร้า</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option2" name="order_products_used[]"
                    value="option2">
                <label class="form-check-label" for="option2">ระบบกรอกฟอร์ม</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option3" name="order_products_used[]"
                    value="option3">
                <label class="form-check-label" for="option3">e-Mail</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option4" name="order_products_used[]"
                    value="option4">
                <label class="form-check-label" for="option4">โทรศัพท์</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option5" name="order_products_used[]"
                    value="option5">
                <label class="form-check-label" for="option5">โทรสาร</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option6" name="order_products_used[]"
                    value="option6">
                <label class="form-check-label" for="option6">อื่น ๆ</label>
                <input type="text" class="form-control" id="order_products_used_detail"
                    name="order_products_used_detail" placeholder="เมื่อเลือก อื่นๆ โปรดระบุ สินค้าทุกอย่างที่คุณต้องการ">
            </div>
        </div>

        <br>

        <div class="form-group">
            <label>วิธีการชำระเงิน</label>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option1" name="payment_method[]" value="option1">
                <label class="form-check-label" for="option1">ชำระเงินแบบออฟไลน</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option2" name="payment_method[]" value="option2">
                <label class="form-check-label" for="option2">ชำระเงินออนไลน์ ผ่านบัตรเครดิต</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option3" name="payment_method[]" value="option3">
                <label class="form-check-label" for="option3">ชำระเงินออนไลน์ ผ่านระบบ e-Banking</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option4" name="payment_method[]" value="option4">
                <label class="form-check-label" for="option4">ชำระเงินออนไลน์ ผ่านตัวกลางชำระเงิน เช่น PayPal, PaySbuy
                    เป็นต้น</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option5" name="payment_method[]" value="option5">
                <label class="form-check-label" for="option5">อื่นๆ</label>
                <input type="text" class="form-control" id="payment_method_detail" name="payment_method_detail"
                    placeholder="เมื่อเลือก อื่นๆ โปรดระบุ จ่ายเงินสดกับเจ้าของร้าน">
            </div>
        </div>

        <br>

        <div class="form-group">
            <label>วิธีการส่งสินค้า</label>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option1" name="shipping_method[]"
                    value="option1">
                <label class="form-check-label" for="option1">บริษัทขนส่ง</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option2" name="shipping_method[]"
                    value="option2">
                <label class="form-check-label" for="option2">ไปรษณีย์</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option3" name="shipping_method[]"
                    value="option3">
                <label class="form-check-label" for="option3">พนักงานส่งสินค้า</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option4" name="shipping_method[]"
                    value="option4">
                <label class="form-check-label" for="option4">Download</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option5" name="shipping_method[]"
                    value="option5">
                <label class="form-check-label" for="option5">e-Mail</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="option6" name="shipping_method[]"
                    value="option6">
                <label class="form-check-label" for="option6">อื่นๆ</label>
                <input type="text" class="form-control" id="shipping_method_detail" name="shipping_method_detail"
                    placeholder="เมื่อเลือก อื่นๆ โปรดระบุ ที่ร้านมีบริการส่งเอง">
            </div>
        </div>

        <br>

        <div class="form-group">
            <label for="capital_amount"> จำานวนเงินทุน (ที่ใช่ในการทำาพาณิชย์อิเล็กทรอนิกส์)</label>
            <input type="text" class="form-control" id="capital_amount" name="capital_amount">
        </div>

        <div class="form-group">
            <label for="telephone_number"> หมายเลขโทรศัพท์</label>
            <input type="text" class="form-control" id="telephone_number" name="telephone_number" required>
        </div>

        <div class="form-group">
            <label for="fax_number"> หมายเลขโทรสาร</label>
            <input type="text" class="form-control" id="fax_number" name="fax_number">
        </div>

        <div class="form-group">
            <label for="e_mail"> e-Mail (ที่ใช้ในการขอรับ Source Code)</label>
            <input type="text" class="form-control" id="e_mail" name="e_mail" required>
        </div>

        <div class="form-group">
            <label for="manager_name">ชื่อผู้จัดการ</label>
            <input type="text" class="form-control" id="manager_name" name="manager_name" required>
        </div>

        <div class="form-group">
            <label for="registered_office"> สำานักงานที่จดทะเบียน</label>
            <input type="text" class="form-control" id="registered_office" name="registered_office" required>
        </div>

        <br>

        <div>
            <h3 for="attachments" class="form-label">แนบไฟล์</h3>
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
