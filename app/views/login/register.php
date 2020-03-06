
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Please create an account</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="register/verify" method="post">
			    <fieldset>
					<div class="form-group">
					  <label for="username" class="col-lg-2 control-label">New Username(Only Numbers and alphabets are allowed!) </label>
					  <div class="col-lg-10">
						<input type="text" pattern="^[a-zA-Z0-9]+$" class="form-control" name="username" placeholder="Username">
		
					  </div>
					</div>
					<div class="form-group">
					  <label for="password" class="col-lg-2 control-label">New Password(Minimum length 8 required!) </label>
					  <div class="col-lg-10">
						<input type="password" class="form-control" name="password" placeholder="Password"   minlength="8" required>
					  </div>
					</div>
					<div class="form-group">
					  <div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-primary">Submit</button>
						  
					  </div>
					</div>
<?php
		if ($_SESSION['usernameused']==1) { ?>
	<div class="row">
    	<div class="col-sm-auto">		
			<div class="alert alert-dismissible alert-danger">
  				
  				USER NAME TAKEN
			</div>
		</div>
	</div>
	<?php }	
	?>				
			    </fieldset>
			</form>
			<a href="/login/register"> Sign in here </a>
        </div>
    </div>

    
