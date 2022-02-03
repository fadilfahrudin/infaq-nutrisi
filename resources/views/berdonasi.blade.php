@extends('layouts.main')

@section('berdonasi')

<section class="page-berdonasi d-flex justify-content-center">
    
    <div class="card m-4 p-4 row" style="width: 25rem;">
        
        <header class="form-header mb-3"> 
            <p>Anda akan berdonasi untuk :</p>
            <h3 class="card-titel">Gerakan Infaq Nutrisi</h3>
            <hr style="margin-top: 6px; background: #9141CC">
        </header>

        <div class="container mb-3">
            <div class="row">
              <div class="col-sm-6 mb-3"><a type="button" class="btn btn-nominal" href="#">Rp. 50.000</a></div>
              <div class="col-sm-6 mb-3"><a type="button" class="btn btn-nominal" href="#">Rp. 50.000</a></div>
              <div class="col-sm-6 mb-3"><a type="button" class="btn btn-nominal" href="#">Rp. 50.000</a></div>
              <div class="col-sm-6 mb-3"><a type="button" class="btn btn-nominal" href="#">Rp. 50.000</a></div>
            </div>
          </div>

          <div class="input-donasi">
            <label for="exampleFormControlInput1" class="form-label">Masukan Nominal Lainnya</label>
        
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Rp.</span>
                    <input type="text" class="form-control" placeholder="0" aria-label="Username" aria-describedby="addon-wrapping" id="tanpa-rupiah">
                </div>    

            <p>Min. donasi sebesar Rp 10.000</p> 
            <div class="row d-flex">
                <hr style="margin-top: 6px; background: #9141CC">
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                    <option selected>Pilih Metode Pembayaran</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                <hr style="margin-top: 6px; background: #9141CC">
            </div>
        </div>

        <span style="text-align: center" class="mb-3"><a href="#">Login</a> atau lengkapi data berikut</span>

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
        
        <div class="form-check form-switch d-flex justify-content-center align-items-center mb-3 gap-2">
            <input class="form-check-input py-2" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
            <label for="" class="label-disable">Sembunyikan nama saya (Anonim)</label>
        </div>

        <div class="d-grid">
            <button class="btn btn-lanjut-donate" type="button">Donasi Sekarang</button>
        </div>
        
    </div>

</section>
@endsection