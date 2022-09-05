@extends('layouts/main')

{{-- @section('title'){{ 'Tambah Barang' }} @endsection --}}

@section('container')
        <div class="card mx-auto" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title mb-4 text-center">Form Tambah Data</h5>
                <form action="{{ route("home.store") }}" method="post">
                    @csrf
                        <div class="mb-3">
                            <label for="itemType">Jenis Film</label>
                            <select class="form-select form-select-sm" id="itemType" name="item_type" aria-label=".form-select-sm example">
                                @foreach($items as $itemType)
                                <option value={{ $itemType -> id }}>{{ $itemType-> name }}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kode Film</label>
                          <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode" placeholder="Masukkan kode barang">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Film</label>
                            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" placeholder="Masukkan nama barang">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" >Stock</label>
                            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stock" type="number" placeholder="Masukkan jumlah stock">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Harga</label>
                            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga" type="number" placeholder="Masukkan harga">
                        </div>
                        <div class="mb-3">
                            <a href="/home" type="button" class="btn btn-outline-secondary btn-lg">Cancel</a>
                            <button type="submit" class="btn btn-primary float-end btn-lg">Submit</button>
                        </div>
                </form>
            </div>
          </div>
@endsection    