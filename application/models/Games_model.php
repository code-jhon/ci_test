<?php
class Games_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_games($title = FALSE){
        	if ($title === FALSE) {
        		# no se solicitó un nombre
        		$query = $this->db->get("tbl_games");
        		return $query->result_array();
        	}else{
				$this->db->like('ga_title', $title);
				return $this->db->get('tbl_games')->result_array();
        	}

        }

}
?>