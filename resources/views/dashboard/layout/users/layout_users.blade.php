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
            background: linear-gradient(to bottom, #f2f9fd, #e5e5e5);
            font-family: 'THSarabunNew', sans-serif;
            min-height: 100vh;
            color: #333;
        }

        /* Sidebar */
        .sidebar {
            background: linear-gradient(to bottom, #f2f9fd, #e5e5e5);
            color: #2f2f2f;
            min-height: 100vh;
            padding-top: 2rem;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            z-index: 1200;
            transition: transform 0.3s ease;
            box-shadow: 6px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            color: #2f2f2f;
            text-decoration: none;
            padding: 15px 3rem;
            display: flex;
            align-items: center;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: #2f2f2f;
            color: white;
            transform: translateX(5px);
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(to right, #f2f9fd, #e5e5e5);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
            height: 60px;
            z-index: 1100;
            transition: left 0.3s ease, width 0.3s ease;
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
            min-height: 90vh;
            margin-top: 75px;
            margin-left: 255px;
            transition: margin-left 0.3s ease;
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
    </style>
</head>

<body>

    <div class="container-fluid d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="sidebar">
            <div class="d-flex justify-content-center align-content-center fs-1">
                <div class="font-sarabun-bold fs-1">Dash board</div>
                <button id="toggle-sidebars" class="btn btn-outline-secondary d-md-none ">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- เมนูที่สามารถคลิกเพื่อเปิดตัวเลือกเพิ่มเติม -->
            <div class="nav-item">
                <a class="nav-link fs-4 font-sarabun-bold" href="javascript:void(0)" data-bs-toggle="collapse"
                    data-bs-target="#moreOptions1">
                    <i class="fas fa-chart-line"></i> More
                </a>
                <!-- ตัวเลือกที่จะแสดงเมื่อคลิก -->
                <div id="moreOptions1" class="collapse">
                    <div class="nav-item">
                        <a class="nav-link" href="#">Option 1</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="#">Option 2</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="#">Option 3</a>
                    </div>
                </div>
                <a class="nav-link fs-4 font-sarabun-bold" href="javascript:void(0)" data-bs-toggle="collapse"
                    data-bs-target="#moreOptions2">
                    <i class="fas fa-cogs"></i> Options
                </a>
                <!-- ตัวเลือกที่จะแสดงเมื่อคลิก -->
                <div id="moreOptions2" class="collapse">
                    <div class="nav-item">
                        <a class="nav-link" href="#">Option 1</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="#">Option 2</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="#">Option 3</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Main Content Area -->
        <div class="flex-grow-1">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container-fluid">
                    <button id="toggle-sidebar" class="btn btn-outline-secondary me-3 d-md-none">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Profile Dropdown -->
                    <div class="dropdown ms-auto">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="profileDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('LoginPage') }}">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('RegisterPage') }}">RegisterPage</a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
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
