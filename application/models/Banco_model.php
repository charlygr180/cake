<?php 

class Banco_model extends CI_Model {
	public $idBanco;
	public $nombre;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_by_id($idBanco = null) {
		$query = $this->db->query("SELECT * FROM banco WHERE idBanco = $idBanco");
		return $query->result();
	}
	
	public function get_add($nombre){
		 $query = $this->db->query("INSERT into banco (nombre) values ('$nombre')");
	 }
	 
	 public function  Update($idBanco,$nombre){
		 $query = $this->db->query("Update banco set Nombre='$nombre' where idBanco=$idBanco");
	 }
	 
	 public function delete($idBanco){
		 $query = $this->db->query("Delete from banco where idBanco=$idBanco");
	 }
	 
	 public function get_all(){
		 $query = $this->db->query("SELECT * FROM banco order by Nombre asc");
		 return $query->result();
	 }
}