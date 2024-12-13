<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            src: url('/fonts/THSarabunNew.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'THSarabunNew';
            src: url('/fonts/THSarabunNew-Bold.ttf') format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .font-sarabun {
            font-family: 'THSarabunNew', sans-serif;
            font-size: 18px;
        }

        .font-sarabun-bold {
            font-family: 'THSarabunNew', sans-serif;
            font-weight: bold;
            font-size: 18px;
        }

        /* Body styles */
        body {
            background: linear-gradient(to bottom, rgb(247, 251, 255), rgb(222, 222, 222));
            font-family: 'THSarabunNew', sans-serif;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            background-color: #fefefe;
            color: #004ddc;
            min-height: 100vh;
            padding-top: 0.5rem;
            position: fixed;
            top: 0;
            left: 0;
            width: 230px;
            z-index: 1200;
            transition: transform 0.3s ease;
            box-shadow: 6px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            color: #004ddc;
            text-decoration: none;
            padding: 15px 3rem;
            border-radius: 8px;
            font-size: 28px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .sidebar a i {
            margin-right: 10px;
            font-size: 15px;
        }

        .sidebar a:hover {
            background-color: #004ddc;
            color: white;
            transform: translateX(5px);
        }

        /* Navbar */
        .navbar {
            background-color: #fefefe;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 230px;
            width: calc(100% - 230px);
            height: 60px;
            font-size: 28px;
            z-index: 1100;
            transition: left 0.3s ease, width 0.3s ease;
        }

        .navbar button {
            font-size: 20px;
        }

        .navbar.collapsed {
            left: 0;
            width: 100%;
        }

        .navbar .nav-link {
            color: white;
            font-size: 1.2rem;
        }

        .navbar .nav-link:hover {
            color: #b3e5fc;
        }

        /* Main Content */
        .main-content {
            padding: 3rem;
            background-color: rgba(255, 255, 255, 0.933);
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            min-height: 90vh;
            width: auto;
            margin-top: 75px;
            margin-bottom: 30px;
            margin-left: 247px;
            margin-right: 15px;
            font-size: 23px;
            color: #2f2f2f;
            transition: margin-left 0.3s ease;
        }

        .main-content h3 {
            font-size: 36px;
            font-weight: bold;
            color: #004ddc;
        }

        .main-content input {
            font-size: 23px;
            color: #2f2f2f;
        }

        .main-content select {
            font-size: 23px;
            color: #2f2f2f;
        }

        .main-content button {
            font-size: 23px;
        }

        .custom-border-bottom {
            border-bottom: 3px solid #007bff;
            /* เปลี่ยนความหนาและสีของเส้น */
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .navbar {
                left: 0;
                width: 100%;
            }

            .main-content {
                margin-left: 15px;
            }
        }

    </style>
</head>

<body>

    @if ($message = Session::get('success'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: '{{ $message }}'
        , })

    </script>
    @endif

    <div class="container-fluid d-flex">
        <div id="sidebar" class="sidebar">

            <!-- Sidebar -->
            <div class="d-flex justify-content-center align-content-center custom-border-bottom mb-3 mx-3">
                <div class=" font-sarabun-bold d-none d-md-block" style="font-size: 40px">เมนู
                </div>
                <a id="toggle-sidebars" class="font-sarabun-bold d-md-none my-2" style="font-size: 40px">
                    ปิดเมนู
                </a>
            </div>
            @if (Auth::check())
            <!-- เมนูที่สามารถคลิกเพื่อเปิดตัวเลือกเพิ่มเติม -->
            <div class="nav-item">
                <a class="nav-link font-sarabun-bold" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#moreOptions1">
                    <i class="fas fa-chart-line"></i> คำร้องทั่วไป
                </a>
                <!-- ตัวเลือกที่จะแสดงเมื่อคลิก -->
                <div id="moreOptions1" class="collapse">
                    <div class="nav-item">
                        <a class="nav-link" href="#">Option 1</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="#">Option 2</a>
                    </div>
                </div>
                <a class="nav-link font-sarabun-bold" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#moreOptions2">
                    <i class="fas fa-cogs"></i> แบบคำขอส่งทะเบียน
                    รับเบี้ยความพิการ
                </a>
                <!-- ตัวเลือกที่จะแสดงเมื่อคลิก -->
                <div id="moreOptions2" class="collapse">
                    <div class="nav-item">
                        <a class="nav-link" href="#">Option 1</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="#">Option 2</a>
                    </div>
                </div>
                <a class="nav-link font-sarabun-bold" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#moreOptions3">
                    <i class="fas fa-cogs"></i> แบบฟอร์มใบสมัครเรียนศูนย์พัฒนาเด็กเล็ก
                </a>
                <!-- ตัวเลือกที่จะแสดงเมื่อคลิก -->
                <div id="moreOptions3" class="collapse">
                    <div class="nav-item">
                        <a class="nav-link" href="{{route('ChildApplyFormPage')}}">ฟอร์ม ใบสมัคร</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="{{route('TableChildApplyUsersPages')}}">แสดงประวัติการส่งฟอร์ม</a>
                    </div>
                </div>
            </div>

            @else
                <a href="{{ url('/') }}" class="nav-link font-sarabun-bold"><i class="fa-solid fa-house"></i>กลับหน้าหลัก</a>
            @endif
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="flex-grow-1">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="d-flex column-gap-3 w-100">
                <button id="toggle-sidebar" class="btn btn-outline-primary ms-3 d-md-none w-25">
                    เปิดเมนู
                </button>

                @if (Auth::check())
                <div class="dropdown ms-auto">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> {{ Auth::user()->name }} <!-- แสดงชื่อผู้ใช้งาน -->
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <!-- แสดงเมื่อผู้ใช้ล็อกอิน -->
                        <li>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button class="dropdown-item fs-3" type="submit">ออกจากระบบ</button>
                            </form>
                        </li>
                    </ul>
                </div>
                @else
                <div class="d-flex justify-content-end column-gap-3 w-100 me-3">
                    <a class="btn btn-outline-primary" href="{{ route('LoginPage') }}"><i class="fa-solid fa-lock-open"></i> เข้าสู่ระบบ</a>
                    <a class="btn btn-outline-primary" href="{{ route('RegisterPage') }}"><i class="fa-solid fa-user"></i> สมัครใช้งาน</a>
                </div>
                @endif


            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="main-content">
            @yield('user_content')
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggleSidebar = document.getElementById('toggle-sidebar');
        const toggleSidebars = document.getElementById('toggle-sidebars');
        const sidebar = document.getElementById('sidebar');
        const navbar = document.querySelector('.navbar');
        const content = document.querySelector('.main-content');

        toggleSidebar.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            navbar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');
        });
        toggleSidebars.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            navbar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');
        });

    </script>
</body>

</html>
