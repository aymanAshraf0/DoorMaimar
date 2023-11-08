@extends('admin.layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/adminAssets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/adminAssets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/adminAssets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/adminAssets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/adminAssets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/adminAssets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Owl Carousel css-->
<link href="{{URL::asset('assets/adminAssets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!---Internal  Multislider css-->
<link href="{{URL::asset('assets/adminAssets/plugins/multislider/multislider.css')}}" rel="stylesheet">
<!--- Select2 css -->
<link href="{{URL::asset('assets/adminAssets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">انواع العقارات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ انواع العقارات</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection

@section('content')


<form action="{{url('/update_real_estate_name')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <input class="form-control m-1" type="text" name="real_estate_name" placeholder="اسم نوع العقار" value="{{$data->real_estate_name}}" >
    <button type="submit" class="btn btn-success m-1">تعديل</button>
    </form>


@endsection

@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/adminAssets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/adminAssets/js/table-data.js')}}"></script>
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/adminAssets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/adminAssets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Modal js-->
<script src="{{URL::asset('assets/adminAssets/js/modal.js')}}"></script>

@endsection