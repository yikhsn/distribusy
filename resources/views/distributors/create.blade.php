@extends('layouts.master')

@section('content')
  <div id="content-container">
  
    <div class="header-content justify-content-between align-items-center">
      <h2 class="title-content">Tambah Distributor</h2>
    </div>

    <div>
      <div>
        <form method="POST" action="/distributor/store">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Distributor</label>
              <input class="form-control" type="text" name="name" id="name"
                  placeholder="required" required>
              <small class="form-text text-muted">
                Nama tempat distrubusi
              </small>  
            </div>
            <div class="form-group col-md-6">
              <label for="owner">Nama Pemilik</label>
              <input class="form-control" type="text" name="owner" id="owner"
                  placeholder="required" required>
              <small class="form-text text-muted">
                Nama pemilik tempat distribusi
              </small>
            </div>      
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input class="form-control" type="email" name="email" id="email"
                  placeholder="required" required>
              <small class="form-text text-muted">
                Email pemilik atau email khusus distributor
              </small>  
            </div>
            <div class="form-group col-md-4">
              <label for="telephone">No Telepon</label>
              <input class="form-control" type="text" name="telephone" id="telephone"
                  placeholder="required" required>
              <small class="form-text text-muted">
                Nomor telepon pemilik atau khusus distributor
              </small>
            </div>
            <div class="form-group col-md-4">
              <label for="account">No Rekening</label>
              <input class="form-control" type="text" name="account" id="account"
                  placeholder="required" required>
              <small class="form-text text-muted">
                Nomor rekening pemilik atau khusus distributor
              </small>   
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="province">Provinsi</label>
              <input class="form-control" type="text" name="province" id="province"
                  placeholder="required" required>
              <small class="form-text text-muted">
                Provinsi distributor
              </small>    
            </div>
            <div class="form-group col-md-6">
              <label for="city">Kota</label>
              <input class="form-control" type="text" name="city" id="city"
                  placeholder="required" required>
              <small class="form-text text-muted">
                Kota Distributor
              </small>
            </div>
          </div>
          <div class="form-group">
            <label for="address">Alamat</label>
            <input class="form-control" type="text" name="address" id="address"
                placeholder="required" required>
            <small class="form-text text-muted">
              Alamat lengkap distributor
            </small>
          </div>
          <div class="form-group">
            <label for="address_2">Alamat 2</label>
            <input class="form-control" type="text" name="address_2" id="address_2"
                placeholder="optional">
            <small class="form-text text-muted">
              Alamat alternatif distributor
            </small>
          </div>
          @include('layouts.errors')

          <button type="submit" class="btn btn-primary">Tambah</button>

        </form>
      </div>
    </div>

  </div>

@endsection