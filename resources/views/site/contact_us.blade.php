@extends('site.layouts.master')
@section('title')
    Liên hệ - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->web_des)) }}
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
            font-size: 14px;
        }
    </style>
@endsection

@section('content')
    <div class="content-section parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem "
            data-bg="{{ $banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/1920x1080' }}"
            data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h2>Liên hệ</h2>
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
    <div class="content" ng-controller="ContactPageController">
        <!-- breadcrumbs-wrap  -->
        <div class="breadcrumbs-wrap">
            <div class="container">
                <a href="{{ route('front.home-page') }}">Trang chủ</a><span>Liên hệ</span>
            </div>
        </div>
        <!--breadcrumbs-wrap end  -->
        <!-- section   -->
        <div class="content-section">
            <div class="content-dec2 fs-wrapper"></div>
            <div class="container">
                <!-- contacts-cards-wrap  -->
                <div class="contacts-cards-wrap">
                    <div class="dec-container">
                        <div class="text-block">
                            <div class="row">
                                <!-- contacts-card-item -->
                                <div class="col-lg-4">
                                    <div class="contacts-card-item">
                                        <i class="fa-light fa-location-dot"></i>
                                        <span>Địa chỉ</span>
                                        <p>{{ $config->address_company }}</p>
                                    </div>
                                </div>
                                <!-- contacts-card-item end-->
                                <!-- contacts-card-item -->
                                <div class="col-lg-4">
                                    <div class="contacts-card-item">
                                        <i class="fa-light fa-phone-rotary"></i>
                                        <span>Điện thoại</span>
                                        <p>{{ $config->hotline }}</p>
                                    </div>
                                </div>
                                <!-- contacts-card-item end-->
                                <!-- contacts-card-item -->
                                <div class="col-lg-4">
                                    <div class="contacts-card-item">
                                        <i class="fa-light fa-mailbox"></i>
                                        <span>Email</span>
                                        <p>{{ $config->email }}</p>
                                    </div>
                                </div>
                                <!-- contacts-card-item end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contacts-cards-wrap end   -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dec-container">
                            <div class="text-block">
                                <div class="text-block ">
                                    <div class="tbc_subtitle">Liên hệ với chúng tôi</div>
                                    <div class="tbc-separator"></div>
                                    <div class="contactform-wrap">
                                        <form class="comment-form" id="form-contact">
                                            <fieldset>
                                                <div id="message"></div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" name="name" id="name"
                                                            placeholder="Họ tên *" value="">
                                                        <div class="invalid-feedback d-block error" role="alert">
                                                            <span ng-if="errors && errors.name">
                                                                <% errors.name[0] %>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="email" id="email"
                                                            placeholder="Email *" value="">
                                                        <div class="invalid-feedback d-block error" role="alert">
                                                            <span ng-if="errors && errors.email">
                                                                <% errors.email[0] %>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Nội dung:"></textarea>
                                                <div class="invalid-feedback d-block error" role="alert">
                                                    <span ng-if="errors && errors.comments">
                                                        <% errors.comments[0] %>
                                                    </span>
                                                </div>
                                                <button class="commentssubmit" id="submit_cnt" ng-click="submitContact()">Gửi</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="map-container  mapC_vis">
                            {!! $config->location !!}
                        </div>
                    </div>
                </div>
                <div class="dc_dec-item_left"><span></span></div>
                <div class="dc_dec-item_right"><span></span></div>
            </div>
        </div>
        <!-- section end  -->
    </div>
    <!--content end-->
@endsection

@push('scripts')
    <script>
        app.controller('ContactPageController', function($rootScope, $scope, $sce, $interval) {
            $scope.errors = {};
            $scope.loading = false;
            $scope.submitContact = function() {
                var url = "{{ route('front.submitContact') }}";
                var data = jQuery('#form-contact').serialize();
                $scope.loading = true;
                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: data,
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.message);
                            jQuery('#form-contact')[0].reset();
                            $scope.errors = {};
                            $scope.loading = false;
                            $scope.$apply();
                        } else {
                            $scope.errors = response.errors;
                            toastr.warning(response.message);
                            $scope.loading = false;
                        }
                    },
                    error: function() {
                        toastr.error('Đã có lỗi xảy ra');
                        $scope.loading = false;
                    },
                    complete: function() {
                        $scope.$apply();
                    }
                });
            }
        })
    </script>
@endpush
