<?php
App::uses('AppModel', 'Model');



class Localidad extends AppModel {

    
    public $recursive = -1;


    public $validate = array(
        'nombre' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'allowEmpty' => false,
            )
        )
        
    );


    public $belongsTo = array(
    );

    public $hasMany = array(
    );


    public $hasAndBelongsToMany = array(
    );
    
}