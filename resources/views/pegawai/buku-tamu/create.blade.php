@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Tambah Buku Tamu</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('pegawai.buku-tamu.index')}}" class="text-white text-decoration-none">Kelola Buku Tamu</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Tambah buku tamu</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Tambah Buku Tamu</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('pegawai.buku-tamu.post') }}" method="POST">
                            @csrf

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
                                <label>E-Mail</label>
                                <input type="text" name="email" value="{{ old('email') }}" placeholder="Masukkan Email Anda" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan  Alamat Anda" class="form-control @error('alamat') is-invalid @enderror">

                                @error('alamat')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Komentar</label>
                                <textarea name="ket" id="" cols="30" rows="8" class="form-control @error('ket') is-invalid @enderror"></textarea>
                                @error('ket')
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
@stop