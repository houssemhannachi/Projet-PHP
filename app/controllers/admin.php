<?php
class Admin extends Controller
{
    public function index()
    {

        // $user = $this->load_model('Admin');
        // $user_data = $user->check_login();

        // if (is_object($user_data)) {
        //     $data['user_data'] = $user_data;
        // }

        $data['page_title'] = 'Home';
		$this->view("admin/index",$data);
    }
}
