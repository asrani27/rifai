<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="en-us" http-equiv="Content-Language" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Untitled 1</title>
    {{-- <style type="text/css">
        .auto-style1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: x-small;
        }
    </style> --}}
    <style>
        @page {
            margin-top: 80px;
            margin-left: 50px;
        }

        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            /** Extra personal styles **/
            /* background-color: #03a9f4;
            color: white;
            text-align: center; 
            line-height: 35px;*/
        }

        tr,
        th,
            {
            border: 2px solid #000;
            font-size: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }

        td {
            font-weight: bold;
            border: 2px solid #000;
            font-size: 10px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            font-size: 8px;
            font-family: Arial, Helvetica, sans-serif;
            /** Extra personal styles **/
            /* background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 35px; */
        }
    </style>
</head>

<body>
    <header>
        <table border="0">
            <tr>
                <td style="border: 0px;">
                    <img src="https://kalselprov.go.id/assets/images/logo-kalsel.png" width="40px" height="50px">
                </td>
                <td style="border: 0px;" valign="top">
                    <span style="font-size: 16px;"><strong>DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI
                            KALIMANTAN SELATAN</strong></span><strong><br />Jl. Jend. A. Yani Km 6. No 23 Banjarmasin,
                        Kode Pos
                        70249, Telp : 0511-3260231
                </td>
            </tr>
        </table>
        <hr>
        <p><span class="auto-style1"><strong>LAPORAN PENGADUAN <br />Bulan :
                    {{\Carbon\Carbon::createFromFormat('m/Y',$bulan.'/'.$tahun)->translatedFormat('F')}}
                    {{$tahun}}</strong></span></p>
    </header>
    <footer>
        <hr>
        <p>Tanggal Cetak : {{\Carbon\Carbon::now()->format('d-m-Y H:i:s')}}
        </p>
    </footer>
    <br />
    <br />
    <br />
    <main>
        <table cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tgl Pengaduan</th>
                    <th>Nomor Surat</th>
                    <th>Judul Pengaduan</th>
                    <th>Isi Pengaduan</th>
                    <th>Status</th>
                    <th>Pengadu</th>
                    <th>Perusahaan <br />Yg Di Adukan</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->tanggal}}</td>
                    <td>{{$item->nomor}}</td>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->isi}}</td>
                    <td>{{$item->status == null ? 'menunggu' : ($item->status == 1 ?
                        'diproses':'selesai')}}</td>
                    <td>{{$item->pengadu->nama}}</td>
                    <td>{{$item->perusahaan->nama}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </main>
</body>

</html>