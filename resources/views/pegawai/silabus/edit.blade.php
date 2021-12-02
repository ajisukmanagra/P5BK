@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Edit silabus</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('pegawai.silabus.index')}}" class="text-white text-decoration-none">Kelola silabus</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit silabus</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-envelope"></i> Edit silabus</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('pegawai.silabus.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$surat->id}}">
                            <div class="form-group">
                                <label>JUDUL</label>
                                <input type="text" name="judul" value="{{ $surat->judul }}" placeholder="Masukkan Judul" class="form-control @error('judul') is-invalid @enderror">

                                @error('judul')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>KETERANGAN</label>
                                <input type="text" name="keterangan" value="{{ $surat->keterangan }}" placeholder="Masukkan Keterangan" class="form-control @error('keterangan') is-invalid @enderror">

                                @error('keterangan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">FILE</label>
                                <input type="file" name="file" class="form-control" value="{{ $surat->file }}">
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