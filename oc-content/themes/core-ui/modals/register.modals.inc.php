
	<!-- First Responder Registration -->
	<div class="modal" id="registerFirstResponder" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">First Responder Registration</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
			</div>
		<!-- ./ modal-header -->
		<div class="modal-body">
			<form role="form" action="<?php echo BASE_URL . "/" . OCINC ?>/register.php" method="post">
					<div class="form-group row">
						<label class="col-lg-2 control-label">Name</label>
						<div class="col-lg-10">
                        	<input class="form-control" placeholder="Name" name="uname" type="text" required>
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
                        	<input class="form-control" placeholder="Email" name="email" type="email" required>
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-lg-2 control-label">Identifier</label>
						<div class="col-lg-10">
                        	<input class="form-control" placeholder="Identifier (Code Number, Unit ID)" name="identifier" type="text" required>
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-lg-2 control-label">Password</label>
						<div class="col-lg-10">
                        	<input class="form-control" placeholder="Password" name="password" type="password" value="<?php if($testing){echo "password";}?>" required>
						</div>
                    </div>
                    <!-- ./ form-group -->
                    <div class="form-group row">
						<label class="col-lg-2 control-label">Confirm Password</label>
						<div class="col-lg-10">
	                        <input class="form-control" placeholder="Confirm Password" name="password1" type="password" required>
						</div>
                    </div>
                    <!-- ./ form-group -->
                    <div class="form-group row">
                        <label class="col-lg-2 control-label">Division (Select all that apply)</label>
						<div class="col-lg-10">
							<select class="form-control selectpicker" id="division" name="division[]" multiple="multiple" size="6" required>
							<?php getAgencies(); ?>
							</select>
						</div>
                     </div>
			  <!-- ./ form-group -->
		  <div class="modal-footer">
				<input name="register" type="submit" class="btn btn-primary" value="Register" />
			   <button type="reset" class="btn btn-default" value="Reset">Reset</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</form>
		  </div>
		  <!-- ./ modal-footer -->
		</div>
		<!-- ./ modal-content -->
	  </div>
	  <!-- ./ modal-dialog modal-lg -->
	</div>
	</div>
	<!-- ./ modal bs-example-modal-lg -->




	<!-- Civilian Registration -->
	<div class="modal" id="registerCivilian" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">Civilian Registration</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
			</div>
		<!-- ./ modal-header -->
		<div class="modal-body">
			<form role="form" action="<?php echo BASE_URL . "/" . OCINC ?>/register.php" method="post">
					<div class="form-group row">
						<label class="col-lg-2 control-label">Name</label>
						<div class="col-lg-10">
                        	<input class="form-control" placeholder="Name" name="uname" type="text" required>
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
                        	<input class="form-control" placeholder="Email" name="email" type="email" required>
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-lg-2 control-label">Identifier</label>
						<div class="col-lg-10">
                        	<input class="form-control" placeholder="Identifier (Code Number, Unit ID)" name="identifier" type="text" required>
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-lg-2 control-label">Password</label>
						<div class="col-lg-10">
                        	<input class="form-control" placeholder="Password" name="password" type="password" value="<?php if($testing){echo "password";}?>" required>
						</div>
                    </div>
                    <!-- ./ form-group -->
                    <div class="form-group row">
						<label class="col-lg-2 control-label">Confirm Password</label>
						<div class="col-lg-10">
	                        <input class="form-control" placeholder="Confirm Password" name="password1" type="password" required>
						</div>
                    </div>
                    <!-- ./ form-group -->
		  			<div class="modal-footer">
						<input name="civreg" type="submit" class="btn btn-primary" value="Register" />
			   			<button type="reset" class="btn btn-default" value="Reset">Reset</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</form>
		  </div>
		  <!-- ./ modal-footer -->
		</div>
		<!-- ./ modal-content -->
	  </div>
	  <!-- ./ modal-dialog modal-lg -->
	</div>
	</div>
	<!-- ./ modal bs-example-modal-lg -->
