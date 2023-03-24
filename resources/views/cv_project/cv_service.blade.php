@extends('layouts.cv_welcome') 

@section('content')
 
 
 
 <!-- Services section -->
 <section class="site-section section-services" id="services">

<div class="container-fluid">
    <h2>SERVICES WE OFFER</h2>
    <p class="section-subtitle"><span>Exceptional level of service</span></p>
</div>

<div class="container">

    <div class="carousel slide" id="services-carousel">

        <div class="item-controls text-center">
            <a href="#services-carousel" class="left btn carousel-control" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a href="#services-carousel" class="right btn carousel-control" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div><!-- /.item-controls -->

        <div class="carousel-indicators nav-tabs text-center">
            <a data-target="#services-carousel" href="#" data-slide-to="0" class="active">
                <div class="col-xs-4 col-sm-fifth">
                    <div class="service">
                        <div class="rectangle">
                            <i class="fa fa-laptop" aria-hidden="true"></i>
                        </div>
                        <p class="hidden-xs">Web design</p>
                    </div>
                </div>
            </a><!-- /.item -->
            <a data-target="#services-carousel" href="#" data-slide-to="1">
                <div class="col-xs-4 col-sm-fifth">
                    <div class="service">
                        <div class="rectangle">
                            <i class="fa fa-code" aria-hidden="true"></i>
                        </div>
                        <p class="hidden-xs">Web development</p>
                    </div>
                </div>
            </a><!-- /.item -->
            <a data-target="#services-carousel" href="#" data-slide-to="2">
                <div class="col-xs-4 col-sm-fifth">
                    <div class="service">
                        <div class="rectangle">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        <p class="hidden-xs">Mobile Development</p>
                    </div>
                </div>
            </a><!-- /.item -->
            <a data-target="#services-carousel" href="#" data-slide-to="3">
                <div class="col-xs-4 col-sm-fifth">
                    <div class="service">
                        <div class="rectangle">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        <p class="hidden-xs">SEO optimization</p>
                    </div>
                </div>
            </a><!-- /.item -->
            <a data-target="#services-carousel" href="#" data-slide-to="4">
                <div class="col-xs-4 col-sm-fifth">
                    <div class="service">
                        <div class="rectangle">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                        <p class="hidden-xs">Social Media</p>
                    </div>
                </div>
            </a><!-- /.item -->
        </div><!-- /.carousel-indicators -->
            
               
        <div class="carousel-inner">
            <!-- Item 1 -->   
            <div id="item1" class="item tab-pane active">
                <div class="row">
                    <div class="col-md-5">
                        <div class="service-info">
                            <h3 class="service-title">Web Design</h3>
                            <p>Decorations don’t drive home messages. Content does. Reducing text-based content to a visual design element (the shape of the text) can result in bloated and unrealistic client expectations once real data replaces the dummy content. We allow our design decisions to be dictated by the on-page content and messaging, and often our designers use the actual content to inspire interesting elements that might not have been conceived without it</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="cv_assets/img/web-design.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div><!-- /.item -->
            <!-- Item 2 -->   
            <div id="item2" class="item tab-pane">
                <div class="row">
                    <div class="col-md-5">
                        <div class="service-info">
                            <h3 class="service-title">Web Development</h3>
                            <p>Once we have come up with a unique design and have finalized the textures and graphics to be added, the next step is to make it all come together. And that is what we aim to achieve at our web development agency India. Only a professionally designed website can justify the uniqueness of your idea and this is a fact clearly understood by our team. </p>

                            <p>While a good design can impress the users, it is the codes and development process that ensures that your target users will find the browsing experience equally amazing as your design. </p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="cv_assets/img/web-development.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div><!-- /.item -->
            <!-- Item 3 -->   
            <div id="item3" class="item tab-pane">
                <div class="row">
                    <div class="col-md-5">
                        <div class="service-info">
                            <h3 class="service-title">Mobile Development</h3>
                            <p>With an increasing importance being given to smart phones, and mobile apps, it has become immensely important to include app development as part of web design services. Our team is known to provide excellent and extraordinary apps that are unique in every way. All the apps developed by our team are based on providing interesting features combined with enhanced functionality. With a mobile app in place, you can increase the reach of your brand and broaden its horizons too. You can have an easy to use professional app created that provides ease of functionality and an amazing appeal.</p>                                     
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="cv_assets/img/mobile-development.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div><!-- /.item -->
            <!-- Item 4 -->   
            <div id="item4" class="item tab-pane">
                <div class="row">
                    <div class="col-md-5">
                        <div class="service-info">
                            <h3 class="service-title">SEO optimization</h3>
                            <p>Search engine optimization (SEO) is the process of improving the visibility of a web site in search engines. Consumer puts a lot of trust in search engines to find what they need. Google receives 34,000 searches per second. Those searches involve finding products, reviewing brands, and looking up business locations.</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="cv_assets/img/seo-optimization.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div><!-- /.item -->
            <!-- Item 5 -->   
            <div id="item5" class="item tab-pane">
                <div class="row">
                    <div class="col-md-5">
                        <div class="service-info">
                            <h3 class="service-title">Social Media</h3>
                            <p>Social Media, has become an essential tool of marketing an online business. It gives you a platform to interact and inform people about yourself and your brand. The concept of social media basically refers to the task of promoting websites or business through social media platforms..</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="cv_assets/img/social-media.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div><!-- /.item -->
        </div><!-- /.carousel-inner -->
    </div><!-- /.carousel -->
</div>
</section><!-- /.section-services -->
<!-- End Services section -->
       

        <!-- Reviews section -->
        <section class="site-section section-reviews text-center">
            <div class="container">
                <h2>Client Reviews</h2>
                <p class="section-subtitle"><span>OUR CLIENTS LOVE US! READ WHAT THEY HAVE TO SAY</span></p>
            </div>

            <div class="blue-bg">
                <div class="container">
                    <div class="review-carousel">
                        <!-- Review 1 -->
                        <div class="review">
                            <div class="rectangle">
                                <img src="cv_assets/img/review.jpg" class="img-res" alt="">
                            </div>
                            <p>If there were 100 star rating I would leave 110. I have been building WP sites now full time for 7 years and in business for 12 and have never worked with such a solid company with such a wonderful set of themes.</p>
                            <div class="review-author">
                                <h3>Mike Taylor</h3>
                                <p>CEO at Sports Portal</p>
                            </div><!-- /.review-author -->
                        </div><!-- /.review -->
                        <!-- Review 2 -->
                        <div class="review">
                            <div class="rectangle">
                                <img src="cv_assets/img/review-2.jpg" class="img-res" alt="">
                            </div>
                            <p>Diana Johnson is a rare SEO consultant who does things the right way. I’ve been consistently impressed with her process, organization and strategic method of doing SEO the right way.</p>
                            <div class="review-author">
                                <h3>Anna Murray</h3>
                                <p>CEO at Law firm</p>
                            </div><!-- /.review-author -->
                        </div><!-- /.review -->
                    </div><!-- /.review-carousel -->
                </div>
            </div>
        </section><!-- /.section-reviews -->
        <!-- End Reviews section -->
        @endsection