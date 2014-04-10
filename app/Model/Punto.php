<?php
/**
 * Created by PhpStorm.
 * User: Borregana
 * Date: 10/04/14
 * Time: 12.57
 */

App::uses('Model', 'Model');

class Punto extends Model {
    public $name='Punto';

    /**
     * belongsTo associations
     *
     * @var array
     */

    public $belongsto = array(
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