<!-- File: /app/View/Posts/add.ctp -->
<h1>Add Post</h1>
<?php
echo $this->Form->create('Usuario');

echo $this->Form->input('nombre');
echo $this->Form->input('apellidos');
echo $this->Form->input('alias');
echo $this->Form->input('mail');
echo $this->Form->input('direccion');
echo $this->Form->input('password');
echo $this->Form->input('comfirmar', array('type'=>'password'));

echo $this->Form->end('Save user');
?>