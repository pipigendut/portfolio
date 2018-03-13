<?php
class model_admin extends CI_Model{
	
	function construct(){
		parent::__construct();
		}
	
	function user(){
		return $this->db->query('select * from users');
	}

	function getPortofolio($where=''){
		return $this->db->query('select * from portofolio $where');
	}

	function getProject($where=''){
		return $this->db->query('select * from projek $where');
	}

	function getSkill($where=''){
		return $this->db->query('select * from skill $where');
	}

	function getPesan($where=''){
		return $this->db->query('select * from pesan $where');
	}

	function selectdata($where = ''){
		return $this->db->query("select * from $where; ");
	}
		
	function insertdata($tabel, $data){
		return $this->db->insert($tabel, $data);
	}

	function updatedata($tabel, $data, $where){
		return $this->db->update($tabel, $data, $where);
	}

	function getMenu($where = ''){
		return $this->db->query("select * from menu $where;");
		}

	function deldata($tabel,$where){
		return $this->db->delete($tabel,$where);
		}
		
}

?>