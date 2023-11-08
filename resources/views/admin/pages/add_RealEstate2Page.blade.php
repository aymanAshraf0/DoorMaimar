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
							<h4 class="content-title mb-0 my-auto">اضافه عقار</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/اضافه عقار</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection

@section('content')


<form action="{{url('/add_RealEstate2Add')}}" method="post" enctype="multipart/form-data">
    @csrf
	<input type="hidden" name="id" >

	<div class="row g-3 align-items-center m-3">
		<div class="col-2 ">
		  <label for="numberOfOffer"  style="font-size: larger;" class="col-form-label  text-center">رقم العرض</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="numberOfOffer" id="numberOfOffer" placeholder="رقم العرض">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="address"  style="font-size: larger;" class="col-form-label  text-center">العنوان</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="address" id="address" placeholder="العنوان">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="price"  style="font-size: larger;" class="col-form-label  text-center">السعر</label>
		</div>
		<div class="col-8">
		  <input type="number" class="form-control" name="price" id="price" placeholder="السعر">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="kindOfPrice"  style="font-size: larger;" class="col-form-label  text-center">نوع السعر</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="kindOfPrice" id="kindOfPrice" placeholder="نوع السعر">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="fieldDelegate"  style="font-size: larger;" class="col-form-label  text-center">المندوب الميداني</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="fieldDelegate" id="fieldDelegate" placeholder="المندوب الميداني">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="date"  style="font-size: larger;" class="col-form-label  text-center">التاريخ </label>
		</div>
		<div class="col-8">
		  <input type="date" class="form-control" name="date" id="date" placeholder="التاريخ">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="images"  style="font-size: larger;" class="col-form-label  text-center">الصوره الرئيسيه </label>
		</div>
		<div class="col-8">
		  <input type="file" class="form-control" name="images" id="images">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="images_2"  style="font-size: larger;" class="col-form-label  text-center">صور التفاصيل </label>
		</div>
		<div class="col-8">
		  <input type="file" class="form-control" name="images_2[]" id="images_2" multiple>
		</div>
	  </div>

	  <div class="row g-3 align-items-center m-3">
		<div class="col-2">
			<label for="realEstate" style="font-size: larger;" class="col-form-label text-center">العقار</label>
		</div>
		<div class="col-8" >
			<select style="width: 100% !important;" class="form-select form-select-lg" name="realEstate" id="realEstate">
				<option value="">اختر من القائمة</option>
				@foreach($data as $item)
					<option value="{{ $item->id }}">{{ $item->real_estate_name }}</option>
				@endforeach
			</select>
		</div>
	</div>
	  <div class="row g-3 align-items-center m-3">
		<div class="col-2">
			<label for="city" style="font-size: larger;" class="col-form-label text-center">المدينه</label>
		</div>
		<div class="col-8" >
			<select style="width: 100% !important;" class="form-select form-select-lg" name="city" id="city">
				<option value="">اختر من القائمة</option>
				@foreach($dataC as $item)
					<option value="{{ $item->id }}">{{ $item->city_name }}</option>
				@endforeach
			</select>
		</div>
	</div>
	  <div class="row g-3 align-items-center m-3">
		<div class="col-2">
			<label for="zone" style="font-size: larger;" class="col-form-label text-center">المنطقه</label>
		</div>
		<div class="col-8" >
			<select style="width: 100% !important;" class="form-select form-select-lg" name="zone" id="zone">
				<option value="">اختر من القائمة</option>
					<option value="شمال">شمال</option>
					<option value="جنوب">جنوب</option>
					<option value="شرق">شرق</option>
					<option value="غرب">غرب</option>
					<option value="وسطي">وسطي</option>
			</select>
		</div>
	</div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="neighborhood"  style="font-size: larger;" class="col-form-label  text-center">الحي السكني</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="neighborhood" id="neighborhood" placeholder="الحي السكني">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="floors"  style="font-size: larger;" class="col-form-label  text-center">الادوار </label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="floors" id="floors" placeholder="الادوار">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="numberOfRooms"  style="font-size: larger;" class="col-form-label  text-center">عدد الغرف </label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="numberOfRooms" id="numberOfRooms" placeholder="عدد الغرف">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="numberOfEntrances"  style="font-size: larger;" class="col-form-label  text-center">عدد المداخل</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="numberOfEntrances" id="numberOfEntrances" placeholder="عدد المداخل">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="elevators"  style="font-size: larger;" class="col-form-label  text-center">المصاعد</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="elevators" id="elevators" placeholder="المصاعد">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="bathrooms"  style="font-size: larger;" class="col-form-label  text-center">الحمامات</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="bathrooms" id="bathrooms" placeholder="الحمامات">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="numberOfLivingrooms"  style="font-size: larger;" class="col-form-label  text-center">عدد الصالات</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="numberOfLivingrooms" id="numberOfLivingrooms" placeholder="عدد الصالات">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="kindOfStairs"  style="font-size: larger;" class="col-form-label  text-center">نوع الدرج</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="kindOfStairs" id="kindOfStairs" placeholder="نوع الدرج">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="theYard"  style="font-size: larger;" class="col-form-label  text-center">الحوش</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="theYard" id="theYard" placeholder="الحوش">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="interFace"  style="font-size: larger;" class="col-form-label  text-center">الواجهه</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="interFace" id="interFace" placeholder="الواجهه">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="widthOfStreet"  style="font-size: larger;" class="col-form-label  text-center">عرض الشارع</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="widthOfStreet" id="widthOfStreet" placeholder="عرض الشارع">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="ageOfRealEstate"  style="font-size: larger;" class="col-form-label  text-center">عمر العقار</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="ageOfRealEstate" id="ageOfRealEstate" placeholder="عمر العقار">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="barking"  style="font-size: larger;" class="col-form-label  text-center">الباركينج</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="barking" id="barking" placeholder="الباركينج">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="Maid_s_room"  style="font-size: larger;" class="col-form-label  text-center">غرفه الخادمه</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="Maid_s_room" id="Maid_s_room" placeholder="عرفه الخادمه">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="security_room"  style="font-size: larger;" class="col-form-label  text-center">غرفه الحارس</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="security_room" id="security_room" placeholder="غرفه الحارس">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="Driver_s_room"  style="font-size: larger;" class="col-form-label  text-center">غرفه السائق</label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="Driver_s_room" id="Driver_s_room" placeholder="غرفه السائق">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="space"  style="font-size: larger;" class="col-form-label  text-center">المساحه<label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="space" id="space" placeholder="المساحه">
		</div>
	  </div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="Swimming_pools"  style="font-size: larger;" class="col-form-label  text-center">المسابح<label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="Swimming_pools" id="Swimming_pools" placeholder="المسابح">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="piece_number"  style="font-size: larger;" class="col-form-label  text-center">رقم القطعه<label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="piece_number" id="piece_number" placeholder="رقم القطعه">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="the_owner_s_name"  style="font-size: larger;" class="col-form-label  text-center">اسم المالك<label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="the_owner_s_name" id="the_owner_s_name" placeholder="اسم المالك">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="owner_s_phone_number"  style="font-size: larger;" class="col-form-label  text-center">رقم هاتف المالك<label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="owner_s_phone_number" id="owner_s_phone_number" placeholder="رقم هاتف المالك">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="security_name"  style="font-size: larger;" class="col-form-label  text-center">اسم الحارس<label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="security_name" id="security_name" placeholder="اسم الحارس">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="security_number"  style="font-size: larger;" class="col-form-label  text-center">رقم هاتف الحارس<label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="security_number" id="security_number" placeholder="رقم هاتف الحارس">
		</div>
	  </div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="coordinates"  style="font-size: larger;" class="col-form-label  text-center">الاحداثيات<label>
		</div>
		<div class="col-8">
		  <input type="text" class="form-control" name="coordinates" id="coordinates" placeholder="الاحداثيات">
		</div>
	  </div>
	  <div class="row g-3 align-items-center m-3">
		<div class="col-2">
			<label for="status" style="font-size: larger;" class="col-form-label text-center">الحاله</label>
		</div>
		<div class="col-8" >
			<select style="width: 100% !important;" class="form-select form-select-lg" name="status" id="status">
				<option value="">اختر من القائمة</option>
				@foreach($dataS as $item)
					<option value="{{ $item->id }}">{{ $item->status }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
		  <label for="date2"  style="font-size: larger;" class="col-form-label  text-center">التاريخ </label>
		</div>
		<div class="col-8">
		  <input type="date" class="form-control" name="date2" id="date2" placeholder="التاريخ">
		</div>
	</div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
			<label for="notes" style="font-size: larger;" class="col-form-label text-center">الملاحظات</label>
		</div>
		<div class="col-8">
			<textarea class="form-control" name="notes" id="notes" placeholder="الملاحظات"></textarea>
		</div>
	</div>
	<div class="row g-3 align-items-center m-3">
		<div class="col-2">
			<label for="Special_note" style="font-size: larger;" class="col-form-label text-center">ملاحظه خاصه</label>
		</div>
		<div class="col-8">
			<textarea class="form-control" name="Special_note" id="Special_note" placeholder="ملاحظه خاصه"></textarea>
		</div>
	</div>
	
    <div class="text-center">
    <button type="submit" class="btn btn-warning text-dark  m-1">اضافه</button>
	</div>
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