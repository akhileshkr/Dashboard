<?php

class Id extends CI_Controller
{
 function index()
{
	$this->load->view('index');

}

 function login()
	{
	$this->load->view('login');
	}

 function search()
	{
	$this->load->view('search');
	}

	function seller_view()
	{
	$this->load->view('seller_view');
	}
	
	function admin_update()
	{
	$this->load->view('admin_update');
	}
	
	function seller_home()
	{
	$this->load->view('seller_home');
	}
	function view1()
	{
	$this->load->view('dash');
	}
	
	}

?>