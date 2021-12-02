@extends('layouts.page.app')

@section('title', 'Silabus')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-chart-line" aria-hidden="true"></i> Silabus</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-chart-line"></i> Silabus</a></li>
        </ol>
    </div>
</nav>
@stop
@section('content')
<table class="table table-bordered" id="format">
                            <thead>
                            <tr>
                                <th style="background:#3498db;color:#fff; scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th style="background:#3498db;color:#fff; scope="col">JUDUL</th>
                                <th style="background:#3498db;color:#fff; scope="col">KETERANGAN</th>
                                <th style="background:#3498db;color:#fff; scope="col">FILE</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($surats as $no => $surat)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $surat->judul }}</td>
                                    <td>{{ $surat->keterangan}}</td>
                                    <td><a href="/files/surat/{{$surat->file}}">{{$surat->file}}</a></td>
                        
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <script>
    // datatable
    $(document).ready(function() {
        $('#format').DataTable();
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
                        url: "/admin/surat/delete/"+id,
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