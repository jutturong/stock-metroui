<script type="text/javascript">  
    $(function()
    {
          //$(".tabcontrol2").tabcontrol();
          //$("#tabcontrol_product").tabcontrol();
    });
</script>

 
                        <div class="tabcontrol2" data-role="tabcontrol">
                            <ul class="tabs">
                                <li><a href="#frame_5_1">เพิ่มรายการสินค้า</a></li>
                                <li><a href="#frame_5_2">เพิ่มหมวดหมู่สินค้า</a></li>
                                <li class="disabled"><a href="">อื่นๆ</a></li>
                            </ul>
                            <div class="frames">
                                <div class="frame" id="frame_5_1">
                                    
                                    
                                   <!--  TAB  5_1 --> 
                                    <form data-role="validator">
                                        
                                       <div class="grid">   
                                        <div class="row cell8">
                                                        <div class="cell spaces8">
   <label class="block">หมวดหมู่สินค้า</label>
                                                            <div class="input-control select">
                                                                        <select>
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
    <input type="file">
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
                                            <input   type="text" placeholder="ระบุรหัสสินค้า"  >
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
                                            <input   type="text" placeholder="ระบุชื่อสินค้า"  >
                                        </div>
                                                 
                                            </div>
                                        </div>
                                        
                                        <div class="row cell4">
                                            <div class="cell spaces3">
                                                <label class="block">แบรนด์ </label>
                                        <div class="input-control text   success">
                                              <span class="mif-move-up mif-1x fg-black  prepend-icon"></span>
                                            <input   type="text" placeholder="ระบุแบรนด์สินค้า"  >
                                        </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row cell4">
                                            <div class="cell spaces3">
                                                
                                                 <label class="block">จำนวน </label>
                                        <div class="input-control text   success">
                                              <span class="mif-move-up mif-1x fg-black  prepend-icon"></span>
                                            <input   type="text" placeholder="ระบุจำนวนสินค้า"  >
                                        </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="row cell4">
                                            <div class="cell spaces3">
                                                
                                                 <label class="block">ราคา </label>
                                        <div class="input-control text   success">
                                             <span class="mif-move-up mif-1x fg-black  prepend-icon"></span>
                                            <input   type="text" placeholder="ระบุราคาสินค้า"  >
                                        </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row cell4">
                                            <div class="cell spaces3">
                                                
                                                 <label class="block">รายละเอียดสินค้า </label>
                                                 
                                                
                                            
<div class="input-control textarea full-size" data-role="input" data-text-auto-resize="true" data-text-max-height="200">
     
     <textarea style="resize: none; overflow-y: hidden; height: 99px;"></textarea>
    
</div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                          
                                              
             
                                        <div class="row cell4">
                                            <div class="cell spaces2">
                                            </div>
                                            <div class="cell spaces2">
                                              <button class="button success">
                                                    <span class="mif-phonelink prepend-icon"></span>
                                                  บันทึกข้อมูล</button>  
                                            </div>
                                                
                                        </div>
    <!--                                   
    <div>
        <button class="button success">Send</button>
    </div>
    -->
                                       </div>
</form>
       <!--  TAB  5_1 -->                         
                                
                                </div>
                                <div class="frame" id="frame_5_2">2</div>
                            </div>
                        </div>
                    </div>