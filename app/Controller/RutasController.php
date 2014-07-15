<?php
/**
 * Created by PhpStorm.
 * User: Borregana
 * Date: 11/07/14
 * Time: 13.26
 */

class RutasController extends AppController {
    public $helpers = array('Html','Form');
    public $uses = array('Ruta', 'Usuario', 'Punto', 'Comentario');

    public function index(){
        //Buscador
        $datos='';
        if($this->request->is('post')){
            $options=array(
                'conditions'=>array(
                    'OR'=>array(
                        'nombre'=>$this->request->data['nombre'],
                        'ciudad'=>$this->request->data['ciudad'],
                        'tiempo'=>$this->request->data['tiempo'],
                        'vehiculo'=>$this->request->data['vehiculo'],
                        'fecha_publicacion'=>$this->request->data['fecha_publicacion']
                    )
                )
            );
            $datos=$this->Ruta->find('all', $options);

        }
        $this->set('rutas', $datos);
    }

    public function view($id){
        //recupero info de la ruta
        $options=array(
            'conditions'=>array(
                'id'=>$id
            )
        );
        $info=$this->Ruta->find('first', $options);

        //busco el nombre del usuario que a creado la ruta
        $options = array(
            'conditions' => array(
                'id'=>$info['Ruta']['usuario_id']
            ),
            'fields' => array(
                'Usuario.id',
                'Usuario.alias'
            )
        );;
        $alias = $this->Usuario->find('first', $options);

        $info['Ruta']['usuario_id']=$alias['Usuario']['alias'];

        $this->set('info', $info);
    }
}