<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Interface\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $title = 'Danh sách người dùng';
        $users = $this->userRepository->all();
        return view('admin.pages.User.index', compact('users', 'title'));
    }

    public function create()
    {
        $title = 'Thêm người dùng';
        return view('admin.pages.User.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:5',
            'password_c' => 'required|same:password',
            'status' => 'required|integer',
            'role' => 'required|integer'
        ], [
            'name.required' => 'Vui lòng nhập tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng của email',
            'email.unique' => 'Email đã được sử dụng',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.max' => 'Số điện thoại không được quá 15 ký tự',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Độ dài mật khẩu tối thiểu là 5 ký tự',
            'password_c.same' => 'Mật khẩu không giống nhau',
            'password_c.required' => 'Vui lòng nhập mật khẩu',
            'status.required' => 'Vui lòng chọn trạng thái',
            'role.required' => 'Vui lòng chọn quyền hạn'
        ]);

        $this->userRepository->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => Hash::make($validated['password']),
            'status' => $validated['status'],
            'role' => $validated['role'],
        ]);

        toastr()->success('Thêm thành viên thành công');
        return redirect()->route('admin.user');
    }

    public function edit($id)
    {
        $title = 'Chỉnh sửa người dùng';
        $user = $this->userRepository->find($id); // Lấy người dùng
        return view('admin.pages.User.edit', compact('title', 'user'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'status' => 'required|integer',
            'role' => 'required|integer'
        ], [
            'name.required' => 'Vui lòng nhập tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng của email',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.max' => 'Số điện thoại không được quá 15 ký tự',
            'status.required' => 'Vui lòng chọn trạng thái',
            'role.required' => 'Vui lòng chọn quyền hạn'
        ]);

        $this->userRepository->update($id, [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
            'role' => $request->role
        ]);

        toastr()->success('Cập nhật thành công');
        return redirect()->route('admin.user');
    }

    public function delete($id)
    {
        $this->userRepository->delete($id);

        toastr()->success('Xóa thành công!');
        return redirect()->back();
    }
}
