<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div>
    <!-- NEW WIDGET START -->
    <article class="col-md-3">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-0" data-widget-fullscreenbutton="true">
            <header>
                <h2 class="txt-color-red login-header-big"><strong><?= $info['Ruta']['nombre']?></strong></h2>
            </header>
            <!-- widget div-->
            <div>
                <!-- widget content -->
                <div class="widget-body">

                    <?= $info['Ruta']['usuario_id']?>
                    <?= $info['Ruta']['ciudad']?>
                    <?= $info['Ruta']['tiempo']?>
                    <?= $info['Ruta']['vehiculo']?>
                    <?= $info['Ruta']['fecha_publicacion']?>
                    <?= $info['Ruta']['puntuacion_media']?>

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->
    </article>
</div>
<div>
    <!-- NEW WIDGET START -->
    <article class="col-md-4 col-lg-9">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-1" data-widget-fullscreenbutton="true">

            <header>
                <h2 class="txt-color-green login-header-big"><strong>RUTA</strong></h2>
            </header>

            <!-- widget div-->
            <div>
                <!-- widget content -->
                <div class="widget-body">

                   MAPA DE LA RUTA SELECCIONADA

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->
    </article>
    <!-- NEW WIDGET START -->
    <article class="col-md-3">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-0" data-widget-fullscreenbutton="true">
            <header>
                <h2 class="txt-color-blue login-header-big"><strong>Comentarios</strong></h2>
            </header>
            <!-- widget div-->
            <div>
                <!-- widget content -->
                <div class="widget-body">

                    COMENTARIOS Y PUNTUACION

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->
    </article>
</div>

</body>
</html>