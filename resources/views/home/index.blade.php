@extends('layouts.home')

@section('title', $setting->title)
@section('description'){{ $setting->description }} @endsection
@section('keywords',$setting->keywords)

@section('content')

    @include('home._slider')

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section-title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Günün Kitapları</h2>
                        <div class="pull-right">
                            <div class="product-slick-dots-1 custom-dots"></div>
                        </div>
                    </div>
                </div>
                <!-- /section-title -->

                <!-- banner -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="banner banner-2">
                        <img src="{{ asset('assets')}}/img/banner14.jpg" alt="">
                        <div class="banner-caption">
                            <h2 class="white-color">YENİ<br>KOLEKSİYON</h2>
                        </div>
                    </div>
                </div>
                <!-- /banner -->

                <!-- Product Slick -->
                <div class="col-md-9 col-sm-6 col-xs-6">
                    <div class="row">
                        <div id="product-slick-1" class="product-slick">

                            @foreach($daily as $rs)
                                <!-- Product Single -->
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <div class="product-label">
                                            <span class="sale">-20%</span>
                                        </div>
                                        <ul class="product-countdown">
                                            <li><span>00 H</span></li>
                                            <li><span>00 M</span></li>
                                            <li><span>00 S</span></li>
                                        </ul>
                                        <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug ])}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> İNCELE</a>
                                        <img src="{{ Storage::url($rs->image)}}" style="height: 320px " width="50px"  alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">{{$rs->price }}₺ <del class="product-old-price">{{$rs->price * 1.2}}</del></h3>


                                        <h2 class="product-name"><a href="#">{{$rs->title}}</a></h2>
                                        <div class="product-btns">
                                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                            <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                            <form action="{{route('user_shopcart_add',['id' => $rs->id])}}" method="post">
                                                @csrf
                                                <input name="quantity" type="hidden" value="1">
                                                <button type="submit"  class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product Single -->
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- /Product Slick -->
            </div>
            <!-- /row -->



            <!-- section -->
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- section title -->
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">YENİ KİTAPLAR</h2>
                            </div>
                        </div>
                        <!-- section title -->
                        @foreach($last as $rs)
                            <!-- Product Single -->
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug ])}}" class="main-btn quick-view" ><i class="fa fa-search-plus"></i> İNCELE</a>
                                        <img src="{{ Storage::url($rs->image)}}" style="height: 250px"alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">{{$rs->price }}₺ </h3>



                                        <h2 class="product-name"><a href="#">{{$rs->title}}</a></h2>
                                        <div class="product-btns">
                                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                            <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                            <form action="{{route('user_shopcart_add',['id' => $rs->id])}}" method="post">
                                                @csrf
                                                <input name="quantity" type="hidden" value="1">
                                                <button type="submit"  class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->

                        @endforeach


                    </div>
                    <!-- /row -->



                    <!-- row -->
                    <div class="row">
                        <!-- section title -->
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">ÖNERİLENLER</h2>
                            </div>
                        </div>
                        <!-- section title -->
                        @foreach($picked as $rs)
                            <!-- Product Single -->
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug ])}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> İNCELE</a>
                                        <img src="{{ Storage::url($rs->image)}}" style="height: 250px" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">{{$rs->price }}₺</h3>

                                        <h2 class="product-name"><a href="#">{{$rs->title}}</a></h2>
                                        <div class="product-btns">
                                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                            <form action="{{route('user_shopcart_add',['id' => $rs->id])}}" method="post">
                                                @csrf
                                                <input name="quantity" type="hidden" value="1">
                                                <button type="submit"  class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->
                        @endforeach

                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /section -->
@endsection
