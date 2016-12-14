<?PHP

class c_home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
				if(!($this->session->has_userdata('UNAME') && $this->session->has_userdata('PWORD'))){	
			$this->load->helper('url');
			redirect('/login/start', 'refresh');
		}

		$this->load->view('Admin_Home');
		
	}

	public function index(){

	}	

	public function c_generalRec(){
		$this->load->helper('url');
		redirect('c_genrec','refresh');
	}



}


?>