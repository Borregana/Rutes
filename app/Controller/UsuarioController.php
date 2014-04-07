<?php
/**
 * Created by PhpStorm.
 * User: Borregana
 * Date: 07/04/14
 * Time: 10.45
 */
class UsuarioController extends AppController {
    public $helpers = array('Html','Form');

    Public function index(){

        $list=$this->paginate(
            'Usuario'
        );

        $this->set('usuario', $list);
    }
}
