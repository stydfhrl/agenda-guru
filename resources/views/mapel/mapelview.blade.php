@extends('layout.main')

@section('title', 'Data Mata Pelajaran')
@section('title2', 'Tabel Data Mata Pelajaran')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0 d-flex justify-content-between">
            <h6>Tabel Mata Pelajaran</h6>
            <a href="{{route ('addmapel')}}" class="btn bg-gradient-success">Tambah Data</a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Mata Pelajaran</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created at</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($data as $row)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1 ms-2">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$no++}}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-2 py-1">
                        {{-- <div>
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div> --}}
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$row -> mapel}}</h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$row -> created_at}}</span>
                    </td>
                    <td class="align-middle">
                      <div class="d-flex justify-content-evenly ">
                      <a href="/editmapel/{{$row->id}}" class="btn btn-sm bg-gradient-warning">Edit</a>
                        <a href="/deletemapel/{{$row->id}}" class="btn btn-sm bg-gradient-danger">Delete</a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection