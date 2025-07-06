@extends('layout.mainlayout')

@section('title', 'Daftar Reservasi')
    
@section('content')
    
<div class="container" style="padding-top: 100px;">
        <h1>Reservasi atas nama {{$customer->name}}</h1>
        <table class="table table-bordered">
                <thead>
                        <th>Tanggal Reservasi</th>
                        <th>Ruangan</th>
                        <th>Meja</th>
                        <th>Menu yang dipesan</th>
                </thead>
                <tbody>
                        <tr>
                                <td>{{$customer->reservation_date}}</td>
                                <td>{{$customer->reservations->ruangan}}</td>
                                <td>{{$customer->reservations->meja}}</td>
                                <td>
                                        @foreach ($customer->menus as $item)
                                            - {{$item->name}}<br>
                                        @endforeach
                                </td>
                                
                        </tr>
                </tbody>
        </table>
</div>

@endsection