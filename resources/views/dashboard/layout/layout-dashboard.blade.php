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

        /* Body styles */
        body {
            background: linear-gradient(to bottom, #e3f2fd, #ffffff);
            /* ฟ้าสดใสกับขาวนุ่ม */
            font-family: 'THSarabunNew', sans-serif;
            min-height: 100vh;
            color: #333;
            /* ข้อความสีเข้มเพื่อความชัดเจน */
        }

        h2 {
            color: #1390d3;
        }

        /* Sidebar */
        .sidebar {
            background: linear-gradient(to bottom, #f2f9fd, #e3f2fd);
            color: #0092ed;
            /* ฟ้าสว่าง */
            min-height: 100vh;
            padding-top: 2rem;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            z-index: 1200;
            transition: transform 0.3s ease;
            box-shadow: 6px 0px 20px rgba(0, 0, 0, 0.1);
            /* เพิ่มเงาให้ลึกขึ้น */
        }

        .sidebar h3 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 2rem;
            color: #0c95df;
            /* ฟ้าสว่าง */
        }

        .sidebar a {
            color: #24b1fd;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 1.1rem;
            margin-bottom: 1rem;
            padding: 15px 25px;
            border-radius: 8px;
            font-size: 25px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: #7ecffb;
            color: white;
            transform: translateX(5px);
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(to right, #f2f9fd, #e3f2fd);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
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

        .navbar .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
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
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            font-size: 25px;
            min-height: 90vh;
            margin-top: 75px;
            margin-left: 255px;
            transition: margin-left 0.3s ease;
        }

        .main-content h3 {
            font-size: 36px;
            font-weight: bold;
            color: #b3e5fc;
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
                margin-left: 0;
            }
        }

        .sidebar {
            background-color: #fefefe;
            color: #004ddc;
            min-height: 100vh;
            /* ความสูงขั้นต่ำของ sidebar */
            max-height: 100vh;
            /* จำกัดความสูงสูงสุดเท่ากับหน้าจอ */
            padding-top: 0.5rem;
            padding-left: 5px;
            padding-right: 7px;
            position: fixed;
            /* ทำให้ sidebar ติดกับด้านซ้ายของหน้าจอ */
            top: 0;
            left: 0;
            width: 250px;
            z-index: 1200;
            transition: transform 0.3s ease;
            box-shadow: 6px 0px 20px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            /* เพิ่มแถบเลื่อนในแนวตั้งเมื่อเนื้อหาเกิน */
            overflow-x: hidden;
            /* ซ่อนแถบเลื่อนแนวนอน */
            scrollbar-width: thin;
            /* (สำหรับเบราว์เซอร์ที่รองรับ) กำหนดความกว้างของ scrollbar */
            scrollbar-color: #b3e5fc #fefefe;
            /* สีของ scrollbar */
        }

        #sidebar h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .nav-link {
            color: #fff;
            /* สีลิงก์ */
        }

        .nav-link:hover {
            color: #ffc107;
            /* สีลิงก์เมื่อ hover */
        }
    </style>
</head>

<body>
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{ $message }}',
            })
        </script>
    @endif

    <div class="container-fluid d-flex">
        <!-- Sidebar -->
        {{-- <div id="sidebar" class="sidebar">
            <h3>GM SKY</h3>
            <button id="toggle-sidebars" class="btn btn-outline-light me-3 d-md-none">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TablePages') }}">คำร้องทั่วไป</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableElderlyAllowancePages') }}">แบบยืนยันสิทธิผู้สูงอายุ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableDisabilityPages') }}">
                        แบบคำขอลงทะเบียนรับเงินเบี้ยความพิการ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableChildApplyAdminPages') }}">แบบฟอร์มใบสมัครเรียนศูนย์พัฒนาเด็กเล็ก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableReceiveAssistanceAdminPages') }}">แบบคำขอรับเงินสงเคราะห์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableTradeRegistryAdminPages') }}">คำร้องทะเบียนพาณิชย์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableCertificationAdminPages') }}">คำขอรับรองสิ่งปลูกสร้างอาคาร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableBuildingChangeAdminPages') }}">คำขออนุญาตก่อสร้างอาคารดัดแปลงอาคารหรือรื้อถอนอาคาร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableLicenseAdminPages') }}">แบบคำขอรับใบอนุญาต</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableBusinessDocAdminPages') }}">คำร้องขอจดทะเบียนพาณิชย์อิเล็กทรอนิกส์</a>
                </li>
            </ul>
        </div> --}}

        <div id="sidebar" class="sidebar">
            <h3>สำหรับแอดมิน</h3>
            <button id="toggle-sidebars" class="btn btn-outline-light me-3 d-md-none">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('AdminEntryNotification') }}">แจ้งเตือนฟอร์ม</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TablePages') }}">คำร้องทั่วไป</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableElderlyAllowancePages') }}">แบบยืนยันสิทธิผู้สูงอายุ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableDisabilityPages') }}">
                        แบบคำขอลงทะเบียนรับเงินเบี้ยความพิการ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('TableChildApplyAdminPages') }}">แบบฟอร์มใบสมัครเรียนศูนย์พัฒนาเด็กเล็ก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('TableReceiveAssistanceAdminPages') }}">แบบคำขอรับการสงเคราะห์ (ผู้ป่วยเอดส์)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableTradeRegistryAdminPages') }}">คำร้องทะเบียนพาณิชย์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('TableCertificationAdminPages') }}">คำขอรับรองสิ่งปลูกสร้างอาคาร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('TableBuildingChangeAdminPages') }}">คำขออนุญาตก่อสร้างอาคารดัดแปลงอาคารหรือรื้อถอนอาคาร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('TableLicenseAdminPages') }}">แบบคำขอรับใบอนุญาต</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('TableBusinessDocAdminPages') }}">คำร้องขอจดทะเบียนพาณิชย์อิเล็กทรอนิกส์</a>
                </li>
            </ul>
        </div>

        <!-- Main Content Area -->
        <div class="flex-grow-1">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container-fluid">
                    <button id="toggle-sidebar" class="btn btn-outline-primary me-3 d-md-none">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Profile Dropdown -->
                    <div class="dropdown ms-auto">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="profileDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user me-2"></i>{{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li>
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="dropdown-item">ออกจากระบบ</button>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Dashboard Content -->
            <div class="main-content">
                @yield('content')
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
