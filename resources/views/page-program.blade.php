@extends('layouts.payment')
@section('title')
    Program Kebaikan
@endsection

@section('content')
    <section class="page-campaign m-auto">
        <div id="carouselExampleIndicators" class="carousel carousel-banner slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/dumy-program.png" class="rounded-3 w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/dumy-program2.png" class="rounded-3 w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/dumy-program.png" class="rounded-3 w-100" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="text-center pt-3">
            <h3>Program Pilihan</h3>
        </div>
        <div class="carousel-program my-3 p-2">
            <div class="slides d-flex gap-4">
                @foreach ($programs as $program)
                    {{-- @if (!empty($c->placment) && strpos($c->placment, 'pilihan') !== false) --}}
                    @php
                        $sisa_hari = '&infin;';
                        if (!empty($program->expired_date)) {
                            $now = time();
                            $exp_date = strtotime($program->expired_date);
                            $datediff = $exp_date - $now;
                            $selisih = round($datediff / (60 * 60 * 24));
                            $sisa_hari = $selisih . ' hari';
                        }
                        $newlink = !empty($program->seo_link) ? $program->seo_link : '/p' . $programs->link;
                        $terkumpul = !empty($program->additional_collected) ? $program->collected + $program->additional_collected : $program->collected;
                        $persen_terkumpul = !empty($program->target_amount) && $program->target_amount > 0 ? ($terkumpul / $program->target_amount) * 100 : 0;
                        $persen_terkumpul = round($persen_terkumpul, 2);
                    @endphp
                    <div class="col">
                        <div class="card ms-auto  bg-white" style="width: 20rem;">
                            <a href="{{ url($newlink) }}" class="text-decoration-none text-reset">
                                <img src="{{ $program->photo }}" class="card-img-top" alt="{{ $program->name }}">
                                <div class="card-body overflow-hidden">
                                    <h5 class="card-title text-left text-uppercase text-nowrap">
                                        {{ substr($program->name, 0, 25) }}...</h5>
                                    <small class="card-text text-left">Gerakan Infaq Nutrisi</small>
                                    <div class="progress" style="height: 5px">
                                        <div class="progress-bar" role="progressbar"
                                            style="width: {{ $persen_terkumpul }}%; height: 5px;" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="fs-6">Terkumpul</div>
                                        <div class="fs-6">Sisa Hari</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="fs-6">
                                            Rp.{{ number_format($program->collected, 0, '.', '.') }}</div>
                                        <div class="fs-6">{!! $sisa_hari !!}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        </div>
    </section>
@endsection
