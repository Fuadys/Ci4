<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="<?= base_url('film/tambahfilm') ?>" method="post">
                <div class="form-group">
                    <label>id</label>
                    <input name="id" type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Judul Film</label>
                    <input name="judul" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Genre</label>
                    <input name="genre" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input name="kategori" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tayang</label>
                    <input name="tayang" type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label>Durasi</label>
                    <input name="durasi" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</body>

</html>