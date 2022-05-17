@extends('layouts.main')

@section('title', 'Infaq Nutrisi')
@section('content')
    <section class="main mt-5">
        {{-- Header --}}
        <div class="container">
            <header class="header d-flex py-4">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <img src="img/logo-name.png" class="w-100" alt="">
                        <h3 class="text-center mb-5">Semua bisa bergerak, Semua bisa <br> berinfaq, Semua mampu bantu sesama
                        </h3>
                        <a href="/program" class="btn btn-donasi d-grid col-6 mx-auto">Donasi Sekarang</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="img/hero.png" class="hero w-100" alt="Gerakan Infaq nutrisi">
                    </div>

                </div>
            </header>
        </div>
        {{-- End Header --}}

        <section class="main-body" id="laporan">
            {{-- Laporan --}}
            <div class="container">
                <div class="sec-heading text-center mt-5">
                    <h3>laporan</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report text-decoration-none">
                            <div class="text-black-50">Donasi Terhimpun</div>
                            <div class="d-flex">
                                <span class="text-black-50">Rp.</span>
                                <div class="fs-4 text-body fw-bold">{{ number_format($collected, 0, ',', '.') }}</div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <img src="img/ic-donation-collage.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report text-decoration-none">
                            <div class="text-black-50">Donasi Tersalurkan</div>
                            <div class="d-flex">
                                <span class="text-black-50">Rp.</span>
                                <div class="fs-4 text-body fw-bold">{{ number_format($disalurkan, 0, '.', '.') }}
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <img src="img/ic-donation-distributed.svg" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report text-decoration-none">
                            <div class="text-black-50">Paket Tersalurkan</div>
                            <div class="fs-4 text-body fw-bold">1.000.000</div>
                            <div class="d-flex justify-content-end">
                                <div><img src="img/ic-package-distributed.svg" alt=""></div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col mb-3">
                        <a href="#" class="btn-report text-decoration-none">
                            <div class="text-black-50">Penerima Mafaat</div>
                            <div class="fs-4 text-body fw-bold">1.000.000</div>
                            <div class="d-flex justify-content-end">
                                <div><img src="img/ic-recipients.svg" alt=""></div>
                            </div>
                        </a>
                    </div>

                </div>
                <img class="position-absolute top-0 start-0" style="z-index: 1" src=" img/vektor-2.svg" alt="">
            </div>
            {{-- End Laporan --}}

            {{-- About --}}
            <div class="container col-10 text-center">
                <div class="sec-heading mt-5">
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

                <a href="/program" class="btn btn-donasi d-grid col col-md-4 mt-5 mx-auto">Donasi Sekarang</a>

            </div>
            {{-- End About --}}

            {{-- Start Programs Slider --}}
            <div class="container mt-5 ">
                <div class="sec-heading text-center mt-5">
                    <h3>Program Pilihan</h3>
                </div>
                <div class="row gap-3">
                    <div class="slides d-flex gap-5">
                        @foreach ($programs as $program)
                            {{-- @if (!empty($c->placment) && strpos($c->placment, 'pilihan') !== false) --}}
                            @php
                                $sisa_hari = '&infin;';
                                if (!empty($program->expired_date)) {
                                    $now = time();
                                    $exp_date = strtotime($program->expired_date);
                                    $datediff = $exp_date - $now;
                                    $selisih = round($datediff / (60 * 60 * 24));
                                    $sisa_hari = $selisih . ' hari';
                                }
                                $newlink = !empty($program->seo_link) ? $program->seo_link : '/p' . $program->link;
                                $terkumpul = !empty($program->additional_collected) ? $program->collected + $program->additional_collected : $program->collected;
                                $persen_terkumpul = !empty($program->target_amount) && $program->target_amount > 0 ? ($terkumpul / $program->target_amount) * 100 : 0;
                                $persen_terkumpul = round($persen_terkumpul, 2);
                            @endphp
                            <div class="col">
                                <div class="card ms-auto  bg-white" style="width: 25rem;">
                                    <a href="{{ url($newlink) }}" class="text-decoration-none text-reset">
                                        <img src="{{ $program->photo }}" class="card-img-top" alt="...">
                                        <div class="card-body overflow-hidden">
                                            <h5 class="card-title text-left text-uppercase text-nowrap">
                                                {{ substr($program->name, 0, 30) }}...</h5>
                                            <small class="card-text text-left">Gerakan Infaq Nutrisi</small>
                                            <div class="progress" style="height: 5px">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: {{ $persen_terkumpul }}%; height: 5px;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="fs-6">Terkumpul</div>
                                                <div class="fs-6">Sisa Hari</div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="fs-6">
                                                    Rp.{{ number_format($program->collected, 0, '.', '.') }}</div>
                                                <div class="fs-6">{!! $sisa_hari !!}</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            {{-- @endif --}}
                        @endforeach
                    </div>
                </div>
                {{-- End Program Sliders --}}

                {{-- Start Tokoh Pendukung --}}
                <div class="container my-5">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="sec-heading text-center mt-5">
                                <h3>Tokoh Pendukung</h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.
                                                </p><a href="#"><i class="fa-solid fa-play"></i>Lihat video selengkapnya</a>
                                            </div>
                                        </div>
                                        <div class="single-box text-center">
                                            <div class="img-area"><img alt="" class="img-thumbnail "
                                                    src="img/dumy-photoProfile.png"></div>
                                            <div class="info-area">
                                                <h4>Photo</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.
                                                </p><a href="#"><i class="fa-solid fa-play"></i>Lihat video selengkapnya</a>
                                            </div>
                                        </div>
                                        <div class="single-box text-center">
                                            <div class="img-area"><img alt="" class="img-thumbnail "
                                                    src="img/dumy-photoProfile.png"></div>
                                            <div class="info-area">
                                                <h4>Photo</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.
                                                </p><a href="#"><i class="fa-solid fa-play"></i>Lihat video selengkapnya</a>
                                            </div>
                                        </div>
                                        <div class="single-box text-center">
                                            <div class="img-area"><img alt="" class="img-thumbnail "
                                                    src="img/dumy-photoProfile.png"></div>
                                            <div class="info-area">
                                                <h4>Photo</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.
                                                </p><a href="#"><i class="fa-solid fa-play"></i>Lihat video selengkapnya</a>
                                            </div>
                                        </div>
                                        <div class="single-box text-center">
                                            <div class="img-area"><img alt="" class="img-thumbnail "
                                                    src="img/dumy-photoProfile.png"></div>
                                            <div class="info-area">
                                                <h4>Photo</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.
                                                </p><a href="#"><i class="fa-solid fa-play"></i>Lihat video selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Tokoh Pendukung --}}

                {{-- Start Penerima Manfaat --}}
                <div class="container my-5">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="sec-heading mt-5 text-center">
                                <h3>Penerima Manfaat</h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.
                                                </p><a href="#">Selengkapnya..</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Penerima Manfaat --}}
        </section>
        {{-- End Main Body --}}

        {{-- WhatsApp Button --}}
        <a href="https://wa.me/6281283125735?text=Assalamu%27alaikum%20Warahmatullahi%20Wabarakatuh.."
            class="btn-whatsApp p-2" target="_blank">
            <i class="fa fa-whatsapp"></i>
        </a>
        {{-- End WhatsApp Button --}}

    </section>
    {{-- end main Content --}}
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.team-slider').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 450,
            margin: 20,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                991: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });
    </script>
@endsection
