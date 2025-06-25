@extends('site.layouts.master')

@section('title')
    {{ $categoryService->name }} - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ @$categoryService->image->path ?? '' }}
@endsection

@section('css')

@endsection

@section('content')
    <!-- Page Header -->
    <div class="wptb-page-heading">
        <div class="wptb-item--inner"
             style=" background-image:
                /* Lớp mờ (ví dụ: đen mờ 50%) */
                linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
                /* Ảnh gốc */
                url('{{ @$categoryService->image->path ?? '' }}');
            background-size: cover;
            background-position: center;"
        >
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="/site/images/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">{{ $categoryService->name }}</h2>
        </div>
    </div>
    <!-- Our Services -->
    <style>
        /* 1. Flex container cho hàng và các cột */
        .wptb-service--inner .row {
            display: flex;
            flex-wrap: wrap;
            margin: -15px; /* để cân bằng padding bên trong */
        }
        .wptb-service--inner .row > [class*="col-"] {
            padding: 15px;
            display: flex;      /* để inner card có thể stretch */
        }

        /* 2. Card chính stretch đều chiều cao */
        .wptb-blog-grid1 {
            display: flex;
            flex-direction: column;
            background: #fff;
            border: 1px solid #eee;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            flex: 1;            /* chiếm hết cao có thể */
        }

        /* 3. Ảnh cố định tỉ lệ 16:9, cover, ngang bằng nhau */
        .wptb-item--image {
            width: 100%;
            padding-top: 75%; /* tăng từ 56.25% (16:9) lên 75% (4:3) cho ảnh cao hơn */
            position: relative;
            overflow: hidden;
        }
        .wptb-item--image img {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            object-fit: cover;
        }

        /* 4. Nội dung bên trong card */
        .wptb-item--holder {
            /*display: flex;*/
            flex-direction: column;
            padding: 15px;
            flex: 1;              /* đẩy footer xuống dưới */
        }

        /* 5. Date style (tuỳ chỉnh nếu cần) */
        .wptb-item--date {
            font-size: 0.85rem;
            color: #999;
            margin-bottom: 8px;
        }

        /* 6. Tiêu đề (name) giới hạn 3 dòng với dấu "…" */
        .wptb-item--title a {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            text-decoration: none;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin-bottom: 8px;
        }

        /* 7. Mô tả (description) giới hạn 3 dòng với dấu "…" */
        .line_3 {
            font-size: 0.95rem;
            color: #555;
            flex: 1;             /* để đẩy button hoặc phần footer nếu có */

            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* 8. (Tuỳ chọn) Nút hoặc footer nếu có, luôn dính đáy card */
        .wptb-item--holder .btn {
            margin-top: 12px;
            align-self: flex-start;
        }

        .wptb-blog-grid1 .wptb-item--inner {
            border: none !important;
        }
        /* 9. Khoảng cách responsive */
        @media (max-width: 991px) {
            .wptb-service--inner .row > [class*="col-"] {
                flex: 0 0 50%;
            }
        }
        @media (max-width: 575px) {
            .wptb-service--inner .row > [class*="col-"] {
                flex: 0 0 100%;
            }
        }

    </style>
    <section>
        <div class="container">
            <div class="wptb-service--inner">
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                            <div class="wptb-blog-grid1 highlight wow fadeInLeft">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <a href="{{ route('front.getServiceDetail', $service->slug) }}" class="wptb-item-link">
                                            <img src="{{ $service->image->path ?? '' }}" alt="img">
                                        </a>
                                    </div>
                                    <div class="wptb-item--holder">
                                        <div class="wptb-item--date">
                                            {{ \Illuminate\Support\Carbon::parse($service->created_at)->format('d/m/Y') }}
                                        </div>
                                        <h4 class="wptb-item--title">
                                            <a href="{{ route('front.getServiceDetail', $service->slug) }}">{{ $service->name }}</a>
                                        </h4>
                                        <p class="line_3" title="{{ $service->description }}">{{ $service->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="wptb-pagination-wrap text-center">

            </div>
        </div>
    </section>

@endsection

@push('scripts')


@endpush
