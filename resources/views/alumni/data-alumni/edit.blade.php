@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Edit Data alumni</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('alumni.data-alumni.index')}}" class="text-white text-decoration-none">Data alumni</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Data alumni</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Alumni</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('alumni.data-alumni.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf
                            <input type="hidden" name="id" value="{{$alumni->id}}">

                        
                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="nama" value="{{ $alumni->nama }}" placeholder="Masukkan Nama" class="form-control @error('nama') is-invalid @enderror">

                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JENIS KELAMIN</label>
                                <select  name="kelamin" value="{{$alumni->kelamin }}" placeholder="Masukkan  kelamin" class="form-control @error('kelamin') is-invalid @enderror">
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
                                <label>KEGIATAN</label>
                                <input type="text" name="kegiatan" value="{{ $alumni->kegiatan }}" placeholder="Masukkan NISN" class="form-control @error('kegiatan') is-invalid @enderror">

                                @error('kegiatan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>TEMPAT KEGIATAN</label>
                                <input type="text" name="tempat_kegiatan" value="{{ $alumni->tempat_kegiatan }}" placeholder="Masukkan kegiatan" class="form-control @error('tempat_kegiatan') is-invalid @enderror">

                                @error('tempat_kegiatan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>ALAMAT TEMPAT KEGIATAN</label>
                                <input type="text" name="tempat_alamat_kegiatan" value="{{ $alumni->tempat_alamat_kegiatan }}" placeholder="Masukkan Tempat kegiatan" class="form-control @error('tempat_alamat_kegiatan') is-invalid @enderror">

                                @error('tempat_alamat_kegiatan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TAHUN LULUS</label>
                                <input type="text" name="tahun_lulus" value="{{ $alumni->tahun_lulus }}" placeholder="Masukkan Tahun Lulus" class="form-control @error('tahun_lulus') is-invalid @enderror">

                                @error('tahun_lulus')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>GAMBAR</label>
                                <input type="file" name="gambar" value="{{$alumni->gambar}}" class="form-control @error('gambar') is-invalid @enderror">

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