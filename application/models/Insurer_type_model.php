<?php
// Insurer_type_model.php
class Insurer_type_model extends CI_Model {
    public function get_insurer_types() {
        // Fetch insurer types from the database
        $query = $this->db->select('insurer_type_name')->get('insurer_type');
        return $query->result_array();
    }
}
?>
