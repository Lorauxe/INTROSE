<?PHP
class m_record extends CI_Model {
	function __construct(){
		parent::__construct();

	}


	public function m_recRetreive($data){
		$sql='SELECT  r.record_id "recID", r.classID "classID",  r.date "recDate", c.course_code "cCode", c.section_id "secID", 
					  r.remarks_ID "remark", r.encoder_id "enID", r.checker_id "checkID", c.loadnature "nature",
					  r.status "status"
				FROM  class c, record r
				WHERE c.classID = r.classID ';
		if(isset($data['id'])){
			//echo '<br> <br> <br>REALLY';
			$sql = $sql . 'AND c.faculty_id = "' . $data['id'] . '"';
		}
		return $this->db->query($sql);
 	}


 	public function m_addRec($data){
	
		return	$this->db->insert('record', $data);

 	}
// c.day1 "Day",
// 					  datepart(hour,c.s_time1) "sHour",
// 					  datepart(minute,c.s_time1) "sMin",
// 					  datepart(hour,c.e_time1) "eHour",
// 					  datepart(minute,c.e_time1) "eMin",
// 					  c.room1 "room", r.remarks_ID "remark",

 	// concat(c.day1,concat(LPAD(hour(c.s_time1),2,"0"),LPAD(minute(c.s_time1),2,"0")),
		// 			 			    concat(LPAD(hour(c.e_time1),2,"0"),LPAD(minute(c.e_time1),2,"0"))) "dayTime" ,
		// 			  c.room1 "room", 
					  

}


?>