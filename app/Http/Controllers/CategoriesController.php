<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Categories::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show(Categories $categories)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Categories $categories)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Categories $categories)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $categories->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Categories $categories)
    {
        $categories->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
