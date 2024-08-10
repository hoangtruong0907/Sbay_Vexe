<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKEditor 5 with Table Plugin</title>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesmobile.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" />
</head>
<body>

<div class="CMSPostpage__PostPage-sc-1mccuz3-1 hgcnFg">
        <div class="Layout__Container-vf1wbr-0 hCVqtJ layout-container CMSPostpage__Container-sc-1mccuz3-2 hYjWkQ">
            <div class="layout-content bg--white">
                <div class="ScrollList__Container-uvpsu3-0 ggXehi scroll-list-container ">
                @if(isset($blog))
                    <div class="scroll-list scroll-vertical-list">
                        
                        <div class="post-title">
                            <p class="base__Heading01-sc-1tvbuqk-4 iavTwq color--darkness">{{ $blog->title }}</p>
                            <img class="post-banner " data-src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/203/img_hero.png?v=71" src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/203/img_hero.png?v=71" alt="default-alt">
                        </div>
                        <div class="post-content">
                            <div class="color--darkness">
                                <p style="text-align:justify">Đáp ứng nhu cầu di chuyển dịp lễ 2/9, nhiều hãng xe khách đã bắt đầu triển khai kế hoạch mở bán vé xe lễ.&nbsp;Cùng Vexere&nbsp;cập nhật danh sách các hãng xe và tuyến đường đã mở bán qua bài viết sau đây nhé!</p>

                                <h3><strong>Các tuyến đường miền Nam</strong></h3>

                                <table border="1">
                                {!! $blog->content !!}
                                </table>

                            </div>
                        </div>
                            <!-- <div class="blog scroll-container" style="margin-bottom:100px;  ">
                                <div class="container item-card-list">
                                    <a href="vxr">
                                        <div class="card card-item">
                                            <img src="images/img_card.jpeg" alt="Profile Picture" class="card-image">
                                            <div class="card-content">
                                                <h2 class="card-title">John Doe</h2>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="vxr">
                                        <div class="card card-item">
                                            <img src="images/img_card.jpeg" alt="Profile Picture" class="card-image">
                                            <div class="card-content">
                                                <h2 class="card-title">John Doe</h2>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="vxr">
                                        <div class="card card-item">
                                            <img src="images/img_card.jpeg" alt="Profile Picture" class="card-image">
                                            <div class="card-content">
                                                <h2 class="card-title">John Doe</h2>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="vxr">
                                        <div class="card card-item">
                                            <img src="images/img_card.jpeg" alt="Profile Picture" class="card-image">
                                            <div class="card-content">
                                                <h2 class="card-title">John Doe</h2>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="vxr">
                                        <div class="card card-item">
                                            <img src="images/img_card.jpeg" alt="Profile Picture" class="card-image">
                                            <div class="card-content">
                                                <h2 class="card-title">John Doe</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="CMSPostpage__PostFooter-sc-1mccuz3-4 jvMYTT fixed-footer-button">
                                <div class="post-footer">
                                    <button type="button" class="ant-btn cta-button">
                                        <p class="base__ButtonLabel-sc-1tvbuqk-18 idyddq color--black">ĐẶT VÉ NGAY</p>
                                    </button>
                                </div>
                            </div> -->
                    </div>
                    @else
        <p>Blog post not found.</p>
    @endif

                </div>
            </div>


        </div>
</div>
</body>
</html>