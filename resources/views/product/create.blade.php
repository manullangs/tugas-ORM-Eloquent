<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CREATE Produk</title>
</head>
<body>

    <h1>CREATE pRODUK</h1>
    
    <div class="container mb-5">
        <div class="row">
           <div class="col-md-4 offset-4">
                @if (session('error')) 
                <div class="alert alert-danger">
                    {{session("error")}}    
                </div>
                @endif
        </div> 
            <div class="col-md-4 offset-4 rounded bg-info mt mt-3 py-3">
                <h2 class="text-center fw-bold" style="font-size:20px;">Tambah Data Produk</h2>
                <form action="{{route("products.store")}}" class="mt-3" method="POST">
                @csrf
                <div class="mb-1">
                    <label for="">Gambar Produk</label>
                    <input type="text" class="form-control" name="image" placeholder="masukkan gambar produk">
                </div>
                <div class="mb-1">
                    <label for="">Nama Produk</label>
                    <input type="text" class="form-control" name="name" placeholder="masukkan nama produk">
                </div>
                <div class="mb-1">
                    <label for="">Kondisi Produk</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="condition" id="flexRadioDefault1" value="baru">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Baru 
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="condition" id="flexRadioDefault2" checked value="bekas">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Bekas
                        </label>
                      </div>
                </div>
                
                <div class="mb-1">
                    <label for="">Stok Produk</label>
                    <input type="number" class="form-control" name="stock" placeholder="masukkan stok produk">
                </div>
                <div class="mb-1">
                    <label for="">Harga Produk</label>
                    <input type="number " class="form-control" name="price" placeholder="masukkan harga produk">
                </div>
                <div class="mb-1">
                    <label for="">Berat Produk</label>
                    <input type="number " class="form-control" name="weight" placeholder="masukkan berat produk">
                </div>
                <div class="mb-1" >
                    <label for="">Deskripsi</label>
                    <input type="description " class="form-control" name="description" placeholder="masukkan deskripsi produk" style="height: 70px;">
                </div>
                <div class="d-flex">
                    <button class="btn btn-dark mx-auto w-100" type="submit">Submit</button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>