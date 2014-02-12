<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	session_start();
	if(isset($_COOKIE['loggedin']) || !empty($_COOKIE['loggedin'])){
		header('Location: profile.php');
		exit;	
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST'):	
		require_once('includes/validator.php');
		require_once('includes/service.php');
		$validator = new Validator();
		$ucid = isset($_POST['ucid']) ? htmlentities($_POST['ucid']): '';
		$password = htmlentities($_POST['password']);
		$errors = array();
		
		if(empty($_POST['ucid'])){
			$errors[] = "UCID cannot be empty";
		}
		if(empty($_POST['password'])){
			$errors[]= "Invalid Password";
		}
		
		if(empty($errors)){
			  /* There is no errors, process checking data on njit.edu*/
			$njit = new SData();
			if($njit->CURL_Login($ucid,$password)){
				/* User has logged in correctly*/
				setcookie('loggedin', 1, time()+3600*24, '/');
				setcookie('ucid', $ucid, time()+3600*24, '/');
				header('Location: profile.php');
				exit();
			}else{
				$errors[] = "Invalid UCID or password";
			}
			
		}
		
		
		
		
		
		
	endif;
	
	
	
	
	
?>
<?php include('templates/header.php'); ?>
	
	
    <div class="container" style="margin-top:200px;">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
                  
        </div>
        <div class="col-md-4">
         <?php
         	if(isset($errors) && !empty($errors)){
         		echo '<div class="alert alert-danger">';
	         		echo '<ul>';
						foreach($errors as $error){
							echo '<li>' . $error . '</li>';
						}
					echo '</ul>';
				echo '</div>';
         	}
         ?>
         <form role="form" method="post" action="login.php">
         	 <h2>Log in</h2>
			  <div class="form-group">
			    <label for="ucid">UCID</label>
			    <input type="text" class="form-control" id="ucid" name="ucid" placeholder="UCID" value="">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="">
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox">Remember me
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
         
         
         
         
         
       </div>
        <div class="col-md-4">
       	
        </div>
      </div>

      <hr>

      <footer>
        <center><p>&copy; CS490 NJIT Project &dash 2014</p>
      </footer>
    </div> <!-- /container -->

<?php include('templates/footer.php'); ?>
