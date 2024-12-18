<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/layout-home.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container-fluid min-h-screen d-flex flex-column p-0"
        style="background-image: url('{{ asset('images/layouts-home/bg.png') }}');
         background-size: cover;
         background-repeat: no-repeat;
         background-position: center;">
        {{-- ////////////////////// start-header ////////////////////// --}}
        <header id="header" class="flex"
            style="background: linear-gradient(to bottom, rgb(1, 78, 172), rgba(0, 90, 200, 0.3));
     height: 16vh;">
            <div class="container d-flex align-items-center justify-content-around h-100 p-0 ">
                <!-- Logo และข้อความ -->
                <div class="d-flex align-items-center">
                    <!-- Logo -->
                    <img src="{{ asset('images/layouts-home/Logo.png') }}" alt="Logo"
                        style="width: auto; height: 13vh; padding: 10px" class="d-none d-lg-block">
                    <!-- ข้อความตรงกลาง -->
                    <div
                        class="d-flex flex-column align-items-start justify-content-center fs-1 text-white px-2 pt-4 font-sarabun">
                        องค์การบริหารส่วนตำบล คลองบ้านโพธิ์
                        <div class="fs-3 pt-1 font-sarabun">
                            (ตำบลคลองบ้านโพธิ์ อำเภอบ้านโพธิ์ จังหวัดฉะเชิงเทรา)
                        </div>
                    </div>
                </div>

                <!-- ปุ่มล็อคอินและสมัครสมาชิก -->
                <div
                    class="d-flex flex-column flex-lg-row align-items-center gap-2 gap-lg-3 pt-4 font-sarabun fs-5 fs-lg-3">
                    <button class="bg-btn-auth px-3 pt-1 px-lg-5 py-lg-2">เข้าสู่ระบบ</button>
                    <button class="bg-btn-auth px-3 pt-1 px-lg-5 py-lg-2">สมัครสมาชิก</button>
                </div>
            </div>

        </header>
        {{-- ////////////////////// end-header ////////////////////// --}}

        {{-- ////////////////////// start-content ////////////////////// --}}
        <div class="container my-2 p-0">
            @yield('content')
        </div>
        {{-- ////////////////////// end-content ////////////////////// --}}

        {{-- ////////////////////// start-footer ////////////////////// --}}
        <footer id="footer" class="flex py-3 mt-auto"
            style="background: linear-gradient(to top, rgb(1, 78, 172), rgba(0, 90, 200, 0.3));">
            <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-around h-100 p-0"
                style="height: auto;">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('images/layouts-home/address.png') }}" alt="address"
                        style="width: auto; height: 10vh; padding: 10px;">
                    <div class="h-100 d-flex flex-column align-items-start justify-content-center font-sarabun">
                        <div class="font-sarabun text-white fs-4 ps-1">
                            องค์การบริหารส่วนตำบล คลองบ้านโพธิ์ © บริษัท GM SKY สงวนสิทธิ์
                        </div>
                        <div class="font-sarabun text-white fs-5">
                            40/3 หมู่ที่3 ตำบลคลองบ้านโพธิ์ อำเภอบ้านโพธิ์ จังหวัดฉะเชิงเทรา 24140
                        </div>
                    </div>
                </div>

                <div class="h-100 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('images/layouts-home/call.png') }}" alt="call"
                        style="height: 10vh; width: auto; padding: 10px;">
                    <div class="d-flex align-items-center justify-content-center font-sarabun-bold text-white">
                        <span class="fs-4" style="letter-spacing: 2px;">0-3858-8246 | 08-3617-5869</span>
                    </div>
                </div>
            </div>
        </footer>

        {{-- ////////////////////// end-footer ////////////////////// --}}
    </div>

</body>

</html>
