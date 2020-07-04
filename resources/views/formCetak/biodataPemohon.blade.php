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
        }
        th {
            background-color: darkslategray;
            text-align: center;
            color: aliceblue;
        }
        td {
            height:30px !important;
        }
        br {
            margin-bottom: 5px !important;
        }
        .judul {
            text-align: center;
        }
        .header {
            margin-bottom: 0px;
            text-align: center;
            height: 50px;
            padding: 0px;
        }
        .pemko {
            width: 70px;
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
        @page { size: 215 mm 230 mm ; }

    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img class="pemko" src="depan/images/logo.png">
        </div>
        <div class="headtext">
            <h2 style="margin:0px;">Balai Penelitian Pertanian Lahan Rawa (BALITTRA)</h2>
            <p style="margin:0px;">Alamat : Jalan Kebun Karet,Loktabat Utara,Banjarbaru,Kalimantan Selatan.Telp: 0511-4772534,4773034 Kode Pos: 70712</p>
        </div>
    </div>
    <hr>

    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;">BIOADATA PEMOHON</h2>
            <table>
                <tr>
                    <td width="25%">Nama</td>
                    <td>: {{$data->user->nama}}</td>
                </tr>
                <tr>
                    <td width="20%">NIP</td>
                    <td>: {{$data->NIK}}</td>
                </tr>
                <tr>
                    <td width="20%">Nomor Hp</td>
                    <td>:  {{$data->no_hp}}</td>
                </tr>
                <tr>
                    <td width="20%">Alamat</td>
                    <td>: {{$data->alamat}}</td>
                </tr>
                <tr>
                    <td width="20%">Tempat, Tanggal lahir</td>
                    <td>: {{$data->tempat_lahir}},
                    {{carbon\carbon::parse($data->tanggal_lahir)->translatedFormat('d F Y')}}</td>
                </tr>
                <tr>
                    <td width="20%">Pendidikan Terakhir</td>
                    <td>:{{$data->pendidikan_terakhir}}</td>
                </tr>
                <tr>
                    <td width="20%">objek Penelitian</td>
                    <td>: {{$data->objek_penelitian->nama}}</td>
                </tr>
                <tr>
                    <td width="20%">Keperluan</td>
                    <td>: {{$data->keperluan}}</td>
                </tr>
                <tr>
                    <td width="20%">Tanggal Permohonan</td>
                    <td>: {{carbon\carbon::parse($data->created_at)->translatedFormat('d F Y')}}</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <div class="ttd">
                <h5>
                    <p style="margin:0px">Banjarbaru, {{$tgl}}</p>
                </h5>
                <h5 style="margin:0px;">Kepala Balitra</h5>
                <br>
                <br>
                <h5 style="text-decoration:underline; margin:0px;">{{$pejabat->nama}}</h5>
                <h5 style="margin:0px">NIP.{{$pejabat->data_personal->NIP}}</h5>
            </div>
        </div>
    </div>
</body>
</html>