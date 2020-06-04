@extends('layouts.pembimbing')
@section('content')
@push('styles')
    <link href="{{ asset('admin/assets/css/dashforge.profile.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/assets/css/dashforge.demo.css')}}">
@endpush
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="#">Profil user</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil User </li>
          </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Profil User </h4>
      </div>
      <div class="d-none d-md-block">
        <a class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5" href="#modal2" data-toggle="modal"><i
            data-feather="edit" class="wd-10 mg-r-5"></i> Ubah Data</a>
      </div>
    </div>
<div class="content content-fixed content-profile mg-t-0">
      <div class="container pd-x-0 pd-lg-x- pd-xl-x-0">
        <div class="media d-block d-lg-flex">
           <div class="col-md-12">
           <div class="card">
              <div class="card-body pd-t-30">
                <div class="row">
                  <div class="col-md-2">
                    <div class="avatar avatar-xxl avatar-online"><img src="{{asset('admin/assets/img/placehold.jpg')}}" class="rounded-circle" alt=""></div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">Nama</a></p>
                    <span class="tx-12 tx-color-03">{{Auth::user()->nama}}</span>
                  </div>
                  <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">NIP</a></p>
                    <span class="tx-12 tx-color-03">{{Auth::user()->data_personal->NIP}}</span>
                  </div>
                  <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">Jabatan</a></p>
                    <span class="tx-12 tx-color-03">{{Auth::user()->data_personal->jabatan}}</span>
                  </div>
                  <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">No Hp</a></p>
                    <span class="tx-12 tx-color-03">{{Auth::user()->data_personal->no_hp}}</span>
                  </div>
                  </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">Tempat, Tanggal Lahir</a></p>
                    <span class="tx-12 tx-color-03">{{Auth::user()->data_personal->tempat_lahir}}, {{Auth::user()->data_personal->tanggal_lahir}}</span>
                  </div>
                  <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">Alamat</a></p>
                    <span class="tx-12 tx-color-03">{{Auth::user()->data_personal->alamat}}</span>
                  </div>
                  <div class="form-group">
                    <p class="tx-medium mg-b-2"><a href="" class="link-01">username</a></p>
                    <span class="tx-12 tx-color-03">{{Auth::user()->username}}</span>
                  </div>
                  </div>
                </div>
              </div>
            </div>
           </div>
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content -->



<!-- modal -->
<div class="modal fade bd-example-modal-lg" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content tx-14">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel2">Tambah Data</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST">
          @csrf
          <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" name="nama" placeholder="Nama" class="form-control" value="{{Auth::user()->nama}}">
          </div>
          <div class="form-group">
            <label for="Nama">NIP</label>
            <input type="text" name="NIP" placeholder="NIP" class="form-control" value="{{Auth::user()->data_personal->NIP}}">
          </div>
          <div class="form-group">
            <label for="Nama">Jabatan</label>
            <input type="text" name="jabatan" placeholder="Jabatan" class="form-control" value="{{Auth::user()->data_personal->jabatan}}">
          </div>
          <div class="form-group">
            <label for="Nama">No hp</label>
            <input type="text" name="no_hp" placeholder="no_hp" class="form-control" value="{{Auth::user()->data_personal->no_hp}}">
          </div>
          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="Nama">Tempat Lahir</label>
                    <input type="text" name="no_hp" placeholder="no_hp" class="form-control" value="{{Auth::user()->data_personal->tempat_lahir}}">
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                    <label for="Nama">Tanggal Lahir</label>
                    <input type="date" name="no_hp" placeholder="no_hp" class="form-control" value="{{Auth::user()->data_personal->tanggal_lahir}}">
                </div>
              </div>
          </div>
          <div class="form-group">
            <label for="Nama">Alamat</label>
            <textarea name="alamat" id="almaat" class="form-control">{{Auth::user()->data_personal->alamat}}</textarea>
          </div>
          <div class="form-group">
            <label for="Nama">Username</label>
            <input type="text" name="username" placeholder="username" class="form-control" value="{{Auth::user()->username}}">
        </div>
        <div class="form-group">
            <label for="Nama">Password</label>
            <input type="password" name="password" placeholder="password" class="form-control">
            <p class="text-danger">Isi Jika ingin merubah password</p>
        </div>
        <div class="form-group">
            <label for="Nama">foto</label>
            <input type="file" name="foto" placeholder="foto" class="form-control">
            <p class="text-danger">Isi Jika ingin merubah foto</p>
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