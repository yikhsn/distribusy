@extends('layouts.master')

@section('content')
  <div id="content-container">

    @include('layouts.header_content')

      <table class="table table-index table-md text-center table-borderless">
        <tr class="table-tr-distribusy text-secondary-distribusy">
        <thead>
          <tr class="table-tr-distribusy text-secondary-distribusy">
            <th class="align-middle">Distributor</th>
            <th class="align-middle">Pemilik</th>
            <th class="align-middle">Provinsi</th>
            <th class="align-middle">Kota</th>
            <th class="align-middle">Email</th>
            <th class="align-middle">No Handphone</th>
            <th class="align-middle">No Rekening</th>
            <th class="align-middle">Total Barang</th>
            <th class="align-middle">Opsi</th>
          </tr>
          <tr class="table-row-space-header">
            <td></td> 
          </tr>
        </thead>
        <tbody>
          @foreach($distributors as $distributor)
            <tr class="table-td-distribusy text-secondary-distribusy">
              <td class="align-middle">{{ $distributor->name }}</td>
              <td class="align-middle">{{ $distributor->owner }}</td>
              <td class="align-middle">{{ $distributor->province }}</td>
              <td class="align-middle">{{ $distributor->city }}</td>
              <td class="align-middle">{{ $distributor->email }}</td>
              <td class="align-middle">{{ $distributor->telephone }}</td>
              <td class="align-middle">{{ $distributor->account }}</td>
              <td class="align-middle">{{ $distributor->items()->count() }}</td>
              <td class="align-middle"> ... </td>
            </tr>
            <tr class="table-row-space">
              <td></td> 
            </tr>
          @endforeach
        </tbody>
      </table>

  </div>
@endsection