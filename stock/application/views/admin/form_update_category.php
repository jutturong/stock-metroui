   <!-- form  add_category  -->
   <form  data-role="validator"  id="update_category" action="<?=base_url()?>index.php/welcome/update_category"  method="post"  enctype="multipart/form-data"  novalidate="novalidate" >  
                            
                              
 
                                   
                                   <div class="row cell4">
                                           <div class="cell spaces2">
   
               
                                        <div class="input-control text   success">
                                            <input   type="hidden"  id="up_id_category" name="up_id_category"    value="<?=@$id_category?>"> 
                                        </div>
   
   
                                        <div class="input-control text   success">
                                            <label class="block">  หมวดหมู่สินค้า  </label>
                                           <span class="mif-move-up mif-1x fg-black  prepend-icon"></span> 
                                          <!--  <span class="mif-move-up mif-1x fg-white"></span> -->
                                           <input   type="text"  id="up_category" name="up_category"    value="<?=@$category?>">
                                        </div>                                            
                                                            
                                                            
                                                           
                                                    
                                            </div>
                                       
                                     
                                     
                                       
                                       
                                          </div>    
       
       
       <div class="row cell4">
           
             <div class="cell spaces2">
                                            เปิดการทำงาน :
                                           <label class="switch-original">
                                               <?php
                                                  if(  $allow ==1 )
                                                  {
                                               ?>
                                               <input type="checkbox"  value="1"  id="allow" name="allow"  checked="checked" >
                                                <?php
                                                  }
                                                  elseif (  $allow ==0  )
                                                  {
                                                ?>
                                                 <input type="checkbox"  value="1"  id="allow" name="allow"   >
                                                <?php
                                                  }
                                                ?>
                                                 <span class="check"></span>
                                            </label>
                                           ON
                                       </div>
           
             
           
       </div>
       
                                       
                                            <div class="row cell4">
                                           
                                            <div class="cell spaces2">
                                                <button class="button success"  type="submit"  onclick="
                                                    //fr_update_category
                                                        javascript:
                                                                $.post('<?=base_url()?>index.php/welcome/update_category',  { up_id_category: $('#up_id_category').val()  ,  up_category:$('#up_category').val() ,allow : $('#allow').val()  }   ,
                                                                function(data)
                                                                { 
                                                                    // alert(data); 
                                                                     
                                                                     if( data == 1 )
                                                                     {
                                                                          alert('ปรับปรุงข้อมูลสำเร็จ');
                                                                          $('#tb_category').load('<?=base_url()?>index.php/welcome/load_category');  //โหลดรายการสินค้าทั้งหมด
                                                                     }else
                                                                     {
                                                                         alert('ปรับปรุงข้อมูลล้มเหลว');
                                                                          $('#tb_category').load('<?=base_url()?>index.php/welcome/load_category');  //โหลดรายการสินค้าทั้งหมด
                                                                     }
                                                                     
                                                                     
                                                               } 
                                                                       );
                                                            return false;
                                                        " > 
                                                    <span class="mif-file-archive prepend-icon"></span>
                                                  Update 
                                                </button>  
                                                  
                                                    
                                                   
                                            </div>
                                                
                                                
                                                
                                        </div>

                 
                                   </form>   