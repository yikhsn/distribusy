@extends('layouts.master')

@section('content')
  <div class=""single-item>
      <div class="single-item-title">
        <table class="table table-md table-borderless table-show">
          <tr>
            <td>Kode Barang</td>
            <td>{{ $item->code }}</td>
          </tr>
          <tr>
            <td>Nama Barang</td>
            <td>{{ $item->name }}</td>
          </tr>
          <tr>
            <td>Stock Barang</td>
            <td>{{ $item->stock }}</td>
          </tr>
          <tr>
            <td>Harga Barang</td>
            <td>{{ $item->price }}</td>
          </tr>
          <tr>
            <td>Distributor</td>
            <td>
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
@endsection