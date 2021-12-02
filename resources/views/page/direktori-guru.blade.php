@extends('layouts.page.app')

@section('title', 'Direktori Guru')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-newspaper" aria-hidden="true"></i> Direktori Guru</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-newspaper"></i> Direktori Guru</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
<table class="table table-bordered" id="format">
                    <thead>
                    <tr width="100%">
                    <th  style="background:#3498db;color:#fff;" scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">NIK&nbsp;</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">NAMA&nbsp;</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">KELAMIN&nbsp;</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">TEMPAT &nbsp;LAHIR</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">TANGGAL &nbsp;LAHIR</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">IBU &nbsp;KANDUNG</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">ALAMAT&nbsp;RUMAH</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">AGAMA&nbsp;</th>
                                <th  style="background:#3498db;color:#fff;" scope="col">GAMBAR&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $nomor = 1; ?>
                        @foreach($pendidik as $pendidik)
                        <tr width="100%">
                        <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $pendidik->nik}}</td>
                                    <td>{{ $pendidik->nama}}</td>
                                    <td>{{ $pendidik->kelamin}}</td>
                                    <td>{{ $pendidik->tempat_lahir }}</td>
                                    <td>{{ $pendidik->tanggal_lahir}}</td>
                                    <td>{{ $pendidik->ibu_kandung}}</td>
                                    <td>{{ $pendidik->alamat}}</td>
                                    <td>{{ $pendidik->agama}}</td>
                        
                                    <td><img src="{{ asset('/image/'.$pendidik->gambar)}}" width="70px"></td>
                                    
                    
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