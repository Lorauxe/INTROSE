<?PHP
class m_checker extends CI_Model{

	function __construct() {
		parent::__construct();
	}


	public function m_retreive($uname, $pword){
			$sql1 = "	select checker_id, password
						from checker
						where checker_id = '" .  $uname . "' and  '" . $pword . "' = password;";

		return $this->db->query($sql1);
		
	}

	public function m_find($data){
		$sql = 'SELECT *
				FROM checker
				WHERE checker_id = "'. $data .'"';

		return $this->db->query($sql);
	}


}

?>