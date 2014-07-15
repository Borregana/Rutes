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
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9IemfslK-z4Wyuht0lka_Z2AqVbNfVXQ&sensor=false&libraries=drawing">
    </script>
    <script type="text/javascript" src="http://localhost/Rutes/app/webroot/js/jquery-1.11.1.js"></script>

    <script>
        var markersArray = [];

        function printRoute() {
            var s = "";
            for (var i=0; i<markersArray.length; i++) {
                s += markersArray[i].getPosition().toString() + "\n";
            }
            alert(s);
        }

        function submitData(){
            var s = "";
            for (var i=0; i<markersArray.length; i++) {
                s += markersArray[i].getPosition().toString();
            }
            var parametros = {
                "puntos" : s,
                "nocache" : Math.random() // no cache
            };

            $.ajax({
                data:  parametros,
                url:   'UsuariosController.php',
                type:  'post',
                success:  function (response) {
                    alert(response);
                }
            });
        }

        function initialize() {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(39.8867882,-0.0867386)
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

            var drawingManager = new google.maps.drawing.DrawingManager({
                //drawingMode: google.maps.drawing.OverlayType.MARKER,
                drawingControl: true,
                drawingControlOptions: {
                    position: google.maps.ControlPosition.TOP_CENTER,
                    drawingModes: [
                        google.maps.drawing.OverlayType.MARKER,
                        google.maps.drawing.OverlayType.POLYLINE,
                        // google.maps.drawing.OverlayType.CIRCLE,
                    ]
                },
                markerOptions: {
                    editable: true,
                    draggable: true
                },

                polylineOptions: {
                    editable: true,
                    draggable: true
                },

                // circleOptions: {
                //     editable: true,
                // }
            });
            drawingManager.setMap(map);

            google.maps.event.addListenerOnce(map, 'idle', function() {
                // do something only the first time the map is loaded
                $(".gmnoprint").each(function() {
                    var newObj = $(this).find("[title='Stop drawing']");
                    newObj.attr('id', 'btnStop');

                    // ID the toolbar
                    newObj.parent().parent().attr("id", "btnBar");

                    // ID the Marker button
                    newObj = $(this).find("[title='Add a marker']");
                    newObj.attr('id', 'btnMarker');

                    // ID the line button
                    newObj = $(this).find("[title='Draw a line']");
                    newObj.attr('id', 'btnLine');
                });

                $("#btnBar").append('<div style="float: left; line-height: 0;"><div id="btnDelete" style="direction: ltr; overflow: hidden; text-align: left; position: relative; color: rgb(51, 51, 51); font-family: Arial,sans-serif; -moz-user-select: none; font-size: 13px; background: none repeat scroll 0% 0% rgb(255, 255, 255); padding: 4px; border-width: 1px 1px 1px 0px; border-style: solid solid solid none; border-color: rgb(113, 123, 135) rgb(113, 123, 135) rgb(113, 123, 135) -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.4); font-weight: normal;" title="Delete Selected"><span style="display: inline-block;"><div style="width: 16px; height: 16px; overflow: hidden; position: relative;"><img style="position: absolute; left: 0px; top: -195px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 16px; height: 350px;" src="goma.png" draggable="false"></div></span></div></div>');

                $("#btnBar").append('<div style="float: left; line-height: 0;"><div id="btnSave" style="direction: ltr; overflow: hidden; text-align: left; position: relative; color: rgb(51, 51, 51); font-family: Arial,sans-serif; -moz-user-select: none; font-size: 13px; background: none repeat scroll 0% 0% rgb(255, 255, 255); padding: 4px; border-width: 1px 1px 1px 0px; border-style: solid solid solid none; border-color: rgb(113, 123, 135) rgb(113, 123, 135) rgb(113, 123, 135) -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.4); font-weight: normal;" title="Save"><span style="display: inline-block;"><div style="width: 16px; height: 16px; overflow: hidden; position: relative;"><img style="position: absolute; left: 0px; top: -195px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 16px; height: 350px;" src="save.png" draggable="false"></div></span></div></div>');


                google.maps.event.addDomListener(document.getElementById('btnSave'), 'click', submitData);

                google.maps.event.addListener(drawingManager, 'markercomplete', function(marker) {
                    markersArray.push(marker);
                });

            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>

</head>
<body>

<div>

    <!-- NEW WIDGET START -->
    <article class="col-md-9">
        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-1" data-widget-fullscreenbutton="true">
            <header>
                <h2 class="txt-color-red login-header-big"><strong>MAPA PRINCIPAL</strong></h2>
            </header>
            <!-- widget div-->
            <div>
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
    <div class="col-md-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="private" class="col-md-4">
                <span> Mis Rutas <a href="view" title="Publica"><i class="btn btn-info">Acceder</i></a> </span>
            </div>
            <div id="public" class="col-md-4">
                <span> Vista Publica <a href="publicRuta" title="Publica"><i class="btn btn-success">Rutas</i></a> </span>
            </div>
            <div id="edit" class="col-md-4">
                <span> Perfil de usuario <a href="edit" title="Perfil"><i class="btn btn-warning">Configuración</i></a> </span>
            </div>
        </div>
        <div class="col-md-12"></div>
        <!-- NEW WIDGET START -->
        <article class="col-md-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget" id="wid-id-0" data-widget-fullscreenbutton="true">
                <header>
                    <h2><strong>Información </strong> <i>Ruta</i></h2>
                </header>
                <!-- widget div-->
                <div>
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
                                <button type="submit" class="btn btn-primary" name="crear" onclick="submitData">
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
    </div>
</div>

</body>
</html>