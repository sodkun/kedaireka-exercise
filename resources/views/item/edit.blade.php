@extends('layouts/main')

{{-- @section('title'){{ 'Edit Film' }} @endsection --}}

@section('container')
        <div class="card mx-auto" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title mb-4 text-center">Form Edit Data</h5>
                <form action="{{ route("home.update", $item->id) }}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kode Film</label>
                          <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode" value="{{ $item -> kode_barang }}">
                        </div>
                        <div class="mb-3">
                            <label for="itemType">Jenis Film</label>
                            <select class="form-select form-select-sm" id="itemType" name="item_type" aria-label=".form-select-sm example">
                                @foreach($itemTypes as $itemType)
                                <option value={{ $itemType -> id }} {{ $itemType -> id == $item -> item_type_id ? "selected":"" }}>{{ $itemType-> name }}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Film</label>
                            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{ $item -> nama_barang }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" >Stock</label>
                            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stock" type="number" value="{{ $item -> stock }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Harga</label>
                            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga" type="number" value="{{ $item -> harga }}">
                        </div>
                        <div class="mb-3">
                            <a href="/home" type="button" class="btn btn-outline-secondary btn-lg">Cancel</a>
                            <button type="submit" class="btn btn-primary float-end btn-lg">Submit</button>
                        </div>
                      
                </form>
            </div>
          </div>
@endsection    