@extends('layouts.master')

@section('content')
<div id="content-container">
  
  <div class="header-content justify-content-between align-items-center">
    <h2 class="title-content">Detail Barang: {{ $item->name }}</h2>
  </div>   

  <div class="single-item">
      <div class="single-item-title">
        <table class="table table-md table-borderless table-show">
          <tr>
            <td class="col-md-4">Kode Barang</td>
            <td class="col-md-8">: {{ $item->code }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Nama Barang</td>
            <td class="col-md-8">: {{ $item->name }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Stock Barang</td>
            <td class="col-md-8">: {{ $item->stock }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Harga Barang</td>
            <td class="col-md-8">: {{ $item->price }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Berat Barang</td>
            <td class="col-md-8">: {{ $item->weight }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Dimensi Barang</td>
            <td class="col-md-8">: {{ $item->dimention }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Bahan Barang</td>
            <td class="col-md-8">: {{ $item->material }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Keterangan</td>
            <td class="col-md-8">: {{ $item->description }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Distributor</td>
            <td class="col-md-8">
              <ul>
                @foreach($item->distributors as $distributor)
                  <li>{{ $distributor->name }} - {{ $distributor->pivot->total }} Pieces</li>
                @endforeach
              </ul>
            </td>
          </tr>
        </table>
      </div>
  </div>

</div>

@endsection