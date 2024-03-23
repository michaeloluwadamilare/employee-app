<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\MenuList;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.addCategory');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'status' => 'required|in:Active,Inactive,Deactivate'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->status = $request->status;

        $category->save();

        return redirect()->route('category.create')->with('success', 'Category added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id
        ]);

        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();

        $menuItems = $category->menuLists;

        // Update status of each menu item
        foreach ($menuItems as $menuItem) {
            $menuItem->status = $request->status;
            $menuItem->save();
        }

        return redirect()->route('category.index')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $category = Category::findOrFail($id);
        $category->status = 'Deactivate';
        $category->save();

        $menuItems = $category->menuLists;

        foreach ($menuItems as $menuItem) {
            $menuItem->status = 'Deactivate';
            $menuItem->save();
        }

        return redirect()->route('category.index')->with('success', 'Category deleted successfully!');

    }
}
