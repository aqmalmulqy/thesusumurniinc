<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>The Susumurni Inc | Keranjang</title>
</head>

<body>
    {{-- Awal Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><strong>The Susumurni Inc</strong> (Form Data Pemesan)</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                </ul>
            </div>
        </div>
    </nav>
    {{-- Akhir Navbar --}}
    <div id="cart">
        <ul id="cart-list">
            <!-- Di sini akan ada daftar item keranjang -->
        </ul>
        <span id="cart-total" style="display: none"></span>
    </div>
    <div class="container mt-4">
        <form method="post" action="{{ route('orders.store') }}" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6 text-white">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" required autofocus value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            name="alamat" required autofocus value="{{ old('alamat') }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nomor" class="form-label">No Hp</label>
                        <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor"
                            name="nomor" required autofocus value="{{ old('nomor') }}">
                        @error('nomor')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="paymentType" class="form-label">Tipe Pembayaran</label>
                        <select class="form-control" name="bayar" id="paymentType">
                            <option hidden selected>Tipe Pembayaran</option>
                            <option value="cod">Cash On Delivery (COD)</option>
                            <option value="transfer">Transferr</option>
                            <option value="dinein">Dine In</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <img id="paymentImage" src="{{ asset('dana.jpeg') }}" width="30%" alt="Gambar Pembayaran"
                        style="display: none;">
                    <div class="mb-3 mt-3 text-white" id="paymentFile" style="display: none;">
                        <label for="formFile" class="form-label">Bukti Transfer</label>
                        <input class="form-control" name="bukti" type="file" id="formFile">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        const nama_product = document.querySelector('#nama_product');
        const slug = document.querySelector('#slug');

        nama_product.addEventListener('change', function() {
            fetch('/dashboard/product/checkSlug?nama_product=' + nama_product.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
    <script>
        // Dapatkan elemen-elemen yang diperlukan
        var paymentTypeSelect = document.getElementById("paymentType");
        var paymentImage = document.getElementById("paymentImage");
        var paymentFile = document.getElementById("paymentFile");

        // Tambahkan event listener untuk memantau perubahan pada dropdown
        paymentTypeSelect.addEventListener("change", function() {
            // Periksa apakah opsi yang dipilih adalah "Transfer"
            if (paymentTypeSelect.value === "transfer") {
                // Tampilkan gambar yang sesuai
                paymentImage.style.display = "block"; // Tampilkan gambar
                paymentFile.style.display = "block"; // Tampilkan gambar
            } else {
                // Sembunyikan gambar jika opsi selain "Transfer" dipilih
                paymentImage.style.display = "none";
                paymentFile.style.display = "none";
            }
        });
    </script>

</body>

</html>
