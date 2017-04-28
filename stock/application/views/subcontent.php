<?php
if( $num > 0 )
{
  foreach($q->result() as $row )
  {                                
                                  $id_product=$row->id_product;
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
        
        
        <div class="cell  colspan1">
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
          
       <div class="row cells4">
             <div class="cell  colspan4">
           <div class="input-control text" data-role="input" >
                                                       <!--<span class="mif-pin  prepend-icon fg-blue mif-1x"></span>-->
               
               <!--
               <input type="text" 
                                                              id="basket1" 
                                                              name="basket1"  
                                                             maxlength="4"
                                                             max="5"
                                                             
                                                             number="true"
                                                             data-validate-func="required, number"
                                                             minlength="1"  style="  width:70px;text-align:center; " />  
               -->
                                                       
                                                       <!--
                                                       <button class="button" onclick="javascript: $(function(){     $('#value_baseket').html($('#basket1').val());   });  " >
                                                           <span class="mif-shopping-basket mif-1x fg-black"></span>
                                                       </button>
                                                       -->
                                                     <input type="text"     id="basket1<?=$id_product?>"   name="basket1<?=$id_product?>"   maxlength="4"    max="5"    number="true"   data-validate-func="required, number"       minlength="1"  style="  width:70px;text-align:center; " />
                  
                                                   
             </div> 
                 <div class="input-control text" data-role="input" >
                       <button class="button rounded large-button" onclick="
                           javascript:   
                                 var  pice=$('#basket1<?=$id_product?>').val();
                             
                               var  number_product= parseInt(<?=$number_product?>);
                                 if(  pice  >  0  &&     pice  <=  number_product  )
                                {
                                        alert('หยิบของใส่ตะกร้าแล้ว');
                                        var   oop1='  <div  id=\'div<?=$id_product?>\'   class=\'grid\'  >   <span class=\'mif-chevron-right mif-2x \' style=\'color: green;\'></span>     <input type=\'hidden\'  name=\'sh_id<?=$id_product?>\'  id=\'sh_id<?=$id_product?>\'  value=\'<?=$id_product?> \'  >   <?=$name_product?>   <div class=\'input-control text  data-role=\'input\'   \'>  <input type=\'text\'  readonly   value=\''  +  pice  +    '\'  style=\'width:50px;text-align:center;\'  \>   /หน่วย   <button class=\'button cycle-button\'   type=\'button\'  id=\'btn<?=$id_product?>\'   \'><span class=\'mif-cancel   fg-red   \'></span></button>   </div>      </div>  ';
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
                                    alert('ยังไม่หยิบของใส่ตะกร้า');
                                }
                                                      "><span class="mif-shop fg-green"></span> ใส่ตะกร้า </button>
                 </div> 
             
           
                
                
                </div>
       </div>
            
            
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


<!--  หยิบของใส่ตระกร้า -->
<div data-role="dialog" id="dia_shopping"    class="padding5 dialog "    data-close-button="true"   >
     
<div class="window">
<div class="window-caption">
<span class="window-caption-icon">
  <!--  
<span class="mif-barcode mif-2x"/>
</span>
    -->
<span class="mif-barcode mif-2x"></span> 
<span class="btn-min"/>
<span class="btn-max"/>
<span class="btn-close"/>
</div>
<div class="window-content padding10 " style="height: 200px; width: 600px;">
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
        
         
    </form>
            

</div>
</div>
  
</div>
<!--  หยิบของใส่ตระกร้า -->