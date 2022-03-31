@extends('layouts.main')

@section('title')
    Dokumentasi
@endsection

@section('content')
    <section class="page-dokumentasi">
        <div class="container p-4">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center text-uppercase">
                        <h3>Dokumentasi</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-slider owl-carousel ">
                        <div class="gallery">
                            <img src="/img/dumy-program.png" alt="...">
                        </div>

                        <div class="gallery">
                            <img src="/img/dumy-program.png" alt="...">
                        </div>

                        <div class="gallery">
                            <img src="/img/dumy-program.png" alt="...">
                        </div>
                        <div class="gallery">
                            <img src="/img/dumy-program.png" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
