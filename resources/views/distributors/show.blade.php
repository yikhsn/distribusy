@extends('layouts.master')

@section('content')
  <div id="content-container">
  
    <div class="header-content justify-content-between align-items-center">
      <h2 class="title-content">Detail Distributor: {{ $distributor->name }}</h2>
    </div> 
    <div class="single-item">
      <div class="single-item-title">
        <table class="table table-md table-borderless table-show">
          <tr>
            <td class="col-md-4">Nama Distributor</td>
            <td class="col-md-8">: {{ $distributor->name }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Nama Pemilik</td>
            <td class="col-md-8">: {{ $distributor->owner }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Email</td>
            <td class="col-md-8">: {{ $distributor->email }}</td>
          </tr>
          <tr>
            <td class="col-md-4">No Telepon</td>
            <td class="col-md-8">: {{ $distributor->telephone }}</td>
          </tr>
          <tr>
            <td class="col-md-4">No Rekening</td>
            <td class="col-md-8">: {{ $distributor->account }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Provinsi</td>
            <td class="col-md-8">: {{ $distributor->province }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Kota</td>
            <td class="col-md-8">: {{ $distributor->city }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Alamat</td>
            <td class="col-md-8">: {{ $distributor->address }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Alamat 2</td>
            <td class="col-md-8">: {{ $distributor->address_2 }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Jarak</td>
            <td class="col-md-8">: {{ $distributor->distance }}</td>
          </tr>
          <tr>
            <td class="col-md-4">Tagihan</td>
            <td class="col-md-8">: {{ $distributor->bill }}</td>
          </tr>
          <tr>
            <td>Item</td>
            <td>
                <ul>
                  @foreach($distributor->items as $item)
                    <li> {{ $item->name }} - {{ $item->pivot->total }} Pieces <a href="/distributor/{{ $distributor->id }}/delete_item/{{ $item->pivot->item_id }}">Delete</a></li>
                  @endforeach
                </ul>
              </td>
          </tr>  
        </table>
      </div>
    </div>

  </div>
@endsection