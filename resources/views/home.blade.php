@extends('layouts.main')

@include('partials.navbar') {{-- Navbar --}}
@section('content')
    <section class="main mt-5">
        {{-- Header --}}
        <div class="container">
            <header class="header d-flex py-4">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <img src="img/name-Landscape.png" class="w-100" alt="">
                        <h3 class="text-center mb-5">Semua bisa bergerak, Semua bisa <br> berinfaq, Semua mampu bantu sesama
                        </h3>
                        <a href="/berdonasi" class="btn btn-donasi d-grid col-6 mx-auto">Donasi Sekarang</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="img/hero.png" class="hero w-100" alt="Gerakan Infaq nutrisi">
                    </div>
                </div>
            </header>
        </div>

        {{-- End Header --}}

        {{-- About --}}
        <section class="about">

            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report text-decoration-none">
                            <div class="item1">Donasi Terhimpun</div>
                            <div class="item2">Rp.</div>
                            <div class="item3">100.000.000</div>
                            <div class="item4"><img src="img/ic-donation-collage.svg" alt=""></div>
                        </a>
                    </div>

                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report text-decoration-none">
                            <div class="item1">Donasi Terhimpun</div>
                            <div class="item2">Rp.</div>
                            <div class="item3">100.000.000</div>
                            <div class="item4"><img src="img/ic-donation-collage.svg" alt=""></div>
                        </a>
                    </div>

                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report px-2 text-decoration-none">
                            <div class="item1">Donasi Terhimpun</div>
                            <div class="item2">Rp.</div>
                            <div class="item3">1.000.000.000</div>
                            <div class="item4"><img src="img/ic-donation-collage.svg" alt=""></div>
                        </a>
                    </div>

                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report text-decoration-none">
                            <div class="item1">Donasi Terhimpun</div>
                            <div class="item2">Rp.</div>
                            <div class="item3">100.000.000</div>
                            <div class="item4"><img src="img/ic-donation-collage.svg" alt=""></div>
                        </a>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="carousel py-5">
                    <div class="row gap-5">
                        <div class="col-12 col-sm px-3">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="about-content col-12 col-md-6 text-center lh-lg px-3">
                            <h3>Apa itu Gerakan Infaq Nutrisi?</h3>
                            <p>Gerakan Infaq Nutrisi (GIN) merupakan sebuah gerakan mengajak masyarakat untuk saling
                                bergerak
                                dan membantu sesama. GIN menyalurkan kebutuhan
                                pokok atau paket nutrisi yang sehat guna
                                memperbaiki nutrisi keluarga.</p>

                            <p> Paket nutrisi seperti beras, minyak goreng, gula, susu/madu herbal, sayuran, bumbu dapur,
                                buah,
                                telur/lauk, dan tempe/tahu. Paket nutrisi akan diberikan kepada keluarga dhuafa, panti
                                asuhan,
                                dan pesantren.</p>

                            <a href="/berdonasi" class="btn btn-donasi d-grid col-6 mx-auto">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- End About --}}

        {{-- Start Tokoh Pendukung --}}
        <section class="tokoh-pendukung">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="sec-heading text-center">
                            <h3>Tokoh Pendukung</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="team-slider owl-carousel">
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation"
                                            src="img/bg.jpg"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation"
                                            src="img/1.jpg"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation"
                                            src="img/1.jpg"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation"
                                            src="img/3.jpg"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation"
                                            src="img/3.jpg"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Tokoh Pendukung --}}

        {{-- Start Penerima Manfaat --}}
        <section class="penerima-manfaat">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="sec-heading text-center">
                            <h3>Penerima Manfaat</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="team-slider owl-carousel">
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation"
                                            src="img/bg.jpg"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation"
                                            src="img/1.jpg"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation"
                                            src="img/1.jpg"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation"
                                            src="img/3.jpg"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation"
                                            src="img/3.jpg"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Penerima Manfaat --}}

        @include('partials.footer') {{-- Footer --}}
    </section>

    {{-- end main Content --}}
@endsection
