<?php
/**
 * Created by PhpStorm.
 * User: Borregana
 * Date: 07/04/14
 * Time: 10.45
 */
class UsuariosController extends AppController {
    public $helpers = array('Html','Form');
    public $name = 'Usuarios';

    function beforeFilter() {
        $this->Auth->allow('register');

        parent::beforeFilter();
    }

    public function index(){
        $this->redirect(array('action'=>'login'));
    }
    private function isRegister() {
        $usuarios = $this->Usuario->find('all');
        foreach($usuarios as $key => $user) {
            if(strcmp($user['Usuario']['alias'], $this->request->data['Usuario']['alias']) == 0
                && strcmp($user['Usuario']['password'], $this->Auth->password($this->request->data['Usuario']['password'])) == 0) {
                return true;
            }
        }
        return false;
    }

    public function login() {
        $this->layout = 'default';

        if ($this->Auth->loggedIn()) {
            $this->Auth->logout();
        }
        if ($this->request->is('post')) {
            if ($this->isRegister()) {
                $this->Auth->login($this->request->data['Usuario']['alias']);
                $_SESSION['usuario'] = $this->Auth->user();
                $this->Auth->allow(array('controller' => 'Usuarios', 'action' => 'view'));
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Usuario o Contraseña incorrecta'));
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    Public function view(){

        $list=$this->paginate(
            'Usuario'
        );

        $this->set('usuario', $list);
    }


    public function register() {
        if ($this->request->is('post')) {

            $this->request->data['Usuario']['fecha_alta'] = date( 'm/d/Y' );

            if($this->request->data['Usuario']['password'] == $this->request->data['Usuario']['comfirmar_password']){
                $this->Usuario->create();
                if ($this->Usuario->save($this->request->data)) {
                    $this->Session->setFlash('El usuario a sido creado');
                    $this->redirect(array('action' => 'view'));
                }
            }
            else{
                $this->Session->setFlash('Los passwords no coinciden');
                $this->redirect(array('action'=>'register'));
            }
        }
        else{
            $this->set($this->request->data);
        }
    }
}
