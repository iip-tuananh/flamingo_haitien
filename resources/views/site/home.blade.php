@extends('site.layouts.master')

@section('title')
    {{ $config->meta_title ? $config->meta_title : $config->web_title }}
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
    <!--  section  -->
    <div class="hero-wrap full-height dark-bg hidden-content">
        <div class="fs-slider full-height fl-wrap">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- swiper-slide-->
                    @foreach ($banners as $banner)
                        <div class="swiper-slide">
                            <div class="fs-slider-item hidden-content">
                                <div class="bg"
                                    data-bg="{{ $banner->image ? $banner->image->path : 'https://placehold.co/1920x1080' }}"
                                    data-swiper-parallax="40%"></div>
                                <div class="overlay"></div>
                                <div class="hero-title-container">
                                    <div class="section-title">
                                        <h4>{{ $banner->title }}</h4>
                                        <h2>{!! $banner->intro !!}</h2>
                                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                                        <a href="{{ $banner->link }}" class="stg_link custom-scroll-link">Chi Tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="hs_btn hs_btn_prev">
            <i class="fa-solid fa-caret-left"></i>
            <div class="hs_btn_wrap_preview">
                <div class="bg"></div>
            </div>
            <div class="hs_btn-dec">
                <div class="svg-corner svg-corner_white" style="bottom:-38px;left:  0; transform: rotate(180deg)">
                </div>
                <div class="svg-corner svg-corner_white" style="top:-38px;left:  0; transform: rotate(90deg)">
                </div>
            </div>
        </div>
        <div class="hs_btn hs_btn_next">
            <i class="fa-solid fa-caret-right"></i>
            <div class="hs_btn_wrap_preview">
                <div class="bg"></div>
            </div>
            <div class="hs_btn-dec">
                <div class="svg-corner svg-corner_white" style="bottom:-38px;right:  0; transform: rotate(-90deg)"></div>
                <div class="svg-corner svg-corner_white" style="top:-38px;right:  0; transform: rotate(0deg)">
                </div>
            </div>
        </div>
        <div class="tcs-pagination_wrap">
            <div class="svg-corner svg-corner_white" style="bottom:0;right:-38px; transform: rotate(90deg)"></div>
            <div class="svg-corner svg-corner_white" style="bottom:0;left:-38px; transform: rotate(0deg)"></div>
            <div class="tcs-pagination hero-slider-pag"></div>
        </div>
        <div class="hero-section-scroll hsc2">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
        </div>
    </div>
    <!-- section end  -->
    <!--content-->
    <div class="content">
        <!-- breadcrumbs-wrap  -->
        <div class="breadcrumbs-wrap">
            <div class="container">
                <a href="#">{{ $config->short_name_company ? $config->short_name_company : $config->meta_title }}</a>
            </div>
        </div>
        <!--breadcrumbs-wrap end  -->
        <!-- section   -->
        <div class="content-section" id="sec2">
            <div class="section-dec"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title text-align_left" style="margin-top: 50px;">
                            <h4>Về chúng tôi</h4>
                            <h2>{{ $config->short_name_company ? $config->short_name_company : $config->meta_title }}</h2>
                        </div>
                        <div class="text-block tb-sin">
                            <p class="has-drop-cap">{!! $aboutUs->intro !!}</p>
                            <a href="{{ route('front.abouts') }}" class="btn fl-btn ">Xem thêm</a>
                            <div class="dc_dec-item_left"><span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image-collge-wrap">
                            <div class="single-dec_img">
                                <img src="{{ $aboutUs->image ? $aboutUs->image->path : 'https://placehold.co/1920x1080' }}"
                                    alt="" class="respimg">
                            </div>
                            <div class="hero_images-collage-item"
                                style="width: 25%; bottom:  25px; z-index: 15; left: -70px;"><img
                                    src="{{ $aboutUs->image_front ? $aboutUs->image_front->path : 'https://placehold.co/1920x1080' }}"
                                    class="respimg" alt=""></div>
                            <div class="hero_images-collage-item" style="width: 45%; top: -5%; z-index: 11; right: -120px;">
                                <img src="{{ $aboutUs->image_back ? $aboutUs->image_back->path : 'https://placehold.co/1920x1080' }}"
                                    class="respimg" alt="">
                            </div>
                            <div class="dc_dec-item_right"><span></span></div>
                        </div>
                    </div>
                </div>
                {{-- <div class="sc-dec" style="left: -220px; bottom: -100px;"></div> --}}
            </div>
            <div class="content-dec2 fs-wrapper"></div>
            <div class="content-dec"><span></span></div>
        </div>
        <!-- section end  -->
        {{-- <div id="gallery-videos-demo">
            <!-- YouTube Video --->
            <a
                data-lg-size="1280-720"
                data-src="//www.youtube.com/watch?v=EIUJfXk3_3w"
                data-poster="https://img.youtube.com/vi/EIUJfXk3_3w/maxresdefault.jpg"
                data-sub-html="<h4>Puffin Hunts Fish To Feed Puffling | Blue Planet II | BBC Earth</h4><p>On the heels of Planet Earth II's record-breaking Emmy nominations, BBC America presents stunning visual soundscapes from the series' amazing habitats.</p>"
            >
                <img
                    width="300"
                    height="100"
                    class="img-responsive"
                    src="https://img.youtube.com/vi/EIUJfXk3_3w/maxresdefault.jpg"
                />
            </a>
        </div> --}}
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
                        <div class="bg" data-bg="{{ $aboutUs->video_image ? $aboutUs->video_image->path : 'https://placehold.co/1920x1080' }}"
                            style="background-image: url(&quot;{{ $aboutUs->video_image ? $aboutUs->video_image->path : 'https://placehold.co/1920x1080' }}&quot;);"></div>
                        <div class="overlay"></div>
                        <div class="promo-video">
                            <a href="{{ $aboutUs->video_url }}" class="video-popup">
                                <div class="video-box-btn color-bg" ><i
                                        class="fas fa-play"></i></div>
                            </a>
                            <h4>Video {{ $config->short_name_company ? $config->short_name_company : $config->web_title }}
                            </h4>
                        </div>
                    </div>

                    {{-- <div style="display:none;" id="video1" class="popup_video"
                        data-videolink="https://www.youtube.com/watch?v=f-j9Ciw-K7w&list=RDf-j9Ciw-K7w&start_radio=1">
                        <video class="lg-video-object lg-html5" controls="" preload="none">
                            <source src="https://www.youtube.com/watch?v=f-j9Ciw-K7w&list=RDf-j9Ciw-K7w&start_radio=1"
                                type="video/mp4">
                        </video>
                    </div> --}}
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
                                <p>Bếp nướng BBQ ngoài trời. Đầy đủ dụng cụ bếp: 03 Bếp từ, 03 nồi lẩu, tủ lạnh , ấm siêu
                                    tốc, nồi, bát đũa đủ cho 20 người.</p>
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
                                <p>Đường đến đây rất thuận tiện và dễ dàng. Có thể đến bằng xe máy, xe ô tô. Cách sân bay
                                    Sao Vàng (Thọ Xuân) 56km.</p>
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
                {{-- <div class="sc-dec" style="left: -220px; bottom: -100px;"></div> --}}
                {{-- <div class="sc-dec2" style="right:  220px; top: 50%;"></div> --}}
            </div>
        </div>
        <!-- section   -->
        <div class="content-section">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-uppercase">TIỆN ÍCH XUNG QUANH</h2>
                    <div class="section-separator "><span><i class="fa-thin fa-gem"></i></span></div>
                </div>
                <div class="cards-wrap">
                    <div class="row">
                        @foreach ($services as $key => $service)
                            <div class="col-lg-4">
                                <div class="content-inner fl-wrap">
                                    <div class="content-front">
                                        <div class="cf-inner">
                                            <div class="fs-wrapper">
                                                <div class="bg "
                                                    data-bg="{{ $service->image ? $service->image->path : 'https://placehold.co/600x400' }}">
                                                </div>
                                                <div class="overlay overlay-bold"></div>
                                            </div>
                                            <div class="inner">
                                                <h2>{{ $service->name }}</h2>
                                                {{-- <h4>{{ $service->description }}</h4> --}}
                                                <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span>
                                                </div>
                                            </div>
                                            <div class="serv-num">{{ $key + 1 }}.</div>
                                        </div>
                                    </div>
                                    <div class="content-back">
                                        <div class="cf-inner">
                                            <div class="inner">
                                                <div class="dec-icon">
                                                    {{-- <a href="{{ route('front.getServiceDetail', $service->slug) }}">
                                                    Xem chi tiết
                                                </a> --}}
                                                </div>
                                                <p>{!! $service->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!--card item -->
                    </div>
                    <div class="dc_dec-item_left"><span></span></div>
                    <div class="dc_dec-item_right"><span></span></div>
                </div>
                <a href="tel:{{ str_replace(' ', '', $config->hotline) }}" class="dwonload_btn">Liên Hệ Với Chúng Tôi</a>
                {{-- <div class="sc-dec" style="left: -220px; bottom: -100px;"></div> --}}
                {{-- <div class="sc-dec2" style="right: -220px; top: -100px;"></div> --}}
            </div>
            <div class="content-dec2 fs-wrapper"></div>
            <div class="content-dec"><span></span></div>
        </div>
        <!-- section end  -->
        <!-- section   -->
        <div class="content-section dark-bg no-padding hidden-content">
            <div class="row">
                <div class="st-gallery">
                    <div class="section-title">
                        <h4>Khám Phá</h4>
                        <h2>Không gian các phòng</h2>
                        <div class="section-separator sect_se_transparent"><span><i class="fa-thin fa-gem"></i></span>
                        </div>
                        <a href="" class="stg_link">Xem Tất Cả</a>
                    </div>
                    <div class="map-dec2"></div>
                    <div class="footer-separator fs_sin"><span></span></div>
                </div>
                <div class="col-lg-3"> </div>
                <div class="col-lg-9">
                    <div class="rooms-carousel-wrap">
                        <div class="rooms-carousel full-height">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!--rooms-carousel-item-->
                                    @foreach ($rooms as $room)
                                        <div class="swiper-slide">
                                            <div class="rooms-carousel-item full-height">
                                                <div class="bg-wrap bg-parallax-wrap-gradien fs-wrapper">
                                                    <div class="bg"
                                                        data-bg="{{ $room->image ? $room->image->path : 'https://placehold.co/600x400' }}"
                                                        data-swiper-parallax="10%">
                                                    </div>
                                                </div>
                                                <div class="rooms-carousel-item_container">
                                                    <h3><a href="">{{ $room->name }}</a> </h3>
                                                    {{-- <p>{!! $room->description !!}</p> --}}
                                                    <div class="room-card-details">
                                                        <ul>
                                                            @if ($room->area)
                                                                <li><i class="fa-light fa-crop"></i><span>{{ $room->area }}
                                                                    </span>
                                                                </li>
                                                            @endif
                                                            @if ($room->bedrooms)
                                                                <li><i class="fa-light fa-bed-front"></i><span>{{ $room->bedrooms }}
                                                                    </span>
                                                                </li>
                                                            @endif
                                                            @if ($room->maximum_occupancy)
                                                                <li><i class="fa-light fa-user"></i><span>{{ $room->maximum_occupancy }}
                                                                    </span>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                        {{-- <div class="grid-item_price">
                                                        <span>{{ number_format($room->price, 0, ',', '.') }} VNĐ/Night</span>
                                                    </div> --}}
                                                    </div>
                                                </div>
                                                {{-- <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to
                                                    Wislist</span></div> --}}
                                            </div>
                                        </div>
                                    @endforeach
                                    <!--rooms-carousel-item end-->
                                </div>
                            </div>
                        </div>
                        <div class="rc-controls-wrap">
                            <div class="rc-button rc-button-prev"><i class="fa-solid fa-caret-left"></i></div>
                            <div class="rc-button rc-button-next"><i class="fa-solid fa-caret-right"></i></div>
                        </div>
                        <div class="sc-controls fwc_pag2">
                            <div class="ss-slider-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section   -->

        <!-- section   -->
        {{-- <div class="content-section  parallax-section hidden-section dark-bg" data-scrollax-parent="true">
            <div class="bg par-elem" data-bg="./images/14.jpg" data-scrollax="properties: { translateY: '30%' }">
            </div>
            <div class="overlay overlay-bold"></div>
            <div class="container">
                <!-- inline-facts -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="80">80</div>
                            </div>
                        </div>
                        <h6>Phòng</h6>
                    </div>
                    <!-- inline-facts end -->
                    <!-- inline-facts  -->
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="30">30</div>
                            </div>
                        </div>
                        <h6>Nhân Viên</h6>
                    </div>
                    <!-- inline-facts end -->
                    <!-- inline-facts  -->
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="36000">36000</div>
                            </div>
                        </div>
                        <h6>Lượt Khách</h6>
                    </div>
                    <!-- inline-facts end -->
                    <!-- inline-facts  -->
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="10">10</div>
                            </div>
                        </div>
                        <h6>Năm Hoạt Động</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
            </div>
            <div class="dec-corner dc_lb"></div>
            <div class="dec-corner dc_rb"></div>
            <div class="dec-corner dc_rt"></div>
            <div class="dec-corner dc_lt"></div>
        </div> --}}
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
                                        <div class="testi-avatar"><img
                                                src="{{ $review->image ? $review->image->path : 'https://placehold.co/600x400' }}"
                                                alt=""></div>
                                        <div class="testimonilas-text">
                                            <div class="testimonilas-text-item">
                                                <h3>{{ $review->name }}</h3>
                                                <div class="star-rating" data-starrating="5"> </div>
                                                <p>{{ $review->message }}</p>
                                                <a href="#" class="testi-link"
                                                    target="_blank">{{ $review->position }}</a>
                                            </div>
                                            <span
                                                class="testi-number">{{ $key < 9 ? '0' . ($key + 1) : $key + 1 }}.</span>
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
        <div class="content-dec"><span></span></div>
    </div>
    <!--content end-->
@endsection
@push('scripts')

@endpush
