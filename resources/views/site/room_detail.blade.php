@extends('site.layouts.master')

@section('title')
   {{ $room->name }} - Phòng và Phòng Suite - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ @$room->image_back->path ?? ''}}
@endsection

@section('css')
    <style>
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #272535;
            opacity: .4;
            z-index: 2;
        }

        .hero-section-scroll {
            position: absolute;
            width: 20px;
            height: 30px;
            z-index: 20;
            bottom: 70px;
            left: 50%;
            margin-left: -10px;
        }

        .hero-section-scroll:before {
            content: '';
            position: absolute;
            bottom: -70px;
            height: 40px;
            width: 1px;
            left: 50%;
            background: rgba(255, 255, 255, .2);
        }

        .mousey {
            float: left;
            width: 20px;
            height: 30px;
            border-radius: 6px;
            padding: 0 6px;
            border: 1px solid rgba(255, 255, 255, .7);
            box-sizing: border-box;
            position: relative;
            z-index: 10;
        }

        .scroller {
            position: relative;
            left: 50%;
            top: 6px;
            margin-left: -2px;
            width: 4px;
            height: 4px;
            background: #c4a676;
            border-radius: 4px;
            animation-name: scroll;
            animation-duration: 2.2s;
            animation-timing-function: cubic-bezier(.15, .41, .69, .94);
            animation-iteration-count: infinite;
        }

        @keyframes  scroll {
            0% {
                opacity: 0;
            }

            10% {
                transform: translateY(0);
                opacity: 1;
            }

            100% {
                transform: translateY(10px);
                opacity: 0;
            }
        }

        .dec-corner {
            border-color: rgba(255, 255, 255, .4);
        }

        .dc_lb {
            left: 30px;
            bottom: 30px;
            border-bottom: 1px dashed;
            border-left: 1px dashed;
            border-radius: 0 0 0 20px;
        }

        .dc_rb {
            right: 30px;
            bottom: 30px;
            border-bottom: 1px dashed;
            border-right: 1px dashed;
            border-radius: 0 0 20px 0;
        }

        .dc_rt {
            right: 30px;
            top: 90px;
            border-top: 1px dashed;
            border-right: 1px dashed;
            border-radius: 0 20px 0 0;
        }

        .dc_lt {
            left: 30px;
            top: 90px;
            border-top: 1px dashed;
            border-left: 1px dashed;
            border-radius: 20px 0 0 0;
        }

        .dec-corner {
            position: absolute;
            width: 70px;
            height: 70px;
            z-index: 10;
        }

        .wptb-page-heading .wptb-item--inner::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 50%;
            background: linear-gradient(to bottom, rgb(39 37 53 / 0%) 13%, rgba(64, 5, 5, 0.846) 65%);
            z-index: 1;
        }

        .wptb-page-heading .wptb-item--inner .container {
            width: min(100% - 25px, 1600px);
            margin-inline: auto;
            position: relative;
            z-index: 5;
        }

        .wptb-page-heading .wptb-item--inner .container h4 {
            color: #d6ad5b;
            font-style: italic;
            font-size: 18px;
            font-weight: 500;
            padding-bottom: 10px;
            position: relative;
            text-align: center;
            margin-bottom: 0;
        }
        .blog-details .wptb-project-info1 i {
            color: #d6ad5b;
        }

        @media  screen and (max-width: 991px) {
            .wptb-page-heading .wptb-item--inner{
                height: 40vh;
            }
            .dc_rt {
                top: 15px;
            }

            .dc_lt {
                top: 15px;
            }
        }
    </style>
    <style>
        @media (min-width: 1200px) {
            .c-book-expand {
                right: 18px;
                top: 150px;
            }
        }

        @media (min-width: 992px) {
            .c-book-expand {
                width: 70px;
                height: 70px;
                top: 101px;
            }
        }

        .c-book-expand {
            width: 140px;
            height: 50px;
            border: none;
            background-color: #b37a2d;
            position: fixed;
            z-index: 69;
            top: 91px;
            right: 15px;
            display: block;
            vertical-align: top;
            cursor: pointer;
            padding: 0;
            overflow: hidden;
            /* -webkit-transform: rotate(45deg); */
            /* transform: rotate(45deg); */
        }

        a.c-book-expand:hover {
            background-color: #b37a2d;
            -webkit-background-clip: unset;
        }

        @media (min-width: 992px) {
            .c-book-expand span {
                width: 70px;
                height: 70px;
                font-size: 14px;
                padding-top: 16px;
            }
        }

        .c-book-expand span {
            display: block;
            width: 140px;
            height: 50px;
            font-size: 16px;
            padding-top: 14px;
            /* padding-right: 17px; */
            text-transform: uppercase;
            line-height: normal;
            text-align: center;
            /* -webkit-transform: rotate(-45deg); */
            /* transform: rotate(-45deg); */
            color: #fff;
        }

        .c-book-expand span {
            font-weight: bold;
        }

        .c-book-expand span:after {
            content: "";
            position: absolute;
            z-index: 2;
            top: -40px;
            bottom: -40px;
            background: #fff;
            width: 10px;
            left: -10%;
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
            -webkit-filter: blur(12px);
            filter: blur(12px);
            -webkit-animation-name: item-float;
            animation-name: item-float;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            -webkit-animation-timing-function: linear;
        }

        @keyframes  item-float {
            0% {
                left: -20%;
            }

            100% {
                left: 120%;
            }
        }
    </style>
@endsection

@section('content')

    <!-- Page Header -->
    <div>
        <div class="wptb-page-heading">
            <div class="wptb-item--inner" style="background-image: url('{{ @$room->image_back->path ?? '' }}');">
                <div class="wptb-item-layer wptb-item-layer-one">
                    <img src="/site/images/circle.png" alt="img">
                </div>
                <div class="container">
                    <h4>Chúc bạn có thời gian vui vẻ tại khách sạn của chúng tôi</h4>
                    <h1 class="wptb-item--title ">{{ $room->name }}</h1>
                </div>
                <div class="overlay"></div>
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
        </div>
    </div>
    <!-- Details Content -->
    <section class="blog-details blog-details-box">
        <div class="container-fluid">
            <div class="blog-details-inner">
                <div class="post-content">
                    <div class="row">
                        <div class="col-xl-7 col-md-7 pe-xl-5 pe-md-4">
                            <div class="fulltext">
                                @foreach($room->galleries as $gallery)
                                    <figure class="block-gallery mb-3">
                                        <img class="w-100" src="{{ $gallery->image->path ?? '' }}" alt="img">
                                        <a class="wptb-image-popup" href="{{ $gallery->image->path ?? '' }}" data-fancybox="gallery">
                                            <i class="bi bi-arrows-fullscreen"></i>
                                        </a>
                                    </figure>
                                @endforeach
                            </div>
                        </div>
                        <!-- Service Side Info -->
                        <div class="col-xl-5 col-md-5 ps-xl-5 ps-md-4">
                            <div class="sidebar">
                                <div class="post-header">
                                    <h1 class="post-title fw-normal">Thông tin phòng</h1>
                                </div>
                                <div class="divider-line-hr my-4"></div>
                                <div class="wptb-project-info1 mb-0 border-0 bg-transparent">
                                    <div class="wptb--holder p-0">
                                        <div class="row">
                                            <div class="col-xxl-6">
                                                <div class="wptb--item border-0">
                                                    <div class="wptb--meta"><i class="fa-solid fa-crop"></i><label>Diện tích:</label>
                                                        <span>{{ $room->area }}</span></div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 mb-1 mt-xxl-0">
                                                <div class="wptb--item border-0">
                                                    <div class="wptb--meta"><i class="fa-regular fa-user"></i><label>Số người:</label>
                                                        <span>{{ $room->maximum_occupancy }}</span></div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6">
                                                <div class="wptb--item border-0">
                                                    <div class="wptb--meta"><i class="fas fa-bed"></i><label>Giường :</label> <span>{{ $room->bedrooms }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 mb-1 mt-xxl-0">
                                                <div class="wptb--item border-0">
                                                    <div class="wptb--meta"><i class="fa-solid fa-binoculars"></i><label>View:</label>
                                                        <span>{{ $room->view }}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-line-hr my-4"></div>
                                <div class="price">
                                    <b>{{ number_format($room->price) }} VNĐ</b>
                                </div>
                                <div class="fulltext">
                                    <div class="section-subtitle">
                                        {!! $room->description !!}
                                    </div>
                                </div>
                                <div class="wptb-item--button mt-2 mb-2">
                                    <a class="btn btn-two white" href="tel:{{ $config->hotline }}">
                                            <span class="btn-wrap">
                                                <span class="text-first">Liên hệ qua Hotline</span>
                                                <span class="text-second"> <i class="bi bi-telephone"></i> <i
                                                        class="bi bi-telephone"></i></span>
                                            </span>
                                    </a>
{{--                                    <a href="../dat-phong.html" class="btn btn-two creative text-uppercase mt-1" style="font-size: 12px;padding: 7px 12px;">--}}
{{--                                            <span class="btn-wrap">--}}
{{--                                                <span class="text-first">Book Room</span>--}}
{{--                                            </span>--}}
{{--                                    </a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Details Content -->
    <section class="wptb-blog-grid-one pb-0">
        <div class="container">
            <div class="row has-radius">
                <div class="col-lg-4 grid-item mt-3">
                    <div class="wptb-heading">
                        <div class="wptb-item--inner">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <h6 class="wptb-item--subtitle"><span>01 //</span> Danh mục phòng</h6>
                                    <h1 class="wptb-item--title mb-0">Các phòng khác<br>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    ul.option_project li {
                        list-style: none;
                        display: inline-block;
                         color: #585858 !important;
                    }


                    /* 1. Cho .wptb-item--inner dùng flex-column, lấp đầy chiều cao cha */
                    .wptb-item--inner {
                        display: flex;
                        flex-direction: column;
                        height: 100%;
                    }

                    /* 2. Cố định chiều cao khung ảnh (có thể tùy chỉnh cao thấp cho phù hợp design) */
                    .wptb-item--inner .wptb-item--image {
                        flex: 0 0 200px;      /* chiều cao cố định 200px, không giãn */
                        overflow: hidden;     /* ẩn phần vượt khung */
                    }

                    /* 3. Ép ảnh full-width, full-height trong khung, dùng object-fit để giữ tỉ lệ */
                    .wptb-item--inner .wptb-item--image img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;    /* cắt ảnh để lấp đầy khung, không bóp méo */
                    }

                    /* 4. Cho phần holder (chứa tiêu đề, meta) giãn đều, tạo khoảng cách dưới cùng */
                    .wptb-item--inner .wptb-item--holder {
                        flex: 1;              /* giãn chiếm khoảng trống còn lại */
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between; /* nếu muốn title/meta luôn được canh đều */
                    }

                    /* 5. (Nếu đang dùng Bootstrap) Đảm bảo hàng (row) stretch các cột cho cao bằng nhau */
                    .row.align-items-stretch {
                        /* thẻ .row có thể thêm class này để tự động căn đều cột */
                    }


                </style>
                @foreach($otherRooms as $item)
                    <div class="col-lg-4 grid-item mt-3">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image">
                                <a class="w-100" href="{{ route('front.getRoom', $item->slug) }}">
                                    <img src="{{ $item->image->path ?? '' }}" alt="img">
                                </a>
                            </div>
                            <div class="wptb-item--holder mt-1 mb-5">
                                <div class="wptb-item--meta">
                                    <h4><a href="{{ route('front.getRoom', $item->slug) }}">{{ $item->name }}</a>
                                    </h4>
                                    <ul class="option_project">
                                        <li class=""><b class="proce">{{ number_format($item->price) }}đ</b>
                                            |</li>
                                        <li>{{ $item->view }} |</li>
                                        <li>{{ $item->area }} |</li>
                                        <li>{{ $item->maximum_occupancy }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
    </script>
@endpush
