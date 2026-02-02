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
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">Store</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.store.add') }}">Add</a>
                        </div>
                    </div>
					<div class="card-body pt-6">
						<div class="table-responsive">
                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
								<thead>
									<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
										<th class="p-0 pb-3 min-w-175px">#</th>
										<th class="p-0 pb-3 min-w-175px">Logo</th>
										<th class="p-0 pb-3 min-w-175px">Name</th>
										<th class="p-0 pb-3 min-w-175px">Slug</th>
										<th class="p-0 pb-3 min-w-175px">Music URL</th>
										<th class="p-0 pb-3 min-w-175px">QR</th>
                                        <th class="p-0 pb-3 min-w-175px">Action</th>
									</tr>
								</thead>
								<tbody>
								@php($i = 1)
								@foreach ($stores as $store)
								    <tr>
								    	<td>{{ $i }}</td>
										<td><img class="store-logo" src="{{$store['logo_with_url']}}"></td>
								        <td>{{$store['store_name']}}</td>
						        		<td>
											@if(env('SERVER_ENV') == 'server')
												<a href="{{'https://live.radio2pir.com/'.$store['store_slug']}}" id="store_url_{{$i}}" target="_blank">{{$store['store_slug']}}</a>
											@else
												<a href="{{url($store['store_slug'])}}" id="store_url_{{$i}}" target="_blank">{{$store['store_slug']}}</a>
											@endif
										</td>
										<td><a target="_blank" href="{{$store['music_url']}}">URL</a></td>
										<td><div id="qrcode_{{$i}}" class="store-qr"></div><br>QR Visistors:{{$store['qr_visited']}}</td>
                                        <td>
											<button class="btn btn-info" onclick="downloadQR({{$i}},'{{$store['store_slug']}}')">Download QR</button>
                                            <a class="btn btn-warning" href="{{route('admin.store.edit',$store['id'])}}">Edit</a>
                                            <a class="btn btn-danger" href="{{route('admin.store.delete',$store['id'])}}">Delete</a>
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
<a id='qrdl' hidden>Download</a>
@endsection

@section('footer_script')
<script src="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/qrcode.min.js') }}"></script>
<script>
  var store_count = {{$i-1}};

  for (let index = 1; index <= store_count; index++) {
	var url_href = document.getElementById(`store_url_${index}`).href;
	makeCode(url_href,index);
  }

  function makeCode (qrtext,qrindex) {	
	var qrcode = new QRCode(`qrcode_${qrindex}`);
    qrcode.makeCode(`${qrtext}?qrscan=true`);
  }

  function downloadQR(id,slug){
    let qelem = document.querySelector(`#qrcode_${id} img`)
    let dlink = document.querySelector('#qrdl')
    let qr = qelem.getAttribute('src');
    dlink.setAttribute('href', qr);
    dlink.setAttribute('download', `${slug}.png`);
    dlink.click();
  }
</script>
@endsection
