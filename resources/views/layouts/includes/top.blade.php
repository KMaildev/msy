<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">
                <b>
                    <img src="{{ asset('data/applogo.png') }}" alt="homepage" class="light-logo"
                        style="width: 80%" />
                </b>
            </a>
        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                        href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark"
                        href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                <li class="nav-item">
                    <form class="app-search d-none d-md-block d-lg-block" action="{{ route('passport.index') }}"
                        method="GET">
                        <input type="text" class="form-control" placeholder="Search & enter" name="search">
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            src="{{ asset('design/assets/images/users/1.jpg') }}" alt="user" class="">
                        <span class="hidden-md-down">Admin &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                    <div class="dropdown-menu dropdown-menu-end animated flipInY">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My
                            Profile</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i>
                            {{ __('Logout') }}
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
