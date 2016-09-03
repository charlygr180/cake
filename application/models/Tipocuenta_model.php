<?php 

class Tipocuenta_model extends CI_Model {
	public $idTipoCuenta;
	public $nombre;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_by_id($idTipoCuenta) {
		$query = $this->db->query("SELECT * FROM tipocuenta WHERE idTipoCuenta = $idTipoCuenta");
		return $query->result();
	}
	
	public function get_add($nombre){
	$query = $this->db->query("INSERT into tipocuenta (nombre) values ('$nombre')");
	 }
	 
	 public function  Update($idTipoCuenta,$nombre){
		 $query = $this->db->query("Update tipocuenta set nombre='$nombre' where idTipoCuenta=$idTipoCuenta");
	 }
	 
	 public function delete($idTipoCuenta){
		 $query = $this->db->query("Delete from tipocuenta where idTipoCuenta=$idTipoCuenta");
	 }
	 
	 public function get_all(){
		 $query = $this->db->query("SELECT * FROM tipocuenta order by nombre asc");
		 return $query->result();
	 }
}


?>