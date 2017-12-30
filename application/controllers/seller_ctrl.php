<?php 

class Seller_ctrl extends CI_Controller
{

	public function __construct()
        {
                parent::__construct();
                $this->load->helper('form');
                $this->load->library('form_validation');
				$this->load->model('seller_model');
        }
        function index()
		{
			$data['message']="";
			$this->load->view('login',$data);

		}
	// function update($id,$b,$b1)
		function update()
	// ,$b2,$b3,$b4,$b5
	{
		$id = $this->input->post('id');
		$data1 = array(
		'id' => $this->input->post('id'),
		'innovation_area' => $this->input->post('innovation_area'),
		'asset_name' => $this->input->post('asset_name'),
		'asset_summary' => $this->input->post('asset_summary'),
		'asset_poc' => $this->input->post('asset_poc'),
		'asset_type' => $this->input->post('asset_type'),
		'asset_keywords' => $this->input->post('asset_keywords'),
		);
		// $this->load->view();
		// $data1 = array(
		// 	'id' => $id,
		// 	'innovation_area' => $b,
		// 	'asset_name' => $b1,
		// 	'asset_summary' => $b2,
		// 	'asset_poc' => $b3,
		// 	'asset_type' => $b4,
		// 	'asset_keywords' => $b5,
		// 	);
		$this->seller_model->update($data1,$id);
		$data['message']="record updated succesfully";
		$this->load->view('search',$data);
		
	}
	function update1($id)
	{
		echo $id;
		
	}
	function view1()  
	{
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		if ($this->form_validation->run() == FALSE) 
		{
			$data['message']="";
			$this->load->view('login',$data);
		}
		else
		{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$a = $this->seller_model->login($data);
			if ($a)
			{
				$this->load->view('dash');
			}
			else
			{
				$data['message']="Invalid username or password";
				$this->load->view('login',$data);
			}
		}
	}
	function search() 
	{
		$data['message']=" ";
		$this->load->view('search',$data);
		//$this->load->view('date_search');
	}
	function search1() 
	{
		$this->form_validation->set_rules('search','Search', 'required');
		if ($this->form_validation->run() == FALSE) 
		{	
			// echo "<script>alert('Enter a valid Entry');</script>";
			$data['message']="";
			$this->load->view('search',$data);
		}
		else
		{
			$data = $this->input->post('search');
			$data1['data'] = $this->seller_model->search($data);
			$this->load->view('search_result',$data1);
	

		}
		
	}
	function search_edit($id)
	{
		$data['data']=$this->seller_model->edit_search($id);
		$this->load->view('edit',$data);
	}

	function search_delete($id)
	{
		$this->seller_model->search_delete($id);
		$data['message']="record delete successfully";
		$this->load->view('search',$data);

	}
	function delete()
	{
		$data['message']=" ";
		$this->load->view('delete',$data);
	}
	function delete1()
	{
		$this->form_validation->set_rules('search','Search', 'required');
		if ($this->form_validation->run() == FALSE) 
		{
			// echo "<script>alert('Enter a valid Entry');</script>";
			$data['message']=" ";
			$this->load->view('delete',$data);
		}
		else
		{
			$data = $this->input->post('search');
			$data1['data'] = $this->seller_model->search($data);
			$this->load->view('delete_search',$data1);
		}

	}
	function insert()
	{
		$data['data'] = $this->seller_model->lastid();
		$data['message']="";
		$this->load->view('insert',$data);
	}
	function insert1()
	{
		$id = $this->input->post('id');
		$data1 = array(
		'id' => $this->input->post('id'),
		'innovation_area' => $this->input->post('innovation_area'),
		'asset_name' => $this->input->post('asset_name'),
		'asset_summary' => $this->input->post('asset_summary'),
		'asset_poc' => $this->input->post('asset_poc'),
		'asset_type' => $this->input->post('asset_type'),
		'asset_keywords' => $this->input->post('asset_keywords'),
		);
		$this->seller_model->insert($data1);
		$data['data'] = $this->seller_model->lastid();
		$data['message']="record insert successfully";
		$this->load->view('insert',$data);
	}
	function view()
	{
		$data['data'] = $this->seller_model->viewall();
		$this->load->view('view',$data);
	}
	
}


 ?>