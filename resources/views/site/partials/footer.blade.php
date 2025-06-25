<div class="height-emulator"></div>
<footer class="main-footer">
    <div class="footer-inner">
        <div class="container">
            <!-- footer-widget-wrap -->
            <div class="footer-widget-wrap">
                <div class="footer-separator-wrap">
                    <div class="footer-separator"><span></span></div>
                </div>
                <div class="row">
                    <!-- footer-widget -->
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <div class="footer-widget-title">{{$config->short_name_company}}</div>
                            <div class="footer-widget-content" style="text-align: justify; color: #fff;">
                                <p>{!! $config->web_des !!}</p>
                                <a href="{{route('front.abouts')}}" class="footer-widget-content-link"><span>Xem thêm</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Thông Tin </div>
                            <div class="footer-widget-content">
                                <div class="footer-contacts footer-box">
                                    <ul>
                                        <li><span>Hotline :</span><a href="tel:{{str_replace(' ', '', $config->hotline)}}">{{$config->hotline}}</a> </li>
                                        <li><span>Email :</span><a
                                                href="mailto:{{$config->email}}">{{$config->email}}</a></li>
                                        <li><span>Địa chỉ : </span><a href="#">{{$config->address_company}}</a></li>
                                    </ul>
                                </div>
                                <a href="{{route('front.contact-us')}}" class="footer-widget-content-link"><span>Liên Hệ</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Chính sách & điều khoản</div>
                            <div class="footer-widget-content">
                                <div class="footer-list footer-box  ">
                                    <ul>
                                        <li><a href="#">Hướng dẫn đặt phòng</a></li>
                                        <li><a href="#">Chính sách bảo mật</a></li>
                                        <li><a href="#">Hỗ trợ khách hàng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-lg-4">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Vị trí</div>
                            {!! $config->location !!}
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                </div>
            </div>
            <!-- footer-widget-wrap end-->
        </div>
        <div class="footer-title-dec">{{$config->web_title}}</div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <a href="{{route('front.home-page')}}" class="footer-logo"><img src="{{$config->image ? $config->image->path : 'https://placehold.co/150x150'}}" alt=""></a>
            <div class="copyright">&#169; {{$config->web_title}} {{date('Y')}} . All rights reserved. </div>
            <div class="to-top"><span>Back To Top </span><i class="fal fa-angle-double-up"></i></div>
        </div>
    </div>
</footer>