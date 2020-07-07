<?php

class AdvertisementController extends Controller{

    public function index(){
        $advertisements = "SELECT * FROM advertisements";

        return $this->view('advertisement/index',['advertisements'=>$advertisements]);
    }
}