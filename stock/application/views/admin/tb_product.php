<div class="input-control text">
    <input type="hidden" readonly="readonly"   id="up_id_product" />
    
</div>
<!--  onclick="metroDialog.open('#dia_update_product')"-->
<!-- $.post('<?=base_url()?>index.php/welcome/load_form_update/' + $('#up_id_product').val()  );  -->
<!-- showMetroDialog('#dialog-uf-1' -->
    <button class="button"  onclick=" 
        javascript:
      var   up_id_product=$('#up_id_product').val();
      if( up_id_product > 0 )
      {
           // $.post('<?=base_url()?>index.php/welcome/load_form_update/' + $('#up_id_product').val()  );
           // form_update_product
              showMetroDialog('#dia_update_product');   
             $('#form_update_product').load('<?=base_url()?>index.php/welcome/load_form_update/' + $('#up_id_product').val() );
             
                
      }
  
            
            "><span class="mif-tools"></span> Update </button>  
    <button class="button"
            onclick="
                 javascript:
                 var   up_id_product=$('#up_id_product').val();
                if( up_id_product > 0 )
                    {
                          var  r=confirm(' คุณแน่ใจว่าต้องการลบข้อมูล ');
                          if (r ==true)
                          {
                               //   $('#form_update_product').load('<?=base_url()?>index.php/welcome/load_form_update/' + $('#up_id_product').val() );
                               $.post('<?=base_url()?>index.php/welcome/del_product/' ,{ id_product : up_id_product } ,function(data)
                               {
                                   //  alert(data);
                                      if( data == 1 )
                                      {
                                              alert(' ข้อมูลถูกลบแล้ว ');
                                              $('#content').load('<?=base_url()?>index.php/welcome/form_product');   
                                              $('#tb_category').load('<?=base_url()?>index.php/welcome/load_category'); 
                                      }
                                      else
                                      {
                                               alert(' การลบข้อมูลผิดพลาด ');
                                              $('#content').load('<?=base_url()?>index.php/welcome/form_product');   
                                              $('#tb_category').load('<?=base_url()?>index.php/welcome/load_category'); 
                                      }
                                    
                               } );
                          }
                    }
            "
            ><span class="mif-superscript"></span> Delete </button>

  
<!-- table  of product --> 
                                  <!--  <table  class="table striped hovered cell-hovered border bordered">  -->
                                   <table  class="table striped hovered cell-hovered border bordered">
                            <thead>
                                <tr>
                                  <!--  <th class="sortable-column">Column</th> -->
                                    <th class="sortable-column ">หมวดหมู่สินค้า</th>
                              <!--      <th class="sortable-column sort-desc">Column</th> -->
                                      <th class="sortable-column ">รูปสินค้า</th>
                                       <th class="sortable-column ">รหัสสินค้า</th>
                                       <th class="sortable-column ">ชื่อสินค้า</th>
                                          <th class="sortable-column ">แบรนด์สินค้า</th>
                                           <th class="sortable-column ">จำนวน</th>
                                           <th class="sortable-column ">ราคา</th>
                                          <th class="sortable-column ">รายละเอียดสินค้า</th>
                                </tr>
                                <?php
                                  
                                     // $this->db->order_by($tb_product.".id_product","DESC");
                                    foreach($q_product->result() as $row)
                                    {
                                        $id_product=$row->id_product;
                                        $category=$row->category;  //หมวดหมู่สินค้า
                                        $product_name=$row->product_name;  //รูปสินค้า
                                        $code_product=$row->code_product;  //รหัสสินค้า
                                        $name_product=$row->name_product;  //ชื่อสินค้า
                                        $brand_product=$row->brand_product;  //แบรนด์สินค้า
                                        $number_product=$row->number_product;  //จำนวนสินค้า
                                        $price_product=$row->price_product;  //ราคาสินค้า
                                        $description_product=$row->description_product;  //รายละเอียดสินค้า
                                    
                                ?>
                                <tr>
                                    <td>
                                        
                                               <label class="input-control radio small-check">
                                                   <input type="radio" id="<?=$id_product?>" value="<?=$id_product?>" name="ra_product"  onclick=" javascript:  $('#up_id_product').val( $('#<?=$id_product?>').val() );   ">
                                                    <span class="check"></span>
                                                    <span class="caption"><?=$category?></span>
                                                </label>
                                        
                                        
                                    </td>
                                    <td>
                                          <img  id="zoom_01"    srcset='<?=base_url()?>uploadfile/<?=$product_name?>  1x, <?=base_url()?>uploadfile/<?=$product_name?> 2x'   class="icon" src="<?=base_url()?>uploadfile/<?=$product_name?>" style="width:150px;"   />
              
                                    </td>
                                    <td>
                                        <?=$code_product?>         
                                    </td>
                                    <td>
                                        <?=$name_product?>
                                    </td>
                                    <td>
                                        <?=$brand_product?>
                                    </td>
                                    <td>
                                        <?=$number_product?>
                                    </td>
                                    <td>
                                        <?=$price_product?>
                                    </td>
                                    <td>
                                        <?=$description_product?>
                                    </td>
                                    
                                </tr>
                                <?php
                                    }
                                ?>
                            </thead>
                                   </table>
                             <!-- table  of product -->          
                             
 <!-- Dialog  update  form product -->
 <!-- data-background="bg-pink"  -->
 <div data-role="dialog" id="dia_update_product"    class="padding5 dialog success"    data-close-button="true"   >

<div class="window warning">
        <div class="window-caption">
                                    <span class="window-caption-icon">
                                       <span class="mif-windows"/>
                                   </span>
            <span class="window-caption-title">Update รายการสินค้า</span>
            <span class="btn-min"/>
            <span class="btn-max"/>
           <!-- <span class="btn-close"/>-->
        </div>
<div class="window-content" style="height: 440px; width: 720px;" >
   <!--  begin -->
   <span id="form_update_product"></span>
   <!-- end -->
</div>
    
</div>
     
</div>
 <!-- Dialog  update  form product -->