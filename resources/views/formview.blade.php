<head>  
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/download.png">
  <title>
    Agenda Guru | Form
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
</head>
</head>

<body class="bg bg-gradient-warning">  
    <ul class="navbar-nav d-flex">
        <li class="nav-item d-flex align-items-center justify-content-end me-5">
            <a href="/logout" class="nav-link text-white font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Sign Out</span>
            </a>
        </li>
    </ul>
    <div class="container py-4" id="forminsert">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-center">
                        <h4>Tambah Data Agenda</h4>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mt-5">
                        <div class="table-responsive p-0">
                            <form action="{{route ('formstore')}}" method="POST" class="w-75 me-auto ms-auto" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h6>Nama Guru</h6></label>
                                    <input list="browsers" name="guru_id"  class="form-control" id="exampleInputEmail1">
                                    <datalist id="browsers">
                                        @foreach($guru as $row)
                                            <option value="{{$row->id}}">{{$row->nama_guru}}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h6>Mata Pelajaran</h6></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mapel">
                                    @error('mapel')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h6>Materi</h6></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="materi">
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
                                            <option selected>Jam Ke</option>
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
                                            <option selected>Jam Ke</option>
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
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="absensi">
                                    @error('absensi')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h6>Nama Kelas</h6></label>
                                    <select class="form-select" aria-label="Default select example" name='kelas_id'>
                                        <option selected>Pilih Nama Kelas</option>
                                    @foreach ($kelas as $row)
                                        <option value="{{$row->id}}">{{$row->nama_kelas}}</option>
                                    @endforeach
                                    </select>
                                    @error('nama_kelas')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h6>Metode</h6></label>
                                    <select class="form-select" aria-label="Default select example" name='metode'>
                                        <option selected>Pilih Metode</option>
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
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="link_belajar">
                                    @error('link_belajar')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h6>Screenshot</h6></label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="screenshot">
                                    @error('screenshot')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h6>Keterangan</h6></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="keterangan">
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

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Tabel Agenda</h6>
                    <a href="#forminsert" class="btn bg-gradient-success">Tambah Data</a>
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
                            {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th> --}}
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
                            {{-- <td class="align-middle">
                                <div class="d-flex justify-content-evenly ">
                                    <a href="/editagenda/{{$row->id_agenda}}" class="btn btn-sm bg-gradient-warning">Edit</a>
                                    <a href="/deleteagenda/{{$row->id_agenda}}" class="btn btn-sm bg-gradient-danger ms-3">Delete</a>
                                </div>
                            </td> --}}
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

      <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>