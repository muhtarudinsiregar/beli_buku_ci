<div class="container">    
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                 
    <div class="panel panel-info" >
      <div class="panel-heading">
        <div class="panel-title">Daftar </div>
        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
      </div>     

      <div class="panel-body" style="padding-top:30px">
      <?php echo form_open('daftar', array('class'=>'form-horizontal')); ?>
      <div class="form-group">
        <label for="email" class="col-md-2  control-label">Email</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="email" placeholder="Alamat Email" 
          value="">
        </div>
      </div>

      <div class="form-group">
        <label for="firstname" class="col-md-2  control-label">Nama Lengkap</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
        </div>
      </div>
      <div class="form-group">
        <label for="firstname" class="col-md-2  control-label">Nomor Hp</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-md-2  control-label">Password</label>
        <div class="col-md-9">
          <input type="password" class="form-control" name="password" placeholder="Password"> 
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-md-2  control-label">Ulangi Password</label>
        <div class="col-md-9">
          <input type="password" class="form-control" name="re_password" placeholder=" Ulangi Password"> 
        </div>
      </div>
      <div class="form-group">
        <!-- Button -->                                        
        <div class="col-md-offset-3 col-md-9">
          <button id="btn-signup" type="submit" class="btn btn-info">Daftar</button>
          <span style="margin-left:8px; margin-right:8px;">or</span>
          <button id="btn-signup" type="submit" class="btn btn-success">Masuk
          </button>
        </div>
      </div>
      <?php echo form_close(); ?> 
      </div> 
    </div>                     
  </div>  
</div>