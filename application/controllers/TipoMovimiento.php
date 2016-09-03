<?php

class TipoMovimiento extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('TipoMovimiento_model');
		$this->load->helper('html');
		$this->load->helper('url');
	}
	
	public function index()
	{
		//Ver todo
		$data["tipomovimiento"] = $this->TipoMovimiento_model->get_all();
		$this->load->view("TipoMovimiento/index",$data);
	}
	
	function add(){
		if($this->input->post('nombre')){
			//insert
		    $tipomovimiento = $this->TipoMovimiento_model->get_add($this->input->post('nombre'));
		    redirect('/TipoMovimiento/index','location');
		}
		else{
			//view form add
			$this->load->view("TipoMovimiento/add");
		}
	}
	
	function edit($id){
	if($id>0){
		$data["tipomovimiento"] = $this->TipoMovimiento_model->get_by_id($id);
		$this->load->view("TipoMovimiento/edit",$data);
	}
	
	if($this->input->post('idTipoMovimiento'))
		{
		  $tipomovimiento = $this->TipoMovimiento_model->update($this->input->post('idTipoMovimiento'),$this->input->post('nombre'));
		}
    }
}

?>