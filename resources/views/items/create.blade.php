@extends('layouts.master')

@section('content')
  <div>
    <div>
      <form method="POST" action="/item/store">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" type="text" name="name" id="name">    
        </div>
        <div class="form-group">
          <label for="code">Code</label>
          <input class="form-control" type="text" name="code" id="code">    
        </div>
        <div class="form-group">
          <label for="stock">Stock</label>
          <input class="form-control" type="text" name="stock" id="stock">    
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input class="form-control" type="text" name="price" id="price">    
        </div>
        <button type="submit" class="btn btn-danger">Add</button>

        <hr>

        @include('layouts.errors')

      </form>
    </div>
  </div>
@endsection