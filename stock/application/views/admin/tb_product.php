  <!-- table  of product --> 
                                  <!--  <table  class="table striped hovered cell-hovered border bordered">  -->
                                   <table  class="table striped hovered cell-hovered border bordered">
                            <thead>
                                <tr>
                                  <!--  <th class="sortable-column">Column</th> -->
                                    <th class="sortable-column ">หมวดหมู่สินค้า</th>
                              <!--      <th class="sortable-column sort-desc">Column</th> -->
                                      <th class="sortable-column ">รูปสินค้า</th>
                                       <th class="sortable-column ">รหัสสินค้า</th>
                                       <th class="sortable-column ">ชื่อสินค้า</th>
                                          <th class="sortable-column ">แบรนด์สินค้า</th>
                                           <th class="sortable-column ">จำนวน</th>
                                           <th class="sortable-column ">ราคา</th>
                                          <th class="sortable-column ">รายละเอียดสินค้า</th>
                                </tr>
                                <?php
                                  
                                     // $this->db->order_by($tb_product.".id_product","DESC");
                                    foreach($q_product->result() as $row)
                                    {
                                        $id_product=$row->id_product;
                                        $category=$row->category;  //หมวดหมู่สินค้า
                                        $product_name=$row->product_name;  //รูปสินค้า
                                        $code_product=$row->code_product;  //รหัสสินค้า
                                        $name_product=$row->name_product;  //ชื่อสินค้า
                                        $brand_product=$row->brand_product;  //แบรนด์สินค้า
                                        $number_product=$row->number_product;  //จำนวนสินค้า
                                        $price_product=$row->price_product;  //ราคาสินค้า
                                        $description_product=$row->description_product;  //รายละเอียดสินค้า
                                    
                                ?>
                                <tr>
                                    <td>
                                        
                                               <label class="input-control radio small-check">
                                                    <input type="radio" id="<?=$id_product?>" value="<?=$id_product?>" name="ra_product">
                                                    <span class="check"></span>
                                                    <span class="caption"><?=$category?></span>
                                                </label>
                                        
                                        
                                    </td>
                                    <td>
                                          <img  id="zoom_01"    srcset='<?=base_url()?>picture/20170119_1060891.jpg 1x, <?=base_url()?>uploadfile/<?=$product_name?> 2x'   class="icon" src="<?=base_url()?>uploadfile/<?=$product_name?>" style="width:150px;"   />
              
                                    </td>
                                    <td>
                                        <?=$code_product?>         
                                    </td>
                                    <td>
                                        <?=$name_product?>
                                    </td>
                                    <td>
                                        <?=$brand_product?>
                                    </td>
                                    <td>
                                        <?=$number_product?>
                                    </td>
                                    <td>
                                        <?=$price_product?>
                                    </td>
                                    <td>
                                        <?=$description_product?>
                                    </td>
                                    
                                </tr>
                                <?php
                                    }
                                ?>
                            </thead>
                                   </table>
                             <!-- table  of product -->          