<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('site.partials.head')
    <link type="text/css" rel="stylesheet" href="/site/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="/site/css/style.css">
    <link type="text/css" rel="stylesheet" href="/site/css/callbutton.css">
</head>

<body>
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
    <script src="/site/js/jquery.min.js"></script>
    <script src="/site/js/plugins.js"></script>
    <script src="/site/js/scripts.js"></script>
    <script src="/site/js/callbutton.js"></script>
</body>

</html>
