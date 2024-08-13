@extends('layouts.app')

@section('title', 'Trang chủ')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/air-datepicker.css') }}">
    <style>
        .banner-slider {
            position: relative;
            width: 45%;
            margin: 0 auto;
            padding: 20px 0;
        }

        .banner {
            height: 100px;
            width: 100%;
            margin: 0 auto
        }

        .banner img {
            width: 100%;
            height: 100%;

            
        }
 

        .slick-prev,
        .slick-next {
            position: absolute;
           
            
            
           
            border: none;
            padding: 10px;
            margin-top: -8px;
            
            cursor: pointer;
            z-index: 1000;
        }
        .slick-prev{
            margin-left: -20px;
            
            
            
            
        }


.slick-prev, .slick-next{
    width: 36px !important;
    height: 36px !important;
}

.slick-prev:before{
    font-size: 40px !important;
    opacity: 1 !important;
    margin-left: -41px;
}


.slick-next:before{
    font-size: 40px !important;
    opacity: 1 !important;
    margin-right: -81px;
}
   
        .slick-prev:before{
    content: url(images/left-arrow-slick.svg);
}
.slick-next:before{
    content: url(images/right-arrow-slick.svg);
}
        .slick-prev {
            left: 10px;
        }

        .slick-next {
            right: 10px;
        }
        .click-dots{
            display: none;
        }
        .faq-section {
    width: 75%;
    
    margin: 0 auto;
}

.faq-item {
    border: 1px solid #d9d9d9;
    border-bottom: 0;
    
    
   
}

.faq-question {
    border: 1px solid #d9d9d9;
    border-bottom: 0;
    border-radius: 4px;
    width: 100%;
    text-align: left;
    padding: 15px;
    font-weight: 500;
    
    
    
    border: none;
    cursor: pointer;
    outline: none;
    font-size: 16px;
    color: rgba(0, 0, 0, .85);
    
    align-items: center;
    justify-content: space-between;
}

.faq-icon {
    margin-right: 10px;
    font-size: 20px;
    float: right;
    
}

.faq-answer {
    display: none; /* Ẩn phần trả lời */
    padding: 15px;
    background-color: #f1f1f1;
    border-top: 1px solid #ccc;
}

.faq-answer p {
    margin: 0;
    font-weight: none:
}
.boss{
    margin-top: 20px;
    max-width: 1016px;
    width: 100%;
    display: flex;
    margin: 0 auto;
}
.faq-content{
    border-right: 1px solid #d9d9d9;
   
    width: 25%;
   
}
.content3{
    font-weight: 500;
    margin-top: -8px;
    font-weight: bold;
    font-size: 18px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.faq-icon {
    color: #999; /* Màu nhạt hơn cho mũi tên */
    font-size: 12px; /* Bạn có thể điều chỉnh kích thước nếu cần */
}
    </style>
@endsection

@section('content')
<div class="banner-slider">
        <div class="banner">
            <img src="https://static.vexere.com/production/banners/1051/banner-pc_1170x155-(8).jpg" alt="Banner 1">
        </div>
        <div class="banner">
            <img src="https://static.vexere.com/production/banners/1206/bannner-web-1170x155.jpg" alt="Banner 2">
        </div>
        <div class="banner">
            <img src="https://static.vexere.com/production/banners/1206/bannner-web-1170x155.jpg" alt="Banner 3">
        </div>
    </div>
    <div class="boss">
    <div class="faq-content">
        <p class="content3">Những câu hỏi thường gặp về tuyến xe từ Đà Lạt đi Đà Nẵng</p>
    </div>
    <div class="faq-section">
        
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span> Câu hỏi: Nhà xe đi Đà Nẵng từ Đà Lạt được đánh giá tốt nhất?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Xe đi Đà Nẵng từ Đà Lạt được đánh giá chất lượng tốt nhất là những nhà xe Thanh Thủy - Đà Lạt, Tân Kim Chi, Tân Quang Dũng.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span> Câu hỏi: Xe nào đi Đà Nẵng có giá rẻ nhất?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Vé xe rẻ nhất có mức giá là 400.000 đồng của nhà xe Tài Thắng.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span> Câu hỏi: Có bao nhiêu nhà xe đang khai thác tuyến đường Đà Lạt - Đà Nẵng ?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Hiện tại có 10 nhà xe khai thác tuyến đường.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span>Câu hỏi: Từ Đà Lạt đi Đà Nẵng mất bao nhiêu tiếng khi di chuyển bằng xe khách?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Thời gian di chuyển bằng xe khách từ Đà Lạt đi Đà Nẵng khoảng 10.8 tiếng, nếu mật độ giao thông thuận lợi.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span> Câu hỏi: Khoảng cách từ Đà Lạt đi Đà Nẵng là bao nhiêu km nếu di chuyển bằng xe khách?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Đoạn đường đi Đà Nẵng từ Đà Lạt có chiều dài khoảng 490 km.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span> Câu hỏi: Mỗi ngày có bao nhiêu chuyến xe khách Đà Lạt đi Đà Nẵng ?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Trung bình mỗi ngày có khoảng 18 chuyến xe bắt đầu từ 6:00 đến 17:35.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span> Câu hỏi: Nhà xe đi Đà Lạt Đà Nẵng nào khởi hành sớm nhất?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Chuyến xe có giờ xuất phát sớm nhất vào lúc 6:00 là của nhà xe Tài Thắng.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span>Câu hỏi: Nhà xe đi Đà Nẵng từ Đà Lạt nào khởi hành trễ nhất?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Chuyến xe có giờ xuất phát trễ (muộn) nhất là vào lúc 17:35 là của nhà xe Tài Thắng.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span> Câu hỏi: Review xe đi Đà Nẵng từ Đà Lạt nào có chất lượng tốt, xuất sắc, cao cấp nhất?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Những hãng xe đi Đà Lạt Đà Nẵng chất lượng tốt, xuất sắc, cao cấp nhất là nhà xe Thanh Thủy - Đà Lạt đi Đà Nẵng từ Đà Lạt với điểm chất lượng là 4.5/5 dựa trên 477 đánh giá của khách hàng).</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span> Câu hỏi: Có loại xe Đà Lạt Đà Nẵng dành cho cặp đôi, xe limousine phòng đôi không?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Hiện tại có 3 hãng xe khai thác dòng xe Limousine giường đôi trên tuyến đường này là xe Quang Dũng VIP Limousine, Tân Quang Dũng, Tân Kim Chi, bạn có thể tham khảo thêm thông tin và đặt vé các nhà xe này tại trang này: Xe giường nằm đôi Đà Lạt đi Đà Nẵng</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span> Câu hỏi: Các hãng xe nào khai thác dòng xe Limousine đi Đà Nẵng từ Đà Lạt?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Hiện tại có 7 hãng xe khai thác dòng xe Limousine trên tuyến đường này là xe Quốc Bảo, Thanh Thủy - Đà Lạt, Queen Cafe (Cam Ranh), An Phú Travel (Đà Lạt), Quang Dũng VIP Limousine, Tân Quang Dũng, Tân Kim Chi, bạn có thể tham khảo thêm thông tin và đặt vé các nhà xe này tại trang này: Xe limousine Đà Lạt đi Đà Nẵng</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span>Câu hỏi: Các hãng xe nào khai thác dòng xe giường nằm đi Đà Nẵng từ Đà Lạt?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Hiện tại có 7 hãng xe khai thác dòng xe giường nằm trên tuyến đường này là xe Tài Thắng, Quốc Bảo, Thanh Thủy - Đà Lạt, Queen Cafe (Cam Ranh), An Phú Travel (Đà Lạt), Khánh Nguyên, Ngọc Hùng Văn Nhân, bạn có thể tham khảo thêm thông tin và đặt vé các nhà xe này tại trang này: Xe giường nằm Đà Lạt đi Đà Nẵng</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span class="faq-icon">▼</span>Câu hỏi: Các hãng xe nào khai thác dòng xe ghế ngồi đi Đà Nẵng từ Đà Lạt?
            </button>
            <div class="faq-answer">
                <p>Trả lời: Hiện tại chưa có nhà xe nào có loại xe ghế ngồi khai thác tuyến Đà Lạt đi Đà Nẵng</p>
            </div>
        </div>
        

    </div>
   </div>
    
@endsection
