<?php
App::uses('AppModel', 'Model');


/**
 * Tag Model
 *
 * @property Company $Company
 * @property Campaign $Campaign
 */
class Prepaga extends AppModel {

    
    public $recursive = -1;

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'nombre' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        )
        
    );

     
    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
    );
       //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
    );

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
    );
    
}