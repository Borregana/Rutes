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
            if(strcmp($user['Usuario']['alias'], $this->request->data['alias']) == 0
                && strcmp($user['Usuario']['password'], $this->Auth->password($this->request->data['password'])) == 0) {
                return true;
            }
        }
        return false;
    }

    public function login() {

        if ($this->Auth->loggedIn()) {
            $this->Auth->logout();
        }
        if ($this->request->is('post')) {
            if ($this->isRegister()) {
                $this->Auth->login($this->request->data['alias']);
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

            $this->request->data['fecha_alta'] = date( 'm/d/Y' );

            if($this->request->data['password'] == $this->request->data['comfirmar_password']){
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

    public function edit(){
        $options= array(
            'conditions'=>array(
                'alias'=>$this->Auth->user()
            )
        );
        $datos=$this->Usuario->find('first',$options);

        $this->request->data['id']=$datos['Usuario']['id'];

        if($this->request->is('post')){

            if($this->Usuario->save($this->request->data)){
                $this->Session->setFlash('El perfil ha sido editado');
            }
            $this->Session->setFlash('El perfil no se puede editar');
        }
        else{

            $this->set('datos', $datos);
        }

    }
}
