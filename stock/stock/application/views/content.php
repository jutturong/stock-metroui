


<script type="text/javascript">
    $(function(){
        $("#tab-control").tabcontrol();
        $("#panel").panel();
        
    });
</script>

<script type="text/javascript">  
   //$('#zoom_01').zoom();
   //$('.mobile-container').retina({zoomValue: 400});
   $('#zoom_01').retina({zoomValue: 400});
</script>


<script type="text/javascript">  
    function shopping() //หยิบของใส่ตระกร้า
    {
        //alert('t');
        $(function()
        {
              showMetroDialog('#dia_shopping'); 
        });
        
    }
 </script>
 
<!--  category -->
<!--     $this->load->model("user_model");  -->

<div class="tabcontrol" data-role="tabcontrol">
                            <ul class="tabs">
                                <!--
                                <li><a href="#frame_1_1">ชุดเครื่องมือช่าง</a></li>
                                <li><a href="#frame_1_2">ปูน</a></li>
                                <li class="disabled"><a href="#frame_1_3">เหล็ก</a></li> 
                                 <li ><a href="#frame_1_3">เหล็ก</a></li>
                                 -->
                                 <?php
                                       $q=$this->user_model->category();
                                         $b=0;
                                       foreach($q->result() as $row)
                                           {
                                               $id_category=$row->id_category;
                                               $category=$row->category;
                                               $b++;
                                               ?>
                                                         <li><a href="#frame_<?=$b?>">
                                                             <?=$category?>
                                                         </a></li>
                                              <?php
                                           }
                                   ?>
                            </ul>
                            <div class="frames bg-grayLight">
                                
                                <!--
                                <div class="frame" id="frame_1_1">
                                        1
                                </div>
    
                                <div class="frame" id="frame_1_2">
                                        2
                                </div>
                                                               
                                <div class="frame" id="frame_1_3">
                                        3
                                </div>
                               -->
                                
                                <?php
                                $q2=$this->user_model->category();
                                $a=0;
                                $tb2="tb_product";
                                 foreach($q->result() as $row)
                                           {
                                               $id_category=$row->id_category;
                                               $category=$row->category;
                                               $a++;      
                                               $this->db->order_by("id_product","desc");
                                               $q_sub1=$this->db->get_where($tb2,array("id_category"=>$id_category));
                                              $num2=$q_sub1->num_rows();
                                             //echo br();                                          
                                               ?>
                                                         <div class="frame" id="frame_<?=$a?>">
                                                            
             <!--  Panel -->
                               <?php
                               if( $num2 > 0 )
                               {
                                   
                                   foreach($q_sub1->result() as $row )
                                   {     
                                  // $row=$q_sub1->row();
                                   $id_product=$row->id_product;  // id
                                   $code_product=$row->code_product;  //รหัสสินค้า
                                   $product_name=$row->product_name; //ชื่อไฟล์
                                   $name_product=$row->name_product; //ชื่อสินค้า
                                   $description_product=$row->description_product;  //รายละเอียดสินค้า
                                   $number_product=$row->number_product;  //จำนวนชิ้น
                                   $price_product=$row->price_product;  //ราคาสินค้า
                                   $brand_product=$row->brand_product;  //แบรนสินค้า
                               ?>
                                    <div class="cell" >
                                           
                                            <div class="panel" data-role="panel">
                                                <div class="heading">
                                                    <?=nbs(1)?>
                                                    <span class="mif-shop mif-1x fg-white" ></span>
                                                    
                                                    <span class="title"><?=$code_product?></span>
                                                    
                                                </div>
                                                <div class="content padding10">
                                                    <span class="mif-cancel mif-1x fg-black"></span>
                                                    <b>
                                                     <?=$name_product?>     
                                                    </b>
                                                    <br><br>
                                                    <label>   แบรนด์ : <?=$brand_product?> </label>
                                                    
                                                    <div class="grid">
    <div class="row cells4">
        <div class="cell  colspan1">
            
                 <img  id="zoom_01"    srcset='<?=base_url()?>picture/20170119_1060891.jpg 1x, <?=base_url()?>uploadfile/<?=$product_name?> 2x'   class="icon" src="<?=base_url()?>uploadfile/<?=$product_name?>" style="width:150px;"   />
                                                 
        </div>
        <div class="cell  colspan2">
            <label>
                 <span class="mif-checkmark  prepend-icon fg-green mif-1x"></span>
                <b>  รายละเอียดของสินค้า </b></label>
            <br>
            <br>
                <?=$description_product?>
        </div>
        
        
        <div class="cell  colspan3">
            <label>สถานะ : 
                <?php
                   if( $number_product > 0 )
                   {
                ?>
                <span class="mif-checkmark  prepend-icon fg-green mif-1x"></span>
                <font color="green"> In Stock. </font>
                <?php
                   }
                   else
                   {
                ?>
                  <span class="mif-cross  prepend-icon fg-red mif-1x"></span>
                     สินค้าหมด
                <?php
                   }
                ?>
            </label>
            <br>
            <label>
                <font color="red">
                <b>฿</b>  <?=$price_product?>
                </font>
            </label>
            <br>
            <label>  จำนวนที่เหลือ :  <?=$number_product?> ชิ้น</label>
          
           <div class="input-control text" data-role="input" >
                                                       <!--<span class="mif-pin  prepend-icon fg-blue mif-1x"></span>-->
               ระบุจำนวน 
               <input type="text"     id="basket1<?=$id_product?>"   name="basket1<?=$id_product?>"   maxlength="4"    max="5"    number="true"   data-validate-func="required, number"       minlength="1"  style="  width:70px;text-align:center; " />
                                   
             </div>     
            
            <div class="input-control text" data-role="input" >
                   
            </div>
            
        </div>
        
        <div class="cell  colspan1">
            
            <!--
               <label class="switch">
                       <input type="checkbox" id="ck<?=$id_product?>"  onchange="javascript:
                                  // $('#basket1<?=$id_product?>').prop('readonly',false);
                                   var  pice=$('#basket1<?=$id_product?>').val();
                                var  number_product= parseInt(<?=$number_product?>);
                                var  ck=$('#ck<?=$id_product?>').val();
                                if(  pice  >  0  &&  ck >  0  &&   pice  <=  number_product  )
                                {
                                       
                                 
                                   //      var  oop1=' <div class=\'grid\'><div class=\'row\'><div class=\'row cells4>        <input type=\'hidden\'  name=\'sh_id<?=$id_product?>\'  id=\'sh_id<?=$id_product?>\'  value=\'<?=$id_product?> \'  > <span class=\'mif-checkmark  fg-green  mif-1x\'></span>    <?=$name_product?>   '   +  '<div class=\'input-control text  data-role=\'input\'   \'> <input type=\'text\'  readonly   value=\''  +  pice  +    '\'  style=\'width:70px;text-align:center;\'  \> ชิ้น     </div>    '   + '  <label class=\'input-control checkbox\'>   <input type=\'checkbox\'      id=\'ck_del<?=$id_product?>\'   name=\'ck_del<?=$id_product?>\'  value=\'<?=$id_product?>\'   > <span class=\'check\'></span> <span class=\'caption\'> <span class=\'mif-cross fg-red \'></span>  </span> </label>   </div>   </div></div>';    
                                   var   oop1='  <div  id=\'div<?=$id_product?>\'   class=\'grid\'  >   <span class=\'mif-chevron-right mif-2x \' style=\'color: green;\'></span>     <input type=\'hidden\'  name=\'sh_id<?=$id_product?>\'  id=\'sh_id<?=$id_product?>\'  value=\'<?=$id_product?> \'  >   <?=$name_product?>   <div class=\'input-control text  data-role=\'input\'   \'>  <input type=\'text\'  readonly   value=\''  +  pice  +    '\'  style=\'width:50px;text-align:center;\'  \>   /หน่วย   <button class=\'button\'   type=\'button\'  id=\'btn<?=$id_product?>\'   \'><span class=\'mif-cross   fg-red   \'></span></button>   </div>      </div>  ';
                                          $('#fr_shopping').append(oop1);
                                          
                                       
                                         
                                        
                                            
                                            $('#btn<?=$id_product?>').click(function()
                                            {
                                                  var  r=confirm(' คุณแน่ใจว่าต้องการลบหรือไม่ ');
                                                        if( r )
                                                        {
                                                            $('#div<?=$id_product?>').remove();

                                                        }
                                            });
                                           

                                }
                                else
                                {
                                   // alert('ตรวจสอบการระบุจำนวนอีกครั้ง');
                                }
                                                          " value="1">
                     
                                 <span class="check"></span>
                                 หยิบของลงตะกร้า
                   </label>
            -->
            
            <button class="button rounded large-button"  onclick=" javascript:
                                  // $('#basket1<?=$id_product?>').prop('readonly',false);
                                   var  pice=$('#basket1<?=$id_product?>').val();
                                var  number_product= parseInt(<?=$number_product?>);
                              //  var  ck=$('#ck<?=$id_product?>').val();
                            //    if(  pice  >  0  &&  ck >  0  &&   pice  <=  number_product  )
                                   if(  pice  >  0  &&     number_product > 0  )
                                {
                                       
                                 alert('หยิบของใส่ตะกร้าแล้ว');
                                   //      var  oop1=' <div class=\'grid\'><div class=\'row\'><div class=\'row cells4>        <input type=\'hidden\'  name=\'sh_id<?=$id_product?>\'  id=\'sh_id<?=$id_product?>\'  value=\'<?=$id_product?> \'  > <span class=\'mif-checkmark  fg-green  mif-1x\'></span>    <?=$name_product?>   '   +  '<div class=\'input-control text  data-role=\'input\'   \'> <input type=\'text\'  readonly   value=\''  +  pice  +    '\'  style=\'width:70px;text-align:center;\'  \> ชิ้น     </div>    '   + '  <label class=\'input-control checkbox\'>   <input type=\'checkbox\'      id=\'ck_del<?=$id_product?>\'   name=\'ck_del<?=$id_product?>\'  value=\'<?=$id_product?>\'   > <span class=\'check\'></span> <span class=\'caption\'> <span class=\'mif-cross fg-red \'></span>  </span> </label>   </div>   </div></div>';    
                                   var   oop1='  <div  id=\'div<?=$id_product?>\'   class=\'grid\'  >   <span class=\'mif-chevron-right mif-2x \' style=\'color: green;\'></span>     <input type=\'hidden\'  name=\'products[]\'    value=\'<?=$id_product?> \'  >   <?=$name_product?>   <div class=\'input-control text  data-role=\'input\'   \'>  <input type=\'text\'    name=\'pices[]\'    readonly   value=\''  +  pice  +    '\'  style=\'width:50px;text-align:center;\'  \>   /หน่วย   <button class=\'button cycle-button\'   type=\'button\'  id=\'btn<?=$id_product?>\'   \'><span class=\'mif-cancel   fg-red   \'></span></button>   </div>      </div>  ';
                                          $('#fr_shopping').append(oop1);

                                            $('#btn<?=$id_product?>').click(function()
                                            {
                                                  var  r=confirm(' คุณแน่ใจว่าต้องการลบหรือไม่ ');
                                                        if( r )
                                                        {
                                                            $('#div<?=$id_product?>').remove();

                                                        }
                                            });
                                      
                                      /*
                                   var  btn='  <button class=\’button\’>     ออกบิล  </button>  ';    
                                     $('#fr_shopping').append(btn);    
                                     */

                                }
                                else
                                {
                                    alert('ตรวจสอบการหยิบของใส่ตะกร้า');
                                }
                                                          "><span class="mif-shop fg-green"></span> ใส่ตะกร้า </button>

            
        </div>
       
         
    </div>
                                                          
                                                          
</div>
                                                      
                                                      
                                                      
                                                </div>
                                            </div>
                                 </div>
             
               
                       
                                    <?php
                                   }
                               }
                                    ?>
         <!--  Panel -->
                                     
                                     
                                     
                                                        </div>
                                              <?php
                                           }
                                ?>
                               
                            </div>
                        </div>



<!--  หยิบของใส่ตระกร้า -->
<div data-role="dialog"    id="dia_shopping"    class="padding5 dialog "    data-close-button="true"   >
     
<div class="window">
<div class="window-caption">
<span class="window-caption-icon">
  <!--  
<span class="mif-barcode mif-2x"/>
</span>
    -->
<span class="mif-printer mif-1x fg-black"></span> 
<span class="btn-min"/>
<span class="btn-max"/>
<span class="btn-close"/>
</div>
<div class="window-content padding10 " style="height: auto; width: auto;">
    <form id="fr_shopping" action="<?=base_url()?>index.php/welcome/billing">
        
        <!--
        <span id="sp_shop1"></span>
          <div class="row">
              <div class="row cells2">  </div>
              <div class="row cells2">
                  <button type="submit" class="button"><span class="mif-printer  mif-2x "></span> จ่ายเงิน </button>
                  <button type="button" class="button" onclick="  "><span class="mif-cross  mif-2x "></span> remove </button>
              </div>             
          </div>
         -->
        
         <div class="row">
              <div class="row cells2">  </div>
              <div class="row cells2">
                  <button type="button" class="button   block-shadow-info text-shadow large-button"  onclick=" 
                         javascript:
                          $.post('<?=base_url()?>index.php/welcome/billing',  $('#fr_shopping').serialize() , function(data)  
                            {  
                                      // alert(data);
                                       if(   data  != ''  )
                                        { //begin if
                                         //    var   sess_timerecord= '<?=@$this->session->userdata("sess_timerecord")?>';  // เวลาสำหรับการเรียก query ใน table สำหรับการออกใบเสร็จ
                                         //    var  sess_id_member= '<?=@$this->session->userdata("sess_id_member")?>';  //id ของสมาชิกสำหรับการ query ใน table ในการออกบิล
                                      
                                          //    var  URL='<?=base_url()?>report_pdf/stock/query_stock.php?sess_timerecord=' +  sess_timerecord + '&sess_id_member='  +   sess_id_member ; 
                                         var  URL='<?=base_url()?>report_pdf/stock/query_stock.php?sess_timerecord=<?=@$this->session->userdata('sess_timerecord')?>&sess_id_member=<?=@$this->session->userdata("sess_id_member")?>';  
                                         window.open(URL,'_blank');
                                       //  window.location.assign(URL,'_blank');
                                      
                                   //   window.location.href(URL);  
                                       
  //    window.location.assign(URL);
     //    window.open(URL,'_blank');
                                        //    var strWindowFeatures = 'location=yes,height=570,width=520,scrollbars=yes,status=yes';
                                            //window.open(URL, '', strWindowFeatures);
                                            //window.open(URL,'mywindow','width=400,height=200')
                                            //  window.open(url, '_blank',  'toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400' );
                                         //   if( sess_timerecord != ''  &&   sess_id_member != ''  )
                                   //         {
                                                   // window.location.assign(URL);
                                                //    window.open(URL,'_blank');
                                          }//end if
                                             
                                              //ผลลัพธ์ที่ได้คือ http://localhost/stock/report_pdf/stock/query_stock.php?sess_timerecord=2017-05-03%2017:02:00&sess_id_member=1
                                   //     }
                                 //       else
                                  //      {
                                         //   alert(' ระบบหยิบสินค้าผิดพลาด ');
                                  //      }
                            }  );
                          "  >  <span class="mif-barcode  mif-3x "></span>  </button>
                 <!--  <button type="button" class="button" onclick="  "><span class="mif-cross  mif-2x "></span> remove </button> -->
              </div>             
          </div>
         
    </form>
            

</div>
</div>
  
</div>
<!--  หยิบของใส่ตระกร้า -->

