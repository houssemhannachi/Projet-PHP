<?php

class Logout extends Controller
{

    public function index()
    {
        $user = $this->load_model("User");
        $user->logout();
    }
}
