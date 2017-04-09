<table  class="table striped hovered cell-hovered border bordered">
                            <thead>
                                <tr>
                                  <!--  <th class="sortable-column">Column</th> -->
                                    <th class="sortable-column sort-asc">หมวดหมู่สินค้า</th>
                              <!--      <th class="sortable-column sort-desc">Column</th> -->
                                </tr>
                                <?php
                                   foreach($q->result() as $row)
                                   {
                                        $category=$row->category;
                                        $id_category=$row->id_category;
                                        ?>
                                <tr>
                            <td>
                                <!-- Small radio button -->
<label class="input-control radio small-check">
    <input type="radio" id="<?=$category?>" value="<?=$id_category?>" name="ra_category">
    <span class="check"></span>
    <span class="caption"><?=$category?></span>
</label>
                                
                               
                            </td>
                                </tr>
                                       <?php
                                   }
                                ?>
                            </thead>
                                            </table> 