@extends('site.layouts.master')
@section('title')
    Liên hệ - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ @$config->image->path ?? '' }}
@endsection

@section('css')
<style>
    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #dc3545;
    }
</style>
@endsection

@section('content')
    <section class="wptb-contact-form style1 bg-image-2" style="background-image: url('/site/images/bg-9.jpg');" ng-controller="AboutPage">
        <div class="wptb-item-layer both-version">
            <img src="/site/images/texture-2.png" alt="texture-2">
            <img src="/site/images/texture-2-light.png" alt="texture-2-light">
        </div>
        <div class="container">
            <div class="wptb-form--wrapper">
                <div class="wptb-heading">
                    <div class="wptb-item--inner text-center">
                        <h1 class="wptb-item--title">Liên hệ với chúng tôi</h1>
                        <div class="wptb-item--description">Chúng tôi sẵn sàng lắng nghe và hỗ trợ mọi thắc mắc từ bạn</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form class="wptb-form" id="form-contact">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Họ tên*" required>
                                            <div class="invalid-feedback d-block" ng-if="errors['name']"><% errors['name'][0] %></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-4">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Số điện thoại*">
                                            <div class="invalid-feedback d-block" ng-if="errors['phone']"><% errors['phone'][0] %></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mb-4">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Tin nhắn"></textarea>
                                            <div class="invalid-feedback d-block" ng-if="errors['message']"><% errors['message'][0] %></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="wptb-item--button text-center">
                                            <button class="btn white-opacity creative" type="button" ng-click="submitContact()">
								  <span class="btn-wrap">
								  <span class="text-first">Gửi tin nhắn</span>
								  </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="wptb-office-address mr-top-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-phone"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Hotline</h3>
                                    <p class="wptb-item--description">{{ $config->hotline }}</p>
                                    <a href="tel:0927 989 689" class="wptb-item--link">Call Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Email</h3>
                                    <p class="wptb-item--description">
                                        <a href="mailto:{{ $config->email }}">{{ $config->email }}</a>
                                    </p>
                                    <a href="mailto:{{ $config->email }}" class="wptb-item--link">Send Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon">Z</div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Zalo</h3>
                                    <a  target="_blank" href="https://zalo.me/{{ preg_replace('/\s+/', '', $config->zalo) }}" class="wptb-item--link">Send Message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-youtube"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Youtube</h3>
                                    <p class="wptb-item--description"></p>
                                    <a target="_blank" href="{{ $config->youtube }}" class="wptb-item--link">View Channel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-facebook"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Facebook</h3>
                                    <p class="wptb-item--description"></p>
                                    <a target="_blank" href="{{ $config->facebook }}" class="wptb-item--link">Visit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Địa chỉ</h3>
                                    <a target="_blank" href="{{$config->google_map}}" class="wptb-item--link">View Map</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="gmapbox wow fadeInUp">
        {!! $config->location !!}
    </div>
@endsection

@push('scripts')
    <script>
        app.controller('AboutPage', function ($rootScope, $scope, $sce, $interval) {
            $scope.errors = [];
            $scope.submitContact = function () {
                var url = "{{route('front.submitContact')}}";
                var data = jQuery('#form-contact').serialize();
                $scope.loading = true;
                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: data,
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message);
                            jQuery('#form-contact')[0].reset();
                            $scope.errors = [];
                            $scope.$apply();
                        } else {
                            $scope.errors = response.errors;
                            toastr.warning(response.message);
                        }
                    },
                    error: function () {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.loading = false;
                        $scope.$apply();
                    }
                });
            }
        })

    </script>
@endpush
