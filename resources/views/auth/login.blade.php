<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Emon Enterprise- Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">

    <div class="container-fluid">
        <!-- Log In page -->
        <div class="row">
            <div class="col-lg-3 pe-0">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">

                        <h3 class="text-center m-0">
                            <a href="#" class="logo logo-admin"><img src="{{asset('images/ee-logo.png')}}"
                                    height="60" alt="logo" class="my-3"></a>
                        </h3>

                        <div class="px-2 mt-2">
                            <h4 class="font-size-18 mb-2 text-center">Emon Enterprise</h4>
                      
          <form class="form-horizontal my-4" action="{{ route('admin.login') }}" method="POST">
            @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <div class="input-group">

                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="far fa-user"></i></span>

                                        <input type="email" class="form-control" name="email" id="username"
                                            placeholder="Enter username">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2"><i
                                                class="fa fa-key"></i></span>
                                        <input type="password" name="password" class="form-control" id="userpassword"
                                            placeholder="Enter password">
                                    </div>
                                </div>

                                <div class="mb-3 row mt-4">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customControlInline">
                                            <label class="form-check-label" for="customControlInline">Remember
                                                me</label>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-sm-6 text-end">
                                        <a href="auth-recoverpw.html" class="text-muted font-size-13"><i
                                                class="mdi mdi-lock"></i> Forgot your password?</a>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="mb-3 mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log
                                            In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </form>
                            <!-- end form -->
                        </div>
                                           
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-9 p-0 vh-100  d-flex justify-content-center">
                <div class="accountbg d-flex align-items-center">
                    <div class="account-title text-center text-white">
                        <h4 class="mt-3 text-white">Welcome To <span class="text-warning">AMEZIA</span> </h4>
                        <h1 class="text-white">Let's Get Started</h1>
                        <p class="mt-3 font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                            laoreet tellus ut tincidunt euismod.</p>
                        <div class="border w-25 mx-auto border-warning"></div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- End Log In page -->
    </div>



    <!-- JAVASCRIPT -->
    <script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
</body>

</html>