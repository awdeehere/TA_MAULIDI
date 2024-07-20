<x-base>
    <header class="page-header" data-background="images/page-header.jpg">
        <div class="inner">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph"
                    d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
            </svg>
            <h1>Tentang Kami</h1>
            <p>Kami adalah perusahaan yang berfokus pada kualitas dan inovasi, berkomitmen untuk memberikan produk dan
                layanan terbaik kepada pelanggan.</p>
        </div>
        <!-- end inner -->
    </header>
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-box text-center">
                        {!! $tentang->deskripsi !!}
                    </div>
                </div>
                <!-- end col-10 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
</x-base>
