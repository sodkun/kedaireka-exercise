@extends('layouts/main')

{{-- @section('title'){{ 'Edit Barang' }} @endsection --}}

@section('container')
        <div class="card mx-auto" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title mb-4 text-center">Form Edit Data</h5>
                <form action="{{ route("tipe.update", $itemTypes->id) }}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama</label>
                          <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{ $itemTypes -> name }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">{{ $itemTypes -> description }}</textarea>
                        </div>
                      
                      <div class="mb-3">
                        <a href="/tipe" type="button" class="btn btn-outline-secondary btn-lg">Cancel</a>
                        <button type="submit" class="btn btn-primary float-end btn-lg">Submit</button>
                    </div>
                </form>
               
            </div>
          </div>
@endsection    