<?PHP	
	
class m_class extends CI_Model {
	function __construct(){
		parent::__construct();
	}


	public function m_retreive($data){
		$sql = 	'SELECT c.classID "classID", concat(c.course_code, " ",c.section_id) "class", c.faculty_id "facID" 
				 FROM class c '; 
		if(isset($data['classID'])){
			$sql = $sql . 'WHERE c.classID = "'. $data['classID'] . '"';
		}
		if(isset($data['cCO_secID']))		 
			$sql = $sql . 'WHERE lower(concat(c.course_code, " ",c.section_id)) = lower("' . $data['cCO_secID'] . '");';
		if(isset($data['facID']) && isset($data['cCode']) && isset($data['secID']) && isset($data['day'])){
			$sql = $sql . ', daytimeroom dtr, dtr_class dc
								WHERE c.faculty_id = "' . $data['facID'] . '" 
								AND lower(c.course_code) = lower("'.$data['cCode'] .'") 
								AND lower(c.section_id) = lower("'. $data['secID'] .'")
								AND dtr.dtr_id = dc.dtr_id
								AND dc.class_id = c.classID
								AND dtr.day = "'. $data['day'] .'"';
		}
		return $this->db->query($sql);


	}
}

?>