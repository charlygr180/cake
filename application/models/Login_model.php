<?php 

class Login_model extends CI_Model {
	public $idUsuario;
	public $nombre;
	public $apaterno;
	public $amaterno;
	public $usuario;
	public $password;
	public $idPerfil;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_by_id($idUsuario) {
		$query = $this->db->query("SELECT * FROM login WHERE idUsuario = $idUsuario");
		return $query->result();
	}
	
	public function get_add($nombre,$apaterno,$amaterno,$usuario,$password,$idPerfil){
	$query = $this->db->query("INSERT into login (nombre,apaterno,amaterno,usuario,password,idPerfil) values ('$nombre','$apaterno','$amaterno','$usuario','$password',$idPerfil)");
	 }
	 
	 public function  Update($idUsuario,$nombre,$apaterno,$amaterno,$usuario,$password,$idPerfil){
		 $query = $this->db->query("Update login set nombre='$nombre',apaterno='$apaterno',amaterno='$amaterno',usuario='$usuario',password='$password',idPerfil=$idPerfil where idUsuario=$idUsuario");
	 }
	 
	 public function delete($idUsuario){
		 $query = $this->db->query("Delete from login where idUsuario=$idUsuario");
	 }
	 
	 public function get_all(){
		 $query = $this->db->query("SELECT * FROM login order by nombre,apaterno,amaterno,idUsuario asc");
		 return $query->result();
	 }

	 public function user_validation($username, $pass) {
	 	$query = $this->db->query("SELECT * FROM login WHERE usuario = '$username' AND password = '$pass'");
	 	return $query->result();
	 }
}


?>