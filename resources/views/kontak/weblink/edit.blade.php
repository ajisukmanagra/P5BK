@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Edit weblink</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('kontak.weblink.index')}}" class="text-white text-decoration-none">Kelola weblink </a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit weblink</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit  weblink</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('kontak.weblink.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$weblink->id}}">
                            <div class="form-group">
                                <label>fecebook</label>
                                <input type="text" name="fb" value="{{ $weblink->fb }}" placeholder="Masukkan link fecebook" class="form-control @error('fb') is-invalid @enderror">

                                @error('fb')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>instagram</label>
                                <input type="text" name="ig" value="{{ $weblink->ig }}" placeholder="Masukkan link instagram" class="form-control @error('ig') is-invalid @enderror">

                                @error('ig')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>youtube</label>
                                <input type="text" name="yt" value="{{ $weblink->yt }}" placeholder="Masukkan link yutub" class="form-control @error('yt') is-invalid @enderror">

                                @error('yt')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                         
                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
</div>
        </section>
    </div>
@stop