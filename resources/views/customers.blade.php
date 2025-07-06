@extends('layout.mainlayout')

@section('title', 'Daftar Reservasi')
    
@section('content')
    

<div class="container d-flex justify-content-end m-auto">
    <a href="/customer-add" class="btn btn-dark"style="margin-top: 100px;;">Buat reservasi</a>
</div>
<div class="container pt-3">
    @if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif
</div>

<div class="container">
    <div class="my-3 col-12 col-sm-8 col-md-5">
        <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Pelanggan">
                <button class="input-group-text btn btn-dark"><i class="bi bi-search"></i> Cari</button>
            </div>
        </form>
    </div>
</div>
<div class="container d-flex justify-content-center pt-3 ct-data" style="border-radius: 20px">
    
<table class="table table-bordered table-hover data-customer" >
    <thead class="table-dark">
        <th>Nama Pelanggan</th>
        <th style="width: 150px">Action</th>
    </thead>
    <tbody>
        @foreach ($customerList as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td style="font-size: 25px;">
                   
                    <a href="customer-food/{{$data->id}}"><i class="bi bi-cart-plus-fill"></i></a>
                    <a href="customer-edit/{{$data->id}}"><i class="bi bi-pencil-square" style="color: #1e5f12"></i></a>
                    <a href="customer/{{$data->id}}" style="color: #083aa7"><i class="bi bi-info-square-fill"></i></a>
                    @if (Auth::user()->role_id !=1)
                    -
                    @else
                    <a href="customer-delete/{{$data->id}}" style="color: rgb(175, 1, 1)"><i class="bi bi-trash-fill"></i></a>
                    @endif
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
</div>
<div class="container d-flex justify-content-center">
    {{$customerList->withQueryString()->links()}}
</div>

@endsection