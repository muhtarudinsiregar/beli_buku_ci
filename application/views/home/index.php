<div class="col-lg-9">
    <?php foreach($data as $value){ ?>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail thumbnail-custom">
            <div class="caption">
            <img src="<?php echo site_url('img/'.$value->gambar); ?>" alt="a picture">
                <div class="caption">
                    <h5 class="judul text-center"><a href="<?php echo  site_url('home/detail/'.$value->id_bk); ?>"><?php    echo $value->judul ?></a></h5>
                    <h6 class="text-center">Oleh : <?php  echo $value->nama ?></h6>
                    <h4 class="harga text-center">Rp. <?php echo number_format($value->harga,0,',','.') ?></h4>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>
</div>