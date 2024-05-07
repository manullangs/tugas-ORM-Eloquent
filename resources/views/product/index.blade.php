<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="mx-lg-5 mt-lg-4 mb-lg-3">
        <div class="rounded bg-success pt-3 pb-3">
            <div class="row">
                <div class="col-md-4 offset-4"> 
                    <h2 class="text-center fw-bold mt-2 text-white">PRODUK</h2>
                </div>
                <div class="col-md-4 d-flex justify-co ntent-end">
                    <a href="{{route("products.create")}}" class="btn btn-md btn-dark fw-bold me-3 h-75 m-auto">TAMBAHH</a>
                </div>
            </div>
            <div class="mt-3 bg-dark mx-auto-rounded" style="height: 3px; width=75px;"></div>
            <div class="grid mx-3 mt-4">
                <div class="row row-gap-4">
                    @foreach ($products as $item)
                        <div class="col-3">
                        <div class="card bg-white w-100">
                            <img src="https://source.unsplash.com/featured/150x200" class="card-img-top" alt="gambar" style="height:200px; width=100px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between my-2">
                                    <p class="card-title fw-bold my-auto" style="font-size-24px;">{{$item->namak}}</p>
                                    <p class="my-auto rounded py-1 bg-success px-2 fw-semibold">{{$item->condition}}</p>

                                </div> 
                                <div class="d-flex justify-content-between my-2">
                                    <p class="my-auto rounded py-1 bg-success px-2 text-white fw-semibold" style="font-size-16px;">{{$item-> stock}} </p>
                                    <p class="my auto rounded py-1 bg-info px-2 fw-semibold" style="font-size:16px;">{{number_format($item->price, 0,",",".")}}</p>
                                    <p class="my-auto rounded py-1 bg-secondary text-white px-2 fw-semibold" style="font-size: 16px;">{{$item->weight}}</p>
                                </div>
                                <p style="overflow: hidden; max-width:400px; margin: 10px auto;">
                                {{substr($item->description,0,100)}}....selanjutnya</p>
                                    <button class="btn btn-primary w-100">Pesann!!</button>
                            </div>
                        </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>