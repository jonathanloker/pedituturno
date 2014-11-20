<?php

App::uses('AppModel', 'Model');

class Medico extends AppModel {

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

    public function getByEspecialidadLocalidadPrepaga($especialidad, $ciudad, $prepaga) {
        return $this->find("list", array(
                    'fields' => array('Medico.id', 'Medico.nombre'),
                    'order' => 'Medico.nombre',
                    'conditions' => array(
                        'Medico.especialidad_id' => $especialidad,
                        'PrepagaMedico.prepaga_id' => $prepaga,
                        'LocalidadMedico.localidad_id' => $ciudad
                    ),
                    'joins' => array(
                        array(
                            'table' => 'prepaga_medicos',
                            'alias' => 'PrepagaMedico',
                            'type' => 'inner',
                            'conditions' => array(
                                'PrepagaMedico.medico_id = Medico.id'
                            )
                        ),
                        array(
                            'table' => 'localidad_medicos',
                            'alias' => 'LocalidadMedico',
                            'type' => 'inner',
                            'conditions' => array(
                                'LocalidadMedico.medico_id = Medico.id'
                            )
                        )
                    )
                )
            );
    }

}
