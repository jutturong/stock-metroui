
   




<?php
   echo br();
   echo br();
   echo br();
   echo br();
   echo br();
   echo br();
   echo br();
  
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
                                 <button class="button warning"   ><span class="mif-satellite"></span> Add User (เพิ่มผู้ใช้ในระบบ) </button>
                                -->
   
                                 <!-- button user operater -->
                                 
                                 
                              
                                 
                                  <!-- menu -->
                       <!--         
                    <ul class="sidebar">
  
                            <li><a href="#">
                                <span class="mif-database icon"></span>
                                <span class="title">เพิ่มผู้ใช้งานระบบ (Add user)</span>
                                <span class="counter">2</span>
                            </a></li>
                            <li><a href="#">
                                <span class="mif-cogs icon"></span>
                                <span class="title">Automation</span>
                                <span class="counter">0</span>
                            </a></li>
                            
                        </ul>
                       -->
                                 <!-- menu -->
                                
                                 
                                 
                                 
                                 
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
     <!-- load_manageuser  -->
     <!-- onchange="javascript: showMetroDialog('#dialog-user1');  " --> 
     <!-- $('#user_update').load('<?=base_url()?>index.php/welcome/load_manageuser/' +  '<?=$row->id_member?>' );  -->
     <input type="radio" id="<?=$row->id_member?>" name="id_member" onchange="javascript : showMetroDialog('#dialog-user1');  $('#user_update').load('<?=base_url()?>index.php/welcome/load_manageuser/' +  '<?=$row->id_member?>' );  " >
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
                                            
     
        
   

      <!-- begin form user -->           
                
                

</div>
<!-- Dialog -->                                    
                                            
                                            
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



<!-- load dialog user update form -->
<!--<span id="user_update"></span>-->
<div data-role="dialog" id="dialog-user1"  class="padding20 dialog success"  data-close-button="true" data-place="top-bottom">
    <span id="user_update"></span>
</div>
<!-- load dialog user update form -->







