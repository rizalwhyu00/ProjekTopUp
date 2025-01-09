@extends('layouts.appAdmin')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Game</h5>
                <a href="{{ route('game.create') }}" class="btn btn-light btn-sm">Tambah Data</a>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered table-striped">
                    <thead class="bg-light">
                        <tr>
                            <th style="width: 5%;">#</th>
                            <th>Nama</th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($games as $index => $game)
                            <tr>
                                <td>{{ $games->firstItem() + $index }}</td>
                                <td>{{ $game->nama }}</td>
                                <td>{{ $game->produk }}</td>
                                <td>Rp{{ number_format($game->harga, 2, ',', '.') }}</td>
                                <td class="d-flex gap-2">
                                    <a href="{{ route('game.edit', $game->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('game.destroy', $game->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {{ $games->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
