@extends('admin.layouts.default')

@section('title', ' Dashboard')
@section('contents')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
</head>

<body>
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
            </div>
            <!-- Add post-->
            <div class="modal-body">
                <div class="deadline-form">
                    <div class="row">
                        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                            {{ @csrf_field() }}
                            <div class=" col-md-6"style="width:100%;">
                                <label class="form-label" style="width:100%;">Tiều đề</label>
                                <input type="text" name="title" id="title" value="" class="form-control">
                            </div>

                            <div class="col-md-6"style="width:100%;">
                                <label for="menu" class="form-label"> Hình ảnh</label>
                                <input class="form-control" type="file" id="picture" name="picture" multiple="" required="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nội dung</label>
                                <textarea id="content" name="content"></textarea>
                            </div>
                            
                            <div class="col-md-6"style="width:100%;margin-bottom:50px;">
                                <label class="form-label">Người tạo</label>
                                <input type="text" name="author" id="author" value="" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary" style="margin-right:20px;">Hủy</a>
                                <button type="submit" class="btn btn-primary" style="background-color: #6610f2;color: white;">Thêm Bài Viết</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
        <script type="importmap">
            {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
                    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
                }
            }
        </script>

        <script type="module">
    import {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Font,
        Paragraph,
        Table,
        TableToolbar,
        Image,
        ImageUpload,
        ImageToolbar,
        ImageCaption,
        ImageStyle
    } from 'ckeditor5';

    ClassicEditor
        .create(document.querySelector('#content'), {
            plugins: [
                Essentials,
                Bold,
                Italic,
                Font,
                Paragraph,
                Table,
                TableToolbar,
                Image,
                ImageUpload,
                ImageToolbar,
                ImageCaption,
                ImageStyle
            ],
            toolbar: {
                items: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                    'insertTable', 'tableColumn', 'tableRow', 'mergeTableCells', '|',
                    'imageUpload'
                ]
            },
            image: {
                toolbar: [
                    'imageTextAlternative', 'imageStyle:full', 'imageStyle:side'
                ],
                upload: {
                    url: '/upload-image', 
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                }
            }
        })
        .then(editor => {
            console.log('Editor was initialized', editor);
        })
        .catch(error => {
            console.error('There was a problem initializing the editor.', error);
        });
</script>

       

    
</body>

</html>
@endsection