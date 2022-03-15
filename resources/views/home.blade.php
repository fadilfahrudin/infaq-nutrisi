@extends('layouts.main')

@section('title')
    HOME
@endsection

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
                            <div class="item1">Donasi Tersalurkan</div>
                            <div class="item2">Rp.</div>
                            <div class="item3">100.000.000</div>
                            <div class="item4"><img src="img/ic-donation-collage.svg" alt=""></div>
                        </a>
                    </div>

                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report px-2 text-decoration-none">
                            <div class="item1">Paket Tersalurkan</div>
                            <div class="item3">1.000.000</div>
                            <div class="item4"><img src="img/ic-donation-collage.svg" alt=""></div>
                        </a>
                    </div>

                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report text-decoration-none">
                            <div class="item1">Penerima Mafaat</div>
                            <div class="item3">1.000.000</div>
                            <div class="item4"><img src="img/ic-donation-collage.svg" alt=""></div>
                        </a>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="about-content col-10 m-auto lh-base text-center px-3">
                    <h3>GERAKAN INFAQ NUTRISI</h3>
                    <p>Gerakan Infaq Nutrisi merupakan sebuah gerakan sosial yang lahir dari semangat kepedulian untuk
                        mengentaskan berbagai masalah pangan yang terjadi di Indonesia dan juga di dunia Islam, khususnya
                        Palestina. Spirit kepedulian inilah yang mendorong Gerakan Infaq Nutrisi untuk terus bergerak demi
                        memenuhi kebutuhan nutrisi para dhuafa, yatim piatu, santri, dan para penghafal Al-Qur’an.
                    </p>

                    <p>Berdasarkan data Studi Status Gizi Balita Indonesia (SSGBI) tahun 2019, prevalensi stunting saat ini
                        masih berada pada angka 27,7%. Data World Bank tahun 2020 menunjukkan, prevalensi stunting Indonesia
                        berada pada urutan ke 115 dari 151 negara di dunia. Menko PMK memaparkan, pandemi Covid-19 telah
                        memunculkan banyak keluarga miskin baru. Misalnya saja di perkotaan, berdasarkan data BPS, jumlah
                        penduduk miskin di perkotaan telah naik sebanyak 138,1 ribu orang, dari 12,04 juta orang pada
                        September 2020 menjadi 12,18 juta orang pada Maret 2021. (www.kemenkopmk.go.id)
                    </p>

                    <p>
                        Melalui Gerakan Infaq Nutrisi, mari kita tunjukkan rasa cinta, kasih sayang, kepedulian dan
                        tindakkan nyata untuk mereka saudara-saudara kita, khusus nya yang masih berada di pelosok-pelosok
                        Indonesia.

                    </p>

                    <a href="/berdonasi" class="btn btn-donasi d-grid col-6 mt-5 mx-auto">Donasi Sekarang</a>
                </div>
            </div>

        </section>
        {{-- End About --}}

        <section class="programs">
            <div class="container py-5">
                <div class="slides card-group m-auto gap-5">
                    {{-- <div class="card">
                        <img src="/img/dumy-program.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BOX NUTRISI</h5>
                            <small>Gerakan Infaq Nutrisi</small>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div> --}}


                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Start Tokoh Pendukung --}}
        <section class="tokoh-pendukung">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="sec-heading text-center py-3">
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
                        <div class="sec-heading py-3 text-center">
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
        <a href="https://api.whatsapp.com/send?phone=+62081283125735&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
            class="btn-whatsApp" target="_blank">
            <i class="fa fa-whatsapp my-2"></i>
        </a>
        {{-- End Penerima Manfaat --}}

        @include('partials.footer') {{-- Footer --}}
    </section>

    {{-- end main Content --}}
@endsection
