<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Usaha</title>
    <style>
        body {
            font-family:'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #000000;
        }
        .container {
            width: 150mm;
            height: 297mm;
            padding: 0mm;
            box-sizing: border-box;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }
        .header img {
            position: absolute;
            top: 0;
            left: -30px;
            width: 70px; /* Adjust the size as needed */
            height: auto;
        }
        .address {
            text-align: center;
            margin-bottom: 0px;
        }
        .content {
            margin-bottom: 20px;
        }
        .content p, .content ol {
            text-align: left;
        }
        .signature {
            margin-top: 50px;
            text-align: right;
        }
        h2, h3, h4, p {
            margin: 5px 0;
        }
        .h3 {
            padding-bottom: 0px;
            position: relative;
            display: inline-block;
        }
        .h3::after {
            content: "";
            display: block;
            width: 100%;
            margin: 0 auto;
            border-bottom: 1px solid black;
            position: absolute;
            bottom: 0;
            left: 0%;
        }
        .centered {
            text-align: center;
        }
     
        hr {
            border: none;
            height: 2px;
            background: black;
            margin: 0;
        }
        .thick-border {
            border-top: 2px solid black;
            height: 30px;
            position: relative;
        }
        .thick-border::after {
            content: '';
            display: block;
            border-top: 2px solid black;
            position: absolute;
            top: 2px;
            width: 100%;
            height: 3px;
        }
        .signature-name {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
            margin-right: -300px; /* Sesuaikan margin-right untuk menyesuaikan posisi */
}
        
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('assets/img/s.png'))) }}" alt="Logo">
            <h2>PEMERINTAH KABUPATEN KUBU RAYA</h2>
            <h3>KECAMATAN SUNGAI RAYA</h3>
            <h4>DESA SUNGAI AMBANGAH</h4>
        </div>
        <div class="address">
            <p><em>Alamat       : Jalan Karya Desa, RT 001 RW.002, Dusun Karya Desa</em></p>
        </div>
        <div class="centered">
            <div class="thick-border"></div>
            <h3 class="h3">SURAT KETERANGAN IZIN USAHA</h3>
            <p>Nomor: 474 / &nbsp; &nbsp; &nbsp; &nbsp; / Pem</p>
        </div>
        <div class="content">
            <p>Kepala Desa Sungai Ambangah, Kecamatan Sungai Raya, Kabupaten Kubu Raya, menerangkan:</p> <br>
            <table>
                <tr>
                    <td>1. Nama Lengkap</td>
                    <td>:&nbsp;{{$suratusaha->nama}}</td>
                </tr>
                <tr>
                    <td>2. NIK</td>
                    <td>:&nbsp;{{$suratusaha->nik}} </td>
                </tr>
                <tr>
                    <td>3. Tempat Tanggal Lahir</td>
                    <td>:&nbsp;{{$suratusaha->tempat_lahir}},&nbsp;{{ \Carbon\Carbon::parse($suratusaha->tanggal_lahir)->translatedFormat('d-m-Y') }}</td>
                </tr>
                <tr>
                    <td>4. Jenis Kelamin</td>
                    <td>:&nbsp;{{$suratusaha->jenis_kelamin}} </td>
                </tr>
                <tr>
                    <td>5. Kewarganegaraan / Agama</td>
                    <td>:&nbsp;{{$suratusaha->kewarganegaraan}}&nbsp;/&nbsp;{{$suratusaha->agama}}</td>
                </tr>
                <tr>
                    <td>6. Status Kawin</td>
                    <td>:&nbsp;{{$suratusaha->status_perkawinan}} </td>
                </tr>
                <tr>
                    <td>7. Pekerjaan</td>
                    <td>:&nbsp;{{$suratusaha->pekerjaan}} </td>
                </tr>
                <tr>
                    <td>8. Alamat</td>
                    <td>:&nbsp; {{$suratusaha->alamat}}, <br> &nbsp;&nbsp; RT/RW {{$suratusaha->rt}}/{{$suratusaha->rw}}</td>
                </tr>
            </table> <br>
            <p>Berdasarkan dari Keterangan nama tersebut diatas bahwa nama tersebut memiliki usaha dengan keterangan sebagai berikut:</p> <br>
            <table>
                <tr>
                    <td>a. Jenis Usaha</td>
                    <td>:&nbsp;{{$suratusaha->jenis_usaha}}</td>
                </tr>
                <tr>
                    <td>b. Mulai Usaha</td>
                    <td>:&nbsp;{{ \Carbon\Carbon::parse($suratusaha->mulai_usaha)->translatedFormat('d-m-Y') }} </td>
                </tr>
                <tr>
                    <td>c. Status Tempat Usaha</td>
                    <td>:&nbsp;{{$suratusaha->status_usaha}}  &nbsp;</td>
                </tr>
                <tr>
                    <td>d. Ukuran Tempat Usaha</td>
                    <td>:&nbsp;{{$suratusaha->ukuran}}&nbsp;Meter Persegi </td>
                </tr>
                <tr>
                    <td>e. Letak Tempat Usaha</td>
                    <td>:&nbsp;{{$suratusaha->alamat_usaha}}</td>
                </tr>
            </table> 
            <p>Surat keterangan ini diberikan kepada yang bersangkutan untuk melengkapi syarat administrasi.</p>
            <p>Demikianlah surat keterangan usaha ini kami berikan untuk dipergunakan sebagaimana mestinya</p>
        </div>
        <div class="signature">
            <p>Dikeluarkan di : <b>Sungai Ambangah</b></p>
            <p>Pada tanggal : <?php echo date("d-m-Y"); ?></p>
            <br><br><br>
            <p>KEPALA DESA SUNGAI AMBANGAH</p>
            <br>
            <div class="signature-name">SAMSURI</div>
        </div>
    </div>
</body>
</html>
