@extends('dashboard.layout.layout-dashboard')
@section('title', 'E-Service')
@section('content')
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
            <h1 class="section-heading ">เช็คคำร้อง E-Service Online</h1>
            <p class="lead fs-4 text-muted">เช็คคำร้องของฟอร์มต่างๆ</p>
        </div>

        <!-- Quick Actions Section -->
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Action Card 1 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-primary">
                                {{-- <p class="font-sarabun-bold" style="font-size: 55px;">{{ $GeneralRequests }}</p> --}}

                                <p class="font-sarabun-bold" style="font-size: 55px;">{{ $GeneralRequests ? $GeneralRequests. ' ฟอร์ม' : 'ไม่มีฟอร์มที่ถูกส่งเข้ามา' }}</p>
                            </div>
                            <h5 class="card-title">คำร้องทั่วไป</h5>
                            <a href="{{ route('TablePages') }}" class="btn btn-primary fs-4 w-100">เช็คคำร้อง</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 2 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-success">
                                {{-- <p class="font-sarabun-bold" style="font-size: 55px;">{{$Disability}}</p> --}}
                                <p class="font-sarabun-bold" style="font-size: 55px;">{{ $Disability ? $Disability . ' ฟอร์ม' : 'ไม่มีฟอร์มที่ถูกส่งเข้ามา' }}</p>
                            </div>
                            <h5 class="card-title">แบบคำขอส่งทะเบียนรับเบี้ยความพิการ</h5>
                            <a href="{{ route('TableDisabilityPages') }}"
                                class="btn btn-success fs-4 w-100">เช็คคำร้อง</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 3 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-warning">
                                {{-- <p class="font-sarabun-bold" style="font-size: 55px;">{{$ChildApply}}</p> --}}
                                <p class="font-sarabun-bold" style="font-size: 55px;">{{ $ChildApply ? $ChildApply. ' ฟอร์ม' : 'ไม่มีฟอร์มที่ถูกส่งเข้ามา' }}</p>
                            </div>
                            <h5 class="card-title">แบบฟอร์มใบสมัครเรียนศูนย์พัฒนาเด็กเล็ก</h5>
                            <a href="{{ route('TableChildApplyAdminPages') }}" class="btn btn-warning fs-4 w-100">เช็คคำร้อง</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 4 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-info">
                                {{-- <p class="font-sarabun-bold" style="font-size: 55px;">{{$ElderlyAllowance}}</p> --}}
                                <p class="font-sarabun-bold" style="font-size: 55px;">{{ $ElderlyAllowance ? $ElderlyAllowance. ' ฟอร์ม' : 'ไม่มีฟอร์มที่ถูกส่งเข้ามา' }}</p>
                            </div>
                            <h5 class="card-title">แบบคำขอยืนยันสิทธิรับเงินเบี้ยยังชีพผู้สูงอายุ</h5>
                            <a href="{{ route('TableElderlyAllowancePages') }}"
                                class="btn btn-info fs-4 w-100">เช็คคำร้อง</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 5 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-danger">
                                {{-- <p class="font-sarabun-bold" style="font-size: 55px;"> {{$ReceiveAssistance}}</p> --}}
                                <p class="font-sarabun-bold" style="font-size: 55px;">{{ $ReceiveAssistance ? $ReceiveAssistance. ' ฟอร์ม' : 'ไม่มีฟอร์มที่ถูกส่งเข้ามา' }}</p>
                            </div>
                            <h5 class="card-title">แบบคำขอรับเงินสงเคราะห์</h5>
                            <a href="{{ route('TableReceiveAssistanceAdminPages') }}"
                                class="btn btn-danger fs-4 w-100">เช็คคำร้อง</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 6 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-primary">
                                {{-- <p class="font-sarabun-bold" style="font-size: 55px;">{{$TradeRegistry}}</p> --}}
                                <p class="font-sarabun-bold" style="font-size: 55px;">{{ $TradeRegistry ? $TradeRegistry. ' ฟอร์ม' : 'ไม่มีฟอร์มที่ถูกส่งเข้ามา' }}</p>
                            </div>
                            <h5 class="card-title">คำร้องทะเบียนพาณิชย์</h5>
                            <a href="{{ route('TableTradeRegistryAdminPages') }}"
                                class="btn btn-primary fs-4 w-100">เช็คคำร้อง</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 7 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-success">
                                {{-- <p class="font-sarabun-bold" style="font-size: 55px;">{{$Certification}}</p> --}}
                                <p class="font-sarabun-bold" style="font-size: 55px;">{{ $Certification ? $Certification. ' ฟอร์ม' : 'ไม่มีฟอร์มที่ถูกส่งเข้ามา' }}</p>
                            </div>
                            <h5 class="card-title">คำขอรับรองสิ่งปลูกสร้างอาคาร</h5>
                            <a href="{{ route('TableCertificationAdminPages') }}"
                                class="btn btn-success fs-4 w-100">เช็คคำร้อง</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 8 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-warning">
                                {{-- <p class="font-sarabun-bold" style="font-size: 55px;">{{$License}}</p> --}}
                                <p class="font-sarabun-bold" style="font-size: 55px;">{{ $License ? $License. ' ฟอร์ม' : 'ไม่มีฟอร์มที่ถูกส่งเข้ามา' }}</p>
                            </div>
                            <h5 class="card-title">แบบคำขอรับใบอนุญาต</h5>
                            <a href="{{ route('TableLicenseAdminPages') }}" class="btn btn-warning fs-4 w-100">เช็คคำร้อง</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 9 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-info">
                                {{-- <p class="font-sarabun-bold" style="font-size: 55px;"> {{$BusinessDoc}}</p> --}}
                                <p class="font-sarabun-bold" style="font-size: 55px;">{{ $BusinessDoc ? $BusinessDoc. ' ฟอร์ม' : 'ไม่มีฟอร์มที่ถูกส่งเข้ามา' }}</p>
                            </div>
                            <h5 class="card-title">แบบคำร้องขอจดทะเบียนพาณิชย์อิเล็กทรอนิกส์</h5>
                            <a href="{{ route('TableBusinessDocAdminPages') }}"
                                class="btn btn-info fs-4 w-100">เช็คคำร้อง</a>
                        </div>
                    </div>
                </div>

                <!-- Action Card 10 -->
                <div class="col">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="card-body text-center">
                            <div class="icon mb-3 text-danger">
                                {{-- <p class="font-sarabun-bold" style="font-size: 55px;">{{$BuildingChange}}</p> --}}
                                <p class="font-sarabun-bold" style="font-size: 55px;">{{ $BuildingChange ? $BuildingChange. ' ฟอร์ม' : 'ไม่มีฟอร์มที่ถูกส่งเข้ามา' }}</p>
                            </div>
                            <h5 class="card-title">คำขออนุญาตก่อสร้างอาคารดัดแปลงอาคารหรือรื้อถอนอาคาร</h5>
                            <a href="{{ route('TableBuildingChangeAdminPages') }}"
                                class="btn btn-danger fs-4 w-100">เช็คคำร้อง</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        setInterval(function() {
            window.location.reload();
        }, 300000); // 300000 มิลลิวินาที = 5 นาที
    </script>
@endsection
