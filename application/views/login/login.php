<div class="container">    
	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                 
		<div class="panel panel-info" >
			<div class="panel-heading">
				<div class="panel-title">Masuk </div>
				<!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
			</div>     
			<div class="panel-body" style="padding-top:30px">
				<?php echo form_open('login/do_login', array('class'=>'form-horizontal')); ?>
				<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input id="login-username" type="text" class="form-control" name="email" value="" placeholder="email">  </div>
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
					</div>
					<!-- <div class="input-group">
						<div class="checkbox">
							<label>
								<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
							</label>
						</div>
					</div> -->


					<div style="margin-top:10px" class="form-group">
						<!-- Button -->

						<div class="col-sm-12 controls">
							
							<button id="btn-login" type="submit" class="btn btn-success">Masuk</button>
						</div>
					</div>
					
				</div>  
				<?php echo form_close(); ?> 
			</div> 
		</div>                     
	</div>  
</div>