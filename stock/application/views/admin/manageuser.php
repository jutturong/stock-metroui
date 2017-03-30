<script type="text/javascript">
   

</script>

<?php
   echo br();
   echo br();
   echo br();
   echo br();
   echo br();
   echo br();
  // echo br();
   //echo br();
  // echo br();
  // echo br();
   //echo br();
   //echo br();
?>

<!--  TAB control -->
<div class="tabcontrol2 tabs-bottom" data-role="tabcontrol">
    
    <ul class="tabs tab-bottom">
                                <li><a href="#frame_6_1">    <span class="mif-github mif-2x" style="color: black;"></span> Manage User System</a></li>
                                
                                <!--
                                <li><a href="#frame_6_2">Tab 2</a></li>
                                <li class="disabled"><a href="">Tab 3</a></li>
                                -->
                                
                            </ul>
    
    
                            <div class="frames">
                                <div class="frame" id="frame_6_1">
                                    
                                <!-- window  manage user -->
                                
                                <!-- button user operater -->
                                <!--
                                <button class="button warning"  onclick="showMetroDialog('#dialog-user1')" ><span class="mif-satellite"></span> Edit / Update </button>
                                <button class="button danger"><span class="mif-pause"></span> Delete User</button>
                                -->
                                
                                   <button class="button warning"   ><span class="mif-satellite"></span> Add User (เพิ่มผู้ใช้ในระบบ) </button>
                                  
                                 <!-- button user operater -->
                                 
                                <div class="cell">
                        <div class="window success">
                            <div class="window-caption">
                                
                               
                               <!--     <span class="mif-local-service mif-2x" style="color: white;"></span> -->
                                    
                                    <span class="mif-github mif-2x" style="color: white;"></span>
                                    
                                    Manage User</span>
                                <span class="btn-min"></span>
                                <span class="btn-max"></span>
                                <span class="btn-close"></span>
                            </div>
                            <div class="window-content" style="height: auto;width: auto">
                                
                                <table class="table striped hovered cell-hovered border bordered">
                                    <thead>
                                        <tr>
                                            <th class="sortable-column "><span class="mif-user mif-2x"></span>UserName/ ชื่อ-นามสกุล</th>
                                          <!--   <th class="sortable-column ">ชื่อ</th> -->
                                         <!--     <th class="sortable-column ">นามสกุล</th> -->
                                               <th class="sortable-column "><span class="mif-page-break mif-2x"></span>  ระดับการใช้งาน (Level)</th>
                                              <th class="sortable-column "><span class="mif-thumbs-up mif-2x"></span>  อนุญาตใช้งาน/ Block User</th>
                                              <th class="sortable-column "><span class="mif-dollar mif-2x"></span>  แต้ม (Point)</th>
                                        </tr>
                                       
                                    </thead>
                                    
                                     <?php
                                        foreach($query->result() as $row)
                                        {
                                            ?>
                                             <tr>
                                                 <td>
                                                     
                                                    
     
 <label class="input-control radio">
     <input type="radio" id="<?=$row->id_member?>" name="id_member"  onchange="javascript: showMetroDialog('#dialog-user1');  ">
    <span class="check"></span>
    <span class="caption">
                                                    
                                                    
        
        
        <span data-role="hint"
    data-hint-background="bg-black"
    data-hint-color="fg-white"
    data-hint-mode="2"
    data-hint="<?=$row->name?>  <?=$row->lastname?>"
><?=$row->us?>  (<?=$row->name?>  <?=$row->lastname?>) </span>
    
    </span>
</label>
                                            
                                                 </td>
                                                 
                                                 <!--
                                                 <td>

                                                     <span data-role="hint"
    data-hint-background="bg-green"
    data-hint-color="fg-white"
    data-hint-mode="2"
    data-hint="<?=$row->name?>  <?=$row->lastname?>"
><?=$row->name?></span>
                                                     
                                                 </td>
                                                 -->
                                                 
                                          <!--       <td><?=$row->lastname?></td>  -->
                                                  <td><?=$row->level?></td>
                                                   <td><?=$row->authentic?></td>
                                                       <td><?=$row->point?></td>
                                            </tr>
                                           <?php 
                                        }
                                        
                                     ?>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                             <!-- window  manage user -->
                             
                                    
                                </div>
                                
                                <!--
                                <div class="frame" id="frame_6_2">2</div>
                                -->
                                
                            </div>
                            
                        </div>
<!--  TAB control -->


<!-- Dialog สถานะของ manage user--->
<div data-role="dialog" id="dialog-user1"  class="padding20 dialog warning"  data-close-button="true" data-place="top-center">
                <!--<h1>Simple dialog</h1>-->
                
                <h6>   
                    <span class="mif-github mif-2x" style="color: white;"></span> Manage User    Update / Edit / Block  </span>         
                </h6>   
          
                
            <!-- begin form user -->   
                <form data-role="validator">
    <label class="block">UserName </label>
    <div class="input-control text">
        <input
            data-validate-func="minlength"
            data-validate-arg="6"
            data-validate-hint="This field must contains min 6 symbols!"
            type="text">
        <span class="input-state-error mif-warning"></span>
        <span class="input-state-success mif-checkmark"></span>
    </div>
    <div>
        <button class="button success">Send</button>
    </div>
</form>
      <!-- begin form user -->           
                
                

</div>
<!-- Dialog -->



