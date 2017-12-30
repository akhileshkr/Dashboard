<?php 
class Login_model extends CI_Model
{
function login($uname,$password)
{
 $a=$this->db->get_where('login',array('uname'=>$uname,'password'=>$password));

 	return $a->result();
}

}

 ?>