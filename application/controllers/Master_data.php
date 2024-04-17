<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Master_data extends CI_Controller

{



    public function __construct()

    {

        parent::__construct();



        $this->load->database();

        $this->load->model("master_data_model");

        // $this->load->model("settings");

        // $this->load->model("master_data");

        // Load library breadcrumb

        $this->load->library('breadcrumb');

        if (!$this->session->has_userdata('usertype')) {

            redirect(base_url('sign_in'));

        }



    }



    // lead source

    public function lead_status()

    {



        $breadcrumb_items = [

            'Leads Status Details' => '#',

        ];

        $this->breadcrumb->add_item($breadcrumb_items);

        $data['content_breadcrumb'] = $this->breadcrumb->generate();



        $data['table_name'] = "lead_status";

        $data['page_name'] = "Lead Status";

        $data['table_title'] = "Lead Status Table";

        $data['table_field_1'] = ["title" => "Lead Id", "name" => "lead_status_id"];

        $data['table_field_2'] = ["title" => "Lead Status Name", "name" => "lead_status_name"];

        $data['table_field_3'] = ["title" => "Created on", "name" => "create_date"];



        $data['table_rows'] = $this->master_data_model->get_all_rows("lead_status");



        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);



        $this->load->view('pages/master-data', $data);



        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/master-data-script', $data);

        $this->load->view('includes/close-body');

    }



    // lead source

    public function lead_source()

    {



        $breadcrumb_items = [

            'Lead Source Details' => '#',

        ];

        $this->breadcrumb->add_item($breadcrumb_items);

        $data['content_breadcrumb'] = $this->breadcrumb->generate();



        $data['table_name'] = "lead_source";

        $data['page_name'] = "Lead Source";

        $data['table_title'] = "Lead Source Table";

        $data['table_field_1'] = ["title" => "Lead Id", "name" => "lead_source_id"];

        $data['table_field_2'] = ["title" => "Lead Source Name", "name" => "lead_source_name"];

        $data['table_field_3'] = ["title" => "Created on", "name" => "create_date"];



        $data['table_rows'] = $this->master_data_model->get_all_rows("lead_source");



        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);



        $this->load->view('pages/master-data', $data);



        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/master-data-script', $data);

        $this->load->view('includes/close-body');

    }



    public function insurer_type()

    {



        $breadcrumb_items = [

            'Insurer Type' => '#',

        ];

        $this->breadcrumb->add_item($breadcrumb_items);

        $data['content_breadcrumb'] = $this->breadcrumb->generate();



        $data['table_name'] = "insurer_type";

        $data['page_name'] = "Insurer Type";

        $data['table_title'] = "Insurer Type Table";

        $data['table_field_1'] = ["title" => "Insurer Id", "name" => "insurer_type_id"];

        $data['table_field_2'] = ["title" => "Insurer Type Name", "name" => "insurer_type_name"];

        $data['table_field_3'] = ["title" => "Created on", "name" => "create_date"];



        $data['table_rows'] = $this->master_data_model->get_all_rows("insurer_type");



        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);



        $this->load->view('pages/master-data', $data);



        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/master-data-script', $data);

        $this->load->view('includes/close-body');

    }



    // Insurer

    public function insurer()

    {



        $breadcrumb_items = [

            'Insurer Details' => '#',

        ];

        $this->breadcrumb->add_item($breadcrumb_items);

        $data['content_breadcrumb'] = $this->breadcrumb->generate();



        $data['table_name'] = "insurer";

        $data['page_name'] = "Insurer Details";

        $data['table_title'] = "Insurer Table";

        $data['table_field_1'] = ["title" => "Insurer Id", "name" => "insurer_id"];

        $data['table_field_2'] = ["title" => "Insurer Name", "name" => "insurer_name"];

        $data['table_field_3'] = ["title" => "Created on", "name" => "create_date"];



        $data['table_rows'] = $this->master_data_model->get_all_rows("insurer");



        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);



        $this->load->view('pages/master-data', $data);



        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/master-data-script', $data);

        $this->load->view('includes/close-body');

    }



    // Policy Type

    public function policy_type()

    {



        $breadcrumb_items = [

            'Policy Type Details' => '#',

        ];

        $this->breadcrumb->add_item($breadcrumb_items);

        $data['content_breadcrumb'] = $this->breadcrumb->generate();



        $data['table_name'] = "policy_type";

        $data['page_name'] = "Policy Type Details";

        $data['table_title'] = "Policy Type";

        $data['table_field_1'] = ["title" => "Policy Type Id", "name" => "policy_type_id"];

        $data['table_field_2'] = ["title" => "Policy Type Name", "name" => "policy_type_name"];

        $data['table_field_3'] = ["title" => "Created on", "name" => "create_date"];



        $data['table_rows'] = $this->master_data_model->get_all_rows("policy_type");



        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);



        $this->load->view('pages/master-data', $data);



        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/master-data-script', $data);

        $this->load->view('includes/close-body');

    }



    // Policy

    public function policy()

    {



        $breadcrumb_items = [

            'Policy Details' => '#',

        ];

        $this->breadcrumb->add_item($breadcrumb_items);

        $data['content_breadcrumb'] = $this->breadcrumb->generate();



        $data['table_name'] = "policy";

        $data['page_name'] = "Policy Details";

        $data['table_title'] = "Policy Table";

        $data['table_field_1'] = ["title" => "Policy Id", "name" => "policy_id"];

        $data['table_field_2'] = ["title" => "Policy Name", "name" => "policy_name"];

        $data['table_field_3'] = ["title" => "Created on", "name" => "create_date"];



        $data['table_rows'] = $this->master_data_model->get_all_rows("policy");



        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);



        $this->load->view('pages/master-data', $data);



        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/master-data-script', $data);

        $this->load->view('includes/close-body');

    }





    // Add lead status

    public function add_lead_status()

    {

        $lead_status_name = $this->input->post('lead_status_name');

        $data = array(

            'lead_status_name' => $lead_status_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->add_data("lead_status", $data);

        if ($result) {

            redirect(base_url('lead-status'));

        } else {



        }

    }



    // Edit lead status

    public function edit_lead_status()

    {

        $lead_status_name = $this->input->post('lead_status_name');

        $lead_status_id = $this->input->post('lead_status_id');

        $data = array(

            'lead_status_name' => $lead_status_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->update_data("lead_status", 'lead_status_id', $lead_status_id, $data);

        if ($result) {

            redirect(base_url('lead-status'));

        } else {



        }

    }



    // add lead source

    public function add_lead_source()

    {

        $lead_source_name = $this->input->post('lead_source_name');

        $data = array(

            'lead_source_name' => $lead_source_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->add_data("lead_source", $data);

        if ($result) {

            redirect(base_url('lead-source'));

        } else {



        }

    }



    // Edit lead source

    public function edit_lead_source()

    {

        $lead_source_name = $this->input->post('lead_source_name');

        $lead_source_id = $this->input->post('lead_source_id');

        $data = array(

            'lead_source_name' => $lead_source_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->update_data("lead_source", 'lead_source_id ', $lead_source_id, $data);

        if ($result) {

            redirect(base_url('lead-source'));

        } else {



        }

    }



    // add insurer type

    public function add_insurer_type()

    {

        $insurer_type_name = $this->input->post('insurer_type_name');

        $data = array(

            'insurer_type_name' => $insurer_type_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->add_data("insurer_type", $data);

        if ($result) {

            redirect(base_url('insurer-type'));

        } else {



        }

    }



    // Edit insurer type

    public function edit_insurer_type()

    {

        $insurer_type_name = $this->input->post('insurer_type_name');

        $insurer_type_id = $this->input->post('insurer_type_id');

        $data = array(

            'insurer_type_name' => $insurer_type_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->update_data("insurer_type", 'insurer_type_id', $insurer_type_id, $data);

        if ($result) {

            redirect(base_url('insurer-type'));

        } else {



        }

    }



    // Add insurer

    public function add_insurer()

    {

        $insurer_name = $this->input->post('insurer_name');

        $data = array(

            'insurer_name' => $insurer_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->add_data("insurer", $data);

        if ($result) {

            redirect(base_url('insurer'));

        } else {



        }

    }



    // Edit insurer

    public function edit_insurer()

    {

        $insurer_name = $this->input->post('insurer_name');

        $insurer_id = $this->input->post('insurer_id');

        $data = array(

            'insurer_name' => $insurer_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->update_data("insurer", 'insurer_id', $insurer_id, $data);

        if ($result) {

            redirect(base_url('insurer'));

        } else {



        }

    }



    // add policy type

    public function add_policy_type()

    {

        $policy_type_name = $this->input->post('policy_type_name');

        $data = array(

            'policy_type_name' => $policy_type_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->add_data("policy_type", $data);

        if ($result) {

            redirect(base_url('policy-type'));

        } else {



        }

    }



    // Edit policy Type

    public function edit_policy_type()

    {

        $policy_type_name = $this->input->post('policy_type_name');

        $policy_type_id = $this->input->post('policy_type_id');

        $data = array(

            'policy_type_name' => $policy_type_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->update_data("policy_type", 'policy_type_id', $policy_type_id, $data);

        if ($result) {

            redirect(base_url('policy-type'));

        } else {



        }

    }



    // Add policy

    public function add_policy()

    {

        $policy_name = $this->input->post('policy_name');

        $data = array(

            'policy_name' => $policy_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->add_data("policy", $data);

        if ($result) {

            redirect(base_url('policy'));

        } else {



        }

    }



    // Edit policy

    public function edit_policy()

    {

        $policy_name = $this->input->post('policy_name');

        $policy_id = $this->input->post('policy_id');

        $data = array(

            'policy_name' => $policy_name,

            'create_date' => date('Y-m-d')

        );

        $result = $this->master_data_model->update_data("policy", 'policy_id', $policy_id, $data);

        if ($result) {

            redirect(base_url('policy'));

        } else {



        }

    }



    public function get_data($table, $id)

    {

        $result = null;

        switch ($table) {

            case 'policy':

                $result = $this->master_data_model->get_by_id("policy", 'policy_id', $id);

                if ($result) {

                    $result->status = '200';

                    $result->id = $result->policy_id;

                    $result->name = $result->policy_name;

                }

                echo json_encode($result);

                break;

            case 'policy_type':

                $result = $this->master_data_model->get_by_id("policy_type", 'policy_type_id', $id);

                if ($result) {

                    $result->status = '200';

                    $result->id = $result->policy_type_id;

                    $result->name = $result->policy_type_name;

                }

                echo json_encode($result);

                break;



            case 'insurer':

                $result = $this->master_data_model->get_by_id("insurer", 'insurer_id', $id);

                if ($result) {

                    $result->status = '200';

                    $result->id = $result->insurer_id;

                    $result->name = $result->insurer_name;

                }

                echo json_encode($result);

                break;

            case 'insurer_type':

                $result = $this->master_data_model->get_by_id("insurer_type", 'insurer_type_id', $id);

                if ($result) {

                    $result->status = '200';

                    $result->id = $result->insurer_type_id;

                    $result->name = $result->insurer_type_name;

                }

                echo json_encode($result);

                break;

            case 'lead_status':

                $result = $this->master_data_model->get_by_id("lead_status", 'lead_status_id', $id);

                if ($result) {

                    $result->status = '200';

                    $result->id = $result->lead_status_id;

                    $result->name = $result->lead_status_name;

                }

                echo json_encode($result);

                break;

            case 'lead_source':

                $result = $this->master_data_model->get_by_id("lead_source", 'lead_source_id', $id);

                if ($result) {

                    $result->status = '200';

                    $result->id = $result->lead_source_id;

                    $result->name = $result->lead_source_name;

                }

                echo json_encode($result);

                break;



            default:

                echo json_encode([]);

                break;

        }





    }
    // Display all documents
    public function document_index() {
        $data['documents'] = $this->master_data_model->get_all_documents();
        $this->load->view('document/index', $data);
    }

    // Create a new document
    public function document_create() {
        // Handle form submission here
        if ($this->input->post('submit')) {
            $document_name = $this->input->post('document_name');
            $data = array('document_name' => $document_name);
            $this->master_data_model->insert_document($data);
            redirect('document_index');
        } else {
            $this->load->view('document/create');
        }
    }

    // Update an existing document
    public function document_update($id) {
        // Handle form submission here
        if ($this->input->post('submit')) {
            $document_name = $this->input->post('document_name');
            $data = array('document_name' => $document_name);
            $this->master_data_model->update_document($id, $data);
            redirect('document');
        } else {
            $data['document'] = $this->master_data_model->get_document_by_id($id);
            $this->load->view('document/update', $data);
        }
    }

    // Delete a document
    public function delete($id) {
        $this->master_data_model->delete_document($id);
        redirect('document_index');
    }


}