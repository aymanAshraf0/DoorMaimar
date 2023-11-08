@extends('admin.layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/adminAssets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/adminAssets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/font-awesome/css/all.min.css') }}" rel="stylesheet">

@endsection
@section('page-header')
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm m-5">
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">المستخدمين</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{Auth::User()->count()}}</h4>
										</div>
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">المدن</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{ App\Models\Admin\City::count() }}</h4>
										</div>
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">انواع العقارات</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{ App\Models\Admin\Real_estate::count() }}</h4>
										</div>
									</div>
								</div>
							</div>
							<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">العقارات</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{ App\Models\Admin\RealEstate2::count() }}</h4>
										</div>
									</div>
								</div>
							</div>
							<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm m-5">
					<div class="col-lg-12 col-xl-4">
						<div class="card card-dashboard-map-one">
							@can('عرض المدينه')
							<div class="text-center">
								<a href="{{url('/city')}}" class="btn btn-success"><i class="fas fa-plus"></i> اضافه مدينه</a>
								</div>
							@endcan
						</div>
					</div>
					<div class="col-lg-12 col-xl-4">
						<div class="card card-dashboard-map-one">
							@can('اضافه نوع عقار')
							<div class="text-center">
								<a href="{{url('/real_estate')}}" class="btn btn-success"><i class="fas fa-plus"></i> اضافه نوع عقار</a>
								</div>
							@endcan
						</div>
					</div>
					<div class="col-lg-12 col-xl-4">
						<div class="card card-dashboard-map-one">
							
							@can('الاعدادات')
							<div class="text-center">
								<a href="{{url('/setting')}}" class="btn btn-success"><i class="fas fa-cog"></i>الاعدادات</a>
								</div>
							@endcan
						</div>
					</div>

			</div>
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/adminAssets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/adminAssets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/adminAssets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/adminAssets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/adminAssets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/adminAssets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/js/jquery.vmap.sampledata.js')}}"></script>	
@endsection