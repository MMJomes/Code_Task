@extends('layouts.front_end')
@section('content')
    @if (count($banners) > 0)
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
    @endif

    <section class="intro-section section-block" id="section_2">
        <div class="container">
            <div class="title-block">
                <h2>Welcome to Survive Media</h2>
                <p style="text-align: center;text-align: left">
                    Recently, the National Broadcasting and Telecommunications Commission unveiled a comprehensive study on
                    Thai media habits. The results of the study showed that television (TV) as a medium will still be in
                    widespread use in Thailand for the next decade even as the print media craters.
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
                <div class="col-md-6 img-block" br>
                    <img class="img-responsive" height="500px !important" src="{{ url('logo/Logo-dev-test.svg') }}"
                        height="120x" alt="about image">
                </div> <!-- .col-md-6 img-block -->
                <div class="col-md-6 content-block">
                    <h2><span>We are awesome</span>We servce the best among all in the industry</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ,
                    </p>
                    <a class="btn btn-main" href="#">Read More</a>
                </div> <!-- .col-md-6 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .about-section -->

    <section class="features-section section-block" id="section_4">
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
                        <img class="img-responsive" src="{{ url('logo/about.jpg') }}" alt="features image">
                    </div> <!-- .img-wrapper -->
                </div> <!-- .col-md-4 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .features-section -->

	<section class="contact-section page-content" id="section_5">
		<div class="container">
			<div class="contact-options section-block">
				<div class="row">
					<div class="col-md-4">
						<div class="icon-box"><i class="fa fa-map-marker"></i></div>
						<h3>Address</h3>
						<p>20, Hlaing, Amin Bazar <br> Yangon, Myanmar</p>
					</div> <!-- .col-md-4 -->
					<div class="col-md-4">
						<div class="icon-box"><i class="fa fa-phone"></i></div>
						<h3>Phone</h3>
						<a href="#">09952518323</a>
					</div> <!-- .col-md-4 -->
					<div class="col-md-4">
						<div class="icon-box"><i class="fa fa-envelope-o"></i></div>
						<h3>Email</h3>
						<a href="#">maungmyint.mti.com</a>
					</div> <!-- .col-md-4 -->
				</div> <!-- .row -->
			</div> <!-- .contact-options -->
			<div class="contact-form-block">
				<div class="row">
					<div class="col-md-7 form-block">
						<h2>Say Hello</h2>
						<div class="form-message">
							<p></p>
						</div> <!-- .form-message -->
						<form id="corporex-contact"  action="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="author" class="sr-only">Name:</label>
										<input class="form-control" type="text" name="author" id="author" placeholder="Name *">
									</div> <!-- .form-group -->
									<div class="form-group">
										<label for="email" class="sr-only">Email:</label>
										<input class="form-control" type="email" name="email" id="email" placeholder="Email *">
									</div> <!-- .form-group -->
									<div class="form-group">
										<label for="url" class="sr-only">Url:</label>
										<input class="form-control" type="url" name="url" id="url" placeholder="Website">
									</div> <!-- .form-group -->
									<div class="form-group">
										<label for="phone" class="sr-only">Phone:</label>
										<input class="form-control" type="text" name="phone" id="phone" placeholder="Phone">
									</div> <!-- .form-group -->
								</div> <!-- .col-md-6 -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="comment" class="sr-only">Comment:</label>
										<textarea class="form-control" name="comment" id="comment" placeholder="Write your comment here *"></textarea>
									</div> <!-- .form-group -->
									<button class="btn btn-main">Submit</button>
								</div> <!-- .col-md-6 -->
							</div> <!-- .row -->
						</form>
					</div> <!-- .col-md-7 -->
					<div class="col-md-5 map-block">
						<h3>Location</h3>
						<div class="map-box" id="map-box">

						</div> <!-- .map-box -->
					</div> <!-- .col-md-5 -->
				</div> <!-- .row -->
			</div> <!-- .contact-form -->
		</div> <!-- .container -->
	</section> <!-- .portfolio-section -->

@endsection
