@extends('admin.layouts.master')
@section('css')
<!--Internal  Font Awesome -->
<link href="{{URL::asset('assets/adminAssets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<!--Internal  treeview -->
<link href="{{URL::asset('assets/adminAssets/plugins/treeview/treeview-rtl.css')}}" rel="stylesheet" type="text/css" />



@section('title')
عرض الصلاحيات 
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الصلاحيات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض
                الصلاحيات</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->


<!-- row -->
<div class="row">
    <div class="col-md-12">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    <div class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}">رجوع</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h3 href="#">{{ $role->name }}</h3>
                                <ul class="list-group">
                                    @if(!empty($rolePermissions))
                                        @foreach($rolePermissions as $v)
                                            <li class="list-group-item">{{ $v->name }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                    <!-- /col -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<script src="{{URL::asset('assets/adminAssets/plugins/treeview/treeview.js')}}"></script>

@endsection