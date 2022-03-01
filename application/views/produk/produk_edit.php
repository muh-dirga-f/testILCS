<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">

    <title>Produk</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Produk
            </div>
            <div class="card-body">
                <h5 class="card-title">Edit Produk</h5>
                <hr>
                <form method="POST" action="<?php echo base_url('produk/update') ?>">
                    <div class="mb-3">
                        <label for="id_produk" class="form-label">ID</label>
                        <input type="text" name="id_produk" class="form-control" id="id_produk" value="<?php echo $produk[0]['id_produk'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="<?php echo $produk[0]['title'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" id="price" value="<?php echo $produk[0]['price'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?php echo base_url('/') ?>" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>