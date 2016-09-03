<?php

class Perfil extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Perfil_model');
		$this->load->helper('html');
		$this->load->helper('url');
	}
	
	public function index()
	{
		//Ver todo
		$data["perfil"] = $this->Perfil_model->get_all();
		$this->load->view("Perfil/index",$data);
	}
	
	function add(){
		if($this->input->post('nombre')){
			//insert
		    $perfil = $this->Perfil_model->get_add($this->input->post('nombre'));
		    redirect('/Perfil/index','location');
		}
		else{
			//view form add
			$this->load->view("Perfil/add");
		}
	}
	
	function edit($id){
	if($id>0){
		$data["perfil"] = $this->Perfil_model->get_by_id($id);
		$this->load->view("Perfil/edit",$data);
	}
	
	if($this->input->post('idPerfil'))
		{
		  $perfil = $this->Perfil_model->update($this->input->post('idPerfil'),$this->input->post('nombre'));
		}
    }
}

?>