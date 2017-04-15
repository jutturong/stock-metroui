<script type="text/javascript">
    $(function(){
        $("#tab-control").tabcontrol();
        $("#panel").panel();
        
    });
</script>

<script type="text/javascript">  
   //$('#zoom_01').zoom();
   //$('.mobile-container').retina({zoomValue: 400});
   $('#zoom_01').retina({zoomValue: 400});
</script>

<!--  category -->
<!--     $this->load->model("user_model");  -->

<div class="tabcontrol" data-role="tabcontrol">
                            <ul class="tabs">
                                <!--
                                <li><a href="#frame_1_1">ชุดเครื่องมือช่าง</a></li>
                                <li><a href="#frame_1_2">ปูน</a></li>
                                <li class="disabled"><a href="#frame_1_3">เหล็ก</a></li> 
                                 <li ><a href="#frame_1_3">เหล็ก</a></li>
                                 -->
                                 <?php
                                       $q=$this->user_model->category();
                                       foreach($q->result() as $row)
                                           {
                                               $id_category=$row->id_category;
                                               $category=$row->category;
                                               ?>
                                                         <li><a href="#">
                                                             <?=$category?>
                                                         </a></li>
                                              <?php
                                           }
                                   ?>
                            </ul>
                            <div class="frames bg-grayLight">
                                
                                <div class="frame" id="frame_1_1">
                                  
                                    <!--  Panel -->
                                    <!--
                                    <div class="cell" >
                                           
                                            <div class="panel" data-role="panel">
                                                <div class="heading">
                                                    <?=nbs(1)?>
                                                    <span class="mif-suitcase mif-2x fg-white" ></span>
                                                    
                                                    <span class="title">SKU: 1060891</span>
                                                </div>
                                                <div class="content padding10">
                                                    <span class="mif-wrench mif-1x fg-black"></span>
                                                   ชุดเครื่องมือช่าง 77 ชิ้นชุด MATALL                                               
                                                   <?=nbs(3)?>                                                
                                                   <div class="input-control text success" data-role="input" >
                                                       <span class="mif-pin  prepend-icon fg-blue mif-1x"></span>
                                                       <input type="text"  id="basket1"  name="basket1"  maxlength="3"  minlength="1"  >
                                                       <button class="button" onclick="javascript: $(function(){     $('#value_baseket').html($('#basket1').val());   });  " ><span class="mif-shopping-basket mif-2x fg-black"></span></button>
                                                   </div>                                               
                                                    <?=nbs(3)?>
                                                   <?=br()?>
                                                      <img  id="zoom_01"    srcset='<?=base_url()?>picture/20170119_1060891.jpg 1x, <?=base_url()?>picture/20170119_1060891.jpg 2x'   class="icon" src="<?=base_url()?>picture/20170119_1060891.jpg" style="width:100px;"   />

                                                </div>
                                            </div>
                                 </div>
                                    -->
                                     <!--  Panel -->
                                     
                                    
                                     <!--  Panel -->
                                     <!--
                                   <div class="cell" >
                                           
                                            <div class="panel" data-role="panel">
                                                <div class="heading">
                                                    <img class="icon" src="<?=base_url()?>node_modules/metro-ui/docs/images/location.png">
                                                    <span class="title">Panel Title</span>
                                                </div>
                                                <div class="content padding10">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
                                                </div>
                                            </div>
                                 </div>
                                     -->
                                     <!--  Panel -->
                                   
                                     <!--  Panel -->
                                     <!--
                                   <div class="cell">
                                           
                                            <div class="panel" data-role="panel">
                                                <div class="heading">
                                                    <img class="icon" src="<?=base_url()?>node_modules/metro-ui/docs/images/location.png">
                                                    <span class="title">Panel Title</span>
                                                </div>
                                                <div class="content padding10">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
                                                </div>
                                            </div>
                                 </div>
                                     -->
                                     <!--  Panel -->
                                     
                                   
                                      <!--  Panel -->
                                      <!--
                                     <div class="cell">
                       
                        <div class="panel">
                            <div class="heading">
                                <span class="icon mif-home"></span>
                                <span class="title">Panel Title</span>
                            </div>
                            <div class="content padding10">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
                            </div>
                        </div>
                    </div>
                                      -->
                            <!--  Panel -->
                            
                            
                                </div>
                                
                                
                                
                                <div class="frame" id="frame_1_2">
                                    
                                     <!--  Panel -->
                                     <!--
                                   <div class="cell">
                                           
                                            <div class="panel" data-role="panel">
                                                <div class="heading">
                                                    <img class="icon" src="<?=base_url()?>node_modules/metro-ui/docs/images/location.png">
                                                    <span class="title">Panel Title</span>
                                                </div>
                                                <div class="content padding10">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
                                                </div>
                                            </div>
                                 </div>
                                     -->
                                     <!--  Panel -->
                                   
                                     <!--  Panel -->
                                     <!--
                                   <div class="cell">
                                           
                                            <div class="panel" data-role="panel">
                                                <div class="heading">
                                                    <img class="icon" src="<?=base_url()?>node_modules/metro-ui/docs/images/location.png">
                                                    <span class="title">Panel Title</span>
                                                </div>
                                                <div class="content padding10">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
                                                </div>
                                            </div>
                                 </div>
                                     -->
                                     <!--  Panel -->
                                     
                                  
                                     
                                     
                                      <!--  Panel -->
                                      <!--
                                     <div class="cell">
                       
                        <div class="panel">
                            <div class="heading">
                                <span class="icon mif-home"></span>
                                <span class="title">Panel Title</span>
                            </div>
                            <div class="content padding10">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
                            </div>
                        </div>
                    </div>
                                      -->
                            <!--  Panel -->
                            
                            
                                </div>
                                
                                
                                <div class="frame" id="frame_1_3">
                                    
                                     <!--  Panel -->
                                     <!--
                                   <div class="cell">
                                           
                                            <div class="panel" data-role="panel">
                                                <div class="heading">
                                                    <img class="icon" src="<?=base_url()?>node_modules/metro-ui/docs/images/location.png">
                                                    <span class="title">Panel Title</span>
                                                </div>
                                                <div class="content padding10">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
                                                </div>
                                            </div>
                                 </div>
                                     -->
                                     <!--  Panel -->
                                   
                                    
                                    
                                     
                                     
                                      <!--  Panel -->
                                      <!--
                                     <div class="cell">
                       
                        <div class="panel">
                            <div class="heading">
                                <span class="icon mif-home"></span>
                                <span class="title">Panel Title</span>
                            </div>
                            <div class="content padding10">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
                            </div>
                        </div>
                    </div>
                                      -->
                            <!--  Panel -->
                            
                                </div>
                              
                                
                                
                                
                                
                            </div>
                        </div>

