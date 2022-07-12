<?php

namespace App\Http\Controllers;

use App\Models\DataSiswaPpdb;
use Illuminate\Http\Request;

class WebSmpController extends Controller
{
    public function home(){
        return view('home',[
            'datas' => DataSiswaPpdb::latest()->filter(request(['search']))->paginate(10)->WithQueryString()
        ]);
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function gallery(){
        return view('gallery');
    }
}
