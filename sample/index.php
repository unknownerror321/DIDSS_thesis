<?php require_once 'views/headers/loginheader.php'; ?>
<div class="logincard">
  	<div class="pmd-card card-default pmd-z-depth">
		<div class="login-card">
			<form>
				<div class="pmd-card-title card-header-border text-center">
					<div class="loginlogo"></div>
					<h3><span><strong>DIDSS</strong></span></h3>
				</div>
				<div class="pmd-card-body">
					<div class="alert alert-success" role="alert"> Oh snap! Change a few things up and try submitting again. </div>
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
                            <input type="text" class="form-control" id="login_password" name="login_password">
                        </div>
                    </div>
                </div>
				<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
					<button type="submit" formmethod="post" name="btn_login" class="btn pmd-ripple-effect btn-primary btn-block">Login</button>
                    <a href="index.html" >Login</a>
				</div>
			</form>
		</div>
	</div>
</div>
<?php require_once 'views/footers/loginfooter.php'; ?>