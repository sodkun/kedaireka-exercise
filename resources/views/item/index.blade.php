@extends('layouts/main')

{{-- @section('title'){{ 'Dashboard' }} @endsection --}}

@section('container')
<div class="row">
  <div class="col-6">
      <div class="col-lg">
        <div class="input-group">
          <select class="form-select" id="itemType" name="item_type" aria-label=".form-select-sm example">
            @foreach($columns as $column)
            <option value= {{ $column ?  $column:"" }}>{{ $column }}</option>
            @endforeach
          </select>
          <input class="form-control" style="width:10rem" id="exampleInputEmail1" aria-describedby="emailHelp" name="search" placeholder="search..">
        </div>
      </div>
  </div>
  <div class="col-6">
    <a href="{{ route('home.create') }}" type="button" class="btn btn-primary float-end btn-lg" style="width: 10rem">Add Item</a>        
  </div>
</div>
<div class="card mt-4">
    <div class="card-body">
      <div class="row">
        <div class="float-end">
          @if(request()->get('status') == 'archived')
            <a href="/home" class="nav-link float-end" >Back</a>
          @else
            <a href="/home?status=archived" class="nav-link float-end" >Archive History</a>
          @endif
          
        </div>
      </div>

      @if(request()->get('status') == 'archived')
        <form action="{{ route('home.restore-all') }}" method="post" class="d-inline">
          @csrf
          <input type="submit" value="Restore All" class="btn btn-primary btn-sm">
        </form>
      @endif


        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Film</th>
                <th class="d-flex align-items-center" scope="col">
                  Nama Film 
                  <div class="d-flex flex-column">
                    <a href="/home?sort=asc&by=nama_film"  style="width: 10px;height: 10px; cursor:pointer"><i class="material-icons-round">arrow_drop_up</i></a>
                    <a href="/home?sort=desc&by=nama_film" style="cursor:pointer;width: 18px;height: 18px;"><i class="material-icons-round">arrow_drop_down</i></a>
                    
                  </div>
                </th>
                <th scope="col">Tipe</th>
                <th scope="col">Stock</th>
                <th scope="col">Harga</th>
                <th scope="col">Total Aset</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items as $item)
              <tr>
                <th scope="row">{{ $loop -> iteration }}</th>
                <td>{{ $item -> kode_film }}</td>
                <td>{{ $item -> nama_film }}</td>
                <td>{{ $item -> itemTypes-> name }}</td>
                {{-- <td>{{ $item -> jenis }}</td> --}}
                <td>{{ $item -> stock }}</td>
                <td>{{ $item -> harga }}</td>
                {{-- <td>{{ $item -> total_aset }}</td> --}}
                <td>{{ $item -> stock * $item -> harga }}</td>
                <td>
                  @if(request()->get('status') == 'archived')
                    <form action="{{ route('home.restore', $item->id) }}" method="post" class="d-inline">
                      @csrf
                      <input type="submit" value="Restore" class="btn btn-outline-warning">
                    </form>
                  @else
                    <a href="{{route("home.edit", $item->id) }}" type="button" class="btn btn-outline-primary">Edit</a>
                  @endif
                    
                  @if(request()->get('status') == 'archived')
                    <form action="{{ route('home.fdel',$item->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" onclick="return confirm('Are you sure want to delete permanently this item ?')" type="button" class="btn btn-outline-danger">Delete</button>
                    </form>
                  @else
                    <form action="{{ route('home.destroy',$item->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" onclick="return confirm('Are you sure want to delete this item ?')" type="button" class="btn btn-outline-danger">Delete</button>
                    </form>
                  @endif
                    
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $items -> links() }}
    </div>
  </div>
@endsection
        
    