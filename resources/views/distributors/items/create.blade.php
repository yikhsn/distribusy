@extends('layouts.master')

@section('content')
<div id="content-container">
  
    <div class="header-content justify-content-between align-items-center">
      <h2 class="title-content">Tambah Barang untuk {{ $distributor->name }}</h2>
    </div>

    <div>
      <div>
        <form method="POST" action="/distributor/{{ $distributor->id }}/store_item">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="item_id">ID Item</label>
            <input class="form-control" type="text" name="item_id" id="item_id">    
          </div>
          <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input class="form-control" type="text" name="quantity" id="quantity">    
          </div>
          <div class="form-group">
            <label for="total">Total</label>
            <input class="form-control" type="text" name="total" id="total">    
          </div>
          <button type="submit" class="btn btn-danger">Add</button>

          <hr>

          @include('layouts.errors')

        </form>
      </div>
    </div>

</div>

@endsection