<div class="container">    
   <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                 
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Daftar </div>
            </div>     
            <div class="panel-body" style="padding-top:30px">
                <!-- <?php if (validation_errors()): ?> -->
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo validation_errors(); ?>
                    </div>
                <!-- <?php endif ?> -->
               <?php if ($this->session->flashdata('sukses')): ?>
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Berhasil</strong> <?php echo $this->session->flashdata('sukses'); ?>
                </div>
               <?php endif ?>
                <?php echo form_open('daftar', array('class'=>'form-horizontal')); ?>
                <div class="form-group">
                   <label for="email" class="col-lg-3  control-label">Email</label>
                   <div class="col-md-9">
                      <input type="text" class="form-control" name="email" placeholder="Alamat Email" 
                      value="<?php echo set_value('email'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-lg-3  control-label">Nama Lengkap</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-lg-3  control-label">Nomor Hp</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP" value="<?php echo set_value('no_hp'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-3  control-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="password" placeholder="Password"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-3  control-label">Ulangi Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="re_password" placeholder=" Ulangi Password"> 
                    </div>
                </div>
                <div class="form-group">
                  <!-- Button -->                                        
                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-signup" type="submit" class="btn btn-info" value="" name="submit">Daftar</button>
                        <!-- <span style="margin-left:8px; margin-right:8px;">or</span>
                        <button id="btn-signup" type="submit" class="btn btn-success">
                            Masuk
                        </button> -->
                    </div>
                </div>
                <?php echo form_close(); ?> 
            </div> 
        </div>                     
    </div>  
</div>