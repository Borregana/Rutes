<?php
/**
 * Created by PhpStorm.
 * User: Borregana
 * Date: 07/04/14
 * Time: 10.45
 */
class UsuariosController extends AppController {
    public $helpers = array('Html','Form');
    public $uses = array('Ruta', 'Usuario', 'Punto');

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
                $this->Auth->allow(array('controller' => 'Usuarios', 'action' => 'display'));
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Usuario o Contraseña incorrecta'));
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function display(){

        if($this->request->is('post')){

        }
    }

    Public function view(){

        $this->listRutas();
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


        if($this->request->is('post')){

            //$this->request->data['id']=$datos['Usuario']['id'];
            $new_datos['Usuario']=$this->request->data;

            if($this->Usuario->save($this->request->data)){
                $this->Session->setFlash('El perfil ha sido editado');
                $this->redirect(array('action'=>'display'));
            }
            $this->Session->setFlash('El perfil no se puede editar');
            $this->redirect(array('action'=>'edit'));
        }
        else{

            $this->set('datos', $datos);
        }

    }

    public function listRutas(){
        $options= array(
            'conditions'=>array(
                'alias'=>$this->Auth->user()
            )
        );
        $datos=$this->Usuario->find('first', $options);

        $this->set('rutas', $datos['Ruta']);
    }

    public function newRuta(){
        if($this->request->is('post')){
            pr($_POST);
            //$this->request->data['ruta']=$_POST['puntos'];
            pr($this->request->data);
            //die;
            $this->Session->setFlash('La ruta ha sido guardada satisfactoriamente');
            $this->redirect(array('action'=>'display'));
        }
    }
    public function publicRuta(){
        $this->redirect(array('controller'=>'Rutas', 'action'=>'index'));
    }

}
