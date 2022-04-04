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
                            <img src="img/dumy-program.png" alt="...">
                        </div>

                        <div class="gallery">
                            <img src="img/dumy-program.png" alt="...">
                        </div>

                        <div class="gallery">
                            <img src="img/dumy-program.png" alt="...">
                        </div>
                        <div class="gallery">
                            <img src="img/dumy-program.png" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.team-slider').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 450,
            margin: 20,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                991: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });
    </script>
@endsection
