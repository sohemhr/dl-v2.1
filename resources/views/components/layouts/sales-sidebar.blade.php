<!-- Main Sidebar Container -->
</nav>
<!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 text-sm">
    <!-- Brand Logo -->
    <a href="/sales/dashboard" class="brand-link text-center">
        <img src="/img/logo-light.png" alt="Dokter Legal" class="brand-image  elevation-3" style="opacity: .8">
        <span class="brand-text fs-50">
        <b>&nbsp;&nbsp;Dokter Legal</b>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-header"></li>
            <li class="nav-item menu-open">
                <a href="/sales/dashboard" class="nav-link @if ($title == 'Dashboard') active @endif">
                    <i class="nav-icon fa fa-tachometer-alt"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li> 
            <li class="nav-item">            
                <a href="/sales/contact" class="nav-link @if ($title == 'Contact') active @endif">
                    <i class="nav-icon fa fa-envelope"></i>
                    <p>
                    Contact
                    @php
                        $new_pesan = \App\Helpers\MyHelper::GetBeforereadContact();
                    @endphp
                    @if ($new_pesan->isEmpty())
                    
                    @else
                    <span class="badge badge-info right">{{ $new_pesan->count() }}</span>
                    @endif
                    </p>
                </a>
            </li>
            <li class="nav-item">            
                <a href="/sales/checking" class="nav-link @if ($title == 'Checking List') active @endif">
                    <i class="nav-icon fa fa-random"></i>
                    <p>
                    Checking 
                    @php
                        $new_cek = \App\Helpers\MyHelper::GetBeforereadChecking();
                    @endphp
                    @if ($new_cek->isEmpty())
                    
                    @else
                    <span class="badge badge-info right">{{ $new_cek->count() }}</span>
                    @endif
                    </p>
                </a>
            </li>

            <li class="nav-item">            
                <a href="/sales/layanan" class="nav-link @if ($title == 'Layanan') active @endif">
                <i class="nav-icon fa fa-folder-open"></i>
                <p>
                    Layanan
                </p>
                </a>
            </li>

            <li class="nav-header">
                <b>MANAGEMENT</b>
            </li>        
            <li class="nav-item">            
                <a href="/sales/perusahaan" class="nav-link @if ($title == 'Perusahaan') active @endif">
                    <i class="nav-icon fa fa-address-card"></i>
                    <p>
                    Data Perusahaan
                    </p>
                </a>
            </li>

            <li class="nav-item  @if ($title == 'Transaksi' || $title == 'Process Start' || $title == 'Process Ongoing' || $title == 'Process Pending' || $title == 'Process Completed')  menu-open @endif">
                <a href="#" class="nav-link @if ($title == 'Transaksi' || $title == 'Process Start' || $title == 'Process Ongoing' || $title == 'Process Pending' || $title == 'Process Completed') active @endif">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                    Data Transaksi
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sales/transaksi" class="nav-link @if ($title == 'Transaksi') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Transaksi </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/sales/main-process/start" class="nav-link @if ($title == 'Process Start') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Start</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/sales/main-process/onprocess" class="nav-link @if ($title == 'Process Ongoing') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>OnProcess</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/sales/main-process/pending" class="nav-link @if ($title == 'Process Pending') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pending</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/sales/main-process/completed" class="nav-link @if ($title == 'Process Completed') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Completed</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-header">
                <hr>
            </li>
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
