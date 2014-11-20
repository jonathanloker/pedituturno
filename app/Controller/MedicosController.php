<?php

App::uses('AppController', 'Controller');

class MedicosController extends AppController {

    public $uses = array();


    public function ajax_getMedico() {
        if (!$this->request->is('ajax') || !$this->request->is('get')) {
            throw new MethodNotAllowedException(__('This method is not allowed'));
        }
        if(!isset($this->request->query['reset'])){
            $this->loadModel('Medico');
            $this->Medico = new Medico();
            if (isset($this->request->query['especialidad_id'])) {
                $especialidad = $this->request->query['especialidad_id'];
                $ciudad = $this->request->query['ciudad_id'];
                $prepaga = $this->request->query['prepaga_id'];

            }
            $medico = $this->Medico->getByEspecialidadLocalidadPrepaga($especialidad, $ciudad, $prepaga);
        } else {
            $medico = array();
        }
        $this->set('medico', $medico);
        $this->layout = 'ajax';
    }

}
