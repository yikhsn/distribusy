@extends('layouts.master')

@section('content')
  
  <div id="content-container">

    @include('layouts.header_content')

    <table class="table table-index table-md text-center table-borderless">
      <thead>
        <tr class="table-tr-distribusy text-secondary-distribusy">
          <th class="align-middle">Nama Barang</th>
          <th class="align-middle">Kode Barang</th>
          <th class="align-middle">Harga/Unit</th>
          <th class="align-middle">Persedian</th>
          <th class="align-middle">Berat</th>
          <th class="align-middle">Dimensi</th>
          <th class="align-middle">Material</th>
          <th class="align-middle">Distributor</th>
          <th class="align-middle">Opsi</th>
        </tr>
        <tr class="table-row-space-header">
          <td></td> 
        </tr>
      </thead>
      <tbody>
        @foreach($items as $item)
        <tr class="table-td-distribusy text-secondary-distribusy">
          <td class="align-middle">{{ $item->name }}</td>
          <td class="align-middle">{{ $item->code }}</td>
          <td class="align-middle">{{ $item->price }}</td>
          <td class="align-middle">{{ $item->stock }}</td>
          <td class="align-middle">{{ $item->weight }}</td>
          <td class="align-middle">{{ $item->dimention }}</td>
          <td class="align-middle">{{ $item->material }}</td>
          <td class="align-middle">{{ $item->distributors()->count() }}</td>
          <td class="align-middle">...</td>
        </tr>
        <tr class="table-row-space">
          <td></td> 
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
  
@endsection