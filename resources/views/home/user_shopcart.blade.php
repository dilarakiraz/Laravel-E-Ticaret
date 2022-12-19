@extends('layouts.home')

@section('title','My Shopcart')

@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Shopcart</li>
            </ul>
        </div>
    </div>

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-2">
                    @include('home.usermenu')
                </div>
                <!-- /ASIDE -->
                <div class="card col-md-10">

                    <div class="card-body">

                        <table class="shopping-cart-table table">
                            <thead>
                            <tr>
                                <th>Ürün</th>
                                <th></th>
                                <th class="text-center">Fiyat</th>
                                <th class="text-center">Miktar</th>
                                <th class="text-center">Toplam Tutar</th>
                                <th class="text-right"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $total=0;
                            @endphp
                            @foreach ( $datalist as $rs)
                                <tr>
                                    <td class="thumb">
                                        @if ($rs->product->image)
                                            <img src="{{ Storage::url($rs->product->image)}}" height="50"  width="10px" alt="">
                                        @endif
                                    </td>
                                    <td> <a href="{{route('product',['id' => $rs->product->id,'slug' => $rs->product->slug ])}}">
                                            {{ $rs->product->title}}</a>
                                    </td>
                                    </td>
                                    <td>{{ $rs->product->price}}₺</td>
                                    <td>
                                        <form action="{{route('user_shopcart_update',['id' => $rs->id])}}" method="post">
                                            @csrf
                                            <input  name="quantity" type="number" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}" onchange="this.form.submit()">
                                        </form>

                                    </td>
                                    <td>{{ $rs->product->price * $rs->quantity}}₺</td>


                                    <td>
                                        <a href="{{route('user_shopcart_delete', ['id' => $rs->id])}}"  onclick="return confirm('Sepetten çıkarmak istediğine emin misin?')" > <img src="{{asset('assets/admin/images')}}/delete.jpg" height="25"></a>

                                    </td>
                                </tr>
                                @php
                                    $total += $rs->product->price * $rs->quantity;
                                @endphp
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>TOPLAM FİYAT</th>
                                <th colspan="2" class="sub-total">{{$total}}₺</th>
                            </tr>

                            </tfoot>
                        </table>
                        <form action="{{route('user_sales_add')}}" method="post">
                            @csrf
                            <input type="hidden" name="total" value="{{$total}}">
                            <div class="pull-right">
                                <button type="submit" class="primary-btn">SİPARİŞİ TAMAMLA</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->
@endsection
