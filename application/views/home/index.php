<div class="col-lg-9">
    <?php foreach($data as $value){ ?>
    <div class="col-xs-18 col-sm-6 col-md-3">
        <div class="thumbnail">
            <div class="caption">
                <img src="<?php echo site_url('img/'.$value->gambar); ?>" alt="a picture" width="115" height="212">
                <div class="caption">
                    <h5 class="judul text-center"><a href="<?php echo  site_url('home/detail/'.$value->id_bk); ?>"><?php    echo $value->judul ?></a></h5>
                    <p class="text-center">Oleh : <?php  echo $value->nama ?></p>
                    <p class="harga text-center">Rp. <?php echo number_format($value->harga,0,',','.') ?></p>
                    </div>
                </div>
            </div>
    </div>
    <?php } ?>
</div>