<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\pendidik;
use App\Models\silabus;
use App\Models\materi;
use App\Models\materi_ujian;
use App\Models\siswa;
use App\Models\alumni;
use App\Models\buku;
use App\Models\logo;
class guruController extends Controller
{
    //iden sekolah

    public function pendidik()
    {
        $pendidik = pendidik::all();
        return view('pegawai.pendidik.index', ['pendidik' => $pendidik]);
    }

    public function pendidikCreate()
    {
      return view('pegawai/pendidik/create');
    }

    public function pendidikDetail($id)
    {
      $pendidik = pendidik::find($id);
      return view('pegawai.pendidik.detail', compact('pendidik'));
    }
    
    public function pendidikEdit($id)
    {
      $pendidik = pendidik::find($id);
      return view('pegawai.pendidik.edit', compact('pendidik'));
    }

    public function pendidikPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $pendidik = pendidik::find($id);
        }else{
            $pendidik = new pendidik;
        }
        if($req->gambar){
         if($req->hasFile('gambar')){
           $foto = $req->file('gambar');
           $filename = time() . '.' . $foto->getClientOriginalExtension();
           $destinationPath = 'image/';              
            $foto->move($destinationPath, $filename);
           }
           $pendidik->gambar = $filename;
       }
          
           $pendidik->nik = $req->nik;
           $pendidik->nip = $req->nip;
           $pendidik->nuptk = $req->nuptk;
           $pendidik->niy = $req->niy;
           $pendidik->nama = $req->nama;
           $pendidik->kelamin = $req->kelamin;
           $pendidik->tempat_lahir = $req->tempat_lahir;
           $pendidik->tanggal_lahir = $req->tanggal_lahir;
           $pendidik->ibu_kandung = $req->ibu_kandung;
           $pendidik->alamat = $req->alamat;
           $pendidik->agama = $req->agama;
           $pendidik->npwp = $req->npwp;
           $pendidik->kewarganegaraan = $req->kewarganegaraan;
           $pendidik->status_pernikahan = $req->status_pernikahan;
           $pendidik->suami_istri = $req->suami_istri;
           $pendidik->jumlah_anak = $req->jumlah_anak;
           $pendidik->nomor_hp = $req->nomor_hp;
           $pendidik->email = $req->email;
           $pendidik->save();
        return redirect()->route('pegawai.pendidik.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }

      public function pendidikDel($id) {
        $pendidik = pendidik::find($id);
        $pendidik->delete();
      
        return redirect('/pegawai/pendidik');
    }
  
      //silabus

      public function silabus()
      {
          $silabus = silabus::all();
          return view('pegawai.silabus.index', ['silabus' => $silabus]);
      }
  
      public function silabusCreate()
      {
        return view('pegawai/silabus/create');
      }
  
      public function silabusEdit($id)
      {
        $silabus = silabus::find($id);
        return view('pegawai.silabus.edit', compact('silabus'));
      }
  
      public function silabusPost(Request $req)
      {
        $id = $req->get('id');
        if($id){
          $silabus = silabus::find($id);
        }else{
          $silabus = new silabus;
        }
        $silabus->judul = $req->judul;
        if($req->keterangan){
          $silabus->keterangan = $req->keterangan;
        }

        if($req->file){
          $file = $req->file('file');

          $destinationPath = 'files/surat';
          $filename = $file->getClientOriginalName();
          $upload_success = $req->file('file')->move($destinationPath, $filename);


          $silabus->file = $filename;
        }

        $silabus->save();
        return redirect()->route('pegawai.silabus.index')->with(['success' => 'Data Berhasil Disimpan!']);
      }

      
        public function silabusDel($id) {
          $silabus = silabus::find($id);
          $silabus->delete();
        
          return redirect('/pegawai/silabus');
      }
    
            //Materi Ajar

            public function materi()
            {
                $materi = materi::all();
                return view('pegawai.materi.index', ['materi' => $materi]);
            }
        
            public function materiCreate()
            {
              return view('pegawai/materi/create');
            }
            public function materiDetail($id)
            {
              $materi = materi::find($id);
              return view('pegawai.materi.detail', compact('materi'));
            }
            
            public function materiEdit($id)
            {
              $materi = materi::find($id);
              return view('pegawai.materi.edit', compact('materi'));
            }
        
            public function materiPost(Request $req)
            {
                $id = $req->get('id');
                if($id){
                    $materi = materi::find($id);
                }else{
                    $materi = new materi;
                }  
                  $materi->judul = $req->judul;
                   $materi->isi = $req->isi;
                   $materi->save();
                return redirect()->route('pegawai.materi.index')->with(['success' => 'Data Berhasil Di Simpan']);
            }
        
              public function materiDel($id) {
                $materi = materi::find($id);
                $materi->delete();
              
                return redirect('/pegawai/materi');
            }
          

                      //Materi Ujian

                      public function ujian()
                      {
                          $materi_ujian = materi_ujian::all();
                          return view('pegawai.materi_ujian.index', ['materi_ujian' => $materi_ujian]);
                      }
                  
                      public function ujianCreate()
                      {
                        return view('pegawai/materi_ujian/create');
                      }
                      public function ujianDetail($id)
                      {
                        $materi_ujian = materi_ujian::find($id);
                        return view('pegawai.materi_ujian.detail', compact('materi_ujian'));
                      }
                      
                      public function ujianEdit($id)
                      {
                        $materi_ujian = materi_ujian::find($id);
                        return view('pegawai.materi_ujian.edit', compact('materi_ujian'));
                      }
                  
                      public function ujianPost(Request $req)
                      {
                          $id = $req->get('id');
                          if($id){
                              $materi_ujian = materi_ujian::find($id);
                          }else{
                              $materi_ujian = new materi_ujian;
                          }  
                            $materi_ujian->judul = $req->judul;
                             $materi_ujian->isi = $req->isi;
                             $materi_ujian->save();
                          return redirect()->route('pegawai.materi_ujian.index')->with(['success' => 'Data Berhasil Di Simpan']);
                      }
                  
                      public function ujianDel($id) {
                         $materi_ujian = materi_ujian::find($id);
                         $materi_ujian->delete();
                        
                        return redirect('/pegawai/materi_ujian');
                  }
                    
                  
                          //Data siswa

                          public function siswa()
                          {
                              $siswa = siswa::all();
                              return view('siswa.data-siswa.index', ['siswa' => $siswa]);
                          }
                      
                          public function siswaCreate()
                          {
                            return view('siswa/data-siswa/create');
                          }
                        
                          public function siswaEdit($id)
                          {
                            $siswa = siswa::find($id);
                            return view('siswa.data-siswa.edit', compact('siswa'));
                          }
                      
                          public function siswaPost(Request $req)
                            {
                                $id = $req->get('id');
                                if($id){
                                    $siswa = siswa::find($id);
                                }else{
                                    $siswa = new siswa;
                                }
                                if($req->gambar){
                                if($req->hasFile('gambar')){
                                  $foto = $req->file('gambar');
                                  $filename = time() . '.' . $foto->getClientOriginalExtension();
                                  $destinationPath = 'image/';              
                                    $foto->move($destinationPath, $filename);
                                  }
                                  $siswa->gambar = $filename;
                              }
                                
                                
                                $siswa->nisn = $req->nisn;
                                 $siswa->nis = $req->nis;
                                 $siswa->nama = $req->nama;
                                 $siswa->kelamin = $req->kelamin;
                                 $siswa->tempat_tanggal_lahir = $req->tempat_tanggal_lahir;
                                 $siswa->kelas = $req->kelas;
                                 $siswa->save();
                              return redirect()->route('siswa.data-siswa.index')->with(['success' => 'Data Berhasil Di Simpan']);
                          }
                      
                          public function siswaDel($id) {
                             $siswa = siswa::find($id);
                             $siswa->delete();
                            
                            return redirect('/siswa/data-siswa');
                      }
                        
                      
                      
                          //Data Alumni

                          public function alumni()
                          {
                              $alumni = alumni::all();
                              return view('alumni.data-alumni.index', ['alumni' => $alumni]);
                          }
                      
                          public function alumniCreate()
                          {
                            return view('alumni/data-alumni/create');
                          }
                        
                          public function alumniEdit($id)
                          {
                            $alumni = alumni::find($id);
                            return view('alumni.data-alumni.edit', compact('alumni'));
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
                              return redirect()->route('alumni.data-alumni.index')->with(['success' => 'Data Berhasil Di Simpan']);
                          }
                      
                          public function alumniDel($id) {
                             $alumni = alumni::find($id);
                             $alumni->delete();
                            
                            return redirect('/alumni/data-alumni');
                      }

            //Buku Tamu

            public function buku()
            {
                $buku = buku::all();
                return view('pegawai.buku-tamu.index', ['buku' => $buku]);
            }
        
            public function bukuCreate()
            {
              return view('pegawai/buku-tamu/create');
            }
           
            public function bukuEdit($id)
            {
              $buku = buku::find($id);
              return view('pegawai.buku-tamu.edit', compact('buku'));
            }
        
            public function bukuPost(Request $req)
            {
                $id = $req->get('id');
                if($id){
                    $buku = buku::find($id);
                }else{
                    $buku = new buku;
                }  
                  $buku->nama = $req->nama;
                   $buku->email = $req->email;
                   $buku->alamat = $req->alamat;
                   $buku->ket = $req->ket;
                   $buku->save();
                return redirect()->route('pegawai.buku-tamu.index')->with(['success' => 'Data Berhasil Di Simpan']);
            }
        
              public function bukuDel($id) {
                $buku = buku::find($id);
                $buku->delete();
              
                return redirect('/pegawai/buku-tamu');
            }



               // logo sekolah

               public function logo()
               {
                   $logo = logo::all();
                   return view('pegawai.logo.index', ['logo' => $logo]);
               }
           
               public function logoCreate()
               {
                 return view('pegawai/logo/create');
               }
             
               public function logoEdit($id)
               {
                 $logo = logo::find($id);
                 return view('pegawai.logo.edit', compact('logo'));
               }
           
               public function logoPost(Request $req)
                 {
                     $id = $req->get('id');
                     if($id){
                         $logo = logo::find($id);
                     }else{
                         $logo = new logo;
                     }
                     if($req->logo){
                     if($req->hasFile('logo')){
                       $foto = $req->file('logo');
                       $filename = time() . '.' . $foto->getClientOriginalExtension();
                       $destinationPath = 'image/';              
                         $foto->move($destinationPath, $filename);
                       }
                       $logo->logo = $filename;
                   }

                  if($req->icon){
                  if($req->hasFile('icon')){
                    $foto = $req->file('icon');
                    $filename = time() . '.' . $foto->getClientOriginalExtension();
                    $destinationPath = 'image/';              
                      $foto->move($destinationPath, $filename);
                    }
                    $logo->icon = $filename;
                 }

                      $logo->nama = $req->nama;
                      $logo->isi = $req->isi;
                      $logo->save();
                   return redirect()->route('pegawai.logo.index')->with(['success' => 'Data Berhasil Di Simpan']);
               }
           
               public function logoDel($id) {
                  $logo = logo::find($id);
                  $logo->delete();
                 
                 return redirect('/pegawai/logo');
           }

          
}
