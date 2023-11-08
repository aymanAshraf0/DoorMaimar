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
							<h4 class="content-title mb-0 my-auto">السلايدر</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/السلايدر</span>
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
<!-- زرار لفتح النافذة المودال -->

<a href="#" class="card-title mg-b-0 btn btn-warning" data-toggle="modal" data-target="#modaldemo1">اضافه</a>

<div>
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
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
                                                        <table class="table text-md-nowrap" id="example1">
                                                            <thead>
                                                                <tr>
                                                                    <th class="wd-15p border-bottom-0">رقم</th>
                                                                    <th class="wd-15p border-bottom-0">الصوره</th>
                                                                    <th class="wd-20p border-bottom-0">خيارات</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i=0?>
                                                                    @foreach ($data as $item)
                                                                    <?php $i++?>
                                                                    <tr>
                                                                    <td>{{$i}}</td>
                                                                    <td><img src="{{asset("uploads/images/slider/$item->image")}}"></td>
                                                                    <td>
                                                                        <a   href="{{url('/editimage',$item->id)}}" class="btn btn-primary">تعديل</a>
																		<a href="{{ url('/deleteImage', ['id' => $item->id]) }}" class="btn btn-danger delete-button">حذف</a>
                                                                    </td>
                                                                    </tr>
                                                                    @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div><!-- bd -->
                                            </div><!-- bd -->
                                        </div>
                                        <!--/div-->
		</div>
<div>
		<!-- Basic modal 1 -->
		<div class="modal" id="modaldemo1">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">اضافه صوره للسلايدر </h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
                    <form action="{{url('/add_slider_imge')}}" method="post" enctype="multipart/form-data">
                        @method('post')
                    @csrf
                    <input class="form-control m-1" type="file" name="image">
                    <button type="submit" class="btn btn-warning text-dark m-1">اضافه</button>
                    </form>
					</div>
				</div>
			</div>
		</div>
		<!-- End Basic modal 1 -->

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
        if (confirm('هل أنت متأكد أنك تريد حذف الصوره ؟')) {
            // إذا تم تأكيد الحذف، قم بتوجيه المتصفح إلى مسار الحذف
            window.location = e.target.getAttribute('href');
        }
    });
});

</script>

@endsection