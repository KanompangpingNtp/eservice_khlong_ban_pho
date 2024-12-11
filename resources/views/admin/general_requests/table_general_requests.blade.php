@extends('dashboard.layout.layout-dashboard')
@section('content')

@if ($message = Session::get('success'))
<script>
    Swal.fire({
        icon: 'success'
        , title: '{{ $message }}'
    , })

</script>
@endif

<div class="container">
    <h2 class="text-center">Table GR</h2>

    <table class="table table-bordered table-striped">
        <thead class="text-center">
            <tr>
                <th>วันที่ส่ง</th>
                <th>ชื่อผู้ส่งฟอร์ม</th>
                <th>ผู้กดรับฟอร์ม</th>
                <th>สถานะ</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($forms as $form)
            <tr>
                <td>{{ $form->created_at->format('d/m/Y') }}</td>
                <td>{{ $form->user ? $form->user->name : 'ผู้ใช้งานทั่วไป' }}</td>
                <td>{{ $form->admin_name_verifier}}</td>
                <td>
                    @if($form->status == 1)
                    <p> - </p>
                    @elseif($form->status == 2)
                    <p style="font-size: 20px; color:blue;"><i class="bi bi-check-circle"></i></p>
                    @endif
                </td>
                <td>
                    <a href="{{ route('ShowFormEdit', $form->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                    {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#submitModal-{{ $form->id }}">
                        <i class="bi bi-filetype-pdf"></i>
                    </button> --}}
                    {{-- @if(!is_null($form->user_id))
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#replyModal-{{ $form->id }}">
                        <i class="bi bi-reply"></i>
                    </button>
                    @endif --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
