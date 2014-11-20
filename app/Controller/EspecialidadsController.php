<?php
App::uses('AppController', 'Controller');


class EspecialidadsController extends AppController {


    public $uses = array();

    public function ajax_getEspecialidad() {
        $this->loadModel('Especialidad');
        $this->Especialidad = new Especialidad();
        $especialidad = $this->Especialidad->find("list", array('fields' => array('id', 'nombre')));
        $this->set('especialidad', $especialidad);
        $this->layout = 'ajax';
    }

}
