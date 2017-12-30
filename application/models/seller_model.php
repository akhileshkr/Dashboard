<?php 
class Seller_model extends CI_Model
{

	public function search($data)
	{
		if($data!="")
		{
		// $query = $this->db->query("select * from asset_catalog where asset_name like '%".$data."%' or id like '%".$data."%' or innovation_area like '%".$data."%' or asset_summary like '%".$data."%' or asset_poc like '%".$data."%' or asset_type like '%".$data."%' or asset_keywords like '%".$data."%'"); //search any thing 
			$query = $this->db->query("select * from asset_catalog where asset_name like '%".$data."%'");
		return $query->result();
		}
		else
		{
			$query = $this->db->query("select * from asset_catalog");
			return $query->result();
		}
	}
	public function edit_search($id)
	{
		$this->db->select('*');
		$this->db->from('asset_catalog');
		$this->db->where('id',$id);
		$q = $this->db->get();
		
		return $q->result();
	}
	public function update($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('asset_catalog',$data);
	}
	public function search_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('asset_catalog');
	}
	public function lastid()
	{
		$this->db->select('id');
		$this->db->from('asset_catalog');
		$this ->db-> limit(1);
		$this->db->order_by('id', 'desc');
		$q = $this->db->get();
		return $q->result();
	}
	public function insert($data)
	{
		$result=$this->db->insert('asset_catalog', $data);
	}
	public function login($data)
	{
		$this ->db-> select('username, password');
    $this ->db-> from('login');
    $this ->db-> where('username', $data['username']);
    $this ->db-> where('password', $data['password']);
    $this ->db-> limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) 
	{
		return $query->result();
	} 
	else 
	{
		return false;
	}

	}
	public function viewall()
	{
		$query = $this->db->query("select * from asset_catalog");
		return $query->result();
	}

}

?>