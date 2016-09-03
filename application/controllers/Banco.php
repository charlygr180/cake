<?php 
class Banco extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Banco_model');
		$this->load->helper('html');
		$this->load->helper('url');
	}
	
	public function index()
	{
		
		//$banco = $this->Banco_model->get_by_id(1);
		//var_dump($banco);
		
		//Ver todo
		$data["bancos"] = $this->Banco_model->get_all();
		$this->load->view("Banco/index",$data);
		
		//Insert
		//$banco = $this->Banco_model->get_add('Scotia');
		//var_dump($banco);
		
		//delete
	    //$banco = $this->Banco_model->delete(15);
		//var_dump($banco);
		
		//Update
	    //$banco = $this->Banco_model->update(14,'SCOTIA');
		//var_dump($banco);
		
		
	}
	
	function add(){
		if($this->input->post('nombre')){
			//insert
		    $banco = $this->Banco_model->get_add($this->input->post('nombre'));
		    redirect('/banco/index','location');
		}
		else{
			//view form add
			$this->load->view("Banco/add");
		}
	}
	
	
	function edit($id){
	if($id>0){
		$data["bancos"] = $this->Banco_model->get_by_id($id);
		$this->load->view("Banco/edit",$data);
	}
	
	if($this->input->post('nombre'))
		{
		  $banco = $this->Banco_model->update($this->input->post('idBanco'),$this->input->post('nombre'));
		}
    }
}