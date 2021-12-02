@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1>Detail Sejarah</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('profil.sejarah.index')}}" class="text-white text-decoration-none">Kelola Sejarah</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Detail Sejarah</a></li>
                    </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-history"></i> Detail Sejarah</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$sejarah->judul}}</h5>
                    <center>
                        <img src="{{ asset('/image/'.$sejarah->gambar)}}" alt="" class="img img-thumbnail border-0 rounded-lg" width="300">
                    </center>
                    <p>{!! $sejarah->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 