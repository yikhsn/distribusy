@extends('layouts.master')

@section('content')
<div id="content-container">
  
  <div class="header-content justify-content-between align-items-center">
    <h2 class="title-content">Edit Barang - {{ $item->code }}</h2>
  </div>    

  <div>
    <div>
      <form method="POST" action="/item/{{ $item->code }}/update">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Nama Barang</label>
          <input class="form-control" type="text" name="name" id="name" 
                placeholder="required" required value="{{ $item->name }}">
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="code">Kode Barang</label>
            <input class="form-control" type="text" name="code" id="code" 
                placeholder="required" required value="{{ $item->code }}" readonly>
            <small class="form-text text-muted">
              Kode tidak dapat diubah
            </small>
          </div>
          <div class="form-group col-md-6">
            <label for="price">Harga Per Unit</label>
            <input class="form-control" type="text" name="price" id="price" 
                placeholder="required" required value="{{ $item->price }}">
            <small class="form-text text-muted">
              Dalam satuan rupiah
            </small> 
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="stock">Stok</label>
            <input class="form-control" type="text" name="stock" id="stock" 
                placeholder="optional" value="{{ $item->stock }}">
            <small class="form-text text-muted">
              Ketersediaan barang saat ini
            </small>
          </div>
          <div class="form-group col-md-6">
            <label for="weight">Berat</label>
            <input class="form-control" type="text" name="weight" id="weight" 
                placeholder="required" required value="{{ $item->weight }}">
            <small class="form-text text-muted">
              Berat barang per unit, dalam satuan gram
            </small>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="dimention">Dimensi</label>
            <input class="form-control" type="text" name="dimention" id="dimention" 
                placeholder="required" required value="{{ $item->dimention }}">
            <small class="form-text text-muted">
              Dimensi barang, dalam satuan centimeter
            </small>
          </div>
          <div class="form-group col-md-6">
            <label for="material">Bahan / Material Barang</label>
            <input class="form-control" type="text" name="material" id="material" 
                placeholder="required" required value="{{ $item->material }}">    
            <small class="form-text text-muted">
              Misal; Kaca, Kayu, Alumunium dsb
            </small>
          </div>
        </div> 

        <div class="form-group">
          <label for="description">Deskripsi</label>
          <input class="form-control" type="text" name="description" id="description" 
                value="{{ $item->description }}">
          <small class="form-text text-muted">
            Informasi tambahan, jika dibutuhkan
          </small>  
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <hr>

        @include('layouts.errors')
        
      </form>
    </div>
  </div>

</div>

@endsection