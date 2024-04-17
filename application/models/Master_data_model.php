<?php

class Master_data_model extends CI_Model

{

    function __construct()

    {

        // Call the Model constructor  

        parent::__construct();

    }

    //we will use the select function  

    public function get_all_rows($table)

    {

        $query = $this->db->get($table);

        return $query->num_rows() > 0 ? $query->result_array() : [];

    }



    public function get_by_id($table, $col, $id)

    {

        $array = array($col => $id);

        $this->db->where($array);

        $query = $this->db->get($table);

        return $query->num_rows() > 0 ? $query->row() : [];

    }

    public function add_data($table, $data)

    {

        $query = $this->db->insert($table, $data);

        return $query;

    }

    public function update_data($table, $id, $id_val, $data)

    {

        // $this->db->set($col_name, $new_val);

        $this->db->where($id, $id_val);

        $query = $this->db->update($table, $data);

        return $query;

    }

    public function delete_data($table, $id, $id_val)

    {

        $this->db->where($id, $id_val);

        $query = $this->db->delete($table);

        return $query;

    } 
     // dodument name
    public function insert_document($data) {
        return $this->db->insert('document_name', $data);
    }

    // Read
    public function get_all_documents() {
        return $this->db->get('document_name')->result();
    }

    // Update
    public function update_document($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('document_name', $data);
    }

    // Delete
    public function delete_document($id) {
        $this->db->where('id', $id);
        return $this->db->delete('document_name');
    }

}

?>