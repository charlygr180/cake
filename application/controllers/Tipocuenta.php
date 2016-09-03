<?php

class Tipocuenta extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tipocuenta_model');
		$this->load->helper('html');
		$this->load->helper('url');
	}
	
	public function index()
	{
		//Ver todo
		$data["tipocuenta"] = $this->Tipocuenta_model->get_all();
		$this->load->view("Tipocuenta/index",$data);
	}
	
	function add(){
		if($this->input->post('nombre')){
			//insert
		    $tipocuenta = $this->Tipocuenta_model->get_add($this->input->post('nombre'));
		    redirect('/Tipocuenta/index','location');
		}
		else{
			//view form add
			$this->load->view("Tipocuenta/add");
		}
	}
	
	function edit($id){
	if($id>0){
		$data["tipocuenta"] = $this->Tipocuenta_model->get_by_id($id);
		$this->load->view("Tipocuenta/edit",$data);
	}
	
	if($this->input->post('idTipoCuenta'))
		{
		  $tipocuenta = $this->Tipocuenta_model->update($this->input->post('idTipoCuenta'),$this->input->post('nombre'));
		}
    }
}

?>