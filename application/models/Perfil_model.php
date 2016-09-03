<?php 

class Tipocuenta_model extends CI_Model {
	public $idPerfil;
	public $nombre;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_by_id($idPerfil) {
		$query = $this->db->query("SELECT * FROM perfil WHERE idPerfil = $idPerfil");
		return $query->result();
	}
	
	public function get_add($nombre){
	$query = $this->db->query("INSERT into perfil (nombre) values ('$nombre')");
	 }
	 
	 public function  Update($idPerfil,$nombre){
		 $query = $this->db->query("Update perfil set nombre='$nombre' where idPerfil=$idPerfil");
	 }
	 
	 public function delete($idPerfil){
		 $query = $this->db->query("Delete from perfil where idPerfil=$idPerfil");
	 }
	 
	 public function get_all(){
		 $query = $this->db->query("SELECT * FROM perfil order by nombre asc");
		 return $query->result();
	 }
}


?>