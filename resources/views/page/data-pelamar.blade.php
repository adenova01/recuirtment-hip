@extends('templates.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="dataTable">
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
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->nama_lengkap}}</td>
                                <td>{{$item->jenis_kelamin}}</td>
                                <td>{{$item->nik}}</td>
                                <td>
                                    <a href="https://api.whatsapp.com/send?phone={{$item->no_telp}}&text=Halo%20{{$item->nama_lengkap}}" target="_blank">
                                        {{$item->no_telp}}
                                    </a>
                                </td>
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
                                <td>
                                    @if($item->status == 'pending')
                                    <a href="#" class="btn btn-outline-info btn-xl">Add Jadwal<br>Interview</a>
                                    @endif
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
@stop