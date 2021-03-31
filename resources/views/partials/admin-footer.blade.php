<!-- footer start-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2020 © Cuba All rights reserved.</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right mb-0">Developed with  <i class="fa fa-heart font-secondary"></i></p>
            </div>
        </div>
    </div>
</footer>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(
            document.getElementById('map'),
            {center: new google.maps.LatLng(-33.91700, 151.233), zoom: 18});

        var iconBase =
            '../assets/images/dashboard-2/';

        var icons = {
            userbig: {
                icon: iconBase + '1.png'
            },
            library: {
                icon: iconBase + '3.png'
            },
            info: {
                icon: iconBase + '2.png'
            }
        };

        var features = [
            {
                position: new google.maps.LatLng(-33.91752, 151.23270),
                type: 'info'
            }, {
                position: new google.maps.LatLng(-33.91700, 151.23280),
                type: 'userbig'
            },  {
                position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
                type: 'library'
            }
        ];

        // Create markers.
        for (var i = 0; i < features.length; i++) {
            var marker = new google.maps.Marker({
                position: features[i].position,
                icon: icons[features[i].type].icon,
                map: map
            });
        };
    }
</script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGCQvcXUsXwCdYArPXo72dLZ31WS3WQRw&amp;callback=initMap"></script>
</div>
</div>
<!-- latest jquery-->
<script src="{{asset('/assets-admin/js/jquery-3.5.1.min.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('/assets-admin/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('/assets-admin/js/bootstrap/bootstrap.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('/assets-admin/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('/assets-admin/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('/assets-admin/js/sidebar-menu.js')}}"></script>
<script src="{{asset('/assets-admin/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{asset('/assets-admin/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('/assets-admin/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('/assets-admin/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('/assets-admin/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('/assets-admin/js/prism/prism.min.js')}}"></script>
<script src="{{asset('/assets-admin/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('/assets-admin/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('/assets-admin/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/assets-admin/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('/assets-admin/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('/assets-admin/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('/assets-admin/js/dashboard/dashboard_2.js')}}"></script>
<script src="{{asset('/assets-admin/js/tooltip-init.js')}}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('/assets-admin/js/script.js')}}"></script>
<script src="{{asset('/assets-admin/js/theme-customizer/customizer.js')}}"></script>
<!-- login js-->
<!-- Plugin used-->
</body>
</html>
