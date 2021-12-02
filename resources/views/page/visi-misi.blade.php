@extends('layouts.page.app')

@section('title', 'Visi Misi')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-tasks aria-hidden="true"></i> Visi , Misi Dan Tujuan</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-tasks"></i> Visi Dan Misi</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
<div class="row">
    <div class="col-md-6 col-12">
        <h5 class="mt-4 font-weight-bold" style="color: #0099ff;">
            Tak Cuma Sebatas Gelar
        </h5>
        <p>
            "Pendidikan bukan cuma pergi ke sekolah dan mendapatkan gelar. Tapi juga memperluas pengetahuan dan menyerap ilmu kehidupan."
        </p>
    </div>
</div>
@foreach($visi as $visi)
<h5 class="mt-4 font-weight-bold" style="color: #0099ff; text-center">{{$visi->visi_misi}}</h5>
                
                    <p>{!! $visi->isi !!}</p>
            
@endforeach

@stop