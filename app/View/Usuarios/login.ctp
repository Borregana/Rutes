<?php
ob_start();
echo $this->Form->create('Usuario', array('action' => 'login'));
?>
    <div class="login-fields">
        <?php echo $this->Html->para(null, 'Introduce los datos de usuario'); ?>
        <?php
        echo $this->Form->input('alias');
        echo $this->Form->input('password');
        ?>
    </div>
<?php
echo $this->Form->end('Login');
?>
<div>
    <?php
    echo $this->element('widget',
        array(
            'title' => 'Login',
            'icon' => 'desktop',
            'content' => ob_get_clean()
        )
    );
    ?>
</div>