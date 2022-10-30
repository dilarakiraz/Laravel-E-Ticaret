@extends('layouts.admin')

@section('title', 'Edit Product')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- include summernote css/js -->

    <!--ürün açıklaması gibi uzun metin isteyen şeylerde kullanabilmek için summernote adlı zengin metin içeriğini uygulamaya entegre ettim-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Edit Setting</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Setting</li>
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
                    <h3 class="card-title">Edit Setting</h3>

                </div>
                <div class="card-body">

                    <!-- form start -->
                    <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <input type="hidden" id="id" name="id" value="{{$data -> id}}" class="form-control"   >


                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" id="title" name="title" value="{{$data -> title}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Keywords</label>
                                <input type="text" name="keywords" value="{{$data -> keywords}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="description" value="{{$data -> description}}" class="form-control"   >
                            </div>

                            <div class="form-group">
                                <label >Company</label>
                                <input type="text" name="company" value="{{$data->company}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Address</label>
                                <input type="text" name="address"   class="form-control"  value="{{$data->address}}" >
                            </div>
                            <div class="form-group">
                                <label >Phone</label>
                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Fax</label>
                                <input type="text" name="fax" value="{{$data ->fax}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input type="text" name="email" value="{{$data ->email}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Smtpserver</label>
                                <input type="text" name="smtpserver" value="{{$data ->smtpserver}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Smtpemail</label>
                                <input type="text" name="smtpemail" value="{{$data ->smtpemail}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Smtppassword</label>
                                <input type="password" name="smtppassword" value="{{$data ->smtppassword}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Smtpport</label>
                                <input type="number" name="smtpport" value="{{$data ->smtpport}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Facebook</label>
                                <input type="text" name="facebook" value="{{$data ->facebook}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >İnstagram</label>
                                <input type="text" name="instagram" value="{{$data ->instagram}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Twitter</label>
                                <input type="text" name="twitter" value="{{$data ->twitter}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Youtube</label>
                                <input type="text" name="youtube" value="{{$data ->youtube}}" class="form-control"   >
                            </div>



                            <div class="form-group">
                                <label >Aboutus</label>
                                <textarea id="aboutus" name="aboutus">{{$data ->aboutus}}</textarea>  <!--summernote form içindeki kullanımı-->
                            </div>
                            <div class="form-group">
                                <label >References</label>
                                <textarea id="references" name="references">{{$data ->references}}</textarea>  <!--summernote form içindeki kullanımı-->
                            </div>
                            <div class="form-group">
                                <label >contact</label>
                                <textarea id="contact" name="contact">{{$data ->contact}}</textarea>  <!--summernote form içindeki kullanımı-->
                            </div>

                            <script>
                                $(document).ready(function() {
                                    $('#aboutus').summernote();
                                    $('#contact').summernote();
                                    $('#references').summernote();
                                });
                            </script>

                            <div class="form-group">
                                <label  >Slug</label>
                                <input type="text" name="slug" value="{{$data -> slug}}" class="form-control"   >
                            </div>



                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">{{$data ->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Setting</button>
                        </div>
                    </form>
                </div>
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
