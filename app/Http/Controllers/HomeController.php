<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\instrakulikuler;
use App\Models\esksrakulikuler;
use App\Models\Eskul;
use App\Models\Galeri;
use App\Models\Pengumuman;
use App\Models\Prestasi;
use App\Models\Kegiatan;
use App\Models\visi;
use App\Models\sejarah;
use App\Models\sarana;
use App\Models\sambutan;
use App\Models\kemitraan;
use App\Models\program;
use App\Models\komite;
use App\Models\identitas;
use App\Models\pendidik;
use App\Models\siswa;
use App\Models\alumni;
use App\Models\StrukturOrganisasi–m;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $galeri = Galeri::count();// <- nu di pake..
        $prestasi = Prestasi::count();
        $eskul = Eskul::count();
        $berita = Berita::count();
        $instrakulikuler = instrakulikuler::count();
        $ekstrakulikuler = esksrakulikuler::count();
        $agenda = Agenda::count();
        $pengumuman = Pengumuman::count();
        $sambutan = sambutan::count();
        $identitas = identitas::count();
        $visi = visi::count();
        $sejarah = sejarah::count();
        $kemitraan = kemitraan::count();
        $program = program::count();
        $komite = komite::count();
        $sarana = sarana::count();
        $struktur = StrukturOrganisasi–m::count();
        $alumni = alumni::count();
        $siswa = siswa::count();
        $pendidik = pendidik::count();
        return view('home', compact('galeri','siswa','alumni','pendidik','pengumuman', 'prestasi','eskul','berita','instrakulikuler','ekstrakulikuler','agenda','sambutan','identitas', 'visi','sejarah','kemitraan','program','komite','sarana','struktur'));
    }
   
}