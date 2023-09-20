<?php
class Register_controller extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Register_model'); ///load model
	}

	public function index()
	{

		if($this->input->post('register'))
		{
		$name=$this->input->post('name');
		$rollno=$this->input->post('rollno');
		$tamil=$this->input->post('tamil');
		$english=$this->input->post('english');
		$maths=$this->input->post('maths');
		$science=$this->input->post('science');
		$social=$this->input->post('social');
		$total=$tamil+$english+$maths+$science+$social;
		$percentage=($tamil+$english+$maths+$science+$social)/5;
		// var_dump($total);
		if($total<=300)
		{
			$grade="Third class";
		}
		if($total>=400)
		{
			$grade="first class";
		}
		if($total>=300 && $total<=400)
		{
			$grade="second class";
		}
		
		//  $percentage=$total%5;
		


		$this->Register_model->insert_data($name,$rollno,$tamil,$english,$maths,$science,$social,$total,$grade,$percentage);

	}else{
	$this->load->view('registration_view');
	}
	}
}
?>
