<header class="header-area bg-white mb-4 rounded-bottom-15" id="header-area">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6">
            <div class="left-header-content">
                <ul
                    class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                    <li>
                        <button class="header-burger-menu bg-transparent p-0 border-0" id="header-burger-menu">
                            <span class="material-symbols-outlined">menu</span>
                        </button>
                    </li>
                    <li>
                        <form class="src-form position-relative">
                            <input type="text" class="form-control" placeholder="Search here....." />
                            <button type="submit"
                                class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                <span class="material-symbols-outlined">search</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8 col-sm-6">
            <div class="right-header-content mt-2 mt-sm-0">
                <ul
                    class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">
                    <li class="header-right-item">
                        <div class="light-dark">
                            <button class="switch-toggle settings-btn dark-btn p-0 bg-transparent" id="switch-toggle">
                                <span class="dark"><i class="material-symbols-outlined">light_mode</i></span>
                                <span class="light"><i class="material-symbols-outlined">dark_mode</i></span>
                            </button>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <button class="fullscreen-btn bg-transparent p-0 border-0" id="fullscreen-button">
                            <i class="material-symbols-outlined text-body">fullscreen</i>
                        </button>
                    </li>
                    <li class="header-right-item">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            @if (auth('user')->user()->foto == 0)
                                <img src="/storage/users_foto/default.png" class="user-image img-circle elevation-2"
                                    alt="User Image">
                                <span class="d-none d-md-inline">{{ auth('user')->user()->nama }}</span>
                            @else
                                <img src="/storage/{{ auth('user')->user()->foto }}"
                                    class="user-image img-circle elevation-2" alt="User Image">
                                <span class="d-none d-md-inline">{{ auth('user')->user()->nama }}</span>
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-primary">
                                @if (auth('user')->user()->foto == '')
                                    <img src="/storage/users_foto/default.png" class="user-image img-circle elevation-2"
                                        alt="User Image">
                                @else
                                    <img src="/storage/{{ auth('user')->user()->foto }}" class="img-circle elevation-2"
                                        alt="User Image">
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

                    
                    <li class="header-right-item">
                        <button class="theme-settings-btn p-0 border-0 bg-transparent" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                            aria-controls="offcanvasScrolling">
                            <i class="material-symbols-outlined" data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-title="Click On Theme Settings">settings</i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>