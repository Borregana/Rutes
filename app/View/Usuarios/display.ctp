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
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <!-- register button -->
    <div id="edit" class="pull-right">
        <span> Perfil de usuario <a href="edit" title="Perfil"><i class="btn btn-warning">Configuración</i></a> </span>
    </div>
    <!-- end register button -->
</div>

<div class="col-md-2 col-lg-2 hidden-xs hidden-sm">
    <h1 class="txt-color-red login-header-big">Mis Rutas</h1>
    <div class="well no padding">
    </div>
</div>
<!-- NEW WIDGET START -->
<article class="col-md-6 col-lg-6">

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
</article>

<!-- NEW WIDGET START -->
<article class="col-md-4 col-lg-4">

    <!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget" id="wid-id-0" data-widget-fullscreenbutton="true">

        <header>
            <h2><strong>Información </strong> <i>Ruta</i></h2>

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

                <form  id="smart-form-register" action="newRuta" class="smart-form client-form" method="post">
                    <header>

                    </header>

                    <fieldset>
                        <section>
                            <label class="input"> <i class="icon-append fa fa-user"></i>
                                <input type="text" name="nombre" placeholder="Nombre">
                                <b class="tooltip tooltip-bottom-right">Nombre de la ruta</b> </label>
                        </section>

                        <section>
                            <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                <input type="text" name="ciudad" placeholder="Ciudad">
                                <b class="tooltip tooltip-bottom-right">Ciudad recorrida</b> </label>
                        </section>

                        <section>
                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                <input type="time" name="tiempo" placeholder="Tiempo de recorrido">
                                <b class="tooltip tooltip-bottom-right">Cuanto tiempo tardaste?</b> </label>
                        </section>

                        <section>
                            <label class="input"> <i class="icon-append fa fa-lock"></i>
                                <input type="text" name="vehiculo" placeholder="Vehiculo">
                                <b class="tooltip tooltip-bottom-right">De que modo te moviste por la ciudad?</b> </label>
                        </section>
                    </fieldset>

                    <footer>
                        <button type="submit" class="btn btn-primary">
                            Crear
                        </button>
                    </footer>
                </form>

            </div>
            <!-- end widget content -->

        </div>
        <!-- end widget div -->

    </div>
    <!-- end widget -->
</article>


</body>
</html>