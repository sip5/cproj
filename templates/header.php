<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../~wad3/assets/ico/favicon.ico">

    <title>CS490 Project 2014</title>

    <!-- Bootstrap core CSS -->
    <link href="../~wad3/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/~wad3/profile.php"><?php echo "CS490 PROJECT";?></a>
        </div>
        <div class="navbar-collapse collapse">
         <?php if(!isset($_COOKIE['ucid'])): ?> 
          <form class="navbar-form navbar-right" role="form" method="post" action="login.php">
            <div class="form-group">
              <input type="text" id="ucid" name="ucid" placeholder="ucid" class="form-control" placeholder="UCID">
            </div>
            <div class="form-group">
              <input type="password" id="password" name="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
          <?php else: ?>
          	<ul class="nav navbar-nav">
	            <li class="active"><a href="#">Home</a></li>
	        </ul>
          <ul class="nav navbar-nav navbar-right">
            	<li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
	              <ul class="dropdown-menu">
	                <li><a href="profile.php">My Profile</a></li>
	                <li><a href="profile.php?action=save">Update My Account</a></li>
	                <li class="divider"></li>
	                <li><a href="logout.php">Logout</a></li>
	                
	              </ul>
	            </li>
            
          </ul>
          	
          	
          	
          	
         <?php endif; ?>
          
        </div><!--/.navbar-collapse -->
      </div>
    </div>