@extends('layouts.main')

@section('content')
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="#">User Data</a></li>
          </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Data User</h4>
      </div>
      <div class="d-none d-md-block">
<<<<<<< HEAD
        <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer"
            class="wd-10 mg-r-5"></i> Cetak</button>
=======
>>>>>>> 23738c9a9b0c80422172c6e9f5a72319c63301c7
        <a class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5" href="#modal2" data-toggle="modal"><i
            data-feather="plus" class="wd-10 mg-r-5"></i> tambah Data</a>
      </div>
    </div>

    <div class="row row-xs">
      <div class="col-md-12 col-xl-12 mg-t-10">
        <div class="card card-body ">
          <div data-label="Example" class="df-example demo-table">
            <table id="dataTable" class="table text-center">
              <thead>
                <tr>
                  <th class="wd-20p">No</th>
                  <th class="wd-25p">Nama</th>
                  <th class="wd-20p">Username</th>
                  <th class="wd-15p">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $d)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$d->nama}}</td>
                  <td>{{$d->username}}</td>
                  <td>
                    <a href="{{Route('userEdit',['uuid'=>$d->uuid])}}" class="btn btn-primary btn-icon">
                      <i data-feather="edit"></i>
                    </a>
                    <button type="button" class="btn btn-danger btn-icon"  onclick="Hapus('{{$d->uuid}}','{{$d->nama}}')">
                      <i data-feather="delete"></i>
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- df-example -->
        </div>
      </div>
    </div><!-- row -->
  </div><!-- container -->
</div>

<!-- modal -->
<div class="modal fade bd-example-modal-lg" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-14">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel2">Tambah Data</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('userStore')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
          </div>
          <div class="form-group">
            <label for="Nama">NIP</label>
            <input type="text" name="NIP" class="form-control" placeholder="NIP" required>
          </div>
          <div class="form-group">
            <label for="Nama">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
          </div>
          <div class="form-group">
            <label for="Nama">No Hp</label>
            <input type="text" name="no_hp" class="form-control" placeholder="No Hp" required>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="Nama">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="Nama">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="Nama">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="ALamat" required>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="Nama">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="Nama">Password</label>
                <input type="password" name="password" class="form-control" placeholder="username" required>
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

      function Hapus(uuid, nama) {
        Swal.fire({
        title: 'Anda Yakin?',
        text: " Menghapus data user '" + nama ,        
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.value) {
          url = '{{route("userDestroy",'')}}';
          window.location.href =  url+'/'+uuid ;
        }
      })
        }
</script>
@endsection