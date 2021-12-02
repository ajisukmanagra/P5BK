@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1>Detail Kontak Sekolah</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('kontak.kontak-sekolah.index')}}" class="text-white text-decoration-none">Kelola Kontak Sekolah</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Detail Kontak Sekolah</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-chalkboard-teacher"></i> Detail Kontak Sekolah</h4>
                </div>
                <div class="card-body">
                    <center>
                    <iframe src="{{$kontak->maps}}" width="250" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </center>
                    <p>{!! $kontak->telp !!}</p>
                    <p>{!! $kontak->fax !!}</p>
                    <p>{!! $kontak->email !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 