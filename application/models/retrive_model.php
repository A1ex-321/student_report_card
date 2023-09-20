<?php
class retrive_model extends CI_Model
{
	function display_data()
	{
	$query=$this->db->query("select * from `user`");
	$res=$query->result_array();
	return $res;
	}
	
	
    function delete_data($id)
	{
	$query=$this->db->query("delete from `user` where id='$id'");
	}
	
	
	function display_single_record($id)
	{
	$query=$this->db->query("select * from `user` where id='$id'");
	$res=$query->result_array();
	return $res;
	}
	
	function update_data($id,$name,$rollno,$tamil,$english,$maths,$science,$social,$total,$grade,$percentage)
	{
		$query=$this->db->query("update `user` SET name='$name',rollno='$rollno',tamil='$tamil',english='$english',maths='$maths',science='$science',social='$social',total='$total',grade='$grade',percentage='$percentage' where id='$id'");
		 
	}
 
}