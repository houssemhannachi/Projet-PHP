<?php
class Home extends Controller
{
    public function index()
    {
        $data['title_page'] ='Home';
        $this->view("index",$data);
    }
}
