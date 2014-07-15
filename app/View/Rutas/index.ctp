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
                <h2><strong>Buscador</strong></h2>
            </header>

            <!-- widget div-->
            <div>
                <!-- widget content -->
                <div class="widget-body">

                    <form  id="smart-form-search" action="Rutas" class="smart-form client-form" method="post">
                        <fieldset>
                            <div class="col-md-12">
                                <section>
                                    <label class="input"> <i class="icon-append fa fa-user"></i>
                                        <input type="text" name="usuario_id" placeholder="Usuario">
                                        <b class="tooltip tooltip-bottom-right">Que usuario creo la ruta?</b> </label>
                                </section>

                                <section>
                                    <label class="input"> <i class="icon-append fa fa-user"></i>
                                        <input type="text" name="nombre" placeholder="Nombre">
                                        <b class="tooltip tooltip-bottom-right">Nombre de la ruta</b> </label>
                                </section>

                                <section>
                                    <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                        <input type="text" name="ciudad" placeholder="Ciudad">
                                        <b class="tooltip tooltip-bottom-right">Ciudad buscada</b> </label>
                                </section>
                            </div>
                            <div class="col-md-12">
                                <section>
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        <input type="time" name="tiempo" placeholder="Tiempo de recorrido">
                                        <b class="tooltip tooltip-bottom-right">De cuanto tiempo dispones?</b> </label>
                                </section>

                                <section>
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        <input type="text" name="vehiculo" placeholder="Vehiculo">
                                        <b class="tooltip tooltip-bottom-right">De que modo quieres moverte por la ciudad?</b> </label>
                                </section>
                                <section>
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        <input type="text" name="fecha_publicacion" placeholder="Fecha de publicacion">
                                        <b class="tooltip tooltip-bottom-right">Que dia publicaron la ruta?</b> </label>
                                </section>
                            </div>
                        </fieldset>

                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Buscar
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

    <!-- NEW WIDGET START -->
    <article class="col-md-4 col-lg-9">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-1" data-widget-fullscreenbutton="true">

            <header>
                <h2><strong>Rutas</strong></h2>
            </header>

            <!-- widget div-->
            <div>
                <!-- widget content -->
                <div class="widget-body">
                    <?php
                    if($rutas!=''){ ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach( $rutas as $ruta){ ?>
                            <tr>
                                <td><?= $ruta['Ruta']['nombre']; ?></td>
                                <td><?= $ruta['Ruta']['fecha_publicacion']; ?></td>
                                <td><?= $this->Html->link('<i class="icon-home"></i> ', array('action' => 'view', $ruta['Ruta']['id']),  array('class'=>'btn btn-success','data-toggle'=>'tooltip', 'data-title'=>__('home preview'),'escape' => false))?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <?php
                    }
                    else{
                        echo 'Busca las rutas que mejor te vengan...';
                    }?>

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