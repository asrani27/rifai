@extends('layouts.app')
@push('css')

@endpush
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list"></i> Jenis Pengaduan</h1>
            <p>Selamat Datang, {{Auth::user()->name}}</p>
        </div>

        <ul class="app-breadcrumb breadcrumb side">
            <li><a href="/superadmin/jenispengaduan" class="btn btn-primary"> <i class="fa fa-home fa-arrow-left"></i>
                    Kembali</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <form method="post" action="/superadmin/jenispengaduan/create">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputAmount">Jenis
                                        Pengaduan</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Jenis
                                                Pengaduan</span></div>
                                        <input class="form-control" id="exampleInputAmount" type="text"
                                            placeholder="Jenis Pengaduan" name='nama'>
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