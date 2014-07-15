<?php
/**
 * Created by PhpStorm.
 * User: Borregana
 * Date: 14/07/14
 * Time: 12.10
 */
/**
 * Este elemento no necesita parametros, para crear un nuevo
 * botón en el menú basta con hacer un nuevo elemento con
 * la siguiente llamada:
 *
 * echo $this->element('menu_button', array(
 *        "name" => "Users",
 *        "aco" => "Users/index",
 *        "icon" => "icon-user",
 *        "list" => array(
 *            "List Users" => array(
 *                "controller" => "Users",
 *                "action" => "index"
 *            ),
 *            "New User" => array(
 *                "controller" => "Users",
 *                "action" => "add"
 *            )
 *        )
 *      )
 *    );
 *
 * Con esto haremos aparecer u nuevo elemento del menú
 */
?>
<div class="subnavbar">
<div class="subnavbar-inner">
<div class="container">
<a class="btn-subnavbar collapsed" data-toggle="collapse" data-target=".subnav-collapse">
    <i class="icon-reorder"></i>
</a>
<div class="subnav-collapse collapse">
<ul class="mainnav">
<li class="home">
    <a href="/usuarios/display">
        <i class="icon-home"></i>
        <span><?= __('Home'); ?></span>
    </a>
</li>
<li class="profile">
    <a href="/usuarios/display">
        <i class="icon-user"></i>
        <span><?= __('My Profile'); ?></span>
    </a>
</li>
<?php

?>
</ul>
</div>
</div> <!-- /container -->
</div> <!-- /subnavbar-inner -->
</div><!-- /subnavbar -->
