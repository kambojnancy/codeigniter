<?php

class Insertdata extends CI_Model {



	 public function insert_entry($data)
        {
                

                $this->db->insert('user_detail', $data);
        }
        public function fetch_entry($username,$password)
        {
        	$this->db->where('name',$username);
        	$this->db->where('password',$password);
           	$query=$this->db->get('user_detail');
           	if($query->num_rows() > 0){
              $row = $query->row();
                 $data = array(
                    'userid' => $row->id,
                    'fname' => $row->name,
                    'usertype' => $row->usertype,
                    );
            $this->session->set_userdata($data);

           		return $query;
           	}
           	return false;
        }
        public function getalldata()
        {
          $query=$this->db->get('user_detail');
          return $query->result();
        }
}

?>