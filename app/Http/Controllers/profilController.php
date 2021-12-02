<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visi;
use App\Models\sejarah;
use App\Models\sarana;
use App\Models\sambutan;
use App\Models\kemitraan;
use App\Models\program;
use App\Models\komite;
use App\Models\User;
use App\Models\iden;
use App\Models\vidio;
use DB;
use Image;
class profilController extends Controller
{
  //visi misi
      public function visi()
      {
          $visi = visi::all();
          return view('profil.visi-misi.index', ['visi' => $visi]);
      }
  
      public function visiCreate()
      {
        return view('profil/visi-misi/create');
      }
  
      public function visiDetail($id)
      {
        $visi = visi::find($id);
        return view('profil.visi-misi.detail', compact('visi'));
      }
      
      public function visiEdit($id)
      {
        $visi = visi::find($id);
        return view('profil.visi-misi.edit', compact('visi'));
      }
  
      public function visiPost(Request $req)
      {
          $id = $req->get('id');
          if($id){
              $visi = visi::find($id);
          }else{
              $visi = new visi;
          }

          $visi->visi_misi = $req->visi_misi;
          $visi->isi = $req->isi;
          $visi->save();
          return redirect()->route('profil.visi-misi.index')->with(['success' => 'Data Berhasil Di Simpan']);
      }
  
        public function visiDel($id) {
          $visi = visi::find($id);
          $visi->delete();
        
          return redirect('/profil/visi-misi');
      }
    
      
      public function sejarah()
      {
          $sejarah = sejarah::all();
          return view('profil.sejarah.index', ['sejarah' => $sejarah]);
      }
  
      public function sejarahCreate()
      {
        return view('profil/sejarah/create');
      }
  
      public function sejarahDetail($id)
      {
        $sejarah = sejarah::find($id);
        return view('profil.sejarah.detail', compact('sejarah'));
      }
      
      public function sejarahEdit($id)
      {
        $sejarah = sejarah::find($id);
        return view('profil.sejarah.edit', compact('sejarah'));
      }
  
      public function sejarahPost(Request $req)
      {
          $id = $req->get('id');
          if($id){
              $sejarah = sejarah::find($id);
          }else{
              $sejarah = new sejarah;
          }
          if($req->gambar){
            if($req->hasFile('gambar')){
              $foto = $req->file('gambar');
              $filename = time() . '.' . $foto->getClientOriginalExtension();
              $destinationPath = 'image/';              
               $foto->move($destinationPath, $filename);
              }
              $sejarah->gambar = $filename;
          }
  
          $sejarah->judul = $req->judul;
          $sejarah->isi = $req->isi;
          $sejarah->save();
          return redirect()->route('profil.sejarah.index')->with(['success' => 'Data Berhasil Di Simpan']);
      }
  
        public function sejarahDel($id) {
          $sejarah = sejarah::find($id);
          $sejarah->delete();
        
          return redirect('/profil/sejarah');
      }
    
      //sarana prasarana
      public function sarana()
      {
          $sarana = sarana::all();
          return view('profil.sarana-prasarana.index', ['sarana' => $sarana]);
      }
  
      public function saranaCreate()
      {
        return view('profil/sarana-prasarana/create');
      }
  
      public function saranaDetail($id)
      {
        $sarana = sarana::find($id);
        return view('profil.sarana-prasarana.detail', compact('sarana'));
      }
      
      public function saranaEdit($id)
      {
        $sarana = sarana::find($id);
        return view('profil.sarana-prasarana.edit', compact('sarana'));
      }
  
      public function saranaPost(Request $req)
      {
          $id = $req->get('id');
          if($id){
              $sarana = sarana::find($id);
          }else{
              $sarana = new sarana;
          }
          if($req->gambar){
            if($req->hasFile('gambar')){
              $foto = $req->file('gambar');
              $filename = time() . '.' . $foto->getClientOriginalExtension();
              $destinationPath = 'image/';              
               $foto->move($destinationPath, $filename);
              }
              $sarana->gambar = $filename;
          }
  
          $sarana->judul = $req->judul;
          $sarana->isi = $req->isi;
          $sarana->save();
          return redirect()->route('profil.sarana-prasarana.index')->with(['success' => 'Data Berhasil Di Simpan']);
      }
  
        public function saranaDel($id) {
          $sarana = sarana::find($id);
          $sarana->delete();
        
          return redirect('/profil/sarana-prasarana');
      }
    

      //sambutan kepala sekolah

          public function sambutan()
          {
              $sambutan = sambutan::all();
              return view('profil.kepala-sekolah.index', ['sambutan' => $sambutan]);
          }
      
          public function sambutanCreate()
          {
            return view('profil/kepala-sekolah/create');
          }
      
          public function sambutanDetail($id)
          {
            $sambutan = sambutan::find($id);
            return view('profil.kepala-sekolah.detail', compact('sambutan'));
          }
          
          public function sambutanEdit($id)
          {
            $sambutan = sambutan::find($id);
            return view('profil.kepala-sekolah.edit', compact('sambutan'));
          }
      
          public function sambutanPost(Request $req)
          {
              $id = $req->get('id');
              if($id){
                  $sambutan = sambutan::find($id);
              }else{
                  $sambutan = new sambutan;
              }
              if($req->gambar){
                if($req->hasFile('gambar')){
                  $foto = $req->file('gambar');
                  $filename = time() . '.' . $foto->getClientOriginalExtension();
                  $destinationPath = 'image/';              
                   $foto->move($destinationPath, $filename);
                  }
                  $sambutan->gambar = $filename;
              }
      
              $sambutan->judul = $req->judul;
              $sambutan->isi = $req->isi;
              $sambutan->save();
              return redirect()->route('profil.kepala-sekolah.index')->with(['success' => 'Data Berhasil Di Simpan']);
          }
      
            public function sambutanDel($id) {
              $sambutan = sambutan::find($id);
              $sambutan->delete();
            
              return redirect('/profil/kepala-sekolah');
          }
        

          //kemitraan sekolah
          public function kemitraan()
          {
              $kemitraan = kemitraan::all();
              return view('profil.kemitraan.index', ['kemitraan' => $kemitraan]);
          }
      
          public function kemitraanCreate()
          {
            return view('profil/kemitraan/create');
          }
      
          public function kemitraanDetail($id)
          {
            $kemitraan = kemitraan::find($id);
            return view('profil.kemitraan.detail', compact('kemitraan'));
          }
          
          public function kemitraanEdit($id)
          {
            $kemitraan = kemitraan::find($id);
            return view('profil.kemitraan.edit', compact('kemitraan'));
          }
      
          public function kemitraanPost(Request $req)
          {
              $id = $req->get('id');
              if($id){
                  $kemitraan = kemitraan::find($id);
              }else{
                  $kemitraan = new kemitraan;
              }
              if($req->gambar){
                if($req->hasFile('gambar')){
                  $foto = $req->file('gambar');
                  $filename = time() . '.' . $foto->getClientOriginalExtension();
                  $destinationPath = 'image/';              
                   $foto->move($destinationPath, $filename);
                  }
                  $kemitraan->gambar = $filename;
              }
      
              $kemitraan->judul = $req->judul;
              $kemitraan->isi = $req->isi;
              $kemitraan->save();
              return redirect()->route('profil.kemitraan.index')->with(['success' => 'Data Berhasil Di Simpan']);
          }
      
            public function kemitraanDel($id) {
              $kemitraan = kemitraan::find($id);
              $kemitraan->delete();
            
              return redirect('/profil/kemitraan');
          }


          //lowongan kerja


          public function program()
          {
              $program = program::all();
              return view('profil.program-kerja.index', ['program' => $program]);
          }
          public function programCreate()
          {
            return view('profil/program-kerja/create');
          }
      
          public function programEdit($id)
          {
            $program = program::find($id);
            return view('profil.program-kerja.edit', compact('program'));
          }
      
          public function programPost(Request $req)
          {
              $id = $req->get('id');
              if($id){
                  $program = program::find($id);
              }else{
                  $program = new program;
              }
      
              $program->judul = $req->judul;
              $program->lokasi = $req->lokasi;
              $program->tanggal = $req->tanggal;
              $program->save();
              return redirect()->route('profil.program-kerja.index')->with(['success' => 'Data Berhasil Di Simpan']);
          }
          
          public function programDel($id)
          {
            $program = program::find($id);
            $program->delete();
      
            return redirect('/profil/program-kerja');
      
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


          //komite sekolah

          public function komite()
          {
              $komite = komite::all();
              return view('profil.komite-sekolah.index', ['komite' => $komite]);
          }
      
          public function komiteCreate()
          {
            return view('profil/komite-sekolah/create');
          }
      
          public function komiteDetail($id)
          {
            $komite = komite::find($id);
            return view('profil.komite-sekolah.detail', compact('komite'));
          }
          
          public function komiteEdit($id)
          {
            $komite = komite::find($id);
            return view('profil.komite-sekolah.edit', compact('komite'));
          }
      
          public function komitePost(Request $req)
          {
              $id = $req->get('id');
              if($id){
                  $komite = komite::find($id);
              }else{
                  $komite = new komite;
              }
              $komite->judul = $req->judul;
              $komite->isi = $req->isi;
              $komite->save();
              return redirect()->route('profil.komite-sekolah.index')->with(['success' => 'Data Berhasil Di Simpan']);
          }
      
            public function komitenDel($id) {
              $sambutan = komite::find($id);
              $sambutan->delete();
            
              return redirect('/profil/komite-sekolah');
          }
        

           //iden sekolah

           public function iden()
           {
               $iden = iden::all();
               return view('profil.iden.index', ['iden' => $iden]);
           }
       
           public function idenCreate()
           {
             return view('profil/iden/create');
           }
       
           public function idenDetail($id)
           {
             $iden = iden::find($id);
             return view('profil.iden.detail', compact('iden'));
           }
           
           public function idenEdit($id)
           {
             $iden = iden::find($id);
             return view('profil.iden.edit', compact('iden'));
           }
       
           public function idenPost(Request $req)
           {
               $id = $req->get('id');
               if($id){
                   $iden = iden::find($id);
               }else{
                   $iden = new iden;
               }
               if($req->gambar){
                if($req->hasFile('gambar')){
                  $foto = $req->file('gambar');
                  $filename = time() . '.' . $foto->getClientOriginalExtension();
                  $destinationPath = 'image/';              
                   $foto->move($destinationPath, $filename);
                  }
                  $iden->gambar = $filename;
              }
                  $iden->nama_sekolah = $req->nama_sekolah;
                  $iden->npsn = $req->npsn;
                  $iden->alamat = $req->alamat;
                  $iden->desa = $req->desa;
                  $iden->kecamatan = $req->kecamatan;
                  $iden->kabupaten = $req->kabupaten;
                  $iden->provisi = $req->provisi;
                  $iden->telepon = $req->telepon;
                  $iden->email = $req->email;
                  $iden->sk_pendirians = $req->sk_pendirians;
                  $iden->tangan_skp = $req->tangan_skp;
                  $iden->sk_izin = $req->sk_izin;
                  $iden->tanggal_sk_ijin = $req->tanggal_sk_ijin;
                  $iden->akreditas = $req->akreditas;
                  $iden->save();
               return redirect()->route('profil.iden.index')->with(['success' => 'Data Berhasil Di Simpan']);
           }
       
             public function idenDel($id) {
               $iden = iden::find($id);
               $iden->delete();
             
               return redirect('/profil/iden');
           }
         

            //Vidio

            public function vidio()
            {
                $vidio = vidio::all();
                return view('profil.vidio.index', ['vidio' => $vidio]);
            }
        
            public function vidioCreate()
            {
              return view('profil/vidio/create');
            }
        
            public function vidioDetail($id)
            {
              $vidio = vidio::find($id);
              return view('profil.vidio.detail', compact('vidio'));
            }
            
            public function vidioEdit($id)
            {
              $vidio = vidio::find($id);
              return view('profil.vidio.edit', compact('vidio'));
            }
        
            public function vidioPost(Request $req)
                {
                  $this->validate($req, [ 
                    'video' => 'required|file|mimetypes:video/mp4',
                    ]);

                    $id = $req->get('id');
                    if($id){
                        $vidio = vidio::find($id);
                    }else{
                      $vidio = new vidio;
                    }
                      if($req->video){
                        if($req->hasFile('video')){
                          $foto = $req->file('video');
                          $filename = time() . '.' . $foto->getClientOriginalExtension();
                          $destinationPath = 'image/';              
                           $foto->move($destinationPath, $filename);
                          }
                          $vidio->video = $filename;
                      }
                    $vidio->judul = $req->judul;
                    $vidio->isi = $req->isi;
                    $vidio->save();
                return redirect()->route('profil.vidio.index')->with(['success' => 'Data Berhasil Di Simpan']);
            }
        
              public function vidioDel($id) {
                $vidio = vidio::find($id);
                $vidio->delete();
              
                return redirect('/profil/vidio');
            }
          
      
}