<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\identitas;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\iden;
use App\Models\instrakulikuler;
use App\Models\esksrakulikuler;
use App\Models\Eskul;
use App\Models\Galeri;
use App\Models\Pengumuman;
use App\Models\Prestasi;
use App\Models\Surat;
use App\Models\kontak;
use App\Models\weblink;
use App\Models\StrukturOrganisasi–m;
class AdminController extends Controller
{

      public function surat()
          {
            $surats = Surat::latest()->get();
            return view('pegawai.silabus.index', compact('surats'));
          }

          public function suratAdd()
          {
            return view('pegawai.silabus.create');
          }

          public function suratEdit($id)
          {
            $surat = Surat::find($id);
            return view('pegawai.silabus.edit', compact('surat'));
          }

          public function suratPost(Request $req)
          {
            $id = $req->get('id');
            if($id){
              $surat = Surat::find($id);
            }else{
              $surat = new Surat;
            }
            $surat->judul = $req->judul;
            if($req->keterangan){
              $surat->keterangan = $req->keterangan;
            }

            if($req->file){
              $file = $req->file('file');

              $destinationPath = 'files/surat';
              $filename = $file->getClientOriginalName();
              $upload_success = $req->file('file')->move($destinationPath, $filename);


              $surat->file = $filename;
            }

            $surat->save();
            return redirect()->route('pegawai.silabus.index')->with(['success' => 'Data Berhasil Disimpan!']);
          }

          public function suratDelete($id)
          {
            $surat = Surat::findOrFail($id);
            $surat->delete();

              if($surat){
                  return response()->json([
                      'status' => 'success'
                  ]);
              }else{
                  return response()->json([
                      'status' => 'error'
                  ]);
              }
          }

        //
        
    // Kegiatan Intrakulikuler
    public function intrakulikuler()
    {
      $intrakulikuler = instrakulikuler::latest()->where('status', 'intrakulikuler')->get();
      return view('admin.intrakulikuler.index', compact('intrakulikuler'));
    }

    public function intrakulikulerAdd()
    {
      return view('admin.intrakulikuler.create');
    }

    public function intrakulikulerEdit(instrakulikuler $intrakulikuler)
    {
      return view('admin.intrakulikuler.edit', compact('intrakulikuler'));
    }

    public function intrakulikulerPost(Request $req)
    {
      $id = $req->get('id');
      if($id){
        $intrakulikuler = instrakulikuler::findOrFail($id);
      }else{
        $intrakulikuler = new instrakulikuler;
      }

      $intrakulikuler->title = $req->title;
      $intrakulikuler->tanggal = $req->tanggal;
      
      if($req->image){
        if($req->hasFile('image')){
          $foto = $req->file('image');
          $filename = time() . '.' . $foto->getClientOriginalExtension();
          $destinationPath = 'image/';                
          $foto->move($destinationPath, $filename);
        }
          $intrakulikuler->image = $filename;
      }

      $intrakulikuler->status = 'intrakulikuler';
      $intrakulikuler->save();

      return redirect()->route('admin.intrakulikuler.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function intrakulikulerDelete($id)
    {
      $intrakulikuler = instrakulikuler::find($id);
        $intrakulikuler->delete();
      
        return redirect('/admin/intrakulikuler');

        if($intrakulikuler){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }

    // Kegiatan Ekstrakulikuler
    public function ekstrakulikuler()
    {
      $ekstrakulikuler = esksrakulikuler::latest()->where('status', 'ekstrakulikuler')->get();
      return view('admin.ekstrakulikuler.index', compact('ekstrakulikuler'));
    }

    public function ekstrakulikulerAdd()
    {
      return view('admin.ekstrakulikuler.create');
    }

    public function ekstrakulikulerEdit(esksrakulikuler $ekstrakulikuler)
    {
      return view('admin.ekstrakulikuler.edit', compact('ekstrakulikuler'));
    }

    public function ekstrakulikulerPost(Request $req)
    {
      $id = $req->get('id');
      if($id){
        $ekstrakulikuler = esksrakulikuler::findOrFail($id);
      }else{
        $ekstrakulikuler = new esksrakulikuler;
      }

      $ekstrakulikuler->title = $req->title;
      $ekstrakulikuler->tanggal = $req->tanggal;
      
      if($req->image){
        if($req->hasFile('image')){
          $foto = $req->file('image');
          $filename = time() . '.' . $foto->getClientOriginalExtension();
          $destinationPath = 'image/';                
          $foto->move($destinationPath, $filename);
        }
          $ekstrakulikuler->image = $filename;
      }

      $ekstrakulikuler->status = 'ekstrakulikuler';
      $ekstrakulikuler->save();

      return redirect()->route('admin.ekstrakulikuler.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

  public function ekstrakulikulerDelete($id)
    {
      $ekstrakulikuler = esksrakulikuler::find($id);
      $ekstrakulikuler->delete();

      return redirect('/admin/ekstrakulikuler');
        if($ekstrakulikuler){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }

    //indentitas
    public function identitas()
    {
      $identitas = identitas::latest()->get();
      return view('profil.identitas.index', compact('identitas'));
    }

    public function indetitasCreate()
    {
      return view('profil/identitas/create');
    }

    public function indetitasEdit(identitas $identitas)
    {
      return view('profil.identitas.edit', compact('identitas'));
    }

    public function identitasPost(Request $req)
    {
      
         $id = $req->get('id');
          if($id){
              $identitas = identitas::find($id);
          }else{
              $identitas = new identitas;
          }
          if($req->gambar){
            if($req->hasFile('gambar')){
              $foto = $req->file('gambar');
              $filename = time() . '.' . $foto->getClientOriginalExtension();
              $destinationPath = 'image/';              
               $foto->move($destinationPath, $filename);
              }
              // $identitas->gambar = $filename;
          }

            $identitas->nama_sekolah = $req->nama_sekolah;
            $identitas->npsn = $req->npsn;
            $identitas->alamat = $req->alamat;
            $identitas->desa = $req->desa;
            $identitas->kecamatan = $req->kecamatan;
            $identitas->kabupaten = $req->kabupaten;
            $identitas->provisi = $req->provisi;
            $identitas->telepon = $req->telepon;
            $identitas->email = $req->email;
            $identitas->sk_pendirians = $req->sk_pendirians;
            $identitas->tangan_skp = $req->tangan_skp;
            $identitas->sk_izin = $req->sk_izin;
            $identitas->tanggal_sk_ijin = $req->tanggal_sk_ijin;
            $identitas->akreditas = $req->akreditas;
            $identitas->save();
            return redirect()->route('profil.identitas.index')->with(['success' => 'Data Berhasil Disimpan!']);
            }

    public function indetitasDelete($id)
    {
      $identitas = identitas::findOrFail($id);
        $identitas->delete();

        return redirect('/profil/identitas');
          if($prestasi){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }


    // Struktur Organisasi Sekolah
     public function strukturOrganisasi()
      {
        $strukturs = StrukturOrganisasi–m::latest()->get();
        return view('profil.struktur.index', compact('strukturs'));
      }

      public function strukturCreate()
      {
        return view('profil/struktur/create');
      }

      public function strukturEdit(StrukturOrganisasi–m $struktur)
      {
        return view('profil.struktur.edit', compact('struktur'));
      }

      public function strukturPost(Request $req)
      {
        $id = $req->get('id');
        if($id){
          $struktur = StrukturOrganisasi–m::find($id);
        }else{
          $struktur = new StrukturOrganisasi–m;
        }
           if($req->gambar){
          if($req->hasFile('gambar')){
            $foto = $req->file('gambar');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $destinationPath = 'image/';              
             $foto->move($destinationPath, $filename);
            }
            $struktur->gambar = $filename;
        }

        $struktur->judul = $req->judul;
        $struktur->save();
        return redirect()->route('profil.struktur.index')->with(['success' => 'Data Berhasil Disimpan!']);
      }

      public function strukturDelete($id)
      {
        $struktur = StrukturOrganisasi–m::findOrFail($id);
        $struktur->delete();

          if($struktur){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }

    
    // website profile sekolah
 
    //berita
    public function beritaGet()
    {
        $beritas = Berita::all();
        return view('admin.berita.index', ['beritas' => $beritas]);
    }

    public function beritaCreate()
    {
      return view('admin/berita/create');
    }

    public function beritaDetail($id)
    {
      $berita = Berita::find($id);
      return view('admin.berita.detail', compact('berita'));
    }
    
    public function beritaEdit($id)
    {
      $berita = Berita::find($id);
      return view('admin.berita.edit', compact('berita'));
    }

    public function beritaPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $berita = Berita::find($id);
        }else{
            $berita = new Berita;
        }
        if($req->gambar){
          if($req->hasFile('gambar')){
            $foto = $req->file('gambar');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $destinationPath = 'image/';              
             $foto->move($destinationPath, $filename);
            }
            $berita->gambar = $filename;
        }

        $berita->judul = $req->judul;
        $berita->isi = $req->isi;
        $berita->save();
        return redirect()->route('admin.berita.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }

      public function beritaDel($id) {
        $berita = Berita::find($id);
        $berita->delete();
      
        return redirect('/admin/berita');
    }
  
    
   
    //agenda
    public function agendaGet()
    {
        $agendas = Agenda::all();
        return view('admin.agenda.index', ['agendas' => $agendas]);
    }
    public function agendaCreate()
    {
      return view('admin/agenda/create');
    }

    public function agendaEdit($id)
    {
      $agendas = Agenda::find($id);
      return view('admin.agenda.edit', compact('agendas'));
    }

    public function agendaPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $agenda = Agenda::find($id);
        }else{
            $agenda = new Agenda;
        }

        $agenda->judul = $req->judul;
        $agenda->lokasi = $req->lokasi;
        $agenda->tanggal = $req->tanggal;
        $agenda->save();
        return redirect()->route('admin.agenda.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }
    
    public function agendaDel($id)
    {
      $agenda = Agenda::find($id);
      $agenda->delete();

      return redirect('/admin/agenda');

        if($agenda){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
  
         //eksul
    public function eskulGet()
    {
        $eskuls = Eskul::all();
        return view('admin.eskul.index', compact('eskuls'));
    }
    public function eskulCreate()
    {
      return view('admin/eskul/create');
    }
    public function eskulDetail($id)
    {
      $eskul = Eskul::find($id);
      return view('admin/eskul/detail', compact('eskul'));
    }
    
    public function eskulEdit($id)
    {
      $eskul = Eskul::find($id);
      return view('admin.eskul.edit', compact('eskul'));
    }

    public function eskulPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $eskul = Eskul::find($id);
        }else{
            $eskul = new Eskul;
        }
        if($req->foto){
          if($req->hasFile('foto')){
              $foto = $req->file('foto');
              $filename = time() . '.' . $foto->getClientOriginalExtension();
              $destinationPath = 'image/';                
              $foto->move($destinationPath, $filename);
            }
            $eskul->gambar = $filename;
        }

            $eskul->nama_eskul = $req->nama_eskul;
            $eskul->deskripsi = $req->deskripsi;
            $eskul->save();
        return redirect()->route('admin.eskul.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }
    public function eskulDel($id) {
      $eskul = Eskul::find($id);
      $eskul->delete();
    
      return redirect('/admin/eskul');
 
      if($eskul){
        return response()->json([
            'status' => 'success'
        ]);
    }else{
        return response()->json([
            'status' => 'error'
        ]);
    }
}
    //gelar
    public function galeriGet()
    {
        $galeris = Galeri::all();
        return view('admin.galeri.index', compact('galeris'));
    }
    public function galeriCreate()
    {
      return view('admin/galeri/create');
    }

    public function galeriEdit($id)
    {
      $galeri = Galeri::find($id);
      return view('admin.galeri.edit', compact('galeri'));
    }

    public function galeriPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $galeri = Galeri::find($id);
        }else{
            $galeri = new Galeri;
        }

        if($req->foto){
          if($req->hasFile('foto')){
            $foto = $req->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $destinationPath = 'image/';                
            $foto->move($destinationPath, $filename);
            }
            $galeri->gambar = $filename;
        }

        $galeri->judul = $req->judul;
        $galeri->save();
        return redirect()->route('admin.galeri.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }
    
    public function galeriDel($id)
    {
      $galeri = Galeri::find($id);
      $galeri->delete();
    
      return redirect('/admin/galeri');
  

        if($galeri){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }


      //prestasi
      public function prestasiGet()
      {
          $prestasis = Prestasi::all();
          return view('admin.prestasi.index', compact('prestasis'));
      }
      public function prestasiCreate()
      {
        return view('admin/prestasi/create');
      }
      public function prestasiEdit($id)
      {
        $prestasi = Prestasi::find($id);
        return view('admin.prestasi.edit', compact('prestasi'));
      }

      public function prestasiPost(Request $req)
      {
          $id = $req->get('id');
          if($id)
          {
              $prestasi = Prestasi::find($id);
          }else
          {
              $prestasi = new Prestasi;
          }
          $prestasi->nama_lomba = $req->nama_lomba;
          $prestasi->bidang_lomba = $req->bidang_lomba;
          $prestasi->juara = $req->juara;
          $prestasi->ket = $req->ket;
          $prestasi->save();
          return redirect()->route('admin.prestasi.index')->with(['success' => 'Data Berhasil Di Simpan']);
      }
      public function prestasiDel($id)
    {
      $prestasi = prestasi::find($id);
      $prestasi->delete();
    
      return redirect('/admin/prestasi');

        if($prestasi){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }

//kontak sekolah
    public function kontak()
    {
        $kontak = kontak::all();
        return view('kontak.kontak-sekolah.index', compact('kontak'));
    }
    public function kontakCreate()
    {
      return view('kontak/kontak-sekolah/create');
    }
    public function kontakDetail($id)
    {
      $kontak = kontak::find($id);
      return view('kontak/kontak-sekolah/detail', compact('kontak'));
    }
    
    public function kontakEdit($id)
    {
      $kontak = kontak::find($id);
      return view('kontak.kontak-sekolah.edit', compact('kontak'));
    }

    public function kontakPost(Request $req)
    {
        $id = $req->get('id');
        if($id)
        {
            $kontak = kontak::find($id);
        }else
        {
            $kontak = new kontak;
        }
        $kontak->maps = $req->maps;
        $kontak->telp = $req->telp;
        $kontak->fax = $req->fax;
        $kontak->email = $req->email;
        $kontak->save();
        return redirect()->route('kontak.kontak-sekolah.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }
    public function kontakDel($id)
  {
    $kontak = kontak::find($id);
    $kontak->delete();
  
    return redirect('/kontak/kontak-sekolah');

      if($prestasi){
          return response()->json([
              'status' => 'success'
          ]);
      }else{
          return response()->json([
              'status' => 'error'
          ]);
      }
  }

      //weblink


        public function weblink()
        {
            $weblink = weblink::all();
            return view('kontak.weblink.index', compact('weblink'));
        }
        public function weblinkCreate()
        {
          return view('kontak/weblink/create');
        }
        public function weblinkDetail($id)
        {
          $weblink = weblink::find($id);
          return view('kontak/weblink/detail', compact('weblink'));
        }

        public function weblinkEdit($id)
        {
          $weblink = weblink::find($id);
          return view('kontak.weblink.edit', compact('weblink'));
        }

        public function weblinkPost(Request $req)
        {
            $id = $req->get('id');
            if($id)
            {
                $weblink = weblink::find($id);
            }else
            {
                $weblink = new weblink;
            }
            $weblink->fb = $req->fb;
            $weblink->ig = $req->ig;
            $weblink->yt = $req->yt;
            $weblink->save();
            return redirect()->route('kontak.weblink.index')->with(['success' => 'Data Berhasil Di Simpan']);
        }
        public function weblinkDel($id)
        {
        $weblink = weblink::find($id);
        $weblink->delete();

        return redirect('/kontak/weblink');

          if($weblink){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
        }




      //pengumuman
      public function pengumumanGet()
      {
          $pengumumans = Pengumuman::all();
          return view('admin.pengumuman.index', compact('pengumumans'));
      }
      
      public function pengumumanCreate()
      {
        return view('admin/pengumuman/create');
      }

    public function pengumumanEdit($id)
    {
      $pengumuman = Pengumuman::find($id);
      return view('admin.pengumuman.edit', compact('pengumuman'));
    }
 
    public function pengumumanPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $pengumuman = Pengumuman::find($id);
        }else{
            $pengumuman = new Pengumuman;
        }

        $pengumuman->title = $req->title;
        $pengumuman->deskripsi = $req->deskripsi;
        $pengumuman->save();
        return redirect()->route('admin.pengumuman.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }
  
    public function pengumumanDel($id)
    {
      $pengumuman = Pengumuman::find($id);
      $pengumuman->delete();
    
      return redirect('/admin/pengumuman');
  

        if($pengumuman){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }

      }}
