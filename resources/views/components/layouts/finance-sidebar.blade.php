<!-- Main Sidebar Container -->
</nav>
<!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 text-sm">
    <!-- Brand Logo -->
    <a href="/finance/dashboard" class="brand-link text-center">
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
                <a href="/finance/dashboard" class="nav-link @if ($title == 'Dashboard') active @endif">
                    <i class="nav-icon fa fa-tachometer-alt"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li> 

            <li class="nav-item">            
                <a href="/finance/layanan" class="nav-link @if ($title == 'Layanan') active @endif">
                <i class="nav-icon fa fa-folder-open"></i>
                <p>
                    Data Layanan
                </p>
                </a>
            </li>       
            <li class="nav-item">            
                <a href="/finance/perusahaan" class="nav-link @if ($title == 'Perusahaan') active @endif">
                    <i class="nav-icon fa fa-address-card"></i>
                    <p>
                    Data Perusahaan
                    </p>
                </a>
            </li>
            <li class="nav-item">            
                <a href="/finance/transaksi" class="nav-link @if ($title == 'Transaksi') active @endif">
                    <i class="nav-icon fa fa-table"></i>
                    <p>
                    Data Transaksi
                    </p>
                </a>
            </li>
            <li class="nav-item">            
                <a href="/finance/pembayaran" class="nav-link @if ($title == 'Pembayaran') active @endif">
                    <i class="nav-icon fa fa-credit-card"></i>
                    <p>
                    Data Pembayaran
                    </p>
                </a>
            </li>

            <li class="nav-header">
                <hr>
            </li>
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
