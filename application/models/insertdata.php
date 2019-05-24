<?php

class Insertdata extends CI_Model {



	 public function insert_entry($data)
        {
                

                $this->db->insert('user_details', $data);
        }
}

?>