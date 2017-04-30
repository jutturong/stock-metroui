<script type="text/javascript">
        $(function(){
            $('#cc').combo({
                required:true,
                editable:false,
                label:'Language:',
                labelPosition:'top'
            });
            $('#sp').appendTo($('#cc').combo('panel'));
            $('#sp input').click(function(){
                var v = $(this).val();
                var s = $(this).next('span').text();
                $('#cc').combo('setValue', v).combo('setText', s).combo('hidePanel');
            });
        });
    </script>

<script type="text/javascript">
     $(function()
     {
         $('#menu_category').load('<?=base_url()?>index.php/welcome/menu_category');
     });
</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!--
<script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
  -->
 

<header class="app-bar fixed-top navy" data-role="appbar">
    <div class="container">
        
        <!--
        <a href="/" class="app-bar-element branding">
            
           
            <img src="<?=base_url()?>node_modules/metro-ui/docs/images/wn8.png" style="height: 28px; display: inline-block; margin-right: 10px;"> 
           
            
            <span class="mif-visa mif-1x fg-white"></span>
            
            Point
            
        </a>
        -->
        

        <ul class="app-bar-menu small-dropdown">
            
            <!--
            <li>
                <a href="#" class="dropdown-toggle">
                     <span class="mif-money mif-1x fg-white"></span>
                    โปรโมชั่น</a>
                
                
                
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <li class="disabled"><a href="overview.html">Overview</a></li>
                    <li class="divider"></li>
                    
                    
                    <li>
                        <a href="" class="dropdown-toggle">โปรโมชั่นหลักประจำร้าน</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="grid.html">Simple grid</a></li>
                            <li><a href="flexgrid.html">Flex grid</a></li>
                        </ul>
                    </li>
                    
                    
                    <li><a href="typography.html">โปรโมชั่นประจำเดือน</a></li>
                    <li><a href="tables.html">โปรโมชั่นคลับ</a></li>
                    <li><a href="inputs.html">โปรโมชั่นประจำสาขา</a></li>
                    <li><a href="buttons.html">โปรโมชั่น LINE@</a></li>
                    <li><a href="images.html">Images</a></li>
                    <li><a href="font.html">Metro Icon Font</a></li>
                    <li class="divider"></li>
                    <li><a href="colors.html">Colors</a></li>
                    <li><a href="helpers.html">Helpers classes</a></li>
                    <li class="divider"></li>
                    <li><a href="rtl.html">RTL Support</a></li>
                    <li class="disabled"><a href="responsive.html">Responsive</a></li>
                </ul>
            </li>
            -->
            
            <!-- หน้าหลักของโปรแกรม -->
             <li>
                 <a href="#"  onclick="javascript: $('#content').load('<?=base_url()?>index.php/welcome/mainconent/');  "  class="app-bar-element branding">
                         <span class="mif-file-picture mif-2x" style="color: white;"></span>
                         <!--  <img src="<?=base_url()?>node_modules/metro-ui/docs/images/wn8.png" style="height: 28px; display: inline-block; margin-right: 10px;"> -->
                 </a>
            </li>
             <!-- หน้าหลักของโปรแกรม -->
            
            <!-- หยิบของใส่ตระกร้าสินค้า -->
             <li>
                 <a href="#" class="app-bar-element branding" onclick="javascript:  
                            // var  load1=$('#content').load('<?=base_url()?>index.php/welcome/mainconent/'); 
                             showMetroDialog('#dia_shopping');     
                    ">      
                     <span id="value_baseket"></span>  
                     <span class="mif-shop mif-2x fg-white" ></span>
                      <!--  <img src="<?=base_url()?>node_modules/metro-ui/docs/images/wn8.png" style="height: 28px; display: inline-block; margin-right: 10px;"> -->
                </a>
         </li>
          <!-- หยิบของใส่ตระกร้าสินค้า -->
          
          <!-- ค้นหารายการสินค้า -->
          <!--  onclick="metroDialog.toggle('#dialog')"  -->
          <li>
               <a href="#" class="app-bar-element branding"  onclick="  showMetroDialog('#dia_search_product');   " >      
                     <span id="value_baseket"></span>  
                     <span class="mif-camera mif-2x fg-white" ></span>
                      <!--  <img src="<?=base_url()?>node_modules/metro-ui/docs/images/wn8.png" style="height: 28px; display: inline-block; margin-right: 10px;"> -->
                </a>
          </li>
         <!-- ค้นหารายการสินค้า -->
            
            
    <!--  origin  หมวดหมู่สินค้า -->
               <!--
            <li>
                <a href="#" class="dropdown-toggle">
                     <span class="mif-sync-problem  mif-1x fg-black"></span>
                    หมวดหมู่สินค้า
                </a>
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <li>
                        <a href="#" class="dropdown-toggle">วัสดุโครงสร้าง</a>
                        
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="appbar.html">Application bar</a></li>
                            <li><a href="menu.html">Menus</a></li>
                            <li><a href="fluent-menu.html">Fluent menu</a></li>
                            <li><a href="sidebar.html">Sidebar</a></li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">ปูน</a>
                        
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="accordion.html">Accordion</a></li>
                            <li><a href="button-groups.html">Button groups</a></li>
                            <li><a href="keypad.html">Keypad</a></li>
                            <li><a href="tabcontrol.html">Tab Control</a></li>
                            <li><a href="treeview.html">TreeView</a></li>
                            <li><a href="listview.html">ListView</a></li>
                            <li><a href="sliders.html">Slider</a></li>
                            <li><a href="stepper.html">Stepper</a></li>
                            <li><a href="wizard.html">Wizard</a></li>
                            <li><a href="wizard2.html">Wizard2</a></li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">เหล็ก</a>
                        
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="tiles.html">Tiles</a></li>
                            <li><a href="carousel.html">Carousel</a></li>
                            <li class="no-display"><a href="windows.html">Windows</a></li>
                            <li><a href="popovers.html">Popovers</a></li>
                            <li><a href="progressbar.html">Progress Bar</a></li>
                            <li><a href="panels.html">Panels</a></li>
                            <li><a href="rating.html">Rating</a></li>
                            <li><a href="preloaders.html">Preloaders</a></li>
                            <li><a href="hints.html">Hints</a></li>
                            <li><a href="streamer.html">Streamer</a></li>
                            <li><a href="presenter.html">Presenter</a></li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">หลังคา</a>
                        
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="notify.html">Notify system</a></li>
                            <li><a href="dialog.html">Dialogs</a></li>
                            <li><a href="windows.html">Window</a></li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">ไม้</a>
                        
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="datepicker.html">Datepicker</a></li>
                            <li><a href="countdown.html">Countdown</a></li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">ท่อ</a>
                        
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="video-player.html">Video player</a></li>
                            <li><a href="audio-player.html">Audio player</a></li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">กระเบื้องหลังคา</a>
                        
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="validator.html">Form Validator</a></li>
                            <li><a href="draggable.html">Draggable</a></li>
                        </ul>
                       
                    </li>
                    <li><a href="#" class="dropdown-toggle">ของตกแต่ง</a></li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="dropdown-toggle">ตัวทำละลาย</a>
                        
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="events.html">Event binding</a></li>
                            <li><a href="hotkeys.html">Hotkey binding</a></li>
                        </ul>
                        
                    </li>
                    <li class="divider"></li>
                    
                    <li>
                        <a href="#" class="dropdown-toggle">Third-party</a>
                        <ul class="d-menu" data-role="dropdown" data-no-close="true">
                            <li><a href="select2.html">Select2</a></li>
                            <li><a href="datatables.html">DataTables</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Utils</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li class="divider"></li>
                            <li><a href="easing.html">Easing functions</a></li>
                            <li><a href="requirejs.html">RequireJS</a></li>
                            <li class="disabled"><a href="precode.html">PreCode</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </li>
            -->
     <!--  origin  หมวดหมู่สินค้า -->
            
            
            <!-- หมวดหมู่สินค้า database server -->
            <li>
                <a href="#" class="dropdown-toggle">
                     <span class="mif-table  mif-1x fg-white"></span>
                    หมวดหมู่สินค้า
                </a>
                 <ul class="d-menu" data-role="dropdown" data-no-close="true">
                     <!--
                    <li>
                        <a href="#" class="dropdown-toggle">วัสดุโครงสร้าง</a>                      
                    </li>
                    -->
                                        <span  id="menu_category" ></span>                   
                 </ul>
            </li>
             <!-- หมวดหมู่สินค้า database server -->
                
       
            

            <li>
                <a href="#" class="dropdown-toggle">
                    <span class="mif-user mif-1x fg-white"></span>
                    สมาชิก  </a> 
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <li><a href="templates/start-screen.html"><span class="mif-gift mif- 1x fg-white"></span>  แต้มสะสม</a></li>
                    <li><a href="templates/news-portal.html"><span class="mif-user-plus mif-1x fg-white"></span> เปลี่ยนรหัสผ่าน</a></li>
                    <li><a href="templates/login.html"><span class="mif-upload mif-1x fg-white"></span> เติมเงิน</a></a></li>
                    <li><a href="templates/admin-sidebar-appbar.html"><span class="mif-profile mif-1x fg-white"></span> โปรโมชั่นสินค้า</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="dropdown-toggle">
                     <span class="mif-truck mif-1x fg-white"></span>
                    บริการลูกค้า</a>
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <!--<li><a href="http://forum.metroui.org.ua"><span class="mif-bubbles mif-1x fg-white"></span> ติดต่อเราทาง LINE@</a></li>-->
                   <!-- <li><a href="https://github.com/olton/Metro-UI-CSS"><span class="mif-shop mif-1x fg-white"></span> แจ้งคืนสินค้า</a></li> -->
                    <li class="divider"></li>
                      <li><a href="https://github.com/olton/Metro-UI-CSS"><span class="mif-gas-station mif-1x fg-white"></span> รายการสินค้าที่ซื้อทั้งหมด</a></li>
                    <li><a href="<?=base_url()?>report_pdf/stock/dbreport.php" target="_blank"><span class="mif-keyboard mif-1x fg-white"></span> ออกใบเสร็จ / ชำระสินค้า </a></li>
                </ul>
            </li>
            
            <!--
            <li>
                 <a href="/" class="app-bar-element branding">
             <span class="mif-map mif-1x fg-white"></span>
            <img src="<?=base_url()?>node_modules/metro-ui/docs/images/wn8.png" style="height: 28px; display: inline-block; margin-right: 10px;"> 
            ติดต่อเรา
            
        </a>
            </li>
            -->
            
            
           
            
          
            
           <?php
           if( $sess_level==1)
           {   
           ?>
            <li>
                  <a href="#" class="dropdown-toggle" >
             <span class="mif-move-up mif-1x fg-white"></span>
          <!--  <img src="<?=base_url()?>node_modules/metro-ui/docs/images/wn8.png" style="height: 28px; display: inline-block; margin-right: 10px;"> -->
          Admin
        </a>
                
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <li><a  href="#"   onclick="javascript: $('#content').load('<?=base_url()?>index.php/welcome/manageuser');   "   ><span class="mif-user-plus mif-1x fg-black"></span> Manage User</a></li>
                    <li><a href="#"><span class="mif-equalizer mif-1x fg-black"></span> Billing ร้านค้า/ลูกค้า</a></li>
                    <li class="divider"></li>
                    <li><a href="#"  onclick="javascript:  $('#content').load('<?=base_url()?>index.php/welcome/form_product');   $('#tb_category').load('<?=base_url()?>index.php/welcome/load_category'); "  ><span class="mif-floppy-disk mif-1x fg-black"></span> เพิ่มรายการสินค้า </a></li>
                </ul>
                
                
            </li>
            <?php
           }
            ?>
            
            
              <li>
                 <a href="<?=base_url()?>index.php/welcome/index/" class="app-bar-element branding">
             <span class="mif-switch mif-1x fg-white"></span>
          <!--  <img src="<?=base_url()?>node_modules/metro-ui/docs/images/wn8.png" style="height: 28px; display: inline-block; margin-right: 10px;"> -->
          
            
        </a>
            </li>
            
        </ul>

        <span class="app-bar-pull"></span>

    </div>
</header>



<!--
<div id="dlg" class="easyui-dialog" title="Basic Dialog" data-options="iconCls:'icon-save'" style="width:400px;height:200px;padding:10px">
        The dialog content.
 </div>
-->

<!-- Dialog  update  form product -->
  <div data-role="dialog" id="dia_search_product"   class="padding20 dialog warning"    data-close-button="true" data-type="info" style="width: auto; height: auto; visibility: hidden;">
 
      <!--
      <h1>Simple dialog</h1>
    <p>
        Dialog :: Metro UI CSS - The front-end framework
        for developing projects on the web in Windows Metro Style.
    </p>
      -->
       <h1>ระบบค้าหาสินค้า</h1>
      
      
    
      <div class="grid">   
                                        <div class="row cell8">
                                                        <div class="cell spaces8">
                                                                      <label class="block">หมวดหมู่สินค้า</label>
                                                                      <!-- load_sr_product  -->
                                                                      <div class="input-control select" onchange="       ">                                                                                                                                  
                                                                          <select  id="id_category" name="id_category"  onchange="   
                                                                                     javascript :  
                                                                                     //http://localhost/stock/index.php/welcome/search_product
                                                                                       $('#load_sr_product').load('<?=base_url()?>index.php/welcome/search_product/'  + $('#id_category').val()   );
                                                                                   "  >
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
                                                   
                                                                    
                                                                      <span id="load_sr_product"></span>
                                                                     
                                                                                <!--
                                                                            <div class="input-control select">
                                                                                <select  id="id_category" name="id_category" >

                                                                                </select>
                                                                               --> 
                                                                              
                                                                             
                                                                     
                                                   
                                        </div>
      </div>    
</div>

 <!-- Dialog  update  form product -->




