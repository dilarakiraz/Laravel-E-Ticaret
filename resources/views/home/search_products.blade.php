@extends('layouts.home')

@section('title', $search ." Products List")
@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('home')}}">ProductList</a></li>
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
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter by Price</h3>
                        <div id="price-slider"></div>
                    </div>

                    <div class="aside">
                        <h3 class="aside-title">Top Rated Product</h3>
                        <!-- widget product -->
                        <div class="product product-widget">
                            <div class="product-thumb">
                                <img src="{{ asset('assets')}}/img/thumb-product01.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name</a></h2>
                                <h3 class="product-price">32.50 <del class="product-old-price">45.00</del></h3>
                            </div>
                        </div>
                        <div class="product product-widget">
                            <div class="product-thumb">
                                <img src="{{ asset('assets')}}/img/thumb-product01.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">32.50</h3>
                            </div>
                        </div>
                        <!-- /widget product -->
                    </div>
                    <!-- /aside widget -->
                </div>
                <!-- /ASIDE -->

                <!-- MAIN -->
                <div id="main" class="col-md-9">

                    <div id="store">
                        <!-- row -->
                        <div class="row">

                            @foreach($datalist as $rs)
                                <!-- Product Single -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="product product-single">
                                        <div class="product-thumb">
                                            <div class="product-label">
                                                <span>New</span>
                                                <span class="sale">-20%</span>
                                            </div>
                                            <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug ])}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</a>
                                            <img src="{{ Storage::url($rs->image)}}" style="height: 275px" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">{{$rs->price}} <del class="product-old-price">{{$rs->price}}</del></h3>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o empty"></i>
                                            </div>
                                            <h2 class="product-name"><a href="#">{{$rs->title}}</a></h2>
                                            <div class="product-btns">
                                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product Single -->
                            @endforeach

                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /STORE -->



                    <!-- store bottom filter -->
                    <div class="store-filter clearfix">
                        <div class="pull-left">
                            <div class="row-filter">
                                <a href="#"><i class="fa fa-th-large"></i></a>
                                <a href="#" class="active"><i class="fa fa-bars"></i></a>
                            </div>
                        </div>
                        <div class="pull-right">
                            <ul class="store-pages">
                                <li><span class="text-uppercase">Page:</span></li>
                                <li class="active">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /store bottom filter -->
                </div>
                <!-- /MAIN -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
