@extends('dashboard.layouts.main') <!-- Jika Anda menggunakan layout, sesuaikan dengan layout Anda -->

@section('container')
    <div class="container">

        @if ($order)
            @foreach ($order as $orderItem)
                <div class="card mt-3">
                    <h1>Detail Pesanan</h1>
                    <!-- Tabel informasi pesanan -->
                    <table class="table">
                        <tr>
                            <th>Nama Pesanan</th>
                            <td>{{ $orderItem->nama }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Pesanan</th>
                            <td>{{ $orderItem->id }}</td>
                        </tr>
                        <tr>
                            <th>Type Pembayaran</th>
                            <td>{{ $orderItem->bayar }}</td>
                            @if ($orderItem->bukti)
                                <td><img src="{{ asset('storage/' . $orderItem->bukti) }}" width="35%"></td>
                            @else
                                
                            @endif
                        </tr>
                        <tr>
                            <th>Tanggal Pesanan</th>
                            <td>{{ $orderItem->created_at }}</td>
                        </tr>
                    </table>

                    <!-- Tabel item pesanan -->
                    <h2>Item Pesanan:</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderItem->orderItems as $item)
                                <tr>
                                    <td>{{ $item->nama_product }}</td>
                                    <td>Rp {{ $item->harga }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>Rp {{ $item->harga * $item->quantity }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>
                                    <form action="/dashboard/orders/{{ $orderItem->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-success" onclick="return confirm('Are You Sure?')">Konfirmasi
                                            Pensanan</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            @endforeach
        @else
            <div class="card">
                <p>Pesanan Anda tidak ditemukan.</p>
            </div>
        @endif
        {{ $order->links() }}

    </div>



@endsection
