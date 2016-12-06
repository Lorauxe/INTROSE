<?PHP
class m_checker extends CI_Model{

	function __construct() {
		parent::__construct();
	}


	public function m_retreive($uname, $pword){
			$sql1 = "	select checker_id, password
						from checker
						where checker_id = '" .  $uname . "' and  '" . $pword . "' = password;";

		$query = $this->db->query($sql1);
		
		$row = $query->row();
		if(isset($row)){

			$this->session->set_userdata('UNAME', $row->checker_id);
			$this->session->set_userdata('PWORD', $row->password);
			return TRUE;
		}else return FALSE;
	}




}

?>