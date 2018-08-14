@extends('layouts.master')

@section('content')
  <div>
    <div>
      <form method="POST" action="/distributor/{{ $distributor->id }}/update">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" type="text" name="name" id="name" value="{{ $distributor->name }}">    
        </div>
        <div class="form-group">
          <label for="address">Alamat</label>
          <input class="form-control" type="text" name="address" id="address" value="{{ $distributor->address }}">    
        </div>
        <div class="form-group">
          <label for="telephone">Nomor Telepon</label>
          <input class="form-control" type="text" name="telephone" id="telephone" value="{{ $distributor->telephone }}">    
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>

        <hr>

        @include('layouts.errors')
        
      </form>
    </div>
  </div>
@endsection