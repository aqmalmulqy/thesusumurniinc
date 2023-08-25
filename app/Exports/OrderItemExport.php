<?php

namespace App\Exports;

use App\Invoice;
use App\Models\OrderItem;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OrderItemExport implements FromView
{
    public function view(): View
    {
        $order = OrderItem::select('nama_product')
            ->selectRaw('SUM(quantity) as total_quantity')
            ->whereDate('created_at', now())
            ->groupBy('nama_product')
            ->get();
        return view('exports.order', compact('order'));
    }
}
