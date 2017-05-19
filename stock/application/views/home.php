

<!DOCTYPE html>
<html>
<head lang="en">
  <title><?=$title?></title>
<?=$this->load->view("import")?>

<!--
   /*
     //------------ บันทึกข้อมูลแล้วให้ไปโหลดรายการสินค้าจากหน้า admin --------------------------
                                //1..    http://localhost/stock/index.php/welcome/home/welcome/load_product  //บันทึกข้อมูลสำเร็จให้โหลดข้อมูลหน้าสินค้า
                                //2.    http://localhost/stock/index.php/welcome/load_product   //โหลดสินค้าหลังจากบันทึกข้อมูลเสร็จ
                                
                                 $data["uri"]=trim($this->uri->segment(4));
  */
   -->
   
<script type="text/javascript">
   // location.reload(); 
</script> 


   <script type="text/javascript" >
        $(function(){
             var  uri3="<?=$uri3?>";
              var  uri4="<?=$uri4?>";
              
              //  โหลดรายการสินค้าทั้งหมดหลังจากทำการเพิ่มรายการสินค้า
            if(  uri4.length > 0  )
            {
                      //http://localhost/stock/index.php/welcome/home/welcome/load_product
                       $('#content').load('<?=base_url()?>index.php/<?=$uri3?>/<?=$uri4?>');  
                       $("#tab_product").tabcontrol({
                           });      
            }
            else{
                $('#content').load('<?=base_url()?>index.php/welcome/mainconent/'); 
            }
             
        });
   </script>
   
  
    <style>
        @media screen and (max-width: 640px) {
            .countdown {
                font-size: 1rem !important;
            }
        }
    </style>
    
    

</head>
<!--
<body  onload="javascript: $('#content').load('<?=base_url()?>index.php/welcome/mainconent/');  ">
    -->
    <body>
    <!-- Head menu -->
    <div>
        <?=$this->load->view("header")?>
    </div>
    <!-- Head menu -->
    
    <!--  PAGE Content -->
    <div class="page-content">
        
        
        <!--  Content 1  class="bg-lightBlue fg-white align-center"
        <div class="bg-lightBlue fg-white align-center">
            <div class="container">
                <div class="no-overflow" style="padding-top: 40px">
                    
                    
                    <h1> content1 </h1>
                    
                    @@adsense

                    <br />
                    <br />
                    <br />
                    <h1 style="font-size: 4.5rem; line-height: 1" class="text-shadow metro-title text-light">Metro UI CSS 3.0</h1>
                    <div class="padding30 sub-leader text-light">
                        The front-end framework for developing projects on the web in Windows Metro Style
                    </div>
                    <p class="" style="margin-top: 10px; padding: 0 50px">
                        Metro UI CSS developed with the advice of Microsoft to build the user interface and include: general styles, grid, layouts, typography, 20+ components, 300+ built-in icons.
                        Metro UI CSS build with {LESS}. Metro UI CSS is open source and has MIT licensing model.
                    </p>

                    <div class="margin30 align-center leader">
                        The project is looking for sponsors!
                    </div>

                    <div class="margin60">
                        <div class="clear-float">
                            <a href="https://github.com/olton/Metro-UI-CSS/archive/master.zip"><button class="button big-button block-shadow success loading-pulse lighten" >Download Now</button></a>
                            <a href="https://github.com/olton/Metro-UI-CSS"><button class="button big-button block-shadow warning loading-cube lighten">Github for V3</button></a>
                            <a href="https://github.com/olton/Metro-UI-CSS/tree/metrouicss-2x"><button class="button big-button block-shadow info loading-cube lighten" >Github for V2</button></a>
                        </div>
                        <br />
                        <div class="align-center">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="8JQAAX78EMT4E">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>

                    <small>Currently v3.0.14<br/><a class="fg-yellow" href="http://metroui.org.ua/v2/">Documentation for v2 can be found here</a></small>

                    <div class="grid no-margin-bottom" style="margin-top: 100px" id="g1">
                        <div class="row cells3">
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-yellow fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 85px;">
                                    <h2 class="text-light">easy to use</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-green fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 85px;">
                                    <h2 class="text-light">less source</h2>
                                </div>
                            </div>
                            <div class="cell no-overflow" style="height: 85px">
                                <div class="bg-red fg-white block-shadow" style="height: 85px; padding-top: 20px; margin-top: 85px;">
                                    <h2 class="text-light">mit license</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script  type="text/javascript">
                        $(function(){
                            setTimeout(function(){
                                $("#g1 .cell > div:eq(0)").animate({
                                    'margin-top': 0
                                }, 500, 'easeOutBounce');
                                $("#g1 .cell > div:eq(1)").animate({
                                    'margin-top': 0
                                }, 1000, 'easeOutBounce');
                                $("#g1 .cell > div:eq(2)").animate({
                                    'margin-top': 0
                                }, 1500, 'easeOutBounce');
                            }, 500);
                        });
                    </script>
                    
                    
                    
                </div>
                
                
                
            </div>
        </div>
      Content 1  class="bg-lightBlue fg-white align-center"       -->
        
        

        <div class="fg-dark">
            <div class="container">
                
                <!--  เนื้อหาจาก DB -->
                <div class="padding10" style="padding-top: 20px; padding-left: 10px; ">
                     <?php  //$this->load->view($content);   ?>
                    <span id="content"></span>
                </div>
               <!--  เนื้อหาจาก DB -->
                 
                 
                <!--
                <div class="padding80" style="padding-top: 40px">
                    <div class="">
                        <div class="grid">
                            <div class="row cells3">
                                <div class="cell no-phone">
                                    <div class="image-container bordered">
                                        <div class="frame">
                                            <img src="<?=base_url()?>node_modules/metro-ui/docs/images/whats-new.jpg">
                                        </div>
                                    </div>
                                </div>
                                <div class="cell colspan2" style="padding-left: 20px">
                                    <h1 class="">Whats new in 3.0</h1>
                                    <ol class="numeric-list square-marker">
                                        <li>compatible with <strong>Angular<span class="fg-red">JS</span></strong> and <strong>Require<span class="fg-red">JS</span></strong></li>
                                        <li>full code refactoring &amp; new components</li>
                                        <li>declarative approach to the definition of components</li>
                                        <li>framework itself monitors components, pressure via ajax</li>
                                        <li>create cool page without knowledge of javascript</li>
                                        <li>support classic approach to definition of components</li>
                                    </ol>
                                    <p class="no-display">
                                    The main feature in version 3 is: a declarative approach to the definition and initialization of components, and the framework itself monitors components, pressure via ajax. When a declarative definition of all component parameters are set via data-* attributes, including methods and events of the component. This approach allows to further separate html and javascript code. Now that would determine which component do not need to know javascript :). It is still possible to determine which component directly via javascript.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        @@adsense
                    </div>


                    <br />
                    <hr class="thin" />

                    <div>
                        <h1 class="margin40">Simple steps to create cool pages</h1>
                        <ul class="step-list">
                            <li>
                                <h4>Create page with HTML5 DOCTYPE</h4>
                                <pre class="prettyprint linenums no-phone no-scroll"><code>
                                    &lt;!DOCTYPE html&gt;
                                </code></pre>
                            </li>
                            <li>
                                <h4>Include required styles and libs</h4>
                                <pre class="prettyprint linenums no-phone no-scroll"><code>
                                    &lt;!DOCTYPE html&gt;
                                    &lt;html&gt;
                                    &lt;head&gt;
                                        &lt;link href="metro.css" rel="stylesheet"&gt;
                                        &lt;script src="jquery.js"&gt;&lt;/script&gt;
                                        &lt;script src="metro.js"&gt;&lt;/script&gt;
                                    &lt;/head&gt;
                                    &lt;/html&gt;
                                </code></pre>
                            </li>
                            <li>
                                <h4>Use declarative style to create components</h4>
                                <pre class="prettyprint linenums no-phone no-scroll"><code>
                                    &lt;!DOCTYPE html&gt;
                                    &lt;html&gt;
                                    &lt;head&gt;
                                        &lt;link href="metro.css" rel="stylesheet"&gt;
                                        &lt;script src="jquery.js"&gt;&lt;/script&gt;
                                        &lt;script src="metro.js"&gt;&lt;/script&gt;
                                    &lt;/head&gt;
                                    &lt;body&gt;
                                        &lt;h1&gt;Hello world!&lt;/h1&gt;
                                        &lt;div class="countdown" data-role="countdown" data-days="2"&gt;&lt;/div&gt;
                                    &lt;/body&gt;
                                    &lt;/html&gt;
                                </code></pre>
                            </li>
                            <li>
                                <h4>Enjoy the result</h4>
                                <div class="padding20 bg-grayLighter no-phone">
                                    <h1>Hello world!</h1>
                                    <div class="countdown" data-role="countdown" data-days="2"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                -->
                
                
                
            </div>
        </div>

        
         <!--   Content2 class="bg-steel no-tablet-portrait no-phone"
        <div class="bg-steel no-tablet-portrait no-phone">
            
            <h1>content3</h1>
            
           
            <div class="container padding20 fg-white">
                <div class="carousel bg-transparent" data-role="carousel" data-controls="false" data-markers="false" data-effect="fade" data-height="200">
                    <div class="slide fg-white">
                        <div class="place-left" style="margin-right: 20px">
                            <img src="<?=base_url()?>node_modules/metro-ui/docs/images/css-logo.png" style="height: 200px">
                        </div>
                        <h1>Developed with advice</h1>
                        <p>Metro UI CSS developed with the advice of Microsoft to build the user interface and include: general styles, grid, layouts, typography, 20+ components, 300+ built-in icons.</p>
                        <p>Metro UI CSS build with {LESS}. Metro UI CSS is open source and has MIT licensing model.</p>
                    </div>

                    <div class="slide fg-white">
                        <div class="place-left" style="margin-right: 20px">
                            <img src="<?=base_url()?>node_modules/metro-ui/docs/images/bizspark_b_2.png" style="height: 200px">
                        </div>
                        <h1>BizSpark Startup</h1>
                        <p>Metro UI CSS is a BizSpark Startup. Microsoft BizSpark is a global program that helps software startups succeed by giving them access to software development tools, connecting them with key industry players, and providing marketing visibility.</p>
                        <p>BizSpark provides free software, support, and visibility to help startups succeed. Join BizSpark and become part of a global community that has over 50,000 members in 100+ countries.</p>
                        <a class="button primary" href="http://bizspark.com">Join the BizSpark Program now</a>
                    </div>

                    <div class="slide fg-white">
                        <div class="place-left" style="margin-right: 20px">
                            <img src="<?=base_url()?>node_modules/metro-ui/docs/images/phpstorm_7_eap.png" style="height: 200px">
                        </div>
                        <h1>Thanks to JetBrains</h1>
                        <p>Thanks to the company JetBrains for supporting the project in the form of a license for a great product PhpStorm.</p>
                        <a class="button success" href="http://www.jetbrains.com/phpstorm/">Get PhpStorm now!</a>
                    </div>
                </div>
            </div>
            
            
            
        </div>
     Content2 class="bg-steel no-tablet-portrait no-phone"   -->
        
        
        
    </div>
    <!--  PAGE Content -->
    
    <div>
        <?php  //$this->load->view("footer");  ?>
    </div>

    
    
  



</body>

</html>