<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DB-Brand</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Varela" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1716af8fd8.js" crossorigin="anonymous"></script>

    <!-- Favicon
    ================================================== -->

    <link rel="icon" type="image/png" sizes="32x32" href="cv_assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="cv_assets/img/favicon-16x16.png">
    <link rel="icon" sizes="16x16" href="cv_assets/img/favicon.ico">
    <meta name="theme-color" content="#ffffff">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="cv_assets/css/bootstrap.min.css" />

    <!-- Font Awesome core CSS -->
    <link rel="stylesheet" href="cv_assets/css/font-awesome.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="cv_assets/css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .six-sec-ease-in-out {
            -webkit-transition: width 6s ease-in-out;
            -moz-transition: width 6s ease-in-out;
            -ms-transition: width 6s ease-in-out;
            -o-transition: width 6s ease-in-out;
            transition: width 6s ease-in-out;
        }

    </style>
</head>

<body>
    <!-- Header -->

    <nav id="primary-navigation" class="site-navigation" data-spy="affix">
        <div class="container">
            <div class="navbar-header page-scroll">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#portfolio-perfect-collapse" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Name -->
                <div class="page-scroll site-logo">
                    <a href="/cv">DB</a>
                </div>

            </div><!-- /.navbar-header -->

            <div class="main-menu collapse navbar-collapse" id="portfolio-perfect-collapse">

                <!-- Navigation -->
                <ul class="nav navbar-nav navbar-right">

                    <li class="page-scroll"><a href="/cv">Home</a></li>
                    <li class="page-scroll"><a href="/intro">Intro</a></li>
                    <li class="page-scroll"><a href="/about">About</a></li>
                    <li class="page-scroll"><a href="/service">Services</a></li>
                    <li class="page-scroll"><a href="/team">Team</a></li>
                    <li class="page-scroll"><a href="/works">Works</a></li>
                    <li class="page-scroll"><a href="/contact">Contact</a></li>

                </ul><!-- /.navbar-nav -->

            </div><!-- /.navbar-collapse -->
        </div>
    </nav><!-- /.primary-navigation -->



    @yield('contentHome')


    <!-- Main content -->
    <main id="main" class="site-main">


        @yield('content')



















        <!-- Social Networks section -->
        <section class="section-networks blue-bg">
            <div class="container">
                <a href="https://www.facebook.com/viper.ong.12?mibextid=ZbWKwL" target="_blank" class="rectangle">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://instagram.com/himalayan_rider12?igshid=ZDdkNTZiNTM=" target="_blank" class="rectangle">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="https://twitter.com/TPBHARATHWAJ2?t=UX6iWFQCT70-2N6CxySIYw&s=09" target="_blank" class="rectangle">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="mailto:bharathwaj9600@gmail.com" class="rectangle" target="_blank">
                    <i class="fa fa-envelope"></i>
                </a>
                <a href="https://www.linkedin.com/in/bharath-waj-3861ba246" target="_blank" class="rectangle">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
        </section><!-- /.section-networks-->
        <!-- End Social Networks section -->

    </main><!-- /#main -->
    <!-- End Main content -->


    <!-- Footer -->
    <footer id="colophon" class="site-footer">

        <div class="container-fluid">

            <div class="page-scroll">
                <a href="#top" class="rectangle">
                    <i class="fa fa-angle-double-up"></i>
                </a>
            </div>

        </div>

        <div class="container text-center">
            <p class="copyright">&copy; <a href="https://ong-creation.business.site/" target="_blank">@DB-Brand</a> - 2023</p>
        </div>

    </footer><!-- /#footer -->
    <!-- End Footer -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery core js | Do not Delete -->
    <script src="cv_assets/js/jquery.min.js"></script>

    <!-- Bootstrap core js | Do not Delete -->
    <script src="cv_assets/js/bootstrap.min.js"></script>

    <!-- Bootstrap progressbar JS -->
    <script src="cv_assets/js/bootstrap-progressbar.min.js"></script>

    <!-- Count To JS -->
    <script src="cv_assets/js/jquery.countTo.min.js"></script>

    <!-- Easing JS -->
    <script src="cv_assets/js/jquery.easing.min.js"></script>

    <!-- Shuffle JS -->
    <script src="cv_assets/js/jquery.shuffle.min.js"></script>

    <!-- Slick Carousel JS -->
    <script src="cv_assets/js/slick.min.js"></script>

    <!-- Touchswipe JS -->
    <script src="cv_assets/js/touchswipe.min.js"></script>

    <!-- Custom JS -->
    <script src="cv_assets/js/script.js"></script>

</body>

</html>
