@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Product</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/product" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="image" class="form-label">Product Image</label>
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
          @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nama_product" class="form-label">Nama Product</label>
          <input type="text" class="form-control @error('nama_product') is-invalid @enderror" id="nama_product" name="nama_product" required autofocus value="{{ old('nama_product') }}">
          @error('nama_product')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug')}}">
          @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="kategory" class="form-label">Kategori</label>
          <select class="form-select" name="kategory">
            <option selected>Pilih Kategori</option>
            <option value="Susu Murni">Susu Murni</option>
            <option value="Non Susu Murni">Non Susu Murni</option>
            <option value="Carry Coffee">Carry Coffee</option>
            <option value="Mie">Mie</option>
            <option value="Roti Bakar">Roti Bakar</option>
            <option value="Monkey Banana">Monkey Banana</option>
            <option value="Tambahan">Tambahan</option>
          </select>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{ old('harga') }}">
          @error('harga')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
          </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
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
    
@endsection