<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- js bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <div class="container">
        <h1 align="center"> EDIT DATA</h1>
        <form method="post" action="<?= base_url('pemesanan/update/' . $data['id']); ?>">
            <div class="form-group">
                <label for="songTitle">id</label>
                <input value="<?php echo $data['id']; ?>" name="id" type="text" class="form-control" id="songTitle" aria-describedby="emailHelp" placeholder="Masukan ID">
            </div>
            <div class="form-group">
                <label for="songTitle">Tanggal Pemesanan</label>
                <input value="<?php echo $data['tanggal_pemesanan']; ?>" name="tgl" type="text" class="form-control" id="songTitle" aria-describedby="emailHelp" placeholder="Masukan NIP">
            </div>
            <div class="form-group">
                <label for="songDuration">Jumlah</label>
                <input value="<?php echo $data['jumlah']; ?>" name="jumlah" type="number" class="form-control" id="songDuration" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="songSinger">Total Harga</label>
                <input value="<?php echo $data['Total_harga']; ?>" name="harga" type="text" class="form-control" id="songSinger" placeholder="Pilih Jenis kelamin">
            </div>
            <div class="form-group">
                <label for="songLabel">ID Film</label>
                <input value="<?php echo $data['id_film']; ?>" name="idfilm" type="text" class="form-control" id="songLabel" placeholder="Masukkan golongan">
            </div>
            <div class="form-group">
                <label for="songReleaseDate">ID Customer</label>
                <input value="<?php echo $data['id_customer']; ?>" name="idcustomer" type="text" class="form-control" id="songReleaseDate" placeholder="Masukkan email">
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>
        </form>
    </div>
</body>

</html>