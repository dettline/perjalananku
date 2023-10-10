<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body class="gradient">
  <?php include "../header_page.php"; ?>

  <div class="container">
    <div class="row mt-5 pt-3">
      <div class="col-lg-6 m-auto">
        <div class="card border-0 shadow">
          <div class="card-body">

            <form action = 'aksi.php' method='post'>
              <div class="row my-3">
                <div class="col-lg-12 text-center">
                  <h3>REGISTRASI PERJALANANKU</h3>
                </div>
              </div>

              <div class="row my-3">
                <div class="col-lg-12">
                  <input type="text" name="nik" id="" class="form-control" placeholder="NIK">
                </div>
              </div>
              <div class="row my-3">
                <div class="col-lg-12">
                  <input type="text" name="nama_lengkap" id="" class="form-control" placeholder="Nama Lengkap">
                </div>
              </div>
              <div class="row my-3">
                <div class="col-lg-12">
                  <input type="text" name="username" id="" class="form-control" placeholder="Username">
                </div>
              </div>
              <div class="row my-3">
                <div class="col-lg-12">
                  <input type="password" name="password" id="" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="row my-3">
                <div class="col-lg-12">
                  <textarea class="form-control" placeholder="Alamat" name="alamat"></textarea>
                </div>
              </div>
              <div class="row my-3">
                <div class="col-lg-12">
                  <input type="text" name="tempat_lahir" id="" class="form-control" placeholder="Tempat Lahir">
                </div>
              </div>
              <div class="row my-3">
                <div class="col-lg-12">
                  <input type="date" name="tgl_lahir" id="" class="form-control" placeholder="Tanggal Lahir">
                </div>
              </div>
              <div class="row my-3">
                <div class="col-lg-12">
                <select name="jk" class="form-control">
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
                </div>
              </div>
              <div class="row my-3">
                <div class="col-lg-12">
                <input type="submit" class="btn btn-primary" value="Daftar">
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include "../footer.php"; ?>
</body>
</html>