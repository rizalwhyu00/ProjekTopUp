@extends('layouts.appAdmin')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Tambah Game</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('game.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Game</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan nama game" required>
                    </div>
                    <div class="mb-3">
                        <label for="produk" class="form-label">Produk</label>
                        <input type="text" class="form-control" id="produk" name="produk"
                            placeholder="Masukkan jenis produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga"
                            placeholder="Masukkan harga produk" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('game.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
