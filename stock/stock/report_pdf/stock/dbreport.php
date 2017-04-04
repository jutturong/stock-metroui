<?php

require_once("pdf_class.php"); //class PDF
//require_once("query_diagnosis.php");
require_once 'querydb.php';



//---------------------------------------------PAGE1-------------------------------------


##---- PDF ---
$pdf=new PDF('L','mm','A4');  //ของเดิม 
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


$x1=30;$y1=20;

$pdf->setXY( $x1 , $y1  );
$pdf->SetFont('angsana','I',16);


$pdf->Cell(  0  ,  0 , iconv( 'UTF-8','cp874' , "  ออกใบเสร็จรายการชำระสินค้า "  ));



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

/*
$pdf->Cell(  20  ,  10 , iconv( 'UTF-8','cp874' , " หมายเหตุ "  ),RT,1,'C',false);
$pdf->setXY( $x1+30+20+50 + 100+ 25 , $y1 + 15 );
$pdf->Cell(  20  ,  10 , iconv( 'UTF-8','cp874' , "  "  ),RB,1,'C',false);
*/

//------------------จบบรรทัด-----------------------------------------

//------------  เนื้อหา ---------------
//$pdf->Cell(  40  ,  10 , iconv( 'UTF-8','cp874' , " รหัสสินค้า "  ),LRT,1,'C',false);
$pdf->setXY( $x1 , $y1 + 20 );
$pdf->Cell(  40  ,  15 , iconv( 'UTF-8','cp874' , "  SKU: 1060891 "  ),LRB ,1,'C',false);

//$pdf->Cell(  60  ,  10 , iconv( 'UTF-8','cp874' , " ชื่อรายการสินค้า "  ),RT,1,'C',false);
$pdf->setXY( $x1 + 40 , $y1 + 20 );
$pdf->Cell(  60  ,  15 , iconv( 'UTF-8','cp874' , "  ชุดเครื่องมือช่าง 77 ชิ้นชุด MATALL "  ),RB,1,'C',false);


//$pdf->Cell(  100  ,  10 , iconv( 'UTF-8','cp874' , " จำนวนชิ้น "  ),RT,1,'C',false);
$pdf->setXY( $x1 + 40 + 60, $y1 + 20 );
$pdf->Cell(  100  ,  15 , iconv( 'UTF-8','cp874' , "  2 "  ),RB,1,'C',false);



//$pdf->Cell(  25  ,  10 , iconv( 'UTF-8','cp874' , " ราคา "  ),RT,1,'C',false);
$pdf->setXY( $x1 + 40 + 60+100 , $y1 + 20 );
$pdf->Cell(  25  ,  15 , iconv( 'UTF-8','cp874' , " 700 "  ),RB,1,'C',false);


      $pdf->Output();

     
     ?>