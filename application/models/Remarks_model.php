
<?php

class Remarks_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insert_remark($data)
    {
        $this->db->insert('remark', $data);
    }


    public function get_remarks_by_lead_id($lead_id)
    {
        // Query the 'remark' table to get remarks where prospect_id matches lead_id
        $this->db->where('prospect_id', $lead_id);
        $this->db->order_by('created_at', 'desc'); // Order by 'created_at' in ascending order
        $query = $this->db->get('remark');
    
        // Check if there are remarks for the lead
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array(); // No remarks found
    }
    
}
?>