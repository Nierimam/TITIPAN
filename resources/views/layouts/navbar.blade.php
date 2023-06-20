<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center" style="text-decoration: none">

            <img src="{{ asset('images/titipanfix.png')}}" class="image" alt="">
            <h1>Titipan</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar" style="right: 100px">
            <ul>
                <li><a href="/" class="nav-link {{ $active === 'landingpage' ? 'active' : '' }}">Home</a></li>
                <li>
                    <a href="jasapindahan" class="nav-link {{ $active === 'jasapindahan' ? 'active' : '' }}">Jasa
                        Pindahan</a>
                </li>
                <li></li>
                <a href="jasapenyimpanan" class="nav-link {{ $active === 'jasapenyimpanan' ? 'active' : '' }}">Jasa
                    Penyimpan</a>
                </li>
                <li>
                    <a href="jasapengiriman" class="nav-link {{ $active === 'jasapengiriman' ? 'active' : '' }}">Jasa
                        Pengiriman</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto px-4">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item @if ($title === 'Login & Register') @endif" href="/sesi">Login</a>
                        </li>
                        <li><a class="dropdown-item @if ($title === 'Login & Register') @endif"
                                href="/sesi">Register</a></li>
                    </ul>
                </div>
            </ul>
        </nav>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->
<!-- End Header -->