@extends('layouts.page.app')

@section('title', 'Direktori alumni')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-newspaper" aria-hidden="true"></i> Direktori alumni</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-newspaper"></i> Direktori alumni</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
<table class="table table-bordered" id="format">
                    <thead>
                    <tr width="100%">
                    <th  style="background:#3498db;color:#fff;" scope="col" style="text-align: center;width: 6%">NO.</th>
                    <th  style="background:#3498db;color:#fff;" scope="col">NAMA&nbsp;</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">L/P&nbsp;</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">KEGIATAN&nbsp;</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">TEMPAT KEGIATAN&nbsp;</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">ALAMAT TEMPAT KEGIATAN&nbsp;</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">TAHUN LULUS&nbsp;</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">FOTO&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $nomor = 1; ?>
                        @foreach($alumni as $alumni)
                        <tr width="100%">
                        <td scope="row" style="text-align: center">{{$nomor++}}</td>
                        <td>{{ $alumni->nama}}</td>
                                    <td>{{ $alumni->kelamin }}</td>
                                    <td>{{ $alumni->kegiatan }}</td>
                                    <td>{{ $alumni->tempat_kegiatan}}</td>
                                    <td>{{ $alumni->tempat_alamat_kegiatan}}</td>
                                    <td>{{ $alumni->tahun_lulus}}</td>
                                  
                                    <td><img src="{{ asset('/image/'.$alumni->gambar)}}" width="70px"></td>
                                   
                       
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 


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