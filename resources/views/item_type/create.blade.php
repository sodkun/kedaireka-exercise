@extends('layouts/main')

{{-- @section('title'){{ 'Tambah Barang' }} @endsection --}}

@section('container')
        <div class="card mx-auto" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title mb-4 text-center">Form Tambah Data</h5>
                <form action="{{ route("tipe.store") }}" method="post">
                    @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama</label>
                          <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Masukkan tipe barang">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description" placeholder="Masukkan deskripsi">
                        </div>
                        <div class="mb-3">
                            <a href="/tipe" type="button" class="btn btn-outline-secondary btn-lg">Cancel</a>
                            <button type="submit" class="btn btn-primary float-end btn-lg">Submit</button>
                        </div>
                </form>
            </div>
          </div>
@endsection    