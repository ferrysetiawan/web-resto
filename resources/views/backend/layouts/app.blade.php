
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{ asset('backend/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        @yield('style')

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo.png') }}" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo_sm.png') }}" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo_sm_dark.png') }}" alt="" height="16">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a href="apps-calendar.html" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboard </span>
                            </a>
                        </li> 

                        <li class="side-nav-item">
                            <a href="{{ route('hero.index') }}" class="side-nav-link">
                                <i class="uil-presentation-lines-alt"></i>
                                <span> Hero </span>
                            </a>
                        </li> 

                        <li class="side-nav-item">
                            <a href="{{ route('about.index') }}" class="side-nav-link">
                                <i class="uil-copy-alt"></i>
                                <span> About Us </span>
                            </a>
                        </li> 

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Product </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('categoryProduct.index') }}">Category</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('product.index') }}">Items</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{ route('chef.index') }}" class="side-nav-link">
                                <i class="uil-users-alt"></i>
                                <span> Chef </span>
                            </a>
                        </li> 

                        <li class="side-nav-item">
                            <a href="{{ route('event.index') }}" class="side-nav-link">
                                <i class="uil-calendar-alt"></i>
                                <span> Event </span>
                            </a>
                        </li> 

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarNews" aria-expanded="false" aria-controls="sidebarNews" class="side-nav-link">
                                <i class="uil-newspaper"></i>
                                <span> News </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarNews">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('categories.index') }}">Categories</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('post.index') }}">Post</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{ route('gallery.index') }}" class="side-nav-link">
                                <i class="uil-images"></i>
                                <span> Gallery </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-chat.html" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Message </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{ route('unisharp.lfm.show') }}" class="side-nav-link">
                                <i class="uil-folder-plus"></i>
                                <span> File Manager </span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div style="max-height: 230px;" data-simplebar="">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt=""> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt=""> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">Soeng Souy</span>
                                        <span class="account-position">Founder</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        @yield('content')
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->


        <!-- bundle -->
        <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
        <script>
            @if(session() -> has('success'))
    
            Swal.fire({
                icon: 'success',
                title: 'BERHASIL!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            })
    
            @elseif(session() -> has('error'))
    
            Swal.fire({
                icon: 'error',
                text: 'GAGAL!',
                title: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 10000
            })
    
            @endif
    
        </script>
        @yield('js')
        
    </body>
</html>
