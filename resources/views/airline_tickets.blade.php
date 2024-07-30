@extends('layouts.app')

@section('content')

<div id="airlinetickets">
    <div class="container-airlinetickets">
        <ul class="nav nav-pills nav-airline" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-car" aria-hidden="true"></i> <span>420k</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-plane" aria-hidden="true"></i><span>950k</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa fa-ship" aria-hidden="true"></i><span>595</span></button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="ant-row-flex search-widget-inner-content">
                    <div class="left-ant-row-flex">
                        
                    </div>
                    <div class="right-search-widget-inner-content">
                        
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="ant-row-flex search-widget-inner-content">
                    <div class="left-ant-row-flex">
                        
                    </div>
                    <div class="right-search-widget-inner-content">
                        
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                <div class="ant-row-flex search-widget-inner-content">
                    <div class="left-ant-row-flex">
                        
                    </div>
                    <div class="right-search-widget-inner-content">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
