<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

    <title>Produk</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Produk
            </div>
            <div class="card-body">
                <h5 class="card-title">Daftar Produk</h5>
                <a href="<?php echo base_url('produk/create') ?>" class="btn btn-success">Add New</a>
                <hr>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($produk as $val) {
                            echo '
                            <tr>
                                <td width="80px">' . $i++ . '</td>
                                <td>' . $val['title'] . '</td>
                                <td>' . $val['price'] . '</td>
                                <td><a href="' . base_url('produk/edit/' . $val['id_produk']) . '" class="btn btn-sm btn-primary">EDIT</a><a href="#" class="btn btn-sm btn-danger delete" data-id="' . $val['id_produk'] . '">DELETE</a></td>
                            </tr>
                            ';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('.delete').on('click', function() {
                swal({
                        title: "Apa anda yakin?",
                        text: "Sekali menghapus tidak, data tidak dapat di kembalikan!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                type: "GET",
                                url: "<?php echo base_url('produk/delete/') ?>" + $(this).data('id'),
                                dataType: "json",
                                success: function (response) {
                                    // console.log(response);
                                    if(response.status == true){
                                        swal("Berhasil!", "Data berhasil di hapus!", "success");
                                        setTimeout(() => {
                                            location.reload();
                                        }, 2000);
                                    }else{
                                        swal("Gagal!", "Data gagal di hapus!", "error");
                                    }   
                                }
                            });
                        } else {
                            swal("Aksi dibatalkan!");
                        }
                    });
            })
        });
    </script>
</body>

</html>