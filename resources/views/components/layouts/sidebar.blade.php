<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="index" class="d-block text-decoration-none position-relative">
            <img src="/assets/images/logo-icon.png" alt="logo-icon">
            <span class="logo-text fw-bold text-dark">Dokter Legal</span>
        </a>
        <button class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu">
            <i data-feather="x"></i>
        </button>
    </div>

    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">MAIN</span>
            </li>
            <li class="menu-item">
                <a href="/admstr/dashboard" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">dashboard</span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="menu-item open">
                <a href="/admstr/kategori" class="menu-link {{ Request::is('admstr/kategori') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">category</span>
                    <span class="title">Kategori</span>
                </a>
            </li>
            <li class="menu-item open">
                <a href="/admstr/artikel" class="menu-link {{ Request::is('admstr/artikel') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">Article</span>
                    <span class="title">Data Artikel</span>
                </a>
            </li>
            <li class="menu-item open">
                <a href="/admstr/promo" class="menu-link {{ Request::is('admstr/promo') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">Campaign</span>
                    <span class="title">Data Promo</span>
                </a>
            </li>
            <li class="menu-item open">
                <a href="/admstr/career" class="menu-link {{ Request::is('admstr/career') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">Work</span>
                    <span class="title">Data Career</span>
                </a>
            </li>
            <li class="menu-item open">
                <a href="/admstr/contact" class="menu-link {{ Request::is('admstr/contact') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">Contacts</span>
                    <span class="title">Contact</span>
                </a>
            </li>
             <li class="menu-item open">
                <a href="/admstr/checking2" class="menu-link {{ Request::is('admstr/checking2') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">Search_Check</span>
                    <span class="title">Checking</span>
                </a>
            </li>
            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">TRANSAKSI</span>
            </li>
            <li class="menu-item open">
                <a href="/admstr/perusahaan" class="menu-link {{ Request::is('admstr/perusahaan') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">patient_list</span>
                    <span class="title">Data Perusahaan</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="/admstr/artikel" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">receipt</span>
                    <span class="title">Data Transaksi</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="/admstr/transaksi" class="menu-link">
                            <span class="title">Transaksi</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/admstr/main-process/start" class="menu-link {{ Request::is('admstr/main-process/start') ? 'active' : '' }}">
                            <span class="title">Start</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/admstr/main-process/onprocess" class="menu-link {{ Request::is('admstr/main-process/on-process') ? 'active' : '' }}">
                            <span class="title">On Process</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/admstr/main-process/pending" class="menu-link {{ Request::is('admstr/main-process/pending') ? 'active' : '' }}">
                            <span class="title">Pending</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/admstr/main-process/completed" class="menu-link {{ Request::is('admstr/main-process/completed') ? 'active' : '' }}">
                            <span class="title">Completed</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item open">
                <a href="/admstr/pembayaran" class="menu-link {{ Request::is('admstr/pembayaran') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">payments</span>
                    <span class="title">Data Pembayaran</span>
                </a>
            </li>
            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">MASTER WEB</span>
            </li>
            <li class="menu-item open">
                <a href="/admstr/office" class="menu-link {{ Request::is('admstr/office') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon"> Domain</span>
                    <span class="title">Office</span>
                </a>
            </li>
            <li class="menu-item open">
                <a href="/admstr/rekening" class="menu-link {{ Request::is('admstr/rekening') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">credit_card</span>
                    <span class="title">Rekening</span>
                </a>
            </li>
            <li class="menu-item open">
                <a href="/admstr/layanan" class="menu-link {{ Request::is('admstr/layanan') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">feature_search</span>
                    <span class="title">Layanan</span>
                </a>
            </li>
            <li class="menu-item open">
                <a href="/admstr/includelist" class="menu-link {{ Request::is('admstr/includelist') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">Search_Check</span>
                    <span class="title">Include List</span>
                </a>
            </li>
            <li class="menu-item open">
                <a href="/admstr/list-proses" class="menu-link {{ Request::is('admstr/list-proses') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">List</span>
                    <span class="title">List Proses</span>
                </a>
            </li>
            <li class="menu-item open">
                <a href="/admstr/backup" class="menu-link {{ Request::is('admstr/backup') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">Database</span>
                    <span class="title">Backup Database</span>
                </a>
            </li>
            <li class="menu-item open">
                <a href="/admstr/maintenance/show" class="menu-link {{ Request::is('admstr/maintenance/show') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">construction</span>
                    <span class="title">Maintenance</span>
                </a>
            </li>
              <li class="menu-title small text-uppercase">
                <span class="menu-title-text">USER WEB</span>
            </li>
            <li class="menu-item open">
                <a href="/admstr/user" class="menu-link {{ Request::is('admstr/user') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">group</span>
                    <span class="title">Users</span>
                </a>
            </li><br>

            <li class="menu-item">
                <a href="/logout" class="menu-link logout">
                    <span class="material-symbols-outlined menu-icon">logout</span>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </aside>
</div>