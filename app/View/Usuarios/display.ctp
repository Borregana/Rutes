<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Rutes/app/webroot/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Rutes/app/webroot/css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Rutes/app/webroot/css/smartadmin-production.css">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Rutes/app/webroot/css/smartadmin-skins.css">

    <!-- SmartAdmin RTL Support is under construction
        <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Rutes/app/webroot/css/demo.css">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="http://localhost/Rutes/app/webroot/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="http://localhost/Rutes/app/webroot/img/favicon/favicon.ico" type="image/x-icon">

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
        <!-- widget options:
            usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

            data-widget-colorbutton="false"
            data-widget-editbutton="false"
            data-widget-togglebutton="false"
            data-widget-deletebutton="false"
            data-widget-fullscreenbutton="false"
            data-widget-custombutton="false"
            data-widget-collapsed="true"
            data-widget-sortable="false"

        -->
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