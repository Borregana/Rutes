<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
        html, body, #map-canvas {
            height: 100%;
            margin: 0px;
            padding: 0px
        }
    </style>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 8,
                center: new google.maps.LatLng(39.8867882,-0.0867386)
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);
        }

        function loadScript() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
                'callback=initialize';
            document.body.appendChild(script);
        }

        window.onload = loadScript;

    </script>
</head>
<body>
<!-- NEW WIDGET START -->
<article class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

    <!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget" id="wid-id-0" data-widget-fullscreenbutton="true">

        <header>
            <h2><strong>Aqui va el nombre de la </strong> <i>Ruta seleccionada</i></h2>

        </header>

        <!-- widget div-->
        <div>

            <!-- widget edit box -->
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->
                <input class="form-control" type="text">
                <span class="note"><i class="fa fa-check text-success"></i> Change title to update and save instantly!</span>

            </div>
            <!-- end widget edit box -->

            <!-- widget content -->
            <div class="widget-body">

                <div id="map-canvas" class="google-maps"></div>

            </div>
            <!-- end widget content -->

        </div>
        <!-- end widget div -->

    </div>
    <!-- end widget -->

</body>
</html>