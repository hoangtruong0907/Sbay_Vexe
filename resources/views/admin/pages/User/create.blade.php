@extends('admin.layouts.default')

@section('title', 'User Management')
@section('contents')
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3>{{ $title ?? 'Chưa có title' }}</h3>
            </div>

            <form action="{{ route('admin.user.store') }}" method="POST" class="card-body row">
                @csrf
                <div class="col-6">
                    <label for="name">Tên</label>
                    <input type="text" value="{{ old('name') }}" name="name" id="name" class="form-control"
                        style="background-color: #ffffff;">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="email">Email</label>
                    <input type="text" value="{{ old('email') }}" name="email" id="email" class="form-control"
                        style="background-color: #ffffff;">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" value="{{ old('phone') }}" name="phone" id="phone" class="form-control"
                        style="background-color: #ffffff;">
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" class="form-control"
                        style="background-color: #ffffff;">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="password_c">Mật khẩu nhập lại</label>
                    <input type="password" name="password_c" id="password_c" class="form-control"
                        style="background-color: #ffffff;">
                    @error('password_c')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6 mt-3">
                    <label for="status">Trạng thái</label>
                    <select class="form-select" name="status" id="status">
                        <option value="">[ CHỌN TRẠNG THÁI ]</option>
                        <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>On</option>
                        <option value="2" {{ old('status') == '2' ? 'selected' : '' }}>Off</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-6 mt-3">
                    <label for="role">Quyền hạn</label>
                    <select class="form-select" name="role" id="role">
                        <option value=""> [ CHỌN QUYỀN HẠN ] </option>
                        <option value="1" {{ old('role') == '1' ? 'selected' : '' }}>User</option>
                        <option value="2" {{ old('role') == '2' ? 'selected' : '' }}>Admin</option>
                    </select>
                    @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mt-5">
                    <a href="{{ route('admin.user') }}" class="btn btn-success">Quay về</a>
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>
            </form>
        </div>

    </div>
@endsection
