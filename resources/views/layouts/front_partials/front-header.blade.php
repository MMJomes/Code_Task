<header class="site-header">
    <div class="top-bar clearfix">
        <div class="container">
            <ul class="list-inline pull-left quick-contact">
                <li><a href="#"><i class="fa fa-phone" url="tel"></i> <span>+95 995-251-8323</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> <span>survive-media@gmail.com</span></a></li>
            </ul> <!-- .quick-contact -->

            <ul class="list-inline pull-right top-bar-social">
                <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100030055694868"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/MgMyint_Krrish"><i class="fa fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://web.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/in/maungmyint/"><i class="fa fa-linkedin"></i></a></li>
            </ul> <!-- .top-bar-menu -->

            <ul class="list-inline pull-right top-bar-menu">
                @if (auth()->user())
                    <li><a href="{{ route('backend.dashboard.index') }}" target="_blank">&nbsp;Dashboard&nbsp;</a></li>
                @else
                    <li><a href="{{ route('login') }}" target="_blank">&nbsp;Login &nbsp;</a></li>
                @endif
            </ul> <!-- .top-bar-menu -->
        </div> <!-- .container -->
    </div> <!-- .top-bar -->
    <nav class="navbar corporex-navbar navbar-01">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="javascript:;" onclick="gotohomePage()"><img
                        src="{{ url('logo/Logo-dev-test.svg') }}" alt="corporex logo" style="width: 55%"></a>

            </div> <!-- .navbar-header -->

            <div class="collapse navbar-collapse navbar-items" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('user.index') }}#section_2">Our Service</a></li>
                    <li><a href="{{ route('user.index') }}#section_3">Features</a></li>
                    <li><a href="{{ route('user.index') }}#section_4">What We Do</a></li>
                    <li><a href="{{ route('user.index') }}#section_5">Contact</a></li>
                </ul> <!-- .nav navbar-nav -->
            </div> <!-- .collapse navbar-collapse -->

        </div> <!-- .container -->
    </nav> <!-- .navbar -->
</header> <!-- .site-header -->
