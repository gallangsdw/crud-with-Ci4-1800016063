<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <script>
      $(function() {
         $('#save').click(function() {
            $('#myForm').submit()
            $('#tambahdata').modal('hide')
         })
      })
   </script>

   <title>User</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/user/tambahdata">Tambah Data <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login/logout'); ?>" tabindex="-1" aria-disabled="true">Logout</a>
      </li>
    </ul>
  </div>
</nav>

   <div class="container mt-3">
      <h1>Selamat datang, <?= session()->get('nama'); ?>!</h1><br>
      <table class="table table-hover">
         <thead class="thead-dark">
            <tr>
               <th scope="col">nama</th>
               <th scope="col">email</th>
               <th scope="col">Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($user as $row) : ?>
               <tr>
                  <td><?= $row['nama']; ?></td>
                  <td><?= $row['email']; ?></td>
                  <td>
                     <a class="btn btn-success" href="/user/edit/<?= $row['id']; ?>" role="button">ubah</a>
                     <a class="btn btn-danger text-white" onclick="hapusData(<?= $row['id']; ?>)" role="button">hapus</a>
                  </td>
               </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
   </div>

   <script>
      function hapusData(id) {
         message = confirm('are sure want to delete this data ?')

         if (message) {
            window.location.href = ("<?= base_url('user/delete'); ?>") + "/" + id
         } else return false
      }
   </script>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>