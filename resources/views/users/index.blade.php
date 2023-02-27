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
                @if(Auth::user()->role_id == 1)
                <a href="{{route('users.create')}}" class="btn btn-primary float-right">Create New</a>
                @endif
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                	<table class="table pt-datatale">
                		<thead>
                			<th>Sr.no</th>
                      <th>Profile</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Role</th>
                      @if(Auth::user()->role_id == 1)
                			<th>Edit</th>
                      @endif
                		</thead>
                		<tbody>
                			<?php $sno = 1;?>
                			@foreach($users as $user)
                				<tr>
                          <td>{{$sno++}}</td>
                          <td><a href="{{url('/'.$user->slug)}}" target="_blank">{{ucwords($user->name)}}</a></td>
                          <td>{{$user->email}}</td>
                					<td>{{ucwords($user->gender)}}</td>
                          <td>{{ucwords($user->role->title)}}</td>
                          @if(Auth::user()->role_id == 1)
                					<td>
                						<div class="btn-group btn-group-sm">
                							<a href="javascript:void(0)" class="btn btn-info pt_edit" data-route="{{route('users.edit',$user)}}" data-id="{{$user->id}}"><i class="fa fa-edit"></i></a>
                							<a href="javascript:void(0)" class="btn btn-danger pt_delete" data-route="{{route('users.destroy',$user->id)}}"><i class="fa fa-trash"></i></a>
                						</div>
                					</td>
                          @endif
                				</tr>
                			@endforeach
                		</tbody>
                	</table>
                </div>
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
    @include('partials.pt_delete_modal')
    @include('partials.pt_edit_modal')
@endsection