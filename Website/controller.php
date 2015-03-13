<?php
class Home extends Controller {

	function Home(){
		parent::Controller();
		$this->load->model('HomeModel');
	}


	public function index(){
		$this->load->view('index.php');
	}


	public function addemployee(){
		$this->load->view('addemployee.php');
	}


	public function save(){

		$firstName= ($this->input->post('firstName'));
		$lastName= ($this->input->post('lastName'));
		$email= ($this->input->post('email'));


		$employee = array(
			'FIRST_NAME' => $firstName,
			'LAST_NAME' => $lastName,
			'EMAIL' => $email
		);

		$employeeId = $this->HomeModel->addEmployee($employee);
		$data['message'] =  "";
		if($employeeId){
			$data['message'] =  "Employee Saved Successfully!..";
		}
		$query = $this->HomeModel->getEmployee();

		if($query){
			$data['EMPLOYEES'] =  $query;
		}
		$this->load->view('result.php', $data);
	}


	public function employeelist(){
		$query = $this->HomeModel->getEmployee();
		if($query){
			$data['EMPLOYEES'] =  $query;
		}
		$this->load->view('result.php', $data);
	}

}
?>