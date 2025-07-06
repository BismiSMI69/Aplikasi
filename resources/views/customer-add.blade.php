@extends('layout.mainlayout')

@section('title', 'Buat Reservasi')
    
@section('content')
<div class="container">
    <div class="col-5 m-auto" style="padding-top: 100px;">
        <form action="customer" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="reservation_date">Tanggal Reservasi</label>
                <input type="date" id="reservation_date" name="reservation_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="reservations">Ruangan dan Meja</label>
                <select name="reservation_id" id="reservations" class="form-control" required>
                    <option value="">Pilih Tempat</option>
                    @foreach ($reservation as $item)
                        <option value="{{$item->id}}">{{$item->ruangan}}, {{$item->meja}}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="mb-3">
                <label for="menus"></label>
                @foreach ($menu as $data)
                <div class="input-group mb-3">
                    <div class="input-group-text">
                    <input class="form-check-input mt-0" type="checkbox" value="{{$data->id}}" name="menu_id" id="menus" >
                    </div>
                    <label for="" style="padding-left: 13px" class="form-control">{{$data->name}}</label>
                </div>
                @endforeach
            </div> --}}

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