<!doctype html>
<html lang="">

<?php $this->load->view('common/css');?>

<body class="body-custom">
<div class="logincard">
	<div class="alert alert-danger" role="alert"> Invalid email or password! </div>
  	<div class="pmd-card card-default pmd-z-depth">
		<div class="login-card">
			<div class="pmd-card-title card-header-border text-center">
				<div class="loginlogo"></div>
				<h3>Sign In <span>with <strong>DIDSS</strong></span></h3>
			</div>
			<div class="pmd-card-body">
				<div class="form-group pmd-textfield pmd-textfield-floating-label">
					<label for="inputError1" class="control-label pmd-input-group-label">Username</label>
					<div class="input-group">
						<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
						<input type="text" class="form-control" id="login_username" name="login_username">
					</div>
				</div>
				
				<div class="form-group pmd-textfield pmd-textfield-floating-label">
					<label for="inputError1" class="control-label pmd-input-group-label">Password</label>
					<div class="input-group">
						<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
						<input type="password" class="form-control" id="login_password" name="login_password">
					</div>
				</div>
			</div>
			<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
				<button onclick="verify_login()" class="btn pmd-ripple-effect btn-primary btn-block">Login</button>
				<p class="redirection-link"></p>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('common/js');?>
</body>
</html>