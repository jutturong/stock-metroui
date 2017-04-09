
                <h6>   
                    <span class="mif-github mif-2x" style="color: white;"></span> Manage User    Update / Edit / Block  </span>         
                </h6>   
            <!-- begin form user -->   
            <!-- action="<?=base_url()?>index.php/welcome/update_user"  -->
            <form data-role="validator"  id="fr_user"   >
                    
                    <!-- begin grid -->
                    <div class="grid">
                       
                        <div class="row cells2">
                            <div class="cell colspan1">
                                <div class="input-control  text  success" data-role="input">
                                <label class="block">ID User </label>
                                                        <input
                                                            id="id_member"
                                                            name="id_member"
                                                            data-validate-func="minlength"
                                                            data-validate-arg="6"
                                                            data-validate-hint="This field must contains min 6 symbols!"
                                                            value="<?=$row->id_member?>"
                                                            placeholder="UserName"
                                                            readonly="true"
                                                            type="text">
                                                        </div>
                            </div>
                            <div class="cell colspan1"></div>
                            
                        </div>
                        
                        <div class="row cells6">
                            <div class="cell colspan2">
                                 <div class="input-control  text  success" data-role="input">
                                     <!-- <span class="input-state-success mif-checkmark"></span>  -->
                                    <label class="block">UserName </label>
                                                        <input
                                                            id="us"
                                                             name="us"
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
                                                    id="ps"
                                                    name="ps"
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
                                                         id="name"
                                                         name="name"
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
                                                         id="lastname"
                                                         name="lastname"
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
                                    <select  id="level"  name="level">
                                        
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
                                           <select  id="authentic"  name="authentic">
                                        
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
                                
                                 <div class="input-control  text  success " >
                                   
                                     <label class="block">แต้ม (Point) </label> 
                                  
                                                        <input
                                                            id="point"
                                                            name="point"
                                                            data-validate-func="minlength"
                                                            data-validate-arg="6"
                                                            data-validate-hint="This field must contains min 6 symbols!"
                                                            value="<?=$row->point?>"
                                                           
                                                            type="text">
                                                           <!--<span class="input-state-success mif-checkmark"></span>-->  
                                 
                               </div>
                                
                            </div>
                            <div  class="cell colspan2"></div>
                        </div>
                        
                        <div class="row cells6">
                            <div class="row cell2">
                                <button class="button warning" onclick="  
                                    /*
                                    $('#fr_user').on('submit',function(event)
                                    {
                                       // event.preventDefault();
                                        console.log($(this).serialize());
                                    })
                                    */
                                   //update_user
                                   
                                   /*
                                    $('#fr_user').ajaxSubmit({
                                        url:'<?=base_url()?>index.php/welcome/update_user',
                                        type:'post',
                                    });
                            */
                               
                               $.post('<?=base_url()?>index.php/welcome/update_user',$('#fr_user').serialize(),
                               function( data )
                               { 
                                       // alert(data);  
                                        if( data == '1' )
                                        {
                                            alert('ปรับปรุงข้อมูลสำเร็จ');
                                        }
                                        else
                                        {
                                              alert('ปรับปรุงข้อมูลล้มเหลว');
                                        }
                                        $('#content').load('<?=base_url()?>index.php/welcome/manageuser'); 
                                   
                               });

                                     "><span class="mif-checkmark"></span> Update</button>
                            </div>
                        </div>
                        
                            
                        </div>
                        <!-- end  grid -->
                    </form>    
                        
       
        <!-- Dialog สถานะของ manage user--->
        

        