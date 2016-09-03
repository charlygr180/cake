<?php 
class Cliente extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cliente_model');
		$this->load->helper('html');
		$this->load->helper('url');
	}
	
	public function index()
	{
		//Ver todo
		$data["cliente"] = $this->Cliente_model->get_all();
		$this->load->view("Cliente/index",$data);
	}
	
	function add(){
		if($this->input->post('nombre')){
			//insert
		    $cliente = $this->Cliente_model->get_add($this->input->post('nombre'),
			$this->input->post('apaterno'),
			$this->input->post('amaterno'),
			$this->input->post('edad'),
			$this->input->post('idBanco'));
		    redirect('/Cliente/index','location');
		}
		else{
			//view form add
			$this->load->view("Cliente/add");
		}
	}
	
	
	function edit($id){
	if($id>0){
		$data["cliente"] = $this->Cliente_model->get_by_id($id);
		$this->load->view("Cliente/edit",$data);
	}
	
	if($this->input->post('nombre'))
		{
		  $cliente = $this->Cliente_model->update($this->input->post('idCliente')
		  ,$this->input->post('nombre')
		  ,$this->input->post('apaterno')
		  ,$this->input->post('amaterno')
		  ,$this->input->post('edad')
		  ,$this->input->post('idBanco'));
		}
    }
}

?>