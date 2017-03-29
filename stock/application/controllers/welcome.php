<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

               var  $title=" Welcome   to  System  Service ";
               
               public function __construct() {
                   parent::__construct();
                     $this->load->model("user_model");
               }
               
	public function index()
	{
		//$this->load->view('welcome_message');
                          $data["title"]=" Login to Service ";
                           $sess_data=array(
                          "sess_us"=>"",
                          "sess_ps"=>"",
                          "sess_level"=>"",  //1=admin, 2=user
                          "sess_name"=>"",
                          "sess_lastname"=>"",
                          "sess_id_department"=>"",
                           "sess_logon"=>"",  
                           "sess_point"=>"",
                      );
                          $this->session->unset_userdata($sess_data);
                          $this->session->sess_destroy();
                          $this->load->view("login",$data);
	}
        public function checkauthen()
        {
             $data{"title"}=$this->title;
              $us=trim($this->input->get_post("user"));
             //echo br();
               $ps= md5( trim($this->input->get_post("password")) );
             //echo br();
             $tb="tb_member";
             $query=$this->db->get_where($tb,array("us"=>$us,"ps"=>$ps,"authentic"=>1));
              $check_num=$query->num_rows();
             if( $check_num == 1 )
                 {
                     $row=$query->row();
                      $sess_data=array(
                          "sess_us"=>$row->us,
                          "sess_ps"=>$row->ps,
                          "sess_level"=>$row->level,  //1=admin, 2=user
                          "sess_name"=>$row->name,
                          "sess_lastname"=>$row->lastname,
                          "sess_id_department"=>$row->id_department,
                           "sess_logon"=>1,  
                          "sess_point"=>$row->point,
                          
                      );
                      $this->session->set_userdata($sess_data);
                      //echo $this->session->userdata("sess_us"); //ทดสอบการเรียกใช้งาน
                       //$this->session->userdata("sess_level");
                      $data["sess_point"]=  $this->session->userdata("sess_point");
                      
                      
                     //$data["content"]="Loading ...";
                      $data["content"]="content";
                     $data["sess_level"]=$this->session->userdata("sess_level");
                              
                      $this->load->view("home",$data);
                 }
                 else{
                     redirect("welcome/index");
                 }
          
        }
        
        public function  mainconent() //หน้าหลักโปรแกรม
        {
                    // $data["content"]="content";
                     $data["sess_level"]=$this->session->userdata("sess_level");
                              
                      $this->load->view("content",$data);
        }
//http://localhost/stock/index.php/welcome/manageuser
      public    function manageuser()
      {
                   //  $data["content"]="admin/manageuser";
                     $data["sess_level"]=$this->session->userdata("sess_level");
                       $tb="tb_member";
                      $data["query"]=$this->db->get($tb);        
                      $this->load->view("admin/manageuser",$data);
      }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */