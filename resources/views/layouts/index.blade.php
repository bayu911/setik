<!DOCTYPE html>
<html ang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Flexy</title>
    
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/radio.png') }}">

    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon">
                            <img src="{{ asset('images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                        </b>
                        <span class="logo-text">
                            <img src="{{ asset('images/radio.png') }}" alt="homepage" class="dark-logo" />
                            <img src="{{ asset('images/radio.png') }}" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="ms-auto navbar-nav float-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic show" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                              <img src="{{ asset('images/profile.png') }}" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated show" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"><i class="mdi mdi-account m-r-5 m-l-5"></i> Logout</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('jadwal') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Jadwal</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('siaran') }}" aria-expanded="false"><i
                                    class="mdi mdi-account-network"></i><span class="hide-menu">Siaran</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('iklan') }}" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">iklan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('musik') }}" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                    class="hide-menu">Musik</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ url('penyiar') }}" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                    class="hide-menu">penyiar</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>

            <footer class="footer text-center">{{ date('d-m-Y') }}</footer>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>