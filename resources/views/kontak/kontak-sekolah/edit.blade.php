@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Edit KOntak Sekolah</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('kontak.kontak-sekolah.index')}}" class="text-white text-decoration-none">Kelola Kontak Sekolah</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Kontak Sekolah</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Kontak Sekolah</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('kontak.kontak-sekolah.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$kontak->id}}">
                            <div class="form-group">
                                <label>Maps</label>
                                <input type="text" name="maps" value="{{ $kontak->maps }}" placeholder="Masukkan Maps Sekolah" class="form-control @error('maps') is-invalid @enderror">

                                @error('maps')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Telp</label>
                                <input type="text" name="telp" value="{{ $kontak->telp }}" placeholder="Masukkan Telp" class="form-control @error('telp') is-invalid @enderror">

                                @error('telp')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" name="fax" value="{{ $kontak->fax }}" placeholder="Masukkan fax" class="form-control @error('fax') is-invalid @enderror">

                                @error('fax')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{ $kontak->email }}" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
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