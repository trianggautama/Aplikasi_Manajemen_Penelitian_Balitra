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
        td {height: 30;

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
            <h2 style="margin:0px;">BALITRA BANJARBARU</h2>
            <p style="margin:0px;">Alamat : Guntung Payung, Landasan Ulin, Guntung Payung, Banjar Baru, Kota Banjar Baru, Kalimantan Selatan 70714</p>
        </div>
        <hr>
    </div>

    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;margin:0px;padding:0px;">SK PENELITIAN</h2>
            <p style="text-align:center; margin:0px;padding:0px;">Nomor : {{$data->id}} /BALITTRA/.2000/{{$data->created_at->format('Y')}}</p>
            
            <br>
            <p>Yang bertandatangan dibawah ini Kepala Kasil Balai Penelitian Pertanian Lahan Rawa Kota Banjarbaru menerangkan bahwa :</p>
            <table>
                <tr>
                    <td width="25%">Nama</td>
                    <td>:{{$data->peneliti->user->nama}}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:{{$data->peneliti->NIK}}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>: {{$data->peneliti->tempat_lahir}}, {{\carbon\carbon::parse($data->peneliti->tanggal_lahir)->format('d-m-Y')}}</td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:{{$data->peneliti->pendidikan_terakhir}}</td>
                </tr>
            </table>
            <p>Yang tersebut diatas benar benar telah melakukan penelitian pada BALITTRA Kota Banjarbaru, selama {{$data->estimasi}} hari kerja dengan objek penelitian {{$data->objek_penelitian->nama}},terlebih khusus {{$data->uraian}}</p>
            <br>
            <p>Demikian surat keterangan ini disampaikan, agar dapat digunakan sebagaimana mestinya</p>
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