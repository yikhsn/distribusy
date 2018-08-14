@extends('layouts.master')

@section('content')
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Nama Distributor</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Item</th>
                </tr>
              </thead>
              <tbody>
                @foreach($distributors as $distributor)
                  <tr>
                    <td>{{ $distributor->name }}</td>
                    <td>{{ $distributor->address }}</td>
                    <td>{{ $distributor->telephone }}</td>
                    <td>
                      <ul>
                        @foreach($distributor->items as $item)
                          <li> {{ $item->name }} - {{ $item->pivot->total }} Pieces <a href="/distributor/{{ $distributor->id }}/delete_item/{{ $item->pivot->item_id }}">Delete</a></li>
                        @endforeach
                      </ul>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
@endsection