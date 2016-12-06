<?php
class c_login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->helper('url');
		if($this->session->has_userdata('UNAME') && $this->session->has_userdata('PWORD'));
			redirect('c_home','refresh');
		$this->load->view('login_view');
	}


	public function start(){
		$this->load->helper('url');
		$this->load->view('login_view');
	}

	public function validate(){
		$this->load->model('m_checker');

		$isOkay = $this->m_checker->m_retreive($this->input->post('uname'),$this->input->post('pword'));
		if($isOkay){
			$this->load->helper('url');
			redirect('c_home','refresh');
		}else{
			$GLOBALS['err'] = "Invalid Username or Password!";
			$this->load->view('login_view');
		}


	}

}




?>

