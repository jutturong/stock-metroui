<div class="input-control text">
    <input type="hidden" readonly="readonly"   id="up_id_category" />
</div> 
<button class="button"   onclick="
       javascript: 
            var  up_id_category=$('#up_id_category').val();
            if(  up_id_category > 0 )
            {
                   showMetroDialog('#dia_update_category');   
                   //alert( up_id_category );
                   $('#form_update_category').load('<?=base_url()?>index.php/welcome/form_category/' +  $('#up_id_category').val()  );
            }
        "><span class="mif-tools"></span> Update </button>
 <button class="button"><span class="mif-superscript"></span> Delete </button>

<table  class="table striped hovered cell-hovered border bordered">
                            <thead>
                                <tr>
                                  <!--  <th class="sortable-column">Column</th> -->
                                    <th class="sortable-column sort-asc">หมวดหมู่สินค้า</th>
                              <!--      <th class="sortable-column sort-desc">Column</th> -->
                                </tr>
                                <?php
                                   foreach($q->result() as $row)
                                   {
                                        $category=$row->category;
                                        $id_category=$row->id_category;
                                        ?>
                                <tr>
                            <td>
                                <!-- Small radio button -->
<label class="input-control radio small-check">
    <input type="radio" id="<?=$id_category?>"  onclick=" javascript:  $('#up_id_category').val( $('#<?=$id_category?>').val() );   "  value="<?=$id_category?>" name="ra_category">
    <span class="check"></span>
    <span class="caption"><?=$category?></span>
</label>
                                
                               
                            </td>
                                </tr>
                                       <?php
                                   }
                                ?>
                            </thead>
                                            </table> 
 
 
 
 <!-- Dialog  update  form category -->
 <!-- data-background="bg-pink"  -->
 <div data-role="dialog" id="dia_update_category"    class="padding5 dialog success"    data-close-button="true"  >

<div class="window warning">
        <div class="window-caption">
                                    <span class="window-caption-icon">
                                       <span class="mif-windows"/>
                                   </span>
            <span class="window-caption-title">Update หมวดหมู่สินค้า</span>
            <span class="btn-min"/>
            <span class="btn-max"/>
           <!-- <span class="btn-close"/>-->
        </div>
<div class="window-content" style="height: 440px; width: 700px;" >
   <!--  begin -->
   <span id="form_update_category"></span>
   <!-- end -->
</div>
    
</div>
     
</div>
 <!-- Dialog  update  form category -->