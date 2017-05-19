<div class="cell spaces8">
<label class="block">รายการสินค้า</label>
<div class="input-control select">
                                                                <select   id="id_product" name="id_product" >
                                                                            <?php
                                                                            //$q=$this->user_model->category();
                                                                            foreach($q->result() as $row )
                                                                            {
                                                                                //$id_category=$row->id_category;
                                                                                //$category=$row->category;
                                                                                $id_product=$row->id_product;
                                                                                $product_name=$row->product_name;
                                                                                $name_product=$row->name_product;
                                                                            ?>
                                                                            <!--
                                                                            <option value="1">กระเบื้องหลังคา</option>
                                                                            <option value="2">ของตกแต่ง</option>
                                                                            <option value="3">ตัวทำละลาย</option>
                                                                            -->
                                                                            <option value="<?=$id_product?>" > <span class="mif-earth mif-2x"></span>  <?=$name_product?> </option>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                </select>
</div>

</div>
<div class="cell spaces8">
    <div class="input-control select">
        <button class="button"  onclick="javascript  :   
                $('#content').load('<?=base_url()?>index.php/welcome/search_product_front/' + $('#id_product').val() );
                "><span class="mif-camera mif-2x fg-green  "></span> Search </button>
    </div>
</div>