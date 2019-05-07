<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="@yield('author',env('APP_NAME'))">
    <meta name="_token" content="{{csrf_token()}}">
    <title>@yield('title')</title>
    {{-- <link rel="icon" href="/assets/img/brand/favicon.png" type="image/png"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800">
    <link rel="stylesheet" href="/assets/vendor/%40fortawesome/fontawesome-pro/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/theme.min.css">
    
    @yield('css')

    <style>
        .bg-top{
            background-color: #143354;
        }
        .tp-author{
            color:#fff; padding-left:10px;
        }
        .tp-author:hover{
            color:#fff;
        }
    </style>

</head>

<body>

    <header id="header-main">

        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
            <div class="container">
                <a class="navbar-brand mr-5 mb-4 ml-5 ml-sm-0 mb-sm-0" href="../index.html">
                    <img alt="Image placeholder" src="/images/custom/logo.png" style="height: 50px;">
                </a>

                <input type="text" class="form-control" placeholder="Search ">

                <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <div class="collapse navbar-collapse" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../docs/introduction.html" target="_blank">Docs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../docs/changelog.html" target="_blank">Changelog</a>
                        </li>
                        <li class="nav-item mr-0">
                            <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="nav-link d-lg-none">Purchase now</a>
                            <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex">
                                <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                                <span class="btn-inner--text">Purchase now</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
         
    </header>

    <main>



        @yield('content')
        <footer class="footer footer-dark bg-gradient-primary">
        <div class="container">
            <div class="row pt-md">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <a href="../index.html">
                        <img src="/assets/img/brand/white.png" alt="Footer logo" style="height: 70px;">
                    </a>
                    <p class="text-sm">A unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Account</h6>
                    <ul class="list-unstyled">
                        <li><a href="account-profile.html">Profile</a>
                        </li>
                        <li><a href="account-settings.html">Settings</a>
                        </li>
                        <li><a href="account-billing.html">Billing</a>
                        </li>
                        <li><a href="account-notifications.html">Notifications</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">About</h6>
                    <ul class="list-unstyled text-small">
                        <li><a href="#">Services</a>
                        </li>
                        <li><a href="#">Contact</a>
                        </li>
                        <li><a href="#">Careers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Company</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Terms</a>
                        </li>
                        <li><a href="#">Privacy</a>
                        </li>
                        <li><a href="#">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
                <div class="col-md-6">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        &copy; 2018 <a href="https://webpixels.io/" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://instagram.com/webpixelsofficial" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://facebook.com/webpixels" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </main>


    


    <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/in-view/dist/in-view.min.js"></script>
    
    @yield('plugins')
    <script src="/assets/js/theme.min.js"></script>
    @yield('js')
    
</body>

</html>
