@extends('layout.main')

@section('title', 'Data Guru')
@section('title3', 'Edit Data Guru')
@section('title2', 'Edit Data Guru')
    
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-center">
                    <h4>Edit Data Guru</h4>
                </div>
                <div class="card-body px-0 pt-0 pb-2 mt-5">
                    <div class="table-responsive p-0">
                        <form action="/updateguru/{{$data->id}}" method="POST" class="w-75 me-auto ms-auto">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Nama Lengkap</h6></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_guru" value="{{$data->nama_guru}}">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>NIK</h6></label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nik" value="{{$data->nik}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Username</h6></label>
                                <input list="browsers" name="user_id"  class="form-control" id="exampleInputEmail1">
                                @foreach($user as $row)
                                    <datalist id="browsers">
                                        <option value="{{$row->id}}">{{$row->email}}</option>
                                @endforeach
                                @error('user_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Mata Pelajaran</h6></label>
                                <select class="form-select" aria-label="Default select example" name='mapel_id'>
                                @foreach ($mapel as $row)
                                    <option value="{{$row->id}}">{{$row->mapel}}</option>
                                @endforeach
                                </select>
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