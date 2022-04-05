<?php

namespace App\Http\Controllers;

use App\Pengadu;
use App\Pengawas;
use App\Penyidik;
use App\Pengaduan;
use App\Perusahaan;
use App\JenisPengaduan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class SuperadminController extends Controller
{
    public function beranda()
    {
        $pengaduan = Pengaduan::get()->count();
        $pengadu = Pengadu::get()->count();
        $pengawas = Pengawas::get()->count();
        $penyidik = Penyidik::get()->count();
        return view('superadmin.beranda', compact('pengaduan', 'pengadu', 'pengawas', 'penyidik'));
    }

    //Function Jenis Pengaduan
    public function jenispengaduan()
    {
        $data = JenisPengaduan::orderBy('id', 'DESC')->get();
        return view('superadmin.jenispengaduan.index', compact('data'));
    }
    public function jenispengaduancreate()
    {
        return view('superadmin.jenispengaduan.create');
    }
    public function jenispengaduanstore(Request $req)
    {
        $n = new JenisPengaduan;
        $n->nama = $req->nama;
        $n->save();
        toastr()->success('Berhasil disimpan');
        return redirect('/superadmin/jenispengaduan');
    }
    public function jenispengaduanedit($id)
    {
        $data = JenisPengaduan::find($id);
        return view('superadmin.jenispengaduan.edit', compact('data'));
    }
    public function jenispengaduanupdate(Request $req, $id)
    {
        $n = JenisPengaduan::find($id);
        $n->nama = $req->nama;
        $n->save();
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/jenispengaduan');
    }
    public function jenispengaduandelete($id)
    {
        JenisPengaduan::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function listpengaduan()
    {
        $data = Pengaduan::get();
        return view('superadmin.listpengaduan.index', compact('data'));
    }

    public function listpengaduancreate()
    {
        $jenis = JenisPengaduan::get();
        $pengadu = Pengadu::get();
        $perusahaan = Perusahaan::get();
        return view('superadmin.listpengaduan.create', compact('jenis', 'pengadu', 'perusahaan'));
    }
    public function listpengaduanstore(Request $req)
    {
        $attr = $req->all();
        Pengaduan::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/superadmin/listpengaduan');
    }
    public function listpengaduanedit($id)
    {
        $data = Pengaduan::find($id);
        $jenis = JenisPengaduan::get();
        $pengadu = Pengadu::get();
        $perusahaan = Perusahaan::get();
        return view('superadmin.listpengaduan.edit', compact('data', 'jenis', 'pengadu', 'perusahaan'));
    }
    public function listpengaduanupdate(Request $req, $id)
    {
        $attr = $req->all();
        Pengaduan::find($id)->update($attr);
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/listpengaduan');
    }
    public function listpengaduandelete($id)
    {
        Pengaduan::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function penanganan()
    {
        $data = Pengaduan::get();
        return view('superadmin.penanganan.index', compact('data'));
    }
    public function penangananedit($id)
    {
        $data = Pengaduan::find($id);
        $jenis = JenisPengaduan::get();
        $pengadu = Pengadu::get();
        $perusahaan = Perusahaan::get();
        $penyidik = Penyidik::get();
        $pengawas = Pengawas::get();
        return view('superadmin.penanganan.edit', compact('data', 'jenis', 'pengadu', 'perusahaan', 'penyidik', 'pengawas'));
    }
    public function penangananupdate(Request $req, $id)
    {
        Pengaduan::find($id)->update([
            'penyidik_id' => $req->penyidik_id,
            'pengawas_id' => $req->pengawas_id,
            'status' => $req->status,
            'hasil' => $req->hasil,
        ]);
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/penanganan');
    }
    //Function Pengadu
    public function pengadu()
    {
        $data = Pengadu::orderBy('id', 'DESC')->get();
        return view('superadmin.pengadu.index', compact('data'));
    }
    public function pengaducreate()
    {
        return view('superadmin.pengadu.create');
    }
    public function pengadustore(Request $req)
    {
        $attr = $req->all();
        Pengadu::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/superadmin/pengadu');
    }
    public function pengaduedit($id)
    {
        $data = Pengadu::find($id);
        return view('superadmin.pengadu.edit', compact('data'));
    }
    public function pengaduupdate(Request $req, $id)
    {
        $attr = $req->all();
        Pengadu::find($id)->update($attr);
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/pengadu');
    }
    public function pengadudelete($id)
    {
        Pengadu::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function pengawas()
    {
        $data = Pengawas::get();
        return view('superadmin.pengawas.index', compact('data'));
    }
    public function pengawascreate()
    {
        return view('superadmin.pengawas.create');
    }
    public function pengawasstore(Request $req)
    {
        $attr = $req->all();
        Pengawas::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/superadmin/pengawas');
    }
    public function pengawasedit($id)
    {
        $data = Pengawas::find($id);
        return view('superadmin.pengawas.edit', compact('data'));
    }
    public function pengawasupdate(Request $req, $id)
    {
        $attr = $req->all();
        Pengawas::find($id)->update($attr);
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/pengawas');
    }
    public function pengawasdelete($id)
    {
        Pengawas::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function penyidik()
    {
        $data = Penyidik::get();
        return view('superadmin.penyidik.index', compact('data'));
    }
    public function penyidikcreate()
    {
        return view('superadmin.penyidik.create');
    }
    public function penyidikstore(Request $req)
    {
        $attr = $req->all();
        Penyidik::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/superadmin/penyidik');
    }
    public function penyidikedit($id)
    {
        $data = Penyidik::find($id);
        return view('superadmin.penyidik.edit', compact('data'));
    }
    public function penyidikupdate(Request $req, $id)
    {
        $attr = $req->all();
        Penyidik::find($id)->update($attr);
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/penyidik');
    }
    public function penyidikdelete($id)
    {
        Penyidik::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function perusahaan()
    {
        $data = Perusahaan::get();
        return view('superadmin.perusahaan.index', compact('data'));
    }
    public function perusahaancreate()
    {
        return view('superadmin.perusahaan.create');
    }
    public function perusahaanstore(Request $req)
    {
        $attr = $req->all();
        Perusahaan::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/superadmin/perusahaan');
    }
    public function perusahaanedit($id)
    {
        $data = Perusahaan::find($id);
        return view('superadmin.perusahaan.edit', compact('data'));
    }
    public function perusahaanupdate(Request $req, $id)
    {
        $attr = $req->all();
        Perusahaan::find($id)->update($attr);
        toastr()->success('Berhasil diupdate');
        return redirect('/superadmin/perusahaan');
    }
    public function perusahaandelete($id)
    {
        Perusahaan::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function laporan()
    {
        return view('superadmin.laporan.index');
    }

    public function exportpdf(Request $req)
    {
        //dd($req->all());
        $bulan = $req->bulan;
        $tahun = $req->tahun;
        if ($req->jenis == 1) {
            $data = Pengadu::whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get();
            $pdf = PDF::loadView('superadmin.laporan.pdf_pengadu', compact('data', 'bulan', 'tahun'))->setPaper('legal');
            return $pdf->stream();
        } elseif ($req->jenis == 2) {

            $data = Pengaduan::whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get();
            $pdf = PDF::loadView('superadmin.laporan.pdf_pengaduan', compact('data', 'bulan', 'tahun'))->setPaper('legal');
            return $pdf->stream();
        } elseif ($req->jenis == 3) {

            $data = Perusahaan::whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get();
            $pdf = PDF::loadView('superadmin.laporan.pdf_perusahaan', compact('data', 'bulan', 'tahun'))->setPaper('legal');
            return $pdf->stream();
        } elseif ($req->jenis == 4) {

            $data = Pengawas::whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get();
            $pdf = PDF::loadView('superadmin.laporan.pdf_pengawas', compact('data', 'bulan', 'tahun'))->setPaper('legal');
            return $pdf->stream();
        } elseif ($req->jenis == 5) {

            $data = Pengaduan::whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get();
            $pdf = PDF::loadView('superadmin.laporan.pdf_penanganan', compact('data', 'bulan', 'tahun'))->setPaper('legal');
            return $pdf->stream();
        } elseif ($req->jenis == 6) {

            $data = Penyidik::whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get();
            $pdf = PDF::loadView('superadmin.laporan.pdf_penyidik', compact('data', 'bulan', 'tahun'))->setPaper('legal');
            return $pdf->stream();
        }
    }
}
