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
        <section class="laporan" id="laporan">
            <div class="container">
                <div class="sec-heading text-center py-3 text-uppercase">
                    <h3>laporan</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report text-decoration-none">
                            <div class="item1">Donasi Terhimpun</div>
                            <div class="item2">Rp.</div>
                            <div class="item3 me-auto">100.000.000</div>
                            <div class="item4 ms-auto"><img src="img/ic-donation-collage.svg" alt=""></div>
                        </a>
                    </div>

                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report text-decoration-none">
                            <div class="item1">Donasi Tersalurkan</div>
                            <div class="item2">Rp.</div>
                            <div class="item3 me-auto">100.000.000</div>
                            <div class="item4 ms-auto"><img src="img/ic-donation-collage.svg" alt=""></div>
                        </a>
                    </div>

                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report px-2 text-decoration-none">
                            <div class="item1">Paket Tersalurkan</div>

                            <div class="item3 me-auto">1.000.000</div>
                            <img class="item4 ms-auto" src="img/ic-donation-collage.svg" alt="">

                        </a>
                    </div>

                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report text-decoration-none">
                            <div class="item1">Penerima Mafaat</div>
                            <div class="item3 me-auto">1.000.000</div>
                            <div class="item4 ms-auto"><img src="img/ic-donation-collage.svg" alt=""></div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        {{-- End Laporan --}}

        {{-- About --}}
        <section class="about" id="about">
            <div class="container m-auto col-10 text-center">
                <div class="sec-heading py-3 text-uppercase">
                    <h3>Gerakan Infaq Nutrisi</h3>
                </div>
                <div class="body-content lh-base px-3">
                    <p>Gerakan Infaq Nutrisi merupakan sebuah gerakan sosial yang lahir dari semangat kepedulian untuk
                        mengentaskan berbagai masalah pangan yang terjadi di Indonesia dan juga di dunia Islam,
                        khususnya
                        Palestina. Spirit kepedulian inilah yang mendorong Gerakan Infaq Nutrisi untuk terus bergerak
                        demi
                        memenuhi kebutuhan nutrisi para dhuafa, yatim piatu, santri, dan para penghafal Al-Qur’an.
                    </p>

                    <p>Berdasarkan data Studi Status Gizi Balita Indonesia (SSGBI) tahun 2019, prevalensi stunting saat
                        ini
                        masih berada pada angka 27,7%. Data World Bank tahun 2020 menunjukkan, prevalensi stunting
                        Indonesia
                        berada pada urutan ke 115 dari 151 negara di dunia. Menko PMK memaparkan, pandemi Covid-19 telah
                        memunculkan banyak keluarga miskin baru. Misalnya saja di perkotaan, berdasarkan data BPS,
                        jumlah
                        penduduk miskin di perkotaan telah naik sebanyak 138,1 ribu orang, dari 12,04 juta orang pada
                        September 2020 menjadi 12,18 juta orang pada Maret 2021. (www.kemenkopmk.go.id)
                    </p>

                    <p>
                        Melalui Gerakan Infaq Nutrisi, mari kita tunjukkan rasa cinta, kasih sayang, kepedulian dan
                        tindakkan nyata untuk mereka saudara-saudara kita, khusus nya yang masih berada di
                        pelosok-pelosok
                        Indonesia.

                    </p>
                </div>

                <a href="/berdonasi" class="btn btn-donasi d-grid col col-md-4 mt-5 mx-auto">Donasi Sekarang</a>

            </div>
        </section>
        {{-- End About --}}

        {{-- Start Programs Slider --}}
        <section class="programs" id="programs">
            <div class="container py-5 ">
                <div class="sec-heading text-uppercase text-center py-3">
                    <h3>Program Pilihan</h3>
                </div>
                <div class="row gap-3">
                    <div class="slides d-flex gap-5">
                        <div class="col">
                            <div class="card ms-auto  bg-white" style="width: 25rem">
                                <a class="text-decoration-none text-reset" href="#">
                                    <img src="/img/dumy-program.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-left">PAKET BOX NUTRISI</h5>
                                        <small class="card-text text-left">Gerakan Infaq Nutrisi</small>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar" role="progressbar" style="width: 14%; height: 5px;"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="fs-6">Terkumpul</div>
                                            <div class="fs-6">Sisa Hari</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="fs-6">Rp. 100.0000</div>
                                            <div class="fs-6">32 Hari</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card me-auto bg-white" style="width: 25rem">
                                <a class="text-decoration-none text-reset" href="#">
                                    <img src="/img/dumy-program.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-left">PAKET NUTRISI</h5>
                                        <small class="card-text text-left">Gerakan Infaq Nutrisi</small>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar" role="progressbar" style="width: 14%; height: 5px;"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div class="text-xs">Terkumpul</div>
                                            <div class="text-xs">Sisa Hari</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="text-xs">Rp. 100.0000</div>
                                            <div class="text-xs">32 Hari</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- End Program Sliders --}}

        {{-- Start Tokoh Pendukung --}}
        <section class="tokoh-pendukung">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="sec-heading text-uppercase text-center py-3">
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
                                    <div class="img-area"><img alt="" class="img-thumbnail "
                                            src="img/dumy-photoProfile.png"></div>
                                    <div class="info-area">
                                        <h4>Photo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#"><i class="fa-solid fa-play"></i>Lihat video selengkapnya</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-thumbnail "
                                            src="img/dumy-photoProfile.png"></div>
                                    <div class="info-area">
                                        <h4>Photo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#"><i class="fa-solid fa-play"></i>Lihat video selengkapnya</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-thumbnail "
                                            src="img/dumy-photoProfile.png"></div>
                                    <div class="info-area">
                                        <h4>Photo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#"><i class="fa-solid fa-play"></i>Lihat video selengkapnya</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-thumbnail "
                                            src="img/dumy-photoProfile.png"></div>
                                    <div class="info-area">
                                        <h4>Photo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#"><i class="fa-solid fa-play"></i>Lihat video selengkapnya</a>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-thumbnail "
                                            src="img/dumy-photoProfile.png"></div>
                                    <div class="info-area">
                                        <h4>Photo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#"><i class="fa-solid fa-play"></i>Lihat video selengkapnya</a>
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
                        <div class="sec-heading text-uppercase py-3 text-center">
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
                                    <div class="img-area"><img alt="" class="img-thumbnail "
                                            src="img/dumy-photoProfile.png"></div>
                                    <div class="info-area">
                                        <h4>Photo</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                            href="#">Selengkapnya..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Penerima Manfaat --}}

        {{-- WhatsApp Button --}}
        <a href="https://wa.me/6281283125735?text=Assalamu%27alaikum%20Warahmatullahi%20Wabarakatuh.."
            class="btn-whatsApp" target="_blank">
            <i class="fa fa-whatsapp my-2"></i>
        </a>
        {{-- End WhatsApp Button --}}

        @include('partials.footer') {{-- Footer --}}
    </section>

    {{-- end main Content --}}
@endsection
