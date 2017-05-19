<?php
require_once("../config.php");
require_once("pdf_class.php"); //class PDF
// require_once("stockreport.php");  // require สำหรับการทำ report PDF

class  query2 #// case 2 Non-compliance,ADR,Midication errors,DRPs
{
     protected  $str_="";
     //protected  $_tb="";
     protected  $query_="";
     protected   $num_ =0;
    public   function __construct() 
            {
        
    }
    public function query_($str)
    {
           $this->_str=$str;
           $this->query_  =  mysql_query( $this->_str ) or die('Can\'t  query MYSQL server!! ');
           return mysql_num_rows($this->query_);
    }
    public    function   date_eng_format($begin) //formdate date เปลี่ยนจาก วันที่ไทย เป็น eng
   {
       if( !empty($begin) )
        {
             $ex=explode('-',$begin);
              $y=$ex[2]-543;
              $m=$ex[1];
             $d=$ex[0];
             return   $y.'-'.$m.'-'.$d;
          }   
          else
          {
               return  '';
              }
    } 
    
    
    
}

//http://localhost/stock/report_pdf/stock/dbreport.php?sess_timerecord=2017-05-03%2017:02:00&sess_id_member=1

    $sess_timerecord=$_GET["sess_timerecord"]; //เวลาในการเรียก query
  //echo "<br>";
    $sess_id_member=$_GET["sess_id_member"];  // id  ของสมาชิกสำหรับ การ query 


            
            if( $sess_timerecord == "" )  
            {
                date_default_timezone_set("Asia/Bangkok");    
                $sess_timerecord=date("Y-m-d H:s:00");

            }


          if( $sess_timerecord != ""  &&  $sess_id_member != "" )
          {
              require_once("stockreport.php");  // require สำหรับการทำ report PDF
          }
  
              
 
   
    
   
   
   //  while($query=mysql_)
     
     /*
    while( $row=mysql_fetch_object($query) )  //ใช้  while กับ product
    {
       $id_product=$row->id_product;  //จำนวนชิ้นของสินค้าที่ซื้อเพื่อเอาไปออกบิล
     //echo  "<br>";
       $name=$row->name;  // ชื่อ
     //echo  "<br>";
      $lastname=$row->lastname; //นามสกุล
     //echo  "<br>";
      $prices=$row->prices;  //จำนวนชิ้น
             $str_product="  SELECT  *  FROM  tb_product  $tb_product   WHERE  id_product=$id_product   ";
         // echo  "<br>";
             $query_product=mysql_query($str_product);
             $row= mysql_fetch_object( $query_product );
              $price_product=$row->price_product;
             //echo  "<br>";
             $total_pay=$price_product *  $prices;
         //   echo  "<br>";  
    }
     */
     
  
     
  
?>

