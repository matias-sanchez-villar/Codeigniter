<?php

class Users extends CI_Model{
    function __construct(){
        $this->load->database();
    }
    public function Creater($Data){
        $this->db->insert('usuario', $Data);
    }
}