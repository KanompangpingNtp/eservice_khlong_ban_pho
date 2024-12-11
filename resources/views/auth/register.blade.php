@extends('auth.layouts.layout-login-register')
@section('title', 'Register')
@section('content')

@if ($message = Session::get('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: '{{ $message }}'
        })
    </script>
@endif


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-primary text-white">
                    <h3>ลงทะเบียน</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('Register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="salutation" class="form-label">คำนำหน้า</label>
                            <input type="text" class="form-control" id="salutation" name="salutation" placeholder="คำนำหน้า">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อบัญชี<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">อีเมล<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">รหัสผ่าน<span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">ยืนยันรหัสผ่าน<span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">อายุ</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="อายุ">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="เบอร์โทรศัพท์">
                        </div>
                        <div class="mb-3">
                            <label for="house_number" class="form-label">บ้านเลขที่</label>
                            <input type="text" class="form-control" id="house_number" name="house_number" placeholder="บ้านเลขที่">
                        </div>
                        <div class="mb-3">
                            <label for="village" class="form-label">หมู่บ้าน</label>
                            <input type="text" class="form-control" id="village" name="village" placeholder="หมู่บ้าน">
                        </div>
                        <div class="mb-3">
                            <label for="subdistrict" class="form-label">ตำบล</label>
                            <input type="text" class="form-control" id="subdistrict" name="subdistrict" placeholder="ตำบล">
                        </div>
                        <div class="mb-3">
                            <label for="district" class="form-label">อำเภอ</label>
                            <input type="text" class="form-control" id="district" name="district" placeholder="อำเภอ">
                        </div>
                        <div class="mb-3">
                            <label for="province" class="form-label">จังหวัด</label>
                            <input type="text" class="form-control" id="province" name="province" placeholder="จังหวัด">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">ลงทะเบียน</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>มีบัญชีแล้ว? <a href="{{ route('LoginPage') }}">เข้าสู่ระบบ</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
