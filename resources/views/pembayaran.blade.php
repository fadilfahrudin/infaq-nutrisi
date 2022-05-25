@extends('layouts.payment')
@section('title')
    Pembayaran
@endsection
@section('content')
    <section class="page-pembayaran">

        <div class="container mx-auto p-4">
            <div class="card p-4 row">

                <header class="form-payment px-0 pt-3 mb-3">
                    <p class="mx-3 my-0">Anda akan berdonasi untuk :</p>
                    <h3 class="card-titel mx-3">Gerakan Infaq Nutrisi</h3>
                    <hr class="m-0" size="8" style="background: #9141CC">
                </header>

                <div class="form-payment py-3 mb-3">
                    <p class="text-center">Total Pembayaran Donasi</p>
                    <div class="p-2 border-form-payment rounded mx-4">
                        <div class="d-flex justify-content-between px-4">
                            <div class="nominalDonasi">
                                <input type="hidden" value="{{ '300000' }}" id="jmlNominal">
                                <h4 class="fw-bold">Rp. {{ number_format('300000') }}</h4>
                            </div>
                            <div class="fw-normal text-uppercase">
                                <a class="btn btn-copy" onclick="copyAmount()">salin</a>
                            </div>
                        </div>
                    </div>

                    <div class="border-form-payment rounded p-2 my-2 mx-5">
                        <p class="text-danger text-center">PENTING!</p>
                        <p class="text-center">Mohon tepat transfer sampai
                            3 anggka terakhir agar donasi anda dapat
                            diproses secara otomatis.</p>
                    </div>

                    <p class="text-center my-2">Nomer Pembayaran <br>INV-1ZQ345678</p>
                    <p class="text-center mb-2"> <i>Menunggu pembayaran...</i> </p>

                    <div class="load-payment d-flex justify-content-center my-2">
                        <img src="img/load-payment.svg" alt="loading">
                    </div>

                    <p class="text-center px-5 mx-5">Selesaikan pembayaran donasi sebelum
                        <mark>20-02-2022</mark>pukul <mark>09:60:00 WIB</mark>
                    </p>

                    <h4 class="text-center mt-5">Bank Syariah Indonesia</h3>
                        <hr class="mt-3" style="background: #9141CC">
                        <div class="border-form-payment rounded mx-4 p-2">
                            <div class="d-flex justify-content-between px-4">
                                <img class="imgChannel" src="img/bsi-logo.svg" alt="">
                                <h4 class="fw-bold nominalDonasi">7140782119</h4>
                                <input type="hidden" value="7140782119" id="noRek">
                                <a class="btn btn-copy fw-normal text-uppercase" onclick="copyNorek()">salin</a>
                            </div>
                        </div>
                        <p class="text-center">A.n Semangat Bantu</p>
                        <hr style="background: #9141CC">
                        <p class="text-center">Upload bukti transaksimu disini</p>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="fileTransaksi">
                            <button class="input-group-text" for="fileTransaksi">Upload</button>
                        </div>
                </div>

                <div class="form-payment py-3">
                    <p class="text-center">Bantu Gerakan infaq Nutrisi
                        mencapai targetnya</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="link program" id="copyText">
                        <button class="btn btn-sosmed btn-outline-secondary" id="copyBtn">salin</button>
                        <button class=" btn btn-sosmed btn-outline-secondary" type="button" data-bs-toggle="modal"
                            data-bs-target="#share"><i class="fa-solid fa-share-nodes"></i></button>
                    </div>
                    <div class="modal fade" id="share" tabindex="-4" aria-labelledby="share" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Bagiakan tautan ke sosial media kamu..</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="shareSosmed">
                                        <ul>
                                            <li>
                                                <a class="text-decoration-none text-muted text-center d-block" href="#"
                                                    target="_blank"><img src="img/whatsapp.svg" alt="">
                                                    <small class="fw-bold">WhatsApp</small></a>
                                            </li>
                                            <li>
                                                <a class="text-decoration-none text-muted text-center d-block" href="#"
                                                    target="_blank"><img src="img/facebook.svg" alt="">
                                                    <small class="fw-bold">Facebook</small></a>
                                            </li>
                                            <li>
                                                <a class="text-decoration-none text-muted text-center d-block" href="#"
                                                    target="_blank"><img src="img/telegram.svg" alt="">
                                                    <small class="fw-bold">Telegram</small></a>
                                            </li>
                                        </ul>
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

                <a href="/page-program" class="btn btn-sosmed mt-3">Lihat Program Lainnya</a>

            </div>
        </div>

    </section>
@endsection
@section('js')
    <script>
        // copy link Program
        const copyBtn = document.getElementById("copyBtn");
        const copyText = document.getElementById("copyText");

        copyBtn.onclick = () => {
            copyText.select();
            document.execCommand('copy');
            Swal.fire({
                icon: 'success',
                title: 'Link berhasil disalin',
                timer: 1000
            });
        }
        // copy nomer rekening
        function copyNorek() {
            var str = document.getElementById('noRek').value;
            const el = document.createElement('textarea');
            el.value = str;
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
            Swal.fire({
                icon: 'success',
                title: 'No. Rekening berhasil disalin',
                timer: 1000
            });
        }

        // copy nominal donasi
        function copyAmount() {
            var str = document.getElementById('jmlNominal').value;
            const el = document.createElement('textarea');
            el.value = str;
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
            Swal.fire({
                icon: 'success',
                title: 'Nominal berhasil disalin',
                timer: 1000
            });
        }
    </script>
@endsection
