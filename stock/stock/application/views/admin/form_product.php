<script type="text/javascript">  
    $(function()
    {
          //$(".tabcontrol2").tabcontrol();
          //$("#tabcontrol_product").tabcontrol();
            $('#tb_category').load('<?=base_url()?>index.php/welcome/load_category');  //โหลดรายการสินค้าทั้งหมด
           
            $('#menu_category').load('<?=base_url()?>index.php/welcome/menu_category');
            
         //   $('#tb_product').load("<?=base_url()?>index.php/welcome/load_product");
            $('#s_product').load("<?=base_url()?>index.php/welcome/load_product");
            
        //    $('#tab_product').tabs({ active: 1 });
    });
</script>

 <!-- data-open-target="#tb_product"   -->
<div class="tabcontrol2" data-role="tabcontrol"  id="tab_product"    data-open-target="#frame_5_1"   >
                            <ul class="tabs">
                                <li><a href="#frame_5_1">เพิ่มรายการสินค้า</a></li>
                                <li><a href="#tb_product"  onclick="javascript  :    $('#s_product').load('<?=base_url()?>index.php/welcome/load_product');     " >รายการสินค้าทั้งหมด</a></li>
                                <li><a href="#frame_5_2" onclick="javascript:     $('#tb_category').load('<?=base_url()?>index.php/welcome/load_category');  ">เพิ่มหมวดหมู่สินค้า</a></li>
                             <!--   <li ><a href="#frame_category"  >หมวดหมู่สินค้าทั้งหมด</a></li> -->
                                <li class="disabled"><a href="#">อื่นๆ</a></li>
                            </ul>
                            <div class="frames">
                                <div class="frame" id="frame_5_1">
                                    
                                    
                                   <!--  TAB  5_1 --> 
                                   <!-- insert_product  -->
                                   <?php   // echo form_open_multipart('welcome/insert_product');?>
                                   <form data-role="validator"  id="fr_prouct" action="<?=base_url()?>index.php/welcome/insert_product"  method="post"  enctype="multipart/form-data"  novalidate="novalidate">
                                        
                                       <div class="grid">   
                                        <div class="row cell8">
                                                        <div class="cell spaces8">
   <label class="block">หมวดหมู่สินค้า</label>
                                                            <div class="input-control select">
                                                                <select  id="id_category" name="id_category" >
                                                                            <?php
                                                                            $query=$this->user_model->category();
                                                                            foreach($query->result() as $row )
                                                                            {
                                                                                $id_category=$row->id_category;
                                                                                $category=$row->category;
                                                                            ?>
                                                                            <!--
                                                                            <option value="1">กระเบื้องหลังคา</option>
                                                                            <option value="2">ของตกแต่ง</option>
                                                                            <option value="3">ตัวทำละลาย</option>
                                                                            -->
                                                                            <option value="<?=$id_category?>"><?=$category?></option>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                             </div>
                                                            
                                                            
                                                           
                                                    
                                            </div>
                                          </div>
                                        
                                        
                                        <div class="row cells8">
                                            <div class="cell colspan8">
                                                <label class="block">รูปสินค้า </label>
                                                <div class="input-control file" data-role="input">
                                                    <input type="file"  id="file_product"  name="file_product"  multiple />
    <button class="button"><span class="mif-folder"></span></button>
</div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="row cells4">
                            <div class="cell colspan3">
                                        
                                        <label class="block">รหัสสินค้า</label>
                                        
                                        <div class="input-control text   success">
                                           <span class="mif-move-up mif-1x fg-black  prepend-icon"></span> 
                                          <!--  <span class="mif-move-up mif-1x fg-white"></span> -->
                                           <input   type="text" placeholder="ระบุรหัสสินค้า"  id="code_product"  name="code_product" >
                                        </div>
                                        
    
                            </div>
                                            <div class="cell colspan1">
                                            </div>   
                                                
                                        </div>
     
                                        <div class="row cell4">
                                            <div class="cell colspan3">
                                              
                                                 <label class="block">ชื่อสินค้า</label>
                                        <div class="input-control text   success">
                                              <span class="mif-move-up mif-1x fg-black  prepend-icon"></span>
                                              <input   type="text" placeholder="ระบุชื่อสินค้า"  name="name_product"  id="name_product" >
                                        </div>
                                                 
                                            </div>
                                        </div>
                                        
                                        <div class="row cell4">
                                            <div class="cell spaces3">
                                                <label class="block">แบรนด์ </label>
                                        <div class="input-control text   success">
                                              <span class="mif-move-up mif-1x fg-black  prepend-icon"></span>
                                              <input   type="text" placeholder="ระบุแบรนด์สินค้า"  id="brand_product"  name="brand_product"  >
                                        </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row cell4">
                                            <div class="cell spaces3">
                                                
                                                 <label class="block">จำนวน </label>
                                        <div class="input-control text   success">
                                              <span class="mif-move-up mif-1x fg-black  prepend-icon"></span>
                                              <input   type="text" placeholder="ชิ้น"  id="number_product"  name="number_product" >
                                        </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="row cell4">
                                            <div class="cell spaces3">
                                                
                                                 <label class="block">ราคา </label>
                                        <div class="input-control text   success">
                                             <span class="mif-move-up mif-1x fg-black  prepend-icon"></span>
                                             <input   type="text" placeholder="บาท"  id="price_product"  name="price_product"  >
                                        </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row cell4">
                                            <div class="cell spaces3">
                                                
                                                 <label class="block">รายละเอียดสินค้า </label>
                                                 
                                                
                                            
<div class="input-control textarea full-size" data-role="input" data-text-auto-resize="true" data-text-max-height="200">
     
    <textarea style="resize: none; overflow-y: hidden; height: 99px;"  id="description_product"  name="description_product"  ></textarea>
    
</div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                          
                                              
             
                                        <div class="row cell4">
                                            <div class="cell spaces2">
                                            </div>
                                            <div class="cell spaces2">
                                                
                                                <!--
                                                <button class="button success" type="button"  
                                                        onclick="  
                                                            javascript: 
                                                                    // $('#fr_category').serialize()
                                                            
                                                                    $.post('<?=base_url()?>index.php/welcome/insert_product',  $('#fr_prouct').serializeArray()  , function(data)
                                                            {
                                                                //alert('t');
                                                                alert(data);
                                                            });
                                                           
                                                           // $('#fr_prouct').ajaxForm(function(data));
                                                           /*
                                                           $.ajax({
                                                               url:'<?=base_url()?>index.php/welcome/insert_product',
                                                               type:'POST',
                                                               data:$('#fr_prouct').serialize(),
                                                               cache:false,
                                                               //dataType:''
                                                              success:function(data)
                                                              {
                                                                  alert(data);
                                                              }
                                                           });*/
                                                                     ">
                                                    <span class="mif-phonelink prepend-icon"></span>
                                                  บันทึกข้อมูล</button>  
                                                -->
                                                
                                                <button class="button success" type="submit"  > 
                                                    <span class="mif-phonelink prepend-icon"></span>
                                                  บันทึกข้อมูล
                                                </button>
                                                
                                                
                                            </div>
                                                
                                        </div>
    <!--                                   
    <div>
        <button class="button success">Send</button>
    </div>
    -->
                                       </div>
</form>
                                    <?php  //form_close();?>
                                   
                                 
                                   
                                   
       <!--  TAB  5_1 -->                         
                                
                                </div>
                                
                                <div class="frame" id="tb_product">                             
                                    <span id="s_product">
                                        
                                    </span>
                                </div>
                                <div class="frame" id="frame_5_2">
                                 
                                <!--  tab 5_2 -->
                             
                                <!-- form  add_category  -->
                                <form data-role="validator"  id="fr_category">
                                   <div class="grid">   
                                   <div class="row cell8">
                                                        <div class="cell spaces2">
   <label class="block">เพิ่มหมวดหมู่สินค้า</label>
               
                                        
                                        <div class="input-control text   success">
                                           <span class="mif-move-up mif-1x fg-black  prepend-icon"></span> 
                                          <!--  <span class="mif-move-up mif-1x fg-white"></span> -->
                                           <input   type="text"  id="category" name="category"  placeholder="เพิ่มหมวดหมู่สินค้า"   >
                                        </div>                                            
                                                            
                                                            
                                                           
                                                    
                                            </div>
                                     
                                       
                                       
                                          </div>     
                                       
                                            <div class="row cell4">
                                           
                                            <div class="cell spaces2">
                                                <button class="button success"  type="button"  onclick="  
                                                    //$('#fr_user').serialize()
                                                        $.post('<?=base_url()?>index.php/welcome/add_category',  $('#fr_category').serialize() ,function(data)
                                                        {
                                                            //alert(data);
                                                            if( data == 1 )
                                                            {
                                                                alert('บันทึกข้อมูลแล้ว');
                                                                $('#tb_category').load('<?=base_url()?>index.php/welcome/load_category');
                                                                 $('#menu_category').load('<?=base_url()?>index.php/welcome/menu_category');
                                                            }                                                         
                                                        })
                                                        " >
                                                    <span class="mif-file-archive prepend-icon"></span>
                                                  บันทึกข้อมูล</button>  
                                            </div>
                                                
                                        </div>
                                       
                                       <div class="row cell4">
                                           
                                          
                                           <span id="tb_category">
                                               <!-- load_category -->
                                           </span>
                                               
                                             
                                       
                                       
                                   </div>    
                                       
                                  
                                <!--  tab 5_2 -->
                                </div>
                                    </form>  
                                
                                <!-- form  add_category  -->
                                
                                
                            </div>
                                
                                <!--
                                <div class="frame" id="frame_category"> 
                                </div>
                                -->
                                
                        </div>
                    </div>