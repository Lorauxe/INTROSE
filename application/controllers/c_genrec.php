<?PHP

class c_genrec extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		if(!($this->session->has_userdata('UNAME') && $this->session->has_userdata('PWORD'))){	
			$this->load->helper('url');
			redirect('/login/start', 'refresh');
		}
	}

	public function index(){
		redirect('c_genrec/start');
	}

	public function start(){
		$this->load->view('General_Records');
	}


	public function add_Makeup(){
		$this->load->model('m_record');
		$this->load->model('m_makeup');

		
	}

	public function add_Record(){
		$this->load->model('m_class');
		$this->load->model('m_record');
		$this->load->model('m_daytimeroom');
		$this->load->model('m_checker');


		switch(date('l',strtotime($this->input->post('a_date')))){
				case 'Monday': $day = 'M';
					break;
				case 'Tuesday': $day = 'T';
								break;
				case 'Wednesday': $day = 'W';
								break;
				case 'Thursday': $day = 'H';
								break;
				case 'Friday': $day = 'F';
								break;
				case 'Saturday': $day = 'S';
		}

		$dataID = array(
			'facID' => $this->input->post('a_id_no'),
			'cCode' => $this->input->post('a_crse_co'),
			'secID' => $this->input->post('a_sec_id'),
			'day' => $day
			);

		$recRows= $this->m_record->m_recRetreive();
		$has_class = $this->m_class->m_retreive($dataID);
		$has_checker = $this->m_checker->m_find($this->input->post('a_chkr_id'));
		if($has_checker->num_rows() == 1){
			if($has_class->num_rows() == 1){
				$cID = $has_class->row();
				$dataIN = array(
					'record_id' => $recRows->num_rows() + 1,
					'classID' => $cID->classID,
					'date' => $this->input->post('a_date'),
					'checker_id' => $this->input->post('a_chkr_id'),
					'remarks_id' => $this->input->post('a_rmrk'),
					'status' => 'NMU',
					'encoder_id' => $this->session->userdata('UNAME')
					);

				if($this->m_record->m_addRec($dataIN)){
					$GLOBALS['ADDREC'] = 'Added a new record successfully!';
					$this->load->view('General_Records');
				}else{
					$GLOBALS['ADDREC'] = 'Did not added the record, something went wrong.';
				}

			}else{
				$GLOBALS['ADDREC'] = 'The class you have entered is invalid!';
			}
		}else{
			$GLOBALS['ADDREC'] = 'The checker you have entered is invalid!';
		}
	}

	public function search(){
		$this->load->model('m_faculty');
		$this->load->model('m_record');
		$this->load->model('m_class');
		$this->load->model('m_daytimeroom');

		if("" == trim($this->input->post('info')) ){
			//echo '<br> <br> <br>HELLO';
			$rec_query = $this->m_record->m_recRetreive($this->input->post('info'));
			if($rec_query->num_rows() > 0){
				if($rec_query->num_rows() > 1){
					$this->session->set_userdata('INFO', ' ');
					$this->session->set_userdata('WHAT', '0');
					$this->session->set_userdata('DAT_NO', 0);
					$GLOBALS['HASPREV'] = 'disabled';
					$GLOBALS['HASNEXT'] = ' ';
				}else{
					if($this->session->has_userdata('INFO')){
						$this->session->unset_userdata('INFO');
						$this->session->unset_userdata('WHAT');
						$this->session->unset_userdata('DAT_NO');
					}$GLOBALS['HASPREV'] = 'disabled';
					$GLOBALS['HASNEXT'] = 'disabled';
				}

				$data['record'] = $rec_query->row();

				$seClass = array(
					'classID' => $data['record']->classID);

				$class = $this->m_class->m_retreive($seClass);
				
				if($class->num_rows() > 0){
					$dat = $class->row();
					$query = $this->m_faculty->m_recRetreive($dat->facID);
				}
			}

		} else if($this->input->post('what') == '1'){
			$dataID['id'] = $this->input->post('info');
			$rec_query = $this->m_record->m_recRetreive($dataID);
			if($rec_query->num_rows() > 0){
				if($rec_query->num_rows() > 1){
					$this->session->set_userdata('INFO', $this->input->post('info'));
					$this->session->set_userdata('WHAT', $this->input->post('what'));
					$this->session->set_userdata('DAT_NO', 0);
					$GLOBALS['HASPREV'] = 'disabled';
					$GLOBALS['HASNEXT'] = ' ';
				}else{
					if($this->session->has_userdata('INFO')){
						$this->session->unset_userdata('INFO');
						$this->session->unset_userdata('WHAT');
						$this->session->unset_userdata('DAT_NO');
					}$GLOBALS['HASPREV'] = 'disabled';
					$GLOBALS['HASNEXT'] = 'disabled';
				}

				$query = $this->m_faculty->m_recRetreive($this->input->post('info'));
				$data['record'] = $rec_query->row();

			}

		}else if($this->input->post('what') == '2'){
			$dataCC = array(
				'cCO_secID' => $this->input->post('info')
				);
			$rec_query = $this->m_class->m_retreive($dataCC);
			if($rec_query->num_rows() > 0){
				//echo '<br><br><br> BYEBYE';


				$dat = $rec_query->row();
				$dataID = array(
					'id' => $dat->facID);

				$query = $this->m_faculty->m_recRetreive($dat->facID);
				$rec_que= $this->m_record->m_recRetreive($dataID);
				if($rec_que->num_rows() > 1){
					$this->session->set_userdata('INFO', $this->input->post('info'));
					$this->session->set_userdata('WHAT', $this->input->post('what'));
					$this->session->set_userdata('DAT_NO', 0);
					$GLOBALS['HASPREV'] = 'disabled';
					$GLOBALS['HASNEXT'] = ' ';
				}else{
//						echo "<br> <br> <br> <br> GOODBY";
					if($this->session->has_userdata('INFO')){
						$this->session->unset_userdata('INFO');
						$this->session->unset_userdata('WHAT');
						$this->session->unset_userdata('DAT_NO');
						
					}
					$GLOBALS['HASPREV'] = 'disabled';
						$GLOBALS['HASNEXT'] = 'disabled';
				}
				$data['record'] = $rec_que->row();

			}
		}

		if(isset($query) && $query->num_rows() > 0){
				

			$data['faculty'] = $query->row();
			switch(date('l', strtotime($data['record']->recDate))){
				case 'Monday': $day = 'M';
								break;
				case 'Tuesday': $day = 'T';
								break;
				case 'Wednesday': $day = 'W';
								break;
				case 'Thursday': $day = 'H';
								break;
				case 'Friday': $day = 'F';
								break;
				case 'Saturday': $day = 'S';
			}
			//echo '<br><br><br>' .  $day . date('l', strtotime($data['record']->recDate)) . $data['record']->recDate;
			$queryday = $this->m_daytimeroom->retreive_DTR($day, $data['faculty']->facID);

			$data['dtr'] = $queryday->row();
			//echo $data['dtr']->dayTime;
			$GLOBALS['searched'] = TRUE;
			$this->load->view('General_Records', $data);

		}else{
			$GLOBALS['searched'] = FALSE;
			$this->load->view('General_Records');
		}
		
		}

		public function nextRecord(){
			$this->load->model('m_faculty');
			$this->load->model('m_record');
			$this->load->model('m_class');
			$this->load->model('m_daytimeroom');

			if($this->session->has_userdata('INFO')){
				if($this->session->userdata('WHAT') == '0'){
					//echo '<br> <br> <br> MAHOLA';
					$rec_query = $this->m_record->m_recRetreive("");
//					echo  "<br> <br> NEXT <br>" . $this->session->userdata('DAT_NO');
					if($rec_query->num_rows() > 0){
						$data['record'] = $rec_query->row($this->session->userdata('DAT_NO') + 1);
						$this->session->set_userdata('DAT_NO', $this->session->userdata('DAT_NO') + 1);
						
						if($rec_query->num_rows() <= $this->session->userdata('DAT_NO') + 1 ){
							$GLOBALS['HASPREV'] = ' ';
							$GLOBALS['HASNEXT'] = 'disabled';

						}else{

							$GLOBALS['HASPREV'] = ' ';
							$GLOBALS['HASNEXT'] = ' ';
						}
//					echo  "<br> <br> NEXT_NEW <br>" . $this->session->userdata('DAT_NO');

//						echo $data['record']->classID;
						$seClass = array(
							'classID' => $data['record']->classID);

						$class = $this->m_class->m_retreive($seClass);
						
						if($class->num_rows() > 0){
							$dat = $class->row();
							$query = $this->m_faculty->m_recRetreive($dat->facID);
						}
					}
				}else if($this->session->userdata('WHAT') == '1'){
					$dataID = array(
							'id' => $this->session->userdata('INFO')
							);

					$rec_query = $this->m_record->m_recRetreive($dataID);

					if($rec_query->num_rows() > 0){
						$query = $this->m_faculty->m_recRetreive($this->session->userdata('INFO'));
						$data['record'] = $rec_query->row($this->session->userdata('DAT_NO') + 1);
						$this->session->set_userdata('DAT_NO', $this->session->userdata('DAT_NO') + 1);
						
						if($rec_query->num_rows() - 1 <= $this->session->userdata('DAT_NO') + 1 ){
							$GLOBALS['HASPREV'] = ' ';
							$GLOBALS['HASNEXT'] = 'disabled';
						}else{
							//echo '<br> <br> HELLBENT';
							$GLOBALS['HASPREV'] = ' ';
							$GLOBALS['HASNEXT'] = ' ';
						}

					}


				}else{
					$dataCC = array(
						'cCO_secID' => $this->session->userdata('INFO')
						);
					$rec_query = $this->m_class->m_retreive($dataCC);
					if($rec_query->num_rows() > 0){

						$dat = $rec_query->row();
						$dataID = array(
							'id' => $dat->facID);

						$query = $this->m_faculty->m_recRetreive($dat->facID);
						$rec_que= $this->m_record->m_recRetreive($dataID);
						$data['record'] = $rec_que->row($this->session->userdata('DAT_NO') + 1);
						$this->session->set_userdata('DAT_NO', $this->session->userdata('DAT_NO') + 1);

						if($rec_que->num_rows() - 1 <= $this->session->userdata('DAT_NO') + 1 ){
							$GLOBALS['HASPREV'] = ' ';
							$GLOBALS['HASNEXT'] = 'disabled';

						}else{

							$GLOBALS['HASPREV'] = ' ';
							$GLOBALS['HASNEXT'] = ' ';

						}


				}
			}

			if(isset($query) && $query->num_rows() > 0 && isset($data['record'])){
  				

				$data['faculty'] = $query->row();
				switch(date('l', strtotime($data['record']->recDate))){
					case 'Monday': $day = 'M';
									break;
					case 'Tuesday': $day = 'T';
									break;
					case 'Wednesday': $day = 'W';
									break;
					case 'Thursday': $day = 'H';
									break;
					case 'Friday': $day = 'F';
									break;
					case 'Saturday': $day = 'S';
				}
				

				$queryday = $this->m_daytimeroom->retreive_DTR($day, $data['faculty']->facID);

				$data['dtr'] = $queryday->row();
				//echo $data['dtr']->dayTime;
				$GLOBALS['searched'] = TRUE;
				$this->load->view('General_Records', $data);

			}else{
			}
			
		}
	}




		public function prevRecord(){
			$this->load->model('m_faculty');
			$this->load->model('m_record');
			$this->load->model('m_class');
			$this->load->model('m_daytimeroom');

			if($this->session->has_userdata('INFO')){
				if($this->session->userdata('WHAT') == '0'){
					$rec_query = $this->m_record->m_recRetreive($this->session->userdata('INFO'));
					if($rec_query->num_rows() > 0){
					//	echo "<br> <br> prev <br> " . $this->session->userdata('DAT_NO');
						$data['record'] = $rec_query->row($this->session->userdata('DAT_NO') - 1);
						$this->session->set_userdata('DAT_NO', $this->session->userdata('DAT_NO') - 1);
						if(0 > $this->session->userdata('DAT_NO') - 1 ){
							$GLOBALS['HASPREV'] = 'disabled';
							$GLOBALS['HASNEXT'] = ' ';


						}else{
							$GLOBALS['HASPREV'] = ' ';
							$GLOBALS['HASNEXT'] = ' ';
						}

					//	echo "<br> <br> prev new <br>" . $this->session->userdata('DAT_NO');
						$seClass = array(
							'classID' => $data['record']->classID);

						$class = $this->m_class->m_retreive($seClass);
						
						if($class->num_rows() > 0){
							$dat = $class->row();
							$query = $this->m_faculty->m_recRetreive($dat->facID);
						}
					}
				}else if($this->session->userdata('WHAT') == '1'){

					$dataID = array(
						'id' => $this->session->userdata('INFO'));

					$rec_query = $this->m_record->m_recRetreive($dataID);

					if($rec_query->num_rows() > 0){
					

						$query = $this->m_faculty->m_recRetreive($this->session->userdata('INFO'));
						$data['record'] = $rec_query->row($this->session->userdata('DAT_NO') - 1);
						$this->session->set_userdata('DAT_NO', $this->session->userdata('DAT_NO') - 1);
						
						if(0 > $this->session->userdata('DAT_NO') - 1 ){
							$GLOBALS['HASPREV'] = 'disabled';
							$GLOBALS['HASNEXT'] = ' ';
						}else{

							$GLOBALS['HASPREV'] = ' ';
							$GLOBALS['HASNEXT'] = ' ';
						}

					}


				}else{
					$dataCC = array(
						'cCO_secID' => $this->session->userdata('INFO')
						);
					$rec_query = $this->m_class->m_retreive($dataCC);
					if($rec_query->num_rows() > 0){

						$dat = $rec_query->row();

						$dataID = array(
							'id' => $dat->facID);

						$query = $this->m_faculty->m_recRetreive($dat->facID);
						$rec_que= $this->m_record->m_recRetreive($dataID);
						$data['record'] = $rec_que->row($this->session->userdata('DAT_NO') - 1);
						$this->session->set_userdata('DAT_NO', $this->session->userdata('DAT_NO') - 1);
						if(0 > $this->session->userdata('DAT_NO') - 1 ){
							$GLOBALS['HASPREV'] = 'disabled';
							$GLOBALS['HASNEXT'] = ' ';						
						}else{

							$GLOBALS['HASPREV'] = ' ';
							$GLOBALS['HASNEXT'] = ' ';
						}


				}
			}

			if(isset($query) && $query->num_rows() > 0 && isset($data['record'])){
  				

				$data['faculty'] = $query->row();
				switch(date('l', strtotime($data['record']->recDate))){
					case 'Monday': $day = 'M';
									break;
					case 'Tuesday': $day = 'T';
									break;
					case 'Wednesday': $day = 'W';
									break;
					case 'Thursday': $day = 'H';
									break;
					case 'Friday': $day = 'F';
									break;
					case 'Saturday': $day = 'S';
				}
				

				$queryday = $this->m_daytimeroom->retreive_DTR($day, $data['faculty']->facID);

				$data['dtr'] = $queryday->row();
				//echo $data['dtr']->dayTime;
				$GLOBALS['searched'] = TRUE;
				$this->load->view('General_Records', $data);

			}else{
			}
			
		}
	}


					
//		if(isset())

//		$this->load->model('m_class');

	}

?>
