@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1>Identitas Sekolah</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">IDENTITAS</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                <i class="fas fa-passport"></i> Identitas Sekolah</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            @if(count($identitas) == 0)
                                <a href="{{route('profil/identitas/create')}}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Tambah Identitas</a>&nbsp;
                            @endif
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">GAMBAR&nbsp;Sekolah</th>
                                <th scope="col">Nama&nbsp;Sekolah</th>
                                <th scope="col">NPSN&nbsp;</th>
                                <th scope="col">ALAMAT&nbsp;</th>
                                <th scope="col">DESA&nbsp;</th>
                                <th scope="col">KECAMATAN&nbsp;</th>
                                <th scope="col">KABUPATEN&nbsp;</th>
                                <th scope="col">PROVINSI&nbsp;</th>
                                <th scope="col">TELEPON&nbsp;</th>
                                <th scope="col">EMAIL&nbsp;SEKOLAH</th>
                                <th scope="col">SK&nbsp;PENDIRIAN&nbsp;Sekolah</th>
                                <th scope="col">TANGGAL&nbsp;SK&nbsp;PENDIRIAN</th>
                                <th scope="col">SK&nbsp;IJIN&nbsp;PERASIONAL</th>
                                <th scope="col">TANGGAL&nbsp;SK&nbsp;IZIN&nbsp;OPERASIONAL</th>
                                <th scope="col">AKREDITAS&nbsp;</th>
                                <th scope="col" style="width: 25%;text-align: center">Aksi&nbsp;Lainnya</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($identitas as $no => $identitas)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>
                                        <a href="{{ asset('/image/'.$identitas->gambar)}}" style="font-size: 12px;" class="btn btn-success btn-sm">
                                            <i class="fas fa-camera"></i> Lihat Gambar
                                        </a> 
                                    </td>
                                    <td>{{ $identitas->nama_sekolah}}</td>
                                    <td>{{ $identitas->npsn}}</td>
                                    <td>{{ $identitas->alamat}}</td>
                                    <td>{{ $identitas->desa}}</td>
                                    <td>{{ $identitas->kecamatan}}</td>
                                    <td>{{ $identitas->kabupaten}}</td>
                                    <td>{{ $identitas->provisi }}</td>
                                    <td>{{ $identitas->telepon}}</td>
                                    <td>{{ $identitas->email}}</td>
                                    <td>{{ $identitas->sk_pendirians}}</td>
                                    <td>{{ $identitas->tangan_skp}}</td>
                                    <td>{{ $identitas->sk_izin}}</td>
                                    <td>{{ $identitas->tanggal_sk_ijin}}</td>
                                    <td>{{ $identitas->akreditas}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('profil.identitas.edit', $identitas->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a href="/profil/identitas/index/delete/{{ $identitas->id }}" class="btn btn-sm btn-danger">
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
                    url: "/admin/struktur-organisasi/delete/"+id,
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