@extends('layout.main')

@section('title', 'Data Mata Pelajaran')
@section('title3', 'Edit Mata Pelajaran')
@section('title2', 'Edit Mata Pelajaran')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-center">
                    <h4>Tambah Mata Pelajaran</h4>
                </div>
                <div class="card-body px-0 pt-0 pb-2 mt-5">
                    <div class="table-responsive p-0">
                        <form action="/updatemapel/{{$data->id}}" method="POST" class="w-75 me-auto ms-auto">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Nama Mata Pelajaran</h6></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mapel" value="{{$data->mapel}}">
                                @error('mapel')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection