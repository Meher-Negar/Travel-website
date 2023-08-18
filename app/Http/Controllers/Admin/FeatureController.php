<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use Carbon\Carbon;
class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features= Feature::all();
        return view('admin.feature.index',compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>'required',
            'sub_title' =>'required',
            'image'=>'required',
            
          ]);
          $image=$request->file('image');
          $slug = str_slug($request->title);
      
          if(isset($image))
          {
            $currentDate=Carbon::now()->toDateString();
            $imagename=$slug.'-'.$currentDate.'-'.'-'.$image->
            getClientOriginalExtension();
            if(!file_exists('uploads/feature')){
                mkdir('uploads/feature',077,true);
            }
            $image->move('uploads/feature',$imagename);
          } 
          else
          {
            $imagename =$feature->image;
          }
          $feature= new Feature();
          $feature->title =$request->title;
          $feature->sub_title =$request->sub_title;
          $feature->image =$imagename;
          $feature->save();
          return redirect()->route('feature.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $feature =Feature::find($id);
        return view('admin.feature.edit',compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'title' =>'required',
            'sub_title' =>'required',
            'image'=>'required'
            
          ]);
          $image=$request->file('image');
          $slug = str_slug($request->title);
          $feature=Feature::find($id);
      
          if(isset($image))
          {
            $currentDate=Carbon::now()->toDateString();
            $imagename=$slug.'-'.$currentDate.'-'.'-'.$image->
            getClientOriginalExtension();
            if(!file_exists('uploads/feature')){
                mkdir('uploads/feature',077,true);
            }
            $image->move('uploads/feature',$imagename);
          } 
          else
          {
            $imagename =$feature->image;
          }
         
          $feature->title =$request->title;
          $feature->sub_title =$request->sub_title;
          $feature->image =$imagename;
          $feature->save();
          return redirect()->route('feature.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {$feature=Feature::find($id);
            if(file_exists('uploads/feature'.$feature->image))
            {unlink('uploads/feature'.$feature->image);
            }
            $feature->delete();
            return redirect()->route('feature.index');

        }
    
    }
}
