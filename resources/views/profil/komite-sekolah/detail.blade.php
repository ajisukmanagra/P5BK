@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1>Detail Komite Sekolah</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('profil.komite-sekolah.index')}}" class="text-white text-decoration-none">Kelola Komite Sekolah</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Detail Komite Sekolah</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-train"></i> Detail Komite Sekolah</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$komite->judul}}</h5>
                    <center>
                        <img src="{{ asset('/image/'.$komite->gambar)}}" alt="" class="img img-thumbnail border-0 rounded-lg" width="300">
                    </center>
                    <p>{!! $komite->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 