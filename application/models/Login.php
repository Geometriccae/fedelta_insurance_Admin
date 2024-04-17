<?php
class login extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor  
        parent::__construct();
    }

    //we will use the select function  
    public function check_login($username, $password)
    {

        $array = array('username' => $username, 'password' => $password);
        $this->db->where($array);
        $query = $this->db->get('admin');

        return $query->row_array();

    }
    public function get_quotes_documents_by_lead_id($lead_id) {
        $this->db->select('quotes_document');
        $this->db->where('customer_id', $lead_id);
        $query = $this->db->get('insurance_quotes');
        return $query->result_array();
    }
}
?>