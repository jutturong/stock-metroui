  <!--
                    <li>
                        <a href="#" class="dropdown-toggle">วัสดุโครงสร้าง</a>                      
                    </li>
 -->
<?php
$q=$this->user_model->category();
                          foreach($q->result() as $row)
                          {
                                $id_category=$row->id_category;
                                $category=$row->category;
                                ?>
                                        <li>
                                               <a href="#" class="dropdown-toggle"><?=$category?></a>          
                                        </li>
                                <?php
                          }
?>                          