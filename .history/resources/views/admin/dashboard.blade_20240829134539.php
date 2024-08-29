@extends('admin.layouts.default')

@section('title', ' Dashboard')
@section('contents')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-header">
                    <div class="page-pretitle">Tổng quan</div>
                    <h2 class="page-title">Bảng điều khiển</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big text-center">
                                        <i class="teal fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="detail">
                                        <p class="detail-subtitle">Đơn hàng mới</p>
                                        <span class="number">6,267</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <br>
                                <div class="stats">
                                    <i class="fas fa-calendar"></i> Trong tuần này
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big text-center">
                                        <i class="olive fas fa-money-bill-alt"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="detail">
                                        <p class="detail-subtitle">Doanh thu</p>
                                        <span class="number">$180,000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <br>
                                <div class="stats">
                                    <i class="fas fa-calendar"></i> Trong tháng này
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big text-center">
                                        <i class="violet fas fa-eye"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="detail">
                                        <p class="detail-subtitle">Lượt xem trang</p>
                                        <span class="number">28,210</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <br>
                                <div class="stats">
                                    <i class="fas fa-stopwatch"></i> Trong tháng này
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big text-center">
                                        <i class="orange fas fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="detail">
                                        <p class="detail-subtitle">Yêu cầu</p>
                                        <span class="number">75</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <br>
                                <div class="stats">
                                    <i class="fas fa-envelope-open-text"></i>Trong tuần này
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h5 class="mb-0">Traffic Overview</h5>
                                        <p class="text-muted">Current year website visitor data</p>
                                    </div>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="trafficflow"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h5 class="mb-0">Sales Overview</h5>
                                        <p class="text-muted">Current year sales data</p>
                                    </div>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="sales"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="content">
                            <div class="head">
                                <h5 class="mb-0">Top Visitors by Country</h5>
                                <p class="text-muted">Current year website visitor data</p>
                            </div>
                            <div class="canvas-wrapper">
                                <table class="table table-striped">
                                    <thead class="success">
                                        <tr>
                                            <th>Country</th>
                                            <th class="text-end">Unique Visitors</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-us"></i> United States</td>
                                            <td class="text-end">27,340</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-in"></i> India</td>
                                            <td class="text-end">21,280</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-jp"></i> Japan</td>
                                            <td class="text-end">18,210</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-gb"></i> United Kingdom</td>
                                            <td class="text-end">15,176</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-es"></i> Spain</td>
                                            <td class="text-end">14,276</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-de"></i> Germany</td>
                                            <td class="text-end">13,176</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-br"></i> Brazil</td>
                                            <td class="text-end">12,176</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-id"></i> Indonesia</td>
                                            <td class="text-end">11,886</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-ph"></i> Philippines</td>
                                            <td class="text-end">11,509</td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag-icon flag-icon-nz"></i> New Zealand</td>
                                            <td class="text-end">1,700</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="content">


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
