<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class mainController extends BaseController
{
    public function get_index(){
        return view('home');
    }
    public function get_about(){
        return view('about');
    }
}
