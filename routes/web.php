<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
  $galeri =  App\Models\Galeri::paginate(3);
  $prestasi = App\Models\Prestasi::paginate(5);
  $berita = App\Models\Berita::paginate(3);
  $eskul = App\Models\Eskul::paginate(3);
  $agenda = App\Models\Agenda::paginate(3);
  $ekstrakulikuler = App\Models\esksrakulikuler::paginate(4);
  $instrakulikuler = App\Models\instrakulikuler::paginate(4);
  $pengumuman = App\Models\Pengumuman::all();
  $iden = App\Models\iden::all();
  $kontak = App\Models\kontak::all();
  $weblink = App\Models\weblink::all();
  $logo = App\Models\logo::all();
  return view('welcome', ['galeri' => $galeri, 'logo' => $logo, 'kontak'=> $kontak, 'weblink' => $weblink, 'iden' => $iden,'prestasi' => $prestasi, 'instrakulikuler' => $instrakulikuler, 'ekstrakulikuler' =>   $ekstrakulikuler,  'berita' => $berita, 'eskul' => $eskul, 'agenda' => $agenda, 'pengumuman' => $pengumuman]);
});
// Route::get('/', function () {
//   return view('welcome');
// });

Auth::routes();

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





//halaman welcome

Route::get('/intrakulikuler', [App\Http\Controllers\PageController::class, 'intrakulikuler'])->name('intrakulikuler');
Route::get('/profile-sekolah', [App\Http\Controllers\PageController::class, 'profileSekolah'])->name('profile-sekolah');
Route::get('/ekstrakulikuler', [App\Http\Controllers\PageController::class, 'ekstrakulikuler'])->name('ekstrakulikuler');
Route::get('/agenda', [App\Http\Controllers\PageController::class, 'agenda'])->name('agenda');
Route::get('/pengumuman', [App\Http\Controllers\PageController::class,'pengumuman'])->name('pengumuman');
Route::get('/prestasi',  [App\Http\Controllers\PageController::class, 'prestasi'])->name('prestasi');
Route::get('/sambutan-kepala-sekolah',  [App\Http\Controllers\PageController::class, 'sambutan'])->name('sambutan-kepala-sekolah');
Route::get('/baca-berita',  [App\Http\Controllers\PageController::class,'berita'])->name('berita');
Route::get('/baca-berita/{id}', [App\Http\Controllers\PageController::class,'lihatBerita'])->name('baca-berita');
Route::get('/eskul',  [App\Http\Controllers\PageController::class,'eskul'])->name('eskul');
Route::get('/galeri',  [App\Http\Controllers\PageController::class,'galeri'])->name('galeri');
Route::get('/sejarah-sekolah', [App\Http\Controllers\PageController::class,'sejarah'])->name('sejarah');
Route::get('/akreditasi',  [App\Http\Controllers\PageController::class,'akreditasi'])->name('akreditasi');
Route::get('/silabus',  [App\Http\Controllers\PageController::class,'silabus'])->name('silabus');
Route::get('/direktori-guru',  [App\Http\Controllers\PageController::class,'guru'])->name('direktori-guru');
Route::get('/direktori-siswa',  [App\Http\Controllers\PageController::class,'siswa'])->name('direktori-siswa');
Route::get('/direktori-alumni',  [App\Http\Controllers\PageController::class,'alumni'])->name('direktori-alumni');
Route::get('/vidio',  [App\Http\Controllers\PageController::class,'vidio'])->name('vidio');
Route::get('/kontak',  [App\Http\Controllers\PageController::class,'kontak'])->name('welcome');
Route::get('/weblink',  [App\Http\Controllers\PageController::class,'weblink'])->name('welcome');
Route::get('/visi-misi',  [App\Http\Controllers\PageController::class,'visiMisi'])->name('visi-misi');
Route::get('/struktur-organisasi',  [App\Http\Controllers\PageController::class,'strukturOrganisasi'])->name('struktur-organisasi');


 // Website Sekolah
 //berita

 Route::get('/admin/berita',[App\Http\Controllers\AdminController::class,'beritaGet'])->name('admin.berita.index');
 Route::get('/admin/berita/create', [App\Http\Controllers\AdminController::class,'beritaCreate'])->name('admin/berita/create');
 Route::post('/admin/berita-post',[App\Http\Controllers\AdminController::class,'beritaPost'])->name('admin.berita.post');
 Route::get('/admin/berita/edit/{id}',[App\Http\Controllers\AdminController::class,'beritaEdit'])->name('admin.berita.edit');
 Route::get('/admin/berita/index/delete/{id}', [App\Http\Controllers\AdminController::class,'beritaDel']);
 Route::get('/admin/berita/detail/{id}', [App\Http\Controllers\AdminController::class,'beritaDetail'])->name('admin.berita.detail');

 //agenda
 Route::get('/admin/agenda', [App\Http\Controllers\AdminController::class,'agendaGet'])->name('admin.agenda.index');
 Route::get('/admin/agenda/create', [App\Http\Controllers\AdminController::class,'agendaCreate'])->name('admin/agenda/create');
 Route::post('/admin/agenda-post', [App\Http\Controllers\AdminController::class,'agendaPost'])->name('admin.agenda.post');
 Route::get('/admin/agenda/edit/{id}', [App\Http\Controllers\AdminController::class,'agendaEdit'])->name('admin.agenda.edit');
 Route::get('/admin/agenda/index/delete/{id}',[App\Http\Controllers\AdminController::class,'agendaDel']);
 
 //eskul
 Route::get('/admin/eskul',[App\Http\Controllers\AdminController::class,'eskulGet'])->name('admin.eskul.index');
 Route::get('/admin/eskul/create', [App\Http\Controllers\AdminController::class,'eskulCreate'])->name('admin/eskul/create');
 Route::post('/admin/eskul-post',[App\Http\Controllers\AdminController::class,'eskulPost'])->name('admin.eskul.post');
 Route::get('/eskul/edit/{id}', [App\Http\Controllers\AdminController::class,'eskulEdit'])->name('admin.eskul.edit');
 Route::get('/admin/eskul/detail/{id}', [App\Http\Controllers\AdminController::class,'eskulDetail'])->name('admin.eskul.detail');
 Route::get('/admin/eskul/index/delete/{id}',[App\Http\Controllers\AdminController::class,'eskulDel']);

 //galeri
 Route::get('/admin/galeri', [App\Http\Controllers\AdminController::class,'galeriGet'])->name('admin.galeri.index');
 Route::get('/admin/galeri/create', [App\Http\Controllers\AdminController::class,'galeriCreate'])->name('admin/galeri/create');
 Route::get('/admin/galeri/edit/{id}', [App\Http\Controllers\AdminController::class,'galeriEdit'])->name('admin.galeri.edit');
 Route::post('/admin/galeri-post',[App\Http\Controllers\AdminController::class,'galeriPost'])->name('admin.galeri.post');
 Route::get('/admin/galeri/index/delete/{id}',[App\Http\Controllers\AdminController::class,'galeriDel']);

 //prestasi
 Route::get('/admin/prestasi', [App\Http\Controllers\AdminController::class,'prestasiGet'])->name('admin.prestasi.index');
 Route::get('/admin/prestasi/create', [App\Http\Controllers\AdminController::class,'prestasiCreate'])->name('admin/prestasi/create');
 Route::get('/admin/prestasi/edit/{id}',[App\Http\Controllers\AdminController::class,'prestasiEdit'])->name('admin.prestasi.edit');
 Route::post('/admin/prestasi-post', [App\Http\Controllers\AdminController::class,'prestasiPost'])->name('admin.prestasi.post');
 Route::get('/admin/prestasi/index/delete/{id}',[App\Http\Controllers\AdminController::class,'prestasiDel']);

 //Kontak Sekolah
 Route::get('/kontak/kontak-sekolah', [App\Http\Controllers\AdminController::class,'kontak'])->name('kontak.kontak-sekolah.index');
 Route::get('/kontak/kontak-sekolah/create', [App\Http\Controllers\AdminController::class,'kontakCreate'])->name('kontak/kontak-sekolah/create');
 Route::get('/kontak/kontak-sekolah/edit/{id}',[App\Http\Controllers\AdminController::class,'kontakEdit'])->name('kontak.kontak-sekolah.edit');
 Route::post('/kontak/kontak-sekolah-post', [App\Http\Controllers\AdminController::class,'kontakPost'])->name('kontak.kontak-sekolah.post');
 Route::get('/kontak/kontak-sekolah/index/delete/{id}',[App\Http\Controllers\AdminController::class,'kontakDel']);
 Route::get('/kontak/kontak-sekolah/detail/{id}', [App\Http\Controllers\AdminController::class,'kontakDetail'])->name('kontak.kontak-sekolah.detail');

 //weblink
 Route::get('/kontak/weblink', [App\Http\Controllers\AdminController::class,'weblink'])->name('kontak.weblink.index');
 Route::get('/kontak/weblink/create', [App\Http\Controllers\AdminController::class,'weblinkCreate'])->name('kontak/weblink/create');
 Route::get('/kontak/weblink/edit/{id}',[App\Http\Controllers\AdminController::class,'weblinkEdit'])->name('kontak.weblink.edit');
 Route::post('/kontak/weblink-post', [App\Http\Controllers\AdminController::class,'weblinkPost'])->name('kontak.weblink.post');
 Route::get('/kontak/weblink/index/delete/{id}',[App\Http\Controllers\AdminController::class,'weblinkDel']);
 Route::get('/kontak/weblink/detail/{id}', [App\Http\Controllers\AdminController::class,'weblinkDetail'])->name('kontak.weblink.detail');


 //pengumuman
 Route::get('/admin/pengumuman',[App\Http\Controllers\AdminController::class,'pengumumanGet'])->name('admin.pengumuman.index');
 Route::get('/admin/pengumuman/create',[App\Http\Controllers\AdminController::class,'pengumumanCreate'])->name('admin/pengumuman/create');
 Route::get('/admin/pengumuman/edit/{id}', [App\Http\Controllers\AdminController::class,'pengumumanEdit'])->name('admin.pengumuman.edit');
 Route::post('/admin/pengumuman-post',[App\Http\Controllers\AdminController::class,'pengumumanPost'])->name('admin.pengumuman.post');
 Route::get('/admin/pengumuman/index/delete/{id}',[App\Http\Controllers\AdminController::class,'pengumumanDel']);


   // Intrakulikuler
 Route::get('/admin/intrakulikuler',[App\Http\Controllers\AdminController::class,'intrakulikuler'])->name('admin.intrakulikuler.index');
 Route::get('/admin/intrakulikuler/add' ,[App\Http\Controllers\AdminController::class,'intrakulikulerAdd'])->name('admin.intrakulikuler.add');
 Route::get('/admin/intrakulikuler/{intrakulikuler}'  ,[App\Http\Controllers\AdminController::class,'intrakulikulerEdit'])->name('admin.intrakulikuler.edit');
 Route::post('/admin/intrakulikuler/post',[App\Http\Controllers\AdminController::class,'intrakulikulerPost'])->name('admin.intrakulikuler.post');
 Route::get('/admin/intrakulikuler/index/delete/{id}',[App\Http\Controllers\AdminController::class,'intrakulikulerDelete']);
   
 // Ekstrakulikuler
 Route::get('/admin/ekstrakulikuler',  [App\Http\Controllers\AdminController::class,'ekstrakulikuler'])->name('admin.ekstrakulikuler.index');
 Route::get('/admin/ekstrakulikuler/add', [App\Http\Controllers\AdminController::class,'ekstrakulikulerAdd'])->name('admin/ekstrakulikuler/add');
 Route::get('/admin/ekstrakulikuler/{ekstrakulikuler}',  [App\Http\Controllers\AdminController::class,'ekstrakulikulerEdit'])->name('admin.ekstrakulikuler.edit');
 Route::post('/admin/ekstrakulikuler/post',  [App\Http\Controllers\AdminController::class,'ekstrakulikulerPost'])->name('admin.ekstrakulikuler.post');
 Route::get('/admin/ekstrakulikuler/index/delete/{id}',[App\Http\Controllers\AdminController::class,'ekstrakulikulerDelete']);


 //Indentitas Sekolah
 Route::get('/profil/identitas',[App\Http\Controllers\AdminController::class,'identitas'])->name('profil.identitas.index');
 Route::get('/profil/identitas/create',[App\Http\Controllers\AdminController::class,'indetitasCreate'])->name('profil/identitas/create');
 Route::get('/profil/identitas/edit/{identitas}',[App\Http\Controllers\AdminController::class,'indetitasEdit'])->name('profil.identitas.edit');
 Route::post('/profil/identitas/post',[App\Http\Controllers\AdminController::class,'identitasPost'])->name('profil.identitas.post');
 Route::get('/profil/identitas/index/delete/{id}',[App\Http\Controllers\AdminController::class,'indetitasDelete']);

 // Surat
 Route::get('/pegawai/silabus', [App\Http\Controllers\AdminController::class,'surat'])->name('pegawai.silabus.index');
 Route::get('/pegawai/silabus/create',[App\Http\Controllers\AdminController::class,'suratAdd'])->name('pegawai.silabus.create');
 Route::get('/pegawai/silabus/edit/{id}', [App\Http\Controllers\AdminController::class,'suratEdit'])->name('pegawai.silabus.edit');
 Route::post('/pegawai/silabus/post',[App\Http\Controllers\AdminController::class,'suratPost'])->name('pegawai.silabus.post');
 Route::delete('/pegawai/silabus/delete/{id}',[App\Http\Controllers\AdminController::class,'suratDelete'])->name('pegawai.silabus.delete');

//visi misi
 Route::get('/profil/visi-misi',[App\Http\Controllers\profilController::class,'visi'])->name('profil.visi-misi.index');
 Route::get('/profil/visi-misi/create', [App\Http\Controllers\profilController::class,'visiCreate'])->name('profil/visi-misi/create');
 Route::post('/profil/visi-misi/post',[App\Http\Controllers\profilController::class,'visiPost'])->name('profil.visi-misi.post');
 Route::get('/profil/visi-misi/edit/{id}',[App\Http\Controllers\profilController::class,'visiEdit'])->name('profil.visi-misi.edit');
 Route::get('/profil/visi-misi/index/delete/{id}', [App\Http\Controllers\profilController::class,'visiDel']);
 Route::get('/profil/visi-misi/detail/{id}', [App\Http\Controllers\profilController::class,'visiDetail'])->name('profil.visi-misi.detail');

 //sejarah
 Route::get('/profil/sejarah',[App\Http\Controllers\profilController::class,'sejarah'])->name('profil.sejarah.index');
 Route::get('/profil/sejarah/create', [App\Http\Controllers\profilController::class,'sejarahCreate'])->name('profil/sejarah/create');
 Route::post('/profil/sejara/post',[App\Http\Controllers\profilController::class,'sejarahPost'])->name('profil.sejarah.post');
 Route::get('/profil/sejarah/edit/{id}',[App\Http\Controllers\profilController::class,'sejarahEdit'])->name('profil.sejarah.edit');
 Route::get('/profil/sejarah/index/delete/{id}', [App\Http\Controllers\profilController::class,'sejarahDel']);
 Route::get('/profil/sejarah/detail/{id}', [App\Http\Controllers\profilController::class,'sejarahDetail'])->name('profil.sejarah.detail');


 // Struktur Organisasi
Route::get('/profil/struktur-organisasi',[App\Http\Controllers\AdminController::class,'strukturOrganisasi'])->name('profil.struktur.index');
Route::get('/profil/struktur-organisasi/create',[App\Http\Controllers\AdminController::class,'strukturCreate'])->name('profil/struktur/create');
Route::get('/profil/struktur-organisasi/edit/{struktur}',[App\Http\Controllers\AdminController::class,'strukturEdit'])->name('profil.struktur.edit');
Route::post('/profil/struktur-organisasi/post',[App\Http\Controllers\AdminController::class,'strukturPost'])->name('profil.struktur.post');
Route::delete('/profil/struktur-organisasi/delete/{id}',[App\Http\Controllers\AdminController::class,'strukturDelete'])->name('profil.struktur.delete');

 // Sarana prasarana
 Route::get('/profil/sarana-prasarana',[App\Http\Controllers\profilController::class,'sarana'])->name('profil.sarana-prasarana.index');
 Route::get('/profil/sarana-prasarana/create',[App\Http\Controllers\profilController::class,'saranaCreate'])->name('profil/sarana-prasarana/create');
 Route::get('/profil/sarana-prasarana/edit/{sarana}',[App\Http\Controllers\profilController::class,'saranaEdit'])->name('profil.sarana-prasarana.edit');
 Route::post('/profil/sarana-prasarana/post',[App\Http\Controllers\profilController::class,'saranaPost'])->name('profil.sarana-prasarana.post');
 Route::get('/profil/sarana-prasarana/index/delete/{id}', [App\Http\Controllers\profilController::class,'saranaDel']);
 Route::get('/profil/sarana-prasarana/detail/{id}', [App\Http\Controllers\profilController::class,'saranaDetail'])->name('profil.sarana-prasarana.detail');


 // sambutan Kepala sekolah
 Route::get('/profil/kepala-sekolah',[App\Http\Controllers\profilController::class,'sambutan'])->name('profil.kepala-sekolah.index');
 Route::get('/profil/kepala-sekolah/create',[App\Http\Controllers\profilController::class,'sambutanCreate'])->name('profil/kepala-sekolah/create');
 Route::get('/profil/kepala-sekolah/edit/{sarana}',[App\Http\Controllers\profilController::class,'sambutanEdit'])->name('profil.kepala-sekolah.edit');
 Route::post('/profil/kepala-sekolah/post',[App\Http\Controllers\profilController::class,'sambutanPost'])->name('profil.kepala-sekolah.post');
 Route::get('/profil/kepala-sekolah/index/delete/{id}', [App\Http\Controllers\profilController::class,'sambutanDel']);
 Route::get('/profil/kepala-sekolah/detail/{id}', [App\Http\Controllers\profilController::class,'sambutanDetail'])->name('profil.kepala-sekolah.detail');


  // kemitraan
  Route::get('/profil/kemitraan',[App\Http\Controllers\profilController::class,'kemitraan'])->name('profil.kemitraan.index');
  Route::get('/profil/kemitraan/create',[App\Http\Controllers\profilController::class,'kemitraanCreate'])->name('profil/kemitraan/create');
  Route::get('/profil/kemitraan/edit/{kemitraan}',[App\Http\Controllers\profilController::class,'kemitraanEdit'])->name('profil.kemitraan.edit');
  Route::post('/profil/kemitraana/post',[App\Http\Controllers\profilController::class,'kemitraanPost'])->name('profil.kemitraan.post');
  Route::get('/profil/kemitraan/index/delete/{id}', [App\Http\Controllers\profilController::class,'kemitraanDel']);
  Route::get('/profil/kemitraan/detail/{id}', [App\Http\Controllers\profilController::class,'kemitraanDetail'])->name('profil.kemitraan.detail');



  // lowongan kerja
  Route::get('/profil/program-kerja',[App\Http\Controllers\profilController::class,'program'])->name('profil.program-kerja.index');
  Route::get('/profil/program-kerja/create',[App\Http\Controllers\profilController::class,'programCreate'])->name('profil/program-kerja/create');
  Route::get('/profil/program-kerja/edit/{kemitraan}',[App\Http\Controllers\profilController::class,'programEdit'])->name('profil.program-kerja.edit');
  Route::post('/profil/program-kerja/post',[App\Http\Controllers\profilController::class,'programPost'])->name('profil.program-kerja.post');
  Route::get('/profil/program-kerja/index/delete/{id}', [App\Http\Controllers\profilController::class,'programDel']);
  Route::get('/profil/program-kerja/detail/{id}', [App\Http\Controllers\profilController::class,'programDetail'])->name('profil.program-kerja.detail');

  // komite sekolah
 Route::get('/profil/komite-sekolah',[App\Http\Controllers\profilController::class,'komite'])->name('profil.komite-sekolah.index');
 Route::get('/profil/komite-sekolah/create',[App\Http\Controllers\profilController::class,'komiteCreate'])->name('profil/komite-sekolah/create');
 Route::get('/profil/komite-sekolah/edit/{komite}',[App\Http\Controllers\profilController::class,'komiteEdit'])->name('profil.komite-sekolah.edit');
 Route::post('/profil/komite-sekolah/post',[App\Http\Controllers\profilController::class,'komitePost'])->name('profil.komite-sekolah.post');
 Route::get('/profil/komite-sekolah/index/delete/{id}', [App\Http\Controllers\profilController::class,'komiteDel']);
 Route::get('/profil/komite-sekolah/detail/{id}', [App\Http\Controllers\profilController::class,'komiteDetail'])->name('profil.komite-sekolah.detail');


 // iden
 Route::get('/profil/iden',[App\Http\Controllers\profilController::class,'iden'])->name('profil.iden.index');
 Route::get('/profil/iden/create',[App\Http\Controllers\profilController::class,'idenCreate'])->name('profil/iden/create');
 Route::get('/profil/iden/edit/{iden}',[App\Http\Controllers\profilController::class,'idenEdit'])->name('profil.iden.edit');
 Route::post('/profil/iden/post',[App\Http\Controllers\profilController::class,'idenPost'])->name('profil.iden.post');
 Route::get('/profil/iden/index/delete/{id}', [App\Http\Controllers\profilController::class,'idenDel']);
 Route::get('/profil/iden/detail/{id}', [App\Http\Controllers\profilController::class,'idenDetail'])->name('profil.iden.detail');

//pendiik
 Route::get('/pegawai/pendidik',[App\Http\Controllers\guruController::class,'pendidik'])->name('pegawai.pendidik.index');
 Route::get('/pegawai/pendidik/create',[App\Http\Controllers\guruController::class,'pendidikCreate'])->name('pegawai/pendidik/create');
 Route::get('/pegawai/pendidik/edit/{pendidik}',[App\Http\Controllers\guruController::class,'pendidikEdit'])->name('pegawai.pendidik.edit');
 Route::post('/pegawai/pendidik/post',[App\Http\Controllers\guruController::class,'pendidikPost'])->name('pegawai.pendidik.post');
 Route::get('/pegawai/pendidik/index/delete/{id}', [App\Http\Controllers\guruController::class,'pendidikDel']);
//  Route::get('/pegawai/pendidik/detail/{id}', [App\Http\Controllers\guruController::class,'pendidikDetail'])->name('pegawai.pendidik.detail');


//materi ajar
Route::get('/pegawai/materi',[App\Http\Controllers\guruController::class,'materi'])->name('pegawai.materi.index');
Route::get('/pegawai/materi/create',[App\Http\Controllers\guruController::class,'materiCreate'])->name('pegawai/materi/create');
Route::get('/pegawai/materi/edit/{materi}',[App\Http\Controllers\guruController::class,'materiEdit'])->name('pegawai.materi.edit');
Route::post('/pegawai/materi/post',[App\Http\Controllers\guruController::class,'materiPost'])->name('pegawai.materi.post');
Route::get('/pegawai/materi/index/delete/{id}', [App\Http\Controllers\guruController::class,'materiDel']);
Route::get('/pegawai/materi/detail/{id}', [App\Http\Controllers\guruController::class,'materiDetail'])->name('pegawai.materi.detail');


//materi ujian
Route::get('/pegawai/materi_ujian',[App\Http\Controllers\guruController::class,'ujian'])->name('pegawai.materi_ujian.index');
Route::get('/pegawai/materi_ujian/create',[App\Http\Controllers\guruController::class,'ujianCreate'])->name('pegawai/materi_ujian/create');
Route::get('/pegawai/materi_ujian/edit/{pendidik}',[App\Http\Controllers\guruController::class,'ujianEdit'])->name('pegawai.materi_ujian.edit');
Route::post('/pegawai/materi_ujian/post',[App\Http\Controllers\guruController::class,'ujianPost'])->name('pegawai.materi_ujian.post');
Route::get('/pegawai/materi_ujian/index/delete/{id}', [App\Http\Controllers\guruController::class,'ujianDel']);
Route::get('/pegawai/materi_ujian/detail/{id}', [App\Http\Controllers\guruController::class,'ujianDetail'])->name('pegawai.materi_ujian.detail');


//Data Siswa
Route::get('/siswa/data-siswa',[App\Http\Controllers\guruController::class,'siswa'])->name('siswa.data-siswa.index');
Route::get('/siswa/data-siswa/create',[App\Http\Controllers\guruController::class,'siswaCreate'])->name('siswa/data-siswa/create');
Route::get('/siswa/data-siswa/edit/{siswa}',[App\Http\Controllers\guruController::class,'siswaEdit'])->name('siswa.data-siswa.edit');
Route::post('/siswa/data-siswa/post',[App\Http\Controllers\guruController::class,'siswaPost'])->name('siswa.data-siswa.post');
Route::get('/siswa/data-siswa/index/delete/{id}', [App\Http\Controllers\guruController::class,'siswaDel']);

//Data Almuni
Route::get('/alumni/data-alumni',[App\Http\Controllers\guruController::class,'alumni'])->name('alumni.data-alumni.index');
Route::get('/alumni/data-alumni/create',[App\Http\Controllers\guruController::class,'alumniCreate'])->name('alumni/data-alumni/create');
Route::get('/alumni/data-alumni/edit/{materi}',[App\Http\Controllers\guruController::class,'alumniEdit'])->name('alumni.data-alumni.edit');
Route::post('/alumni/data-alumni/post',[App\Http\Controllers\guruController::class,'alumniPost'])->name('alumni.data-alumni.post');
Route::get('/alumni/data-alumni/index/delete/{id}', [App\Http\Controllers\guruController::class,'alumniDel']);

// vidio
Route::get('/profil/vidio',[App\Http\Controllers\profilController::class,'vidio'])->name('profil.vidio.index');
Route::get('/profil/vidio/create',[App\Http\Controllers\profilController::class,'vidioCreate'])->name('profil/vidio/create');
Route::get('/profil/vidio/edit/{iden}',[App\Http\Controllers\profilController::class,'vidioEdit'])->name('profil.vidio.edit');
Route::post('/profil/vidio/post',[App\Http\Controllers\profilController::class,'vidioPost'])->name('profil.vidio.post');
Route::get('/profil/vidio/index/delete/{id}', [App\Http\Controllers\profilController::class,'vidioDel']);
Route::get('/profil/vidio/detail/{id}', [App\Http\Controllers\profilController::class,'vidioDetail'])->name('profil.vidio.detail');

//Data buku tamu
Route::get('/pegawai/buku-tamu',[App\Http\Controllers\guruController::class,'buku'])->name('pegawai.buku-tamu.index');
Route::get('/pegawai/buku-tamu/create',[App\Http\Controllers\guruController::class,'bukuCreate'])->name('pegawai/buku-tamu/create');
Route::get('/pegawai/buku-tamu/edit/{materi}',[App\Http\Controllers\guruController::class,'bukuEdit'])->name('pegawai.buku-tamu.edit');
Route::post('/pegawai/buku-tamu/post',[App\Http\Controllers\guruController::class,'bukuPost'])->name('pegawai.buku-tamu.post');
Route::get('/pegawai/buku-tamu/index/delete/{id}', [App\Http\Controllers\guruController::class,'bukuDel']);



//Data logo Sekolah
Route::get('/pegawai/logo',[App\Http\Controllers\guruController::class,'logo'])->name('pegawai.logo.index');
Route::get('/pegawai/logo/create',[App\Http\Controllers\guruController::class,'logoCreate'])->name('pegawai/logo/create');
Route::get('/pegawai/logo/edit/{logo}',[App\Http\Controllers\guruController::class,'logoEdit'])->name('pegawai.logo.edit');
Route::post('/pegawai/logo/post',[App\Http\Controllers\guruController::class,'logoPost'])->name('pegawai.logo.post');
Route::get('/pegawai/logo/index/delete/{id}', [App\Http\Controllers\guruController::class,'logoDel']);
