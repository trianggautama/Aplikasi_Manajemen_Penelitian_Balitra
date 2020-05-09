@extends('layouts.depan')

@section('content')
    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <img class="img-responsive wow fadeIn" src="{{asset('depan/images/cta2/cta2-img.png')}}" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
            </div>
        </div>
    </section>
    <section class="">
        <div class="container" style="padding-left:100px;padding-right:100px;">
            <div class="">
            <h2 class="text-center">Input Permohonan Penelitian</h2>
            <br>
            <form action="">
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
                    <label for="">Keperluan</label>
                    <textarea name="alamat" id="" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Lampiran File (Surat Pengantar dll)</label>
                    <input type="file" class="form-control">
                </div>
                <div class="text-right">
                    <button class="btn btn-primary">Kirim Permohonan</button>
                </div>
            </form>
            </div>
        </div>
    </section>
    <br><br>
@endsection
