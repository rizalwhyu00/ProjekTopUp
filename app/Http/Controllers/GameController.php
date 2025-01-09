<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function mobileLegends()
    {
        $games = Game::whereRaw("LOWER(nama) = ?", ['mobile legends'])->paginate(10);
        return view('admin.top-up.mobileLegends', compact('games'));
    }

    public function freeFire()
    {
        $games = Game::whereRaw("LOWER(nama) = ?", ['free fire'])->paginate(10);
        return view('admin.top-up.mobileLegends', compact('games'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::paginate(10);
        return view('admin.top-up.mobileLegends', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form.CreateGame');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'produk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);

        Game::create($request->all());
        return redirect()->route('game.index')->with('success', 'Game berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = Game::findOrFail($id);
        return response()->json($game);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Game::findOrFail($id);
        return view('admin.form.UpdateGame', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'produk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);

        $game = Game::findOrFail($id);
        $game->update($request->all());

        return redirect()->route('game.index')->with('success', 'Game berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect()->route('game.index')->with('success', 'Game berhasil dihapus.');
    }
}
