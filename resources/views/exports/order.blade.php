<table class=" table table-bordered table-striped table-hover datatable datatable-Laporan">
    <thead>
        <tr>
            <th width="10">
                NO
            </th>
            <th width='20'>
                Nama Produk
            </th>
            <th width='20'>
                Total Penjualan
            </th>
            <th width='20'>
                Tanggal
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order as $item)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $item->nama_product }}
                </td>
                <td>
                    {{ $item->total_quantity }}
                </td>
                <td>
                    {{ now() }}
                </td>
            </tr>
        @endforeach
    </tbody>
