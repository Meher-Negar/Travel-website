<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Carbon\Carbon;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::all();
    return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
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
            if(!file_exists('uploads/blog')){
                mkdir('uploads/blog',077,true);
            }
            $image->move('uploads/blog',$imagename);
          } 
          else
          {
            $imagename =$blog->image;
          }
          $blog= new Blog();
          $blog->title =$request->title;
          $blog->sub_title =$request->sub_title;
          $blog->image =$imagename;
          $blog->save();
          return redirect()->route('blog.index');
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
            $blog =Blog::find($id);
            return view('admin.blog.edit',compact('blog'));
        }
    
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
          'title' =>'required',
          'sub_title' =>'required'
         ,
        ]);
        
        $image=$request->file('image');
        $slug = str_slug($request->title);
        $blog = Blog::find($id);
        if(isset($image))
        {
          $currentDate=Carbon::now()->toDateString();
          $imagename=$slug.'-'.$currentDate.'-'.'-'.$image->
          getClientOriginalExtension();
          if(!file_exists('uploads/blog')){
              mkdir('uploads/blog',077,true);
          }
          $image->move('uploads/blog',$imagename);
        } 
        else
        {
          $imagename =$blog->image;
        }
       
        $blog->title =$request->title;
        $blog->sub_title =$request->sub_title;
        $blog->image =$imagename;
        $blog->save();
        return redirect()->route('blog.index');
      }
  

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {$blog=Blog::find($id);
            if(file_exists('uploads/blog'.$blog->image))
            {unlink('uploads/blog'.$blog->image);
            }
            $blog->delete();
            return redirect()->route('blog.index');

        }
    }
}
