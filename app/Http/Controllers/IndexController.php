<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use App\Models\AlasanBanner;
use App\Models\Berita;
use App\Models\Dosen;
use App\Models\OutputLulusan;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $alasan = Alasan::all();
        $alasanBanner = AlasanBanner::all();
        $outputLulusans = OutputLulusan::all();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        return view('index', compact('outputLulusans', 'alasan', 'alasanBanner', 'beritas'));
    }

    public function visimisi()
    {
        $alasan = Alasan::all();
        $alasanBanner = AlasanBanner::all();
        return view('visimisi', compact('alasan', 'alasanBanner'));
    }

    public function profil()
    {
        return view('profil');
    }

    public function beritaDetail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita_detail', compact('berita'));
    }

    public function beritaLainnya()
    {
        $beritas = Berita::all();
        return view('berita_lainnya', compact('beritas'));
    }

    public function outputLulusanDetail($id)
    {
        $outputLulusan = OutputLulusan::findOrFail($id);
        return view('output_lulusan_detail', compact('outputLulusan'));
    }

    public function dosen()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }
    
    public function sifatKayuAnalisaProduk()
    {
        return view('fasilitas.sifatkayuanalisaproduk');
    }

    public function rekayasakayu()
    {
        return view('fasilitas.rekayasakayu');
    }

    public function keteknikan()
    {
        return view('fasilitas.keteknikan');
    }

    public function hasilhutannonkayu()
    {
        return view('fasilitas.hasil-hutan-non-kayu');
    }

    public function akreditasi()
    {
        return view('akreditasi');
    }

    
    public function strukturOrganisasi()
    {
        return view('organisasi.strukturOrganisasi');
    }

    
    public function fasilitasindex()
    {
        return view('fasilitas.index');
    }
}

