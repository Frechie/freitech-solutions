<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="NIgeria Number 1 Technology Soluytion">
    <meta name="author" content="Alfred Ifogbe, Technology Consultant & Software Engineer">
    <meta name="keywords" content="Nigeria Technology Solution, Technology Consultant">
    <meta name="keywords" content="Data Analytics and Visualization, Power-Bi MySQL, Python">
    <meta name="keywords" content="Creative Grapgics Design, Nigeria Creative Grapics Designer">
    <title>Freitech Solutions : Everything Technology</title>
    <link href="{{asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white fixed-top navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-purple elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/')}}" class="brand-link text-center text-bold">
                FreitechSolution
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <div class="icon">
                                    <i class="nav-icon icofont-dashboard-web text-white"></i>
                                    <p> Dashboard </p>
                                </div>

                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <div class="icon">
                                    <i class="nav-icon icofont-ui-user-group text-white"></i>
                                    <p>
                                        Manage Users
                                    </p>
                                </div>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                                        <div class="icon">
                                            <i class="nav-icon icofont-user"></i>
                                            <p>Users</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/compose.html" class="nav-link">
                                        <i class="nav-icon icofont-folder-open text-white"></i>
                                        <p>Roles</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                                        <i class="nav-icon icofont-lock text-white"></i>
                                        <p>Permissions</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <div class="icon">
                                    <i class="nav-icon icofont-learn text-white"></i>
                                    <p>Training</p>

                                </div>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/portal/training') }}" class="nav-link">
                                        <i class="nav-icon icofont-file-document text-white"></i>
                                        <p>Register</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="nav-icon far fa-envelope"></i>
                                        <p> Messages</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/calendar.html" class="nav-link">
                                        <i class="nav-icon far fa-calendar-alt"></i>
                                        <p> Schedule </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon icofont-"></i>
                                <p>Reports </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class=" nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <div class="icon">
                                    <i class="icofont-sign-out text-danger"></i>
                                    <p>Logout</p>
                                </div>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">

            @yield('content')

        </div>
        </section>
    </div>
    <footer id="footer" class="main-footer">
        <div class="container">
            <div class="copyright">
                Copyright &copy; {{date('Y') }} <strong class="text-white"><span><a class="text-white" href="{{url('/')}}">Freitech Solutions</a></span></strong>. All Rights Reserved <br>
                <small>The information contained herein may not be published, broadcast, rewritten, or or redistributed
                    without the prior written authority of <strong><span><a class="text-white" href="{{url('/')}}">Freitech Solutions.</a></span></strong></small>
            </div>
        </div>
    </footer>
    </div>
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/admin/js/adminlte.js') }}"></script>
</body>

</html>