@extends('layouts.payment')
@section('title')
    Judul Berita
@endsection

@section('content')
    <div class="container">
        <div class="landing-berita" id="berita">
            <div class="row">
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-body bg-white">

                            <h1 class="card-title">Paket Box Nutrisi Bantu Rakyat</h1>

                            <div class="d-flex gap-2 mb-2">
                                <div class="d-flex gap-1">
                                    <p>Pengelola :</p>
                                    <h5 class="text-title mb-0">Gerakan Infaq Nutrisi</h5>
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

                            <hr>
                            <div>
                                <h5 class="text-title">Penyaluran Dana Tahap III Program Semangat Bantu Nutrisi</h5>
                                <p>
                                    Assalamualaikum.wr.wb
                                    <br><br>
                                    #Kawanbantu alhamdulillah distribusi dana bantuan untuk program Semangat Bantu Nutrisi
                                    “Kirimkan Paket Nutrisi Kepada Para Santri, Yatim, dan Dhuafa di Seluruh Indonesia”
                                    sudah disalurkan oleh tim Semangatbantu & Pemuda Semangat Bantu Bangsa (PSBB) di
                                    Pesantren Makanul Huffadz pada tanggal 27 Agustus 2021.
                                </p>

                                <p>
                                    Adapun paket nutrisi yang tim berikan terdiri dari madu, susu, sayur-sayuran, buah
                                    segar, lauk pauk dan kebutuhan dapur lain nya, semoga bantuan paket nutrisi tersebut
                                    bisa memenuhi kebutuhan gizi sehari-hari untuk para santri dan juga asaatidz.</p>

                                <p class="text-center"><img src="img/dumy-program.png" class="img-fluid rounded-start"
                                        alt=""></p>

                                <p>
                                    Turut hadir juga Ustadzah Oki Setiana Dewi selaku pimpinan Pesantren. Alhamdulillah tim
                                    mendapat apresiasi baik dan do’a, serta semangat agar bisa terus bergerak menyalurkan
                                    Nutrisi kepada santri-santri yang berada di Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
