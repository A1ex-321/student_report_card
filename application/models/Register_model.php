

<?php
class Register_model extends CI_Model
{
	function insert_data($name,$rollno,$tamil,$english,$maths,$science,$social,$total,$grade,$percentage)
	{
		$query=$this->db->query("insert into user set name='$name',rollno='$rollno',tamil='$tamil',english='$english',maths='$maths',science='$science',social='$social',total='$total',grade='$grade',percentage='$percentage'");
		 if($query)
		 {
		$data['message']="<h3 style='color:blue'>You are registered successfully</h3>";

		 }
		 redirect('http://localhost/c3/index.php/retrive_controller/display_fun');

		}

	}