<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_site');
	}
	public function index()
	{
		if($_POST){

				$fullname	= $this->input->post('Name');
				$email2		= $this->input->post('Email');
				$telepon	= $this->input->post('Telephone');
				$subjek		= $this->input->post('Subject');
				$pesan		= $this->input->post('Message');

				$data = array (
					'fullname' 	=> $fullname,
					'email2'	=> $email2,
					'telepon'	=> $telepon,
					'subjek'	=> $subjek,
					'pesan'		=> $pesan,
					'date'		=> date('y/m/d'),
					'time'		=> date('h:m:s'),

					);
			$this->model_site->insertdata('pesan', $data);
			}	

		$this->load->helper('text');

		$about			= $this->db->query("select * from about;")->result_array();
		$profile		= $this->db->query("select * from profile")->result_array();
		$nama			= $this->db->query("select * from profile where id=1;")->result_array();
		$umur			= $this->db->query("select * from profile where id=2;")->result_array();
		$alamat			= $this->db->query("select * from profile where id=3;")->result_array();
		$nohp			= $this->db->query("select * from profile where id=4;")->result_array();
		$email			= $this->db->query("select * from profile where id=5;")->result_array();
		$portofolio		= $this->db->query("select * from portofolio;")->result_array();
		$edukasi1		= $this->db->query("select * from edukasi where id in(1,2);")->result_array();
		$edukasi2		= $this->db->query("select * from edukasi where id in(3,4);")->result_array();
		$skill1			= $this->db->query("select * from skill where id in(1,2,3,4);")->result_array();
		$skill2			= $this->db->query("select * from skill where id in(5,6,7);")->result_array();
		$inggris		= $this->db->query("select * from inggris;")->result_array();
		$projek			= $this->db->query("select * from projek;")->result_array();
		$data = array(
			'pp'			=> strip_tags($about[0]['pp']),
			'title'			=> strip_tags($about[0]['title']),
			'teks'			=> strip_tags($about[0]['teks']),
			'more'			=> strip_tags($about[0]['more']),
			'nama'			=> strip_tags($nama[0]['content']),
			'alamat'		=> strip_tags($alamat[0]['content']),
			'nohp'			=> strip_tags($nohp[0]['content']),
			'email'			=> strip_tags($email[0]['content']),
			'profile'		=> $profile,
			'portofolio'	=> $portofolio,
			'edukasi1'		=> $edukasi1,
			'edukasi2'		=> $edukasi2,
			'skill1'		=> $skill1,
			'skill2'		=> $skill2,
			'inggris'		=> $inggris,
			'projek'		=> $projek,
			'nama'			=> strip_tags($nama[0]['content']),
			'umur'			=> strip_tags($umur[0]['content']),
			'alamat'		=> strip_tags($alamat[0]['content']),
			'nohp'			=> strip_tags($nohp[0]['content']),
			'email'			=> strip_tags($email[0]['content']),
			
		);

		$this->load->view('home/head.php', $data);
		$this->load->view('home/body.php');
		$this->load->view('home/footer.php');

	}
}