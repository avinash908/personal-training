@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Posts</h1>
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
                Latest Posts
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                	<table class="table pt-datatale">
                		<thead>
                			<th>Sr.no</th>
                			<th>Title</th>
                			<th>Created_by</th>
                      <th>Created_on</th>
                			<th>Action</th>
                		</thead>
                		<tbody>
                			<?php $sno = 1;?>
                			@foreach($posts as $post)
                				<tr>
                					<td>{{$sno++}}</td>
                					<td>{{$post->title}}</td>
                          <td><a href="{{url('/'.$post->user->slug)}}" target="_blank">{{ucwords($post->user->name)}}</a></td>
                          <td>{{$post->created_at->format('d.m.Y')}}</td>
                					<td>
                						<div class="btn-group btn-group-sm">
                              <a href="{{url('article',$post->slug)}}" target="_blank" class="btn btn-success"><i class="fa fa-eye"></i></a>
                							<a href="javascript:void(0)" class="btn btn-info pt_edit" data-route="{{route('posts.edit',$post)}}" data-id="{{$post->id}}"><i class="fa fa-edit"></i></a>
                							<a href="javascript:void(0)" class="btn btn-danger pt_delete" data-route="{{route('posts.destroy',$post->id)}}"><i class="fa fa-trash"></i></a>
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
@section('javascript')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.pt_edit_modal').children().removeClass('modal-sm');
    $('.pt_edit_modal').children().addClass('modal-lg');
  })
</script>
@endsection