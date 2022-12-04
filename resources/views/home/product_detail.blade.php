@extends('layouts.home')

@section('title', $data->title)
@section('description'){{ $data->description }} @endsection
@section('keywords',$data->keywords)


@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title) }}</li>
                <li class="active">{{$data->title}}</li>
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

                <!--  Product Details -->
                <div class="product product-details clearfix">
                    <div class="col-md-6">
                        <div id="product-main-view">
                            <div class="product-view">
                                <img src="{{ Storage::url($data->image)}}" style="height: 250px"  alt="">
                            </div>

                            @foreach($datalist as $rs)

                                <div class="product-view">
                                    <img src="{{ Storage::url($rs->image)}}" style="height: 50px" alt="">
                                </div>
                            @endforeach

                        </div>
                        <div id="product-view">
                            <div class="product-view">
                                <img src="{{ Storage::url($data->image)}}" style="height: 50px" alt="">
                            </div>
                            @foreach($datalist as $rs)
                                <div class="product-view">
                                    <img src="{{ Storage::url($rs->image)}}" style="height: 50px" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-body">
                            <div class="product-label">
                                <span>Yeni</span>
                                <span class="sale">-20%</span>
                            </div>
                            <h2 class="product-name">{{$data->title}}</h2>
                            <h3 class="product-price">{{$data->price }} <del class="product-old-price">{{$data->price * 1.2}}</del></h3>

                            <p><strong>Durum:</strong>Stokta</p>
                            <p>{{$data->descripton}}</p>
                            <div class="product-options">


                            </div>

                            <div class="product-btns">
                                <form action="" method="post">
                                    @csrf
                                    <div class="qty-input">
                                        <span class="text-uppercase">QTY: </span>
                                        <input class="input" name="quantity" type="number" value="1" max="{{$data->quantity}}">
                                    </div>
                                    <button type="submit"  class="primary-btn add-to-cart" ><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                </form>
                                <div class="pull-right">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="product-tab">
                            <ul class="tab-nav">
                                <li class="active"><a data-toggle="tab" href="#tab1">Tanım</a></li>
                                <li><a data-toggle="tab" href="#tab1">Detay</a></li>
                                <li><a data-toggle="tab" href="#tab2">Yorumlar </a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane fade in active">
                                    <p>
                                        {!! $data->detail !!}
                                    </p>
                                </div>
                                <div id="tab2" class="tab-pane fade in">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="product-reviews">
                                                <ul class="reviews-pages">
                                                    <li class="active">1</li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Product Details -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
