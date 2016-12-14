<?PHP

class m_daytimeroom extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	public function retreive_DTR($day,$facid){
		$sql = 'SELECT  concat(dtr.day,concat(LPAD(hour(dtr.time_s),2,"0"),LPAD(minute(dtr.time_s),2,"0")),
		 			 	concat(LPAD(hour(dtr.time_e),2,"0"),LPAD(minute(dtr.time_e),2,"0"))) "dayTime" ,
		 			  dtr.room "room"				
		 		FROM dtr_class dc, class c, daytimeroom dtr
				WHERE dc.dtr_id = dtr.dtr_id
					AND dc.class_id = c.classID
					AND c.faculty_ID = "' . $facid .  '"';
		if(isset($day)){
			$sql = $sql . 'AND dtr.day = "' . $day . '"';
		}
		return $this->db->query($sql);
	}

}
?>
