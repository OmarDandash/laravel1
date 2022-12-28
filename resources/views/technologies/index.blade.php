@extends('layouts.master')
@section('title')
الصفحة الرئيسية
@stop
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h2 class="content-title mb-0 my-auto">الصفحة الرئيسية</h2><span class="text-muted mt-1 tx-18 mr-2 mb-0">/ قائمة الدورات</span>
						</div>
					</div>
				
				</div>
				<!-- breadcrumb -->
			
@endsection
@section('content')
				<!-- row -->
			<div class="row">
						@if(session()->has('Add'))
							<div class="alert alert-success alert-dismissbile fade show" role="alert">
								<strong>{{session()->get('Add')}}</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times</span>
								</button>

							</div>
						@endif
						
						@if(session()->has('Error'))
							<div class="alert alert-success alert-dismissbile fade show" role="alert">
								<strong>{{session()->get('edit')}}</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times</span>
								</button>

							</div>
						@endif
			
					<div class="col-xl-12">
						<div class="card">
						<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-xl-t-20">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-newspaper" data-toggle="modal" href="#modaldemo8">إضافة دورة</a>
									</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example2">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">id</th>
												<th class="wd-15p border-bottom-0">وصف عن الدورة</th>
												<th class="wd-20p border-bottom-0">المدرب</th>
											
											</tr>
										</thead>
										<tbody>
											@foreach($Technology as $tech)	
											
											<tr>
											
												<td>{{$tech->Course_definition}}</td>
												<td>{{$tech->coachs_name}}</td>
										
											
											</tr>
											
											
											@endforeach
											
											
											
										</tbody>
									</table>
								</div>
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->

					<!--div-->
					
					<!--/div-->

					<!--div-->
					
				</div>
			
		</div>
			<!-- Basic modal -->
			<div class="modal" id="modaldemo8">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">إضافة دورة</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
				
					<div class="modal-body">
					<form action="{{route('technologie.store')}}" method="post">
					@csrf
					<div class="form-group">
					<label for="exampleInputEmail1">أسم المدرب</label>
					<input type="text" class="form-control" id="Course_definition" name="Course_definition" require>
					</div>

					<div class="form-group">
					<label for="exampleInputEmail1">وصف عن الدورة </label>
					<input  class="form-control" id="coachs_name" name="coachs_name" rows="3" require>
					</div>
					

					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="submit">تأكيد</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">اغلاق</button>
					</div>
					</form>
				</div>
				
			</div>
		</div>
		<!-- End Basic modal -->
				</div>
				<!-- row closed -->
			</div>
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
<script src="{{URL::asset('assets/js/modal.js')}}"></script>
@endsection