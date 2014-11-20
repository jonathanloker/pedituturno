<?php

App::uses('AppController', 'Controller');

class ClinicasController extends AppController {

    public $uses = array();


    public function ajax_getClinica() {
        if (!$this->request->is('ajax') || !$this->request->is('get')) {
            throw new MethodNotAllowedException(__('This method is not allowed'));
        }
        if (!isset($this->request->query['reset'])) {
            $this->loadModel('Clinica');
            $this->Clinica = new Clinica();

            if (isset($this->request->query['medico_id'])) {
                $medico = $this->request->query['medico_id'];

            }
            $clinica = $this->Clinica->getByMedico($medico);
        } else {
            $clinica = array();
        }
        $this->set('clinica', $clinica);
        $this->layout = 'ajax';
    }

}
