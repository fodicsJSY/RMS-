<?php namespace App\Controllers;

class Notice extends BaseController
{
    public function index()
    {
        // echo view('layout/header');
        echo view('notice/communityList');
    }

    public function fowardWrite()
    {
        echo view('notice/communityWrite');
    }


    public function fowardDetail()
    {
        echo view('notice/communityDetail');
    }


    
    //--------------------------------------------------------------------

}
