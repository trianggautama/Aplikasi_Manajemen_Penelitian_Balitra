@extends('layouts.pembimbing')

@section('content')
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="#">Penelitian</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Data Penelitian </h4>
      </div>
      <div class="d-none d-md-block">
        <button class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5" data-toggle="modal" id="tambahJob"><i
            data-feather="plus" class="wd-10 mg-r-5"></i> tambah Data</button>
        <a href="{{Route('penelitianCetak')}}" class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"
          target="_blank"><i data-feather="printer" class="wd-10 mg-r-5"></i> Print</a>
      </div>
    </div>
    <div class="row row-xs">
      @foreach($data->jobdesk as $d)
      <div class="col-md-12 col-xl-12 mg-t-10">
        <div class="card card-body mg-b-10">
          <p>
            <a class="btn btn-secondary" data-toggle="collapse" href="#collapseExample" aria-controls="collapseExample">
              {{carbon\carbon::parse($d->created_at)->translatedFormat('d F Y')}}
            </a>
            <a href="{{Route('jobdeskEdit',['uuid' => $d->uuid])}}" class="btn btn-primary btn-icon"><i
                data-feather="edit"></i></a>
            <button type="button" class="btn btn-danger btn-icon" onclick="Hapus('{{$d->uuid}}','{{$d->uraian}}')"><i
                data-feather="delete"></i></button>
            <button data-status="{{$d->status}}" data-id="{{$d->uuid}}" class="btn btn-success btn-icon tambahVerif"
              data-toggle="tooltip" data-placement="top" title="Verifikasi" data-toggle="modal"><i
                data-feather="check"></i></button>
          </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">Uraian Tugas</a></p>
                    <span class="tx-12 tx-color-03">{{$d->uraian}}</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">Pembimbing</a></p>
                    <span class="tx-12 tx-color-03">{{$d->penelitian->user->nama}}</span>
                  </div>
                  <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">Batas Waktu</a></p>
                    <span
                      class="tx-12 tx-color-03">{{carbon\carbon::parse($d->batas_pengerjaan)->translatedFormat('d F Y')}}</span>
                  </div>
                </div>
              </div>
            </div>
            @if($d->jobdesk_peneliti)
            <div class="card card-body mg-t-10">
              <div class="row">
                <div class="col-md-6">
                  <p> <b>file upload:</b> </p>
                  <p>Uraian : {{$d->jobdesk_peneliti->uraian}}</p>
                  <p>Tanggal Upload:
                    {{carbon\carbon::parse($d->jobdesk_peneliti->created_at)->translatedFormat('d F Y')}}
                    @if(carbon\carbon::parse($d->jobdesk_peneliti->created_at)->translatedFormat('Ymd') <=
                      carbon\carbon::parse($d->batas_waktu)->translatedFormat('Ymd')) <span class="text-primary">
                        (Tepat Waktu)</span> @else <span class="text-danger"> (Terlambat)</span> @endif</p>
                </div>
                <div class="col-md-6">
                  <p>Status : @if($d->status == 0 ) Belum di Verifikasi @elseif($d->status == 1) Telah di Verifikasi
                    @else Revisi @endif</p>
                  <br>
                  @if($d->catatan)
                  <div class="alert alert-danger">
                    <p>Catatan : </p>
                    <p>{{$d->catatan}}</p>
                  </div>
                  @endif
                </div>
              </div>
              <div class="btn-group" role="group" aria-label="Basic example">
                <p>
                  <a href="{{asset('lampiran/jobdesk/'. $d->jobdesk_peneliti->file)}}"
                    class="btn btn-success btn-icon text-white" target="_blank"><i data-feather="paperclip"></i> File
                  </a>
                </p>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

<!-- Modal Nilai Revisi-->
<div class="modal fade bd-example-modal-lg" id="modalJob" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Jobdesk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{Route('penelitianJobdeskStore')}}" method="post" enctype="multipart/form-data" id="formRevisi">
          <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
          <input type="hidden" name="penelitian_id" id="penelitian_id" value="{{$data->id}}">
          <div class="form-group">
            <label for="">Uraian </label>
            <textarea class="form-control" name="uraian" id="uraian"></textarea>
          </div>
          <div class="form-group">
            <label for="">Batas Pengerjaan </label>
            <input type="date" name="batas_pengerjaan" id="batas_pengerjaan" class="form-control" min="{{carbon\carbon::now()->translatedFormat('Y-m-d')}}">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-secondary"> <i class="far fa-save"></i> Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Nilai Perbaikan-->
<div class="modal fade bd-example-modal-lg" id="modalVerif" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Verifikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{Route('penelitianJobdeskUpdate')}}" method="post" enctype="multipart/form-data"
          id="formPerbaikan">
          @csrf
          @method('PUT')
          <input type="hidden" name="uuid" value="" id="uuid">
          <div class="form-group">
            <label for="Nama">Status</label>
            <select name="status" id="status" class="form-control">
              <option value="0">Pending</option>
              <option value="1">Disetujui</option>
              <option value="2">Revisi</option>
            </select>
          </div>
          <div class="" id="catatanform">
            <div class="form-group">
              <label for="Nama">Catatan</label>
              <textarea name="catatan" id="catatan" class="form-control"></textarea>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn " data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-info"> <i class="far fa-save"></i> Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')
<script>
  $("#tambahJob").click(function(){
    $('#modalJob').modal('show');
  });

  $(".tambahVerif").click(function(){
    $('#catatanform').hide();
    var uuid = $(this).data("id");
    var status = $(this).data("status");
    $('#modalVerif').modal('show');
    $('#status').val(status);
    $('#uuid').val(uuid);
  });

  $(function(){
        'use strict'

        $('#dataTable').DataTable({
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });
      });

      $('#status').on('change',function(){
            let status = $('#status').val();
            if(status == 1){
                $('#tanggalform').show();
                $('#catatanform').hide();
                $('#catatanform').text("");

            }else if(status == 2){
                $('#tanggalform').hide();
                $('#catatanform').show();
            }else{
                $('#tanggalform').hide();
                $('#catatanform').text("");
                $('#catatanform').hide();
            }

      });

      function Hapus(uuid, nama) {
        Swal.fire({
        title: 'Anda Yakin?',
        text: " Menghapus Jobdesk '" + nama ,        
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.value) {
          url = '{{route("penelitianJobdeskDestroy",'')}}';
          window.location.href =  url+'/'+uuid ;
        }
      })
    }
</script>
@endsection