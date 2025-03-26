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
            <link rel="stylesheet" href="css/sty.css">
        <title>UTS</title>
    </head>

    <body style="overflow: hidden;">
      <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#"><i class='bx bxs-leaf' style="text-shadow: #00441B;"></i> WorldGreen</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="index.php?page=lp">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header text-center">
                <h4>Log in</h4>
              </div>
              <div class="card-body">
                <form action="index.php?page=home">
                  <div class="mb-4">
                    <input type="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="mb-4">
                    <input type="password" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="d-grid">
                    <button type="submit" class="btn btn-success">Log in</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center">
                <p>Buat akun? <a href="index.php?page=register">Register</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    <h1 style="margin-bottom: 288px;"></h1>

    <?php include 'footer.php'; ?>