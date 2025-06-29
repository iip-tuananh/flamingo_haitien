@extends('site.layouts.master')

@section('title')
    Tiện ích xung quanh
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->web_des)) }}
@endsection
@section('image')
    {{ $banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/1920x1080' }}
@endsection

@section('css')
<style>
    .gallery-item img{
        height: 280px;
    }
    @media (max-width: 768px) {
        .gallery-item img{
            height: 200px;
        }
    }
</style>
@endsection

@section('content')
    <!--  section  -->
    <div class="content-section parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem " data-bg="{{ $banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/1920x1080' }}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h2>Tiện ích</h2>
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
                <a href="{{route('front.home-page')}}">Trang chủ</a><span>Tiện ích</span>
            </div>
        </div>
        <!--breadcrumbs-wrap end  -->
        <!-- section   -->
        <div class="content-section">
            <div class="content-dec2 fs-wrapper"></div>
            {{-- <div class="section-dec"></div> --}}
            <div class="container">
                <div class="dec-container">
                    <div class="dc_dec-item_left"><span></span></div>
                    <div class="dc_dec-item_right"><span></span></div>
                    <div class="text-block">
                        <!-- gallery start -->
                        <div class="gallery-items grid-big-pad  lightgallery  ">
                            <!-- gallery-item-->
                            @foreach ($services as $service)
                            <div class="gallery-item desserts">
                                <div class="grid-item-holder hov_zoom">
                                    <img src="{{ $service->image ? $service->image->path : 'https://placehold.co/600x400' }}" alt="">
                                    <a href="{{ $service->image ? $service->image->path : 'https://placehold.co/600x400' }}" class="box-media-zoom   single-popup-image"><i
                                            class="fa-light fa-magnifying-glass"></i></a>
                                </div>
                                <div class="grid-item-details">
                                    <h3><a href="{{route('front.getServiceDetail', $service->slug)}}">{{ $service->name }}</a> </h3>
                                    <p>{!! $service->description !!}</p>
                                    <div class="grid-item_price">
                                    </div>
                                    <a href="{{route('front.getServiceDetail', $service->slug)}}" class="gid_link"><span>Xem chi tiết</span> <i
                                            class="fa-light fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                            @endforeach
                            <!-- gallery-item end-->
                        </div>
                    </div>
                </div>
                <!-- pagination-->
                {{$services->links()}}
                <!-- pagination end-->
            </div>
        </div>
        <!-- section end  -->
    </div>
    <!--content end-->
@endsection

@push('scripts')
@endpush
