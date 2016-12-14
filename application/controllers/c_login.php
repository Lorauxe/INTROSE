<?php
class c_login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		
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

		$query = $this->m_checker->m_retreive($this->input->post('uname'),$this->input->post('pword'));
		$row = $query->row();
		
		if(isset($row)){

			$this->session->set_userdata('UNAME', $row->checker_id);
			$this->session->set_userdata('PWORD', $row->password);

			$this->load->helper('url');
			redirect('c_home','refresh');
		}else {
			$GLOBALS['err'] = "Invalid Username or Password!";
			$this->load->view('login_view');
		}


	}

	public function logout(){
		$this->session->unset_userdata('UNAME');
		$this->session->unset_userdata('PWORD');

		redirect('c_login', 'refresh');
	}
}




?>

