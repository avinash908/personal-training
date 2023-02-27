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
                <a href="{{route('experties.create')}}" class="btn btn-primary float-right">Create New</a>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                	<table class="table pt-datatale">
                		<thead>
                			<th>Sr.no</th>
                			<th>Icon</th>
                			<th>Title</th>
                			<th>Action</th>
                		</thead>
                		<tbody>
                			<?php $sno = 1;?>
                			@foreach($experties as $expertee)
                				<tr>
                					<td>{{$sno++}}</td>
                					<td><img src="{{url('img/icon',$expertee->image->url)}}" width="40"></td>
                					<td>{{$expertee->title}}</td>
                					<td>
                						<div class="btn-group btn-group-sm">
                							<a href="javascript:void(0)" class="btn btn-info pt_edit" data-route="{{route('experties.edit',$expertee)}}" data-id="{{$expertee->id}}"><i class="fa fa-edit"></i></a>
                							<a href="javascript:void(0)" class="btn btn-danger pt_delete" data-route="{{route('experties.destroy',$expertee->id)}}"><i class="fa fa-trash"></i></a>
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