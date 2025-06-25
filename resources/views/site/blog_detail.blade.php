@extends('site.layouts.master')
@section('title')
    {{ $blog->name }} - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ @$blog->image->path ?? '' }}
@endsection

@section('css')

@endsection

@section('content')
    <div class="wptb-page-heading">
        <div class="wptb-item--inner"
             style=" background-image:
                /* Lớp mờ (ví dụ: đen mờ 50%) */
                linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
                /* Ảnh gốc */
                url('{{ @$categoryBlog->image->path ?? '' }}');
            background-size: cover;
            background-position: center;"
        >
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="/site/images/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">{{ $blog->name }}</h2>
        </div>
    </div>

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <!-- Service Navigation List -->

                <div class="col-lg-8 col-md-8 mb-5 mb-md-0 ps-md-0">
                    <div class="blog-details-inner">
                        <div class="post-content" style="text-align: justify">
                            <div class="">
                                <img src="{{ @$blog->image->path ?? '' }}" alt="img">
                            </div>
                            <div class="post-header">
                                <h1 class="post-title">{{ $blog->name }}</h1>
                            </div>
                            <div class="fulltext">
                                {!! $blog->body !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 pe-md-5">
                    <div class="sidebar">
                        <div class="sidenav">
                            <ul class="side_menu">
                                @foreach($otherBlogs as $item)
                                    <li class="menu-item ">
                                        <a href="{{ route('front.blogDetail', $item->slug) }}" class="d-flex align-items-center justify-content-between">
                                                <span>
                                                    {{ $item->name }}
                                                </span>
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@push('scripts')
    <script>
    </script>
@endpush
