<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website Gudang Sablon Pringsewu">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>DASHBOARD || Website Gudang Sablon Pringsewu</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="{{ asset('assets-admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-admin/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-admin/plugins/pace/pace.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-admin/plugins/datatables/datatables.min.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>


    <!-- Theme Styles -->
    <link href="{{ asset('assets-admin/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-admin/css/custom.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets-admin/images/neptune.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets-admin/images/neptune.png') }}" />

    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
    <style>
        .cke_notification_warning {
            display: none;
        }
    </style>

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="#" class="logo-icon"><span class="logo-text">BELIA</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        @if (Auth::user()->photo)
                            <img src="{{ asset('assets-admin/images/photo/' . Auth::user()->photo) }}">
                        @else
                            <img src="{{ asset('assets-admin/images/user.png') }}">
                        @endif
                        <span class="activity-indicator"></span>
                        <span class="user-info-text">{{ Auth::user()->name }}<br><span class="user-state-info">
                                @if (Auth::user()->level == 'admin')
                                    Administrator
                               
                                @endif
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Sablon 
                    </li>
                    @if (Auth::user()->level == 'admin')
                        <li class="@yield('active_dashboard')">
                            <a href="{{ route('admin.index') }}" class="active"><i
                                    class="material-icons-two-tone">dashboard</i>Dashboard</a>
                        </li>
                        <li class="@yield('active_product')">
                            <a href="{{ route('admin.product') }}" class="active"><i
                                    class="material-icons-two-tone">inventory</i>Product</a>
                        </li>
                      
                    @elseif (Auth::user()->level == 'duta')
                        <li class="@yield('active_dashboard')">
                            <a href="{{ route('duta.dashboard') }}" class="active"><i
                                    class="material-icons-two-tone">dashboard</i>Dashboard</a>
                        </li>
                        <li class="@yield('active_data_siswa')">
                            <a href="#"><i class="material-icons-two-tone">people</i>Data Siswa<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('duta.siswa.create') }}">Create New</a>
                                    <a href="{{ route('duta.siswa') }}">Data Siswa</a>
                                </li>
                            </ul>
                        </li>
                        <li class="@yield('menu_laporan')">
                            <a href="#"><i class="material-icons-two-tone">report</i>Laporan<i
                                    class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('duta.laporan.create') }}">Create New</a>
                                    <a href="{{ route('duta.laporan') }}">Data Laporan</a>
                                </li>
                            </ul>
                        </li>
                    @elseif (Auth::user()->level == 'puskesmas')
                        <li class="@yield('active_dashboard')">
                            <a href="{{ route('puskesmas.dashboard') }}" class="active"><i
                                    class="material-icons-two-tone">dashboard</i>Dashboard</a>
                        </li>
                        <li class="@yield('active_laporan')">
                            <a href="{{ route('puskesmas.laporan') }}" class="active"><i
                                    class="material-icons-two-tone">report</i>Laporan</a>
                        </li>
                    @elseif (Auth::user()->level == 'guru')
                        <li class="@yield('active_dashboard')">
                            <a href="{{ route('guru.dashboard') }}" class="active"><i
                                    class="material-icons-two-tone">dashboard</i>Dashboard</a>
                        </li>
                        <li class="@yield('active_laporan')">
                            <a href="{{ route('guru.laporan') }}" class="active"><i
                                    class="material-icons-two-tone">report</i>Laporan</a>
                        </li>
                        <li class="@yield('active_data_duta_belia')">
                            <a href="{{ route('guru.dataDutaBelia') }}" class="active"><i
                                    class="material-icons-two-tone">people</i>Duta Belia</a>
                        </li>
                    @endif


                    <li class="sidebar-title">
                        Account
                    </li>
                    <li class="@yiend('active')">
                        <a href="{{ route('logout') }}" class="active"><i
                                class="material-icons-two-tone">logout</i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i
                                            class="material-icons">first_page</i></a>
                                </li>
                                

                            </ul>

                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>@yield('page_name')</h1>
                                </div>
                            </div>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-custom" role="alert">
                                <div class="custom-alert-icon icon-primary"><i
                                        class="material-icons-outlined">done</i></div>
                                <div class="alert-content">
                                    <span class="alert-title">{{ session('success') }}</span>
                                </div>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-custom" role="alert">
                                <div class="custom-alert-icon icon-warning"><i
                                        class="material-icons-outlined">error</i></div>
                                <div class="alert-content">
                                    <span class="alert-title">{{ session('error') }}</span>
                                </div>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-custom" role="alert">
                                <div class="custom-alert-icon icon-warning"><i
                                        class="material-icons-outlined">error</i></div>
                                <div class="alert-content">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('popup'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    

    <!-- Javascripts -->
    <script src="https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.js"></script>
    <script>
        CKEDITOR.replace('editor'); 
    </script>


    <script src="{{ asset('assets-admin/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/main.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/datatables.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/chartjs/chart.min.js') }}"></script>
</body>

</html>
