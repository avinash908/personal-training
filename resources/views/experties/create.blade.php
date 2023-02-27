@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Experties</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3>Create New Experties</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
	 			 <form action="{{route('experties.store')}}" method="POST" enctype="multipart/form-data">
	   				@csrf
	               	<div class="row">
	              		<div class="col-lg-6 col-sm-12">
	                		<input type="text" name="title"  value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" required>
	                   	</div>
	                	<div class="col-lg-4 col-sm-12">
	                		<div class="custom-file">
	                       		<input type="file" name="image" class="custom-file-input" required>
							    <label class="custom-file-label">Choose Image...</label>
							 </div>
	                   </div>
	                  	<div class="col-lg-2 col-sm-12">
	                  		<button type="submit" class="btn btn-primary btn-block">Create</button>
	              		</div>
	              		@if(session()->has('error'))
                            @foreach(session()->get('error') as $message)
                              <span style="color:red">{{$message}}</span>
                            @endforeach
                         @endif
	                 </div>
	             </form>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
