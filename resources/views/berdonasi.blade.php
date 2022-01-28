@extends('layouts.main')

@section('berdonasi')

<section class="page-berdonasi">

    <section class="form-nominal">

        <header class="form-header">
            <p>Anda akan berdonasi untuk :</p>
            <h3>Gerakan Infaq Nutrisi</h3>
            <hr style="margin-top: 6px; background: #9141CC">
        </header>


        <div class="row">
            <div class="col pilihan-donasi">
                <a href="#">Rp. 50.000</a>
            </div>
            <div class="col pilihan-donasi">
                <a href="#">Rp. 50.000</a>
            </div>
        </div>
        <div class="row">
            <div class="col pilihan-donasi">
                <a href="#">Rp. 50.000</a>
            </div>
            <div class="col pilihan-donasi">
                <a href="#">Rp. 50.000</a>
            </div>
        </div>

        <div class="input-donasi">
            <label for="exampleFormControlInput1" class="form-label">Masukan Nominal Lainnya</label>
        
            <div class="input-group input">
                <span class="input-group-text">Rp.</span>
                <input type="text" placeholder="0" id="tanpa-rupiah" >
            </div>    
            <p>Min. donasi sebesar Rp 10.000</p> 
        </div>

        <a href="#"><button class="btn-lanjut-donate">Lanjut berdonasi</button></a>

    </section>

</section>
@endsection