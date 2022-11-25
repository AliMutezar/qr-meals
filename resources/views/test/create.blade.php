@extends('layouts.app')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-3">
            <form action="{{ route('test.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" name="umur" class="form-control" id="umur">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection