<?php

class Movimiento extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Movimiento_model');
		$this->load->helper('html');
		$this->load->helper('url');
	}
	
	public function index()
	{
		//Ver todo
		$data["movimiento"] = $this->Movimiento_model->get_all();
		$this->load->view("Movimiento/index",$data);
	}
	
	function add(){
		if($this->input->post('fecha')){
			//insert
		    $movimiento = $this->Movimiento_model->get_add($this->input->post('fecha'),
			$this->input->post('monto'),
			$this->input->post('idCuenta'),
			$this->input->post('idTipoMovimiento')
			);
		    redirect('/Movimiento/index','location');
		}
		else{
			//view form add
			$this->load->view("Movimiento/add");
		}
	}
	
	function edit($id){
	if($id>0){
		$data["cuenta"] = $this->Movimiento_model->get_by_id($id);
		$this->load->view("Movimiento/edit",$data);
	}
	
	if($this->input->post('idMovimiento'))
		{
		  $movimiento = $this->Movimiento_model->update($this->input->post('idMovimiento'),$this->input->post('fecha'),
		  $this->input->post('monto'),
		  $this->input->post('idCuenta'),
		  $this->input->post('idTipoMovimiento'));
		}
    }
}

?>