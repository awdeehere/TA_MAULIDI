<div class="header">
    <div class="logo logo-dark">
        <a href="">
            <img src="{{ url('/') }}/assets/images/logo/kain.png" alt="Logo" width="150" height="47" class="mt-2">
            <img class="logo-fold mt-2 ml-3" src="{{ url('/') }}/assets/images/logo/logo.png" alt="Logo" width="50" height="51">
        </a>
    </div>
    <div class="logo logo-white">
        <a href="index.html">
            <img src="{{ url('/') }}/assets/images/logo/logo-white.png" alt="Logo">
            <img class="logo-fold p-4" src="{{ url('/') }}/assets/images/logo/logo-fold-white.png" alt="Logo">
        </a>
    </div>
    <div class="nav-wrap">
        <ul class="nav-left">
            <li class="desktop-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <li class="mobile-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <div class="sidebar-header font-weight-bold" style="display: block;background-color: #fff;color: #2A2A2A;width: 100%;padding: 0 20px;padding-left: 20px;clear: both;z-index: 10;position: relative;text-align:center;font-size: 16px;">
                KAIN PELANGI ADMIN
            </div>
        </ul>
        <ul class="nav-right">
            <li class="dropdown dropdown-animated scale-left" style="padding-left: 20px;">
                <div class="pointer" data-toggle="dropdown">
                    <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
                        <span class="semi-bold" style="font-weight: 500 ;">
                            @if (auth()->check())
                            Hallo, {{ auth()->user()->nama }}
                            @endif
                            @if (auth()->user()->foto)
                            <img src="{{url('/'.auth()->user()->foto)}}" alt="User Image" style="width: 60px;height: 60px; padding: 10px; margin: 0px; " class="img-circle">
                            @else
                            <img src="{{url('/')}}/images/profile.jpg" alt="User Avatar" style="width: 60px;height: 60px; padding: 10px; margin: 0px; " class="img-circle">
                            @endif
                        </span>
                    </div>
                </div>
                <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                    <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                        <div class="d-flex m-r-25">
                            <div class="m-l-10">
                                <p class="m-b-0 text-dark font-weight-semibold">
                                    @if (auth()->check())
                                    {{ auth()->user()->nama }}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="" class="dropdown-item d-block p-h-15 p-v-10">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                <span class="m-l-10">Edit Profile</span>
                            </div>
                            <i class="anticon font-size-10 anticon-right"></i>
                        </div>
                    </a>
                    <a href="{{ url('logout') }}" class="dropdown-item d-block p-h-15 p-v-10">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                <span class="m-l-10">Logout</span>
                            </div>
                            <i class="anticon font-size-10 anticon-right"></i>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>