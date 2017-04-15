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
                                               $q_sub1=$this->db->get_where($tb2,array("id_category"=>$id_category));
                                              $num2=$q_sub1->num_rows();
                                             //echo br();                                          
                                               ?>
                                                         <div class="frame" id="frame_<?=$a?>">
                                                            
             <!--  Panel -->
                               <?php
                               if( $num2 > 0 )
                               {
                                   $row=$q_sub1->row();
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
          
           <div class="input-control text" data-role="input" >
                                                       <!--<span class="mif-pin  prepend-icon fg-blue mif-1x"></span>-->
                                                       <input type="text" 
                                                              id="basket1" 
                                                              name="basket1"  
                                                             maxlength="4"
                                                             max="5"
                                                             
                                                             number="true"
                                                             data-validate-func="required, number"
                                                             minlength="1"  style="  width:70px;text-align:center; " />
                                                       <button class="button" onclick="javascript: $(function(){     $('#value_baseket').html($('#basket1').val());   });  " >
                                                           <span class="mif-shopping-basket mif-1x fg-black"></span>
                                                       </button>
             </div>       
            
        </div>
        <div class="cell colspan3">
            
        </div>
         
    </div>
                                                          
                                                          
</div>
                                                      
                                                      
                                                      
                                                </div>
                                            </div>
                                 </div>
                                    <?php
                               }
                                    ?>
         <!--  Panel -->
                                     
                                     
                                     
                                                        </div>
                                              <?php
                                           }
                                ?>
                               
                            </div>
                        </div>

