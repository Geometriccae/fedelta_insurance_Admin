<?php
class Insurer_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_insurers() {
        // Fetch insurer names from the database
        $query = $this->db->select('insurer_name')->get('insurer');
        return $query->result_array();
    }
}
?>
