<?PHP
class m_faculty extends CI_Model {
	function __construct(){
		parent::__construct();

	}


	public function m_recRetreive($info){
		$sql = 'SELECT f.lname "lName", f.fname "fName", f.mname "mName", f.faculty_id "facID", d.department_name "depName"
				FROM faculty f, department d
				WHERE f.department_id = d.departmentID ';

		  	$sql = $sql . 'AND f.faculty_id = "' . $info . '";';

		return $this->db->query($sql);



	}

}

?>