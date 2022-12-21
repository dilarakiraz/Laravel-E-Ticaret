@extends('layouts.admin')

@section('title', 'Admin Sales List')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Blank Page</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
                            <li class="breadcrumb-item active">Satıs Listesi</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Satıs Listesi</h3>

                </div>
                <div class="card-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Kullanıcı</th>
                            <th>İsim</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Adres</th>
                            <th>Tutar</th>
                            <th>Tarih</th>
                            <th>Durum</th>
                            <th style="width: 5px" colspan="2"> Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ( $datalist as $rs)
                            <tr>
                                <td>{{ $rs->id}}</td>
                                <td>
                                    <a href="{{route('admin_user_show',['id' => $rs->user->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800,height=600')">
                                        {{ $rs->user->name}}
                                    </a>
                                </td>
                                <td>{{ $rs->name}}</td>
                                <td>{{ $rs->phone}}</td>
                                <td>{{ $rs->email}}</td>
                                <td>{{ $rs->address}}</td>
                                <td>{{ $rs->total}}</td>
                                <td>{{ $rs->created_at}}</td>
                                <td>{{ $rs->status}}</td>
                                <td>
                                    <a href="{{route('admin_sales_show',['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=10 left=100 width=1100,height=800')">
                                        <img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
