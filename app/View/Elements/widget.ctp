<?php
/**
 * widget.ctp
 * User: Pablo Salas Ferrer
 * Date: 7/04/14
 * Time: 08:39
 */
?>
<div class="widget stacked <?php echo (isset($table))?'widget-table':'';?>">
  <?php if(isset($title)): ?>
  <div class="widget-header">
    <i class="icon-<?php  echo (isset($icon))?$icon:'star' ?>"></i>
    <h3><?php  echo $title; ?></h3>
    <?php  if(isset($extraTitle)) echo $extraTitle; ?>
  </div> <!-- /widget-header -->
  <?php endif; ?>
  <div class="widget-content">
    <?php  echo $content; ?>
  </div> <!-- /widget-content -->
</div> <!-- /widget -->
