@extends('layouts.pembimbing')

@section('content')
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="#">Penilaian Penelitian A</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Data Penilaian Penelitian A</h4>
      </div>
      <div class="d-none d-md-block">
        <a href="{{Route('penelitianCetak')}}" class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"
          target="_blank"><i data-feather="printer" class="wd-10 mg-r-5"></i> Cetak</a>
      </div>
    </div>

    <div class="row row-xs">
      <div class="col-md-12 col-xl-12 mg-t-10">
        <div class="card card-body ">
          <div data-label="Example" class="df-example demo-table">
            <table id="dataTable" class="table text-center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>uraian</th>
                  <th>Nilai</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>uraian Penilaian A ?</td>
                  <td>0</td>
                  <td>
                    <button id="tambahVerif" data-status="" data-id=""
                        class="btn btn-success btn-icon" data-toggle="tooltip" data-placement="top" title="Verifikasi"
                        data-toggle="modal"><i data-feather="check"></i> input Nilai</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- df-example -->
        </div>
      </div>
    </div><!-- row -->
  </div><!-- container -->
</div>

<!-- Modal Nilai Perbaikan-->
<div class="modal fade bd-example-modal-lg" id="modalVerif" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal Verif</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{Route('penelitianJobdeskUpdate')}}" method="post" enctype="multipart/form-data"
          id="formPerbaikan">
          @csrf
          <div class="" id="catatanform">
            <div class="form-group">
              <label for="Nama">Nilai</label>
              <input type="number" class="form-control" name="nilai">
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

  $("#tambahVerif").click(function(){
    $('#modalVerif').modal('show');
  });

</script>
@endsection