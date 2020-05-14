@extends('layouts.main')

@section('content')
<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">fasilitas</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Fasilitas Penelitian</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Fasilitas Penelitian</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="col-md-12 col-xl-12 mg-t-10">
                <div class="card">
                <div class="card-body">
                <form action="" method="post">
                    {{method_field('PUT') }}
                    @csrf
                    <div class="form-group">
                      <label for="Nama">Nama Alat</label>
                      <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                      <label for="Nama">Kategori</label>
                      <select name="kategori" id="" class="form-control">
                        <option value="">-- pilih Kategori --</option>
                        <option value="Alat Lab" {{  $data->kategori == "Alat Lab" ? 'selected' : ''}}>Alat Lab</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="Nama">Jumlah</label>
                      <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" value="{{$data->jumlah}}">
                    </div>
                    <div class="form-group">
                      <label for="Nama">Satuan</label>
                      <input type="text" name="satuan" class="form-control" placeholder="satuan" value="{{$data->satuan}}">
                    </div>
                    <div class="form-group">
                      <label for="Nama">keterangan</label>
                      <textarea name="keterangan" id="keterangan" name="keterangan" class="form-control">{{$data->keterangan}}</textarea>
                    </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="button" class="btn btn-secondary tx-13" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary tx-13"><i data-feather="save" class="wd-10 mg-r-5"></i> Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
          </div><!-- row -->
        </div><!-- container -->
      </div>


@endsection
@section('scripts')
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
    </script>
@endsection