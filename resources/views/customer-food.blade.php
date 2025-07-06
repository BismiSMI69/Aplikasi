@extends('layout.mainlayout')

@section('title', 'Buat Reservasi')
    
@section('content')

<div class="container">
    <div class="col-5 m-auto" style="padding-top: 100px;">
        <h4>Tambah Menu dengan nama Pelanggan {{$customer->name}}</h4>
        <form action="/customer-foodup/{{$customer->id}}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @method('post') --}}
            <div class="mb-3">
                @foreach ($menu as $data)
                <div class="input-group mb-3">
                    <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" value="{{$data->id}}" name="menu_id" id="menu" >
                    </div>
                    <label for="" style="padding-left: 13px;" class="form-control">{{$data->name}}</label>
                </div>
                @endforeach
            </div>

            {{-- <div class="mb-3">
                <label for="photo">Photo</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
            </div> --}}
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Pesan</button>
            </div>
        </form>
    </div>
</div>

@endsection