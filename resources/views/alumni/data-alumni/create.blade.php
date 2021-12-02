@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>TAMBAH DATA ALUMNI</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('alumni.data-alumni.index')}}" class="text-white text-decoration-none">DATA  ALUMNI</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Tambah Data ALUMNI</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Tambah Data Alumni</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('alumni.data-alumni.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf

                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama" class="form-control @error('nama') is-invalid @enderror">

                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JENIS KELAMIN</label>
                                <select  name="kelamin" value="{{ old('kelamin') }}" placeholder="Masukkan  kelamin" class="form-control @error('kelamin') is-invalid @enderror">
                                        <option value="P">P</option>
                                        <option value="L">L</option>
                                </select>

                              @error('kelamin')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>        
                            <div class="form-group">
                                <label> KEGIATAN</label>
                                <input type="text" name="kegiatan" value="{{ old('kegiatan') }}" placeholder="Masukkan kegiatan" class="form-control @error('kegiatan') is-invalid @enderror">

                                @error('kegiatan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>TEMPAT KEGIATAN</label>
                                <input type="text" name="tempat_kegiatan" value="{{ old('tempat_kegiatan') }}" placeholder="Masukkan tempat kegiatan" class="form-control @error('tempat_kegiatan') is-invalid @enderror">

                                @error('tempat_kegiatan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>ALAMAT TEMPAT KEGIATAN</label>
                                <input type="text" name="tempat_alamat_kegiatan" value="{{ old('tempat_alamat_kegiatan') }}" placeholder="Masukkan tempat alamat kegiatan" class="form-control @error('tempat_alamat_kegiatan') is-invalid @enderror">

                                @error('tempat_alamat_kegiatan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TAHUN LULUS</label>
                                <input type="text" name="tahun_lulus" value="{{ old('tahun_lulus') }}" placeholder="Masukkan tahun lulus" class="form-control @error('tahun_lulus') is-invalid @enderror">

                                @error('tahun_lulus')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>GAMBAR</label>
                                <input type="file" name="gambar" value="{{ old('gambar') }}" class="form-control @error('gambar') is-invalid @enderror">

                                @error('gambar')
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
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.12/tinymce.min.js"></script>
    <script>
        var editor_config = {
            selector: "textarea.alamat",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
        };

        tinymce.init({
            selector: 'textarea',
            height: 300
        });
    </script>
@stop