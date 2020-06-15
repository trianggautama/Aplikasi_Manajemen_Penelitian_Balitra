@extends('layouts.peneliti')
@section('content')
@push('styles')
<link href="{{asset('admin/lib/summernote/summernote.min.css')}}" rel="stylesheet">
@endpush
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="#">Hasil Penelitian</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hasil Penelitian </li>
          </ol>
        </nav>
      </div>
      <div class="d-none d-md-block">
      <a class="btn btn-sm pd-x-10 btn-primary btn-uppercase mg-l-5" href="#"><i   data-feather="edit-3" class="wd-10 mg-r-5"></i> Edit</a>
        <a class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5" href="#modal2" data-toggle="modal"><i
            data-feather="plus" class="wd-10 mg-r-5"></i> tambah Laporan penelitian</a>
      </div>
    </div>
    <div class="row row-xs">
      <div class="col-md-12 col-xl-12 mg-t-10">
        <div class="card card-body ">
            <h4>Rincian Penelitian</h4>
            <hr>
        <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <p class="tx-medium mg-b-2"><a href="" class="link-01">Nama</a></p>
                  <span class="tx-12 tx-color-03">{{$data->peneliti->user->nama}}</span>
                </div>
                <div class="form-group">
                  <p class="tx-medium mg-b-2"><a href="" class="link-01">NIK</a></p>
                  <span class="tx-12 tx-color-03">{{$data->peneliti->NIK}}</span>
                </div>
                <div class="form-group">
                  <p class="tx-medium mg-b-2"><a href="" class="link-01">Telepon</a></p>
                  <span class="tx-12 tx-color-03">{{$data->peneliti->no_hp}}</span>
                </div>
                <div class="form-group">
                  <p class="tx-medium mg-b-2"><a href="" class="link-01">Alamat</a></p>
                  <span class="tx-12 tx-color-03">{{$data->peneliti->alamat}}</span>
                </div>
                <div class="form-group">
                  <p class="tx-medium mg-b-2"><a href="" class="link-01">Tempat, tanggal lahir</a></p>
                  <span class="tx-12 tx-color-03">{{$data->peneliti->tempat_lahir}},
                    {{carbon\carbon::parse($data->peneliti->tanggal_lahir)->translatedFormat('d F Y')}}</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <p class="tx-medium mg-b-2"><a href="" class="link-01">Pembimbing penelitian</a></p>
                  <span class="tx-12 tx-color-03">{{$data->user->nama}}</span>
                </div>
                <div class="form-group">
                  <p class="tx-medium mg-b-2"><a href="" class="link-01">Objek Penelitian</a></p>
                  <span class="tx-12 tx-color-03">{{$data->objek_penelitian->uraian}}</span>
                </div>
                  <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">Uraian Penelitian</a></p>
                    <span class="tx-12 tx-color-03">{{$data->uraian}}</span>
                </div>
                <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">Estimasi</a></p>
                    <span class="tx-12 tx-color-03">{{$data->estimasi}} Hari Kerja</span>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div><!-- row -->

    <div class="row row-xs">
      <div class="col-md-12 col-xl-12 mg-t-10">
        <div class="card card-body ">
            <h4>Laporan Hasil Penelitian</h4>
            <hr>
        <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <p class="tx-medium mg-b-2"><a href="" class="link-01">Judul Laporan</a></p>
                  <span class="tx-12 tx-color-03">Judul Laporan</span>
                </div>
                <div class="form-group">
                  <p class="tx-medium mg-b-2"><a href="" class="link-01">Waktu Upload</a></p>
                  <span class="tx-12 tx-color-03">1 juli 2020</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <p class="tx-medium mg-b-2"><a href="" class="link-01">file</a></p>
                  <span class="tx-12 tx-color-03"><a href="#"
                      class="btn btn-xs btn-secondary pd-y-5 pd-x-7" target="_blank"><i data-feather="paperclip"></i>
                      File  </a></span>
                </div>
                <div class="alert alert-warning">
                    <h5>Status</h5>
                    <p>Menunggu Persetujuan Pembimbing</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div><!-- row -->
  </div><!-- container -->
</div>

<!-- modal -->
<div class="modal fade bd-example-modal-lg" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content tx-14">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel2">Tambah Laporan Penelitian</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{Route('beritaStore')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="Nama">Judul Berita</label>
            <input type="text" name="judul" class="form-control" placeholder="Judul Berita" required>
          </div>
          <div class="form-group">
            <label for="Nama">foto</label>
            <input type="file" name="foto" class="form-control" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary tx-13" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary tx-13"><i data-feather="save" class="wd-10 mg-r-5"></i>
              Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('admin/lib/summernote/summernote.min.js')}}"></script>
<script>
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
      function Hapus(uuid, judul) {
        Swal.fire({
        title: 'Anda Yakin?',
        text: " Menghapus data berita " + judul ,        
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.value) {
          url = '{{route("beritaDestroy",'')}}';
          window.location.href =  url+'/'+uuid ;
        }
      })
        }
</script>
@endsection