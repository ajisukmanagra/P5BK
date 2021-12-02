@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1>Detail Vidio</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('profil.vidio.index')}}" class="text-white text-decoration-none">Kelola Vidio</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Detail Vidio</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="far fa-address-card"></i> Detail Vidio</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$vidio->judul}}</h5>
                    <center>
                        <video width="320" height="240" controls>
                            <source src="{{ asset('/image/'.$vidio->video)}}" type="video/mp4">
                        </video>
                    </center>
                    <p>{!! $vidio->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 