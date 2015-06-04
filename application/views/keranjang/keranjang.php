<div class="row">
    <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Buku</th>
                    <th style="width:13%">Jumlah</th>
                    <th style="width:27%" class="text-center">Total</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($this->session->flashdata('notif')): ?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong><?php echo $this->session->flashdata('notif'); ?></strong>
                    </div>
                <?php endif ?>

                <?php if ($this->session->userdata('items')): ?>
                <?php foreach ($data_book as $key => $value): ?>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs">
                                    <img src="<?php echo site_url('img/'.$value->gambar); ?>" alt="" class ="img-responsive" width="100px" height="100px">
                                </div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin"><a href="<?php echo site_url('home/detail/'.$value->id_bk); ?>"><?php echo $value->judul; ?></a></h4>
                                    <p class="harga">Rp. <?php echo number_format($value->harga,0,',','.'); ?></p>
                                    <?php echo form_open('keranjang/hapus/'.$key,array('class'=>'form-inline')); ?>
                                    <br>
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"> Hapus</i></button>
                                    <?php echo form_close(); ?>  
                                </div>
                            </div>
                        </td>
                         <?php echo form_open('keranjang/update/'.$key); ?>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" value="<?php echo $value->jumlah_buku; ?>" min=1 name="jml_bk">
                        </td>
                        <td data-th="Subtotal" class="text-center">
                            Rp <?php echo number_format($value->total,0,',','.'); ?>
                        </td>

                        <td class="actions" data-th="">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-refresh"> Update</i></button>
                            <?php echo form_close(); ?>

                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else: ?>
                 <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Keranjang masih Kosong</strong>
                    </div>
            <?php endif; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="" class="hidden-xs"></td>
                    <td class="text-center">
                        <h4>
                            <strong>Total Harga</strong>
                        </h4>
                    </td>
                    <td class="text-center">
                        <h4>
                            <strong>Rp <?php echo $total; ?></strong>

                        </h4>
                    </td>
                    <td class="text-center"></td>
                </tr>
                <tr>
                    <td><a href="<?php echo site_url('home'); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Lanjut Berbelanja</a></td>
                    <td colspan="2" class="hidden-xs"></td>

                    <td><a href="<?php echo site_url('keranjang/pesan'); ?>" class="btn btn-info btn-block">Pembayaran <i class="fa fa-angle-right"></i></a></td>
                </tr>
                <tr>
                    
                </tr>
            </tfoot>
    </table>
</div>