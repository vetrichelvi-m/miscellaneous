<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return 'hi';
    }

    public function about(){
        return 'about';

    }
    //
}
