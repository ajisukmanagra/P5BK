@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1>Detail Visi Misi</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('profil.visi-misi.index')}}" class="text-white text-decoration-none">Kelola Berita</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none"> Visi Misi</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-universal-access"></i> Detail Visi Misi</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$visi->visi_misi}}</h5>
                    <p>{!! $visi->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 