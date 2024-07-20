<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable ps-theme-dark">
            <br>
            <li class="font-weight-bold ml-3">Menu</li>
            <!-- <li class=" ml-3">Menu</li> -->
            <li class="nav-item">
                <a href=" {{ url('admin/dashboard') }}">
                    <span class="icon-holder">
                        <i class="nav-icon fas fa-home"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="nav-icon fas fa-images"></i>
                    </span>
                    <span class="title">Gallery</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/sejarah') ? 'active' : '' }} ">
                        <a href="{{ url('admin/sejarah') }}"><i class="fas fa-solid fa-newspaper"></i> Sejarah</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/pengrajin') ? 'active' : '' }} ">
                        <a href="{{ url('admin/pengrajin') }}"><i class="fas fa-solid fa-newspaper"></i> Pengrajin</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/penghargaan') ? 'active' : '' }} ">
                        <a href="{{ url('admin/penghargaan') }}"><i class="fas fa-trophy"></i> Penghargaan</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/video-pembuatan') ? 'active' : '' }} ">
                        <a href="{{ url('admin/video-pembuatan') }}"><i class="fas fa-video"></i> Video Pembuatan</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="nav-icon fas fas fa-stream"></i>
                    </span>
                    <span class="title">Katalog</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/produk') ? 'active' : '' }} ">
                        <a href="{{ url('admin/produk') }}"><i class="fas fa-shopping-bag"></i> Produk</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="nav-icon fas fa-archive"></i>
                    </span>
                    <span class="title">Data</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/tentang-kami') ? 'active' : '' }} ">
                        <a href="{{ url('admin/tentang-kami') }}"><i class="fas fa-solid fa-newspaper"></i> Tentang
                            Kami</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/artikel') ? 'active' : '' }} ">
                        <a href="{{ url('admin/artikel') }}"><i class="fas fa-solid fa-newspaper"></i> Artikel</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
