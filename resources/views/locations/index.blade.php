@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Locations</h1>
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
            <div class="card">
              <div class="card-body">
                <form action="{{route('locations.store')}}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">Create</button>
                  </div>
                </form>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <section class="col-lg-6 col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                	<table class="table pt-datatale">
                		<thead>
                			<th>Sr.no</th>
                			<th>Location</th>
                			<th>Action</th>
                		</thead>
                		<tbody>
                			<?php $sno = 1;?>
                			@foreach($locations as $location)
                				<tr>
                					<td>{{$sno++}}</td>
                					<td>{{ucwords($location->location)}}</td>
                					<td>
                						<div class="btn-group btn-group-sm">
                							<a href="javascript:void(0)" class="btn btn-info pt_edit" data-route="{{route('locations.edit',$location)}}" data-id="{{$location->id}}"><i class="fa fa-edit"></i></a>
                							<a href="javascript:void(0)" class="btn btn-danger pt_delete" data-route="{{route('locations.destroy',$location->id)}}"><i class="fa fa-trash"></i></a>
                						</div>
                					</td>
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