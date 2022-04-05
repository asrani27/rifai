@extends('layouts.app')
@push('css')

@endpush
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list"></i> Penanganan</h1>
            <p>Selamat Datang, {{Auth::user()->name}}</p>
        </div>

        <ul class="app-breadcrumb breadcrumb side">

        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-sm table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nomor Pengaduan</th>
                                    <th>Judul Pengaduan</th>
                                    <th>Pengawas</th>
                                    <th>Penyidik</th>
                                    <th>Status</th>
                                    <th>Hasil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php
                            $no=1;
                            @endphp
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->tanggal}}</td>
                                    <td>{{$item->nomor}}</td>
                                    <td>{{$item->judul}}</td>
                                    <td>{{$item->pengawas == null ? '':$item->pengawas->nama}}</td>
                                    <td>{{$item->penyidik == null ? '':$item->penyidik->nama}}</td>
                                    <td>{{$item->status == null ? 'menunggu' : ($item->status == 1 ?
                                        'diproses':'selesai')}}</td>
                                    <td>{{$item->hasil}}</td>
                                    <td>
                                        <a href="/superadmin/penanganan/edit/{{$item->id}}"
                                            class="btn btn-sm btn-outline-info">Proses</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

@push('js')
<script type="text/javascript" src="/theme/docs/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/theme/docs/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
@endpush