<?php

class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
    }
    function  authen()
    {

    }
    
    function category() //แสดงหมวดหมู่สินค้า
    {
             $tb="tb_category";
            // $this->db->order_by("id_category","desc");
             return  $this->db->get($tb);
    }
    
    
}

?>
