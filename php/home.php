<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <link rel="stylesheet" href="css/style.css">
        <title>UTS</title>
    </head>
   
    <body style="overflow: hidden;">
        <nav class="navbar navbar-expand-lg bg-success">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><i class='bx bxs-leaf' style="text-shadow: #00441B;"></i> WorldGreen</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?page=lp">Home</a>
                  </li>
                </ul>
                <div class="d-flex align-items-center">
                    <img src="img/user.png" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                </div>
              </div>
            </div>
          </nav>

        <div class="container mt-4 mb-4 bg-success" style="text-align: center; padding-bottom: 5px; border: 3px solid ; border-radius: 40px; color: #f5eff0;">
            <div class="container">
            <h1 class="mt-4 fw-bold">SELAMAT DATANG</h1>
        </div>
        </div>

        <div class="container mt-5 mb-4 bg-success border border-2 border-success" style="border-radius: 40px;">
            <h2 class="text-center fw-bold">Produk Kami</h2>
            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/pupuk.png" class="card-img-top" alt="Produk 1" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Pupuk Alam</h5>
                            <p class="card-text">Deskripsi singkat tentang produk 1. Produk ini sangat berkualitas dan ramah lingkungan.</p>
                            <a href="#" class="btn btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/bibit.jpg" class="card-img-top" alt="Produk 2" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Bibit</h5>
                            <p class="card-text">Deskripsi singkat tentang produk 2. Cocok untuk taman dan ruang hijau Anda.</p>
                            <a href="#" class="btn btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/tool.jpg" class="card-img-top" alt="Produk 3" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Produk 3</h5>
                            <p class="card-text">Deskripsi singkat tentang produk 3. Pilihan terbaik untuk kebutuhan taman Anda.</p>
                            <a href="#" class="btn btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php include 'footer.php'; ?>