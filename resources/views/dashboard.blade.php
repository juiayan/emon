@extends('layouts.app')
@section('content')

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Dashboard 2</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Amezia</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Dashboard 2</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card card-content">
                                <div class="card-body row justify-content-center">
                                    <div class="col-5 align-self-center">
                                        <h4 class="mb-2 font-size-20">1530</h4>
                                        <p class="mb-2 text-muted font-size-13 text-nowrap">Unique Visitors</p>
                                        <span class="badge bg-soft-success text-success mt-1 shadow-none"><i
                                                class="mdi mdi-menu-up font-size-16"></i>20.15%</span>
                                    </div>
                                    <div class="col-7 align-self-center">
                                        <span class="peity-line" data-width="100%"
                                            data-peity='{ "fill": ["#b5f1e0"],"stroke": ["#0acf97"]}'
                                            data-height="80">1,2,3,4,3,6,3,5,3,3,4,2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-6 col-xl-3">
                            <div class="card card-content">
                                <div class="card-body row justify-content-center">
                                    <div class="col-5 align-self-center">
                                        <h4 class="mb-2 font-size-20">8320</h4>
                                        <p class="mb-2 text-muted font-size-13 text-nowrap">New Users</p>
                                        <span class="badge bg-soft-danger text-danger mt-1 shadow-none"><i
                                                class="mdi mdi-menu-down font-size-16"></i>7.15%</span>
                                    </div>
                                    <div class="col-7 align-self-center text-end">
                                        <span class="peity-line" data-width="100%"
                                            data-peity='{ "fill": ["#d6d8f5"],"stroke": ["#777edd"]}'
                                            data-height="80">0,3,6,3,4,2,6,1,8,4,4,2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-6 col-xl-3">
                            <div class="card card-content">
                                <div class="card-body row justify-content-center">
                                    <div class="col-5 align-self-center">
                                        <h4 class="mb-2 font-size-20">1840</h4>
                                        <p class="mb-2 text-muted font-size-13 text-nowrap">New Orders</p>
                                        <span class="badge bg-soft-danger text-danger mt-1 shadow-none"><i
                                                class="mdi mdi-menu-down font-size-16"></i>6.05%</span>
                                    </div>
                                    <div class="col-7 align-self-center">
                                        <span class="peity-line" data-width="100%"
                                            data-peity='{ "fill": ["#fdebb5"],"stroke": ["#f9bc0b"]}'
                                            data-height="80">2,4,7,3,5,3,6,3,4,3,2,1,2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-6 col-xl-3">
                            <div class="card card-content">
                                <div class="card-body row justify-content-center">
                                    <div class="col-5 align-self-center">
                                        <h4 class="mb-2 font-size-20">2501</h4>
                                        <p class="mb-2 text-muted font-size-13 text-nowrap">Total Sales</p>
                                        <span class="badge bg-soft-success text-success mt-1 shadow-none"><i
                                                class="mdi mdi-menu-up font-size-16"></i>8.97%</span>
                                    </div>
                                    <div class="col-7 align-self-center">
                                        <span class="peity-bar" data-peity='{ "fill": ["#ffd1e1", "#ffd1e1"]}'
                                            data-width="100%" data-height="80">5,6,2,8,9,4,7,10,11,12,10,4,7,10</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Overview</h5>
                                    <div class="row">
                                        <div class="col-lg-9 border-right">
                                            <div class="card shadow-none mb-0 ">
                                                <div class="card-body">
                                                    <div id="morris-line-chart" class="morris-charts overview-chart"
                                                        dir="ltr"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-lg-3">
                                            <div class="card mb-0 overview shadow-none">
                                                <div class="card-body border-bottom">
                                                    <div class="">
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <div class="overview-content">
                                                                    <i class="mdi mdi-share-variant  text-success"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-8 text-end">
                                                                <p class="text-muted font-size-13 mb-1">Shares</p>
                                                                <h4 class="mb-0 font-size-20">7,503</h4>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </div>
                                                </div>
                                                <div class="card-body border-bottom">
                                                    <div class="">
                                                        <div class="row  align-items-center">
                                                            <div class="col-4">
                                                                <div class="overview-content">
                                                                    <i
                                                                        class="mdi mdi-gesture-double-tap  text-purple"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-8 text-end">
                                                                <p class="text-muted font-size-13 mb-1">Clicks</p>
                                                                <h4 class="mb-0 font-size-20">3,503</h4>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </div>
                                                </div>
                                                <div class="card-body border-bottom">
                                                    <div class="">
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <div class="overview-content">
                                                                    <i class="mdi mdi-earth text-warning"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-8 text-end">
                                                                <p class="text-muted font-size-13 mb-1">Countries</p>
                                                                <h4 class="mb-0 font-size-20">51</h4>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="">
                                                        <div class="row  align-items-center">
                                                            <div class="col-4">
                                                                <div class="overview-content">
                                                                    <i class="mdi mdi-access-point text-pink"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-8 text-end">
                                                                <p class="text-muted font-size-13 mb-1">Virality</p>
                                                                <h4 class="mb-0 font-size-20">4.55%</h4>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="progress mt-4" style="height:6px;">
                                                                    <div class="progress-bar progress-animated bg-pink"
                                                                        role="progressbar"
                                                                        style="max-width: 85%; border-radius:5px;"
                                                                        aria-valuenow="85" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
@endsection                    