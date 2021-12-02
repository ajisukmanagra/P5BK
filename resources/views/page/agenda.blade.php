@extends('layouts.page.app')

@section('title', 'Agenda')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-chalkboard-teacher"></i> Agenda</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-chalkboard-teacher"></i> Agenda</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
    <div class="row mt-5">
        @foreach($agendas as $agenda)
        <div class="col-lg-4 col-12 mt-5">
        <a href="#" data-toggle="modal" data-target="#modal{{$agenda->id}}" class="text-decoration-none text-dark">
            <div class="card shadow" style="">
                <div class="card-body" style="">
                    <h6 class="font-weight-bold"><i class="fas fa-bullhorn"></i> {{$agenda->judul}}</h6>
                    <p class="mt-0 mb-0" style="font-size: 12px;">{{ $agenda->lokasi}}</p>
                    <p class="mt-0 mb-0" style="font-size: 12px;">{{ $agenda->tanggal}}</p>
                </div>
            </div>
        </a>
    </div>

        @endforeach
    </div>
    @stop 
