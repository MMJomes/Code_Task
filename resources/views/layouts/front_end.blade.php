<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.front_partials.front-head')
</head>

<body class="home-01">
    @include('layouts.front_partials.front-loader')
    @include('layouts.front_partials.front-header')
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
    @include('layouts.front_partials.front-footer')
    <!-- SCRIPTS -->
    @include('layouts.front_partials.front-script')
    <script>
        function gotohomePage() {
            window.location.href = "{{ url('/') }}";
        }
    </script>
</body>

</html>
