@extends('layouts.home')

@section('title', 'Contact -' . $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)

@section('content')

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Ana Sayfa</a></li>
            <li class="active">İletişim</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-6">
                <h3 class="aside-title">İletişim Bilgileri</h3>
                {!! $setting->contact !!}
            </div>
            <div class="col-md-6">
                <h3 class="aside-title">İletişim Formu</h3>

                <form id="checkout-form" class="clearfix" action="{{route('sendmessage')}}" method="post">
                    @csrf
                    <div class="billing-details">
                        @include('home.message')
                        <div class="form-group">
                            <input class="input" type="text" name="name" placeholder="İsim & Soyisim">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="phone" placeholder="Telefon No">
                        </div>
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="subject" placeholder="Konu">
                        </div>
                        <div class="form-group">
                                    <textarea class="input" name="message" rows="5" placeholder="Mesajınız">
                                    </textarea>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="primary-btn">Mesaj Gönder</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

@endsection
