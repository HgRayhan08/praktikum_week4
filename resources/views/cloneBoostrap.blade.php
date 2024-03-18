<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <!-- start Navbar -->
    <nav style="background-color: #7533F9;" class="navbar fixed-top navbar-expand-lg bg-purple" data-bs-theme="dark">
        <div class="container py-2 px-4">
            <a href="#" class="navbar-brand mb-0 h1">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/logo-white.svg') }}" alt="logo"
                    style="width: 45px" />
            </a>

            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--  start sidebar kanan-->
            <div class="offcanvas offcanvas-end bg-purple" id="offcanvasNavbar" style="background-color: #7533F9;">
                <!-- start sidebar Header -->
                <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">
                        Bootstrap
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- end sidebar header -->

                <!-- start sidebar Body -->
                <div class="offcanvas-body pt-0 px-4">
                    <hr class="d-lg-none text-white-50" />
                    <!-- Horizontal Line -->

                    <!-- start Menu -->
                    <ul class="navbar-nav flex-row flex-wrap">
                        <li class="nav-item col-6 col-lg-auto">
                            <a href="#" class="nav-link active">Docs</a>
                        </li>
                        <li class="nav-item col-6 col-lg-auto">
                            <a href="#" class="nav-link">Examples</a>
                        </li>
                        <li class="nav-item col-6 col-lg-auto">
                            <a href="#" class="nav-link">Icons</a>
                        </li>
                        <li class="nav-item col-6 col-lg-auto">
                            <a href="#" class="nav-link">Themes</a>
                        </li>
                        <li class="nav-item col-6 col-lg-auto">
                            <a href="#" class="nav-link">Blog</a>
                        </li>
                    </ul>
                    <!-- end menu -->

                    <hr class="d-lg-none text-white-50" />
                    <!-- Horizontal Line -->

                    <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                        <!-- start Sosial Media  -->
                        <li class="nav-item col-6 col-lg-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi-github"></i><small class="ms-2 d-lg-none">Github</small>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi-twitter"></i><small class="ms-2 d-lg-none">Twitter</small>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi-slack"></i><small class="ms-2 d-lg-none">Slack</small>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                            <hr class="d-lg-none my-2 text-white-50" />
                        </li>
                        <!-- end Sosial Media -->
                        <li class="nav-item">
                            <!-- start dropdown version -->
                            <div class="dropdown" data-bs-theme="light">
                                <button type="button" class="btn nav-link text-white dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="d-lg-none">Bootstrap</span>
                                    v5.3
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <h6 class="dropdown-header">v5
                                            releases</h6>
                                    </li>
                                    <li>
                                        <button class="dropdown-item active bg-purple" type="button">
                                            <small>Latest (5.3.x) <i class="bi-check"></i></small>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <small>v5.2.3</small>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <small>v5.1.3</small>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <small>v5.0.2</small>
                                        </button>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <h6 class="dropdown-header">Previous
                                            releases</h6>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <small>v4.6.x</small>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <small>v3.4.1</small>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <small>v2.3.2</small>
                                        </button>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <small>All versions</small>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- end dropdown version -->
                        <li class="nav-item col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                            <hr class="d-lg-none my-2 text-white-50" />
                        </li>
                        <li class="nav-item">
                            <!-- Dropdown -->
                            <div class="dropdown" data-bs-theme="light">
                                <button type="button" class="btn nav-link text-white dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi-brightness-high-fill"></i><span class="d-lg-none">Toggle
                                        theme</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <button class="dropdown-item active bg-purple" type="button">
                                            <small><i class="bi-brightness-high-fill me-2"></i>Light</small>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <small><i class="bi-moon-stars-fill me-2"></i>Dark</small>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <small><i class="bi-circle-half me-2"></i>Auto</small>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end sidebar body -->
            </div>
            <!-- end sidebar kanan -->
        </div>
    </nav>
    <!-- end Navbar -->
    <!-- start Main -->
    <!-- start first container main -->
    <main>

        <div class="bg-light mt-5" id="main">
            <div class="container py-5 px-4">
                <div class="row">
                    <div class="col-md-5 order-md-2">
                        <img class="img-fluid" src="{{ Vite::asset('resources/images/main.svg') }}" alt="main logo">
                    </div>
                    <div class="col-md-7 order-md-1">
                        <h1 class="mt-4 display-3">Build fast, responsive
                            sites
                            with Bootstrap</h1>
                        <p class="fs-5 mt-3">Quickly design and customize
                            responsive mobile-first sites with Bootstrap,
                            the
                            world's most popular front-end open source
                            toolkit,
                            featuring Sass variables and mixins, responsive
                            grid
                            system, extensive prebuilt components, and
                            powerful
                            JavaScript plugins.</p>
                        <div class="row">
                            <div class="d-flex flex-column flex-md-row">
                                <button type="button" class="btn bg-purple text-white btn-lg mb-3 me-md-3 px-4 py-3"
                                    style="background-color: #7533F9;">Get
                                    Started</button>
                                <button type="button"
                                    class="btn btn-outline-dark btn-lg mb-3 px-4 py-3">Download</button>
                            </div>
                        </div>
                        <div class="text-muted">
                            Currently <strong>v5.3.0-alpha2.</strong> · <a href="#">v4.6.x docs</a> · <a
                                href="#">All
                                releases</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end first container main -->

        <!-- start second container main -->
        <div id="bs-container-icons">
            <div class="container py-5 px-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <i class="bi bi-subtract fs-2 bg-warning py-2 px-3 rounded-3 text-white"></i>
                        </div>
                        <h2 class="display-5 mb-3">Personalize it with
                            <br />Bootstrap Icons
                        </h2>
                        <p class="fs-5"><a href="#">Bootstrap Icons</a> is
                            an
                            open source SVG icon library featuring over
                            1,800
                            glyphs, with more added every release. They're
                            designed to work in any project, whether you use
                            Bootstrap itself or not. Use them as SVGs or
                            icon
                            fonts—both options give you vector scaling and
                            easy
                            customization via CSS.</p>
                        <a class="icon-link icon-link-hover lead fw-semibold mb-5" href="#">
                            Get Bootstrap Icons
                            <i class="bi bi-arrow-right mb-2"></i>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src=" {{ Vite::asset('resources/images/bs-icons.png') }} "
                            alt="Bootstrap Icons">
                    </div>
                </div>
            </div>
        </div>
        <!-- end second container main -->

        <!-- start thread container main -->
        <div id="bs-container-theme">
            <div class="container py-5 px-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3 mt-5">
                            <i class="bi bi-droplet-fill fs-2 bg-info py-2 px-3 rounded-3 text-white"></i>
                        </div>
                        <h2 class="display-5">Make it yours with official
                            Bootstrap Themes</h2>
                        <p class="fs-5">Take Bootstrap to the next level
                            with
                            premium themes from the <a href="#">official
                                Bootstrap Themes marketplace</a>. Themes are
                            built on Bootstrap as their own extended
                            frameworks,
                            rich with new components and plugins,
                            documentation,
                            and powerful build tools.</p>
                        <a class="icon-link icon-link-hover lead fw-semibold mb-5" href="#">
                            Browse Bootstrap Themes
                            <i class="bi bi-arrow-right mb-2"></i>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src=" {{ Vite::asset('resources/images/bs-themes.png') }}"
                            alt="Bootstrap Themes">
                    </div>
                </div>
            </div>
        </div>
        <!-- end thread container main -->
    </main>

    <!-- end Main -->
    <!-- start footer -->
    <div id="footer" class="bg-light py-5">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <a href="#" class="logo text-decoration-none">
                        <div class="d-flex">
                            <img class="img-fluid" src=" {{ Vite::asset('resources/images/logo-black.svg') }} "
                                alt="Bootstrap Logo" style="width: 40px;">
                            <div class="fs-5 ms-2 text-black">Bootstrap</div>
                        </div>
                    </a>
                    <div class="mt-2 text-muted">
                        <small>Designed and built with all the love in
                            the
                            world by the <a href="#" class="text-black">Bootstrap team</a>
                            with
                            the help of <a href="#" class="text-black">our
                                contributors</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Code licensed <a href="#" class="text-black">MIT</a>, docs <a href="#"
                                class="text-black">CC BY
                                3.0</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Currently v5.3.0-alpha2.</small>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-5">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Home</a></li>
                        <li class="mb-2"><a href="#">Docs</a></li>
                        <li class="mb-2"><a href="#">Examples</a></li>
                        <li class="mb-2"><a href="#">Icons</a></li>
                        <li class="mb-2"><a href="#">Themes</a></li>
                        <li class="mb-2"><a href="#">Blog</a></li>
                        <li class="mb-2"><a href="#">Swag Store</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Guides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Getting
                                started</a></li>
                        <li class="mb-2"><a href="#">Starter
                                template</a></li>
                        <li class="mb-2"><a href="#">Webpack</a></li>
                        <li class="mb-2"><a href="#">Parcel</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Projects</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Bootstrap
                                5</a></li>
                        <li class="mb-2"><a href="#">Bootstrap
                                4</a></li>
                        <li class="mb-2"><a href="#">Icons</a></li>
                        <li class="mb-2"><a href="#">RFS</a></li>
                        <li class="mb-2"><a href="#">npm
                                starter</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Issues</a></li>
                        <li class="mb-2"><a href="#">Discussions</a></li>
                        <li class="mb-2"><a href="#">Corporate
                                sponsors</a></li>
                        <li class="mb-2"><a href="#">Open
                                Collective</a></li>
                        <li class="mb-2"><a href="#">Slack</a></li>
                        <li class="mb-2"><a href="#">Stack
                                overflow</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')

</body>

</html>