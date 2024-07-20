<x-base>
    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <img src="{{ url('/') }}/frontview/img/about-1.jpg" class="img-fluid rounded w-100"
                            style="object-fit: cover;" alt="Image">
                        <div class="about-img-inner">
                            <img src="{{ url('/') }}/frontview/img/about-2.jpg"
                                class="img-fluid rounded-circle w-100 h-100" alt="Image">
                        </div>
                        <div class="about-experience">15 years experience</div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h1 class="sub-title pe-3 mb-0">Kunjungi Galeri Kami</h1>
                        <h5 class="display-3 mb-4">Miliki Kain Pelangi Dengan Motif Favoritmu.</h5>
                        {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> --}}
                        <div class="mb-4">
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Refresing to get
                                such a personal touch.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Duis aute irure
                                dolor in reprehenderit in voluptate.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Velit esse cillum
                                dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Blog Start -->
    <div class="container-fluid blog bg-light py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">ARTIKEL</h4>
                </div>
                <h5 class="display-3 mb-4">Menyaksikan pameran dan penghargaan yang telah diraih oleh Kain Pelangi </h5>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at
                    atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                    necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($artikel as $index => $artikel)
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item rounded" style="border: 2px solid #ffc107;">
                            <div class="blog-img">
                                <img src="{{ $artikel->thumbnail }}" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-content p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i>{{ $artikel->tanggal }}</p>
                                </div>
                                <a href="{{ route('artikel.show', $artikel->slug) }}" class="h4">{{ $artikel->judul }}</a>
                                <p class="my-4">{{ $artikel->short_content }}</p>
                                <a href="{{ route('artikel.show', $artikel->slug) }}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
        <!-- Blog End -->
    </div>

</x-base>
