<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sign_in extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->database();

		// Load library breadcrumb
		// $this->load->library('breadcrumb');
		// $this->load->model("settings");
		// $this->load->model('category');
		// $this->load->model('products');
		// $this->load->model('sub_category');
		// $this->load->library('upload');

	}


	public function index()
	{
		$this->load->view('sign-in');
		if ($this->session->has_userdata('usertype')) {
			redirect(base_url('dashboard'));
		}

	}

	public function check_login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('login');
		$result = $this->login->check_login($username, base64_encode($password));
		// $admin_data = $result

		if (count($result) > 0) {
			$array_items = array('name', 'id', 'usertype');
			$this->session->unset_userdata($array_items);
			$user_data = array(
				'name' => $result['name'],
				'id' => $result['id'],
				'usertype' => $result['usertype']
			);
			$this->session->set_userdata($user_data);
			redirect(base_url('dashboard'));
		} else {
			redirect(base_url('sign_in'));
		}

	}

	public function logout()
	{
		$array_items = array('name', 'id', 'usertype');
		$this->session->unset_userdata($array_items);
		redirect(base_url('sign_in'));
	}
}