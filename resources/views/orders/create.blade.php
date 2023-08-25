@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Product</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="{{route ('orders.store')}}" class="mb-5" enctype="multipart/form-data">
        @csrf       
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Pelanggan</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
          @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat Lengkap</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
          @error('alamat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nomor" class="form-label">No Hp</label>
          <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor" required autofocus value="{{ old('nomor') }}">
          @error('nomor')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="paymentType" class="form-label">Tipe Pembayaran</label>
          <select class="form-select" name="bayar" id="paymentType">
            <option hidden selected>Tipe Pembayaran</option>
            <option value="cod">Cash On Delivery (COD)</option>
            <option value="transfer">Transferr</option>
            <option value="dinein">Dine In</option>
          </select>
        </div>
        <img id="paymentImage" src="{{asset('dana.jpeg')}}" width="30%" alt="Gambar Pembayaran" style="display: none;">
        <div class="mb-3" id="paymentFile" style="display: none;">
          <label for="formFile" class="form-label">Bukti Trasnfer</label>
          <input class="form-control" name="bukti" type="file" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

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
  paymentTypeSelect.addEventListener("change", function () {
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
    
@endsection