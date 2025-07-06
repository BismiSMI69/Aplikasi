@extends('layout.mainlayout')

@section('title', 'Daftar Reservasi')
    
@section('content')

<div class="container" style="margin-top: 100px;">
    <h2>Apakah anda ingin menghapus data {{$customer->name}} dengan reservasi tgl {{$customer->reservation_date}}</h2>
    
    <form action="/customer-destroy/{{$customer->id}}" method="post" style="display: inline-block">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="/customers" class="btn btn-primary">Cancel</a>
</div>

@endsection