@extends('layouts.main')
@section('title')
    Berdonasi
@endsection
@section('berdonasi')
    @include('partials.navbarPayment') {{-- Navbar --}}
    <section class="page-berdonasi">

        <div class="container mx-auto p-4">
            <div class="card p-4 row">

                <header class="form-header mb-3">
                    <p>Anda akan berdonasi untuk :</p>
                    <h3 class="card-titel">Gerakan Infaq Nutrisi</h3>
                    <hr style="margin-top: 6px; background: #9141CC">
                </header>

                <div class="mb-3">
                    <div class="row">
                        @foreach ($nominal as $i => $n)
                            <div class="col-sm-6 mb-3"><a type="button" class="btn btn-nominal" href="#">Rp
                                    {{ number_format($n->nominal, 0, ',', '.') }} </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="input-donasi">
                    <label for="exampleFormControlInput1" class="form-label">Masukan Nominal Lainnya</label>

                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Rp.</span>
                        <input type="text" class="form-control text-end" name="amount" min="20000" placeholder="0"
                            aria-label="Username" aria-describedby="addon-wrapping" id="tanpa-rupiah">
                    </div>

                    <p>Min. donasi sebesar Rp 10.000</p>
                    <div class="row px-3">
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                            <option selected>Pilih Metode Pembayaran</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <span style="text-align: center" class="mb-3"><a href="#">Login</a> atau lengkapi data
                    berikut</span>

                <div class="mb-3">
                    <input type="email" class="form-control" id="#" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="#" placeholder="No. Handphone/WA yang aktif">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="#" placeholder="Tuliskan email kamu (Optsional)">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Kirimkan Do'a</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-check form-switch d-flex mb-3 px-4">
                    <label class="form-check-label m-auto" for="flexSwitchCheckChecked">Sembunyikan nama saya
                        (Anonim)</label>
                    <input class="form-check-input m-auto" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                        checked>
                </div>

                <div class="d-grid">
                    <a href="/pembayaran" class="btn btn-donasi" type="button">Donasi Sekarang</a>
                </div>

            </div>
        </div>

    </section>
@endsection
