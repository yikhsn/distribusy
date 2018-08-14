@extends('layouts.master')

@section('content')
            <table class="table table-md text-center table-borderless">
              <thead>
                <tr class="table-tr-distribusy text-secondary-distribusy">
                  <th class="align-middle">Nama Barang</th>
                  <th class="align-middle">Kode Barang</th>
                  <th class="align-middle">Harga/Unit</th>
                  <th class="align-middle">Stock Barang</th>
                  <th class="align-middle">Distributor</th>
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
                  <td class="align-middle">
                    <div>
                      @foreach($item->distributors as $distributor)
                        <div><a href="/distributor/{{ $distributor->id }}">{{ $distributor->name }}</a></div>
                      @endforeach
                    </div>
                  </td>
                </tr>
                <tr class="table-row-space">
                  <td></td> 
                </tr>
                @endforeach
              </tbody>
            </table>
@endsection