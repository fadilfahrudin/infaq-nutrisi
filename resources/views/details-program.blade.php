@extends('layouts.main')
@section('title')
    Nama program
@endsection

@section('content')
    <section class="page-programs">
        <div class="container p-4">

            {{-- Header donasi --}}
            <div class="row">
                <div class="col-md-7">
                    <img src="img/dumy-program.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md mb-3">
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
            <div class="col-md-7 mb-3">
                <div class="row">
                    <nav>
                        <ul class="nav nav-tabs" id="detail-deskripsi" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab"
                                    data-bs-target="#deskripsi" type="button" aria-selected="true">Deskripsi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="fundriser-tab" data-bs-toggle="tab"
                                    data-bs-target="#fundriser" type="button" aria-selected="false">Fundriser</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="berita-tab" data-bs-toggle="tab" data-bs-target="#berita"
                                    type="button" aria-selected="false">Berita</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="donatur-tab" data-bs-toggle="tab"
                                    data-bs-target="#donatur" type="button" aria-selected="false">Donatur</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="detail-deskripsi">
                            <div class="tab-pane fade show active" id="deskripsi" role="tabpanel"
                                aria-labelledby="deskripsi-tab">
                                <div class="deskripsi-program p-3">
                                    <p class="text-title">Assalamu'alaikum Wr.wb</p>
                                    <p>Makan merupakan kebutuhan pokok kita sebagi manusia. Bukan sekedar menghapus rasa
                                        lapar tapi tentu perlu diperhatikan asupan nutrisi guna penuhi kebutuhan gizi untuk
                                        tubuh. Kesehatan yang pastinya akan berpengaruh dalam melakukan aktivitas termasuk
                                        agar bisa beribadah dengan maksimal juga.</p>

                                    <p> Gerakan Infaq Nutrisi mengajak untuk bersama-sama kita satukan kepedulian bantu
                                        saudara yang sedang kesulitan dalam penuhi kebutuhan nutrisi mereka. Kita bantu
                                        adik-adik yatim, lansia, pejuang nafkah, dan dhuafa dengan berbagi paket nutrisi
                                        senilai Rp. 200.000,-/paket. Dan ada juga box nutrisi untuk support para santri
                                        penghafal Al Qur’an yang disalurkan senilai Rp. 1.500.000,-/box.</p>
                                    </p>
                                    <p class="text-center"> <img src="img/dumy-program2.png" width="500" alt="program">
                                </div>
                                <div class="my-3 d-flex">
                                    <button class="btn btn-donasi col mx-auto">Donasi Sekarang</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="fundriser" role="tabpanel" aria-labelledby="fundriser-tab">
                                <div class="deskripsi-program p-5">
                                    Fundriser Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore ducimus,
                                    culpa, sed
                                    animi, ipsam autem ipsa laborum rem voluptate ea commodi ut nihil necessitatibus aperiam
                                    modi? Blanditiis molestias laudantium libero!
                                </div>
                            </div>
                            <div class="tab-pane fade" id="berita" role="tabpanel" aria-labelledby="berita-tab">
                                Hello World berita
                            </div>
                            <div class="tab-pane fade" id="donatur" role="tabpanel" aria-labelledby="donatur-tab">
                                Hello World Donatur
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            {{-- End Deskripsi Program --}}

        </div>
    </section>
@endsection
