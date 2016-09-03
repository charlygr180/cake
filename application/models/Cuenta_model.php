<?php 

class Cuenta_model extends CI_Model {
	public $idCuenta;
	public $numeroCuenta;
	public $idTipoCuenta;
	public $idCliente;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_by_id($idCuenta) {
		$query = $this->db->query("SELECT * FROM cuenta WHERE idCuenta = $idCuenta");
		return $query->result();
	}
	
	public function get_add($numeroCuenta,$idTipoCuenta,$idCliente){
	$query = $this->db->query("INSERT into cuenta (numeroCuenta,idTipoCuenta,idCliente) values ($numeroCuenta,$idTipoCuenta,$idCliente)");
	 }
	 
	 public function  Update($idCuenta,$numeroCuenta,$idTipoCuenta,$idCliente){
		 $query = $this->db->query("Update cuenta set numeroCuenta=$numeroCuenta,idTipoCuenta=$idTipoCuenta,idCliente=$idCliente where idCuenta=$idCuenta");
	 }
	 
	 public function delete($idCuenta){
		 $query = $this->db->query("Delete from cuenta where idCuenta=$idCuenta");
	 }
	 
	 public function get_all(){
		 $query = $this->db->query("SELECT * FROM cuenta order by numeroCuenta,idTipoCuenta,idCliente asc");
		 return $query->result();
	 }
}


?>