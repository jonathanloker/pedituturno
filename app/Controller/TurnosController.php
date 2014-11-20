<?php
App::uses('AppController', 'Controller');


class TurnosController extends AppController {

public $uses = array();

        public function ajax_generarTabla() {
            if (!$this->request->is('ajax') || !$this->request->is('get')) {
                throw new MethodNotAllowedException(__('This method is not allowed'));
            }
            $medico = $this->request->query['medico'];
            $prepaga = $this->request->query['prepaga'];
            $clinica = $this->request->query['clinica'];
            $this->set('medico',$medico);
            $this->set('clinica',$clinica);
            $this->set('prepaga',$prepaga);
            $this->layout = 'ajax';
	}
}
