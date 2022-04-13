        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll">
                        <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
                            data-slide-speed="200">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel d-none">
                                <div class="user-panel">
                                    <div class="row">
                                        <div class="sidebar-userpic">
                                            <img src="{{url('public/assets/admin/img/dp.jpg')}}" class="img-responsive" alt=""> </div>
                                    </div>
                                    <div class="profile-usertitle">
                                        <div class="sidebar-userpic-name"> fraichee </div>
                                        <div class="profile-usertitle-job"> ADMIN </div>
                                    </div>
                                    <div class="sidebar-userpic-btn d-none">
                                        <a class="tooltips" href="user_profile.html" data-placement="top"
                                            data-original-title="Profile">
                                            <i class="material-icons">person_outline</i>
                                        </a>
                                        <a class="tooltips" href="email_inbox.html" data-placement="top"
                                            data-original-title="Mail">
                                            <i class="material-icons">mail_outline</i>
                                        </a>
                                        <a class="tooltips" href="chat.html" data-placement="top"
                                            data-original-title="Chat">
                                            <i class="material-icons">chat</i>
                                        </a>
                                        <a class="tooltips" href="login.html" data-placement="top"
                                            data-original-title="Logout">
                                            <i class="material-icons">input</i>
                                        </a>
                                    </div>
                                </div>
                            </li>
{{--                             <li class="menu-heading">
                                <span>Main</span>
                            </li> --}}


                        <li class="nav-item">
                                <a href="{{url('/')}}" class="nav-link nav-toggle" target="blank">
                                    <i class="material-icons">home</i>
                                    <span class="title">Web</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>
                            </li>


                            <li class="nav-item start active d-none">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item active">
                                        <a href="{{url('/dashboard')}}" class="nav-link ">
                                            <span class="title">Dashboard</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item ">
                                        <a href="dashboard2.html" class="nav-link ">
                                            <span class="title">Dashboard 2</span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </li>


                            <li class="nav-item start active">
                                <a href="{{url('/dashboard')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>

                            </li>


<?php if (session('logAdmin')->role == 'admin') { ?>
                            <li class="nav-item">
                                <a href="{{url('/dashboard/client-user')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">group</i>
                                    <span class="title">Users list</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('/dashboard/orders-list')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">notifications_active</i>
                                    <span class="title">Orders list</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>
                            </li>

<!--                             <li class="nav-item">
                                <a href="{{url('/dashboard/subscription-list')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">notifications_none</i>
                                    <span class="title">subscription list</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>
                            </li> -->
                            
                            <li class="nav-item">
                                <a href="{{url('/dashboard/categories')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">home</i>
                                    <span class="title">Categories</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">local_laundry_service</i>
                                    <span class="title">products</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/products')}}" class="nav-link ">
                                            <span class="title">Main products</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/child-products')}}" class="nav-link ">
                                            <span class="title">Child products</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">desktop_mac</i>
                                    <span class="title">Blogs</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/blog-categories')}}" class="nav-link ">
                                            <span class="title">Blog Categories</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/blog-post')}}" class="nav-link ">
                                            <span class="title">Blog Post</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="{{url('/dashboard/coupon-code')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">payment</i>
                                    <span class="title">Add Coupon Code</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>

                            </li>

 


                            <li class="nav-item">
                                <a href="{{url('/dashboard/add-service-address')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">room</i>
                                    <span class="title">Service Address</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>

                            </li>


                            <li class="nav-item">
                                <a href="{{url('/dashboard/contact-us-details')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">sms</i>
                                    <span class="title">Contact Us</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>

                            </li>


                            <li class="nav-item">
                                <a href="{{url('/dashboard/subscribers')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">email</i>
                                    <span class="title">Subscribers</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>

                            </li>
<?php }else{?>

                            <li class="nav-item">
                                <a href="{{url('/dashboard/customer-profile')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">group</i>
                                    <span class="title">Profile</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('/dashboard/customer-order')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">group</i>
                                    <span class="title">Order</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/dashboard/subscribe-order')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">group</i>
                                    <span class="title">Subscription Order</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>
                            </li>
<?php } ?>



                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->