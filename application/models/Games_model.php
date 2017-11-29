<?php
class Games_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_games($input = FALSE){
                if ($input === FALSE) {
                        # no se solicitó un nombre
                        $query = $this->db->get("tbl_games");
                        return $query->result_array();
                }else{
                        # se envió un criterio de búsqueda, se hace una busqueda usando "LIKE"
                        $this->db->like('ga_title', $input);
                        return $this->db->get('tbl_games')->result_array();
                }

        }
        public function search_game_by_id($input){
        	# let's search by id
                $query = $this->db->get_where('tbl_games', array('ga_id' => $input));
                return $query->row_array();

        }

}
?>