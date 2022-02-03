@extends('layouts.main')

@section('berdonasi')

<section class="page-berdonasi d-flex justify-content-center">
    
    <div class="card p-4" style="width: 25em;">
        
        <header class="form-header mb-3"> 
            <p>Anda akan berdonasi untuk :</p>
            <h3 class="card-titel">Gerakan Infaq Nutrisi</h3>
            <hr style="margin-top: 6px; background: #9141CC">
        </header>

        <div class="container mb-3">
            <div class="row">
              <div class="col col-sm-6"><a type="button" class="btn btn-nominal" href="#">Rp. 50.000</a></div>
              <div class="col col-sm-6"><a class="btn btn-nominal" href="#">Rp. 50.000</a></div>
              <div class="w-100 mt-3"></div>
              <div class="col col-sm-6"><a class="btn btn-nominal" href="#">Rp. 50.000</a></div>
              <div class="col col-sm-6"><a class="btn btn-nominal" href="#">Rp. 50.000</a></div>
            </div>
          </div>

          <div class="input-donasi">
            <label for="exampleFormControlInput1" class="form-label">Masukan Nominal Lainnya</label>
        
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Rp.</span>
                    <input type="text" class="form-control" placeholder="0" aria-label="Username" aria-describedby="addon-wrapping" id="tanpa-rupiah">
                </div>    

            <p>Min. donasi sebesar Rp 10.000</p> 
        </div>

        <div class="d-grid">
            <button class="btn btn-lanjut-donate" type="button">Lanjut berdonasi</button>
        </div>
    </div>

</section>
@endsection