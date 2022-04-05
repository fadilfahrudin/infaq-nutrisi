@extends('layouts.payment')
@section('title')
    Nama Program
@endsection

@section('content')
    <section class="page-programs bg-light">
        <div class="container">

            {{-- Header donasi --}}
            <div class="card bg-white p-3">
                <div class="row">
                    <div class="col-lg-7">
                        <img src="img/dumy-program.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-lg mb-3">
                        <div class="card-body bg-white">
                            <h1 class="card-title">Paket Box Nutrisi Bantu Rakyat</h1>
                            <h4 class="text-black-50 mb-3">100.000 paket sembako bantu rakyat</h4>

                            <div class="d-flex gap-2 mb-2">
                                <img class="avatar" src="/img/campigner-avatar.svg" alt="">
                                <div class="row mt-2">
                                    <h5 class="text-title mb-0">Gerakan Infaq Nutrisi</h5>
                                    <p class="text-mute">Terverifikasi</p>
                                </div>
                            </div>

                            <div class="progress mb-2" style="height: 5px">
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
                            <div class="py-3">
                                <a href="/berdonasi" class="btn btn-donasi d-grid col mx-auto">Donasi Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Header Donasi --}}

                {{-- Deskripsi Program --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-deskripsi-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-deskripsi" type="button" role="tab"
                                        aria-controls="nav-deskripsi" aria-selected="true">Deskripsi</button>
                                    <button class="nav-link " id="nav-fundriser-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-fundriser" type="button" role="tab"
                                        aria-controls="nav-fundriser" aria-selected="false">Fundriser</button>
                                    <button class="nav-link " id="nav-berita-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-berita" type="button" role="tab" aria-controls="nav-berita"
                                        aria-selected="false">Berita</button>
                                    <button class="nav-link " id="nav-donatur-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-donatur" type="button" role="tab" aria-controls="nav-donatur"
                                        aria-selected="false">Donatur</button>
                                </div>
                            </nav>

                            <div class="tab-content border overflow-hidden" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-deskripsi" role="tabpanel"
                                    aria-labelledby="nav-deskripsi-tab">
                                    <div class="p-3">
                                        <h5 class="fw-bold">Assalamu'alaikum Wr.wb</h5>
                                        <p>Makan merupakan kebutuhan pokok kita sebagi manusia. Bukan sekedar menghapus rasa
                                            lapar tapi tentu perlu diperhatikan asupan nutrisi guna penuhi kebutuhan gizi
                                            untuk
                                            tubuh. Kesehatan yang pastinya akan berpengaruh dalam melakukan aktivitas
                                            termasuk
                                            agar bisa beribadah dengan maksimal juga.</p>

                                        <p> Gerakan Infaq Nutrisi mengajak untuk bersama-sama kita satukan kepedulian bantu
                                            saudara yang sedang kesulitan dalam penuhi kebutuhan nutrisi mereka. Kita bantu
                                            adik-adik yatim, lansia, pejuang nafkah, dan dhuafa dengan berbagi paket nutrisi
                                            senilai Rp. 200.000,-/paket. Dan ada juga box nutrisi untuk support para santri
                                            penghafal Al Qur'an yang disalurkan senilai Rp. 1.500.000,-/box.</p>
                                        </p>
                                        <p class="text-center"> <img src="img/dumy-program2.png"
                                                class="img-fluid rounded-start" alt="program">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-fundriser" role="tabpanel"
                                    aria-labelledby="nav-fundriser-tab">
                                    <div class="p-3">
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <img class="avatar" src="/img/dumy-user.svg" alt="">
                                            <div class="row d-flex mt-2">
                                                <h5>Fadil <small class="fw-normal">Telah berhasil mengajak 1 orang
                                                        berdonasi sebesar</small>
                                                </h5>
                                                <span class="nominal-color">Rp.10.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-berita" role="tabpanel"
                                    aria-labelledby="nav-berita-tab">
                                    <div id="progress-report">
                                        <div class="py-3">
                                            <div class="report-item ">
                                                <div class="report-icon report-date">
                                                    <p class="text-mute">5 April 2022</p>
                                                </div>
                                                <div class="report-title text-wrap">
                                                    <h5>Penyaluran Dana Tahap II Program Semangat Bantu Nutrisi</h5>
                                                    <a href="/landing-berita">Selengkapnya <i
                                                            class="fa-solid fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-donatur" role="tabpanel"
                                    aria-labelledby="nav-donatur-tab">
                                    <div class="p-3">
                                        Donatur
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Deskripsi Program --}}
            </div>
            <div class="my-3 d-flex">
                <a href="/berdonasi" class="btn btn-donasi col-lg-4 mx-auto">Donasi Sekarang</a>
            </div>
        </div>
    </section>
@endsection
