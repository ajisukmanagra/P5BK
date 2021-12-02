@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Tambah Visi Misi</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('profil.visi-misi.index')}}" class="text-white text-decoration-none">Kelola Visi Misi</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Tambah Visi Misi</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Tambah Visi Misi</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('profil.visi-misi.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf

                            <div class="form-group">
                                <label> VISI ATAU MISI</label>
                                <input type="text" name="visi_misi" value="{{ old('visi_misi') }}" placeholder="Masukkan Visi Atau Misi" class="form-control @error('visi_misi') is-invalid @enderror">

                                @error('visi_misi')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">ISI VISI ATAU MISI</label>
                                <textarea class="form-control alamat @error('isi') is-invalid @enderror" name="isi" placeholder="Masukkan Isi Berita" rows="10">{!! old('isi') !!}</textarea>
                                @error('isi')
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