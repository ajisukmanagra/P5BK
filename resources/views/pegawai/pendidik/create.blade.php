@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>TAMBAH KEPEGAWAIAN</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('pegawai.pendidik.index')}}" class="text-white text-decoration-none">DATA PEGAWAI PENDIDIK</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Tambah Data Kepegawain Pendidik</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Tambah Data Pegawai Pendidik</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('pegawai.pendidik.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf

                            
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" value="{{ old('nik') }}" placeholder="Masukkan Nik Anda" class="form-control @error('nik') is-invalid @enderror">

                                @error('nik')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" name="nip" value="{{ old('nip') }}" placeholder="Masukkan Nip Anda" class="form-control @error('nip') is-invalid @enderror">

                                @error('nip')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NUPTK</label>
                                <input type="text" name="nuptk" value="{{ old('nuptk') }}" placeholder="Masukkan Nuptk Anda" class="form-control @error('nuptk') is-invalid @enderror">

                                @error('nuptk')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIY</label>
                                <input type="text" name="niy" value="{{ old('niy') }}" placeholder="Masukkan Niy Anda" class="form-control @error('niy') is-invalid @enderror">

                                @error('desa')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Anda" class="form-control @error('nama') is-invalid @enderror">

                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        


                            <div class="form-group">
                                <label>JENIS KELAMIN</label>
                                <select  name="kelamin" value="{{ old('kelamin') }}" placeholder="Masukkan  kelamin" class="form-control @error('kelamin') is-invalid @enderror">
                                        <option value="P">P</option>
                                        <option value="L">L</option>
                                </select>

                              @error('kelamin')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TEMPAT LAHIR</label>
                                <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Masukkan Tempat Lahir Anda" class="form-control @error('tempat_lahir') is-invalid @enderror">

                                @error('tempat_lahir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TANGGAL LAHIR</label>
                                <input type="text" name="tanggal_lahir" value="{{ old('tanggak_lahir') }}" placeholder="Masukkan Tanggal Lahir Anda" class="form-control @error('tanggal_lahir') is-invalid @enderror">

                                @error('tanggal_lahir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>IBU KANDUNG</label>
                                <input type="text" name="ibu_kandung" value="{{ old('ibu_kandung') }}" placeholder="Masukkan Ibu kandung Anda" class="form-control @error('ibu_kandung') is-invalid @enderror">

                                @error('ibu_kandung')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>ALAMAT</label>
                                <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat Anda" class="form-control @error('alamat') is-invalid @enderror">

                                @error('alamat')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>AGAMA</label>
                                <select name="agama" value="{{ old('agama') }}" placeholder="Masukkan  agama" class="form-control @error('agama') is-invalid @enderror">
                                        <option value="islam">Islam</option>
                                        <option value="keristen">keristen</option>
                                        <option value="budha">Buddha</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="katolik">Katolik</option>
                                        <option value="konghucu">Buddha</option>
                                </select>

                                @error('agama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NPWP</label>
                                <input type="text" name="npwp" value="{{ old('npwp') }}" placeholder="Masukkan Npwp Anda" class="form-control @error('npwp') is-invalid @enderror">

                                @error('npwp')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>KEWARGANEGARAAN</label>
                                <input type="text" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}" placeholder="Masukkan kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror">

                                @error('kewarganegaraan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>SETATUS PERNIKAHAN</label>
                                <input type="text" name="status_pernikahan" value="{{ old('tanggal_sk_ijin') }}" placeholder="Masukkan Setatus pernikahan" class="form-control @error('status_pernikahan') is-invalid @enderror">

                                @error('status_pernikahan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>SUAMIN ISTRI</label>
                                <input type="text" name="suami_istri" value="{{ old('suami_istri') }}" placeholder="Masukkan Suwami Istri " class="form-control @error('suami_istri') is-invalid @enderror">

                                @error('suami_istri')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JUMLAH ANAK</label>
                                <input type="text" name="jumlah_anak" value="{{ old('jumlah_anak') }}" placeholder="Masukkan Jumalah anak " class="form-control @error('jumlah_anak') is-invalid @enderror">

                                @error('jumlah_anak')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NOMOR HP</label>
                                <input type="text" name="nomor_hp" value="{{ old('nomor_hp') }}" placeholder="Masukkan nomor hp " class="form-control @error('nomor_hp') is-invalid @enderror">

                                @error('nomor_hp')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>EMAIL</label>
                                <input type="text" name="email" value="{{ old('email') }}" placeholder="Masukkan Email " class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>FOTO</label>
                                <input type="file" name="gambar" value="{{ old('gambar') }}" class="form-control @error('gambar') is-invalid @enderror">

                                @error('gambar')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.12/tinymce.min.js"></script>
    <script>
        var editor_config = {
            selector: "textarea.alamat",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
        };

        tinymce.init({
            selector: 'textarea',
            height: 300
        });
    </script>
@stop