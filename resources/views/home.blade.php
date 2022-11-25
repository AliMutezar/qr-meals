@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card py-3 mt-5">
                        <div class="visible-print text-center">
                            {{ QrCode::color(0, 45, 109, 100)
                                ->eye('circle')->errorCorrection('H')
                                ->generate(auth::user()->name) }}
                            <p>
                               
                                {{ auth::user()->name }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
