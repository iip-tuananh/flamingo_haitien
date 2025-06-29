@extends('site.layouts.master')
@section('title')
    {{ $categoryBlog->name }} - {{ $config->web_title }}
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
        <div class="bg par-elem "
            data-bg="{{ $banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/1920x1080' }}"
            data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                {{-- <h4>{{ $categoryBlog->name }}</h4> --}}
                <h2>{{ $categoryBlog->name }}</h2>
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
                <a href="{{ route('front.home-page') }}">Trang chủ</a><span>{{ $categoryBlog->name }}</span>
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
                                    <div class="post-items">
                                        <!-- post-item-->
                                        @foreach ($blogs as $blog)
                                            <div class="post-item">
                                                <div class="post-item_wrap">
                                                    <div class="post-item_media">
                                                        <a href="{{ route('front.blogDetail', $blog->slug) }}">
                                                            <img src="{{ $blog->image ? $blog->image->path : 'https://placehold.co/600x400' }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-item_content">
                                                        <h3><a
                                                                href="{{ route('front.blogDetail', $blog->slug) }}">{{ $blog->name }}</a>
                                                        </h3>
                                                        <div class="room-card-details">
                                                            <ul>
                                                                <li><i
                                                                        class="fa-light fa-calendar-days"></i><span>{{ $blog->created_at->format('d/m/Y') }}</span>
                                                                </li>
                                                                <li><i class="fa-light fa-user"></i><span>By Admin</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <p>{!! $blog->intro !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- post-item end-->
                                    </div>
                                </div>
                            </div>
                            <!-- pagination-->
                            {{ $blogs->links() }}
                            <!-- pagination end-->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- main-sidebar -->
                        <div class="main-sidebar fixed-bar">
                            <!-- main-sidebar-widget-->
                            <div class="main-sidebar-widget">
                                <div class="search-widget">
                                    <form action="#">
                                        <input name="se" id="se" type="text" class="search-inpt-item"
                                            placeholder="Search.." value="Search...">
                                        <button class="search-submit color-bg" id="submit_btn"><i
                                                class="fa-light fa-magnifying-glass"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <!-- main-sidebar-widget end-->
                            <!-- main-sidebar-widget-->
                            <div class="main-sidebar-widget">
                                <h3>Bài viết gần đây</h3>
                                <div class="recent-post-widget">
                                    <ul>
                                        @foreach ($newBlogs as $blog)
                                            <li>
                                                <div class="recent-post-img"><a
                                                        href="{{ route('front.blogDetail', $blog->slug) }}"><img
                                                            src="{{ $blog->image ? $blog->image->path : 'https://placehold.co/100x100' }}"
                                                            alt=""></a></div>
                                                <div class="recent-post-content">
                                                    <h4><a
                                                            href="{{ route('front.blogDetail', $blog->slug) }}">{{ $blog->name }}</a>
                                                    </h4>
                                                    <div class="recent-post-opt">
                                                        <span
                                                            class="post-date">{{ $blog->created_at->format('d/m/Y') }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- main-sidebar-widget end-->
                            <!-- main-sidebar-widget-->
                            <div class="main-sidebar-widget">
                                <h3>Danh mục</h3>
                                <div class="category-widget">
                                    <ul class="cat-item">
                                        @foreach ($categories as $category)
                                            <li><a
                                                    href="{{ route('front.blogs', $category->slug) }}">{{ $category->name }}</a><span>{{ $category->posts->count() }}</span>
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
        <!-- section end  -->
    </div>
    <!--content end-->
@endsection

@push('scripts')
@endpush
