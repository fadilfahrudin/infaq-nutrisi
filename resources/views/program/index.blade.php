@extends('templates.simple.layout')

@section('title','Program')

@section('content')
<section class="bg-gin3 mt-8 pb-3">
    <div class="mobile-container mx-auto pt-4">
        <div class="row g-2">
            <h4 class="text-center text-white">Program Kami</h4>
            @foreach ($rows as $row)
                @php 
                    $link = !empty($row->seo_link) ? $row->seo_link : $row->link;
                    $program_title = strlen($row->name) > 60 ? substr($row->name, 0, 57) . '...' : $row->name;
                    $terkumpul = !empty($row->additional_collected) ? $row->collected + $row->additional_collected : $row->collected;
                    $persen_terkumpul = !empty($row->target_amount) && $row->target_amount > 0 ? ($terkumpul / $row->target_amount) * 100 : 0;
                    $persen_terkumpul = round($persen_terkumpul, 2);
                @endphp
                <div class="col-6">
                    <div class="card">
                        <img src="{{ strpos($row->photo, 'https') === false ? asset('img/program/'.$row->photo) : $row->photo }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <strong>{{ ucwords(strtolower($program_title)) }}</strong>
                            <div class="progress mt-3" style="height: 5px">
                                <div class="progress-bar" role="progressbar"
                                    style="width: {{ $persen_terkumpul }}%; height: 5px;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-1">
                                <div>
                                    <small>Terkumpul</small><br>
                                    <strong>Rp. {{ number_format($terkumpul, 0, ',', '.') }}</strong>
                                </div>
                                <div class="text-end">
                                    <small>Sisa hari</small><br>
                                    <strong>15 hari lagi</strong>
                                </div>
                            </div>
                            <a href="{{ url($link) }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('partials.footer')
@endsection