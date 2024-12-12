@extends('home.layouts.layout-home')

@section('content')
    <div class="d-flex justify-content-center align-content-center column-gap-5">
        <div class="xxl-w-50 d-flex flex-column font-sarabun text-white px-5 pt-4">
            <div class="fs-3 d-flex justify-content-end" style="margin-right: 4rem">One-Stop Service</div>
            <div class="glass-box">
                <img src="{{ asset('images/layouts-home/lightstar.png') }}" alt="lightstar">
                <div class="fs-3 text-white px-2">
                    <span class="highlighted-text">E-service</span> ยินดีต้อนรับสู่
                    <div class="compact-text">
                        บริการยื่นคำร้องออนไลน์ครบทุกงานบริการประชาชน<br>
                        <p class="text-glow-underline">สะดวกรวดเร็วตลอด 24 ชม.</p>
                    </div>
                </div>
            </div>
            <div class="glass-box-under fs-4 my-5">
                <img src="{{ asset('images/layouts-home/arrow-down.png') }}" alt="arrow-down" class="arrow-down">
                <div class="bg-top">
                    บริการยื่นคำร้องออนไลน์รูปแบบใหม่
                </div>
                <div class="bg-under fs-3 font-sarabun-bold d-flex justify-content-center align-content-center">
                    <img src="{{ asset('images/layouts-home/icon-btn.png') }}" alt="icon-btn" class="icon-btn pt-2 pe-2">
                    ยื่นคำร้องออนไลน์
                </div>
            </div>
            <div class="d-flex justify-content-around align-content-center">
                <div>
                    <p class="hight-light fs-2 font-sarabun-bold mb-0">คู่มือแนะนำการใช้งาน</p>
                    <div class="glass-box-veryunder w-100">
                        <img src="{{ asset('images/layouts-home/arrow-down.png') }}" alt="arrow-down" class="arrow-down">
                        <div
                            class="bg-btn-veryunder fs-3 font-sarabun-bold d-flex align-content-center justify-content-center pt-1 px-3">
                            <img src="{{ asset('images/layouts-home/icon-btnveryunder.png') }}" alt="icon-btn"
                                class="icon-btn pt-2 pe-2">
                            <div class="w-100">
                                ดาวน์โหลด
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="hight-light fs-2 font-sarabun-bold mb-0">VDO แนะนำการใช้งาน</p>
                    <div class="glass-box-veryunder">
                        <img src="{{ asset('images/layouts-home/arrow-down.png') }}" alt="arrow-down" class="arrow-down">
                        <div
                            class="bg-btn-veryunder fs-3 font-sarabun-bold d-flex align-content-center justify-content-center pt-1 px-3">
                            <img src="{{ asset('images/layouts-home/icon-btnveryunder.png') }}" alt="icon-btn"
                                class="icon-btn pt-2 pe-2">
                            <div class="w-100">
                                คลิก
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-50 d-flex justify-content-center align-content-center p-5 d-none d-xxl-block">
            <img src="{{ asset('images/layouts-home/24-hours.png') }}" alt="Right Image" class="img-shadow"
                style="width: auto; height: 55vh;">
        </div>
    </div>
@endsection
