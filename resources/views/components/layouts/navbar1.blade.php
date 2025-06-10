    <style>
        @-webkit-keyframes blinker {
        from {opacity: 1.0;}
        to {opacity: 0.0;}
        }
        .blink{
            text-decoration: blink;
            -webkit-animation-name: blinker;
            -webkit-animation-duration: 0.6s;
            -webkit-animation-iteration-count:infinite;
            -webkit-animation-timing-function:ease-in-out;
            -webkit-animation-direction: alternate;
        }
    </style>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed text-sm">
    <div class="wrapper">
    
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="/img/logo-light.png" alt="Dokter Legal" height="20%" width="20%">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark text-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="https://www.dokterlegal.co.id" class="nav-link" target="_blank"><i class="fa fa-globe"></i> &nbsp;View Website</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @php
            $newHbd = \App\Helpers\MyHelper::ulangTahun();
            $hbd_thn = date('Y');
            $hbd_bln = date('m');
            $hbd_tgl = date('d');
        @endphp
        
        @if (auth('user')->user()->level == '202500' || auth('user')->user()->level == '202501')
            @if ($newHbd->isEmpty())
                        
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-info navbar-badge blink">Click Me</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Happy Birthday Today</span>
                        <div class="dropdown-divider"></div>
                        @foreach ($newHbd as $userHbd)
                        <a href="#" class="dropdown-item">
                            {{-- <i class="fas fa-user mr-2"></i>  --}}
                            <img src="/storage/{{ $userHbd->foto }}" class="user-image img-circle elevation-2 mr-2" width="35px" alt="User">
                            {{ $userHbd->nama }}
                            @php
                                $hbdKe = $hbd_thn - $userHbd->tgl_thn;
                            @endphp
                            <span class="float-right text-muted text-sm">{{ $hbdKe }} &nbsp; Thn</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        @endforeach
                    </div>
                </li>
            @endif
        @endif

        @if ($hbd_tgl == auth('user')->user()->tgl_tgl && $hbd_bln == auth('user')->user()->tgl_bln)
            <li class="nav-item dropdown">
                <a class="nav-link" href="/ulang-tahun" target="_blank">
                <i class="fa fa-gift" aria-hidden="true"></i>
                <span class="badge badge-danger navbar-badge blink">Click Me</span>
                </a>
            </li>
        @endif
        
        
        <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            @if (auth('user')->user()->foto == 0 )
                <img src="/storage/users_foto/default.png" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{ auth('user')->user()->nama }}</span>
            @else
                <img src="/storage/{{ auth('user')->user()->foto }}" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{ auth('user')->user()->nama }}</span>
            @endif            
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary">
                @if (auth('user')->user()->foto == '')
                    <img src="/storage/users_foto/default.png" class="user-image img-circle elevation-2" alt="User Image">
                @else
                    <img src="/storage/{{ auth('user')->user()->foto }}" class="img-circle elevation-2" alt="User Image">
                @endif
            <p>
                {{ auth('user')->user()->nama }}
                <small>Member since {{ auth('user')->user()->created_at->diffForHumans() }}</small>
            </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
            <a href="/profile" class="btn btn-default btn-flat">Profile</a>
            <a href="/auth_admstr/logout" class="btn btn-default btn-flat float-right">Logout</a>
            </li>
        </ul>
        </li>
    </ul>
