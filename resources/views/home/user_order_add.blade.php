@extends('layouts.home')

@section('title', 'Order Products')


@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Ana Sayfa</a></li>
                <li class="active">Sipariş</li>
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
                <form id="checkout-form" action="{{route('user_sales_store')}}" method="post" class="clearfix">
                    @csrf
                    <div class="col-md-6">
                        <div class="billing-details">

                            <div class="section-title">
                                <h3 class="title">Alıcı İşlemleri</h3>

                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Ad & Soyad">
                            </div>

                            <div class="form-group">
                                <input class="input" type="email" name="email"  value="{{ Auth::user()->email }}" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="address"  value="{{ Auth::user()->address }}" placeholder="Adres">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="phone"  value="{{ Auth::user()->phone }}" placeholder="Telefon Numarası">
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="payments-methods">
                            <div class="section-title">
                                <h4 class="title">Sipariş Toplam Tutar =  {{$total}}₺</h4>
                            </div>
                            <div class="input-checkbox">
                                <input type="hidden" name="total" value="{{$total}}₺">


                            </div>

                            <div class="form-group">
                                <input class="input" type="text" name="cardname" value="{{ Auth::user()->name }}" placeholder=" Kart Ad & Soyad">
                            </div>

                            <div class="form-group">
                                <input class="input" type="number" name="cardnumber"  value="" placeholder="Kart Numarası">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="dates"  value="" placeholder="Son Kullanma Tarihi mm/yy">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="key"  value="" placeholder="Güvenlik Numarası">
                            </div>

                        </div>
                    </div>


                    <div class="pull-right">
                        <button class="primary-btn">Satın Al</button>
                    </div>
            </div>

        </div>
        </form>

    </div>
    <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /section -->
@endsection
