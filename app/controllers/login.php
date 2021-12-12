<?php 

Class Login extends Controller
{

	public function index()
	{
		$data['title_page'] = "Login";
		

		$this->view("login",$data);
	}


}