<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class DashboardOrdersController extends Controller
{
    public function index()
    {
        $items = OrderItem::select('nama_product')
            ->selectRaw('SUM(quantity) as total_quantity')
            ->groupBy('nama_product')
            ->get();

        // dd($items);
        return view('orders.index', [
            'product' => Product::all(),
            'order' => Orders::all()
        ]);
    }

    public function laporan() {
        $items = OrderItem::select('nama_product')
            ->selectRaw('SUM(quantity) as total_quantity')
            ->groupBy('nama_product')
            ->get();

        // dd($items);
        return view('dashboard.laporan', compact('items'));
    }

    public function create()
    {
        $cart = session()->get('cart');
        if ($cart) {
            return view('orders.create');
        } else {
            return redirect('/')->with('error', 'Anda harus belanja terlebih dahulu!');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'nomor' => 'required'
        ]);

        $bukti = '';

        $cart = session()->get('cart');
        $total_price = 0;
        if($request->file('bukti')) {
            $bukti = $request->file('bukti')->store('bukti');
        }
        foreach ($cart as $id => $product) {
            $total_price += $product['harga'] * $product['quantity'];
        }

        try {
            $order = new Orders();
            $order->nama = $request->input('nama');
            $order->alamat = $request->input('alamat');
            $order->nomor = $request->input('nomor');
            $order->bayar = $request->input('bayar');
            $order->bukti = $bukti;

            $order->save();

            foreach ($cart as $id => $product) {
                $orderArt = new OrderItem();
                $orderArt->order_id = $order->id;
                $orderArt->nama_product = $product['nama_product'];
                $orderArt->quantity = $product['quantity'];
                $orderArt->harga = $product['harga'];
                $orderArt->save();
            }

            session()->forget('cart');

            return redirect()->route('iproduk')->with('success', 'Pesanan Anda berhasil disimpan');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['database' => 'Gagal menyimpan pesanan.']);
        }
    }

    public function show(Orders $order)
    {
        if ($order) {
            // Load the associated order items using eager loading
            $order->load('orderItems');

            return view('orders.show', compact('order'));
        } else {
            return redirect()->route('orders.index')->with('error', 'Pesanan Anda tidak ditemukan');
        }
    }
    
    public function destroy(Orders $order)
    {
        Orders::destroy($order->id);

        return redirect('/dashboard/orders')->with('success', 'Orders has been deleted!');
    }
}
