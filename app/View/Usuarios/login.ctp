<!DOCTYPE html>
<html>
<head>

</head>
<body id="login" class="animated fadeInDown">

<div id="main" role="main">

    <!-- MAIN CONTENT -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <!-- register button -->
        <div id="register" class="pull-right">
            <span> No tienes cuenta? <a href="register" title="Registro"><i class="btn btn-danger">Registrarse</i></a> </span>
        </div>
        <!-- end register button -->
    </div>
    <div id="content" class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                <div class="well no-padding">
                    <form id="login-form" action=login class="smart-form" novalidate="novalidate" method="post">
                        <header>
                            Login
                        </header>
                        <fieldset>
                            <section>
                                <label class="label">Alias</label>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    <input  name="alias">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Introduce tu alias</b></label>
                            </section>
                            <section>
                                <label class="label">Password</label>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
                                    <input type="password" name="password">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Introduce tu password</b> </label>
                            </section>
                            <section>
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" checked="">
                                    <i></i>Manten mi cuenta</label>
                            </section>
                        </fieldset>
                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Sign in
                            </button>
                        </footer>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
                <h1 class="txt-color-red login-header-big">Rutes</h1>
                <div class="hero">
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>