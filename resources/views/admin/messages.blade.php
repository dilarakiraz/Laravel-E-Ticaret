@extends('layouts.admin')

@section('title', 'İletişim Mesaj Listesi')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Mesajlar</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
                            <li class="breadcrumb-item active">Mesajlar</li>
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
                    @include('home.message')
                </div>
                <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>İsim</th>
                            <th>Email</th>
                            <th>Telefon No</th>
                            <th>Konu</th>
                            <th>Mesaj</th>
                            <th>Admin Notu</th>
                            <th>Durum</th>
                            <th style="width: 5px" colspan="3"> Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ( $datalist  as $rs)
                            <tr>
                                <td> {{ $rs->id}}</td>
                                <td>{{ $rs->name}}</td>
                                <td>{{ $rs->email}}</td>
                                <td>{{ $rs->phone}}</td>
                                <td>{{ $rs->subject}}</td>
                                <td>{{ $rs->message}}</td>
                                <td>{{ $rs->note}}</td>
                                <td>{{ $rs->status}}</td>

                                <td><a href="{{route('admin_message_edit',['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800,height=600')">
                                        <img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a>
                                </td>
                                <td><a href="{{route('admin_message_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" ><img src="{{asset('assets/admin/images')}}/delete.jpg" height="25"></a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
            <!-- /.card-footer-->
            </div>
    <!-- /.card -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('footer')
    <script src="{{ asset('assets')}}/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ asset('assets')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
