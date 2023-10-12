<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('front_end_links/phoenix/public/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('front_end_links/phoenix/public/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('front_end_links/phoenix/public/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('front_end_links/phoenix/public/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('front_end_links/phoenix/public/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage"
        content="{{ asset('front_end_links/phoenix/public/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('front_end_links/phoenix/public/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front_end_links/phoenix/public/vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('front_end_links/phoenix/public/assets/js/config.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('front_end_links/phoenix/public/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css') }}">
    <link href="{{ asset('front_end_links/phoenix/public/assets/css/theme-rtl.min.css') }}" type="text/css"
        rel="stylesheet" id="style-rtl">
    <link href="{{ asset('front_end_links/phoenix/public/assets/css/theme.min.css') }}" type="text/css"
        rel="stylesheet" id="style-default">
    <link href="{{ asset('front_end_links/phoenix/public/assets/css/user-rtl.min.css') }}" type="text/css"
        rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('front_end_links/phoenix/public/assets/css/user.min.css') }}" type="text/css" rel="stylesheet"
        id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container">
            <div class="row flex-center min-vh-100 py-5">
                <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a
                        class="d-flex flex-center text-decoration-none mb-4"
                        href="{{ asset('front_end_links/phoenix/public/index.html') }}">
                        <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block">
                            <x-app.application-logo-mini width="150" />
                        </div>
                    </a>
                    <div class="text-center mb-7">
                        <h3 class="text-1000">Sign Up</h3>
                        <p class="text-700">Create your account today</p>
                    </div>
                    <button class="btn btn-phoenix-secondary w-100 mb-3"><span
                            class="fab fa-google text-danger me-2 fs--1"></span>Sign up with google</button>
                    <button class="btn btn-phoenix-secondary w-100"><span
                            class="fab fa-facebook text-primary me-2 fs--1"></span>Sign up with facebook</button>
                    <div class="position-relative mt-4">
                        <hr class="bg-200" />
                        <div class="divider-content-center">or use email</div>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3 text-start">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" id="name" type="text" name="name" value=""
                                required autofocus autocomplete="name" placeholder="Name" />
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label" for="email">Email address</label>
                            <input class="form-control" id="email" type="email" name="email" value=""
                                required autocomplete="username" placeholder="name@example.com" />
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control form-icon-input" id="password" type="password"
                                    name="password" required autocomplete="password" required
                                    autocomplete="new-password" placeholder="Password" />
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="confirmPassword">Confirm Password</label>
                                <input class="form-control form-icon-input" id="password_confirmation"
                                    type="password" name="password_confirmation" placeholder="Confirm Password" />
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="termsService" type="checkbox" />
                            <label class="form-label fs--1 text-none" for="termsService">I accept the <a
                                    href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-3">Sign up</button>
                        <div class="text-center"><a class="fs--1 fw-bold" href="{{ route('login') }}">Sign in to an
                    </form>
                    existing account</a>
                </div>
            </div>
        </div>
        </div>
        <script>
            var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.classList.add('navbar-darker');
            }

            var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVertical && navbarVerticalStyle === 'darker') {
                navbarVertical.classList.add('navbar-darker');
            }
        </script>
        <div class="support-chat-container">
            <div class="container-fluid support-chat">
                <div class="card bg-white">
                    <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
                        <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span
                                class="fa-solid fa-circle text-success fs--3"></span></h5>
                        <div class="btn-reveal-trigger">
                            <button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex"
                                type="button" id="support-chat-dropdown" data-bs-toggle="dropdown"
                                data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                data-bs-reference="parent"><span class="fas fa-ellipsis-h text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown">
                                <a class="dropdown-item" href="#!">Request a callback</a><a
                                    class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item"
                                    href="#!">Show history</a><a class="dropdown-item" href="#!">Report to
                                    Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close
                                    Support</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body chat p-0">
                        <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                            <div class="text-end mt-6"><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semi-bold fs--1">I need help with something</p><span
                                        class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                                </a><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semi-bold fs--1">I can’t reorder a product I previously ordered
                                    </p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                                </a><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semi-bold fs--1">How do I place an order?</p><span
                                        class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                                </a><a
                                    class="false d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semi-bold fs--1">My payment method not working</p><span
                                        class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                                </a>
                            </div>
                            <div class="text-center mt-auto">
                                <div class="avatar avatar-3xl status-online"><img
                                        class="rounded-circle border border-3 border-white"
                                        src="{{ asset('front_end_links/phoenix/public/assets/img/team/30.webp') }}"
                                        alt="" /></div>
                                <h5 class="mt-2 mb-3">Eric</h5>
                                <p class="text-center text-black mb-0">Ask us anything – we’ll get back to you here or
                                    by email within 24 hours.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
                        <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4">
                            <input class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text"
                                placeholder="Write message" />
                            <label class="btn btn-link d-flex p-0 text-500 fs--1 border-0"
                                for="supportChatPhotos"><span class="fa-solid fa-image"></span></label>
                            <input class="d-none" type="file" accept="image/*" id="supportChatPhotos" />
                            <label class="btn btn-link d-flex p-0 text-500 fs--1 border-0"
                                for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label>
                            <input class="d-none" type="file" id="supportChatAttachment" />
                        </div>
                        <button class="btn p-0 border-0 send-btn"><span
                                class="fa-solid fa-paper-plane fs--1"></span></button>
                    </div>
                </div>
            </div>
            <button class="btn p-0 border border-200 btn-support-chat"><span
                    class="fs-0 btn-text text-primary text-nowrap">Chat demo</span><span
                    class="fa-solid fa-circle text-success fs--1 ms-2"></span><span
                    class="fa-solid fa-chevron-down text-primary fs-1"></span></button>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
        aria-labelledby="settings-offcanvas">
        <div class="offcanvas-header align-items-start border-bottom flex-column">
            <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Theme Customizer</h5>
                    <p class="mb-0 fs--1">Explore different styles according to your preferences</p>
                </div>
                <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas"
                    aria-label="Close"><span class="fas fa-times fs-0"> </span></button>
            </div>
            <button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
                    class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
        </div>
        <div class="offcanvas-body scrollbar px-card" id="themeController">
            <div class="setting-panel-item mt-0">
                <h5 class="setting-panel-item-title">Color Scheme</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
                            value="light" data-theme-control="phoenixTheme" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/default-light.png') }}"
                                    alt="" /></span><span class="label-text">Light</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                            value="dark" data-theme-control="phoenixTheme" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/default-dark.png') }}"
                                    alt="" /></span><span class="label-text"> Dark</span></label>
                    </div>
                </div>
            </div>
            <div class="border rounded-3 p-4 setting-panel-item bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="setting-panel-item-title mb-1">RTL </h5>
                    <div class="form-check form-switch mb-0">
                        <input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" />
                    </div>
                </div>
                <p class="mb-0 text-700">Change text direction</p>
            </div>
            <div class="border rounded-3 p-4 setting-panel-item bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
                    <div class="form-check form-switch mb-0">
                        <input class="form-check-input ms-auto" type="checkbox"
                            data-theme-control="phoenixSupportChat" />
                    </div>
                </div>
                <p class="mb-0 text-700">Toggle support chat</p>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Navigation Type</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio"
                            value="vertical" data-theme-control="phoenixNavbarPosition"
                            data-page-url="{{ asset('front_end_links/phoenix/public/documentation/layouts/vertical-navbar.html') }}" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/default-light.png') }}"
                                    alt="" /><img class="img-fluid img-prototype d-light-none"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/default-dark.png') }}"
                                    alt="" /></span><span class="label-text">Vertical</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio"
                            value="horizontal" data-theme-control="phoenixNavbarPosition"
                            data-page-url="{{ asset('front_end_links/phoenix/public/documentation/layouts/horizontal-navbar.html') }}" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/top-default.png') }}"
                                    alt="" /><img class="img-fluid img-prototype d-light-none"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/top-default-dark.png') }}"
                                    alt="" /></span><span class="label-text"> Horizontal</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio"
                            value="combo" data-theme-control="phoenixNavbarPosition"
                            data-page-url="{{ asset('front_end_links/phoenix/public/documentation/layouts/combo-navbar.html') }}" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionCombo"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/nav-combo-light.png') }}"
                                    alt="" /><img class="img-fluid img-prototype d-light-none"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/nav-combo-dark.png') }}"
                                    alt="" /></span><span class="label-text"> Combo</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio"
                            value="dual-nav" data-theme-control="phoenixNavbarPosition"
                            data-page-url="{{ asset('front_end_links/phoenix/public/documentation/layouts/dual-nav.html') }}" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionTopDouble"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/dual-light.png') }}"
                                    alt="" /><img class="img-fluid img-prototype d-light-none"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/dual-dark.png') }}"
                                    alt="" /></span><span class="label-text"> Dual nav</span></label>
                    </div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-default" type="radio" name="config.name"
                            value="default" data-theme-control="phoenixNavbarVerticalStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-default"> <img
                                class="img-fluid img-prototype d-dark-none"
                                src="{{ asset('front_end_links/phoenix/public/assets/img/generic/default-light.png') }}"
                                alt="" /><img class="img-fluid img-prototype d-light-none"
                                src="{{ asset('front_end_links/phoenix/public/assets/img/generic/default-dark.png') }}"
                                alt="" /><span class="label-text d-dark-none"> Default</span><span
                                class="label-text d-light-none">Default</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-dark" type="radio" name="config.name"
                            value="darker" data-theme-control="phoenixNavbarVerticalStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img
                                class="img-fluid img-prototype d-dark-none"
                                src="{{ asset('front_end_links/phoenix/public/assets/img/generic/vertical-darker.png') }}"
                                alt="" /><img class="img-fluid img-prototype d-light-none"
                                src="{{ asset('front_end_links/phoenix/public/assets/img/generic/vertical-lighter.png') }}"
                                alt="" /><span class="label-text d-dark-none"> Darker</span><span
                                class="label-text d-light-none">Lighter</span></label>
                    </div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio"
                            value="default" data-theme-control="phoenixNavbarTopShape"
                            data-page-url="{{ asset('front_end_links/phoenix/public/documentation/layouts/horizontal-navbar.html') }}" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/top-default.png') }}"
                                    alt="" /><img class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/top-default-dark.png') }}"
                                    alt="" /></span><span class="label-text">Default</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio"
                            value="slim" data-theme-control="phoenixNavbarTopShape"
                            data-page-url="{{ asset('front_end_links/phoenix/public/documentation/layouts/horizontal-navbar.html#horizontal-navbar-slim') }}" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeSlim"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/top-slim.png') }}"
                                    alt="" /><img class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/top-slim-dark.png') }}"
                                    alt="" /></span><span class="label-text"> Slim</span></label>
                    </div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio"
                            value="default" data-theme-control="phoenixNavbarTopStyle" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDefault"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/top-default.png') }}"
                                    alt="" /><img class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/top-style-darker.png') }}"
                                    alt="" /></span><span class="label-text">Default</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio"
                            value="darker" data-theme-control="phoenixNavbarTopStyle" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/navbar-top-style-light.png') }}"
                                    alt="" /><img class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{ asset('front_end_links/phoenix/public/assets/img/generic/top-style-lighter.png') }}"
                                    alt="" /></span><span class="label-text d-dark-none">Darker</span><span
                                class="label-text d-light-none">Lighter</span></label>
                    </div>
                </div>
            </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary"
                href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/"
                target="_blank">Purchase template</a>
        </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
        <div class="card-body d-flex align-items-center px-2 py-1">
            <div class="position-relative rounded-start" style="height:34px;width:28px">
                <div class="settings-popover"><span class="ripple"><span
                            class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                class="icon-spin position-absolute all-0 d-flex flex-center">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                        fill="#2A7BE4"></path>
                                </svg></span></span></span></div>
            </div><small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
        </div>
    </a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('front_end_links/phoenix/public/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('front_end_links/phoenix/public/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front_end_links/phoenix/public/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('front_end_links/phoenix/public/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('front_end_links/phoenix/public/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('front_end_links/phoenix/public/vendors/lodash/lodash.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('front_end_links/phoenix/public/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('front_end_links/phoenix/public/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('front_end_links/phoenix/public/vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('front_end_links/phoenix/public/assets/js/phoenix.js') }}"></script>

</body>

</html>
