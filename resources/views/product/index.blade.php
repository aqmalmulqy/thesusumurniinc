@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Product "The Susumurni Inc"</h2>
            <div>
                {{-- <a href="{{ route('admin.galleries.create') }}" class="btn btn-link text-light" style="background-color: #8C4660;">Tambah Karya</a>
                <a href="{{ route('galleries.index') }}" class="btn btn-light">Lihat Karya</a> --}}
            </div>
            <br>
            <div class="col">
                <a href="/admin/product/create" class="btn btn-primary"><i class="fa fa-cart-plus"> Tambah Product</i></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Product</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Susu Murni Rasa Original</th>
                            <th>10000</th>
                            <th>Minuman</th>
                            <th>
                                <button class="btn btn-info">
                                    <i class="fa fa-pen"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- @section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#admin_art').change(function() {
                window.location.href = 'galleries/?admin_id=' + $(this).val();
            });
        });
    </script>
@endsection --}}
@endsection