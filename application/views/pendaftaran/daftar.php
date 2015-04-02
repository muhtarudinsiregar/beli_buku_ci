<section id="form"><!--form-->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="signup-form"><!--sign up form-->
          <h2>New User Signup!</h2>
          <div class="text-left">

          </div>
          <?php echo form_open('home/pendaftaran', 'role="form"'); ?>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label" name="Nama">Nama*</label>
            <div class="col-sm-9">
              <input type="text" name="nama" class="form-control input-sm" placeholder="Nama" value="<?php echo set_value('nama'); ?>">
              <?php echo form_error('nama'); ?> 
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
            <div class="col-sm-9">
              <input type="email" name="email" class="form-control input-sm" id="inputEmail3" placeholder="Email">
              <?php echo form_error('email'); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
              <input type="password" name="password" class="form-control input-sm" id="inputEmail3" placeholder="Password">
              <?php echo form_error('password'); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Ulangi Password*</label>
            <div class="col-sm-9">
              <input type="password" name="re_password" class="form-control input-sm" id="inputEmail3" placeholder="Re Password">
              <?php echo form_error('re_password'); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Nomer HP</label>
            <div class="col-sm-9">
              <input type="text" name="nohp" class="form-control input-sm" id="inputEmail3" placeholder="No HP">
              <?php echo form_error('nohp'); ?>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
              <button type="submit"class="btn btn-primary">Daftar</button>
            </div>
          </div>
          <!-- <button type="submit" class="btn btn-succes">Signup</button> -->
        <?php echo form_close(); ?>
      </div><!--/sign up form-->
    </div>
  </div>
</div>
</section><!--/form-->