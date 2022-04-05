@extends('layouts.app')
@push('css')

@endpush
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list"></i> Data Penyidik</h1>
            <p>Selamat Datang, {{Auth::user()->name}}</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li><a href="/superadmin/penyidik" class="btn btn-primary"> <i class="fa fa-home fa-arrow-left"></i>
                    Kembali</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <form method="post" action="/superadmin/penyidik/edit/{{$data->id}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">NIP</span></div>
                                        <input class="form-control" type="text" placeholder="" name='nip'
                                            value="{{$data->nip}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Nama</span>
                                        </div>
                                        <input class="form-control" type="text" placeholder="" name='nama'
                                            value="{{$data->nama}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Alamat</span>
                                        </div>
                                        <input class="form-control" type="text" placeholder="" name='alamat'
                                            value="{{$data->alamat}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Telp</span>
                                        </div>
                                        <input class="form-control" type="text" placeholder="" name='telp'
                                            value="{{$data->telp}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span
                                                class="input-group-text">Pendidikan</span>
                                        </div>
                                        <input class="form-control" type="text" placeholder="" name='pendidikan'
                                            value="{{$data->pendidikan}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button type="submit" class="btn btn-primary" type="submit">Update</button>
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