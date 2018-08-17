@extends('layouts.master')

@section('content')
<div id="content-container">
  
    <div class="header-content justify-content-between align-items-center">
      <h2 class="title-content">Edit Pesanan {{ $item->name }}</h2>
    </div>

    <div>
      <div>
        <form method="POST" 
            action="/distributor/{{ $distributor_id }}/update_item/{{ $item->id }}">
  
            {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Nama Item</label>
            <input class="form-control" type="text" name="name" id="name"
                value="{{ $item->name }}" readonly>
          </div>
          <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input class="form-control" type="text" name="quantity" id="quantity"
                value="{{ $item->pivot->quantity }}">    
          </div>
          <div class="form-group">
            <label for="total">Total</label>
            <input class="form-control" type="text" name="total" id="total"
                value="{{ $item->pivot->total }}">    
          </div>      
          
          @include('layouts.errors')

          <button type="submit" class="btn btn-primary">Update</button>
          
        </form>
      </div>
    </div>

</div>
@endsection