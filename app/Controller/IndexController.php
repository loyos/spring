<?php
class IndexController extends AppController {
	
	// public $helpers = array ('Html','Form');
	// public $components = array('RequestHandler','HighCharts.HighCharts');
	// public $uses = array('Cuenta','Abono','Pedido','Config');
	
	public function beforeFilter() {
		parent::beforeFilter();
		// $this->Auth->allow('index'); // Letting users register themselves
	}
	
    function index() {		
    }
	
}
