<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($param){
        return '<a href="https://www.educastudio.com/'.$param.'">'.$param.'</a>';
    }
    public function news2($param){
        return '<a href="https://www.educastudio.com/news/'.$param.'">'.$param.'</a>';
    }

}
