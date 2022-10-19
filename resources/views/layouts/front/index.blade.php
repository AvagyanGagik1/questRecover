<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{\App\Http\Helpers\Constants::metaDescriptions[Request::route()->getName()]}}">
    <link nonce="" rel="shortcut icon" type="image/x-icon" href="/images/static/Quest_Behavioral_Health_logo.png">
    <title>{{\App\Http\Helpers\Constants::pageTitles[Request::route()->getName()]}}</title>

    <!-- bootstrap.min css -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Icon Font Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

{{--    <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">--}}
<!-- Owl Carousel CSS -->
{{--    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">--}}
{{--    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">--}}

<!-- Main Stylesheet -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body>
@include('front.helpers.header')
@if(Request::route()->getName() !== \App\Http\Helpers\Constants::FRONT_INDEX && Request::route()->getName() !== \App\Http\Helpers\Constants::FRONT_ARTICLE)
    @include('front.helpers.subHeader',['header'=>$header??'','image'=>$image??''])
@endif
@yield('content')
@include('front.helpers.footer')
<!--
Essential Scripts
=====================================-->


<!-- Main jQuery -->

<!-- Bootstrap 4.3.1 -->

<!--  Magnific Popup-->
{{--<script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>--}}

<!-- Google Map -->


<script src="{{asset('js/front/templateScript.js')}}" defer></script>
@if(Request::route()->getName() === \App\Http\Helpers\Constants::FRONT_CONTACT)
    <script>function initMap() {
            // Styles a map in night mode.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 40.674, lng: -73.945},
                zoom: 12,
                styles: [
                    {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                    {
                        featureType: 'administrative.locality',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'geometry',
                        stylers: [{color: '#263c3f'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#6b9a76'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{color: '#38414e'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#212a37'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#9ca5b3'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry',
                        stylers: [{color: '#746855'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#1f2835'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#f3d19c'}]
                    },
                    {
                        featureType: 'transit',
                        elementType: 'geometry',
                        stylers: [{color: '#2f3948'}]
                    },
                    {
                        featureType: 'transit.station',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{color: '#17263c'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#515c6d'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.stroke',
                        stylers: [{color: '#17263c'}]
                    }
                ]
            });
        }</script>
    <script type="text/javascript"
            src="https://maps.google.com/maps/api/js?key={{ config('google.google_key') }}&callback=initMap"></script>
@endif


</body>
</html>
