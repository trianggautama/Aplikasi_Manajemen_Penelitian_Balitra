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
            height: 150px;
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
            <h2 style="margin:0px;">BALITRA BANJARBARU</h2>
            <p style="margin:0px;">Alamat : Guntung Payung, Landasan Ulin, Guntung Payung, Banjar Baru, Kota Banjar Baru, Kalimantan Selatan 70714</p>
        </div>
        <hr>
    </div>

    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;">BIOADATA PEMBIMBING</h2>
            <table>
                <tr>
                    <td width="25%">Nama</td>
                    <td>: {{$data->nama}}</td>
                </tr>
                <tr>
                    <td width="20%">NIP</td>
                    <td>: {{$data->data_personal->NIP}}</td>
                </tr>
                <tr>
                    <td width="20%">Jabatan</td>
                    <td>:  {{$data->data_personal->jabatan}}</td>
                </tr>
                <tr>
                    <td width="20%">Nomor Hp</td>
                    <td>:  {{$data->data_personal->no_hp}}</td>
                </tr>
                <tr>
                    <td width="20%">Alamat</td>
                    <td>:  {{$data->data_personal->alamat}}</td>
                </tr>
                <tr>
                    <td width="20%">Tempat, Tanggal lahir</td>
                    <td>:  {{$data->data_personal->tempat_lahir}}, {{\carbon\carbon::parse($data->data_personal->tanggal_lahir)->format('d-m-Y')}}</td>
                </tr>
            </table>
            <br>
            <br>
            <div class="ttd">
                <h5>
                    <p>Banjarbaru, {{$tgl}}</p>
                </h5>
                <h5>Kepala Balitra</h5>
                <br>
                <br>
                <h5 style="text-decoration:underline;">Nama</h5>
                <h5>NIP.19810405 200612312 1 002</h5>
            </div>
        </div>
    </div>
</body>
</html>