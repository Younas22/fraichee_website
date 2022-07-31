@include('admin.include.header')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All clients</h1>
        <div>
            <a href="{{url('/dashboard/add-client')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add New Client</span>
            </a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report
            </a>
        </div>
    </div>

    <!-- Client Row -->
    <div class="row">

        <!-- All Clients List -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-primary h-115">
                <div class="card-body">
                    <div class="no-gutters align-items-center">
                        <a href="{{url('/dashboard/Client-User')}}">
                            <h6 class="f-15 text-center">All Clients</h6>
                            <h2 class="text-right m-0">
                                <i class="fa fa-users float-left "></i><span>1602</span>
                            </h2>

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Subscriber (Mail Confirm & UnConfirm) -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-success h-115">
                <div class="card-body p-0">
                    <div class="no-gutters border-botom align-items-center">
                        <a href="#">
                            <h2 class="f-15 font-bold">Total Subscribers <span class="float-right">194</h6>
                                    <a href="#">
                                        <p class="m-0 bord f-17 p-1">
                                            <i class="fas fa-user-check float-left mr-3"></i> Confirm<span
                                                class="float-right">194</span>
                                        </p>
                                    </a>
                                    <a href="#">
                                        <p class="m-0 p-1 border-none f-17">
                                            <i class="fas fa-user-times float-left mr-3"></i>UnConfirm<span
                                                class="float-right">194</span>
                                        </p>
                                    </a>

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total VIP CLIENTS -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-info h-115">
                <div class="card-body">
                    <div class="no-gutters align-items-center">
                        <a href="#">
                            <h6 class="f-15 text-center">VIP Clients</h6>
                            <h2 class="text-right m-0">
                                <i class="fa fa-users float-left "></i><span>1602</span>
                            </h2>

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Paid Clients-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-warning h-115">
                <div class="card-body">
                    <div class="no-gutters align-items-center">
                        <a href="#">
                            <h6 class="f-15 text-center">Paid Clients</h6>
                            <h2 class="text-right m-0">
                                <i class="fa fa-users float-left "></i><span>1602</span>
                            </h2>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Clients By Broker Account --}}

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All clients By Member Type</h1>

        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>



    <div class="row">

        <!-- All Clients List -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-primary h-115">
                <div class="card-body">
                    <div class="no-gutters align-items-center">
                        <a href="{{url('/dashboard/Client-User')}}">
                            <h6 class="f-15 text-center">All Accounts</h6>
                            <h2 class="text-right m-0">
                                <i class="fa fa-hands-helping float-left "></i><span>1602</span>
                            </h2>

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Exness Broker Accounts with (Pending, Reject & Aproved) -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-success">
                <div class="card-body ">
                    <div class="no-gutters border-botom align-items-center">
                        <a href="#">
                            <h2 class="f-15 font-bold">Exness Accounts <span class="float-right">194</h6>
                                    <a href="#">
                                        <p class="m-0 bord p-1 f-17">
                                            <i class="fas fa-user-check float-left mr-3"></i> Verified<span
                                                class="float-right">194</span>
                                        </p>
                                    </a>
                                    <a href="#">
                                        <p class="m-0 bord p-1 f-17">
                                            <i class="fas fa-user-check float-left mr-3"></i> Pending<span
                                                class="float-right">194</span>
                                        </p>
                                    </a>
                                    <a href="#">
                                        <p class="m-0 p-1 border-none f-17">
                                            <i class="fas fa-user-times float-left mr-3"></i>Reject<span
                                                class="float-right">194</span>
                                        </p>
                                    </a>

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total FXTM Broker Accounts with (Pending, Reject & Aproved) -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2 bg-info">
                <div class="card-body ">
                    <div class="no-gutters border-botom align-items-center">
                        <a href="#">
                            <h2 class="f-15 font-bold">FXTM Accounts <span class="float-right">194</h6>
                                    <a href="#">
                                        <p class="m-0 bord p-1 f-17">
                                            <i class="fas fa-user-check float-left mr-3"></i> Verified<span
                                                class="float-right">194</span>
                                        </p>
                                    </a>
                                    <a href="#">
                                        <p class="m-0 bord p-1 f-17">
                                            <i class="fas fa-user-check float-left mr-3"></i> Pending<span
                                                class="float-right">194</span>
                                        </p>
                                    </a>
                                    <a href="#">
                                        <p class="m-0 p-1 border-none f-17">
                                            <i class="fas fa-user-times float-left mr-3"></i>Reject<span
                                                class="float-right">194</span>
                                        </p>
                                    </a>

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Cabana Capital Broker Accounts with (Pending, Reject & Aproved) -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-success">
                <div class="card-body ">
                    <div class="no-gutters border-botom align-items-center">
                        <a href="#">
                            <h2 class="f-15 font-bold">Cabana Accounts <span class="float-right">194</h6>
                                    <a href="#">
                                        <p class="m-0 bord p-1 f-17">
                                            <i class="fas fa-user-check float-left mr-3"></i> Verified<span
                                                class="float-right">194</span>
                                        </p>
                                    </a>
                                    <a href="#">
                                        <p class="m-0 bord p-1 f-17">
                                            <i class="fas fa-user-check float-left mr-3"></i> Pending<span
                                                class="float-right">194</span>
                                        </p>
                                    </a>
                                    <a href="#">
                                        <p class="m-0 p-1 border-none f-17">
                                            <i class="fas fa-user-times float-left mr-3"></i>Reject<span
                                                class="float-right">194</span>
                                        </p>
                                    </a>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


@include('admin.include.footer')
