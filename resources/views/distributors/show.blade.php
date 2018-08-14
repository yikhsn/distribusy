@extends('layouts.master')

@section('content')
  <div class=""single-item>
      <div class="single-item-title">
        <table>
          <tr>
            <td>Nama Distributor</td>
            <td>{{ $distributor->name }}</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>{{ $distributor->address }}</td>
          </tr>
          <tr>
            <td>Nomor Telepon</td>
            <td>{{ $distributor->telephone }}</td>
          </tr>
          <tr>
            <td>Item</td>
            <td>
                <ul>
                  @foreach($distributor->items as $item)
                    <li> {{ $item->name }} - {{ $item->pivot->total }} Pieces <a href="/distributor/{{ $distributor->id }}/delete_item/{{ $item->pivot->item_id }}">Delete</a></li>
                  @endforeach
                </ul>
              </td>
          </tr>  
        </table>
      </div>
  </div>
@endsection