<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    @vite('resources/views/frontend/layouts/admin/guruable-master/assets/images/favicon.ico')
    <!-- Google font-->
    <!-- Required Fremwork -->
    @vite('resources/views/frontend/layouts/admin/guruable-master/assets/css/bootstrap/css/bootstrap.min.css')
    <!-- themify-icons line icon -->
    @vite('resources/views/frontend/layouts/admin/guruable-master/assets/icon/themify-icons/themify-icons.css')
    <!-- ico font -->
    @vite('resources/views/frontend/layouts/admin/guruable-master/assets/icon/icofont/css/icofont.css')
    <!-- Style.css -->
    @vite('resources/views/frontend/layouts/admin/guruable-master/assets/css/style.css')

    @vite('resources/views/frontend/layouts/admin/guruable-master/assets/css/jquery.mCustomScrollbar.css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">

                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="{{ route('admin') }}">
                            {{-- <img class="img-fluid" src="" alt="Logo" /> --}}
                            <h6 class="absolute inset-0">Dan Hong</h6>
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav-right">

                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="https://scontent.fdad3-5.fna.fbcdn.net/v/t1.6435-9/153176303_104212205058618_5577089710505789429_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DiE9l_GA8DMAX9OQmyj&_nc_ht=scontent.fdad3-5.fna&oh=00_AfBUwrhCs1HEdWvJ5pD2_ONBcBeEiIj_E0uEejq6R2M1zA&oe=64B24050 "
                                        class="img-radius" alt="User-Profile-Image">
                                    <span>Hong Dan Nguyen</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius"
                                        src="https://scontent.fdad3-5.fna.fbcdn.net/v/t1.6435-9/153176303_104212205058618_5577089710505789429_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=DiE9l_GA8DMAX9OQmyj&_nc_ht=scontent.fdad3-5.fna&oh=00_AfBUwrhCs1HEdWvJ5pD2_ONBcBeEiIj_E0uEejq6R2M1zA&oe=64B24050"
                                        alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>Hong Dan</span>
                                        <span id="more-details">Admin</span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="#"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i
                                                    class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-search">
                                <span class="searchbar-toggle"> </span>
                                <div class="pcoded-search-box ml-8">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Managerment</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active mt-2">
                                </li>
                                <li class="pcoded-hasmenu mt-2">
                                    {{-- <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"
                                            data-i18n="nav.basic-components.main">Components</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a> --}}
                                    <ul class="pcoded-submenu mt-2">
                                        <li class="m-3">
                                            <a href="{{ route('allbills') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Bills</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="ml-2">
                                                <li class="ml-3">
                                                    <a href="{{ route('editbills') }}">
                                                        <span class="pcoded-micon"><i
                                                                class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext"
                                                            data-i18n="nav.basic-components.alert">Add Bills</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="ml-3">
                                                    <a href="{{ route('edit2bills') }}">
                                                        <span class="pcoded-micon"><i
                                                                class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext"
                                                            data-i18n="nav.basic-components.alert">Change Bills</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="ml-3">
                                                    <a href="{{ route('deletebills') }}">
                                                        <span class="pcoded-micon"><i
                                                                class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext"
                                                            data-i18n="nav.basic-components.alert">Delete Bills</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="m-3">
                                            <a href="breadcrumb.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Bill Detail</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="button.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Clients</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="{{ route('allcoupons') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Coupons</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="ml-2">
                                                <li class="ml-3">
                                                    <a href="{{ route('editcoupons') }}">
                                                        <span class="pcoded-micon"><i
                                                                class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext"
                                                            data-i18n="nav.basic-components.alert">Add Coupons</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="ml-3">
                                                    <a href="{{ route('edit2coupons') }}">
                                                        <span class="pcoded-micon"><i
                                                                class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext"
                                                            data-i18n="nav.basic-components.alert">Change Coupons</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="ml-3">
                                                    <a href="{{ route('deletecoupons') }}">
                                                        <span class="pcoded-micon"><i
                                                                class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext"
                                                            data-i18n="nav.basic-components.alert">Delete Coupons</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="m-3">
                                            <a href="{{ route('allfoods') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Foods</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="ml-2">
                                                <li class="ml-3">
                                                    <a href="{{ route('editfoods') }}">
                                                        <span class="pcoded-micon"><i
                                                                class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext"
                                                            data-i18n="nav.basic-components.alert">Add Foods</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="ml-3">
                                                    <a href="{{ route('edit2foods') }}">
                                                        <span class="pcoded-micon"><i
                                                                class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext"
                                                            data-i18n="nav.basic-components.alert">Change Foods</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="ml-3">
                                                    <a href="{{ route('deletefoods') }}">
                                                        <span class="pcoded-micon"><i
                                                                class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext"
                                                            data-i18n="nav.basic-components.alert">Delete Foods</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="m-3">
                                            <a href="label-badge.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">List Order</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="tooltip.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Order</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="typography.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Order Food</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="notification.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Payment</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="icon-themify.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Serving Table</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="icon-themify.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Staffs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="icon-themify.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Tables</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="icon-themify.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Type</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="icon-themify.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Users</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="icon-themify.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Users Table
                                                    User</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="m-3">
                                            <a href="icon-themify.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Users Table</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                    {{-- <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Statistic</h5>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-error close-card"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="statestics-chart" style="height:517px;">
                                                            <canvas id="myChart"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-12 col-xl-4">
                                                <div class="card fb-card">
                                                    <div class="card-header">
                                                        <i class="icofont icofont-social-facebook"></i>
                                                        <div class="d-inline-block">
                                                            <h5>facebook</h5>
                                                            <span>Đan Nguyễn</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h2>01</h2>
                                                                <p class="text-muted">Người nào iu.</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h2>01</h2>
                                                                <p class="text-muted">Nợ mẹ nàng dâu.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card dribble-card">
                                                    <div class="card-header">
                                                        <i class="icofont icofont-social-instagram"></i>
                                                        <div class="d-inline-block">
                                                            <h5>Instagram</h5>
                                                            <span>nguyendan10000</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h2>01</h2>
                                                                <p class="text-muted">Vợ</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h2>02</h2>
                                                                <p class="text-muted">Con, Happy Life Happy Ending.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="fixed-button">
                <a href="https://codedthemes.com/item/guru-able-admin-template/" target="_blank"
                    class="btn btn-md btn-primary">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script>
        // Lấy dữ liệu từ Laravel và gán vào biến JavaScript
        var productNames = @json($productNames);
        var productCounts = @json($productCounts);

        // Tạo mảng labels chứa tên sản phẩm
        var labels = productNames;

        // Tạo mảng data chứa số lượng sản phẩm tương ứng
        var data = productNames.map(function(productName) {
            return productCounts[productName];
        });

        // Tạo biểu đồ cột bằng Chart.js
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Số lượng',
                    data: data,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Màu nền cột
                    borderColor: 'rgba(54, 162, 235, 1)', // Màu viền cột
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1 // Độ đơn vị giữa các giá trị trên trục y
                    }
                }
            }
        });
    </script> --}}
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <!-- am chart -->
    <script src="assets/pages/widget/amchart/amcharts.min.js"></script>
    <script src="assets/pages/widget/amchart/serial.min.js"></script>
    <!-- Todo js -->
    <script type="text/javascript " src="assets/pages/todo/todo.js "></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function() {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });
    </script>
</body>

</html>
