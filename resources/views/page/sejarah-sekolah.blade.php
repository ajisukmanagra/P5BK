@extends('layouts.page.app')

@section('title', 'Sejarah')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-stream" aria-hidden="true"></i> Sejarah Sekolah</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-stream"></i> Sejarah</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
@foreach($sejarah as $sejarah)
<div class="card">
                <div class="card-header">
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
@endforeach
@stop