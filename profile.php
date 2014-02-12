<?php 
	session_start();
	if(!isset($_COOKIE['loggedin']) || empty($_COOKIE['loggedin'])){
		header('Location: login.php');
		exit;	
	}
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require_once('includes/service.php');
	require_once('includes/mysql.php');
	require_once('includes/conn.php');
	require_once('includes/constants.php');
	
	/*Getting user profile*/
	$ucid = $_COOKIE['ucid'];
	$profile = $cn->Select('profiles', 'ucid='.$ucid, 'ucid', 1);	
	$first_name = isset($profile['name']) ? htmlentities($profile['name']) : '';
	$last_name = isset($profile['lastname']) ? htmlentities($profile['lastname']) : '';
	$email = isset($profile['email']) ? htmlentities($profile['email']) : '';
	
	/*$query  = 'select * from profiles where ucid="wad3"';
	$profile = $cn->ExecuteSQL($query);*/
?>
<?php include('templates/header.php'); ?>
<div class="container" style="margin-top:50px;min-height:500px;">
      <!-- Example row of columns -->
      <div class="row">
     
                  <div class="col-xs-6 col-md-3">
                  		<a href="#" class="thumbnail">
                  			<img style= "height: 180px; width: 100%; display: block;" src="assets/images/imageplaceholder.png" alt="Profile Image">
                  		</a>
                  </div>
        
        <div class="col-md-4">
        <?php
        		$action = isset($_GET['action']) ? htmlentities($_GET['action']) : '';
				
        		if(empty($profile['ucid']) && empty($action)){
        			echo '<div class="alert alert-info">';
        			echo "It seems like this is the first time you are here. Do you want to complete your profile? <a href=\"profile.php?action=save\">Yes</a>";
					echo '</div>';
        		}
				
				if($action=="save"){
						?>
							<?php
									$status = isset($_GET['status']) ? htmlentities($_GET['status']) : '';
									if($status=="success"):
										echo '<div class="alert alert-success">';
											echo '<p><strong>Profile Updated</strong></p>';
										echo '</div>';
									endif;
										

								
								?>	
							<div class="panel panel-default">
							  <div class="panel-heading">
							    <h3 class="panel-title">Please Fill the form below</h3>
							  </div>
							  <div class="panel-body">
							   		<form role="form" method="post" action="transactions/profile_transact.php">
							 
							   			
									  <div class="form-group">
									    <label for="ucid">UCID</label>
									    <input type="text" class="form-control" id="ucid" placeholder="<?=$ucid;?>" class="input-medium" disabled>
									  </div>
									  <div class="form-group">
									    <label for="first_name">First Name</label>
									    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" class="input-medium" value="<?=$first_name;?>">
									  </div>
									  <div class="form-group">
									    <label for="last_name">Last Name</label>
									    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" class="input-medium" value="<?=$last_name;?>">
									  </div>
									  <div class="form-group">
										    <label for="exampleInputEmail1">Email address</label>
										    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?=$email;?>">
									  </div>
									  <div class="form-group">
									    <label for="profile_image">Profile Picture</label>
									    <input type="file" id="profile_picture">
									    <p class="help-block">Please, upload your profile picture</p>
									  </div>
									  <input type="hidden" name="action" id="action" value="save">
									  <button type="submit" class="btn btn-primary">Submit</button>
									</form>
							  </div>
							</div>
						
						<?php
		
		
		
		
		
		
				}
        	
        	
        ?>
         
       </div>
        <div class="col-md-4">
       		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Panel title</h3>
			  </div>
			  <div class="panel-body">
			    Panel content
			  </div>
			</div>
        </div>
      </div>

      <hr>

      <footer>
        <center><p>&copy; CS490 Project &dash; 2014</p>
      </footer>
    </div> <!-- /container -->
<?php $cn->CloseConnection();?>
<?php include('templates/footer.php'); ?>