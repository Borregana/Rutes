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

</head>
<body id="login" class="animated fadeInDown">

<div id="main" role="main">

    <!-- MAIN CONTENT -->

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

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

<!-- BOOTSTRAP JS -->
<script src="http://localhost/Rutes/app/webroot/js/bootstrap/bootstrap.min.js"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="http://localhost/Rutes/app/webroot/js/notification/SmartNotification.min.js"></script>

<!-- JARVIS WIDGETS -->
<script src="http://localhost/Rutes/app/webroot/js/smartwidgets/jarvis.widget.min.js"></script>

<!-- EASY PIE CHARTS -->
<script src="http://localhost/Rutes/app/webroot/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

<!-- SPARKLINES -->
<script src="http://localhost/Rutes/app/webroot/js/plugin/sparkline/jquery.sparkline.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="http://localhost/Rutes/app/webroot/js/plugin/jquery-validate/jquery.validate.min.js"></script>

<!-- JQUERY MASKED INPUT -->
<script src="http://localhost/Rutes/app/webroot/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="http://localhost/Rutes/app/webroot/js/plugin/select2/select2.min.js"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="http://localhost/Rutes/app/webroot/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

<!-- browser msie issue fix -->
<script src="http://localhost/Rutes/app/webroot/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

<!-- MAIN APP JS FILE -->
<script src="http://localhost/Rutes/app/webroot/js/app.js"></script>

</body>
</html>