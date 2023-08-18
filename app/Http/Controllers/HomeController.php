<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Destination;
use App\Models\Feature;
use App\Models\Video;
use App\Models\Blog;
use Carbon\Carbon;


class HomeController extends Controller
{
public function index()
{
    $features=Feature::all();
    $sliders= Slider::all();
    $videos= Video::all();
    $blogs= Blog::all();
            
    return view('welcome',compact('sliders','features','videos','blogs'));
}
public function store(Request $request)
{$this->validate($request,[
    'name' =>'required',
    'email' =>'required',
    'destination'=>'required',
    
  ]);


    $dest= new Destination();
    $dest->name=$request->name;
    $dest->email=$request->email;
    $dest->destination=$request->destination;
    $dest->save();
    return redirect('/confirm');
}

public function form()
{
    return view('form');
}


}
