@extends('layouts.main')

@section('content')
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="#"> User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
          </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">edit user</h4>
      </div>
    </div>

    <div class="row row-xs">
      <div class="col-md-12 col-xl-12 mg-t-10">
        <div class="card card-body ">
          <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="Nama">Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$data->nama}}">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="Nama">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Username"
                    value="{{$data->username}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="Nama">Password</label>
                  <input type="password" name="password" class="form-control">
                  <p class="text-danger">Isi Jika ingin merubah password</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary tx-13" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary tx-13"><i data-feather="save" class="wd-10 mg-r-5"></i>
                Simpan</button>
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