@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <h2>Tambahkan Product</h2>
                <hr>

                <form action="/admin/product/store" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama Product</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Product">
                            @error('nama')
                                <div class="mt-2 text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="price">Harga</label>
                            <input type="number" name="price" id="price" class="form-control" placeholder="Harga">
                            @error('price')
                                <div class="mt-2 text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="kategory">Kategori</label>
                            <input type="text" name="kategory" id="kategory" class="form-control" placeholder="kategory Product">
                            @error('kategory')
                                <div class="mt-2 text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control-file" placeholder="foto">
                        @error('foto')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea name="desc" id="desc" class="form-control" placeholder="Deskripsi Karya"></textarea>
                        @error('desc')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    <button type="submit" class="btn btn-success">SUBMIT <i class="fa fa-plus"></i></button>
                    {{-- <a href="/admin/galleries?admin_id={{ Auth::user()->id }}" class="btn btn-danger">CANCEL <i class="fa fa-close"></i></a> --}}
                </form>
            </div>
        </div>
    </div>
{{-- @endsection
@section('script')
<script src="{{ asset("tinymce/js/tinymce/jquery.tinymce.min.js") }}"></script>
<script src="{{ asset("tinymce/js/tinymce/tinymce.min.js") }}"></script>
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>    
@endsection --}}
@endsection