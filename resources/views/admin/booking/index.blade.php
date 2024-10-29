@extends('admin.layouts.app')

@section('title', ' Booking Management')
@section('contents')
    <div class="container mt-5">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <h2 class="text-xl">{{ $title }}</h2>
            <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                <div class="flex gap-3">
                    <div>
                        <button type="button" class="btn btn-primary add-user-modal">
                            <img src="{{ asset('/template/admin/assets/images/icons/ic_add.svg') }} " alt="Icon">
                            Thêm người dùng
                        </button>
                    </div>
                </div>
                <div class="relative">
                    <input type="text" placeholder="Tìm kiếm người dùng" class="peer form-input py-2 ltr:pr-11 rtl:pl-11">
                    <div class="absolute top-1/2 -translate-y-1/2 peer-focus:text-primary ltr:right-[11px] rtl:left-[11px]">
                        <img src="{{ asset('/template/admin/assets/images/icons/ic_search.svg') }} " alt="Icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="panel mt-5 overflow-hidden border-0 p-0">
            <div class="table-responsive">
                <table class="table-striped table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Order_Code</th>
                            {{-- <th>Trip_Code</th> --}}

                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>seats</th>
                            <th>booking_code</th>
                            <th>code</th>
                            <th>pickup_id</th>
                            <th>tickets</th>

                            <th>   drop_off_info</th>
                            {{-- <th class="text-nowrap">Ngày cập nhật</th> --}}
                            <th class="!text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <div class="flex w-max items-center">
                                        <div class="flex-none mr-3">
                                            <div class="p-1 bg-white-dark/30 rounded-full"><img
                                                    class="h-8 w-8 rounded-full object-cover"
                                                    src="{{ asset('/template/admin/assets/images/user-profile.jpeg') }}" />
                                            </div>
                                        </div>
                                        <div>
                                            {{ $user->customer_name }}
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $user->order_code }}</td>
                                {{-- <td>{{ $user->trip_code }}</td> --}}
                                <td>{{ $user->customer_email }}</td>
                                <td>{{ $user->customer_phone }}</td>
                                <td>{{ $user->seats }}</td>
                                <td>{{ $user->booking_code }}</td>
                                <td>{{ $user->code }}</td>
                                <td>{{ $user->pickup_id }}</td>
                                <td>{{ $user->tickets }}</td>
                                <td>{{ $user->drop_off_info }}</td>
                               <td class="text-end">
                                    <div class="flex items-center justify-center gap-4">
                                        <button class="btn btn-sm btn-outline-primary text-nowrap editUser"
                                            data-id="{{ $user->id }}">Chỉnh Sửa</button>
                                        <button class="btn btn-sm btn-outline-danger deleteUser text-nowrap"  onclick="window.location.href='{{ route('admin.booking.detail', ['id' => $user->booking_code]) }}'"
                                            data-id="{{ $user->booking_code }}" > Chi tiết</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal thêm người dùng --}}
    <div class="fixed inset-0 z-50 hidden bg-black/60 overflow-y-auto" id="addUserModal">
        <div class="flex items-center justify-center min-h-screen px-4" onclick="closeModalAdd(event)">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6 relative">
                <!-- Modal Header -->
                <h3 class="text-lg font-medium text-center mb-4">Thêm người dùng</h3>
                <button type="button" class="absolute top-4 right-4 text-gray-600 hover:text-black"
                    onclick="closeModalAdd()">
                    <img src="{{ asset('/template/admin/assets/images/icons/ic_close.svg') }} " alt="Icon">
                </button>
                <!-- Modal Add -->
                <div>
                    <form id="userForm_add">
                        @csrf
                        <div class="mb-5">
                            <label for="name">Customer Name</label>
                            <input id="name" type="text" placeholder="Nhập tên" class="form-input">
                        </div>
                        <div class="mb-5 grid grid-cols-2 gap-4">
                            <div>
                                <label for="email">Customer Email</label>
                                <input id="email" type="text" placeholder="Nhập địa chỉ email" class="form-input">
                            </div>
                            <div>
                                <label for="phone">Customer Phone</label>
                                <input id="phone" type="text" placeholder="Nhập số điện thoại" class="form-input">
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="seats">Seats</label>
                            <input id="seats" type="text" placeholder="Nhập Seat" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="code">Code</label>
                            <input id="code" type="text" placeholder="Nhập code" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="booking_code">Booking Code</label>
                            <input id="booking_code" type="text" placeholder="Nhập code" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="ticket">Ticket</label>
                            <input id="ticket" type="text" placeholder="Nhập code" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="price">Price</label>
                            <input id="price" type="text" placeholder="Nhập code" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="pickup_id">Pickup Id</label>
                            <input id="pickup_id" type="text" placeholder="Nhập code" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="droff_off_info">Drop Off Info</label>
                            <input id="droff_off_info" type="text" placeholder="Nhập code" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="droff_off_point_id">Drop Off Point </label>
                            <input id="droff_off_point_id" type="text" placeholder="Nhập code" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="status">Status </label>
                            <input id="status" type="text" placeholder="Nhập code" class="form-input">
                        </div>


                        <!-- Action Buttons -->
                        <div class="mt-8 flex items-center justify-end">
                            <button type="button" class="btn btn-outline-danger" onclick="closeModalAdd()">Hủy
                            </button>
                            <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal chỉnh sửa người dùng -->
    <div class="fixed inset-0 z-50 hidden bg-black/60 overflow-y-auto" id="editUserModal"
        onclick="closeModalEdit(event)">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6 relative" onclick="event.stopPropagation()">
                <!-- Modal Header -->
                <h3 class="text-lg font-medium text-center mb-4">Chỉnh sửa Booking người dùng
                </h3>
                <button type="button" class="absolute top-4 right-4 text-gray-600 hover:text-black"
                    onclick="closeModalEdit()">
                    <img src="{{ asset('/template/admin/assets/images/icons/ic_close.svg') }} " alt="Icon">
                </button>
                <!-- Modal Form -->
                <div>
                    <form id="userForm_edit">
                        @csrf
                        <input type="hidden" id="userId_edit">
                        <div class="mb-5">
                            <label for="name_e">Customer Name</label>
                            <input id="name_e" type="text" placeholder="Nhập tên" class="form-input">
                        </div>
                        <div class="mb-5 grid grid-cols-2 gap-4">
                            <div>
                                <label for="email_e">Customer Email</label>
                                <input id="email_e" type="text" placeholder="Nhập địa chỉ email" class="form-input">
                            </div>
                            <div>
                                <label for="phone_e">Customer Phone</label>
                                <input id="phone_e" type="text" placeholder="Nhập số điện thoại" class="form-input">
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="seats_e">Seats</label>
                            <input id="seats_e" type="text" placeholder="Nhập Seat" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="code_e">Code</label>
                            <input id="code_e" type="text" placeholder="Nhập code" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="booking_code_e">Booking Code</label>
                            <input id="booking_code_e" type="text" placeholder="Nhập booking code" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="ticket_e">Ticket</label>
                            <input id="ticket_e" type="text" placeholder="Nhập ticket" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="price_e">Price</label>
                            <input id="price_e" type="text" placeholder="Nhập price" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="pickup_id_e">Pickup Id</label>
                            <input id="pickup_id_e" type="text" placeholder="Nhập pickup id" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="droff_off_info_e">Drop Off Info</label>
                            <input id="droff_off_info_e" type="text" placeholder="Nhập drop off info" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="droff_off_point_id_e">Drop Off Point </label>
                            <input id="droff_off_point_id_e" type="text" placeholder="Nhập Drop Off Point" class="form-input">
                        </div>
                        <div class="mb-5">
                            <label for="status_e">Status </label>
                            <input id="status_e" type="text" placeholder="Nhập code" class="form-input">
                        </div>


                        <!-- Action Buttons -->
                        <div class="mt-8 flex items-center justify-end">
                            <button type="button" class="btn btn-outline-danger" onclick="closeModalEdit()">Hủy</button>
                            <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">Cập
                                nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Xóa Người dùng -->
    {{-- <div class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 px-4" id="deleteUserModal"
        onclick="closeDeleteModal(event)">
        <div class="flex min-h-screen items-center justify-center">
            <div class="panel my-8 w-[90%] max-w-lg overflow-hidden rounded-lg border-0 p-0 md:w-full"
                onclick="event.stopPropagation()">
                <button type="button" class="absolute top-4 text-white-dark hover:text-dark ltr:right-4 rtl:left-4"
                    onclick="closeDeleteModal()">
                    <img src="{{ asset('/template/admin/assets/images/icons/ic_close.svg') }} " alt="Icon">
                </button>
                <div
                    class="bg-[#fbfbfb] py-3 text-lg font-medium ltr:pl-5 ltr:pr-[50px] rtl:pr-5 rtl:pl-[50px] dark:bg-[#121c2c]">
                    Xoá người dùng
                </div>
                <div class="p-5 text-center">
                    <div class="mx-auto w-fit rounded-full bg-danger p-4 text-white ring-4 ring-danger/30">
                        <img src="{{ asset('/template/admin/assets/images/icons/ic_delete.svg') }} " alt="Icon">
                    </div>
                    <div class="mx-auto mt-5 sm:w-3/4">Bạn có chắc chắn muốn xóa người dùng này không?</div>
                    <!-- Action Buttons -->
                    <div class="mt-8 flex items-center justify-center">
                        <button type="button" class="btn btn-outline-danger" onclick="closeDeleteModal()">Huỷ</button>
                        <button type="button" class="btn btn-primary ltr:ml-4 rtl:mr-4"
                            onclick="deleteUser()">Xoá</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@section('scripts')
    <script src="{{ asset('/template/admin/ajax/bookingManagement.js') }}"></script>
@endsection
