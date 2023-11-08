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
				<!-- row -->
				<div class="row">
										<!--div-->
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header pb-0">
                                                    <div class="d-flex justify-content-between">


<div>
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
    @endif
</div>
<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
</div>
<div>
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
</div>
<div>
    @if (session()->has('deletedMessage'))
    <div class="alert alert-success">
        {{ session()->get('deletedMessage') }}
    </div>
@endif
<div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
</div>
                                                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <form action="{{url('/update_setting',$data->id)}}" method="post"  enctype="multipart/form-data">
                                                            
                                                            @csrf
                                                            <div class="row mb-3">
                                                              <label for="inputName" class="col-sm-2 col-form-label">الاسم</label>
                                                              <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="name" value="{{$data->name}}" id="inputName">
                                                                
                                                              </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                              <label for="inputCompanyName" class="col-sm-2 col-form-label" >اسم المؤسسه</label>
                                                              <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="companyName" value="{{$data->name_of_company}}" id="inputCompanyName">
                                                                
                                                              </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                              <label for="inputAddress" class="col-sm-2 col-form-label">العنوان</label>
                                                              <div class="col-sm-10">
                                                                <textarea class="form-control" name="address" value="{{$data->address}}" id="inputAddress" ></textarea>
                                                                
                                                              </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                              <label for="inputimage" class="col-sm-2 col-form-label">الصوره</label>
                                                              <div class="col-sm-10">
                                                                <input type="file" class="form-control" name="image" id="inputimage">
                                                                <img src="{{asset("uploads/images/brands/1697998296.png")}}" width="100">
                                                              </div>
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">تعديل</button>
                                                          </form>
                                                    </div>
                                                </div><!-- bd -->
                                            </div><!-- bd -->
                                        </div>
                                        <!--/div-->
                                    </div>

<div>


</div>
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

<script>
	// استدعاء الزر الذي يحمل فئة 'delete-button'
const deleteButtons = document.querySelectorAll('.delete-button');

// تحديد التصريح عند النقر على زر الحذف
deleteButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault(); // منع انتقال الرابط
        
        // عرض مربع حوار لتأكيد الحذف
        if (confirm('هل أنت متأكد أنك تريد حذف  نوع العقار؟')) {
            // إذا تم تأكيد الحذف، قم بتوجيه المتصفح إلى مسار الحذف
            window.location = e.target.getAttribute('href');
        }
    });
});

</script>

@endsection