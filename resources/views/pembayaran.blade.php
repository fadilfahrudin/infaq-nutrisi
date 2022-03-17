@extends('layouts.payment')
@section('title')
    Pembayaran
@endsection
@section('pembayaran')
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
                                <input type="hidden" value="{{ '300000' }}" id="jmlTxt">
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
                                <div class="imgChannel">
                                    <img src="img/bsi-logo.svg" alt="">
                                </div>
                                <div class="nominalDonasi">
                                    <h4 class="fw-bold" id="norek">7140782119</h4>
                                </div>
                                <div class="fw-normal text-uppercase">
                                    <a class="btn btn-copy" onclick="copyToClipboard('#norek')">salin</a>
                                </div>
                            </div>
                        </div>
                        <p class="text-center">A.n Semangat Bantu</p>
                        <hr style="background: #9141CC">

                        <div class="d-flex justify-content-between">
                            <div class="m-auto p-2"><a type="button" class="btn btn-sosmed " href="#">Saya
                                    sudah
                                    transfer</a>
                            </div>
                            <div class="m-auto p-2"><a class="btn btn-sosmed" type="button" href="#">Donatur Program</a>
                            </div>
                        </div>

                </div>

                <div class="form-payment py-3">
                    <p class="text-center">Bantu Gerakan infaq Nutrisi
                        mencapai targetnya</p>
                    <div class="d-grid my-3 gap-2">
                        <a class="btn btn-facebook" href="#"><i class="fa-brands fa-facebook"></i> Bagikan Via Facebook</a>
                        <a class="btn btn-whatsapp" href="#"><i class="fa-brands fa-whatsapp"></i> Bagikan Via WhatsApp</a>
                    </div>
                </div>

                <button type="submit" class="btn btn-sosmed mt-3">Lihat Program Lainnya</button>

            </div>
        </div>

    </section>
@endsection
