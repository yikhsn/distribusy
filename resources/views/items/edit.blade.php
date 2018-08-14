@extends('layouts.master')

@section('content')
  <div>
    <div>
      <form method="POST" action="/item/{{ $item->code }}/update">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" type="text" name="name" id="name" value="{{ $item->name }}">    
        </div>
        <div class="form-group">
          <label for="code">Code</label>
          <input class="form-control" type="text" name="code" id="code" value="{{ $item->code }}" readonly>    
        </div>
        <div class="form-group">
          <label for="stock">Stock</label>
          <input class="form-control" type="text" name="stock" id="stock" value="{{ $item->stock }}">    
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input class="form-control" type="text" name="price" id="price" value="{{ $item->price }}">    
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>

        <hr>

        @include('layouts.errors')
        
      </form>
    </div>
  </div>
@endsection