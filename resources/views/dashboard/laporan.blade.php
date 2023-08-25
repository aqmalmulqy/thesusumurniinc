@extends('dashboard.layouts.main') <!-- Jika Anda menggunakan layout, sesuaikan dengan layout Anda -->

@section('container')
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h4>Laporan Perhari</h4>
        </div>
        <table class=" table table-bordered table-striped table-hover datatable datatable-Laporan">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        Nama Produk
                    </th>
                    <th>
                        Total Penjualan
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>

                        </td>
                        <td>
                            {{ $item->nama_product }}
                        </td>
                        <td>
                            {{ $item->total_quantity}}
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </div>
</div>



@endsection
