
    <div class="row">
        <div class="col-lg-3">
            <div class="left-sidebar">
                <!-- <h2>Category</h2> -->
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                    <?php foreach ($kategori as $value) {   ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a href="#"><?php echo $value->nama; ?></a></h4>
                        </div>
                    </div>
                    <?php }; ?>
                </div><!--/category-productsr-->
            </div>
        </div>
        <div class="col-lg-9">
            <?php foreach($data as $value){ ?>
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <div class="caption">
                        <img src="<?php echo site_url('img/'.$value->gambar); ?>" alt="a picture" width="115" height="212">
                        <div class="caption">
                            <h4 class="judul text-center"><a href="<?php echo  site_url('home/detail/'.$value->id_bk); ?>"><?php    echo $value->judul ?></a></h4>
                            <p>Oleh : <?php  echo $value->nama ?></p>
                            <p class="harga">Rp. <?php echo number_format($value->harga,0,',','.') ?></p>
                             <p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>    
    </div><!--features_items-->

