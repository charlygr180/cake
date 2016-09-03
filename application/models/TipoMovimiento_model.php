<?php 

class Tipomovimiento_model extends CI_Model {
	public $idTipoMovimiento;
	public $nombre;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_by_id($idTipoMovimiento) {
		$query = $this->db->query("SELECT * FROM tipomovimiento WHERE idTipoMovimiento = $idTipoMovimiento");
		return $query->result();
	}
	
	public function get_add($nombre){
	$query = $this->db->query("INSERT into tipomovimiento (nombre) values ('$nombre')");
	 }
	 
	 public function  Update($idTipoMovimiento,$nombre){
		 $query = $this->db->query("Update tipomovimiento set nombre='$nombre' where idTipoMovimiento=$idTipoMovimiento");
	 }
	 
	 public function delete($idTipoMovimiento){
		 $query = $this->db->query("Delete from tipomovimiento where idTipoMovimiento=$idTipoMovimiento");
	 }
	 
	 public function get_all(){
		 $query = $this->db->query("SELECT * FROM tipomovimiento order by nombre asc");
		 return $query->result();
	 }
}


?>