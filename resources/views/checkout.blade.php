<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Susumurni Inc | Checkout</title>

    

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="/css/checkout.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="" alt="" width="72" height="57">
      <h2>Checkout</h2>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Total Pesanan</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nama Product</h6>
            </div>
            <span class="text-muted">Rp.10000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Product kedua</h6>
            </div>
            <span class="text-muted">Rp.8000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Product ketiga</h6>
            </div>
            <span class="text-muted">Rp.15000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>SUSUMURNI</small>
            </div>
            <span class="text-success">−Rp.20000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total </span>
            <strong>Rp.13000</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="namadepan" class="form-label">Nama Depan</label>
              <input type="text" class="form-control" id="namadepan" placeholder="" value="" required>
              <div class="invalid-feedback">
                Nama depan dibutuhkan.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="namabelakang" class="form-label">Nama Belakang</label>
              <input type="text" class="form-control" id="namabelakang" placeholder="" value="" required>
              <div class="invalid-feedback">
                VNama belakang dibutuhkan.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Masukkan alamat email yang valid untuk pembaruan pengiriman.
              </div>
            </div>

            <div class="col-12">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="Jl..." required>
              <div class="invalid-feedback">
                Silakan masukkan alamat pengiriman Anda.
              </div>
            </div>

          <hr class="my-4">

          <h4 class="mb-3">Tipe Pesanan</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Dine In</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Delivery</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nama Bank</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Nomor Rekening</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
            </div>

            <div class="col-md-6">
              <label for="cc-expiration" class="form-label">Bukti Pembayaran</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Checkout</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; TheSusumurniInc 2023</p>
  </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      <script src="/js/checkout.js"></script>
  </body>
</html>
