@extends('layout.main')

@section('title', 'Data Agenda')
@section('title3', 'Edit Data Agenda')
@section('title2', 'Edit Data Agenda')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-center">
                    <h4>Edit Data Agenda</h4>
                </div>
                <div class="card-body px-0 pt-0 pb-2 mt-5">
                    <div class="table-responsive p-0">
                        <form action="/updateagenda/{{$data->id}}" method="POST" class="w-75 me-auto ms-auto" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Nama Guru</h6></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_guru" value="{{$data->nama_guru}}">
                                @error('nama_guru')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Mata Pelajaran</h6></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mapel" value="{{$data->mapel}}">
                                @error('mapel')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Materi</h6></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="materi" value="{{$data->materi}}">
                                @error('materi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="mb-3 col-5">
                                    <label for="exampleInputEmail1" class="form-label"><h6>Dari Jam (Ke)</h6></label>
                                    <select class="form-select" aria-label="Default select example" name='darijam'>
                                        <option selected>{{$data->darijam}}</option>
                                        <option value="jam ke-1">Jam Ke-1</option>
                                        <option value="jam ke-2">Jam Ke-2</option>
                                        <option value="jam ke-3">Jam Ke-3</option>
                                        <option value="jam ke-4">Jam Ke-4</option>
                                        <option value="jam ke-5">Jam Ke-5</option>
                                        <option value="jam ke-6">Jam Ke-6</option>
                                        <option value="jam ke-7">Jam Ke-7</option>
                                        <option value="jam ke-8">Jam Ke-8</option>
                                        <option value="jam ke-9">Jam Ke-9</option>
                                    </select>
                                    @error('darijam')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <h6 class="text-center mt-5">-</h6>
                                </div>
                                <div class="mb-3 col-5">
                                    <label for="exampleInputEmail1" class="form-label"><h6>Sampai Jam (Ke)</h6></label>
                                    <select class="form-select" aria-label="Default select example" name='sampaijam'>
                                        <option selected>{{$data->sampaijam}}</option>
                                        <option value="jam ke-1">Jam Ke-1</option>
                                        <option value="jam ke-2">Jam Ke-2</option>
                                        <option value="jam ke-3">Jam Ke-3</option>
                                        <option value="jam ke-4">Jam Ke-4</option>
                                        <option value="jam ke-5">Jam Ke-5</option>
                                        <option value="jam ke-6">Jam Ke-6</option>
                                        <option value="jam ke-7">Jam Ke-7</option>
                                        <option value="jam ke-8">Jam Ke-8</option>
                                        <option value="jam ke-9">Jam Ke-9</option>
                                    </select>
                                    @error('sampaijam')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>                          
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Absensi</h6></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="absensi" value="{{$data->absensi}}">
                                @error('absensi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Nama Kelas</h6></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_kelas" value="{{$data->nama_kelas}}">
                                @error('nama_kelas')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Metode</h6></label>
                                <select class="form-select" aria-label="Default select example" name='metode'>
                                    <option selected>{{$data->metode}}</option>
                                    <option value="online">Online</option>
                                    <option value="offline">Offline</option>
                                </select>
                                @error('metode')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Link Pembelajaran</h6></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="link_belajar" value="{{$data->link_belajar}}">
                                @error('link_belajar')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Screenshot</h6></label>
                                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="screenshot" value="{{$data->screenshot}}">
                                @error('screenshot')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Keterangan</h6></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="keterangan" value="{{$data->keterangan}}">
                                @error('keterangan')
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