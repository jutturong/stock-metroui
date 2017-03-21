<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
               var  $title=" Welcome   to  System  Service ";
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
                              
                      $this->load->view("home",$data);
                 }
                 else{
                     redirect("welcome/index");
                 }
             //$this->load->view("home",$data);
        }
             
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */