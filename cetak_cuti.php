<?php
$koneksi = new mysqli("localhost", "root", "", "tgs_erp");
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT. YTH Indonesia</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <h1 style="text-align: center;">Data Cuti</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama </th>
                    <th scope="col">Jenis kelamin</th>
                    <th scope="col">Tempat Tanggal Lahir</th>
                    <th scope="col">No_telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tipe Cuti</th>
                    <th scope="col">Tanggal Cuti</th>
                    <th scope="col">Tanggal Selesai</th>
                    <th scope="col">Alasan</th>

                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT*FROM cuti"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                        <th scope="row"><?php echo $nomor; ?></th>
                        <td><?php echo $pecah['nama']; ?></td>
                        <td><?php echo $pecah['jenis_kelamin'] ?></td>
                        <td><?php echo $pecah['ttl'] ?></td>
                        <td><?php echo $pecah['no_telp'] ?></td>
                        <td><?php echo $pecah['alamat'] ?></td>
                        <td><?php echo $pecah['tipe_cuti'] ?></td>
                        <td><?php echo $pecah['tanggal_cuti'] ?></td>
                        <td><?php echo $pecah['tglselesai_cuti'] ?></td>
                        <td><?php echo $pecah['alasan'] ?></td>
                    </tr>
                    <?php $nomor++ ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include "footer.php"; ?>
    <script>
        window.print();
    </script>
</body>

</html>