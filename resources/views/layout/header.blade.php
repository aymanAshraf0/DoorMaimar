  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a style="width: 40%" href="{{url('home')}}" class="logo">
                        <img style="width: 80%" src="{{asset('assets\images\mammar logo2.png')}}">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/chatify" class="{{ Request::is('chatify') ? 'active' : '' }}">محادثه</a></li>
                        <li><a href="{{ url('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">تواصل معنا</a></li>
                        <li><a href="{{ url('services') }}" class="{{ Request::is('services') ? 'active' : '' }}">خدماتنا</a></li>
                        <li><a href="{{ url('aboutUs') }}" class="{{ Request::is('aboutUs') ? 'active' : '' }}">عن دور معمار</a></li>
                        <li><a href="{{ url('home') }}" class="{{ Request::is('home') || Request::path() === '/' ? 'active' : '' }}">الرئيسيه</a></li>
                        
                            @if (Route::has('login'))
                                    @auth
                                        <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li>
                                    @else
                                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">دخول</a></li>
                
                                        {{-- @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">تهيئه</a></li>
                                        @endif --}}
                                    @endauth
                            @endif
                        </li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>

  </header>
    <!-- ***** Header Area End ***** -->