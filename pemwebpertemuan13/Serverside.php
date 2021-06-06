<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width, initial-scale-1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<title>hello world</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datables.net/1.10.24/css/jquery.dataTables.min.css">

<title>Pertemuan 13</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class='navbar-nav'>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Client Side</a>
                    </li>
                    <li class="nav item"></li>
                    <a class=" nav-link"href="Server Side"></a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="container mt-3"></div>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card body">
                        <h5 class="card-title">Tabel Tinggi Permukaan Air</h5>
                    <hr>
                    <table id="tabel-data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nilai</th>
                                <th>Waktu</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include 'koneksi.php';
                            $tma = mysqli_query($koneksi,"select * from tma");
                            while($row = mysqli_fetch_array($tma))
                            {
                                echo "<tr>
                                <td>".$row['id_tma']."</td>
                                <td>".$row['nilai']." meter</td>
                                <td>".$row['waktu']."</td>
                                <td><button class='btn btn-danger'>Hapus</td>
                                </tr>";
                            }
                            ?>
                        </tbody>  
                    </table>
                    </div>
                </div>
            </div>
        </div>
</main>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
</body>
</html>