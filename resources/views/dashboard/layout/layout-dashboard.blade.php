<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* Body styles */
        body {
            background-color: #f4f7fc;
            font-family: 'Roboto', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            background: linear-gradient(180deg, #0069d9, #0056b3);
            color: white;
            min-height: 100vh;
            padding-top: 1.5rem;
            position: fixed;
            top: 0;
            left: 0;
            width: 230px;
            z-index: 1000;
            transition: transform 0.3s ease;
            box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h3 {
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            border-radius: 6px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .sidebar a i {
            margin-right: 10px;
            /* เพิ่มระยะห่างระหว่างไอคอนกับข้อความ */
        }

        .sidebar a:hover {
            background-color: #0044aa;
            transform: translateX(5px);
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, #0056b3, #0069d9);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 230px;
            width: calc(100% - 230px);
            z-index: 1100;
            transition: left 0.3s ease, width 0.3s ease;
        }

        .navbar.collapsed {
            left: 0;
            width: 100%;
        }

        .navbar .navbar-brand {
            font-size: 1.6rem;
            font-weight: bold;
            color: white;
        }

        .navbar .nav-link {
            color: white;
            font-size: 1.1rem;
        }

        .navbar .nav-link:hover {
            color: #d4e3ff;
        }

        /* Main Content */
        .main-content {
            padding: 2.5rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            min-height: 90vh;
            margin-top: 75px;
            margin-left: 230px;
            transition: margin-left 0.3s ease;
        }

        .main-content h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .main-content p {
            font-size: 1.2rem;
            color: #555;
        }

        .btn-primary {
            background-color: #0056b3;
            border: none;
            transition: background-color 0.3s ease;
            padding: 10px 20px;
            font-size: 1.1rem;
        }

        .btn-primary:hover {
            background-color: #004494;
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
            <h3>Dashboard</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i> Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i> Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-chart-line"></i> Analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cog"></i> Settings</a>
                </li>
            </ul>
        </div>

        <!-- Main Content Area -->
        <div class="flex-grow-1">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container-fluid">
                    <button id="toggle-sidebar" class="btn btn-outline-light me-3 d-md-none">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Profile Dropdown -->
                    <div class="dropdown ms-auto">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="profileDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#">View Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
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
        const sidebar = document.getElementById('sidebar');
        const navbar = document.querySelector('.navbar');
        const content = document.querySelector('.main-content');

        toggleSidebar.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            navbar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');
        });
    </script>
</body>

</html>
