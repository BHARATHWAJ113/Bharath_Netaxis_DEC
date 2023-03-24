@extends('layouts.cv_welcome')

@section('content')


<!-- About section -->
<section class="site-section section-about text-center" id="about">
    <div class="container">
        <h2>ABOUT BHARATH WAJ </h2>
        <p class="section-subtitle"><span>Our goal is to build products and services</span></p>
        <div class="row">

        @foreach ($cv_model2s as $abouts)
            <div class="col-sm-3 col-xs-6">
                <div class="feature-about">
                    <div class="medium-rectangle rectangle">
                        <i class="{{ $abouts->icon }}" aria-hidden="true"></i>
                    </div><!-- /.rectangle -->
                    <h3>{{ $abouts->title }}</h3>
                    <p>{{ $abouts->body }}</p>
                </div><!-- /.feature-about -->
            </div>
        @endforeach    
            
        </div>
    </div>
</section><!-- /.section-about -->
<!-- End About section -->

<!-- Skills section -->
<section class="site-section section-skills">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Introduction video</h2>
                <iframe src="https://player.vimeo.com/video/158928871" width="100%" height="280" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="col-sm-6">
                <h2>SKILLS WE GOT</h2>
                <div class="progress-group">
                    <p>Web design</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="100">
                        </div>
                    </div><!-- /.progress -->
                </div><!-- /.progress-group -->

                <div class="progress-group">
                    <p>Web development</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="100">
                        </div>
                    </div><!-- /.progress -->
                </div><!-- /.progress-group -->

                <div class="progress-group">
                    <p>Mobile Development</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="95">
                        </div>
                    </div><!-- /.progress -->
                </div><!-- /.progress-group -->

                <div class="progress-group">
                    <p>SEO optimization</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="100">
                        </div>
                    </div><!-- /.progress -->
                </div><!-- /.progress-group -->

                <div class="progress-group">
                    <p>Social Media</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="90">
                        </div>
                    </div><!-- /.progress -->
                </div><!-- /.progress-group -->
            </div>
        </div>
    </div>
</section><!-- /.section-skills -->
<!-- End Skills section -->

<!-- Counters section -->
<section class="site-section section-counters text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-xs-6 col-sm-offset-1">
                <div class="counter">
                    <div class="rectangle medium-rectangle ">
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                        <span class="counter-start" data-to="167" data-speed="2000">167</span>
                    </div><!-- /.rectangle -->
                    <p>Projects Launched</p>
                </div><!-- /.counter -->
            </div>
            <div class="col-sm-2 col-xs-6">
                <div class="counter">
                    <div class="rectangle medium-rectangle ">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        <span class="counter-start" data-to="25" data-speed="2000">25</span>
                    </div><!-- /.rectangle -->
                    <p>Awards won</p>
                </div><!-- /.counter -->
            </div>
            <div class="col-sm-2 col-xs-6">
                <div class="counter">
                    <div class="rectangle medium-rectangle ">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        <span class="counter-start" data-to="98" data-speed="2000">98</span>
                    </div><!-- /.rectangle -->
                    <p>Proposals Sent</p>
                </div><!-- /.counter -->
            </div>
            <div class="col-sm-2 col-xs-6">
                <div class="counter">
                    <div class="rectangle medium-rectangle ">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <span class="counter-start" data-to="945" data-speed="2000">945</span>
                    </div><!-- /.rectangle -->
                    <p>Hours of work</p>
                </div><!-- /.counter -->
            </div>
            <div class="col-sm-2 col-xs-12">
                <div class="counter">
                    <div class="rectangle medium-rectangle ">
                        <i class="fa fa-coffee" aria-hidden="true"></i>
                        <span class="counter-start" data-to="256" data-speed="2000">256</span>
                    </div><!-- /.rectangle -->
                    <p>Cups of Lemon tea</p>
                </div><!-- /.counter -->
            </div>
        </div>

    </div>
</section><!-- /.section-counters -->
<!-- End Counters section -->
@endsection