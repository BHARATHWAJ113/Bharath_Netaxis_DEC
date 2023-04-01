@extends('layouts.cv_welcome')

@section('content')



<!-- Portfolio/Works section -->
<section class="site-section section-works" id="works">
    <div class="container">
        <h2>RECENT WORKS</h2>
        <p class="section-subtitle"><span>OUR CLIENTS LOVE US! READ WHAT THEY HAVE TO SAY</span></p>

        <div class="portfolio">
            <ul class="portfolio-sorting list-inline">
                <li><a href="#" class=" active" data-group="all">all</a></li>
                <li><a href="#" class="" data-group="webdesign">Web Design</a></li>
                <li><a href="#" class="" data-group="webdev">Web Development</a></li>
                <li><a href="#" class="" data-group="mobileapps">Mobile apps</a></li>
            </ul><!-- /.portfolio-sorting  -->

            <div id="grid">

                <!-- Portfolio item -->
                <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                    <div class="portfolio-item">
                        <div class="portfolio-item-thumb">
                            <img src="cv_assets/img/portfolio-1.jpg" alt="" class="img-res">
                            <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div><!-- /.portfolio-item-thumb  -->
                        <div class="portfolio-info">
                            <h3>PSD Template</h3>
                            <p>Web Design</p>
                        </div><!-- /.portfolio-info  -->
                    </div>
                </div><!-- /.col-md-3  -->
                <!-- Portfolio item -->
                <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                    <div class="portfolio-item">
                        <div class="portfolio-item-thumb">
                            <img src="cv_assets/img/portfolio-2.jpg" alt="" class="img-res">
                            <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem2">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div><!-- /.portfolio-item-thumb  -->
                        <div class="portfolio-info">
                            <h3>Website</h3>
                            <p>Web Development</p>
                        </div><!-- /.portfolio-info  -->
                    </div>
                </div><!-- /.col-md-3  -->
                <!-- Portfolio item -->
                <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["mobileapps"]'>
                    <div class="portfolio-item">
                        <div class="portfolio-item-thumb">
                            <img src="cv_assets/img/portfolio-4.jpg" alt="" class="img-res">
                            <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem3">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div><!-- /.portfolio-item-thumb  -->
                        <div class="portfolio-info">
                            <h3>IOS App</h3>
                            <p>Mobile App</p>
                        </div><!-- /.portfolio-info  -->
                    </div>
                </div><!-- /.col-md-3  -->
                <!-- Portfolio item -->
                <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                    <div class="portfolio-item">
                        <div class="portfolio-item-thumb">
                            <img src="cv_assets/img/portfolio-3.jpg" alt="" class="img-res">
                            <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem4">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div><!-- /.portfolio-item-thumb  -->
                        <div class="portfolio-info">
                            <h3>PSD Template</h3>
                            <p>Web Design</p>
                        </div><!-- /.portfolio-info  -->
                    </div>
                </div><!-- /.col-md-3  -->
                <!-- Portfolio item -->
                <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                    <div class="portfolio-item">
                        <div class="portfolio-item-thumb">
                            <img src="cv_assets/img/portfolio-5.jpg" alt="" class="img-res">
                            <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem5">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div><!-- /.portfolio-item-thumb  -->
                        <div class="portfolio-info">
                            <h3>Wordpress Website</h3>
                            <p>Web Development</p>
                        </div><!-- /.portfolio-info  -->
                    </div>
                </div><!-- /.col-md-3  -->
                <!-- Portfolio item -->
                <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["mobileapps"]'>
                    <div class="portfolio-item">
                        <div class="portfolio-item-thumb">
                            <img src="cv_assets/img/portfolio-6.jpg" alt="" class="img-res">
                            <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem6">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div><!-- /.portfolio-item-thumb  -->
                        <div class="portfolio-info">
                            <h3>Android App</h3>
                            <p>Mobile App</p>
                        </div><!-- /.portfolio-info  -->
                    </div>
                </div><!-- /.col-md-3  -->
                <!-- Portfolio item -->
                <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                    <div class="portfolio-item">
                        <div class="portfolio-item-thumb">
                            <img src="cv_assets/img/portfolio-7.jpg" alt="" class="img-res">
                            <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem7">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div><!-- /.portfolio-item-thumb  -->
                        <div class="portfolio-info">
                            <h3>Woocommerce Website</h3>
                            <p>Web Development</p>
                        </div><!-- /.portfolio-info  -->
                    </div>
                </div><!-- /.col-md-3  -->
                <!-- Portfolio item -->
                <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                    <div class="portfolio-item">
                        <div class="portfolio-item-thumb">
                            <img src="cv_assets/img/portfolio-8.jpg" alt="" class="img-res">
                            <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem8">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div><!-- /.portfolio-item-thumb  -->
                        <div class="portfolio-info">
                            <h3>PSD Template</h3>
                            <p>Web Design</p>
                        </div><!-- /.portfolio-info  -->
                    </div>
                </div><!-- /.col-md-3  -->

            </div><!-- /#grid -->
        </div>
    </div>
</section><!-- /.section-works -->
<!-- End Works section -->

<!-- Me section -->
<section class="section-background section-me background-overlay text-center">
    <div class="container page-scroll">
        <h2>Are You Impressed By My Work?</h2>
        <p>Durabitur commodo ras non urna mauris mollis auctor proin laoreet</p>
        <a href="/contact" class="btn">GET IN TOUCH</a>
    </div>
</section><!-- /.section-me -->
<!-- End Me section -->

<!-- Clients section -->
<section class="section-clients">
    <div class="container">
        <div class="text-center section-diff-title">
            <h2>Clients I’ve Worked So Far</h2>
            <p></p>
        </div>

        <div class="clients-carousel">
            <!-- Client -->
            <a href="#" class="client">
                <img src="cv_assets/img/client-1.png" class="img-responsive" alt="">
            </a><!-- /.client -->
            <!-- Client -->
            <a href="#" class="client">
                <img src="cv_assets/img/client-2.png" class="img-responsive" alt="">
            </a><!-- /.client -->
            <!-- Client -->
            <a href="#" class="client">
                <img src="cv_assets/img/client-3.png" class="img-responsive" alt="">
            </a><!-- /.client -->
            <!-- Client -->
            <a href="#" class="client">
                <img src="cv_assets/img/client-4.png" class="img-responsive" alt="">
            </a><!-- /.client -->
            <!-- Client -->
            <a href="#" class="client">
                <img src="cv_assets/img/client-5.png" class="img-responsive" alt="">
            </a><!-- /.client -->
            <!-- Client -->
            <a href="#" class="client">
                <img src="cv_assets/img/client-3.png" class="img-responsive" alt="">
            </a><!-- /.client -->
        </div><!-- /.clients-carousel -->
    </div>
</section><!-- /.section-clients -->
<!-- End Clients section -->


<!-- Modals -->
<div id="portfolioItem1" class="modal fade fade-scale" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                <img class="img-res" src="cv_assets/img/portfolio-1.jpg" alt="">
            </div>
            <div class="modal-body">
                <h4 class="modal-title">Project title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn">Visit Page</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="portfolioItem2" class="modal fade fade-scale" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                <img class="img-res" src="cv_assets/img/portfolio-2.jpg" alt="">
            </div>
            <div class="modal-body">
                <h4 class="modal-title">Project title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn">Visit Page</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="portfolioItem3" class="modal fade fade-scale" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                <img class="img-res" src="cv_assets/img/portfolio-4.jpg" alt="">
            </div>
            <div class="modal-body">
                <h4 class="modal-title">Project title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn">Visit Page</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="portfolioItem4" class="modal fade fade-scale" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                <img class="img-res" src="cv_assets/img/portfolio-3.jpg" alt="">
            </div>
            <div class="modal-body">
                <h4 class="modal-title">Project title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn">Visit Page</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="portfolioItem5" class="modal fade fade-scale" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                <img class="img-res" src="cv_assets/img/portfolio-5.jpg" alt="">
            </div>
            <div class="modal-body">
                <h4 class="modal-title">Project title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn">Visit Page</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="portfolioItem6" class="modal fade fade-scale" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                <img class="img-res" src="cv_assets/img/portfolio-6.jpg" alt="">
            </div>
            <div class="modal-body">
                <h4 class="modal-title">Project title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn">Visit Page</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="portfolioItem7" class="modal fade fade-scale" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                <img class="img-res" src="cv_assets/img/portfolio-7.jpg" alt="">
            </div>
            <div class="modal-body">
                <h4 class="modal-title">Project title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn">Visit Page</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="portfolioItem8" class="modal fade fade-scale" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                <img class="img-res" src="cv_assets/img/portfolio-8.jpg" alt="">
            </div>
            <div class="modal-body">
                <h4 class="modal-title">Project title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn">Visit Page</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection