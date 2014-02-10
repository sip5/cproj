<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Service{
	private $url;
	private $username;
	private $txtPasswd;
	public $data;
	public function __construct(){
			
	}
	protected function request($data = array()){
		if(!is_array($data))
			return array();
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://cp4.njit.edu/cp/home/login");
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
		"user" => $data['user'],
		"pass" => $data['pass'],
		"uuid" => "0xACA021"
		)));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 12);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 12);
		$this->data= curl_exec($ch);
		curl_close($ch);
		
		// Logout to kill any sessions
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://cp4.njit.edu/up/Logout?uP_tparam=frm&frm=");
		curl_exec($ch);
		curl_close($ch);
		
		if(strpos($this->data, "loginok.html") == true)
			return true;
			
		return false;
	} /* .- request method*/
	 
} /* .- Service class*/

class SData extends Service{
	public function __construct(){
		
	}
	
	public function CURL_login(){
		/*form has been posted, lets loggin*/
		$logged_in = false;
		if($this->request($data=array('user'=>'wad3','pass'=>'1997xf11')))
		return true;
	}
}