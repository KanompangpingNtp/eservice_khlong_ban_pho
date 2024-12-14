@extends('home.layouts.layout-index')
@section('title', 'Index')

@section('content')
    <div class="d-flex justify-content-center align-content-center column-gap-3 mt-5">
        <div class="d-none d-xxl-flex flex-column font-sarabun text-white">
            <div class="d-flex flex-column justify-content-center align-content-center px-5 position-relative mb-4">
                <!-- รูปภาพ -->
                <img src="{{ asset('images/layout-index/lineR.png') }}" alt="Hero" style="width: 33vh; height: auto;">
                <!-- ข้อความที่อยู่บนรูปภาพ -->
                <div class="bg-btn fs-2 text-center position-absolute"
                    style="bottom: -19px; left: 50%; transform: translateX(-50%); width: calc(33vh + 30px);">
                    นายจักกรี โรจนพร
                </div>
            </div>
            <div class="d-flex flex-column justify-content-center align-content-center px-3">
                <div class="bg-btn2 px-4 py-2 fs-2 text-center w-100">
                    นายกองค์การบริหาร<br>
                    ส่วนตำบลคลองบ้านโพธิ์
                </div>
            </div>
        </div>

        <div class="w-100 d-flex flex-column flex-lg-row justify-content-center align-content-center font-sarabun pt-4">
            <div class="d-flex flex-column justify-content-center align-content-center w-100 w-lg-50 px-4">
                <div class="half-border-left">
                    <a href="{{ route('UsersFormPage') }}" class="buttom-cool-left fs-2 font-sarabun">
                        <span class="circle">
                            <img src="{{ asset('images/layout-index/petition.png') }}" alt="Icon" />
                        </span>
                        <span class="squre"></span>
                        คำร้องทั่วไป
                    </a>
                </div>
                <div class="half-border-right">
                    <a href="" class="buttom-cool-right fs-2 font-sarabun">
                        <span class="circle">
                            <img src="{{ asset('images/layout-index/procurement.png') }}" alt="Icon" />
                        </span>
                        <span class="squre"></span>
                        คำร้องทะเบียนพิชย์
                    </a>
                </div>
                <div class="half-border-left-i">
                    <a href="{{ route('UsersFormPage') }}" class="buttom-cool-left fs-4 font-sarabun text-start"
                        style="line-height: 1.2;">
                        <span class="circle">
                            <img src="{{ asset('images/layout-index/online-shopping.png') }}" alt="Icon" />
                        </span>
                        <span class="squre"></span>
                        คำร้องขอจดทะเบียนพาณิชย์<br class="d-block d-sm-none d-lg-block">
                        อิเล็กทรอนิกส์
                    </a>
                </div>
                <div class="half-border-right-i">
                    <a href="" class="buttom-cool-right fs-2 font-sarabun fs-4 text-end pe-3"
                        style="line-height: 1.2;">
                        <span class="circle">
                            <img src="{{ asset('images/layout-index/earth.png') }}" alt="Icon" />
                        </span>
                        <span class="squre"></span>
                        แบบคำขอรับใบอณุญาต <br class="d-block d-sm-none d-lg-block">
                        (กองสาธารณสุขและสิ่งแวดล้อม)
                    </a>
                </div>
                <div class="half-border-left-ii">
                    <a href="{{ route('UsersFormPage') }}" class="buttom-cool-left fs-4 font-sarabun text-center"
                        style="line-height: 1.2;">
                        <span class="circle">
                            <img src="{{ asset('images/layout-index/hook.png') }}" alt="Icon" />
                        </span>
                        <span class="squre"></span>
                        แบบคำขอรับรอง <br class="d-block d-sm-none d-lg-block">
                        สิ่งปลูกสร้างอาคาร
                    </a>
                </div>
            </div>

            <div class="d-flex flex-column justify-content-center align-content-center w-100 w-lg-50 px-4">
                <div class="half-border-left">
                    <a href="{{ route('UsersFormPage') }}" class="buttom-cool-left fs-4 font-sarabun text-start"
                        style="line-height: 1.2;">
                        <span class="circle">
                            <img src="{{ asset('images/layout-index/brick-wall.png') }}" alt="Icon" />
                        </span>
                        <span class="squre"></span>
                        แบบคำร้องขอหนังสือรับรอง <br class="d-block d-sm-none d-lg-block">
                        สิ่งปลูกสร้าง
                    </a>
                </div>
                <div class="half-border-right">
                    <a href="{{route('ChildApplyPage')}}" class="buttom-cool-right fs-4 font-sarabun text-end" style="line-height: 1.2;">
                        <span class="circle">
                            <img src="{{ asset('images/layout-index/cv.png') }}" alt="Icon" />
                        </span>
                        <span class="squre"></span>
                        แบบฟอร์มใบสมัครเรียนศูนย์<br class="d-block d-sm-none d-lg-block">
                        พัฒนาเด็กเล็ก
                    </a>
                </div>
                <div class="half-border-left-i">
                    <a href="{{ route('ElderlyAllowanceFormPage') }}" class="buttom-cool-left fs-3 font-sarabun text-center"
                        style="line-height: 1.2;">
                        <span class="circle">
                            <img src="{{ asset('images/layout-index/old-people.png') }}" alt="Icon" />
                        </span>
                        <span class="squre"></span>
                        แบบยืนยันสิทธิผู้สูงอายุ
                    </a>
                </div>
                <div class="half-border-right-i">
                    <a href="{{route('DisabilityFormPage')}}" class="buttom-cool-right font-sarabun fs-4 text-end" style="line-height: 1.2;">
                        <span class="circle">
                            <img src="{{ asset('images/layout-index/disabled.png') }}" alt="Icon" />
                        </span>
                        <span class="squre"></span>
                        แบบคำขอส่งทะเบียน<br class="d-block d-sm-none d-lg-block">
                        รับเบี้ยความพิการ
                    </a>
                </div>
                <div class="half-border-left-ii">
                    <a href="{{ route('ReceiveAssistanceFormPage') }}" class="buttom-cool-left fs-4 font-sarabun text-center"
                        style="line-height: 1.2;">
                        <span class="circle">
                            <img src="{{ asset('images/layout-index/money.png') }}" alt="Icon" />
                        </span>
                        <span class="squre"></span>
                        แบบคำขอรับเงินสงเคราะห์
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
