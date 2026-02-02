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
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Users Add</span>
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
                        <form action="{{route('admin.user.create')}}" method="POST">
                            @csrf
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="name" value="{{old('name')}}">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="email" value="{{old('email')}}">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="password" placeholder="password" value="">
                            <label for="">Role</label>
                            <select name="role" class="form-control">
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}" {{old('role')&&old('role')==$role->id?"selected":""}}>{{$role->name}}</option>
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