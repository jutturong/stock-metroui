<script type="text/javascript">
    
      $(function(){
                        $("#tabcontrol).tabcontrol({
                            onTabClick: function(tab){...},
                            onTabChange: function(tab){...}
                        });
                    })
     
</script>

<!-- window  manage user -->  
<!--
 <div class="cell">
                        <div class="window success">
                            <div class="window-caption">
                                
                               
                                    <span class="mif-local-service mif-2x" style="color: white;"></span>
                                    Manage User</span>
                                <span class="btn-min"></span>
                                <span class="btn-max"></span>
                                <span class="btn-close"></span>
                            </div>
                            <div class="window-content" style="height: auto;width: auto">
                                
                                <table class="table striped hovered cell-hovered border bordered">
                                    <thead>
                                        <tr>
                                            <th class="sortable-column ">UserName</th>
                                             <th class="sortable-column ">ชื่อ</th>
                                              <th class="sortable-column ">นามสกุล</th>
                                               <th class="sortable-column ">ระดับการใช้งาน</th>
                                              <th class="sortable-column ">อนุญาตใช้งาน</th>
                                              <th class="sortable-column ">แต้ม (Point)</th>
                                        </tr>
                                       
                                    </thead>
                                    
                                     <?php
                                        foreach($query->result() as $row)
                                        {
                                            ?>
                                             <tr>
                                                 <td><?=$row->us?></td>
                                                 <td><?=$row->name?></td>
                                                 <td><?=$row->lastname?></td>
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
-->
<!-- window  manage user -->

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
                                <button class="button warning"><span class="mif-satellite"></span> Edit / Update </button>
                                <button class="button danger"><span class="mif-pause"></span> Delete User</button>
                                
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
                                            <th class="sortable-column ">UserName</th>
                                             <th class="sortable-column ">ชื่อ</th>
                                              <th class="sortable-column ">นามสกุล</th>
                                               <th class="sortable-column ">ระดับการใช้งาน</th>
                                              <th class="sortable-column ">อนุญาตใช้งาน</th>
                                              <th class="sortable-column ">แต้ม (Point)</th>
                                        </tr>
                                       
                                    </thead>
                                    
                                     <?php
                                        foreach($query->result() as $row)
                                        {
                                            ?>
                                             <tr>
                                                 <td>
                                                     
                                                    
     
                                                     <label class="input-control radio">
    <input type="radio">
    <span class="check"></span>
    <span class="caption"><?=$row->us?></span>
</label>
                                            
                                                 </td>
                                                 <td><?=$row->name?></td>
                                                 <td><?=$row->lastname?></td>
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
