@extends('layouts.master')

@section('content')
  <div>
    <div>
      <form method="POST" action="/distributor/{{ $distributor_id }}/store_item">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="item_id">ID Item</label>
          <input class="form-control" type="text" name="item_id" id="item_id">    
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
@endsection