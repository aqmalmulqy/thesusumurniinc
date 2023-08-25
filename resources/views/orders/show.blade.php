@extends('dashboard.layouts.main')

@section('container')
<div id="cart">
    <ul id="cart-list">
        <!-- Di sini akan ada daftar item keranjang -->
    </ul>
    <span id="cart-total"></span>
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
            <a href="orders/create" class="btn text-light">order</a>
        </div>
    </div>
</div>

@endsection