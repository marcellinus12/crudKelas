<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "root";
	var $db = "crud_sekolah";
	var $conn;

	function __construct(){
		$this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
	}

	function getAllKelas() 
	{
		$data = mysqli_query($this->conn,
		"select kelas.* from kelas");
		while($d = mysqli_fetch_assoc($data)){
			$result[] = $d;
		}
		return $result;
	}

	function getSelectedKelas($id){
		$result = [];

		$data = mysqli_query($this->conn,"select * from kelas WHERE id_kls = $id");
		while($d = mysqli_fetch_assoc($data)){
			$result[] = $d;
		}
		return $result;
	}

	function storeKelas($nama_kls){
		$data = mysqli_query($this->conn,
		"insert into kelas (nama_kls) values('$nama_kls')");

		return $data;
	}

	function updateKelas($id,$nama_kls){
        $data = mysqli_query($this->conn,
		"update kelas set 
		nama_kls='$nama_kls'
		where id_kls='$id'");

		return $data;
    }

	function deleteKelas($id){
        $data = mysqli_query($this->conn,"delete from kelas where id_kls='$id'");

		return $data;
    }

	//function murid
	function getAllMurid() 
	{
		$data = mysqli_query($this->conn,
		"select * from murid");
		while($d = mysqli_fetch_assoc($data)){
			$result[] = $d;
		}
		return $result;
	}

	function getSelectedMurid($id){
		$result = [];

		$data = mysqli_query($this->conn,"select * from murid WHERE id_murid = $id");
		while($d = mysqli_fetch_assoc($data)){
			$result[] = $d;
		}
		return $result;
	}

	function storeMurid($nama_murid,$jkel,$id_kls){
		$data = mysqli_query($this->conn,
		"insert into murid (nama_murid,jkel,id_kls) values('$nama_murid','$jkel','$id_kls')");

		return $data;
	}

	function updateMurid($id_murid,$nama_murid,$jkel,$id_kls){
        $data = mysqli_query($this->conn,
		"update murid set 
		nama_murid='$nama_murid',
		jkel='$jkel',
		id_kls='$id_kls'
		where id_murid='$id_murid'");

		return $data;
    }

	function deleteMurid($id_murid){
        $data = mysqli_query($this->conn,"delete from murid where id_murid='$id_murid'");

		return $data;
    }
} 

?>