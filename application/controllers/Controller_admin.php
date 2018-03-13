<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');

		$cek = $this->session->userdata('masuk');
		if(empty($cek)){
			redirect('');
		}
	}

	function index(){
		$user		= $this->session->userdata('masuk');

		//artikel penampaung jumlah artikel
		$por 		= $this->model_admin->getPortofolio();
		$portofolio	= $por->num_rows();
		//artikel penampaung jumlah artikel
		$proj 		= $this->model_admin->getProject();
		$project 	= $proj->num_rows();
		//artikel penampaung jumlah dosen$staff
		$sk 		= $this->model_admin->getSkill();
		$skill	 	= $sk->num_rows();
		//artikel penampaung jumlah pesan
		$pes 		= $this->model_admin->getPesan();
		$pesan	 	= $pes->num_rows();

		$kiriman	= $this->db->query('select * from pesan')->result_array();
		$data = array(
				
				'jlh_portofolio'=> $portofolio,
				'jlh_project'	=> $project,
				'jlh_skill'		=> $skill,
				'jlh_pesan'		=> $pesan,
				'kiriman'		=> $kiriman,
			);
		
		$this->load->view('panel/head',$data);
		$this->load->view('panel/home');
}

	function about(){

		$user		= $this->session->userdata('masuk');
		$user_data	= $this->model_admin->user()->result_array();
		$about		= $this->db->query("select * from about;")->result_array();
		$data = array(
				'title'			=> 'Edit About',
				'namalogin'		=> $user_data[0]['fullname'],
				'id'			=> strip_tags($about[0]['id']),
				'pp'			=> strip_tags($about[0]['pp']),
				'judul'			=> strip_tags($about[0]['title']),
				'teks'			=> strip_tags($about[0]['teks']),
			);
		
		$this->load->view('panel/head',$data);
		$this->load->view('panel/about');

	}
	//KLIK(SUBMIT) save
	function aboutsave(){
		if($_POST){
			$this->load->helper('url');
			
			$id			= $this->input->post('id');
			$judul		= $this->input->post('judul');
			
			$author		= $fullname;
			$teks		= $this->input->post('teks');
			

				$this->db->where('id',$id);
				$query	= $this->db->get('about');
				$row	= $query->row();
				
				unlink(".file/images/$row->pp");
				if($_FILES['foto']['name'] != ""){
					$config['upload_path']          = 'file/images';
                	$config['allowed_types']        = 'jpeg|jpg|png';
                	$config['max_size']             = '2000';
					$config['remove_space']			= true;
					$config['overwrite']			= false;
					$config['encrypt_name']			= true;
					$config['max_width'] 			= '';
					$config['max_height']			= '';
					
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if(!$this->upload->do_upload('foto'))
					{
						print_r('Ukuran file terlalu besar. Maksimal 2 MB');
						exit();
						}
					else
					{
						$image = $this->upload->data();
						if($image['file_name'])
						{
						$data['file'] = $image['file_name'];
						}
						$pp = $data['file'];
						}
					}
				
				$data = array(
							  'title'		=> $judul,
							  'pp'			=> $pp,
							  'teks'		=> $teks,
							  
							  );
				$this->model_admin->updatedata('about',$data,array('id' => $id));
				$this->session->set_flashdata("save_about","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Artikel berhasil di edit
                                    </div>");
				redirect('panel/about');
				
		}
		else{
			echo "Halaman tidak ditemukan";
			}
	}

	function portofolio(){
		$this->load->helper('text');

		$user		= $this->session->userdata('masuk');
		
		//variabel penampung data artikel
		$portofolio		= $this->model_admin->selectdata('portofolio order by id desc')->result_array();
		
		$data = array(
					'title'				=> 'Manajemen Portofolio',
					'portofolio'		=> $portofolio,
					  );
		$this->load->view('panel/head', $data);
		$this->load->view('panel/portofolio');
		}

	function portofolioadd(){

		$user		= $this->session->userdata('masuk');

		//portofolio penampung data portofolio
		$portofolio	= $this->model_admin->selectdata('portofolio')->result_array();
		
		
		$data = array (
			'title'			=> 'Form Tambah Portofolio Baru',
			'kode'			=> '',
			'judul'			=> '',
			'gambar'		=> '',
			'stat'			=> 'new',
			);

		$this->load->view('panel/head',$data);
		$this->load->view('panel/portofolio-form');
	}

	function portofolioedit($kode = 0){
		$user		= $this->session->userdata('masuk');
		
		//variabel penampung portofolio
		$portofolio		= $this->db->query("select * from portofolio where id = $kode")->result_array();
		
		$data		= array(
							'title'			=> 'Edit Data Dosen/Staff',
							'kode'			=> $portofolio[0]['id'],
							'judul'			=> $portofolio[0]['title'],
							'gambar'		=> $portofolio[0]['gambar'],
							'stat'			=> 'edit',
							);
		
		
		$this->load->view('panel/head', $data);
		$this->load->view('panel/portofolio-form');
	}

	function portofoliodelete($kode = 0){
		$this->db->where('id',$kode);
		$query = $this->db->get('portofolio');
		$row   = $query->row();
		unlink(".file/images/$row->gambar");
		$this->model_admin->deldata('portofolio',array('id' =>$kode));
		$this->session->set_flashdata("save_portofolio","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Portofolio berhasil dihapus
                                    </div>");
					redirect('panel/portofolio');
		
		}	

	//KLIK AN 
	function portofolioklik(){
		if($_POST){
			$this->load->helper('url');
			
			$kode			= $this->input->post('kode');
			$judul			= $this->input->post('judul');
			$gambar			= $this->input->post('gambar');
			$stat			= $this->input->post('stat');
			
			$user_data		= $this->model_admin->user()->result_array();
			$fullname		= $user_data[0]['fullname'];
			
					
			if($stat == 'new'){
				if($_FILES['gambar']['name'] != ""){
					$config['upload_path']          = 'file/images';
                	$config['allowed_types']        = 'jpeg|jpg|png';
                	$config['max_size']             = '20000';
					$config['remove_space']			= true;
					$config['overwrite']			= false;
					$config['encrypt_name']			= true;
					$config['max_width'] 			= '';
					$config['max_height']			= '';
					
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if(!$this->upload->do_upload('gambar'))
					{
						print_r('Ukuran file terlalu besar. Maksimal 2 MB');
						exit();
						}
					else
					{
						$image = $this->upload->data();
						if($image['file_name'])
						{
							$data['file'] = $image['file_name'];
							}
						$gambar = $data['file'];
					}
				}
				
				$data = array(
							  'title'		=> $judul,
							  'gambar'		=> $gambar,
							  );
				$this->model_admin->insertdata('portofolio',$data);
				$this->session->set_flashdata("save_portofolio","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data Portofolio berhasil di simpan
                                    </div>");
				redirect('panel/portofolio');
			}
			else{
				$this->db->where('id',$kode);
				$query	= $this->db->get('portofolio');
				$row	= $query->row();
				
				unlink(".file/images/$row->gambar");
				if($_FILES['gambar']['name'] != ""){
					$config['upload_path']          = 'file/images';
                	$config['allowed_types']        = 'jpeg|jpg|png';
                	$config['max_size']             = '2000';
					$config['remove_space']			= true;
					$config['overwrite']			= false;
					$config['encrypt_name']			= true;
					$config['max_width'] 			= '';
					$config['max_height']			= '';
					
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if(!$this->upload->do_upload('gambar'))
					{
						print_r('Ukuran file terlalu besar. Maksimal 2 MB');
						exit();
						}
					else
					{
						$image = $this->upload->data();
						if($image['file_name'])
						{
						$data['file'] = $image['file_name'];
						}
						$gambar = $data['file'];
						}
					}
				
				$data = array(
							  'title'		=> $judul,
							  'gambar'		=> $gambar,
							 );
				$this->model_admin->updatedata('portofolio',$data,array('id' => $kode));
				$this->session->set_flashdata("save_portofolio","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data Portofolio berhasil di edit
                                    </div>");
				redirect('panel/portofolio');
				}
		}
		else{
			echo "Halaman tidak ditemukan";
			}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('');

	}
}