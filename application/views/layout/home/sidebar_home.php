<div class="col-lg-3">
    <div class="left-sidebar">
        <!-- <h2>$data</h2> -->
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <?php foreach ($kategori as $value) {   ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title items"><?php echo anchor('home/kategori_detail/'.$value->id_ktgr.'', "$value->nama"); ?></h4>
                </div>
            </div>
            <?php }; ?>
        </div><!--/category-productsr-->
    </div>
</div>