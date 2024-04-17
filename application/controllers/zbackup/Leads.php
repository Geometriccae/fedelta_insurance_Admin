<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Leads extends CI_Controller
{



    public function __construct()
    {

        parent::__construct();



        $this->load->database();

        // $this->load->model("settings");

        // Load library breadcrumb

        $this->load->library('breadcrumb');

        $this->load->model("master_data_model");
        $this->load->model('Insurer_model');
        $this->load->model("leads_model");
        $this->load->model("Remarks_model");
        $this->load->model('Insurance_quotes_model');
        if (!$this->session->has_userdata('usertype')) {

            redirect(base_url('sign_in'));

        }

    }





    public function index()
    {



        $data['page_name'] = "Leads";

        $breadcrumb_items = [

            'Leads' => '#',

        ];

        $this->breadcrumb->add_item($breadcrumb_items);

        $data['content_breadcrumb'] = $this->breadcrumb->generate();



        $data['table_rows'] = $this->leads_model->get_all_leads("DESC");



        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);

        $this->load->view('lead/table', $data);

        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/leads');

        $this->load->view('includes/close-body');



    }



    public function create()
    {



        $data['page_name'] = "Create New Lead";

        $data['table_name'] = "lead_status";

        $data['table_title'] = "Lead Status Table";

        $breadcrumb_items = [

            'Leads' => 'leads',

            'Create' => "leads/create",

        ];

        $this->breadcrumb->add_item($breadcrumb_items);

        $data['content_breadcrumb'] = $this->breadcrumb->generate();



        $data['insurer_type_row'] = $this->master_data_model->get_all_rows("insurer_type");

        $data['lead_source_row'] = $this->master_data_model->get_all_rows("lead_source");

        $data['lead_status_row'] = $this->master_data_model->get_all_rows("lead_status");

        $data['policy_type_row'] = $this->master_data_model->get_all_rows("policy_type");



        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);

        $this->load->view('lead/create', $data);

        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/leads');

        $this->load->view('includes/close-body');





    }



    public function edit($id)
    {



        $data['page_name'] = "Edit Lead";

        $data['table_name'] = "lead_status";

        $data['table_title'] = "Lead Status Table";

        $breadcrumb_items = [

            'Leads' => 'leads',

            'Edit' => "leads/edit",

        ];

        $this->breadcrumb->add_item($breadcrumb_items);

        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $data['row'] = $this->leads_model->get_lead_by_id($id);



        $data['insurer_type_row'] = $this->master_data_model->get_all_rows("insurer_type");

        $data['lead_source_row'] = $this->master_data_model->get_all_rows("lead_source");

        $data['lead_status_row'] = $this->master_data_model->get_all_rows("lead_status");

        $data['policy_type_row'] = $this->master_data_model->get_all_rows("policy_type");



        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);

        $this->load->view('lead/edit', $data);

        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/leads');

        $this->load->view('includes/close-body');





    }

    public function add_new()
    {
        if ($this->input->post('action') == "add-new") {
            $data['prospect_name'] = $this->input->post('prospect_name');
            $data['prospect_mobile_number'] = $this->input->post('prospect_mobile_number');
            $data['prospect_email_id'] = $this->input->post('prospect_email_id');
            $data['insurer_type_id'] = $this->input->post('insurer_type_id');
            $data['policy_type_id'] = $this->input->post('policy_type_id');
            $data['lead_source_id'] = $this->input->post('lead_source_id');
            $data['lead_status_id'] = $this->input->post('lead_status_id');
            $data['customer_type'] = $this->input->post('customer_type');
            $data['lead_remarks'] = $this->input->post('lead_remarks');
            $data['follow_up_date'] = $this->input->post('follow_up_date'); // Updated field name
            $data['business_type'] = $this->input->post('business_type');

            // Handle file upload for document
            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'pdf|doc|docx|png|jpg';

            $this->load->library('upload', $config);

            // Check if a document is selected
            if (!empty($_FILES['document']['name'])) {
                if ($this->upload->do_upload('document')) {
                    $upload_data = $this->upload->data();
                    $data['document_name'] = $upload_data['file_name']; // Store the document name in the 'document_name' column
                } else {
                    // Handle file upload error if needed
                    $error = $this->upload->display_errors();
                    echo $error;
                    return;
                }
            } else {
                // No document selected, set 'document_name' to null or any default value
                $data['document_name'] = null; // Set a default value or leave it empty
            }

            // Handle file upload for document2

            $data['created_on'] = date('d-m-Y / h:i:sa');
            $data['create_date'] = date('Y-m-d');
            $data['create_time'] = date('h:i:sa');

            $result = $this->leads_model->new_lead($data);

            if ($result) {
                $lead_id = $this->db->insert_id();
                $data_c['cluster_name'] = $this->input->post('cluster_name');
                $data_c['contact_name'] = $this->input->post('contact_name');
                $data_c['contact_number'] = $this->input->post('contact_number');
                $data_c['contact_email'] = $this->input->post('contact_email');
                $result_c = $this->leads_model->new_cluster($data_c);

                if ($result_c) {
                    $cluster_id = $this->db->insert_id();
                    $data['cluster_table_id'] = $cluster_id;
                    $this->leads_model->update_lead($data, $lead_id);
                    redirect(base_url('leads'));
                }
            }
        }
    }





    public function update()
    {
        if ($this->input->post('action') == "edit-now") {
            $lead_id = $this->input->post('lead_id');
            $cluster_id = $this->input->post('cluster_id');

            $data['prospect_name'] = $this->input->post('prospect_name');
            $data['prospect_mobile_number'] = $this->input->post('prospect_mobile_number');
            $data['prospect_email_id'] = $this->input->post('prospect_email_id');
            $data['insurer_type_id'] = $this->input->post('insurer_type_id');
            $data['policy_type_id'] = $this->input->post('policy_type_id');
            $data['lead_source_id'] = $this->input->post('lead_source_id');
            $data['lead_status_id'] = $this->input->post('lead_status_id');
            $data['customer_type'] = $this->input->post('customer_type');
            $data['lead_remarks'] = $this->input->post('lead_remarks');
            $data['followup_date'] = $this->input->post('followup_date');
            $data['business_type'] = $this->input->post('business_type');
            $data['updated_date'] = date('Y-m-d');

            // Handle file upload
            if (!empty($_FILES['document']['name'])) {
                $config['upload_path'] = './assets/upload/';
                $config['allowed_types'] = 'pdf|doc|docx|png|jpg';

                // Add other configurations as needed

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('document')) {
                    $upload_data = $this->upload->data();
                    $data['document_name'] = $upload_data['file_name'];
                } else {
                    // Handle file upload error if needed
                    $error = $this->upload->display_errors();
                    echo $error;
                    return;
                }
            }

            $result = $this->leads_model->update_lead($data, $lead_id);

            $data_c['cluster_name'] = $this->input->post('cluster_name');
            $data_c['contact_name'] = $this->input->post('contact_name');
            $data_c['contact_number'] = $this->input->post('contact_number');
            $data_c['contact_email'] = $this->input->post('contact_email');

            $result_c = $this->leads_model->update_cluster($data_c, $cluster_id);

            redirect(base_url('leads'));
        }
    }




    public function delete($id)
    {

        $data = $this->leads_model->get_lead_by_id($id);

        $this->leads_model->delete_cluster($data->cluster_table_id);

        $this->leads_model->delete_lead($id);

        redirect(base_url('leads'));

    }
    public function view($id)
    {



        $data['page_name'] = "View Lead";

        $data['table_name'] = "lead_status";

        $data['table_title'] = "Lead Status Table";

        $breadcrumb_items = [

            'Leads' => 'leads',

            'View' => "leads/View",

        ];

        $this->breadcrumb->add_item($breadcrumb_items);

        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $data['row'] = $this->leads_model->get_lead_by_id($id);



        $data['insurer_type_row'] = $this->master_data_model->get_all_rows("insurer_type");

        $data['lead_source_row'] = $this->master_data_model->get_all_rows("lead_source");

        $data['lead_status_row'] = $this->master_data_model->get_all_rows("lead_status");

        $data['policy_type_row'] = $this->master_data_model->get_all_rows("policy_type");

        $data['remarks'] = $this->Remarks_model->get_remarks_by_lead_id($data['row']['lead_id']);


        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);

        $this->load->view('lead/view', $data);

        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/leads');

        $this->load->view('includes/close-body');





    }

    public function remarks()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $lead_id = $this->input->post('lead_id');
            $remark_message = $this->input->post('remark_message');
            $created_at = date('Y-m-d H:i:s'); // Current date and time

            $data = array(
                'prospect_id' => $lead_id,
                'remark_message' => $remark_message,
                'created_at' => $created_at,
            );

            // Assuming you have a "remarks_model" to handle the database operations
            $this->Remarks_model->insert_remark($data);
            $remarks = $this->Remarks_model->get_remarks_by_lead_id($lead_id);

            // Load a view to display the remarks (create a view file)
            $data['remarks'] = $remarks;
            // Redirect to the appropriate page after the form submission
            redirect('leads/view/' . $lead_id); // You can change this URL as needed
        }
    }
    public function document($id)
    {



        $data['page_name'] = "View Lead";

        $data['table_name'] = "lead_status";

        $data['table_title'] = "Lead Status Table";

        $breadcrumb_items = [

            'Leads' => 'leads',

            'View' => "leads/View",

        ];

        $this->breadcrumb->add_item($breadcrumb_items);

        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $data['row'] = $this->leads_model->get_lead_by_id($id);



        $data['insurer_type_row'] = $this->master_data_model->get_all_rows("insurer_type");

        $data['lead_source_row'] = $this->master_data_model->get_all_rows("lead_source");

        $data['lead_status_row'] = $this->master_data_model->get_all_rows("lead_status");

        $data['policy_type_row'] = $this->master_data_model->get_all_rows("policy_type");

        $data['remarks'] = $this->Remarks_model->get_remarks_by_lead_id($data['row']['lead_id']);


        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);

        $this->load->view('lead/document', $data);

        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/leads');

        $this->load->view('includes/close-body');





    }

    public function upload_document2()
    {
        // Load the necessary libraries and models
        $this->load->library('upload');

        // Check if the form is submitted
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // Get lead_id and document type from the form
            $lead_id = $this->input->post('lead_id');
            $document_type = $this->input->post('document_type');

            // Check if document_type is not empty
            if (!empty($document_type)) {
                // Configuration for file upload
                $config['upload_path'] = './assets/upload/';
                $config['allowed_types'] = 'pdf|doc|docx|png|jpg';
                $config['max_size'] = 2048; // Maximum file size in kilobytes

                // Initialize the upload library
                $this->upload->initialize($config);

                // Check if the file was successfully uploaded
                if ($this->upload->do_upload('document2')) {
                    $upload_data = $this->upload->data();
                    $document_name = $upload_data['file_name'];

                    // Add current date and time to the document name to make it unique
                    $current_datetime = date('d_m_Y H.i.s');
                    $extension = pathinfo($document_name, PATHINFO_EXTENSION);
                    $new_document_name = $document_type . ' ' . $current_datetime . '.' . $extension;

                    // Move the uploaded file to the destination folder with the modified name
                    $new_path = $config['upload_path'] . $new_document_name;
                    rename($config['upload_path'] . $document_name, $new_path);


                    // Insert into the 'document' table using the model
                    $this->load->model('Leads_model'); // Assuming the model is named Leads_model
                    $inserted_id = $this->Leads_model->insert_document($lead_id, $new_document_name, $document_type);

                    if ($inserted_id) {
                        // Redirect to the lead page
                        redirect(base_url("leads/document/$lead_id"));
                    } else {
                        // Database insertion failed
                        $this->handle_error('Error updating database.');
                    }
                } else {
                    // File upload failed
                    $this->handle_error($this->upload->display_errors());
                }
            } else {
                // Handle the case when document_type is empty
                $this->handle_error('Document type is required.');
            }
        } else {
            // If the form is not submitted, handle accordingly
            // ...
        }
    }

    // Helper function to display errors
    private function handle_error($message)
    {
        echo '<div style="color: red;">' . $message . '</div>';
    }

    public function delete_document_by_id($id)
    {
        // Load the Leads_model
        $this->load->model('Leads_model');

        // Call the model function to delete the document and unlink the file
        $delete_result = $this->Leads_model->delete_document_by_id($id);

        if ($delete_result) {
            // Document deleted successfully
            redirect(base_url("leads"));
        } else {
            // Document deletion failed or not found

        }
    }
    public function quotes($id)
    {



        $data['page_name'] = "View Lead";

        $data['table_name'] = "lead_status";

        $data['table_title'] = "Lead Status Table";

        $breadcrumb_items = [

            'Leads' => 'leads',

            'View' => "leads/View",

        ];

        $this->breadcrumb->add_item($breadcrumb_items);
        $data['quotes_documents'] = $this->Insurance_quotes_model->get_all_quotes_documents();
        $data['quotes'] = $this->Insurance_quotes_model->get_all_quotes_with_insurance_type();

        $data['content_breadcrumb'] = $this->breadcrumb->generate();
        $data['insurers'] = $this->Insurer_model->get_insurers();
        $data['row'] = $this->leads_model->get_lead_by_id($id);

        $this->load->model('Insurer_type_model');

        // Fetch insurer types from the model
        $data['insurer_types'] = $this->Insurer_type_model->get_insurer_types();

        $data['insurer_type_row'] = $this->master_data_model->get_all_rows("insurer_type");

        $data['lead_source_row'] = $this->master_data_model->get_all_rows("lead_source");

        $data['lead_status_row'] = $this->master_data_model->get_all_rows("lead_status");

        $data['policy_type_row'] = $this->master_data_model->get_all_rows("policy_type");

        $data['remarks'] = $this->Remarks_model->get_remarks_by_lead_id($data['row']['lead_id']);
        $data['quotes'] = $this->Insurance_quotes_model->get_quotes_by_customer_id($data['row']['lead_id']);

        $this->load->view('includes/header');

        $this->load->view('includes/top-menu');

        $this->load->view('includes/side-menu');

        $this->load->view('includes/breadcrumb', $data);

        $this->load->view('lead/quotes', $data);

        $this->load->view('includes/footer');

        $this->load->view('includes/script');

        $this->load->view('scripts/leads');

        $this->load->view('includes/close-body');





    }
    public function upload_document()
    {
        // Retrieve form data
        $insurance_type = $this->input->post('Insurance_Type');
        $lead_id = $this->input->post('lead_id');
        $sum_insured = $this->input->post('sum_insured');
        $premium = $this->input->post('premium');
        $comments = $this->input->post('comments');

        // Retrieve table data
        $tableData = json_decode($this->input->post('tableData'), true);

        // Loop through table data and store each row
        foreach ($tableData as $row) {
            // Check if a file is uploaded for the row
            if (!empty($row['Document'])) {
                // File upload configuration
                $config['upload_path'] = './assets/quoates_upload/';
                $config['allowed_types'] = 'pdf|doc|docx';
                $config['max_size'] = 2048; // 2MB max size

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('document2')) {
                    // File upload failed
                    $error = array('error' => $this->upload->display_errors());
                    // Handle error
                    print_r($error);
                } else {
                    // File uploaded successfully
                    $upload_data = $this->upload->data();
                    $file_name = $upload_data['file_name'];

                    // Save data to database
                    $data = array(
                        'insurance_type' => $insurance_type,
                        'quotes_document' => $file_name,
                        'customer_id' => $lead_id,
                        'sum_insured' => $row['Sum Insured'],
                        'premium' => $row['Premium'],
                        'comments' => $row['Comments']
                    );

                    $this->Insurance_quotes_model->save_quote($data);
                }
            } else {
                // No file uploaded
                // Save data to database
                $data = array(
                    'insurance_type' => $insurance_type,
                    'customer_id' => $lead_id,
                    'sum_insured' => $row['Sum Insured'],
                    'premium' => $row['Premium'],
                    'comments' => $row['Comments']
                );

                $this->Insurance_quotes_model->save_quote($data);
            }
        }

        // Redirect or show success message
        redirect(base_url("leads/quotes/$lead_id"));
        $this->session->set_flashdata('success', 'Document uploaded successfully.'); // Redirect to a specific page after successful upload
    }

    public function delete_quote($quote_id)
    {
        // Load the model
        $this->load->model('Insurance_quotes_model');

        // Get lead_id before deleting the quote
        $quote = $this->Insurance_quotes_model->get_quote($quote_id);
        $lead_id = $quote['customer_id'];

        // Call the model function to delete the quote
        $this->Insurance_quotes_model->delete_quote($quote_id);

        // Redirect back to the page where quotes are listed
        redirect(base_url("leads/quotes/$lead_id"));
    }




}