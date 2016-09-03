<?php

class Cuenta extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cuenta_model');
		$this->load->helper('html');
		$this->load->helper('url');
	}
	
	public function index()
	{
		//Ver todo
		$data["cuenta"] = $this->Cuenta_model->get_all();
		$this->load->view("Cuenta/index",$data);
	}
	
	function add(){
		if($this->input->post('numeroCuenta')){
			//insert
		    $cuenta = $this->Cuenta_model->get_add($this->input->post('numeroCuenta'),
			$this->input->post('idTipoCuenta'),
			$this->input->post('idCliente')
			);
		    redirect('/Cuenta/index','location');
		}
		else{
			//view form add
			$this->load->view("Cuenta/add");
		}
	}
	
	
	function edit($id){
	if($id>0){
		$data["cuenta"] = $this->Cuenta_model->get_by_id($id);
		$this->load->view("Cuenta/edit",$data);
	}
	
	if($this->input->post('numeroCuenta'))
		{
		  $cuenta = $this->Cuenta_model->update($this->input->post('idCuenta'),$this->input->post('numeroCuenta'),
		  $this->input->post('idTipoCuenta'),
		  $this->input->post('idCliente'));
		}
    }
}

?>