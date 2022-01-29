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

        {{-- Report --}}
        <div class="report">

            <a href="#" class="item-report">
                <div class="item1">Donasi Terhimpun</div>
                <div class="item2">Rp.</div>
                <div class="item3">100.000.000</div>  
                <div class="item4"><img src="img/ic-donation-collage.svg" alt=""></div>
             </a>

            <a href="#" class="item-report">
                <div class="item1">Donasi Tersalurkan</div>
                <div class="item2">Rp.</div>
                <div class="item3">100.000.000</div>  
                <div class="item4"><img src="img/ic-donation-distributed.svg" alt=""></div>
            </a>

            <a href="#" class="item-report">
                <div class="item1">Paket Tersalurkan</div>
                <div class="item2">Rp.</div>
                <div class="item3">100.000.000</div>  
                <div class="item4"><img src="img/ic-package-distributed.svg" alt=""></div>
            </a>

            <a href="#" class="item-report">
                <div class="item1">Penerima Manfaat</div>
                <div class="item2">Rp.</div>
                <div class="item3">20.000</div>  
                <div class="item4"><img src="img/ic-recipients.svg" alt=""></div>
            </a>
        </div>
        {{-- end Report --}}
        

    </section>

    {{-- end main Content --}}

    

@endsection