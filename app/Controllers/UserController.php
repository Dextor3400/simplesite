<?php
include "Model/User.php";
class UserController extends Controller{

    public function index(){
        $users = "SELECT * FROM users";

        return $this->view('User/index',['users'=>$users]);
    }
}