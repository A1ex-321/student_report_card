<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
 
class retrive_controller extends CI_Controller
{
 
	public function __construct()
	{
	parent::__construct();
	$this->load->database(); 
	$this->load->model('retrive_model');
	$this->load->model('Register_model'); 
	}
 
	public function display_fun()
	{
	$data['student']=$this->retrive_model->display_data();

	$this->load->view('display_view',$data);
	}

    public function delete_fun(){
		$id=$this->input->get('id');
		$this->retrive_model->delete_data($id); 
		 $this->load->view('delete');
		
	}
    public function update_fun()
	{
	$id=$this->input->get('id');
	$result['student']=$this->retrive_model->display_single_record($id);
	$this->load->view('update_view',$result);

		if($this->input->post('change'))
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
		
		$this->retrive_model->update_data($id,$name,$rollno,$tamil,$english,$maths,$science,$social,$total,$grade,$percentage);
		$this->load->view('updated');
		}
	}
}
?>
