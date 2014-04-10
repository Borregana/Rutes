<?php
/**
 * Created by PhpStorm.
 * User: Borregana
 * Date: 10/04/14
 * Time: 12.56
 */

App::uses('Model', 'Model');


class Ruta extends Model {
    public $name='Ruta';

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
        )
    );
    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Punto' => array(
            'className' => 'Punto',
            'foreignKey' => 'ruta_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Comentario' => array(
            'className' => 'Comentario',
            'foreignKey' => 'ruta_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
}