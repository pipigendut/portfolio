<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_panel extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('Model_panel');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		
		}
		
	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_admin=$this->Model_panel->auth_admin($username,$password);
 
        if($cek_admin->num_rows() > 0){ //jika login sebagai dosen
                        $data=$cek_admin->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_username',$data['username']);
                    $this->session->set_userdata('ses_fullname',$data['fullname']);
                    redirect('panel/home');
 
                 }else{ //akses dosen
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('ses_username',$data['username']);
                    $this->session->set_userdata('ses_fullname',$data['fullname']);
                    redirect('panel/home');
                 }
 
        }else{ //jika login sebagai mahasiswa
                    $cek_pengguna=$this->Model_panel->auth_pengguna($username,$password);
                    if($cek_pengguna->num_rows() > 0){
                            $data=$cek_pengguna->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','3');
                            $this->session->set_userdata('ses_username',$data['username']);
                            $this->session->set_userdata('ses_fullname',$data['fullname']);
                            redirect('panel/home');
                    }else{  // jika username dan password tidak ditemukan atau salah
                            $this->load->view('panel/error');
                    }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

	
	
}
