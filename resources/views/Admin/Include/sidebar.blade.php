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
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="row">
                                        <div class="sidebar-userpic">
                                            <img src="{{url('public/new_assets/img/dp.jpg')}}" class="img-responsive" alt=""> </div>
                                    </div>
                                    <div class="profile-usertitle">
                                        <div class="sidebar-userpic-name"> PK WORLD </div>
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
                            <li class="nav-item start active">
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
                            <li class="nav-item">
                                <a href="{{url('/dashboard/categories')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">home</i>
                                    <span class="title">Categories</span>
                                    {{-- <span class="label label-rouded label-menu label-danger">new</span> --}}
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">room</i>
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
                                    <i class="material-icons">vpn_key</i>
                                    <span class="title">Policies</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/checkin')}}" class="nav-link ">
                                            <span class="title">Checkin</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/checkout')}}" class="nav-link ">
                                            <span class="title">Checkout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">dvr</i>
                                    <span class="title">Facilities</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/main_facilitie')}}" class="nav-link ">
                                            <span class="title">Main Facilities</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/rooms_facilitie')}}" class="nav-link ">
                                            <span class="title">Rooms Facilities</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/property_facilitie')}}" class="nav-link ">
                                            <span class="title">Property Facilities</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/breakfast_type')}}" class="nav-link ">
                                            <span class="title">Breakfast Facilities</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">payment</i>
                                    <span class="title">Payment Method</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/payment_method')}}" class="nav-link ">
                                            <span class="title">Add Payment Method</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle"> <i class="material-icons">desktop_mac</i>
                                    <span class="title">Properties</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/active_properties')}}" class="nav-link "> <span class="title">ACTIVE</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/pending_properties')}}" class="nav-link "> <span class="title">PENDING APPROVAL</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/denied_properties')}}" class="nav-link "> <span class="title">DENIED</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/paused_properties')}}" class="nav-link "> <span class="title">PAUSED</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-heading m-t-20">
                                <span>-- User Interface</span>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">group</i>
                                    <span class="title">Users</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/client-user')}}" class="nav-link ">
                                            <span class="title">All Clients List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">settings</i>
                                    <span class="title">Settings</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/currencies')}}" class="nav-link ">
                                            <span class="title">Currencies</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/categories')}}" class="nav-link ">
                                            <span class="title">Blog Categories</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/blog')}}" class="nav-link ">
                                            <span class="title">Blog Post</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{url('/dashboard/add-destination')}}" class="nav-link ">
                                            <span class="title">Destination</span>
                                        </a>
                                    </li>
                                </ul>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->