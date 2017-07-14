<?php
class Sprache_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_sprachen($id = FALSE)
{
        if ($id === FALSE)
        {
                $query = $this->db->get('Sprachen');
                return $query->result_array();
        }

        $query = $this->db->get_where('Sprachen', array('id' => $id));

        return $query->row_array();
}
}