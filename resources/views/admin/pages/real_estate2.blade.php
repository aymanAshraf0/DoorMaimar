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
							<h4 class="content-title mb-0 my-auto"> العقارات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  العقارات</span>
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
@can('اضافه عقار')
<a href="/add_RealEstate2" class="card-title mg-b-0 btn btn-warning">اضافه عقار</a>
@endcan

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
                                                        <table class="table text-md-nowrap" id="example">
                                                            <thead>
                                                                <tr>
                                                                    <th class="wd-15p border-bottom-0">رقم</th>
                                                                    <th class="wd-15p border-bottom-0">رقم العرض</th>
                                                                    <th class="wd-15p border-bottom-0">العنوان</th>
                                                                    <th class="wd-15p border-bottom-0">عقار</th>
                                                                    <th class="wd-15p border-bottom-0">مدينه</th>
                                                                    <th class="wd-15p border-bottom-0">التاريخ</th>
                                                                    <th class="wd-15p border-bottom-0">السعر</th>
                                                                    <th class="wd-15p border-bottom-0">الحاله</th>
                                                                    <th class="wd-15p border-bottom-0">المستخدم</th>
                                                                    <th class="wd-15p border-bottom-0">المندوب الميداني</th>
                                                                    <th class="wd-20p border-bottom-0">خيارات</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i=0?>
                                                                    @foreach ($data as $item)
                                                                    <?php $i++?>
                                                                    <tr>
                                                                    <td>{{$i}}</td>
                                                                    <td>{{$item->number_of_offer}}</td>
                                                                    <td>{{$item->address}}</td>
                                                                    <td>{{$item->Real_estate->real_estate_name}}</td>
                                                                    <td>{{$item->cities->city_name}}</td>
                                                                    <td>{{$item->date}}</td>
                                                                    <td>{{$item->price}}</td>
                                                                    <td>{{$item->status->status}}</td>
                                                                    <td>{{$item->user}}</td>
                                                                    <td>{{$item->fieldDelegate}}</td>
                                                                    <td>
                                                                        @can('تعديل عقار')
                                                                        <a   href="{{url('/editRealEstate',$item->id)}}" class="btn btn-primary">تعديل</a>
                                                                        @endcan
                                                                        @can('حذف عقار')
                                                                        <a href="{{ url('/deleteRealEstate', ['id' => $item->id]) }}" class="btn btn-danger delete-button" data-item-id="{{ $item->id }}">حذف</a>
                                                                        @endcan
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
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault(); // منع الانتقال الافتراضي للرابط

            const itemId = e.target.getAttribute('data-item-id'); // الحصول على الهوية الفريدة

            if (confirm('هل أنت متأكد من حذف هذا العنصر؟')) {
                fetch(`{{ url('/deleteRealEstate') }}/${itemId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        // إعادة تحميل الصفحة بعد الحذف
                        location.reload();
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });
</script>



@endsection