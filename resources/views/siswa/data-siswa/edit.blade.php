@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Edit Data Siswa</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('siswa.data-siswa.index')}}" class="text-white text-decoration-none">Edit Siswa</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Data Siswa</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Siswa</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('siswa.data-siswa.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf
                            <input type="hidden" name="id" value="{{$siswa->id}}">

                          <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" value="{{ $siswa->nisn }}" placeholder="Masukkan NISN" class="form-control @error('nisn') is-invalid @enderror">

                                @error('nisn')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" name="nis" value="{{ $siswa->nis }}" placeholder="Masukkan Nis" class="form-control @error('nis') is-invalid @enderror">

                                @error('nis')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="nama" value="{{ $siswa->nama }}" placeholder="Masukkan Nama" class="form-control @error('nama') is-invalid @enderror">

                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JENIS KELAMIN</label>
                                <select  name="kelamin" value="{{$siswa->kelamin }}" placeholder="Masukkan  kelamin" class="form-control @error('kelamin') is-invalid @enderror">
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
                                <label>TEMPA TANGGAL LAHIR</label>
                                <input type="text" name="tempat_tanggal_lahir" value="{{ $siswa->tempat_tanggal_lahir }}" placeholder="Masukkan Tempat tanggal lahir" class="form-control @error('tempat_tanggal_lahir') is-invalid @enderror">

                                @error('tempat_tanggal_lahir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>KELAS</label>
                                <input type="text" name="kelas" value="{{ $siswa->kelas }}" placeholder="Masukkan Kelas" class="form-control @error('kelas') is-invalid @enderror">

                                @error('kelas')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>GAMBAR</label>
                                <input type="file" name="gambar" value="{{$siswa->gambar}}" class="form-control @error('gambar') is-invalid @enderror">

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