<?php

class Login extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	public function index()
	{
		//Ver todo
		$data["login"] = $this->Login_model->get_all();
		$this->load->view("Login/index",$data);
	}
	
	function add(){
		if($this->input->post('nombre')){
			//insert
		    $login = $this->Login_model->get_add($this->input->post('nombre'),
			$this->input->post('apaterno'),
			$this->input->post('amaterno'),
			$this->input->post('usuario'),
			$this->input->post('password'),
			$this->input->post('idPerfil')
			);
		    redirect('/Login/index','location');
		}
		else{
			//view form add
			$this->load->view("Login/add");
		}
	}
	
	function edit($id){
	if($id>0){
		$data["login"] = $this->Login_model->get_by_id($id);
		$this->load->view("Login/edit",$data);
	}
	
	if($this->input->post('idUsuario'))
		{
		  $login = $this->Login_model->update($this->input->post('idUsuario'),$this->input->post('nombre'),
		  	$this->input->post('apaterno'),
			$this->input->post('amaterno'),
			$this->input->post('usuario'),
			$this->input->post('password'),
			$this->input->post('idPerfil'));
		}
    }

    function login() {
    	if($this->input->post('username')) {
    		$username = $this->input->post('username');
    		$pass = $this->input->post('pass');
    		$login = $this->Login_model->user_validation($username, $pass);
    		var_dump($login);
    		if (count($login) == 1) {
    			$this->session->set_userdata($login[0]);
		    	redirect('/cliente/index','location');
    		} else {
    			$this->load->view("Login/login");
    			$this->session->set_flashdata('error', 'Usuario o contraseña incorrecto');
    		}
    	} else {
    		$this->load->view("Login/login");
    	}
    }
	
	function registro() {
		    	    if($this->input->post('nombre'))
					{
					  $nombre = $this->input->post('nombre');
					  $apaterno = $this->input->post('apaterno');
					  $amaterno = $this->input->post('amaterno');
					  $username = $this->input->post('username');
    		          $pass = $this->input->post('pass');	
					  $idPerfil = $this->input->post('perfil');	
					  
					  $data = array(
						'nombre' => $nombre,
						'apaterno' => $apaterno,
						'amaterno' => $amaterno,
						'usuario' => $username,
						'password' => $pass,
						'idPerfil' => $idPerfil
                       );

					  //$registro = $this->Login_model->get_add($nombre,$apaterno,$amaterno,$usuario,$password,$idPerfil);
					  var_dump($data);
					  if($this->db->insert('login', $data)){
						  		    	redirect('/Login/login','location');
					  }
					  else
					  {
						  $this->load->view("Login/registro");
    			          $this->session->set_flashdata('error', 'Error al ingresar los datos');
					  }
					  
					}else{
						$this->load->view("Login/registro");
					}
    		
    }
}

?>