<!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8" />
        <title>Project Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link rel="stylesheet" href="{{ asset('assets_admin/css/icon.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets_admin/css/app-creative.min.css') }}" type="text/css">

    </head>

    <body class="loading" data-layout-color="light" data-layout="topnav" data-layout-mode="fluid" data-rightbar-onstart="true">
        <!-- Begin page -->
        <div class="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom topnav-navbar topnav-navbar-dark">
                        <div class="container-fluid">

                            <!-- LOGO -->
                            <a href="" class="topnav-logo">
                                <span class="topnav-logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="16">
                                </span>
                                <span class="topnav-logo-sm">
                                    <img src="assets/images/logo_sm_dark.png" alt="" height="16">
                                </span>
                            </a>

                            <ul class="list-unstyled topbar-menu float-end mb-0">

                                <li class="dropdown notification-list d-xl-none">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-search noti-icon"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                        <form class="p-3">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        </form>
                                    </div>
                                </li>
            
                                <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" id="topbar-languagedrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span> <i class="mdi mdi-chevron-down align-middle"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu" aria-labelledby="topbar-languagedrop">
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                        </a>
                    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                        </a>
    
                                    </div>
                                </li>
    
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="dripicons-bell noti-icon"></i>
                                        <span class="noti-icon-badge"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">
    
                                    <!-- item-->
                                    <div class="dropdown-item noti-title px-3">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div class="px-3" style="max-height: 300px;" data-simplebar>

                                        <h5 class="text-muted font-13 fw-normal mt-0">Today</h5>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                    </div>
                                                  </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-info">
                                                            <i class="mdi mdi-account-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">New user registered</small>
                                                    </div>
                                                  </div>
                                            </div>
                                        </a>

                                        <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon">
                                                            <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                    </div>
                                                  </div>
                                            </div>
                                        </a>

                                        <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                    </div>
                                                  </div>
                                            </div>
                                        </a>

                                         <!-- item-->
                                         <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon">
                                                            <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                        <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                                    </div>
                                                  </div>
                                            </div>
                                        </a>

                                        <div class="text-center">
                                            <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                        </div>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                        View All
                                    </a>
    
                                    </div>
                                </li>

                                <li class="dropdown notification-list d-none d-sm-inline-block">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-view-apps noti-icon"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">
    
                                        <div class="p-2">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/slack.png" alt="slack">
                                                        <span>Slack</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/github.png" alt="Github">
                                                        <span>GitHub</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                        <span>Dribbble</span>
                                                    </a>
                                                </div>
                                            </div>
    
                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                        <span>Bitbucket</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                        <span>Dropbox</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                                        <span>G Suite</span>
                                                    </a>
                                                </div>
                
                                            </div>
                                        </div>
    
                                    </div>
                                </li>

                                <li class="notification-list">
                                    <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                        <i class="dripicons-gear noti-icon"></i>
                                    </a>
                                </li>
    
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="account-user-avatar"> 
                                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                        </span>
                                        <span>
                                            <span class="account-user-name">Dominic Keller</span>
                                            <span class="account-position">Founder</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                                        <!-- item-->
                                        <div class=" dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome !</h6>
                                        </div>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-circle me-1"></i>
                                            <span>My Account</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-edit me-1"></i>
                                            <span>Settings</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-lifebuoy me-1"></i>
                                            <span>Support</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-lock-outline me-1"></i>
                                            <span>Lock Screen</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-logout me-1"></i>
                                            <span>Logout</span>
                                        </a>
    
                                    </div>
                                </li>

                            </ul>
                            <a class="navbar-toggle"  data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <div class="app-search dropdown">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                        <span class="mdi mdi-magnify search-icon"></span>
                                        <button class="input-group-text btn-primary" type="submit">Search</button>
                                    </div>
                 
                                </form>

                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                                    </div>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-notes font-16 me-1"></i>
                                        <span>Analytics Report</span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-life-ring font-16 me-1"></i>
                                        <span>How can I help you?</span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-cog font-16 me-1"></i>
                                        <span>User profile settings</span>
                                    </a>
    
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                    </div>
    
                                    <div class="notification-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex">
                                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Erwin Brown</h5>
                                                    <span class="font-12 mb-0">UI Designer</span>
                                                </div>
                                            </div>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex">
                                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Jacob Deo</h5>
                                                    <span class="font-12 mb-0">Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->

                    <div class="topnav shadow-sm">
                        <div class="container-fluid">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        
                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboards" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-dashboard me-1"></i>Dashboards <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-dashboards">
                                                <a href="dashboard-analytics.html" class="dropdown-item">Analytics</a>
                                                <a href="index.html" class="dropdown-item">Ecommerce</a>
                                                <a href="dashboard-projects.html" class="dropdown-item">Projects</a>
                                                <a href="dashboard-wallet.html" class="dropdown-item">E-Wallet</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-apps me-1"></i>Apps <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                                <a href="apps-calendar.html" class="dropdown-item">Calendar</a>
                                                <a href="apps-chat.html" class="dropdown-item">Chat</a>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crm" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        CRM <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-crm">
                                                        <a href="crm-dashboard.html" class="dropdown-item">Dashboard</a>
                                                        <a href="crm-projects.html" class="dropdown-item">Project</a>
                                                        <a href="crm-orders-list.html" class="dropdown-item">Orders List</a>
                                                        <a href="crm-clients.html" class="dropdown-item">Clients</a>
                                                        <a href="crm-management.html" class="dropdown-item">Management</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Ecommerce <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                        <a href="apps-ecommerce-products.html" class="dropdown-item">Products</a>
                                                        <a href="apps-ecommerce-products-details.html" class="dropdown-item">Products Details</a>
                                                        <a href="apps-ecommerce-orders.html" class="dropdown-item">Orders</a>
                                                        <a href="apps-ecommerce-orders-details.html" class="dropdown-item">Order Details</a>
                                                        <a href="apps-ecommerce-customers.html" class="dropdown-item">Customers</a>
                                                        <a href="apps-ecommerce-shopping-cart.html" class="dropdown-item">Shopping Cart</a>
                                                        <a href="apps-ecommerce-checkout.html" class="dropdown-item">Checkout</a>
                                                        <a href="apps-ecommerce-sellers.html" class="dropdown-item">Sellers</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Email <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                        <a href="apps-email-inbox.html" class="dropdown-item">Inbox</a>
                                                        <a href="apps-email-read.html" class="dropdown-item">Read Email</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Projects <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-project">
                                                        <a href="apps-projects-list.html" class="dropdown-item">List</a>
                                                        <a href="apps-projects-details.html" class="dropdown-item">Details</a>
                                                        <a href="apps-projects-gantt.html" class="dropdown-item">Gantt</a>
                                                        <a href="apps-projects-add.html" class="dropdown-item">Create Project</a>
                                                    </div>
                                                </div>
                                                <a href="apps-social-feed.html" class="dropdown-item">Social Feed</a>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tasks" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Tasks <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-tasks">
                                                        <a href="apps-tasks.html" class="dropdown-item">List</a>
                                                        <a href="apps-tasks-details.html" class="dropdown-item">Details</a>
                                                        <a href="apps-kanban.html" class="dropdown-item">Kanban Board</a>
                                                    </div>
                                                </div>
                                                <a href="apps-file-manager.html" class="dropdown-item">File Manager</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-copy-alt me-1"></i>Pages <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Authenitication <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                                        <a href="pages-login.html" class="dropdown-item">Login</a>
                                                        <a href="pages-login-2.html" class="dropdown-item">Login 2</a>
                                                        <a href="pages-register.html" class="dropdown-item">Register</a>
                                                        <a href="pages-register-2.html" class="dropdown-item">Register 2</a>
                                                        <a href="pages-logout.html" class="dropdown-item">Logout</a>
                                                        <a href="pages-logout-2.html" class="dropdown-item">Logout 2</a>
                                                        <a href="pages-recoverpw.html" class="dropdown-item">Recover Password</a>
                                                        <a href="pages-recoverpw-2.html" class="dropdown-item">Recover Password 2</a>
                                                        <a href="pages-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                                        <a href="pages-lock-screen-2.html" class="dropdown-item">Lock Screen 2</a>
                                                        <a href="pages-confirm-mail.html" class="dropdown-item">Confirm Mail</a>
                                                        <a href="pages-confirm-mail-2.html" class="dropdown-item">Confirm Mail 2</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-error" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Error <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-error">
                                                        <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                                        <a href="pages-404-alt.html" class="dropdown-item">Error 404-alt</a>
                                                        <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                                    </div>
                                                </div>
                                                <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                                                <a href="pages-preloader.html" class="dropdown-item">With Preloader</a>
                                                <a href="pages-profile.html" class="dropdown-item">Profile</a>
                                                <a href="pages-profile-2.html" class="dropdown-item">Profile 2</a>
                                                <a href="pages-invoice.html" class="dropdown-item">Invoice</a>
                                                <a href="pages-faq.html" class="dropdown-item">FAQ</a>
                                                <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                                <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                                <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                                <a href="landing.html" class="dropdown-item">Landing</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-package me-1"></i>Components <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                                <a href="widgets.html" class="dropdown-item">Widgets</a>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Base UI 1 <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ui-kit">
                                                        <a href="ui-accordions.html" class="dropdown-item">Accordions</a>
                                                        <a href="ui-alerts.html" class="dropdown-item">Alerts</a>
                                                        <a href="ui-avatars.html" class="dropdown-item">Avatars</a>
                                                        <a href="ui-badges.html" class="dropdown-item">Badges</a>
                                                        <a href="ui-breadcrumb.html" class="dropdown-item">Breadcrumb</a>
                                                        <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
                                                        <a href="ui-cards.html" class="dropdown-item">Cards</a>
                                                        <a href="ui-carousel.html" class="dropdown-item">Carousel</a>
                                                        <a href="ui-dropdowns.html" class="dropdown-item">Dropdowns</a>
                                                        <a href="ui-embed-video.html" class="dropdown-item">Embed Video</a>
                                                        <a href="ui-grid.html" class="dropdown-item">Grid</a>
                                                        <a href="ui-list-group.html" class="dropdown-item">List Group</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Base UI 2 <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ui-kit2">
                                                        <a href="ui-modals.html" class="dropdown-item">Modals</a>
                                                        <a href="ui-notifications.html" class="dropdown-item">Notifications</a>
                                                        <a href="ui-offcanvas.html" class="dropdown-item">Offcanvas</a>
                                                        <a href="ui-placeholders.html" class="dropdown-item">Placeholders</a>
                                                        <a href="ui-pagination.html" class="dropdown-item">Pagination</a>
                                                        <a href="ui-popovers.html" class="dropdown-item">Popovers</a>
                                                        <a href="ui-progress.html" class="dropdown-item">Progress</a>
                                                        <a href="ui-ribbons.html" class="dropdown-item">Ribbons</a>
                                                        <a href="ui-spinners.html" class="dropdown-item">Spinners</a>
                                                        <a href="ui-tabs.html" class="dropdown-item">Tabs</a>
                                                        <a href="ui-tooltips.html" class="dropdown-item">Tooltips</a>
                                                        <a href="ui-typography.html" class="dropdown-item">Typography</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-extended-ui" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Extended UI <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-extended-ui">
                                                        <a href="extended-dragula.html" class="dropdown-item">Dragula</a>
                                                        <a href="extended-range-slider.html" class="dropdown-item">Range Slider</a>
                                                        <a href="extended-ratings.html" class="dropdown-item">Ratings</a>
                                                        <a href="extended-scrollbar.html" class="dropdown-item">Scrollbar</a>
                                                        <a href="extended-scrollspy.html" class="dropdown-item">Scrollspy</a>
                                                        <a href="extended-treeview.html" class="dropdown-item">Treeview</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Charts <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                        <div class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-apex-charts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Apex Charts <div class="arrow-down"></div>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="topnav-apex-charts">
                                                                <a href="charts-apex-area.html" class="dropdown-item">Area</a>
                                                                <a href="charts-apex-bar.html" class="dropdown-item">Bar</a>
                                                                <a href="charts-apex-bubble.html" class="dropdown-item">Bubble</a>
                                                                <a href="charts-apex-candlestick.html" class="dropdown-item">Candlestick</a>
                                                                <a href="charts-apex-column.html" class="dropdown-item">Column</a>
                                                                <a href="charts-apex-heatmap.html" class="dropdown-item">Heatmap</a>
                                                                <a href="charts-apex-line.html" class="dropdown-item">Line</a>
                                                                <a href="charts-apex-mixed.html" class="dropdown-item">Mixed</a>
                                                                <a href="charts-apex-pie.html" class="dropdown-item">Pie</a>
                                                                <a href="charts-apex-radar.html" class="dropdown-item">Radar</a>
                                                                <a href="charts-apex-radialbar.html" class="dropdown-item">RadialBar</a>
                                                                <a href="charts-apex-scatter.html" class="dropdown-item">Scatter</a>
                                                                <a href="charts-apex-sparklines.html" class="dropdown-item">Sparklines</a>
                                                            </div>
                                                        </div>
                                                        <a href="charts-chartjs.html" class="dropdown-item">Chartjs</a>
                                                        <a href="charts-brite.html" class="dropdown-item">Britecharts</a>
                                                        <a href="charts-sparkline.html" class="dropdown-item">Sparklines</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-forms" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Forms <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-forms">
                                                        <a href="form-elements.html" class="dropdown-item">Basic Elements</a>
                                                        <a href="form-advanced.html" class="dropdown-item">Form Advanced</a>
                                                        <a href="form-validation.html" class="dropdown-item">Validation</a>
                                                        <a href="form-wizard.html" class="dropdown-item">Wizard</a>
                                                        <a href="form-fileuploads.html" class="dropdown-item">File Uploads</a>
                                                        <a href="form-editors.html" class="dropdown-item">Editors</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tables" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Tables <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                                        <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                                        <a href="tables-datatable.html" class="dropdown-item">Data Tables</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Icons <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                        <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                                        <a href="icons-mdi.html" class="dropdown-item">Material Design</a>
                                                        <a href="icons-unicons.html" class="dropdown-item">Unicons</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Maps <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                                        <a href="maps-google.html" class="dropdown-item">Google Maps</a>
                                                        <a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layouts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-window me-1"></i>Layouts <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                                                <a href="layouts-vertical.html" class="dropdown-item">Vertical</a>
                                                <a href="layouts-detached.html" class="dropdown-item">Detached</a>
                                                <a href="layouts-full.html" class="dropdown-item">Full</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                    
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Projects</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Projects</h4>
                                </div>
                            </div>
                        </div>   
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card widget-inline">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card shadow-none m-0">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-briefcase text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>29</span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Projects</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-checklist text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>715</span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-user-group text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>31</span></h3>
                                                        <p class="text-muted font-15 mb-0">Members</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-graph-line text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>93%</span> <i class="mdi mdi-arrow-up text-success"></i></h3>
                                                        <p class="text-muted font-15 mb-0">Productivity</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="header-title">Project Status</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3 my-4 chartjs-chart" style="height: 207px;">
                                            <canvas id="project-status-chart" data-colors="#42d29d,#f9bc0d,#fa6767"></canvas>
                                        </div>

                                        <div class="row text-center mt-2 py-2">
                                            <div class="col-sm-4">
                                                <div class="my-2 my-sm-0">
                                                        <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
                                                    <h3 class="fw-normal">
                                                        <span>64%</span>
                                                    </h3>
                                                    <p class="text-muted mb-0">Completed</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="my-2 my-sm-0">
                                                        <i class="mdi mdi-trending-down text-primary mt-3 h3"></i>
                                                    <h3 class="fw-normal">
                                                        <span>26%</span>
                                                    </h3>
                                                    <p class="text-muted mb-0"> In-progress</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="my-2 my-sm-0">
                                                        <i class="mdi mdi-trending-down text-danger mt-3 h3"></i>
                                                    <h3 class="fw-normal">
                                                        <span>10%</span>
                                                    </h3>
                                                    <p class="text-muted mb-0"> Behind</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h4 class="header-title">Tasks</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                </div>
                                            </div>
                                        </div>

                                        <p><b>107</b> Tasks completed out of 195</p>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Coffee detail page - Main Page</a></h5>
                                                            <span class="text-muted font-13">Due in 3 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-warning-lighten">In-progress</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned to</span>
                                                            <h5 class="font-14 mt-1 fw-normal">Logan R. Cohn</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">3h 20min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Drinking bottle graphics</a></h5>
                                                            <span class="text-muted font-13">Due in 27 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-danger-lighten">Outdated</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned to</span>
                                                            <h5 class="font-14 mt-1 fw-normal">Jerry F. Powell</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">App design and development</a></h5>
                                                            <span class="text-muted font-13">Due in 7 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-success-lighten">Completed</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned to</span>
                                                            <h5 class="font-14 mt-1 fw-normal">Scot M. Smith</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">78h 05min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Poster illustation design</a></h5>
                                                            <span class="text-muted font-13">Due in 5 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-warning-lighten">In-progress</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned to</span>
                                                            <h5 class="font-14 mt-1 fw-normal">John P. Ritter</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">26h 58min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h4 class="header-title">Tasks Overview</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div dir="ltr">
                                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                                <canvas id="task-area-chart" data-bgColor="#3688fc" data-borderColor="#3688fc"></canvas>
                                            </div>
                                        </div>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h4 class="header-title">Recent Activities</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-start">
                                                                <img class="me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" width="40" alt="Generic placeholder image">
                                                                <div>
                                                                    <h5 class="mt-0 mb-1">Soren Drouin<small class="fw-normal ms-3">18 Jan 2019 11:28 pm</small></h5>
                                                                    <span class="font-13">Completed "Design new idea"...</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Project</span> <br/>
                                                            <p class="mb-0">Hyper Mockup</p>
                                                        </td>
                                                        <td class="table-action" style="width: 50px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-start">
                                                                <img class="me-2 rounded-circle" src="assets/images/users/avatar-6.jpg" width="40" alt="Generic placeholder image">
                                                                <div>
                                                                    <h5 class="mt-0 mb-1">Anne Simard<small class="fw-normal ms-3">18 Jan 2019 11:09 pm</small></h5>
                                                                    <span class="font-13">Assigned task "Poster illustation design"...</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Project</span> <br/>
                                                            <p class="mb-0">Hyper Mockup</p>
                                                        </td>
                                                        <td class="table-action" style="width: 50px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-start">
                                                                <img class="me-2 rounded-circle" src="assets/images/users/avatar-3.jpg" width="40" alt="Generic placeholder image">
                                                                <div>
                                                                    <h5 class="mt-0 mb-1">Nicolas Chartier<small class="fw-normal ms-3">15 Jan 2019 09:29 pm</small></h5>
                                                                    <span class="font-13">Completed "Drinking bottle graphics"...</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Project</span> <br/>
                                                            <p class="mb-0">Web UI Design</p>
                                                        </td>
                                                        <td class="table-action" style="width: 50px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-start">
                                                                <img class="me-2 rounded-circle" src="assets/images/users/avatar-4.jpg" width="40" alt="Generic placeholder image">
                                                                <div>
                                                                    <h5 class="mt-0 mb-1">Gano Cloutier<small class="fw-normal ms-3">10 Jan 2019 08:36 pm</small></h5>
                                                                    <span class="font-13">Completed "Design new idea"...</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Project</span> <br/>
                                                            <p class="mb-0">UBold Admin</p>
                                                        </td>
                                                        <td class="table-action" style="width: 50px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-start">
                                                                <img class="me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" width="40" alt="Generic placeholder image">
                                                                <div>
                                                                    <h5 class="mt-0 mb-1">Francis Achin<small class="fw-normal ms-3">08 Jan 2019 12:28 pm</small></h5>
                                                                    <span class="font-13">Assigned task "Hyper app design"...</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Project</span> <br/>
                                                            <p class="mb-0">Website Mockup</p>
                                                        </td>
                                                        <td class="table-action" style="width: 50px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                                    <!-- item-->
                                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-xl-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h4 class="header-title">Your Calendar</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-7">
                                                <div data-provide="datepicker-inline" data-date-today-highlight="true" class="calendar-widget"></div>
                                            </div> <!-- end col-->
                                            <div class="col-md-5">
                                                <ul class="list-unstyled mt-1">
                                                    <li class="mb-4">
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 7:30 AM - 10:00 AM
                                                        </p>
                                                        <h5>Meeting with BD Team</h5>
                                                    </li>
                                                    <li class="mb-4">
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 10:30 AM - 11:45 AM
                                                        </p>
                                                        <h5>Design Review - Hyper Admin</h5>
                                                    </li>
                                                    <li class="mb-4">
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 12:15 PM - 02:00 PM
                                                        </p>
                                                        <h5>Setup Github Repository</h5>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 5:30 PM - 07:00 PM
                                                        </p>
                                                        <h5>Meeting with Design Studio</h5>
                                                    </li>
                                                </ul>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                        </div>
                        <!-- end row-->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

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

        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout width, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="width" value="fluid" id="fluid-check" checked />
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="width" value="boxed" id="boxed-check" />
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>


                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                            class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="{{ asset('assets_admin/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/app.min.js') }}"></script>


        <!-- third party js -->
        <script src="{{ asset('assets_admin/js/vendor/chart.min.js') }}"></script>

        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{ asset('assets_admin/js/pages/demo.dashboard-projects.js') }}"></script>
        <!-- end demo js-->

    </body>
</html>