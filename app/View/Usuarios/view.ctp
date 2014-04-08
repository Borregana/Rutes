<?php
ob_start();
?>
<table class="table table-bordered table-hover table-striped">
    <?php

    echo $this->Html->tableHeaders(
        array(
            $this->Paginator->sort('id'),
            $this->Paginator->sort('nombre'),
            $this->Paginator->sort('alias'),
            $this->Paginator->sort('mail')
        )
    );
    ?>
    <tbody>
    <?php
    foreach($usuario as $usuarios){
        echo $this->Html->tableCells(
            array(
                h($usuarios['Usuario']['id']),
                h($usuarios['Usuario']['nombre']),
                h($usuarios['Usuario']['alias']),
                h($usuarios['Usuario']['mail'])
            )
        );
    }
    ?>
    </tbody>
    <?php //<tfoot><tr><td colspan="100"><?= $this->element('paginator'); ?></td></tr><?php //</tfoot>?>
</table>
<div>
    <?php
    echo $this->element('widget',
        array(
            'title' => 'Usuarios',
            'icon' => 'desktop',
            'table' => TRUE,
            'content' => ob_get_clean()
        )
    );
    ?>
</div>