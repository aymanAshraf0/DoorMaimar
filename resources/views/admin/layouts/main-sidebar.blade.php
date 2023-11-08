<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}">Khaled Maraghy</a>
				<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/adminAssets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/adminAssets/img/brand/mammar logo.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/adminAssets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/adminAssets/img/faces/mammar logo.png')}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{Auth::user()->name}}</h4>
							
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="slide ">
						<a class="side-menu__item" href="{{ url('/dashboard') }}"><svg class="side-menu__icon" ></svg><i class="fas fa-home"></i>الرئيسيه</span></a>
					</li>
					@can('عرض الصلاحيات')
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/' . $page='roles') }}"><svg class="side-menu__icon" ></svg><i class="fas fa-user"></i>مجموعه الصلاحيات</span></a>
					</li>
					@endcan
					@can('عرض المستخدمين')
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/' . $page='users') }}"><svg class="side-menu__icon" ></svg><i class="fas fa-cogs"></i>المستخدمين</span></a>
					</li>
					@endcan
					@can('السلايدر')
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/slider') }}"><svg class="side-menu__icon" ></svg><i class="fas fa-image"></i>السلايدر</span></a>
					</li>
					@endcan
					@can('عرض انواع العقارات')
					<li class="slide">
						<a class="side-menu__item" href="{{url('/real_estate')}}"><svg class="side-menu__icon" ></svg><i class="fas fa-file"></i>انواع العقارات</span></a>
					</li>
					@endcan
					@can('عرض المدينه')
					<li class="slide">
						<a class="side-menu__item" href="{{url('/city')}}"><svg class="side-menu__icon" ></svg><i class="fas fa-city"></i>المدن</span></a>
					</li>
					@endcan
					@can('عرض العقارات')
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/RealEstate') }}"><svg class="side-menu__icon" ></svg><i class="fas fa-file"></i> العقارات</span></a>
					</li>
					@endcan
					@can('عرض العقارات غير المنشورة')
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/unShareRealEstate2') }}"><svg class="side-menu__icon" ></svg><i class="fas fa-file"></i> العقارات الغير منشوره</span></a>
					</li>
					@endcan
					@can('الاعدادات')
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/setting2') }}"><svg class="side-menu__icon" ></svg><i class="fas fa-cog"></i>الاعدادات</span></a>
					</li>
					@endcan
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
