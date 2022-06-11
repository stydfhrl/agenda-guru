@extends('layout.main')

@section('title', 'Data Kelas')
@section('title3', 'Edit Data Kelas')
@section('title2', 'Edit Data Kelas')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-center">
                    <h4>Edit Data Kelas</h4>
                </div>
                <div class="card-body px-0 pt-0 pb-2 mt-5">
                    <div class="table-responsive p-0">
                        <form action="/updatekelas/{{$data->id}}" method="POST" class="w-75 me-auto ms-auto">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Nama Kelas</h6></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_kelas" value="{{$data->nama_kelas}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Wali Kelas</h6></label>
                                <input list="browsers" name="guru_id"  class="form-control" id="exampleInputEmail1">
                                <datalist id="browsers">
                                        @foreach($guru as $row)
                                        <option value="{{$row->id}}">{{$row->nama_guru}}</option>
                                        @endforeach
                                </datalist>
                                @error('guru_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            <button type="submit" class="btn bg-gradient-primary mt-3">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection