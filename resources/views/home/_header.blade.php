<!-- HEADER -->
<header>
    <!-- top Header -->
    <div id="top-header">
        <div class="container  text-center">
            <p style="padding:5px;font-size:20px;background:#ff851b;">
                TÜRKİYE'NİN EN BÜYÜK KİTAP SATIŞ SİTESİ!
            </p>
        </div>
    </div>
    <!-- /top Header -->
    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="{{route('home')}}">
                        <img src="{{ asset('assets')}}/img/logo.png" alt="kitapkurdu.com">
                    </a>
                    <div class="logo-text">
                        <a href="http://127.0.0.1:8000/">
                            <img src="{{asset('assets')}}/img/logotext.png"  title="kitapla buluşmanın en kolay yolu!" alt="kitapkurdu.com" width="150" height="50">
                        </a>
                    </div>
                </div>
                <!-- /Logo -->
                <!-- Search -->
                <div class="header-search">
                    <form action="{{route('getproduct')}}" method="post">
                        @csrf
                        @livewire('search')
                        <!--<input type="text" id="search" name="search" class="form-control" required="">-->
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                    @livewireScripts

                </div>
                <!-- /Search -->
            </div>
            <div class="pull-right">
                <ul class="header-btns">
                    <li class="header-account dropdown default-dropdown">
                        @auth
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">{{ Auth::user()->name }}<i class="fa fa-caret-down"></i></strong>
                        </div>
                        @endauth
                        @guest
                           <a href="/login" class="text-uppercase">Giriş</a> / <a href="/register" class="text-uppercase">Kayıt</a>
                            @endguest

                        <ul class="custom-menu">
                            <li><a href="{{route('myprofile')}}"><i class="fa fa-user-o"></i> Hesabım</a></li>
                            <li><a href="#"><i class="fa fa-heart-o"></i> Favoriler</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Ödeme</a></li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-user-plus"></i> Çıkış</a></li>
                        </ul>

                    </li>
                    <!-- /Account -->
                    <!-- Cart -->
                    <li class="header-cart dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="qty">{{\App\Http\Controllers\ShopcartController::countshopcart()}}</span>
                            </div>
                            <a href="{{route('user_shopcart')}}">
                            <strong class="text-uppercase">Sepetim</strong>
                            </a>
                            <br>
                        </a>
                    </li>
                    <li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
<!-- /HEADER -->
