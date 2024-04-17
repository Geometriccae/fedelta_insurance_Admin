<?php

class Leads_model extends CI_Model

{

    function __construct()

    {

        // Call the Model constructor  

        parent::__construct();

    }



    // Leads methods 

    public function get_today_leads()

    {

        $this->db->where('lead_table.create_date =', date('Y-m-d'));

        $this->db->order_by('lead_table.lead_id', "DESC");

        $this->db->join('insurer_type', 'insurer_type.insurer_type_id = lead_table.insurer_type_id');

        $this->db->join('policy_type', 'policy_type.policy_type_id = lead_table.policy_type_id');

        $this->db->join('lead_source', 'lead_source.lead_source_id = lead_table.lead_source_id');

        $this->db->join('lead_status', 'lead_status.lead_status_id = lead_table.lead_status_id');

        $this->db->join('cluster_table', 'cluster_table.cluster_id = lead_table.cluster_table_id');

        $query = $this->db->get('lead_table');

        return $query->num_rows() > 0 ? $query->result_array() : [];

    }

    public function get_all_leads($order_by = '')

    {

        $data = [];

        if ($order_by) {

            $this->db->order_by('lead_id', $order_by);

        }

        $this->db->join('insurer_type', 'insurer_type.insurer_type_id = lead_table.insurer_type_id');

        $this->db->join('policy_type', 'policy_type.policy_type_id = lead_table.policy_type_id');

        $this->db->join('lead_source', 'lead_source.lead_source_id = lead_table.lead_source_id');

        $this->db->join('lead_status', 'lead_status.lead_status_id = lead_table.lead_status_id');

        $this->db->join('cluster_table', 'cluster_table.cluster_id = lead_table.cluster_table_id');

        $data = $query = $this->db->get('lead_table');

        return $query->num_rows() > 0 ? $query->result_array() : [];

    }

    public function get_lead_by_id($id)

    {

        $array = array('lead_id' => $id);

        $this->db->where($array);

        $this->db->join('insurer_type', 'insurer_type.insurer_type_id = lead_table.insurer_type_id');

        $this->db->join('policy_type', 'policy_type.policy_type_id = lead_table.policy_type_id');

        $this->db->join('lead_source', 'lead_source.lead_source_id = lead_table.lead_source_id');

        $this->db->join('lead_status', 'lead_status.lead_status_id = lead_table.lead_status_id');

        $this->db->join('cluster_table', 'cluster_table.cluster_id = lead_table.cluster_table_id');

        $query = $this->db->get('lead_table');

        return $query->num_rows() > 0 ? $query->result_array()[0] : [];

    }

    public function new_lead($data)

    {

        $query = $this->db->insert('lead_table', $data);

        return $query;

    }

    public function update_lead($data, $id)

    {

        $this->db->where('lead_id', $id);

        $query = $this->db->update('lead_table', $data);

        return $query;

    }

    public function delete_lead($id)

    {

        $this->db->where('lead_id', $id);

        $query = $this->db->delete('lead_table');

        return $query;

    }





    // Cluster methods

    public function get_all_clusters()

    {

        $query = $this->db->get('cluster_table');

        return $query->num_rows() > 0 ? $query->result_array() : [];

    }

    public function get_cluster_by_id($id)

    {

        $array = array('cluster_id' => $id);

        $this->db->where($array);

        $query = $this->db->get('cluster_table');

        return $query->num_rows() > 0 ? $query->row() : [];

    }

    public function new_cluster($data)

    {

        $query = $this->db->insert('cluster_table', $data);

        return $query;

    }

    public function update_cluster($data, $id)

    {

        $this->db->where('cluster_id', $id);

        $query = $this->db->update('cluster_table', $data);

        return $query;

    }

    public function delete_cluster($id)

    {

        $this->db->where('cluster_id', $id);

        $query = $this->db->delete('cluster_table');

        return $query;

    }



    public function get_table_data($table, $col_name, $id)

    {

        $array = array($col_name => $id);

        $this->db->where($array);

        $query = $this->db->get($table);

        return $query->num_rows() > 0 ? $query->row() : [];

    }


    public function getLeadsForToday() {
        $today_date = date('Y-m-d'); // Get today's date
        $this->db->where('follow_up_date', $today_date);
        $query = $this->db->get('lead_table');

        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return array();
    }
    public function insert_document($lead_id, $document_name, $document_type)
    {
        $current_datetime = date('d_m_Y H.i.s');
        $extension = pathinfo($document_name, PATHINFO_EXTENSION);
        $new_document_name = $document_type . ' ' . $current_datetime . '.' . $extension;
$data = array(
    'document_id' => $lead_id,
    'files' => $new_document_name,
);

$this->db->insert('document', $data);

return $this->db->insert_id();
 // Return the ID of the inserted record
    }
    
    
    public function get_files_by_lead_id($lead_id) {
        $this->db->select('id,files,document_id');
        $this->db->where('document_id', $lead_id);
        $query = $this->db->get('document');
    
        return $query->result_array();
    }
    
    
    public function delete_document_by_lead_id($lead_id)
    {
        // Get the file name from the model
        $document_info = $this->get_document_info_by_lead_id($lead_id);

        if (!$document_info) {
            // Document not found
            return false;
        }

        $file_name = $document_info['files'];

        // Delete the document record from the database
        $this->db->where('lead_id', $lead_id);
        $this->db->delete('document');

        // Check if the file exists and unlink it
        $file_path = './assets/upload/' . $file_name;

        if (file_exists($file_path)) {
            unlink($file_path);
        }

        return true; // Deletion successful
    }

    public function get_document_info_by_lead_id($lead_id)
    {
        $this->db->where('lead_id', $lead_id);
        $query = $this->db->get('document');

        return $query->row_array();
    }
    public function delete_document_by_id($id)
{
    // Get the file name from the model
    $document_info = $this->get_document_info_by_id($id);

    if (!$document_info) {
        // Document not found
        return false;
    }

    $file_name = $document_info['files'];

    // Delete the document record from the database
    $this->db->where('id', $id);
    $this->db->delete('document');

    // Check if the file exists and unlink it
    $file_path = './assets/upload/' . $file_name;

    if (file_exists($file_path)) {
        unlink($file_path);
    }

    return true; // Deletion successful
}

public function get_document_info_by_id($id)
{
    $this->db->where('id', $id);
    $query = $this->db->get('document');

    return $query->row_array();
}
public function get_insurer_types() {
    // Fetch insurer types from the database
    $query = $this->db->select('insurer_type_name')->get('insurer_type');
    return $query->result_array();
}

}

?>