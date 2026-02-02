@extends('admin.layouts.master')

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
	<div id="kt_app_content_container" class="app-container container-fluid">
		<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
			<div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-md-12 mb-xl-12">
				@if(Session::has('success'))
	                <div class="alert alert-success alert-dismissible fade show" role="alert">
	                    {{ session('success') }}
	                </div>
                @endif
                <div class="card">
                    <div class="card-header pt-5">
                        <div class="">
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Users Edit</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.user') }}">List</a>
                        </div>
                    </div>
                    <ul class="error">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="card-body pt-6">
                        <form action="{{route('admin.user.update')}}" method="POST" autocomplete="off">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{old('name',$user->name)}}">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{old('email',$user->email)}}">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password" value="" autocomplete="off">
                            <span style="color:red">Leave Password blank if dont want to update Password<br></span>
                            <label for="">Role</label>
                            <select name="role" class="form-control">
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}" {{old('role',$user->role)==$role->id?"selected":""}}>{{$role->name}}</option>
                                @endforeach
                            </select>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>


@endsection
@section('footer_script')
<script>
    window.onload = function() {
        setTimeout(() => {
            document.getElementById('password').value="";
        }, 50);
    };
    
</script>
@endsection