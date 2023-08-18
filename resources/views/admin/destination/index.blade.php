@extends('layouts.app')
@section('admin_content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dream Destination</li>
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
           <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Dream Destination</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SI</th>
                    <th>User Name</th>
                    <th>User email</th>

                    <th>Dream Destination</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($destinations as $key=>$destination)
                 <tr>
                  <td>{{ $key +1 }}</td>
                  <td>{{$destination->name}}</td>
                   <td>{{$destination->email}}</td>
                   <td>{{$destination->destination}}</td>
      <td>
      </td>
                 </tr>
                 @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
              
@endsection