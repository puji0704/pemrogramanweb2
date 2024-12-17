<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Form Update data Buku</h1>
                <form action="/index.php/buku/update" method="post">
                <div class="mb-3">
                    <tabel for="pengarang">Pengarang</label>
                    <input type="text" name="pengarang" id="pengarang"
                     class="form-control">
                </div>
                <div class="mb-3">
                    <tabel for="penerbit">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit"
                     class="form-control">
                </div>
                <div class="mb-3">
                    <tabel for="tahun">Tahun</label>
                    <input type="text" name="tahun" id="tahun"
                     class="form-control">
                </div>
                <div class="mb-3">
                  <a class="btn btn-secondary" href="/index.php">kembali</a>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div> 
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>