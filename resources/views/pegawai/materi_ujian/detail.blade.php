@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1>Detail Materi UJian</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('pegawai.materi_ujian.index')}}" class="text-white text-decoration-none">Kelola Materi Ujian</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Detail Materi Ujian</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="far fa-address-card"></i> Detail Materi Ujian</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$materi_ujian->judul}}</h5>
                    <p>{!! $materi_ujian->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 