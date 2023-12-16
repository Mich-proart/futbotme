<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panel administración contenido">
    <meta name="csrf-token" content="eQ7273HY5qVH6dIMA1WpyTDoeH2N7m6yvA5lTHuV"><!-- CSRF Token -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="http://localhost:8000/assets_admin/images/favicon.ico">
    <title>Futbolme</title>

    <!-- App css -->
    <link rel="stylesheet" href="http://localhost:8000/assets_admin/css/icons.min.css" type="text/css">
    <link rel="stylesheet" href="http://localhost:8000/assets_admin/css/app-creative.min.css" type="text/css"
        id="app-style">

    <link href="http://localhost:8000/assets_admin/css/vendor/dataTables.bootstrap5.css" rel="stylesheet"
        type="text/css">
    <link href="http://localhost:8000/assets_admin/css/vendor/responsive.bootstrap5.css" rel="stylesheet"
        type="text/css">
    <link href="http://localhost:8000/assets_admin/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
    <link href="http://localhost:8000/assets_admin/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">
    <link href="http://localhost:8000/assets_admin/css/vendor/fixedHeader.bootstrap5.css" rel="stylesheet"
        type="text/css">
    <link href="http://localhost:8000/assets_admin/css/vendor/fixedColumns.bootstrap5.css" rel="stylesheet"
        type="text/css">

    <!-- Scripts -->

</head>

<body data-layout="vertical" data-layout-color="light" data-layout-mode="fluid" data-leftbar-theme="dark"
    data-leftbar-compact-mode="fixed" class><noscript>You
        need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div class="wrapper">
            <div class="leftside-menu"><a class="logo text-center logo-light" href="/"><span class="logo-lg"><img
                            src="" alt="logo" height="16"></span><span class="logo-sm"><img
                            src="" alt="logo" height="16"></span></a><a
                    class="logo text-center logo-dark" href="/"><span class="logo-lg"><img src=""
                            alt="logo" height="16"></span><span class="logo-sm"><img src=""
                            alt="logo" height="16"></span></a>
                <div data-simplebar="init" style="max-height: 100%;">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                    aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        <ul class="side-nav" id="main-side-menu">
                                            <li class="side-nav-title side-nav-item">Navigation</li>
                                            <li class="side-nav-item menuitem-active"><a data-menu-key="dashboards"
                                                    aria-expanded="true"
                                                    class="has-arrow side-sub-nav-link side-nav-link menuitem-active"
                                                    href="/"><i class="uil-home-alt"></i><span
                                                        class="badge bg-success float-end">4</span><span>
                                                        Dashboards </span></a>
                                                <ul class="side-nav-second-level collapse show" style>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="ds-analytics"
                                                            href="/dashboard/analytics"><span>
                                                                Analytics
                                                            </span></a></li>
                                                    <li class="side-nav-item menuitem-active"><a
                                                            class="side-nav-link-ref side-sub-nav-link active"
                                                            data-menu-key="ds-ecommerce"
                                                            href="/dashboard/ecommerce"><span>
                                                                Ecommerce
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="ds-project"
                                                            href="/dashboard/project"><span>
                                                                Projects
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="ds-ewallet"
                                                            href="/dashboard/e-wallet"><span
                                                                class="badge bg-danger rounded-pill font-10 float-end">New</span><span>
                                                                E-Wallet
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-title side-nav-item">Apps</li>
                                            <li class="side-nav-item"><a
                                                    class="side-nav-link-ref side-sub-nav-link side-nav-link"
                                                    data-menu-key="apps-calendar" href="/apps/calendar"><i
                                                        class="uil-calender"></i><span>
                                                        Calendar </span></a></li>
                                            <li class="side-nav-item"><a
                                                    class="side-nav-link-ref side-sub-nav-link side-nav-link"
                                                    data-menu-key="apps-chat" href="/apps/chat"><i
                                                        class="uil-comments-alt"></i><span>
                                                        Chat </span></a></li>
                                            <li class="side-nav-item"><a data-menu-key="apps-crm"
                                                    aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-tachometer-fast"></i><span
                                                        class="badge bg-danger float-end">New</span><span>
                                                        CRM </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="crm-products"
                                                            href="/apps/crm/dashboard"><span>
                                                                Dashboard
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="crm-projects"
                                                            href="/apps/crm/projects"><span>
                                                                Project
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="crm-orders" href="/apps/crm/orders"><span>
                                                                Orders List
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="crm-clients"
                                                            href="/apps/crm/clients"><span>
                                                                Clients
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="crm-management"
                                                            href="/apps/crm/management"><span>
                                                                Management
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a data-menu-key="apps-ecommerce"
                                                    aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-store"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Ecommerce </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="ecommerce-products"
                                                            href="/apps/ecommerce/products"><span>
                                                                Products
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="ecommerce-details"
                                                            href="/apps/ecommerce/details"><span>
                                                                Products
                                                                Details
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="ecommerce-orders"
                                                            href="/apps/ecommerce/orders"><span>
                                                                Orders
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="ecommerce-order-details"
                                                            href="/apps/ecommerce/order/details"><span>
                                                                Order
                                                                Details
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="ecommerce-customers"
                                                            href="/apps/ecommerce/customers"><span>
                                                                Customers
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="ecommerce-shopping-cart"
                                                            href="/apps/ecommerce/shopping-cart"><span>
                                                                Shopping
                                                                Cart
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="ecommerce-checkout"
                                                            href="/apps/ecommerce/checkout"><span>
                                                                Checkout
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="ecommerce-sellers"
                                                            href="/apps/ecommerce/sellers"><span>
                                                                Sellers
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a data-menu-key="apps-email"
                                                    aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-envelope"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Email </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="email-inbox"
                                                            href="/apps/email/inbox"><span>
                                                                Inbox
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="email-read-email"
                                                            href="/apps/email/details"><span>
                                                                Read Email
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a data-menu-key="apps-projects"
                                                    aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-briefcase"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Projects </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="project-list"
                                                            href="/apps/projects/list"><span>
                                                                List </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="project-details"
                                                            href="/apps/projects/details"><span>
                                                                Details
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="project-gantt"
                                                            href="/apps/projects/gantt"><span
                                                                class="badge bg-light rounded-pill font-10 float-end text-dark">New</span><span>
                                                                Gantt
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="project-create-project"
                                                            href="/apps/projects/new"><span>
                                                                Create
                                                                Project
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a
                                                    class="side-nav-link-ref side-sub-nav-link side-nav-link"
                                                    data-menu-key="apps-social" href="/apps/social"><i
                                                        class="uil-rss"></i><span>
                                                        Social Feed </span></a></li>
                                            <li class="side-nav-item"><a data-menu-key="apps-tasks"
                                                    aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-clipboard-alt"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Tasks </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="task-list" href="/apps/tasks/list"><span>
                                                                List </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="task-details"
                                                            href="/apps/tasks/details"><span>
                                                                Details
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="task-kanban"
                                                            href="/apps/tasks/kanban"><span>
                                                                Kanban Board
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a
                                                    class="side-nav-link-ref side-sub-nav-link side-nav-link"
                                                    data-menu-key="apps-file-manager" href="/apps/file"><i
                                                        class="uil-folder-plus"></i><span>
                                                        File Manager </span></a></li>
                                            <li class="side-nav-title side-nav-item">Custom</li>
                                            <li class="side-nav-item"><a data-menu-key="pages" aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-copy-alt"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Pages </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-profile" href="/pages/profile"><span>
                                                                Profile
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-profile2"
                                                            href="/pages/profile2"><span>
                                                                Profile 2
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-invoice" href="/pages/invoice"><span>
                                                                Invoice
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-faq" href="/pages/faq"><span>
                                                                FAQ </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-pricing" href="/pages/pricing"><span>
                                                                Pricing
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a target="_blank"
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-maintenance"
                                                            href="/maintenance"><span>
                                                                Maintenance
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-error-404" href="/error-404"><span>
                                                                Error - 404
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-error-404-alt"
                                                            href="/pages/error-404-alt"><span>
                                                                Error -
                                                                404-alt
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-error-500" href="/error-500"><span>
                                                                Error - 500
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-starter" href="/pages/starter"><span>
                                                                Starter Page
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-preloader"
                                                            href="/pages/preloader"><span>
                                                                With
                                                                Preloader
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="page-timeline"
                                                            href="/pages/timeline"><span>
                                                                Timeline
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a target="_blank"
                                                    class="side-nav-link-ref side-sub-nav-link side-nav-link"
                                                    data-menu-key="landing" href="/landing"><i
                                                        class="uil-globe"></i><span
                                                        class="badge bg-secondary rounded-pill font-10 float-end">New</span><span>
                                                        Landing </span></a></li>
                                            <li class="side-nav-title side-nav-item">Components</li>
                                            <li class="side-nav-item"><a data-menu-key="base-ui"
                                                    aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-box"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Base UI </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-accordions"
                                                            href="/ui/accordions"><span>
                                                                Accordions
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-alerts" href="/ui/alerts"><span>
                                                                Alerts
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-avatars" href="/ui/avatars"><span>
                                                                Avatars
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-badges" href="/ui/badges"><span>
                                                                Badges
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-breadcrumb"
                                                            href="/ui/breadcrumb"><span>
                                                                Breadcrumb
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-buttons" href="/ui/buttons"><span>
                                                                Buttons
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-cards" href="/ui/cards"><span>
                                                                Cards
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-carousel"
                                                            href="/ui/carousel"><span>
                                                                Carousel
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-dropdown"
                                                            href="/ui/dropdowns"><span>
                                                                Dropdowns
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-embedvideo"
                                                            href="/ui/embedvideo"><span>
                                                                Embed Video
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-grid" href="/ui/grid"><span>
                                                                Grid </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-listgroups"
                                                            href="/ui/listgroups"><span>
                                                                List Groups
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-modals" href="/ui/modals"><span>
                                                                Modals
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-notifications"
                                                            href="/ui/notifications"><span>
                                                                Notifications
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-offcanvas"
                                                            href="/ui/offcanvas"><span>
                                                                Offcanvas
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-paginations"
                                                            href="/ui/paginations"><span>
                                                                Paginations
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-popovers"
                                                            href="/ui/popovers"><span>
                                                                Popovers
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-progress"
                                                            href="/ui/progress"><span>
                                                                Progress
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-ribbons" href="/ui/ribbons"><span>
                                                                Ribbons
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-spinners"
                                                            href="/ui/spinners"><span>
                                                                Spinners
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-tabs" href="/ui/tabs"><span>
                                                                Tabs </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-tooltips"
                                                            href="/ui/tooltips"><span>
                                                                Tooltips
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="base-ui-typography"
                                                            href="/ui/typography"><span>
                                                                Typography
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a data-menu-key="extended-ui"
                                                    aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-package"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Extended UI </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="extended-ui-dragdrop"
                                                            href="/ui/dragdrop"><span>
                                                                Drag and
                                                                Drop
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="extended-ui-rangesliders"
                                                            href="/ui/rangesliders"><span>
                                                                Range
                                                                Sliders
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="extended-ui-ratings"
                                                            href="/ui/ratings"><span>
                                                                Ratings
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a
                                                    class="side-nav-link-ref side-sub-nav-link side-nav-link"
                                                    data-menu-key="widgets" href="/ui/widgets"><i
                                                        class="uil-layer-group"></i><span>
                                                        Widgets </span></a></li>
                                            <li class="side-nav-item"><a data-menu-key="icons" aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-streering"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Icons </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="icon-dripicons"
                                                            href="/ui/icons/dripicons"><span>
                                                                Dripicons
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="icon-mdiicons" href="/ui/icons/mdi"><span>
                                                                Material
                                                                Design
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="icon-unicons"
                                                            href="/ui/icons/unicons"><span>
                                                                Unicons
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a data-menu-key="forms" aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-document-layout-center"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Forms </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="form-basic" href="/ui/forms/basic"><span>
                                                                Basic
                                                                Elements
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="form-advanced"
                                                            href="/ui/forms/advanced"><span>
                                                                Form
                                                                Advanced
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="form-validation"
                                                            href="/ui/forms/validation"><span>
                                                                Validation
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="form-wizard" href="/ui/forms/wizard"><span>
                                                                Wizard
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="form-upload" href="/ui/forms/upload"><span>
                                                                File Upload
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="form-editors"
                                                            href="/ui/forms/editors"><span>
                                                                Editors
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a data-menu-key="charts" aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-chart"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Charts </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="chart-apex" href="/ui/charts/apex"><span>
                                                                Apex Charts
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="chart-brite" href="/ui/charts/brite"><span>
                                                                Brite Charts
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="chart-chartjs"
                                                            href="/ui/charts/chartjs"><span>
                                                                Chartjs
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a data-menu-key="tables" aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-table"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Tables </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="table-basic" href="/ui/tables/basic"><span>
                                                                Basic Tables
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="table-advanced"
                                                            href="/ui/tables/advanced"><span>
                                                                Advanced
                                                                Tables
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a data-menu-key="maps" aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-location-point"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Maps </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="maps-googlemaps"
                                                            href="/ui/googlemaps"><span>
                                                                Google Maps
                                                            </span></a></li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="maps-vectormaps"
                                                            href="/ui/vectormaps"><span>
                                                                Vector Maps
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                            <li class="side-nav-item"><a data-menu-key="menu-levels"
                                                    aria-expanded="false"
                                                    class="has-arrow side-sub-nav-link side-nav-link"
                                                    href="/"><i class="uil-folder-plus"></i><span
                                                        class="menu-arrow"></span><span>
                                                        Menu Levels </span></a>
                                                <ul class="side-nav-second-level collapse">
                                                    <li class="side-nav-item"><a data-menu-key="menu-levels-1-1"
                                                            aria-expanded="false" class="has-arrow side-sub-nav-link"
                                                            href="/"><span class="menu-arrow"></span><span>
                                                                Level 1.1
                                                            </span></a>
                                                        <ul class="side-nav-third-level collapse">
                                                            <li class="side-nav-item"><a
                                                                    data-menu-key="menu-levels-2-1"
                                                                    aria-expanded="false"
                                                                    class="has-arrow side-sub-nav-link"
                                                                    href="/"><span
                                                                        class="menu-arrow"></span><span>
                                                                        Level
                                                                        2.1
                                                                    </span></a>
                                                                <ul class="side-nav-third-level collapse">
                                                                    <li class="side-nav-item"><a
                                                                            class="side-nav-link-ref side-sub-nav-link"
                                                                            data-menu-key="menu-levels-3-1"
                                                                            href="/"><span>
                                                                                Level
                                                                                3.1
                                                                            </span></a></li>
                                                                    <li class="side-nav-item"><a
                                                                            class="side-nav-link-ref side-sub-nav-link"
                                                                            data-menu-key="menu-levels-3-2"
                                                                            href="/"><span>
                                                                                Level
                                                                                3.2
                                                                            </span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="side-nav-item"><a
                                                                    class="side-nav-link-ref side-sub-nav-link"
                                                                    data-menu-key="menu-levels-2-2"
                                                                    href="/"><span>
                                                                        Level
                                                                        2.2
                                                                    </span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="side-nav-item"><a
                                                            class="side-nav-link-ref side-sub-nav-link"
                                                            data-menu-key="menu-levels-1-2" href="/"><span>
                                                                Level 1.2
                                                            </span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="help-box text-center text-white"><a
                                                class="float-end close-btn text-white" href="/"><i
                                                    class="mdi mdi-close"></i></a><img
                                                src="/static/media/help-icon.152a10a0.svg" alt="Helper Icon"
                                                height="90">
                                            <h5 class="mt-3">Unlimited
                                                Access</h5>
                                            <p class="mb-3">Upgrade
                                                to plan to
                                                get access to unlimited
                                                reports</p><button
                                                class="btn btn-sm btn-outline-light">Upgrade</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: auto; height: 1624px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                            style="height: 320px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
                    </div>
                </div>
            </div>
            <div class="content-page">
                <div class="content">
                    <div class="navbar-custom">
                        <div class>
                            <ul class="list-unstyled topbar-menu float-end mb-0">
                                <li class="notification-list topbar-dropdown d-xl-none">
                                    <div class="dropdown"><a
                                            class="nav-link dropdown-toggle arrow-none dropdown-toggle"
                                            id="dropdown-apps" aria-expanded="false" variant="link"
                                            href="/dashboard/ecommerce"><i class="dripicons-search noti-icon"></i></a>
                                    </div>
                                </li>
                                <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                                    <div class="dropdown"><a
                                            class="nav-link dropdown-toggle arrow-none dropdown-toggle"
                                            id="dropdown-languages" aria-expanded="false" variant="link"
                                            href="/dashboard/ecommerce"><img
                                                src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5NTM4RDUxQjYxM0IxMUU3ODM5NTg5Qjc3NkUwNEZFMSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5NTM4RDUxQzYxM0IxMUU3ODM5NTg5Qjc3NkUwNEZFMSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk1MzhENTE5NjEzQjExRTc4Mzk1ODlCNzc2RTA0RkUxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjk1MzhENTFBNjEzQjExRTc4Mzk1ODlCNzc2RTA0RkUxIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAKgBAAwERAAIRAQMRAf/EAJkAAQABBQEAAAAAAAAAAAAAAAAHAgMEBQYBAQEAAgMBAQAAAAAAAAAAAAAAAgYBBAUDBxAAAAQBBwkHBAMBAAAAAAAAAQIDBAAREhMFBhYHMaHRkpPTFVVWIUGRIjIzFFFhQtKCIyVFEQAAAgMQAgIBBQAAAAAAAAAAAfACAxEhMVGBoRJSghNTBBRUBRVBcZHRMmHhIkJD/9oADAMBAAIRAxEAPwDlhqtFarm7o4qNFlE3Cx3LoRonRkzgAJthKQRE/b2zhyxa6ThuQwQePY1hmjZ9nxYyXx3cwFDJ8G/6QACFJSiFHMmTs0RvDo+PfiEHBjN6jaGamEywqz/iDxFKcLVr8gRA5HUpJwGCT8YkbQ3fl7yfoBubIVNU94KpSrBVdk0cJuqesREKBaiE4EM3ESAM3ygAy98c7lHFmC1I3nvZDp8O2as8wqbJWku+9G8JNuvhv1Ep4l/SKpdMqwufZcjgFP8AYXXw36iU8S/pC6ZVg7LkcAp/sLr4b9RKeJf0hdMqwdlyOAU/2PS2Zw5KYDFtGoBgGUBASgICH8IXTKsMHyPIn/gSSiHmhQQqZFU4fFBw1dkKu7AF0nAgoUJjYkwaFQMk+XL3hF6WfWjfKDx7jHzobIW3+gNX/GXpQcnPwmcXiRQ+JLSfMo5BT75mbvjzdedd8Q/1hiAWG5iHTSdgoRQjYtXFO/RSAjVsM4fK8b0f95gk9XfJ3xI4o6T3k/R+AGdZo9UNLRVO8rZis4q5Ur0xjJmCgX8yhSnbJf1URSmylljR5JZUmC1J8v4vefEI6fDs2y+YVJidFd9w5PRiR7w4V8iceAb6KreMaqfIueg5TGVSyF4cK+ROPAN9C8Y1U+Q0HKYyqWQvDhXyJx4BvoXjGqnyGg5TGVSyF4cK+ROPAN9C8Y1U+Q0HKYyqWRGhLF2+aNSt2lnHiLgyazd8vNFUqyahgEAKUQEpJACScUe2LrqGRm6axfoPndAxfGylsxcCldR7walFctXeeeCgpUc75E2ky+aTJEb9m5+ZUo/2CgcQoTsviKBSrK2eeKVi2BuWr3YJzQRK2ERApkwLMVl7O02eMm3Y1icfdlCgsNvZCobb1XaJhWwWXcA6blcC7UVA1GsdedIYCSABJANJIWNPkMwrcmSp0jecIb3HZdRdsRNFqCj7piSr0W96YLqH0xXL1pVFk63I7icgvRb3pguofTC9aVQ63I7icgvRb3pguofTC9aVQ63I7icgvRb3pguofTC9aVQ63I7ichXwTFnnTXNuIUG0ZJII6zisJdLYcExZ501zbiFBtGSSBrOKwl0thwTFnnTXNuIUG0ZJIGs4rCXS2HBMWedNc24hQbRkkgazisJdLYcExZ501zbiFBtGSSBrOKwl0thwTFnnTXNuIUG0ZJIGs4rCXS2HBMWedNc24hQbRkkgazisJdLYcExZ501zbiFBtGSSBrOKwl0tjT3Xsd1aO0JpjzulKw6HZZzbTGF17HdWjtCaYXSlYOyzm2mMLr2O6tHaE0wulKwdlnNtMYXXsd1aO0JphdKVg7LObaYwuvY7q0doTTC6UrB2Wc20xhdex3Vo7QmmF0pWDss5tpjC69jurR2hNMLpSsHZZzbTGF17HdWjtCaYXSlYOyzm2mMcE499T2/Ub2/Rl/H7fSNMxaVPxKGWEW9WMCQasADVgAasADVgAasAFxv76ft+ovuejL+X2+sZIRX/ABOGSEf/2Q=="
                                                alt="English" class="me-0 me-sm-1" height="12">
                                            <span class="align-middle d-none d-sm-inline-block">English</span><i
                                                class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i></a>
                                    </div>
                                </li>
                                <li class="dropdown notification-list">
                                    <div class="dropdown"><a
                                            class="nav-link dropdown-toggle arrow-none dropdown-toggle"
                                            id="dropdown-notification" aria-expanded="false" variant="link"
                                            href="/dashboard/ecommerce"><i class="dripicons-bell noti-icon"></i><span
                                                class="noti-icon-badge"></span></a></div>
                                </li>
                                <li class="dropdown notification-list d-none d-sm-inline-block">
                                    <div class="dropdown"><a
                                            class="nav-link dropdown-toggle arrow-none dropdown-toggle"
                                            id="dropdown-apps" aria-expanded="false" variant="link"
                                            href="/dashboard/ecommerce"><i
                                                class="dripicons-view-apps noti-icon"></i></a></div>
                                </li>
                                <li class="notification-list"><button
                                        class="nav-link dropdown-toggle end-bar-toggle arrow-none btn btn-link shadow-none"><i
                                            class="dripicons-gear noti-icon"></i></button></li>
                                <li class="dropdown notification-list">
                                    <div class="dropdown"><a
                                            class="nav-link dropdown-toggle nav-user arrow-none me-0 dropdown-toggle"
                                            id="dropdown-profile" aria-expanded="false" variant="link"
                                            href="/dashboard/ecommerce"><span class="account-user-avatar"><img
                                                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBAQFBAYFBQYJBgUGCQsIBgYICwwKCgsKCgwQDAwMDAwMEAwODxAPDgwTExQUExMcGxsbHB8fHx8fHx8fHx//2wBDAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCACWAJYDAREAAhEBAxEB/8QAHAABAAIDAQEBAAAAAAAAAAAAAAEGAgUHAwQI/8QANxAAAQQBAgQEAwUHBQAAAAAAAQACAxEEBSESMUFRBhMiYTKRoRRxgbHBB0JDYnLR8RUjM1KC/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAEEBQIDBv/EACURAQACAgIDAAMAAgMAAAAAAAABAgMRBDESIUEiUWEFMhNCgf/aAAwDAQACEQMRAD8A/P6+ieAgICAgICAgICAgICAgICAgICAgICAgICAgICCaKI2hCBEiAgICAgICAgICAgICAgIMmRyPIDGlxPIAEqJtEOZmIZSRSsdwvBaex2/NRFolEWj4jzDyIsC9ugvspiExViSKFdqKaTpClMCAgICAgICAgICAgICAg33hFsk+f9mDqBot9jfNUebqK7UuZqI2uOT4QwMycvyHuce7dvos6nJtWNQzq8q1Y9PMfs+0NpBuR2989j7L0nm5HU87IZngXQpYiyJjoJObZGm/woqK83JE97K83JCla5oE2mS18cf/AHWlx+TGRpYORF2pVpaEBAQEBAQEBAQEBAQZNY5xpotJnSJnS0+CcV41ASAGuHf3KzOdfcaZ3MvuNOhRNdxWVlsqXtQHNS5eUldEdQrXiqIGBslbtu/xVjjT+S1x59ucPbwvc3sSFux03Kz6YqUiAgICAgICAgICAg2GmsaXtoW5xAo+6r5pVc0y6VoWnx4mLxNaPMeL5dCsTJfylkZb7lsWzsi9Urg0DckmgFw8dbfHk+KdBgdwy5TQRtYBI+i9aYL26h6V42SeoesGp6dmNJxMmOX2a4E/JcWpavcItjtXuGu1iKOfBmLyGgD6hTinVoemKdS5lmCsl9cjTh9xFr6DHP4t3HO6vFduxAQEBAQEBAQEBBYNJ8OR5uEJPWXyDi42kU3eqDa35d1Qzcqa20o5eRNbaZP06TDyIoW+vicPLkbsCuYyxesy4/5PKNui6e13lNDugAWVLKvPtjn4LJGcT4/Pr+HtR/ApEzEppZStaLouFjdBjaXfxZN/oKAWjg9+/No4ff8A3b/w74cxzBHlyRiB7gCI29FVzZZmdb2q58871DRePcrNw9QbhsPDjvj4mu72aKtcHFWY3PcLXBx1tXf1TnXe5utr5rVacIRIgICAgICAgICAgtXhebz8M4hPwOPE0Grad6WXzK+NvJm8uurbb7Kx4mYoHBwuicHRbUAFSpadqkTO270+biiY4bgheUwr3j22FgkI83hkYkErgZGh1d026raXvE2CJgFcLR8LQiJ3KrftFxI8nTIspg9eM42f5XCvzCucHJq+v2u/4+81tr9uarabYgICAgICAgICAgINloMhGe2PiLRKCLaaII3BCrcqN13+lfkx+O1vyZcgYTo5nCRv7r/hP/of2WTWIm3pmxEb9Njo072Qta7cbbrzydvHLVvopGOIo2vNXmGUvJCr58kzMZxRujbQ3dLxUPkpj+uqx+1a8TeKcB+mT6e8xzZbmuDhFZYNtjZCu8fj28ot8XONx7eUW+OdLZbQgICAgICAgICAgIPt0UE6pjgc7J+QK8eRP4S8eRP4SvUuN5+G9g+Ittv3hYdbattkxOpfLo+oRg8DnAPbtV9V65sc9u8lVjxJB525sjfZVlW8PqzW5UrBHjuYwnd732RXahXNI19cU1HbT6vl6xj4/ltx4HMd6Db3k77cyF6460nuZe2OtJntzzVsqWbLmdJGxjyeAhhtoArYfJbWCkRWNS2cNIiI1L4F7vcQEBAQEBAQEBAQEG48LRtfqdmraxxaPdVObM+Cry51VesaiwHqFiSyrNFrmmzQTnMxLs7vaPzV3BmiY8bLOLJE+pZaV4jjEjPMfVbPv9Ey8afiMmCVtwtQxsiPibIL6BUrVmO1K1Jhp/FYBiFZJYAC4MaNjXuvfj99Pbj99OayO4nk3e/Pv7rdrHpuVj0xXToQEBAQEBAQEBAQENvTHnlgmZNE7hkjILSub1i0alxasWjUugaDqkWoY/GKbI3aWPs7+x6LC5GGcdtMjPimk6bd0LJGcLha8Nq8T7VXxH4e4OLJxfQBu9tAfja0ONyfll7ByPkqzFqGoYry2OZ0bgdwD1C0ZxUt70vTjraET6nnTkmWVzr23SuGteoTXDWHyr1eogICAgICAgICAgIgP+VAnl7oPr0zUcjTsoZEJBqhIy9nN7LzzYoyV1Lzy44vGpdH0zU8fNx2zwOtjufcHqD7rByYppOpYuXHNZ1Lx17MOPiPeGh2x2Oy6w08rRCcVdy5rNM+aV0r64nGzWwX0Fa6jUNylYrGkCNxAIFg31F7Cym0zLFS6EQICAgICAgICGxECgSATtVk8qQ2X/lBJvewAefbn7IPp07U8vT8jzsZ1X8cZ3a4diF55cNbxqXnkxReNSshkyPEmM77O4x+UB58N2RfL7wVnxWOPb2ozEYZ9tRpuiOnlyMae45hGTHY5ODhurOXk+MRMdLGTka1MNVNC+GSSGVpbLG4tcOxB3VuttxuOlmLbjcMp3hzyRwgHhJa26vho81EQisPJdOxAQEBAQEJEQc+SgPdSCgBV78v0UieXT5qBClOmRb6eLYAmg27Khz/ABs/Dmfl4WrwfZX/APO9sUrasOaXciPqvDk44tSd/HjyccWpO/jonkQyZhb5XrLOKSYDZtUQ38VhxM67Y25iO1P8ZYEfHBqbWlseQ50U5AunM+E1tuWrT4OSdTVpcPJPuqrLRX0nh2o33RCESICAgIG6ISBvyvqaUB0QOV9NkDnXT37oAsgjoN0E0b2HMbWkAywWmgevq5GkJASKdt1FUpNMmuLHMeH8L2DiY5nMOBsX72udbc63t1XQJnT6TDlyuDppog555G632918/mrq8xH7YWaNXmHwa5jsm8N5sZbZbE3Jj9iOZHyXpxrayRL0wW1khzb08Ju+Laj097W9PbbntkXSSdQS5xNAAG6XOtI1EMF06EBAQED7lCEn6nmEEGufT3QB80DbqLQlNEDcdlJtNj02S4Vy7eyByDXFg4SCB7kdVEoPhrcOscu1/qpTL1gxsmaKR8UJdHGQZZgCQwfzEcguLXiJjcubWiJjcuheGcr7R4VjdzmhL4HO6/Ft9HLF5dPHJP8AWPyaayz/AFuMnFEkAhGwlifjk/1t2+oXhS2p2r1tqf8A1yF0bmPdEQS5ltIqiOHnsvo4ncbfQxO42x336olH59lIIkQEBBPXb6qEIG24O6CduhQQgnoR3QSBvxVbexREov01fXdv6on6ysepwYOE+kAm6PcIhAeOIuA4XfuhvL6onXx74uoZWLDkRQzPiZkM4JWNqnjs6/ZcXpW0xMx04vji0xM/Fu8Czufp2diEAFjmPAHZzavb+lZvPr+USzudH5RK4O9WJ5g5sLX/ACNrPZ/1zbxnpwwteleBUGVUzCNvi2eB+K2+Hk8qf2Gzw8nlTX2GiBogiwRuD1BB2pWltlITxcXEXOcPW49See/VRVEe2C6dCAgIBqlCEjntsegQPzQQgIJ26i9tvvUks2B5c2iQ6vRXP2USiWG1Gxv0KJZvL/VYbdj4au62qlEaRGmJDRe9uvn091KVo/Z8Xf6hkhrTweT/ALrr2+IcO3zVD/I/6woc/wD1hfoK+zSh3wU6z7LJZM9wrHj1uC7R8R2Q8MzWG8dhBJeKAeLbddDurvBm3nOuvq7wZt5zrpz/AGoCtxzPdbDYQpSICAgIP//Z"
                                                    class="rounded-circle" alt="user"></span><span><span
                                                    class="account-user-name">Dominic
                                                    Keller</span><span
                                                    class="account-position">Founder</span></span></a></div>
                                </li>
                            </ul><button class="button-menu-mobile open-left"><i class="mdi mdi-menu"></i></button>
                            <div class="app-search dropdown css-b62m3t-container"><span
                                    id="react-select-2-live-region" class="css-7pg0cj-a11yText"></span><span
                                    aria-live="polite" aria-atomic="false" aria-relevant="additions text"
                                    class="css-7pg0cj-a11yText"></span>
                                <div class="react-select__control css-1s2u09g-control"><span
                                        class="mdi mdi-magnify search-icon"></span>
                                    <div class="react-select__value-container css-1d8n9bt">
                                        <div class="react-select__placeholder css-14el2xx-placeholder"
                                            id="react-select-2-placeholder">Search...</div>
                                        <div class="react-select__input-container css-ackcql" data-value><input
                                                class="react-select__input"
                                                style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px none; margin: 0px; outline: 0px; padding: 0px;"
                                                autocapitalize="none" autocomplete="off" autocorrect="off"
                                                id="react-select-2-input" spellcheck="false" tabindex="0"
                                                type="text" aria-autocomplete="list" aria-expanded="false"
                                                aria-haspopup="true" aria-controls="react-select-2-listbox"
                                                aria-owns="react-select-2-listbox" role="combobox"
                                                aria-describedby="react-select-2-placeholder" value></div>
                                    </div>
                                    <div>
                                        <div class="input-group react-select__indicators css-1wy0on6"><button
                                                class="btn btn-primary input-group-text">Search</button></div>
                                    </div>
                                </div><input name="search-app" type="hidden" value>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <div class="react-datepicker-wrapper">
                                                    <div class="react-datepicker__input-container">
                                                        <div class="input-group"><input type="text"
                                                                class="form-control form-control-light" readonly
                                                                value="10/09/2023">
                                                            <div class="input-group-append"><span
                                                                    class="input-group-text bg-primary border-primary text-white"><i
                                                                        class="mdi mdi-calendar-range font-13"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><a class="btn btn-primary ms-2" href="/dashboard/ecommerce"><i
                                                    class="mdi mdi-autorenew"></i></a><a class="btn btn-primary ms-1"
                                                href="/dashboard/ecommerce"><i class="mdi mdi-filter-variant"></i></a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="widget-flat card">
                                            <div class="card-body">
                                                <div class="float-end"><i
                                                        class="mdi mdi-account-multiple widget-icon"></i></div>
                                                <h5 class="fw-normal mt-0 text-muted" title="Number of Customers">
                                                    Customers</h5>
                                                <h3 class="mt-3 mb-3">36,254</h3>
                                                <p class="mb-0 text-muted"><span class="text-success me-2"><i
                                                            class="mdi mdi-arrow-up-bold"></i>
                                                        5.27%</span><span class="text-nowrap">Since
                                                        last month</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="widget-flat card">
                                            <div class="card-body">
                                                <div class="float-end"><i class="mdi mdi-cart-plus widget-icon"></i>
                                                </div>
                                                <h5 class="fw-normal mt-0 text-muted" title="Number of Orders">Orders
                                                </h5>
                                                <h3 class="mt-3 mb-3">5,543</h3>
                                                <p class="mb-0 text-muted"><span class="text-danger me-2"><i
                                                            class="mdi mdi-arrow-down-bold"></i>
                                                        1.08%</span><span class="text-nowrap">Since
                                                        last month</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="widget-flat card">
                                            <div class="card-body">
                                                <div class="float-end"><i
                                                        class="mdi mdi-currency-usd widget-icon"></i></div>
                                                <h5 class="fw-normal mt-0 text-muted" title="Revenue">Revenue</h5>
                                                <h3 class="mt-3 mb-3">$6,254</h3>
                                                <p class="mb-0 text-muted"><span class="text-danger me-2"><i
                                                            class="mdi mdi-arrow-down-bold"></i>
                                                        7.00%</span><span class="text-nowrap">Since
                                                        last month</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="widget-flat card">
                                            <div class="card-body">
                                                <div class="float-end"><i class="mdi mdi-pulse widget-icon"></i></div>
                                                <h5 class="fw-normal mt-0 text-muted" title="Growth">Growth</h5>
                                                <h3 class="mt-3 mb-3">+
                                                    30.56%</h3>
                                                <p class="mb-0 text-muted"><span class="text-success me-2"><i
                                                            class="mdi mdi-arrow-up-bold"></i>
                                                        4.87%</span><span class="text-nowrap">Since
                                                        last month</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="card-h-100 card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h4 class="header-title">Projections
                                                Vs Actuals</h4>
                                            <div class="dropdown"><a class="arrow-none card-drop dropdown-toggle"
                                                    id="react-aria3379482148-11" aria-expanded="false"
                                                    href="/dashboard/ecommerce"><i
                                                        class="mdi mdi-dots-vertical"></i></a></div>
                                        </div>
                                        <div dir="ltr">
                                            <div options="[object Object]" series="[object Object],[object Object]"
                                                type="bar" class="apex-charts" height="255" width="100%"
                                                style="min-height: 255px;">
                                                <div id="apexchartsu9rnackff"
                                                    class="apexcharts-canvas apexchartsu9rnackff apexcharts-theme-light"
                                                    style="width: 634px; height: 255px;"><svg id="SvgjsSvg3502"
                                                        width="634" height="255"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG3504"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(54.81666564941406, 30)">
                                                            <defs id="SvgjsDefs3503">
                                                                <lineargradient id="SvgjsLinearGradient3508"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop3509" stop-opacity="0.4"
                                                                        stop-color="rgba(216,227,240,0.4)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop3510" stop-opacity="0.5"
                                                                        stop-color="rgba(190,209,230,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop3511" stop-opacity="0.5"
                                                                        stop-color="rgba(190,209,230,0.5)"
                                                                        offset="1"></stop>
                                                                </lineargradient>
                                                                <clippath id="gridRectMasku9rnackff">
                                                                    <rect id="SvgjsRect3513" width="575.1833343505859"
                                                                        height="186.112" x="-3"
                                                                        y="-1" rx="0" ry="0"
                                                                        opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clippath>
                                                                <clippath id="forecastMasku9rnackff"></clippath>
                                                                <clippath id="nonForecastMasku9rnackff"></clippath>
                                                                <clippath id="gridRectMarkerMasku9rnackff">
                                                                    <rect id="SvgjsRect3514" width="573.1833343505859"
                                                                        height="188.112" x="-2"
                                                                        y="-2" rx="0" ry="0"
                                                                        opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clippath>
                                                            </defs>
                                                            <rect id="SvgjsRect3512" width="9.486388905843098"
                                                                height="184.112" x="542.5831923166911" y="0"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke-dasharray="3"
                                                                fill="url(#SvgjsLinearGradient3508)"
                                                                class="apexcharts-xcrosshairs" y2="184.112"
                                                                filter="none" fill-opacity="0.9"
                                                                x1="542.5831923166911" x2="542.5831923166911"></rect>
                                                            <g id="SvgjsG3544" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3545" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"><text
                                                                        id="SvgjsText3547"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="23.715972264607746" y="213.112"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400"
                                                                        fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3548">Jan</tspan>
                                                                        <title>Jan</title>
                                                                    </text><text id="SvgjsText3550"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="71.14791679382324" y="213.112"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400"
                                                                        fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3551">Feb</tspan>
                                                                        <title>Feb</title>
                                                                    </text><text id="SvgjsText3553"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="118.57986132303874" y="213.112"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400"
                                                                        fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3554">Mar</tspan>
                                                                        <title>Mar</title>
                                                                    </text><text id="SvgjsText3556"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="166.0118058522542" y="213.112"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400"
                                                                        fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3557">Apr</tspan>
                                                                        <title>Apr</title>
                                                                    </text><text id="SvgjsText3559"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="213.4437503814697" y="213.112"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400"
                                                                        fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3560">May</tspan>
                                                                        <title>May</title>
                                                                    </text><text id="SvgjsText3562"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="260.87569491068524" y="213.112"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400"
                                                                        fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3563">Jun</tspan>
                                                                        <title>Jun</title>
                                                                    </text><text id="SvgjsText3565"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="308.30763943990075" y="213.112"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400"
                                                                        fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3566">Jul</tspan>
                                                                        <title>Jul</title>
                                                                    </text><text id="SvgjsText3568"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="355.73958396911627" y="213.112"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400"
                                                                        fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3569">Aug</tspan>
                                                                        <title>Aug</title>
                                                                    </text><text id="SvgjsText3571"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="403.1715284983318" y="213.112"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400"
                                                                        fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3572">Sep</tspan>
                                                                        <title>Sep</title>
                                                                    </text><text id="SvgjsText3574"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="450.6034730275473" y="213.112"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="12px" font-weight="400"
                                                                        fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3575">Oct</tspan>
                                                                        <title>Oct</title>
                                                                    </text><text id="SvgjsText3577"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="498.03541755676275" y="213.112"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3578">Nov</tspan>
                                                                        <title>Nov</title>
                                                                    </text><text id="SvgjsText3580"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="545.4673620859782" y="213.112"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                                        <tspan id="SvgjsTspan3581">Dec</tspan>
                                                                        <title>Dec</title>
                                                                    </text></g>
                                                            </g>
                                                            <g id="SvgjsG3596" class="apexcharts-grid">
                                                                <g id="SvgjsG3597"
                                                                    class="apexcharts-gridlines-horizontal">
                                                                    <line id="SvgjsLine3612" x1="0"
                                                                        y1="0" x2="569.1833343505859"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3613" x1="0"
                                                                        y1="36.8224" x2="569.1833343505859"
                                                                        y2="36.8224" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3614" x1="0"
                                                                        y1="73.6448" x2="569.1833343505859"
                                                                        y2="73.6448" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3615" x1="0"
                                                                        y1="110.4672" x2="569.1833343505859"
                                                                        y2="110.4672" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3616" x1="0"
                                                                        y1="147.2896" x2="569.1833343505859"
                                                                        y2="147.2896" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3617" x1="0"
                                                                        y1="184.11200000000002"
                                                                        x2="569.1833343505859"
                                                                        y2="184.11200000000002" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3598"
                                                                    class="apexcharts-gridlines-vertical"></g>
                                                                <line id="SvgjsLine3599" x1="0"
                                                                    y1="185.112" x2="0" y2="191.112"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3600" x1="47.43194452921549"
                                                                    y1="185.112" x2="47.43194452921549"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3601" x1="94.86388905843098"
                                                                    y1="185.112" x2="94.86388905843098"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3602" x1="142.29583358764648"
                                                                    y1="185.112" x2="142.29583358764648"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3603" x1="189.72777811686197"
                                                                    y1="185.112" x2="189.72777811686197"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3604" x1="237.15972264607746"
                                                                    y1="185.112" x2="237.15972264607746"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3605" x1="284.59166717529297"
                                                                    y1="185.112" x2="284.59166717529297"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3606" x1="332.0236117045085"
                                                                    y1="185.112" x2="332.0236117045085"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3607" x1="379.455556233724"
                                                                    y1="185.112" x2="379.455556233724"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3608" x1="426.8875007629395"
                                                                    y1="185.112" x2="426.8875007629395"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3609" x1="474.319445292155"
                                                                    y1="185.112" x2="474.319445292155"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3610" x1="521.7513898213705"
                                                                    y1="185.112" x2="521.7513898213705"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3611" x1="569.1833343505859"
                                                                    y1="185.112" x2="569.1833343505859"
                                                                    y2="191.112" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-xaxis-tick"></line>
                                                                <line id="SvgjsLine3619" x1="0"
                                                                    y1="184.112" x2="569.1833343505859"
                                                                    y2="184.112" stroke="transparent"
                                                                    stroke-dasharray="0" stroke-linecap="butt">
                                                                </line>
                                                                <line id="SvgjsLine3618" x1="0"
                                                                    y1="1" x2="0" y2="184.112"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3515"
                                                                class="apexcharts-bar-series apexcharts-plot-series">
                                                                <g id="SvgjsG3516" class="apexcharts-series"
                                                                    seriesname="Actual" rel="1"
                                                                    data:realindex="0">
                                                                    <path id="SvgjsPath3518"
                                                                        d="M 18.972777811686196 184.112L 18.972777811686196 124.2756Q 18.972777811686196 124.2756 18.972777811686196 124.2756L 26.459166717529293 124.2756Q 26.459166717529293 124.2756 26.459166717529293 124.2756L 26.459166717529293 124.2756L 26.459166717529293 184.112L 26.459166717529293 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 18.972777811686196 184.112L 18.972777811686196 124.2756Q 18.972777811686196 124.2756 18.972777811686196 124.2756L 26.459166717529293 124.2756Q 26.459166717529293 124.2756 26.459166717529293 124.2756L 26.459166717529293 124.2756L 26.459166717529293 184.112L 26.459166717529293 184.112z"
                                                                        pathfrom="M 26.00611114501953 184.112L 26.00611114501953 124.2756Q 26.00611114501953 124.2756 26.00611114501953 124.2756L 37.0091667175293 124.2756Q 37.0091667175293 124.2756 37.0091667175293 124.2756L 37.0091667175293 124.2756L 37.0091667175293 184.112L 37.0091667175293 184.112zL 18.972777811686196 184.112L 26.459166717529293 184.112L 26.459166717529293 184.112L 26.459166717529293 184.112L 26.459166717529293 184.112L 26.459166717529293 184.112L 18.972777811686196 184.112"
                                                                        cy="124.2756" cx="65.40472234090169"
                                                                        j="0" val="65"
                                                                        barheight="59.8364"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3519"
                                                                        d="M 66.40472234090169 184.112L 66.40472234090169 129.79896Q 66.40472234090169 129.79896 66.40472234090169 129.79896L 73.89111124674479 129.79896Q 73.89111124674479 129.79896 73.89111124674479 129.79896L 73.89111124674479 129.79896L 73.89111124674479 184.112L 73.89111124674479 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 66.40472234090169 184.112L 66.40472234090169 129.79896Q 66.40472234090169 129.79896 66.40472234090169 129.79896L 73.89111124674479 129.79896Q 73.89111124674479 129.79896 73.89111124674479 129.79896L 73.89111124674479 129.79896L 73.89111124674479 184.112L 73.89111124674479 184.112z"
                                                                        pathfrom="M 91.02138900756836 184.112L 91.02138900756836 129.79896Q 91.02138900756836 129.79896 91.02138900756836 129.79896L 102.02444458007812 129.79896Q 102.02444458007812 129.79896 102.02444458007812 129.79896L 102.02444458007812 129.79896L 102.02444458007812 184.112L 102.02444458007812 184.112zL 66.40472234090169 184.112L 73.89111124674479 184.112L 73.89111124674479 184.112L 73.89111124674479 184.112L 73.89111124674479 184.112L 73.89111124674479 184.112L 66.40472234090169 184.112"
                                                                        cy="129.79896" cx="112.83666687011717"
                                                                        j="1" val="59"
                                                                        barheight="54.31304"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3520"
                                                                        d="M 113.83666687011717 184.112L 113.83666687011717 110.46719999999999Q 113.83666687011717 110.46719999999999 113.83666687011717 110.46719999999999L 121.32305577596027 110.46719999999999Q 121.32305577596027 110.46719999999999 121.32305577596027 110.46719999999999L 121.32305577596027 110.46719999999999L 121.32305577596027 184.112L 121.32305577596027 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 113.83666687011717 184.112L 113.83666687011717 110.46719999999999Q 113.83666687011717 110.46719999999999 113.83666687011717 110.46719999999999L 121.32305577596027 110.46719999999999Q 121.32305577596027 110.46719999999999 121.32305577596027 110.46719999999999L 121.32305577596027 110.46719999999999L 121.32305577596027 184.112L 121.32305577596027 184.112z"
                                                                        pathfrom="M 156.0366668701172 184.112L 156.0366668701172 110.46719999999999Q 156.0366668701172 110.46719999999999 156.0366668701172 110.46719999999999L 167.03972244262695 110.46719999999999Q 167.03972244262695 110.46719999999999 167.03972244262695 110.46719999999999L 167.03972244262695 110.46719999999999L 167.03972244262695 184.112L 167.03972244262695 184.112zL 113.83666687011717 184.112L 121.32305577596027 184.112L 121.32305577596027 184.112L 121.32305577596027 184.112L 121.32305577596027 184.112L 121.32305577596027 184.112L 113.83666687011717 184.112"
                                                                        cy="110.46719999999999"
                                                                        cx="160.26861139933266" j="2"
                                                                        val="80" barheight="73.6448"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3521"
                                                                        d="M 161.26861139933266 184.112L 161.26861139933266 109.54664Q 161.26861139933266 109.54664 161.26861139933266 109.54664L 168.75500030517574 109.54664Q 168.75500030517574 109.54664 168.75500030517574 109.54664L 168.75500030517574 109.54664L 168.75500030517574 184.112L 168.75500030517574 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 161.26861139933266 184.112L 161.26861139933266 109.54664Q 161.26861139933266 109.54664 161.26861139933266 109.54664L 168.75500030517574 109.54664Q 168.75500030517574 109.54664 168.75500030517574 109.54664L 168.75500030517574 109.54664L 168.75500030517574 184.112L 168.75500030517574 184.112z"
                                                                        pathfrom="M 221.05194473266602 184.112L 221.05194473266602 109.54664Q 221.05194473266602 109.54664 221.05194473266602 109.54664L 232.05500030517578 109.54664Q 232.05500030517578 109.54664 232.05500030517578 109.54664L 232.05500030517578 109.54664L 232.05500030517578 184.112L 232.05500030517578 184.112zL 161.26861139933266 184.112L 168.75500030517574 184.112L 168.75500030517574 184.112L 168.75500030517574 184.112L 168.75500030517574 184.112L 168.75500030517574 184.112L 161.26861139933266 184.112"
                                                                        cy="109.54664" cx="207.70055592854814"
                                                                        j="3" val="81"
                                                                        barheight="74.56536"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3522"
                                                                        d="M 208.70055592854814 184.112L 208.70055592854814 132.56063999999998Q 208.70055592854814 132.56063999999998 208.70055592854814 132.56063999999998L 216.18694483439123 132.56063999999998Q 216.18694483439123 132.56063999999998 216.18694483439123 132.56063999999998L 216.18694483439123 132.56063999999998L 216.18694483439123 184.112L 216.18694483439123 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 208.70055592854814 184.112L 208.70055592854814 132.56063999999998Q 208.70055592854814 132.56063999999998 208.70055592854814 132.56063999999998L 216.18694483439123 132.56063999999998Q 216.18694483439123 132.56063999999998 216.18694483439123 132.56063999999998L 216.18694483439123 132.56063999999998L 216.18694483439123 184.112L 216.18694483439123 184.112z"
                                                                        pathfrom="M 286.06722259521484 184.112L 286.06722259521484 132.56063999999998Q 286.06722259521484 132.56063999999998 286.06722259521484 132.56063999999998L 297.0702781677246 132.56063999999998Q 297.0702781677246 132.56063999999998 297.0702781677246 132.56063999999998L 297.0702781677246 132.56063999999998L 297.0702781677246 184.112L 297.0702781677246 184.112zL 208.70055592854814 184.112L 216.18694483439123 184.112L 216.18694483439123 184.112L 216.18694483439123 184.112L 216.18694483439123 184.112L 216.18694483439123 184.112L 208.70055592854814 184.112"
                                                                        cy="132.56063999999998"
                                                                        cx="255.13250045776363" j="4"
                                                                        val="56" barheight="51.55136"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3523"
                                                                        d="M 256.1325004577636 184.112L 256.1325004577636 102.18216Q 256.1325004577636 102.18216 256.1325004577636 102.18216L 263.61888936360674 102.18216Q 263.61888936360674 102.18216 263.61888936360674 102.18216L 263.61888936360674 102.18216L 263.61888936360674 184.112L 263.61888936360674 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 256.1325004577636 184.112L 256.1325004577636 102.18216Q 256.1325004577636 102.18216 256.1325004577636 102.18216L 263.61888936360674 102.18216Q 263.61888936360674 102.18216 263.61888936360674 102.18216L 263.61888936360674 102.18216L 263.61888936360674 184.112L 263.61888936360674 184.112z"
                                                                        pathfrom="M 351.0825004577637 184.112L 351.0825004577637 102.18216Q 351.0825004577637 102.18216 351.0825004577637 102.18216L 362.08555603027344 102.18216Q 362.08555603027344 102.18216 362.08555603027344 102.18216L 362.08555603027344 102.18216L 362.08555603027344 184.112L 362.08555603027344 184.112zL 256.1325004577636 184.112L 263.61888936360674 184.112L 263.61888936360674 184.112L 263.61888936360674 184.112L 263.61888936360674 184.112L 263.61888936360674 184.112L 256.1325004577636 184.112"
                                                                        cy="102.18216" cx="302.56444498697914"
                                                                        j="5" val="89"
                                                                        barheight="81.92984"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3524"
                                                                        d="M 303.56444498697914 184.112L 303.56444498697914 147.2896Q 303.56444498697914 147.2896 303.56444498697914 147.2896L 311.05083389282225 147.2896Q 311.05083389282225 147.2896 311.05083389282225 147.2896L 311.05083389282225 147.2896L 311.05083389282225 184.112L 311.05083389282225 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 303.56444498697914 184.112L 303.56444498697914 147.2896Q 303.56444498697914 147.2896 303.56444498697914 147.2896L 311.05083389282225 147.2896Q 311.05083389282225 147.2896 311.05083389282225 147.2896L 311.05083389282225 147.2896L 311.05083389282225 184.112L 311.05083389282225 184.112z"
                                                                        pathfrom="M 416.0977783203125 184.112L 416.0977783203125 147.2896Q 416.0977783203125 147.2896 416.0977783203125 147.2896L 427.10083389282227 147.2896Q 427.10083389282227 147.2896 427.10083389282227 147.2896L 427.10083389282227 147.2896L 427.10083389282227 184.112L 427.10083389282227 184.112zL 303.56444498697914 184.112L 311.05083389282225 184.112L 311.05083389282225 184.112L 311.05083389282225 184.112L 311.05083389282225 184.112L 311.05083389282225 184.112L 303.56444498697914 184.112"
                                                                        cy="147.2896" cx="349.99638951619465"
                                                                        j="6" val="40"
                                                                        barheight="36.8224"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3525"
                                                                        d="M 350.99638951619465 184.112L 350.99638951619465 154.65408Q 350.99638951619465 154.65408 350.99638951619465 154.65408L 358.48277842203777 154.65408Q 358.48277842203777 154.65408 358.48277842203777 154.65408L 358.48277842203777 154.65408L 358.48277842203777 184.112L 358.48277842203777 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 350.99638951619465 184.112L 350.99638951619465 154.65408Q 350.99638951619465 154.65408 350.99638951619465 154.65408L 358.48277842203777 154.65408Q 358.48277842203777 154.65408 358.48277842203777 154.65408L 358.48277842203777 154.65408L 358.48277842203777 184.112L 358.48277842203777 184.112z"
                                                                        pathfrom="M 481.1130561828613 184.112L 481.1130561828613 154.65408Q 481.1130561828613 154.65408 481.1130561828613 154.65408L 492.1161117553711 154.65408Q 492.1161117553711 154.65408 492.1161117553711 154.65408L 492.1161117553711 154.65408L 492.1161117553711 184.112L 492.1161117553711 184.112zL 350.99638951619465 184.112L 358.48277842203777 184.112L 358.48277842203777 184.112L 358.48277842203777 184.112L 358.48277842203777 184.112L 358.48277842203777 184.112L 350.99638951619465 184.112"
                                                                        cy="154.65408" cx="397.42833404541017"
                                                                        j="7" val="32"
                                                                        barheight="29.45792"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3526"
                                                                        d="M 398.42833404541017 184.112L 398.42833404541017 124.2756Q 398.42833404541017 124.2756 398.42833404541017 124.2756L 405.9147229512533 124.2756Q 405.9147229512533 124.2756 405.9147229512533 124.2756L 405.9147229512533 124.2756L 405.9147229512533 184.112L 405.9147229512533 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 398.42833404541017 184.112L 398.42833404541017 124.2756Q 398.42833404541017 124.2756 398.42833404541017 124.2756L 405.9147229512533 124.2756Q 405.9147229512533 124.2756 405.9147229512533 124.2756L 405.9147229512533 124.2756L 405.9147229512533 184.112L 405.9147229512533 184.112z"
                                                                        pathfrom="M 546.1283340454102 184.112L 546.1283340454102 124.2756Q 546.1283340454102 124.2756 546.1283340454102 124.2756L 557.1313896179199 124.2756Q 557.1313896179199 124.2756 557.1313896179199 124.2756L 557.1313896179199 124.2756L 557.1313896179199 184.112L 557.1313896179199 184.112zL 398.42833404541017 184.112L 405.9147229512533 184.112L 405.9147229512533 184.112L 405.9147229512533 184.112L 405.9147229512533 184.112L 405.9147229512533 184.112L 398.42833404541017 184.112"
                                                                        cy="124.2756" cx="444.8602785746257"
                                                                        j="8" val="65"
                                                                        barheight="59.8364"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3527"
                                                                        d="M 445.8602785746257 184.112L 445.8602785746257 129.79896Q 445.8602785746257 129.79896 445.8602785746257 129.79896L 453.3466674804688 129.79896Q 453.3466674804688 129.79896 453.3466674804688 129.79896L 453.3466674804688 129.79896L 453.3466674804688 184.112L 453.3466674804688 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 445.8602785746257 184.112L 445.8602785746257 129.79896Q 445.8602785746257 129.79896 445.8602785746257 129.79896L 453.3466674804688 129.79896Q 453.3466674804688 129.79896 453.3466674804688 129.79896L 453.3466674804688 129.79896L 453.3466674804688 184.112L 453.3466674804688 184.112z"
                                                                        pathfrom="M 611.143611907959 184.112L 611.143611907959 129.79896Q 611.143611907959 129.79896 611.143611907959 129.79896L 622.1466674804688 129.79896Q 622.1466674804688 129.79896 622.1466674804688 129.79896L 622.1466674804688 129.79896L 622.1466674804688 184.112L 622.1466674804688 184.112zL 445.8602785746257 184.112L 453.3466674804688 184.112L 453.3466674804688 184.112L 453.3466674804688 184.112L 453.3466674804688 184.112L 453.3466674804688 184.112L 445.8602785746257 184.112"
                                                                        cy="129.79896" cx="492.2922231038412"
                                                                        j="9" val="59"
                                                                        barheight="54.31304"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3528"
                                                                        d="M 493.2922231038412 184.112L 493.2922231038412 110.46719999999999Q 493.2922231038412 110.46719999999999 493.2922231038412 110.46719999999999L 500.7786120096843 110.46719999999999Q 500.7786120096843 110.46719999999999 500.7786120096843 110.46719999999999L 500.7786120096843 110.46719999999999L 500.7786120096843 184.112L 500.7786120096843 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 493.2922231038412 184.112L 493.2922231038412 110.46719999999999Q 493.2922231038412 110.46719999999999 493.2922231038412 110.46719999999999L 500.7786120096843 110.46719999999999Q 500.7786120096843 110.46719999999999 500.7786120096843 110.46719999999999L 500.7786120096843 110.46719999999999L 500.7786120096843 184.112L 500.7786120096843 184.112z"
                                                                        pathfrom="M 676.1588897705078 184.112L 676.1588897705078 110.46719999999999Q 676.1588897705078 110.46719999999999 676.1588897705078 110.46719999999999L 687.1619453430176 110.46719999999999Q 687.1619453430176 110.46719999999999 687.1619453430176 110.46719999999999L 687.1619453430176 110.46719999999999L 687.1619453430176 184.112L 687.1619453430176 184.112zL 493.2922231038412 184.112L 500.7786120096843 184.112L 500.7786120096843 184.112L 500.7786120096843 184.112L 500.7786120096843 184.112L 500.7786120096843 184.112L 493.2922231038412 184.112"
                                                                        cy="110.46719999999999"
                                                                        cx="539.7241676330567" j="10"
                                                                        val="80" barheight="73.6448"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3529"
                                                                        d="M 540.7241676330567 184.112L 540.7241676330567 109.54664Q 540.7241676330567 109.54664 540.7241676330567 109.54664L 548.2105565388998 109.54664Q 548.2105565388998 109.54664 548.2105565388998 109.54664L 548.2105565388998 109.54664L 548.2105565388998 184.112L 548.2105565388998 184.112z"
                                                                        fill="rgba(114,124,245,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="0"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 540.7241676330567 184.112L 540.7241676330567 109.54664Q 540.7241676330567 109.54664 540.7241676330567 109.54664L 548.2105565388998 109.54664Q 548.2105565388998 109.54664 548.2105565388998 109.54664L 548.2105565388998 109.54664L 548.2105565388998 184.112L 548.2105565388998 184.112z"
                                                                        pathfrom="M 741.1741676330566 184.112L 741.1741676330566 109.54664Q 741.1741676330566 109.54664 741.1741676330566 109.54664L 752.1772232055664 109.54664Q 752.1772232055664 109.54664 752.1772232055664 109.54664L 752.1772232055664 109.54664L 752.1772232055664 184.112L 752.1772232055664 184.112zL 540.7241676330567 184.112L 548.2105565388998 184.112L 548.2105565388998 184.112L 548.2105565388998 184.112L 548.2105565388998 184.112L 548.2105565388998 184.112L 540.7241676330567 184.112"
                                                                        cy="109.54664" cx="587.1561121622722"
                                                                        j="11" val="81"
                                                                        barheight="74.56536"
                                                                        barwidth="9.486388905843098"></path>
                                                                </g>
                                                                <g id="SvgjsG3530" class="apexcharts-series"
                                                                    seriesname="Projection" rel="2"
                                                                    data:realindex="1">
                                                                    <path id="SvgjsPath3532"
                                                                        d="M 18.972777811686196 124.2756L 18.972777811686196 42.34576Q 18.972777811686196 42.34576 18.972777811686196 42.34576L 26.459166717529293 42.34576Q 26.459166717529293 42.34576 26.459166717529293 42.34576L 26.459166717529293 42.34576L 26.459166717529293 124.2756L 26.459166717529293 124.2756z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 18.972777811686196 124.2756L 18.972777811686196 42.34576Q 18.972777811686196 42.34576 18.972777811686196 42.34576L 26.459166717529293 42.34576Q 26.459166717529293 42.34576 26.459166717529293 42.34576L 26.459166717529293 42.34576L 26.459166717529293 124.2756L 26.459166717529293 124.2756z"
                                                                        pathfrom="M 26.00611114501953 124.2756L 26.00611114501953 42.34576Q 26.00611114501953 42.34576 26.00611114501953 42.34576L 37.0091667175293 42.34576Q 37.0091667175293 42.34576 37.0091667175293 42.34576L 37.0091667175293 42.34576L 37.0091667175293 124.2756L 37.0091667175293 124.2756zL 18.972777811686196 124.2756L 26.459166717529293 124.2756L 26.459166717529293 124.2756L 26.459166717529293 124.2756L 26.459166717529293 124.2756L 26.459166717529293 124.2756L 18.972777811686196 124.2756"
                                                                        cy="42.34576" cx="65.40472234090169"
                                                                        j="0" val="89"
                                                                        barheight="81.92984"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3533"
                                                                        d="M 66.40472234090169 129.79896L 66.40472234090169 92.97655999999999Q 66.40472234090169 92.97655999999999 66.40472234090169 92.97655999999999L 73.89111124674479 92.97655999999999Q 73.89111124674479 92.97655999999999 73.89111124674479 92.97655999999999L 73.89111124674479 92.97655999999999L 73.89111124674479 129.79896L 73.89111124674479 129.79896z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 66.40472234090169 129.79896L 66.40472234090169 92.97655999999999Q 66.40472234090169 92.97655999999999 66.40472234090169 92.97655999999999L 73.89111124674479 92.97655999999999Q 73.89111124674479 92.97655999999999 73.89111124674479 92.97655999999999L 73.89111124674479 92.97655999999999L 73.89111124674479 129.79896L 73.89111124674479 129.79896z"
                                                                        pathfrom="M 91.02138900756836 129.79896L 91.02138900756836 92.97655999999999Q 91.02138900756836 92.97655999999999 91.02138900756836 92.97655999999999L 102.02444458007812 92.97655999999999Q 102.02444458007812 92.97655999999999 102.02444458007812 92.97655999999999L 102.02444458007812 92.97655999999999L 102.02444458007812 129.79896L 102.02444458007812 129.79896zL 66.40472234090169 129.79896L 73.89111124674479 129.79896L 73.89111124674479 129.79896L 73.89111124674479 129.79896L 73.89111124674479 129.79896L 73.89111124674479 129.79896L 66.40472234090169 129.79896"
                                                                        cy="92.97655999999999"
                                                                        cx="112.83666687011717" j="1"
                                                                        val="40" barheight="36.8224"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3534"
                                                                        d="M 113.83666687011717 110.46719999999999L 113.83666687011717 81.00927999999999Q 113.83666687011717 81.00927999999999 113.83666687011717 81.00927999999999L 121.32305577596027 81.00927999999999Q 121.32305577596027 81.00927999999999 121.32305577596027 81.00927999999999L 121.32305577596027 81.00927999999999L 121.32305577596027 110.46719999999999L 121.32305577596027 110.46719999999999z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 113.83666687011717 110.46719999999999L 113.83666687011717 81.00927999999999Q 113.83666687011717 81.00927999999999 113.83666687011717 81.00927999999999L 121.32305577596027 81.00927999999999Q 121.32305577596027 81.00927999999999 121.32305577596027 81.00927999999999L 121.32305577596027 81.00927999999999L 121.32305577596027 110.46719999999999L 121.32305577596027 110.46719999999999z"
                                                                        pathfrom="M 156.0366668701172 110.46719999999999L 156.0366668701172 81.00927999999999Q 156.0366668701172 81.00927999999999 156.0366668701172 81.00927999999999L 167.03972244262695 81.00927999999999Q 167.03972244262695 81.00927999999999 167.03972244262695 81.00927999999999L 167.03972244262695 81.00927999999999L 167.03972244262695 110.46719999999999L 167.03972244262695 110.46719999999999zL 113.83666687011717 110.46719999999999L 121.32305577596027 110.46719999999999L 121.32305577596027 110.46719999999999L 121.32305577596027 110.46719999999999L 121.32305577596027 110.46719999999999L 121.32305577596027 110.46719999999999L 113.83666687011717 110.46719999999999"
                                                                        cy="81.00927999999999"
                                                                        cx="160.26861139933266" j="2"
                                                                        val="32" barheight="29.45792"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3535"
                                                                        d="M 161.26861139933266 109.54664L 161.26861139933266 49.71024Q 161.26861139933266 49.71024 161.26861139933266 49.71024L 168.75500030517574 49.71024Q 168.75500030517574 49.71024 168.75500030517574 49.71024L 168.75500030517574 49.71024L 168.75500030517574 109.54664L 168.75500030517574 109.54664z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 161.26861139933266 109.54664L 161.26861139933266 49.71024Q 161.26861139933266 49.71024 161.26861139933266 49.71024L 168.75500030517574 49.71024Q 168.75500030517574 49.71024 168.75500030517574 49.71024L 168.75500030517574 49.71024L 168.75500030517574 109.54664L 168.75500030517574 109.54664z"
                                                                        pathfrom="M 221.05194473266602 109.54664L 221.05194473266602 49.71024Q 221.05194473266602 49.71024 221.05194473266602 49.71024L 232.05500030517578 49.71024Q 232.05500030517578 49.71024 232.05500030517578 49.71024L 232.05500030517578 49.71024L 232.05500030517578 109.54664L 232.05500030517578 109.54664zL 161.26861139933266 109.54664L 168.75500030517574 109.54664L 168.75500030517574 109.54664L 168.75500030517574 109.54664L 168.75500030517574 109.54664L 168.75500030517574 109.54664L 161.26861139933266 109.54664"
                                                                        cy="49.71024" cx="207.70055592854814"
                                                                        j="3" val="65"
                                                                        barheight="59.8364"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3536"
                                                                        d="M 208.70055592854814 132.56063999999998L 208.70055592854814 78.24759999999998Q 208.70055592854814 78.24759999999998 208.70055592854814 78.24759999999998L 216.18694483439123 78.24759999999998Q 216.18694483439123 78.24759999999998 216.18694483439123 78.24759999999998L 216.18694483439123 78.24759999999998L 216.18694483439123 132.56063999999998L 216.18694483439123 132.56063999999998z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 208.70055592854814 132.56063999999998L 208.70055592854814 78.24759999999998Q 208.70055592854814 78.24759999999998 208.70055592854814 78.24759999999998L 216.18694483439123 78.24759999999998Q 216.18694483439123 78.24759999999998 216.18694483439123 78.24759999999998L 216.18694483439123 78.24759999999998L 216.18694483439123 132.56063999999998L 216.18694483439123 132.56063999999998z"
                                                                        pathfrom="M 286.06722259521484 132.56063999999998L 286.06722259521484 78.24759999999998Q 286.06722259521484 78.24759999999998 286.06722259521484 78.24759999999998L 297.0702781677246 78.24759999999998Q 297.0702781677246 78.24759999999998 297.0702781677246 78.24759999999998L 297.0702781677246 78.24759999999998L 297.0702781677246 132.56063999999998L 297.0702781677246 132.56063999999998zL 208.70055592854814 132.56063999999998L 216.18694483439123 132.56063999999998L 216.18694483439123 132.56063999999998L 216.18694483439123 132.56063999999998L 216.18694483439123 132.56063999999998L 216.18694483439123 132.56063999999998L 208.70055592854814 132.56063999999998"
                                                                        cy="78.24759999999998"
                                                                        cx="255.13250045776363" j="4"
                                                                        val="59" barheight="54.31304"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3537"
                                                                        d="M 256.1325004577636 102.18216L 256.1325004577636 28.537359999999993Q 256.1325004577636 28.537359999999993 256.1325004577636 28.537359999999993L 263.61888936360674 28.537359999999993Q 263.61888936360674 28.537359999999993 263.61888936360674 28.537359999999993L 263.61888936360674 28.537359999999993L 263.61888936360674 102.18216L 263.61888936360674 102.18216z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 256.1325004577636 102.18216L 256.1325004577636 28.537359999999993Q 256.1325004577636 28.537359999999993 256.1325004577636 28.537359999999993L 263.61888936360674 28.537359999999993Q 263.61888936360674 28.537359999999993 263.61888936360674 28.537359999999993L 263.61888936360674 28.537359999999993L 263.61888936360674 102.18216L 263.61888936360674 102.18216z"
                                                                        pathfrom="M 351.0825004577637 102.18216L 351.0825004577637 28.537359999999993Q 351.0825004577637 28.537359999999993 351.0825004577637 28.537359999999993L 362.08555603027344 28.537359999999993Q 362.08555603027344 28.537359999999993 362.08555603027344 28.537359999999993L 362.08555603027344 28.537359999999993L 362.08555603027344 102.18216L 362.08555603027344 102.18216zL 256.1325004577636 102.18216L 263.61888936360674 102.18216L 263.61888936360674 102.18216L 263.61888936360674 102.18216L 263.61888936360674 102.18216L 263.61888936360674 102.18216L 256.1325004577636 102.18216"
                                                                        cy="28.537359999999993"
                                                                        cx="302.56444498697914" j="5"
                                                                        val="80" barheight="73.6448"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3538"
                                                                        d="M 303.56444498697914 147.2896L 303.56444498697914 72.72424000000001Q 303.56444498697914 72.72424000000001 303.56444498697914 72.72424000000001L 311.05083389282225 72.72424000000001Q 311.05083389282225 72.72424000000001 311.05083389282225 72.72424000000001L 311.05083389282225 72.72424000000001L 311.05083389282225 147.2896L 311.05083389282225 147.2896z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 303.56444498697914 147.2896L 303.56444498697914 72.72424000000001Q 303.56444498697914 72.72424000000001 303.56444498697914 72.72424000000001L 311.05083389282225 72.72424000000001Q 311.05083389282225 72.72424000000001 311.05083389282225 72.72424000000001L 311.05083389282225 72.72424000000001L 311.05083389282225 147.2896L 311.05083389282225 147.2896z"
                                                                        pathfrom="M 416.0977783203125 147.2896L 416.0977783203125 72.72424000000001Q 416.0977783203125 72.72424000000001 416.0977783203125 72.72424000000001L 427.10083389282227 72.72424000000001Q 427.10083389282227 72.72424000000001 427.10083389282227 72.72424000000001L 427.10083389282227 72.72424000000001L 427.10083389282227 147.2896L 427.10083389282227 147.2896zL 303.56444498697914 147.2896L 311.05083389282225 147.2896L 311.05083389282225 147.2896L 311.05083389282225 147.2896L 311.05083389282225 147.2896L 311.05083389282225 147.2896L 303.56444498697914 147.2896"
                                                                        cy="72.72424000000001"
                                                                        cx="349.99638951619465" j="6"
                                                                        val="81" barheight="74.56536"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3539"
                                                                        d="M 350.99638951619465 154.65408L 350.99638951619465 103.10271999999999Q 350.99638951619465 103.10271999999999 350.99638951619465 103.10271999999999L 358.48277842203777 103.10271999999999Q 358.48277842203777 103.10271999999999 358.48277842203777 103.10271999999999L 358.48277842203777 103.10271999999999L 358.48277842203777 154.65408L 358.48277842203777 154.65408z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 350.99638951619465 154.65408L 350.99638951619465 103.10271999999999Q 350.99638951619465 103.10271999999999 350.99638951619465 103.10271999999999L 358.48277842203777 103.10271999999999Q 358.48277842203777 103.10271999999999 358.48277842203777 103.10271999999999L 358.48277842203777 103.10271999999999L 358.48277842203777 154.65408L 358.48277842203777 154.65408z"
                                                                        pathfrom="M 481.1130561828613 154.65408L 481.1130561828613 103.10271999999999Q 481.1130561828613 103.10271999999999 481.1130561828613 103.10271999999999L 492.1161117553711 103.10271999999999Q 492.1161117553711 103.10271999999999 492.1161117553711 103.10271999999999L 492.1161117553711 103.10271999999999L 492.1161117553711 154.65408L 492.1161117553711 154.65408zL 350.99638951619465 154.65408L 358.48277842203777 154.65408L 358.48277842203777 154.65408L 358.48277842203777 154.65408L 358.48277842203777 154.65408L 358.48277842203777 154.65408L 350.99638951619465 154.65408"
                                                                        cy="103.10271999999999"
                                                                        cx="397.42833404541017" j="7"
                                                                        val="56" barheight="51.55136"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3540"
                                                                        d="M 398.42833404541017 124.2756L 398.42833404541017 42.34576Q 398.42833404541017 42.34576 398.42833404541017 42.34576L 405.9147229512533 42.34576Q 405.9147229512533 42.34576 405.9147229512533 42.34576L 405.9147229512533 42.34576L 405.9147229512533 124.2756L 405.9147229512533 124.2756z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 398.42833404541017 124.2756L 398.42833404541017 42.34576Q 398.42833404541017 42.34576 398.42833404541017 42.34576L 405.9147229512533 42.34576Q 405.9147229512533 42.34576 405.9147229512533 42.34576L 405.9147229512533 42.34576L 405.9147229512533 124.2756L 405.9147229512533 124.2756z"
                                                                        pathfrom="M 546.1283340454102 124.2756L 546.1283340454102 42.34576Q 546.1283340454102 42.34576 546.1283340454102 42.34576L 557.1313896179199 42.34576Q 557.1313896179199 42.34576 557.1313896179199 42.34576L 557.1313896179199 42.34576L 557.1313896179199 124.2756L 557.1313896179199 124.2756zL 398.42833404541017 124.2756L 405.9147229512533 124.2756L 405.9147229512533 124.2756L 405.9147229512533 124.2756L 405.9147229512533 124.2756L 405.9147229512533 124.2756L 398.42833404541017 124.2756"
                                                                        cy="42.34576" cx="444.8602785746257"
                                                                        j="8" val="89"
                                                                        barheight="81.92984"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3541"
                                                                        d="M 445.8602785746257 129.79896L 445.8602785746257 92.97655999999999Q 445.8602785746257 92.97655999999999 445.8602785746257 92.97655999999999L 453.3466674804688 92.97655999999999Q 453.3466674804688 92.97655999999999 453.3466674804688 92.97655999999999L 453.3466674804688 92.97655999999999L 453.3466674804688 129.79896L 453.3466674804688 129.79896z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 445.8602785746257 129.79896L 445.8602785746257 92.97655999999999Q 445.8602785746257 92.97655999999999 445.8602785746257 92.97655999999999L 453.3466674804688 92.97655999999999Q 453.3466674804688 92.97655999999999 453.3466674804688 92.97655999999999L 453.3466674804688 92.97655999999999L 453.3466674804688 129.79896L 453.3466674804688 129.79896z"
                                                                        pathfrom="M 611.143611907959 129.79896L 611.143611907959 92.97655999999999Q 611.143611907959 92.97655999999999 611.143611907959 92.97655999999999L 622.1466674804688 92.97655999999999Q 622.1466674804688 92.97655999999999 622.1466674804688 92.97655999999999L 622.1466674804688 92.97655999999999L 622.1466674804688 129.79896L 622.1466674804688 129.79896zL 445.8602785746257 129.79896L 453.3466674804688 129.79896L 453.3466674804688 129.79896L 453.3466674804688 129.79896L 453.3466674804688 129.79896L 453.3466674804688 129.79896L 445.8602785746257 129.79896"
                                                                        cy="92.97655999999999"
                                                                        cx="492.2922231038412" j="9"
                                                                        val="40" barheight="36.8224"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3542"
                                                                        d="M 493.2922231038412 110.46719999999999L 493.2922231038412 50.630799999999994Q 493.2922231038412 50.630799999999994 493.2922231038412 50.630799999999994L 500.7786120096843 50.630799999999994Q 500.7786120096843 50.630799999999994 500.7786120096843 50.630799999999994L 500.7786120096843 50.630799999999994L 500.7786120096843 110.46719999999999L 500.7786120096843 110.46719999999999z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 493.2922231038412 110.46719999999999L 493.2922231038412 50.630799999999994Q 493.2922231038412 50.630799999999994 493.2922231038412 50.630799999999994L 500.7786120096843 50.630799999999994Q 500.7786120096843 50.630799999999994 500.7786120096843 50.630799999999994L 500.7786120096843 50.630799999999994L 500.7786120096843 110.46719999999999L 500.7786120096843 110.46719999999999z"
                                                                        pathfrom="M 676.1588897705078 110.46719999999999L 676.1588897705078 50.630799999999994Q 676.1588897705078 50.630799999999994 676.1588897705078 50.630799999999994L 687.1619453430176 50.630799999999994Q 687.1619453430176 50.630799999999994 687.1619453430176 50.630799999999994L 687.1619453430176 50.630799999999994L 687.1619453430176 110.46719999999999L 687.1619453430176 110.46719999999999zL 493.2922231038412 110.46719999999999L 500.7786120096843 110.46719999999999L 500.7786120096843 110.46719999999999L 500.7786120096843 110.46719999999999L 500.7786120096843 110.46719999999999L 500.7786120096843 110.46719999999999L 493.2922231038412 110.46719999999999"
                                                                        cy="50.630799999999994"
                                                                        cx="539.7241676330567" j="10"
                                                                        val="65" barheight="59.8364"
                                                                        barwidth="9.486388905843098"></path>
                                                                    <path id="SvgjsPath3543"
                                                                        d="M 540.7241676330567 109.54664L 540.7241676330567 55.233599999999996Q 540.7241676330567 55.233599999999996 540.7241676330567 55.233599999999996L 548.2105565388998 55.233599999999996Q 548.2105565388998 55.233599999999996 548.2105565388998 55.233599999999996L 548.2105565388998 55.233599999999996L 548.2105565388998 109.54664L 548.2105565388998 109.54664z"
                                                                        fill="rgba(227,234,239,1)" fill-opacity="1"
                                                                        stroke="transparent" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-bar-area" index="1"
                                                                        clip-path="url(#gridRectMasku9rnackff)"
                                                                        pathto="M 540.7241676330567 109.54664L 540.7241676330567 55.233599999999996Q 540.7241676330567 55.233599999999996 540.7241676330567 55.233599999999996L 548.2105565388998 55.233599999999996Q 548.2105565388998 55.233599999999996 548.2105565388998 55.233599999999996L 548.2105565388998 55.233599999999996L 548.2105565388998 109.54664L 548.2105565388998 109.54664z"
                                                                        pathfrom="M 741.1741676330566 109.54664L 741.1741676330566 55.233599999999996Q 741.1741676330566 55.233599999999996 741.1741676330566 55.233599999999996L 752.1772232055664 55.233599999999996Q 752.1772232055664 55.233599999999996 752.1772232055664 55.233599999999996L 752.1772232055664 55.233599999999996L 752.1772232055664 109.54664L 752.1772232055664 109.54664zL 540.7241676330567 109.54664L 548.2105565388998 109.54664L 548.2105565388998 109.54664L 548.2105565388998 109.54664L 548.2105565388998 109.54664L 548.2105565388998 109.54664L 540.7241676330567 109.54664"
                                                                        cy="55.233599999999996"
                                                                        cx="587.1561121622722" j="11"
                                                                        val="59" barheight="54.31304"
                                                                        barwidth="9.486388905843098"></path>
                                                                </g>
                                                                <g id="SvgjsG3517" class="apexcharts-datalabels"
                                                                    data:realindex="0"></g>
                                                                <g id="SvgjsG3531" class="apexcharts-datalabels"
                                                                    data:realindex="1"></g>
                                                            </g>
                                                            <line id="SvgjsLine3620" x1="0" y1="0"
                                                                x2="569.1833343505859" y2="0"
                                                                stroke="#b6b6b6" stroke-dasharray="0"
                                                                stroke-width="1" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3621" x1="0" y1="0"
                                                                x2="569.1833343505859" y2="0"
                                                                stroke-dasharray="0" stroke-width="0"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3622" class="apexcharts-yaxis-annotations">
                                                            </g>
                                                            <g id="SvgjsG3623" class="apexcharts-xaxis-annotations">
                                                            </g>
                                                            <g id="SvgjsG3624" class="apexcharts-point-annotations">
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG3582" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(24.816665649414062, 0)">
                                                            <g id="SvgjsG3583" class="apexcharts-yaxis-texts-g">
                                                                <text id="SvgjsText3584"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="20" y="31.5"
                                                                    text-anchor="end" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3585">200k</tspan>
                                                                    <title>200k</title>
                                                                </text><text id="SvgjsText3586"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="20" y="68.3224"
                                                                    text-anchor="end" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3587">160k</tspan>
                                                                    <title>160k</title>
                                                                </text><text id="SvgjsText3588"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="20" y="105.1448"
                                                                    text-anchor="end" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3589">120k</tspan>
                                                                    <title>120k</title>
                                                                </text><text id="SvgjsText3590"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="20" y="141.9672"
                                                                    text-anchor="end" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3591">80k</tspan>
                                                                    <title>80k</title>
                                                                </text><text id="SvgjsText3592"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="20" y="178.7896"
                                                                    text-anchor="end" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3593">40k</tspan>
                                                                    <title>40k</title>
                                                                </text><text id="SvgjsText3594"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="20" y="215.61200000000002"
                                                                    text-anchor="end" dominant-baseline="auto"
                                                                    font-size="11px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3595">0k</tspan>
                                                                    <title>0k</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG3505" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend" style="max-height: 127.5px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light"
                                                        style="left: 485.043px; top: 104px;">
                                                        <div class="apexcharts-tooltip-title"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            Dec</div>
                                                        <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                            style="order: 1; display: flex;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(114, 124, 245);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label">Actual:
                                                                    </span><span
                                                                        class="apexcharts-tooltip-text-y-value">$81k</span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 2; display: none;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(114, 124, 245);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label">Actual:
                                                                    </span><span
                                                                        class="apexcharts-tooltip-text-y-value">$81k</span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h4 class="header-title">Revenue</h4>
                                            <div class="dropdown"><a class="arrow-none card-drop dropdown-toggle"
                                                    id="react-aria3379482148-12" aria-expanded="false"
                                                    href="/dashboard/ecommerce"><i
                                                        class="mdi mdi-dots-vertical"></i></a></div>
                                        </div>
                                        <div class="chart-content-bg">
                                            <div class="text-center row">
                                                <div class="col-md-6">
                                                    <p class="text-muted mb-0 mt-3">Current
                                                        Week</p>
                                                    <h2 class="fw-normal mb-3"><small
                                                            class="mdi mdi-checkbox-blank-circle text-primary align-middle me-1"></small><span>$58,254</span>
                                                    </h2>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="text-muted mb-0 mt-3">Previous
                                                        Week</p>
                                                    <h2 class="fw-normal mb-3"><small
                                                            class="mdi mdi-checkbox-blank-circle text-success align-middle me-1"></small><span>$69,524</span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash-item-overlay d-none d-md-block">
                                            <h5>Today's
                                                Earning: $2,562.30</h5>
                                            <p class="text-muted font-13 mb-3 mt-2">Etiam
                                                ultricies nisi vel augue.
                                                Curabitur ullamcorper
                                                ultricies
                                                nisi. Nam eget dui. Etiam
                                                rhoncus...</p><a class="btn btn-outline-primary"
                                                href="/dashboard/ecommerce">View
                                                Statements<i class="mdi mdi-arrow-right ms-2"></i></a>
                                        </div>
                                        <div options="[object Object]" series="[object Object],[object Object]"
                                            type="line" class="apex-charts mt-3" height="378"
                                            width="100%" style="min-height: 378px;">
                                            <div id="apexcharts3mcoqhal"
                                                class="apexcharts-canvas apexcharts3mcoqhal apexcharts-theme-light"
                                                style="width: 861px; height: 378px;"><svg id="SvgjsSvg3410"
                                                    width="861" height="378"
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev"
                                                    class="apexcharts-svg apexcharts-zoomable"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG3412" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(36.19999694824219, 30)">
                                                        <defs id="SvgjsDefs3411">
                                                            <clippath id="gridRectMask3mcoqhal">
                                                                <rect id="SvgjsRect3418" width="821.3250026702881"
                                                                    height="311.11199999999997" x="-4"
                                                                    y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clippath>
                                                            <clippath id="forecastMask3mcoqhal"></clippath>
                                                            <clippath id="nonForecastMask3mcoqhal"></clippath>
                                                            <clippath id="gridRectMarkerMask3mcoqhal">
                                                                <rect id="SvgjsRect3419" width="817.3250026702881"
                                                                    height="311.11199999999997" x="-2"
                                                                    y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clippath>
                                                            <filter id="SvgjsFilter3425"
                                                                filterUnits="userSpaceOnUse" width="200%"
                                                                height="200%" x="-50%" y="-50%">
                                                                <feflood id="SvgjsFeFlood3426" flood-color="#000000"
                                                                    flood-opacity="0.1" result="SvgjsFeFlood3426Out"
                                                                    in="SourceGraphic"></feflood>
                                                                <fecomposite id="SvgjsFeComposite3427"
                                                                    in="SvgjsFeFlood3426Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite3427Out">
                                                                </fecomposite>
                                                                <feoffset id="SvgjsFeOffset3428" dx="-7"
                                                                    dy="7" result="SvgjsFeOffset3428Out"
                                                                    in="SvgjsFeComposite3427Out"></feoffset>
                                                                <fegaussianblur id="SvgjsFeGaussianBlur3429"
                                                                    stdDeviation="7 "
                                                                    result="SvgjsFeGaussianBlur3429Out"
                                                                    in="SvgjsFeOffset3428Out"></fegaussianblur>
                                                                <feblend id="SvgjsFeBlend3430" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur3429Out" mode="normal"
                                                                    result="SvgjsFeBlend3430Out"></feblend>
                                                            </filter>
                                                            <filter id="SvgjsFilter3435"
                                                                filterUnits="userSpaceOnUse" width="200%"
                                                                height="200%" x="-50%" y="-50%">
                                                                <feflood id="SvgjsFeFlood3436" flood-color="#000000"
                                                                    flood-opacity="0.1" result="SvgjsFeFlood3436Out"
                                                                    in="SourceGraphic"></feflood>
                                                                <fecomposite id="SvgjsFeComposite3437"
                                                                    in="SvgjsFeFlood3436Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite3437Out">
                                                                </fecomposite>
                                                                <feoffset id="SvgjsFeOffset3438" dx="-7"
                                                                    dy="7" result="SvgjsFeOffset3438Out"
                                                                    in="SvgjsFeComposite3437Out"></feoffset>
                                                                <fegaussianblur id="SvgjsFeGaussianBlur3439"
                                                                    stdDeviation="7 "
                                                                    result="SvgjsFeGaussianBlur3439Out"
                                                                    in="SvgjsFeOffset3438Out"></fegaussianblur>
                                                                <feblend id="SvgjsFeBlend3440" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur3439Out" mode="normal"
                                                                    result="SvgjsFeBlend3440Out"></feblend>
                                                            </filter>
                                                        </defs>
                                                        <line id="SvgjsLine3417" x1="0" y1="0"
                                                            x2="0" y2="307.11199999999997"
                                                            stroke="#b6b6b6" stroke-dasharray="3"
                                                            stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                                            x="0" y="0" width="1"
                                                            height="307.11199999999997" fill="#b1b9c4"
                                                            filter="none" fill-opacity="0.9" stroke-width="1">
                                                        </line>
                                                        <g id="SvgjsG3441" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG3442" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text
                                                                    id="SvgjsText3444"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="0" y="336.11199999999997"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3445">Mon</tspan>
                                                                    <title>Mon</title>
                                                                </text><text id="SvgjsText3447"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="135.55416711171466" y="336.11199999999997"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3448">Tue</tspan>
                                                                    <title>Tue</title>
                                                                </text><text id="SvgjsText3450"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="271.1083342234294" y="336.11199999999997"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3451">Wed</tspan>
                                                                    <title>Wed</title>
                                                                </text><text id="SvgjsText3453"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="406.6625013351441" y="336.11199999999997"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3454">Thu</tspan>
                                                                    <title>Thu</title>
                                                                </text><text id="SvgjsText3456"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="542.2166684468589" y="336.11199999999997"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3457">Fri</tspan>
                                                                    <title>Fri</title>
                                                                </text><text id="SvgjsText3459"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="677.7708355585736" y="336.11199999999997"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3460">Sat</tspan>
                                                                    <title>Sat</title>
                                                                </text><text id="SvgjsText3462"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="813.3250026702883" y="336.11199999999997"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan3463">Sun</tspan>
                                                                    <title>Sun</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG3476" class="apexcharts-grid">
                                                            <g id="SvgjsG3477"
                                                                class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine3486" x1="0"
                                                                    y1="0" x2="813.3250026702881"
                                                                    y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine3487" x1="0"
                                                                    y1="76.77799999999999" x2="813.3250026702881"
                                                                    y2="76.77799999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine3488" x1="0"
                                                                    y1="153.55599999999998" x2="813.3250026702881"
                                                                    y2="153.55599999999998" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine3489" x1="0"
                                                                    y1="230.33399999999997" x2="813.3250026702881"
                                                                    y2="230.33399999999997" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine3490" x1="0"
                                                                    y1="307.11199999999997" x2="813.3250026702881"
                                                                    y2="307.11199999999997" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG3478"
                                                                class="apexcharts-gridlines-vertical"></g>
                                                            <line id="SvgjsLine3479" x1="0"
                                                                y1="308.11199999999997" x2="0"
                                                                y2="314.11199999999997" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine3480" x1="135.5541671117147"
                                                                y1="308.11199999999997" x2="135.5541671117147"
                                                                y2="314.11199999999997" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine3481" x1="271.1083342234294"
                                                                y1="308.11199999999997" x2="271.1083342234294"
                                                                y2="314.11199999999997" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine3482" x1="406.66250133514404"
                                                                y1="308.11199999999997" x2="406.66250133514404"
                                                                y2="314.11199999999997" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine3483" x1="542.2166684468588"
                                                                y1="308.11199999999997" x2="542.2166684468588"
                                                                y2="314.11199999999997" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine3484" x1="677.7708355585735"
                                                                y1="308.11199999999997" x2="677.7708355585735"
                                                                y2="314.11199999999997" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine3485" x1="813.3250026702882"
                                                                y1="308.11199999999997" x2="813.3250026702882"
                                                                y2="314.11199999999997" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-xaxis-tick"></line>
                                                            <line id="SvgjsLine3492" x1="0"
                                                                y1="307.11199999999997" x2="813.3250026702881"
                                                                y2="307.11199999999997" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine3491" x1="0" y1="1"
                                                                x2="0" y2="307.11199999999997"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG3420"
                                                            class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG3421" class="apexcharts-series"
                                                                seriesname="CurrentxWeek" data:longestseries="true"
                                                                rel="1" data:realindex="0">
                                                                <path id="SvgjsPath3424"
                                                                    d="M0 221.8031111111111C47.44395848910014 221.8031111111111 88.11020862261455 136.49422222222222 135.5541671117147 136.49422222222222C182.99812560081483 136.49422222222222 223.66437573432924 179.14866666666666 271.1083342234294 179.14866666666666C318.5522927125295 179.14866666666666 359.21854284604393 93.83977777777778 406.66250133514404 93.83977777777778C454.1064598242442 93.83977777777778 494.7727099577586 136.49422222222222 542.2166684468588 136.49422222222222C589.6606269359588 136.49422222222222 630.3268770694733 51.18533333333335 677.7708355585734 51.18533333333335C725.2147940476735 51.18533333333335 765.8810441811879 136.49422222222222 813.3250026702881 136.49422222222222 "
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(114,124,245,0.85)"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="4" stroke-dasharray="0"
                                                                    class="apexcharts-line" index="0"
                                                                    clip-path="url(#gridRectMask3mcoqhal)"
                                                                    filter="url(#SvgjsFilter3425)"
                                                                    pathto="M 0 221.8031111111111C 47.44395848910014 221.8031111111111 88.11020862261455 136.49422222222222 135.5541671117147 136.49422222222222C 182.99812560081483 136.49422222222222 223.66437573432924 179.14866666666666 271.1083342234294 179.14866666666666C 318.5522927125295 179.14866666666666 359.21854284604393 93.83977777777778 406.66250133514404 93.83977777777778C 454.1064598242442 93.83977777777778 494.7727099577586 136.49422222222222 542.2166684468588 136.49422222222222C 589.6606269359588 136.49422222222222 630.3268770694733 51.18533333333335 677.7708355585734 51.18533333333335C 725.2147940476735 51.18533333333335 765.8810441811879 136.49422222222222 813.3250026702881 136.49422222222222"
                                                                    pathfrom="M 0 221.8031111111111C 40.09395848910014 221.8031111111111 74.46020862261454 136.49422222222222 114.55416711171469 136.49422222222222C 154.64812560081484 136.49422222222222 189.01437573432924 179.14866666666666 229.10833422342938 179.14866666666666C 269.2022927125295 179.14866666666666 303.5685428460439 93.83977777777778 343.66250133514404 93.83977777777778C 383.7564598242442 93.83977777777778 418.1227099577586 136.49422222222222 458.21666844685876 136.49422222222222C 498.3106269359589 136.49422222222222 532.6768770694733 51.18533333333335 572.7708355585735 51.18533333333335C 612.8647940476736 51.18533333333335 647.2310441811879 136.49422222222222 687.3250026702881 136.49422222222222">
                                                                </path>
                                                                <g id="SvgjsG3422"
                                                                    class="apexcharts-series-markers-wrap"
                                                                    data:realindex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle3498" r="0"
                                                                            cx="0" cy="0"
                                                                            class="apexcharts-marker woyezhutp no-pointer-events"
                                                                            stroke="#ffffff" fill="#727cf5"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9"
                                                                            default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG3431" class="apexcharts-series"
                                                                seriesname="PreviousxWeek" data:longestseries="true"
                                                                rel="2" data:realindex="1">
                                                                <path id="SvgjsPath3434"
                                                                    d="M0 307.11199999999997C47.44395848910014 307.11199999999997 88.11020862261455 179.14866666666666 135.5541671117147 179.14866666666666C182.99812560081483 179.14866666666666 223.66437573432924 221.8031111111111 271.1083342234294 221.8031111111111C318.5522927125295 221.8031111111111 359.21854284604393 51.18533333333335 406.66250133514404 51.18533333333335C454.1064598242442 51.18533333333335 494.7727099577586 179.14866666666666 542.2166684468588 179.14866666666666C589.6606269359588 179.14866666666666 630.3268770694733 8.53088888888891 677.7708355585734 8.53088888888891C725.2147940476735 8.53088888888891 765.8810441811879 93.83977777777778 813.3250026702881 93.83977777777778 "
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(10,207,151,0.85)"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="4" stroke-dasharray="0"
                                                                    class="apexcharts-line" index="1"
                                                                    clip-path="url(#gridRectMask3mcoqhal)"
                                                                    filter="url(#SvgjsFilter3435)"
                                                                    pathto="M 0 307.11199999999997C 47.44395848910014 307.11199999999997 88.11020862261455 179.14866666666666 135.5541671117147 179.14866666666666C 182.99812560081483 179.14866666666666 223.66437573432924 221.8031111111111 271.1083342234294 221.8031111111111C 318.5522927125295 221.8031111111111 359.21854284604393 51.18533333333335 406.66250133514404 51.18533333333335C 454.1064598242442 51.18533333333335 494.7727099577586 179.14866666666666 542.2166684468588 179.14866666666666C 589.6606269359588 179.14866666666666 630.3268770694733 8.53088888888891 677.7708355585734 8.53088888888891C 725.2147940476735 8.53088888888891 765.8810441811879 93.83977777777778 813.3250026702881 93.83977777777778"
                                                                    pathfrom="M 0 307.11199999999997C 40.09395848910014 307.11199999999997 74.46020862261454 179.14866666666666 114.55416711171469 179.14866666666666C 154.64812560081484 179.14866666666666 189.01437573432924 221.8031111111111 229.10833422342938 221.8031111111111C 269.2022927125295 221.8031111111111 303.5685428460439 51.18533333333335 343.66250133514404 51.18533333333335C 383.7564598242442 51.18533333333335 418.1227099577586 179.14866666666666 458.21666844685876 179.14866666666666C 498.3106269359589 179.14866666666666 532.6768770694733 8.53088888888891 572.7708355585735 8.53088888888891C 612.8647940476736 8.53088888888891 647.2310441811879 93.83977777777778 687.3250026702881 93.83977777777778">
                                                                </path>
                                                                <g id="SvgjsG3432"
                                                                    class="apexcharts-series-markers-wrap"
                                                                    data:realindex="1">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle3499" r="0"
                                                                            cx="0" cy="0"
                                                                            class="apexcharts-marker winwp38th no-pointer-events"
                                                                            stroke="#ffffff" fill="#0acf97"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9"
                                                                            default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG3423" class="apexcharts-datalabels"
                                                                data:realindex="0"></g>
                                                            <g id="SvgjsG3433" class="apexcharts-datalabels"
                                                                data:realindex="1"></g>
                                                        </g>
                                                        <line id="SvgjsLine3493" x1="0" y1="0"
                                                            x2="813.3250026702881" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                        </line>
                                                        <line id="SvgjsLine3494" x1="0" y1="0"
                                                            x2="813.3250026702881" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG3495" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG3496" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG3497" class="apexcharts-point-annotations"></g>
                                                        <rect id="SvgjsRect3500" width="0" height="0"
                                                            x="0" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-zoom-rect"></rect>
                                                        <rect id="SvgjsRect3501" width="0" height="0"
                                                            x="0" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-selection-rect"></rect>
                                                    </g>
                                                    <rect id="SvgjsRect3416" width="0" height="0"
                                                        x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG3464" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(18.199996948242188, 0)">
                                                        <g id="SvgjsG3465" class="apexcharts-yaxis-texts-g"><text
                                                                id="SvgjsText3466"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="31.4" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan3467">36k</tspan>
                                                                <title>36k</title>
                                                            </text><text id="SvgjsText3468"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="108.178" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan3469">27k</tspan>
                                                                <title>27k</title>
                                                            </text><text id="SvgjsText3470"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="184.956" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan3471">18k</tspan>
                                                                <title>18k</title>
                                                            </text><text id="SvgjsText3472"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="261.7339999999999"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan3473">9k</tspan>
                                                                <title>9k</title>
                                                            </text><text id="SvgjsText3474"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="338.51199999999994"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan3475">0k</tspan>
                                                                <title>0k</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG3413" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 189px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(114, 124, 245);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(10, 207, 151);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="header-title">Revenue
                                                By
                                                Location</h4>
                                            <div class="dropdown"><a class="arrow-none card-drop dropdown-toggle"
                                                    id="react-aria3379482148-13" aria-expanded="false"
                                                    href="/dashboard/ecommerce"><i
                                                        class="mdi mdi-dots-vertical"></i></a></div>
                                        </div>
                                        <div class="mb-4 mt-4">
                                            <div id="world1696884688764" style="width: 100%; height: 224px;"
                                                class="jvm-container"><svg width="452" height="224">
                                                    <defs></defs>
                                                    <g id="jvm-regions-group"
                                                        transform="scale(0.5022222222222222) translate(0, 2.655694185455648)">
                                                        <path
                                                            d="M651.84,230.21l-0.6,-2.0l-1.36,-1.71l-2.31,-0.11l-0.41,0.48l0.2,0.94l-0.53,0.99l-0.72,-0.36l-0.68,0.35l-1.2,-0.36l-0.37,-2.0l-0.81,-1.86l0.39,-1.46l-0.22,-0.47l-1.14,-0.53l0.29,-0.5l1.48,-0.94l0.03,-0.65l-1.55,-1.22l0.55,-1.14l1.61,0.94l1.04,0.15l0.18,1.54l0.34,0.35l5.64,0.63l-0.84,1.64l-1.22,0.34l-0.77,1.51l0.07,0.47l1.37,1.37l0.67,-0.19l0.42,-1.39l1.21,3.84l-0.03,1.21l-0.33,-0.15l-0.4,0.28Z"
                                                            data-code="BD" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M429.29,144.05l1.91,0.24l2.1,-0.63l2.63,1.99l-0.21,1.66l-0.69,0.4l-0.18,1.2l-1.66,-1.13l-1.39,0.15l-2.73,-2.7l-1.17,-0.18l-0.16,-0.52l1.54,-0.5Z"
                                                            data-code="BE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M421.42,247.64l-0.11,0.95l0.34,1.16l1.4,1.71l0.07,1.1l0.32,0.37l2.55,0.51l-0.04,1.28l-0.38,0.53l-1.07,0.21l-0.72,1.18l-0.63,0.21l-3.22,-0.25l-0.94,0.39l-5.4,-0.05l-0.39,0.38l0.16,2.73l-1.23,-0.43l-1.17,0.1l-0.89,0.57l-2.27,-1.72l-0.13,-1.11l0.61,-0.96l0.02,-0.93l1.87,-1.98l0.44,-1.81l0.43,-0.39l1.28,0.26l1.05,-0.52l0.47,-0.73l1.84,-1.09l0.55,-0.83l2.2,-1.0l1.15,-0.3l0.72,0.45l1.13,-0.01Z"
                                                            data-code="BF" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M491.65,168.18l-0.86,0.88l-0.91,2.17l0.48,1.34l-1.6,-0.24l-2.55,0.95l-0.28,1.51l-1.8,0.22l-2.0,-1.0l-1.92,0.79l-1.42,-0.07l-0.15,-1.63l-1.05,-0.97l0.0,-0.8l1.2,-1.57l0.01,-0.56l-1.14,-1.23l-0.05,-0.94l0.88,0.97l0.88,-0.2l1.91,0.47l3.68,0.16l1.42,-0.81l2.72,-0.66l2.55,1.24Z"
                                                            data-code="BG" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M463.49,163.65l2.1,0.5l1.72,-0.03l1.52,0.68l-0.36,0.78l0.08,0.45l1.04,1.02l-0.25,0.98l-1.81,1.15l-0.38,1.38l-1.67,-0.87l-0.89,-1.2l-2.11,-1.83l-1.63,-2.22l0.23,-0.57l0.48,0.38l0.55,-0.06l0.43,-0.51l0.94,-0.06Z"
                                                            data-code="BA" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M707.48,273.58l0.68,-0.65l1.41,-0.91l-0.15,1.63l-0.81,-0.05l-0.61,0.58l-0.53,-0.6Z"
                                                            data-code="BN" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M263.83,340.69l-3.09,-0.23l-0.38,0.23l-0.7,1.52l-1.31,-1.53l-3.28,-0.64l-2.37,2.4l-1.31,0.26l-0.88,-3.26l-1.3,-2.86l0.74,-2.37l-0.13,-0.43l-1.2,-1.01l-0.37,-1.89l-1.08,-1.55l1.45,-2.56l-0.96,-2.33l0.47,-1.06l-0.34,-0.73l0.91,-1.32l0.16,-3.84l0.5,-1.18l-1.81,-3.41l2.46,0.07l0.8,-0.85l3.4,-1.91l2.66,-0.35l-0.19,1.38l0.3,1.07l-0.05,1.97l2.72,2.27l2.88,0.49l0.89,0.86l1.79,0.58l0.98,0.7l1.71,0.05l1.17,0.61l0.6,2.7l-0.7,0.54l0.96,2.99l0.37,0.28l4.3,0.1l-0.25,1.2l0.27,1.02l1.43,0.9l0.5,1.35l-0.41,1.86l-0.65,1.08l0.12,1.35l-2.69,-1.65l-2.4,-0.03l-4.36,0.76l-1.49,2.5l-0.11,1.52l-0.75,2.37Z"
                                                            data-code="BO" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M781.12,166.87l1.81,0.68l1.62,-0.97l0.39,2.42l-3.35,0.75l-2.23,2.88l-3.63,-1.9l-0.56,0.2l-1.26,3.05l-2.16,0.03l-0.29,-2.51l1.08,-2.03l2.45,-0.16l0.37,-0.33l1.25,-5.94l2.47,2.71l2.03,1.12ZM773.56,187.34l-0.91,2.22l0.37,1.52l-1.14,1.75l-3.02,1.26l-4.58,0.27l-3.34,3.01l-1.25,-0.8l-0.09,-1.9l-0.46,-0.38l-4.35,0.62l-3.0,1.32l-2.85,0.05l-0.37,0.27l0.13,0.44l2.32,1.89l-1.54,4.34l-1.26,0.9l-0.79,-0.7l0.56,-2.27l-0.21,-0.45l-1.47,-0.75l-0.74,-1.4l2.12,-0.84l1.26,-1.7l2.45,-1.42l1.83,-1.91l4.78,-0.81l2.6,0.57l0.44,-0.21l2.39,-4.66l1.29,1.06l0.5,0.01l5.1,-4.02l1.69,-3.73l-0.38,-3.4l0.9,-1.61l2.14,-0.44l1.23,3.72l-0.07,2.18l-2.23,2.84l-0.04,3.16ZM757.78,196.26l0.19,0.56l-1.01,1.21l-1.16,-0.68l-1.28,0.65l-0.69,1.45l-1.02,-0.5l0.01,-0.93l1.14,-1.38l1.57,0.14l0.85,-0.98l1.4,0.46Z"
                                                            data-code="JP" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M495.45,295.49l-1.08,-2.99l1.14,-0.11l0.64,-1.19l0.76,0.09l0.65,1.83l-2.1,2.36Z"
                                                            data-code="BI" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M429.57,255.75l-0.05,0.8l0.5,1.34l-0.42,0.86l0.17,0.79l-1.81,2.12l-0.57,1.76l-0.08,5.42l-1.41,0.2l-0.48,-1.36l0.11,-5.71l-0.52,-0.7l-0.2,-1.35l-1.48,-1.48l0.21,-0.9l0.89,-0.43l0.42,-0.92l1.27,-0.36l1.22,-1.34l0.61,-0.0l1.62,1.24Z"
                                                            data-code="BJ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M650.32,213.86l0.84,0.71l-0.12,1.1l-3.76,-0.11l-1.57,0.4l-1.93,-0.87l1.48,-1.96l1.13,-0.57l1.63,0.57l1.33,0.08l0.99,0.65Z"
                                                            data-code="BT" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M228.38,239.28l-0.8,0.4l-2.26,-1.06l0.84,-0.23l2.14,0.3l1.17,0.56l-1.08,0.03Z"
                                                            data-code="JM" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M483.92,330.07l2.27,4.01l2.83,2.86l0.96,0.31l0.78,2.43l2.13,0.61l1.02,0.76l-3.0,1.64l-2.32,2.02l-1.54,2.69l-1.52,0.45l-0.64,1.94l-1.34,0.52l-1.85,-0.12l-1.21,-0.74l-1.35,-0.3l-1.22,0.62l-0.75,1.37l-2.31,1.9l-1.4,0.21l-0.35,-0.59l0.16,-1.75l-1.48,-2.54l-0.62,-0.43l-0.0,-7.1l2.08,-0.08l0.39,-0.4l0.07,-8.9l5.19,-0.93l0.8,0.89l0.51,0.07l1.5,-0.95l2.21,-0.49Z"
                                                            data-code="BW" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M259.98,275.05l3.24,0.7l0.65,-0.53l4.55,-1.32l1.08,-1.06l-0.02,-0.63l0.55,-0.05l0.28,0.28l-0.26,0.87l0.22,0.48l0.73,0.32l0.4,0.81l-0.62,0.86l-0.4,2.13l0.82,2.56l1.69,1.43l1.43,0.2l3.17,-1.68l3.18,0.3l0.65,-0.75l-0.27,-0.92l1.9,-0.09l2.39,0.99l1.06,-0.61l0.84,0.78l1.2,-0.18l1.18,-1.06l0.84,-1.94l1.36,-2.11l0.37,-0.05l1.89,5.45l1.33,0.59l0.05,1.28l-1.77,1.94l0.02,0.56l1.02,0.87l4.07,0.36l0.08,2.16l0.66,0.29l1.74,-1.5l6.97,2.32l1.02,1.22l-0.35,1.18l0.49,0.5l2.81,-0.74l4.77,1.3l3.75,-0.08l3.57,2.0l3.29,2.86l1.93,0.72l2.12,0.12l0.71,0.62l1.21,4.51l-0.95,3.98l-4.72,5.06l-1.64,2.92l-1.72,2.05l-0.8,0.3l-0.72,2.03l0.18,4.75l-0.94,5.53l-0.81,1.13l-0.43,3.36l-2.55,3.5l-0.4,2.51l-1.86,1.04l-0.67,1.53l-2.54,0.01l-3.94,1.01l-1.83,1.2l-2.87,0.82l-3.03,2.19l-2.2,2.83l-0.36,2.0l0.4,1.58l-0.44,2.6l-0.51,1.2l-1.77,1.54l-2.75,4.78l-3.83,3.42l-1.24,2.74l-1.18,1.15l-0.36,-0.83l0.95,-1.14l0.01,-0.5l-1.52,-1.97l-4.56,-3.32l-1.03,-0.0l-2.38,-2.02l-0.81,-0.0l5.34,-5.45l3.77,-2.58l0.22,-2.46l-1.35,-1.81l-0.91,0.07l0.58,-2.33l0.01,-1.54l-1.11,-0.83l-1.75,0.3l-0.44,-3.11l-0.52,-0.95l-1.88,-0.88l-1.24,0.47l-2.17,-0.41l0.15,-3.21l-0.62,-1.34l0.66,-0.73l-0.22,-1.34l0.66,-1.13l0.44,-2.04l-0.61,-1.83l-1.4,-0.86l-0.2,-0.75l0.34,-1.39l-0.38,-0.5l-4.52,-0.1l-0.72,-2.22l0.59,-0.42l-0.03,-1.1l-0.5,-0.87l-0.32,-1.7l-1.45,-0.76l-1.63,-0.02l-1.05,-0.72l-1.6,-0.48l-1.13,-0.99l-2.69,-0.4l-2.47,-2.06l0.13,-4.35l-0.45,-0.45l-3.46,0.5l-3.44,1.94l-0.6,0.74l-2.9,-0.17l-1.47,0.42l-0.72,-0.18l0.15,-3.52l-0.63,-0.34l-1.94,1.41l-1.87,-0.06l-0.83,-1.18l-1.37,-0.26l0.21,-1.01l-1.35,-1.49l-0.88,-1.91l0.56,-0.6l-0.0,-0.81l1.29,-0.62l0.22,-0.43l-0.22,-1.19l0.61,-0.91l0.15,-0.99l2.65,-1.58l1.99,-0.47l0.42,-0.36l2.06,0.11l0.42,-0.33l1.19,-8.0l-0.41,-1.56l-1.1,-1.0l0.01,-1.33l1.91,-0.42l0.08,-0.96l-0.33,-0.43l-1.14,-0.2l-0.02,-0.83l4.47,0.05l0.82,-0.67l0.82,1.81l0.8,0.07l1.15,1.1l2.26,-0.05l0.71,-0.83l2.78,-0.96l0.48,-1.13l1.6,-0.64l0.24,-0.47l-0.48,-0.82l-1.83,-0.19l-0.36,-3.22Z"
                                                            data-code="BR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M226.4,223.87l-0.48,-1.15l-0.84,-0.75l0.36,-1.11l0.95,1.95l0.01,1.06ZM225.56,216.43l-1.87,0.29l-0.04,-0.22l0.74,-0.14l1.17,0.06Z"
                                                            data-code="BS" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M493.84,128.32l0.29,0.7l0.49,0.23l1.19,-0.38l2.09,0.72l0.19,1.26l-0.45,1.24l1.57,2.26l0.89,0.59l0.17,0.81l1.58,0.56l0.4,0.5l-0.53,0.41l-1.87,-0.11l-0.73,0.38l-0.13,0.52l1.04,2.74l-1.91,0.26l-0.89,0.99l-0.11,1.18l-2.73,-0.04l-0.53,-0.62l-0.52,-0.08l-0.75,0.46l-0.91,-0.42l-1.92,-0.07l-2.75,-0.79l-2.6,-0.28l-2.0,0.07l-1.5,0.92l-0.67,0.07l-0.08,-1.22l-0.59,-1.19l1.36,-0.88l0.01,-1.35l-0.7,-1.41l-0.07,-1.0l2.16,-0.02l2.72,-1.3l0.75,-2.04l1.91,-1.04l0.2,-0.41l-0.19,-1.25l3.8,-1.78l2.3,0.77Z"
                                                            data-code="BY" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M198.03,244.38l0.1,-4.49l0.69,-0.06l0.74,-1.3l0.34,0.28l-0.4,1.3l0.17,0.58l-0.34,2.25l-1.3,1.42Z"
                                                            data-code="BZ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M491.55,115.25l2.55,-1.85l-0.01,-0.65l-2.2,-1.5l7.32,-6.76l1.03,-2.11l-0.13,-0.49l-3.46,-2.52l0.86,-2.7l-2.11,-2.81l1.56,-3.67l-2.77,-4.52l2.15,-2.99l-0.08,-0.55l-3.65,-2.73l0.3,-2.54l1.81,-0.37l4.26,-1.77l2.42,-1.45l4.06,2.61l6.79,1.04l9.34,4.85l1.78,1.88l0.14,2.46l-2.55,2.02l-3.9,1.06l-11.07,-3.14l-2.06,0.53l-0.13,0.7l3.94,2.94l0.31,5.86l0.26,0.36l5.14,2.24l0.58,-0.29l0.32,-1.94l-1.35,-1.78l1.13,-1.09l6.13,2.42l2.11,-0.98l0.18,-0.56l-1.51,-2.67l5.41,-3.76l2.07,0.22l2.26,1.41l0.57,-0.16l1.46,-2.87l-0.05,-0.44l-1.92,-2.32l1.12,-2.32l-1.32,-2.27l5.87,1.16l1.04,1.75l-2.59,0.43l-0.33,0.4l0.02,2.36l2.46,1.83l3.87,-0.91l0.86,-2.8l13.69,-5.65l0.99,0.11l-1.92,2.06l0.23,0.67l3.11,0.45l2.0,-1.48l4.56,-0.12l3.64,-1.73l2.65,2.44l0.56,-0.01l2.85,-2.88l-0.01,-0.57l-2.35,-2.29l0.9,-1.01l7.14,1.3l3.41,1.36l9.05,4.97l0.51,-0.11l1.67,-2.27l-0.05,-0.53l-2.43,-2.21l-0.06,-0.78l-0.34,-0.36l-2.52,-0.36l0.64,-1.93l-1.32,-3.46l-0.06,-1.21l4.48,-4.06l1.69,-4.29l1.6,-0.81l6.23,1.18l0.44,2.21l-2.29,3.64l0.06,0.5l1.47,1.39l0.76,3.0l-0.56,6.03l2.69,2.82l-0.96,2.57l-4.86,5.95l0.23,0.64l2.86,0.61l0.42,-0.17l0.93,-1.4l2.64,-1.03l0.87,-2.24l2.09,-1.96l0.07,-0.5l-1.36,-2.28l1.09,-2.69l-0.32,-0.55l-2.47,-0.33l-0.5,-2.06l1.94,-4.38l-0.06,-0.42l-2.96,-3.4l4.12,-2.88l0.16,-0.4l-0.51,-2.93l0.54,-0.05l1.13,2.25l-0.96,4.35l0.27,0.47l2.68,0.84l0.5,-0.51l-1.02,-2.99l3.79,-1.66l5.01,-0.24l4.53,2.61l0.48,-0.06l0.07,-0.48l-2.18,-3.82l-0.23,-4.67l3.98,-0.9l5.97,0.21l5.49,-0.64l0.27,-0.65l-1.83,-2.31l2.56,-2.9l2.87,-0.17l4.8,-2.47l6.54,-0.67l1.03,-1.42l6.25,-0.45l2.32,1.11l5.53,-2.7l4.5,0.08l0.39,-0.28l0.66,-2.15l2.26,-2.12l5.69,-2.11l3.21,1.29l-2.46,0.94l-0.25,0.42l0.34,0.35l5.41,0.77l0.61,2.33l0.58,0.25l2.2,-1.22l7.13,0.07l5.51,2.47l1.79,1.72l-0.53,2.24l-9.16,4.15l-1.97,1.52l0.16,0.71l6.77,1.91l2.16,-0.78l1.13,2.74l0.67,0.11l1.01,-1.15l3.81,-0.73l7.7,0.77l0.54,1.99l0.36,0.29l10.47,0.71l0.43,-0.38l0.13,-3.23l4.87,0.78l3.95,-0.02l3.83,2.4l1.03,2.71l-1.35,1.79l0.02,0.5l3.15,3.64l4.07,1.96l0.53,-0.18l2.23,-4.47l3.95,1.93l4.16,-1.21l4.73,1.39l2.05,-1.26l3.94,0.62l0.43,-0.55l-1.68,-4.02l2.89,-1.8l22.31,3.03l2.16,2.75l6.55,3.51l10.29,-0.81l4.82,0.73l1.85,1.66l-0.29,3.08l0.25,0.41l3.08,1.26l3.56,-0.88l4.35,-0.11l4.8,0.87l4.57,-0.47l4.23,3.79l0.43,0.07l3.1,-1.4l0.16,-0.6l-1.88,-2.62l0.85,-1.52l7.71,1.21l5.22,-0.26l7.09,2.09l9.59,5.22l6.35,4.11l-0.2,2.38l1.88,1.41l0.6,-0.42l-0.48,-2.53l6.15,0.57l4.4,3.51l-1.97,1.43l-4.0,0.41l-0.36,0.39l-0.06,3.79l-0.74,0.62l-2.07,-0.11l-1.91,-1.39l-3.14,-1.11l-0.78,-1.85l-2.72,-0.68l-2.63,0.49l-1.04,-1.1l0.46,-1.31l-0.5,-0.51l-3.0,0.98l-0.22,0.58l0.99,1.7l-1.21,1.48l-3.04,1.68l-3.12,-0.28l-0.4,0.23l0.09,0.46l2.2,2.09l1.46,3.2l1.15,1.1l0.24,1.33l-0.42,0.67l-4.63,-0.77l-6.96,2.9l-2.19,0.44l-7.6,5.06l-0.84,1.45l-3.61,-2.37l-6.24,2.82l-0.94,-1.15l-0.53,-0.08l-2.28,1.52l-3.2,-0.49l-0.44,0.27l-0.78,2.37l-3.05,3.78l0.09,1.47l0.29,0.36l2.54,0.72l-0.29,4.53l-1.97,0.11l-0.35,0.26l-1.07,2.94l0.8,1.45l-3.91,1.58l-1.05,3.95l-3.48,0.77l-0.3,0.3l-0.72,3.29l-3.09,2.65l-0.7,-1.74l-2.44,-12.44l1.16,-4.71l2.04,-2.06l0.22,-1.64l3.8,-0.86l4.46,-4.61l4.28,-3.81l4.48,-3.01l2.17,-5.63l-0.42,-0.54l-3.04,0.33l-1.77,3.31l-5.86,3.86l-1.86,-4.25l-0.45,-0.23l-6.46,1.3l-6.47,6.44l-0.01,0.55l1.58,1.74l-8.24,1.17l0.15,-2.2l-0.34,-0.42l-3.89,-0.56l-3.25,1.81l-7.62,-0.62l-8.45,1.19l-17.71,15.41l0.22,0.7l3.74,0.41l1.36,2.17l2.43,0.76l1.88,-1.68l2.4,0.2l3.4,3.54l0.08,2.6l-1.95,3.42l-0.21,3.9l-1.1,5.06l-3.71,4.54l-0.87,2.21l-8.29,8.89l-3.19,1.7l-1.32,0.03l-1.45,-1.36l-0.49,-0.04l-2.27,1.5l0.41,-3.65l-0.59,-2.47l1.75,-0.89l2.91,0.53l0.42,-0.2l1.68,-3.03l0.87,-3.46l0.97,-1.18l1.32,-2.88l-0.45,-0.56l-4.14,0.95l-2.19,1.25l-3.41,-0.0l-1.06,-2.93l-2.97,-2.3l-4.28,-1.06l-1.75,-5.07l-2.66,-5.01l-2.29,-1.29l-3.75,-1.01l-3.44,0.08l-3.18,0.62l-2.24,1.77l0.05,0.66l1.18,0.69l0.02,1.43l-1.33,1.05l-2.26,3.51l-0.04,1.43l-3.16,1.84l-2.82,-1.16l-3.01,0.23l-1.35,-1.07l-1.5,-0.35l-3.9,2.31l-3.22,0.52l-2.27,0.79l-3.05,-0.51l-2.21,0.03l-1.48,-1.6l-2.6,-1.63l-2.63,-0.43l-5.46,1.01l-3.23,-1.25l-0.72,-2.57l-5.2,-1.24l-2.75,-1.36l-0.5,0.12l-2.59,3.45l0.84,2.1l-2.06,1.93l-3.41,-0.77l-2.42,-0.12l-1.83,-1.54l-2.53,-0.05l-2.42,-0.98l-3.86,1.57l-4.72,2.78l-3.3,0.75l-1.55,-1.92l-3.0,0.41l-1.11,-1.33l-1.62,-0.59l-1.31,-1.94l-1.38,-0.6l-3.7,0.79l-3.31,-1.83l-0.51,0.11l-0.99,1.29l-5.29,-8.05l-2.96,-2.48l0.65,-0.77l0.01,-0.51l-0.5,-0.11l-6.2,3.21l-1.84,0.15l0.15,-1.39l-0.26,-0.42l-3.22,-1.17l-2.46,0.7l-0.69,-3.16l-0.32,-0.31l-4.5,-0.75l-2.47,1.47l-6.19,1.27l-1.29,0.86l-9.51,1.3l-1.15,1.17l-0.03,0.53l1.47,1.9l-1.89,0.69l-0.22,0.56l0.31,0.6l-2.11,1.44l0.03,0.68l3.75,2.12l-0.39,0.98l-3.23,-0.13l-0.86,0.86l-3.09,-1.59l-3.97,0.07l-2.66,1.35l-8.32,-3.56l-4.07,0.06l-5.39,3.68l-0.39,2.0l-2.03,-1.5l-0.59,0.13l-2.0,3.59l0.57,0.93l-1.28,2.16l0.06,0.48l2.13,2.17l1.95,0.04l1.37,1.82l-0.23,1.46l0.25,0.43l0.83,0.33l-0.8,1.31l-2.49,0.62l-2.49,3.2l0.0,0.49l2.17,2.78l-0.15,2.18l2.5,3.24l-1.58,1.59l-0.7,-0.13l-1.63,-1.72l-2.29,-0.84l-0.94,-1.31l-2.34,-0.63l-1.48,0.4l-0.43,-0.47l-3.51,-1.48l-5.76,-1.01l-0.45,0.19l-2.89,-2.34l-2.9,-1.2l-1.53,-1.29l1.29,-0.43l2.08,-2.61l-0.05,-0.55l-0.89,-0.79l3.05,-1.06l0.27,-0.42l-0.07,-0.69l-0.49,-0.35l-1.73,0.39l0.04,-0.68l1.04,-0.72l2.66,-0.48l0.4,-1.32l-0.5,-1.6l0.92,-1.54l0.03,-1.17l-0.29,-0.37l-3.69,-1.06l-1.41,0.02l-1.42,-1.41l-2.19,0.38l-2.77,-1.01l-0.03,-0.59l-0.89,-1.43l-2.0,-0.32l-0.11,-0.54l0.49,-0.53l0.01,-0.53l-1.6,-1.9l-3.58,0.02l-0.88,0.73l-0.46,-0.07l-1.0,-2.79l2.22,-0.02l0.97,-0.74l0.07,-0.57l-0.9,-1.04l-1.35,-0.48l-0.11,-0.7l-0.95,-0.58l-1.38,-1.99l0.46,-0.98l-0.51,-1.96l-2.45,-0.84l-1.21,0.3l-0.46,-0.76l-2.46,-0.83l-0.72,-1.87l-0.21,-1.69l-0.99,-0.85l0.85,-1.17l-0.7,-3.21l1.66,-1.97l-0.16,-0.79ZM749.2,170.72l-0.6,0.4l-0.13,0.16l-0.01,-0.51l0.74,-0.05ZM874.85,67.94l-5.63,0.48l-0.26,-0.84l3.15,-1.89l1.94,0.01l3.19,1.16l-2.39,1.09ZM797.39,48.49l-2.0,1.36l-3.8,-0.42l-4.25,-1.8l0.35,-0.97l9.69,1.83ZM783.67,46.12l-1.63,3.09l-8.98,-0.13l-4.09,1.14l-4.54,-2.97l1.16,-3.01l3.05,-0.89l6.5,0.22l8.54,2.56ZM778.2,134.98l-0.56,-0.9l0.27,-0.12l0.29,1.01ZM778.34,135.48l0.94,3.53l-0.05,3.38l1.05,3.39l2.18,5.0l-2.89,-0.83l-0.49,0.26l-1.54,4.65l2.42,3.5l-0.04,1.13l-1.24,-1.24l-0.61,0.06l-1.09,1.61l-0.28,-1.61l0.27,-3.1l-0.28,-3.4l0.58,-2.47l0.11,-4.39l-1.46,-3.36l0.21,-4.32l2.15,-1.46l0.07,-0.34ZM771.95,56.61l1.76,-1.42l2.89,-0.42l3.28,1.71l0.14,0.6l-3.27,0.03l-4.81,-0.5ZM683.76,31.09l-13.01,1.93l4.03,-6.35l1.82,-0.56l1.73,0.34l5.99,2.98l-0.56,1.66ZM670.85,27.93l-5.08,0.64l-6.86,-1.57l-3.99,-2.05l-2.1,-4.16l-2.6,-0.87l5.72,-3.5l5.2,-1.28l4.69,2.85l5.59,5.4l-0.56,4.53ZM564.15,68.94l-0.64,0.17l-7.85,-0.57l-0.86,-2.04l-4.28,-1.17l-0.28,-1.94l2.27,-0.89l0.25,-0.39l-0.08,-2.38l4.81,-3.97l-0.15,-0.7l-1.47,-0.38l5.3,-3.81l0.15,-0.44l-0.58,-1.94l5.28,-2.51l8.21,-3.27l8.28,-0.96l4.35,-1.94l4.6,-0.64l1.36,1.61l-1.34,1.28l-16.43,4.94l-7.97,4.88l-7.74,9.63l0.66,4.14l4.16,3.27ZM548.81,18.48l-5.5,1.18l-0.58,1.02l-2.59,0.84l-2.13,-1.07l1.12,-1.42l-0.3,-0.65l-2.33,-0.07l1.68,-0.36l3.47,-0.06l0.42,1.29l0.66,0.16l1.38,-1.34l2.15,-0.88l2.94,1.01l-0.39,0.36ZM477.37,133.15l-4.08,0.05l-2.56,-0.32l0.33,-0.87l3.17,-1.03l3.24,0.96l-0.09,1.23Z"
                                                            data-code="RU" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M497.0,288.25l0.71,1.01l-0.11,1.09l-1.63,0.03l-1.04,1.39l-0.83,-0.11l0.51,-1.2l0.08,-1.34l0.42,-0.41l0.7,0.14l1.19,-0.61Z"
                                                            data-code="RW" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M469.4,163.99l0.42,-0.5l-0.01,-0.52l-1.15,-1.63l1.43,-0.62l1.33,0.12l1.17,1.06l0.46,1.13l1.34,0.64l0.35,1.35l1.46,0.9l0.76,-0.29l0.2,0.69l-0.48,0.78l0.22,1.12l1.05,1.22l-0.77,0.8l-0.37,1.52l-1.21,0.08l0.24,-0.64l-0.39,-0.54l-2.08,-1.64l-0.9,0.05l-0.48,0.94l-2.12,-1.37l0.53,-1.6l-1.11,-1.37l0.51,-1.1l-0.41,-0.57Z"
                                                            data-code="RS" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M486.93,129.3l0.17,1.12l-1.81,0.98l-0.72,2.02l-2.47,1.18l-2.1,-0.02l-0.73,-1.05l-1.06,-0.3l-0.09,-1.87l-3.56,-1.13l-0.43,-2.36l2.48,-0.94l4.12,0.22l2.25,-0.31l0.52,0.69l1.24,0.21l2.19,1.56Z"
                                                            data-code="LT" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M436.08,149.45l-0.48,-0.07l0.3,-1.28l0.27,0.4l-0.09,0.96Z"
                                                            data-code="LU" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M399.36,265.97l0.18,1.54l-0.48,0.99l0.08,0.47l2.47,1.8l-0.33,2.8l-2.65,-1.13l-5.78,-4.61l0.58,-1.32l2.1,-2.33l0.86,-0.22l0.77,1.14l-0.14,0.85l0.59,0.87l1.0,0.14l0.76,-0.99Z"
                                                            data-code="LR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M487.53,154.23l0.6,0.24l2.87,3.98l-0.17,2.69l0.45,1.42l1.32,0.81l1.35,-0.42l0.76,0.36l0.02,0.31l-0.83,0.45l-0.59,-0.22l-0.54,0.3l-0.62,3.3l-1.0,-0.22l-2.07,-1.13l-2.95,0.71l-1.25,0.76l-3.51,-0.15l-1.89,-0.47l-0.87,0.16l-0.82,-1.3l0.29,-0.26l-0.06,-0.64l-1.09,-0.34l-0.56,0.5l-1.05,-0.64l-0.39,-1.39l-1.36,-0.65l-0.35,-1.0l-0.83,-0.75l1.54,-0.54l2.66,-4.21l2.4,-1.24l2.96,0.34l1.48,0.73l0.79,-0.45l1.78,-0.3l0.75,-0.74l0.79,0.0Z"
                                                            data-code="RO" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M386.23,253.6l-0.29,0.84l0.15,0.6l-2.21,0.59l-0.86,0.96l-1.04,-0.83l-1.09,-0.23l-0.54,-1.06l-0.66,-0.49l2.41,-0.48l4.13,0.1Z"
                                                            data-code="GW" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M195.08,249.77l-2.48,-0.37l-1.03,-0.45l-1.14,-0.89l0.3,-0.99l-0.24,-0.68l0.96,-1.66l2.98,-0.01l0.4,-0.37l-0.19,-1.28l-1.67,-1.4l0.51,-0.4l0.0,-1.05l3.85,0.02l-0.21,4.53l0.4,0.43l1.46,0.38l-1.48,0.98l-0.35,0.7l0.12,0.57l-2.2,1.96Z"
                                                            data-code="GT" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M487.07,174.59l-0.59,1.43l-0.37,0.21l-2.84,-0.35l-3.03,0.77l-0.18,0.68l1.28,1.23l-0.61,0.23l-1.14,0.0l-1.2,-1.39l-0.63,0.03l-0.53,1.01l0.56,1.76l1.03,1.19l-0.56,0.38l-0.05,0.62l2.52,2.12l0.02,0.87l-1.78,-0.59l-0.48,0.56l0.5,1.0l-1.07,0.2l-0.3,0.53l0.75,2.01l-0.98,0.02l-1.84,-1.12l-1.37,-4.2l-2.21,-2.95l-0.11,-0.56l1.04,-1.28l0.2,-0.95l0.85,-0.66l0.03,-0.46l1.32,-0.21l1.01,-0.64l1.22,0.05l0.65,-0.56l2.26,-0.0l1.82,-0.75l1.85,1.0l2.28,-0.28l0.35,-0.39l0.01,-0.77l0.34,0.22ZM480.49,192.16l0.58,0.4l-0.68,-0.12l0.11,-0.28ZM482.52,192.82l2.51,0.06l0.24,0.32l-1.99,0.13l-0.77,-0.51Z"
                                                            data-code="GR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M448.79,279.62l0.02,2.22l-4.09,0.0l0.69,-2.27l3.38,0.05Z"
                                                            data-code="GQ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M277.42,270.07l-0.32,1.83l-1.32,0.57l-0.23,0.46l-0.28,2.0l1.11,1.82l0.83,0.19l0.32,1.25l1.13,1.62l-1.21,-0.19l-1.08,0.71l-1.77,0.5l-0.44,0.46l-0.86,-0.09l-1.32,-1.01l-0.77,-2.27l0.36,-1.9l0.68,-1.23l-0.57,-1.17l-0.74,-0.43l0.12,-1.16l-0.9,-0.69l-1.1,0.09l-1.31,-1.48l0.53,-0.72l-0.04,-0.84l1.99,-0.86l0.05,-0.59l-0.71,-0.78l0.14,-0.57l1.66,-1.24l1.36,0.77l1.41,1.49l0.06,1.15l0.37,0.38l0.8,0.05l2.06,1.86Z"
                                                            data-code="GY" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M521.71,168.93l5.29,0.89l4.07,2.01l1.41,-0.44l2.07,0.56l0.68,1.1l1.07,0.55l-0.12,0.59l0.98,1.29l-1.01,-0.13l-1.81,-0.83l-0.94,0.47l-3.23,0.43l-2.29,-1.39l-2.33,0.05l0.21,-0.97l-0.76,-2.26l-1.45,-1.12l-1.43,-0.39l-0.41,-0.42Z"
                                                            data-code="GE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M412.61,118.72l-2.19,3.22l-0.0,0.45l5.13,-0.3l-0.53,2.37l-2.2,3.12l0.29,0.63l2.37,0.21l2.33,4.3l1.76,0.69l2.2,5.12l2.94,0.77l-0.23,1.62l-1.15,0.88l-0.1,0.52l0.82,1.42l-1.86,1.43l-3.3,-0.02l-4.12,0.87l-1.04,-0.58l-0.47,0.06l-1.51,1.41l-2.12,-0.34l-1.86,1.18l-0.6,-0.29l3.19,-3.0l2.16,-0.69l0.28,-0.41l-0.34,-0.36l-3.73,-0.53l-0.4,-0.76l2.2,-0.87l0.17,-0.61l-1.26,-1.67l0.36,-1.7l3.38,0.28l0.43,-0.33l0.37,-1.99l-1.79,-2.49l-3.11,-0.72l-0.38,-0.59l0.79,-1.35l-0.04,-0.46l-0.82,-0.97l-0.61,0.01l-0.68,0.84l-0.1,-2.34l-1.23,-1.88l0.85,-3.47l1.77,-2.68l1.85,0.26l2.17,-0.22ZM406.26,132.86l-1.01,1.77l-1.57,-0.59l-1.16,0.01l0.37,-1.54l-0.39,-1.39l1.45,-0.1l2.3,1.84Z"
                                                            data-code="GB" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M453.24,279.52l-0.08,0.98l0.7,1.29l2.36,0.24l-0.98,2.63l1.18,1.79l0.25,1.78l-0.29,1.52l-0.6,0.93l-1.84,-0.09l-1.23,-1.11l-0.66,0.23l-0.15,0.84l-1.42,0.26l-1.02,0.7l-0.11,0.52l0.77,1.35l-1.34,0.97l-3.94,-4.3l-1.44,-2.45l0.06,-0.6l0.54,-0.81l1.05,-3.46l4.17,-0.07l0.4,-0.4l-0.02,-2.66l2.39,0.21l1.25,-0.27Z"
                                                            data-code="GA" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M391.8,254.11l0.47,0.8l1.11,-0.32l0.98,0.7l1.07,0.2l2.26,-1.22l0.64,0.44l1.13,1.56l-0.48,1.4l0.8,0.3l-0.08,0.48l0.46,0.68l-0.35,1.36l1.05,2.61l-1.0,0.69l0.03,1.41l-0.72,-0.06l-1.08,1.0l-0.24,-0.27l0.07,-1.11l-1.05,-1.54l-1.79,0.21l-0.35,-2.01l-1.6,-2.18l-2.0,-0.0l-1.31,0.54l-1.95,2.18l-1.86,-2.19l-1.2,-0.78l-0.3,-1.11l-0.8,-0.85l0.65,-0.72l0.81,-0.03l1.64,-0.8l0.23,-1.87l2.67,0.64l0.89,-0.3l1.21,0.15Z"
                                                            data-code="GN" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M379.31,251.39l0.1,-0.35l2.43,-0.07l0.74,-0.61l0.51,-0.03l0.77,0.49l-1.03,-0.3l-1.87,0.9l-1.65,-0.04ZM384.03,250.91l0.91,0.05l0.75,-0.24l-0.59,0.31l-1.08,-0.13Z"
                                                            data-code="GM" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M353.02,1.2l14.69,4.67l-3.68,1.89l-22.97,0.86l-0.36,0.27l0.12,0.43l1.55,1.18l8.79,-0.66l7.48,2.07l4.86,-1.77l1.66,1.73l-2.53,3.19l-0.01,0.48l0.46,0.15l6.35,-2.2l12.06,-2.31l7.24,1.13l1.09,1.99l-9.79,4.01l-1.44,1.32l-7.87,0.98l-0.35,0.41l0.38,0.38l5.07,0.24l-2.53,3.58l-2.07,3.81l0.08,6.05l2.57,3.11l-3.22,0.2l-4.12,1.66l-0.05,0.72l4.45,2.65l0.51,3.75l-2.3,0.4l-0.25,0.64l2.79,3.69l-4.82,0.31l-0.36,0.29l0.16,0.44l2.62,1.8l-0.59,1.22l-3.3,0.7l-3.45,0.01l-0.29,0.68l3.03,3.12l0.02,1.34l-4.4,-1.73l-1.72,1.35l0.15,0.66l3.31,1.15l3.13,2.71l0.81,3.16l-3.85,0.75l-4.89,-4.26l-0.47,-0.03l-0.17,0.44l0.79,2.86l-2.71,2.21l-0.13,0.44l0.37,0.27l8.73,0.34l-12.32,6.64l-7.24,1.48l-2.94,0.08l-2.69,1.75l-3.43,4.41l-5.24,2.84l-1.73,0.18l-7.12,2.1l-2.15,2.52l-0.13,2.99l-1.19,2.45l-4.01,3.09l-0.14,0.44l0.97,2.9l-2.28,6.48l-3.1,0.2l-3.83,-3.07l-4.86,-0.02l-2.25,-1.93l-1.7,-3.79l-4.3,-4.84l-1.21,-2.49l-0.44,-3.8l-3.32,-3.63l0.84,-2.86l-1.56,-1.7l2.28,-4.6l3.83,-1.74l1.03,-1.96l0.52,-3.47l-0.59,-0.41l-4.17,2.21l-2.07,0.58l-2.72,-1.28l-0.15,-2.71l0.85,-2.09l2.01,-0.06l5.06,1.2l0.46,-0.23l-0.14,-0.49l-6.54,-4.47l-2.67,0.55l-1.58,-0.86l2.56,-4.01l-0.03,-0.48l-1.5,-1.74l-4.98,-8.5l-3.13,-1.96l0.03,-1.88l-0.24,-0.37l-6.85,-3.02l-5.36,-0.38l-12.7,0.58l-2.78,-1.57l-3.66,-2.77l5.73,-1.45l5.0,-0.28l0.38,-0.38l-0.35,-0.41l-10.67,-1.38l-5.3,-2.06l0.25,-1.54l18.41,-5.26l1.22,-2.27l-0.25,-0.55l-6.14,-1.86l1.68,-1.77l8.55,-4.03l3.59,-0.63l0.3,-0.54l-0.88,-2.27l5.47,-1.47l7.65,-0.95l7.55,-0.05l3.04,1.85l6.48,-3.27l5.81,2.22l3.56,0.5l5.16,1.94l0.5,-0.21l-0.17,-0.52l-5.71,-3.13l0.28,-2.13l8.12,-3.6l8.7,0.28l3.35,-2.34l8.71,-0.6l19.93,0.8Z"
                                                            data-code="GL" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M540.81,207.91l0.37,0.86l-0.17,0.76l0.6,1.53l-0.95,0.04l-0.82,-1.28l-1.57,-0.18l1.31,-1.88l1.22,0.17Z"
                                                            data-code="KW" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M420.53,257.51l-0.01,0.72l0.96,1.2l0.24,3.73l0.59,0.95l-0.51,2.1l0.19,1.41l1.02,2.21l-6.97,2.84l-1.8,-0.57l0.04,-0.89l-1.02,-2.04l0.61,-2.65l1.07,-2.32l-0.96,-6.47l5.01,0.07l0.94,-0.39l0.61,0.11Z"
                                                            data-code="GH" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M568.09,230.93l-0.91,1.67l-1.22,0.04l-0.6,0.76l-0.41,1.51l0.27,1.58l-1.16,0.05l-1.56,0.97l-0.76,1.74l-1.62,0.05l-0.98,0.65l-0.17,1.15l-0.89,0.52l-1.49,-0.18l-2.4,0.94l-2.47,-5.4l7.35,-2.71l1.67,-5.23l-1.12,-2.09l0.05,-0.83l0.67,-1.0l0.07,-1.05l0.9,-0.42l-0.05,-2.07l0.7,-0.01l1.0,1.62l1.51,1.08l3.3,0.84l1.73,2.29l0.81,0.37l-1.23,2.35l-0.99,0.79Z"
                                                            data-code="OM" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M531.15,258.94l1.51,0.12l5.13,-0.95l5.3,-1.48l-0.01,4.4l-2.67,3.39l-1.85,0.01l-8.04,-2.94l-2.55,-3.17l1.12,-1.71l2.04,2.34Z"
                                                            data-code="_2" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M472.77,172.64l-1.08,-1.29l0.96,-0.77l0.29,-0.83l1.98,1.64l-0.36,0.67l-1.79,0.58Z"
                                                            data-code="_1" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M504.91,192.87l0.34,0.01l0.27,-0.07l-0.29,0.26l-0.31,-0.2Z"
                                                            data-code="_0" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M518.64,201.38l-5.14,1.56l-0.19,0.65l2.16,2.39l-0.89,1.14l-1.71,0.34l-1.71,1.8l-2.34,-0.37l1.21,-4.32l0.56,-4.07l2.8,0.94l4.46,-2.71l0.79,2.66Z"
                                                            data-code="JO" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M455.59,162.84l1.09,0.07l-0.82,0.94l-0.27,-1.01ZM456.96,162.92l0.62,-0.41l1.73,0.45l0.42,-0.4l-0.01,-0.59l0.86,-0.52l0.2,-1.05l1.63,-0.68l2.57,1.68l2.07,0.6l0.87,-0.31l1.05,1.57l-0.52,0.63l-1.05,-0.56l-1.68,0.04l-2.1,-0.5l-1.29,0.06l-0.57,0.49l-0.59,-0.47l-0.62,0.16l-0.46,1.7l1.79,2.42l2.79,2.75l-1.18,-0.87l-2.21,-0.87l-1.67,-1.78l0.13,-0.63l-1.05,-1.19l-0.32,-1.27l-1.42,-0.43Z"
                                                            data-code="HR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M237.05,238.38l-1.16,0.43l-0.91,-0.55l0.05,-0.2l2.02,0.31ZM237.53,238.43l1.06,0.12l-0.05,0.01l-1.01,-0.12ZM239.25,238.45l0.79,-0.51l0.06,-0.62l-1.02,-1.0l0.02,-0.82l-0.3,-0.4l-0.93,-0.32l3.16,0.45l0.02,1.84l-0.48,0.34l-0.08,0.58l0.54,0.72l-1.78,-0.26Z"
                                                            data-code="HT" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M462.08,157.89l0.65,-1.59l-0.09,-0.44l0.64,-0.0l0.39,-0.34l0.1,-0.69l1.75,0.87l2.32,-0.37l0.43,-0.66l3.49,-0.78l0.69,-0.78l0.57,-0.14l2.57,0.93l0.67,-0.23l1.03,0.65l0.08,0.37l-1.42,0.71l-2.59,4.14l-1.8,0.53l-1.68,-0.1l-2.74,1.23l-1.85,-0.54l-2.54,-1.66l-0.66,-1.1Z"
                                                            data-code="HU" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M199.6,249.52l-1.7,-1.21l0.06,-0.94l3.04,-2.14l2.37,0.28l1.27,-0.09l1.1,-0.52l1.3,0.28l1.14,-0.25l1.38,0.37l2.23,1.37l-2.36,0.93l-1.23,-0.39l-0.88,1.3l-1.28,0.99l-0.98,-0.22l-0.42,0.52l-0.96,0.05l-0.36,0.41l0.04,0.88l-0.52,0.6l-0.3,0.04l-0.3,-0.55l-0.66,-0.31l0.11,-0.67l-0.48,-0.65l-0.87,-0.26l-0.73,0.2Z"
                                                            data-code="HN" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M256.17,238.73l-0.26,0.27l-2.83,0.05l-0.07,-0.55l1.95,-0.1l1.22,0.33Z"
                                                            data-code="PR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M509.21,203.07l0.1,-0.06l-0.02,0.03l-0.09,0.03ZM509.36,202.91l-0.02,-0.63l-0.33,-0.16l0.31,-1.09l0.24,0.1l-0.2,1.78Z"
                                                            data-code="PS" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M401.84,187.38l-0.64,0.47l-1.13,-0.35l-0.91,0.17l0.28,-1.78l-0.24,-1.78l-1.25,-0.56l-0.45,-0.84l0.17,-1.66l1.01,-1.18l0.69,-2.92l-0.04,-1.39l-0.59,-1.9l1.3,-0.85l0.84,1.35l3.1,-0.3l0.46,0.99l-1.05,0.94l-0.03,2.16l-0.41,0.57l-0.08,1.1l-0.79,0.18l-0.26,0.59l0.91,1.6l-0.63,1.75l0.76,1.09l-1.1,1.52l0.07,1.05Z"
                                                            data-code="PT" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M274.9,336.12l0.74,1.52l-0.16,3.45l0.32,0.41l2.64,0.5l1.11,-0.47l1.4,0.59l0.36,0.6l0.53,3.42l1.27,0.4l0.98,-0.38l0.51,0.27l-0.0,1.18l-1.21,5.32l-2.09,1.9l-1.8,0.4l-4.71,-0.98l2.2,-3.63l-0.32,-1.5l-2.78,-1.28l-3.03,-1.94l-2.07,-0.44l-4.34,-4.06l0.91,-2.9l0.08,-1.42l1.07,-2.04l4.13,-0.72l2.18,0.03l2.05,1.17l0.03,0.59Z"
                                                            data-code="PY" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M213.8,263.68l0.26,-1.52l-0.36,-0.26l-0.01,-0.49l0.44,-0.1l0.93,1.4l1.26,0.03l0.77,0.49l1.38,-0.23l2.51,-1.11l0.86,-0.72l3.45,0.85l1.4,1.18l0.41,1.74l-0.21,0.34l-0.53,-0.12l-0.47,0.29l-0.16,0.6l-0.68,-1.28l0.45,-0.49l-0.19,-0.66l-0.47,-0.13l-0.54,-0.84l-1.5,-0.75l-1.1,0.16l-0.75,0.99l-1.62,0.84l-0.18,0.96l0.85,0.97l-0.58,0.45l-0.69,0.08l-0.34,-1.18l-1.27,0.03l-0.71,-1.05l-2.59,-0.46Z"
                                                            data-code="PA" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M808.58,298.86l2.54,2.56l-0.13,0.26l-0.33,0.12l-0.87,-0.78l-1.22,-2.16ZM801.41,293.04l0.5,0.29l0.26,0.27l-0.49,-0.35l-0.27,-0.21ZM803.17,294.58l0.59,0.5l0.08,1.06l-0.29,-0.91l-0.38,-0.65ZM796.68,298.41l0.52,0.75l1.43,-0.19l2.27,-1.81l-0.01,-1.43l1.12,0.16l-0.04,1.1l-0.7,1.28l-1.12,0.18l-0.62,0.79l-2.46,1.11l-1.17,-0.0l-3.08,-1.25l3.41,0.0l0.45,-0.68ZM789.15,303.55l2.31,1.8l1.59,2.61l1.34,0.13l-0.06,0.66l0.31,0.43l1.06,0.24l0.06,0.65l2.25,1.05l-1.22,0.13l-0.72,-0.63l-4.56,-0.65l-3.22,-2.87l-1.49,-2.34l-3.27,-1.1l-2.38,0.72l-1.59,0.86l-0.2,0.42l0.27,1.55l-1.55,0.68l-1.36,-0.4l-2.21,-0.09l-0.08,-15.41l8.39,2.93l2.95,2.4l0.6,1.64l4.02,1.49l0.31,0.68l-1.76,0.21l-0.33,0.52l0.55,1.68Z"
                                                            data-code="PG" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M244.96,295.21l-1.26,-0.07l-0.57,0.42l-1.93,0.45l-2.98,1.75l-0.36,1.36l-0.58,0.8l0.12,1.37l-1.24,0.59l-0.22,1.22l-0.62,0.84l1.04,2.27l1.28,1.44l-0.41,0.84l0.32,0.57l1.48,0.13l1.16,1.37l2.21,0.07l1.63,-1.08l-0.13,3.02l0.3,0.4l1.14,0.29l1.31,-0.34l1.9,3.59l-0.48,0.85l-0.17,3.85l-0.94,1.59l0.35,0.75l-0.47,1.07l0.98,1.97l-2.1,3.82l-0.98,0.5l-2.17,-1.28l-0.39,-1.16l-4.95,-2.58l-4.46,-2.79l-1.84,-1.51l-0.91,-1.84l0.3,-0.96l-2.11,-3.33l-4.82,-9.68l-1.04,-1.2l-0.87,-1.94l-3.4,-2.48l0.58,-1.18l-1.13,-2.23l0.66,-1.49l1.45,-1.15l-0.6,0.98l0.07,0.92l0.47,0.36l1.74,0.03l0.97,1.17l0.54,0.07l1.42,-1.03l0.6,-1.84l1.42,-2.02l3.04,-1.04l2.73,-2.62l0.86,-1.74l-0.1,-1.87l1.44,1.02l0.9,1.25l1.06,0.59l1.7,2.73l1.86,0.31l1.45,-0.61l0.96,0.39l1.36,-0.19l1.45,0.89l-1.4,2.21l0.31,0.61l0.59,0.05l0.47,0.5Z"
                                                            data-code="PE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M615.09,192.34l-1.83,1.81l-2.6,0.39l-3.73,-0.68l-1.58,1.33l-0.09,0.42l1.77,4.39l1.7,1.23l-1.69,1.27l-0.12,2.14l-2.33,2.64l-1.6,2.8l-2.46,2.67l-3.03,-0.07l-2.76,2.83l0.05,0.6l1.5,1.11l0.26,1.9l1.44,1.5l0.37,1.68l-5.01,-0.01l-1.78,1.7l-1.42,-0.52l-0.76,-1.87l-2.27,-2.15l-11.61,0.86l0.71,-2.34l3.43,-1.32l0.25,-0.44l-0.21,-1.24l-1.2,-0.65l-0.28,-2.46l-2.29,-1.14l-1.28,-1.94l2.82,0.94l2.62,-0.38l1.42,0.33l0.76,-0.56l1.71,0.19l3.25,-1.14l0.27,-0.36l0.08,-2.19l1.18,-1.32l1.68,0.0l0.58,-0.82l1.6,-0.3l1.19,0.16l0.98,-0.78l0.02,-1.88l0.93,-1.47l1.48,-0.66l0.19,-0.55l-0.66,-1.25l2.04,-0.11l0.69,-1.01l-0.02,-1.16l1.11,-1.06l-0.17,-1.78l-0.49,-1.03l1.15,-0.98l5.42,-0.91l2.6,-0.82l1.6,1.16l0.97,2.34l3.45,0.97Z"
                                                            data-code="PK" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M737.01,263.84l0.39,2.97l-0.44,1.18l-0.55,-1.53l-0.67,-0.14l-1.17,1.28l0.65,2.09l-0.42,0.69l-2.48,-1.23l-0.57,-1.49l0.65,-1.03l-0.1,-0.54l-1.59,-1.19l-0.56,0.08l-0.65,0.87l-1.23,0.0l-1.58,0.97l0.83,-1.8l2.56,-1.42l0.65,0.84l0.45,0.13l1.9,-0.69l0.56,-1.11l1.5,-0.06l0.38,-0.43l-0.09,-1.19l1.21,0.71l0.36,2.02ZM733.59,256.58l0.05,0.75l0.08,0.26l-0.8,-0.42l-0.18,-0.71l0.85,0.12ZM734.08,256.1l-0.12,-1.12l-1.0,-1.27l1.36,0.03l0.53,0.73l0.51,2.04l-1.27,-0.4ZM733.76,257.68l0.38,0.98l-0.32,0.15l-0.07,-1.13ZM724.65,238.43l1.46,0.7l0.72,-0.31l-0.32,1.17l0.79,1.71l-0.57,1.84l-1.53,1.04l-0.39,2.25l0.56,2.04l1.63,0.57l1.16,-0.27l2.71,1.23l-0.19,1.08l0.76,0.84l-0.08,0.36l-1.4,-0.9l-0.88,-1.27l-0.66,0.0l-0.38,0.55l-1.6,-1.31l-2.15,0.36l-0.87,-0.39l0.07,-0.61l0.66,-0.55l-0.01,-0.62l-0.75,-0.59l-0.72,0.44l-0.74,-0.87l-0.39,-2.49l0.32,0.27l0.66,-0.28l0.26,-3.97l0.7,-2.02l1.14,0.0ZM731.03,258.87l-0.88,0.85l-1.19,1.94l-1.05,-1.19l0.93,-1.1l0.32,-1.47l0.52,-0.06l-0.27,1.15l0.22,0.45l0.49,-0.12l1.0,-1.32l-0.08,0.85ZM726.83,255.78l0.83,0.38l1.17,-0.0l-0.02,0.48l-2.0,1.4l0.03,-2.26ZM724.81,252.09l-0.38,1.27l-1.42,-1.95l1.2,0.05l0.6,0.63ZM716.55,261.82l1.1,-0.95l0.03,-0.03l-0.28,0.36l-0.85,0.61ZM719.22,259.06l0.04,-0.06l0.8,-1.53l0.16,0.75l-1.0,0.84Z"
                                                            data-code="PH" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M468.44,149.42l-1.11,-1.54l-1.86,-0.33l-0.48,-1.05l-1.72,-0.37l-0.65,0.69l-0.72,-0.36l0.11,-0.61l-0.33,-0.46l-1.75,-0.27l-1.04,-0.93l-0.94,-1.94l0.16,-1.22l-0.62,-1.8l-0.78,-1.07l0.57,-1.04l-0.48,-1.43l1.41,-0.83l6.91,-2.71l2.14,0.5l0.52,0.91l5.51,0.44l4.55,-0.05l1.07,0.31l0.48,0.84l0.15,1.58l0.65,1.2l-0.01,0.99l-1.27,0.58l-0.19,0.54l0.73,1.48l0.08,1.55l1.2,2.76l-0.17,0.58l-1.23,0.44l-2.27,2.72l0.18,0.95l-1.97,-1.03l-1.98,0.4l-1.36,-0.28l-1.24,0.58l-1.07,-0.97l-1.16,0.24Z"
                                                            data-code="PL" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M481.47,313.3l0.39,0.31l2.52,0.14l0.99,1.17l2.01,0.35l1.4,-0.64l0.69,1.17l1.78,0.33l1.84,2.35l2.23,0.18l0.4,-0.43l-0.21,-2.74l-0.62,-0.3l-0.48,0.32l-1.98,-1.17l0.72,-5.29l-0.51,-1.18l0.57,-1.3l3.68,-0.62l0.26,0.63l1.21,0.63l0.9,-0.22l2.16,0.67l1.33,0.71l1.07,1.02l0.56,1.87l-0.88,2.7l0.43,2.09l-0.73,0.87l-0.76,2.37l0.59,0.68l-6.6,1.83l-0.29,0.44l0.19,1.45l-1.68,0.35l-1.43,1.02l-0.38,0.87l-0.87,0.26l-3.48,3.69l-4.16,-0.53l-1.52,-1.0l-1.77,-0.13l-1.83,0.52l-3.04,-3.4l0.11,-7.59l4.82,0.03l0.39,-0.49l-0.18,-0.76l0.33,-0.83l-0.4,-1.36l0.24,-1.05Z"
                                                            data-code="ZM" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M384.42,230.28l0.25,-0.79l1.06,-1.29l0.8,-3.51l3.38,-2.78l0.7,-1.81l0.06,4.84l-1.98,0.2l-0.94,1.59l0.39,3.56l-3.7,-0.01ZM392.01,218.1l0.7,-1.8l1.77,-0.24l2.09,0.34l0.95,-0.62l1.28,-0.07l-0.0,2.51l-6.79,-0.12Z"
                                                            data-code="EH" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M485.71,115.04l2.64,0.6l2.56,0.11l-1.6,1.91l0.61,3.54l-0.81,0.87l-1.78,-0.01l-3.22,-1.76l-1.8,0.45l0.21,-1.53l-0.58,-0.41l-0.69,0.34l-1.26,-1.03l-0.17,-1.63l2.83,-0.92l3.05,-0.52Z"
                                                            data-code="EE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M492.06,205.03l1.46,0.42l2.95,-1.64l2.04,-0.21l1.53,0.3l0.59,1.19l0.69,0.04l0.41,-0.64l1.81,0.58l1.95,0.16l1.04,-0.51l1.42,4.08l-2.03,4.54l-1.66,-1.77l-1.76,-3.85l-0.64,-0.12l-0.36,0.67l1.04,2.88l3.44,6.95l1.78,3.04l2.03,2.65l-0.36,0.53l0.23,2.01l2.7,2.19l-28.41,0.0l0.0,-18.96l-0.73,-2.2l0.59,-1.56l-0.32,-1.26l0.68,-0.99l3.06,-0.04l4.82,1.52Z"
                                                            data-code="EG" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M467.14,373.21l-0.13,-1.96l-0.68,-1.56l0.7,-0.68l-0.13,-2.33l-4.56,-8.19l0.77,-0.86l0.6,0.45l0.69,1.31l2.83,0.72l1.5,-0.26l2.24,-1.39l0.19,-9.55l1.35,2.3l-0.21,1.5l0.61,1.2l0.4,0.19l1.79,-0.27l2.6,-2.07l0.69,-1.32l0.96,-0.48l2.19,1.04l2.04,0.13l1.77,-0.65l0.85,-2.12l1.38,-0.33l1.59,-2.76l2.15,-1.89l3.41,-1.87l2.0,0.45l1.02,-0.28l0.99,0.2l1.75,5.29l-0.38,3.25l-0.81,-0.23l-1.0,0.46l-0.87,1.68l-0.05,1.16l1.97,1.84l1.47,-0.29l0.69,-1.18l1.09,0.01l-0.76,3.69l-0.58,1.09l-2.2,1.79l-3.17,4.76l-2.8,2.83l-3.57,2.88l-2.53,1.05l-1.22,0.14l-0.51,0.7l-1.18,-0.32l-1.39,0.5l-2.59,-0.52l-1.61,0.33l-1.18,-0.11l-2.55,1.1l-2.1,0.44l-1.6,1.07l-0.85,0.05l-0.93,-0.89l-0.93,-0.15l-0.97,-1.13l-0.25,0.05ZM491.45,364.19l0.62,-0.93l1.48,-0.59l1.18,-2.19l-0.07,-0.49l-1.99,-1.69l-1.66,0.56l-1.43,1.14l-1.34,1.73l0.02,0.51l1.88,2.11l1.31,-0.16Z"
                                                            data-code="ZA" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M231.86,285.53l0.29,1.59l-0.69,1.45l-2.61,2.51l-3.13,1.11l-1.53,2.18l-0.49,1.68l-1.0,0.73l-1.02,-1.11l-1.78,-0.16l0.67,-1.15l-0.24,-0.86l1.25,-2.13l-0.54,-1.09l-0.67,-0.08l-0.72,0.87l-0.87,-0.64l0.35,-0.69l-0.36,-1.96l0.81,-0.51l0.45,-1.51l0.92,-1.57l-0.07,-0.97l2.65,-1.33l2.75,1.35l0.77,1.05l2.12,0.35l0.76,-0.32l1.96,1.21Z"
                                                            data-code="EC" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M470.32,171.8l0.74,0.03l0.92,0.89l-0.17,1.95l0.36,1.28l1.01,0.82l-1.82,2.83l-0.19,-0.61l-1.25,-0.89l-0.18,-1.2l0.53,-2.82l-0.54,-1.47l0.6,-0.83Z"
                                                            data-code="AL" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M461.55,300.03l1.26,3.15l1.94,2.36l2.47,-0.53l1.25,0.32l0.44,-0.18l0.93,-1.92l1.31,-0.08l0.41,-0.44l0.47,-0.0l-0.1,0.41l0.39,0.49l2.65,-0.02l0.03,1.19l0.48,1.01l-0.34,1.52l0.18,1.55l0.83,1.04l-0.13,2.85l0.54,0.39l3.96,-0.41l-0.1,1.79l0.39,1.05l-0.24,1.43l-4.7,-0.03l-0.4,0.39l-0.12,8.13l2.92,3.49l-3.83,0.88l-5.89,-0.36l-1.88,-1.24l-10.47,0.22l-1.3,-1.01l-1.85,-0.16l-2.4,0.77l-0.15,-1.06l0.33,-2.16l1.0,-3.45l1.35,-3.2l2.24,-2.8l0.33,-2.06l-0.13,-1.53l-0.8,-1.08l-1.21,-2.87l0.87,-1.62l-1.27,-4.12l-1.17,-1.53l2.47,-0.63l7.03,0.03ZM451.71,298.87l-0.47,-1.25l1.25,-1.11l0.32,0.3l-0.99,1.03l-0.12,1.03Z"
                                                            data-code="AO" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M552.8,172.89l0.46,-1.27l-0.48,-1.05l-2.96,-1.19l-1.06,-2.58l-1.37,-0.87l-0.03,-0.3l1.95,0.23l0.45,-0.38l0.08,-1.96l1.75,-0.41l2.1,0.45l0.48,-0.33l0.45,-3.04l-0.45,-2.09l-0.41,-0.31l-2.42,0.15l-2.36,-0.73l-2.87,1.37l-2.17,0.61l-0.85,-0.34l0.13,-1.61l-1.6,-2.12l-2.02,-0.08l-1.78,-1.82l1.29,-2.18l-0.57,-0.95l1.62,-2.91l2.21,1.63l0.63,-0.27l0.29,-2.22l4.92,-3.43l3.71,-0.08l8.4,3.6l2.92,-1.36l3.77,-0.06l3.11,1.66l0.51,-0.11l0.6,-0.81l3.31,0.13l0.39,-0.25l0.63,-1.57l-0.17,-0.5l-3.5,-1.98l1.87,-1.27l-0.13,-1.03l1.98,-0.72l0.18,-0.62l-1.59,-2.06l0.81,-0.82l9.23,-1.18l1.33,-0.88l6.18,-1.26l2.26,-1.42l4.08,0.68l0.73,3.33l0.51,0.3l2.48,-0.8l2.79,1.02l-0.17,1.56l0.43,0.44l2.55,-0.24l4.89,-2.53l0.03,0.32l3.15,2.61l5.56,8.47l0.65,0.02l1.12,-1.46l3.15,1.74l3.76,-0.78l1.15,0.49l1.14,1.8l1.84,0.76l0.99,1.29l3.35,-0.25l1.02,1.52l-1.6,1.81l-1.93,0.28l-0.34,0.38l-0.11,3.05l-1.13,1.16l-4.75,-1.0l-0.46,0.27l-1.76,5.47l-1.1,0.59l-4.91,1.23l-0.27,0.54l2.1,4.97l-1.37,0.63l-0.23,0.41l0.13,1.13l-0.88,-0.25l-1.42,-1.13l-7.89,-0.4l-0.92,0.31l-3.73,-1.22l-1.42,0.63l-0.53,1.66l-3.72,-0.94l-1.85,0.43l-0.76,1.4l-4.65,2.62l-1.13,2.08l-0.44,0.01l-0.92,-1.4l-2.87,-0.09l-0.45,-2.14l-0.38,-0.32l-0.8,-0.01l0.0,-2.96l-3.0,-2.22l-7.31,0.58l-2.35,-2.68l-6.71,-3.69l-6.45,1.83l-0.29,0.39l0.1,10.85l-0.7,0.08l-1.62,-2.17l-1.83,-0.96l-3.11,0.59l-0.64,0.51Z"
                                                            data-code="KZ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M516.04,247.79l1.1,0.84l1.63,-0.45l0.68,0.47l1.63,0.03l2.01,0.94l1.73,1.66l1.64,2.07l-1.52,2.04l0.16,1.72l0.39,0.38l2.05,0.0l-0.36,1.03l2.86,3.58l8.32,3.08l1.31,0.02l-6.32,6.75l-3.1,0.11l-2.36,1.77l-1.47,0.04l-0.86,0.79l-1.38,-0.0l-1.32,-0.81l-2.29,1.05l-0.76,0.98l-3.29,-0.41l-3.07,-2.07l-1.8,-0.07l-0.62,-0.6l0.0,-1.24l-0.28,-0.38l-1.15,-0.37l-1.4,-2.59l-1.19,-0.68l-0.47,-1.0l-1.27,-1.23l-1.16,-0.22l0.43,-0.72l1.45,-0.28l0.41,-0.95l-0.03,-2.21l0.68,-2.44l1.05,-0.63l1.43,-3.06l1.57,-1.37l1.02,-2.51l0.35,-1.88l2.52,0.46l0.44,-0.24l0.58,-1.43Z"
                                                            data-code="ET" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M498.91,341.09l-1.11,-0.22l-0.92,0.28l-2.09,-0.44l-1.5,-1.11l-1.89,-0.43l-0.62,-1.4l-0.01,-0.84l-0.3,-0.38l-0.97,-0.25l-2.71,-2.74l-1.92,-3.32l3.83,0.45l3.73,-3.82l1.08,-0.44l0.26,-0.77l1.25,-0.9l1.41,-0.26l0.5,0.89l1.99,-0.05l1.72,1.17l1.11,0.17l1.05,0.66l0.01,2.99l-0.59,3.76l0.38,0.86l-0.23,1.23l-0.39,0.35l-0.63,1.81l-2.43,2.75Z"
                                                            data-code="ZW" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M416.0,169.21l1.07,1.17l4.61,1.38l1.06,-0.57l2.6,1.26l2.71,-0.3l0.09,1.12l-2.14,1.8l-3.11,0.61l-0.31,0.31l-0.2,0.89l-1.54,1.69l-0.97,2.4l0.84,1.74l-1.32,1.27l-0.48,1.68l-1.88,0.65l-1.66,2.07l-5.36,-0.01l-1.79,1.08l-0.89,0.98l-0.88,-0.17l-0.79,-0.82l-0.68,-1.59l-2.37,-0.63l-0.11,-0.5l1.21,-1.82l-0.77,-1.13l0.61,-1.68l-0.76,-1.62l0.87,-0.49l0.09,-1.25l0.42,-0.6l0.03,-2.11l0.99,-0.69l0.13,-0.5l-1.03,-1.73l-1.46,-0.11l-0.61,0.38l-1.06,0.0l-0.52,-1.23l-0.53,-0.21l-1.32,0.67l-0.01,-1.49l-0.75,-0.96l3.03,-1.88l2.99,0.53l3.32,-0.02l2.63,0.51l6.01,-0.06Z"
                                                            data-code="ES" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M520.38,246.23l3.42,2.43l3.5,3.77l0.84,0.54l-0.95,-0.01l-3.51,-3.89l-2.33,-1.15l-1.73,-0.07l-0.91,-0.51l-1.26,0.51l-1.34,-1.02l-0.61,0.17l-0.66,1.61l-2.35,-0.43l-0.17,-0.67l1.29,-5.29l0.61,-0.61l1.95,-0.53l0.87,-1.01l1.17,2.41l0.68,2.33l1.49,1.43Z"
                                                            data-code="ER" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M468.91,172.53l-1.22,-1.02l0.47,-1.81l0.89,-0.72l2.26,1.51l-0.5,0.57l-0.75,-0.27l-1.14,1.73Z"
                                                            data-code="ME" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M488.41,153.73l1.4,-0.27l1.72,0.93l1.07,0.15l0.85,0.65l-0.14,0.84l0.96,0.85l1.12,2.47l-1.15,-0.07l-0.66,-0.41l-0.52,0.25l-0.09,0.86l-1.08,1.89l-0.27,-0.86l0.25,-1.34l-0.16,-1.6l-3.29,-4.34Z"
                                                            data-code="MD" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M545.91,319.14l0.4,3.03l0.62,1.21l-0.21,1.02l-0.57,-0.8l-0.69,-0.01l-0.47,0.76l0.41,2.12l-0.18,0.87l-0.73,0.78l-0.15,2.14l-4.71,15.2l-1.06,2.88l-3.92,1.64l-3.12,-1.49l-0.6,-1.21l-0.19,-2.4l-0.86,-2.05l-0.21,-1.77l0.38,-1.62l1.21,-0.75l0.01,-0.76l1.19,-2.04l0.23,-1.66l-1.06,-2.99l-0.19,-2.21l0.81,-1.33l0.32,-1.46l4.63,-1.22l3.44,-3.0l0.85,-1.4l-0.08,-0.7l0.78,-0.04l1.38,-1.77l0.13,-1.64l0.45,-0.61l1.16,1.69l0.59,1.6Z"
                                                            data-code="MG" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M378.78,230.02l0.06,-0.59l0.92,-0.73l0.82,-1.37l-0.09,-1.04l0.79,-1.7l1.31,-1.58l0.96,-0.59l0.66,-1.55l0.09,-1.47l0.81,-1.48l1.72,-1.07l1.55,-2.69l1.16,-0.96l2.44,-0.39l1.94,-1.82l1.31,-0.78l2.09,-2.28l-0.51,-3.65l1.24,-3.7l1.5,-1.75l4.46,-2.57l2.37,-4.47l1.44,0.01l1.68,1.21l2.32,-0.19l3.47,0.65l0.8,1.54l0.16,1.71l0.86,2.96l0.56,0.59l-0.26,0.61l-3.05,0.44l-1.26,1.05l-1.33,0.22l-0.33,0.37l-0.09,1.78l-2.68,1.0l-1.07,1.42l-4.47,1.13l-4.04,2.01l-0.54,4.64l-1.15,0.06l-0.92,0.61l-1.96,-0.35l-2.42,0.54l-0.74,1.9l-0.86,0.4l-1.14,3.26l-3.53,3.01l-0.8,3.55l-0.96,1.1l-0.29,0.82l-4.95,0.18Z"
                                                            data-code="MA" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M598.64,172.75l-1.63,1.52l0.06,0.64l1.85,1.12l1.97,-0.64l2.21,1.17l-2.52,1.68l-2.59,-0.22l-0.18,-0.41l0.46,-1.23l-0.45,-0.53l-3.35,0.69l-2.1,3.51l-1.87,-0.12l-1.03,1.51l0.22,0.55l1.64,0.62l0.46,1.83l-1.19,2.49l-2.66,-0.53l0.05,-1.36l-0.26,-0.39l-3.3,-1.23l-2.56,-1.4l-4.4,-3.34l-1.34,-3.14l-1.08,-0.6l-2.58,0.13l-0.69,-0.44l-0.47,-2.52l-3.37,-1.6l-0.43,0.05l-2.07,1.72l-2.1,1.01l-0.21,0.47l0.28,1.01l-1.91,0.03l-0.09,-10.5l5.99,-1.7l6.19,3.54l2.71,2.84l7.05,-0.67l2.71,2.01l-0.17,2.81l0.39,0.42l0.9,0.02l0.44,2.14l0.38,0.32l2.94,0.09l0.95,1.42l1.28,-0.24l1.05,-2.04l4.43,-2.5Z"
                                                            data-code="UZ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M673.9,230.21l-1.97,1.57l-0.57,0.96l-1.4,0.6l-1.36,1.05l-1.99,0.36l-1.08,2.66l-0.91,0.4l-0.19,0.55l1.21,2.27l2.52,3.43l-0.79,1.91l-0.74,0.41l-0.17,0.52l0.65,1.37l1.61,1.95l0.25,2.58l0.9,2.13l-1.92,3.57l0.68,-2.25l-0.81,-1.74l0.19,-2.65l-1.05,-1.53l-1.24,-6.17l-1.12,-2.26l-0.6,-0.13l-4.34,3.02l-2.39,-0.65l0.77,-2.84l-0.52,-2.61l-1.91,-2.96l0.25,-0.75l-0.29,-0.51l-1.33,-0.3l-1.61,-1.93l-0.1,-1.3l0.82,-0.24l0.04,-1.64l1.02,-0.52l0.21,-0.45l-0.23,-0.95l0.54,-0.96l0.08,-2.22l1.46,0.45l0.47,-0.2l1.12,-2.19l0.16,-1.35l1.33,-2.16l-0.0,-1.52l2.89,-1.66l1.63,0.44l0.5,-0.44l-0.17,-1.4l0.64,-0.36l0.08,-1.04l0.77,-0.11l0.71,1.35l1.06,0.69l-0.03,3.86l-2.38,2.37l-0.3,3.15l0.46,0.43l2.28,-0.38l0.51,2.08l1.47,0.67l-0.6,1.8l0.19,0.48l2.97,1.48l1.64,-0.55l0.02,0.32Z"
                                                            data-code="MM" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M392.61,254.08l-0.19,-2.37l-0.99,-0.87l-0.44,-1.3l-0.09,-1.28l0.81,-0.58l0.35,-1.24l2.37,0.65l1.31,-0.47l0.86,0.15l0.66,-0.56l9.83,-0.04l0.38,-0.28l0.56,-1.8l-0.44,-0.65l-2.35,-21.95l3.27,-0.04l16.7,11.38l0.74,1.31l2.5,1.09l0.02,1.38l0.44,0.39l2.34,-0.21l0.01,5.38l-1.28,1.61l-0.26,1.49l-5.31,0.57l-1.07,0.92l-2.9,0.1l-0.86,-0.48l-1.38,0.36l-2.4,1.08l-0.6,0.87l-1.85,1.09l-0.43,0.7l-0.79,0.39l-1.44,-0.21l-0.81,0.84l-0.34,1.64l-1.91,2.02l-0.06,1.03l-0.67,1.22l0.13,1.16l-0.97,0.39l-0.23,-0.64l-0.52,-0.24l-1.35,0.4l-0.34,0.55l-2.69,-0.28l-0.37,-0.35l-0.02,-0.9l-0.65,-0.35l0.45,-0.64l-0.03,-0.53l-2.12,-2.44l-0.76,-0.01l-2.0,1.16l-0.78,-0.15l-0.8,-0.67l-1.21,0.23Z"
                                                            data-code="ML" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M676.61,146.48l3.81,1.68l5.67,-1.0l2.37,0.41l2.34,1.5l1.79,1.75l2.29,-0.03l3.12,0.52l2.47,-0.81l3.41,-0.59l3.53,-2.21l1.25,0.29l1.53,1.13l2.27,-0.21l-2.66,5.01l0.64,1.68l0.47,0.21l1.32,-0.38l2.38,0.48l2.02,-1.11l1.76,0.89l2.06,2.02l-0.13,0.53l-1.72,-0.29l-3.77,0.46l-1.88,0.99l-1.76,1.99l-3.71,1.17l-2.45,1.6l-3.83,-0.87l-0.41,0.17l-1.31,1.99l1.04,2.24l-1.52,0.9l-1.74,1.57l-2.79,1.02l-3.78,0.13l-4.05,1.05l-2.77,1.52l-1.16,-0.85l-2.94,0.0l-3.62,-1.79l-2.58,-0.49l-3.4,0.41l-5.12,-0.67l-2.63,0.06l-1.31,-1.6l-1.4,-3.0l-1.48,-0.33l-3.13,-1.94l-6.16,-0.93l-0.71,-1.06l0.86,-3.82l-1.93,-2.71l-3.5,-1.18l-1.95,-1.58l-0.5,-1.72l2.34,-0.52l4.75,-2.8l3.62,-1.47l2.18,0.97l2.46,0.05l1.81,1.53l2.46,0.12l3.95,0.71l2.43,-2.28l0.08,-0.48l-0.9,-1.72l2.24,-2.98l2.62,1.27l4.94,1.17l0.43,2.24Z"
                                                            data-code="MN" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M472.8,173.98l0.49,-0.71l3.57,-0.71l1.0,0.77l0.13,1.45l-0.65,0.53l-1.15,-0.05l-1.12,0.67l-1.39,0.22l-0.79,-0.55l-0.29,-1.03l0.19,-0.6Z"
                                                            data-code="MK" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M505.5,309.31l0.85,1.95l0.15,2.86l-0.69,1.65l0.71,1.8l0.06,1.28l0.49,0.64l0.07,1.06l0.4,0.55l0.8,-0.23l0.55,0.61l0.69,-0.21l0.34,0.6l0.19,2.94l-1.04,0.62l-0.54,1.25l-1.11,-1.08l-0.16,-1.56l0.51,-1.31l-0.32,-1.3l-0.99,-0.65l-0.82,0.12l-2.36,-1.64l0.63,-1.96l0.82,-1.18l-0.46,-2.01l0.9,-2.86l-0.94,-2.51l0.96,0.18l0.29,0.4Z"
                                                            data-code="MW" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M407.36,220.66l-2.58,0.03l-0.39,0.44l2.42,22.56l0.36,0.43l-0.39,1.24l-9.75,0.04l-0.56,0.53l-0.91,-0.11l-1.27,0.45l-1.61,-0.66l-0.97,0.03l-0.36,0.29l-0.38,1.35l-0.42,0.23l-2.93,-3.4l-2.96,-1.52l-1.62,-0.03l-1.27,0.54l-1.12,-0.2l-0.65,0.4l-0.08,-0.49l0.68,-1.29l0.31,-2.43l-0.57,-3.91l0.23,-1.21l-0.69,-1.5l-1.15,-1.02l0.25,-0.39l9.58,0.02l0.4,-0.45l-0.46,-3.68l0.47,-1.04l2.12,-0.21l0.36,-0.4l-0.08,-6.4l7.81,0.13l0.41,-0.4l0.01,-3.31l7.76,5.35Z"
                                                            data-code="MR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M498.55,276.32l0.7,-0.46l1.65,0.5l1.96,-0.57l1.7,0.01l1.45,-0.98l0.91,1.33l1.33,3.95l-2.57,4.03l-1.46,-0.4l-2.54,0.91l-1.37,1.61l-0.01,0.81l-2.42,-0.01l-2.26,1.01l-0.17,-1.59l0.58,-1.04l0.14,-1.94l1.37,-2.28l1.78,-1.58l-0.17,-0.65l-0.72,-0.24l0.13,-2.43Z"
                                                            data-code="UG" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M717.47,273.46l-1.39,0.65l-2.12,-0.41l-2.88,-0.0l-0.38,0.28l-0.84,2.75l-0.99,0.96l-1.21,3.29l-1.73,0.45l-2.45,-0.68l-1.39,0.31l-1.33,1.15l-1.59,-0.14l-1.41,0.44l-1.44,-1.19l-0.18,-0.73l1.34,0.53l1.93,-0.47l0.75,-2.22l4.02,-1.03l2.75,-3.21l0.82,0.94l0.64,-0.05l0.4,-0.65l0.96,0.06l0.42,-0.36l0.24,-2.68l1.81,-1.64l1.21,-1.86l0.63,-0.01l1.07,1.05l0.34,1.28l3.44,1.35l-0.06,0.35l-1.37,0.1l-0.35,0.54l0.32,0.88ZM673.68,269.59l0.17,1.09l0.47,0.33l1.65,-0.3l0.87,-0.94l1.61,1.52l0.98,1.56l-0.12,2.81l0.41,2.29l0.95,0.9l0.88,2.44l-1.27,0.12l-5.1,-3.67l-0.34,-1.29l-1.37,-1.59l-0.33,-1.97l-0.88,-1.4l0.25,-1.68l-0.46,-1.05l1.63,0.84Z"
                                                            data-code="MY" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M133.12,200.41l0.2,0.47l9.63,3.33l6.96,-0.02l0.4,-0.4l0.0,-0.74l3.77,0.0l3.55,2.93l1.39,2.83l1.52,1.04l2.08,0.82l0.47,-0.14l1.46,-2.0l1.73,-0.04l1.59,0.98l2.05,3.35l1.47,1.56l1.26,3.14l2.18,1.02l2.26,0.58l-1.18,3.72l-0.42,5.04l1.79,4.89l1.62,1.89l0.61,1.52l1.2,1.42l2.55,0.66l1.37,1.1l7.54,-1.89l1.86,-1.3l1.14,-4.3l4.1,-1.21l3.57,-0.11l0.32,0.3l-0.06,0.94l-1.26,1.45l-0.67,1.71l0.38,0.7l-0.72,2.27l-0.49,-0.3l-1.0,0.08l-1.0,1.39l-0.47,-0.11l-0.53,0.47l-4.26,-0.02l-0.4,0.4l-0.0,1.06l-1.1,0.26l0.1,0.44l1.82,1.44l0.56,0.91l-3.19,0.21l-1.21,2.09l0.24,0.72l-0.2,0.44l-2.24,-2.18l-1.45,-0.93l-2.22,-0.69l-1.52,0.22l-3.07,1.16l-10.55,-3.85l-2.86,-1.96l-3.78,-0.92l-1.08,-1.19l-2.62,-1.43l-1.18,-1.54l-0.38,-0.81l0.66,-0.63l-0.18,-0.53l0.52,-0.76l0.01,-0.91l-2.0,-3.82l-2.21,-2.63l-2.53,-2.09l-1.19,-1.62l-2.2,-1.17l-0.3,-0.43l0.34,-1.48l-0.21,-0.45l-1.23,-0.6l-1.36,-1.2l-0.59,-1.78l-1.54,-0.47l-2.44,-2.55l-0.16,-0.9l-1.33,-2.03l-0.84,-1.99l-0.16,-1.33l-1.81,-1.1l-0.97,0.05l-1.31,-0.7l-0.57,0.22l-0.4,1.12l0.72,3.77l3.51,3.89l0.28,0.78l0.53,0.26l0.41,1.43l1.33,1.73l1.58,1.41l0.8,2.39l1.43,2.41l0.13,1.32l0.37,0.36l1.04,0.08l1.67,2.28l-0.85,0.76l-0.66,-1.51l-1.68,-1.54l-2.91,-1.87l0.06,-1.82l-0.54,-1.68l-2.91,-2.03l-0.55,0.09l-1.95,-1.1l-0.88,-0.94l0.68,-0.08l0.93,-1.01l0.08,-1.78l-1.93,-1.94l-1.46,-0.77l-3.75,-7.56l4.88,-0.42Z"
                                                            data-code="MX" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M839.04,322.8l0.22,1.14l-0.44,0.03l-0.2,-1.45l0.42,0.27Z"
                                                            data-code="VU" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M444.48,172.62l-0.64,1.78l-0.58,-0.31l-0.49,-1.72l0.4,-0.89l1.0,-0.72l0.3,1.85ZM429.64,147.1l1.78,1.58l1.46,-0.13l2.1,1.42l1.35,0.27l1.23,0.83l3.04,0.5l-1.03,1.85l-0.3,2.12l-0.41,0.32l-0.95,-0.24l-0.5,0.43l0.06,0.61l-1.81,1.92l-0.04,1.42l0.55,0.38l0.88,-0.36l0.61,0.97l-0.03,1.0l0.57,0.91l-0.75,1.09l0.65,2.39l1.27,0.57l-0.18,0.82l-2.01,1.53l-4.77,-0.8l-3.82,1.0l-0.53,1.85l-2.49,0.34l-2.71,-1.31l-1.16,0.57l-4.31,-1.29l-0.72,-0.86l1.19,-1.78l0.39,-6.45l-2.58,-3.3l-1.9,-1.66l-3.72,-1.23l-0.19,-1.72l2.81,-0.61l4.12,0.81l0.47,-0.48l-0.6,-2.77l1.94,0.95l5.83,-2.54l0.92,-2.74l1.6,-0.49l0.24,0.78l1.36,0.33l1.05,1.19ZM289.01,278.39l-0.81,0.8l-0.78,0.12l-0.5,-0.66l-0.56,-0.1l-0.91,0.6l-0.46,-0.22l1.09,-2.96l-0.96,-1.77l-0.17,-1.49l1.07,-1.77l2.32,0.75l2.51,2.01l0.3,0.74l-2.14,3.96Z"
                                                            data-code="FR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M492.17,76.39l-0.23,3.5l3.52,2.63l-2.08,2.88l-0.02,0.44l2.8,4.56l-1.59,3.31l2.16,3.24l-0.94,2.39l0.14,0.47l3.44,2.51l-0.77,1.62l-7.52,6.95l-4.5,0.31l-4.38,1.37l-3.8,0.74l-1.44,-1.96l-2.17,-1.11l0.5,-3.66l-1.16,-3.33l1.09,-2.08l2.21,-2.42l5.67,-4.32l1.64,-0.83l0.21,-0.42l-0.46,-2.02l-3.38,-1.89l-0.75,-1.43l-0.22,-6.74l-6.79,-4.8l0.8,-0.62l2.54,2.12l3.46,-0.12l3.0,0.96l2.51,-2.11l1.17,-3.08l3.55,-1.38l2.76,1.53l-0.95,2.79Z"
                                                            data-code="FI" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M871.53,326.34l-2.8,1.05l-0.08,-0.23l2.97,-1.21l-0.1,0.39ZM867.58,329.25l0.43,0.37l-0.27,0.88l-1.24,0.28l-1.04,-0.24l-0.14,-0.66l0.63,-0.58l0.92,0.26l0.7,-0.31Z"
                                                            data-code="FJ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M274.36,425.85l1.44,1.08l-0.47,0.73l-3.0,0.89l-0.96,-1.0l-0.52,-0.05l-1.83,1.29l-0.73,-0.88l2.46,-1.64l1.93,0.76l1.67,-1.19Z"
                                                            data-code="FK" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M202.33,252.67l0.81,-0.18l1.03,-1.02l-0.04,-0.88l0.68,-0.0l0.63,-0.54l0.97,0.22l1.53,-1.26l0.58,-0.99l1.17,0.34l2.41,-0.94l0.13,1.32l-0.81,1.94l0.1,2.74l-0.36,0.37l-0.11,1.75l-0.47,0.81l0.18,1.14l-1.73,-0.85l-0.71,0.27l-1.47,-0.6l-0.52,0.16l-4.01,-3.81Z"
                                                            data-code="NI" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M430.31,143.39l0.6,-0.5l2.13,-4.8l3.2,-1.33l1.74,0.08l0.33,0.8l-0.59,2.92l-0.5,0.99l-1.26,0.0l-0.4,0.45l0.33,2.7l-2.2,-1.78l-2.62,0.58l-0.75,-0.11Z"
                                                            data-code="NL" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M491.44,67.41l6.8,2.89l-2.29,0.86l-0.15,0.65l2.33,2.38l-4.98,1.79l0.84,-2.45l-0.18,-0.48l-3.55,-1.8l-3.89,1.52l-1.42,3.38l-2.12,1.72l-2.64,-1.0l-3.11,0.21l-2.66,-2.22l-0.5,-0.01l-1.41,1.1l-1.44,0.17l-0.35,0.35l-0.32,2.47l-4.32,-0.64l-0.44,0.29l-0.58,2.11l-2.45,0.2l-4.15,7.68l-3.88,5.76l0.78,1.62l-0.64,1.16l-2.24,-0.06l-0.38,0.24l-1.66,3.89l0.15,5.17l1.57,2.04l-0.78,4.16l-2.02,2.48l-0.85,1.63l-1.3,-1.75l-0.58,-0.07l-4.87,4.19l-3.1,0.79l-3.16,-1.7l-0.85,-3.77l-0.77,-8.55l2.14,-2.31l6.55,-3.27l5.02,-4.17l10.63,-13.84l10.98,-8.7l5.35,-1.91l4.34,0.12l3.69,-3.64l4.49,0.19l4.37,-0.89ZM484.55,20.04l4.26,1.75l-3.1,2.55l-7.1,0.65l-7.08,-0.9l-0.37,-1.31l-0.37,-0.29l-3.44,-0.1l-2.08,-2.0l6.87,-1.44l3.9,1.31l2.39,-1.64l6.13,1.4ZM481.69,33.93l-4.45,1.74l-3.54,-0.99l1.12,-0.9l0.05,-0.58l-1.06,-1.22l4.22,-0.89l1.09,1.97l2.57,0.87ZM466.44,24.04l7.43,3.77l-5.41,1.86l-1.58,4.08l-2.26,1.2l-1.12,4.11l-2.61,0.18l-4.79,-2.86l1.84,-1.54l-0.1,-0.68l-3.69,-1.53l-4.77,-4.51l-1.73,-3.89l6.11,-1.82l1.54,1.92l3.57,-0.08l1.2,-1.96l3.32,-0.18l3.05,1.92Z"
                                                            data-code="NO" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M474.26,330.66l-0.97,0.04l-0.38,0.4l-0.07,8.9l-2.09,0.08l-0.39,0.4l-0.0,17.42l-1.98,1.23l-1.17,0.17l-2.44,-0.66l-0.48,-1.13l-0.99,-0.74l-0.54,0.05l-0.9,1.01l-1.53,-1.68l-0.93,-1.88l-1.99,-8.56l-0.06,-3.12l-0.33,-1.52l-2.3,-3.34l-1.91,-4.83l-1.96,-2.43l-0.12,-1.57l2.33,-0.79l1.43,0.07l1.81,1.13l10.23,-0.25l1.84,1.23l5.87,0.35ZM474.66,330.64l6.51,-1.6l1.9,0.39l-1.69,0.4l-1.31,0.83l-1.12,-0.94l-4.29,0.92Z"
                                                            data-code="NA" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M838.78,341.24l-0.33,0.22l-2.9,-1.75l-3.26,-3.37l1.65,0.83l4.85,4.07Z"
                                                            data-code="NC" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M454.75,226.53l1.33,1.37l0.48,0.07l1.27,-0.7l0.53,3.52l0.94,0.83l0.17,0.92l0.81,0.69l-0.44,0.95l-0.96,5.26l-0.13,3.22l-3.04,2.31l-1.22,3.57l1.02,1.24l-0.0,1.46l0.39,0.4l1.13,0.04l-0.9,1.25l-1.47,-2.42l-0.86,-0.29l-2.09,1.37l-1.74,-0.67l-1.45,-0.17l-0.85,0.35l-1.36,-0.07l-1.64,1.09l-1.06,0.05l-2.94,-1.28l-1.44,0.59l-1.01,-0.03l-0.97,-0.94l-2.7,-0.98l-2.69,0.3l-0.87,0.64l-0.47,1.6l-0.75,1.16l-0.12,1.53l-1.57,-1.1l-1.31,0.24l0.03,-0.81l-0.32,-0.41l-2.59,-0.52l-0.15,-1.16l-1.35,-1.6l-0.29,-1.0l0.13,-0.84l1.29,-0.08l1.08,-0.92l3.31,-0.22l2.22,-0.41l0.32,-0.34l0.2,-1.47l1.39,-1.88l-0.01,-5.66l3.36,-1.12l7.24,-5.12l8.42,-4.92l3.69,1.06Z"
                                                            data-code="NE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M456.32,253.89l0.64,0.65l-0.28,1.04l-2.11,2.01l-2.03,5.18l-1.37,1.16l-1.15,3.18l-1.33,0.66l-1.46,-0.97l-1.21,0.16l-1.38,1.36l-0.91,0.24l-1.79,4.06l-2.33,0.81l-1.11,-0.07l-0.86,0.5l-1.71,-0.05l-1.19,-1.39l-0.89,-1.89l-1.77,-1.66l-3.95,-0.08l0.07,-5.21l0.42,-1.43l1.95,-2.3l-0.14,-0.91l0.43,-1.18l-0.53,-1.41l0.25,-2.92l0.72,-1.07l0.32,-1.34l0.46,-0.39l2.47,-0.28l2.34,0.89l1.15,1.02l1.28,0.04l1.22,-0.58l3.03,1.27l1.49,-0.14l1.36,-1.0l1.33,0.07l0.82,-0.35l3.45,0.8l1.82,-1.32l1.84,2.67l0.66,0.16Z"
                                                            data-code="NG" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M857.8,379.65l1.86,3.12l0.44,0.18l0.3,-0.38l0.03,-1.23l0.38,0.27l0.57,2.31l2.02,0.94l1.81,0.27l1.57,-1.06l0.7,0.18l-1.15,3.59l-1.98,0.11l-0.74,1.2l0.2,1.11l-2.42,3.98l-1.49,0.92l-1.04,-0.85l1.21,-2.05l-0.81,-2.01l-2.63,-1.25l0.04,-0.57l1.82,-1.19l0.43,-2.34l-0.16,-2.03l-0.95,-1.82l-0.06,-0.72l-3.11,-3.64l-0.79,-1.52l1.56,1.45l1.76,0.66l0.65,2.34ZM853.83,393.59l0.57,1.24l0.59,0.16l1.42,-0.97l0.46,0.79l0.0,1.03l-2.47,3.48l-1.26,1.2l-0.06,0.5l0.55,0.87l-1.41,0.07l-2.33,1.38l-2.03,5.02l-3.02,2.16l-2.06,-0.06l-1.71,-1.04l-2.47,-0.2l-0.27,-0.73l1.22,-2.1l3.05,-2.94l1.62,-0.59l4.02,-2.82l1.57,-1.67l1.07,-2.16l0.88,-0.7l0.48,-1.75l1.24,-0.97l0.35,0.79Z"
                                                            data-code="NZ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M641.14,213.62l0.01,3.19l-1.74,0.04l-4.8,-0.86l-1.58,-1.39l-3.37,-0.34l-7.65,-3.7l0.8,-2.09l2.33,-1.7l1.77,0.75l2.49,1.76l1.38,0.41l0.99,1.35l1.9,0.52l1.99,1.17l5.49,0.9Z"
                                                            data-code="NP" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M407.4,259.27l0.86,0.42l0.56,0.9l1.13,0.53l1.19,-0.61l0.97,-0.08l1.42,0.54l0.6,3.24l-1.03,2.08l-0.65,2.84l1.06,2.33l-0.06,0.53l-2.54,-0.47l-1.66,0.03l-3.06,0.46l-4.11,1.6l0.32,-3.06l-1.18,-1.31l-1.32,-0.66l0.42,-0.85l-0.2,-1.4l0.5,-0.67l0.01,-1.59l0.84,-0.32l0.26,-0.5l-1.15,-3.01l0.12,-0.5l0.51,-0.25l0.66,0.31l1.93,0.02l0.67,-0.71l0.71,-0.14l0.25,0.69l0.57,0.22l1.4,-0.61Z"
                                                            data-code="CI" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M444.62,156.35l-0.29,0.87l0.18,0.53l1.13,0.58l1.0,0.1l-0.1,0.65l-0.79,0.38l-1.72,-0.37l-0.45,0.23l-0.45,1.04l-0.75,0.06l-0.84,-0.4l-1.32,1.0l-0.96,0.12l-0.88,-0.55l-0.81,-1.3l-0.49,-0.16l-0.63,0.26l0.02,-0.65l1.71,-1.66l0.1,-0.56l0.93,0.08l0.58,-0.46l1.99,0.02l0.66,-0.61l2.19,0.79Z"
                                                            data-code="CH" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M242.07,254.93l-1.7,0.59l-0.59,1.18l-1.7,1.69l-0.38,1.93l-0.67,1.43l0.31,0.57l1.03,0.13l0.25,0.9l0.57,0.64l-0.04,2.34l1.64,1.42l3.16,-0.24l1.26,0.28l1.67,2.06l0.41,0.13l4.09,-0.39l0.45,0.22l-0.92,1.95l-0.2,1.8l0.52,1.83l0.75,1.05l-1.12,1.1l0.07,0.63l0.84,0.51l0.74,1.29l-0.39,-0.45l-0.59,-0.01l-0.71,0.74l-4.71,-0.05l-0.4,0.41l0.03,1.57l0.33,0.39l1.11,0.2l-1.68,0.4l-0.29,0.38l-0.01,1.82l1.16,1.14l0.34,1.25l-1.05,7.05l-1.04,-0.87l1.26,-1.99l-0.13,-0.56l-2.18,-1.23l-1.38,0.2l-1.14,-0.38l-1.27,0.61l-1.55,-0.26l-1.38,-2.46l-1.23,-0.75l-0.85,-1.2l-1.67,-1.19l-0.86,0.13l-2.11,-1.32l-1.01,0.31l-1.8,-0.29l-0.52,-0.91l-3.09,-1.68l0.77,-0.52l-0.1,-1.12l0.41,-0.64l1.34,-0.32l2.0,-2.88l-0.11,-0.57l-0.66,-0.43l0.39,-1.38l-0.52,-2.1l0.49,-0.83l-0.4,-2.13l-0.97,-1.35l0.17,-0.66l0.86,-0.08l0.47,-0.75l-0.46,-1.63l1.41,-0.07l1.8,-1.69l0.93,-0.24l0.3,-0.38l0.45,-2.76l1.22,-1.0l1.44,-0.04l0.45,-0.5l1.91,0.12l2.93,-1.84l1.15,-1.14l0.91,0.46l-0.25,0.45Z"
                                                            data-code="CO" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M740.23,148.97l4.57,1.3l2.8,2.17l0.98,2.9l0.38,0.27l3.8,0.0l2.32,-1.28l3.29,-0.75l-0.96,2.09l-1.02,1.28l-0.85,3.4l-1.52,2.73l-2.76,-0.5l-2.4,1.13l-0.21,0.45l0.64,2.57l-0.32,3.2l-0.94,0.06l-0.37,0.89l-0.91,-1.01l-0.64,0.07l-0.92,1.57l-3.73,1.25l-0.26,0.48l0.26,1.06l-1.5,-0.08l-1.09,-0.86l-0.56,0.06l-1.67,2.06l-2.7,1.56l-2.03,1.88l-3.4,0.83l-1.93,1.4l-1.15,0.34l0.33,-0.7l-0.41,-0.89l1.79,-1.79l0.02,-0.54l-1.32,-1.56l-0.48,-0.1l-2.24,1.09l-2.83,2.06l-1.51,1.83l-2.28,0.13l-1.55,1.49l-0.04,0.5l1.32,1.97l2.0,0.58l0.31,1.35l1.98,0.84l3.0,-1.96l2.0,1.02l1.49,0.11l0.22,0.83l-3.37,0.86l-1.12,1.48l-2.5,1.52l-1.29,1.99l0.14,0.56l2.57,1.48l0.97,2.7l3.17,4.63l-0.03,1.66l-1.35,0.65l-0.2,0.51l0.6,1.47l1.4,0.91l-0.89,3.82l-1.43,0.38l-3.85,6.44l-2.27,3.11l-6.78,4.57l-2.73,0.29l-1.45,1.04l-0.62,-0.61l-0.55,-0.01l-1.36,1.25l-3.39,1.27l-2.61,0.4l-1.1,2.79l-0.81,0.09l-0.49,-1.42l0.5,-0.85l-0.25,-0.59l-3.36,-0.84l-1.3,0.4l-2.31,-0.62l-0.94,-0.84l0.33,-1.28l-0.3,-0.49l-2.19,-0.46l-1.13,-0.93l-0.47,-0.02l-2.06,1.36l-4.29,0.28l-2.76,1.05l-0.28,0.43l0.32,2.53l-0.59,-0.03l-0.19,-1.34l-0.55,-0.34l-1.68,0.7l-2.46,-1.23l0.62,-1.87l-0.26,-0.51l-1.37,-0.44l-0.54,-2.22l-0.45,-0.3l-2.13,0.35l0.24,-2.48l2.39,-2.4l0.03,-4.31l-1.19,-0.92l-0.78,-1.49l-0.41,-0.21l-1.41,0.19l-1.98,-0.3l0.46,-1.07l-1.17,-1.7l-0.55,-0.11l-1.63,1.05l-2.25,-0.57l-2.89,1.73l-2.25,1.98l-1.75,0.29l-1.17,-0.71l-3.31,-0.65l-1.48,0.79l-1.04,1.27l-0.12,-1.17l-0.54,-0.34l-1.44,0.54l-5.55,-0.86l-1.98,-1.16l-1.89,-0.54l-0.99,-1.35l-1.34,-0.37l-2.55,-1.79l-2.01,-0.84l-1.21,0.56l-5.57,-3.45l-0.53,-2.31l1.19,0.25l0.48,-0.37l0.08,-1.42l-0.98,-1.56l0.15,-2.44l-2.69,-3.32l-4.12,-1.23l-0.67,-2.0l-1.92,-1.48l-0.38,-0.7l-0.51,-3.01l-1.52,-0.66l-0.7,0.13l-0.48,-2.05l0.55,-0.51l-0.09,-0.82l2.03,-1.19l1.6,-0.54l2.56,0.38l0.42,-0.22l0.85,-1.7l3.0,-0.33l1.1,-1.26l4.05,-1.77l0.39,-0.91l-0.17,-1.44l1.45,-0.67l0.2,-0.52l-2.07,-4.9l4.51,-1.12l1.37,-0.73l1.89,-5.51l4.98,0.86l1.51,-1.7l0.11,-2.87l1.99,-0.38l1.83,-2.06l0.49,-0.13l0.68,2.08l2.23,1.77l3.44,1.16l1.55,2.29l-0.92,3.49l0.96,1.67l6.54,1.13l2.95,1.87l1.47,0.35l1.06,2.62l1.53,1.91l3.05,0.08l5.14,0.67l3.37,-0.41l2.36,0.43l3.65,1.8l3.06,0.04l1.45,0.88l2.87,-1.59l3.95,-1.02l3.83,-0.14l3.06,-1.14l1.77,-1.6l1.72,-1.01l0.17,-0.49l-1.1,-2.05l1.02,-1.54l4.02,0.8l2.45,-1.61l3.76,-1.19l1.96,-2.13l1.63,-0.83l3.51,-0.4l1.92,0.34l0.46,-0.3l0.17,-1.5l-2.27,-2.22l-2.11,-1.09l-2.18,1.11l-2.32,-0.47l-1.29,0.32l-0.4,-0.82l2.73,-5.16l3.02,1.06l3.53,-2.06l0.18,-1.68l2.16,-3.35l1.49,-1.35l-0.03,-1.85l-1.07,-0.85l1.54,-1.26l2.98,-0.59l3.23,-0.09l3.64,0.99l2.04,1.16l3.29,6.71l0.92,3.19ZM696.92,237.31l-1.87,1.08l-1.63,-0.64l-0.06,-1.79l1.03,-0.98l2.58,-0.69l1.16,0.05l0.3,0.54l-0.98,1.06l-0.53,1.37Z"
                                                            data-code="CN" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M457.92,257.49l1.05,1.91l-1.4,0.16l-1.05,-0.23l-0.45,0.22l-0.54,1.19l0.08,0.45l1.48,1.47l1.05,0.45l1.01,2.46l-1.52,2.99l-0.68,0.68l-0.13,3.69l2.38,3.84l1.09,0.8l0.24,2.48l-3.67,-1.14l-11.27,-0.13l0.23,-1.79l-0.98,-1.66l-1.19,-0.54l-0.44,-0.97l-0.6,-0.42l1.71,-4.27l0.75,-0.13l1.38,-1.36l0.65,-0.03l1.71,0.99l1.93,-1.12l1.14,-3.18l1.38,-1.17l2.0,-5.14l2.17,-2.13l0.3,-1.64l-0.86,-0.88l0.03,-0.33l0.94,1.28l0.07,3.22Z"
                                                            data-code="CM" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M246.5,429.18l-3.14,1.83l-0.57,3.16l-0.64,0.05l-2.68,-1.06l-2.82,-2.33l-3.04,-1.89l-0.69,-1.85l0.63,-2.14l-1.21,-2.11l-0.31,-5.37l1.01,-2.91l2.57,-2.38l-0.18,-0.68l-3.16,-0.77l2.05,-2.47l0.77,-4.65l2.32,0.9l0.54,-0.29l1.31,-6.31l-0.22,-0.44l-1.68,-0.8l-0.56,0.28l-0.7,3.36l-0.81,-0.22l1.56,-9.41l1.15,-2.24l-0.71,-2.82l-0.18,-2.84l1.01,-0.33l3.26,-9.14l1.07,-4.22l-0.56,-4.21l0.74,-2.34l-0.29,-3.27l1.46,-3.34l2.04,-16.59l-0.66,-7.76l1.03,-0.53l0.54,-0.9l0.79,1.14l0.32,1.78l1.25,1.16l-0.69,2.55l1.33,2.9l0.97,3.59l0.46,0.29l1.5,-0.3l0.11,0.23l-0.76,2.44l-2.57,1.23l-0.23,0.37l0.08,4.33l-0.46,0.77l0.56,1.21l-1.58,1.51l-1.68,2.62l-0.89,2.47l0.2,2.7l-1.48,2.73l1.12,5.09l0.64,0.61l-0.01,2.29l-1.38,2.68l0.01,2.4l-1.89,2.04l0.02,2.75l0.69,2.57l-1.43,1.13l-1.26,5.68l0.39,3.51l-0.97,0.89l0.58,3.5l1.02,1.14l-0.65,1.02l0.15,0.57l1.0,0.53l0.16,0.69l-1.03,0.85l0.26,1.75l-0.89,4.03l-1.31,2.66l0.24,1.75l-0.71,1.83l-1.99,1.7l0.3,3.67l0.88,1.19l1.58,0.01l0.01,2.21l1.04,1.95l5.98,0.63ZM248.69,430.79l0.0,7.33l0.4,0.4l3.52,0.05l-0.44,0.75l-1.94,0.98l-2.49,-0.37l-1.88,-1.06l-2.55,-0.49l-5.59,-3.71l-2.38,-2.63l4.1,2.48l3.32,1.23l0.45,-0.12l1.29,-1.57l0.83,-2.32l2.05,-1.24l1.31,0.29Z"
                                                            data-code="CL" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M280.06,145.6l-1.67,2.88l0.07,0.49l0.5,0.04l1.46,-0.98l1.0,0.42l-0.56,0.72l0.17,0.62l2.22,0.89l1.35,-0.71l1.95,0.78l-0.66,2.01l0.5,0.51l1.32,-0.42l0.98,3.17l-0.91,2.41l-0.8,0.08l-1.23,-0.45l0.47,-2.25l-0.89,-0.83l-0.48,0.06l-2.78,2.63l-0.34,-0.02l1.02,-0.85l-0.14,-0.69l-2.4,-0.77l-7.4,0.08l-0.17,-0.41l1.3,-0.94l0.02,-0.64l-0.73,-0.58l1.85,-1.74l2.57,-5.16l1.47,-1.79l1.99,-1.05l0.46,0.06l-1.53,2.45ZM68.32,74.16l4.13,0.95l4.02,2.14l2.61,0.4l2.47,-1.89l2.88,-1.31l3.85,0.48l3.71,-1.94l3.82,-1.04l1.56,1.68l0.49,0.08l1.87,-1.04l0.65,-1.98l1.24,0.35l4.16,3.94l0.54,0.01l2.75,-2.49l0.26,2.59l0.49,0.35l3.08,-0.73l1.04,-1.27l2.73,0.23l3.83,1.86l5.86,1.61l3.47,0.75l2.44,-0.26l2.73,1.78l-2.98,1.81l-0.19,0.41l0.31,0.32l4.53,0.92l6.87,-0.5l2.0,-0.69l2.49,2.39l0.53,0.02l2.72,-2.16l-0.02,-0.64l-2.16,-1.54l1.15,-1.06l4.83,-0.61l1.84,0.95l2.48,2.31l3.01,-0.23l4.55,1.92l3.85,-0.67l3.61,0.1l0.41,-0.44l-0.25,-2.36l1.79,-0.61l3.49,1.32l-0.01,3.77l0.31,0.39l0.45,-0.22l1.48,-3.16l1.74,0.1l0.41,-0.3l1.13,-4.37l-2.78,-3.11l-2.8,-1.74l0.19,-4.64l2.71,-3.07l2.98,0.67l2.41,1.95l3.19,4.8l-1.99,1.97l0.21,0.68l4.33,0.84l-0.01,4.15l0.25,0.37l0.44,-0.09l3.07,-3.15l2.54,2.39l-0.61,3.33l2.42,2.88l0.61,0.0l2.61,-3.08l1.88,-3.82l0.17,-4.58l6.72,0.94l3.13,2.04l0.13,1.82l-1.76,2.19l-0.01,0.49l1.66,2.16l-0.26,1.71l-4.68,2.8l-3.28,0.61l-2.47,-1.2l-0.55,0.23l-0.73,2.04l-2.38,3.43l-0.74,1.77l-2.74,2.57l-3.44,0.25l-2.21,1.78l-0.28,2.53l-2.82,0.55l-3.12,3.22l-2.72,4.31l-1.03,3.17l-0.14,4.31l0.33,0.41l3.44,0.57l2.24,5.95l0.45,0.23l3.4,-0.69l4.52,1.51l2.43,1.31l1.91,1.73l3.1,0.96l2.62,1.46l6.6,0.54l-0.35,2.74l0.81,3.53l1.81,3.78l3.83,3.3l0.45,0.04l2.1,-1.28l1.37,-3.69l-1.31,-5.38l-1.45,-1.58l3.57,-1.47l2.84,-2.46l1.52,-2.8l-0.25,-2.55l-1.7,-3.07l-2.85,-2.61l2.8,-3.95l-1.08,-3.37l-0.79,-5.67l1.36,-0.7l6.76,1.41l2.12,-0.96l5.12,3.36l1.05,1.61l4.08,0.26l-0.06,2.87l0.83,4.7l0.3,0.32l2.16,0.54l1.73,2.06l0.5,0.09l3.63,-2.03l2.52,-4.19l1.26,-1.32l7.6,11.72l-0.92,2.04l0.16,0.51l3.3,1.97l2.22,1.98l4.1,0.98l1.43,0.99l0.95,2.79l2.1,0.68l0.84,1.08l0.17,3.45l-3.37,2.26l-4.22,1.24l-3.06,2.63l-4.06,0.51l-5.35,-0.69l-6.39,0.2l-2.3,2.41l-3.26,1.51l-6.47,7.15l-0.06,0.48l0.44,0.19l2.13,-0.52l4.17,-4.24l5.12,-2.62l3.52,-0.3l1.69,1.21l-2.12,2.21l0.81,3.47l1.02,2.61l3.47,1.6l4.14,-0.45l2.15,-2.8l0.26,1.48l1.14,0.8l-2.56,1.69l-5.5,1.82l-2.54,1.27l-2.74,2.15l-1.4,-0.16l-0.07,-2.01l4.14,-2.44l0.18,-0.45l-0.39,-0.29l-6.63,0.45l-1.39,-1.49l-0.14,-4.43l-1.11,-0.91l-1.82,0.39l-0.66,-0.66l-0.6,0.03l-1.91,2.39l-0.82,2.52l-0.8,1.27l-1.67,0.56l-0.46,0.76l-8.31,0.07l-1.21,0.62l-2.35,1.97l-0.71,-0.14l-1.37,0.96l-1.12,-0.48l-4.74,1.26l-0.9,1.17l0.21,0.62l1.73,0.3l-1.81,0.31l-1.85,0.81l-2.11,-0.13l-2.95,1.78l-0.69,-0.09l1.39,-2.1l1.73,-1.21l0.1,-2.29l1.16,-1.99l0.49,0.53l2.03,0.42l1.2,-1.16l0.02,-0.47l-2.66,-3.51l-2.28,-0.61l-5.64,-0.71l-0.4,-0.57l-0.79,0.13l0.2,-0.41l-0.22,-0.55l-0.68,-0.26l0.19,-1.26l-0.78,-0.73l0.31,-0.64l-0.29,-0.57l-2.6,-0.44l-0.75,-1.63l-0.94,-0.66l-4.31,-0.65l-1.13,1.19l-1.48,0.59l-0.85,1.06l-2.83,-0.76l-2.09,0.39l-2.39,-0.97l-4.24,-0.7l-0.57,-0.4l-0.41,-1.63l-0.4,-0.3l-0.85,0.02l-0.39,0.4l-0.01,0.85l-69.13,-0.01l-6.51,-4.52l-4.5,-1.38l-1.26,-2.66l0.33,-1.93l-0.23,-0.43l-3.01,-1.35l-0.55,-2.77l-2.89,-2.38l-0.04,-1.45l1.39,-1.83l-0.28,-2.55l-4.16,-2.2l-4.07,-6.6l-4.02,-3.22l-1.3,-1.88l-0.5,-0.13l-2.51,1.21l-2.23,1.87l-3.85,-3.88l-2.44,-1.04l-2.22,-0.13l0.03,-37.49ZM260.37,148.65l3.04,0.76l2.26,1.2l-3.78,-0.95l-1.53,-1.01ZM249.4,3.81l6.68,0.49l5.32,0.79l4.26,1.57l-0.07,1.1l-5.85,2.53l-6.02,1.21l-2.39,1.39l-0.18,0.45l0.39,0.29l4.01,-0.02l-4.65,2.82l-4.2,1.74l-4.19,4.59l-5.03,0.92l-1.67,1.15l-7.47,0.59l-0.37,0.37l0.32,0.42l2.41,0.49l-0.81,0.47l-0.12,0.59l1.83,2.41l-2.02,1.59l-3.81,1.51l-1.32,2.16l-3.38,1.53l-0.22,0.48l0.35,1.19l0.4,0.29l3.88,-0.18l0.03,0.61l-6.33,2.95l-6.41,-1.4l-7.43,0.79l-3.72,-0.62l-4.4,-0.25l-0.23,-1.83l4.29,-1.11l0.28,-0.51l-1.1,-3.45l1.0,-0.25l6.58,2.28l0.47,-0.16l-0.05,-0.49l-3.41,-3.45l-3.58,-0.98l1.48,-1.55l4.34,-1.29l0.97,-2.19l-0.16,-0.48l-3.42,-2.13l-0.81,-2.26l6.2,0.22l2.24,0.58l3.91,-2.1l0.2,-0.43l-0.35,-0.32l-5.64,-0.67l-8.73,0.36l-4.26,-1.9l-2.12,-2.4l-2.78,-1.66l-0.41,-1.52l3.31,-1.03l2.93,-0.2l4.91,-0.99l3.7,-2.27l2.87,0.3l2.62,1.67l0.56,-0.14l1.82,-3.2l3.13,-0.94l4.44,-0.69l7.53,-0.26l1.48,0.67l7.19,-1.06l10.8,0.79ZM203.85,57.54l0.01,0.42l1.97,2.97l0.68,-0.02l2.24,-3.72l5.95,-1.86l4.01,4.64l-0.35,2.91l0.5,0.43l4.95,-1.36l2.32,-1.8l5.31,2.28l3.27,2.11l0.3,1.84l0.48,0.33l4.42,-0.99l2.64,2.87l5.97,1.77l2.06,1.72l2.11,3.71l-4.19,1.86l-0.01,0.73l5.9,2.83l3.94,0.94l3.78,3.95l3.46,0.25l-0.63,2.37l-4.11,4.47l-2.76,-1.56l-3.9,-3.94l-3.59,0.41l-0.33,0.34l-0.19,2.72l2.63,2.38l3.42,1.89l0.94,0.97l1.55,3.75l-0.7,2.29l-2.74,-0.92l-6.25,-3.15l-0.51,0.13l0.05,0.52l6.07,5.69l0.18,0.59l-6.09,-1.39l-5.31,-2.24l-2.63,-1.66l0.6,-0.77l-0.12,-0.6l-7.39,-4.01l-0.59,0.37l0.03,0.79l-6.73,0.6l-1.69,-1.1l1.36,-2.46l4.51,-0.07l5.15,-0.52l0.31,-0.6l-0.74,-1.3l0.78,-1.84l3.21,-4.05l-0.67,-2.35l-1.11,-1.6l-3.84,-2.1l-4.35,-1.28l0.91,-0.63l0.06,-0.61l-2.65,-2.75l-2.34,-0.36l-1.89,-1.46l-0.53,0.03l-1.24,1.23l-4.36,0.55l-9.04,-0.99l-9.26,-1.98l-1.6,-1.22l2.22,-1.77l0.13,-0.44l-0.38,-0.27l-3.22,-0.02l-0.72,-4.25l1.83,-4.04l2.42,-1.85l5.5,-1.1l-1.39,2.35ZM261.19,159.33l2.07,0.61l1.44,-0.04l-1.15,0.63l-2.94,-1.23l-0.4,-0.68l0.36,-0.37l0.61,1.07ZM230.83,84.39l-2.37,0.18l-0.49,-1.63l0.93,-2.09l1.94,-0.51l1.62,0.99l0.02,1.52l-1.66,1.54ZM229.43,58.25l0.11,0.65l-4.87,-0.21l-2.72,0.62l-3.1,-2.57l0.08,-1.26l0.86,-0.23l5.57,0.51l4.08,2.5ZM222.0,105.02l-0.72,1.49l-0.63,-0.19l-0.48,-0.84l0.81,-0.99l0.65,0.05l0.37,0.46ZM183.74,38.32l2.9,1.7l4.79,-0.01l1.84,1.46l-0.49,1.68l0.23,0.48l2.82,1.14l1.76,1.26l7.01,0.65l4.1,-1.1l5.03,-0.43l3.93,0.35l2.48,1.77l0.46,1.7l-1.3,1.1l-3.56,1.01l-3.23,-0.59l-7.17,0.76l-5.09,0.09l-3.99,-0.6l-6.42,-1.54l-0.79,-2.51l-0.3,-2.49l-2.64,-2.5l-5.32,-0.72l-2.52,-1.4l0.68,-1.57l4.78,0.31ZM207.38,91.35l0.4,1.56l0.56,0.26l1.06,-0.52l1.32,0.96l5.42,2.57l0.2,1.68l0.46,0.35l1.68,-0.28l1.15,0.85l-1.55,0.87l-3.61,-0.88l-1.32,-1.69l-0.57,-0.06l-2.45,2.1l-3.12,1.79l-0.7,-1.87l-0.42,-0.26l-2.16,0.24l1.39,-1.39l0.32,-3.14l0.76,-3.35l1.18,0.22ZM215.49,102.6l-2.67,1.95l-1.4,-0.07l-0.3,-0.58l1.53,-1.48l2.84,0.18ZM202.7,24.12l2.53,1.59l-2.87,1.4l-4.53,4.05l-4.25,0.38l-5.03,-0.68l-2.45,-2.04l0.03,-1.62l1.82,-1.37l0.14,-0.45l-0.38,-0.27l-4.45,0.04l-2.59,-1.76l-1.41,-2.29l1.57,-2.32l1.62,-1.66l2.44,-0.39l0.25,-0.65l-0.6,-0.74l4.86,-0.25l3.24,3.11l8.16,2.3l1.9,3.61ZM187.47,59.2l-2.76,3.49l-2.38,-0.15l-1.44,-3.84l0.04,-2.2l1.19,-1.88l2.3,-1.23l5.07,0.17l4.11,1.02l-3.24,3.72l-2.88,0.89ZM186.07,48.79l-1.08,1.53l-3.34,-0.34l-2.56,-1.1l1.03,-1.75l3.25,-1.23l1.95,1.58l0.75,1.3ZM185.71,35.32l-5.3,-0.2l-0.32,-0.71l4.31,0.07l1.3,0.84ZM180.68,32.48l-3.34,1.0l-1.79,-1.1l-0.98,-1.87l-0.15,-1.73l4.1,0.53l2.67,1.7l-0.51,1.47ZM180.9,76.31l-1.1,1.08l-3.13,-1.23l-2.12,0.43l-2.71,-1.57l1.72,-1.09l1.55,-1.72l3.81,1.9l1.98,2.2ZM169.74,54.87l2.96,0.97l4.17,-0.57l0.41,0.88l-2.14,2.11l0.09,0.64l3.55,1.92l-0.4,3.72l-3.79,1.65l-2.17,-0.35l-1.72,-1.74l-6.02,-3.5l0.03,-0.85l4.68,0.54l0.4,-0.21l-0.05,-0.45l-2.48,-2.81l2.46,-1.95ZM174.45,40.74l1.37,1.73l0.07,2.44l-1.05,3.45l-3.79,0.47l-2.32,-0.69l0.05,-2.64l-0.44,-0.41l-3.68,0.35l-0.12,-3.1l2.45,0.1l3.67,-1.73l3.41,0.29l0.37,-0.26ZM170.05,31.55l0.67,1.56l-3.33,-0.49l-4.22,-1.77l-4.35,-0.16l1.4,-0.94l-0.06,-0.7l-2.81,-1.23l-0.12,-1.39l4.39,0.68l6.62,1.98l1.81,2.47ZM134.5,58.13l-1.02,1.82l0.45,0.58l5.4,-1.39l3.33,2.29l0.49,-0.03l2.6,-2.23l1.94,1.32l2.0,4.5l0.7,0.06l1.3,-2.29l-1.63,-4.46l1.69,-0.54l2.31,0.71l2.65,1.81l2.49,7.92l8.48,4.27l-0.19,1.35l-3.79,0.33l-0.26,0.67l1.4,1.49l-0.58,1.1l-4.23,-0.64l-4.43,-1.19l-3.0,0.28l-4.66,1.47l-10.52,1.04l-1.43,-2.02l-3.42,-1.2l-2.21,0.43l-2.51,-2.86l4.84,-1.05l3.6,0.19l3.27,-0.78l0.31,-0.39l-0.31,-0.39l-4.84,-1.06l-8.79,0.27l-0.85,-1.07l5.26,-1.66l0.27,-0.45l-0.4,-0.34l-3.8,0.06l-3.81,-1.06l1.81,-3.01l1.66,-1.79l6.48,-2.81l1.97,0.71ZM158.7,56.61l-1.7,2.44l-3.2,-2.75l0.37,-0.3l3.11,-0.18l1.42,0.79ZM149.61,42.73l1.01,1.89l0.5,0.18l2.14,-0.82l2.23,0.19l0.36,2.04l-1.33,2.09l-8.28,0.76l-6.35,2.15l-3.41,0.1l-0.19,-0.96l4.9,-2.08l0.23,-0.46l-0.41,-0.31l-11.25,0.59l-2.89,-0.74l3.04,-4.44l2.14,-1.32l6.81,1.69l4.58,3.06l4.37,0.39l0.36,-0.63l-3.36,-4.6l1.85,-1.53l2.18,0.51l0.77,2.26ZM144.76,34.41l-4.36,1.44l-3.0,-1.4l1.46,-1.24l3.47,-0.52l2.96,0.71l-0.52,1.01ZM145.13,29.83l-1.9,0.66l-3.67,-0.0l2.27,-1.61l3.3,0.95ZM118.92,65.79l-6.03,2.02l-1.33,-1.9l-5.38,-2.28l2.59,-5.05l2.16,-3.14l-0.02,-0.48l-1.97,-2.41l7.64,-0.7l3.6,1.02l6.3,0.27l4.42,2.95l-2.53,0.98l-6.24,3.43l-3.1,3.28l-0.11,2.01ZM129.54,35.53l-0.28,3.37l-1.72,1.62l-2.33,0.28l-4.61,2.19l-3.86,0.76l-2.64,-0.87l3.72,-3.4l5.01,-3.34l3.72,0.07l3.0,-0.67ZM111.09,152.69l-0.67,0.24l-3.85,-1.37l-0.83,-1.17l-2.12,-1.07l-0.66,-1.02l-2.4,-0.55l-0.74,-1.71l6.02,1.45l2.0,2.55l2.52,1.39l0.73,1.27ZM87.8,134.64l0.89,0.29l1.86,-0.21l-0.65,3.34l1.69,2.33l-1.31,-1.33l-0.99,-1.62l-1.17,-0.98l-0.33,-1.82Z"
                                                            data-code="CA" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M466.72,276.48l-0.1,1.03l-1.25,2.97l-0.19,3.62l-0.46,1.78l-0.23,0.63l-1.61,1.19l-1.21,1.39l-1.09,2.43l0.04,2.09l-3.25,3.24l-0.5,-0.24l-0.5,-0.83l-1.36,-0.02l-0.98,0.89l-1.68,-0.99l-1.54,1.24l-1.52,-1.96l1.57,-1.14l0.11,-0.52l-0.77,-1.35l2.1,-0.66l0.39,-0.73l1.05,0.82l2.21,0.11l1.12,-1.37l0.37,-1.81l-0.27,-2.09l-1.13,-1.5l1.0,-2.69l-0.13,-0.45l-0.92,-0.58l-1.6,0.17l-0.51,-0.94l0.1,-0.61l2.75,0.09l3.97,1.24l0.51,-0.33l0.17,-1.28l1.24,-2.21l1.28,-1.14l2.76,0.49Z"
                                                            data-code="CG" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M461.16,278.2l-0.26,-1.19l-1.09,-0.77l-0.84,-1.17l-0.29,-1.0l-1.04,-1.15l0.08,-3.43l0.58,-0.49l1.16,-2.35l1.85,-0.17l0.61,-0.62l0.97,0.58l3.15,-0.96l2.48,-1.92l0.02,-0.96l2.81,0.02l2.36,-1.17l1.93,-2.85l1.16,-0.93l1.11,-0.3l0.27,0.86l1.34,1.47l-0.39,2.01l0.3,1.01l4.01,2.75l0.17,0.93l2.63,2.31l0.6,1.44l2.08,1.4l-3.84,-0.21l-1.94,0.88l-1.23,-0.49l-2.67,1.2l-1.29,-0.18l-0.51,0.36l-0.6,1.22l-3.35,-0.65l-1.57,-0.91l-2.42,-0.83l-1.45,0.91l-0.97,1.27l-0.26,1.56l-3.22,-0.43l-1.49,1.33l-0.94,1.62Z"
                                                            data-code="CF" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M487.01,272.38l2.34,-0.14l1.35,1.84l1.34,0.45l0.86,-0.39l1.21,0.12l1.07,-0.41l0.54,0.89l2.04,1.54l-0.14,2.72l0.7,0.54l-1.38,1.13l-1.53,2.54l-0.17,2.05l-0.59,1.08l-0.02,1.72l-0.72,0.84l-0.66,3.01l0.63,1.32l-0.44,4.26l0.64,1.47l-0.37,1.22l0.86,1.8l1.53,1.41l0.3,1.26l0.44,0.5l-4.08,0.75l-0.92,1.81l0.51,1.34l-0.74,5.43l0.17,0.38l2.45,1.46l0.54,-0.1l0.12,1.62l-1.28,-0.01l-1.85,-2.35l-1.94,-0.45l-0.48,-1.13l-0.55,-0.2l-1.41,0.74l-1.71,-0.3l-1.01,-1.18l-2.49,-0.19l-0.44,-0.77l-1.98,-0.21l-2.88,0.36l0.11,-2.41l-0.85,-1.13l-0.16,-1.36l0.32,-1.73l-0.46,-0.89l-0.04,-1.49l-0.4,-0.39l-2.53,0.02l0.1,-0.41l-0.39,-0.49l-1.28,0.01l-0.43,0.45l-1.62,0.32l-0.83,1.79l-1.09,-0.28l-2.4,0.52l-1.37,-1.91l-1.3,-3.3l-0.38,-0.27l-7.39,-0.03l-2.46,0.42l0.5,-0.45l0.37,-1.47l0.66,-0.38l0.92,0.08l0.73,-0.82l0.87,0.02l0.31,0.68l1.4,0.36l3.59,-3.63l0.01,-2.23l1.02,-2.29l2.69,-2.39l0.43,-0.99l0.49,-1.96l0.17,-3.51l1.25,-2.95l0.36,-3.14l0.86,-1.13l1.1,-0.66l3.57,1.73l3.65,0.73l0.46,-0.21l0.8,-1.46l1.24,0.19l2.61,-1.17l0.81,0.44l1.04,-0.03l0.59,-0.66l0.7,-0.16l1.81,0.25Z"
                                                            data-code="CD" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M458.46,144.88l1.22,1.01l1.47,0.23l0.13,0.93l1.36,0.68l0.54,-0.2l0.24,-0.55l1.15,0.25l0.53,1.09l1.68,0.18l0.6,0.84l-1.04,0.73l-0.96,1.28l-1.6,0.17l-0.55,0.56l-1.04,-0.46l-1.05,0.15l-2.12,-0.96l-1.05,0.34l-1.2,1.12l-1.56,-0.87l-2.57,-2.1l-0.53,-1.88l4.7,-2.52l0.71,0.26l0.9,-0.28Z"
                                                            data-code="CZ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M504.36,193.47l0.43,0.28l-1.28,0.57l-0.92,-0.28l-0.24,-0.46l2.01,-0.13Z"
                                                            data-code="CY" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M211.34,258.05l0.48,0.99l1.6,1.6l-0.54,0.45l0.29,1.42l-0.25,1.19l-1.09,-0.59l-0.05,-1.25l-2.46,-1.42l-0.28,-0.77l-0.66,-0.45l-0.45,-0.0l-0.11,1.04l-1.32,-0.95l0.31,-1.3l-0.36,-0.6l0.31,-0.27l1.42,0.58l1.29,-0.14l0.56,0.56l0.74,0.17l0.55,-0.27Z"
                                                            data-code="CR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M221.21,227.25l1.27,1.02l2.19,-0.28l4.43,3.33l2.08,0.43l-0.1,0.38l0.36,0.5l1.75,0.1l1.48,0.84l-3.11,0.51l-4.15,-0.03l0.77,-0.67l-0.04,-0.64l-1.2,-0.74l-1.49,-0.16l-0.7,-0.61l-0.56,-1.4l-0.4,-0.25l-1.34,0.1l-2.2,-0.66l-0.88,-0.58l-3.18,-0.4l-0.27,-0.16l0.58,-0.74l-0.36,-0.29l-2.72,-0.05l-1.7,1.29l-0.91,0.03l-0.61,0.69l-1.01,0.22l1.11,-1.29l1.01,-0.52l3.69,-1.01l3.98,0.21l2.21,0.84Z"
                                                            data-code="CU" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M500.35,351.36l0.5,2.04l-0.38,0.89l-1.05,0.21l-1.23,-1.2l-0.02,-0.64l0.83,-1.57l1.34,0.27Z"
                                                            data-code="SZ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M511.0,199.79l0.05,-1.33l0.54,-1.36l1.28,-0.99l0.13,-0.45l-0.41,-1.11l-1.14,-0.36l-0.19,-1.74l0.52,-1.0l1.29,-1.21l0.2,-1.18l0.59,0.23l2.62,-0.76l1.36,0.52l2.06,-0.01l2.95,-1.08l3.25,-0.26l-0.67,0.94l-1.28,0.66l-0.21,0.4l0.23,2.01l-0.88,3.19l-10.15,5.73l-2.15,-0.85Z"
                                                            data-code="SY" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M621.35,172.32l-3.87,1.69l-0.96,1.18l-3.04,0.34l-1.13,1.86l-2.36,-0.35l-1.99,0.63l-2.39,1.4l0.06,0.95l-0.4,0.37l-4.52,0.43l-3.02,-0.93l-2.37,0.17l0.11,-0.79l2.32,0.42l1.13,-0.88l1.99,0.2l3.21,-2.14l-0.03,-0.69l-2.97,-1.57l-1.94,0.65l-1.22,-0.74l1.71,-1.58l-0.12,-0.67l-0.36,-0.15l0.32,-0.77l1.36,-0.35l4.02,1.02l0.49,-0.3l0.35,-1.59l1.09,-0.48l3.42,1.22l1.11,-0.31l7.64,0.39l1.16,1.0l1.23,0.39Z"
                                                            data-code="KG" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M506.26,284.69l1.87,-2.56l0.93,-2.15l-1.38,-4.08l-1.06,-1.6l2.82,-2.75l0.79,0.26l0.12,1.41l0.86,0.83l1.9,0.11l3.28,2.13l3.57,0.44l1.05,-1.12l1.96,-0.9l0.82,0.68l1.16,0.09l-1.78,2.45l0.03,9.12l1.3,1.94l-1.37,0.78l-0.67,1.03l-1.08,0.46l-0.34,1.67l-0.81,1.07l-0.45,1.55l-0.68,0.56l-3.2,-2.23l-0.35,-1.58l-8.86,-4.98l0.14,-1.6l-0.57,-1.04Z"
                                                            data-code="KE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M481.71,263.34l1.07,-0.72l1.2,-3.18l1.36,-0.26l1.61,1.99l0.87,0.34l1.1,-0.41l1.5,0.07l0.57,0.53l2.49,0.0l0.44,-0.63l1.07,-0.4l0.45,-0.84l0.59,-0.33l1.9,1.33l1.6,-0.2l2.83,-3.33l-0.32,-2.21l1.59,-0.52l-0.24,1.6l0.3,1.83l1.35,1.18l0.2,1.87l0.35,0.41l0.02,1.53l-0.23,0.47l-1.42,0.25l-0.85,1.44l0.3,0.6l1.4,0.16l1.11,1.08l0.59,1.13l1.03,0.53l1.28,2.36l-4.41,3.98l-1.74,0.01l-1.89,0.55l-1.47,-0.52l-1.15,0.57l-2.96,-2.62l-1.3,0.49l-1.06,-0.15l-0.79,0.39l-0.82,-0.22l-1.8,-2.7l-1.91,-1.1l-0.66,-1.5l-2.62,-2.32l-0.18,-0.94l-2.37,-1.6Z"
                                                            data-code="SS" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M283.12,270.19l2.1,0.53l-1.08,1.95l0.2,1.72l0.93,1.49l-0.59,2.03l-0.43,0.71l-1.12,-0.42l-1.32,0.22l-0.93,-0.2l-0.46,0.26l-0.25,0.73l0.33,0.7l-0.89,-0.13l-1.39,-1.97l-0.31,-1.34l-0.97,-0.31l-0.89,-1.47l0.35,-1.61l1.45,-0.82l0.33,-1.87l2.61,0.44l0.57,-0.47l1.75,-0.16Z"
                                                            data-code="SR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M689.52,249.39l0.49,1.45l-0.28,2.74l-4.0,1.86l-0.16,0.6l0.68,0.95l-2.06,0.17l-2.05,0.97l-1.82,-0.32l-2.12,-3.7l-0.55,-2.85l1.4,-1.85l3.02,-0.45l2.23,0.35l2.01,0.98l0.51,-0.14l0.95,-1.48l1.74,0.74Z"
                                                            data-code="KH" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M195.8,250.13l1.4,-1.19l2.24,1.45l0.98,-0.27l0.44,0.2l-0.27,1.05l-1.14,-0.03l-3.64,-1.21Z"
                                                            data-code="SV" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M476.82,151.17l-1.14,1.9l-2.73,-0.92l-0.82,0.2l-0.74,0.8l-3.46,0.73l-0.47,0.69l-1.76,0.33l-1.88,-1.0l-0.18,-0.81l0.38,-0.75l1.87,-0.32l1.74,-1.89l0.83,0.16l0.79,-0.34l1.51,1.04l1.34,-0.63l1.25,0.3l1.65,-0.42l1.81,0.95Z"
                                                            data-code="SK" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M737.51,185.84l0.98,-0.1l0.87,-1.17l2.69,-0.32l0.33,-0.29l1.76,2.79l0.58,1.76l0.02,3.12l-0.8,1.32l-2.21,0.55l-1.93,1.13l-1.8,0.19l-0.2,-1.1l0.43,-2.28l-0.95,-2.56l1.43,-0.37l0.23,-0.62l-1.43,-2.06Z"
                                                            data-code="KR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M456.18,162.07l-0.51,-1.32l0.18,-1.05l1.69,0.2l1.42,-0.71l2.09,-0.07l0.62,-0.51l0.21,0.47l-1.61,0.67l-0.44,1.34l-0.66,0.24l-0.26,0.82l-1.22,-0.49l-0.84,0.46l-0.69,-0.04Z"
                                                            data-code="SI" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M736.77,185.16l-0.92,-0.42l-0.88,0.62l-1.21,-0.88l0.96,-1.15l0.59,-2.59l-0.46,-0.74l-2.09,-0.77l1.64,-1.52l2.72,-1.58l1.58,-1.91l1.11,0.78l2.17,0.11l0.41,-0.5l-0.3,-1.22l3.52,-1.18l0.94,-1.4l0.98,1.08l-2.19,2.18l0.01,2.14l-1.06,0.54l-1.41,1.4l-1.7,0.52l-1.25,1.09l-0.14,1.98l0.94,0.45l1.15,1.04l-0.13,0.26l-2.6,0.29l-1.13,1.29l-1.22,0.08Z"
                                                            data-code="KP" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M525.13,288.48l-1.13,-1.57l-0.03,-8.86l2.66,-3.38l1.67,-0.13l2.13,-1.69l3.41,-0.23l7.08,-7.55l2.91,-3.69l0.08,-4.82l2.98,-0.67l1.24,-0.86l0.45,-0.0l-0.2,3.0l-1.21,3.62l-2.73,5.97l-2.13,3.65l-5.03,6.16l-8.56,6.4l-2.78,3.08l-0.8,1.56Z"
                                                            data-code="SO" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M390.09,248.21l0.12,1.55l0.49,1.46l0.96,0.82l0.05,1.28l-1.26,-0.19l-0.75,0.33l-1.84,-0.61l-5.84,-0.13l-2.54,0.51l-0.22,-1.03l1.77,0.04l2.01,-0.91l1.03,0.48l1.09,0.04l1.29,-0.62l0.14,-0.58l-0.51,-0.74l-1.81,0.25l-1.13,-0.63l-0.79,0.04l-0.72,0.61l-2.31,0.06l-0.92,-1.77l-0.81,-0.64l0.64,-0.35l2.46,-3.74l1.04,0.19l1.38,-0.56l1.19,-0.02l2.72,1.37l3.03,3.48Z"
                                                            data-code="SN" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M394.46,264.11l-1.73,1.98l-0.58,1.33l-2.07,-1.06l-1.22,-1.26l-0.65,-2.39l1.16,-0.96l0.67,-1.17l1.21,-0.52l1.66,0.0l1.03,1.64l0.52,2.41Z"
                                                            data-code="SL" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M826.69,311.6l-0.61,0.09l-0.2,-0.33l0.37,0.15l0.44,0.09ZM824.18,307.38l-0.26,-0.3l-0.31,-0.91l0.03,0.0l0.54,1.21ZM823.04,309.33l-1.66,-0.22l-0.2,-0.52l1.16,0.28l0.69,0.46ZM819.28,304.68l1.14,0.65l0.02,0.03l-0.81,-0.44l-0.35,-0.23Z"
                                                            data-code="SB" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M537.53,210.34l2.0,0.24l0.9,1.32l1.49,-0.06l0.87,2.08l1.29,0.76l0.51,0.99l1.56,1.03l-0.1,1.9l0.32,0.9l1.58,2.47l0.76,0.53l0.7,-0.04l1.68,4.23l7.53,1.33l0.51,-0.29l0.77,1.25l-1.55,4.87l-7.29,2.52l-7.3,1.03l-2.34,1.17l-1.88,2.74l-0.76,0.28l-0.82,-0.78l-0.91,0.12l-2.88,-0.51l-3.51,0.25l-0.86,-0.56l-0.57,0.15l-0.66,1.27l0.16,1.11l-0.43,0.32l-0.93,-1.4l-0.33,-1.16l-1.23,-0.88l-1.27,-2.06l-0.78,-2.22l-1.73,-1.79l-1.14,-0.48l-1.54,-2.31l-0.21,-3.41l-1.44,-2.93l-1.27,-1.16l-1.33,-0.57l-1.31,-3.37l-0.77,-0.67l-0.97,-1.97l-2.8,-4.03l-1.06,-0.17l0.37,-1.96l0.2,-0.72l2.74,0.3l1.08,-0.84l0.6,-0.94l1.74,-0.35l0.65,-1.03l0.71,-0.4l0.1,-0.62l-2.06,-2.28l4.39,-1.22l0.48,-0.37l2.77,0.69l3.66,1.9l7.03,5.5l4.87,0.3Z"
                                                            data-code="SA" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M480.22,89.3l-4.03,1.17l-2.43,2.86l0.26,2.57l-8.77,6.64l-1.78,5.79l1.78,2.68l2.22,1.96l-2.07,3.77l-2.72,1.13l-0.95,6.04l-1.29,3.01l-2.74,-0.31l-0.4,0.22l-1.31,2.59l-2.34,0.13l-0.75,-3.09l-2.08,-4.03l-1.83,-4.96l1.0,-1.93l2.14,-2.7l0.83,-4.45l-1.6,-2.17l-0.15,-4.94l1.48,-3.39l2.58,-0.15l0.87,-1.59l-0.78,-1.57l3.76,-5.59l4.04,-7.48l2.17,0.01l0.39,-0.29l0.57,-2.07l4.37,0.64l0.46,-0.34l0.33,-2.56l1.1,-0.13l6.94,4.87l0.06,6.32l0.66,1.36Z"
                                                            data-code="SE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M505.98,259.4l-0.34,-0.77l-1.17,-0.9l-0.26,-1.61l0.29,-1.81l-0.34,-0.46l-1.16,-0.17l-0.54,0.59l-1.23,0.11l-0.28,0.65l0.53,0.65l0.17,1.22l-2.44,3.0l-0.96,0.19l-2.39,-1.4l-0.95,0.52l-0.38,0.78l-1.11,0.41l-0.29,0.5l-1.94,0.0l-0.54,-0.52l-1.81,-0.09l-0.95,0.4l-2.45,-2.35l-2.07,0.54l-0.73,1.26l-0.6,2.1l-1.25,0.58l-0.75,-0.62l0.27,-2.65l-1.48,-1.78l-0.22,-1.48l-0.92,-0.96l-0.02,-1.29l-0.57,-1.16l-0.68,-0.16l0.69,-1.29l-0.18,-1.14l0.65,-0.62l0.03,-0.55l-0.36,-0.41l1.55,-2.97l1.91,0.16l0.43,-0.4l-0.1,-10.94l2.49,-0.01l0.4,-0.4l-0.0,-4.82l29.02,0.0l0.64,2.04l-0.49,0.66l0.36,2.69l0.93,3.16l2.12,1.55l-0.89,1.04l-1.72,0.39l-0.98,0.9l-1.43,5.65l0.24,1.15l-0.38,2.06l-0.96,2.38l-1.53,1.31l-1.32,2.91l-1.22,0.86l-0.37,1.34Z"
                                                            data-code="SD" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M241.8,239.2l0.05,-0.65l-0.46,-0.73l0.42,-0.44l0.19,-1.0l-0.09,-1.53l1.66,0.01l1.99,0.63l0.33,0.67l1.28,0.19l0.33,0.76l1.0,0.08l0.8,0.62l-0.45,0.51l-1.13,-0.47l-1.88,-0.01l-1.27,0.59l-0.75,-0.55l-1.01,0.54l-0.79,1.4l-0.23,-0.61Z"
                                                            data-code="DO" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M528.43,256.18l-0.45,0.66l-0.58,-0.25l-1.51,0.13l-0.18,-1.01l1.45,-1.95l0.83,0.17l0.77,-0.44l0.2,1.0l-1.2,0.51l-0.06,0.7l0.73,0.47Z"
                                                            data-code="DJ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M452.28,129.07l-1.19,2.24l-2.13,-1.6l-0.23,-0.95l2.98,-0.95l0.57,1.26ZM447.74,126.31l-0.26,0.57l-0.88,-0.07l-1.8,2.53l0.48,1.69l-1.09,0.36l-1.61,-0.39l-0.89,-1.69l-0.07,-3.43l0.96,-1.73l2.02,-0.2l1.09,-1.07l1.33,-0.67l-0.05,1.06l-0.73,1.41l0.3,1.0l1.2,0.64Z"
                                                            data-code="DK" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M453.14,155.55l-0.55,-0.36l-1.2,-0.1l-1.87,0.57l-2.13,-0.13l-0.56,0.63l-0.86,-0.6l-0.96,0.09l-2.57,-0.93l-0.85,0.67l-1.47,-0.02l0.24,-1.75l1.23,-2.14l-0.28,-0.59l-3.52,-0.58l-0.92,-0.66l0.12,-1.2l-0.48,-0.88l0.27,-2.17l-0.37,-3.03l1.41,-0.22l0.63,-1.26l0.66,-3.19l-0.41,-1.18l0.26,-0.39l1.66,-0.15l0.33,0.54l0.62,0.07l1.7,-1.69l-0.54,-3.02l1.37,0.33l1.31,-0.37l0.31,1.18l2.25,0.71l-0.02,0.92l0.5,0.4l2.55,-0.65l1.34,-0.87l2.57,1.24l1.06,0.98l0.48,1.44l-0.57,0.74l-0.0,0.48l0.87,1.15l0.57,1.64l-0.14,1.29l0.82,1.7l-1.5,-0.07l-0.56,0.57l-4.47,2.15l-0.22,0.54l0.68,2.26l2.58,2.16l-0.66,1.11l-0.79,0.36l-0.23,0.43l0.32,1.87Z"
                                                            data-code="DE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M528.27,246.72l0.26,-0.42l-0.22,-1.01l0.19,-1.5l0.92,-0.69l-0.07,-1.35l0.39,-0.75l1.01,0.47l3.34,-0.27l3.76,0.41l0.95,0.81l1.36,-0.58l1.74,-2.62l2.18,-1.09l6.86,-0.94l2.48,5.41l-1.64,0.76l-0.56,1.9l-6.23,2.16l-2.29,1.8l-1.93,0.05l-1.41,1.02l-4.24,0.74l-1.72,1.49l-3.28,0.19l-0.52,-1.18l0.02,-1.51l-1.34,-3.29Z"
                                                            data-code="YE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M462.89,152.8l0.04,2.25l-1.07,0.0l-0.33,0.63l0.36,0.51l-1.04,2.13l-2.02,0.07l-1.33,0.7l-5.29,-0.99l-0.47,-0.93l-0.44,-0.21l-2.47,0.55l-0.42,0.51l-3.18,-0.81l0.43,-0.91l1.12,0.78l0.6,-0.17l0.25,-0.58l1.93,0.12l1.86,-0.56l1.0,0.08l0.68,0.57l0.62,-0.15l0.26,-0.77l-0.3,-1.78l0.8,-0.44l0.68,-1.15l1.52,0.85l0.47,-0.06l1.34,-1.25l0.64,-0.17l1.81,0.92l1.28,-0.11l0.7,0.37Z"
                                                            data-code="AT" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M441.46,188.44l-0.32,1.07l0.39,2.64l-0.54,2.16l-1.58,1.82l0.37,2.39l1.91,1.55l0.18,0.8l1.42,1.03l1.84,7.23l0.12,1.16l-0.57,5.0l0.2,1.51l-0.87,0.99l-0.02,0.51l1.41,1.86l0.14,1.2l0.89,1.48l0.5,0.16l0.98,-0.41l1.73,1.08l0.82,1.23l-8.22,4.81l-7.23,5.11l-3.43,1.13l-2.3,0.21l-0.28,-1.59l-2.56,-1.09l-0.67,-1.25l-26.12,-17.86l0.01,-3.47l3.77,-1.88l2.44,-0.41l2.12,-0.75l1.08,-1.42l2.81,-1.05l0.35,-2.08l1.33,-0.29l1.04,-0.94l3.47,-0.69l0.46,-1.08l-0.1,-0.45l-0.58,-0.52l-0.82,-2.81l-0.19,-1.83l-0.78,-1.49l2.03,-1.31l2.63,-0.48l1.7,-1.22l2.31,-0.84l8.24,-0.73l1.49,0.38l2.28,-1.1l2.46,-0.02l0.92,0.6l1.35,-0.05Z"
                                                            data-code="DZ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M892.72,99.2l1.31,0.53l1.41,-0.37l1.89,0.98l1.89,0.42l-1.32,0.58l-2.9,-1.53l-2.08,0.22l-0.26,-0.15l0.07,-0.67ZM183.22,150.47l0.37,1.47l1.12,0.85l4.23,0.7l2.39,0.98l2.17,-0.38l1.85,0.5l-1.55,0.65l-3.49,2.61l-0.16,0.77l0.5,0.39l2.33,-0.61l1.77,1.02l5.15,-2.4l-0.31,0.65l0.25,0.56l1.36,0.38l1.71,1.16l4.7,-0.88l0.67,0.85l1.31,0.21l0.58,0.58l-1.34,0.17l-2.18,-0.32l-3.6,0.89l-2.71,3.25l0.35,0.9l0.59,-0.0l0.55,-0.6l-1.36,4.65l0.29,3.09l0.67,1.58l0.61,0.45l1.77,-0.44l1.6,-1.96l0.14,-2.21l-0.82,-1.96l0.11,-1.13l1.19,-2.37l0.44,-0.33l0.48,0.75l0.4,-0.29l0.4,-1.37l0.6,-0.47l0.24,-0.8l1.69,0.49l1.65,1.08l-0.03,2.37l-1.27,1.13l-0.0,1.13l0.87,0.36l1.66,-1.29l0.5,0.17l0.5,2.6l-2.49,3.75l0.17,0.61l1.54,0.62l1.48,0.17l1.92,-0.44l4.72,-2.15l2.16,-1.8l-0.05,-1.24l0.75,-0.22l3.92,0.36l2.12,-1.05l0.21,-0.4l-0.28,-1.48l3.27,-2.4l8.32,-0.02l0.56,-0.82l1.9,-0.77l0.93,-1.51l0.74,-2.37l1.58,-1.98l0.92,0.62l1.47,-0.47l0.8,0.66l-0.0,4.09l1.96,2.6l-2.34,1.31l-5.37,2.09l-1.83,2.72l0.02,1.79l0.83,1.59l0.54,0.23l-6.19,0.94l-2.2,0.89l-0.23,0.48l0.45,0.29l2.99,-0.46l-2.19,0.56l-1.13,0.0l-0.15,-0.32l-0.48,0.08l-0.76,0.82l0.22,0.67l0.32,0.06l-0.41,1.62l-1.27,1.58l-1.48,-1.07l-0.49,-0.04l-0.16,0.46l0.52,1.58l0.61,0.59l0.03,0.79l-0.95,1.38l-1.21,-1.22l-0.27,-2.27l-0.35,-0.35l-0.42,0.25l-0.48,1.27l0.33,1.41l-0.97,-0.27l-0.48,0.24l0.18,0.5l1.52,0.83l0.1,2.52l0.79,0.51l0.52,3.42l-1.42,1.88l-2.47,0.8l-1.71,1.66l-1.31,0.25l-1.27,1.03l-0.43,0.99l-2.69,1.78l-2.64,3.03l-0.45,2.12l0.45,2.08l0.85,2.38l1.09,1.9l0.04,1.2l1.16,3.06l-0.18,2.69l-0.55,1.43l-0.47,0.21l-0.89,-0.23l-0.49,-1.18l-0.87,-0.56l-2.75,-5.16l0.48,-1.68l-0.72,-1.78l-2.01,-2.38l-1.12,-0.53l-2.72,1.18l-1.47,-1.35l-1.57,-0.68l-2.99,0.31l-2.17,-0.3l-2.0,0.19l-1.15,0.46l-0.19,0.58l0.39,0.63l0.14,1.34l-0.84,-0.2l-0.84,0.46l-1.58,-0.07l-2.08,-1.44l-2.09,0.33l-1.91,-0.62l-3.73,0.84l-2.39,2.07l-2.54,1.22l-1.45,1.41l-0.61,1.38l0.34,3.71l-0.29,0.02l-3.5,-1.33l-1.25,-3.11l-1.44,-1.5l-2.24,-3.56l-1.76,-1.09l-2.27,-0.01l-1.71,2.07l-1.76,-0.69l-1.16,-0.74l-1.52,-2.98l-3.93,-3.16l-4.34,-0.0l-0.4,0.4l-0.0,0.74l-6.5,0.02l-9.02,-3.14l-0.34,-0.71l-5.7,0.49l-0.43,-1.29l-1.62,-1.61l-1.14,-0.38l-0.55,-0.88l-1.28,-0.13l-1.01,-0.77l-2.22,-0.27l-0.43,-0.3l-0.36,-1.58l-2.4,-2.83l-2.01,-3.85l-0.06,-0.9l-2.92,-3.26l-0.33,-2.29l-1.3,-1.66l0.52,-2.37l-0.09,-2.57l-0.78,-2.3l0.95,-2.82l0.61,-5.68l-0.47,-4.27l-1.46,-4.08l3.19,0.79l1.26,2.83l0.69,0.08l0.69,-1.14l-1.1,-4.79l68.76,-0.0l0.4,-0.4l0.14,-0.86ZM32.44,67.52l1.73,1.97l0.55,0.05l0.99,-0.79l3.65,0.24l-0.09,0.62l0.32,0.45l3.83,0.77l2.61,-0.43l5.19,1.4l4.84,0.43l1.89,0.57l3.42,-0.7l6.14,1.87l-0.03,38.06l0.38,0.4l2.39,0.11l2.31,0.98l3.9,3.99l0.55,0.04l2.4,-2.03l2.16,-1.04l1.2,1.71l3.95,3.14l4.09,6.63l4.2,2.29l0.06,1.83l-1.02,1.23l-1.16,-1.08l-2.04,-1.03l-0.67,-2.89l-3.28,-3.03l-1.65,-3.57l-6.35,-0.32l-2.82,-1.01l-5.26,-3.85l-6.77,-2.04l-3.53,0.3l-4.81,-1.69l-3.25,-1.63l-2.78,0.8l-0.28,0.46l0.44,2.21l-3.91,0.96l-2.26,1.27l-2.3,0.65l-0.27,-1.65l1.05,-3.42l2.49,-1.09l0.16,-0.6l-0.69,-0.96l-0.55,-0.1l-3.19,2.12l-1.78,2.56l-3.55,2.61l-0.04,0.61l1.56,1.52l-2.07,2.29l-5.11,2.57l-0.77,1.66l-3.76,1.77l-0.92,1.73l-2.69,1.38l-1.81,-0.22l-6.95,3.32l-3.97,0.91l4.85,-2.5l2.59,-1.86l3.26,-0.52l1.19,-1.4l3.42,-2.1l2.59,-2.27l0.42,-2.68l1.23,-2.1l-0.04,-0.46l-0.45,-0.11l-2.68,1.03l-0.63,-0.49l-0.53,0.03l-1.05,1.04l-1.36,-1.54l-0.66,0.08l-0.32,0.62l-0.58,-1.14l-0.56,-0.16l-2.41,1.42l-1.07,-0.0l-0.17,-1.75l0.3,-1.71l-1.61,-1.33l-3.41,0.59l-1.96,-1.63l-1.57,-0.84l-0.15,-2.21l-1.7,-1.43l0.82,-1.88l1.99,-2.12l0.88,-1.92l1.71,-0.24l2.04,0.51l1.87,-1.77l1.91,0.25l1.91,-1.23l0.17,-0.43l-0.47,-1.82l-1.07,-0.7l1.39,-1.17l0.12,-0.45l-0.39,-0.26l-1.65,0.07l-2.66,0.88l-0.75,0.78l-1.92,-0.8l-3.46,0.44l-3.44,-0.91l-1.06,-1.61l-2.65,-1.99l2.91,-1.43l5.5,-2.0l1.52,0.0l-0.26,1.62l0.41,0.46l5.29,-0.16l0.3,-0.65l-2.03,-2.59l-3.14,-1.68l-1.79,-2.12l-2.4,-1.83l-3.09,-1.24l1.04,-1.69l4.23,-0.14l3.36,-2.07l0.73,-2.27l2.39,-1.99l2.42,-0.52l4.65,-1.97l2.46,0.23l3.71,-2.35l3.5,0.89ZM37.6,123.41l-2.25,1.23l-0.95,-0.69l-0.29,-1.24l3.21,-1.63l1.42,0.21l0.67,0.7l-1.8,1.42ZM31.06,234.03l0.98,0.47l0.74,0.87l-1.77,1.07l-0.44,-1.53l0.49,-0.89ZM29.34,232.07l0.18,0.05l0.08,0.05l-0.16,0.03l-0.11,-0.14ZM25.16,230.17l0.05,-0.03l0.18,0.22l-0.13,-0.01l-0.1,-0.18ZM5.89,113.26l-1.08,0.41l-2.21,-1.12l1.53,-0.4l1.62,0.28l0.14,0.83Z"
                                                            data-code="US" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M489.16,122.85l0.96,0.66l0.22,1.65l0.68,1.76l-3.65,1.7l-2.23,-1.58l-1.29,-0.26l-0.68,-0.77l-2.42,0.34l-4.16,-0.23l-2.47,0.9l0.06,-1.98l1.13,-2.06l1.95,-1.02l2.12,2.58l2.01,-0.07l0.38,-0.33l0.44,-2.52l1.76,-0.53l3.06,1.7l2.15,0.07Z"
                                                            data-code="LV" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M286.85,372.74l-0.92,1.5l-2.59,1.44l-1.69,-0.52l-1.42,0.26l-2.39,-1.19l-1.52,0.08l-1.27,-1.3l0.16,-1.5l0.56,-0.79l-0.02,-2.73l1.21,-4.74l1.19,-0.21l2.37,2.0l1.08,0.03l4.36,3.17l1.22,1.6l-0.96,1.5l0.61,1.4Z"
                                                            data-code="UY" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M510.37,198.01l-0.88,0.51l1.82,-3.54l0.62,0.08l0.22,0.61l-1.13,0.88l-0.65,1.47Z"
                                                            data-code="LB" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M689.54,248.53l-1.76,-0.74l-0.49,0.15l-0.94,1.46l-1.32,-0.64l0.62,-0.98l0.11,-2.17l-2.04,-2.42l-0.25,-2.65l-1.9,-2.1l-2.15,-0.31l-0.78,0.91l-1.12,0.06l-1.05,-0.4l-2.06,1.2l-0.04,-1.59l0.61,-2.68l-0.36,-0.49l-1.35,-0.1l-0.11,-1.23l-0.96,-0.88l1.96,-1.89l0.39,0.36l1.33,0.07l0.42,-0.45l-0.34,-2.66l0.7,-0.21l1.28,1.81l1.11,2.35l0.36,0.23l2.82,0.02l0.71,1.67l-1.39,0.65l-0.72,0.93l0.13,0.6l2.91,1.51l3.6,5.25l1.88,1.78l0.56,1.62l-0.35,1.96Z"
                                                            data-code="LA" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M724.01,226.68l-0.74,1.48l-0.9,-1.52l-0.25,-1.74l1.38,-2.44l1.73,-1.74l0.64,0.44l-1.85,5.52Z"
                                                            data-code="TW" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M266.64,259.32l0.28,-1.16l1.13,-0.22l-0.06,1.2l-1.35,0.18Z"
                                                            data-code="TT" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M513.21,175.47l3.64,1.17l3.05,-0.44l2.1,0.26l3.11,-1.56l2.46,-0.13l2.19,1.33l0.33,0.82l-0.22,1.33l0.25,0.44l2.28,1.13l-1.17,0.57l-0.21,0.45l0.75,3.2l-0.41,1.16l1.13,1.92l-0.55,0.22l-0.9,-0.67l-2.91,-0.37l-1.24,0.46l-4.23,0.41l-2.81,1.05l-1.91,0.01l-1.52,-0.53l-2.58,0.75l-0.66,-0.45l-0.62,0.3l-0.12,1.45l-0.89,0.84l-0.47,-0.67l0.79,-1.3l-0.41,-0.2l-1.43,0.23l-2.0,-0.63l-2.02,1.65l-3.51,0.3l-2.13,-1.53l-2.7,-0.1l-0.86,1.24l-1.38,0.27l-2.29,-1.44l-2.71,-0.01l-1.37,-2.65l-1.68,-1.52l1.07,-1.99l-0.09,-0.49l-1.27,-1.12l2.37,-2.41l3.7,-0.11l1.28,-2.24l4.49,0.37l3.21,-1.97l2.81,-0.82l3.99,-0.06l4.29,2.07ZM488.79,176.72l-1.72,1.31l-0.5,-0.88l1.37,-2.57l-0.7,-0.85l1.7,-0.63l1.8,0.34l0.46,1.17l1.76,0.78l-2.87,0.32l-1.3,1.01Z"
                                                            data-code="TR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M624.16,268.99l-1.82,0.48l-0.99,-1.67l-0.42,-3.46l0.95,-3.43l1.21,0.98l2.26,4.19l-0.34,2.33l-0.85,0.58Z"
                                                            data-code="LK" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M448.1,188.24l-1.0,1.27l-0.02,1.32l0.84,0.88l-0.28,2.09l-1.53,1.32l-0.12,0.42l0.48,1.54l1.42,0.32l0.53,1.11l0.9,0.52l-0.11,1.67l-3.54,2.64l-0.1,2.38l-0.58,0.3l-0.96,-4.45l-1.54,-1.25l-0.16,-0.78l-1.92,-1.56l-0.18,-1.76l1.51,-1.62l0.59,-2.34l-0.38,-2.78l0.42,-1.21l2.45,-1.05l1.29,0.26l-0.06,1.11l0.58,0.38l1.47,-0.73Z"
                                                            data-code="TN" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M734.55,307.93l-0.1,-0.97l4.5,-0.86l-2.82,1.28l-1.59,0.55Z"
                                                            data-code="TL" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M553.03,173.76l-0.04,0.34l-0.09,-0.22l0.13,-0.12ZM555.87,172.66l0.45,-0.1l1.48,0.74l2.06,2.43l4.07,-0.18l0.38,-0.51l-0.32,-1.19l1.92,-0.94l1.91,-1.59l2.94,1.39l0.43,2.47l1.19,0.67l2.58,-0.13l0.62,0.4l1.32,3.12l4.54,3.44l2.67,1.45l3.06,1.14l-0.04,1.05l-1.33,-0.75l-0.59,0.19l-0.32,0.84l-2.2,0.81l-0.46,2.13l-1.21,0.74l-1.91,0.42l-0.73,1.33l-1.56,0.31l-2.22,-0.94l-0.2,-2.17l-0.38,-0.36l-1.73,-0.09l-2.76,-2.46l-2.14,-0.4l-2.84,-1.48l-1.78,-0.27l-1.24,0.53l-1.57,-0.08l-2.0,1.69l-1.7,0.43l-0.36,-1.58l0.36,-2.98l-0.22,-0.4l-1.65,-0.84l0.54,-1.69l-0.34,-0.52l-1.22,-0.13l0.36,-1.64l2.22,0.59l2.2,-0.95l0.12,-0.65l-1.77,-1.74l-0.66,-1.57Z"
                                                            data-code="TM" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M597.75,178.82l-2.54,-0.44l-0.47,0.34l-0.24,1.7l0.43,0.45l2.64,-0.22l3.18,0.95l4.39,-0.41l0.56,2.37l0.52,0.29l0.67,-0.24l1.11,0.49l0.21,2.13l-3.76,-0.21l-1.8,1.32l-1.76,0.74l-0.61,-0.58l0.21,-2.23l-0.64,-0.49l-0.07,-0.93l-1.36,-0.66l-0.45,0.07l-1.08,1.01l-0.55,1.48l-1.31,-0.05l-0.95,1.16l-0.9,-0.35l-1.86,0.74l1.26,-2.83l-0.54,-2.17l-1.67,-0.82l0.33,-0.66l2.18,-0.04l1.19,-1.63l0.76,-1.79l2.43,-0.5l-0.26,1.0l0.73,1.05Z"
                                                            data-code="TJ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M491.06,363.48l-0.49,0.15l-1.49,-1.67l1.1,-1.43l2.19,-1.44l1.51,1.27l-0.98,1.82l-1.23,0.38l-0.62,0.93Z"
                                                            data-code="LS" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M670.27,255.86l-1.41,3.87l0.15,2.0l0.38,0.36l1.38,0.07l0.9,2.04l0.55,2.34l1.4,1.44l1.61,0.38l0.96,0.97l-0.5,0.64l-1.1,0.2l-0.34,-1.18l-2.04,-1.1l-0.63,0.23l-0.63,-0.62l-0.48,-1.3l-2.56,-2.63l-0.73,0.41l0.95,-3.89l2.16,-4.22ZM670.67,254.77l-0.92,-2.18l-0.26,-2.61l-2.14,-3.06l0.71,-0.49l0.89,-2.59l-3.61,-5.45l0.87,-0.51l1.05,-2.58l1.74,-0.18l2.6,-1.59l0.76,0.56l0.13,1.39l0.37,0.36l1.23,0.09l-0.51,2.28l0.05,2.42l0.6,0.34l2.43,-1.42l0.77,0.39l1.47,-0.07l0.71,-0.88l1.48,0.14l1.71,1.88l0.25,2.65l1.92,2.11l-0.1,1.89l-0.61,0.86l-2.22,-0.33l-3.5,0.64l-1.6,2.12l0.36,2.58l-1.51,-0.79l-1.84,-0.01l0.28,-1.52l-0.4,-0.47l-2.21,0.01l-0.4,0.37l-0.19,2.74l-0.34,0.93Z"
                                                            data-code="TH" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M596.68,420.38l-3.2,0.18l-0.05,-1.26l0.39,-1.41l1.3,0.78l2.08,0.35l-0.52,1.36Z"
                                                            data-code="TF" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M422.7,257.63l-0.09,1.23l1.53,1.52l0.08,1.09l0.5,0.65l-0.11,5.62l0.49,1.47l-1.31,0.35l-1.02,-2.13l-0.18,-1.12l0.53,-2.19l-0.63,-1.16l-0.22,-3.68l-1.01,-1.4l0.07,-0.28l1.37,0.03Z"
                                                            data-code="TG" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M480.25,235.49l0.12,9.57l-2.1,0.05l-1.14,1.89l-0.69,1.63l0.34,0.73l-0.66,0.91l0.24,0.89l-0.86,1.95l0.45,0.5l0.6,-0.1l0.34,0.64l0.03,1.38l0.9,1.04l-1.45,0.43l-1.27,1.03l-1.83,2.76l-2.16,1.07l-2.31,-0.15l-0.86,0.25l-0.26,0.49l0.17,0.61l-2.11,1.68l-2.85,0.87l-1.09,-0.57l-0.73,0.66l-1.12,0.1l-1.1,-3.12l-1.25,-0.64l-1.22,-1.22l0.29,-0.64l3.01,0.04l0.35,-0.6l-1.3,-2.2l-0.08,-3.31l-0.97,-1.66l0.22,-1.04l-0.38,-0.48l-1.22,-0.04l0.0,-1.25l-0.98,-1.07l0.96,-3.01l3.25,-2.65l0.13,-3.33l0.95,-5.18l0.52,-1.07l-0.1,-0.48l-0.91,-0.78l-0.2,-0.96l-0.8,-0.58l-0.55,-3.65l2.1,-1.2l19.57,9.83Z"
                                                            data-code="TD" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M483.48,203.15l-0.75,1.1l0.29,1.39l-0.6,1.83l0.73,2.14l0.0,24.12l-2.48,0.01l-0.41,0.85l-19.41,-9.76l-4.41,2.28l-1.37,-1.33l-3.82,-1.1l-1.14,-1.65l-1.98,-1.23l-1.22,0.32l-0.66,-1.11l-0.17,-1.26l-1.28,-1.69l0.87,-1.19l-0.07,-4.34l0.43,-2.27l-0.86,-3.45l1.13,-0.76l0.22,-1.16l-0.2,-1.03l3.48,-2.61l0.29,-1.94l2.45,0.8l1.18,-0.21l1.98,0.44l3.15,1.18l1.37,2.54l5.72,1.67l2.64,1.35l1.61,-0.72l1.29,-1.34l-0.44,-2.34l0.66,-1.13l1.67,-1.21l1.57,-0.35l3.14,0.53l1.08,1.28l3.99,0.78l0.36,0.54Z"
                                                            data-code="LY" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M550.76,223.97l1.88,-0.4l3.84,0.02l4.78,-4.75l0.19,0.36l0.26,1.58l-0.81,0.01l-0.39,0.35l-0.08,2.04l-0.81,0.63l-0.01,0.96l-0.66,0.99l-0.39,1.41l-7.08,-1.25l-0.7,-1.96Z"
                                                            data-code="AE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M240.68,256.69l0.53,0.75l-0.02,1.06l-1.07,1.78l0.95,2.0l0.42,0.22l1.4,-0.44l0.56,-1.83l-0.77,-1.17l-0.1,-1.47l2.82,-0.93l0.26,-0.49l-0.28,-0.96l0.3,-0.28l0.66,1.31l1.96,0.26l1.4,1.22l0.08,0.68l0.39,0.35l4.81,-0.22l1.49,1.11l1.92,0.31l1.67,-0.84l0.22,-0.6l3.44,-0.14l-0.17,0.55l0.86,1.19l2.19,0.35l1.67,1.1l0.37,1.86l0.41,0.32l1.55,0.17l-1.66,1.35l-0.22,0.92l0.65,0.97l-1.67,0.54l-0.3,0.4l0.04,0.99l-0.56,0.57l-0.01,0.55l1.85,2.27l-0.66,0.69l-4.47,1.29l-0.72,0.54l-3.69,-0.9l-0.71,0.27l-0.02,0.7l0.91,0.53l-0.08,1.54l0.35,1.58l0.35,0.31l1.66,0.17l-1.3,0.52l-0.48,1.13l-2.68,0.91l-0.6,0.77l-1.57,0.13l-1.17,-1.13l-0.8,-2.52l-1.25,-1.26l1.02,-1.23l-1.29,-2.95l0.18,-1.62l1.0,-2.21l-0.2,-0.49l-1.14,-0.46l-4.02,0.36l-1.82,-2.1l-1.57,-0.33l-2.99,0.22l-1.06,-0.97l0.25,-1.23l-0.2,-1.01l-0.59,-0.69l-0.29,-1.06l-1.08,-0.39l0.78,-2.79l1.9,-2.11Z"
                                                            data-code="VE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M600.7,188.88l-1.57,1.3l-0.1,0.48l0.8,2.31l-1.09,1.04l-0.03,1.27l-0.48,0.71l-2.16,-0.08l-0.37,0.59l0.78,1.48l-1.38,0.69l-1.06,1.69l0.06,1.7l-0.65,0.52l-0.91,-0.21l-1.91,0.36l-0.48,0.77l-1.88,0.13l-1.4,1.56l-0.18,2.32l-2.91,1.02l-1.65,-0.23l-0.71,0.55l-1.41,-0.3l-2.41,0.39l-3.52,-1.17l1.96,-2.35l-0.21,-1.78l-0.3,-0.34l-1.63,-0.4l-0.19,-1.58l-0.75,-2.03l0.95,-1.36l-0.19,-0.6l-0.73,-0.28l1.47,-4.8l2.14,0.9l2.12,-0.36l0.74,-1.34l1.77,-0.39l1.54,-0.92l0.63,-2.31l1.87,-0.5l0.49,-0.81l0.94,0.56l2.13,0.11l2.55,0.92l1.95,-0.83l0.65,0.43l0.56,-0.13l0.69,-1.12l1.57,-0.08l0.72,-1.66l0.79,-0.74l0.8,0.39l-0.17,0.56l0.71,0.58l-0.08,2.39l1.11,0.95ZM601.37,188.71l1.73,-0.71l1.43,-1.18l4.03,0.35l-2.23,0.74l-4.95,0.8Z"
                                                            data-code="AF" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M530.82,187.47l0.79,0.66l1.26,-0.28l1.46,3.08l1.63,0.94l0.14,1.23l-1.22,1.05l-0.53,2.52l1.73,2.67l3.12,1.62l1.15,1.88l-0.38,1.85l0.39,0.48l0.41,-0.0l0.02,1.07l0.76,0.94l-2.47,-0.1l-1.71,2.44l-4.31,-0.2l-7.02,-5.48l-3.73,-1.94l-2.88,-0.73l-0.85,-2.87l5.45,-3.02l0.95,-3.43l-0.19,-1.96l1.27,-0.7l1.22,-1.7l0.87,-0.36l2.69,0.34Z"
                                                            data-code="IQ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M384.14,88.06l-0.37,2.61l2.54,2.51l-2.9,2.75l-9.19,3.4l-9.25,-1.66l1.7,-1.22l-0.1,-0.7l-4.05,-1.47l2.96,-0.53l0.33,-0.43l-0.11,-1.2l-0.33,-0.36l-4.67,-0.85l1.28,-2.04l3.45,-0.56l3.77,2.72l0.44,0.02l3.64,-2.16l3.3,1.08l3.98,-2.16l3.58,0.26Z"
                                                            data-code="IS" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M533.43,187.16l-1.27,-2.15l0.42,-0.98l-0.71,-3.04l1.03,-0.5l0.33,0.83l1.26,1.35l2.05,0.51l1.11,-0.16l2.89,-2.11l0.62,-0.14l0.39,0.46l-0.72,1.2l0.06,0.49l1.56,1.53l0.65,0.04l0.67,1.81l2.56,0.83l1.87,1.48l3.69,0.49l3.91,-0.76l0.47,-0.73l2.17,-0.6l1.66,-1.54l1.51,0.08l1.18,-0.53l1.59,0.24l2.83,1.48l1.88,0.3l2.77,2.47l1.77,0.18l0.18,1.99l-1.68,5.49l0.24,0.5l0.61,0.23l-0.82,1.48l0.8,2.18l0.19,1.71l0.3,0.34l1.63,0.4l0.15,1.32l-2.15,2.35l-0.01,0.53l2.21,3.03l2.34,1.24l0.06,2.14l1.24,0.72l0.11,0.69l-3.31,1.27l-1.08,3.03l-9.68,-1.68l-0.99,-3.05l-1.43,-0.73l-2.17,0.46l-2.47,1.26l-2.83,-0.82l-2.46,-2.02l-2.41,-0.8l-3.42,-6.06l-0.48,-0.2l-1.18,0.39l-1.44,-0.82l-0.5,0.08l-0.65,0.74l-0.97,-1.01l-0.02,-1.31l-0.71,-0.39l0.26,-1.81l-1.29,-2.11l-3.13,-1.63l-1.58,-2.43l0.5,-1.9l1.31,-1.26l-0.19,-1.66l-1.74,-1.1l-1.57,-3.3Z"
                                                            data-code="IR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M536.99,182.33l-0.28,0.03l-1.23,-2.13l-0.93,0.01l-0.62,-0.66l-0.69,-0.07l-0.96,-0.81l-1.56,-0.62l0.19,-1.12l-0.26,-0.79l2.72,-0.36l1.09,1.01l-0.17,0.92l1.02,0.78l-0.47,0.62l0.08,0.56l2.04,1.23l0.04,1.4Z"
                                                            data-code="AM" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M451.59,158.63l3.48,0.94l-0.21,1.17l0.3,0.83l-1.49,-0.24l-2.04,1.1l-0.21,0.39l0.13,1.45l-0.25,1.12l0.82,1.57l2.39,1.63l1.31,2.54l2.79,2.43l2.05,0.08l0.21,0.23l-0.39,0.33l0.09,0.67l4.05,1.97l2.17,1.76l-0.16,0.36l-1.17,-1.08l-2.18,-0.49l-0.44,0.2l-1.05,1.91l0.14,0.54l1.57,0.95l-0.19,0.98l-1.06,0.33l-1.25,2.34l-0.37,0.08l0.0,-0.33l1.0,-2.45l-1.73,-3.17l-1.12,-0.51l-0.88,-1.33l-1.51,-0.51l-1.27,-1.25l-1.75,-0.18l-4.12,-3.21l-1.62,-1.65l-1.03,-3.19l-3.53,-1.36l-1.3,0.51l-1.69,1.41l0.16,-0.72l-0.28,-0.47l-1.14,-0.33l-0.53,-1.96l0.72,-0.78l0.04,-0.48l-0.65,-1.17l0.8,0.39l1.4,-0.23l1.11,-0.84l0.52,0.35l1.19,-0.1l0.75,-1.2l1.53,0.33l1.36,-0.56l0.35,-1.14l1.08,0.32l0.68,-0.64l1.98,-0.44l0.42,0.82ZM459.19,184.75l-0.65,1.65l0.32,1.05l-0.31,0.89l-1.5,-0.85l-4.5,-1.67l0.19,-0.82l2.67,0.23l3.78,-0.48ZM443.93,176.05l1.18,1.66l-0.3,3.32l-1.06,-0.01l-0.77,0.73l-0.53,-0.44l-0.1,-3.37l-0.39,-1.22l1.04,0.01l0.92,-0.68Z"
                                                            data-code="IT" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M690.56,230.25l-2.7,1.82l-2.09,2.46l-0.63,1.95l4.31,6.45l2.32,1.65l1.43,1.94l1.11,4.59l-0.32,4.24l-1.93,1.54l-2.84,1.61l-2.11,2.15l-2.73,2.06l-0.59,-1.05l0.63,-1.53l-0.13,-0.47l-1.34,-1.04l1.51,-0.71l2.55,-0.18l0.3,-0.63l-0.82,-1.14l4.0,-2.07l0.31,-3.05l-0.57,-1.77l0.42,-2.66l-0.73,-1.97l-1.86,-1.76l-3.63,-5.29l-2.72,-1.46l0.36,-0.47l1.5,-0.64l0.21,-0.52l-0.97,-2.27l-0.37,-0.24l-2.83,-0.02l-2.24,-3.9l0.83,-0.4l4.39,-0.29l2.06,-1.31l1.15,0.89l1.88,0.4l-0.17,1.51l1.35,1.16l1.67,0.45Z"
                                                            data-code="VN" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M249.29,428.93l-2.33,-0.52l-5.83,-0.43l-0.89,-1.66l0.05,-2.37l-0.45,-0.4l-1.43,0.18l-0.67,-0.91l-0.2,-3.13l1.88,-1.47l0.79,-2.04l-0.25,-1.7l1.3,-2.68l0.91,-4.15l-0.22,-1.69l0.85,-0.45l0.2,-0.44l-0.27,-1.16l-0.98,-0.68l0.59,-0.92l-0.05,-0.5l-1.04,-1.07l-0.52,-3.1l0.97,-0.86l-0.42,-3.58l1.2,-5.43l1.38,-0.98l0.16,-0.43l-0.75,-2.79l-0.01,-2.43l1.78,-1.75l0.06,-2.57l1.43,-2.85l0.01,-2.58l-0.69,-0.74l-1.09,-4.52l1.47,-2.7l-0.18,-2.79l0.85,-2.35l1.59,-2.46l1.73,-1.64l0.05,-0.52l-0.6,-0.84l0.44,-0.85l-0.07,-4.19l2.7,-1.44l0.86,-2.75l-0.21,-0.71l1.76,-2.01l2.9,0.57l1.38,1.78l0.68,-0.08l0.87,-1.87l2.39,0.09l4.95,4.77l2.17,0.49l3.0,1.92l2.47,1.0l0.25,0.82l-2.37,3.93l0.23,0.59l5.39,1.16l2.12,-0.44l2.45,-2.16l0.5,-2.38l0.76,-0.31l0.98,1.2l-0.04,1.8l-3.67,2.51l-2.85,2.66l-3.43,3.88l-1.3,5.07l0.01,2.72l-0.54,0.73l-0.36,3.28l3.14,2.64l-0.16,2.11l1.4,1.11l-0.1,1.09l-2.29,3.52l-3.55,1.49l-4.92,0.6l-2.71,-0.29l-0.43,0.51l0.5,1.65l-0.49,2.1l0.38,1.42l-1.19,0.83l-2.36,0.38l-2.3,-1.04l-1.38,0.83l0.41,3.64l1.69,0.91l1.4,-0.71l0.36,0.76l-2.04,0.86l-2.01,1.89l-0.97,4.63l-2.34,0.1l-2.09,1.78l-0.61,2.75l2.46,2.31l2.17,0.63l-0.7,2.32l-2.83,1.73l-1.73,3.86l-2.17,1.22l-1.16,1.67l0.75,3.76l1.04,1.28ZM256.71,438.88l-2.0,0.15l-1.4,-1.22l-3.82,-0.1l-0.0,-5.83l1.6,3.05l3.26,2.07l3.08,0.78l-0.71,1.1Z"
                                                            data-code="AR" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M705.8,353.26l0.26,0.04l0.17,-0.47l-0.48,-1.42l0.92,1.11l0.45,0.15l0.27,-0.39l-0.1,-1.56l-1.98,-3.63l1.09,-3.31l-0.24,-1.57l0.34,-0.62l0.38,1.06l0.43,-0.19l0.99,-1.7l1.91,-0.83l1.29,-1.15l1.81,-0.91l0.96,-0.17l0.92,0.26l1.92,-0.95l1.47,-0.28l1.03,-0.8l1.43,0.04l2.78,-0.84l1.36,-1.15l0.71,-1.45l1.41,-1.26l0.3,-2.58l1.27,-1.59l0.78,1.65l0.54,0.19l1.07,-0.51l0.15,-0.6l-0.73,-1.0l0.45,-0.71l0.78,0.39l0.58,-0.3l0.28,-1.82l1.87,-2.14l1.12,-0.39l0.28,-0.58l0.62,0.17l0.53,-0.73l1.87,-0.57l1.65,1.05l1.35,1.48l3.39,0.38l0.43,-0.54l-0.46,-1.23l1.05,-1.79l1.04,-0.61l0.14,-0.55l-0.25,-0.41l0.88,-1.17l1.31,-0.77l1.3,0.27l2.1,-0.48l0.31,-0.4l-0.05,-1.3l-0.92,-0.77l1.48,0.56l1.41,1.07l2.11,0.65l0.81,-0.2l1.4,0.7l1.69,-0.66l0.8,0.19l0.64,-0.33l0.71,0.77l-1.33,1.94l-0.71,0.07l-0.35,0.51l0.24,0.86l-1.52,2.35l0.12,1.05l2.15,1.65l1.97,0.85l3.04,2.36l1.97,0.65l0.55,0.88l2.72,0.85l1.84,-1.1l2.07,-5.97l-0.42,-3.59l0.3,-1.73l0.47,-0.87l-0.31,-0.68l1.09,-3.28l0.46,-0.47l0.4,0.71l0.16,1.51l0.65,0.52l0.16,1.04l0.85,1.21l0.12,2.38l0.9,2.0l0.57,0.18l1.3,-0.78l1.69,1.7l-0.2,1.08l0.53,2.2l0.39,1.3l0.68,0.48l0.6,1.95l-0.19,1.48l0.81,1.76l6.01,3.69l-0.11,0.76l1.38,1.58l0.95,2.77l0.58,0.22l0.72,-0.41l0.8,0.9l0.61,0.01l0.46,2.41l4.81,4.71l0.66,2.02l-0.07,3.31l1.14,2.2l-0.13,2.24l-1.1,3.68l0.03,1.64l-0.47,1.89l-1.05,2.4l-1.9,1.47l-1.72,3.51l-2.38,6.09l-0.24,2.82l-1.14,0.8l-2.85,0.15l-2.31,1.19l-2.51,2.25l-3.09,-1.57l0.3,-1.15l-0.54,-0.47l-1.5,0.63l-2.01,1.94l-7.12,-2.18l-1.48,-1.63l-1.14,-3.74l-1.45,-1.26l-1.81,-0.26l0.56,-1.18l-0.61,-2.1l-0.72,-0.1l-1.14,1.82l-0.9,0.21l0.63,-0.82l0.36,-1.55l0.92,-1.31l-0.13,-2.34l-0.7,-0.22l-2.0,2.34l-1.51,0.93l-0.94,2.01l-1.35,-0.81l-0.02,-1.52l-1.57,-2.04l-1.09,-0.88l0.24,-0.33l-0.14,-0.59l-3.21,-1.69l-1.83,-0.12l-2.54,-1.35l-4.58,0.28l-6.02,1.9l-2.53,-0.13l-2.62,1.41l-2.13,0.63l-1.49,2.6l-3.49,0.31l-2.29,-0.5l-3.48,0.43l-1.6,1.47l-0.81,-0.04l-2.37,1.63l-3.26,-0.1l-3.72,-2.21l0.04,-1.05l1.19,-0.46l0.49,-0.89l0.21,-2.97l-0.28,-1.64l-1.34,-2.86l-0.38,-1.47l0.05,-1.72l-0.95,-1.7l-0.18,-0.97l-1.01,-0.99l-0.29,-1.98l-1.13,-1.75ZM784.92,393.44l2.65,1.02l3.23,-0.96l1.09,0.14l0.15,3.06l-0.85,1.13l-0.17,1.63l-0.87,-0.24l-1.57,1.91l-1.68,-0.18l-1.4,-2.36l-0.37,-2.04l-1.39,-2.51l0.04,-0.8l1.15,0.18Z"
                                                            data-code="AU" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M507.76,203.05l0.4,-0.78l0.18,0.4l-0.33,1.03l0.52,0.44l0.68,-0.22l-0.86,3.6l-1.16,-3.32l0.59,-0.74l-0.03,-0.41ZM508.73,200.34l0.37,-1.02l0.64,0.0l0.52,-0.51l-0.49,1.53l-0.56,-0.24l-0.48,0.23Z"
                                                            data-code="IL" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M623.34,207.03l-1.24,1.04l-0.97,2.55l0.22,0.51l8.04,3.87l3.42,0.37l1.57,1.38l4.92,0.88l2.18,-0.04l0.38,-0.3l0.29,-1.24l-0.32,-1.64l0.14,-0.87l0.82,-0.31l0.45,2.48l2.28,1.02l1.77,-0.38l4.14,0.1l0.38,-0.36l0.18,-1.66l-0.5,-0.65l1.37,-0.29l2.25,-1.99l2.7,-1.62l1.93,0.62l1.8,-0.98l0.79,1.14l-0.68,0.91l0.26,0.63l2.42,0.36l0.09,0.47l-0.83,0.75l0.13,1.07l-1.52,-0.29l-3.24,1.86l-0.13,1.78l-1.32,2.14l-0.18,1.39l-0.93,1.82l-1.64,-0.5l-0.52,0.37l-0.09,2.63l-0.56,1.11l0.19,0.81l-0.53,0.27l-1.18,-3.73l-1.08,-0.27l-0.38,0.31l-0.24,1.0l-0.66,-0.66l0.54,-1.06l1.22,-0.34l1.15,-2.25l-0.24,-0.56l-1.57,-0.47l-4.34,-0.28l-0.18,-1.56l-0.35,-0.35l-1.11,-0.12l-1.91,-1.12l-0.56,0.17l-0.88,1.82l0.11,0.49l1.36,1.07l-1.09,0.69l-0.69,1.11l0.18,0.56l1.24,0.57l-0.32,1.54l0.85,1.94l0.36,2.01l-0.22,0.59l-4.58,0.52l-0.33,0.42l0.13,1.8l-1.17,1.36l-3.65,1.81l-2.79,3.03l-4.32,3.28l-0.18,1.27l-4.65,1.79l-0.77,2.16l0.64,5.3l-1.06,2.49l-0.01,3.94l-1.24,0.28l-1.14,1.93l0.39,0.84l-1.68,0.53l-1.04,1.83l-0.65,0.47l-2.06,-2.05l-2.1,-6.02l-2.2,-3.64l-1.05,-4.75l-2.29,-3.57l-1.76,-8.2l0.01,-3.11l-0.49,-2.53l-0.55,-0.29l-3.53,1.52l-1.53,-0.27l-2.86,-2.77l0.85,-0.67l0.08,-0.55l-0.74,-1.03l-2.67,-2.06l1.24,-1.32l5.34,0.01l0.39,-0.49l-0.5,-2.29l-1.42,-1.46l-0.27,-1.93l-1.43,-1.2l2.31,-2.37l3.05,0.06l2.62,-2.85l1.6,-2.81l2.4,-2.73l0.07,-2.04l1.97,-1.48l-0.02,-0.65l-1.93,-1.31l-0.82,-1.78l-0.8,-2.21l0.9,-0.89l3.59,0.65l2.92,-0.42l2.33,-2.19l2.31,2.85l-0.24,2.13l0.99,1.59l-0.05,0.82l-1.34,-0.28l-0.47,0.48l0.7,3.06l2.62,1.99l2.99,1.65Z"
                                                            data-code="IN" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M495.56,296.42l2.8,-3.12l-0.02,-0.81l-0.64,-1.3l0.68,-0.52l0.14,-1.47l-0.76,-1.25l0.31,-0.11l2.26,0.03l-0.51,2.76l0.76,1.3l0.5,0.12l1.05,-0.53l1.19,-0.12l0.61,0.24l1.43,-0.62l0.1,-0.67l-0.71,-0.62l1.57,-1.7l8.65,4.86l0.32,1.53l3.34,2.33l-1.05,2.8l0.13,1.61l1.63,1.12l-0.6,1.76l-0.01,2.33l1.89,4.03l0.57,0.43l-1.46,1.08l-2.61,0.94l-1.43,-0.04l-1.06,0.77l-2.29,0.36l-2.87,-0.68l-0.83,0.07l-0.63,-0.75l-0.31,-2.78l-1.32,-1.35l-3.25,-0.77l-3.96,-1.58l-1.18,-2.41l-0.32,-1.75l-1.76,-1.49l0.42,-1.05l-0.44,-0.89l0.08,-0.96l-0.46,-0.58l0.06,-0.56Z"
                                                            data-code="TZ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M539.29,175.73l1.33,0.32l1.94,-1.8l2.3,3.34l1.43,0.43l-1.26,0.15l-0.35,0.32l-0.8,3.14l-0.99,0.96l0.05,1.11l-1.26,-1.13l0.7,-1.18l-0.04,-0.47l-0.74,-0.86l-1.48,0.15l-2.34,1.71l-0.03,-1.27l-2.03,-1.35l0.47,-0.62l-0.08,-0.56l-1.03,-0.79l0.29,-0.43l-0.14,-0.58l-1.13,-0.86l1.89,0.68l1.69,0.06l0.37,-0.87l-0.81,-1.37l0.42,0.06l1.63,1.72ZM533.78,180.57l0.61,0.46l0.69,-0.0l0.59,1.15l-0.68,-0.15l-1.21,-1.45Z"
                                                            data-code="AZ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M405.08,135.42l0.35,2.06l-1.75,2.78l-4.22,1.88l-2.84,-0.4l1.73,-3.0l-1.18,-3.53l4.6,-3.74l0.32,1.15l-0.49,1.74l0.4,0.51l1.47,-0.04l1.6,0.6Z"
                                                            data-code="IE" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M756.47,287.89l0.69,4.01l2.79,1.78l0.51,-0.1l2.04,-2.59l2.71,-1.43l2.05,-0.0l3.9,1.73l2.46,0.45l0.08,15.12l-1.75,-1.54l-2.54,-0.51l-0.88,0.71l-2.32,0.06l0.69,-1.33l1.45,-0.64l0.23,-0.46l-0.65,-2.74l-1.24,-2.21l-5.04,-2.29l-2.09,-0.23l-3.68,-2.27l-0.55,0.13l-0.65,1.07l-0.52,0.12l-0.55,-1.89l-1.21,-0.78l1.84,-0.62l1.72,0.05l0.39,-0.52l-0.21,-0.66l-0.38,-0.28l-3.45,-0.0l-1.13,-1.48l-2.1,-0.43l-0.52,-0.6l2.69,-0.48l1.28,-0.78l3.66,0.94l0.3,0.71ZM757.91,300.34l-0.62,0.82l-0.1,-0.8l0.59,-1.12l0.13,1.1ZM747.38,292.98l0.34,0.72l-1.22,-0.57l-4.68,-0.1l0.27,-0.62l2.78,-0.09l2.52,0.67ZM741.05,285.25l-0.67,-2.88l0.64,-2.01l0.41,0.86l1.21,0.18l0.16,0.7l-0.1,1.68l-0.84,-0.16l-0.46,0.3l-0.34,1.34ZM739.05,293.5l-0.5,0.44l-1.34,-0.36l-0.17,-0.37l1.73,-0.08l0.27,0.36ZM721.45,284.51l-0.19,1.97l2.24,2.23l0.54,0.02l1.27,-1.07l2.75,-0.5l-0.9,1.21l-2.11,0.93l-0.16,0.6l2.22,3.01l-0.3,1.07l1.36,1.74l-2.26,0.85l-0.28,-0.31l0.12,-1.19l-1.64,-1.34l0.17,-2.23l-0.56,-0.39l-1.67,0.76l-0.23,0.39l0.3,6.17l-1.1,0.25l-0.69,-0.47l0.64,-2.21l-0.39,-2.42l-0.39,-0.34l-0.8,-0.01l-0.58,-1.29l0.98,-1.6l0.35,-1.96l1.32,-3.87ZM728.59,296.27l0.38,0.49l-0.02,1.28l-0.88,0.49l-0.53,-0.47l1.04,-1.79ZM729.04,286.98l0.27,-0.05l-0.02,0.13l-0.24,-0.08ZM721.68,284.05l0.16,-0.32l1.89,-1.65l1.83,0.68l3.16,0.35l2.94,-0.1l2.39,-1.66l-1.73,2.13l-1.66,0.43l-2.41,-0.48l-4.17,0.13l-2.39,0.51ZM730.55,310.47l1.11,-1.93l2.03,-0.82l0.08,0.62l-1.45,1.67l-1.77,0.46ZM728.12,305.88l-0.1,0.38l-3.46,0.66l-2.91,-0.27l-0.0,-0.25l1.54,-0.41l1.66,0.73l1.67,-0.19l1.61,-0.65ZM722.9,310.24l-0.64,0.03l-2.26,-1.2l1.11,-0.24l1.78,1.41ZM716.26,305.77l0.88,0.51l1.28,-0.17l0.2,0.35l-4.65,0.73l0.39,-0.67l1.15,-0.02l0.75,-0.73ZM711.66,293.84l-0.38,-0.16l-2.54,1.01l-1.12,-1.44l-1.69,-0.13l-1.16,-0.75l-3.04,0.77l-1.1,-1.15l-3.31,-0.11l-0.35,-3.05l-1.35,-0.95l-1.11,-1.98l-0.33,-2.06l0.27,-2.14l0.9,-1.01l0.37,1.15l2.09,1.49l1.53,-0.48l1.82,0.08l1.38,-1.19l1.0,-0.18l2.28,0.67l2.26,-0.53l1.52,-3.64l1.01,-0.99l0.78,-2.57l4.1,0.3l-1.11,1.77l0.02,0.46l1.7,2.2l-0.23,1.39l2.07,1.71l-2.33,0.42l-0.88,1.9l0.1,2.05l-2.4,1.9l-0.06,2.45l-0.7,2.79ZM692.58,302.03l0.35,0.26l4.8,0.25l0.78,-0.97l4.17,1.09l1.13,1.68l3.69,0.45l2.13,1.04l-1.8,0.6l-2.77,-0.99l-4.8,-0.12l-5.24,-1.41l-1.84,-0.25l-1.11,0.3l-4.26,-0.97l-0.7,-1.14l-1.59,-0.13l1.18,-1.65l2.74,0.13l2.87,1.13l0.26,0.68ZM685.53,299.17l-2.22,0.04l-2.06,-2.03l-3.15,-2.01l-2.93,-3.51l-3.11,-5.33l-2.2,-2.12l-1.64,-4.06l-2.32,-1.69l-1.27,-2.07l-1.96,-1.5l-2.51,-2.65l-0.11,-0.66l4.81,0.53l2.15,2.38l3.31,2.74l2.35,2.66l2.7,0.17l1.95,1.59l1.54,2.17l1.59,0.95l-0.84,1.71l0.15,0.52l1.44,0.87l0.79,0.1l0.4,1.58l0.87,1.4l1.96,0.39l1.0,1.31l-0.6,3.01l-0.09,3.5Z"
                                                            data-code="ID" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M492.5,162.44l1.28,-2.49l1.82,0.19l0.66,-0.23l0.09,-0.71l-0.25,-0.75l-0.79,-0.72l-0.33,-1.21l-0.86,-0.62l-0.02,-1.19l-1.13,-0.86l-1.15,-0.19l-2.04,-1.0l-1.66,0.32l-0.66,0.47l-0.92,-0.0l-0.84,0.78l-2.48,0.7l-1.18,-0.71l-3.07,-0.36l-0.89,0.43l-0.24,-0.55l-1.11,-0.7l0.35,-0.93l1.26,-1.02l-0.54,-1.23l2.04,-2.43l1.4,-0.62l0.25,-1.19l-1.04,-2.39l0.83,-0.13l1.28,-0.84l1.8,-0.07l2.47,0.26l2.86,0.81l1.88,0.06l0.86,0.44l1.04,-0.41l0.77,0.66l2.18,-0.15l0.92,0.3l0.52,-0.34l0.15,-1.53l0.56,-0.54l2.85,-0.05l0.84,-0.72l3.04,-0.18l1.23,1.46l-0.48,0.77l0.21,1.03l0.36,0.32l1.8,0.14l0.93,2.08l3.18,1.15l1.94,-0.45l1.67,1.49l1.4,-0.03l3.35,0.96l0.02,0.54l-0.96,1.59l0.47,1.97l-0.26,0.7l-2.36,0.28l-1.29,0.89l-0.23,1.38l-1.83,0.27l-1.58,0.97l-2.41,0.21l-2.16,1.17l-0.21,0.38l0.34,2.26l1.23,0.75l2.13,-0.08l-0.14,0.31l-2.65,0.53l-3.23,1.69l-0.87,-0.39l0.42,-1.1l-0.25,-0.52l-2.21,-0.73l2.35,-1.06l0.12,-0.65l-0.93,-0.82l-3.62,-0.74l-0.13,-0.89l-0.46,-0.34l-2.61,0.59l-0.91,1.69l-1.71,2.04l-0.86,-0.4l-1.62,0.27Z"
                                                            data-code="UA" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M549.33,221.64l-0.76,-0.23l-0.14,-1.64l0.84,-1.29l0.47,0.52l0.04,1.34l-0.45,1.3Z"
                                                            data-code="QA" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                        <path
                                                            d="M508.58,318.75l-0.34,-2.57l0.51,-2.05l3.55,0.63l2.5,-0.38l1.02,-0.76l1.49,0.01l2.74,-0.98l1.66,-1.2l0.5,9.24l0.41,1.23l-0.68,1.67l-0.93,1.71l-1.5,1.5l-5.16,2.28l-2.78,2.73l-1.02,0.53l-1.71,1.8l-0.98,0.57l-0.35,2.41l1.16,1.94l0.49,2.17l0.43,0.31l-0.06,2.06l-0.39,1.17l0.5,0.72l-0.25,0.73l-0.92,0.83l-5.12,2.39l-1.22,1.36l0.21,1.13l0.58,0.39l-0.11,0.72l-1.22,-0.01l-0.73,-2.97l0.42,-3.09l-1.78,-5.37l2.49,-2.81l0.69,-1.89l0.44,-0.43l0.28,-1.53l-0.39,-0.93l0.59,-3.65l-0.01,-3.26l-1.49,-1.16l-1.2,-0.22l-1.74,-1.17l-1.92,0.01l-0.29,-2.08l7.06,-1.96l1.28,1.09l0.89,-0.1l0.67,0.44l0.1,0.73l-0.51,1.29l0.19,1.81l1.75,1.83l0.65,-0.13l0.71,-1.65l1.17,-0.86l-0.26,-3.47l-1.05,-1.85l-1.04,-0.94Z"
                                                            data-code="MZ" fill="#e3eaef" fill-opacity="1"
                                                            stroke="none" stroke-width="0" fill-rule="evenodd"
                                                            class="jvm-region jvm-element"></path>
                                                    </g>
                                                    <g id="jvm-regions-labels-group"></g>
                                                    <g id="jvm-lines-group"></g>
                                                    <g id="jvm-markers-group">
                                                        <circle data-index="0" cx="118.3513452911977"
                                                            cy="90.21434386417552" r="9" fill="#727cf5"
                                                            fill-opacity="0.9" stroke="#fff" stroke-width="7"
                                                            stroke-opacity="0.4" class="jvm-marker jvm-element">
                                                        </circle>
                                                        <circle data-index="1" cx="57.472006973127804"
                                                            cy="94.54614989188163" r="9" fill="#727cf5"
                                                            fill-opacity="0.9" stroke="#fff" stroke-width="7"
                                                            stroke-opacity="0.4" class="jvm-marker jvm-element">
                                                        </circle>
                                                        <circle data-index="2" cx="401.5578519887672"
                                                            cy="188.67590491889877" r="9" fill="#727cf5"
                                                            fill-opacity="0.9" stroke="#fff" stroke-width="7"
                                                            stroke-opacity="0.4" class="jvm-marker jvm-element">
                                                        </circle>
                                                        <circle data-index="3" cx="341.9486671865257"
                                                            cy="142.77827153490352" r="9" fill="#727cf5"
                                                            fill-opacity="0.9" stroke="#fff" stroke-width="7"
                                                            stroke-opacity="0.4" class="jvm-marker jvm-element">
                                                        </circle>
                                                    </g>
                                                    <g id="jvm-markers-labels-group"></g>
                                                </svg>
                                                <div class="jvm-zoom-btn jvm-zoomin">+</div>
                                                <div class="jvm-zoom-btn jvm-zoomout">−</div>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 mt-0 fw-normal">New
                                            York</h5>
                                        <div class="progress-w-percent"><span
                                                class="progress-value fw-bold">72k</span>
                                            <div class="progress-sm progress">
                                                <div role="progressbar" class="progress-bar" style="width: 72%;"
                                                    aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 mt-0 fw-normal">San
                                            Francisco</h5>
                                        <div class="progress-w-percent"><span
                                                class="progress-value fw-bold">39k</span>
                                            <div class="progress-sm progress">
                                                <div role="progressbar" class="progress-bar" style="width: 39%;"
                                                    aria-valuenow="39" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 mt-0 fw-normal">Sydney</h5>
                                        <div class="progress-w-percent"><span
                                                class="progress-value fw-bold">25k</span>
                                            <div class="progress-sm progress">
                                                <div role="progressbar" class="progress-bar" style="width: 25%;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 mt-0 fw-normal">Singapore</h5>
                                        <div class="progress-w-percent mb-0"><span
                                                class="progress-value fw-bold">61k</span>
                                            <div class="progress-sm progress">
                                                <div role="progressbar" class="progress-bar" style="width: 61%;"
                                                    aria-valuenow="61" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 order-xl-1 order-lg-2">
                                <div class="card">
                                    <div class="card-body"><a class="float-end" href="/dashboard/ecommerce">Export
                                            <i class="mdi mdi-download ms-1"></i></a>
                                        <h4 class="header-title mt-2 mb-3">Top
                                            Selling Products</h4>
                                        <div class="table-responsive">
                                            <table class="mb-0 table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">ASOS
                                                                Ridley High
                                                                Waist</h5><span class="text-muted font-13">07
                                                                April 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$79.49</h5><span
                                                                class="text-muted font-13">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">82</h5><span
                                                                class="text-muted font-13">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$6,518.18</h5><span
                                                                class="text-muted font-13">Amount</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">Marco
                                                                Lightweight
                                                                Shirt</h5><span class="text-muted font-13">25
                                                                March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$128.50</h5><span
                                                                class="text-muted font-13">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">37</h5><span
                                                                class="text-muted font-13">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$4,754.50</h5><span
                                                                class="text-muted font-13">Amount</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">Half
                                                                Sleeve Shirt</h5><span class="text-muted font-13">17
                                                                March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$39.99</h5><span
                                                                class="text-muted font-13">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">64</h5><span
                                                                class="text-muted font-13">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$2,559.36</h5><span
                                                                class="text-muted font-13">Amount</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">Lightweight
                                                                Jacket</h5><span class="text-muted font-13">12
                                                                March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$20.00</h5><span
                                                                class="text-muted font-13">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">184</h5><span
                                                                class="text-muted font-13">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$3,680.00</h5><span
                                                                class="text-muted font-13">Amount</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">Marco
                                                                Shoes</h5><span class="text-muted font-13">05
                                                                March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$28.49</h5><span
                                                                class="text-muted font-13">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">69</h5><span
                                                                class="text-muted font-13">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$1,965.81</h5><span
                                                                class="text-muted font-13">Amount</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 order-lg-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="header-title">Total
                                                Sales</h4>
                                            <div class="dropdown"><a class="arrow-none card-drop dropdown-toggle"
                                                    id="react-aria3379482148-14" aria-expanded="false"
                                                    href="/dashboard/ecommerce"><i
                                                        class="mdi mdi-dots-vertical"></i></a></div>
                                        </div>
                                        <div options="[object Object]" series="44,55,41,17" type="donut"
                                            height="222" class="apex-charts mb-4 mt-4" width="100%"
                                            style="min-height: 200.7px;">
                                            <div id="apexchartstrxvuw6r"
                                                class="apexcharts-canvas apexchartstrxvuw6r apexcharts-theme-light"
                                                style="width: 231px; height: 200.7px;"><svg id="SvgjsSvg3625"
                                                    width="231" height="200.7"
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG3627" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(17.5, 0)">
                                                        <defs id="SvgjsDefs3626">
                                                            <clippath id="gridRectMasktrxvuw6r">
                                                                <rect id="SvgjsRect3629" width="204"
                                                                    height="222" x="-3" y="-1"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clippath>
                                                            <clippath id="forecastMasktrxvuw6r"></clippath>
                                                            <clippath id="nonForecastMasktrxvuw6r"></clippath>
                                                            <clippath id="gridRectMarkerMasktrxvuw6r">
                                                                <rect id="SvgjsRect3630" width="202"
                                                                    height="224" x="-2" y="-2"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clippath>
                                                            <filter id="SvgjsFilter3639"
                                                                filterUnits="userSpaceOnUse" width="200%"
                                                                height="200%" x="-50%" y="-50%">
                                                                <feflood id="SvgjsFeFlood3640" flood-color="#000000"
                                                                    flood-opacity="0.45"
                                                                    result="SvgjsFeFlood3640Out" in="SourceGraphic">
                                                                </feflood>
                                                                <fecomposite id="SvgjsFeComposite3641"
                                                                    in="SvgjsFeFlood3640Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite3641Out">
                                                                </fecomposite>
                                                                <feoffset id="SvgjsFeOffset3642" dx="1"
                                                                    dy="1" result="SvgjsFeOffset3642Out"
                                                                    in="SvgjsFeComposite3641Out"></feoffset>
                                                                <fegaussianblur id="SvgjsFeGaussianBlur3643"
                                                                    stdDeviation="1 "
                                                                    result="SvgjsFeGaussianBlur3643Out"
                                                                    in="SvgjsFeOffset3642Out"></fegaussianblur>
                                                                <feblend id="SvgjsFeBlend3644" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur3643Out" mode="normal"
                                                                    result="SvgjsFeBlend3644Out"></feblend>
                                                            </filter>
                                                            <filter id="SvgjsFilter3649"
                                                                filterUnits="userSpaceOnUse" width="200%"
                                                                height="200%" x="-50%" y="-50%">
                                                                <feflood id="SvgjsFeFlood3650" flood-color="#000000"
                                                                    flood-opacity="0.45"
                                                                    result="SvgjsFeFlood3650Out" in="SourceGraphic">
                                                                </feflood>
                                                                <fecomposite id="SvgjsFeComposite3651"
                                                                    in="SvgjsFeFlood3650Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite3651Out">
                                                                </fecomposite>
                                                                <feoffset id="SvgjsFeOffset3652" dx="1"
                                                                    dy="1" result="SvgjsFeOffset3652Out"
                                                                    in="SvgjsFeComposite3651Out"></feoffset>
                                                                <fegaussianblur id="SvgjsFeGaussianBlur3653"
                                                                    stdDeviation="1 "
                                                                    result="SvgjsFeGaussianBlur3653Out"
                                                                    in="SvgjsFeOffset3652Out"></fegaussianblur>
                                                                <feblend id="SvgjsFeBlend3654" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur3653Out" mode="normal"
                                                                    result="SvgjsFeBlend3654Out"></feblend>
                                                            </filter>
                                                            <filter id="SvgjsFilter3659"
                                                                filterUnits="userSpaceOnUse" width="200%"
                                                                height="200%" x="-50%" y="-50%">
                                                                <feflood id="SvgjsFeFlood3660" flood-color="#000000"
                                                                    flood-opacity="0.45"
                                                                    result="SvgjsFeFlood3660Out" in="SourceGraphic">
                                                                </feflood>
                                                                <fecomposite id="SvgjsFeComposite3661"
                                                                    in="SvgjsFeFlood3660Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite3661Out">
                                                                </fecomposite>
                                                                <feoffset id="SvgjsFeOffset3662" dx="1"
                                                                    dy="1" result="SvgjsFeOffset3662Out"
                                                                    in="SvgjsFeComposite3661Out"></feoffset>
                                                                <fegaussianblur id="SvgjsFeGaussianBlur3663"
                                                                    stdDeviation="1 "
                                                                    result="SvgjsFeGaussianBlur3663Out"
                                                                    in="SvgjsFeOffset3662Out"></fegaussianblur>
                                                                <feblend id="SvgjsFeBlend3664" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur3663Out" mode="normal"
                                                                    result="SvgjsFeBlend3664Out"></feblend>
                                                            </filter>
                                                            <filter id="SvgjsFilter3669"
                                                                filterUnits="userSpaceOnUse" width="200%"
                                                                height="200%" x="-50%" y="-50%">
                                                                <feflood id="SvgjsFeFlood3670" flood-color="#000000"
                                                                    flood-opacity="0.45"
                                                                    result="SvgjsFeFlood3670Out" in="SourceGraphic">
                                                                </feflood>
                                                                <fecomposite id="SvgjsFeComposite3671"
                                                                    in="SvgjsFeFlood3670Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite3671Out">
                                                                </fecomposite>
                                                                <feoffset id="SvgjsFeOffset3672" dx="1"
                                                                    dy="1" result="SvgjsFeOffset3672Out"
                                                                    in="SvgjsFeComposite3671Out"></feoffset>
                                                                <fegaussianblur id="SvgjsFeGaussianBlur3673"
                                                                    stdDeviation="1 "
                                                                    result="SvgjsFeGaussianBlur3673Out"
                                                                    in="SvgjsFeOffset3672Out"></fegaussianblur>
                                                                <feblend id="SvgjsFeBlend3674" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur3673Out" mode="normal"
                                                                    result="SvgjsFeBlend3674Out"></feblend>
                                                            </filter>
                                                        </defs>
                                                        <g id="SvgjsG3631" class="apexcharts-pie">
                                                            <g id="SvgjsG3632" transform="translate(0, 0) scale(1)">
                                                                <circle id="SvgjsCircle3633" r="58.88048780487806"
                                                                    cx="99" cy="99"
                                                                    fill="transparent"></circle>
                                                                <g id="SvgjsG3634" class="apexcharts-slices">
                                                                    <g id="SvgjsG3635"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesname="seriesx1" rel="1"
                                                                        data:realindex="0">
                                                                        <path id="SvgjsPath3636"
                                                                            d="M 99 8.414634146341456 A 90.58536585365854 90.58536585365854 0 0 1 187.95356379817986 116.11642469805861 L 156.81981646881692 110.12567605373809 A 58.88048780487806 58.88048780487806 0 0 0 99 40.11951219512194 L 99 8.414634146341456 z"
                                                                            fill="rgba(114,124,245,1)"
                                                                            fill-opacity="1" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                            index="0" j="0"
                                                                            data:angle="100.89171974522293"
                                                                            data:startangle="0" data:strokewidth="2"
                                                                            data:value="44"
                                                                            data:pathorig="M 99 8.414634146341456 A 90.58536585365854 90.58536585365854 0 0 1 187.95356379817986 116.11642469805861 L 156.81981646881692 110.12567605373809 A 58.88048780487806 58.88048780487806 0 0 0 99 40.11951219512194 L 99 8.414634146341456 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                    <g id="SvgjsG3645"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesname="seriesx2" rel="2"
                                                                        data:realindex="1">
                                                                        <path id="SvgjsPath3646"
                                                                            d="M 187.95356379817986 116.11642469805861 A 90.58536585365854 90.58536585365854 0 0 1 32.74318995686832 160.77170573773668 L 55.933073471964406 139.15160872952885 A 58.88048780487806 58.88048780487806 0 0 0 156.81981646881692 110.12567605373809 L 187.95356379817986 116.11642469805861 z"
                                                                            fill="rgba(10,207,151,1)"
                                                                            fill-opacity="1" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                            index="0" j="1"
                                                                            data:angle="126.11464968152865"
                                                                            data:startangle="100.89171974522293"
                                                                            data:strokewidth="2" data:value="55"
                                                                            data:pathorig="M 187.95356379817986 116.11642469805861 A 90.58536585365854 90.58536585365854 0 0 1 32.74318995686832 160.77170573773668 L 55.933073471964406 139.15160872952885 A 58.88048780487806 58.88048780487806 0 0 0 156.81981646881692 110.12567605373809 L 187.95356379817986 116.11642469805861 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                    <g id="SvgjsG3655"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesname="seriesx3" rel="3"
                                                                        data:realindex="2">
                                                                        <path id="SvgjsPath3656"
                                                                            d="M 32.74318995686832 160.77170573773668 A 90.58536585365854 90.58536585365854 0 0 1 42.01626322681358 28.58294063080048 L 61.960571097428826 53.22891141002031 A 58.88048780487806 58.88048780487806 0 0 0 55.933073471964406 139.15160872952885 L 32.74318995686832 160.77170573773668 z"
                                                                            fill="rgba(250,92,124,1)"
                                                                            fill-opacity="1" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                            index="0" j="2"
                                                                            data:angle="94.01273885350315"
                                                                            data:startangle="227.00636942675158"
                                                                            data:strokewidth="2" data:value="41"
                                                                            data:pathorig="M 32.74318995686832 160.77170573773668 A 90.58536585365854 90.58536585365854 0 0 1 42.01626322681358 28.58294063080048 L 61.960571097428826 53.22891141002031 A 58.88048780487806 58.88048780487806 0 0 0 55.933073471964406 139.15160872952885 L 32.74318995686832 160.77170573773668 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                    <g id="SvgjsG3665"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesname="seriesx4" rel="4"
                                                                        data:realindex="3">
                                                                        <path id="SvgjsPath3666"
                                                                            d="M 42.01626322681358 28.58294063080048 A 90.58536585365854 90.58536585365854 0 0 1 98.98418987119756 8.414635526035468 L 98.98972341627841 40.119513091923054 A 58.88048780487806 58.88048780487806 0 0 0 61.960571097428826 53.22891141002031 L 42.01626322681358 28.58294063080048 z"
                                                                            fill="rgba(255,188,0,1)"
                                                                            fill-opacity="1" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                            index="0" j="3"
                                                                            data:angle="38.980891719745216"
                                                                            data:startangle="321.0191082802547"
                                                                            data:strokewidth="2" data:value="17"
                                                                            data:pathorig="M 42.01626322681358 28.58294063080048 A 90.58536585365854 90.58536585365854 0 0 1 98.98418987119756 8.414635526035468 L 98.98972341627841 40.119513091923054 A 58.88048780487806 58.88048780487806 0 0 0 61.960571097428826 53.22891141002031 L 42.01626322681358 28.58294063080048 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                    <g id="SvgjsG3637"
                                                                        class="apexcharts-datalabels"><text
                                                                            id="SvgjsText3638"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            x="156.62081992198304"
                                                                            y="51.40954440239962"
                                                                            text-anchor="middle"
                                                                            dominant-baseline="auto"
                                                                            font-size="12px" font-weight="600"
                                                                            fill="#ffffff"
                                                                            class="apexcharts-text apexcharts-pie-label"
                                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                                            filter="url(#SvgjsFilter3639)">28.0%</text>
                                                                    </g>
                                                                    <g id="SvgjsG3647"
                                                                        class="apexcharts-datalabels"><text
                                                                            id="SvgjsText3648"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            x="119.6630664888001"
                                                                            y="170.81955190439578"
                                                                            text-anchor="middle"
                                                                            dominant-baseline="auto"
                                                                            font-size="12px" font-weight="600"
                                                                            fill="#ffffff"
                                                                            class="apexcharts-text apexcharts-pie-label"
                                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                                            filter="url(#SvgjsFilter3649)">35.0%</text>
                                                                    </g>
                                                                    <g id="SvgjsG3657"
                                                                        class="apexcharts-datalabels"><text
                                                                            id="SvgjsText3658"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            x="24.450279722513855"
                                                                            y="93.77031941536175"
                                                                            text-anchor="middle"
                                                                            dominant-baseline="auto"
                                                                            font-size="12px" font-weight="600"
                                                                            fill="#ffffff"
                                                                            class="apexcharts-text apexcharts-pie-label"
                                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                                            filter="url(#SvgjsFilter3659)">26.1%</text>
                                                                    </g>
                                                                    <g id="SvgjsG3667"
                                                                        class="apexcharts-datalabels"><text
                                                                            id="SvgjsText3668"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            x="74.06538377538158"
                                                                            y="28.54948356328559"
                                                                            text-anchor="middle"
                                                                            dominant-baseline="auto"
                                                                            font-size="12px" font-weight="600"
                                                                            fill="#ffffff"
                                                                            class="apexcharts-text apexcharts-pie-label"
                                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                                            filter="url(#SvgjsFilter3669)">10.8%</text>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine3675" x1="0" y1="0"
                                                            x2="198" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                        </line>
                                                        <line id="SvgjsLine3676" x1="0" y1="0"
                                                            x2="198" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                    <g id="SvgjsG3628" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(114, 124, 245);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(10, 207, 151);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(250, 92, 124);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 4;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(255, 188, 0);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chart-widget-list">
                                            <p><i class="mdi mdi-square text-primary"></i>
                                                Direct<span class="float-end">$300.56</span></p>
                                            <p><i class="mdi mdi-square text-danger"></i>
                                                Affilliate<span class="float-end">$135.18</span></p>
                                            <p><i class="mdi mdi-square text-success"></i>
                                                Sponsored<span class="float-end">$48.96</span></p>
                                            <p class="mb-0"><i class="mdi mdi-square text-warning"></i>
                                                E-mail<span class="float-end">$154.02</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 order-lg-1">
                                <div class="card">
                                    <div class="pb-0 card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h4 class="header-title">Recent
                                                Activity</h4>
                                            <div class="dropdown"><a class="arrow-none card-drop dropdown-toggle"
                                                    id="react-aria3379482148-15" aria-expanded="false"
                                                    href="/dashboard/ecommerce"><i
                                                        class="mdi mdi-dots-vertical"></i></a></div>
                                        </div>
                                    </div>
                                    <div data-simplebar="init" style="max-height: 412px; width: 100%;">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0"
                                                        role="region" aria-label="scrollable content"
                                                        style="height: auto; overflow: hidden scroll;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <div class="py-0 card-body">
                                                                <div class="timeline-alt py-0" tag="div">
                                                                    <div class="timeline-item" tag="div"><i
                                                                            class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                                        <div class="timeline-item-info"><a
                                                                                class="text-info fw-bold mb-1 d-block"
                                                                                href="/dashboard/ecommerce">You
                                                                                sold
                                                                                an
                                                                                item</a><small>Paul
                                                                                Burgess
                                                                                just
                                                                                purchased
                                                                                “Hyper
                                                                                -
                                                                                Admin
                                                                                Dashboard”!</small>
                                                                            <p class="mb-0 pb-2"><small
                                                                                    class="text-muted">5
                                                                                    minutes
                                                                                    ago</small></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-item" tag="div"><i
                                                                            class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                                        <div class="timeline-item-info"><a
                                                                                class="text-primary fw-bold mb-1 d-block"
                                                                                href="/dashboard/ecommerce">Product
                                                                                on
                                                                                the
                                                                                Bootstrap
                                                                                Market</a><small>Dave
                                                                                Gamache
                                                                                added
                                                                                <span class="fw-bold">Admin
                                                                                    Dashboard</span></small>
                                                                            <p class="mb-0 pb-2"><small
                                                                                    class="text-muted">30
                                                                                    minutes
                                                                                    ago</small></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-item" tag="div"><i
                                                                            class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                                        <div class="timeline-item-info"><a
                                                                                class="text-info fw-bold mb-1 d-block"
                                                                                href="/dashboard/ecommerce">Robert
                                                                                Delaney</a><small>Send
                                                                                you
                                                                                message<span class="fw-bold">"Are you
                                                                                    there?"</span></small>
                                                                            <p class="mb-0 pb-2"><small
                                                                                    class="text-muted">2
                                                                                    hours
                                                                                    ago</small></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-item" tag="div"><i
                                                                            class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                                                        <div class="timeline-item-info"><a
                                                                                class="text-primary fw-bold mb-1 d-block"
                                                                                href="/dashboard/ecommerce">Audrey
                                                                                Tobey</a><small>Uploaded
                                                                                a
                                                                                photo
                                                                                <span
                                                                                    class="fw-bold">"Error.jpg"</span>
                                                                            </small>
                                                                            <p class="mb-0 pb-2"><small
                                                                                    class="text-muted">14
                                                                                    hours
                                                                                    ago</small></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-item" tag="div"><i
                                                                            class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                                        <div class="timeline-item-info"><a
                                                                                class="text-primary fw-bold mb-1 d-block"
                                                                                href="/dashboard/ecommerce">Product
                                                                                on
                                                                                the
                                                                                Bootstrap
                                                                                Market</a><small>Dave
                                                                                Gamache
                                                                                added
                                                                                <span class="fw-bold">Admin
                                                                                    Dashboard</span></small>
                                                                            <p class="mb-0 pb-2"><small
                                                                                    class="text-muted">30
                                                                                    minutes
                                                                                    ago</small></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-item" tag="div"><i
                                                                            class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                                        <div class="timeline-item-info"><a
                                                                                class="text-info fw-bold mb-1 d-block"
                                                                                href="/dashboard/ecommerce">Robert
                                                                                Delaney</a><small>Send
                                                                                you
                                                                                message<span class="fw-bold">"Are you
                                                                                    there?"</span></small>
                                                                            <p class="mb-0 pb-2"><small
                                                                                    class="text-muted">2
                                                                                    hours
                                                                                    ago</small></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-item" tag="div"><i
                                                                            class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                                                        <div class="timeline-item-info"><a
                                                                                class="text-primary fw-bold mb-1 d-block"
                                                                                href="/dashboard/ecommerce">Audrey
                                                                                Tobey</a><small>Uploaded
                                                                                a
                                                                                photo
                                                                                <span
                                                                                    class="fw-bold">"Error.jpg"</span>
                                                                            </small>
                                                                            <p class="mb-0 pb-2"><small
                                                                                    class="text-muted">14
                                                                                    hours
                                                                                    ago</small></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 688px;">
                                            </div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal"
                                            style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;">
                                            </div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical"
                                            style="visibility: visible;">
                                            <div class="simplebar-scrollbar"
                                                style="height: 246px; transform: translate3d(0px, 0px, 0px); display: block;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">2023 © Hyper -
                                Coderthemes.com</div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block"><a
                                        href="/dashboard/ecommerce">About</a><a
                                        href="/dashboard/ecommerce">Support</a><a
                                        href="/dashboard/ecommerce">Contact
                                        Us</a></div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="end-bar">
            <div class="rightbar-title"><a class="end-bar-toggle float-end" href="/dashboard/ecommerce"><i
                        class="dripicons-cross noti-icon"></i></a>
                <h5 class="m-0">Settings</h5>
            </div>
            <div data-simplebar="init" style="max-height: 100%; z-index: 10000;">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <div class="rightbar-content h-100">
                                        <div class="p-3">
                                            <div class="alert alert-warning" role="alert"><strong>Customize
                                                </strong> the overall color
                                                scheme, sidebar menu, etc.</div>
                                            <h5 class="mt-3">Layout</h5>
                                            <hr class="mt-1">
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="layout-type" type="radio" id="vertical-layout"
                                                    class="form-check-input" value="vertical" checked><label
                                                    for="vertical-layout" class="form-check-label">Vertical
                                                    Layout</label></div>
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="layout-type" type="radio" id="horizontal-layout"
                                                    class="form-check-input" value="topnav"><label
                                                    for="horizontal-layout" class="form-check-label">Horizontal
                                                    Layout</label></div>
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="layout-type" type="radio" id="detached-layout"
                                                    class="form-check-input" value="detached"><label
                                                    for="detached-layout" class="form-check-label">Detached
                                                    Layout</label></div>
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="layout-type" type="radio" id="full-mode-layout"
                                                    class="form-check-input" value="full"><label
                                                    for="full-mode-layout" class="form-check-label">Full
                                                    Layout</label></div>
                                            <h5 class="mt-4">Color Scheme</h5>
                                            <hr class="mt-1">
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="layout-color" type="radio" id="light-mode"
                                                    class="form-check-input" value="light" checked><label
                                                    for="vertical-layout" class="form-check-label">Light
                                                    Mode</label></div>
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="layout-color" type="radio" id="dark-mode"
                                                    class="form-check-input" value="dark"><label
                                                    for="horizontal-layout" class="form-check-label">Dark
                                                    Mode</label></div>
                                            <h5 class="mt-4">Width</h5>
                                            <hr class="mt-1">
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="width" type="radio" id="fluid-check"
                                                    class="form-check-input" value="fluid" checked><label
                                                    for="fluid-check" class="form-check-label">Fluid</label></div>
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="width" type="radio" id="boxed-check"
                                                    class="form-check-input" value="boxed"><label
                                                    for="boxed-check" class="form-check-label">Boxed</label></div>
                                            <h5 class="mt-4">Left Sidebar
                                                Color</h5>
                                            <hr class="mt-1">
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="theme" type="radio" id="brand-check"
                                                    class="form-check-input" value="default"><label
                                                    for="brand-check" class="form-check-label">Default</label></div>
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="theme" type="radio" id="light-check"
                                                    class="form-check-input" value="light"><label
                                                    for="light-check" class="form-check-label">Light</label></div>
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="theme" type="radio" id="dark-check"
                                                    class="form-check-input" value="dark" checked><label
                                                    for="dark-check" class="form-check-label">Dark</label></div>
                                            <div class="form-check form-switch mb-1 mt-3 form-check"><input
                                                    name="leftsidebar-size" type="radio" id="default-check"
                                                    class="form-check-input" value="fixed" checked><label
                                                    for="default-check" class="form-check-label">Fixed</label></div>
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="leftsidebar-size" type="radio" id="condensed-check"
                                                    class="form-check-input" value="condensed"><label
                                                    for="condensed-check" class="form-check-label">Condensed</label>
                                            </div>
                                            <div class="form-check form-switch mb-1 form-check"><input
                                                    name="leftsidebar-size" type="radio" id="compact-check"
                                                    class="form-check-input" value="scrollable"><label
                                                    for="compact-check" class="form-check-label">Scrollable</label>
                                            </div>
                                            <div class="d-grid mt-4"><button class="btn btn-primary"
                                                    id="resetBtn">Reset to
                                                    Default</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 878px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                    <div class="simplebar-scrollbar"
                        style="height: 320px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
                </div>
            </div>
        </div>
        <div class="rightbar-overlay"></div>
    </div>
    <script>
        ! function(e) {
            function c(c) {
                for (var f, t, n = c[0], o = c[1], b = c[2], u = 0, l = []; u < n.length; u++) t = n[u], Object.prototype
                    .hasOwnProperty.call(a, t) && a[t] && l.push(a[t][0]), a[t] = 0;
                for (f in o) Object.prototype.hasOwnProperty.call(o, f) && (e[f] = o[f]);
                for (i && i(c); l.length;) l.shift()();
                return r.push.apply(r, b || []), d()
            }

            function d() {
                for (var e, c = 0; c < r.length; c++) {
                    for (var d = r[c], f = !0, t = 1; t < d.length; t++) {
                        var o = d[t];
                        0 !== a[o] && (f = !1)
                    }
                    f && (r.splice(c--, 1), e = n(n.s = d[0]))
                }
                return e
            }
            var f = {},
                t = {
                    19: 0
                },
                a = {
                    19: 0
                },
                r = [];

            function n(c) {
                if (f[c]) return f[c].exports;
                var d = f[c] = {
                    i: c,
                    l: !1,
                    exports: {}
                };
                return e[c].call(d.exports, d, d.exports, n), d.l = !0, d.exports
            }
            n.e = function(e) {
                var c = [];
                t[e] ? c.push(t[e]) : 0 !== t[e] && {
                    21: 1,
                    22: 1,
                    30: 1,
                    32: 1,
                    39: 1,
                    42: 1,
                    52: 1,
                    56: 1
                } [e] && c.push(t[e] = new Promise((function(c, d) {
                    for (var f = "static/css/" + ({} [e] || e) + "." + {
                                0: "31d6cfe0",
                                1: "31d6cfe0",
                                2: "31d6cfe0",
                                3: "31d6cfe0",
                                4: "31d6cfe0",
                                5: "31d6cfe0",
                                6: "31d6cfe0",
                                7: "31d6cfe0",
                                8: "31d6cfe0",
                                9: "31d6cfe0",
                                10: "31d6cfe0",
                                11: "31d6cfe0",
                                12: "31d6cfe0",
                                13: "31d6cfe0",
                                14: "31d6cfe0",
                                15: "31d6cfe0",
                                16: "31d6cfe0",
                                17: "31d6cfe0",
                                20: "31d6cfe0",
                                21: "8e4e8e1f",
                                22: "8e4e8e1f",
                                23: "31d6cfe0",
                                24: "31d6cfe0",
                                25: "31d6cfe0",
                                26: "31d6cfe0",
                                27: "31d6cfe0",
                                28: "31d6cfe0",
                                29: "31d6cfe0",
                                30: "8e4e8e1f",
                                31: "31d6cfe0",
                                32: "f6bd4d84",
                                34: "31d6cfe0",
                                35: "31d6cfe0",
                                36: "31d6cfe0",
                                37: "31d6cfe0",
                                38: "31d6cfe0",
                                39: "8e2efe03",
                                40: "31d6cfe0",
                                41: "31d6cfe0",
                                42: "76eaad63",
                                43: "31d6cfe0",
                                44: "31d6cfe0",
                                45: "31d6cfe0",
                                46: "31d6cfe0",
                                47: "31d6cfe0",
                                48: "31d6cfe0",
                                49: "31d6cfe0",
                                50: "31d6cfe0",
                                51: "31d6cfe0",
                                52: "852d5de9",
                                53: "31d6cfe0",
                                54: "31d6cfe0",
                                55: "31d6cfe0",
                                56: "6c025ef9",
                                57: "31d6cfe0",
                                58: "31d6cfe0",
                                59: "31d6cfe0",
                                60: "31d6cfe0",
                                61: "31d6cfe0",
                                62: "31d6cfe0",
                                63: "31d6cfe0",
                                64: "31d6cfe0",
                                65: "31d6cfe0",
                                66: "31d6cfe0",
                                67: "31d6cfe0",
                                68: "31d6cfe0",
                                69: "31d6cfe0",
                                70: "31d6cfe0",
                                71: "31d6cfe0",
                                72: "31d6cfe0",
                                73: "31d6cfe0",
                                74: "31d6cfe0",
                                75: "31d6cfe0",
                                76: "31d6cfe0",
                                77: "31d6cfe0",
                                78: "31d6cfe0",
                                79: "31d6cfe0",
                                80: "31d6cfe0",
                                81: "31d6cfe0",
                                82: "31d6cfe0",
                                83: "31d6cfe0",
                                84: "31d6cfe0",
                                85: "31d6cfe0",
                                86: "31d6cfe0",
                                87: "31d6cfe0",
                                88: "31d6cfe0",
                                89: "31d6cfe0",
                                90: "31d6cfe0",
                                91: "31d6cfe0",
                                92: "31d6cfe0",
                                93: "31d6cfe0",
                                94: "31d6cfe0",
                                95: "31d6cfe0",
                                96: "31d6cfe0",
                                97: "31d6cfe0",
                                98: "31d6cfe0",
                                99: "31d6cfe0",
                                100: "31d6cfe0",
                                101: "31d6cfe0",
                                102: "31d6cfe0",
                                103: "31d6cfe0",
                                104: "31d6cfe0",
                                105: "31d6cfe0",
                                106: "31d6cfe0",
                                107: "31d6cfe0",
                                108: "31d6cfe0",
                                109: "31d6cfe0",
                                110: "31d6cfe0",
                                111: "31d6cfe0",
                                112: "31d6cfe0",
                                113: "31d6cfe0",
                                114: "31d6cfe0",
                                115: "31d6cfe0",
                                116: "31d6cfe0",
                                117: "31d6cfe0",
                                118: "31d6cfe0",
                                119: "31d6cfe0",
                                120: "31d6cfe0",
                                121: "31d6cfe0",
                                122: "31d6cfe0",
                                123: "31d6cfe0",
                                124: "31d6cfe0",
                                125: "31d6cfe0",
                                126: "31d6cfe0",
                                127: "31d6cfe0",
                                128: "31d6cfe0",
                                129: "31d6cfe0",
                                130: "31d6cfe0",
                                131: "31d6cfe0",
                                132: "31d6cfe0",
                                133: "31d6cfe0",
                                134: "31d6cfe0",
                                135: "31d6cfe0",
                                136: "31d6cfe0",
                                137: "31d6cfe0",
                                138: "31d6cfe0",
                                139: "31d6cfe0",
                                140: "31d6cfe0",
                                141: "31d6cfe0",
                                142: "31d6cfe0"
                            } [e] + ".chunk.css", a = n.p + f, r = document.getElementsByTagName(
                            "link"), o = 0; o < r.length; o++) {
                        var b = (i = r[o]).getAttribute("data-href") || i.getAttribute("href");
                        if ("stylesheet" === i.rel && (b === f || b === a)) return c()
                    }
                    var u = document.getElementsByTagName("style");
                    for (o = 0; o < u.length; o++) {
                        var i;
                        if ((b = (i = u[o]).getAttribute("data-href")) === f || b === a) return c()
                    }
                    var l = document.createElement("link");
                    l.rel = "stylesheet", l.type = "text/css", l.onload = c, l.onerror = function(c) {
                        var f = c && c.target && c.target.src || a,
                            r = new Error("Loading CSS chunk " + e + " failed.\n(" + f + ")");
                        r.code = "CSS_CHUNK_LOAD_FAILED", r.request = f, delete t[e], l.parentNode
                            .removeChild(l), d(r)
                    }, l.href = a, document.getElementsByTagName("head")[0].appendChild(l)
                })).then((function() {
                    t[e] = 0
                })));
                var d = a[e];
                if (0 !== d)
                    if (d) c.push(d[2]);
                    else {
                        var f = new Promise((function(c, f) {
                            d = a[e] = [c, f]
                        }));
                        c.push(d[2] = f);
                        var r, o = document.createElement("script");
                        o.charset = "utf-8", o.timeout = 120, n.nc && o.setAttribute("nonce", n.nc), o.src = function(
                        e) {
                            return n.p + "static/js/" + ({} [e] || e) + "." + {
                                0: "bf8f5bbe",
                                1: "d8793373",
                                2: "9c87e66a",
                                3: "3ffa1f18",
                                4: "1f326959",
                                5: "7554146c",
                                6: "e3668ce4",
                                7: "ec132a7a",
                                8: "94b87465",
                                9: "66c20de6",
                                10: "e4baf997",
                                11: "47e3b10f",
                                12: "51221599",
                                13: "75bd8272",
                                14: "df365ae1",
                                15: "5bb6c005",
                                16: "e4f9be77",
                                17: "f81574f7",
                                20: "4ad3c8e7",
                                21: "8cc8b8e0",
                                22: "eb5f63d4",
                                23: "76a834db",
                                24: "0f81846b",
                                25: "6af58f2c",
                                26: "11b0578a",
                                27: "53f8503c",
                                28: "b21112ef",
                                29: "d23a7e2f",
                                30: "73b1bae4",
                                31: "f0ad43e0",
                                32: "b73f5a2b",
                                34: "2380195a",
                                35: "449371a5",
                                36: "e5c38e71",
                                37: "38bcb1fa",
                                38: "368e2eba",
                                39: "6c7b1253",
                                40: "63deb994",
                                41: "1a3d42a6",
                                42: "669721db",
                                43: "d5afe6b3",
                                44: "bde76f03",
                                45: "8898221b",
                                46: "6c24d6f8",
                                47: "874ebfed",
                                48: "23304f9b",
                                49: "88af86e1",
                                50: "063d2a15",
                                51: "d813a49d",
                                52: "5eebdc43",
                                53: "d1106353",
                                54: "6d9095c5",
                                55: "148891cc",
                                56: "fb96f244",
                                57: "2be6e2d1",
                                58: "2e957799",
                                59: "d060d4a9",
                                60: "88ff5be0",
                                61: "db1422d9",
                                62: "ba5b2610",
                                63: "d6a8c585",
                                64: "33a6a9ad",
                                65: "76a044de",
                                66: "ecb742cc",
                                67: "36d1ba7d",
                                68: "9df36afa",
                                69: "3b863c1f",
                                70: "252a4dca",
                                71: "67dbebcb",
                                72: "11ddf476",
                                73: "4580ad7e",
                                74: "803de14e",
                                75: "59b827cc",
                                76: "82f0a750",
                                77: "bdbb220c",
                                78: "a31ea640",
                                79: "f007b2fb",
                                80: "9d528569",
                                81: "df536bd8",
                                82: "c68f2197",
                                83: "d9c8336e",
                                84: "67ed3994",
                                85: "0643d811",
                                86: "bedc9e16",
                                87: "ae6929ad",
                                88: "41539323",
                                89: "874b9b30",
                                90: "cf10c26f",
                                91: "305c461e",
                                92: "c9defc51",
                                93: "25bde59e",
                                94: "49f669b0",
                                95: "8462b643",
                                96: "c26f8fe9",
                                97: "1010424f",
                                98: "9d0a2dc3",
                                99: "a9c82773",
                                100: "b5064ccb",
                                101: "bab6aaec",
                                102: "e2f83f3b",
                                103: "54a81628",
                                104: "6b37464f",
                                105: "29cedac2",
                                106: "1168cdf4",
                                107: "2eeb967f",
                                108: "547bc2dd",
                                109: "354d2afd",
                                110: "1812cacc",
                                111: "1e09b170",
                                112: "458b39ae",
                                113: "1d08dddf",
                                114: "681309a9",
                                115: "ec4a6978",
                                116: "4bf9dcba",
                                117: "e051a3c5",
                                118: "87ed1cba",
                                119: "f3d98879",
                                120: "30f31213",
                                121: "0d248841",
                                122: "f89533de",
                                123: "d5b15ac7",
                                124: "dc333f8c",
                                125: "35d308be",
                                126: "d38e8de6",
                                127: "fa6e5c0d",
                                128: "734de3b5",
                                129: "6e423b34",
                                130: "1d803d67",
                                131: "229dba25",
                                132: "5b9850eb",
                                133: "49396d5d",
                                134: "936dede3",
                                135: "cc590e9a",
                                136: "d4a6f86d",
                                137: "19f9f2a4",
                                138: "99c2e92e",
                                139: "9056e4a2",
                                140: "0c5ea67a",
                                141: "e775d4a2",
                                142: "fcfb3554"
                            } [e] + ".chunk.js"
                        }(e);
                        var b = new Error;
                        r = function(c) {
                            o.onerror = o.onload = null, clearTimeout(u);
                            var d = a[e];
                            if (0 !== d) {
                                if (d) {
                                    var f = c && ("load" === c.type ? "missing" : c.type),
                                        t = c && c.target && c.target.src;
                                    b.message = "Loading chunk " + e + " failed.\n(" + f + ": " + t + ")", b.name =
                                        "ChunkLoadError", b.type = f, b.request = t, d[1](b)
                                }
                                a[e] = void 0
                            }
                        };
                        var u = setTimeout((function() {
                            r({
                                type: "timeout",
                                target: o
                            })
                        }), 12e4);
                        o.onerror = o.onload = r, document.head.appendChild(o)
                    } return Promise.all(c)
            }, n.m = e, n.c = f, n.d = function(e, c, d) {
                n.o(e, c) || Object.defineProperty(e, c, {
                    enumerable: !0,
                    get: d
                })
            }, n.r = function(e) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }, n.t = function(e, c) {
                if (1 & c && (e = n(e)), 8 & c) return e;
                if (4 & c && "object" == typeof e && e && e.__esModule) return e;
                var d = Object.create(null);
                if (n.r(d), Object.defineProperty(d, "default", {
                        enumerable: !0,
                        value: e
                    }), 2 & c && "string" != typeof e)
                    for (var f in e) n.d(d, f, function(c) {
                        return e[c]
                    }.bind(null, f));
                return d
            }, n.n = function(e) {
                var c = e && e.__esModule ? function() {
                    return e.default
                } : function() {
                    return e
                };
                return n.d(c, "a", c), c
            }, n.o = function(e, c) {
                return Object.prototype.hasOwnProperty.call(e, c)
            }, n.p = "/", n.oe = function(e) {
                throw console.error(e), e
            };
            var o = this["webpackJsonphyper-react"] = this["webpackJsonphyper-react"] || [],
                b = o.push.bind(o);
            o.push = c, o = o.slice();
            for (var u = 0; u < o.length; u++) c(o[u]);
            var i = b;
            d()
        }([])
    </script>
    <script src="/static/js/33.6ee3e506.chunk.js"></script>
    <script src="/static/js/main.fd81c8ca.chunk.js"></script>
    <div class="jvm-tooltip"></div>
    <div class="jvm-tooltip"></div>
</body>

</html>
