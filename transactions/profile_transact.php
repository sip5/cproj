<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require_once('../includes/mysql.php');
	require_once('../includes/conn.php');
	$profile = $cn->Select('profiles', 'ucid='.$_COOKIE['ucid'], 'ucid', 1);
	if($_SERVER['REQUEST_METHOD'] == 'POST'):
		$action = isset($_POST['action']) ? htmlentities($_POST['action']): '';
		$type = isset($_POST['type']) ? htmlentities($_POST['type']): '';
		$errors = array();
		switch($action):
			case "save":
					$first_name = isset($_POST['first_name']) ? htmlentities($_POST['first_name']): '';
					$last_name = isset($_POST['last_name']) ? htmlentities($_POST['last_name']): '';
					$email = isset($_POST['email']) ? htmlentities($_POST['email']): '';
					$data = array(
						'ucid'=>$_COOKIE['ucid'],
						'name'=>$first_name,
						'lastname'=>$last_name,
						'passwd'=>'',
						'email'=>$email,
						'image'=>'',
						'confirmed'=>'1'
					);
					if(empty($profile['ucid'])){
						$cn->insert($data,'profiles','last_login');
					}
					else {
						$where = array('ucid'=>$_COOKIE['ucid']);
						$cn->Update('profiles' , $data, $where);	
					}
					$cn->CloseConnection();
					header('Location: ../profile.php?action=save&status=success');
					break;
			default: 
					echo "HAck Attempt";
					break;	
			
		endswitch;
		
		
	endif; // Enf Form post
