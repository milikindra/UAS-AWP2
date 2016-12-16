<?php
	class Point extends CI_Controller{
		
		public function index(){
		redirect('Point/login');
		}
		
		//login
		public function login(){
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			
			$this->load->model('m_login');
				
			$login = new m_login();
			$cari = $login->loginUser($username,$password);
				
			if($cari == TRUE) {
				$login = array(
				'username'  	=> $username,
				'password'     	=> $password,
				'ustatus' 		=> 'login'
				);
				$this->session->set_userdata($login);
				$this->load->view('index');
			   }
				else
				$this->load->view('v_login');
		}
			
		//logout
		public function logout(){
			$this->session->sess_destroy();
			$this->load->view('v_login');
		}
		
		//view
		public function view(){
			$this->load->view('index');
		}
		
		
		
	}
?>