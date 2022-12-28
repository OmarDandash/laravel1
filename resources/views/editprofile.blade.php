@extends('layouts.master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<br><br>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<!-- Col -->
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">{{Auth::user()->name}}</h5>
												<p class="main-profile-name-text">{{Auth::user()->userType}}</p>
											</div>
										</div>
									
										<div class="main-profile-bio">
										</div><!-- main-profile-bio -->
										{{Auth::user()->profile2->BiographicalInfo ?? ''}}
										<hr class="mg-y-30">
										<label class="main-content-label tx-13 mg-b-20">Social</label>
										<div class="main-profile-social-list">
										
										<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="icon ion-logo-facebook"></i>
												</div>
												<div class="media-body">
													<span>Facebook</span> <a href="{{Auth::user()->profile2->Facebook ?? ''}}">{{Auth::user()->profile2->Facebook ?? ''}}</a>
												</div>
											</div>

										
											
											<div class="media">
												<div class="media-icon bg-primary-transparent text-info">
													<i class="icon ion-logo-linkedin"></i>
												</div>
												<div class="media-body">
													<span>Linkedin</span> <a href="{{Auth::user()->profile2->LinkedIn ?? ''}}">{{Auth::user()->profile2->LinkedIn ?? ''}}</a>
												</div>
											</div>

											<div class="media">
												<div class="media-icon bg-primary-transparent text-secondary">
													<i class="icon ion-logo-github"></i>
												</div>
												<div class="media-body">
													<span>Github</span> <a href="{{Auth::user()->profile2->Github ?? ''}}">{{Auth::user()->profile2->Github ?? ''}}</a>
												</div>
											</div>
										

											<div class="media">
										<div class="media-icon bg-primary-transparent text-danger">
											<i class="icon ion-md-phone-portrait"></i>
										</div>
										<div class="media-body">
											<span>Mobile</span>
											<div>
											{{Auth::user()->profile2->Phone ?? ''}}
											</div>
										</div>
									</div>
										</div>
										<hr class="mg-y-30">
										
										<!--skill bar-->
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label tx-13 mg-b-25">
									Conatct
								</div>
								<div class="main-profile-contact-list">
									
									<div class="media">
										<div class="media-icon bg-success-transparent text-success">
											<i class="icon ion-logo-slack"></i>
										</div>
										<div class="media-body">
											<span>Slack</span>
											<div>
												@spruko.w
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-info-transparent text-info">
											<i class="icon ion-md-locate"></i>
										</div>
										<div class="media-body">
											<span>Current Address</span>
											<div>
												San Francisco, CA
											</div>
										</div>
									</div>
								</div><!-- main-profile-contact-list -->
							</div>
						</div>
					</div>

					<!-- Col -->
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								<div class="mb-4 main-content-label">
									<h2>
								
								تحديث معلومات شخصية

								</h2>

								</div>
								<hr>
								<form class="form-horizontal" action="{{url('profileqw')}}"  method="POST" enctype="multipart/form-data">
									@csrf
								
									
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">الاسم </label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" value="{{Auth::user()->name}}" name="name"  placeholder="User Name" value="">
											</div>
										</div>
									</div>
									
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">الايميل</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" value="{{Auth::user()->email}}" placeholder="الايميل" name="email">
											</div>
										</div>
									</div>
									
								
								
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">المدينة </label>
											</div>
											<div class="col-md-9">
										
												<input type="text" class="form-control"   value="{{Auth::user()->profile2->city ?? ''}}" placeholder="ادخل مدينتك"  name="city" >
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">رقم الهاتف</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="Phone" class="form-control"  value="{{Auth::user()->profile2->Phone ?? ''}}" placeholder="ادخل رقم الهاتف" >
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">نوع التدريب</label>
											</div>
											<div class="col-md-9">
											<input type="text" value="{{Auth::user()->userType}}"  name="userType" class="form-control"  >
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">التحصيل العلمي</label>
											</div>
											<div class="col-md-9">
											<input type="text" name="practicalAchievement" value="{{Auth::user()->profile2->practicalAchievement ?? ''}}"  name="userType" class="form-control"  >
											</div>
										</div>
								
									<div class="form-group ">
										
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">فيس بوك </label>
											</div>
											<div class="col-md-9">
												<input type="text" name="Facebook" class="form-control"  placeholder="ادخل رابط حسابك الفيس بوك" value="{{Auth::user()->profile2->Facebook ?? ''}}">
											</div>
										</div>
									</div>
									<div class="form-group ">
										
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">لينكد ان</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="LinkedIn" class="form-control"  placeholder="linkedin" value="{{Auth::user()->profile2->LinkedIn ?? ''}}">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">جيت هاب</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="Github" class="form-control" placeholder="github" value="{{Auth::user()->profile2->Github ?? ''}}">
											</div>
										</div>
									</div>
								
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label"> وصف موجز </label>
											</div>
											<div class="col-md-9">
												<textarea class="form-control"  rows="4" name="BiographicalInfo" placeholder="">{{Auth::user()->profile2->BiographicalInfo ?? ''}}</textarea>
											</div>
										</div>
									</div>
								
								
							</div>
							<div class="card-footer text-left">
								<button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
							</div>
							</form>
						</div>
					</div>
					<!-- /Col -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection