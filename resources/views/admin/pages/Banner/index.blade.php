@extends('admin.layouts.app')

@section('title', 'User Management')
@section('contents')
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3>{{ $title ?? 'Chưa có title' }}</h3>
            </div>

            <form action="{{ route('admin.banner.update') }}" method="POST" enctype="multipart/form-data" class="card-body row mb-5">
                @csrf
                <div class="col-12">
                    <label for="file_input">Ảnh</label>
                    <input type="file" value="" name="file_input" id="file_input" class="form-control">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 mt-3">
                    <label for="email" class="col-12">Ảnh hiện tại</label>
                    <div>
                        <img 
                            src="{{asset('storage/images/banner/'. optional($banner_current)->slide_path)}}" 
                            alt="ảnh hiện tại"
                            style="width: 100%; object-fit: cover; max-height: 405px; min-height: 400px; object-position: center center"
                        >
                    </div>
                </div>
                
                <div class="mt-5">
                    <a href="{{ route('admin.user') }}" class="btn btn-success">Quay về</a>
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>
            </form>
        </div>

    </div>
@endsection
