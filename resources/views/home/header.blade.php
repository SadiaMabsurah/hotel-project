<!-- header inner -->
<div class="header">
    <div class="container">
        <div class="row">

            <!-- LOGO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                    <div class="center-desk">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="images/logo.png" alt="Logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NAVBAR -->
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark">

                    <!-- Mobile toggle -->
                    <button class="navbar-toggler" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarsExample04"
                            aria-controls="navbarsExample04"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Menu -->
                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="room.html">Our Room</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="gallery.html">Gallery</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact Us</a>
                            </li>

                            {{-- AUTH SECTION --}}
                            @if (Route::has('login'))
                                @auth
                                    <!-- USER DROPDOWN -->
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown"
                                           class="nav-link dropdown-toggle"
                                           href="#"
                                           role="button"
                                           data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            {{ Auth::user()->name }}
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="navbarDropdown">

                                            <li>
                                                <a class="dropdown-item"
                                                   href="{{ route('profile.show') }}">
                                                    Profile
                                                </a>
                                            </li>

                                            <li><hr class="dropdown-divider"></li>

                                            <li>
                                                <a class="dropdown-item"
                                                   href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Logout form -->
                                        <form id="logout-form"
                                              action="{{ route('logout') }}"
                                              method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @else
                                    <!-- LOGIN / REGISTER -->
                                    <li class="nav-item me-2" style="padding-right:10px;">
                                        <a class="btn btn-success"
                                           href="{{ route('login') }}">
                                            Login
                                        </a>
                                    </li>

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="btn btn-primary"
                                               href="{{ route('register') }}">
                                                Register
                                            </a>
                                        </li>
                                    @endif
                                @endauth
                            @endif

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS for dropdown) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
