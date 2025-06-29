@extends('site.layouts.master')

@section('title')
    {{ $service->name }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($service->description)) }}
@endsection
@section('image')
    {{ $service->image ? $service->image->path : 'https://placehold.co/1920x1080' }}
@endsection

@section('css')

@endsection

@section('content')
    <!--  section  -->
    <div class="content-section parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem " data-bg="{{ $service->image ? $service->image->path : 'https://placehold.co/1920x1080' }}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h4>Tiện ích</h4>
                <h2>{{ $service->name }}</h2>
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
                <a href="{{ route('front.home-page') }}">Trang chủ</a><a href="{{ route('front.services') }}">Tiện ích</a><span>{{ $service->name }}</span>
            </div>
        </div>
        <!--breadcrumbs-wrap end  -->
        <!-- section   -->
        <div class="content-section">
            {{-- <div class="section-dec"></div> --}}
            <div class="content-dec2 fs-wrapper"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="post-container">
                            <div class="dec-container">
                                <div class="text-block">
                                    <div class="text-block post-single_tb">
                                        <div class="text-block-container">
                                            <div class="tbc_subtitle">{{ $service->name }}</div>
                                            {!! $service->content !!}
                                        </div>
                                        <div class="tbc-separator"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- main-sidebar -->
                        <div class="main-sidebar fixed-bar">
                            <!-- main-sidebar-widget-->
                            <div class="main-sidebar-widget">
                                <h3>Bài viết liên quan</h3>
                                <div class="recent-post-widget">
                                    <ul>
                                        @foreach ($otherServices as $service)
                                        <li>
                                            <div class="recent-post-img"><a href="{{route('front.getServiceDetail', $service->slug)}}"><img src="{{ $service->image ? $service->image->path : 'https://placehold.co/100x100' }}"
                                                        alt=""></a></div>
                                            <div class="recent-post-content">
                                                <h4><a href="{{route('front.getServiceDetail', $service->slug)}}">{{ $service->name }}</a></h4>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- main-sidebar-widget end-->
                        </div>
                        <!-- main-sidebar end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--content end-->
@endsection

@push('scripts')
@endpush
