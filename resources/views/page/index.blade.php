@extends('layouts.front_end')
@section('content')
    {{-- @if (count($banners) > 0)
        <section class="hero-area">
            <div id="corporex-slider" class="corporex-slider carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @if ($bannerfirstid)
                        @foreach ($banners as $banner)
                            @if ($banner->id == $bannerfirstid)
                                <li data-target="#corporex-slider" data-slide-to="0" class="active"></li>
                            @else
                                <li data-target="#corporex-slider" data-slide-to="1"></li>
                            @endif
                        @endforeach
                    @else
                        <li data-target="#corporex-slider" data-slide-to="0" class="active"></li>
                    @endif
                </ol> <!-- .carousel-indicators -->

                <div class="carousel-inner" role="listbox">
                    @foreach ($banners as $banner)
                        @if ($banner->id == $bannerfirstid)
                            <div class="item caption-left active">
                            @else
                                <div class="item caption-left">
                        @endif
                        <img class="slider-bg img-responsive"
                            src="{{ url($banner->image ?? 'http://via.placeholder.com/1920x720') }}" alt="slider "
                            style="width: 100%; object-fit: fill">
                        <div class="container">

                            <div class="carousel-caption">
                                <h1 class="h1-extra"><span>SURVIVE-MEDIA</span>{{ $banner->title }}</h1>
                                <p class="lead">
                                    {!! $banner->description !!}
                                </p>
                                @if ($banner->link)
                                    <a class="btn btn-main" href="{{ url($banner->link) }}" target="_blank">learn more</a>
                                @else
                                    <a class="btn btn-main" href="">learn more</a>
                                @endif
                            </div> <!-- .carousel-caption -->
                        </div> <!-- .container -->
                </div> <!-- .item -->
        @endforeach
        </div> <!-- .carousel-inner -->

        <!-- Controls -->
        <a class="left carousel-control" href="#corporex-slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> <!-- .carousel-control -->

        <a class="right carousel-control" href="#corporex-slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> <!-- .carousel-control -->

        </div> <!-- .carousel -->
        </section> <!-- .hero-area -->
        @else
        <section class="hero-area">
            <div id="corporex-slider" class="corporex-slider carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#corporex-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#corporex-slider" data-slide-to="1"></li>
                </ol> <!-- .carousel-indicators -->

                <div class="carousel-inner" role="listbox">
                    <div class="item caption-left active">
                        <img class="slider-bg img-responsive" src="http://via.placeholder.com/1920x720" alt="slider image 01">
                        <div class="container">

                            <div class="carousel-caption">
                                <h1 class="h1-extra"><span>The Corporex</span>The Real Corporate Experience</h1>
                                <p class="lead">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <a class="btn btn-main" href="#">learn more</a>
                            </div> <!-- .carousel-caption -->
                        </div> <!-- .container -->
                    </div> <!-- .item -->
                </div> <!-- .carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#corporex-slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a> <!-- .carousel-control -->

                <a class="right carousel-control" href="#corporex-slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a> <!-- .carousel-control -->

            </div> <!-- .carousel -->
        </section> <!-- .hero-area -->
    @endif --}}

    <section class="intro-section section-block" id="section_2">
        <div class="container">
            <div class="title-block">
                <h2>Welcome to Corporex</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore mollit anim id est laborum.
                </p>
            </div> <!-- .title-block -->
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box"><i class="pe-7s-paint-bucket"></i></div>
                    <h3><a href="#">Real Corporate Feel</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a class="btn-open" href="#">Learn More</a>
                </div> <!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="icon-box"><i class="pe-7s-edit"></i></div>
                    <h3><a href="#">Most beautiful design</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a class="btn-open" href="#">Learn More</a>
                </div> <!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="icon-box"><i class="pe-7s-arc"></i></div>
                    <h3><a href="#">We know the business</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a class="btn-open" href="#">Learn More</a>
                </div> <!-- .col-md-4 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .intro-section -->

    <section class="about-section section-block" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img-block">
                    <img class="img-responsive" src="http://via.placeholder.com/720x673" alt="about image">
                </div> <!-- .col-md-6 img-block -->
                <div class="col-md-6 content-block">
                    <h2><span>We are awesome</span>We servce the best among all in the industry</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt.
                    </p>
                    <a class="btn btn-main" href="#">Read More</a>
                </div> <!-- .col-md-6 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .about-section -->

    <section class="features-section section-block"id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h2><small>Why Choose us</small> We are the best </h2>
                    <p>
                        Lirure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sintnim id est laborum.
                    </p>
                    <ul class="row iconlist">
                        <li class="col-sm-6">
                            <div class="icon-box"><i class="pe-7s-coffee"></i></div>
                            <div class="content-block">
                                <h3>We are amazing</h3>
                                <p>
                                    Lorem ipsum dolor sit amet tetur adipisicing elit
                                </p>
                            </div>
                        </li> <!-- .col-md-6 -->
                        <li class="col-sm-6">
                            <div class="icon-box"><i class="pe-7s-graph3"></i></div>
                            <div class="content-block">
                                <h3>Rapid Business Growth</h3>
                                <p>
                                    Lorem ipsum dolor sit amet tetur adipisicing elit
                                </p>
                            </div>
                        </li> <!-- .col-md-6 -->
                        <li class="col-sm-6">
                            <div class="icon-box"><i class="pe-7s-gleam"></i></div>
                            <div class="content-block">
                                <h3>Super fast Technology</h3>
                                <p>
                                    Lorem ipsum dolor sit amet tetur adipisicing elit
                                </p>
                            </div>
                        </li> <!-- .col-md-6 -->
                        <li class="col-sm-6">
                            <div class="icon-box"><i class="pe-7s-medal"></i></div>
                            <div class="content-block">
                                <h3>Award Winning Agency</h3>
                                <p>
                                    Lorem ipsum dolor sit amet tetur adipisicing elit
                                </p>
                            </div>
                        </li> <!-- .col-md-6 -->
                    </ul>
                </div> <!-- .col-md-4 -->
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <img class="img-responsive" src="http://via.placeholder.com/469x560" alt="features image">
                    </div> <!-- .img-wrapper -->
                </div> <!-- .col-md-4 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .features-section -->

    <section class="testimonial-section section-block"id="section_5">
        <div class="container">
            <div class="title-block white">
                <h2>What people say</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore mollit anim id est laborum.
                </p>
            </div> <!-- .title-block -->

            <div class="testimonial-carousel" id="testimonial-carousel">
                <div class="testimonial-item">
                    <div class="content-wrapper">
                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/72x72"
                                alt="quote author 01"></div>
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore enim ad minim veniam,
                            proident, sunt int mollit anim idipas tones est laborum.
                        </blockquote>
                        <h4>Peter Parker<small>Web Designer</small></h4>
                    </div> <!-- .content-wrapper -->
                </div> <!-- .col-md-4 -->
                <div class="testimonial-item">
                    <div class="content-wrapper">
                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/72x72"
                                alt="quote author 02"></div>
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore enim ad minim veniam,
                            proident, sunt int mollit anim idipas tones est laborum.
                        </blockquote>
                        <h4>Sarah Jessica<small>Artist</small></h4>
                    </div> <!-- .content-wrapper -->
                </div> <!-- .col-md-4 -->
                <div class="testimonial-item">
                    <div class="content-wrapper">
                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/72x72"
                                alt="quote author 03"></div>
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore enim ad minim veniam,
                            proident, sunt int mollit anim idipas tones est laborum.
                        </blockquote>
                        <h4>Ethan Hunt<small>Blogger</small></h4>
                    </div> <!-- .content-wrapper -->
                </div> <!-- .col-md-4 -->
                <div class="testimonial-item">
                    <div class="content-wrapper">
                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/72x72"
                                alt="quote author 04"></div>
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore enim ad minim veniam,
                            proident, sunt int mollit anim idipas tones est laborum.
                        </blockquote>
                        <h4>Natalia Simpson<small>Developer</small></h4>
                    </div> <!-- .content-wrapper -->
                </div> <!-- .col-md-4 -->
                <div class="testimonial-item">
                    <div class="content-wrapper">
                        <div class="image-wrapper"><img class="img-responsive" src="http://via.placeholder.com/72x72"
                                alt="quote author 05"></div>
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore enim ad minim veniam,
                            proident, sunt int mollit anim idipas tones est laborum.
                        </blockquote>
                        <h4>Bruce Wayne<small>Developer</small></h4>
                    </div> <!-- .content-wrapper -->
                </div> <!-- .col-md-4 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .testimonial-section -->
    <section class="blog-section section-block"id="section_6">
        <div class="container">
            <div class="title-block">
                <h2>Latest News</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore mollit anim id est laborum.
                </p>
            </div> <!-- .title-block -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="post-wrapper post-overlay">
                        <div class="image-wrapper gradient-black">
                            <img class="img-responsive" src="http://via.placeholder.com/570x408" alt="blog image 01">
                        </div> <!-- .image-wrapper -->
                        <div class="post-content">
                            <ul class="post-meta">
                                <li>August 03, 2017</li>
                                <li><a href="#">Web Design</a></li>
                            </ul>
                            <h3><a href="#">Excepteur sint occaecat cupidatat non proid</a></h3>
                        </div> <!-- .post-content -->
                    </div> <!-- .post-wrapper post-overlay -->
                </div> <!-- .col-lg-6 -->
                <div class="col-lg-6">
                    <div class="post-wrapper post-split clearfix">
                        <div class="image-wrapper">
                            <img class="img-responsive" src="http://via.placeholder.com/570x408" alt="blog image">
                        </div> <!-- .image-wrapper -->
                        <div class="post-content">
                            <ul class="post-meta">
                                <li>August 03, 2017</li>
                                <li><a href="#">Web Design</a></li>
                            </ul>
                            <h3><a href="#">Aliquam commodo felis ac lacus imper</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt...
                            </p>
                            <a class="btn-open" href="#">Read More</a>
                        </div> <!-- .post-content -->
                    </div> <!-- .post-wrapper split-post -->

                    <div class="post-wrapper post-split clearfix">
                        <div class="image-wrapper">
                            <img class="img-responsive" src="http://via.placeholder.com/570x408" alt="blog image">
                        </div> <!-- .image-wrapper -->
                        <div class="post-content">
                            <ul class="post-meta">
                                <li>August 03, 2017</li>
                                <li><a href="#">Web Design</a></li>
                            </ul>
                            <h3><a href="#">Nam quis odio molestie pulvinar nisl</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt...
                            </p>
                            <a class="btn-open" href="#">Read More</a>
                        </div> <!-- .post-content -->
                    </div> <!-- .post-wrapper split-post -->

                </div> <!-- .col-lg-6 -->
            </div> <!-- .row -->
            <div class="btn-container">
                <a class="btn btn-narrow" href="#">View All</a>
            </div>

        </div> <!-- .container -->
    </section> <!-- .blog-section -->
@endsection
