@extends('layouts.main')

@section('content')
<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Penelitian</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Edit Penelitian</h4>
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
            <label for="Nama">Pembimbing</label>
            <select name="" id="" class="form-control">
                <option value="">-- pilihan ambil dari pembimbing --</option>
                <option value="">John Doe </option>
            </select>
          </div>
          <div class="form-group">
            <label for="Nama">Objek Penelitian</label>
            <select name="" id="" class="form-control">
                <option value="">-- pilihan ambil dari objek Penelitian --</option>
                <option value="">Jagung </option>
            </select>
          </div>
            <div class="form-group">
                <label for="Nama">Uraian</label>
                <textarea name="uraian" id="" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="Nama">Estimasi (Hari Kerja)</label>
                <input type="number" name="password" class="form-control" >
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