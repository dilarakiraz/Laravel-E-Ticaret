@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- FOOTER -->
<footer id="footer" class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a class="logo" href="{{route('home')}}">
                            <img src="{{ asset('assets')}}/img/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /footer logo -->
                    <h4>Adres</h4>
                    <strong>Şirket</strong>{{$setting->company}}<br>
                    <strong>Adres</strong>{{$setting->address}}<br>
                    <strong>Telefon</strong>{{$setting->phone}}<br>
                    <strong>Fax</strong>{{$setting->fax}}<br>
                    <strong>Email</strong>{{$setting->email}}<br>
                </div>
            </div>
            <!-- /footer widget -->
            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">HESABIM</h3>
                    <ul class="list-links">
                        <li><a href="">Hesabım</a></li>
                        <li><a href="#">İsteklerim</a></li>
                        <li><a href="#">Ödeme</a></li>
                        <li><a href="{{route('admin_login')}}">Giriş</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->
            <div class="clearfix visible-sm visible-xs"></div>
            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Müşteri Servisi</h3>
                    <ul class="list-links">
                        <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->
<!-- jQuery Plugins -->
<script src="{{ asset('assets')}}/js/jquery.min.js"></script>
<script src="{{ asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets')}}/js/slick.min.js"></script>
<script src="{{ asset('assets')}}/js/nouislider.min.js"></script>
<script src="{{ asset('assets')}}/js/main.js"></script>
