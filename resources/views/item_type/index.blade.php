@extends('layouts/main')

{{-- @section('title'){{ 'Dashboard' }} @endsection --}}

@section('container')
<div class="row">
  <div>
    <a href="{{ route('tipe.create') }}" type="button" class="btn btn-primary float-end btn-lg" style="width: 10rem">Add Item</a>        
  </div>
</div>
<div class="card mt-4">
    <div class="card-body">
      <div class="row">
        <div class="float-end">
          @if(request()->get('status') == 'archived')
            <a href="/tipe" class="nav-link float-end" >Back</a>
          @else
            <a href="/tipe?status=archived" class="nav-link float-end" >Archive History</a>
          @endif
          
        </div>
      </div>

      @if(request()->get('status') == 'archived')
        <form action="{{ route('tipe.restore-all') }}" method="post" class="d-inline">
          @csrf
          <input type="submit" value="Restore All" class="btn btn-primary btn-sm">
        </form>
      @endif


        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tipe Barang</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($itemTypes as $itemType)
              <tr>
                <th scope="row">{{ $loop -> iteration }}</th>
                <td>{{ $itemType -> name }}</td>
                <td>{{ $itemType -> description }}</td>
                <td>
                  @if(request()->get('status') == 'archived')
                    <form action="{{ route('tipe.restore', $item->id) }}" method="post" class="d-inline">
                      @csrf
                      <input type="submit" value="Restore" class="btn btn-outline-warning">
                    </form>
                  @else
                    <a href="{{route("tipe.edit", $itemType->id) }}" type="button" class="btn btn-outline-primary">Edit</a>
                  @endif
                    
                  @if(request()->get('status') == 'archived')
                    <form action="{{ route('tipe.fdel',$item->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" onclick="return confirm('Are you sure want to delete permanently this item ?')" type="button" class="btn btn-outline-danger">Delete</button>
                    </form>
                  @else
                    <form action="{{ route('tipe.destroy',$itemType->id) }}" method="post" class="d-inline">
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
          {{ $itemTypes -> links() }}
    </div>
  </div>
@endsection
        
    