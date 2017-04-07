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
       //http://localhost/stock/index.php/welcome/mainconent 
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
      
      public function   load_manageuser()  //load form management user 
      {
             //  echo  "T";
             $id_member=trim($this->uri->segment(3));
            //echo br();
                $tb="tb_member";
               if(  $id_member > 0 )
               {
                       $query=$this->db->get_where($tb,array("id_member"=>$id_member));
                       $data["row"]=$query->row();
                        $this->load->view("admin/update_user",$data);    
               }
          
      }
      
      public function  form_product() //เพิ่มรายการสินค้า
      {
           $data["title"]=$this->title;
           //echo "T";
           $this->load->view("admin/form_product",$data);
      }
      
      public function update_user()
      {
           //echo 't';
             $id_member=trim($this->input->get_post("id_member"));
          //echo br();
            $us=trim($this->input->get_post("us"));
          // echo br();
             $ps=md5(trim($this->input->get_post("ps")));
           //echo br();
             $name=trim($this->input->get_post("name"));
           //echo  br();
             $lastname=trim($this->input->get_post("lastname"));
           //echo  br();
             $level=trim($this->input->get_post("level"));
           //echo  br();
             $authentic=trim($this->input->get_post("authentic"));
           //echo br();
             $point=trim($this->input->get_post("point"));
           //echo br();

          if( $this->input->get_post("ps") == "" )
          {
           $data=array(
               "us"=>$us,
              // "ps"=>$ps,
               "name"=>$name,
               "lastname"=>$lastname,
               "level"=>$level,
               "authentic"=>$authentic,
               "point"=>$point,
           );
          }
          elseif( $this->input->get_post("ps") != "" )
              {
               $data=array(
               "us"=>$us,
               "ps"=>$ps,
               "name"=>$name,
               "lastname"=>$lastname,
               "level"=>$level,
               "authentic"=>$authentic,
               "point"=>$point,
           );
              }
           
             $tb="tb_member";
             $this->db->where("id_member",$id_member);
             $ck_update=$this->db->update($tb,$data);
           if( $ck_update  )
           {
               echo "1";
           }else
           {
               echo "0";
           }
             
           
      }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */