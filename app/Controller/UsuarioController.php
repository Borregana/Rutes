<?php
/**
 * Created by PhpStorm.
 * User: Borregana
 * Date: 07/04/14
 * Time: 10.45
 */
class UsuarioController extends AppController { public $helpers = array ('Html', 'Form');
function index() {
    $this->set('usuario', $this->Usuario->find('all'));
} }