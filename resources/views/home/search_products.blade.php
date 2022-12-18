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
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">

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
                                            <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug ])}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> İncele</a>
                                            <img src="{{ Storage::url($rs->image)}}" style="height: 275px" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">{{$rs->price}} </h3>
                                            <h2 class="product-name"><a href="#">{{$rs->title}}</a></h2>
                                            <div class="product-btns">
                                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
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
