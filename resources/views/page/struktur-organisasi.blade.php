@extends('layouts.page.app')

@section('title', 'Struktur Organisasi')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-boxes" aria-hidden="true"></i> Struktur Organisasi</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-boxes"></i> Struktur Organisasi</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
    
    
    @foreach ($strukturs as $struktur)
      <br>
           
                 
              <center>
              <h2>{{$struktur->judul}}</h2><br>
        <img src="{{ asset('/image/'.$struktur->gambar)}}" alt="" class="img img-thumbnail border-0" width="600px">
    </center>
    @endforeach
@stop