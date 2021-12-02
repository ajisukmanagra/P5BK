@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
        <h1>DATA TENAGA PENDIDIK</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">PENDIDIK</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                <i class="fas fa-user-graduate"></i> DATA TENAGA PENDIDIK</h4>
                </div>
                <div class="card-body">
                <div class="container">
                        <div class="row">
                            <a href="{{route('pegawai/pendidik/create')}}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Tambah Tenaga Pegawai</a>&nbsp;
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">NIK&nbsp;</th>
                                <th scope="col">NIP&nbsp;</th>
                                <th scope="col">NIY&nbsp;</th>
                                <th scope="col">NUPTK&nbsp;</th>
                                <th scope="col">NAMA&nbsp;</th>
                                <th scope="col">KELAMIN&nbsp;</th>
                                <th scope="col">TEMPAT &nbsp;LAHIR</th>
                                <th scope="col">TANGGAL &nbsp;LAHIR</th>
                                <th scope="col">IBU &nbsp;KANDUNG</th>
                                <th scope="col">ALAMAT&nbsp;RUMAH</th>
                                <th scope="col">AGAMA&nbsp;</th>
                                <th scope="col">NPWP&nbsp;</th>
                                <th scope="col">KEWARGANEGARAAN&nbsp;</th>
                                <th scope="col">SETATUS&nbsp;PERNIKAHAN</th>
                                <th scope="col">SUWAMIN&nbsp;ISTRI</th>
                                <th scope="col">JUMLAH&nbsp;ANAK</th>
                                <th scope="col">NO&nbsp;HP</th>
                                <th scope="col">EMAIL&nbsp;</th>
                                <th scope="col">GAMBAR&nbsp;</th>
                                <th scope="col" style="width: 25%;text-align: center">AKSI&nbsp;LAINNYA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($pendidik as $no => $pendidik)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $pendidik->nik}}</td>
                                    <td>{{ $pendidik->nip}}</td>
                                    <td>{{ $pendidik->niy}}</td>
                                    <td>{{ $pendidik->nuptk}}</td>
                                    <td>{{ $pendidik->nama}}</td>
                                    <td>{{ $pendidik->kelamin}}</td>
                                    <td>{{ $pendidik->tempat_lahir }}</td>
                                    <td>{{ $pendidik->tanggal_lahir}}</td>
                                    <td>{{ $pendidik->ibu_kandung}}</td>
                                    <td>{{ $pendidik->alamat}}</td>
                                    <td>{{ $pendidik->agama}}</td>
                                    <td>{{ $pendidik->npwp}}</td>
                                    <td>{{ $pendidik->kewarganegaraan}}</td>
                                    <td>{{ $pendidik->status_pernikahan}}</td>
                                    <td>{{ $pendidik->suami_istri}}</td>
                                    <td>{{ $pendidik->jumlah_anak}}</td>
                                    <td>{{ $pendidik->nomor_hp}}</td>
                                    <td>{{ $pendidik->email}}</td>
                                    <td>
                                        <a href="{{ asset('/image/'.$pendidik->gambar)}}" style="font-size: 12px;" class="btn btn-success btn-sm">
                                            <i class="fas fa-camera"></i> Lihat Gambar
                                        </a> 
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('pegawai.pendidik.edit', $pendidik->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                
                                        <a href="/pegawai/pendidik/index/delete/{{ $pendidik->id }}" class="btn btn-sm btn-danger">
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