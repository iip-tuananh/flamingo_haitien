@extends('site.layouts.master')

@section('title')
    Về chúng tôi - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->web_des)) }}
@endsection
@section('image')
    {{ $banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/1920x1080' }}
@endsection

@section('css')
@endsection

@section('content')
    <div class="content-section parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem " data-bg="{{ $banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/1920x1080' }}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h4>Về chúng tôi</h4>
                <h2>{{ $aboutUs->title }}</h2>
                <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
            </div>
        </div>
        <div class="hero-section-scroll">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
        </div>
        <div class="dec-corner dc_lb"></div>
        <div class="dec-corner dc_rb"></div>
        <div class="dec-corner dc_rt"></div>
        <div class="dec-corner dc_lt"></div>
    </div>
    <!-- section end  -->
    <!--content-->
    <div class="content">
        <!-- breadcrumbs-wrap  -->
        <div class="breadcrumbs-wrap">
            <div class="container">
                <a href="{{route('front.home-page')}}">Trang chủ</a><span>Về chúng tôi</span>
            </div>
        </div>
        <!--breadcrumbs-wrap end  -->
        <!-- section   -->
        <div class="content-section">
            <div class="section-dec"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title text-align_left" style="margin-top: 50px;">
                            <h4>Về chúng tôi</h4>
                            <h2>{{ $aboutUs->title }}</h2>
                        </div>
                        <div class="text-block tb-sin">
                            <p class="has-drop-cap">
                                {!! $aboutUs->intro !!}
                            </p>
                            <div class="dc_dec-item_left"><span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-collge-wrap">
                            <div class="main-iamge">
                                <img src="{{ $aboutUs->image ? $aboutUs->image->path : 'https://placehold.co/1920x1080' }}" class="respimg" alt="">
                            </div>
                            <div class="dc_dec-item_right"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-dec2 fs-wrapper"></div>
            <div class="content-dec"><span></span></div>
        </div>
        <!-- section end  -->
        <!-- section   -->
        <div class="content-section dark-bg hidden-section  wide-section" data-scrollax-parent="true">
            <div class="bg" data-bg="/site/images/bg-25.jpg" data-scrollax="properties: { translateY: '30%' }"
                style="background-image: url(&quot;/site/images/bg-25.jpg&quot;); transform: translateZ(0px) translateY(24.7098%);">
            </div>
            <div class="overlay overlay-bold"></div>
            <div class="dec-corner dc_rt"></div>
            <div class="dec-corner dc_lt"></div>
            <div class="container">
                <div class="wide_section-title">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Đôi chút thông tin và dịch vụ của chúng tôi</h5>
                            <h3>Đặt ngay để có trải nghiệm tuyệt vời</h3>
                        </div>
                    </div>
                </div>
                <!--boxed-container-->
                <div class="boxed-container" style="height: 400px;">
                    <div class="boxed-container-wrap">
                        <div class="bg" data-bg="images/bg/6.jpg"
                            style="background-image: url(&quot;images/bg/6.jpg&quot;);"></div>
                        <div class="overlay"></div>
                        <div class="promo-video">
                            <a href="https://www.youtube.com/watch?v=OzUkvzyBttA" class="video-popup">
                                <div class="video-box-btn color-bg" ><i
                                        class="fas fa-play"></i></div>
                            </a>
                            <h4>Video {{ $config->short_name_company ? $config->short_name_company : $config->web_title }}
                            </h4>
                        </div>
                    </div>

                    <div style="display:none;" id="video1" class="popup_video"
                        data-videolink="https://www.youtube.com/watch?v=f-j9Ciw-K7w&list=RDf-j9Ciw-K7w&start_radio=1">
                        <video class="lg-video-object lg-html5" controls="" preload="none">
                            <source src="https://www.youtube.com/watch?v=f-j9Ciw-K7w&list=RDf-j9Ciw-K7w&start_radio=1"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
                <!--boxed-container end-->
                <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                <!--aminites-cards-wrap-->
                <div class="aminites-cards-wrap">
                    <div class="row">
                        <!--aminites-card-item-->
                        <div class="col-lg-3">
                            <div class="aminites-card-item">
                                <i class="fa-thin fa-alarm-clock"></i>
                                <h4>Thời gian check in/out</h4>
                                <p>Thời gian check in: 14:00</p>
                                <p>Thời gian check out: 12:00</p>
                                <div class="tbc-separator"></div>
                                <span class="aci_num">01.</span>
                            </div>
                        </div>
                        <!--aminites-card-item end-->
                        <!--aminites-card-item-->
                        <div class="col-lg-3">
                            <div class="aminites-card-item">
                                <i class="fa-thin fa-circle-parking"></i>
                                <h4>Bãi đậu xe</h4>
                                <p>Đỗ xe ô tô miễn phí</p>
                                <div class="tbc-separator"></div>
                                <span class="aci_num">02.</span>
                            </div>
                        </div>
                        <!--aminites-card-item end-->
                        <!--aminites-card-item-->
                        <div class="col-lg-3">
                            <div class="aminites-card-item">
                                <i class="fa-thin fa-vacuum"></i>
                                <h4>Dịch vụ phòng</h4>
                                <p>Phòng luôn trong tình trạng sạch sẽ và được bảo trì định kỳ.</p>
                                <div class="tbc-separator"></div>
                                <span class="aci_num">03.</span>
                            </div>
                        </div>
                        <!--aminites-card-item end-->
                        <!--aminites-card-item-->
                        <div class="col-lg-3">
                            <div class="aminites-card-item">
                                <i class="fa-thin fa-wifi"></i>
                                <h4>Wifi</h4>
                                <p>Wifi miễn phí</p>
                                <div class="tbc-separator"></div>
                                <span class="aci_num">04.</span>
                            </div>
                        </div>
                        <!--aminites-card-item end-->
                        <!--aminites-card-item-->
                        <div class="col-lg-3">
                            <div class="aminites-card-item">
                                <i class="fa-light fa-croissant"></i>
                                <h4>Dịch vụ ăn uống</h4>
                                <p>Bếp nướng BBQ ngoài trời. Đầy đủ dụng cụ bếp: 03 Bếp từ, 03 nồi lẩu, tủ lạnh , ấm siêu tốc, nồi, bát đũa đủ cho 20 người.</p>
                                <div class="tbc-separator"></div>
                                <span class="aci_num">05.</span>
                            </div>
                        </div>
                        <!--aminites-card-item end-->
                        <!--aminites-card-item-->
                        <div class="col-lg-3">
                            <div class="aminites-card-item">
                                <i class="fa-thin fa-bed"></i>
                                <h4>Tiên nghi</h4>
                                <p>Đầy đủ các thiết bị: máy sấy tóc , điều hòa, tivi. Có loa và mic hát karaoke.</p>
                                <div class="tbc-separator"></div>
                                <span class="aci_num">06.</span>
                            </div>
                        </div>
                        <!--aminites-card-item end-->
                        <!--aminites-card-item-->
                        <div class="col-lg-3">
                            <div class="aminites-card-item">
                                <i class="fa-thin fa-car"></i>
                                <h4>Giao thông</h4>
                                <p>Đường đến đây rất thuận tiện và dễ dàng. Có thể đến bằng xe máy, xe ô tô. Cách sân bay Sao Vàng (Thọ Xuân) 56km.</p>
                                <div class="tbc-separator"></div>
                                <span class="aci_num">07.</span>
                            </div>
                        </div>
                        <!--aminites-card-item end-->
                        <!--aminites-card-item-->
                        <div class="col-lg-3">
                            <div class="aminites-card-item">
                                <i class="fa-thin fa-user-tie"></i>
                                <h4>Quản lý</h4>
                                <p>Quản gia hỗ trợ 24/7 bất cứ khi nào khách hàng cần</p>
                                <div class="tbc-separator"></div>
                                <span class="aci_num">08.</span>
                            </div>
                        </div>
                        <!--aminites-card-item end-->
                    </div>
                    <div class="dc_dec-item_left"><span></span></div>
                    <div class="dc_dec-item_right"><span></span></div>
                </div>
                <!--aminites-cards-wrap end-->
            </div>
        </div>
        <!-- section end  -->
        <!-- section   -->
        <div class="content-section">
            <div class="container">
                <div class="team-container">
                    <div class="dec-container">
                        <div class="text-block">
                            <div class="row">
                                <div class="col-lg-12 text-left" style="text-align: left; font-size: 16px;">
                                    {!! $aboutUs->service_description !!}
                                </div>
                            </div>
                        </div>
                        <div class="dc_dec-item_left"><span></span></div>
                        <div class="dc_dec-item_right"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="content-dec2 fs-wrapper"></div>
        </div>
        <!-- section end  -->
        <!-- section   -->
        <div class="content-section dark-bg parallax-section no-padding">
            <div class="row">
                <div class="st-gallery">
                    <div class="section-title">
                        <h4>Đặt ngay để có trải nghiệm tuyệt vời</h4>
                        <h2>Thư viện ảnh</h2>
                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                    </div>
                    <div class="map-dec2"></div>
                </div>
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                    <!-- fw-carousel-wrap -->
                    <div class="single-carousle-container2">
                        <div class="single-carousel-wrap2">
                            <!-- fw-carousel  -->
                            <div class="single-carousel2   fl-wrap    lightgallery" data-mousecontrol="0">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- swiper-slide-->
                                        @foreach ($galleries as $gallery)
                                        <div class="swiper-slide hov_zoom">
                                            <img src="{{ $gallery->image ? $gallery->image->path : 'https://placehold.co/600x400' }}" alt="">
                                            <a href="{{ $gallery->image ? $gallery->image->path : 'https://placehold.co/600x400' }}" class="box-media-zoom   popup-image"><i
                                                    class="fal fa-search"></i></a>
                                        </div>
                                        @endforeach
                                        <!-- swiper-slide end-->
                                    </div>
                                </div>
                            </div>
                            <!-- fw-carousel end -->
                            <div class="fw-carousel-button-prev slider-button"><i class="fa-solid fa-caret-left"></i>
                            </div>
                            <div class="fw-carousel-button-next slider-button"><i class="fa-solid fa-caret-right"></i>
                            </div>
                            <div class="sc-controls fwc-contr fwc_pag">
                                <div class="ss-slider-pagination"></div>
                            </div>
                        </div>
                        <!-- fw-carousel-wrap end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- section end  -->
        <!-- section   -->
        <div class="content-section">
            <div class="container  ">
                <div class="section-title">
                    <h4>Đánh giá</h4>
                    <h2>Khách Hàng Nói Gì?</h2>
                    <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                </div>
                <div class="sc-dec3" style="left: 40%; bottom: -200px;"></div>
            </div>
            <div class="testimonilas-carousel-wrap">
                <div class="tc-button tc-button-next"><i class="fas fa-caret-right"></i></div>
                <div class="tc-button tc-button-prev"><i class="fas fa-caret-left"></i></div>
                <div class="testimonilas-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--testi-item-->
                            @foreach ($reviews as $key => $review)
                            <div class="swiper-slide">
                                <div class="testi-item">
                                    <div class="testi-avatar"><img src="{{ $review->image ? $review->image->path : 'https://placehold.co/600x400' }}" alt=""></div>
                                    <div class="testimonilas-text">
                                        <div class="testimonilas-text-item">
                                            <h3>{{ $review->name }}</h3>
                                            <div class="star-rating" data-starrating="5"> </div>
                                            <p>{{ $review->message }}</p>
                                            <a href="#" class="testi-link" target="_blank">{{ $review->position }}</a>
                                        </div>
                                        <span class="testi-number">{{ $key < 9 ? '0' . ($key + 1) : $key + 1 }}.</span>
                                        <div class="testi-item-dec fs-wrapper"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--testi-item end-->
                        </div>
                    </div>
                </div>
                <div class="tcs-pagination tcs-pagination_init"></div>
            </div>
            <div class="content-dec2 fs-wrapper"></div>
        </div>
        <!-- section end  -->
    </div>
    <!--content end-->
@endsection

@push('scripts')
@endpush
