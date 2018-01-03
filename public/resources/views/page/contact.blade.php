@extends("layouts.app")

@section("page-wrap")
    <!-- Page main wrapper -->
    <div id="main-content" class="abs dark-template">

        <div id="map" style="width:100%;height:100%;"></div>

    </div>
    <!-- /Page main wrapper -->
@endsection

@section("scripts")
    <!-- google map -->
    <script>
        function initMap() {
            var myLatLng = {lat: -6.861229, lng:  107.579325};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Jl. Gegerkalong Tonggoh III No.15, Gegerkalong, Sukasari, Kota Bandung, Jawa Barat 40153'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkcjhAjq4QET8dVVGzdHf_a8N5Tk5ueYo&callback=initMap"></script>
    @endsection