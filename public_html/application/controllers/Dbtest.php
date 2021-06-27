<?php

Class Dbtest extends CI_Controller {
    
    public function index() {
        $query = $this->db->get("account");
        print_r($query);
    }
}


?>