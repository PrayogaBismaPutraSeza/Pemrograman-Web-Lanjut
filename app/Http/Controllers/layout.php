<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layout extends Controller
{
    public function layout() {
        return view('indexHome.indexHome');
        }

    public function layout1() {
        return view('indexPost.indexPost');
        }    

    public function lay() {
        return view('childCampur');
        }   
}
