<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
        <a href="#"><img src="{{ asset('image/logo/logo.png')}}" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    {{-- <div class="offcanvas__widget">
        <span>Call us for any questions</span>
        <h4>+01 123 456 789</h4>
    </div> --}}
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header" {{ $header=='contact' || $header=='design' ? "style=background-color:black" : ""}}>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="#"><img src="{{ asset('image/logo/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="{{ $header == 'home' ? 'active' : '' }}">
                            <a href="{{ route('toHome') }}">Home</a>
                        </li>
                        <li class="{{ $header == 'design' ? 'active' : '' }}">
                            <a href="{{route('toDesign')}}">Door Design</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="{{ route('toDesignDetail', ['type' => 'a']) }}">Design A</a>
                                </li>
                                <li>
                                    <a href="{{ route('toDesignDetail', ['type' => 'b']) }}">Design B</a>
                                </li>
                                <li>
                                    <a href="{{ route('toDesignDetail', ['type' => 'br']) }}">Design B Recessed</a>
                                </li>
                                <li>
                                    <a href="{{ route('toDesignDetail', ['type' => 'c']) }}">Design C</a>
                                </li>
                                <li>
                                    <a href="{{ route('toDesignDetail', ['type' => 'd']) }}">Design D</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ $header == 'projects' ? 'active' : '' }}">
                            <a href="{{ route('toProjects') }}">Projects</a>
                        </li>
                        {{-- <li>
                            <a href="./about.html">About</a>
                        </li>
                        <li>
                            <a href="./blog.html">Blog</a>
                        </li> --}}
                        <li class="{{ $header == 'contact' ? 'active' : '' }}">
                            <a href="{{ route('toContact') }}">Contact</a>
                        </li>
                        @if(empty($isLogin))
                            <li>
                                <a>Sign in</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('toAdminLogin') }}">Admin</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('toLogin') }}">Customer</a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="{{ $header == 'forms' ? 'active' : '' }}">
                                <a href="{{ route('toPaintedDoorFirst') }}">Forms</a>
                                {{-- <ul class="dropdown">
                                    <li><a href="{{ route('toCabinetOrder') }}">Cabinet Order</a></li>
                                    <li><a href="{{ route('toPaintedDoorFirst') }}">Painted Door Order</a></li>
                                    <li><a href="{{ route('toBenchtopOrder') }}">Benchtop Order</a></li>
                                    <li><a href="">Instruction</a></li>
                                </ul> --}}
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
            @if ($isLogin)
                <div class="col-lg-3 flex" style="justify-content : space-between">
                    <div class="header__widget">
                        <span>{{ $isLogin }}</span>
                    </div>
                    <div class="header__widget" style=>
                        <a onclick="onLogout()">Log out</a>
                    </div>
                </div>
            @endif

        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>

<script>

    function onLogout(){
        $.ajax({
            type : 'POST',
            url  : "{{ route('onLogout') }}",
            data : {
                _token      : "{{ csrf_token() }}",
            },
            success:function(response){
                window.location.href="{{route('toHome')}}";
            }

        })
    }

</script>
<!-- Header Section End -->
