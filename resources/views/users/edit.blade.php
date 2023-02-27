<form action="{{route('users.update',$user->id)}}" method="POST">
	 @csrf
   <input type="hidden" name="_method" value="put">
  	<div class="row">
  	<div class="col-md-12 col-sm-12">
      <div class="form-group">
      <label>Name</label>
  		<input type="text" name="name"  value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" required>
      </div>
   </div>
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
        <label>Email</label>
        <input type="email" name="email"  value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" required>
        </div>
    </div>
  <div class="col-md-12 col-sm-12">
      <div class="form-group">
    <label>Gender</label>
     <select class="form-control" name="gender" required>
       <option value="male" <?=($user->gender == 'male')? 'selected' : '' ?>>Male</option>
       <option value="female" <?=($user->gender == 'female')? 'selected' : '' ?>>Female</option>
       <option value="other" <?=($user->gender == 'other')? 'selected' : '' ?>>Other</option>
     </select>
      </div>
  </div>
   <div class="col-md-12 col-sm-12">
      <div class="form-group">
      <label>Role</label>
     <select class="form-control" name="role_id" required>
      @foreach(App\Role::where('id','!=',1)->get() as $role)
       <option value="{{$role->id}}" <?=($user->role_id == $role->id)? 'selected' : '' ?>>{{ucwords($role->title)}}</option>
      @endforeach
     </select>
      </div>
  </div>
  <div class="col-lg-12 col-sm-12">
  		<button type="submit" class="btn btn-primary float-sm-right">UPDATE</button>
  </div>
   </div>
</form>