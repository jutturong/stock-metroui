
                
                <h6>   
                    <span class="mif-github mif-2x" style="color: white;"></span> Manage User    Update / Edit / Block  </span>         
                </h6>   
            <!-- begin form user -->   
                <form data-role="validator">
                    
                    <!-- begin grid -->
                    <div class="grid">
                        
                        <div class="row cells6">
                            <div class="cell colspan2">
                                 <div class="input-control  text  success" data-role="input">
                                     <!-- <span class="input-state-success mif-checkmark"></span>  -->
                                    <label class="block">UserName </label>
                                                        <input
                                                            data-validate-func="minlength"
                                                            data-validate-arg="6"
                                                            data-validate-hint="This field must contains min 6 symbols!"
                                                            value="<?=$row->us?>"
                                                            placeholder="UserName"
                                                            type="text">
                                
                               </div>
                            </div>
                            
                            <div class="cell colspan2">
                              <div class="input-control  text  success" data-role="input">
                                                <label class="block">Password </label>
                                                <input
                                                   data-validate-func="minlength"
                                                   data-validate-arg="6"
                                                   data-validate-hint="This field must contains min 6 symbols!"
                                                   value=""
                                                   type="text">
                                              <!-- <span class="input-state-success mif-checkmark"></span>  -->
                               </div>  
                            </div>
                            <div class="cell colspan2"></div>
                        </div>
                        
                        <div class="row cells6">
                            <div class="cell colspan2">
                                               <div class="input-control  text  success" data-role="input">
                                                  <label class="block">ชื่อ </label>
                                                     <input
                                                    data-validate-func="minlength"
                                                    data-validate-arg="6"
                                                    data-validate-hint="This field must contains min 6 symbols!"
                                                    value="<?=$row->name?>"
                                                    type="text">
                                                   <!-- <span class="input-state-success mif-checkmark"></span>  -->
                                            </div>
                              </div>
                            <div class="cell colspan2">
                                         <div class="input-control  text  success" data-role="input">
                                                  <label class="block">นามสกุล </label>
                                                     <input
                                                    data-validate-func="minlength"
                                                    data-validate-arg="6"
                                                    data-validate-hint="This field must contains min 6 symbols!"
                                                    value="<?=$row->lastname?>"
                                                    type="text">
                                                  <!--  <span class="input-state-success mif-checkmark"></span>  -->
                                            </div>
                            </div>
                            <div class="cell colspan2"></div>
                        </div>
                        <div class="row cells6">
                            
                              <div  class="cell colspan2">
                            <div class="input-control  select  success" data-role="input">
                                
                               
                                  <label class="block">ระดับของ User </label>
                                <div class="input-control select">
                                    <select>
                                        
                                        <?php
                                        if( $row->level  == 1  )
                                        {
                                        ?>
                                        <option value="1" selected>Admin</option>
                                        <option value="2">User</option>
                                         <?php
                                        }
                                        elseif( $row->level ==2 )
                                        {
                                         ?>
                                         <option value="1" >Admin</option>
                                        <option value="2" selected>User</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                     <!-- <span class="input-state-success mif-checkmark"></span> --> 
                                </div>
                                 </div>    
                                  
                                  
                              </div>
                            <div  class="cell colspan2">
                                <div class="input-control  select  success" data-role="input">
                                    
                                    
                                    <label class="block">อนุญาตการใช้งาน </label>
                                       <div class="input-control select">
                                      <select>
                                        
                                        <?php
                                        if( $row->authentic  == 1  )
                                        {
                                        ?>
                                        <option value="1" selected>อนุญาต</option>
                                        <option value="2">Block</option>
                                         <?php
                                        }
                                        elseif( $row->authentic ==2 )
                                        {
                                         ?>
                                         <option value="1" >อนุญาต</option>
                                        <option value="2" selected>Block</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                           
                                    <!--  <span class="input-state-success mif-checkmark"></span>  -->
                                       </div> 
                                      
                                      
                                </div>
                            </div>
                            <div  class="cell colspan2"></div>
                            
                            </div>
                           
                        <div class="row cells6">
                            
                            <div  class="cell colspan2">
                                
                                 <div class="input-control  text  " >
                                      <span class="input-state-success mif-checkmark"></span>  
                                  <!--   <label class="block">แต้ม (Point) </label> -->
                                  
                                                        <input
                                                            data-validate-func="minlength"
                                                            data-validate-arg="6"
                                                            data-validate-hint="This field must contains min 6 symbols!"
                                                            value="<?=$row->point?>"
                                                            placeholder="UserName"
                                                            type="text">
                                 
                               </div>
                                
                            </div>
                            <div  class="cell colspan2"></div>
                        </div>
                        
                            
                        </div>
                        <!-- end  grid -->
                    </form>    
                        
       
        <!-- Dialog สถานะของ manage user--->
        

        