<div class="col-lg-9">
    <?php foreach($data as $buku){ ?>
        <div class="col-md-3">
            <div class="thumbnail">
                <div class="caption">
                    <img width="115" height="212" src="<?php echo site_url("img/$buku->gambar"); ?>" alt="" />
                    <div class="caption">
                        <h5 class="judul text-center"><?php echo anchor('home/detail/'.$buku->id_bk.'',"$buku->judul"); ?></h5>
                        <p>Oleh <?php  echo $buku->penulis ?></p>
                        <p class="harga">Rp. <?php echo number_format($buku->harga,0,',','.') ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>    