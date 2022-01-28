@extends('layouts.main')

@section('content')
<section class="main">
{{-- Header Hero --}}
    <header class="hero">
            <div class="text-heading" >
                <img src="img/name-Landscape.png"  width="500px" alt="Gerakan Infaq Nutrisi">
                <p class=" text-p">Semua bisa bergerak, Semua bisa <br> berinfaq, Semua mampu bantu sesama</p>
                <a href="/berdonasi" target="_blank"><button class="btn-donation">Donasi Sekarang</button></a>
            </div>

             <div class="ill-hero" >
                   <img src="img/hero.png" alt="Gerakan Infaq nutrisi">
            </div>
    </header>

    {{-- End --}}

    <section class="vektor-il">
        <img src="img/Vector-1.png" alt="">
    </section>

    {{-- Main Content --}}
    <section class="main-content">


        <div class="report">
            <div class="item-report">
                <p class="title-donate">Donasi Terhimpun</p>
                <p class="text-rp">Rp.</p>
                <h4 class="nominal">100.000.000</h4>
                <img class="ic-report" src="img/ic-donation-collage.svg" alt="">
            </div>
            <div class="item-report">
                <p class="title-donate">Donasi Terhimpun</p>
                <p class="text-rp">Rp.</p>
                <h4 class="nominal">189.000.000</h4>
                <img class="ic-report" src="img/ic-donation-collage.svg" alt="">
            </div>
              <div class="item-report">
                <p class="title-donate">Donasi Terhimpun</p>
                <p class="text-rp">Rp.</p>
                <h4 class="nominal">189.000.000</h4>
                <img class="ic-report" src="img/ic-donation-collage.svg" alt="">
            </div>
              <div class="item-report">
                <p class="title-donate">Donasi Terhimpun</p>
                <p class="text-rp">Rp.</p>
                <h4 class="nominal">189.000.000</h4>
                <img class="ic-report" src="img/ic-donation-collage.svg" alt="">
            </div>
        </div>
        

    </section>

    

@endsection