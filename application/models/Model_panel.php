<?php
class Model_panel extends CI_Model{
	
	function construct(){
		parent::__construct();
		}
		
	
	function login($where = ''){
		return $this->db->query("select * from users $where;");
		}
	
	    //cek nip dan password dosen
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND pass='$password' LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_pengguna($username,$password){
        $query=$this->db->query("SELECT * FROM users WHERE username='$username' AND pass='$password' LIMIT 1");
        return $query;
    }
	
}
?>