@extends('layouts.app')
@push('css')

@endpush
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list"></i> Pengaduan</h1>
            <p>Selamat Datang, {{Auth::user()->name}}</p>
        </div>

        <ul class="app-breadcrumb breadcrumb side">
            <li><a href="/superadmin/listpengaduan" class="btn btn-primary"> <i class="fa fa-home fa-arrow-left"></i>
                    Kembali</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <form method="post" action="/superadmin/penanganan/edit/{{$data->id}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Tanggal
                                                Surat</span>
                                        </div>
                                        <input class="form-control" type="date" placeholder="" name='tanggal'
                                            value="{{\Carbon\Carbon::parse($data->tanggal)->format('Y-m-d')}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">No Surat</span>
                                        </div>
                                        <input class="form-control" type="text" placeholder="" name='nomor'
                                            value="{{$data->nomor}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Jenis
                                                Pengaduan</span></div>
                                        <select name="jenis_id" class="form-control" disabled>
                                            <option value="">-pilih-</option>
                                            @foreach ($jenis as $item)
                                            <option value="{{$item->id}}" {{$data->jenis_id == $item->id ?
                                                'selected':''}}>{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Judul
                                                Pengaduan</span>
                                        </div>
                                        <input class="form-control" type="text" placeholder="" name='judul'
                                            value="{{$data->judul}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Isi
                                                Pengaduan</span>
                                        </div>
                                        <textarea class="form-control" name="isi" rows="4"
                                            readonly>{{$data->isi}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span
                                                class="input-group-text">Perusahaan</span>
                                        </div>
                                        <select name="perusahaan_id" class="form-control" disabled>
                                            <option value="">-pilih-</option>
                                            @foreach ($perusahaan as $item)
                                            <option value="{{$item->id}}" {{$data->perusahaan_id == $item->id ?
                                                'selected':''}}>{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Pengadu</span>
                                        </div>
                                        <select name="pengadu_id" class="form-control" disabled>
                                            <option value="">-pilih-</option>
                                            @foreach ($pengadu as $item)
                                            <option value="{{$item->id}}" {{$data->pengadu_id == $item->id ?
                                                'selected':''}}>{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Penyidik</span>
                                        </div>
                                        <select name="penyidik_id" class="form-control" required>
                                            <option value="">-pilih-</option>
                                            @foreach ($penyidik as $item)
                                            <option value="{{$item->id}}" {{$data->penyidik_id == $item->id ?
                                                'selected':''}}>{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Pengawas</span>
                                        </div>
                                        <select name="pengawas_id" class="form-control" required>
                                            <option value="">-pilih-</option>
                                            @foreach ($pengawas as $item)
                                            <option value="{{$item->id}}" {{$data->pengawas_id == $item->id ?
                                                'selected':''}}>{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Status</span>
                                        </div>
                                        <select name="status" class="form-control">
                                            <option value="" {{$data->status == null ? 'selected':''}}>Menunggu</option>
                                            <option value="1" {{$data->status == 1 ? 'selected':''}}>Proses</option>
                                            <option value="2" {{$data->status == 2 ? 'selected':''}}>Selesai</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Hasil
                                                Penanganan</span>
                                        </div>
                                        <textarea class="form-control" name="hasil" rows="4"
                                            required>{{$data->hasil}}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button type="submit" class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
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