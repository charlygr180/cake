<?php 

class Movimiento_model extends CI_Model {
	public $idMovimiento;
	public $fecha;
	public $monto;
	public $idCuenta;
	public $idTipoMovimiento;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_by_id($idMovimiento) {
		$query = $this->db->query("SELECT * FROM movimiento WHERE idMovimiento = $idMovimiento");
		return $query->result();
	}
	
	public function get_add($fecha,$monto,$idCuenta,$idTipoMovimiento){
	$query = $this->db->query("INSERT into movimiento (fecha,monto,idCuenta,idTipoMovimiento) values ('$fecha',$monto,$idCuenta,$idTipoMovimiento)");
	 }
	 
	 public function  Update($idMovimiento,$fecha,$monto,$idCuenta,$idTipoMovimiento){
		 $query = $this->db->query("Update movimiento set fecha='$fecha',monto=$monto,idCuenta=$idCuenta,idTipoMovimiento=$idTipoMovimiento where idMovimiento=$idMovimiento");
	 }
	 
	 public function delete($idMovimiento){
		 $query = $this->db->query("Delete from movimiento where idMovimiento=$idMovimiento");
	 }
	 
	 public function get_all(){
		 $query = $this->db->query("SELECT * FROM movimiento order by fecha,idCuenta,idTipoMovimiento asc");
		 return $query->result();
	 }
}


?>