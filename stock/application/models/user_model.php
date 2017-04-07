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
             return  $this->db->get($tb);
    }
    
    
}

?>
