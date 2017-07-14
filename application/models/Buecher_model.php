<?php
class Buecher_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_buecher($id = FALSE)
{
		$this->db->select('Buecher.id, Buecher.Buchname, Buecher.Sprache_von, Buecher.Sprache_nach, von.Sprache as von, nach.Sprache as nach');
		$this->db->from('Buecher');
		$this->db->join('Sprachen as von', 'von.id = Buecher.Sprache_von');
		$this->db->join('Sprachen as nach', 'nach.id = Buecher.Sprache_nach');
        
        if ($id === FALSE)
        {
        		
                $query = $this->db->get('');
                return $query->result_array();
        }

        $query = $this->db->get_where('', array('id' => $id));

        return $query->row_array();
}
}