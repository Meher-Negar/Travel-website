@extends('layouts.app')
@section('admin_content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">feature edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit feature</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('feature.update',$feature->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Feature Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $feature->title}}">
                  </div>
                  <div class="form-group">
                    <label for="title">Feature Sub Title</label>
                    <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{ $feature->sub_title}}">
                  </div>
                  <div class="form-group">
                    
                  <div> <img src="{{ asset('uploads/feature/'.$feature->image)}}" alt="" style="height: 70px; width: 200px;"></div>
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input"name="image" id="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" >Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection