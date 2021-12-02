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
use App\Models\sambutan;
use App\Models\sejarah;
use App\Models\visi;
use App\Models\iden;
use App\Models\pendidik;
use App\Models\Surat;
use App\Models\siswa;
use App\Models\alumni;
use App\Models\vidio;
use App\Models\weblink;
use App\Models\kontak;
use App\Models\StrukturOrganisasi–m;
class PageController extends Controller
{
    public function pesanPost(Request $req)
    {
        $id = $req->get('id');
        if($id)
        {
            $pesan = Pesan::find($id);
        }else
        {
            $pesan = new Pesan;
        }
        $pesan->nama = $req->nama;
        $pesan->email = $req->email;
        $pesan->isi = $req->isi;
        $pesan->save();
        return redirect()->back()->with('success', 'Data Berhasil Di Simpan');
    }

    public function prestasi()
    {
        $prestasi = Prestasi::paginate(10);
        return view('page.prestasi', ['prestasi' => $prestasi]);
    }

    public function sambutan()
    {
        $sambutan = sambutan::paginate(10);
        return view('page.sambutan-kepala-sekolah', ['sambutan' => $sambutan]);
    }

    public function agenda()
    {
        $agendas = Agenda::latest()->get();
        return view('page.agenda', compact('agendas'));
    }

    public function berita()
    {
        $berita = Berita::all();
        return view('page.berita', ['berita' => $berita]);
    }
    
    public function galeri()
    {
        $galeri = Galeri::all();
        return view('page.galeri', ['galeri' => $galeri]);
    }

    public function vidio()
    {
        $vidio = vidio::paginate(10);
        return view('page.vidio', ['vidio' => $vidio]);
    }

    public function weblink()
    {
        $weblink = weblink::paginate(10);
        return view('welcome', ['weblink' => $weblink]);
    }

    public function kontak()
    {
        $kontak = kontak::paginate(10);
        return view('kontak', ['kontak' => $kontak]);
    }

    public function eskul()
    {
        $eskul = Eskul::all();
        return view('page.eskul', ['eskul' => $eskul]);
    }

    public function lihatBerita($id)
    {
        $berita = Berita::find($id);
        return view('page.detail.lihat-berita', ['berita' => $berita]);
    }

    public function guru()
    {
        $pendidik = pendidik::paginate(10);
        return view('page.direktori-guru', ['pendidik' => $pendidik]);
    }
    
    public function siswa()
    {
        $siswa = siswa::paginate(10);
        return view('page.direktori-siswa', ['siswa' => $siswa]);
    }

    public function alumni()
    {
        $alumni = alumni::paginate(10);
        return view('page.direktori-alumni', ['alumni' => $alumni]);
    }
        public function alumniPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $alumni = alumni::find($id);
        }else{
            $alumni = new alumni;
        }
        if($req->gambar){
        if($req->hasFile('gambar')){
          $foto = $req->file('gambar');
          $filename = time() . '.' . $foto->getClientOriginalExtension();
          $destinationPath = 'image/';              
            $foto->move($destinationPath, $filename);
          }
          $alumni->gambar = $filename;
      }
         $alumni->nama = $req->nama;
         $alumni->kelamin = $req->kelamin;
         $alumni->kegiatan = $req->kegiatan;
         $alumni->tempat_kegiatan = $req->tempat_kegiatan;
         $alumni->tempat_alamat_kegiatan = $req->tempat_alamat_kegiatan;
         $alumni->tahun_lulus = $req->tahun_lulus;
         $alumni->save();
         return redirect()->back()->with('success', 'Data Berhasil Di Simpan');
  }




    public function silabus()
    {
          $surats = Surat::latest()->get();
            return view('page.silabus', compact('surats'));
    }

    
    public function profileSekolah()
    {
        $iden = iden::paginate(10);
        return view('profile-sekolah', ['iden' => $iden]);
      }

    public function sejarah()
    {
        $sejarah = sejarah::paginate(10);
        return view('page.sejarah-sekolah', ['sejarah' => $sejarah]);
        
    }

    public function akreditasi()
    {
        return view('page.akreditasi');
    }

    public function visiMisi()
    {

        $visi = visi::paginate(10);
        return view('page.visi-misi', ['visi' => $visi]);
         }

    public function strukturOrganisasi()
    {
        $strukturs = StrukturOrganisasi–m::paginate(10);
        return view('page.struktur-organisasi', ['strukturs' => $strukturs]);
       
    }

    public function nilaiOnline()
    {
        $nilais = Siswa::latest()->get();
        return view('page.nilai-online', compact('nilais'));
    }

    public function nilaiOnlineSet($nis)
    {
        $nilai = Nilai::where('nis', $nis)->get();
        return view('page.nilai-online-set', compact('nilai'));
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::orderBy('created_at', 'asc')->get();
        return view('page.pengumuman', compact('pengumuman'));
    }

    public function intrakulikuler()
    {
        $intrakulikuler = instrakulikuler::where('status', 'intrakulikuler')->get();
        return view('page.intrakulikuler', compact('intrakulikuler'));
    }

    public function ekstrakulikuler()
    {
        $ekstrakulikuler = esksrakulikuler::where('status', 'ekstrakulikuler')->get();
        return view('page.ekstrakulikuler', compact('ekstrakulikuler'));
    }
}
