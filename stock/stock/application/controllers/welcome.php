<?php  ob_start(); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

               var  $title=" Welcome   to  System  Service ";
               
               public function __construct() {
                   parent::__construct();
                     $this->load->model("user_model");
                     $this->load->library('upload');
                     $this->load->helper(array('form', 'url'));
                     //$this->load->helper('date');
                     //$this->load->helper('form');
                     
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
             $data["title"]=$this->title;
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
                          "sess_id_member"=>$row->id_member,
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
                    // echo  $this->session->userdata("sess_logon");
                      $data["sess_point"]=  $this->session->userdata("sess_point");
                      
                      
                     //$data["content"]="Loading ...";
                      $data["content"]="content";
                     $data["sess_level"]=$this->session->userdata("sess_level");
                     
                     $data["sess_id_member"]=$this->session->userdata("sess_id_member");
                     
                      $data["sess_logon"]=$this->session->userdata("sess_logon");
                              
                      //$this->load->view("home",$data);
                     redirect("welcome/home");
                 }
                 else{
                     redirect("welcome/index");
                 }
          
        }
        
        public function home()
        {
                    if(      $this->session->userdata("sess_logon")  == 1  )   
                    {    
                         $data["sess_point"]=  $this->session->userdata("sess_point");


                                //$data["content"]="Loading ...";
                                $data["title"]=$this->title;
                                 $data["content"]="content";
                                $data["sess_level"]=$this->session->userdata("sess_level");

                                //------------ บันทึกข้อมูลแล้วให้ไปโหลดรายการสินค้าจากหน้า admin --------------------------
                                //1..    http://localhost/stock/index.php/welcome/home/welcome/load_product  //บันทึกข้อมูลสำเร็จให้โหลดข้อมูลหน้าสินค้า
                                //2.    http://localhost/stock/index.php/welcome/load_product   //โหลดสินค้าหลังจากบันทึกข้อมูลเสร็จ
                                /*  $('#content').load('<?=base_url()?>index.php/welcome/form_product');   */
                                 $data["uri3"]=trim($this->uri->segment(3));
                                 $data["uri4"]=trim($this->uri->segment(4));
                                 
                                 $this->load->view("home",$data);
                    }   
                    else
                    {
                             redirect("welcome/index");
                    }
        }
        
       //http://localhost/stock/index.php/welcome/mainconent 
        public function  mainconent() //หน้าหลักโปรแกรม
        {
            if(      $this->session->userdata("sess_logon")  == 1  )   
                    {    
                 
                     $data["sess_level"]=$this->session->userdata("sess_level");
                              
                      $this->load->view("content",$data);
                    }
                         else
                    {
                             redirect("welcome/index");
                    }
        
        }
        
        public function search_product_front() //ค้นหาสินค้าจากระบบการค้าหา
        {
              if(      $this->session->userdata("sess_logon")  == 1  )   
               {   
                     $id_product=trim($this->uri->segment(3));
                    // echo br();
                     if( $id_product > 0  )
                     {
                            $tb="tb_product";
                            $data["q"]=$this->db->get_where($tb,array("id_product"=>$id_product));
                           $data["num"]= $data["q"]->num_rows();
                           if( $data["num"]  >  0  )
                           {
                                $this->load->view("subcontent",$data);
                           }
                           
                     }
                   
              } else
                    {
                             redirect("welcome/index");
                    }
        }
        
        public function subcontent() //เลือกรายการย่อยของโปรแกรม
        {
              if(      $this->session->userdata("sess_logon")  == 1  )   
               {   
                       $id_category=trim($this->uri->segment(3));
                       //$data["id_pro"]
                        $tb="tb_product";
                       $this->db->order_by("id_product","desc");
                       $data["q"]=$this->db->get_where($tb,array("id_category"=>$id_category));
                      $data["num"]= $data["q"]->num_rows();
                      $this->load->view("subcontent",$data);
                }
                         else
                    {
                             redirect("welcome/index");
                    }
        }
//http://localhost/stock/index.php/welcome/manageuser
      public    function manageuser()
      {         
           if(      $this->session->userdata("sess_logon")  == 1  )   
                    {    
                
                     $data["sess_level"]=$this->session->userdata("sess_level");
                       $tb="tb_member";
                      $data["query"]=$this->db->get($tb);        
                      $this->load->view("admin/manageuser",$data);
                 }
                         else
                    {
                             redirect("welcome/index");
                    }
      }
      
      public function   load_manageuser()  //load form management user 
      {
         
            if(      $this->session->userdata("sess_logon")  == 1  )   
                    {    
           
             $id_member=trim($this->uri->segment(3));
          
                $tb="tb_member";
               if(  $id_member > 0 )
               {
                       $query=$this->db->get_where($tb,array("id_member"=>$id_member));
                       $data["row"]=$query->row();
                        $this->load->view("admin/update_user",$data);    
               }
          
                  }
                         else
                    {
                             redirect("welcome/index");
                    }
      }
      
      public function  form_product() //เพิ่มรายการสินค้า
      {
              if(      $this->session->userdata("sess_logon")  == 1  )   
                    {    
                          $data["title"]=$this->title;
        
                           $this->load->view("admin/form_product",$data);
              }
                         else
                    {
                             redirect("welcome/index");
                    }
      }
      
      public function update_user()
      {
          
             if(      $this->session->userdata("sess_logon")  == 1  )   
                    {    
             $id_member=trim($this->input->get_post("id_member"));
       
            $us=trim($this->input->get_post("us"));
      
             $ps=md5(trim($this->input->get_post("ps")));
         
             $name=trim($this->input->get_post("name"));
       
             $lastname=trim($this->input->get_post("lastname"));
          
             $level=trim($this->input->get_post("level"));
         
             $authentic=trim($this->input->get_post("authentic"));
        
             $point=trim($this->input->get_post("point"));
          

          if( $this->input->get_post("ps") == "" )
          {
           $data=array(
               "us"=>$us,
            
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
                         else
                    {
                             redirect("welcome/index");
                    }
           
      }
      
      //  localhost/stock/index.php/welcome/load_category
      public function load_category()//โหลดรายการหมวดหมู่สินค้า
      {
          
               if(      $this->session->userdata("sess_logon")  == 1  )   
                   {    
             $tb="tb_category";
            $data["q"]=$this->db->get($tb);
            $this->load->view("admin/tb_category",$data);
                   }
                         else
                    {
                            redirect("welcome/index");
                   }
      }
      public function   add_category() //เพิ่มรายการหมวดหมู่สินค้า
      {
               if(      $this->session->userdata("sess_logon")  == 1  )   
                    {    
                     $category=trim($this->input->get_post("category"));
                     
                 // echo br();
                  
                  $data=array(
                      "category"=>$category,
                      "allow"=>1,
                  );
                  $tb="tb_category";
                  //$this->db->insert('mytable', $data); 
                  $ck=$this->db->insert($tb,$data);
                  if( $ck )
                  {
                      echo 1;
                  }else
                  {
                      echo 0;
                  }
                  
                   }
                         else
                    {
                             redirect("welcome/index");
                    }
             
      }
      
      public function del_category() //block category
      {
            if(      $this->session->userdata("sess_logon")  == 1    )   
                    {
                        $id_category=trim($this->input->get_post("id_category"));
                           $tb="tb_category";
                           $data=array(
                               "allow"=>0
                           );
                           $this->db->where("id_category",$id_category);
                          $ck=  $this->db->update($tb,$data);
                          if( $ck )
                          {
                              echo 1;
                          }
                          else
                          {
                              echo 0;
                          }
                    }  
                    else
                    { 
                             redirect("welcome/index");
                    }
      }

      public function update_category()//update category
      { 
               if(      $this->session->userdata("sess_logon")  == 1    )   
                    {   
                       $up_id_category=$this->input->get_post("up_id_category");
                     //echo br();
                      $up_category=trim($this->input->get_post("up_category"));
                     //echo br();
                       $allow=trim($this->input->get_post("allow"));
                       if( $allow == "" )
                       {
                           $allow=0;
                       }
                     //echo br(); 
                     $tb="tb_category";
                     $data=array(
                         "category"=>$up_category,
                         "allow"=>$allow,
                     );
                         $this->db->where("id_category", $up_id_category );
                         $ck=$this->db->update($tb,$data);
                        
                         if( $ck )
                         {
                             echo 1;
                         }else
                         {
                             echo 0;
                         }
                         
                 }  
                    else
                    { 
                             redirect("welcome/index");
                    }
                     
      }
      
      public function   form_category() //โหลด form เพื่อทำการ update category
      {
         // echo "T";     
              if(      $this->session->userdata("sess_logon")  == 1    )   
                    {   
                        $id_category=trim($this->uri->segment(3));
                        $data["id_category"]=trim($this->uri->segment(3));
                      //echo br();
                       $tb="tb_category";
                       $q=$this->db->get_where($tb,array("id_category"=>$id_category));
                       $num=$q->num_rows();
                       if( $num > 0 )
                       {
                            $row=$q->row();
                           $data["category"]=$row->category;
                           $data["allow"]=$row->allow;
                            //echo br(); 
                           $this->load->view("admin/form_update_category",$data);
                       }
                   }  
                    else
                    {
                             redirect("welcome/index");
                    }
                   
                    
      }
      
      public function menu_category()
      {
             if(      $this->session->userdata("sess_logon")  == 1  )   
                    {    
            //$tb="tb_category";
            //$data["q"]=$this->db->get($tb);
             $this->load->view("menu_category");
                 }
                         else
                    {
                             redirect("welcome/index");
                    }
      }
      //---- ลบรายการสินค้า
      public  function  del_product()
      {
                if(      $this->session->userdata("sess_logon")  == 1  )   
                    {    
      
                             $id_product=trim($this->input->get_post("id_product"));
                           // echo br();
                            if(  $id_product > 0 )
                            {
                                  $tb="tb_product";
                                  $this->db->where("id_product",$id_product);
                                  $ck=$this->db->delete($tb);
                                  if( $ck )
                                  {
                                      echo 1;
                                  }
                                  else
                                  {
                                      echo 0;
                                  }
                            }
                    }
                    else
                    {
                             redirect("welcome/index");
                    }
      }
        //http://localhost/stock/index.php/welcome/search_product
      public function search_product() //ค้นหารายการสินค้า
      {
             $id_category=  $this->uri->segment(3);
            if( $id_category > 0 )
            {
                   $tb="tb_product";
                   $data["q"]=$this->db->get_where($tb,array("id_category"=>$id_category));
                   $this->load->view("sr_product",$data);
            }
          
      }
      
    //http://localhost/stock/index.php/welcome/json_product
      public function json_product()
      {
                 $tb="tb_product";
                 $q=$this->db->get($tb);
                 //   foreach($q->result() as $row)
                 $rows=array();
                 foreach($q->result() as $row)
                 {
                     $rows[]=$row;
                 }
              echo  json_encode($rows);
               
      }
      
      //---- เพิ่มรายการสินค้า----------
      public  function insert_product()
      {
            if(      $this->session->userdata("sess_logon")  == 1  )   
                    {    
                
                $id_category=trim($this->input->get_post("id_category"));
                
                $fname =  $_FILES['file_product']['name'];
            //echo br();
               $fsize=$_FILES['file_product']['size'];
            // echo br();
                 $ftmpname=$_FILES['file_product']['tmp_name'];
            // echo br();
               $ftypename=$_FILES['file_product']['type'];
             // echo br();     
                 if (   $_FILES['file_product']['type'] == "image/png"  ||   $_FILES['file_product']['type'] == "image/jpg"  ||   $_FILES['file_product']['type'] == "image/jpeg" ||   $_FILES['file_product']['type'] == "image/gif"  )
                     {

                                $source = $_FILES['file_product']['tmp_name'];
                                $target = "uploadfile/".$_FILES['file_product']['name'];
                                move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                $size = getImageSize( $target );

                                /*
                                $imgstr = "<p><img width=\"$size[0]\" height=\"$size[1]\" ";
                                $imgstr .= "src=\"$target\" alt=\"uploaded image\" /></p>";
                                print $imgstr;                             
                                 */
                     }
                     
                    $code_product=trim($this->input->get_post("code_product")); //รหัสสินค้า
               //echo br();
                 $name_product=trim($this->input->get_post("name_product")); //ชื่อสินค้า
             // echo br();
                $brand_product=trim($this->input->get_post("brand_product")); //แบรนด์สินค้า
              // echo br();
                $number_product=trim($this->input->get_post("number_product"));   //จำนวนชิ้น
               //echo br();
                 $price_product=trim($this->input->get_post("price_product"));  //ราคาสินค้า
                //echo br();
               $description_product=trim($this->input->get_post("description_product"));   //รายละเอียดสินค้า 
                  //echo br();
                  
                  $tb="tb_product";
                  $data=array(
                      "id_category"=>$id_category   ,
                      "product_name"=>$fname ,   //รูปภาพสินค้า    2
                      "code_product"=>$code_product,  //รหัสสินค้า   3
                      "name_product"=>$name_product,  //ชื่อสินค้า   4
                      "brand_product"=>$brand_product,  //แบรนด์สินค้า  5
                      "number_product"=>$number_product,  //จำนวนชิ้น   6
                      "price_product"=>$price_product,  //ราคาสินค้า   7
                      "description_product"=>$description_product, //รายละเอียดสินค้า    8
                  );
                  $ck=$this->db->insert($tb,$data);
             //     $ck=true;  //ทดสอบการ insert ข้อมูลสินค้า
                  if( $ck )
                      {
                           //echo 1;
                      /*    $('#content').load('<?=base_url()?>index.php/welcome/form_product');   */                
                              redirect("welcome/home/welcome/form_product");
                      }
                      elseif( !$ck )
                          {
                             //echo 0;
                             /*    $('#content').load('<?=base_url()?>index.php/welcome/form_product');   */
                            //   redirect("welcome/home/welcome/load_product");
                                redirect("welcome/home/welcome/form_product");
                          }
         }
                         else
                    {
                             redirect("welcome/index");
                    }
                    
      }
      
   //   http://localhost/stock/index.php/welcome/load_product
      public function   load_product()
      {
             if(    $this->session->userdata("sess_logon")  == 1  )   
                   {   
           $data["title"]=$this->title;
           //https://www.codeigniter.com/userguide2/database/active_record.html#select
           /*
            SELECT * FROM `tb_product` left join `tb_category` on `tb_product`.`id_category`=`tb_category`.`id_category` 
            
            */
                                   $tb_product="tb_product";
                                    $tbj1="tb_category";
                                    $this->db->join($tbj1,  $tb_product.".id_category=".$tbj1.".id_category","left"); 
                                    $this->db->order_by( $tb_product.".id_product" , "desc");
                                    $data["q_product"]=$this->db->get_where($tb_product,array($tbj1.".allow"=>1));
                                  
                                   //  $data["q_product"]= $this->db->query("  SELECT * FROM `tb_product` left join `tb_category` on `tb_product`.`id_category`=`tb_category`.`id_category`  ");
                                     $this->load->view("admin/tb_product",$data);
               }
           else
               {
                             redirect("welcome/index");
               }
                                     
      }
      
      public function load_form_update() //โหลดหน้า form เพื่อ update ข้อมูล
      {
              if(    $this->session->userdata("sess_logon")  == 1  )   
                   {   
                          $id_product=trim($this->uri->segment(3));
                          $data["id_product"]=trim($this->uri->segment(3));
                          $tb="tb_product";
                          if(  $id_product > 0  )
                              {
                                    $q=$this->db->get_where($tb,array("id_product"=>$id_product));
                                    $row=$q->row();
                                       $data["id_category_query"]=$row->id_category;
                                     //echo br();
                                      $data["product_name"]=$row->product_name;
                                     // echo br();
                                       $data["code_product"]=$row->code_product;
                                      //echo br();
                                       $data["name_product"]=$row->name_product;
                                      //echo br();
                                       $data["brand_product"]=$row->brand_product;
                                     // echo br();
                                       $data["number_product"]=$row->number_product;
                                   //   echo br();
                                       $data["price_product"]=$row->price_product;
                                      //echo br();
                                       $data["description_product"]=$row->description_product;
                                     // echo br();
                                       $num=$q->num_rows();
                                      if( $num > 0 )
                                      {
                                            //echo "test update";
                                          $this->load->view("admin/form_update_product",$data);
                                      }
                              }
                    }
           else
               {
                             redirect("welcome/index");
               }
      }
      
      public function update_product() //ปรับปรุงข้อมูล ผลิตภัณฑ์
      {
           if(    $this->session->userdata("sess_logon")  == 1  )   
                   {   
               
               $id_product=trim($this->input->get_post("id_product"));
               
                $id_category=trim($this->input->get_post("id_category"));
                
                $fname =  $_FILES['file_product']['name'];
            //echo br();
               $fsize=$_FILES['file_product']['size'];
            // echo br();
                 $ftmpname=$_FILES['file_product']['tmp_name'];
            // echo br();
               $ftypename=$_FILES['file_product']['type'];
             // echo br();     
                 if (   $_FILES['file_product']['type'] == "image/png"  ||   $_FILES['file_product']['type'] == "image/jpg"  ||   $_FILES['file_product']['type'] == "image/jpeg" ||   $_FILES['file_product']['type'] == "image/gif"  )
                     {

                                $source = $_FILES['file_product']['tmp_name'];
                                $target = "uploadfile/".$_FILES['file_product']['name'];
                                move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                $size = getImageSize( $target );

                                /*
                                $imgstr = "<p><img width=\"$size[0]\" height=\"$size[1]\" ";
                                $imgstr .= "src=\"$target\" alt=\"uploaded image\" /></p>";
                                print $imgstr;                             
                                 */
                     }
                     
                    $code_product=trim($this->input->get_post("code_product")); //รหัสสินค้า
               //echo br();
                 $name_product=trim($this->input->get_post("name_product")); //ชื่อสินค้า
             // echo br();
                $brand_product=trim($this->input->get_post("brand_product")); //แบรนด์สินค้า
              // echo br();
                $number_product=trim($this->input->get_post("number_product"));   //จำนวนชิ้น
               //echo br();
                 $price_product=trim($this->input->get_post("price_product"));  //ราคาสินค้า
                //echo br();
               $description_product=trim($this->input->get_post("description_product"));   //รายละเอียดสินค้า 
                  //echo br();
                  
                  $tb="tb_product";
                  
                if( strlen( $fname ) > 0  )  
                {     
                  $data=array(
                      "id_category"=>$id_category   ,
                      "product_name"=>$fname ,   //รูปภาพสินค้า    2
                      "code_product"=>$code_product,  //รหัสสินค้า   3
                      "name_product"=>$name_product,  //ชื่อสินค้า   4
                      "brand_product"=>$brand_product,  //แบรนด์สินค้า  5
                      "number_product"=>$number_product,  //จำนวนชิ้น   6
                      "price_product"=>$price_product,  //ราคาสินค้า   7
                      "description_product"=>$description_product, //รายละเอียดสินค้า    8
                  );
                       $this->db->where("id_product",$id_product);
                        $ck=$this->db->update($tb,$data);
                       if( $ck )
                       {
                           //echo 1;
                              redirect("welcome/home/welcome/form_product");
                       }
                       else
                       {
                           //echo 0;
                              redirect("welcome/home/welcome/form_product");
                       }
                }
                else
                {
                     $data=array(
                      "id_category"=>$id_category   ,
                    //  "product_name"=>$fname ,   //รูปภาพสินค้า    2
                      "code_product"=>$code_product,  //รหัสสินค้า   3
                      "name_product"=>$name_product,  //ชื่อสินค้า   4
                      "brand_product"=>$brand_product,  //แบรนด์สินค้า  5
                      "number_product"=>$number_product,  //จำนวนชิ้น   6
                      "price_product"=>$price_product,  //ราคาสินค้า   7
                      "description_product"=>$description_product, //รายละเอียดสินค้า    8
                  );
                      $this->db->where("id_product",$id_product);
                       $ck=$this->db->update($tb,$data);
                       if( $ck )
                       {
                           //echo 1;
                              redirect("welcome/home/welcome/form_product");
                       }
                       else
                       {
                           //echo 0;
                              redirect("welcome/home/welcome/form_product");
                       }
                }
                  
                  
                    }
                 else
                     {
                                   redirect("welcome/index");
                     }
      }
      
      public  function  billing()  //http://localhost/stock/index.php/welcome/billing
      {
        
          if(    $this->session->userdata("sess_logon")  == 1  )   
                   {   //--------- if
     
          
       /*
          //http://stackoverflow.com/questions/5345859/php-access-all-post-variables-into-an-array
        //  $pices=$_POST["pices"];
         // $products=$_POST["products"];
       foreach($products as  $key => $val )
       {
           echo  $key."=>".$val;
           echo br();
       }
       */
       
       /*
       foreach($pices as $key=>$val )
       {
            echo  $key."=>".$val;
           echo br();
       }
      */
          
         $shopping=array_combine($_POST["products"], $_POST["pices"]);
         $sess_id_member=$this->session->userdata("sess_id_member");
     
         $tb="tb_billing";
         date_default_timezone_set("Asia/Bangkok");    
         $date_record=date("Y-m-d H:s:00");
         foreach($shopping as $key=>$val)  //echo  $key."=>".$val;    // echo br();
         {
             $data=array(
                 "id_member"=>$sess_id_member,
                 "id_product"=>$key,
                 "prices"=>$val,
                 "timerecord"=>$date_record,
             );
             
             
             
                //-------- session การเรียกใช้งาน time---------
             
                $ck_bill=$this->db->insert($tb,$data);         
                if( $ck_bill  )
                {  
                    $tb2="tb_product";
                    $pro=$this->db->get_where($tb2,array("id_product"=>$key));
                    $row=$pro->row();
                     $number_product=$row->number_product;
                     $price_product=$row->price_product;  //ราคาสินค้า
                     $totol_point=$val * $price_product; //ตัดราคาจำนวนแต้มที่เหลือ
                  
                    if( $number_product >  0  &&  $number_product > $val  )
                    {
                          $exchange_products=$number_product-$val;
                           $data2=array(
                               "number_product"=>$exchange_products,
                                        );
                           $this->db->where("id_product",$key);
                           $ck_product=$this->db->update($tb2,$data2);
                           // จะตัดแต้มของผู้ซื้อของ
                           $tb_mem="tb_member";
                           $q_mem=$this->db->get_where($tb_mem , array("id_member"=>$sess_id_member ));            
                         $row=$q_mem->row();
                         $point=$row->point;  //แต้มปัจจุบันของ user
                         $current_point= $point -  $totol_point;  //ตัดแต้มของ user หลังจากซื้อของเสร็จ 
                         $data3=array(
                             "point"=>$current_point,
                         );
                         $this->db->where("id_member",$sess_id_member);
                         $ck_member=$this->db->update($tb_mem,$data3);                
                         if( $ck_product  &&  $ck_member )  
                            {
                                 //echo $date_record;
                             //-------- session การเรียกใช้งาน time---------
                                            $sess_time=array(
                                                "sess_timerecord"=>$date_record,
                                            );
                                            $this->session->set_userdata($sess_time);
                                         //   $this->session->userdata("sess_timerecord"); //ทดสอบการเรียกใช้งาน
                                  echo 1;
                                  //echo br();
                                  
                            }
                             
                    }
                }
                else
                { 
                    echo   "";
                   // echo br();
                   
                }
                
         }
         
                   }//------------end if----------
       
      }
        
}

?>
