<?php
App::uses('AppController', 'Controller');


class LocalidadsController extends AppController {

public $uses = array();

        public function ajax_getCiudad() {
            if (!$this->request->is('ajax') || !$this->request->is('get')) {
                throw new MethodNotAllowedException(__('This method is not allowed'));
            }
            if (!isset($this->request->query['reset'])) {
                $this->loadModel('Localidad');
                $this->Localidad = new Localidad();
                $ciudad = $this->Localidad->find("list", array('fields' => array('id','nombre')));
            } else {
                $ciudad = array();
            }
            $this->set('ciudad',$ciudad);
            $this->layout = 'ajax';
	}
}
