<div class="row">
    <div class="col-sm-3">
        <div class="left-sidebar">
            <!-- <h2>Category</h2> -->
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                <?php foreach ($kategori as $value) {   ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><?php echo anchor('home/kategori_detail/'.$value->id_ktgr.'', "$value->nama"); ?></h4>
                        <!-- <?php var_dump($kategori); ?> -->
                    </div>
                </div>
                <?php }; ?>
            </div><!--/category-productsr-->

        </div>
    </div>
    <div class="col-lg-9">
        <?php foreach($data as $buku){ ?>
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <div class="caption">
                    <img width="115" height="212" src="<?php echo site_url("img/$buku->gambar"); ?>" alt="" />
                    <div class="caption">
                        <h4 class="judul"><a href="{{ URL::to('home/show/'.$buku->id_bk) }}"><?php    echo $buku->judul ?></a></h4>
                        <p>Oleh <?php  echo $buku->nama ?></p>
                        <p class="harga">Rp. <?php echo number_format($buku->harga,0,',','.') ?></p>
                        <p>
                            <a href="" class="btn btn-info btn-xs" role="button">Button</a> 
                            <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>    
</div><!--features_items-->
