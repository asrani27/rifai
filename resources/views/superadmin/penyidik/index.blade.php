@extends('layouts.app')
@push('css')

@endpush
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list"></i> Penyidik</h1>
            <p>Selamat Datang, {{Auth::user()->name}}</p>
        </div>

        <ul class="app-breadcrumb breadcrumb side">
            <li><a href="/superadmin/penyidik/create" class="btn btn-primary"> <i class="fa fa-home fa-plus"></i>
                    Tambah Data</a></li>
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
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Telp</th>
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
                                    <td>{{$item->nip}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->telp}}</td>
                                    <td>
                                        <a href="/superadmin/penyidik/edit/{{$item->id}}"
                                            class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="/superadmin/penyidik/delete/{{$item->id}}"
                                            class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Yakin ingin di hapus?');">Hapus</a>
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