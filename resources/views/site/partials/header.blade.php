<header class="main-header">
    <div class="container">
        <!--  header-top -->
        <div class="header-top  fl-wrap">
            <div class="header-top_contacts"><a href="tel:{{str_replace(' ', '', $config->hotline)}}"><span>Hotline:</span> {{$config->hotline}}</a><a
                    href="{{ $config->google_map }}"><span>Địa chỉ:</span> {{$config->address_company}}</a></div>

            {{-- <div class="lang-wrap"><a href="#" class="act-lang">VI</a><span>/</span><a
                    href="#">EN</a></div> --}}
        </div>
        <!--  header-top end  -->
        <div class="nav-holder-wrap init-fix-header  fl-wrap">
            <a href="{{route('front.home-page')}}" class="logo-holder"><img src="{{$config->image ? $config->image->path : 'https://placehold.co/150x150'}}" alt=""></a>
            <!--  navigation -->
            <div class="nav-holder main-menu">
                <nav>
                    <ul>
                        <li>
                            <a href="{{route('front.home-page')}}">Trang Chủ</a>
                            <!--second level -->
                        </li>
                        <li><a href="">Về Chúng Tôi</a></li>
                        <li>
                            <a href="#">Phòng<i class="fas fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <li><a href="">Loại Phòng 1</a></li>
                                <li><a href="">Loại Phòng 2</a></li>
                                <li><a href="">Loại Phòng 3</a></li>

                            </ul>
                            <!--second level end-->
                        </li>
                        <li><a href="">Tiện ích</a></li>
                        <li><a href="">Tin Tức</a></li>
                        <li><a href="{{route('front.contact-us')}}">Liên Hệ</a></li>
                    </ul>
                </nav>
            </div>
            <!-- navigation  end -->
            <div class="serach-header-btn_wrap">
                <a href="" class="serach-header-btn"><i class="fa-light fa-magnifying-glass"></i>
                    <span>Đặt Phòng Ngay</span></a>
            </div>
            <!-- nav-button-wrap-->
            <div class="nav-button-wrap">
                <div class="nav-button">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <!-- nav-button-wrap end-->
            <!-- share-wrapper -->
            <div class="share-wrapper isShare">
                <div class="share-container fl-wrap"></div>
            </div>
            <!-- share-wrapper-end -->
        </div>
    </div>
</header>
<div class="header-overlay close_cart-init"></div>