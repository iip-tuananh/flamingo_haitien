@extends('site.layouts.master')

@section('title')
    Về chúng tôi - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{@$config->image->path ?? ''}}
@endsection

@section('css')

@endsection

@section('content')
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('/site/images/page-header-bg-4.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="/site/images/circle.png" alt="img">
            </div>
            <h1 class="wptb-item--title ">Về chúng tôi</h1>
        </div>
    </div>

    <section class="blog-details">
        <div class="container">
            <div class="wptb-heading mb-0">
                <div class="wptb-item--inner text-center">
                    <h6 class="wptb-item--subtitle"><span>01 //</span> Về chúng tôi</h6>
                    <h1 class="wptb-item--title lg">{{ $config->web_title }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 pe-md-5">
                    <div class="blog-details-inner">
                        <div class="post-content">
                            <div class="fulltext">
                                {!! $config->web_des !!}
                            </div>
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

    <script>
        $(function(){
            var $carousel = $('.testimonial-one__carousel');

            function equalizeHeights() {
                var maxH = 0;
                // reset
                $carousel.find('.testimonial-one__single').css('height','auto');
                // tính max
                $carousel.find('.testimonial-one__single').each(function(){
                    maxH = Math.max( maxH, $(this).outerHeight() );
                });
                // gán cho tất cả
                $carousel.find('.testimonial-one__single').css('height', maxH + 'px');
            }

            // Khi Owl khởi tạo xong hoặc refresh (thêm/resize)
            $carousel.on('initialized.owl.carousel refreshed.owl.carousel', function(){
                equalizeHeights();
            });

            // Force refresh 1 lần để khơi event trên (nếu bạn chỉ dùng data-owl-options)
            $carousel.trigger('refresh.owl.carousel');

            // Re-equalize mỗi khi window resize
            $(window).on('resize', equalizeHeights);
        });
    </script>




@endpush
