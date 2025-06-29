@extends('site.layouts.master')

@section('title')
    {{ $room->name }} - Phòng và Phòng Suite - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ $room->image_back ? $room->image_back->path : 'https://placehold.co/1920x1080' }}
@endsection

@section('css')
@endsection

@section('content')
    <!--  section  -->
    <div class="content-section parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem " data-bg="{{ $room->image_back ? $room->image_back->path : 'https://placehold.co/1920x1080' }}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h2>{{ $room->name }}</h2>
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
                <a href="{{route('front.home-page')}}">Trang chủ</a><span>{{ $room->name }}</span>
            </div>
        </div>
        <!--breadcrumbs-wrap end  -->
        <!-- section   -->
        <div class="content-section notp">
            <div class="section-dec"></div>
            <div class="content-dec2 fs-wrapper"></div>
            <!-- fw-carousel-wrap -->
            <div class="single-carousle-container">
                <div class="single-carousel-wrap ">
                    <!-- fw-carousel  -->
                    <div class="single-carousel   fl-wrap    lightgallery" data-mousecontrol="0">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- swiper-slide-->
                                <div class="swiper-slide  hov_zoom">
                                    <img src="{{ $room->image ? $room->image->path : 'https://placehold.co/600x400' }}" alt="">
                                    <a href="{{ $room->image ? $room->image->path : 'https://placehold.co/600x400' }}" class="box-media-zoom   popup-image"><i
                                            class="fal fa-search"></i></a>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide-->
                                @foreach ($room->galleries as $gallery)
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
                    <div class="fw-carousel-button-prev slider-button"><i class="fa-solid fa-caret-left"></i></div>
                    <div class="fw-carousel-button-next slider-button"><i class="fa-solid fa-caret-right"></i></div>
                    <div class="sc-controls fwc_pag">
                        <div class="ss-slider-pagination"></div>
                    </div>
                </div>
                <!-- fw-carousel-wrap end -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="dec-container">
                            <div class="dc_dec-item_left"><span></span></div>
                            <div class="text-block">
                                <div class="text-block-title">
                                    <h4>{{ $room->name }}</h4>
                                </div>
                                <div class="room-card-details rcd-single">
                                    <ul>
                                        @if ($room->area)
                                        <li><i class="fa-light fa-crop"></i><span>{{ $room->area }}</span></li>
                                        @endif
                                        @if ($room->maximum_occupancy)
                                        <li><i class="fa-light fa-user"></i><span>{{ $room->maximum_occupancy }} </span></li>
                                        @endif
                                        @if ($room->bedrooms)
                                        <li><i class="fa-light fa-bed-front"></i><span>{{ $room->bedrooms }}</span></li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="text-block-container">
                                    {!! $room->description !!}
                                </div>
                                <div class="tbc-separator"></div>
                                <div class="tbc_subtitle">Tiện ích phòng</div>
                                <div class="meg_aminites">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="meg_aminites_item"><i
                                                    class="fa-light fa-water-ladder"></i><span>Bể bơi</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="meg_aminites_item"><i
                                                    class="fa-light fa-baby-carriage"></i><span>Giường cho trẻ nhỏ</span></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="meg_aminites_item"><i class="fa-light fa-dryer"></i><span>
                                                    Máy giặt</span></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="meg_aminites_item"><i class="fa-light fa-wifi"></i><span>Miễn phí Wi-Fi</span></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="meg_aminites_item"><i
                                                    class="fa-light fa-air-conditioner"></i><span>Điều hòa</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="meg_aminites_item"><i
                                                    class="fa-light fa-refrigerator"></i><span>Tủ lạnh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tbc-separator"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="fix-bar-init">
                            <div class="fw-search-wrap">
                                <div class="fw-search-wrap-title">Đặt phòng</div>
                                <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                                <form class="custom-form">
                                    <fieldset>
                                        <div class="input-wrap">
                                            <label>Tên:</label>
                                            <input type="text" placeholder="Tên *" value="">
                                        </div>
                                        <div class="input-wrap">
                                            <label>Số điện thoại:</label>
                                            <input type="text" placeholder="Số điện thoại" value="">
                                        </div>
                                        <div class="date-container input-wrap">
                                            <label>Ngày đến:</label>
                                            <input type="text" id="res_date" name="resdate" value="">
                                        </div>
                                        <div class="quantity input-wrap ">
                                            <div class="quantity_title">Khách: </div>
                                            <div class="quantity-item">
                                                <input type="button" value="-" class="minus">
                                                <input type="text" name="quantity" title="Qty"
                                                    class="qty color-bg" data-min="1" data-max="10" data-step="1"
                                                    value="1">
                                                <input type="button" value="+" class="plus">
                                            </div>
                                        </div>
                                        <button class="searchform-submit bs_btn">Đặt phòng</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="limit-box"></div>
                <!--post-related-->
                <div class="post-related">
                    <div class="post-related_title">
                        <h6>Phòng khác</h6>
                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                    </div>
                    <!-- post-related -->
                    <div class=" row">
                        <!-- 1  -->
                        @foreach ($rooms as $room)
                        <div class="item-related col-lg-4">
                            <a href="room-single.html" class="item-related_img">
                                <img src="{{ $room->image ? $room->image->path : 'https://placehold.co/600x400' }}" class="respimg" alt="">
                                <div class="overlay"></div>
                                <span>Xem chi tiết</span>
                            </a>
                            <h3><a href="{{route('front.getRoom', $room->slug)}}">{{ $room->name }}</a></h3>
                            <div class="room-card-details">
                                <ul>
                                    @if ($room->area)
                                    <li><i class="fa-light fa-crop"></i><span>{{ $room->area }}</span></li>
                                    @endif
                                    @if ($room->maximum_occupancy)
                                    <li><i class="fa-light fa-user"></i><span>{{ $room->maximum_occupancy }}</span></li>
                                    @endif
                                    @if ($room->bedrooms)
                                    <li><i class="fa-light fa-bed-front"></i><span>{{ $room->bedrooms }}</span></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        <!-- 1 end-->
                    </div>
                </div>
                <!-- post-related  end-->
            </div>
        </div>
        <!-- section end  -->
        <div class="content-dec"><span></span></div>
    </div>
    <!--content end-->
@endsection

@push('scripts')
@endpush
