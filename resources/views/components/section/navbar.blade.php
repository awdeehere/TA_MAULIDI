<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <img src="{{ url('/') }}/assets/images/logo/kain.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('home') }}"
                    class="nav-item nav-link {{ request()->is('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ url('galeri') }}"
                    class="nav-item nav-link {{ request()->is('galeri') ? 'active' : '' }}">Galeri</a>
                <a href="{{ url('katalog') }}"
                    class="nav-item nav-link {{ request()->is('katalog') ? 'active' : '' }}">Katalog</a>
                <a href="{{ url('about') }}"
                    class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">Tentang Kami</a>
            </div>
        </div>
    </nav>


    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{ url('/') }}/frontview/img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3">
                    <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Kain Pelangi</h5>
                    <h1 class="display-1 text-capitalize text-white mb-4">Warisan Budaya Penuh Warna</h1>
                    <p class="mb-5 fs-5">"Menghidupkan kekayaan tradisi dan keragaman seni melalui motif,
                        warna, dan desain yang memancarkan keindahan dan sejarah setiap kainnya."
                    </p>
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5"
                        href="https://youtu.be/o7Mg9ImyUoI?si=em1L2SzN5bcCdBak">Putar Sekarang</a>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="{{ url('/') }}/frontview/img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3">
                    <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Kain Pelangi</h5>
                    <h1 class="display-1 text-capitalize text-white mb-4">Wastra Kraton Matan Tanjungpura</h1>
                    <p class="mb-5 fs-5 animated slideInDown">"Kain tradisional yang mencerminkan keanggunan dan
                        kekayaan budaya Matan Tanjungpura,
                        menyatukan warisan dan tradisi melalui motif-motif khas yang memikat."
                    </p>
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5"
                        href="https://youtu.be/o7Mg9ImyUoI?si=em1L2SzN5bcCdBak">Putar Sekarang</a>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="{{ url('/') }}/frontview/img/carousel-3.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3">
                    <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Kain Pelangi</h5>
                    <h1 class="display-1 text-capitalize text-white mb-4">Menyulam Warisan, Menyatu Tradisi</h1>
                    <p class="mb-5 fs-5 animated slideInDown">"Keindahan warisan budaya dengan seni tradisional,
                        Hidupkan nilai-nilai leluhur dan hadirkan keanggunan dalam setiap motifnya."
                    </p>
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5"
                        href="https://youtu.be/o7Mg9ImyUoI?si=em1L2SzN5bcCdBak">Putar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
</div>
