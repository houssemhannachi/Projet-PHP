<?php 

Class User 
{
	private String $error = "";

	public function signup($POST)
	{
		$data = array();
		$db = Database::getInstance();

		$data['name'] 		= trim($POST['name']);
		$data['email'] 		= trim($POST['email']);
		$data['password'] 	= trim($POST['password']);
		$password2 			= trim($POST['password2']);

		if(empty($data['email']) || !preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/", $data['email']))
		{
			$this->error .= "Please enter a valid email <br>";
		}

		if(empty($data['name']) || !preg_match("/^[a-zA-Z]+$/", $data['name']))
		{
			$this->error .= "Please enter a valid name <br>";
		}

		if($data['password'] !== $password2)
		{
			$this->error .= "Passwords do not match <br>";
		}

		if(strlen($data['password']) < 4)
		{
			$this->error .= "Password must be atleast 4 characters long <br>";
		}

		//check if email already exists
		$sql = "select * from users where email = :email limit 1";
		$arr['email'] = $data['email'];
		$check = $db->read($sql,$arr);
		if(is_array($check)){
			$this->error .= "That email is already in use <br>";
		}

		$data['url_address'] = $this->get_random_string_max(60);

		//check for url_address
		$arr = false;
		$sql = "select * from users where url_address = :url_address limit 1";
		$arr['url_address'] = $data['url_address'];
		$check = $db->read($sql,$arr);
		if(is_array($check)){

			$data['url_address'] = $this->get_random_string_max(60);
		}

		if($this->error == ""){
			//save
			$data['rank'] = $data['url_address']; //customerrrrrrrr!!!!
			$data['date'] = date("Y-m-d H:i:s");
			$data['password'] = hash('sha1',$data['password']);

			$query = "insert into users (url_address,name,email,password,rank,date) values (:url_address,:name,:email,:password,:rank,:date)";
			$result = $db->write($query,$data);

			if($result){

				header("Location: " . ROOT . "login");
				die;
			}

		}

		$_SESSION['error'] = $this->error;

	}


	private function get_random_string_max($length) {

		$array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
		$text = "";

		$length = rand(4,$length);

		for($i=0;$i<$length;$i++) {

			$random = rand(0,61);
			
			$text .= $array[$random];

		}

		return $text;
	}



	public function logout()
	{

		if(isset($_SESSION['user_url']))
		{
			unset($_SESSION['user_url']);
		}

		header("Location: " . ROOT . "home");
		die;
	}


}