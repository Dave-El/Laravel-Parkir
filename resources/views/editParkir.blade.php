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
     <!-- CDN Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
<!-- Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
{{-- <div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div> --}}

<div class="col-6 mx-auto mt-5">
    <div class="card shadow">
        <form action="{{ url('update') }}/{{ $id }}" method="post">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-secondary">
                    Update Data Parkir
                </h4>
            </div>
                <div class="card-body">
                    @csrf
                    @method('put')
                    <div class="form-group mb-2">
                        <label for="no_plat">No Plat</label>
                        <input type="text" class="form-control" id="no_plat" aria-describedby="no_plat"
                            name="no_plat" value="{{ $no_plat }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                        <select name="jenis_kendaraan" id="jenis_kendaraan" class="form-control">
                            <option value="Motor" @if ($jenis_kendaraan === 'Motor') {{ selected }} @endif>
                                Motor</option>
                            <option value="Mobil" @if ($jenis_kendaraan === 'Mobil') {{ selected }} @endif>
                                Mobil</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="jam_masuk">Jam Masuk</label>
                        <input type="datetime-local" class="form-control" id="jam_masuk" aria-describedby="jam_masuk"
                            name="jam_masuk" value="{{ $jam_masuk }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jam_keluar">Jam Keluar</label>
                        <input type="datetime-local" class="form-control" id="jam_keluar" aria-describedby="jam_keluar"
                            name="jam_keluar" value="{{ $jam_keluar }}">
                    </div>
                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-end mb-2">Update</button>
            </div>
        </form>
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

</body>

</html>
