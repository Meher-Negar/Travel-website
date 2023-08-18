@extends('layouts.app')
@section('admin_content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>VideoTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">VideoTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <a href="{{route('video.create')}}" class= "btn btn-danger"> Add New</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All video</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Video Name</th>
                    
                    <th>Video</th>
                    <th>Action</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                 @foreach($videos as $key=>$video)
                 <tr>
                  <td>{{ $key +1 }}</td>
                  <td>{{$video->title}}</td>
                  
                   <td><img src="{{ asset('uploads/video/'.$video->video)}}" alt="" style="height: 70px; width: 200px;"></td>
                   <td>
                   
                    <form id="delete-form-{{ $video->id}}" action="{{route('video.destroy',$video->id)}}" method="POST">
                      @csrf
                      @method('DELETE')

                    </form>
                    <button class="btn btn-danger" type="button"onclick="
                    if(confirm('Are you sure to delete this?')){event.preventDefault();
                    document.getElementById('delete-form-{{ $video->id}}').submit();
                    }else{
                    eventpreventDefault();
                    }">Delete</button>

                   </td>
                 </tr>
                 @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection