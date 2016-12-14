<?PHP
class m_makeup extends CI_Model{
	function __construct(){
		parent::__construct();

	}

	public function m_addMU($data){

		return $this->db->insert('makeup', $data);

	}	
}

?>