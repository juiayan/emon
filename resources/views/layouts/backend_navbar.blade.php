        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="#" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{asset('backend/assets/images/ee.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('backend/assets/images/ee.png')}}" alt="" height="17">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{asset('backend/assets/images/ee.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('backend/assets/images/ee.png')}}" alt="" height="17">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>


     

                </div>

                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input form-control" placeholder="Search" />
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item toggle-search noti-icon waves-effect"
                            data-target="#search-wrap">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>




                    <!-- User -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect user-step" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{asset('backend/assets/images/users/user-1.jpg')}}"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">{{Auth()->user()->name}}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="dripicons-user d-inline-block text-muted me-2"></i>
                                Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet d-inline-block text-muted me-2"></i> My
                                Wallet</a>
                            <a class="dropdown-item d-block" href="#"><i
                                    class="dripicons-gear d-inline-block text-muted me-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock d-inline-block text-muted me-2"></i> Lock
                                screen</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="mdi mdi-spin mdi-cog"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>
