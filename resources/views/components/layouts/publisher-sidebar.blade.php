<!-- Main Sidebar Container -->
</nav>
<!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 text-sm">
    <!-- Brand Logo -->
    <a href="/publisher/dashboard" class="brand-link text-center">
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
                <a href="/publisher/dashboard" class="nav-link @if ($title == 'Dashboard') active @endif">
                    <i class="nav-icon fa fa-tachometer-alt"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li> 
            <li class="nav-item">
                <a href="/publisher/kategori" class="nav-link @if ($title == 'Kategori') active @endif">
                    <i class="nav-icon fa fa-flag"></i>
                    <p>
                    Kategori 
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/publisher/artikel" class="nav-link @if ($title == 'Artikel') active @endif">
                    <i class="nav-icon fa fa-newspaper"></i> 
                    <p>
                    Data Artikel
                    </p>
                </a>
            </li>
            <li class="nav-item">
            <a href="/publisher/promo" class="nav-link @if ($title == 'Promo') active @endif">
                <i class="nav-icon fa fa-bullhorn"></i>
                <p>
                Data Promo
                </p>
            </a>
            </li>            
            <li class="nav-item">
            <a href="/publisher/career" class="nav-link @if ($title == 'Career') active @endif">
                <i class="nav-icon fa fa-briefcase"></i>
                <p>
                Data Career
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
