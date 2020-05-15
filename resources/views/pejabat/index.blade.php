@extends('layouts.pejabat')

@section('content')
<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Pejabat</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Beranda Pejabat Struktural</h4>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="mail" class="wd-10 mg-r-5"></i> Email</button>
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer" class="wd-10 mg-r-5"></i> Print</button>
              <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="file" class="wd-10 mg-r-5"></i> Generate Report</button>
            </div>
          </div>

          <div class="row row-xs">
            <div class="col-md-12 col-xl-12 mg-t-10">
            <div class="card card-body ht-lg-100">
                <div class="media">
                  <span class="tx-color-04"><i data-feather="download" class="wd-60 ht-60"></i></span>
                  <div class="media-body mg-l-20">
                    <h6 class="mg-b-10">Selamat Datang</h6>
                    <p class="tx-color-03 mg-b-0">Pejabat Struktural</p>
                  </div>
                </div><!-- media -->
              </div>
            </div>
          </div><!-- row -->
        </div><!-- container -->
      </div>
@endsection
