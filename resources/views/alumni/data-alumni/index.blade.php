@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
        <h1>DATA ALUMNI</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">ALUMNI</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                <i class="fas fa-user-graduate"></i> DATA ALUMNI</h4>
                </div>
                <div class="card-body">
                <div class="container">
                        <div class="row">
                            <a href="{{route('alumni/data-alumni/create')}}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Tambah Data siswa</a>&nbsp;
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">NAMA&nbsp;</th>
                                <th scope="col">L/P&nbsp;</th>
                                <th scope="col">KEGIATAN&nbsp;</th>
                                <th scope="col">TEMPAT KEGIATAN&nbsp;</th>
                                <th scope="col">ALAMAT TEMPAT KEGIATAN&nbsp;</th>
                                <th scope="col">TAHUN LULUS&nbsp;</th>
                                <th scope="col">FOTO&nbsp;</th>
                                <th scope="col" style="width: 25%;text-align: center">AKSI&nbsp;LAINNYA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($alumni as $no => $alumni)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $alumni->nama}}</td>
                                    <td>{{ $alumni->kelamin }}</td>
                                    <td>{{ $alumni->kegiatan }}</td>
                                    <td>{{ $alumni->tempat_kegiatan}}</td>
                                    <td>{{ $alumni->tempat_alamat_kegiatan}}</td>
                                    <td>{{ $alumni->tahun_lulus}}</td>
                                    <td>
                                        <a href="{{ asset('/image/'.$alumni->gambar)}}" style="font-size: 12px;" class="btn btn-success btn-sm">
                                            <i class="fas fa-camera"></i> Lihat Gambar
                                        </a> 
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('alumni.data-alumni.edit', $alumni->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                
                                        <a href="/alumni/data-alumni/index/delete/{{ $alumni->id }}" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

<script>
    // datatable
    $(document).ready(function() {
        $('#guru').DataTable();
    });

    //ajax delete
    function Delete(id)
        {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            swal({
                title: "APAKAH KAMU YAKIN ?",
                text: "INGIN MENGHAPUS DATA INI!",
                icon: "warning",
                buttons: [
                    'TIDAK',
                    'YA'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {

                    //ajax delete
                    jQuery.ajax({
                        url: "/admin/berita-del/"+id,
                        data:     {
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function (response) {
                            if (response.status == "success") {
                                swal({
                                    title: 'BERHASIL!',
                                    text: 'DATA BERHASIL DIHAPUS!',
                                    icon: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }else{
                                swal({
                                    title: 'GAGAL!',
                                    text: 'DATA GAGAL DIHAPUS!',
                                    icon: 'error',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }
                        }
                    });

                } else {
                    return true;
                }
            })
        }
</script>
@stop 