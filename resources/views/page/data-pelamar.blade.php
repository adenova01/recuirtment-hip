@extends('templates.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <p class="card-description">
                    @if(session('message'))
                        <div class="alert alert-info">{{session('message')}}</div>
                    @endif
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered table-responsive" id="dataTable">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Nik</th>
                                <th>No Telp</th>
                                <th>Email</th>
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
                                <td>
                                    <a href="mailto:{{$item->email}}">{{$item->email}}</a>
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

                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" name="tgl" onchange="checkDate()" class="form-control" id="tanggal" aria-describedby="validationServer03Feedback" required>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                Tanggal Tidak Valid
                            </div>

                                <!-- <label for="tanggal">Tanggal</label>
                                <input onchange="checkDate()" type="date" class="form-control" id="tanggal" aria-describedby="emailHelp"> -->
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jam" class="form-label">Jam</label>
                                <input type="time" name="jam" onchange="checkDate()" class="form-control" id="jam" aria-describedby="validationServer03Feedback" required>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    Jam Tidak Valid
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Catatan <small class="text-danger">(opsional)</small></label>
                        <textarea class="form-control" name="catatan" id="exampleInputPassword1"></textarea>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btnSubmit" class="btn btn-primary">Send</button>
                </div>
            </form>
            </div>
        </div>
    </div>

</div>
@stop