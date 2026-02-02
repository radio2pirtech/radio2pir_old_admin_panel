@extends('admin.layouts.master')

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
	<div id="kt_app_content_container" class="app-container container-fluid">
		<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
			<div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-md-12 mb-xl-12">
				@include('admin.layouts.flash_message')
                <div class="card">
                    <div class="card-header pt-5">
                        <div class="">
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Users</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.user.add') }}">Add</a>
                        </div>
                    </div>
					<div class="card-body pt-6">
						<div class="table-responsive">
                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
								<thead>
									<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
										<th class="p-0 pb-3 min-w-175px">#</th>
										<th class="p-0 pb-3 min-w-175px">Name</th>
										<th class="p-0 pb-3 min-w-175px">Email</th>
										<th class="p-0 pb-3 min-w-175px">User Role</th>
                                        <th class="p-0 pb-3 min-w-175px">Action</th>
									</tr>
								</thead>
								<tbody>
								@php($i = 1)
								@foreach ($users as $user)
								    <tr>
								    	<td>{{ $i }}</td>
								        <td>{{$user['name']}}</td>
						        		<td>{{$user['email']}}</td>
										<td>{{$user->roles->name}}</td>
                                        <td>
                                            <a href="{{route('admin.user.edit',$user['id'])}}">Edit</a>
                                            <br>
											@if($user['id']>1)
                                            <a href="{{route('admin.user.delete',$user['id'])}}">Delete</a>
											@endif
                                        </td>
								    </tr>
								    @php($i++)
								@endforeach
								</tbody>
							</table>
                        </div>
					</div>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('footer_script')
<script src="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
@endsection