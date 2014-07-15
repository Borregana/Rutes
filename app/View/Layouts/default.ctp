<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


$cakeDescription = __d('cake_dev','');
?>
<!-- FAVICONS -->
<link rel="shortcut icon" href="http://localhost/Rutes/app/webroot/img/favicon/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://localhost/Rutes/app/webroot/img/favicon/favicon.ico" type="image/x-icon">

<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>

    </title>

    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('cake.generic');

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('font-awesome.min');
    echo $this->Html->css('smartadmin-production');
    echo $this->Html->css('smartadmin-skins');

    echo $this->Html->script('plugin/pace/pace.min');
    echo $this->Html->script('jquery-2.1.1');
    echo $this->Html->script('jquery-ui.min');
    echo $this->Html->script('libs/jquery-2.0.2.min');
    echo $this->Html->script('libs/jquery-ui-1.10.3.min');
    echo $this->Html->script('jquery-gomap-1.3.2');
    echo $this->Html->script('bootstrap/bootstrap.min');
    echo $this->Html->script('notification/SmartNotification.min');
    echo $this->Html->script('smartwidgets/jarvis.widget.min');
    echo $this->Html->script('plugin/easy-pie-chart/jquery.easy-pie-chart.min');
    echo $this->Html->script('plugin/sparkline/jquery.sparkline.min');
    echo $this->Html->script('plugin/jquery-validate/jquery.validate.min');
    echo $this->Html->script('plugin/masked-input/jquery.maskedinput.min');
    echo $this->Html->script('plugin/select2/select2.min');
    echo $this->Html->script('plugin/bootstrap-slider/bootstrap-slider.min');
    echo $this->Html->script('plugin/msie-fix/jquery.mb.browser.min');
    echo $this->Html->script('plugin/smartclick/smartclick');
    echo $this->Html->script('demo');
    echo $this->Html->script('app');
    echo $this->Html->script('plugin/jquery-form/jquery-form.min');
    echo $this->Html->script('plugin/datatables/jquery.dataTables-cust.min');
    echo $this->Html->script('plugin/datatables/ColReorder.min');
    echo $this->Html->script('plugin/datatables/FixedColumns.min');
    echo $this->Html->script('plugin/datatables/ColVis.min');
    echo $this->Html->script('plugin/datatables/ZeroClipboard');
    echo $this->Html->script('plugin/datatables/media/js/TableTools.min');
    echo $this->Html->script('plugin/datatables/DT_bootstrap');
    echo $this->Html->script('plugin/maxlength/bootstrap-maxlength.min.js');
    echo $this->Html->script('plugin/bootstrap-timepicker/bootstrap-timepicker.min.js');
    echo $this->Html->script('plugin/bootstrap-tags/bootstrap-tagsinput.min.js');
    echo $this->Html->script('plugin/noUiSlider/jquery.nouislider.min.js');
    echo $this->Html->script('plugin/ion-slider/ion.rangeSlider.min.js');
    echo $this->Html->script('plugin/colorpicker/bootstrap-colorpicker.min.js');
    echo $this->Html->script('plugin/knob/jquery.knob.min.js');
    echo $this->Html->script('plugin/x-editable/moment.min.js');
    echo $this->Html->script('plugin/x-editable/jquery.mockjax.min.js');
    echo $this->Html->script('plugin/x-editable/x-editable.min.js');
    echo $this->Html->script('plugin/typeahead/typeahead.min.js');
    echo $this->Html->script('plugin/typeahead/typeaheadjs.min.js');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div id="container">
    <div id="header">
        <h1></h1>
        <!-- logout button -->
        <div id="logout" class="pull-right">
            <span> <a href="login" title="Sign Out"><i class="btn btn-success"> Salir</i></a> </span>
        </div>
        <!-- end logout button -->
    </div>
    <div id="content">

        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer">
        <?php echo $this->Html->link(
            $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
            'http://www.cakephp.org/',
            array('target' => '_blank', 'escape' => false)
        );
        ?>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
