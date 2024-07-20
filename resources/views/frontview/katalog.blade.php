<x-base>
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">What We Do</h4>
                </div>
                <h1 class="display-3 mb-4">Our Service Given Physio Therapy By Expert</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($produk as $index => $p)
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <div id="carousel{{ $index }}" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach ($p->carousels as $index => $carousel)
                                    <li data-target="#carouselExampleIndicators{{ $index }}" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">
                                    @foreach ($p->carousels as $index => $carousel)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img class="d-block w-100" src="{{ asset($carousel->foto) }}" alt="{{ $carousel->alt_text }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mt-3">
                                    <a href="#" style="color: rgb(255, 255, 255);" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $p->id }}">
                                        {{ $p->nama_motif }}
                                    </a>
                                </h5>
                                <p>{{ $p->hak_cipta }}</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $p->id }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>            
        </div>
    </div>

    @foreach ($produk as $index => $p)
        <div class="modal fade" id="exampleModal{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="carouselExampleIndicators{{ $p->id }}" class="carousel slide"
                                        data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            @foreach ($p->carousels as $index => $carousel)
                                                <li data-target="#carouselExampleIndicators{{ $p->id }}"
                                                    data-slide-to="{{ $index }}"
                                                    class="{{ $index == 0 ? 'active' : '' }}"></li>
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach ($p->carousels as $index => $carousel)
                                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                    <img class="d-block w-100" src="{{ asset($carousel->foto) }}"
                                                        alt="{{ $carousel->alt_text }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev"
                                            href="#carouselExampleIndicators{{ $p->id }}" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-custom-icon" aria-hidden="true">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next"
                                            href="#carouselExampleIndicators{{ $p->id }}" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-custom-icon" aria-hidden="true">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <h3 class="font-weight-bold" style="font-family: 'Cinzel', serif; color: white;">
                                            {{ $p->nama_motif }}
                                        </h3>
                                    <br>
                                    <dt class="font-weight-bold" style="font-family: 'Cinzel', serif;">HAK CIPTA</dt>
                                    <dd>{{ $p->hak_cipta }}</dd>
                                    <dt class="font-weight-bold" style="font-family: 'Cinzel', serif;">DESKRIPSI</dt>
                                    <dd>{{ $p->deskripsi }}</dd>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-base>
