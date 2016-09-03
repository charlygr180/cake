<?php 

class Cliente_model extends CI_Model {
	public $idBanco;
	public $idCliente;
	public $nombre;
	public $apaterno;
	public $amaterno;
	public $edad;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->banco = new Banco_model();
		$this->load->model('Banco_model');
	}

	public function get_banco_name() {
		$Banco_model->query("SELECT * FROM banco WHERE idBanco = $idBanco");
		return $query->Banco_model->query->result();
	}
	
	public function get_by_id($idCliente) {
		$query = $this->db->query("SELECT * FROM cliente WHERE idCliente = $idCliente");
		return $query->result();
	}
	
	public function get_add($nombre,$apaterno,$amaterno,$edad,$idBanco){
	$query = $this->db->query("INSERT into cliente (nombre,apaterno,amaterno,edad,idBanco) values ('$nombre','$apaterno','$amaterno','$edad',$idBanco)");
	 }
	 
	 public function  Update($idCliente,$nombre,$apaterno,$amaterno,$edad,$idBanco){
		 $query = $this->db->query("Update cliente set nombre='$nombre',apaterno='$apaterno',amaterno='$amaterno',edad='$edad',idBanco=$idBanco where idCliente=$idCliente");
	 }
	 
	 public function delete($idCliente){
		 $query = $this->db->query("Delete from cliente where idCliente=$idCliente");
	 }
	 
	 public function get_all(){
		 $query = $this->db->query("SELECT * FROM cliente order by Nombre,apaterno,amaterno asc");
		 return $query->result();
	 }
	 
}




?>
