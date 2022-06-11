@extends('layout.main')

@section('title', ' Data Agenda')
@section('title2', 'Agenda')


@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Tabel Agenda</h6>
                <a href="{{route ('addagenda')}}" class="btn bg-gradient-success">Tambah Data</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr class="text-center">
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Wali Kelas</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mata Pelajaran</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Materi</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Dari Jam (ke)</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sampai Jam (ke)</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Absensi</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Metode Belajar</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Link Pembelajaran</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Screenshot</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Keterangan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created at</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $index=>$row)
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
                            <h6 class="mb-0 text-sm">{{$row->nama_guru}}</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <h5 class="text-sm font-weight-bold mb-0">{{$row -> mapel}}</h5>
                        </td>
                        <td>
                        <h5 class="text-sm font-weight-bold mb-0">{{$row -> materi}}</h5>
                        </td>
                        <td>
                        <h5 class="text-sm font-weight-bold mb-0">{{$row -> darijam}}</h5>
                        </td>
                        <td>
                        <h5 class="text-sm font-weight-bold mb-0">{{$row -> sampaijam}}</h5>
                        </td>
                        <td>
                        <h5 class="text-sm font-weight-bold mb-0">{{$row -> nama_kelas}}</h5>
                        </td>
                        <td>
                        <h5 class="text-sm font-weight-bold mb-0">{{$row -> absensi}}</h5>
                        </td>
                        <td>
                        <h5 class="text-sm font-weight-bold mb-0">{{$row -> metode}}</h5>
                        </td>
                        <td>
                        <h5 class="text-sm font-weight-bold mb-0"><a href="">{{$row -> link_belajar}}</a></h5>
                        </td>
                        <td>
                            <h5 class="text-sm font-weight-bold mb-0">
                                <img src="{{asset ('dokumentasi/'. $row->screenshot)}}" alt="" style="width: 200px;">
                            </h5>
                        </td>
                        <td>
                            <h5 class="text-sm font-weight-bold mb-0">{{$row -> keterangan}}</h5>
                            </td>
                        <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$row -> created_at}}</span>
                        </td>
                        <td class="align-middle">
                        <div class="d-flex justify-content-evenly ">
                            <a href="/editagenda/{{$row->id_agenda}}" class="btn btn-sm bg-gradient-warning">Edit</a>
                            <a href="/deleteagenda/{{$row->id_agenda}}" class="btn btn-sm bg-gradient-danger ms-3">Delete</a>
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