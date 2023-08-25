<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>The Susumurni Inc | Product</title>
  </head>
  <body>
    {{-- Awal Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">The <strong>Susumurni</strong> Inc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('carts.index')}}">Keranjang <i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    {{-- Akhir Navbar --}}

    {{-- Awal Carousel --}}
    <div class="container">
      @If (session('success'))
      <div class="row mb-2">
        <div class="col-lg-12">
          <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        </div>
      </div>
      @endif
      <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/img1.jpg" class="d-block img-fluid" alt="Gambar 1">
          </div>
          <div class="carousel-item">
            <img src="../img/img2.jpg" class="d-block img-fluid" alt="Gambar 2">
          </div>
          <div class="carousel-item">
            <img src="../img/img3.jpg" class="d-block img-fluid" alt="Gambar 3">
          </div>
          <div class="carousel-item">
            <img src="../img/img4.jpg" class="d-block img-fluid" alt="Gambar 4">
          </div>
          <div class="carousel-item">
            <img src="../img/img5.jpg" class="d-block img-fluid" alt="Gambar 5">
          </div>
          <div class="carousel-item">
            <img src="../img/img6.jpg" class="d-block img-fluid" alt="Gambar 6">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    {{-- Akhir Carousel --}}

    {{-- Awal Karegori --}}
    {{-- <div class="container mt-5">
      <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px;">
        <h5 class="text-center" style="margin-top: 5px;">KATEGORI</h5>
      </div>
      <div class="row text-center row-container mt-2">
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/kategori/susumurni.png" class="img-kategori mt-3"></a>
            <p class="mt-2">Susu Murni</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/kategori/nonsusumurni.png" class="img-kategori mt-3"></a>
            <p class="mt-2">Non Susu Murni</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/kategori/carrycoffee.png" class="img-kategori mt-3"></a>
            <p class="mt-2">Carry Coffee</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/kategori/mie.png" class="img-kategori mt-3"></a>
            <p class="mt-2">Mie</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/kategori/rotibakar.png" class="img-kategori mt-3"></a>
            <p class="mt-2">Roti Bakar</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../img/kategori/monkeybanana.png" class="img-kategori mt-3"></a>
            <p class="mt-2">Monkey Banana</p>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- Akhir Karegori --}}

    {{-- Awal Produk --}}
    <div class="container mt-5">
        <div class="row">
            @foreach(['Susu Murni', 'Non Susu Murni', 'Carry Coffee', 'Mie', 'Roti Bakar', 'Monkey Banana'] as $kategori)
            <div class="col-md-12 mb-4">
                <h3 class="text-center font-weight-bold text-white">
                    <i class="fa fa-tag" aria-hidden="true"></i> {{ $kategori }}
                </h3>
            </div>
            @foreach($products->where('kategory', $kategori) as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="{{ $product->nama_product }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nama_product }}</h5>
                        <p class="card-text">Harga: {{ $product->harga }}</p>
                        <a href="{{ route('carts.add' , $product->id)}}"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            
            @endforeach
        </div>
    </div>
    
   <!-- Add this script tag in your HTML -->
<script>
  // Initialize an empty cart array to store selected products
  let cart = [];

  // Function to add a product to the cart
  function addToCart(productId) {
      // Find the product by its ID in the products list
      const product = products.find(item => item.id === productId);

      // Check if the product is already in the cart
      const existingProduct = cart.find(item => item.id === productId);

      if (existingProduct) {
          // If it's in the cart, increase the quantity
          existingProduct.quantity++;
      } else {
          // If not, add it to the cart with a quantity of 1
          cart.push({ ...product, quantity: 1 });
      }

      // Update the cart display
      updateCartDisplay();
  }

  // Function to update the cart display
  function updateCartDisplay() {
      // You can update the cart display in the HTML, e.g., by showing a list of cart items
      const cartList = document.getElementById('cart-list');

      // Clear the existing cart list
      cartList.innerHTML = '';

      // Loop through the cart and display each item
      cart.forEach(item => {
          const cartItem = document.createElement('li');
          cartItem.textContent = `${item.nama_product} x${item.quantity} - ${item.harga * item.quantity}`;
          cartList.appendChild(cartItem);
      });
  }
</script>

    
    
    
    {{-- Akhir Produk --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>