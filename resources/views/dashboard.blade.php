@extends('layout.main')

@section('title', 'Dashboard')
@section('title2', 'Dashboard')

@section('content')
<div class="row d-flex justify-content-around">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Tabel Data</p>
                <h5 class="font-weight-bolder">
                  Data Guru
                </h5>
                  <p class="mb-0 mt-3">
                    <a href="/guru" class="btn btn-sm bg-gradient-dark">Lihat Data</a>
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Tabel Data</p>
                  <h5 class="font-weight-bolder">
                    Data Kelas
                  </h5>
                    <p class="mb-0 mt-3">
                      <a href="/kelas" class="btn btn-sm bg-gradient-dark">Lihat Data</a>
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-dark shadow-primary text-center rounded-circle">
                  <i class="ni ni-hat-3 text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Tabel Data</p>
                  <h5 class="font-weight-bolder">
                    Data Agenda
                  </h5>
                    <p class="mb-0 mt-3">
                      <a href="/agenda" class="btn btn-sm bg-gradient-dark">Lihat Data</a>
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-primary text-center rounded-circle">
                  <i class="ni ni-folder-17 text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection