@extends('admin.layouts.default')

@section('title', ' User Management')
@section('contents')
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3>{{$title ?? 'Chưa có title'}}
                    <a href="{{route('admin.user.create')}}" class="btn btn-sm btn-outline-primary float-end"><i class="bi bi-plus"></i>
                        Add user</a>
                </h3>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <table width="100%" class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>
                                        @if ($item->role == 2)
                                            admin
                                        @elseif($item->role == 1)
                                            user
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status == '1')
                                            <span class="badge bg-success">On</span>
                                        @else
                                            <span class="badge bg-danger">Off</span>
                                        @endif
                                    </td>
                                    
                                    <td class="text-end">
                                        <a href="{{route('admin.user.edit', $item->id)}}" class="btn btn-outline-info btn-rounded"><i
                                                class="fas fa-pen"></i></a>
                                        <a href="{{route('admin.user.delete', $item->id)}}" onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn btn-outline-danger btn-rounded"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
