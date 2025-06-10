<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-3 py-2 align-items-center">
    <div class="container-fluid">
        <!-- Left: Brand or Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand fw-bold text-dark d-lg-none" href="/">Trezo</a>

        <!-- Center: (optional) -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Add search bar or center nav here if needed -->
        </div>

        <!-- Right: User/Profile/Notifications -->
        <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item me-3">
                <a class="nav-link position-relative" href="#">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/assets/images/avatar.png" alt="User" class="rounded-circle" width="32" height="32">
                    <span class="ms-2 d-none d-lg-inline">User</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/my-profile">My Profile</a></li>
                    <li><a class="dropdown-item" href="/settings">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
