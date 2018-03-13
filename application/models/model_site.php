<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_site extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function insertdata($tabel,$data){
		$this->db->insert($tabel,$data);
	}

	
}
