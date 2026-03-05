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
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Store Add</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.store') }}">List</a>
                        </div>
                    </div>
                    <ul class="error">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="card-body pt-6">
                        <form action="{{route('admin.store.insert')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="">Store Name</label>
                            <input type="text" class="form-control" name="store_name" placeholder="Store Name" value="{{old('name')}}" required>
                            <label for="">Store URL</label>
                            <input type="text" class="form-control" name="store_url" placeholder="Store URL" value="{{old('email')}}" required>
                            <label for="">Store Music URL</label>
                            <input type="text" class="form-control" name="store_music_url" placeholder="Store Music URL" value="" required>
                            <label for="">Secondary Radio URL (Optional)</label>
                            <input type="text" class="form-control" name="radio_url" placeholder="Secondary Radio URL" value="">
                            <label for="">Store Logo</label>
                            <input type="file" class="form-control" name="logo" required>
                            
                            <input type="submit" class="btn btn-primary mt-3 float-right" value="Submit">
                        </form>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

@endsection