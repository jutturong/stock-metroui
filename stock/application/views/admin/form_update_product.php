<form data-role="validator"  id="fr_prouct" action="<?=base_url()?>index.php/welcome/update_product"  method="post"  enctype="multipart/form-data"  novalidate="novalidate">
            <table class="table">
             <thead>
                <!--<tbody>-->
                 <tr>
                     <th class="sortable-column">    
                         <label class="block">หมวดหมู่สินค้า</label>  
                     </th>
                     <!-- sort-asc -->
                     <th class="sortable-column ">
                         <div class="input-control select">
                                                                <select  id="id_category" name="id_category" >
                                                                            <?php
                                                                            $query=$this->user_model->category();
                                                                            foreach($query->result() as $row )
                                                                            {
                                                                                $id_category=$row->id_category;
                                                                                $category=$row->category;
                                                                                if( @$id_category_query==$id_category  )
                                                                                {
                                                                            ?>                                                                    
                                                                    <option value="<?=$id_category?>" selected="selected"><?=$category?></option>
                                                                            <?php
                                                                                }
                                                                                else{
                                                                                    ?>
                                                                     <option value="<?=$id_category?>" ><?=$category?></option>
                                                                                   <?php
                                                                                }
                                                                            }
                                                                            ?>
                                                                        </select>
                                                             </div>
                     </th>
                    
                
                      <th class="sortable-column">    
                             <label class="block">รูปสินค้า </label> 
                     </th>
                     <th class="sortable-column">
                         
                                 <div class="input-control file" data-role="input">
                                     
                                        <!-- <button class="button"> <span class="mif-file-image mif-1x"></span></button> -->
                                         <input type="file"  id="file_product"  name="file_product"  multiple />
                                         <button class="button"><span class="mif-folder mif-1x"></span></button>
                                         <a href="#"  onclick=" javascript: window.open('<?=base_url()?>uploadfile/<?=@$product_name?>','_blank','toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400')    "  ><span class="mif-file-image mif-1x"></span></a>
                                         
                                 </div>
                     </th>                   
                 </tr>
                 <tr>
                     <th class="sortable-column">    
                            <label class="block">รหัสสินค้า</label>
                     </th>
                      <th class="sortable-column">    
                                        <div class="input-control text   success">
                                           <span class="mif-move-up mif-1x fg-black  prepend-icon"></span> 
                                          <!--  <span class="mif-move-up mif-1x fg-white"></span> -->
                                           <input   type="text" placeholder="ระบุรหัสสินค้า"  id="code_product"  name="code_product" value="<?=@$code_product?>">
                                        </div>
                      </th>
                
                     <th class="sortable-column">    
                           <label class="block">ชื่อสินค้า</label>
                     </th>    
                      <th class="sortable-column">    
                                        <div class="input-control text   success">
                                              <span class="mif-move-up mif-1x fg-black  prepend-icon"></span>
                                              <input   type="text" placeholder="ระบุชื่อสินค้า"  name="name_product"  id="name_product" value="<?=@$name_product?>" >
                                        </div>
                     </th>
                 </tr>
                 <tr>
                      <th class="sortable-column">    
                           <label class="block">แบรนด์ </label>
                      </th>  
                      <th class="sortable-column">    
                                        <div class="input-control text   success">
                                              <span class="mif-move-up mif-1x fg-black  prepend-icon"></span>
                                              <input   type="text" placeholder="ระบุแบรนด์สินค้า"  id="brand_product"  name="brand_product" value="<?=@$brand_product?>"  >
                                        </div>
                      </th>
                
                     <th class="sortable-column">    
                             <label class="block">จำนวน </label>
                     </th>   
                     <th class="sortable-column">    
                                         <div class="input-control text   success">
                                              <span class="mif-move-up mif-1x fg-black  prepend-icon"></span>
                                              <input   type="text" placeholder="ชิ้น"  id="number_product"  name="number_product" value="<?=@$number_product?>">
                                        </div>
                     </th>    
                 </tr>
                 <tr>
                       <th class="sortable-column">    
                         <label class="block">ราคา </label>
                     </th>
                     <th class="sortable-column">  
                                     <div class="input-control text   success">
                                             <span class="mif-move-up mif-1x fg-black  prepend-icon"></span>
                                             <input   type="text" placeholder="บาท"  id="price_product"  name="price_product"  value="<?=@$price_product?>"  >
                                      </div>
                     </th>
                
                       <th class="sortable-column">   
                           <label class="block">รายละเอียดสินค้า </label>
                       </th>   
                        <th class="sortable-column">  
                                    <div class="input-control textarea full-size" data-role="input" data-text-auto-resize="true" data-text-max-height="200">
                                        <textarea style="resize: none; overflow-y: hidden; height: 99px;"  id="description_product"  name="description_product"  ><?=@$description_product?></textarea>
                                    </div>
                        </th>    
                 </tr>
                 <tr>
                     <th class="sortable-column" colspan="4">                          
                                 <div class="input-control file" data-role="input">
                                     <input   type="hidden"  id="id_product"  name="id_product"  value="<?=@$id_product?>" >                                 
                                 </div>                             
                                <button class="button success" type="submit"  > 
                                                  <span class="mif-phonelink prepend-icon"></span>
                                                  ปรับปรุงข้อมูล
                                </button>
                      </th>
                 </tr>
             </thead>
             <!--</tbody>-->
         </table>
 </form>