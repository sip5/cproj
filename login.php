<?php
error_reporting(E_ALL);
	ini_set('display_errors', 1);
	if($_SERVER['REQUEST_METHOD'] == 'POST'):	
		require_once('includes/validator.php');
		$validator = new Validator();
		$errors = array("1", "2", "3");
		
		
		
		
		
	endif
	
	
	
	
	
?>
<?php include('templates/header.php'); ?>
	
	<br/><br/><br/><br/><br/><br/>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
         
         <form role="form" method="post" action="login.php">
         	 <h2>Log in</h2>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox">Remember me
			    </label>
			  </div>
			  <button type="submit" class="btn btn-success">Submit</button>
		</form>
         
         
         
         
         
       </div>
        <div class="col-md-4">
       	<?php
       	echo "TEST";
       		if(!empty($errors)){
       			echo "<ul>";
       			foreach($errors as $error){
       				echo "<li>$error</li>";
       			}
				echo "</ul>";
				
				
				
       		}
       	
       	
       	?>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->

<?php include('templates/footer.php'); ?>
