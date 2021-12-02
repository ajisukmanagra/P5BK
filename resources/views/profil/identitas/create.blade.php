@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Tambah identitas Sekolah</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('profil.identitas.index')}}" class="text-white text-decoration-none">Identitas Sekolah</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Tambah Identitas</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-boxes"></i> Tambah Identitas</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('profil.identitas.post') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>GAMBAR SEKOLAH</label>
                                <input type="file" name="gambar" value="{{ old('gambar') }}" class="form-control @error('gambar') is-invalid @enderror">

                                @error('gambar')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NAMA SEKOLAH</label>
                                <input type="text" name="nama_sekolah" value="{{ old('nama_sekolah') }}" placeholder="Masukkan Nama Sekolah" class="form-control @error('nama_sekolah') is-invalid @enderror">

                                @error('nama_sekolah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NPSN</label>
                                <input type="text" name="npsn" value="{{ old('npsn') }}" placeholder="Masukkan Npsn Sekolah" class="form-control @error('npsn') is-invalid @enderror">

                                @error('npsn')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>ALAMAT</label>
                                <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat Sekolah" class="form-control @error('alamat') is-invalid @enderror">

                                @error('alamat')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>DESA</label>
                                <input type="text" name="desa" value="{{ old('desa') }}" placeholder="Masukkan Desa Sekolah" class="form-control @error('desa') is-invalid @enderror">

                                @error('desa')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>KECAMATAN</label>
                                <input type="text" name="kecamatan" value="{{ old('kecamatan') }}" placeholder="Masukkan Kecamatan Sekolah" class="form-control @error('kecamatan') is-invalid @enderror">

                                @error('kecamatan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label>KABUPATEN</label>
                                <input type="text" name="kabupaten" value="{{ old('kabupaten') }}" placeholder="Masukkan Kabupaten Sekolah" class="form-control @error('kabupaten') is-invalid @enderror">

                                @error('kabupaten')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>PROVINSI</label>
                                <input type="text" name="provisi" value="{{ old('provisi') }}" placeholder="Masukkan Provinsi Sekolah" class="form-control @error('provisi') is-invalid @enderror">

                                @error('provisi')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TELEPON</label>
                                <input type="text" name="telepon" value="{{ old('telepon') }}" placeholder="Masukkan Telepon Sekolah" class="form-control @error('telepon') is-invalid @enderror">

                                @error('telepon')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>EMAIL SEKOLAH</label>
                                <input type="text" name="email" value="{{ old('email') }}" placeholder="Masukkan Email Sekolah" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>SK PENDIRIAN SEKOLAH</label>
                                <input type="text" name="sk_pendirians" value="{{ old('sk_pendirians') }}" placeholder="Masukkan Sk Pendirian Sekolah" class="form-control @error('sk_pendirians') is-invalid @enderror">

                                @error('sk_pendirians')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TANGGAL SK PENDIRIAN</label>
                                <input type="text" name="tangan_skp" value="{{ old('tangan_skp') }}" placeholder="Masukkan Tanggal Skp Sekolah" class="form-control @error('tangan_skp') is-invalid @enderror">

                                @error('tangan_skp')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>SK IJIN OPERASIONAL</label>
                                <input type="text" name="sk_izin" value="{{ old('sk_izin') }}" placeholder="Masukkan Sk Ijin Sekolah" class="form-control @error('sk_izin') is-invalid @enderror">

                                @error('sk_izin')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TANGGAL SK IJIN OPRASIONAL</label>
                                <input type="text" name="tanggal_sk_ijin" value="{{ old('tanggal_sk_ijin') }}" placeholder="Masukkan Sk Ijin Sekolah" class="form-control @error('tanggal_sk_ijin') is-invalid @enderror">

                                @error('tanggal_sk_ijin')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>AKREDITAS</label>
                                <input type="text" name="akreditas" value="{{ old('akreditas') }}" placeholder="Masukkan Akreditas Sekolah " class="form-control @error('akreditas') is-invalid @enderror">

                                @error('akreditas')
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
</div>
        </section>
    </div>
@stop