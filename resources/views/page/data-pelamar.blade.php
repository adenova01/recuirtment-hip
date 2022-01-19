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
                    <table class="table table-bordered table-responsive" id="dataTable">
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
                                    <button type="button" onclick="$('#form').attr('action','{{url('/setJadwalInterview/'.$item->id)}}')" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                      Tambah Jadwal<br> Interview
                                    </button>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form id="form" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jadwal Interview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jam</label>
                                <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Catatan</label>
                        <textarea class="form-control" id="exampleInputPassword1"></textarea>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
            </div>
        </div>
    </div>

</div>
@stop