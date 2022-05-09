@extends('layouts.payment')
@section('title')
    {{ $program->name }}
@endsection

@section('content')
    <section class="page-programs bg-light">
        <div class="container">

            {{-- Header donasi --}}
            <div class="card bg-light p-3">
                <div class="row">
                    <div class="col-lg-7">
                        <img src="{{ $program->photo }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-lg mb-3">
                        <div class="card p-3">
                            <h3 class="card-title">{{ $program->name }}</h3>
                            <h5 class="text-black-50 mb-3">{{ $program->pitch }}</h5>

                            <div class="d-flex gap-2 mb-2">
                                <img class="avatar" src="/img/campigner-avatar.svg" alt="">
                                <div class="row mt-2">
                                    <h5 class="text-title mb-0">Gerakan Infaq Nutrisi</h5>
                                    <p class="text-mute">Terverifikasi</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="fs-6">Terkumpul</div>
                            </div>
                            <div class="row">
                                <div class="d-flex gap-1">
                                    <h5 class="nominal-color">Rp. {{ number_format($program->collected, 0, '.', '.') }}
                                    </h5>
                                    <p class="fs-6">dari Rp.
                                        {{ number_format($program->target_amount, 0, '.', '.') }}
                                    </p>
                                </div>
                            </div>

                            <div class="progress mb-2" style="height: 5px">
                                <div class="progress-bar" role="progressbar"
                                    style="width:{{ $persen_terkumpul }}%; height: 5px;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="fs-6">Donatur</div>
                                <div class="fs-6">Sisa Hari</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="fs-6">{{ $penyumbang }}</div>
                                <div class="fs-6">{!! $sisa_hari !!}</div>
                            </div>
                            <div class="py-3">
                                <a href="/berdonasi" class="btn btn-donasi d-grid col mx-auto">Donasi Sekarang</a>
                            </div>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#share"
                                class="btn btn-sosmed">Bagiakan <i class="fa-solid fa-share-nodes"></i></button>
                            <div class="modal fade" id="share" tabindex="-4" aria-labelledby="share" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Bagiakan tautan ke sosial media kamu..</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="d-flex justify-content-center gap-5 m-3">
                                                <a class="text-decoration-none text-muted text-center d-block"
                                                    href="https://api.whatsapp.com/send?text=saya mengajak anda untuk berdonasi di program {{ url()->current() }}"
                                                    target="_blank"><img src="img/whatsapp.svg" width="50px" alt="">
                                                    <small class="d-block fw-bold">WhatsApp</small></a>
                                                <a class="text-decoration-none text-muted text-center d-block"
                                                    href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                                    target="_blank"><img src="img/facebook.svg" width="50px" alt="">
                                                    <small class="d-block fw-bold">Facebook</small></a>
                                                <a class="text-decoration-none text-muted text-center d-block"
                                                    href="https://t.me/share/url?url={{ url()->current() }}&text={{ $program->name }}"
                                                    target="_blank"><img src="img/telegram.svg" width="50px" alt="">
                                                    <small class="d-block fw-bold">Telegram</small></a>

                                            </ul>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" value="{{ url()->current() }}"
                                                    id="copyText">
                                                <button class="btn btn-outline-secondary" id="copyBtn">salin</button>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary col mx-auto"
                                                data-bs-dismiss="modal">Kembali</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Header Donasi --}}

            {{-- Deskripsi Program --}}
            <div class="row">
                <div class="col col-lg-7">
                    <div class="card">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-deskripsi-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-deskripsi" type="button" role="tab" aria-controls="nav-deskripsi"
                                    aria-selected="true">Deskripsi</button>
                                <button class="nav-link " id="nav-fundriser-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-fundriser" type="button" role="tab" aria-controls="nav-fundriser"
                                    aria-selected="false">Fundriser</button>
                                <button class="nav-link " id="nav-berita-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-berita" type="button" role="tab" aria-controls="nav-berita"
                                    aria-selected="false">Berita</button>
                                <button class="nav-link donatur" id="nav-donatur-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-donatur" type="button" role="tab" aria-controls="nav-donatur"
                                    aria-selected="false">Donatur</button>
                            </div>
                        </nav>

                        <div class="tab-content border overflow-hidden" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-deskripsi" role="tabpanel"
                                aria-labelledby="nav-deskripsi-tab">
                                <div class="p-3 ">
                                    {!! $program->description !!}
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
                            <div class="tab-pane fade" id="nav-berita" role="tabpanel" aria-labelledby="nav-berita-tab">
                                <div id="progress-report">
                                    <div class="py-3">
                                        <div class="report-item ">
                                            <div class="report-icon report-date">
                                                <p class="text-mute">5 April 2022</p>
                                            </div>
                                            <div class="report-title text-wrap">
                                                <h5>Penyaluran Dana Tahap III Program Semangat Bantu Nutrisi</h5>
                                                <a href="/landing-berita">Selengkapnya <i
                                                        class="fa-solid fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-3 fade" id="nav-donatur" role="tabpanel"
                                aria-labelledby="nav-donatur-tab">
                                <div class="donatur">
                                    <div class="d-flex gap-3">
                                        <img class="avatar" src="/img/dumy-user.svg" alt="">
                                        <div class="row">
                                            <h5>Fadil Fahrudin</h5>
                                            <h5 class="nominal-color float-end">Rp.10.000.000</h5>
                                            <p class="text-muted">"Bismillah. semoga berkah Lorem ipsum dolor
                                                sit
                                                amet consectetur adipisicing elit. Accusantium, aspernatur. "</p>
                                            <span class="text-muted">11 April 2022</span>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card p-3">
                        <div class="donatur-side">
                            <h5>Donatur</h5>
                            <hr>
                            <div class="d-flex gap-3">
                                <img class="avatar" src="/img/dumy-user.svg" alt="">
                                <div class="row">
                                    <h5>Fadil Fahrudin</h5>
                                    <h5 class="nominal-color float-end">Rp.10.000.000</h5>
                                    <p class="text-muted">"Bismillah. semoga berkah Lorem ipsum dolor
                                        sit
                                        amet consectetur adipisicing elit. Accusantium, aspernatur. "</p>
                                    <span class="text-muted">11 April 2022</span>
                                </div>
                            </div>
                            <hr>
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
@push('bodyscript')
    <script>
        const copyBtn = document.getElementById("copyBtn");
        const copyText = document.getElementById("copyText");

        copyBtn.onclick = () => {
            copyText.select();
            document.execCommand('copy');
            // alert("Link berhasil disalin")
            Swal.fire({
                icon: 'success',
                title: 'Link berhasil disalin',
                timer: 1000
            });
        }
    </script>
@endpush
