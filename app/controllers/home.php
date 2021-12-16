<?php
class Home extends Controller
{
    public function index()
    {

        $user = $this->load_model('user');
        $user_data = $user->check_login();

        if (is_object($user_data)) {
            $data['user_data'] = $user_data;
        }

        $db = Database::newInstance();
        $ROWS = $db->read("SELECT * from products");

        $data['page_title'] = 'Home';
        $data['ROWS'] = $ROWS;
        $this->view("index", $data);
    }
}
