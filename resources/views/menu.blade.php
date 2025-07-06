@extends('layout.mainlayout')

@section('title', 'Menu')
    
@section('content')
    

<div class="container" style="margin-top: 100px">
    <div class="row d-flex justify-content-center">
        @foreach ($menuList as $item)
        <div class="card" style="width: 15rem; margin: 0 0 20px 20px;">
            <img class="card-img-top" src="img/{{$item->gambar}}" alt="Card image cap" style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <p class="card-text">{{$item->country}}</p>
                <a href="#" class="btn btn-primary">Rp. {{$item->price}}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection