<?php
App::uses('AppModel', 'Model');



class Clinica extends AppModel {

    
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
    
    public function getByMedico($medico){
        return $this->find("list", array(
                'fields' => array('Clinica.id', 'Clinica.nombre'),
                'order' => 'Clinica.nombre',
                'conditions' => array(
                    'ClinicaMedico.medico_id' => $medico,
                ),
                'joins' => array(
                        array(
                            'table' => 'clinica_medicos',
                            'alias' => 'ClinicaMedico',
                            'type' => 'inner',
                            'conditions' => array(
                                'ClinicaMedico.clinica_id = Clinica.id'
                            )
                        )
                    )
                )
            );
    }
}