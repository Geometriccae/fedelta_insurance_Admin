<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->database();

		if (!$this->session->has_userdata('usertype')) {
			redirect(base_url('sign_in'));
		}


		// Load library breadcrumb
		// $this->load->library('breadcrumb');
		// $this->load->model("settings");
		// $this->load->model('category');
		// $this->load->model('products');
		// $this->load->model('sub_category');
		// $this->load->library('upload');

	}

	public function dashboard()
	{
		$this->load->model("leads_model");


		$data['page_name'] = "Dashboard";
		$breadcrumb_items = [
			'Dashboard' => '#'
		];
		$this->breadcrumb->add_item($breadcrumb_items);
		$data['content_breadcrumb'] = $this->breadcrumb->generate();
		$data['table_rows'] = $this->leads_model->get_today_leads();
		$this->load->model('leads_model');
        $data['leads_for_today'] = $this->leads_model->getLeadsForToday();

		$this->load->view('includes/header');
		$this->load->view('includes/top-menu');
		$this->load->view('includes/side-menu');
		$this->load->view('includes/breadcrumb', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('includes/footer');
		$this->load->view('includes/script');
		$this->load->view('scripts/leads');
		$this->load->view('includes/close-body');
	}
}