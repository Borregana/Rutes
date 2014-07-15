<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div>
    <div class="col-md-3"></div>
    <div id="content" class="container">
        <div class="col-md-12">
            <div class="well no-padding">
                <header>
                    <h1 class="txt-color-red login-header-big"><center>Mis Rutas</center></h1>
                </header>
                <table class="table table-bordered table-striped">
                    <thead>
                    </thead>
                    <tbody>
                    <?php
                    foreach( $rutas as $ruta){?>
                        <tr>
                            <td><?= $ruta['nombre']; ?></td>
                            <td><?= $ruta['ciudad']; ?></td>
                            <td><?= $ruta['tiempo']; ?></td>
                            <td><?= $ruta['vehiculo']; ?></td>
                            <td><?= $ruta['fecha_publicacion']; ?></td>

                            <td><?if($ruta['publica']==1){
                                    echo 'SI';
                                }
                                else{
                                    echo 'NO';
                                }?></td>
                            <td><?= $ruta['puntuacion_media']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>
