@extends('layouts.main')

@section('content')
<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Permohonan</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Permohonan Penelitian</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Permohonan Penelitian</h4>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer" class="wd-10 mg-r-5"></i> Print</button>
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
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Objek Penelitian</th>
                    <th>Keperluan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Agus</td>
                    <td>085912121312</td>
                    <td>Penelitian Konsentrasi pupuk</td>
                    <td>-</td>
                    <td>
                        <a href="{{Route('permohonanDetail')}}" class="btn btn-default btn-secondary btn-sm p-2">
                            <i data-feather="info"></i>
                        </a>
                        <button type="button" class="btn btn-primary btn-icon">
                            <i data-feather="edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-icon">
                            <i data-feather="delete"></i>
                        </button>
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