<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Carbon\Carbon;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos=Video::all();
        return view('admin.video.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video' => 'required|mimes:mp4,mov,avi|max:20480', // Max size in KB (20MB)
        ]);

        $video=$request->file('video');
        $slug = str_slug($request->title);
    
        if(isset($video))
        {
          $currentDate=Carbon::now()->toDateString();
          $videoname=$slug.'-'.$currentDate.'-'.'-'.$video->
          getClientOriginalExtension();
          if(!file_exists('uploads/video')){
              mkdir('uploads/video',077,true);
          }
          $video->move('uploads/video',$videoname);
        } 
        else
        {
          $videoname =$video->video;
        }
        $video= new Video();
        $video->title =$request->title;
        $video->video =$videoname;
        $video->save();
        return redirect()->route('video.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {$video=Video::find($id);
            if(file_exists('uploads/video'.$video->video))
            {unlink('uploads/video'.$video->video);
            }
            $video->delete();
            return redirect()->route('video.index');

        }
    }
}
