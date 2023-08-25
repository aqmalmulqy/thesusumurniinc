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
<div id="cart-contents">
    <div class="container mt-4">
        <h1>Product List</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 50%">Product Name</th>
                        <th style="width: 10%">Price</th>
                        <th style="width: 8%">Quantity</th>
                        <th style="width: 22%" class="text-center">Sub Total</th>
                        <th style="width: 10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0 ?>
                    @if(session('cart'))
                    @foreach (session('cart') as $id => $product)
                    <?php
                    $harga = isset($product['harga']) ? $product['harga'] : 0;
                    $quantity = isset($product['quantity']) ? $product['quantity'] : 0;
                    $total += $harga * $quantity;
                    ?>
                        
                        <tr>
                            <td data-th="product">
                                <div class="row">                                    
                                    <div class="col-sm-9">
                                        @if(isset($product['nama_product']))
                                            <h4 class="nomargin">{{ $product['nama_product'] }}</h4>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">
                                @if(isset($product['harga']))
                                    Rp {{ $product['harga'] }}
                                @else
                                    Price not available
                                @endif
                            </td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $product['quantity'] }}" class="form-control quantity">
                            </td>
                            <td data-th="Subtotal" class="text-center">
                                @if(isset($product['harga']) && isset($product['quantity']))
                                    Rp {{ $product['harga'] * $product['quantity'] }}
                                @else
                                    Subtotal not available
                                @endif
                            </td>
                            
                            <td>
                                <button data-id="{{ $id }}" class="btn btn-info btn-sm ml-1 mb-1 update-cart">Update</button>
                                <button data-id="{{ $id }}" class="btn btn-danger btn-sm remove-cart">Remove</button>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-right"><strong>Total</strong></td>
                        <td class="text-center" id="cart-total">Rp {{ $total }}</td>
                        <td></td>
                    </tr>
                </tfoot>
                
            </table>
            
            <a href="product/index" class="btn btn-dark">Kembali</a>
            <a href="orders/create" class="btn btn-success">ORDER</a>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".update-cart").click(function(e){
            e.preventDefault();
            var ele = $(this);

            $.ajax({
                url: '{{ route('carts.update') }}',
                method: 'patch',
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        
        $(".remove-cart").click(function(e){
            e.preventDefault();
            var ele = $(this);

            if (confirm("Are you sure?")) {
                $.ajax({
                    url: '{{ route('carts.remove') }}',
                    method: 'delete',
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    });
    $(document).ready(function () {
    // ... (your existing code)

    // Function to update the total
    function updateTotal() {
        var total = 0;

        // Iterate through all rows with a class of 'subtotal'
        $(".subtotal").each(function () {
            var subtotalText = $(this).text().replace("Rp ", "");
            var subtotalValue = parseFloat(subtotalText);

            if (!isNaN(subtotalValue)) {
                total += subtotalValue;
            }
        });

        // Update the total cell
        $("#cart-total").text("Rp " + total.toFixed(2));
    }

    // Call the updateTotal function on page load
    updateTotal();
});

</script>

</body>
</html>
