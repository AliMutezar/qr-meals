@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @forelse ($data as $qrcode)
                <div class="col-12">
        
                    <div class="card pt-4 my-5 d-flex justify-content-between">
                        <div class="text-center">
                            {{ QrCode::color(0, 45, 109, 100)
                                ->eye('circle')->errorCorrection('H')
                                ->size(400)
                                ->generate($qrcode->nik) }}
                            <p style="font-size: 12px" class="mt-3">
                                {{ $qrcode->nik }} <br />
                                {{ $qrcode->name }}
                            </p>
                        </div>
                    </div>

                </div>
            @empty
                <p>Tidak ada data</p>
            @endforelse
        </div>
    </div>
@endsection