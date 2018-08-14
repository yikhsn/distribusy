@extends('layouts.master')

@section('content')
  <div>
    <div>
      <form method="POST" action="/distributor/store">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Nama</label>
          <input class="form-control" type="text" name="name" id="name">    
        </div>
        <div class="form-group">
          <label for="address">Alamat</label>
          <input class="form-control" type="text" name="address" id="address">    
        </div>
        <div class="form-group">
          <label for="telephone">Nomor Telepon</label>
          <input class="form-control" type="text" name="telephone" id="telephone">    
        </div>
        <button type="submit" class="btn btn-danger">Add</button>

        <hr>

        @include('layouts.errors')

      </form>
    </div>
  </div>
@endsection