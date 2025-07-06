@extends('layout.mainlayout')

@section('title', 'Daftar Reservasi')
    
@section('content')

<div class="col-5 m-auto">
    <div class="col-5 m-auto" style="padding-top: 100px;">
        <form action="/customer/{{$customer->id}}" method="post">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" required value="{{$customer->name}}">
            </div>
            <div class="mb-3">
                <label for="reservation_date">Tanggal Reservasi</label>
                <input type="date" id="reservation_date" name="reservation_date" class="form-control" required value="{{$customer->reservation_date}}">
            </div>
            <div class="mb-3">
                <label for="reservations">Ruangan dan Meja</label>
                <select name="reservation_id" id="reservations" class="form-control" required>
                    <option value="{{$customer->reservations->id}}">{{$customer->reservations->ruangan}}, {{$customer->reservations->meja}}</option>
                    @foreach ($reservation as $item)
                        <option value="{{$item->id}}">{{$item->ruangan}}, {{$item->meja}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection