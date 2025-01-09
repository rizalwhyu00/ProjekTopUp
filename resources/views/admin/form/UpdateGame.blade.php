@extends('layouts.appAdmin')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Edit Game</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('game.update', $game->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Game</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $game->nama }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="produk" class="form-label">Produk</label>
                        <input type="text" class="form-control" id="produk" name="produk" value="{{ $game->produk }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $game->harga }}"
                            required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('game.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-warning">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
