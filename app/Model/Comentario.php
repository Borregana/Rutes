<?php
/**
 * Created by PhpStorm.
 * User: Borregana
 * Date: 10/04/14
 * Time: 13.01
 */
App::uses('Model', 'Model');

class Comentario extends Model {
    public $name='Comentario';

    /**
     * belongsTo associations
     *
     * @var array
     */

    public $belongsto = array(

        'Usuario' => array(
            'className' => 'Usuario',
            'foreignKey' => 'usuario_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ),

        'Ruta' => array(
            'className' => 'Ruta',
            'foreignKey' => 'ruta_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
        )
    );

}