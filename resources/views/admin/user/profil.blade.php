@extends('layouts.main')
@section('content')
@push('styles')
    <link href="{{ asset('admin/assets/css/dashforge.profile.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/assets/css/dashforge.demo.css')}}">
@endpush
<h3 class="mg-l-40">ini kena aja di gawi nunggu prossesnya tuntung brtaan</h3>
<div class="content content-fixed content-profile mg-t-0">
      <div class="container pd-x-0 pd-lg-x- pd-xl-x-0">
        <div class="media d-block d-lg-flex">
          <div class="profile-sidebar pd-lg-r-25">
            <div class="row">
              <div class="col-sm-3 col-md-2 col-lg">
                <div class="avatar avatar-xxl avatar-online"><img src="{{asset('admin/assets/img/placehold.jpg')}}" class="rounded-circle" alt=""></div>
              </div><!-- col -->
              <div class="col-sm-8 col-md-7 col-lg mg-t-20 mg-sm-t-0 mg-lg-t-25">
                <h5 class="mg-b-2 tx-spacing--1">Fen Chiu Mao</h5>
                <p class="tx-color-03 mg-b-25">@fenchiumao</p>
                <div class="d-flex mg-b-25">
                  <button class="btn btn-xs btn-white flex-fill ">Message</button>
                  <button class="btn btn-xs btn-primary flex-fill mg-l-10">Follow</button>
                </div>

                <p class="tx-13 tx-color-02 mg-b-25">Redhead, Innovator, Saviour of Mankind, Hopeless Romantic, Attractive 20-something Yogurt Enthusiast... <a href="">Read more</a></p>

              </div><!-- col -->
              <div class="col-sm-6 col-md-5 col-lg mg-t-10">
                <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Contact Information</label>
                <ul class="list-unstyled profile-info-list">
                  <li><i data-feather="briefcase"></i> <span class="tx-color-03">Bay Area, San Francisco, CA</span></li>
                  <li><i data-feather="home"></i> <span class="tx-color-03">Westfield, Oakland, CA</span></li>
                  <li><i data-feather="smartphone"></i> <a href="">(+1) 012 345 6789</a></li>
                  <li><i data-feather="phone"></i> <a href="">(+1) 987 654 3201</a></li>
                  <li><i data-feather="mail"></i> <a href="">me@fenchiumao.me</a></li>
                </ul>
              </div><!-- col -->
            </div><!-- row -->

          </div><!-- profile-sidebar -->
          <div class="media-body mg-t-40 mg-lg-t-0 pd-lg-x-10">
        <div data-label="Example" class="df-example mg-b-20">
          <ul class="nav nav-line" id="myTab5" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home" aria-selected="true">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false">edit Data</a>
            </li>
          </ul>

          <div class="tab-content mg-t-20" id="myTabContent5">
            <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5">
              <h6>Home</h6>
              <p class="mg-b-0">Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore.</p>
            </div>
            <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
              <h6>Profile</h6>
              <p class="mg-b-0">Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat.</p>
            </div>
          </div>
        </div><!-- df-example -->

            <div class="card mg-b-20 mg-lg-b-25">
              <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
                <h6 class="tx-uppercase tx-semibold mg-b-0">Work Experience</h6>
                <nav class="nav nav-with-icon tx-13">
                  <a href="" class="nav-link"><i data-feather="plus"></i> Add New</a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body pd-25">
                <div class="media d-block d-sm-flex">
                  <div class="wd-80 ht-80 bg-ui-04 rounded d-flex align-items-center justify-content-center">
                    <i data-feather="briefcase" class="tx-white-7 wd-40 ht-40"></i>
                  </div>
                  <div class="media-body pd-t-25 pd-sm-t-0 pd-sm-l-25">
                    <h5 class="mg-b-5">Area Sales Manager</h5>
                    <p class="mg-b-3 tx-color-02"><span class="tx-medium tx-color-01">ThemePixels, Inc.</span>, Bay Area, San Francisco, CA</p>
                    <span class="d-block tx-13 tx-color-03">December 2016 - Present</span>

                    <ul class="pd-l-10 mg-0 mg-t-20 tx-13">
                      <li>Reaching the targets and goals set for my area.</li>
                      <li>Servicing the needs of my existing customers.</li>
                      <li>Maintaining the relationships with existing customers for repeat business.</li>
                      <li>Reporting to top managers.</li>
                      <li>Keeping up to date with the products.</li>
                    </ul>
                  </div>
                </div><!-- media -->
              </div>
              <div class="card-footer bg-transparent pd-y-15 pd-x-20">
                <nav class="nav nav-with-icon tx-13">
                  <a href="" class="nav-link">
                    Show More Experiences (4)
                    <i data-feather="chevron-down" class="mg-l-2 mg-r-0 mg-t-2"></i>
                  </a>
                </nav>
              </div><!-- card-footer -->
            </div><!-- card -->

          </div><!-- media-body -->
          <div class="profile-sidebar mg-t-40 mg-lg-t-0 pd-lg-l-25">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg">
                <div class="d-flex align-items-center justify-content-between mg-b-20">
                  <h6 class="tx-13 tx-spacng-1 tx-uppercase tx-semibold mg-b-0">Stories</h6>
                  <a href="" class="link-03">Watch All</a>
                </div>
                <ul class="list-unstyled media-list mg-b-15">
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                      <span class="tx-12 tx-color-03">2 hours ago</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-primary">I</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-0"><a href="" class="link-01">Isidore Dilao</a></p>
                      <span class="tx-12 tx-color-03">5 hours ago</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-offline"><img src="../../assets/img/img8.jpg" class="rounded-circle" alt=""></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-0"><a href="" class="link-01">Angeline Mercado</a></p>
                      <span class="tx-12 tx-color-03">1 day ago</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-info">K</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-0"><a href="" class="link-01">Kirby Avendula</a></p>
                      <span class="tx-12 tx-color-03">2 days ago</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                      <span class="tx-12 tx-color-03">2 hours ago</span>
                    </div>
                  </li>
                </ul>
                <a href="" class="link-03 d-inline-flex align-items-center">See more stories <i class="icon ion-ios-arrow-down mg-l-5 mg-t-3 tx-12"></i></a>
              </div><!-- col -->
              <div class="col-sm-6 col-md-5 col-lg mg-t-40 mg-sm-t-0 mg-lg-t-40">
                <div class="d-flex align-items-center justify-content-between mg-b-20">
                  <h6 class="tx-13 tx-spacing-1 tx-uppercase tx-semibold mg-b-0">People Also Viewed</h6>
                </div>
                <ul class="list-unstyled media-list mg-b-15">
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-online"><img src="../../assets/img/img6.jpg" class="rounded-circle" alt=""></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Roy Recamadas</a></p>
                      <span class="tx-12 tx-color-03">UI/UX Designer &amp; Developer</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-offline"><img src="../../assets/img/img7.jpg" class="rounded-circle" alt=""></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Raymart Serencio</a></p>
                      <span class="tx-12 tx-color-03">Full-Stack Developer</span>
                    </div>
                  </li>
                </ul>
              </div><!-- col -->

            </div><!-- row -->
          </div><!-- profile-sidebar -->
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content -->

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