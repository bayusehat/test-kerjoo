<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Hello, Flex!</title>
  </head>
  <body>
    <div class="container-fluid">
      {{-- <div class="d-flex flex-column flex-sm-wrap vh-100 vw-100 py-2 bg-light">
        <div class="order-sm-1 order-2 col-sm-8 col-12 h-100 bg-warning">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button class="btn btn-sm btn-success">Tambah</button>
            <button class="btn btn-sm btn-info">Export</button>
            <button class="btn btn-sm btn-primary">Impor</button>
          </div>
        </div>
        <div class="order-sm-2 order-1 col-sm-4 col-12 h-25  bg-secondary">
          <input type="text" class="form-control" placeholder="Search items ...">
        </div>
        <div class="order-sm-3 order-3 col-sm-4 col-12 h-25  bg-info">
          <select name="tahun" id="tahun" class="form-control">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
          </select>
        </div>
      </div> --}}
        <div class="d-flex flex-sm-column flex-md-column flex-lg-row">
            <div class="p-2">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button class="btn btn-sm btn-success">Tambah</button>
                <button class="btn btn-sm btn-info">Export</button>
                <button class="btn btn-sm btn-primary">Impor</button>
              </div>
            </div>
            <div class="p-2">
                <input type="text" class="form-control" placeholder="Search items ...">
            </div>
            <div class="p-2">
                <select name="tahun" id="tahun" class="form-control">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
          </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>