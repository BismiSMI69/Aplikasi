@extends('layout.mainlayout')

@section('title', 'Daftar Reservasi')
    
@section('content')
    
<div class="container">
    
<table class="table">
    <thead>
        <th>#</th>
        <th>Nama Pelanggan</th>
        <th>Ruangan</th>
        <th>Meja</th>
    </thead>
    <tbody>
        @foreach ($reservasiList as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>Pelanggan</td>
                <td>{{$item->ruangan}}</td>
                <td>{{$item->meja}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection