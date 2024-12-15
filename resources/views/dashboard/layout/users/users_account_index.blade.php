@extends('dashboard.layout.users.layout_users')
@section('user_content')
    <style>
        /* Custom CSS for icons and hover effects */
        .icon {
            font-size: 3rem;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 26px;
            font-weight: 600;
        }

        .card-text {
            font-size: 20px;
        }

        .section-heading {
            font-size: 3rem;
            font-weight: 700;
            color: #004ddc;
            /* Deep Blue */
        }
    </style>

    <div class="d-flex flex-column align-items-center justify-content-center py-3">
        <!-- Welcome Section -->
        <div class="text-center mb-5">
            <h1 class="section-heading ">ยินดีต้อนรับเข้าสู่ระบบ E-Service</h1>
            <p class="lead fs-4 text-muted">จัดการข้อมูลและบริการต่าง ๆ ได้อย่างง่ายดาย</p>
        </div>

        <!-- Quick Actions Section -->
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Action Card 1 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-primary">
                                <img src="{{ asset('images/layout-index/petition.png') }}" alt="image" class="img-fluid"
                                    style="max-width: 80px;">
                            </div>
                            <h5 class="card-title">คำร้องทั่วไป</h5>
                            <p class="card-text text-muted">ดำเนินการยื่นคำร้องทั่วไป</p>
                            <a href="{{ route('UsersAccountFormPage') }}"
                                class="btn btn-primary fs-4 w-100">กรอกข้อมูลเอกสาร</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 2 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-success">
                                <img src="{{ asset('images/layout-index/disabled.png') }}" alt="image" class="img-fluid"
                                    style="max-width: 80px;">
                            </div>
                            <h5 class="card-title">แบบคำขอส่งทะเบียนรับเบี้ยความพิการ</h5>
                            <p class="card-text text-muted">ยืนยันสิทธิรับเบี้ยความพิการ</p>
                            <a href="{{ route('DisabilityUsersAccountFormPage') }}"
                                class="btn btn-success fs-4 w-100">กรอกข้อมูลเอกสาร</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 3 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-warning">
                                <img src="{{ asset('images/layout-index/cv.png') }}" alt="image" class="img-fluid"
                                    style="max-width: 80px;">
                            </div>
                            <h5 class="card-title">แบบฟอร์มใบสมัครเรียนศูนย์พัฒนาเด็กเล็ก</h5>
                            <p class="card-text text-muted">จัดการการสมัครเรียน</p>
                            <a href="{{ route('ChildApplyFormPage') }}"
                                class="btn btn-warning fs-4 w-100">กรอกข้อมูลเอกสาร</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 4 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-info">
                                <img src="{{ asset('images/layout-index/old-people.png') }}" alt="image"
                                    class="img-fluid" style="max-width: 80px;">
                            </div>
                            <h5 class="card-title">แบบคำขอยืนยันสิทธิรับเงินเบี้ยยังชีพผู้สูงอายุ</h5>
                            <p class="card-text text-muted">ยืนยันสิทธิรับเงินยังชีพผู้สูงอายุ</p>
                            <a href="{{ route('ElderlyAllowanceUsersAccountFormPage') }}"
                                class="btn btn-info fs-4 w-100">กรอกข้อมูลเอกสาร</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 5 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-danger">
                                <img src="{{ asset('images/layout-index/money.png') }}" alt="image" class="img-fluid"
                                    style="max-width: 80px;">
                            </div>
                            <h5 class="card-title">แบบคำขอรับเงินสงเคราะห์</h5>
                            <p class="card-text text-muted">ดำเนินการคำขอรับเงิน</p>
                            <a href="{{ route('ReceiveAssistanceUserFormPage') }}"
                                class="btn btn-danger fs-4 w-100">กรอกข้อมูลเอกสาร</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
