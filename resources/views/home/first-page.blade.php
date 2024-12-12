@extends('home.layouts.layout-home')

@section('content')
    <div class="d-flex justify-content-center align-content-center">
        <div class="w-50 d-flex flex-column font-sarabun text-white">
          <div class="fs-3 d-flex justify-content-end">One-Stop Service</div>
          <div class="glass-box">
            <div class="fs-3 text-white px-2">
              <span class="highlighted-text">E-service</span> ยินดีต้อนรับสู่<br>
              บริการยื่นคำร้องออนไลน์ครบทุกงานบริการประชาชน
              <p class="line-compact">สะดวกรวดเร็วตลอด 24 ชม.</p>
            </div>
          </div>



          <div class="p-2">Flex item 3</div>
        </div>
        <div class="w-50 d-flex justify-content-center align-content-center p-5">
            <img src="{{ asset('images/layouts-home/24-hours.png') }}" alt="Right Image"
                style="width: auto; height: 55vh;">
        </div>
    </div>
@endsection
