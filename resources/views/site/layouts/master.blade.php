<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('site.partials.head')
    <link type="text/css" rel="stylesheet" href="/site/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="/site/css/style.css">
    <link type="text/css" rel="stylesheet" href="/site/css/callbutton.css">
    <link rel="stylesheet" href="/site/css/jquery.magnific-popup.css" />

    <script src="/site/js/jquery.min.js"></script>

    @yield('css')

    <!-- Angular Js -->
    <script src="{{ asset('libs/angularjs/angular.js?v=222222') }}"></script>
    <script src="{{ asset('libs/angularjs/angular-resource.js') }}"></script>
    <script src="{{ asset('libs/angularjs/sortable.js') }}"></script>
    <script src="{{ asset('libs/dnd/dnd.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular-sanitize.js"></script>
    <script src="{{ asset('libs/angularjs/select.js') }}"></script>
    <script src="{{ asset('js/angular.js') }}?version={{ env('APP_VERSION', '1') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    @stack('scripts')
    <script>
        app.controller('AppController', function($rootScope, $scope, $interval, $compile) {
        })

        @if (Session::has('token'))
            localStorage.setItem('{{ env('prefix') }}-token', "{{ Session::get('token') }}")
        @endif
        @if (Session::has('logout'))
            localStorage.removeItem('{{ env('prefix') }}-token');
        @endif
        var CSRF_TOKEN = "{{ csrf_token() }}";
    </script>
</head>

<body ng-app="App" ng-controller="AppController">
    <!-- lodaer  -->
    <div class="loader-wrap">
        <div class="loader-item">
            <div class="cd-loader-layer" data-frame="25">
                <div class="loader-layer"></div>
            </div>
            <span class="loader"><img src="{{$config->favicon ? $config->favicon->path : 'https://via.placeholder.com/100x100'}}" alt=""></span>
        </div>
    </div>
    <!-- loader end  -->
    <!--  main   -->
    <div id="main">
        <!--  header  -->
        @include('site.partials.header')
        <!--  header end  -->
        @yield('content')
        <!--footer  -->
        @include('site.partials.footer')
        <!--footer end-->
    </div>
    <div onclick="window.location.href= 'tel:{{str_replace(' ', '', $config->hotline)}}'" class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:{{str_replace(' ', '', $config->hotline)}}" class="pps-btn-img">
                    <img src="/site/images/phone.png" alt="Gọi điện thoại" width="50">
                </a>
            </div>
        </div>
        <a href="tel:{{str_replace(' ', '', $config->hotline)}}">
        </a>
        <div class="hotline-bar"><a href="tel:{{str_replace(' ', '', $config->hotline)}}">
            </a><a href="tel:{{str_replace(' ', '', $config->hotline)}}">
                <div class="text-hotline">{{$config->hotline}}</div>
            </a>
        </div>

    </div>
    <div class="inner-fabs">
        <a target="blank" href="" class="fabs roundCool" id="challenges-fab"
            data-tooltip="Nhắn tin facebook">
            <img class="inner-fab-icon" src="/site/images/messenger-icon.png" alt="challenges-icon" border="0">
        </a>
        <a target="blank" href="https://zalo.me/{{str_replace(' ', '', $config->zalo)}}" class="fabs roundCool" id="chat-fab"
            data-tooltip="Nhắn tin Zalo">
            <img class="inner-fab-icon" src="/site/images/zalo.png" alt="chat-active-icon" border="0">
        </a>
    </div>
    <div class="fabs roundCool call-animation" id="main-fab">
        <img class="img-circle" src="/site/images/lienhe.png" alt="" width="135">
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="/site/js/plugins.js"></script>
    <script src="/site/js/scripts.js"></script>
    <script src="/site/js/callbutton.js"></script>
    <script src="/site/js/jquery.magnific-popup.min.js"></script>
    <script>
        if ($(".video-popup").length) {
            $(".video-popup").magnificPopup({
                type: "iframe",
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: true,

                fixedContentPos: false
            });
        }
    </script>
</body>

</html>