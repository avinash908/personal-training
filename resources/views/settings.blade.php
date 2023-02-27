@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Settings</h1>
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
          <section class="col-lg-6 col-sm-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Change Password
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form action="{{url('change_password')}}" method="POST">
                  @csrf
                <div class="form-group">
                  <label>Current Password</label>
                  <input type="password" name="current_password" value="{{ old('current_password') }}" class="form-control @error('current_password') is-invalid @enderror" required>
                  @if($errors->has('current_password'))
                      @foreach($errors->get('current_password') as $message)
                        <span style="color:red">{{$message}}</span>
                      @endforeach
                   @endif
                </div>
                <div class="form-group">
                  <label>New Password</label>
                  <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" id="password" required>
                  @if($errors->has('password'))
                      @foreach($errors->get('password') as $message)
                        <span style="color:red">{{$message}}</span>
                      @endforeach
                  @endif
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"  class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" required>
                  @if($errors->has('password_confirmation'))
                      @foreach($errors->get('password_confirmation') as $message)
                        <span style="color:red">{{$message}}</span>
                      @endforeach
                  @endif
                </div>
                <button class="btn btn-primary float-right" type="submit">Save Changes</button>
                </form>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
           <section class="col-lg-6 col-sm-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Change Email
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form action="{{url('change_email')}}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label>Current Email</label>
                    <input value="{{ Auth::user()->email }}" disabled class="form-control" >
                  </div>
                   <div class="form-group">
                    <label>New Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"  class="form-control @error('email') is-invalid @enderror" id="email" required>
                    @if($errors->has('email'))
                        @foreach($errors->get('email') as $message)
                          <span style="color:red">{{$message}}</span>
                        @endforeach
                    @endif
                  </div>
                   <button class="btn btn-primary float-right" type="submit">Save Changes</button>
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
