@extends('layouts.app')
@section('content')


<div class="row d-flex justify-content-center">
    <div class="col-3">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="{{ route('test.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white">
                    <span class="ml-2">Tambah Data</span>
                </i>
            </a>
        </div>
    </div>
    <div class="col-3">
        <table class="table card" style="width:100%">
            <thead>
              <tr>
                <th scope="col">nama</th>
                <th scope="col">umur</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($datas as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->umur }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Data Kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection