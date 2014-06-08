<?php
class IndexController extends AppController {
	
	// public $helpers = array ('Html','Form');
	public $components = array('RequestHandler');
	public $uses = array('Prospecto','Noticia','Contacto','Config');
	 public $helpers = array('Spring');
	
	public function beforeFilter() {
		parent::beforeFilter();
		// $this->Auth->allow('index'); // Letting users register themselves
	}
	
    function index() {
	}
	
	function prospectos($status){
		$prospecto = $this->Prospecto->find('all', array(
			'conditions' => array(
				'status' => $status
			)
		));
		// debug($prospecto);
		$this->set('prospecto', $prospecto);
	}
	
	function prospectos_ajax(){ // solo para uso de ajax
		$id = $_POST['id'];
		$prospecto = $this->Prospecto->find('all', array(
			'conditions' => array(
				'id' => $id
			)
		));	
		$this->autoRender = false;
		$this->RequestHandler->respondAs('json');
		echo json_encode($prospecto);
	}
	
	function ver_prospecto($id = null){
		$prospecto = $this->Prospecto->find('first', array(
			'conditions' => array(
				'id' => $id
			)
		));
		$this->set('prospecto', $prospecto);
		// debug($prospecto);
	}
	
	function noticias(){
		$noticias = $this->Noticia->find('all');
		$this->set('noticias', $noticias);
		// debug($prospecto);
	}
	
	function ver_noticia($id = null){
		$noticia = $this->Noticia->find('first', array(
			'conditions' => array(
				'id' => $id
			)
		));
		$this->set('noticia', $noticia);
	}
	
	function contacto(){
	
	}
}