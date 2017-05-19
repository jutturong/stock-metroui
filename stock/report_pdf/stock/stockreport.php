<?php

require_once("pdf_class.php"); //class PDF
//require_once("query_diagnosis.php");
//require_once 'querydb.php';
//require_once("query_stock.php");



//---------------------------------------------PAGE1-------------------------------------


##---- PDF ---
//$pdf=new PDF('L','mm','A4');  //ของเดิม 
$pdf=new PDF('P','mm',array(75,165));  //ของเดิม 
$pdf->SetMargins( 25,25,5 );
$pdf->AddPage();
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวธรรมดา กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','','angsa.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','B','angsab.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','I','angsai.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','BI','angsaz.php');

$x_absolute=25; //พิกัด X
$y_absolute=20; //พิกัด Y
$r=7;  //ระยะห่าง

##-- PAGE 1   
#
##---- เลขหน้า ----------
/*
    $pdf->SetFont('angsana','',12);
    $pdf->setXY( $x_absolute + 160 , $y_absolute - 10 );
    $pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'Page  1' )  );
 */
##---- เลขหน้า ---------- 
    
    

##-- head table -----




/*
$pdf->setXY( $x1 + 180 , $y1  );
$pdf->SetFont('angsana','',14);


//$pdf->Cell(  0  ,  0 , iconv( 'UTF-8','cp874' , " วันที่...".number_format(date("d"))."....เดือน....".date_thai_cut(date("m"))."...พ.ศ. ...".thai_year(date("Y")).".... "  ));
$pdf->Cell(  0  ,  0 , iconv( 'UTF-8','cp874' , "วันที่ "  ));
//------------------ จบบรรทัด-----------------------------------------




//------------------ ขึ้นบรรทัดใหม่-----------------------------------------


$pdf->setXY( $x1 , $y1 + 5 );
$pdf->SetFont('angsana','',14);


$pdf->Cell(  40  ,  10 , iconv( 'UTF-8','cp874' , " รหัสสินค้า "  ),LRT,1,'C',false);
$pdf->setXY( $x1 , $y1 + 15 );
$pdf->Cell(  40  ,  10 , iconv( 'UTF-8','cp874' , "  "  ),LRB ,1,'C',false);




$pdf->setXY( $x1+40 , $y1 + 5 );
$pdf->SetFont('angsana','',14);




$pdf->Cell(  60  ,  10 , iconv( 'UTF-8','cp874' , " ชื่อรายการสินค้า "  ),RT,1,'C',false);
$pdf->setXY( $x1+40 , $y1 + 15 );
$pdf->Cell(  60  ,  10 , iconv( 'UTF-8','cp874' , "  "  ),RB,1,'C',false);


$pdf->setXY( $x1+30+20+50 , $y1 + 5 );
$pdf->SetFont('angsana','',14);










$pdf->setXY( $x1+30+20+50 , $y1 + 5 );
$pdf->SetFont('angsana','',14);


$pdf->Cell(  100  ,  10 , iconv( 'UTF-8','cp874' , " จำนวนชิ้น "  ),RT,1,'C',false);
$pdf->setXY( $x1+30+20+50 , $y1 + 15 );
$pdf->Cell(  100  ,  10 , iconv( 'UTF-8','cp874' , "  "  ),RB,1,'C',false);



$pdf->setXY( $x1+30+20+50 + 100 , $y1 + 5 );
$pdf->SetFont('angsana','',14);


$pdf->Cell(  25  ,  10 , iconv( 'UTF-8','cp874' , " ราคา/บาท "  ),RT,1,'C',false);
$pdf->setXY( $x1+30+20+50 + 100 , $y1 + 15 );
$pdf->Cell(  25  ,  10 , iconv( 'UTF-8','cp874' , "  "  ),RB,1,'C',false);



$pdf->setXY(  $x1+30+20+50 + 100+ 25 , $y1 + 5 );
$pdf->SetFont('angsana','',14);



//------------------จบบรรทัด-----------------------------------------

//------------  เนื้อหา ---------------

$pdf->setXY( $x1 , $y1 + 20 );
$pdf->Cell(  40  ,  15 , iconv( 'UTF-8','cp874' , "  SKU: 1060891 "  ),LRB ,1,'C',false);


$pdf->setXY( $x1 + 40 , $y1 + 20 );
$pdf->Cell(  60  ,  15 , iconv( 'UTF-8','cp874' , "  ชุดเครื่องมือช่าง 77 ชิ้นชุด MATALL "  ),RB,1,'C',false);



$pdf->setXY( $x1 + 40 + 60, $y1 + 20 );
$pdf->Cell(  100  ,  15 , iconv( 'UTF-8','cp874' , "  2 "  ),RB,1,'C',false);




$pdf->setXY( $x1 + 40 + 60+100 , $y1 + 20 );
$pdf->Cell(  25  ,  15 , iconv( 'UTF-8','cp874' , " 700 "  ),RB,1,'C',false);
*/


//-------------หัวรายการ-------------------------
$x1=10;$y1=10;
$pdf->SetFont('angsana','B',11);


$pdf->setXY( $x1 , $y1  );
$pdf->Cell(  0  ,  0 , iconv( 'UTF-8','cp874' , "  ใบเสร็จรับเงิน/ใบกำกับภาษี(อย่างย่อ) "  ));


$pdf->SetFont('angsana','',10);

$pdf->setXY( $x1 , 6 );
$pdf->Cell(  40  ,  15 , iconv( 'UTF-8','cp874' , "  TAX ID :  "  ) ,0,'C',false);

//-------- query mysql -------------------------------
/*
   $str="  SELECT  *  FROM  $tb     "
              . "  LEFT  JOIN   $tb_member   ON    $tb.id_member=$tb_member.id_member  "
              . " WHERE    $tb.id_member='$sess_id_member'    AND   $tb.timerecord='$sess_timerecord'  ;   ";
 */
  $tb_member= "`tb_member`";    //  id_member    
   //echo  "<br>";
//AND   timerecord='$sess_timerecord' 
   $str=" SELECT * FROM `tb_member` WHERE `id_member`=1   ";
   $query=mysql_query($str);
   $row=mysql_fetch_object($query); 
  $name=$row->name;  // ชื่อ
  $lastname=$row->lastname; //นามสกุล
  
$pdf->setXY( $x1 , 6+4 );
$pdf->Cell(  40  ,  15 , iconv( 'UTF-8','cp874' , "  ลูกค้า : ".$name."  ".$lastname  ) ,0,'C',false);

$pdf->setXY( $x1 , 6+4+4 );
$pdf->Cell(  40  ,  15 , iconv( 'UTF-8','cp874' , "  DATE : ".$sess_timerecord  ) ,0,'C',false);

/*
$pdf->setXY( $x1+20   , 6+4+4 );
$pdf->Cell(  40  ,  15 , iconv( 'UTF-8','cp874' , "  TIME : 18:02 "  ) ,0,'C',false);
  */

/*
$pdf->setXY( $x1   , 6+4+4+4 );
$pdf->Cell(  40  ,  15 , iconv( 'UTF-8','cp874' , "  Cashier : พรพรรณ  ศรีจิตร์ "  ) ,0,'C',false);
  */

/*
$pdf->setXY( $x1+2  , 30 );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' , "จำนวน"  ),LTBR,1,'C',false);
*/

$pdf->setXY( $x1+2   , 30 );
$pdf->Cell(  30  ,  6 , iconv( 'UTF-8','cp874' , " รายการสินค้า "  ),LTBR,0,'C',false);
  
$pdf->setXY( $x1+2+30  , 30 );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' , "จำนวน"  ),LTBR,1,'C',false);

$pdf->setXY( $x1+2 +15+30  , 30 );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' , " ราคา "  ),LTRB,0,'C',false);

/*
$pdf->setXY( $x1+2 +15+30  , 30 );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' , " รวม "  ),LTRB,0,'C',false);
*/

//-------------หัวรายการ-------------------------


//--------------- เนื้อหารายการสินค้า--------------------
//$a=0;
   $tb_product="tb_product";
  $tb_bill="`tb_billing`"; // id_member
  /*
    $sess_timerecord=$_REQUEST["sess_timerecord"]; //เวลาในการเรียก query
  //echo "<br>";
    $sess_id_member=$_REQUEST["sess_id_member"];  // id  ของสมาชิกสำหรับ การ query 
 // echo "<br>";
   */
  
  //WHERE   timerecord='$sess_timerecord'  AND  id_membe='$sess_id_member'  
  $strbill="  select  *  from   $tb_bill  where  id_member=$sess_id_member   and  timerecord='$sess_timerecord'     ";
  $querybill=mysql_query($strbill);
 
  $yy=30;
  while( $row=mysql_fetch_object($querybill)  )  //ใช้  while กับ product
    {
      //$a++;
      $yy += 6;
      //  $id_product=$row->id_product;  //จำนวนชิ้นของสินค้าที่ซื้อเพื่อเอาไปออกบิล
    //    $prices=$row->prices;  //จำนวนชิ้น
     
   //       $prices=$row->prices;  //จำนวนชิ้น
   //          $str_product="  SELECT  *  FROM  tb_product  $tb_product   WHERE  id_product=$id_product   ";
     //            $query_product=mysql_query($str_product);
     //            $row= mysql_fetch_object( $query_product );
    //              $price_product=$row->price_product;
      //            $name_product=$row->name_product;    //ชื่อสินค้า
      //            $total_pay=$price_product *  $prices; //รวมราคาสินค้า
   
 /*     
$pdf->setXY( $x1+2  , $yy );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' ,  ''    ),LRB,1,'C',false);
*/
      
/*
$pdf->setXY( $x1+2 +15 , 30+6 );
$pdf->Cell(  30  ,  6 , iconv( 'UTF-8','cp874' , '' ),LBR,1,'L',false);

 
$pdf->setXY( $x1+2 +15+30 , 30+6 );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' , '' ),LBR,1,'C',false);
*/
 
      //------รายการสินค้า--------
      $id_product=$row->id_product;
      $strproduct="select  *  from  $tb_product  where  id_product=$id_product ";
      $queryproduct=mysql_query($strproduct);
      $row2=mysql_fetch_object($queryproduct);
      $name_product=$row2->name_product;  // ขื่อสินค้า
     // $str_name_product=substr($name_product,10);
      $price_product=$row2->price_product; // ราคาสินค้า
      $code_product=$row2->code_product;  //รหัสินค้า
      
      $pdf->setXY( $x1+2 , $yy );
      $pdf->SetFont('angsana','',9);
     // $pdf->Cell(  30  ,  6 , iconv( 'UTF-8','cp874' , $name_product  )  ,LBR,1,'L',false);
     
     
      $pdf->Cell(  30  ,  6 , iconv( 'UTF-8','tis620' , $code_product )  ,LBR,1,'L',false);
      
      //------จำนวนสินค้า----------
      $prices=$row->prices;
    $pdf->setXY( $x1+2+30  , $yy );
    $pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' ,  $prices   ),LRB,1,'C',false);  

    //--------ราคา---------------
     $total_price=$price_product*$prices;  // จำนวนเงินรวม
    $pdf->setXY( $x1+2+30+15 , $yy );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' , $total_price ),LBR,1,'C',false);
    
          $total_max_price += $total_price;
    }

    $pdf->setXY( $x1+2+30+15 , $yy+6 );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' , $total_max_price ),LBR,1,'C',false);  

//--------------- เนื้อหารายการสินค้า--------------------


//------------ หางโปรแกรม 1--------------------
$pdf->setXY( $x1+1  ,$yy +6+7);
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' ,     "TAX Invoice (ABB) # 111882"  ),0,'C',false);

$pdf->setXY( $x1+1  , $yy +6+7+3);
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' ,     "Cash (THA) : ".$total_max_price." Baht "  ),0,'C',false);

$pdf->setXY( $x1+1  , $yy +6+7+3+3);
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' ,     "Change (THA) : ".$total_max_price." Baht "  ),0,'C',false);

//------------ หางโปรแกรม 2--------------------
$pdf->setXY( $x1+1  , $yy +6+7+3+3+6 );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' ,     "Summer Paradise"  ),0,'C',false);

$pdf->setXY( $x1+27  , $yy +6+7+3+3+6+3 );
$pdf->Cell(  25  ,  6 , iconv( 'UTF-8','cp874' ,     " Hotline 7.00 - 17.00 "  ),0,'C',false);

$pdf->setXY( $x1+27  , $yy +6+7+3+3+6+3+3 );
$pdf->Cell(  25  ,  6 , iconv( 'UTF-8','cp874' ,     " จันทร์ - ศุกร์  ( 8.30 - 17.30 น. )  "  ),0,'C',false);

//------ image QR code
$pdf->Image('static_qr_code_without_logo.png',$x1-2, 30 +6+7+3+3+6+3+3+3+2 ,30,0,'','');

/*
 ##------------------------- icon logo ------------------
//$pdf->Image('../icon/px.jpeg',10,12,20,0,'','');//Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])
$pdf->Image('../icon/Logo_cleft.jpg',40,270,20,0,'','');//Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])
$pdf->Image('../icon/med.gif',105,270,13,0,'','');//Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])
$pdf->Image('../icon/kku.gif',170,270,6,0,'','');//Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])
##------------------------- icon logo ------------------
 */


$pdf->setXY( $x1+25  , $yy +6+7+3+3+6+3+3+3+2+5 );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' ,     "PLEASE SCAN THIS CODE"  ),0,'C',false);

$pdf->setXY( $x1+25  , $yy +6+7+3+3+6+3+3+3+2+5+3 );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' ,     "WITH YOUR MOBILE PHONE"  ),0,'C',false);

$pdf->setXY( $x1+25  , $yy +6+7+3+3+6+3+3+3+2+5+3+3 );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' ,     "TO SEE MORE PROMOTIONS"  ),0,'C',false);


$pdf->setXY( $x1+25  , $yy +6+7+3+3+6+3+3+3+2+5+3+3+3 );
$pdf->Cell(  15  ,  6 , iconv( 'UTF-8','cp874' ,     "ON OUR FACEBOOK"  ),0,'C',false);




$pdf->Output();

     
     ?>