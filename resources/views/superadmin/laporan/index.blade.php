@extends('layouts.app')
@push('css')

@endpush
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list"></i> Laporan</h1>
            <p>Selamat Datang, {{Auth::user()->name}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <form method="post" action="/superadmin/laporan">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Bulan</span>
                                        </div>
                                        <select class="form-control" name="bulan">
                                            <option value="">-pilih-</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Tahun</span>
                                        </div>
                                        <select class="form-control" name="tahun">
                                            <option value="">-pilih-</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Jenis
                                                Laporan</span>
                                        </div>
                                        <select class="form-control" name="jenis">
                                            <option value="">-pilih-</option>
                                            <option value="1">Pengadu</option>
                                            <option value="2">Pengaduan</option>
                                            <option value="3">Perusahaan</option>
                                            <option value="4">Pengawas</option>
                                            <option value="5">Penanganan</option>
                                            <option value="6">Penyidik</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button type="submit" class="btn btn-primary" type="submit">Export PDF</button>
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