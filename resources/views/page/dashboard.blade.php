@extends('templates.app')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome Admin</h3>
          <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
        </div>
        <div class="col-12 col-xl-4">
         <div class="justify-content-end d-flex">
          <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
            <button class="btn btn-sm btn-light bg-white" type="button" >
             <i class="mdi mdi-calendar"></i> <b>Today ({{date('d M Y')}})</b>
            </button>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <img src="{{url('/assets_dashboard/images/dashboard/people.svg')}}" alt="people">
          <div class="weather-info">
            <div class="d-flex">
              <div>
                <!-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2> -->
              </div>
              <div class="ml-2">
                <h4 id="city" class="location font-weight-normal">Surabaya</h4>
                <h6 id="country" class="font-weight-normal">Indonesia</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Pelamar Hari Ini</p>
              <p class="fs-30 mb-2">{{$count_jumlahKaryawanHariIni}}</p>
              <p>Orang</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Total Pelamar</p>
              <p class="fs-30 mb-2">{{$count_pelamarAll}}</p>
              <p>Orang</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">Di Terima</p>
              <p class="fs-30 mb-2">{{$count_karyawanDiterima}}</p>
              <p>Orang</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Di Tolak</p>
              <p class="fs-30 mb-2">{{$count_karyawanDitolak}}</p>
              <p>Orang</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 grid-margin transparent">
    </div>

    <div class="col-md-12 grid-margin transparent">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Advanced Table</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="pelamar" class="display expandable-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Nik</th>
                                            <th>No Telp</th>
                                            <th>Tempat, Tgl Lahir</th>
                                            <th>alamat</th>
                                            <th>Posisi</th>
                                            <th class="text-center">File</th>
                                            <th>Status</th>
                                            <th>Tanggal Pengajuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($calon_karyawan as $item)
                                        <tr>
                                          <td>{{$item->nama_lengkap}}</td>
                                          <td>{{$item->jenis_kelamin}}</td>
                                          <td>{{$item->nik}}</td>
                                          <td>{{$item->no_telp}}</td>
                                          <td>{{$item->tempat_tgl_lahir}}</td>
                                          <td>{{$item->alamat}}</td>
                                          <td>{{$item->posisi}}</td>
                                          <td class="text-center">
                                            <a href="{{url('/view-pdf/'.$item->id)}}">
                                              <i class="mdi mdi-file-pdf text-danger" style="font-size: 420%"></i>
                                              <p>download file</p>
                                            </a>
                                          </td>
                                          <td>
                                            <div class="badge badge-{{ $item->status == 'pending' ? 'warning' : 'success' }}">{{$item->status}}</div>
                                          </td>
                                          <td>{{$item->created_at}}</td>
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
    </div>
  </div>
</div>
@stop