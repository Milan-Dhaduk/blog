<?php

class Pages extends BaseController
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $data=[
            'titile'=>'home page'
        ];
        $this->view('index',$data);

        
    }
}