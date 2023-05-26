<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="RPL">
    <title>
        Parkir | MyApp
    </title>
    <!-- Custom fonts for this template-->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Parkir</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Parkir
                <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambahData">Tambah
                    Data</button>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Kendaraan</th>
                            <th>Nomor Plat</th>
                            <th>Jam Masuk</th>
                            <th>Jam Keluar</th>
                            <th>Total Biaya</th>
                            <th>Aksi</th>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->jenis_kendaraan }}</td>
                                <td>{{ $row->no_plat }}</td>
                                <td>{{ $row->jam_masuk }}</td>
                                <td>{{ $row->jam_keluar }}</td>
                                <td>{{ $row->total }}</td>
                                <td class="d-flex gap-1">
                                    <a href="{{ url('edit') }}/{{ $row->id }}" class="btn btn-sm btn-warning"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <form action="{{ url('hapus') }}/{{ $row->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" value="Hapus" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash3-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria- labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Parkir</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ url('parkir/save') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                        <select name="jenis_kendaraan" id="jenis_kendaraan" class="form-control">
                            <option value="" selected>Pilih</option>
                            <option value="mobil">Mobil</option>
                            <option value="motor">Motor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_plat">Nomor Plat</label>
                        <input type="text" class="form-control" id="no_plat" name="no_plat">
                    </div>
                    <div class="form-group">
                        <label for="jam_masuk">Jam Masuk</label>
                        <input type="datetime-local" class="form-control" id="jam_masuk" name="jam_masuk">
                    </div>
                    <div class="form-group">
                        <label for="jam_keluar">Jam Keluar</label>
                        <input type="datetime-local" class="form-control" id="jam_keluar" name="jam_keluar">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data- dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="template/vendor/jquery/jquery.min.js"></script>
<script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->

<script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="template/js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="template/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="template/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="template/js/demo/datatables-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <!-- CDN Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
<!-- Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</body>

</html>
