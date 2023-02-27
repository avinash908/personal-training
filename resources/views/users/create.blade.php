@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
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
                <h3>Create New User</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
	 			     <form action="{{route('users.store')}}" method="POST">
	   				    @csrf
	               	<div class="row">
	              		<div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                      <label>Name</label>
	                		<input type="text" name="name"  value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required>
                      </div>
	                 </div>
                  <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email"  value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required>
                      </div>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                    <label>Gender</label>
                     <select class="form-control" name="gender" required>
                       <option value="male" <?=(old('gender') == 'male')? 'selected' : '' ?>>Male</option>
                       <option value="female" <?=(old('gender') == 'female')? 'selected' : '' ?>>Female</option>
                       <option value="other" <?=(old('gender') == 'other')? 'selected' : '' ?>>Other</option>
                     </select>
                      </div>
                  </div>
                   <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                      <label>Role</label>
                     <select class="form-control" name="role_id" required>
                      <option value="">Select User Role</option>
                      @foreach(App\Role::where('id','!=',1)->get() as $role)
                       <option value="{{$role->id}}" <?=(old('role_id') == $role->id)? 'selected' : '' ?>>{{ucwords($role->title)}}</option>
                      @endforeach
                     </select>
                      </div>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password"  value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" required>
                      </div>
                      @if($errors->has('password'))
                        @foreach($errors->get('password') as $message)
                        <span style="color:red">{{$message}}</span>
                        @endforeach
                      @endif
                   </div>
                  <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" name="password_confirmation"  value="{{ old('password_confirmation') }}" class="form-control @error('password_confirmation') is-invalid @enderror" required>
                      </div>
                  </div>
                  	<div class="col-lg-12 col-sm-12">
                  		<button type="submit" class="btn btn-primary float-sm-right">Create</button>
              		</div>
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
