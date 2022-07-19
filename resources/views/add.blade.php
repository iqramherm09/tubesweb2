<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>tambah</h2>
    </div>

    <div class="row g-5 justify-content-center">
      <div class="col-md-7 col-lg-8">
        <form class="needs-validation"  method="POST" action="/anggota">
          @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">nama</label>
              <input type="text" class="form-control" name="nama" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-6">
              <label for="firstName" class="form-label">nim</label>
              <input type="text" class="form-control" name="nim" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-6">
              <label for="firstName" class="form-label">alamat</label>
              <input type="text" class="form-control" name="alamat" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-6">
              <label for="firstName" class="form-label">tempat tanggal lahir</label>
              <input type="text" class="form-control" name="ttl" id="firstName" placeholder="" value="" required>
            </div>  


          </div>

          <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">tambah</button>
        </form>
      </div>
    </div>
  </main>

</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
