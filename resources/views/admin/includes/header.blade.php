<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Salle de sport</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->
            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">
                        {{ Auth::user()->notifications()->get()->count() }} 
                    </span>
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" style="">
                    <li class="dropdown-header">
                        Vous avez {{ Auth::user()->notifications()->get()->count() }} notifications
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @foreach(Auth::user()->notifications()->get() as $notification)
                    <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                            <p>{{ $notification->contenue }}</p>
                            <p>{{ $notification->created_at->diffForHumans() }}</p>
                        </div>
                    </li>
                    @endforeach
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                </ul><!-- End Notification Dropdown Items -->

            </li>
            <!-- End Notification Nav -->

            <!-- End Messages Nav -->

            <!-- End Profile Nav -->
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{ asset('storage/'.Auth::user()->photo) }}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->nom }}
                        {{ Auth::user()->prenom }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="">
                    <li class="dropdown-header">
                        <h6>{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('entraineur.profile') }}">
                            <i class="bi bi-person"></i>
                            <span>Mon profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i>

                            {{ __('Déconnecter') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul><!-- End Profile Dropdown Items -->
            </li>

        </ul>
    </nav><!-- End Icons Navigation -->

</header>
