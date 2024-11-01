<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::latest()->paginate(10);
        $i = request()->input('page', 1) - 1 * 10; // Menghitung indeks untuk nomor urut
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Categories::all(); // Ambil semua kategori
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'categories_id' => 'required|exists:categories,id' // Ganti 'category' dengan 'category_id'
        ]);

        // Buat produk baru
        Products::create($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(Products $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Products $product)
    {
        $categories = Categories::all(); // Ambil semua kategori
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Products $product)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'categories_id' => 'required|exists:categories,id' // Ganti 'category' dengan 'category_id'
        ]);

        // Perbarui produk
        $product->update($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Products $product)
    {
        // Hapus produk
        $product->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
