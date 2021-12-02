@extends('layouts.page.app')

@section('title', 'Vidio')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-landmark" aria-hidden="true"></i> Vidio</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-landmark"></i> Vidio</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
        @foreach($vidio as $vidio)
        <div class="card">
                <div class="card-header">
                    <h4>Vidio</h4>
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
        @endforeach
@stop 