<?php 
class Seller_model extends CI_Model
{
	// function sell()
	// {
	// 	$data=$this->db->query('SELECT billno FROM sales ORDER BY billno DESC LIMIT 1');
 // 		// ORDER BY billno DESC
	// 	// TOP 1
	// 	return $data->result();
	// }

	function insert($data)
	{
		$this->db->insert('sales',$data);


	}

	function billsearch($billno)
	{
		//$q =  $this->db->query('select modelno,modelname,dop,cname from sales where billno = $billno ')
		$this->db->select('billno,modelno,modelname,dop,cname');
		$query = $this->db->get_where('sales',array('billno'=>$billno));
		return $query->result();

	}

	function datesearch($date1,$date2)
	{
  $this->db->select('billno,modelno,modelname,dop,cname');	
  $this->db->where('dop >=', $date1);
  $this->db->where('dop <=', $date2);
  $a=$this->db->get('sales');
  return $a->result();
	}

	function update($id,$data)
	{
		$this->db->where('billno', $id);
		$this->db->update('sales', $data);
	}



	function display($id)
	{
		$th=$this->db->get_where('sales',array('billno'=>$id));
		return $th->result();
	}

	function delete($id)
	{
		$this->db->where('billno',$id);
		$this->db->delete('sales');
	}

}

 ?>