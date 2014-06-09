<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="http://localhost/Rutes/app/webroot/img/favicon/favicon.ico" type="image/x-icon">

</head>
<body id="login" class="animated fadeInDown">

<div id="main" role="main">

    <!-- MAIN CONTENT -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <!-- register button -->
        <div id="edit" class="pull-right">
            <span><a href="display" title="volver"><i class="btn btn-warning">Volver</i></a> </span>
        </div>
        <!-- end register button -->
    </div>
    <div id="content" class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <div class="well no-padding">

                    <form  id="smart-form-register" action="edit" class="smart-form client-form" method="post">
                        <header>
                            Información de usuario
                        </header>

                        <fieldset>
                            <section>
                                <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                    <input type="text" name="nombre" placeholder="Nombre" value= <?= $datos['Usuario']['nombre']?>>
                                    <b class="tooltip tooltip-bottom-right">Tu nombre real</b> </label>
                            </section>

                            <section>
                                <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                    <input type="text" name="apellidos" placeholder="Apellidos" value= <?= $datos['Usuario']['apellidos']?>>
                                    <b class="tooltip tooltip-bottom-right">Tus apellidos reales</b> </label>
                            </section>

                            <section>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    <input type="text" name="alias" placeholder="Alias" value= <?= $datos['Usuario']['alias']?>>
                                    <b class="tooltip tooltip-bottom-right">Tu nombre de usuario para acceder</b> </label>
                            </section>

                            <section>
                                <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                    <input type="email" name="mail" placeholder="Direccion de Email" value= <?= $datos['Usuario']['mail']?>>
                                    <b class="tooltip tooltip-bottom-right">Lo necesitamos para estar en contacto</b> </label>
                            </section>


                            <section>
                                <label class="input"> <i class="icon-append fa fa-envelope"></i>
                                    <input type="text" name="direccion" placeholder="Dirección" value= <?= $datos['Usuario']['direccion']?>>
                                    <b class="tooltip tooltip-bottom-right">La dirección donde vives</b> </label>
                            </section>

                        </fieldset>

                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Guardar cambios
                            </button>
                        </footer>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>