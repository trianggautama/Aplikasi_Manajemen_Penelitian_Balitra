@extends('layouts.main')

@section('content')
<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Peneliti</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Edit Peneliti</h4>
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
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Pendidikan Terakhir</label>
                    <select name="pendidikan" id="" class="form-control">
                        <option value="">-- pilih pendidikan terakhir --</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="SMA">SMA</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                    <div class="form-group">
                        <label for="Nama">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <p class="text-danger">Isi jika ingin mengubah Username</p>
                    </div>
                    <div class="form-group">
                        <label for="Nama">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="username">
                        <p class="text-danger">Isi jika ingin mengubah Password</p>
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