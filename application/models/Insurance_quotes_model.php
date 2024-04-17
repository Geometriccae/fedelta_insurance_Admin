<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance_quotes_model extends CI_Model {
    
    public function save_quote($data) {
        // Insert data into the 'insurance_quotes' table
        $this->db->insert('insurance_quotes', $data);
    }
    public function get_quotes_documents_by_customer_id($customer_id) {
        $this->db->select('quotes_document');
        $this->db->where('customer_id', $customer_id);
        $query = $this->db->get('insurance_quotes');
        return $query->result_array();
    }
    public function get_all_quotes_documents() {
        $this->db->select('quotes_document');
        $query = $this->db->get('insurance_quotes');
        return $query->result_array();
    }
    public function get_all_quotes_with_insurance_type() {
        $this->db->select('id,insurance_type, quotes_document, sum_insured, premium, comments');
        $query = $this->db->get('insurance_quotes');
        return $query->result_array();
    }
    public function delete_quote($quote_id) {
        $this->db->where('id', $quote_id);
        $this->db->delete('insurance_quotes');
    }
    
    public function get_quote($quote_id) {
        // Fetch the quote from the database based on the quote_id
        $this->db->where('id', $quote_id);
        $query = $this->db->get('insurance_quotes');
        return $query->row_array(); // Return the quote details as an associative array
    }
    public function get_quotes_by_customer_id($customer_id) {
        $this->db->select('id, insurance_type, quotes_document, sum_insured, premium, comments');
        $this->db->where('customer_id', $customer_id);
        $query = $this->db->get('insurance_quotes');
        return $query->result_array();
    }
}
?>
