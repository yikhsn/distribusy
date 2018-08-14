@extends('layouts.master')

@section('content')
  <div>
    <div>
      <form method="POST" action="/distributor/{{ $distributor_id }}/update_item/{{ $item->id }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Nama Item</label>
          <input class="form-control" type="text" name="name" id="name" value="{{ $item->name }}" readonly>
        </div>
        <div class="form-group">
          <label for="total">Total</label>
          <input class="form-control" type="text" name="total" id="total" value="{{ $item->pivot->total }}">    
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <hr>

        @include('layouts.errors')
        
      </form>
    </div>
  </div>
@endsection