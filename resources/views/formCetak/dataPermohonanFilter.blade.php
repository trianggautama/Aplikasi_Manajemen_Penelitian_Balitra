<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {}
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table,
        th,
        td {
            border: 1px solid #708090;
        }
        th {
            background-color: darkslategray;
            text-align: center;
            color: aliceblue;
        }
        td {}
        br {
            margin-bottom: 5px !important;
        }
        .judul {
            text-align: center;
        }
        .header {
            margin-bottom: 0px;
            text-align: center;
            height: 150px;
            padding: 0px;
        }
        .pemko {
            width: 100px;
        }
        .logo {
            float: left;
            margin-right: 0px;
            width: 15%;
            padding: 0px;
            text-align: right;
        }
        .headtext {
            float: right;
            margin-left: 0px;
            width: 75%;
            padding-left: 0px;
            padding-right: 10%;
        }
        hr {
            margin-top: 10%;
            height: 3px;
            background-color: black;
        }
        .ttd {
            margin-left: 70%;
            text-align: center;
            text-transform: uppercase;
        }
        .text-center{
            text-align:center;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img class="pemko" src="depan/images/logo.png">
        </div>
        <div class="headtext">
            <h2 style="margin:0px;">Balai Penelitian Pertanian Lahan Rawa (BALITTRA)</h2>
            <p style="margin:0px;">Alamat : Jalan Kebun Karet,Loktabat Utara,Banjarbaru,Kalimantan Selatan. Telp: 0511-4772534,4773034 Kode Pos: 70712</p>
        </div>
        <hr>
    </div>

    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;">DATA PERMOHONAN @if($data->first()->status == 1 )  PENDING @elseif($data->first()->status == 2 ) DISETUJUI @else DITOLAK @endif </h2>
            <table id="dataTable" class="table text-center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nomor Telepon</th>
                  <th>Objek Penelitian</th>
                  <th>Keperluan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $d)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$d->user->nama}}</td>
                  <td>{{$d->no_hp}}</td>
                  <td>{{$d->objek_penelitian->nama}}</td>
                  <td>{{$d->keperluan}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <br>
            <br>
            <div class="ttd">
                <h5>
                    <p>Banjarbaru, {{$tgl}}</p>
                </h5>
                <h5>Kepala BALITTRA</h5>
                <br>
                <br>
                <h5 style="text-decoration:underline;">{{$pejabat->nama}}</h5>
                <h5>NIP.{{$pejabat->data_personal->NIP}}</h5>
            </div>
        </div>
    </div>
</body>
</html>