<?php
ob_start();
echo $this->Form->create('Usuario');

echo $this->Form->input('alias');
echo $this->Form->input('mail', array('required' => 'required'));
echo $this->Form->input('password');
echo $this->Form->input('comfirmar_password', array('type'=>'password'));

echo $this->Form->end('Save user');
?>
<div>
    <?php
    echo $this->element('widget',
        array(
            'title' => 'Registro',
            'icon' => 'pencil',
            'content' => ob_get_clean()
        )
    );
    ?>
</div>