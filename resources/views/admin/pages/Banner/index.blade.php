@extends('admin.layouts.app')

@section('title', 'Banner')
@section('contents')
    <div class="flex flex-col gap-2.5 xl:flex-row">
        <!-- Phần bên trái-->
        <div class="panel flex-1 px-4 py-6 xl:w-2/3">
            <div class="text-lg font-semibold mb-4">Cập nhật ảnh Banner</div>
            <form action="{{ route('admin.banner.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mt-3">  
                    <div class="mb-5">
                        <label for="picture" class="block mb-2">Hình ảnh</label>
                        <input type="file" value="" name="file_input" id="file_input" placeholder="Chọn hình ảnh">
                    </div>
                    <div>
                        <img 
                            src="{{asset('storage/images/banner/'. optional($banner_current)->slide_path)}}" 
                            alt="ảnh hiện tại"
                            id="img_review"
                            style="width: 100%; object-fit: cover; max-height: 455px; min-height: 450px; object-position: center center"
                        >
                    </div>
                </div>
                <div class="flex justify-end gap-3 mt-4">
                    <a href="{{ URL::previous() }}" class="btn btn-secondary text-sm py-2 px-4 flex items-center gap-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path opacity="0.5" d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M12 2L12 15M12 15L9 11.5M12 15L15 11.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Quay lại
                    </a>
                    <button type="submit" class="btn btn-primary text-sm py-2 px-4 flex items-center gap-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 11.6585 22 11.4878 21.9848 11.3142C21.9142 10.5049 21.586 9.71257 21.0637 9.09034C20.9516 8.95687 20.828 8.83317 20.5806 8.58578L15.4142 3.41944C15.1668 3.17206 15.0431 3.04835 14.9097 2.93631C14.2874 2.414 13.4951 2.08581 12.6858 2.01515C12.5122 2 12.3415 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355Z" stroke="currentColor" stroke-width="1.5"></path>
                            <path d="M17 22V21C17 19.1144 17 18.1716 16.4142 17.5858C15.8284 17 14.8856 17 13 17H11C9.11438 17 8.17157 17 7.58579 17.5858C7 18.1716 7 19.1144 7 21V22" stroke="currentColor" stroke-width="1.5"></path>
                            <path opacity="0.5" d="M7 8H13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        Cập nhật
                    </button>
                </div>
            </form>
        </div> 
    </div>  
@endsection
@section('scripts')
<script>
    // Update Image
    var image = $('#img_review');
    $('#file_input').on('change', function(){
        image[0].src = URL.createObjectURL(this.files[0]);
    })
</script>
@endsection

