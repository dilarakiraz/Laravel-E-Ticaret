<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin_home') }}" class="brand-link">
        <img src="{{ asset('assets')}}/admin/dist/img/AdminLTELogo.png" alt="Admin Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth::user()->profile_photo_path)
                    <img src="{{ Storage::url(Auth::user()->profile_photo_path)}}" style="height: 25px" class="img-circle elevation-2" alt="User Image">
                @endif

            </div>
            <div class="info">

                @auth()
                <a href="#" class="d-block">ADI: {{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}" class="d-block">ÇIKIŞ</a>
                @endauth

            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{route('admin_category')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        Kategoriler
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('admin_products')}}" class="nav-link">
                        <p>
                            <i class="nav-icon fas fa-copy"></i>
                            Ürünler
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('admin_message')}}" class="nav-link">
                        <p>
                            <i class="nav-icon fas fa-copy"></i>
                            Mesajlar
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Yorumlar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>FAQ</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user nav-icon"></i>
                        <p>Kullanıcılar</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Satışlar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin_sales')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tüm Satışlar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Accepted Orders</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Canceled Orders</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Shipping Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Completed Orders</p>
                            </a>
                        </li>
                    </ul>

                </li>

                <li class="nav-item">
                    <a href="{{route('admin_setting')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Ayarlar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
