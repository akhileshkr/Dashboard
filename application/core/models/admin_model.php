<?php

class admin_model extends CI_Model
{
	public $itemno;
	function insert1($da)
	{

		$this->db->insert('modeldetails',$da);
		

	}
	// function sel1($itemn)
	// {
	// 	 $itemno=$itemn;
	// 	 $this->sel();
	// }

	function sel($itemno)
	{
		
		//$itemn = $this->input->post('itemno1');
		//$q = $this->db->query('select * from modeldetails where itemno = "$itemno"');
		$q=$this->db->get_where('modeldetails',array('itemno'=>$itemno));//echo "hai";
		return $q->result();
		
	}
	function del($itemno)
	{
		$this->db->where('itemno',$itemno);
		$this->db->delete('modeldetails');
	}
	function up($itemno,$data1)
	{
		$this->db->where('itemno',$itemno);
		$this->db->update('modeldetails', $data1);
		
	}
	

}



?>