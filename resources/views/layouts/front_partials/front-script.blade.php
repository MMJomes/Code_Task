<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700%7CRoboto:400,400i,700" rel="stylesheet">
<script src="{{ asset('main-files/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('main-files/js/slick.min.js') }}"></script>
<script src="{{ asset('main-files/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('main-files/js/mixitup.min.js') }}"></script>
<script src="{{ asset('main-files/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('main-files/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('main-files/js/script.js') }}"></script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSGmNbOd874jHdcQEmXwJC6qz6TZkJjtA&callback=initMap"></script>
<script>
    function initMap() {
        var uluru = {
            lat: 23.7869378,
            lng: 90.3230889
        };
        var map = new google.maps.Map(document.getElementById('map-box'), {
            zoom: 12,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
