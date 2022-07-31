@include('admin.include.header')

<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Broker List</h1>
        <div>
            <a href="{{url('/dashboard/add-broker-category')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Broker Category</span>
            </a>
            <a href="{{url('/dashboard/add-broker')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add New Broker</span>
            </a>

        </div>
    </div>

    <!-- Content Row -->
    <div class="row">



    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


@include('admin.include.footer')
