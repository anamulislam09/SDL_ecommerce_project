<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
        <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth()->user()->name}}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <!-- Category start here -->
        <nav class="">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subcategory.index')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Subcategory</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('brand.index')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Brand</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Products start here --}}
                <li class="nav-item">
                    <a href="{{route('product.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>Products</p>
                    </a>
                </li>

                {{-- Products start here --}}
                <li class="nav-item">
                    <a href="{{route('order.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>Orders</p>
                    </a>
                </li>

                {{-- warehouse start here --}}
                <li class="nav-item">
                    <a href="{{route('warehouse.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>Warehouse</p>
                    </a>
                </li>

                {{-- pickup_point.index start here --}}
                <li class="nav-item">
                    <a href="{{route('pickup_point.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>Pickup_point</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('slider.index')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon""></i>
                                <p>Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon""></i>
                                <p>Review</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Review
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>